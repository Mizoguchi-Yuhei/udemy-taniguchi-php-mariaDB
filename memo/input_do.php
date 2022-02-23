<?php
$memo = filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_SPECIAL_CHARS);

require('dbconnect.php');
$stmt = $db->prepare('insert into memos(memo) values(?)');

// SQLが間違っていないかチェック
if (!$stmt):
    die($db->error);
endif;
$stmt->bind_param('s', $memo);  // sはstringで型を指定 bindさせて、values(?)と$memoをつなげる
$ret = $stmt->execute();  // executeで実行

if ($ret):
    echo '登録されました';
    echo '<br>→ <a href="index.php">トップへ戻る</a>';
else:
    echo $db->error;
endif;