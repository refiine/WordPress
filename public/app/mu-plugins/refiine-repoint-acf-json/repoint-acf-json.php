<?php

/*
Plugin Name:  Repoint ACF JSON
Description:  Points all ACF JSON syncing to a folder outside the theme.
Version:      1.0.1
Author:       Neil Sweeney
Author URI:   https://wolfiezero.com/
License:      MIT License
*/

require_once('repoint-acf-json-class.php');

\WordPress\MuPlugins\RepointAcfJson::init();
