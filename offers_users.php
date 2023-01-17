
<?php
    session_start();
?>
  
<?php 
      include 'header.php';
  ?>
</head>
  <body>


<?php 
      include 'nav.php';
  ?>
   <a href="index_org.php" class="nav-item nav-link active">Home</a>
                <!-- <a href="pending_request.php" class="nav-item nav-link">Pending Request</a> -->
                <a href="register_donor.php" class="nav-item nav-link">Donate</a>
                <a href="#" class="nav-item nav-link">Past Orders</a>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                        // echo $_SESSION['user'] . " -----" . $_SESSION['logged'];
                        if($_SESSION['logged'] == 1)
                            echo $_SESSION["user"] . "<br>";
                        // else
                        //     echo '<a href="registerform.html"><span>Login/Register</span></a></li>';
                ?> </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href=""><?php
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
<?php 
      include 'offers.php';
  ?>  
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
