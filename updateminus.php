<?php
    require_once "connect.php";

    $product_id = $_GET['product_id'];
    
    $db->query("UPDATE products SET PRODUCT_QUANTITY = PRODUCT_QUANTITY - 1 WHERE PRODUCT_ID = " . $product_id);

    header('Location: /');
?>
