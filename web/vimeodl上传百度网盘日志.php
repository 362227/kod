<?php
$file_path = "vimeodlurl.txt" ;
if ( file_exists ( $file_path )){
$file_arr = file( $file_path );
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
$resault = $file_arr [ $i ]. "<br />" ;

}

if (preg_match_all('/上传结束/', file_get_contents('vimeodlurl.txt', $url), $links)){
    

echo '<font color="#F12A0B">'.preg_replace('/[\s\S]*(上传结束.*)/','$1', file_get_contents('vimeodlurl.txt')).'</font>';

    }

else {
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
echo $file_arr [ $i ]. "<br />" ;}
}




}
