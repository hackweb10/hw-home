<?php
echo '<strong># hw-home #</strong>';
?>
<br>
<br>
<form method="post" action="<?php echo htmlspecialchars(__DIR__.'/wake.php');?>">  
Name: 
<input type="text" name="c" value="">
<input type="submit" name="submit" value="send"> 
</form>
