<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー情報入力</title>
</head>
<body>
    <h1>ユーザー情報入力</h1>
    <form action="confirm.php" method="post">
        <p>
           <label for="name">名前:</label>
            <input type="text" name="userName" id="name" required>
        </p>
        <p>
            <label for="email">メールアドレス:</label>
            <input type="email" name="userEmail" id="email" required>
        </p>
        <p>
            <label for="age">年齢:</label>
            <input type="number" name="userAge" id="age" required>
        </p>
        <input type="submit" value="確認画面へ">
    </form>
</body>
</html>