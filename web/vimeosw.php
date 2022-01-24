<?php
 
include "Snoopy.class.php";
$snoopy = new Snoopy;


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


      $ch=new Snoopy;
      //$ch->agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36"; //PC版
      $ch->agent = "Mozilla/5.0 (Linux; U; Android 8.1.0; zh-CN; Redmi 6 Pro Build/OPM1.171019.019) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/57.0.2987.108 UCBrowser/12.5.5.1035 Mobile Safari/537.36"; //手机版
      $ch->rawheaders["COOKIE"]= "sb=bhttYNW2dzPe7cbA1lhdPhug; wd=1920x917; datr=bhttYJOSfXFkD8rIC-ofuG_V; locale=zh_CN; c_user=100065599189914; xs=19%3At4iyGmJllrmRuA%3A2%3A1617763230%3A-1%3A-1; fr=1q1sjoeJJYgBZr38D.AWWYqFH2NMq-pzwuVDipjKyulTU.BgbRtu.40.AAA.0.0.BgbRuc.AWWItNWtTTI; spin=r.1003577549_b.trunk_t.1617763232_s.1_v.2_";  //登录
      
      //$ch->rawheaders["COOKIE"]= "datr=ilJgYLSnXSs45CEYM07zKU6I; sb=t1JgYJyq79SxhUUSlisLLw7x; m_pixel_ratio=1; locale=zh_CN; wd=1504x885; fr=1ZbMNGIjk2ImhUaf5..BgYFKx.Ez.AAA.0.0.BgYHkL.AWXFFh80hfk"; //游客 英文
      
      $ch->fetch($url1);

$html = $ch->results;
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
 
