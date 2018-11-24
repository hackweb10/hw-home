<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://192.168.1.109/hackweb/hw_web/www/api/hibernate.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,  http_build_query(array('postvar1' => 'value1', 'postvar2' => 'value2')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close ($ch);

// Further processing ...
echo $server_output;
?>