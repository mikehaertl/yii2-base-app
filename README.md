Yii 2 Base App for Purists
==========================

## WORK IN PROGRESS! USE AT YOUR OWN RISK.

This is an Yii 2 application template with only the most basic
features on board.

Features
--------

The main tenet of this template is: Keep it simple! The idea was to
only include the absolutely necessary features - and optimize some
of the configuration issues of the original Yii2 base template.

 * Very flat configuration file structure
 * Provide local configuration files that won't get committed
 * Move `YII_DEBUG` and `YII_ENV` to configuration files
 * SiteController with login, logout, signup and password forget actions

Configuration
-------------

All configuration lives in 4 (or 5) files in the `config/` directory.

 * `web.php` configuration of the web app
 * `local.php` local overrides to the web config. This file is never committed.
 * `console.php` configuration of the console. Here you can reuse parts of the merged `web.php` and `local.php` configuration.
 * `params.php` application parameters for both web and console application
 * `console-local.php` an optional file with local overrides to the console configuration.


Workflow
--------

To create a new application you will usually follow this workflow:

 1. Install the template with `composer create-project --prefer-dist --stability=dev mikehaertl/yii2-base-app .`
 2. Add optional dependencies to `composer.json` and run `composer update`
 3. Copy `config/local-example.php` to `config/local.php` and add local configuration (DB, etc.)
 4. Check `config/params.php`, `config/web.php` and `config/console.php` and add project wide configuration
 5. Check `migrations/m140328_144900_init` to suit your user table schema.
 6. Check the models in `models/`.
 7. Run migrations with `yii migrate`

This should get you started. Your app should now run in a base version and is ready to be
committed to your project repository.
