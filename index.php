<?php

require './vendor/autoload.php';
require './app/src/Controllers/HomeAction.php';

use Slim\Factory\AppFactory;
use Slim\Psr7\Response;
use Slim\Views\PhpRenderer;

$app = AppFactory::create();

$renderer = new PhpRenderer('./app/src/Templates');

# ABOUT

$app->get('/', app\src\Controllers\HomeAction::class);

# RUN THE APP
$app->run();







