<?php
namespace WpLearningApi\Bootstrap;

use WpLearningApi\Core\Init;

class Plugin {
    public static function run(): void {
        if (!function_exists('get_field')) {
            add_action('admin_notices', [self::class, 'acf_missing_notice']);
            return;
        }

        add_action('plugins_loaded', function () {
            Init::run();
        });
    }

    public static function acf_missing_notice(): void {
        echo '<div class="notice notice-error"><p><strong>WP Learning API:</strong> This plugin requires <a href="https://wordpress.org/plugins/advanced-custom-fields/" target="_blank">Advanced Custom Fields</a> to be installed and active.</p></div>';
    }
}
