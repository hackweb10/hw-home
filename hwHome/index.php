<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1><strong># hwHome #</strong></h1>
<p>
    Turner on.
    <br>
    <br>
    <form method="post" action="<?php echo htmlspecialchars('/hwHome/');?>">
    <label for="name">Name</label>
    <br>
    <input type="text" id="name" name="c" value="">
    <br><br>
    <input type="submit" name="submit" value="send"> 
    </form>
    <?php
    require_once('./wake.php');
    ?>
</p>

</body>
</html>