<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='/images/store/$o'>";
});

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Store: <?= $product->title ?></title>



   <?php include "../parts/meta.php" ?>
</head>
<body>
   
   <?php include "../parts/navbar.php" ?>


   <div class="container">
      <div class="card soft">
         <h2>Product Item</h2>

         <div>This is the product #<?= $_GET['id'] ?></div>

         <h2>Subaru 2019</h2>
         <div class="grid gap">
            <?php

               echo array_reduce(
                  MYSQLIQuery("
                     SELECT *
                     FROM products
                     WHERE id in (4,6,8)
                  "),
                  'makeProductList'
               );

            ?>
         </div>
         
      </div>
   </div>

   <?php include "../parts/footer.php" ?>

</body>
</html>