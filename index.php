<?php

require_once 'class/System.php';

$ip = new \Util\System();
$myip = $ip::IP();
echo $myip;