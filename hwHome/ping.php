<?php
$timeout = 1;
$socket = @fsockopen( '192.168.1.109', 80, $errno, $errstr, $timeout );
$online = ( $socket !== false );
if($online) echo '005 is <span style="color:green;">online</span> <button class="btn" id="hibernate">Hibernate</button>';
else echo '005 is <span style="color:red;">offline</span></span>';
?>
