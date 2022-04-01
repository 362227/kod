<?php
date_default_timezone_set('PRC');










header("content-type:text/html;charset=utf-8");

//echo "页面每15秒刷新一次
//";
     

// 该函数每15秒钟刷新一次页面

//header("Refresh:15 ; url=tx.php");

      
$randNum = "/15s.gif?id=".rand(10,1000000);
//echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="'.$randNum.'"  width="67" height="34" style="background-color: #EAECEE;"></p>';
//echo date('H:i:s Y-m-d');

    

?>

<html>
<head>
<title>yt-dlp</title>

	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
    
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"

$( document ).ready(function() {
console.log( "ready!" );
});
function getLog() {
$.ajax({
    url: 'vimeodl上传百度网盘日志.php',
    dataType: 'html',
    success: function(html) {
        $("#bd").html(html);
        setTimeout(getLog, 5000); // refresh every 5 second
       }
    })
}
getLog();

</script>  	
	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
    
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"

$( document ).ready(function() {
console.log( "ready!" );
});
function getLog1() {
$.ajax({
    url: 'vimeodl下载日志.php',
    dataType: 'html',
    success: function(html) {
        $("#dl").html(html);
        setTimeout(getLog1, 5000); // refresh every 5 second
       }
    })
}
getLog1();

</script>  	

	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
    
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"

$( document ).ready(function() {
console.log2( "ready!" );
});
function getLog2() {
$.ajax({
    url: 'vimeo的115文件管理.php',
    dataType: 'html',
    success: function(html) {
        $("#file").html(html);
        setTimeout(getLog2, 11000); // refresh every 11 second
       }
    })
}
getLog2();

</script>  
	
</script>  
	
	
	 <script type="text/javascript">
    
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"


var windowWidth = $(window).width();

if (location.href.indexOf('reload')==-1)
{
   location.href=location.href+'?reload';
}

</script>  	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 <style>
input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
    color: #aab2bd;
    font-size: 11px;  
}
</style>	
<style>
body{
	background-color:#EAECEE;
	font-family:Arial;
	color:black;
}
.box{
	border: 1px solid;
	min-width:50px;
	margin:auto;
}

        label{
            cursor: pointer;
            display: inline-block;
            padding: 3px 6px;
            vertical-align:middle;
            text-align: right;
	    min-width:150px;
            vertical-align: top;
        }

        
.button::-moz-focus-inner{
  border: 0;
  padding: 0;
}

.button{
  display: inline-block;
  *display: inline;
  zoom: 1;
  padding: 6px 20px;
  margin: 0;
  cursor: pointer;
  border: 1px solid #bbb;
  overflow: visible;
  font: bold 13px arial, helvetica, sans-serif;
  text-decoration: none;
  white-space: nowrap;
  color: #555;
  
  background-color: #ddd;
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,1)), to(rgba(255,255,255,0)));
  background-image: -webkit-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  background-image: -moz-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  background-image: -ms-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  background-image: -o-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  background-image: linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  
  -webkit-transition: background-color .2s ease-out;
  -moz-transition: background-color .2s ease-out;
  -ms-transition: background-color .2s ease-out;
  -o-transition: background-color .2s ease-out;
  transition: background-color .2s ease-out;
  background-clip: padding-box; /* Fix bleeding */
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
  -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
  box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
  text-shadow: 0 1px 0 rgba(255,255,255, .9);
  
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.button:hover{
  background-color: #eee;
  color: #555;
}

.button:active{
  background: #e9e9e9;
  position: relative;
  top: 1px;
  text-shadow: none;
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
}

.button[disabled], .button[disabled]:hover, .button[disabled]:active{
  border-color: #eaeaea;
  background: #fafafa;
  cursor: default;
  position: static;
  color: #999;
  /* Usually, !important should be avoided but here it's really needed :) */
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  text-shadow: none !important;
}

/* Smaller buttons styles */

.button.small{
  padding: 4px 12px;
}

/* Larger buttons styles */

.button.large{
  padding: 12px 30px;
  text-transform: uppercase;
}

.button.large:active{
  top: 2px;
}

/* Colored buttons styles */

