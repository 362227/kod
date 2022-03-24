<?php
header("Content-type:text/html;charset=utf-8");
$file_path = "/app/web/上传115.txt" ;
if ( file_exists ( $file_path )){
$file_arr = file( $file_path );
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
echo $file_arr [ $i ]. "<br />" ;
}
/*
foreach($file_arr as $value){
echo $value."<br />";
}*/
}
?>
