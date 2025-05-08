<?php
namespace WpLearningApi\Core;

use WpLearningApi\Admin\SettingsPage;

use WpLearningApi\Models\CourseFields;
use WpLearningApi\Models\CoursePostType;

use WpLearningApi\Endpoints\CourseEndpoint;
use WpLearningApi\Endpoints\UserEndpoint;

class Init {
    public static function run(): void {

        add_action('admin_menu', [SettingsPage::class, 'register']);

        add_action('init', [CoursePostType::class, 'register']);
        add_action('acf/init', [CourseFields::class, 'register']);
   
        add_action('rest_api_init', function () {
            CourseEndpoint::register_routes();
            UserEndpoint::register_routes();
        });
    }
}