.button.green, .button.red, .button.blue {
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.2);
  
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,.3)), to(rgba(255,255,255,0)));
  background-image: -webkit-linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
  background-image: -moz-linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
  background-image: -ms-linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
  background-image: -o-linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
  background-image: linear-gradient(top, rgba(255,255,255,.3), rgba(255,255,255,0));
}

/* */

.button.green{
  background-color: #57a957;
  border-color: #57a957;
}

.button.green:hover{
  background-color: #62c462;
}

.button.green:active{
  background: #57a957;
}

/* */

.button.red{
  background-color: #ca3535;
  border-color: #c43c35;
}

.button.red:hover{
  background-color: #ee5f5b;
}

.button.red:active{
  background: #c43c35;
}

/* */

.button.blue{
  background-color: #269CE9;
  border-color: #269CE9;
}

.button.blue:hover{
  background-color: #70B9E8;
}

.button.blue:active{
  background: #269CE9;
}

/* */

.green[disabled], .green[disabled]:hover, .green[disabled]:active{
  border-color: #57A957;
  background: #57A957;
  color: #D2FFD2;
}

.red[disabled], .red[disabled]:hover, .red[disabled]:active{
  border-color: #C43C35;
  background: #C43C35;
  color: #FFD3D3;
}

.blue[disabled], .blue[disabled]:hover, .blue[disabled]:active{
  border-color: #269CE9;
  background: #269CE9;
  color: #93D5FF;
}

/* Group buttons */

.button-group,
.button-group li{
  display: inline-block;
  *display: inline;
  zoom: 1;
}

.button-group{
  font-size: 0; /* Inline block elements gap - fix */
  margin: 0;
  padding: 0;
  background: rgba(0, 0, 0, .1);
  border-bottom: 1px solid rgba(0, 0, 0, .1);
  padding: 7px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
  border-radius: 7px;
}

.button-group li{
  margin-right: -1px; /* Overlap each right button border */
}

.button-group .button{
  font-size: 13px; /* Set the font size, different from inherited 0 */
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
}

.button-group .button:active{
  -moz-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
  -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
  box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
}

.button-group li:first-child .button{
  -moz-border-radius: 3px 0 0 3px;
  -webkit-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}

.button-group li:first-child .button:active{
  -moz-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
  -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
  box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, -5px 0 5px -3px rgba(0, 0, 0, .2) inset;
}

.button-group li:last-child .button{
  -moz-border-radius: 0 3px 3px 0;
  -webkit-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}

.button-group li:last-child .button:active{
  -moz-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset;
  -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset;
  box-shadow: 0 0 1px rgba(0, 0, 0, .2) inset, 5px 0 5px -3px rgba(0, 0, 0, .2) inset;
}
</style>
	
</head>
<body>
<center>
<h1>yt-dlp</h1>
<p></p>
	
	
<form action="tx.php" method="get" value="Value-1" target="iframe">
        <fieldset>
        <p>
            <label for="url" >输入链接（URL）：</label>
            <textarea name="url"  rows="3" align="left" placeholder="支持批量！注意：任务在运行时请勿提交链接" style="font-size:18px; width:100%" ></textarea>
        </p>
        <p>
            <label for="rename">重命名（可留空）：</label>
            <input type="text" id="rename" name="rename" placeholder="仅支持单条链接..." align="left" style="font-size:21px; width:100%">
        </p>
        
<body>

<button id="btn" onclick="fun()" class="small button" value="Go Elsewhere" formaction="/elsewhere" target="iframe">显示/隐藏“高级选项”</button>
<div id="con" style="display: none">



        <p>
            <label for="rename">命令行（可留空）：</label>
            <input type="text" id="cmd" name="cmd" align="left" style="font-size:20px">
        </p>

<p>是否上谷网盘：  
 <select name="ifgd" >谷歌网盘账号
        <option value="yes">是</option>
        <option value="no">否</option>
    </select>

  账户： <select name="gdname" >谷歌网盘账号
        <option value="ysf2020">ysf2020</option>
        <option value="ysf20202">ysf20202</option>
        <option value="10362227">10362227</option>
    </select></p>
    
    
