<?php
/**
 * Plugin Name: WP Basic Authentication
 * Plugin URI:        https://wordpress.org/plugins/wp-basic-authentication/
 * Description: Basic Authentication for protected your development WordPress site like .htpasswd
 * Version:           1.0.2
 * Requires at least: 4.7
 * Requires PHP:      7.0
 * Tested up to:      6.1.1
 * Author:            NuttTaro
 * Author URI:        https://nutttaro.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-basic-authentication
 * Domain Path:       /languages
 */

// Define constants.
define('WPBA_PATH', plugin_dir_path(__FILE__));
define('WPBA_BASENAME', plugin_basename(__FILE__));
define('WPBA_PLUGIN_URL', plugin_dir_url(__FILE__));
define('WPBA_VERSION', '1.0.2');

/**
 * Class WPBA_Basic_Authentication
 */
class WPBA_Basic_Authentication
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
        register_activation_hook(__FILE__, [$this, 'set_default_options']);

        $this->options = get_option('wpba_auth_settings');

        if (is_admin()) {
            require 'inc/class-wpba-setting.php';
            new WPBA_Setting();
        } else {

            $enable_login = $this->options['enable_login'] ?? 0;

            if ($enable_login && $this->is_login_page()) {
                add_action('init', [$this, 'basic_auth_handler'], 1);
            } elseif (!$this->is_login_page()) {
                add_action('init', [$this, 'basic_auth_handler'], 1);
            }

        }
    }

    /**
     * Basic auth handler
     */
    public function basic_auth_handler()
    {

        $enable = $this->options['enable'] ?? 0;
        $username = $this->options['username'] ?? '';
        $password = $this->options['password'] ?? '';

        if ($enable && $username) {

            $AUTH_USER = $username;
            $AUTH_PASS = $password;
            header('Cache-Control: no-cache, must-revalidate, max-age=0');
            $has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
            $is_not_authenticated = (
                !$has_supplied_credentials ||
                $_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
                $_SERVER['PHP_AUTH_PW'] != $AUTH_PASS
            );
            if ($is_not_authenticated) {
                header('HTTP/1.1 401 Authorization Required');
                header('WWW-Authenticate: Basic realm="Access denied"');
                exit;
            }

        }
    }

    /**
     * Check login page
     *
     * @return bool
     */
    private function is_login_page()
    {

        if (isset($GLOBALS['pagenow'])) {
            return in_array($GLOBALS['pagenow'], ['wp-login.php', 'wp-register.php']);
        }

        return false;
    }


    /**
     * Set default options
     */
    public function set_default_options()
    {
        $this->options = [
            'enable'       => 0,
            'username'     => '',
            'password'     => '',
            'enable_login' => 0,
        ];

        update_option('wpba_auth_settings', $this->options);
    }

}

new WPBA_Basic_Authentication();
