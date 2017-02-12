<?php
$Product_Description= filter_input(INPUT_POST, 'product_description');
$List_Price= filter_input(INPUT_POST, 'list_price');
$Discount_Percent= filter_input(INPUT_POST, 'discount_percent');

$discount= $List_Price * $Discount_Percent * .01 ;
$discount_price= $List_Price - $discount ;

$list_price_formatted= "$".$List_Price;
$list_percent_formatted= $Discount_Percent."%";
$discount_formatted= "$".$discount;
$discount_price_formatted= "$".$discount_price; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($Product_Description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_formatted); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $list_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
    </main>
</body>
</html>
