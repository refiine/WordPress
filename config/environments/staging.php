<?php

// `staging`

define('WP_DEBUG', env('WP_DEBUG') ?: false);
define('SCRIPT_DEBUG', env('WP_DEBUG') ?: false);
define('WP_DEBUG_DISPLAY', env('WP_DEBUG') ?: false);
ini_set('display_errors', env('WP_DEBUG') ? 1 : 0);
