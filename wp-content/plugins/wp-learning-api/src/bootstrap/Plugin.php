<?php
namespace WpLearningApi\Bootstrap;

use WpLearningApi\Core\Init;

class Plugin {
    public static function run(): void {
        add_action('plugins_loaded', function () {
            Init::run();
        });
    }
}
