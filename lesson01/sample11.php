<?php
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
];
?>
<table>
    <?php foreach ($fruits as $english => $japanese): ?>
    <thead>
        <th><?php echo $english; ?></th>
    </thead>
    <tbody>
        <td><?php echo $japanese; ?></td>
    </tbody>
    <?php endforeach; ?>
</table>