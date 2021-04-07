<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIMER-SWITCH</title>
</head>


<?php include 'includes/header.php'
   ?>
<body>
    <h1>Switch statement</h1>
    <?php 
    $grade='A';
    switch($grade){
        case 'A':{
            echo "<h2>you are a super star!!!</h2>";
            break;
        }
        case 'B':{
            echo "<h2>you performed well!!!</h2>";
            break;
        }
        default:
        echo '<h2 style="color:red">You have failed</h2>';
        break;
    }
    ?>
    <?php require  'includes/footer.php'?>
    
</body>
</html>