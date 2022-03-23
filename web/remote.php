<?php
date_default_timezone_set('PRC');










header("content-type:text/html;charset=utf-8");

echo "页面每55秒刷新一次
";
     

// 该函数每55秒钟刷新一次页面

header("Refresh:55 ; url=remote.php");

      

echo date('H:i:s Y-m-d');

    

?>

<html>
<head>
<title>youtube-dl</title>
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
            text-align: right;
	    min-width:150px;
            vertical-align: top;
        }
</style>
</head>
<body>
<center>
<h1>youtube-dl</h1>
<p></p>
	
	
<form action="remote.php" method="get" value="Value-1" target="iframe">
        <fieldset>
        <p>
            <label for="url" >输入链接（URL）：</label>
            <input type="text" id="url" name="url" align="left" style="font-size:20px">
        </p>
        <p>
            <label for="rename">重命名（可留空）：</label>
            <input type="text" id="rename" name="rename" align="left" style="font-size:20px">
        </p>
        
<body>

<button id="btn" onclick="fun()" value="Go Elsewhere" formaction="/elsewhere" target="iframe">显示/隐藏“高级选项”</button>
<div id="con" style="display: none">



        <p>
            <label for="rename">命令行（可留空）：</label>
            <input type="text" id="cmd" name="cmd" align="left" style="font-size:20px">
        </p>


<p>MV还是现场：  
 <select name="mvorlive" >MV还是现场
        <option value="mv">MV</option>
        <option value="live">现场</option>
    </select></p>
    
<p>是否上谷网盘：  
 <select name="ifgd" >是否上谷网盘
        <option value="nohup">是</option>
        <option value="curl">否</option>
    </select>

  账户： <select name="gdname" >谷歌网盘账号
        <option value="ysf2020">ysf2020</option>
        <option value="ysf20202">ysf20202</option>
        <option value="10362227">10362227</option>
    </select></p>
    
<p>是否百度网盘：  
 <select name="ifbd" >是否上传百度网盘
        <option value="nohup">是</option>
        <option value="curl">否</option>
    </select>
	
	是否代理：  
 <select name="ifbdproxy" >代理
        <option value="curl">否</option>
        <option value="nohup">是</option>
    </select></p>
    
<p>是否上传115网盘：  
 <select name="if115" >是否上传115网盘
        <option value="nohup">是</option>
        <option value="curl">否</option>
    </select> 

	是否代理：  
 <select name="if115proxy" >代理
        <option value="curl">否</option>
        <option value="nohup">是</option>
    </select></p>


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
        




<p><button id="btn1" onclick="funa()" target="iframe">提交</button></p>
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



<p><a href="remote.php"><u>点击刷新</u></a></p>
<h1></h1>
<div class="box">
<?php
$cmd = $_GET['cmd'];
$lenthcmd=strlen($cmd); //获取cmd长度
if ($lenthcmd>1) { echo shell_exec("$cmd");} //命令行



$A=strtotime("now");
if(file_exists("remote上传百度网盘.txt")){ 
    $F=date(filemtime("remote上传百度网盘.txt"));
    $Y = $A- $F;  //上传百度网盘最后修改
    $fp = file("remote上传百度网盘.txt");
    $lastline = $fp[count($fp)-1]; //最后一行
    if($Y < 7 || preg_match_all('/.*检测秒传中, 请稍候|准备上传.*/', $lastline, $lastline)) {echo '<caption><h3><font color="#FF0000">正在执行上传任务，请勿添加新链接，否则本任务会被强行取消</font></h3></caption>';}
}
if(file_exists("remote下载日志.txt")){ 
    $G=date(filemtime("remote下载日志.txt"));
    $X = $A- $G;
    if($X < 7) {echo '<caption><h3><font color="#FF0000">正在执行下载任务，请勿添加新链接，否则本任务会被强行取消</font></h3></caption>';}
}


unlink("/app/web/remote/0000");
unlink("/app/web/115/0000");
$actual_link = 'https://'.$_SERVER['HTTP_HOST'];
shell_exec("wget $actual_link -nc -O kod10362227.txt");
shell_exec("curl -L $actual_link");	

	

	               
$url = $_GET['url'];
$mvorlive = $_GET['mvorlive'];
$rename = $_GET['rename'];
$gdname = $_GET['gdname']; //ysf2020 ysf20202
$if115 = $_GET['if115'];
//$if115 = preg_replace('/yes/','nohup', $if115); 
$ifbd = $_GET['ifbd'];
//$ifbd = preg_replace('/yes/','nohup', $ifd); 
$ifgd = $_GET['ifgd'];
//$ifgd = preg_replace('/yes/','nohup', $ifgd); 
	
$mvorlivelenth = strlen($mvorlive); // mv 2个字节 live 4 个字节
if ($mvorlivelenth < 3) {$gddir='大叔2019/Master/没有在硬盘';  //小于3，就是MV
	               $bddir='/DC大叔2019 2022-1-5/Master/没有在硬盘/';
                   $dir115='2051423373887536630';
}
 else {$gddir='Temp';
	   $bddir='/';
       $dir115='2051109780465909616';
 }
	
	
