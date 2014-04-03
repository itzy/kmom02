<?php
//
// PHASE: BOOTSTRAP
//
define('ITZY_INSTALL_PATH', dirname(__FILE__));
define('ITZY_SITE_PATH', ITZY_INSTALL_PATH . '/site');

require(ITZY_INSTALL_PATH.'/src/CItzy/bootstrap.php');

$itzy = CItzy::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$itzy->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$itzy->ThemeEngineRender();
