<?php
$id=$_GET["id"];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://huginn103622275.herokuapp.com/agents/36/edit?return=%2Fagents');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"96\", \"Google Chrome\";v=\"96\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Referer: https://huginn103622275.herokuapp.com/scenarios/2';
$headers[] = 'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8,ja;q=0.7,fr;q=0.6,ru;q=0.5';
$headers[] = 'Cookie: _rails_session=e2mSVn4Tv7dLKAdCe681%2F2COEzp5UpBOblYuLuNBrhtAW%2F1rfHw4eBBpF9PkZvgHtw8yD4ZSeIYTsIPQ2CJDVkdGV31d6%2Fq2W7vzFpGui6GZFOwVYke6Ek4sszEY1dhasCAq2LVvecdvmkB%2BlAJdtMR6uVloCqJfQMggPBQkU2cOHssMzJjmfZoAXkNejqN0ZmnsbeuIHkcfzGpiWkqN8Lr7clQj1obLsn5yMd9mPsakyt6cJuJFutXVg18HiMX3MgM6LRDlPoVAOliCQXrDmMwl5JCxeegvKG%2FXObwXNJFOsGbP8XWeT9UNeGsi0%2BcdRG9%2FRDZdz2lFGpvVI%2B0qNDU0yjq35XWoTHBqSL6WSzi0CEzxobWXajhT2ZI3G5Lm6PdNG%2Bat--86iCIJ%2BSDZd04BD3--Qv5L6x69FAZSn46dlmmSjQ%3D%3D';
$headers[] = 'If-None-Match: W/\"4bea5c065facf4b3a916ce95cc874ba7\"';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$cookie = preg_replace('/[\s\S]*Cookie1\"\:\"(.+?)\"\}[\s\S]*/','$1', $result);

$cmd='yt-dlp https://www.instagram.com/p/'.$id.' --ffmpeg-location /app/web/data/ffmpeg --add-header "cookie: '.$cookie.'" -o '.$id.'.mov';

shell_exec($cmd.'>> 1.log');

echo $cmd;

$url = 'https://kod10362227.herokuapp.com/'.$id.'.mov';
echo $url;
header('Location: ' . $url);
