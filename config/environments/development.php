<?php

// `development`

define('WP_DEBUG', env('WP_DEBUG') ?: true);
define('SCRIPT_DEBUG', env('WP_DEBUG') ?: true);
define('WP_DEBUG_LOG', env('WP_DEBUG') ?: true);
define('WP_DEBUG_DISPLAY', env('WP_DEBUG') ?: true);
define('SAVEQUERIES', true);

ini_set('display_errors', env('WP_DEBUG') ? 1 : 0);
ini_set('error_log', dirname(__DIR__) . '/../log/error-' . date('Ymd') . '.log');
