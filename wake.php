<?php
require_once __DIR__.'/wakeService.php';
//echo __DIR__.'/wake.php';
if($_GET['c'] == '001') \hwHome\WakeOnLAN::wakeUp('90:e6:ba:ee:d1:91', '192.168.1.255');
?>
