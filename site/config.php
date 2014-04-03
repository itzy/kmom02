<?php
/**
 * Site configuration, this file is changed by user per site.
 *
 */

/*
* Set level of error reporting
*/
error_reporting(-1);
ini_set('display_errors', 1);

/*
* Define session name
*/
$itzy->config['session_name'] = preg_replace('/[:\.\/-_]/', '', $_SERVER["SERVER_NAME"]);

/*
 * Set a base_url to use another than the default calculated
 */
$itzy->config['base_url'] = null;

/**
 * What type of urls should be used?
 *
 * default      = 0      => index.php/controller/method/arg1/arg2/arg3
 * clean        = 1      => controller/method/arg1/arg2/arg3
 * querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
 */
$itzy->config['url_type'] = 1;

/*
* Define server timezone
*/
$itzy->config['timezone'] = 'Europe/Stockholm';

/*
* Define internal character encoding
*/
$itzy->config['character_encoding'] = 'UTF-8';

/*
* Define language
*/
$itzy->config['language'] = 'en';

/**
 * Settings for the theme.
 */
$itzy->config['theme'] = array(
    // The name of the theme in the theme directory
    'name'    => 'core',
);

/**
 * Define the controllers, their classname and enable/disable them.
 *
 * The array-key is matched against the url, for example:
 * the url 'developer/dump' would instantiate the controller with the key "developer", that is
 * CCDeveloper and call the method "dump" in that class. This process is managed in:
 * $itzy->FrontControllerRoute();
 * which is called in the frontcontroller phase from index.php.
 */
$itzy->config['controllers'] = array(
    'index'     => array('enabled' => true,'class' => 'CCIndex'),
    'user'      => array('enabled' => true,'class' => 'CCUser'),
    'developer'      => array('enabled' => true,'class' => 'CCDeveloper'),
);

