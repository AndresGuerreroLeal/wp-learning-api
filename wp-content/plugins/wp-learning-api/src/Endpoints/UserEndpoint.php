<?php
namespace WpLearningApi\Endpoints;

use WP_REST_Request;
use WP_REST_Response;
use WP_User;

class UserEndpoint {
    public static function register_routes(): void {
        register_rest_route('wp-learning-api/v1', '/users/current', [
            'methods' => 'GET',
            'callback' => [self::class, 'get_current_user'],
            'permission_callback' => function () {
                return is_user_logged_in();
            }
        ]);
    }

    public static function get_current_user(WP_REST_Request $request): WP_REST_Response {
        $user = wp_get_current_user();

        if (!$user || $user->ID === 0) {
            return new WP_REST_Response([
                'status' => 'error',
                'message' => 'No hay usuario autenticado.',
                'data' => null
            ], 401);
        }

        return new WP_REST_Response([
            'status' => 'success',
            'message' => 'Usuario autenticado.',
            'data' => [
                'id' => $user->ID,
                'email' => $user->user_email,
                'name' => $user->display_name,
                'roles' => $user->roles,
            ]
        ], 200);
    }
}