<p>是否上传115网盘）：  
 <select name="if115" >谷歌网盘账号
        <option value="yes">是</option>
        <option value="no">否</option>
    </select>

<p><button id="bt000" value="delete" formaction="/vimeo强制所有上传115.php" target="iframe"style="background-color: #F2462B;">强制上传115</button>
<button id="bt" value="killall" formaction="/killall.php" target="iframe" style="background-color: #F2462B;">杀掉所有进程</button></p>

</div>

<script type="text/javascript">
    var flag = false;
    var div = document.getElementById("con");

    function fun() {
        if (flag ^= true) {
            div.style.display = "block";    // 显示
        } else {
            div.style.display = "none";     // 隐藏
        }
    }
</script>
<iframe name="iframe" style="display:none"></iframe> 
        




<p hidden><button id="btn1" onclick="funa()" target="iframe">提交</button></p>
<p hidden><button id="btn1" onclick="location.reload()"  target="iframe">提交</button></p>
<p><button id="btn1" class="blue button"  onclick="window.location.href='tx.php'">提交</button></p>
<div1 id="abc" style="display: none">



        <p>添加成功 </p>





</div1>

<script type="text/javascript">
    var flag = false;
    var div1 = document.getElementById("abc");

    function funa() {
        if (flag ^= true) {
            div1.style.display = "block";    // 显示
        } else {
            div1.style.display = "none";     // 隐藏
        }
    }
</script>
<iframe name="iframe" style="display:none"></iframe> 
        </fieldset>
</form>

</body>



<p><a href="tx.php"><u>点击刷新</u></a></p>
<h1></h1>
<div class="box">
<?php

$cmd = $_GET['cmd'];
$lenthcmd=strlen($cmd); //获取cmd长度
if ($lenthcmd>1) { echo shell_exec("$cmd > /app/web/vimeodlcmd.txt 2>&1");} //命令行
	
$A=strtotime("now");
if(file_exists("000000000000000000000vimeodl上传百度网盘日志.txt")){ 
    $F=date(filemtime("vimeodl上传百度网盘日志.txt"));
    $Y = $A- $F;  //上传百度网盘最后修改
    $fp = file("vimeodl上传百度网盘日志.txt");
    $lastline = $fp[count($fp)-1]; //最后一行
    if($Y < 7 || preg_match_all('/.*检测秒传中, 请稍候|准备上传.*/', $lastline, $lastline)) {echo '<caption><h3><font color="#FF0000">正在执行上传任务，请勿添加新链接，否则本任务会被强行取消</font></h3></caption>';}
}

if(file_exists("0000000000000000000000vimeodl下载日志.txt")){ 
    $G=date(filemtime("vimeodl下载日志.txt"));
    $X = $A- $G;
    if($X < 7) {echo '<caption><h3><font color="#FF0000">正在执行下载任务，请勿添加新链接，否则本任务会被强行取消</font></h3></caption>';}
}


unlink("/app/web/vimeodl/0000");
unlink("/app/web/115/0000");
$actual_link = 'https://'.$_SERVER['HTTP_HOST'];
shell_exec("wget $actual_link -nc -O kod10362227.txt");
shell_exec("curl -L $actual_link");	






$url = $_GET['url'];
//echo $url;











$rename = $_GET['rename'];
	
