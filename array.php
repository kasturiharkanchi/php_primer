<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP primer -array</title>
</head>
<?php 
$title="arrays";
include 'includes/header.php'
   ?>
<body>
    <h1>arrays</h1>
    <?php
    $num=5;
    $number=array(1,2,3,4,5,6,7,8,9,10);
    echo $number[5];
    echo "<p>$number[9]</p>";
    $size=count($number);
    echo "<p>Array size:$size</p>";
    for($count=0;$count<10;$count++){
        echo "<p>$number[$count]</p>";
    }
    ?>
    <?php require  'includes/footer.php'?>
    
</body>
</html>