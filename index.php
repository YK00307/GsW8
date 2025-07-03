<?php // index.php ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ドイツ語単語登録</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">単語登録</a>
            <a href="select.php">単語リスト</a>
        </nav>
    </header>
    <main>
        <h1>ドイツ語単語登録</h1>
        <form method="post" action="insert.php">
            <div>
                <label for="word">わからないドイツ語</label><br>
                <input type="text" id="word" name="word" required>
            </div>
            <div>
                <label for="meaning">その単語の日本語訳</label><br>
                <input type="text" id="meaning" name="meaning" required>
            </div>
            <div>
                <label for="comment">コメント</label><br>
                <textarea id="comment" name="comment" rows="3"></textarea>
            </div>
            <div>
                <button type="submit">登録する</button>
            </div>
        </form>
    </main>
</body>
</html>
