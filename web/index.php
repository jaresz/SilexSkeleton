<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->get("/", "MyApp\\Controller\\FooController::indexAction");
$app->get("/foo/show/{id}", "MyApp\\Controller\\FooController::showAction");

$app->get("/bar", "MyApp\\Controller\\BarController::indexAction");
$app->get("/bar/show/{id}", "MyApp\\Controller\\BarController::showAction");

$app->run();