
<?php
require_once __DIR__.'/wakeService.php';
//echo __DIR__.'/wake.php';
if(!isset($_POST['c'])) echo('');
switch(@$_POST['c']){
    case '001':
    \hwHome\WakeOnLAN::wakeUp('90:e6:ba:ee:d1:91', '192.168.1.255');
    break;
    case '005':
    \hwHome\WakeOnLAN::wakeUp('d0:17:c2:15:59:53', '192.168.1.255');
    break;
    default:
    if(isset($_POST['c'])) echo @$_POST['c'].' not found.'
    ?>
    <script>
    window.setTimeout(function(){
        //window.location.href = '/';
    }, 2000);
    </script>
    <?php
    break;
}
if(isset($_POST['c'])):
?>
<script>
window.setTimeout(function(){
    window.location.href = '/';
}, 2000);
</script>
<?php endif; ?>
