<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIMER -forloop</title>
</head>
<?php include 'includes/header.php'
   ?>
<body>
    <h1>For loops</h1>
    <?php
    for($count=0;$count<10;$count++){
        echo '<p>helloo world</p>';
    }
    for($count=0;$count<10;$count++){
        echo "The count is:$count";
        echo "<br/>";
    }
    ?>
    <?php require  'includes/footer.php'?>
    
</body>
</html>