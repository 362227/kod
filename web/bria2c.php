<?php



// error_reporting(0);

function __($message) {
	$messages = array(
		'Download' => '文件下载',
		'Gateway' => '网关管理',
		'Log Analysis' => '日志分析',
		'Monitor' => '性能监控',
		'Server Information' => '服务器参数',
		'IP Address' => 'IP 地址',
		'Client Infomation' => '客户端信息',
		'Uname' => '内核标识',
		'OS' => '操作系统',
		'Server Software' => '服务器软件',
		'Language' => '语言',
		'Port' => '端口',
		'User' => '用户',
		'Hostname' => '主机名称',
		'Server Port' => '端口',
		'Prober Path' => '探针路径',
		'Server Realtime Data' => '服务器实时数据',
		'Time' => '当前时间',
		'Uptime' => '已运行时间',
		'CPU Model' => 'CPU 型号',
		'L2 Cache' => '二级缓存',
		'Frequency' => '频率',
		'CPU Instruction Set' => 'CPU 指令集',
		'BIOS Version' => 'BIOS 版本',
		'Board Vendor' => '主板厂商',
		'HardDisk Model' => '硬盘型号',
		'CPU Usage' => 'CPU 使用状况',
		'CPU Temperature' => 'CPU 温度',
		'GPU Temperature' => 'GPU 温度',
		'Memory Usage' => '内存使用状况',
		'Physical Memory' => '物理内存',
		'Used' => '已用',
		'Cached' => '已缓存',
		'Free' => '空闲',
		'Percent' => '使用率',
		'Total Space' => '总空间',
		'Disk Usage' => '硬盘使用状况',
		'Loadavg' => '系统平均负载',
		'Sockets' => '网络连接数',
		'Network Usage' => '网络使用状况',
		'Tx' => '出网',
		'Rx' => '入网',
		'Realtime' => '实时',
		'Network Neighborhood' => '网络邻居',
		'Type' => '类型',
		'Device' => '设备',
		'PHP Information' => 'PHP 信息',
		'Version' => '版本',
		'Zend OpCache' => 'Zend OpCache',
		'Server API' => '服务器接口',
		'Memory Limit' => '内存限制',
		'POST Max Size' => '最大上传大小',
		'Upload Max FileSize' => '最大上传文件',
		'Max Execution Time' => '最大执行时间',
		'Default Socket Timeout' => '默认 Socket 超时',
		'PHP Extension' => 'PHP 扩展',
		'Prober' => '探针',
		'Turbo Version' => '极速版',
		'Back to top' => '返回顶部',
	);

	if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) === 'zh') {
		print isset($messages[$message]) ? $messages[$message] : $message;
	} else {
		print $message;
	}
}

function human_filesize($bytes) {
	if ($bytes == 0)
		return '0 B';

	$units = array('B','K','M','G','T');
	$size = '';

	while ($bytes > 0 && count($units) > 0)
	{
		$size = strval($bytes % 1024) . ' ' .array_shift($units) . ' ' . $size;
		$bytes = intval($bytes / 1024);
	}

	return $size;
}

function get_remote_addr()
{
	if (isset($_SERVER["HTTP_X_REAL_IP"]))
	{
		return $_SERVER["HTTP_X_REAL_IP"];
	}
	else if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
	{
		return preg_replace('/^.+,\s*/', '', $_SERVER["HTTP_X_FORWARDED_FOR"]);
	}
	else
	{
		return $_SERVER["REMOTE_ADDR"];
	}
}

function get_server_addr()
{
	if ($_SERVER["SERVER_ADDR"] != "127.0.0.1")
	{
		return $_SERVER["SERVER_ADDR"];
	}
	else
	{
		return gethostbyname(php_uname('n'));
	}
}

function get_stat()
{
	$content = file('/proc/stat');
	$array = array_shift($content);
	$array = preg_split('/\s+/', trim($array));
	return array_slice($array, 1);
}

function get_sockstat()
{
	$info = array();

	$content = file('/proc/net/sockstat');
	foreach ($content as $line) {
		$parts = explode(':', $line);
		$key = trim($parts[0]);
		$values = preg_split('/\s+/', trim($parts[1]));
		$info[$key] = array();
		for ($i = 0; $i < count($values); $i += 2) {
			$info[$key][$values[$i]] = $values[$i+1];
		}
	}

	return $info;
}

