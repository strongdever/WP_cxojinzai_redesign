<?php
/**
 * @package mw-wp-form
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * MW_WP_Form_Contact_Data_Setting
 */
class MW_WP_Form_Contact_Data_Setting {

	/**
	 * Inquiry data ID.
	 *
	 * @var int
	 */
	protected $post_id;

	/**
	 * Array of posted data.
	 *
	 * @var array
	 */
	protected $options = array();

	/**
	 * Status of inquiry data.
	 *
	 * @var string not-supported|reservation|supported
	 */
	protected $response_status = 'not-supported';

	/**
	 * Sended mail to.
	 *
	 * @var string
	 */
	protected $admin_mail_to;

	/**
	 * Memo.
	 *
	 * @var string
	 */
	protected $memo = '';

	/**
	 * Constructor.
	 *
	 * @param int $post_id Post ID.
	 */
	public function __construct( $post_id ) {
		if ( ! MWF_Functions::is_contact_data_post_type( get_post_type( $post_id ) ) ) {
			return;
		}

		$this->post_id = $post_id;

		$post_custom = get_post_custom( $post_id );
		$post_meta   = array();
		foreach ( $post_custom as $key => $value ) {
			if ( preg_match( '/^_/', $key ) ) {
				continue;
			}
			$post_meta[ $key ] = $value[0];
		}

		$permit_values = get_post_meta( $this->post_id, MWF_config::INQUIRY_DATA_NAME, true );
		if ( ! $permit_values ) {
			$permit_values = array();
		}

		$values = array_merge( $post_meta, $permit_values );
		if ( is_array( $values ) ) {
			$this->sets( $values );
		}
	}

	/**
	 * Return statuses.
	 *
	 * @return array
	 */
	public function get_response_statuses() {
		$contact_data_post_type = get_post_type( $this->post_id );

		$response_statuses = array(
			'not-supported' => esc_html__( 'Not supported', 'mw-wp-form' ),
			'reservation'   => esc_html__( 'Reservation', 'mw-wp-form' ),
			'supported'     => esc_html__( 'Supported', 'mw-wp-form' ),
		);

		return apply_filters( 'mwform_response_statuses_' . $contact_data_post_type, $response_statuses );
	}

	/**
	 * Return updatable keys.
	 *
	 * @return array
	 */
	public function get_permit_keys() {
		$vars = get_object_vars( $this );
		unset( $vars['post_id'] );
		unset( $vars['options'] );
		return array_keys( $vars );
	}

	/**
	 * Return all data.
	 *
	 * @return array
	 */
	public function gets() {
		$options     = $this->options;
		$permit_keys = $this->get_permit_keys();
		foreach ( $permit_keys as $permit_key ) {
			$options[ $permit_key ] = $this->$permit_key;
		}
		return $options;
	}

	/**
	 * Return specify data.
	 *
	 * @param string $key Meta data name.
	 * @return mixed|null
	 */
	public function get( $key ) {
		$vars = get_object_vars( $this );
		unset( $vars['options'] );
		$attributes = array_keys( $vars );

		if ( in_array( $key, $attributes, true ) ) {
			if ( 'response_status' === $key ) {
				$response_statuses = $this->get_response_statuses();
				if ( isset( $response_statuses[ $this->response_status ] ) ) {
					return $this->$key;
				}
			} elseif ( 'admin_mail_to' === $key ) {
				return $this->$key;
			}
			return $this->$key;
		} elseif ( isset( $this->options[ $key ] ) ) {
			return $this->options[ $key ];
		}
	}

	/**
	 * Set a option.
	 *
	 * @param string $key   Meta data name.
	 * @param mixed  $value Value.
	 */
	public function set( $key, $value ) {
		$permit_keys = $this->get_permit_keys();
		if ( ! in_array( $key, $permit_keys, true ) ) {
			$this->options[ $key ] = $value;
			return;
		}

		if ( 'response_status' === $key ) {
			if ( array_key_exists( $value, $this->get_response_statuses() ) ) {
				$this->$key = $value;
				return;
			}
		} elseif ( 'admin_mail_to' === $key ) {
			$this->$key = $value;
		} elseif ( 'memo' === $key ) {
			$this->$key = $value;
		}
	}

