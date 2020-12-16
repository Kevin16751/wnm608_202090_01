<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
include_once "data/api.php";


setDefault('s','');
setDefault('t','products_all');
setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','13');




function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Most Expensive"],
      ["price","ASC","Least Expensive"]
   ];
   foreach($options as [$orderby,$direction,$name]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$direction ? "selected" : "").">
      $name
      </option>
      ";
   }
}

function makeHiddenValues($arr1,$arr2) {
   foreach(array_merge($arr1,$arr2) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>\n";
   }
}




$result = makeStatement($_GET['t']);
$products = isset($result['error']) ? [] : $result;



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>All Products</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>

    <div class="container">
      <form action="product_list.php" method="get" class="hotdog stack">
         <input type="search" name="s" placeholder="Search for a product"
         value="<?= @$_GET['s'] ?>">

         <?
         makeHiddenValues([
            "orderby"=>$_GET['orderby'],
            "orderby_direction"=>$_GET['orderby_direction'],
            "limit"=>$_GET['limit'],
            "t"=>"search"
         ],[]);
         ?>

          <button type="submit">Search</button>
      </form>

       <div class="display-flex" style="margin:1em 0">
          <div class="flex-none display-flex">
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"Sedan",
                  "t"=>"products_by_category"
               ]);
               ?>

                <input type="submit" value="Sedan" class="form-button">
            </form>
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"SUV",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="SUV" class="form-button">
            </form>
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"Hatchback",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Hatchback" class="form-button">
            </form>
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"Coupe",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Coupe" class="form-button">
            </form>
         </div>
         <div class="flex-stretch"></div>
         <div class="flex-none">
            
            <form action="product_list.php" method="get">

               <?
               makeHiddenValues($_GET,[]);
               ?>
               <div class="form-select">
                  <select onchange="checkSort(this)">
                     <?=makeSortOptions()?>
                  </select>
               </div>
            </form>
         </div>
      </div>


      <h2>All Products</h2>
	   	<div class="grid gap">

         <?php

         echo array_reduce(
            $products,
            'makeProductList'
         );

         ?>  
      </div>
  </div>

  <div class="container">
      <div class="card soft">
         <a href="admin">Product Admin</a>
      </div>
   </div>

		    

   <?php include "parts/footer.php" ?>

   

</body>
</html>