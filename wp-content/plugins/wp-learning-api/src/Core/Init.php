<?php
namespace WpLearningApi\Core;

use WpLearningApi\Endpoints\CourseEndpoint;
use WpLearningApi\Endpoints\UserEndpoint;

class Init {
    public static function run(): void {
        add_action('rest_api_init', function () {
            CourseEndpoint::register_routes();
            UserEndpoint::register_routes();
        });
    }
}