	/**
	 * Set options.
	 *
	 * @param array $values Values.
	 */
	public function sets( array $values ) {
		foreach ( $values as $key => $value ) {
			$this->set( $key, $value );
		}
	}

	/**
	 * Save values of permit keys and options.
	 */
	public function save() {
		$permit_keys   = $this->get_permit_keys();
		$permit_values = array();
		foreach ( $permit_keys as $key ) {
			$permit_values[ $key ] = $this->$key;
		}
		update_post_meta( $this->post_id, MWF_config::INQUIRY_DATA_NAME, $permit_values );

		foreach ( $this->options as $key => $value ) {
			if ( is_null( $value ) ) {
				$value = '';
			}
			update_post_meta( $this->post_id, $key, $value );
		}

		$contact_data_post_type = get_post_type( $this->post_id );
		do_action( 'mwform_contact_data_save-' . $contact_data_post_type, $this->post_id );
	}

	/**
	 * Return post types of inquiry data.
	 *
	 * @return array
	 */
	public static function get_form_post_types() {
		$contact_data_post_types = array();
		$Admin                   = new MW_WP_Form_Admin();
		$forms                   = $Admin->get_forms_using_database();
		foreach ( $forms as $form ) {
			$post_type                 = MWF_Functions::get_contact_data_post_type_from_form_id( $form->ID );
			$contact_data_post_types[] = $post_type;
		}

		$raw_post_types          = $contact_data_post_types;
		$new_post_types          = array();
		$contact_data_post_types = apply_filters(
			'mwform_contact_data_post_types',
			$contact_data_post_types
		);

		// もともとの配列に含まれていない値は削除する
		foreach ( $contact_data_post_types as $post_type ) {
			if ( in_array( $post_type, $raw_post_types, true ) ) {
				$new_post_types[] = $post_type;
			}
		}

		return $new_post_types;
	}

	/**
	 * Return post types of inquiry data.
	 *
	 * @deprecated
	 *
	 * @return array
	 */
	public static function get_posts() {
		MWF_Functions::deprecated_message(
			'MW_WP_Form_Contact_Data_Setting::get_posts()',
			'MW_WP_Form_Contact_Data_Setting::get_form_post_types()'
		);

		return self::get_form_post_types();
	}

	/**
	 * Return true if $meta_key is upload_file_key.
	 *
	 * @param string $meta_key Meta data name.
	 * @return bool
	 */
	public function is_upload_file_key( $meta_key ) {
		$upload_file_keys = $this->_get_upload_file_keys();
		return ( is_array( $upload_file_keys ) && in_array( $meta_key, $upload_file_keys, true ) );
	}

	/**
	 * Return index when $meta_key is included in upload_file_key.
	 *
	 * @param string $meta_key Meta data name.
	 * @return int|false
	 */
	public function get_index_of_key_in_upload_file_keys( $meta_key ) {
		$upload_file_keys = $this->_get_upload_file_keys();
		if ( is_array( $upload_file_keys ) ) {
			return array_search( $meta_key, $upload_file_keys, true );
		}
		return false;
	}

	/**
	 * Return the upload_file_key that the post has.
	 *
	 * @return array
	 */
	protected function _get_upload_file_keys() {
		// 前のバージョンでは MWF_Config::UPLOAD_FILE_KEYS を配列で保持していなかったので分岐させる
		$_upload_file_keys = get_post_meta( $this->post_id, '_' . MWF_Config::UPLOAD_FILE_KEYS, true );
		if ( is_array( $_upload_file_keys ) ) {
			$upload_file_keys = $_upload_file_keys;
		} else {
			$upload_file_keys = get_post_custom_values( '_' . MWF_Config::UPLOAD_FILE_KEYS, $this->post_id );
		}
		return $upload_file_keys;
	}
}
