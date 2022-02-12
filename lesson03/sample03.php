<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample03</title>
</head>
<body>
    <?php
    require('dbconnect.php');
    $message = "フォームから入力した値";

    if ($ret) {
        echo 'データを挿入しました';
    } else {
        echo $db->error;
    }
    ?>
</body>
</html>