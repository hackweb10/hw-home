<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>hwHome</title>
<style>
input[type="text"] {
  width: 100%;
}
</style>
</head>
<body>

<h1><strong># hwHome #</strong></h1>
<p>
    Turner on.
    <br>    
    <form method="post" action="<?php echo htmlspecialchars('/hwHome/');?>">
        <label for="name">Name</label>
        <br>
        <input type="text" id="name" name="c" value="">
        <br><br>
        <input type="submit" name="submit" value="send"> 
    </form>
    <br>
    <?php
    require_once('./wake.php');
    ?>
</p>

</body>
</html>