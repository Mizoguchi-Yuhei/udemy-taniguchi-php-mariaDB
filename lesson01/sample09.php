<?php

$hello = 'こんにちは';
echo $hello . '<br>';
echo "$hello<br>";

date_default_timezone_set('Asia/Tokyo');

// $time = time();
// echo $time . '<br>';

$time =  strtotime('+1 day');
// echo $time . '<br>';

$day = date('n/j(D)', $time);
echo $day . '<br>';

for ($i = 0; $i < 366; $i++) :
    // $time2 = strtotime('+' . $i . 'day');
    $time2 = strtotime("+$i day");
    $days = date('n/j(D)', $time2);
    echo $days . '<br>';
endfor;
