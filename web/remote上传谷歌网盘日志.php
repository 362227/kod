<?php

$file =file_get_contents('remote上传谷歌网盘日志.txt');
$file = preg_replace('/[\s\S]*(\* [\s\S]*Elapsed time.*)/','$1', $file); 
$file = preg_replace('/\n/','<br>', $file); 
echo $file;
?>
