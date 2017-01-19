<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 17/01/2017
 * Time: 09:45
 */
session_start();
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';
ErrorHandler::SetHandler();
require_once PRESENTATION_DIR . 'application.php';
require_once BUSINESS_DIR . 'database_handler.php';
require_once BUSINESS_DIR . 'catalog.php';
require_once PRESENTATION_DIR . 'link.php';
$application = new Application();
$application->display('store_front.tpl');
DatabaseHandler::Close();
//require_once 'inexistent_file.php';