function get_cpuinfo()
{
	$info = array();

	if (!($str = @file("/proc/cpuinfo")))
		return false;

	$str = implode("", $str);
	@preg_match_all("/processor\s{0,}\:+\s{0,}([\w\s\)\(\@.-]+)([\r\n]+)/s", $str, $processor);
	@preg_match_all("/model\s+name\s{0,}\:+\s{0,}([\w\s\)\(\@.-]+)([\r\n]+)/s", $str, $model);

	if (count($model[0]) == 0)
	{
		@preg_match_all("/Hardware\s{0,}\:+\s{0,}([\w\s\)\(\@.-]+)([\r\n]+)/s", $str, $model);
	}
	@preg_match_all("/cpu\s+MHz\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/", $str, $mhz);

	if (count($mhz[0]) == 0)
	{
		$values = @file("/sys/devices/system/cpu/cpu0/cpufreq/cpuinfo_max_freq");
		$mhz = array("", array(sprintf('%.3f', intval($values[0])/1000)));
	}

	@preg_match_all("/cache\s+size\s{0,}\:+\s{0,}([\d\.]+\s{0,}[A-Z]+[\r\n]+)/", $str, $cache);
	@preg_match_all("/(?i)bogomips\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/", $str, $bogomips);
	@preg_match_all("/(?i)(flags|Features)\s{0,}\:+\s{0,}(.+)[\r\n]+/", $str, $flags);

	$zh = (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) === 'zh');

	if (is_array($model[1]))
	{
		$info['num'] = sizeof($processor[1]);
		$info['model'] = $model[1][0];
		$info['frequency'] = $mhz[1][0];
		$info['bogomips'] = $bogomips[1][0];
		if (count($cache[0]) > 0)
			$info['l2cache'] = trim($cache[1][0]);
		$info['flags'] = $flags[2][0];
	}

	return $info;
}

function get_uptime()
{
	if (!($str = @file('/proc/uptime')))
		return false;

	$zh = (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) === 'zh');

	$uptime = '';
	$str = explode(' ', implode('', $str));
	$str = trim($str[0]);
	$min = $str / 60;
	$hours = $min / 60;
	$days = floor($hours / 24);
	$hours = floor($hours - ($days * 24));
	$min = floor($min - ($days * 60 * 24) - ($hours * 60));
	$duint = !$zh ? (' day'. ($days > 1 ? 's ':' ')) : '天';
	$huint = !$zh ? (' hour'. ($hours > 1 ? 's ':' ')) : '小时';
	$muint = !$zh ? (' minute'. ($min > 1 ? 's ':' ')) : '分钟';

	if ($days !== 0)
		$uptime = $days.$duint;
	if ($hours !== 0)
		$uptime .= $hours.$huint;
	$uptime .= $min.$muint;

	return $uptime;
}

function get_tempinfo()
{
	$info = array();

	if ($str = @file('/sys/class/thermal/thermal_zone0/temp'))
		$info['cpu'] = $str[0]/1000.0;

	#if ($str = @file('/sys/class/thermal/thermal_zone10/temp'))
	#	$info['gpu'] = $str[0]/1000.0;

	return $info;
}

function get_meminfo()
{
	$info = array();

	if (!($str = @file('/proc/meminfo')))
		return false;

	$str = implode('', $str);
	preg_match_all("/MemTotal\s{0,}\:+\s{0,}([\d\.]+).+?MemFree\s{0,}\:+\s{0,}([\d\.]+).+?Cached\s{0,}\:+\s{0,}([\d\.]+).+?SwapTotal\s{0,}\:+\s{0,}([\d\.]+).+?SwapFree\s{0,}\:+\s{0,}([\d\.]+)/s", $str, $buf);
	preg_match_all("/Buffers\s{0,}\:+\s{0,}([\d\.]+)/s", $str, $buffers);

	$info['memTotal'] = round($buf[1][0]/1024, 2);
	$info['memFree'] = round($buf[2][0]/1024, 2);
	$info['memBuffers'] = round($buffers[1][0]/1024, 2);
	$info['memCached'] = round($buf[3][0]/1024, 2);
	$info['memUsed'] = round($info['memTotal']-$info['memFree']-$info['memBuffers']-$info['memCached'], 2);
	$info['memUsedPercent'] = (floatval($info['memTotal'])!=0)?round($info['memUsed']/$info['memTotal']*100,2):0;
	$info['memBuffersPercent'] = (floatval($info['memTotal'])!=0)?round($info['memBuffers']/$info['memTotal']*100,2):0;
	$info['memCachedPercent'] = (floatval($info['memTotal'])!=0)?round($info['memCached']/$info['memTotal']*100,2):0;

	$info['swapTotal'] = round($buf[4][0]/1024, 2);
	$info['swapFree'] = round($buf[5][0]/1024, 2);
	$info['swapUsed'] = round($info['swapTotal']-$info['swapFree'], 2);
	$info['swapPercent'] = (floatval($info['swapTotal'])!=0)?round($info['swapUsed']/$info['swapTotal']*100,2):0;

	foreach ($info as $key => $value) {
		if (strpos($key, 'Percent') > 0)
			continue;
		if ($value < 1024)
			$info[$key] .= ' M';
		else
			$info[$key] = round($value/1024, 3) . ' G';
	}

	return $info;
}

