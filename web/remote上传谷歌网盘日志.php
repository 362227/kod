<?php

$file =file_get_contents('remote上传谷歌网盘日志.txt');
$file1 = preg_replace('/[\s\S]*(\* [\s\S]*Elapsed time.*)/','$1', $file); 
$file2 = preg_replace('/\n/','<br>', $file1); 
echo $file2;
?>
