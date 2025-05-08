<?php
namespace WpLearningApi\Endpoints;

use WP_REST_Request;
use WP_REST_Response;

class CourseEndpoint {
    public static function register_routes(): void {
        register_rest_route('wp-learning-api/v1', '/courses', [
            'methods' => 'GET',
            'callback' => [self::class, 'get_courses'],
            'permission_callback' => '__return_true',
        ]);
    }

    public static function get_courses(WP_REST_Request $request): WP_REST_Response {
        return new WP_REST_Response([
            'status' => 'success',
            'message' => 'Cursos obtenidos correctamente.',
            'data' => [
                ['id' => 1, 'title' => 'Curso WordPress'],
                ['id' => 2, 'title' => 'Curso PHP'],
            ]
        ], 200);
    }
}
