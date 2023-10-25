<?php
/**
 * @package mw-wp-form
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * MW_WP_Form_Field_Monthpicker
 */
class MW_WP_Form_Field_Monthpicker extends MW_WP_Form_Abstract_Form_Field {

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
			'shortcode_name' => 'mwform_monthpicker',
			'display_name'   => __( 'Monthpicker', 'mw-wp-form' ),
		);
	}

	/**
	 * Set default attributes.
	 *
	 * @return array
	 */
	protected function set_defaults() {
		return array(
			'name'        => '',
			'id'          => null,
			'class'       => null,
			'size'        => 30,
			'js'          => '',
			'value'       => '',
			'placeholder' => null,
			'show_error'  => 'true',
		);
	}

	/**
	 * Callback of add shortcode for input page.
	 *
	 * @return string
	 */
	protected function input_page() {
		global $wp_scripts;
		$ui = $wp_scripts->query( 'jquery-ui-core' );
		wp_enqueue_style(
			'jquery.ui',
			'//ajax.googleapis.com/ajax/libs/jqueryui/' . $ui->ver . '/themes/smoothness/jquery-ui.min.css',
			array(),
			$ui->ver
		);

		wp_enqueue_style(
			'jquery-ui-monthpicker',
			untrailingslashit( plugin_dir_url( 'mw-wp-form/mw-wp-form.php' ) ) . '/js/jquery-ui-month-picker/MonthPicker.min.css',
			array(),
			$ui->ver
		);

		wp_enqueue_script(
			'jquery-ui-monthpicker',
			untrailingslashit( plugin_dir_url( 'mw-wp-form/mw-wp-form.php' ) ) . '/js/jquery-ui-month-picker/MonthPicker.min.js',
			array( 'jquery', 'jquery-ui-button', 'jquery-ui-datepicker' ),
			$ui->ver,
			true
		);

		$Json_Parser      = new MW_WP_Form_Json_Parser( $this->atts['js'] );
		$this->atts['js'] = $Json_Parser->create_json();
		$js               = json_decode( $this->atts['js'], true );

		$js = array_merge(
			$js,
			array(
				'Button' => 'false',
			)
		);

		$translate_monthpicker = apply_filters( 'mwform_translate_monthpicker_' . $this->form_key, true );
		if ( $translate_monthpicker && 'ja' === get_locale() ) {
			$js = array_merge(
				array(
					'i18n'        => array(
						'year'   => '',
						'months' => array( '1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月' ),
					),
					'MonthFormat' => 'yy年mm月',
				),
				$js
			);
		}

		$this->atts['js'] = json_encode( $js );

		$value = $this->Data->get_raw( $this->atts['name'] );
		if ( is_null( $value ) ) {
			$value = $this->atts['value'];
		}

		$_ret  = '';
		$_ret .= $this->Form->monthpicker(
			$this->atts['name'],
			array(
				'id'          => $this->atts['id'],
				'class'       => $this->atts['class'],
				'size'        => $this->atts['size'],
				'js'          => $this->atts['js'],
				'value'       => $value,
				'placeholder' => $this->atts['placeholder'],
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
		$value = $this->Data->get_raw( $this->atts['name'] );
		$_ret  = esc_html( $value );
		$_ret .= $this->Form->hidden( $this->atts['name'], $value );
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
			<strong>name<span class="mwf_require">*</span></strong>
			<?php $name = $this->get_value_for_generator( 'name', $options ); ?>
			<input type="text" name="name" value="<?php echo esc_attr( $name ); ?>" />
		</p>
		<p>
			<strong>id</strong>
			<?php $id = $this->get_value_for_generator( 'id', $options ); ?>
			<input type="text" name="id" value="<?php echo esc_attr( $id ); ?>" />
		</p>
		<p>
			<strong>class</strong>
			<?php $class = $this->get_value_for_generator( 'class', $options ); ?>
			<input type="text" name="class" value="<?php echo esc_attr( $class ); ?>" />
		</p>
		<p>
			<strong>size</strong>
			<?php $size = $this->get_value_for_generator( 'size', $options ); ?>
			<input type="text" name="size" value="<?php echo esc_attr( $size ); ?>" />
		</p>
		<p>
			<strong>JavaScript</strong>
			<?php $js = $this->get_value_for_generator( 'js', $options ); ?>
			<input type="text" name="js" value="<?php echo esc_attr( $js ); ?>" />
		</p>
		<p>
			<strong><?php esc_html_e( 'Default value', 'mw-wp-form' ); ?></strong>
			<?php $value = $this->get_value_for_generator( 'value', $options ); ?>
			<input type="text" name="value" value="<?php echo esc_attr( $value ); ?>" />
		</p>
		<p>
			<strong>placeholder</strong>
			<?php $placeholder = $this->get_value_for_generator( 'placeholder', $options ); ?>
			<input type="text" name="placeholder" value="<?php echo esc_attr( $placeholder ); ?>" />
		</p>
		<p>
			<strong><?php esc_html_e( 'Display error', 'mw-wp-form' ); ?></strong>
			<?php $show_error = $this->get_value_for_generator( 'show_error', $options ); ?>
			<label><input type="checkbox" name="show_error" value="false" <?php checked( 'false', $show_error ); ?> /> <?php esc_html_e( 'Don\'t display error.', 'mw-wp-form' ); ?></label>
		</p>
		<?php
	}
}
