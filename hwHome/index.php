<?php
$version = 0.001;
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>hackweb | hwHome</title>
<link href="./hwHome/style/style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
<script src="./hwHome/jquery.js"></script>
</head>
<body>

<a href="https://www.hackweb.it">
    <h1 class="text-center">
        <strong>
            <span class="primary">hack</span><span class="secondary">web </span>
            <!-- <span class="primary">h</span><span class="secondary">w</span><span class="">Home</span> -->
        </strong>
    </h1>
</a>
<?php
if(@$_GET['p'] == 'ws') require_once(__DIR__.'/include/ws.php');
else require_once(__DIR__.'/include/home.php');
?>
</body>
</html>
