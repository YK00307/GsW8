<?php
require_once('funcs.php');
$pdo = db_conn();

$sql = "SELECT * FROM gs_bm_table ORDER BY date DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$view = '';
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view .= '<tr>';
    $view .= '<td>'.h($row['word']).'</td>';
    $view .= '<td>'.h($row['meaning']).'</td>';
    $view .= '<td>'.h($row['comment']).'</td>';
    $view .= '<td>'.h($row['date']).'</td>';
    $view .= '</tr>';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ドイツ語単語リスト</title>
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
        <h1>これまで調べたドイツ語リスト</h1>
        <table>
            <thead>
                <tr>
                    <th>ドイツ語</th>
                    <th>日本語訳</th>
                    <th>コメント</th>
                    <th>登録日</th>
                </tr>
            </thead>
            <tbody>
                <?= $view ?: '<tr><td colspan="4">まだ単語がありません。</td></tr>' ?>
            </tbody>
        </table>
        <div style="margin-top:2em;">
            <form action="test.php" method="get">
                <button type="submit" class="test-btn">テストする</button>
            </form>
        </div>
    </main>
</body>
</html>
