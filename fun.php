<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php function</title>
</head>
<?php
$title="functions"; 
include 'includes/header.php'
   ?>
<body>
    <h1>User defined functins</h1>
    <?php
    function writeMessage(){
        echo " i am a function <br/>";
    }

    writeMessage();
    echo"<hr/>";
    writeMessage();
    function addFunction($num1,$num2){
        $sum=$num1+$num2;
        echo " sum od $num1 and $num2 is:$sum<br/>";
    }
    function changeNum($num){
        $num=$num+10;
    }
    addFunction(5,4);
    addFunction("2",'9');
    function product($num1,$num2){
        $prod=$num1*$num2;
        return $prod;
    }
    $result=product(10,24);
    echo $result.'<br/>';
    ?>
    <?php require  'includes/footer.php'?>
</body>
</html>