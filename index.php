<?php
echo '# hw-home #';
?>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'/wake.php');?>">  
Name: 
<input type="text" name="c" value="">
<input type="submit" name="submit" value="send"> 
</form>
