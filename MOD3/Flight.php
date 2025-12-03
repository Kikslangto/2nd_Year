<?php
$Noseats = [6,2,3,4,5];
$flight = 'Siargao';
switch ($flight)
{
    case 'Siargao':
        $seats = "Clark to Siargao has $Noseats[0] seats left";
        break;
    case 'Cebu':
        $seats = "Clark to Cebu has $Noseats[1] seats left";
        break;
    case 'Batanes':
        $seats = "Clark to Batanes $Noseats[2] seats left";
        break;
    case 'Bicol':
        $seats = "Clark to Bicol has $Noseats[3] seats left";
        break;
    default:
        $offer = "Clark to Book now and get a 10% discount!";
}
?>
<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <title></title>
    </head>
    <body>
        <header> <?php include 'includes/Header.php'?></header>
        <h1> FlyEasy </h1>
        
        <h2> Available seat's for your selected flight </h2>
       <p><?=$seats?>
        <h2> Price of flight depending on how many seats taken</h2>
         <p><?php 
            $counter =1;
            $max = 5;
            $price = 5654.04;
            while ($counter <= $max)
            {
                    $compute = $price * 0.10;
                    $final = ($price * $counter) - $compute;
                    echo ("Your bill for $counter person(s) is PHP $final ");
                    echo "<br>";
                    $counter++;
            }
        ?></p> 
    </body>

    <footer><?php include 'includes/footer.php';?></footer>
   
  
</html>