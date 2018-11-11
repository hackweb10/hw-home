<?php
//require_once('./wake.php');
echo '<strong># hw-home #</strong>';
?>
<br>
<br>
<form method="post" action="<?php echo htmlspecialchars('/hwHome/');?>">
Name: 
<input type="text" name="c" value="">
<input type="submit" name="submit" value="send"> 
</form>
<?php
require_once('./wake.php');
?>
