<?php

$db = new mysqli('localhost', 'root', 'admin', 'sql_products');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>