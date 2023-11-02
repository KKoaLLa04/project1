<?php

require_once '../configs/database.php'; //Load database connection
require_once '../configs/web.php'; // load config web

require_once '../core/connection.php'; // load connection
require_once '../core/database.php'; // load database
require_once '../core/helpers.php'; // load all function (helpers)

require_once '../public/assets/admin/templates/header.php'; //import header layout
require_once '../public/assets/admin/templates/sidebar.php'; //import sidebar layout
require_once '../public/assets/admin/templates/breadcrumb.php'; //import breadcrumb layout

$module = _MODULE_DEFAULT_ADMIN;
$action = _ACTION_DEFAULT;

if (!empty($_GET['module'])) {
    $module = $_GET['module'];
}

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$path = $module . '/views/' . $action . '.php';
if (file_exists($path)) {
    require_once $path;
} else {
    require_once 'errors/404.php';
}

require_once '../public/assets/admin/templates/footer.php'; //import footer layout