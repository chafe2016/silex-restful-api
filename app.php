<?php

require_once __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/utils.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function() use($app) {
    return 'Hello World';
});

$app->get('/hello/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

$app->get('/api/dados156', function() use($app) {
    $json = csvToArray(getcwd() . "/data/dados156_simples.csv", ";");
    return $app->json(arrayToJson($json));
});

$app->run();
