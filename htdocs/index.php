<?php
//ライブラリ読み込み
require '../vendor/autoload.php';
//slimの初期化
$app = new \Slim\Slim([]);
//slimにルートを登録
$app->get('/',function(){
  echo "Hello,world";
});
//実行
$app->run();
