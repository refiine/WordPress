<?php

namespace WordPress\MuPlugins;

class RepointAcfJson
{
    /**
     * Directory where ACF JSON files will be saved and loaded from.
     *
     * @var string
     */
    protected static $acfJsonDirectory = ACF_JSON_DIRECTORY ?: WP_ROOT . '/acf-json';

    /**
     * Initialise the class.
     *
     * @return void
     */
    public static function init()
    {
        add_filter('acf/settings/save_json', [get_called_class(), 'acfJsonSavePoint']);
        add_filter('acf/settings/load_json', [get_called_class(), 'acfJsonLoadPoint']);
    }

    /**
     * Creates the
     *
     * @return void
     */
    public static function createIfNone()
    {
        if (!file_exists(self::$acfJsonDirectory)) {
            mkdir(self::$acfJsonDirectory, 0777);
        }
    }

    /**
     * Update the ACF JSON save point
     *
     * @param string $path
     * @return string
     */
    public static function acfJsonSavePoint(string $path): string
    {
        self::createIfNone();
        return self::$acfJsonDirectory;
    }

    /**
     * Update the ACF JSON load point
     *
     * @param array $paths
     * @return array
     */
    public static function acfJsonLoadPoint(array $paths): array
    {
        self::createIfNone();
        unset($paths[0]);
        $paths[] = WP_ROOT . '/acf-json';
        return $paths;
    }
}
