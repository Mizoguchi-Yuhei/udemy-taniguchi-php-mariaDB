<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample04</title>
</head>

<body>
    <?php
    require('dbconnect.php');
    $message = "フォームからのメモです";
    $stmt = $db->prepare('insert into memos(memo) values(?)');
    if (!$stmt) :
        die($db->error);
    endif;
    $stmt->bind_param('s', $message);
    $ret = $stmt->execute();
    if ($ret) {
        echo 'データを挿入しました';
    } else {
        echo $db->error;
    }
    ?>
</body>

</html>