$lenth=strlen($url); //获取url长度
$renamelenth=strlen($rename); //获取rename长度
if ($lenth>8) {
    
    
$mvid = preg_replace('/[\s\S]*\/([\s\S]{11}).*/', '$1', $url); //获取视频id
//$mvid= 'w0041wlj4mt';
$qqpage1= 'https://u.y.qq.com/cgi-bin/musicu.fcg?data={%22comm%22:{%22ct%22:6,%22cv%22:0,%22g_tk%22:5381,%22uin%22:0,%22format%22:%22json%22,%22platform%22:%22yqq%22},%22mvInfo%22:{%22module%22:%22video.VideoDataServer%22,%22method%22:%22get_video_info_batch%22,%22param%22:{%22vidlist%22:[%22'.$mvid.'%22],%22required%22:[%22vid%22,%22type%22,%22sid%22,%22singers%22,%22name%22,%22pubdate%22,%22%22,%22fileid%22,%22filesize%22],%22format%22:264}}}';
$qqpage1data = file_get_contents($qqpage1);

$qmmv = preg_replace('/.+?\"fileid\"\: \"(.+?)\"[\s\S]*/', '$1', $qqpage1data); 
//echo $qmmv;
$singers = preg_replace('/.+?\"name\"\: \"(.+?)\"\, \"pubdate\".+?\"singers\".+?\"name\"\: \"(.+?)\"[\s\S]*/', '$2', $qqpage1data); 
//echo $singers;
$song = preg_replace('/.+?\"name\"\: \"(.+?)\"\, \"pubdate\".+?\"singers\".+?\"name\"\: \"(.+?)\"[\s\S]*/', '$1', $qqpage1data); 
//echo $song;
$sid = preg_replace('/.+?\"sid\"\: (.+?)\,[\s\S]*/', '$1', $qqpage1data); 
//echo $sid;


$qqpage2 = file_get_contents('https://vv.video.qq.com/getinfo?otype=ojson&vids='.$mvid);
$pubdate = preg_replace('/.*\"uptime\"\:(.+?)\,\"[\s\S]*/', '$1', $qqpage2);
date_default_timezone_set('PRC');
$pubdate = date("Y-m-d H:i",$pubdate);
$year =  preg_replace('/([0-9]{4})[\s\S]*/', '$1', $pubdate); 
//cho $year;


$filename = $singers.' - '.$song.' '.$year.'_'.$sid;
echo $filename.'<br>';

$qqurl1 = 'http://50069.gzc.svp.tencent-cloud.com/'.$qmmv.'.f0.mp4';
//echo $qqurl1;
$qqurl2 = 'http://50069.gzc.svp.tencent-cloud.com/'.$qmmv.'.f0.mov';
$qqurl3 = 'http://50069.gzc.svp.tencent-cloud.com/'.$qmmv.'.f0.m4v';
$qqurl4 = 'http://50069.gzc.svp.tencent-cloud.com/'.$qmmv.'.f0.mkv';
$qqurl5 = 'http://50069.gzc.svp.tencent-cloud.com/'.$qmmv.'.f0.m2p';
$qqurl6 = 'http://50069.gzc.svp.tencent-cloud.com/'.$qmmv.'.f0.ts';
$qqurl7 = 'http://50069.gzc.svp.tencent-cloud.com/'.$qmmv.'.f0.mpg';
$qqurl8 = 'http://50069.gzc.svp.tencent-cloud.com/'.$qmmv.'.f0.avi';

$response1 = get_headers($qqurl1); //看看链接返回
// echo $response1[0];
$response2 = get_headers($qqurl2); //看看链接返回
//echo $response2[0];
$response3 = get_headers($qqurl3); //看看链接返回
$response4 = get_headers($qqurl4); //看看链接返回
$response5 = get_headers($qqurl5); //看看链接返回
$response6 = get_headers($qqurl6); //看看链接返回
$response7 = get_headers($qqurl7); //看看链接返回
$response8 = get_headers($qqurl8); //看看链接返回


if(preg_match('/200/',$response1[0])){ 
    $qqurl = $qqurl1;
  //  echo $qqurl;
} elseif (preg_match('/200/',$response2[0])) {
    $qqurl = $qqurl2;
  //  echo $qqurl;
} elseif (preg_match('/200/',$response3[0])) {
    $qqurl = $qqurl3;
 //   echo $qqurl;
} elseif (preg_match('/200/',$response4[0])) {
    $qqurl = $qqurl4;
  //  echo $qqurl;
} elseif (preg_match('/200/',$response5[0])) {
    $qqurl = $qqurl5;
  //  echo $qqurl;
} elseif (preg_match('/200/',$response6[0])) {
    $qqurl = $qqurl6;
   // echo $qqurl;
} elseif (preg_match('/200/',$response7[0])) {
    $qqurl = $qqurl7;
  //  echo $qqurl;
} elseif (preg_match('/200/',$response8[0])) {
    $qqurl = $qqurl8;
}else {
    echo "无法获取地址<br>";
}

echo $qqurl.'<br>';

$format = preg_replace('/[\s\S]*(\..*)/', '$1', $qqurl);  //获取视频格式mov、mp4等等
//echo $format;   
    
    
    
    
    
    
    
    
    

file_put_contents('qqurl.txt', $qqurl);
file_put_contents('qqname.txt', $filename);
	
$string = file_get_contents('vimeodlurl.txt');
 
//$links =  preg_replace('/(.*)/', '<a href="$1">$1</a><br>', $url);
$links =  preg_replace('/(.{0,51})(.*)/', '<a href="$1$2">$1</a><br>', $string); 
file_put_contents('vimeodlhtmlurl.txt', $links);
	
	
$date = date('Y-m-d-H-i-s');
shell_exec("mkdir $date");
	
shell_exec("rm -rf /app/web/vimeodl/*.part"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl/*.ytdl"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl/*.part-Frag*"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl上传百度网盘日志.txt"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl下载日志.txt"); //删除临时文件
//shell_exec("pkill BaiduPCS-Go");
shell_exec("pkill yt-dlp");
shell_exec("rm -rf /app/web/vimeodlcmd.txt"); //删除临时文件

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
header("Content-type:text/html;charset=utf-8");
ignore_user_abort(true); // 后台运行，不受前端断开连接影响
set_time_limit(7600); // 脚本最多运行3个小时
//后台运行的后面还要，set_time_limit(0); 除非在服务器上关闭这个程序，否则下面的代码将永远执行下去止到完成为止。
//如果程序运行不超时,在没有执行结束前,程序不会自动结束的.
//=========================================
//PHP中，在客户端发出请求触发脚本执行，然后在服务器端执行一段代码，页面关闭了也要继续执行，并且要先返回一些状态给客户端，避免前端等待超时。
ob_end_clean();//清除之前的缓冲内容，这是必需的，如果之前的缓存不为空的话，里面可能有http头或者其它内容，导致后面的内容不能及时的输出
header("Connection: close");//告诉浏览器，连接关闭了，这样浏览器就不用等待服务器的响应
header("HTTP/1.1 200 OK"); //可以发送200状态码，以这些请求是成功的，要不然可能浏览器会重试，特别是有代理的情况下
//return false;//加了这个下面的就不执行了，不加这个无法返回页面状态，浏览器一直在等待状态，可以关闭，但不是要的效果。
//die(); 或 return ;也一样不执行下面的
//runRack();自定义函数
//register_shutdown_function("runRack");
//return  ;
ob_start();//开始当前代码缓冲
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>div居于页面正中间</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            background-color: #EAEAEA;
        }

        .center-in-center{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="center-in-center"><p><h1>已添加成功。勿刷新该页面！<a href="/tx.php" class="item project">点击返回查看进度</a></h1></p></div>
</body>
</html>';
	
//下面输出http的一些头信息
$size = ob_get_length();
header("Content-Length: $size");
ob_end_flush();//输出当前缓冲
flush();//输出PHP缓冲
//在Yii2框架下，上面代码可能不会立即返回给客户端，所以需要加如下的代码，即可实现立即返回给客户端
//具体可查看此文章： http://www.lampnick.com/php/375

if (function_exists("fastcgi_finish_request")) {
fastcgi_finish_request(); /* 响应完成, 关闭连接 */
}
/*
 休眠PHP，也就是当前PHP代码的执行停止，20秒钟后PHP被唤醒，
 PHP唤醒后，继续执行下面的代码，但这个时候上面代码的结果已经输出浏览器了，
 也就是浏览器从HTTP头中知道了服务端关闭了连接，浏览器将不在等待服务器的响应，
 反应给客户的就是页面不会显示处于加载状态，换句话说用户可以关掉当前页面，或者关掉浏览器，
 PHP唤醒后继续执行下面的代码，这也就实现了PHP后台执行的效果，
 休眠的作用只是让php先把前面的输出作完，不要急于马上执行下面的代码，休息一下而已，也就是说下面的代码
 执行的时候前面的输出应该到达浏览器了
*/
sleep(3);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
if ($renamelenth>1) {
    echo shell_exec("cd /app/web/vimeodl/ && /app/web/data/yt-dlp -a /app/web/vimeodlurl.txt -o '$rename' --no-mtime > /app/web/vimeodl下载日志.txt 2>&1");}
    else  {
        echo shell_exec("cd /app/web/vimeodl/ && /app/web/data/yt-dlp -a /app/web/vimeodlurl.txt -o '$filename.$format' --no-mtime > /app/web/vimeodl下载日志.txt 2>&1");}
//$output = file_get_contents ("1.log");
//echo $output;

echo "下载";
	

//$content = file_get_contents("https://kod362227.herokuapp.com/vimeodl上传百度网盘.php");	
//shell_exec("wget https://kod362227.herokuapp.com/vimeodl上传百度网盘.php -nc -O kod10362227-1-1.txt");
//echo $content;
echo shell_exec("php vimeodl上传百度网盘.php");

	
echo '这里的输出用户看不到，后台运行的';
//下面代码的任何输出都不会输出给浏览器，因为http连接已经关了，
//所以下面的代码的执行属于后台运行的
ignore_user_abort(true); // 后台运行，这个只是运行浏览器关闭，并不是直接就中止返回200状态。
set_time_limit(7600); // 脚本最多运行1个小时
runRack();
function runRack()
{
file_put_contents("/usr/share/nginx/kodexplorer/data/User/admin/home/10362227/runBack.txt", "后台运行输出结果");
}
	
	
?>
</div>
<p>
	
	

	

	
	
	
	
	
	
<?php


	
}
$B=date(filemtime("上传115.txt"));
$A=strtotime("now");
$C=$A - $B;

