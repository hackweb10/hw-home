<?php
require_once __DIR__.'/wakeService.php';
//echo __DIR__.'/wake.php';
if(!isset($_POST['c'])) die('"c" not found.');
switch($_POST['c']){
    case '001':
    \hwHome\WakeOnLAN::wakeUp('90:e6:ba:ee:d1:91', '192.168.1.255');
    break;
    default:
    echo $_POST['c'].' not found.';
    ?>
    <script>
    window.setTimeout(function(){
        window.location.href = '/';
    }, 2000);
    </script>
    <?php
    break;
}
?>