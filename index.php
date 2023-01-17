<!DOCTYPE html>
<html lang="en">

<?php 
      include 'header.php';
  ?>
</head>

 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- </head> -->

    

<body data-aos-easing="ease-in-out">
    <!-- Navbar Start -->

<?php 
      include 'nav.php';
  ?>
  <a href="index.php" class="nav-item nav-link active">Home</a>
  <a href="about.php" class="nav-item nav-link">About</a>
                <a href="login_user.php" class="nav-item nav-link">Donate</a>
                <a href="users.php" class="nav-item nav-link">Sign-in</a>

            </div>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel" >

      <div class="carousel-inner" role="listbox" data-aos="fade-down">
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

    


    <!-- JavaScript Libraries -->
    <?php 
      include 'scripts.php';
  ?>
    <script>
  AOS.init();
  AOS.init({
                offset: 100,
                delay: 100,
                duration: 1000
            });
</script>
</body>

</html>