function get_loadavg()
{
	if (!($str = @file('/proc/loadavg')))
		return false;

	$str = explode(' ', implode('', $str));
	$str = array_chunk($str, 4);
	$loadavg = implode(' ', $str[0]);

	return $loadavg;
}

function get_distname()
{
	foreach (glob('/etc/*release') as $name)
	{
		if ($name == '/etc/centos-release' || $name == '/etc/redhat-release' || $name == '/etc/system-release')
		{
			return array_shift(file($name));
		}

		$release_info = @parse_ini_file($name);

		if (isset($release_info['DISTRIB_DESCRIPTION']))
			return $release_info['DISTRIB_DESCRIPTION'];

		if (isset($release_info['PRETTY_NAME']))
			return $release_info['PRETTY_NAME'];
	}

	return php_uname('s').' '.php_uname('r');
}

function get_boardinfo()
{
	$info = array();

	if (is_file('/sys/class/dmi/id/bios_vendor'))
	{
		$info['BIOSVendor'] = array_shift(file('/sys/class/dmi/id/bios_vendor', FILE_IGNORE_NEW_LINES));
		$info['BIOSVersion'] = array_shift(file('/sys/class/dmi/id/bios_version', FILE_IGNORE_NEW_LINES));
		$info['BIOSDate'] = array_shift(file('/sys/class/dmi/id/bios_date', FILE_IGNORE_NEW_LINES));
	}

	if (is_file('/sys/class/dmi/id/board_name'))
	{
		$info['boardVendor'] = array_shift(file('/sys/class/dmi/id/board_vendor', FILE_IGNORE_NEW_LINES));
		$info['boardName'] = array_shift(file('/sys/class/dmi/id/board_name', FILE_IGNORE_NEW_LINES));
		$info['boardVersion'] = array_shift(file('/sys/class/dmi/id/board_version', FILE_IGNORE_NEW_LINES));
	}
	else if (is_file('/sys/class/dmi/id/product_name'))
	{
		$info['boardVendor'] = array_shift(file('/sys/class/dmi/id/product_name', FILE_IGNORE_NEW_LINES));
		$info['boardName'] = '';
		$info['boardVersion'] = '';
	}

	if (is_dir('/dev/disk/by-id'))
	{
		if ($names=array_filter(scandir('/dev/disk/by-id'), function($k) { return $k[0] != '.' && strpos($k, 'DVD-ROM') === false; }))
		{
			$parts = explode("_", array_shift($names));
			$parts = explode("-", array_shift($parts), 2);
			$info['diskVendor'] = strtoupper($parts[0]);
			$info['diskModel'] = $parts[1];
		}
	}

	return $info;
}

function get_diskinfo()
{
	$info = array();

	$info['diskTotal'] = round(@disk_total_space('.')/(1024*1024*1024),2);
	$info['diskFree'] = round(@disk_free_space('.')/(1024*1024*1024),2);
	$info['diskUsed'] = round($info['diskTotal'] - $info['diskFree'],2);
	$info['diskPercent'] = 0;
	if (floatval($info['diskTotal']) != 0)
		$info['diskPercent'] = round($info['diskUsed']/$info['diskTotal']*100, 2);

	return $info;
}

function get_netdev()
{
	$info = array();

	$strs = @file('/proc/net/dev');
	for ($i = 2; $i < count($strs); $i++ )
	{
		$parts = preg_split('/\s+/', trim($strs[$i]));
		$dev = trim($parts[0], ':');
		$info[$dev] = array(
			'rx' => intval($parts[1]),
			'human_rx' => human_filesize($parts[1]),
			'tx' => intval($parts[9]),
			'human_tx' => human_filesize($parts[9]),
		);
	}

	return $info;
}

