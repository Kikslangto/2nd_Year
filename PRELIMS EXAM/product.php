<?php
$username ="KOPI";
$customer = "Urquico";
$greetings = "Hello, ".$customer;
$product = "Americano";
?>
<!DOCTYPE html>
<?php include 'includes/header.php'?>
<h1><?=$greetings?></h1>
<p><?php 
for($counter = 1;$counter <=10;$counter++)
{   
    $cost = 150;
    
    if ($counter <2)
    {
        $subtotal = $counter * $cost;
        echo $counter, " Americano is ",$subtotal;
        echo "<br>";
        continue;
    }
    elseif($counter >=2)
    {
        $savings = ($cost*$counter) *0.15;
        $discount = ($cost*$counter) - $savings;
        echo $counter, " Americano is ",$discount;
        echo "<br>";
    }
    else {break;}
   

    
}
?></p>
<?php include 'includes/footer.php'?>