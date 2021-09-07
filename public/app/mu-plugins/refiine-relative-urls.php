<?php

/*
Plugin Name:  Relative URLs
Description:  Makes URLs created by WordPress relative.
Version:      1.0.0
Author:       Neil Sweeney
Author URI:   https://wolfiezero.com/
License:      MIT License
*/

require_once('classes/relative-urls-class.php');

\WordPress\MuPlugins\RelativeUrls::init();
