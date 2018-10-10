# WordPress

WordPress for the versioning generation.

## About

This version of WordPress is based off [Bedrock][1] with a few custom additions
to make it more suited to my own workflow.

## What's Included?

- Git version control support
- [Composer][8] based package managment including themes and plugins via
  [WordPress Packagist][9]
- [Laravel Valet][10] support
- Configuration management via `.env` files and environments

### Mu-Plugins

- **ACF JSON Repoint**
  > Points all ACF JSON syncing to a folder outside the theme.
- **Disallow Indexing** (From Bedrock)
  > Disallow indexing of your site on non-production environments.
- **Relative URL**
  > Makes URLs created by WordPress relative.

### Plugins

- **[Advanced Custom Fields Pro][4]** (Requires purchased key)
  > Customise WordPress with powerful, professional and intuitive fields.
- **[WP Mail SMTP][5]**
  > The most popular WordPress SMTP and PHP Mailer plugin. Trusted by over 900k
  > sites.
- **[WP Migrate DB][6]**
  > Migrates your database by running find & replace on URLs and file paths,
  > handling serialized data, and saving an SQL file.
- **[WP Offload Media Lite for Amazon S3 and DigitalOcean Spaces][11]**
  > This plugin automatically copies images, videos, documents, and any other
  > media added through WordPress’ media uploader to Amazon S3 or DigitalOcean
  > Spaces.
- **[Yoast SEO][12]**
  > Yoast SEO does everything in its power to please both visitors and search
  > engine spiders.

### Dev Plugins

- **[Demo Data Creator][7]**
  > Demo Data Creator is a Wordpress and BuddyPress plugin that allows a
  > Wordpress developer to create demo users, blogs, posts, comments and more.
  > DO NOT USE ON A PRODUCTION SITE.

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

`composer new-project`
Runs the follow composer commands; `install-wp-cli`, `remove-git`, `tidy`, `env`

[1]: https://roots.io/bedrock/
[2]: https://github.com/Rareloop/lumberjack
[3]: https://wp-cli.org/
[4]: https://advancedcustomfields.com/
[5]: https://wordpress.org/plugins/wp-mail-smtp/
[6]: https://wordpress.org/plugins/wp-migrate-db/
[7]: https://wordpress.org/plugins/demo-data-creator/
[8]: https://getcomposer.org/
[9]: https://wpackagist.org/
[10]: https://laravel.com/docs/5.6/valet
[11]: https://wordpress.org/plugins/amazon-s3-and-cloudfront/
[12]: https://wordpress.org/plugins/wordpress-seo/
