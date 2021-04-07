<?php 
$title="date and time";
include 'includes/header.php'
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php primer date time</title>
</head>

<body>
    <h1>Date time manipulation</h1>
    <?php
    $datenow=getdate();
    echo "todays date: <br/>";
    echo $datenow['mday'].'<br/>';
    echo $datenow['mon'].'<br/>';
    echo $datenow['year'].'<br/>';
    echo "todays date: ".$datenow['mon'].'/'.$datenow['mday'].'/'.$datenow['year'].'<br/>';
    echo time().'<br/>';
    print date("m/d/y G.i:s<br>",time()).'<br/>';
    print "today is";
    print date("j of F Y,\a\\t g.i a",time());
    ?>
</body>
<?php require  'includes/footer.php'?>
</html>