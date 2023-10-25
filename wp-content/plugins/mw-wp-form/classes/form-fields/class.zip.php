<?php
/**
 * @package mw-wp-form
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * MW_WP_Form_Field_Zip
 */
class MW_WP_Form_Field_Zip extends MW_WP_Form_Abstract_Form_Field {

	/**
	 * Types of form type.
	 * input|select|button|input_button|error|other.
	 *
	 * @var string
	 */
	public $type = 'input';

	/**
	 * Set shortcode_name and display_name.
	 * Overwrite required for each child class.
	 *
	 * @return array
	 */
	protected function set_names() {
		return array(
			'shortcode_name' => 'mwform_zip',
			'display_name'   => __( 'Zip Code', 'mw-wp-form' ),
		);
	}

	/**
	 * Set default attributes.
	 *
	 * @return array
	 */
	protected function set_defaults() {
		return array(
			'name'                   => '',
			'class'                  => null,
			'value'                  => '',
			'show_error'             => 'true',
			'conv_half_alphanumeric' => 'true',
		);
	}

	/**
	 * Callback of add shortcode for input page.
	 *
	 * @return string
	 */
	protected function input_page() {
		$value = $this->Data->get_raw( $this->atts['name'] );
		if ( is_array( $value ) && isset( $value['data'] ) ) {
			$value = $value['data'];
		}
		if ( is_null( $value ) ) {
			$value = $this->atts['value'];
		}
		$conv_half_alphanumeric = 'true';
		if ( 'true' !== $this->atts['conv_half_alphanumeric'] ) {
			$conv_half_alphanumeric = null;
		}
		$_ret = $this->Form->zip(
			$this->atts['name'],
			array(
				'class'                  => $this->atts['class'],
				'conv-half-alphanumeric' => $conv_half_alphanumeric,
				'value'                  => $value,
			)
		);
		if ( 'false' !== $this->atts['show_error'] ) {
			$_ret .= $this->get_error( $this->atts['name'] );
		}
		return $_ret;
	}

	/**
	 * Callback of add shortcode for confirm page.
	 *
	 * @return string
	 */
	protected function confirm_page() {
		$value     = $this->Data->get( $this->atts['name'] );
		$separator = $this->Data->get_separator_value( $this->atts['name'] );
		$_ret      = esc_html( $value );
		$_ret     .= $this->Form->hidden( $this->atts['name'] . '[data]', $value );
		$_ret     .= $this->Form->separator( $this->atts['name'], $separator );
		return $_ret;
	}

	/**
	 * Display tag generator dialog.
	 * Overwrite required for each child class.
	 *
	 * @param array $options Options.
	 */
	public function mwform_tag_generator_dialog( array $options = array() ) {
		?>
		<p>
			<strong>name</strong>
			<?php $name = $this->get_value_for_generator( 'name', $options ); ?>
			<input type="text" name="name" value="<?php echo esc_attr( $name ); ?>" />
		</p>
		<p>
			<strong>class</strong>
			<?php $class = $this->get_value_for_generator( 'class', $options ); ?>
			<input type="text" name="class" value="<?php echo esc_attr( $class ); ?>" />
		</p>
		<p>
			<strong><?php esc_html_e( 'Display error', 'mw-wp-form' ); ?></strong>
			<?php $show_error = $this->get_value_for_generator( 'show_error', $options ); ?>
			<label><input type="checkbox" name="show_error" value="false" <?php checked( 'false', $show_error ); ?> /> <?php esc_html_e( 'Don\'t display error.', 'mw-wp-form' ); ?></label>
		</p>
		<p>
			<strong><?php esc_html_e( 'Convert half alphanumeric', 'mw-wp-form' ); ?></strong>
			<?php $conv_half_alphanumeric = $this->get_value_for_generator( 'conv_half_alphanumeric', $options ); ?>
			<label><input type="checkbox" name="conv_half_alphanumeric" value="false" <?php checked( 'false', $conv_half_alphanumeric ); ?> /> <?php esc_html_e( 'Don\'t Convert.', 'mw-wp-form' ); ?></label>
		</p>
		<?php
	}

	/**
	 * This form field is for Japanese environments only.
	 *
	 * @param array $form_fields Array of MW_WP_Form_Abstract_Form_Field.
	 * @return array
	 */
	public function _mwform_form_fields( array $form_fields ) {
		$form_fields = parent::_mwform_form_fields( $form_fields );

		if ( 'ja' === get_locale() ) {
			return $form_fields;
		}

		unset( $form_fields[ $this->get_shortcode_name() ] );
		return $form_fields;
	}
}
