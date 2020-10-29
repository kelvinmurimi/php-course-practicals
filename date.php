<?php
$today = date("d");
$today2 = date("m");
$today3 = date("Y");
$todayt =date("H:i:s:A");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<style>
small {
    color: green;
    font-size: 24px;
}

span {
    color: #fff;
    background: grey;
    width: 100%;
    border-radius: 20%;
    padding: 3px 3px;
    height: 100%;
}

span:hover {
    color: red;
    background: #fff;
}
</style>

<body>
    <div class="today">
        <h1>php date function</h1>
        <small>Day</small>
        <p><?php echo $today ?></p><span><?php echo $todayt ?></span>
        <br>
        <small>month</small>
        <p><?php echo $today2 ?></p><span><?php echo $todayt ?></span>
        <br>
        <small>Year</small>
        <p><?php echo $today3 ?></p><span><?php echo $todayt ?></span>
        <br>

    </div>
</body>

</html>