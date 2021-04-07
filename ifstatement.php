<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIMER- If statemnet</title>
</head>
<?php include 'includes/header.php'
   ?>
<body>
    <?php
    echo '<h2>if statement</h2>';
    $grade=30;
    if($grade>=50){
        echo '<h3 style="color:green">you have passed</h3>';
    }
    else{
        echo '<h3 style="color:red">you have not passed</h3>';
    }
    $grade='A';
    if($grade=='A'){
        echo "<h2>you are a super star!!!</h2>";
    }
    elseif($grade=='B'){
        echo '<h2>you did Well!!</h2>';
    }
    else{
        echo '<h2 style="color:red">You have failed</h2>';
    }

    ?>
    <?php require  'includes/footer.php'?>
</body>
</html>