<?php

// funcs.phpを読み込む
require_once('funcs.php');

// DB接続
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_an_table");
$status = $stmt->execute();

//データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合、エラーの中身を画面表示してみる）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //成功したらSelectデータの数だけ自動でループしてくれる（while）
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    // 「.=」にしたら追記してもらえる。「=」だと上書きされちゃう
    $view .= "<p>";
    $view .=h($result['name']) . '：' . h($result['category']) . '｜' . h($result['sns']) . '｜' . h($result['email']) . '｜' . h($result['date']) . '｜' . h($result['place']) . '｜' . h($result['description']);
    $view .= "</p>";

  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登録ありがとうございました</title>
<link rel="stylesheet" href="/gs_kadai_php2/style.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="input.php">戻る</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<h1>登録ありがとうございました！</h1>
<div>
    <div class="container jumbotron"><?= $view ?></div>
    <!-- <div class="container jumbotron"><?php echo $view ;?></div>　の省略形 -->
  </div>
<!-- Main[End] -->

</body>
</html>
