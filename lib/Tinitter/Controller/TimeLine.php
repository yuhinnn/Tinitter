<?php
namespace Tinitter\Controller;
class TimeLine
{
  public function show(){
    $app = \Slim\Slim::getInstance();//新規にpostオブジェクトを作成
    $post = new \Tinitter\Model\Post;//nicknameカラムにセット
    $post->nickname = 'ニックネーム';//bodyカラムにセット
    $post->body = '本文';            //保存を実行 
    $post->save();                   //id = 1　のデータを1件取得
    $same_post = \Tinitter\Model\Post::find(1); 
    $app->render(
      'TimeLine/show.twig');
  }
}
