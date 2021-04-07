<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIME STRING</title>
</head>
<?php 
$title="string";
include 'includes/header.php'
   ?>
<body>
    <h1>String manipulation</h1>
    <?php
    $phrase1="Student who came late";
    $phrase2="in class,stand with rock";
   $name="kasturi harkanchi";
    echo $phrase1." ".$phrase2;
    echo"<br/>";
    echo '<hr/>';
    
    echo "uppercase first letter:".ucfirst($name)."<br/>";
    echo "uppercase first letter:".ucwords($name)."<br/>";
    echo 'Uppercase: '.strtoupper($name).'<br/>';
    echo 'Uppercase: '.strtolower("this is lower").'<br/>';
    echo '<hr/>';
    echo "repeat string: ".strtoupper(str_repeat('s',5)).'<br/>';
    echo 'get substring: '.substr($name,5,10).'<br/>';
    echo 'getpos : '.strpos($name,'h').'<br/>';
    echo 'find character "a":'.strchr($name,'a').'<br/>';
    echo "strlen:".strlen($name).'<br/>';
    echo 'trim spaces on both sides:'."A".trim(" B C D ")."E".'<br/>';
    echo 'trim spaces on left sides:'."A".ltrim(" B C D ")."E".'<br/>';
    echo 'trim spaces on right sides:'."A".rtrim(" B C D ")."E".'<br/>';
    echo 'replace: '.str_replace("stand","sit",$phrase2);
    ?>
    <?php require  'includes/footer.php'?>
</body>
</html>