if($C < 4) {echo '<caption><h1><font color="#FF0000">正在上传115，请只打开一个网站，否则可能崩溃</font></h1></caption>';}

$content = file_get_contents("vimeodlcmd.txt");
echo $content;
	


echo '<a href="'.file_get_contents("qqurl.txt").'" target="_blank">'.file_get_contents("qqurl.txt").'</a>';
echo "<br>";
echo file_get_contents("qqname.txt");



//echo '<caption><h3>下载进度</h3></caption>';
//$content = file_get_contents("vimeodl下载日志.txt");
//$content = preg_replace('/[\s\S]*(\[download\].*)/','$1', $content);
//echo $content;
echo '<div id="dl"></div>';

//echo '<caption><h3>上传百度网盘进度</h3></caption>';
//$content = file_get_contents("/app/web/vimeodl上传百度网盘日志.txt");	
//shell_exec("wget https://kod362227.herokuapp.com/vimeodl上传百度网盘.php -nc -O kod10362227-1-1.txt");
//echo $content;
echo '<div id="bd"></div>';	





echo '<style type="text/css">

/* General styles */

BODY {
	background-color:#EAECEE;
	font-family:Verdana;
	font-size:small;
}

A {
	color: #000000;
	text-decoration: none;
}

A:hover {
	text-decoration: underline;
}

