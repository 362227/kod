<?php
$file_path = "remote上传百度网盘日志.txt" ;
if ( file_exists ( $file_path )){
echo '<a href="查看UTF8完整版日志.php?file='.$file_path.'" target="_blank"><h3>下载进度</h3></a>';
$file_arr = file( $file_path );
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
$resault = $file_arr [ $i ]. "<br />" ;

}

if (preg_match_all('/上传结束/', file_get_contents('remote上传百度网盘日志.txt', $url), $links)){
    

echo '<font color="#F12A0B">'.preg_replace('/[\s\S]*(上传结束.*)/','$1', file_get_contents('remote上传百度网盘日志.txt')).'</font>';

    }

else {
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
echo $file_arr [ $i ]. "<br />" ;}
}
}
