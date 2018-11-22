<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>hwHome</title>
<style>
body{
    text-align: center;
}
input[type="text"] {
    width: 100%;
    background-color: transparent;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
    border: none;
    margin: 0;
    padding: 10px 8px;
    color: rgba(0,0,0,.87);
    word-wrap: break-word;
    outline: none;
    display: flex;
    flex: 100%;
    font-size: 14px;
    -webkit-tap-highlight-color: transparent;   
    max-width: 484px; 
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