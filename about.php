<!DOCTYPE html>
<html lang="en">

<?php 
      include 'header.php';
  ?>

<body>
    <!-- Navbar Start -->
     
<?php 
      include 'nav.php';
  ?>
  <a href="index.php" class="nav-item nav-link">Home</a>
  <a href="about.php" class="nav-item nav-link active">About</a>
                <a href="login_user.php" class="nav-item nav-link">Donate</a>
                <a href="users.php" class="nav-item nav-link">Sign-in</a>

            </div>
        </div>
      </div>
    </nav>
     <!-- Navbar End -->


     <!-- Page Header Start -->
     <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
         <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">About</h1>
         <div class="d-inline-flex text-white">
             <p class="m-0"><a class="text-white" href="">Home</a></p>
             <p class="m-0 px-2">/</p>
             <p class="m-0">About</p>
         </div>
     </div>
     <!-- Page Header Start -->


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


    <!-- Features Start -->
    <div class="container-fluid pt-5 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <medium class="bg-primary text-white text-uppercase font-weight-bold px-1">Why Choose Us</medium>
                    <h1 class="mt-2 mb-3" style="font-family: Lobster Two, cursive;">No Mediator Required</h1>
                    <h4 class="font-weight-normal text-muted mb-4">This platform provides an easy accessibility between the person in need and one who is willing to contribute to society in any form.</h4>
                    <div class="list-inline mb-4">
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Put request of any kind of donation.</p>
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Nearby NGO accepts the request.</p>
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>NGO then collects the item.</p>
                    </div>
                    <!-- <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Learn More</a> -->
                </div>
                <div class="col-lg-6">
                  <img src="img/website.jpg" class="img-fluid img-thumbnail p-3" alt="">
                </div>
            </div>
        </div>
    </div>
	<!-- Features End -->


	<!-- Team Start -->
    <div class="container-fluid pt-5" style="margin-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Meet The Team</small>
                    <h1 class="mt-2 mb-3" style="font-family: Lobster Two, cursive;">Meet Experts Behind the Work</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Designed and developed by students of Nirma University.</h4>
                    <!-- <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Meet All Experts</a> -->
                </div>
                <div class="col-lg-8 mb-5">
                  <div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-lg-12">
                      <div class="card mb-3" >
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="img/team2.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h3 class="card-title font-weight-bold" style="font-family: 'Dancing Script', cursive;">Jainish Shah</h3>
                                  <p class="card-text">No one is useless in this world who lightens the burdens of another.</p>
                                  <p class="card-text"><h5>CEO & Developer</h5></p>
                                </div>
                              </div>
                            </div>
                            </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-lg-12">
                      <div class="card mb-3" >
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="img/team1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h3 class="card-title font-weight-bold " style="font-family: 'Dancing Script', cursive;">Nitya Patel</h3>
                                <p class="card-text">When we give cheerfully and accept gratefully, everyone is blessed.</p>
                                <p class="card-text"><h5 >CEO & Developer</h5></p>
                              </div>
                            </div>
                          </div>
                          </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
<?php 
      include 'footer.php';
  ?>


    <!-- JavaScript Libraries -->
    <?php 
      include 'scripts.php';
  ?>
</body>

</html>
