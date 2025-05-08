<?php
/**
 * Plugin Name: WP Learning API
 * Description: Plugin modular que expone una API REST para una plataforma educativa basada en WordPress.
 * Version: 1.0.0
 * Author: Andrés Guerrero
 */

defined('ABSPATH') || exit;

require_once __DIR__ . '/vendor/autoload.php';

use WpLearningApi\Bootstrap\Plugin;

Plugin::run();
