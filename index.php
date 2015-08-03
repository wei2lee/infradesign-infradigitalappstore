<?php
require 'vendor/autoload.php';
$app = new \Slim\Slim();

$templates = new League\Plates\Engine('.');

$app->hook('slim.before', function () use ($app, $templates) {
    $posIndex = strpos( $_SERVER['PHP_SELF'], '/index.php');
    $baseUrl = substr( $_SERVER['PHP_SELF'], 0, $posIndex) . '/';
    $templates->addData(['baseUrl' => $baseUrl]);
});
$app->get('/', function () use ($templates) {
    echo $templates->render('client-app-list', ['client' => '', 'app' => null, 'platform' => null]);
});
$app->get('/:client/', function ($client) use ($templates) {
    echo $templates->render('client-app-list', ['client' => $client, 'app' => null, 'platform' => null]);
});
$app->get('/:client/:app/', function ($client, $app) use ($templates) {
    echo $templates->render('client-app-list', ['client' => $client, 'app' => $app, 'platform' => null]);
});
$app->get('/:client/:app/:platform/', function ($client, $app, $platform) use ($templates) {
    echo $templates->render('client-app-list', ['client' => $client, 'app' => $app, 'platform' => $platform]);
});
$app->get('/:client/:app/:platform/install', function ($client, $app, $platform) use ($templates) {
    echo $templates->render('app-install', ['client' => $client, 'app' => $app, 'platform' => $platform]);
});
$app->run();
?>