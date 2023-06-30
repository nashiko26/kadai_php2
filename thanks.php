<?php

// inputから受け取る
$name = $_POST['name'];
$category = $_POST['category'];
$sns = $_POST['sns'];
$email = $_POST['email'];
$date = $_POST['date'];
$place = $_POST['place'];
$description = $_POST['description'];
$pass = $_POST['pass'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録ありがとうございました</title>
    <link rel="stylesheet" href="/gs_kadai_php2/style.css">
</head>
<body>
<h1>登録ありがとうございました</h1>
<section>
	<h2>投稿内容一覧</h2>
		<?php foreach($regist as $loop):?>
			<div>作家名：<?php echo $loop['name']?></div>
			<div>主な活動ジャンル：<?php echo $loop['category']?></div>
			<div>------------------------------------------</div>
		<?php endforeach;?>
	
</section>
<!-- 追記２ここまで -->

    <!-- 確認画面 -->
    <table class="writetable">
        <tr>
            <th>作家名</th>
            <td><?php echo $_POST['name'] ?></td>
        </tr>
        <tr>
            <th>主な活動ジャンル</th>
            <td><?php echo $_POST["category"] ?></td>
        </tr>
        <tr>
            <th>SNSのURL</th>
            <td><?php echo $_POST["sns"] ?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo $_POST["email"] ?></td>
        </tr>
        <tr>
            <th>出展日</th>
            <td><?php echo $_POST["date"] ?></td>
        </tr>
        <tr>
            <th>出展場所</th>
            <td><?php echo $_POST["address"] ?></td>
        </tr>
        <tr>
            <th>出展予定の作品および点数</th>
            <td><?php echo $_POST["text"] ?></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td>************</td>
        </tr>
    </table>
    <button onclick="location.href='input.php'">戻る</button>    
</body>
</html>
