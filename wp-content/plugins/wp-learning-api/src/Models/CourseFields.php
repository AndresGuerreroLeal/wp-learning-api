<?php
namespace WpLearningApi\Models;

class CourseFields {
    public static function register(): void {

        if (!function_exists('acf_add_local_field_group')) return;

        acf_add_local_field_group([
            'key' => 'group_course_fields',
            'title' => 'Campos del Curso',
            'fields' => [
                [
                    'key' => 'field_duration',
                    'label' => 'Duración',
                    'name' => 'duration',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_difficulty',
                    'label' => 'Nivel de dificultad',
                    'name' => 'difficulty',
                    'type' => 'select',
                    'choices' => [
                        'beginner' => 'Principiante',
                        'intermediate' => 'Intermedio',
                        'advanced' => 'Avanzado',
                    ],
                ],
                [
                    'key' => 'field_video_url',
                    'label' => 'Video principal',
                    'name' => 'video_url',
                    'type' => 'url',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'curso',
                    ],
                ],
            ],
        ]);
    }
}