$lenth=strlen($url); //获取url长度
$renamelenth=strlen($rename); //获取rename长度
if ($lenth>8) {
file_put_contents('remoteurl.txt', $url);
$date = date('Y-m-d-H-i-s');
shell_exec("mkdir $date");
	
shell_exec("rm -rf /app/web/remote/*.part"); //删除临时文件
shell_exec("rm -rf /app/web/remote/*.ytdl"); //删除临时文件
shell_exec("rm -rf /app/web/remote/*.part-Frag*"); //删除临时文件
shell_exec("rm -rf /app/web/remote上传百度网盘.txt"); //删除临时文件
shell_exec("rm -rf /app/web/remote上传115网盘.txt"); //删除临时文件
shell_exec("rm -rf /app/web/remote上传谷歌网盘.txt"); //删除临时文件
shell_exec("rm -rf /app/web/remote下载日志.txt"); //删除临时文件
//shell_exec("pkill BaiduPCS-Go");
shell_exec("pkill yt-dlp");
sleep(3);

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
    <div class="center-in-center"><p><h1>已添加成功。勿刷新该页面！<a href="/remote.php" class="item project">点击返回查看进度</a></h1></p></div>
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
	
	
	
	
	
	
	
	
	
	
	
	
//下载+上传谷歌+上传百度网盘+上传115	
shell_exec("find /app/web/remote/* -type f -size -5M -delete"); //删除小文件
shell_exec("rm -rf /app/web/remote/*.part"); //删除临时文件





	
	
//下载------------------------
if ($renamelenth>1) {
    echo shell_exec("cd /app/web/$gdname/ && /app/web/data/yt-dlp '$url' -o '$rename' --no-mtime > /app/web/remote下载日志.txt");}
    else  {
        echo shell_exec("cd /app/web/$gdname/ && /app/web/data/yt-dlp '$url' --no-mtime > /app/web/remote下载日志.txt");}
//$output = file_get_contents ("1.log");
//echo $output;
//下载------------------------


//上传谷歌网盘------------------------
echo shell_exec("find /app/web/$gdname/* -type f -size -5M -delete"); //删除小文件
shell_exec("wget https://362227.top/rclone.conf -nc -O /app/web/data/rclone.conf"); //下载rclone配置
echo shell_exec("$ifgd /app/web/data/rclone  copy '/app/web/$gdname' $gdname:$gddir --transfers=2 -P --stats-one-line --contimeout 5h --max-depth 1 --size-only --exclude *.{bak,txt,oexe,html,php}  > 'remote上传谷歌网盘.txt'");
//上传谷歌网盘------------------------

	
//上传百度网盘------------------------
echo shell_exec("find /app/web/$gdname/* -type f -size -5M -delete"); //删除小文件
//echo shell_exec("/app/web/data/BaiduPCS-Go config set -proxy=127.0.0.1:8100");
echo shell_exec("/app/web/data/BaiduPCS-Go login -cookies='XFT=T7BdQ2kj9qaOHLNQBzLXecEDq0NSMR1/cFI9Pg7+cP4=; XFCS=A0BAA1D3C3AFF60D8A9501F61A5316EB2F44DC96D5D069E28D965E876B51558D; BAIDUID_BFESS=1FAD127BAC0642BD179AE9232E9D3EAC:FG=1; __yjs_duid=1_b83edfa36c48d34c5d422654ad9291ff1632462458498; BAIDUID=EB8C0978CD2A3182C0C963B26A4F83BC:FG=1; BDUSS=zBnQnprSmR3c0xvSDh1Wk5vT3pkMmpSN2tTTlc4R2g1dUJKS2pKUnhpSnVGM1poRVFBQUFBJCQAAAAAABAAAAEAAAD2Tdr6REO088rlMjAxOQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAG6KTmFuik5hN; BDUSS_BFESS=zBnQnprSmR3c0xvSDh1Wk5vT3pkMmpSN2tTTlc4R2g1dUJKS2pKUnhpSnVGM1poRVFBQUFBJCQAAAAAABAAAAEAAAD2Tdr6REO088rlMjAxOQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAG6KTmFuik5hN; pan_login_way=1; csrfToken=Q7ezNP5m-MPzubHlXKXZKmR0; STOKEN=a035eb4833e11aabcfaf438a90d977308679fbe717aa1381ff4a276541884cbe; ZD_ENTRY=empty; PANPSC=6330118974698879948:HSTAF2XekfrDfJxofQvIR8/yqoAddd3nU4bHmv7k1lQb6OtHeDgTZITtPba1v5pWKB+Q1NY39EqaV1QHy3lx2+uwJgkIjG1NcDLxProYXAAu/GN14ZZ7XobjAuQ0lbzSIpBwzouoN4Fjy4bwAz5jQiHq5mg/cPBDsGdcW9T0tiRm65hzsZIwfARwtfBixKqXMKjxtxPUcwo='
");
echo shell_exec("/app/web/data/BaiduPCS-Go config set -pcs_addr c4.pcs.baidu.com");
echo shell_exec("/app/web/data/BaiduPCS-Go config set -max_upload_parallel 99");
echo shell_exec("/app/web/data/BaiduPCS-Go config set -pcs_addr c4.pcs.baidu.com");
if ($ifbdproxy === 'curl') { 
    echo shell_exec("$ifbd /app/web/data/BaiduPCS-Go upload /app/web/$gdname/* '$bddir' --retry 8 > /app/web/remote上传百度网盘没有代理.txt");
	   
}
 else {
      echo shell_exec("/app/web/data/v2ray -config /app/web/data/v2rayheroku.json & sleep 2 && $ifbd /app/web/data/proxychains /app/web/data/BaiduPCS-Go upload /app/web/$gdname/* '$bddir' --retry 8 | tee /app/web/remote上传百度网盘.txt"); //如果开代理运行此命令
 }

//上传百度网盘------------------------
	

//上传115网盘------------------------
echo shell_exec("find /app/web/remote115/* -type f -size -5M -delete"); //删除小文件
echo shell_exec("mv /app/web/$gdname/* /app/web/remote115"); //移动到115文件夹，准备上传115网盘
echo shell_exec("curl https://362227.top/fake115uploader.json > /app/web/data/fake115uploader.json");
if ($if115proxy === 'curl') { 
    echo shell_exec("$if115 /app/web/data/fake115uploader -retry 3 -e -c $dir115 -u /app/web/remote115/* > '/app/web/remote上传115网盘.txt'");
	   
}
 else {
      echo shell_exec("/app/web/data/v2ray -config /app/web/data/v2rayheroku.json & sleep 2 && $if115 /app/web/data/proxychains /app/web/data/fake115uploader -retry 3 -e -c $dir115 -u /app/web/remote115/* > '/app/web/remote上传115网盘.txt'"); //如果开代理运行此命令
 }


$fp = '/app/web/remote115/';  
   function is_empty_dir($fp)    //判断文件夹是否有文件，返回1表示没有文件，返回2表示有
    {    
        $H = @opendir($fp); 
        $i=0;    
        while($_file=readdir($H)){    
            $i++;    
        }    
        closedir($H);    
        if($i>2){ 
            return 1; 
        }else{ 
            return 2;  //true
        } 
    }

//如果文件夹不为空，执行下列命令
if (is_empty_dir($fp) === 2 ) {echo shell_exec("$if115 /app/web/data/fake115uploader -retry 3 -e -c $dir115 -m /app/web/remote115/* >> '/app/web/remote上传115网盘.txt'");}
//上传115度网盘------------------------

	
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

$url1 = file_get_contents("remoteurl.txt");
$url2 = preg_replace('/(^http|^youtube|^vimeo|^www)([\s\S]{8,50}).*/','$1$2', $url1); //取url前8-50个作为超链名字
echo '<p>链接：<a href="'.$url1.'">'.$url2.'</a></p>';

echo '<caption><h3>下载进度</h3></caption>';
$content = file_get_contents("remote下载日志.txt");
$content = preg_replace('/[\s\S]*(\[download\].*)/','$1', $content);
echo $content;

echo '<caption><h3>上传谷歌网盘进度</h3></caption>';
$content = file_get_contents("/app/web/remote上传谷歌网盘.txt");	
$content = preg_replace('/.+?([\s\S]{5,80}$)/','$1', $content); //读取后面5-80个字符
echo $content;
	
echo '<caption><h3>上传百度网盘进度</h3></caption>';
$content = file_get_contents("/app/web/remote上传百度网盘.txt");	
$content = preg_replace('/[\s\S]*([\s\S]{180}$)/','$1', $content); //读取后面180个字符
echo $content;


echo '<caption><h3>上传115网盘进度</h3></caption>';
$content = file_get_contents("/app/web/remote上传115网盘.txt");	
$content = preg_replace('/.+?([\s\S]{5,180}$)/','$1', $content); //读取后面5-180个字符
echo $content;
	

$actual_link = 'https://'.$_SERVER['HTTP_HOST']; 
$page = file_get_contents($actual_link.'/encodeexplorer.index.php?m&sort_by=mod&sort_as=desc&dir=remote115/');

$page = str_replace("src=\"?img","src=\"encodeexplorer.index.php?img",$page);
$page = str_replace("<a href=\"?s&amp;dir=remote115/\">","<a href=\"encodeexplorer.index.php?sort_by=mod&sort_as=desc&dir=remote115/\">",$page);
echo '<hr /><br>'.$page;
	
	
	

?>
</p>

<p><a href="remote下载日志.txt"><font size="2">下载日志</font></a>  ·  <a href="remote上传百度网盘日志.php"><font size="2">上传百度网盘日志</font></a>  ·  <a href="remote上传115网盘.txt"><font size="2">上传115网盘日志</font></a></p>

</body>
</html>
