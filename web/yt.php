<?php
$id=$_GET["id"];
shell_exec("wget https://kod362227.herokuapp.com -nc -O index.txt");
    $file = $id.'.mp4';
    if(file_exists($file)){
        $url = 'https://kod362227.herokuapp.com/'.$id.'.mp4';
        echo $url;
        header('Location: ' . $url);
    }else{
$cmd='/app/web/data/yt-dlp -f 18 https://www.youtube.com/watch?v='.$id.' -o '.$id.'.mp4';

shell_exec($cmd.'>> yt.log');

//shell_exec("ffmpeg -i $id.flv -vcodec copy -acodec copy -absf aac_adtstoasc $id.mp4");

echo $cmd;

$url = 'https://kod362227.herokuapp.com/'.$id.'.mp4';
echo $url;
header('Location: ' . $url);
    }
