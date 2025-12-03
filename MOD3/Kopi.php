
<?php
$price = 120;
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
$order = 5;
$products = [
    'Americano' => ['price' => 150, 'stock' => 100],
    'Capuccino' => ['price' => 120, 'stock' => 15],
    'Caramel Macchiato' => ['price' => 125, 'stock' => 60],
    'Hot Chocolate' => ['price' => 110, 'stock' => 40],
];
$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock <20) ? 'Yes' : 'No';
} 
function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}
function get_tax_due(float $price, int $quantity, int $tax =0): float {
    $total = $price * $quantity;
    return $total * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" href="styles.css?v=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <style>
      
    </style>
        <title>KOPI</title>
    </head>
    <body>
        <h1> KOPI MENU </h1>
        <h2> Sugar per Coffee </h2>
        <p>
            <?php 
            if (isset($sugar)) {
                echo $sugar;}
            else {
                echo "Not in the Menu";
            }
        ?></p>
        <h2>Price of Selected Coffee</h2>

        <p><?php
            for ($i = 1; $i <= $order; $i++)
            {
                echo "$i cup of $flavor cost PHP " . number_format($price * $i, 2) . "<br>";
            }
        ?></p> 

        <h2>Stock Levels & Pricing</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Product</th>
                <th>Re-Order</th>
                <th>Total Value (PHP)</th>
                <th>Tax Due (PHP)</th>
            </tr>
            <?php foreach($products as $product_name => $data):?>
                <tr>
                    <td><?= htmlspecialchars($product_name)?></td>
                    <td><?= $data['stock']?></td>
                    <td><?= get_reorder_message($data['stock'])?></td>
                    <td><?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
                    <td><?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate),2 )?></td>
                </tr>
                <?php endforeach; ?>
        </table>
                
    </body>
    <?php include 'includes/footer.php' ?>
</html>