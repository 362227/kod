<?php
$file_path = "vimeodl下载日志.txt" ;

$A=strtotime("now");
$B=date(filemtime($file_path));

$C= $A-$B;

if ( $C < 5) { 
if ( file_exists ( $file_path )){
$file_arr = file( $file_path );
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
//echo $file_arr [ $i ]. "<br>" ;
$content = $file_arr [ $i ]. "<br>" ;
$content= preg_replace('/[\s\S]*(\[download\].*)/','$1', $content);
 echo $content;
}


}
}

else {

if ( file_exists ( $file_path )){
$file_arr = file( $file_path );
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
//echo $file_arr [ $i ]. "<br>" ;
$content = preg_replace('/.*\: Downloading.*/','', $file_arr);
$content = $file_arr [ $i ]. "" ;
$content = preg_replace('/[\s\S]*(\[download\].*)/','$1', $content);
$content = preg_replace('/.*\: Downloading.*/','', $content);
$content = preg_replace('/(^\[.*)/','<br>$1$2', $content);

 echo $content;
                                             }
                  }

}

?>
