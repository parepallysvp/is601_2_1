<?php
$Product_Description= $_POST['product_description'];
$List_Price= $_POST['list_price'];
$Discount_Percent= $_POST['discount_percent'];

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
        <span><b><?php echo $Product_Description; ?></b></span><br>

        <label>List Price:</label>
        <span><i><?php echo $list_price_formatted; ?></i></span><br>

        <label>Standard Discount:</label>
        <span><i><?php echo $list_percent_formatted; ?></i></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
    </main>
</body>
</html>