function get_netarp()
{
	$info = array();

	$seen = array();
	$strs = @file('/proc/net/arp');
	for ($i = 1; $i < count($strs); $i++ )
	{
		$parts = preg_split('/\s+/', $strs[$i]);
		if ('0x2' == $parts[2] && !isset($seen[$parts[3]])) {
			$seen[$parts[3]] = true;
			$info[$parts[0]] = array(
				'hw_type' => $parts[1]=='0x1'?'ether':$parts[1],
				'hw_addr' => $parts[3],
				'device' => $parts[5],
			);
		}
	}

	return $info;
}

function my_json_encode($a=false)
{
	if (is_null($a))
		return 'null';
	if ($a === false)
		return 'false';
	if ($a === true)
		return 'true';
	if (is_scalar($a))
	{
		if (is_float($a))
		{
			return floatval(str_replace(',', '.', strval($a)));
		}
		if (is_string($a))
		{
			static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
			return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
		}
		else
			return $a;
	}
	$isList = true;
	for ($i = 0, reset($a); $i < count($a); $i++, next($a))
	{
		if (key($a) !== $i)
		{
			$isList = false;
			break;
		}
	}
	$result = array();
	if ($isList)
	{
		foreach ($a as $v)
			$result[] = my_json_encode($v);
		return '[' . join(',', $result) . ']';
	}
	else
	{
		foreach ($a as $k => $v)
			$result[] = my_json_encode($k).':'.my_json_encode($v);
		return '{' . join(',', $result) . '}';
	}
}

if (!function_exists('json_encode'))
{
	function json_encode($a)
	{
		return my_json_encode($a);
	}
}

if (isset($_GET['method'])) {
	switch ($_GET['method']) {
		case 'phpinfo':
			phpinfo();
			exit;
		case 'sysinfo':
			echo json_encode(array(
				'stat' => get_stat(),
				'stime' => date('Y-m-d H:i:s'),
				'uptime' => get_uptime(),
				'tempinfo' => get_tempinfo(),
				'meminfo' => get_meminfo(),
				'loadavg' => get_loadavg(),
				'sockstat' => get_sockstat(),
				'diskinfo' => get_diskinfo(),
				'netdev' => get_netdev(),
			));
			exit;
	}
}

$time_start = microtime(true);
$stat = get_stat();
$LC_CTYPE = setlocale(LC_CTYPE, 0);
$uname = php_uname();
$stime = date('Y-m-d H:i:s');
$distname = get_distname();
$server_addr = get_server_addr();
$remote_addr = get_remote_addr();
$uptime = get_uptime();
$cpuinfo = get_cpuinfo();
$tempinfo = get_tempinfo();
$meminfo = get_meminfo();
$loadavg = get_loadavg();
$sockstat = get_sockstat();
$boardinfo = get_boardinfo();
$diskinfo = get_diskinfo();
$netdev = get_netdev();
$netarp = get_netarp();

@header("Content-Type: text/html; charset=utf-8");

?><!DOCTYPE html>
<meta charset="utf-8">
<title><?php echo $_SERVER['SERVER_NAME']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<style>
body {
	margin: 0;
	font-family: "Helvetica Neue", "Luxi Sans", "DejaVu Sans", Tahoma, "Hiragino Sans GB", "Microsoft Yahei", sans-serif;
}
.container {
	padding-right: 15px;
	padding-left: 15px;
	margin-right: auto;
	margin-left: auto;
}
@media(min-width:768px) {
	.container {
		max-width: 750px;
	}
}
@media(min-width:992px) {
	.container {
		max-width: 970px;
	}
}
@media(min-width:1200px) {
	.container {
		max-width: 1170px;
	}
}
</style>

	<td><?php __('Disk Usage'); ?></td>
	<td colspan="3">
	<?php __('Total Space'); ?> <?php echo $diskinfo['diskTotal'];?>&nbsp;G，
	<?php __('Used'); ?> <span id="diskinfo_Used"><?php echo $diskinfo['diskUsed'];?></span>&nbsp;G，
	<?php __('Free'); ?> <span id="diskinfo_Free"><?php echo $diskinfo['diskFree'];?></span>&nbsp;G，
	<?php __('Percent'); ?> <span id="diskinfo_Percent"><?php echo $diskinfo['diskPercent'];?></span>%
	<div class="progress"><div id="diskinfo_UsedBar" class="progress-bar progress-bar-black" role="progressbar" style="width:<?php echo $diskinfo['diskPercent'];?>%" ></div> </div>
</html>

 
