<?php
    session_start();
?>

<?php 
      include 'header.php';
  ?>
</head>
<body>
    <!-- Navbar Start -->
    
<?php 
      include 'nav.php';
  ?>
                <a href="index_org.php" class="nav-item nav-link active">Home</a>
                <a href="pending_request.php" class="nav-item nav-link">Pending Request</a>
                <a href="past_orders.php" class="nav-item nav-link">Past Orders</a>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                        // echo $_SESSION['user'] . " -----" . $_SESSION['logged'];
                        if($_SESSION['logged'] == 1)
                            echo $_SESSION["user"] . "<br>";
                        // else
                            // echo '<a href="registerform.html"><span>Login/Register</span></a></li>';
                 ?> </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="offers_org.php"><?php
                        // echo $_SESSION['user'] . " -----" . $_SESSION['logged'];
                        if($_SESSION['logged'] == 1)
                            echo $_SESSION["coins"] . " coins" . "<br>";
                        // else
                        //     echo '<a href="registerform.html"><span>Login/Register</span></a></li>';
                ?></a></li>
                      <li><a class="dropdown-item" href="signout.php">Sign-out</a></li>
                    </ul>
                  </li>
                <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->

            </div>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">

      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
          <div class="carousel-caption d-flex align-items-center justify-content-center">
            <div class="p-5" style="width: 100%; max-width: 900px;">
              <h5 class="display-4 text-white mb-md-4" style="font-family: 'Dancing Script', cursive;">It's not the amount that matters but the meaning behind your donation.</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
          <div class="carousel-caption d-flex align-items-center justify-content-center">
            <div class="p-5" style="width: 100%; max-width: 900px;">
              <h5 class="display-4 text-white mb-md-4" style="font-family: 'Dancing Script', cursive;">Giving a little is better than not giving at all.</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
          <div class="carousel-caption d-flex align-items-center justify-content-center">
            <div class="p-5" style="width: 100%; max-width: 900px;">
              <h5 class="display-4 text-white mb-md-4" style="font-family: 'Dancing Script', cursive;">Even the smallest gift to charity can make a huge impact.</h5>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <?php 
      include 'about_section.php';
  ?>
  <a href="login_user.php" class="btn btn btn-outline-secondary  btn-lg py-md-2 px-md-4 font-weight-semi-bold">Donate</a>
          </div>
        </div>

      </div>
    </div>
    <!-- About End -->

   <!-- Testimonial Start -->
    <?php 
      include 'testimonial.php';
  ?>

    <!-- Testimonial End -->
    <?php 
      include 'footer.php';
  ?>


    <?php 
      include 'scripts.php';
  ?>
</body>

</html>
