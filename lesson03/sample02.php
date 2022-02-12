<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample02</title>
</head>

<body>
    <?php
    require('dbconnect.php');
    $records = $db->query('select count(*) as cnt from my_items');
    if ($records) {
        while ($record = $records->fetch_assoc()) {
            // echo $record['item_name'] . ', ' . $record['price'] . '<br>';
            echo $record['cnt'] . '<br>';
        }
    } else {
        echo $db->error;
    }
    ?>
</body>

</html>