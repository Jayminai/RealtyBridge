<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><img src="images/logos/headerlogo.png" alt="RealtyBridge logo" class="logo-img">
            <span class="logo-title">RealtyBridge</span></a>

         <ul>
            <li><a href="home.php">Explore<i class="fas fa-search"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">Buy<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="listings.php">House</a></li>
                     <li><a href="listings.php">Flat</a></li>
                     <li><a href="listings.php">Shop</a></li>
                     <li><a href="listings.php">Ready to move</a></li>
                     <li><a href="listings.php">Furnished</a></li>
                  </ul>
               </li>
               <li><a href="#">Sell<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="post_property.php">Post property</a></li>
                     <li><a href="dashboard.php">Dashboard</a></li>
                  </ul>
               </li>
               <li><a href="#">Rent</a>
                  <ul>
                     <li><a href="listings.php">House</a></li>
                     <li><a href="listings.php">Flat</a></li>
                     <li><a href="listings.php">Shop</a></li>
                  </ul>
               </li>
               <li><a href="#">Customer service<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">About us</a></i></li>
                     <li><a href="contact.php">Contact us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>
         <ul>
            <li><a href="saved.php">Saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
               <ul>
                     <?php if($user_id == '') { ?>
                        <li><a href="login.php">Login now</a></li>
                        <li><a href="register.php">Register new</a></li>
                     <?php } else { ?>
                        <li><a href="update.php">Update profile</a></li>
                        <li><a href="components/user_logout.php" onclick="return confirm('Logout from this website?');">Logout</a></li>
                     <?php } ?>
               </ul>
            </li>
         </ul>

      </section>
   </nav>

</header>

<!-- header section ends -->