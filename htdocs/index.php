<?php

//設定ファイルの読み込み
require'../vendor/autoload.php';
//データベース
require __DIR__.'/../config.php';

$app = new \Slim\Slim([

  'templates.path' => TEMPLATES_DIR_PATH,
  'view'=> new \Slim\Views\Twig(), 
  ]);

$app->post('/post/commit','\Tinitter\Controller\Post:commit');
\Tinitter\Route::registration($app);
//データベース接続のセットアップ
\Base\DB::registerIlluminate($db_settings);
//アプリ実行
$app->run();

