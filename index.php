<?php

// Reporte toutes les erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);


// Default headers
header("X-Content-Type-Options: nosniff");

# LOAD SLIM FRAMEWORK AND REQUIRED LIBRARIES
require "application/library/Slim/Slim.php";
require "application/router/Router.php";
require "application/mvc/model/connect.php";
include('application/library/helper/helper.php');
require 'application/mvc/controller/Controller.php';
require 'application/mvc/controller/Pages.php';


# CREATE NEW SLIM APP
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim([
	'templates.path' => 'application/mvc/view'
]);
$app->config(array(
    'debug' => true
));

#ROUTES
$router = new Router($app);
$router->get('/', 'Pages@index')->name('homepage');
$router->get('/customer', 'Pages@customer')->name('customer');




# RUN THE APP

$app->render('header.inc.php', compact('app'));
$app->run();
$app->render('footer.inc.php', compact('app'));

?>