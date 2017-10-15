 <div class="masthead">
        
        <ul class="nav nav-justified">
          <li <?php if ( $page == "home" ) echo 'class="active"' ?>><a href="<?php echo site_url("main/index");?>">Home</a></li>
		  <li <?php if ( $page == "about" ) echo 'class="active"' ?>><a href="<?php echo site_url("main/about");?>">About</a></li>
          <li <?php if ( $page == "products" ) echo 'class="active"' ?>><a href="<?php echo site_url("main/products");?>">Products</a></li>
		  <li <?php if ( $page == "preventive" ) echo 'class="active"' ?>><a href="<?php echo site_url("main/preventive");?>">Services</a></li>
          <li <?php if ( $page == "fragrance" ) echo 'class="active"' ?>><a href="<?php echo site_url("main/fragrance");?>">Scent Products</a></li>
          <li <?php if ( $page == "productlist" ) echo 'class="active"' ?>><a href="<?php echo site_url("main/productlist");?>">Product List</a></li>
          <li <?php if ( $page == "contacts" ) echo 'class="active"' ?>><a href="<?php echo site_url("main/contacts");?>">Contacts</a></li>
        </ul>
  </div>
  
  
   