#top {
	width:100%;
	padding-bottom: 20px;
}

#top a span, #top a:hover, #top a span:hover{
	color:#68a9d2;
	font-weight:bold;
	text-align:center;
	font-size:large;
}

#top a {
	display:block;
	padding:20px 0 0 0;
}

#top span {
	display:block;
}

div.subtitle{
	width:80%;
	margin: 0 auto;
	color:#68a9d2;
	text-align:center;
}

#frame {
	border: 1px solid #CDD2D6;
	text-align:left;
	position: relative;
	margin: 0 auto;
	max-width:auto;
	overflow:hidden;
}

#error {
	max-width:450px;
	background-color:#EAECEE;
	color:#EAECEE;
	padding:7pt;
	position: relative;
	margin: 10pt auto;
	text-align:center;
	border: 1px dotted #CDD2D6;
}

input {
	border: 1px solid #CDD2D6;
}

.bar{
	width:100%;
	clear:both;
	height:1px;
}

/* File list */

table.table {
	width:100%;
	border-collapse: collapse;
	table-layout: fixed;
	word-wrap: break-word;
}

table.table td{
	padding:3px;
}

table.table tr.row.two {
	background-color:#E3E6F0;
}

table.table tr.row.one {
	background-color:#f8f9fa;
}

table.table tr.row td.icon {
	width:25px;
	padding-top:3px;
	padding-bottom:1px;
}

