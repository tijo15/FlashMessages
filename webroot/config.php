<?php
/**
 * Get all configuration details to be able to execute the test suite.
 *
 */

/**
 * Define essential Anax paths, end with /
 *
 */
 
//Your ANAX_INSTALL_PATH did not exist at all. You do not have a anax folder in the bendor folder. So it was useless.
//I went backwards to the real install path based on your current setup. Ergo 
//flash-message > tijo15 > vendor > Anax-MVC
define('ANAX_INSTALL_PATH', realpath(__DIR__ . '/../../../../') . '/');

//define('ANAX_APP_PATH',     ANAX_INSTALL_PATH . 'app/');

define('ANAX_APP_PATH',     ANAX_INSTALL_PATH . 'vendor/tijo15/flash-message/');
/**
 * Include global functions.
 *
 */
include(ANAX_INSTALL_PATH . 'src/functions.php'); 
//If you intend to use Anax-MVC, you should load it's autoloader instead.
//Composer automatically created a autoloader.php file that is called by Anax-MVC if it exists, so just
//having the autoloader.php in tijo15 is enough.
//Also the include needed to be after you defined the install path for ANAX.
//Because ANAX's own autoloader did not find a proper ANAX_INSTALL_PATH as it was defined
//After anax's autoloader.
//include __DIR__ . "/../autoloader.php";
include __DIR__ . "/../../../../app/config/autoloader.php";


