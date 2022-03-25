<?php
$file_path = "/usr/share/nginx/kodexplorer/aria2c/youtube-dl-web-interface-master/vimeodl1url.txt" ;
if ( file_exists ( $file_path )){
$file_arr = file( $file_path );
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
$resault = $file_arr [ $i ]. "<br />" ;

}

if (preg_match_all('/上传结束/', file_get_contents('vimeodl1url.txt', $url), $links)){
    

echo '<font color="#F12A0B">'.preg_replace('/[\s\S]*(上传结束.*)/','$1', file_get_contents('vimeodl1url.txt')).'</font>';

    }

else {
for ( $i =0; $i < count ( $file_arr ); $i ++){ //逐行读取文件内容
echo $file_arr [ $i ]. "<br />" ;}
}




}
