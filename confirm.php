<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録・確認画面</title>
</head>
<body>
    <h1>以下の内容で登録します。よろしいですか？</h1>
    <?php
    // 1. input.phpから送られてきた値を受け取る
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $age = $_POST["userAge"];

// ②htmlspecialchars()で、エスケープ（次のページへ入力されたデータを引継ぎ）処理を行う
$safe_username = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_userEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_userAge = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');

// ② 画面に表示する
echo "氏名: " . $safe_username . "さん<br>";
echo "メールアドレス: " . $safe_userEmail . "<br>";
echo "年齢: " . $safe_userAge . "歳<br>";
?>
<!-- ↑ ここで PHP を閉じる。ここから下は HTML の世界 -->
<form action="complete.php" method="post">

    <!-- ④ 隠しフィールドで complete.php に値をもう一度渡す -->
    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
    <p> <input type="submit" value="確認画面へ"> </p>

</form>

<!-- 下で最後に戻るボタンを作っておく -->
<p> <button type="button" onclick="history.back()">戻る</button> </p>

</body>
</html> 
