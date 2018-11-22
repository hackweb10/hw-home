<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>hwHome</title>
<style>
body{
    text-align: center;
    color: #444;
    font-size: 16px;
}
input[type="text"] {
    width: calc(100% - 16px);
    background-color: transparent;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
    border: none;
    margin: 15px auto;
    padding: 10px 8px;
    color: rgba(0,0,0,.87);
    word-wrap: break-word;
    outline: none;
    display: flex;
    flex: 100%;
    font-size: 14px;    
    max-width: 484px; 
}
input[type="submit"]{
    background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));
    background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
    -webkit-border-radius: 2px;
    -webkit-user-select: none;
    background-color: #f2f2f2;
    border: 1px solid #f2f2f2;
    border-radius: 2px;
    color: #444;
    cursor: pointer;
    font-family: arial,sans-serif;
    font-size: 13px;
    font-weight: bold;
    margin: 11px 4px;
    min-width: 54px;
    padding: 8px 16px;
    text-align: center;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
}
h1{
    font-family: "Verdana";
    color: #212529;
}
.primary{
    color: #4885ed;
}
.secondary{
    color: #212529;
}
</style>
</head>
<body>

<h1><strong><span class="primary">h</span><span class="secondary">w</span><span class="">Home</span></strong></h1>
<p>
    Turner on.
    <br>    
    <form method="post" action="<?php echo htmlspecialchars('/hwHome/');?>">
        <label for="name">Name</label>        
        <input type="text" id="name" name="c" value="">        
        <input type="submit" name="submit" value="send"> 
    </form>
    <br>
    <?php
    require_once('./wake.php');
    ?>
</p>

</body>
</html>