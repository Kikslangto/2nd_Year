<?php
$username ="KOPI";
$customer = "Urquico";
$greetings = "Hello, ".$customer;
$offer = ['Americano', 5, 150, 0.15];
$usual_price = $offer[2];
$offer_price = ($offer[2]*$offer[1]) * $offer[3];
$savings = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<?php include 'includes/header.php'?>
<h1><?=$greetings?></h1>
<p>If you buy <?=$offer[1]?> <?=$offer[0]?> your bill will be <?=$offer_price?></p>
<p>You will save PHP <?=$savings?></p>
<?php include 'includes/footer.php'?>