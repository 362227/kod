<?php
if(file_exists("remote上传115网盘日志.txt")) {echo '<a href="查看UTF8完整版日志.php?file=remote上传115网盘日志.txt" target="_blank"><h3>上传115网盘进度</h3></a>';

$content = file_get_contents("/app/web/remote上传115网盘日志.txt");	
$content1 = preg_replace('/[\s\S]*([\s\S]{280}$)/','$1', $content); //读取后面280个字符
echo $content1;
                                 }
?>
