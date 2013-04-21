<?php
/**
 * index.php - one file to rule them all
 */
// PHASE: BOOTSTRAP
//
define('ASDF_INSTALL_PATH', dirname(__FILE__));
define('ASDF_SITE_PATH', ASDF_INSTALL_PATH . '/site');

require(ASDF_INSTALL_PATH.'/src/CAsdf/bootstrap.php');

$asf = CAsdf::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$asf->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$asf->ThemeEngineRender();


// Get small bits and pieces from various views.
 // $vjByline  = file_get_contents(__DIR__."/incl/vjByline.php");



