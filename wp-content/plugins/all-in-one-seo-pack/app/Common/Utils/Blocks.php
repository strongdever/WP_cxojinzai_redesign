<?php
namespace AIOSEO\Plugin\Common\Utils;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block helpers.
 *
 * @since 4.1.1
 */
class Blocks {
	/**
	 * Class constructor.
	 *
	 * @since 4.1.1
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'init' ] );
	}

	/**
	 * Initializes our blocks.
	 *
	 * @since 4.1.1
	 *
	 * @return void
	 */
	public function init() {
		add_action( 'enqueue_block_editor_assets', [ $this, 'registerBlockEditorAssets' ] );
	}

	/**
	 * Registers the block type with WordPress.
	 *
	 * @since 4.2.1
	 *
	 * @param  string               $slug Block type name including namespace.
	 * @param  array                $args Array of block type arguments with additional 'wp_min_version' arg.
	 * @return \WP_Block_Type|false       The registered block type on success, or false on failure.
	 */
	public function registerBlock( $slug = '', $args = [] ) {
		global $wp_version;

		if ( ! strpos( $slug, '/' ) ) {
			$slug = 'aioseo/' . $slug;
		}

		if ( ! $this->isBlockEditorActive() ) {
			return false;
		}

		// Check if the block requires a minimum WP version.
		if ( ! empty( $args['wp_min_version'] ) && version_compare( $wp_version, $args['wp_min_version'], '>' ) ) {
			return false;
		}

		// Checking whether block is registered to ensure it isn't registered twice.
		if ( $this->isRegistered( $slug ) ) {
			return false;
		}

		$defaults = [
			'render_callback' => null,
			'editor_script'   => aioseo()->core->assets->jsHandle( 'src/vue/standalone/blocks/main.js' ),
			'editor_style'    => aioseo()->core->assets->cssHandle( 'src/vue/assets/scss/blocks-editor.scss' ),
			'attributes'      => null,
			'supports'        => null
		];

		$args = wp_parse_args( $args, $defaults );

		return register_block_type( $slug, $args ); // phpcs:ignore AIOSEO.WpFunctionUse.NewFunctions.register_block_typeFound
	}

	/**
	 * Registers Gutenberg editor assets.
	 *
	 * @since 4.2.1
	 *
	 * @return void
	 */
	public function registerBlockEditorAssets() {
		$postSettingJsAsset = 'src/vue/standalone/post-settings/main.js';
		if (
			aioseo()->helpers->isScreenBase( 'widgets' ) ||
			aioseo()->helpers->isScreenBase( 'customize' )
		) {
			/**
			 * Make sure the post settings JS asset is registered before adding it as a dependency below.
			 * This is needed because this asset is not loaded on widgets and customizer screens,
			 * {@see \AIOSEO\Plugin\Common\Admin\PostSettings::enqueuePostSettingsAssets}.
			 *
			 */
			aioseo()->core->assets->load( $postSettingJsAsset, [], aioseo()->helpers->getVueData() );
		}

		aioseo()->core->assets->loadCss( 'src/vue/standalone/blocks/main.js' );

		$dependencies = [
			'wp-blocks',
			'wp-components',
			'wp-element',
			'wp-i18n',
			'wp-data',
			'wp-url',
			'wp-polyfill',
			aioseo()->core->assets->jsHandle( $postSettingJsAsset )
		];

		global $wp_version;
		if ( version_compare( $wp_version, '5.2', '>=' ) ) {
			$dependencies[] = 'wp-block-editor';
		}

		aioseo()->core->assets->enqueueJs( 'src/vue/standalone/blocks/main.js', $dependencies );
		aioseo()->core->assets->registerCss( 'src/vue/assets/scss/blocks-editor.scss' );
	}

	/**
	 * Check if a block is already registered.
	 *
	 * @since 4.2.1
	 *
	 * @param string $slug Name of block to check.
	 *
	 * @return bool
	 */
	public function isRegistered( $slug ) {
		if ( ! class_exists( 'WP_Block_Type_Registry' ) ) {
			return false;
		}

		return \WP_Block_Type_Registry::get_instance()->is_registered( $slug );
	}

	/**
	 * Helper function to determine if we're rendering the block inside Gutenberg.
	 *
	 * @since 4.1.1
	 *
	 * @return bool In gutenberg.
	 */
	public function isGBEditor() {
		return defined( 'REST_REQUEST' ) && REST_REQUEST && ! empty( $_REQUEST['context'] ) && 'edit' === $_REQUEST['context']; // phpcs:ignore HM.Security.NonceVerification.Recommended
	}

	/**
	 * Helper function to determine if we can register blocks.
	 *
	 * @since 4.1.1
	 *
	 * @return bool Can register block.
	 */
	public function isBlockEditorActive() {
		return function_exists( 'register_block_type' );
	}
}