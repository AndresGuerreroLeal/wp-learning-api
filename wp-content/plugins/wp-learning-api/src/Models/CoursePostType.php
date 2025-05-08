<?php
namespace WpLearningApi\Models;

class CoursePostType {
    public static function register(): void {
        register_post_type('curso', [
            'labels' => [
                'name' => 'Cursos',
                'singular_name' => 'Curso',
            ],
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail'],
            'menu_position' => 5,
            'menu_icon' => 'dashicons-welcome-learn-more',
        ]);
    }
}
