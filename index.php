<?php

require_once 'src/System.php';

$ip = new \Util\System();
$myip = $ip::IP();
echo $myip;