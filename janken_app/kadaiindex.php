<?php 
// 結果を代入する変数
$result = false;

// ポスト変数が存在するか
if (isset($_POST['choice'])) {
    $janken = array(
        'グー',
        'チョキ',
        'パー'
    );

    // エスケープ
    $player = htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');

    // 相手の手をランダムで決定
    $com = $janken[array_rand($janken)];

    // 勝敗判定
    if ($player === 'グー' && $com === 'チョキ') {
        $result = '勝ち';
    } elseif ($player === 'グー' && $com === 'グー') {
        $result = 'あいこ';
    } elseif ($player === 'グー' && $com === 'パー') {
        $result = '負け';
    } elseif ($player === 'チョキ' && $com === 'パー') {
        $result = '勝ち';
    } elseif ($player === 'チョキ' && $com === 'チョキ') {
        $result = 'あいこ';
    } elseif ($player === 'チョキ' && $com === 'グー') {
        $result = '負け';
    } elseif ($player === 'パー' && $com === 'グー') {
        $result = '勝ち';
    } elseif ($player === 'パー' && $com === 'パー') {
        $result = 'あいこ';
    } elseif ($player === 'パー' && $com === 'チョキ') {
        $result = '負け';
    }
}    
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>じゃんけんゲーム＠PHP</title>
</head>
<body>
<p>じゃんけんしようぜ！！！！！</p>
<img src="https://skuru.site/wp-content/uploads/2019/11/f38f299253e5d1b1dc68d72396c6d28d_t.jpeg" alt="">';

<p>あなたの手を選んでね</p>
<form action="" method="post">
    <button type="submit" name="choice" value="グー">グー</button>
    <img src="https://data.ac-illust.com/data/thumbnails/98/98f1dfe40932ecd68b873f25e7b1ff72_t.jpeg" alt="">
    <button type="submit" name="choice" value="チョキ">チョキ</button>
    <img src="https://data.ac-illust.com/data/thumbnails/68/68e9a0182bfd7b233b60ff2cbcef8b78_t.jpeg" alt="">
    <button type="submit" name="choice" value="パー">パー</button>
    <img src="https://data.ac-illust.com/data/thumbnails/0e/0ee5a6033fde37adb9b63286751deed6_t.jpeg" alt="">';
</form>

<?php if ($result) : ?>
    <br/>
    <br/>
    <img src="https://touhoucannonball.com/illustcontest/assets/img/title_result.png" alt="">';

    <p>あいて：<?php echo $com; ?></p>

    <p><?php echo $result; ?>です。</p>
<?php endif; ?>
</body>
</html>