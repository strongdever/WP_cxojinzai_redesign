<?php
/**
 * @package mw-wp-form
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * MW_WP_Form_Field_Hidden
 */
class MW_WP_Form_Field_Hidden extends MW_WP_Form_Abstract_Form_Field {

	/**
	 * Set shortcode_name and display_name.
	 * Overwrite required for each child class.
	 *
	 * @return array
	 */
	protected function set_names() {
		return array(
			'shortcode_name' => 'mwform_hidden',
			'display_name'   => __( 'Hidden', 'mw-wp-form' ),
		);
	}

	/**
	 * Set default attributes.
	 *
	 * @return array
	 */
	protected function set_defaults() {
		return array(
			'name'  => '',
			'value' => '',
			'echo'  => 'false',
		);
	}

	/**
	 * Callback of add shortcode for input page.
	 *
	 * @return string
	 */
	protected function input_page() {
		$value = $this->Data->get_raw( $this->atts['name'] );
		if ( is_null( $value ) ) {
			$value = $this->atts['value'];
		}

		$echo = '';
		if ( 'true' === $this->atts['echo'] ) {
			$echo = $value;
		}
		return esc_html( $echo ) . $this->Form->hidden( $this->atts['name'], $value );
	}

	/**
	 * Callback of add shortcode for confirm page.
	 *
	 * @return string
	 */
	protected function confirm_page() {
		$value = $this->Data->get_raw( $this->atts['name'] );
		$echo  = '';
		if ( 'true' === $this->atts['echo'] ) {
			$echo = $value;
		}
		return esc_html( $echo ) . $this->Form->hidden( $this->atts['name'], $value );
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
			<strong>name<span class="mwf_require">*</span></strong>
			<?php $name = $this->get_value_for_generator( 'name', $options ); ?>
			<input type="text" name="name" value="<?php echo esc_attr( $name ); ?>" />
		</p>
		<p>
			<strong><?php esc_html_e( 'Default value', 'mw-wp-form' ); ?></strong>
			<?php $value = $this->get_value_for_generator( 'value', $options ); ?>
			<input type="text" name="value" value="<?php echo esc_attr( $value ); ?>" />
		</p>
		<p>
			<strong><?php esc_html_e( 'Display', 'mw-wp-form' ); ?></strong>
			<?php $echo = $this->get_value_for_generator( 'echo', $options ); ?>
			<input type="checkbox" name="echo" value="true" <?php checked( 'true', $echo ); ?> /> <?php esc_html_e( 'Display hidden value.', 'mw-wp-form' ); ?>
		</p>
		<?php
	}
}
