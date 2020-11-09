<!DOCTYPE html>
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
         <?php include "../parts/single product.php" ?>
      </div>
   </div>

   <?php include "../parts/footer.php" ?>

</body>
</html>