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
   <title>Product Item</title>

   <?php include "../parts/meta.php" ?>
</head>
<body>
   
   <?php include "../parts/navbar.php" ?>


   <div class="container">
      <div class="card soft">
         <h2>Product Item</h2>

         <div>This is the product #<?= $_GET['id'] ?></div>
         <!-- <?php include "parts/product_item.php" ?> -->
      </div>
   </div>

   <?php include "../parts/footer.php" ?>

</body>
</html>