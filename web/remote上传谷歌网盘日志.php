<?php

$file =file_get_contents('remote上传谷歌网盘日志.txt');
echo '<a href="查看UTF8完整版日志.php?file='.$file_path.'" target="_blank"><h3>上传谷歌网盘进度</h3></a>';
$file1 = preg_replace('/[\s\S]*(\* [\s\S]*Elapsed time.*)/','$1', $file); 
$file2 = preg_replace('/\n|[\s\S]*Elapsed time.+?\/ 0 Bytes.*/','<br>', $file1); 
echo $file2;
?>
