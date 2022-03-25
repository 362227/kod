<?php
$file_path = "/app/web/vimeodl下载日志.txt" ;
if ( file_exists ( $file_path )){
$file_arr = file( $file_path );
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
//echo $file_arr [ $i ]. "<br>" ;
$content = $file_arr [ $i ]. "<br>" ;
$content = preg_replace('/[\s\S]*(\[download\].*)/','$1', $content);
 echo $content;
}
/*
foreach($file_arr as $value){
echo $value."<br>";
}*/
}
?>


