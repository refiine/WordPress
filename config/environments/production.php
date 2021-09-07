<?php

// `production`

define('WP_DEBUG', env('WP_DEBUG') ?: false);
define('SCRIPT_DEBUG', env('WP_DEBUG') ?: false);
define('WP_DEBUG_DISPLAY', false);
ini_set('display_errors', 0);
