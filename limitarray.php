<?php
    require_once 'connect.php';

    class CProducts extends MySQLi{
        
        public function limitArray($limit, $dataBase){
            $arrayOfProducts = $dataBase->query("SELECT * FROM products ORDER BY DATE_CREATE DESC LIMIT $limit")->fetch_all();
            return $arrayOfProducts;
        }

    }

?>