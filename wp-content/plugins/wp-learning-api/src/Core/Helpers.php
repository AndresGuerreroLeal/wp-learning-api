<?php
namespace WpLearningApi\Core;

class Helpers {
    public static function json_response(string $message, $data = [], string $status = 'success', int $code = 200) {
        return new \WP_REST_Response([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
