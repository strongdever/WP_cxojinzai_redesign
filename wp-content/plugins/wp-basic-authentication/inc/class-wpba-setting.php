<?php

/**
 * Class WPBA_Setting
 */
class WPBA_Setting
{
    /**
     * Array of custom settings/options
     **/
    private $options;

    /**
     * Constructor
     */
    public function __construct()
    {
        add_action('admin_menu', [$this, 'add_settings_page']);
        add_action('admin_init', [$this, 'page_init']);
    }

    /**
     * Add settings page
     * The page will appear in Admin menu
     */
    public function add_settings_page()
    {
        add_menu_page(
            __('Basic Authentication Settings', 'wp-basic-authentication'), // Page title
            __('Authentication', 'wp-basic-authentication'), // Title
            'edit_pages', // Capability
            'wpba-auth-settings-page', // Url slug
            [$this, 'create_admin_page'], // Callback
            'dashicons-privacy'
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option('wpba_auth_settings');

        ?>
        <div class="wrap">
            <form method="post" action="options.php">
                <?php
                // This prints out all hidden setting fields
                settings_fields('wpba_auth_settings_group');
                do_settings_sections('wpba-auth-settings-page');
                submit_button();
                ?>
            </form>
        </div>
		<hr>
		<script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Tip Me on Ko-fi', '#29abe0', 'J3J6HM43W');kofiwidget2.draw();</script>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {
        register_setting(
            'wpba_auth_settings_group', // Option group
            'wpba_auth_settings', // Option name
            [$this, 'sanitize'] // Sanitize
        );

        add_settings_section(
            'wpba_auth_settings_section', // ID
            __('Basic HTTP Authentication', 'wp-basic-authentication'), // Title
            [$this, 'wpba_auth_settings_section'], // Callback
            'wpba-auth-settings-page' // Page
        );

        add_settings_field(
            'enable', // ID
            __('Enable', 'wp-basic-authentication'), // Title
            [$this, 'enable_field'], // Callback
            'wpba-auth-settings-page', // Page
            'wpba_auth_settings_section'
        );

        add_settings_field(
            'username', // ID
            __('Username', 'wp-basic-authentication'), // Title
            [$this, 'username_field'], // Callback
            'wpba-auth-settings-page', // Page
            'wpba_auth_settings_section'
        );

        add_settings_field(
            'password',
            __('Password', 'wp-basic-authentication'),
            [$this, 'password_field'],
            'wpba-auth-settings-page',
            'wpba_auth_settings_section'
        );

        add_settings_field(
            'enable_login', // ID
            __('Enable for Login page', 'wp-basic-authentication'), // Title
            [$this, 'enable_login_field'], // Callback
            'wpba-auth-settings-page', // Page
            'wpba_auth_settings_section'
        );

    }

    /**
     * Sanitize POST data from custom settings form
     *
     * @param array $input Contains custom settings which are passed when saving the form
     * @return array
     */
    public function sanitize(array $input)
    {
        $sanitized_input = [
            'enable'          => 0,
            'username'        => '',
            'password'        => '',
            'enable_login'    => 0,
        ];

        $sanitized_input = array_merge($sanitized_input, $input);

        return $sanitized_input;
    }

    /**
     * Custom settings section text
     */
    public function wpba_auth_settings_section()
    {

    }

    public function enable_field()
    {
        echo '<input type="checkbox" id="enable" name="wpba_auth_settings[enable]" value="1" ' . checked($this->options['enable'], 1, false) . ' />';
        echo ' ' . __('Enable authentication for Front-End', 'wp-basic-authentication');
    }

    public function username_field()
    {
        printf(
            '<input type="text" id="username" name="wpba_auth_settings[username]" value="%s" />',
            isset($this->options['username']) ? esc_attr($this->options['username']) : ''
        );
    }

    public function password_field()
    {
        printf(
            '<input type="password" id="password" name="wpba_auth_settings[password]" value="%s" />',
            isset($this->options['password']) ? esc_attr($this->options['password']) : ''
        );
    }

    public function enable_login_field()
    {
        echo '<input type="checkbox" id="enable_login" name="wpba_auth_settings[enable_login]" value="1" ' . checked($this->options['enable_login'], 1, false) . ' />';
        printf('<p class="description" id="enable_login-description">' . __('<strong>Warning</strong>: If enable basic authentication for login page and forgot password, please see <a href="%s" target="_blank">FAQs in plugin page</a>', 'wp-basic-authentication') . '</p>', 'https://wordpress.org/plugins/wp-basic-authentication/#faq');
    }
}
