<?php

// PHP errors reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);


// Default headers
header("X-Content-Type-Options: nosniff");

# LOAD SLIM FRAMEWORK AND REQUIRED LIBRARIES
require "application/library/Slim/Slim.php";
require "application/router/Router.php";
require "application/mvc/model/build/connect.php";
include('application/library/helper/helper.php');
require 'application/mvc/controller/build/Controller.php';
require 'application/mvc/controller/build/Config.php';


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
$router->get('/customer', 'Pages@customer')->name('customer'); //Exemple new page




# RUN THE APP

$app->render('build/header.inc.php', compact('app'));
$app->run();
$app->render('build/footer.inc.php', compact('app'));

?>
