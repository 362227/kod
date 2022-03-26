<?php
$actual_link = 'https://'.$_SERVER['HTTP_HOST']; 
$page = file_get_contents($actual_link.'/encodeexplorer.index.php?m&sort_by=mod&sort_as=desc&dir=remote115/');

$page = str_replace("src=\"?img","src=\"encodeexplorer.index.php?img",$page);
$page = str_replace("<a href=\"?s&amp;dir=remote115/\">","<a href=\"encodeexplorer.index.php?sort_by=mod&sort_as=desc&dir=remote115/\">",$page);
echo '<hr /><br>'.$page;
