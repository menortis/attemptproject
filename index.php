<?php

require_once 'connect.php';
require_once 'limitarray.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Продукция</title>
    </head>
    <style>
        th, td {
            padding: 10px;
        }

        th {
            background: #000000;
            color: #FFFFFF;
        }

        td {
            background: #C0C0C0;
        }

        a {
            color:#000000;
            text-decoration: none;
        }

        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function hide(num){
            document.getElementById('tr'+ num).style.display = 'none';
        }
    </script>
    <script>
        $(function(){
            $('.button').click(function(){
                $.get("hiderow.php", {product_id: $(this).attr('id')});
            });
        });   
    </script>
        
    <body>

        
        <table>
            <tr>
                <th>PRODUCT_ID</th>
                <th>PRODUCT_NAME</th>
                <th>PRODUCT_PRICE</th>
                <th>PRODUCT_ARTICLE</th>
                <th>PRODUCT_QUANTITY</th>
                <th>PRODUCT_QUANTITY_CHANGE</th>
                <th>DATE_CREATE</th>
            </tr>

            <?php
                
                $newProduct = new CProducts;
                $i = 1;
                                                
                foreach ($newProduct->limitArray(15,$db) as $product) {
                    ?>
                    <tr id=<?="tr".$i?>>
                        <td> <?= $product[0] ?> </td>
                        <td> <?= $product[1] ?> </td>
                        <td> <?= $product[2] ?> </td>
                        <td> <?= $product[3] ?> </td>
                        <td> <?= $product[4] ?> </td>
                        <td> 
                            <button><a href="updateplus.php?product_id=<?= $product[0] ?>">+</a></button>
                            <button><a href="updateminus.php?product_id=<?= $product[0] ?>">-</a></button>  
                        </td>
                        <td> <?= $product[5] ?> </td>
                        <td><button class="button" id="<?= $product[0] ?>" onclick="hide(<?= $i ?>)">Скрыть</button></td>
                    </tr>
                    <?php
                    $i = $i + 1;
                }
                
            ?>
        </table>
    </body>
</html>