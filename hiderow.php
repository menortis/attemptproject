<?php

    require_once "connect.php";

    $product_id = $_GET['product_id'];


    $db->query("UPDATE products SET HIDE_COUNT = HIDE_COUNT + 1 WHERE PRODUCT_ID = " . $product_id);

?>