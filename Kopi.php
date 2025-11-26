<?php
$price = 10;
$grams = ['0 grams', '6 grams', '33 grams', '10 grams'];
$flavor = "Capuccino";
switch ($flavor)
{
    case 'Americano':
        $sugar = "Americano has $grams[0] of sugar";
        break;
    case 'Capuccino':
        $sugar = "Capuccino has $grams[1] of sugar";
        break;
    case 'Caramel Macchiato':
        $sugar = "Caramel Macchiato has $grams[2] of sugar";
        break;
    case 'Hot Chocolate':
        $sugar = "Hot Chocolate has $grams[3] of sugar";
        break;
    default:
        $offer = "Buy 1 Get 1 for Free";
}
?>
<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <title>KOPI</title>
    </head>
    <body>
        <h1> KOPI MENU </h1>
        <h2> Sugar per Coffee </h2>
        <p><?=$sugar?></p>
        <h2>Price of Selected Coffee</h2>

        <p><?php
            $counter = 1;
            $coffee = 5;
            $price = 150;
            while ($counter <= $coffee)
            {
                echo ($counter);
                echo (' Capuccino is PHP ');
                echo ($price * $counter);
                echo ('<br>');
                $counter++;
            }
        ?></p> 
    </body>
    <?php include 'includes/footer.php' ?>
</html>