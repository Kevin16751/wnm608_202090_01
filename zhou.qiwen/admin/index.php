<?php

include "../lib/php/functions.php";
include "../parts/templates.php";
include "../data/api.php";




setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','14');
$products = makeStatement("products_admin_all",[]);


$empty_product = (object)[
   "name"=>"Honda",
   "price"=>"654332",
   "category"=>"car",
   "description"=>"Such a nice car.",
   "miles"=>"37325miles",
   "image_other"=>"img/hondawhite_m.jpg",
   "image_thumb"=>"img/hondawhite_m.jpg",
   "make_model"=>"Honda",
   "body_type"=>"Sedan",
   "year"=>"2020"

];



switch(@$_GET['crud']) {
   case 'update':

      makeStatement("product_update",[
         $_POST['product-name'],
         $_POST['product-price'],
         $_POST['product-category'],
         $_POST['product-description'],
         $_POST['product-miles'],
         $_POST['product-image_other'],
         $_POST['product-image_thumb'],
         $_POST['product-make_model'],
         $_POST['product-body_type'],
         $_POST['product-year'],
         $_GET['id']
      ]);

      header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
      break;


   case 'create':

      $id = makeStatement("product_insert",[
         $_POST['product-name'],
         $_POST['product-price'],
         $_POST['product-category'],
         $_POST['product-description'],
         $_POST['product-miles'],
         $_POST['product-image_other'],
         $_POST['product-image_thumb'],
         $_POST['product-make_model'],
         $_POST['product-body_type'],
         $_POST['product-year']
      ]);
      header("location:{$_SERVER['PHP_SELF']}?id=$id");
      break;


   case 'delete':
      makeStatement("product_delete",[
         $_GET['id']
      ]);
      header("location:{$_SERVER['PHP_SELF']}");
      break;
}





function showProductPage($product) {

//print_p($product);

$id = $_GET['id'];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='$o'>";
});


$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';



$productdata = $id=='new' ? '' : <<<HTML
<div class="card soft">
   <div class="display-flex">
      <h2 class="flex-stretch">$product->name</h2>
      <div>
         <a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">
            <img src="img/icons/trash.png" class="icon">
         </a>
      </div>
   </div>
   <div>
      <strong>Category</strong>
      <span>$product->category</span>
   </div>
   <div>
      <strong>Price</strong>
      <span>&dollar;$product->price</span>
   </div>
   <div>
      <strong>Miles</strong>
      <span>$product->miles</span>
   </div>
   <div>
      <strong>Make&Model</strong>
      <span>$product->make_model</span>
   </div>
   <div>
      <strong>Body Type</strong>
      <span>$product->body_type</span>
   </div>
   <div>
      <strong>Year</strong>
      <span>$product->year</span>
   </div>
   <div>
      <strong>Description</strong>
      <span>$product->description</span>
   </div>
   <div>
      <strong>Images</strong>
      <div class="image-thumbs"><img src='$product->image_thumb'></div>
      <div class="image-thumbs">$thumbs_elements</div>
   </div>
</div>
HTML;

echo <<<HTML
<div class="card soft">
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>
</div>
<div class="grid gap">
   <div class="col-xs-12 col-md-4">$productdata</div>
   <div class="col-xs-12 col-md-8">
      <div class="card soft">
         <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
            <h2>$addoredit Product</h2>
            <div class="form-control">
               <label for="product-name" class="form-label">Name</label>
               <input id="product-name" name="product-name" type="text" placeholder="Type product name" class="form-input" value="$product->name">
            </div>
            <div class="form-control">
               <label for="product-category" class="form-label">Category</label>
               <input id="product-category" name="product-category" type="text" placeholder="Type product category" class="form-input" value="$product->category">
            </div>
            <div class="form-control">
               <label for="product-price" class="form-label">Price</label>
               <input id="product-price" name="product-price" type="number" step="0.01" min="0" placeholder="Type product price" class="form-input" value="$product->price">
            </div>
            <div class="form-control">
               <label for="product-miles" class="form-label">Miles</label>
               <input id="product-miles" name="product-miles" type="text" placeholder="Type product miles" class="form-input" value="$product->miles">
            </div>
            <div class="form-control">
               <label for="product-make_model" class="form-label">Make&Model</label>
               <input id="product-make_model" name="product-make_model" type="text" placeholder="Type product make_model" class="form-input" value="$product->make_model">
            </div>
            <div class="form-control">
               <label for="product-body_type" class="form-label">Body Type</label>
               <input id="product-body_type" name="product-body_type" type="text" placeholder="Type product body_type" class="form-input" value="$product->body_type">
            </div>
            <div class="form-control">
               <label for="product-year" class="form-label">Year</label>
               <input id="product-year" name="product-year" type="text" placeholder="Type product year" class="form-input" value="$product->year">
            </div>
            <div class="form-control">
               <label for="product-description" class="form-label">Description</label>
               <textarea id="product-description" name="product-description" placeholder="Type product description" class="form-input">$product->description</textarea>
            </div>
            <div class="form-control">
               <label for="product-image_thumb" class="form-label">Image Thumb</label>
               <input id="product-image_thumb" name="product-image_thumb" type="text" placeholder="Type product image thumb" class="form-input" value="$product->image_thumb">
            </div>
            <div class="form-control">
               <label for="product-image_other" class="form-label">Image Others</label>
               <input id="product-image_other" name="product-image_other" type="text" placeholder="Type product image other" class="form-input" value="$product->image_other">
            </div>
            <div class="form-control">
               <input class="form-button" type="submit" value="Save">
            </div>
         </form>
      </div>
   </div>
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Administrator</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1>Products Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="nav flex-none">
            <ul class="display-flex">
               <li><a href="product_list.php">Store</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">

         <?php


         if(isset($_GET['id'])) {

            // ternary or conditional
            showProductPage(
               $_GET['id']=='new' ?
                  $empty_product :
                  array_find($products,function($o){
                     return $o->id==$_GET['id'];
                  })
            );

         } else {

         ?>
         <div class="card medium soft">
         <h2>Product List</h2>

         <div>
         <?php
         echo array_reduce($products,'makeAdminList');

         ?>
         </div>
         </div>
         <?php } ?>
   </div>
   
</body>
</html>