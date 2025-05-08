<?php
namespace WpLearningApi\Admin;

use WpLearningApi\Config\Constants;

class SettingsPage {
    public static function register(): void {
        add_menu_page(
            Constants::PLUGIN_NAME,
            Constants::PLUGIN_NAME,
            'manage_options',
            Constants::PLUGIN_SLUG,
            [self::class, 'render'],
            'dashicons-admin-generic',
            80
        );
    }

    public static function render(): void {
        ?>
        <div class="wrap">
            <h1><?php echo Constants::PLUGIN_NAME; ?> — Información</h1>
            <p><strong>Versión:</strong> <?php echo Constants::VERSION; ?></p>
            <p><strong>Autor:</strong> <?php echo Constants::AUTHOR; ?></p>
            <p><strong>Descripción:</strong> <?php echo Constants::DESCRIPTION; ?></p>
        </div>
        <?php
    }
}
