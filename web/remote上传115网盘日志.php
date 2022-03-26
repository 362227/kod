<?php
$content = file_get_contents("/app/web/remote上传115网盘日志.txt");	
$content1 = preg_replace('/[\s\S]*([\s\S]{280}$)/','$1', $content); //读取后面280个字符
echo $content1;
?>
