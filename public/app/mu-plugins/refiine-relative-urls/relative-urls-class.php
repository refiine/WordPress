<?php

/*
Plugin Name:  Disallow Indexing
Plugin URI:   https://roots.io/bedrock/
Description:  Disallow indexing of your site on non-production environments.
Version:      2.0.0
Author:       Roots
Author URI:   https://roots.io/
Text Domain:  roots
License:      MIT License
*/

namespace WordPress\MuPlugins;

class RelativeUrls
{
    /**
     * List of filter to process.
     *
     * @var array
     */
    protected static $filters = [
        'post_link',
        'post_type_link',
        'page_link',
        'attachment_link',
        'get_shortlink',
        'post_type_archive_link',
        'get_pagenum_link',
        'get_comments_pagenum_link',
        'term_link',
        'search_link',
        'day_link',
        'month_link',
        'year_link',
        'get_stylesheet_uri',
        'script_loader_src',
        'style_loader_src',
    ];

    /**
     * Initialise the class.
     *
     * @return void
     */
    public static function init()
    {
        add_action('template_redirect', [get_called_class(), 'process']);
    }

    /**
     * Loops through the given filters to filter URLs within those.
     *
     * @return void
     */
    public static function process()
    {
        // Don't do anything if:
        // - In feed
        // - In sitemap by WordPress SEO plugin
        if (is_feed() || get_query_var('sitemap')) {
            return;
        }

        foreach (self::$filters as $filter) {
            add_filter($filter, [get_called_class(), 'makeRelative']);
        }
    }

    /**
     * Update given strings to be relative.
     *
     * @param string $url
     * @return string
     */
    public static function makeRelative(string $url): string
    {
        $updatedUrl = $url;
        $domain = explode('//', get_site_url())[1];
        if (strpos($url, $domain)) {
            $updatedUrl = explode($domain, $url)[1];
        }
        return $updatedUrl;
    }
}
