<?php 
$title="index";
include 'includes/header.php'
   ?>   

    <h1>Hello world....</h1>
    <br/>
    <?php
    /* 
    printing in php
    */
        echo "Hello php!!";
        echo '<br/>';
        echo 'Second line';
        echo '<br/>';
        ?>
    <?php
      $name="kasturi";
      $age=20;
      echo $name;
      echo '<h1>My name is:'.$name.'</h1>';
      echo '<h1>My age is:'.$age.'</h1>';
      echo "<h1> my name is: $name </h1>";
    ?>
    
    <?php require  'includes/footer.php'?>
   