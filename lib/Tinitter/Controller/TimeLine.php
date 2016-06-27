<?php
namespace Tinitter\Controller;
class TimeLine
{
  public function show(){
    $app = \Slim\Slim::getInstance();
    //datebase
    $post = new \Tinitter\Model\Post; //新規にpostオブジェクトを作成
    $post->nickname = 'ニックネーム'; //nicknameカラムにセット
    $post->body = '本文';             //bodyカラムにセット
    $post->save();                    //保存を実行
    $same_post = \Tinitter\Model\Post::find(1); //ID=1のデータを1件取得
    //ここまで
    $app->render(
      'index.twig',
      ['display_text'=>"Hello,world!"]
    );
  }
}
