<header class="navbar">
   <div class="container display-flex flex-align-center">
      <div class="flex-none display-flex flex-align-center">
         <img class="logo" src="img/logo_carheaven.png">
         <h1>CarHeaven</h1>
      </div>
      <div class="flex-stretch"></div>
      
      <!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
      <nav class="nav flex-none">
         <ul class="display-flex">
            <li><a href="index.php">Home</a></li>
            <li><a href="product_list.php">Search Cars</a></li>
            
   			<li><a href="index.php">About</a></li>
            <li><a href="product_cart.php">
               <span>Cart</span>
               <span class="badge"><?= makeCartBadge() ?></span>
            </a></li>
         </ul>
      </nav>
   </div>

   
</header>

















