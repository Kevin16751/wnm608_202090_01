<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>

   <div class="container">
	   <div class="card soft">
	   	<h2>Product List</h2>
	   	<ul>
	   		<!-- li*10>a[href='product_item.php?id=$']>{product $} -->
			<li><a href="product_item.php?id=1">product 1</a></li>
			<li><a href="product_item.php?id=2">product 2</a></li>
			<li><a href="product_item.php?id=3">product 3</a></li>
			<li><a href="product_item.php?id=4">product 4</a></li>
			<li><a href="product_item.php?id=5">product 5</a></li>
			<li><a href="product_item.php?id=6">product 6</a></li>
			<li><a href="product_item.php?id=7">product 7</a></li>
			<li><a href="product_item.php?id=8">product 8</a></li>
			<li><a href="product_item.php?id=9">product 9</a></li>
			<li><a href="product_item.php?id=10">product 10</a></li>
	   	</ul>
	   		
	   </div>
   </div>

   <?php include "parts/footer.php" ?>

   

</body>
</html>