<?php

//設定ファイルの読み込み
require'../vendor/autoload.php';
require'../config.php';

$app = new \Slim\Slim([
  'templates.path' => TEMPLATES_DIR_PATH,
 'view'=> new \Slim\Views\Twig(), 
  ]);

\Tinitter\Route::registration($app);
$app->run();