table.table td.del {
	width:25px;
}

table.table tr.row td.size {
	width: 100px;
	text-align: right;
}

table.table tr.row td.changed {
	width: 150px;
	text-align: center;
}

table.table tr.header img {
	vertical-align:bottom;
}

table img{
	border:0;
}

/* Info area */

#info {
	color:#000000;
	font-family:Verdana;
	max-width:680px;
	position: relative;
	margin: 0 auto;
	text-align:center;
}

/* Thumbnail area */

#thumb {
	position:absolute;
	border: 1px solid #CDD2D6;
	background:#f8f9fa;
	display:none;
	padding:3px;
}

#thumb img {
	display:block;
}

/* Login bar (at the bottom of the page) */
#login_bar {
	margin: 0 auto;
	margin-top:2px;
	max-width:680px;
}

#login_bar input.submit{
	float:right;
}

/* Upload area */

#upload {
	margin: 0 auto;
	margin-top:2px;
	max-width:680px;
}

#upload #password_container {
	margin-right:20px;
}

#upload #newdir_container, #upload #password_container {
	float:left;
}

#upload #upload_container{
	float:right;
}

#upload input.upload_dirname, #upload input.upload_password{
	width:140px;
}

#upload input.upload_file{
	font-size:small;
}

/* Breadcrumbs */

div.breadcrumbs {
	display:block;
	padding:1px 3px;
	color:#cccccc;
	font-size:x-small;
}

div.breadcrumbs a{
	display:inline-block;
	color:#cccccc;
	padding:2px 0;
	font-size:small;
}

/* Login area */

#login {
	max-width:280px;
	text-align:right;
	margin:15px auto 50px auto;
}

#login div {
	display:block;
	width:100%;
	margin-top:5px;
}

#login label{
	width: 120px;
	text-align: right;
}

/* Mobile interface */

body.mobile #frame, body.mobile #info, body.mobile #upload {
	max-width:none;
}

body.mobile {
	font-size:medium;
}

body.mobile a.item {
	display:block;
	padding:10px 0;
}

body.mobile a.item span.size {
	float:right;
	margin-left:10px;
}

body.mobile table.table {
	margin-bottom:30px;
}

body.mobile table.table tr td {
	border-top: 1px solid #CDD2D6;
}

body.mobile table.table tr.last td {
	border-bottom: 1px solid #CDD2D6;
}

body.mobile #top {
	padding-bottom:3px;
}

body.mobile #top a {
	padding-top:3px;
}

body.mobile #upload #password_container, body.mobile #upload #upload_container, body.mobile #upload #newdir_container {
	float:none;
	margin-top:5px;
}

body.mobile #upload input.upload_dirname, body.mobile #upload input.upload_password{
	width:240px;
}

body.mobile #upload {
	margin-bottom:15px;
}

</style>




<body class="mobile">
<div id="frame">
<div id="top">
	
</div>



';

//$actual_link = 'https://'.$_SERVER['HTTP_HOST']; 
//$page = file_get_contents($actual_link.'/encodeexplorer.index.php?m&sort_by=mod&sort_as=desc&dir=115/');

//$page = str_replace("src=\"?img","src=\"encodeexplorer.index.php?img",$page);
//$page = str_replace("<a href=\"?s&amp;dir=115/\">","<a href=\"encodeexplorer.index.php?sort_by=mod&sort_as=desc&dir=115/\">",$page);
//echo '<p hidden>'.$page.'</p>';
	
echo '<div id="file"></div>';	
	
	

?>
</p>

<p align="center"><a href="vimeodl下载日志.txt"><font size="2">下载日志</font></a>  ·  <a href="vimeodl上传百度网盘日志.php"><font size="2">上传百度网盘日志</font></a>  ·  <a href="上传115.php"><font size="2">上传115网盘日志</font></a></p>

</body>
</html>
