<?php
 



$regex_link = '/(?<=\<a class\=\"item\_info\" href\=\")(.+?)(?=\"\>)/';
$regex_tit = '/(?<=\<span class\=\"title\_text\"\>)(.+?)(?=\<\/span\>)/';
$regex_con = '/(\<img src\=\"https\:\/\/i\.vimeocdn\.com\/video\/.*\"\>)/';
$regex_author = '/(?<=\<p\>from )(.+?)(?=\<\/p\>)/';
$regex_time = '/(?<=\<time datetime\=\")(.+?)(?=\" title\=)/';
$regex_pubdate = '/(?<=\<time datetime\=\")(.+?)(?=\" title\=)/';
$regex_dur = '/(?<=\<span class\=\"item\_duration\"\>)(.+?)(?=\<\/span\>)/';

$header = '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
 <title>Vimeo搜索</title>
 <link>http://www.vimeo.com/</link>
 <atom:link href="http://www.vimeo.com/" rel="self" type="application/rss+xml" />

 ';
$footer = '</channel></rss>';

$arr = array(
    '4444',
    '422hq',
    'prhq',
    'final',
    'dir cut',
    'Directors cut',
    'Director\'s cut',
    'dir.',
    'Producer',
    'edited',
    'editor',
    'apcn',
    'vfx',
    'Production',
    'Cinematographer',
    'dp:',
    'prores',
    'official video',
    'Music Video',
    'Directed',
    'Director'
);
$key = array_rand($arr, 1);

$url = 'https://vimeo.com/search/sort:latest?q='.$arr[$key].'&uploaded=this-week';
        $url1 = preg_replace('/ /','%20', $url);


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authority: cr8tiverow.com';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: none';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Ch-Ua: \" Not;A Brand\";v=\"99\", \"Google Chrome\";v=\"91\", \"Chromium\";v=\"91\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8,ja;q=0.7,fr;q=0.6,ru;q=0.5';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$html = curl_exec($ch);
//echo $html;
//echo $url1;

$date=date("h");

if (preg_match_all($regex_link, $html, $links) && preg_match_all($regex_tit, $html, $title)) {
    $size = count($links[0]);
    for ($i = 0;$i < $size;$i++) {
        $link = preg_replace('/(\/.*)/','https://vimeo.com$1', $links[0][$i]);
        preg_match_all($regex_pubdate, $html, $pubdate);
        preg_match_all($regex_con, $html, $article);
        preg_match_all($regex_tit, $html, $title);
        preg_match_all($regex_author, $html, $author);
        preg_match_all($regex_time, $html, $time);
        preg_match_all($regex_dur, $html, $dur);
        $title = preg_replace('/(?<=\<span class\=\"title\_text\"\>)(.+?)(?=\<\/span\>)/','$1', $title[0][$i]);
        $article = preg_replace('/(\<img src\=\"https\:\/\/i\.vimeocdn\.com\/video\/.*\"\>)/','$1', $article[0][$i]);
        $author = preg_replace('/(?<=\<p\>from )(.+?)(?=\<\/p\>)/','$1', $author[0][$i]);
        $time = preg_replace('/(?<=\<time datetime\=\")(.+?)(?=\" title\=)/','$1', $time[0][$i]);
        $title = preg_replace('/(?<=\<span class\=\"title\_text\"\>)(.+?)(?=\<\/span\>)/',($url.'$1'), $title);
        $pubdate = preg_replace('/(?<=\<time datetime\=\")(.+?)(?=\" title\=)/','$1', $pubdate[0][$i]);
        $url = preg_replace('/(https\:\/\/vimeo\.com\/search\/sort\:latest\?q\=|\&uploaded\=this\-week)/','', $url);
        
        $nowtime = time();
	    $time=strtotime($time);
	    $time=$nowtime - $time;

        $rss.= '<item>
                <title><![CDATA['.$title. ']]></title>
                <link>'.$link. '</link>
                <description><![CDATA['.$article.']]></description>
                <author>'.$author.'</author>
                <url>'.$url.'</url>  
                <pubDate>'.$pubdate.'</pubDate>  
                <dur>'.$dur[0][$i].'</dur>  
                </item>
                ';
    }
header("Content-type: text/xml");
    echo $header.$rss.$footer;

}
else {
header("Content-type: text/xml");
  echo $header.'<item> <title>出错，请检查 '.$date.'</title> <link>http://'.$date.$datem.'</link></item>'.$footer;
}

?>
 
