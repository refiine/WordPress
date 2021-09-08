# refiine/wordpress

WordPress for the versioning and composer generation with Lumberjack support.

## About

This version of WordPress is based off [Bedrock][1] with a additions to suite
the [refiine][15] workflow.

## What's Included?

-   Git version control support
-   [Composer][8] based package managment including themes and plugins via
    [WordPress Packagist][9]
-   [Laravel Valet][10] support
-   Configuration management via `.env` files and environments

### Mu-Plugins

-   **ACF JSON Repoint**
    > Points all ACF JSON syncing to a folder outside the theme.
-   **Disallow Indexing** (From Bedrock)
    > Disallow indexing of your site on non-production environments.
-   **Relative URL**
    > Makes URLs created by WordPress relative.

### Plugins

-   **[Advanced Custom Fields Pro][4]** (Requires purchased key)
-   **[WP Mail SMTP][5]**
-   **[WP Migrate DB][6]**
-   **[Wordfence][11]**
-   **[Yoast SEO][12]**
-   **[ACF Content Analysis for Yoast SEO][13]**
-   **[Demo Data Creator][7]** (Dev install only)

## Themes

Optionally you can install [Lumberjack][2], but by default there is no theme
included so you are free to add your own. If you do wish to install Lumberjack
run `composer install-lumberjack` and it will be created for you.

## Commands

`composer install-wp-cli`
Installs [WP-CLI][3]

`composer update-wp-cli`
Update [WP-CLI][3]

`composer tidy`
Removes the `wp-content` directory from the `wp` folder

`composer remove-git`
Remove the .git directory from the project root

`composer env`
Create an .env file from .env.example

`composer install-lumberjack`
Installs [Lumberjack][2] theme from git and cleans the theme's directory

`composer new-project`
Runs the follow composer commands;

-   `remove-git`
-   `tidy`
-   `env`

`composer new-project-with-lumberjack`
Runs the follow composer commands;

-   `new-project`
-   `install-lumberjack`

`composer codesniff`
Checks the project using [PHP_CodeSniffer][14] (useful for pre-deploy)

## FAQs

### VSCode Intelephense is showing errors for common WordPress functions constants

You'll need to [add "Core" and "wordpress" to `Intelephense: Stubs`][16].

You also find more issues related to this for other packages. Have a look at
[PHP Stubs Library][17] that may fix the issue.

[1]: https://roots.io/bedrock/
[2]: https://github.com/Rareloop/lumberjack
[3]: https://wp-cli.org/
[4]: https://advancedcustomfields.com/
[5]: https://wordpress.org/plugins/wp-mail-smtp/
[6]: https://wordpress.org/plugins/wp-migrate-db/
[7]: https://wordpress.org/plugins/demo-data-creator/
[8]: https://getcomposer.org/
[9]: https://wpackagist.org/
[10]: https://laravel.com/docs/8.x/valet
[11]: https://www.wordfence.com/
[12]: https://yoast.com/wordpress/plugins/seo/
[13]: https://wordpress.org/plugins/acf-content-analysis-for-yoast-seo/
[14]: https://github.com/squizlabs/PHP_CodeSniffer
[15]: https://refiine.co.uk/
[16]: https://github.com/bmewburn/intelephense-docs/issues/2#issuecomment-896967994
[17]: https://github.com/orgs/php-stubs/repositories
