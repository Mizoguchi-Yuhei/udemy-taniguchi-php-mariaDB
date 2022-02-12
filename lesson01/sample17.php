<?php
$xmlTree = simplexml_load_file('rss.xml');
foreach ($xmlTree->channel->item as $item) {
?>
    ・<a href="<?php $item->link; ?>"><?php echo $item->title; ?></a><br>
<?php
}
?>
<!-- echo $xmlTree->channel->item[0]->title; -->