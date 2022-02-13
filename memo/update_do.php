<?php
require('dbconnect.php');

$stmt = $db->prepare('update memos set memo=? where id=?');
