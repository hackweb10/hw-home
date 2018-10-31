<?php
require_once __DIR__.'/wake.php';
//echo __DIR__.'/wake.php';
\hwHome\WakeOnLAN::wakeUp('90:e6:ba:ee:d1:91', '192.168.1.255');
?>
