<?php
$Product_Description= $_POST['product_description'];
$List_Price= $_POST['list_price'];
$Discount_Percent= $_POST['discount_percent'];
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $Product_Description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $List_Price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $Discount_Percent; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo ''; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo ''; ?></span><br>
    </main>
</body>
</html>
