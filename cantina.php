<?php
require_once __DIR__.'/wake.php';
//echo __DIR__.'/wake.php';
if($_GET['computer'] == 'cantina') \hwHome\WakeOnLAN::wakeUp('90:e6:ba:ee:d1:91', '192.168.1.255');
?>
