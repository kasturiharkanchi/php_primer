<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIMER-whiledowhile</title>
</head>
<?php include 'includes/header.php'
   ?>

<body>
    <h1>Whileloop</h1>
    
    <?php
    $grade=0;
      // while($grade<10){
          //      echo '<p>i am less than 10!!</p>';
      // }
      while($grade<10){
          echo'<p> i am less thn 10</p>';
          $grade++;
      }
      echo 'exit loop';
    ?>
    <h1>Dowhile loop</h1>
    <?php
    $grade=0;
    do{
        echo'<p> I am do while loop</p>';
        $grade++;
    }while($grade<10);
    ?>
    <?php require  'includes/footer.php'?>

</body>
</html>