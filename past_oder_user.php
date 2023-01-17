<?php
    include('connectdb.php');
    session_start();
?>

<?php 
      include 'header.php';
  ?>
</head>

<body style="background-color: #393E46;">
    <?php 
      include 'nav.php';
  ?>
                <a href="index_org.php" class="nav-item nav-link active">Home</a>
                <!-- <a href="pending_request.php" class="nav-item nav-link">Pending Request</a> -->
                <a href="register_donor.php" class="nav-item nav-link">Donate</a>
                <a href="past_oder_user.php" class="nav-item nav-link">Past Orders</a>


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
                      <li><a class="dropdown-item" href="offers_users.php"><?php
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

    <br><br><br><br><br><br>

    <div class="container-fluid">
      <?php
        $temp = $_SESSION['loginid'];
        $sql = "SELECT * FROM donation where useremail = '$temp'";
        $result = mysqli_query($conn, $sql);

        $i = 1;

        if(mysqli_num_rows($result) == 0)
            echo '<span style="text-align:center; color:white; font-size:30px;">*NO RECENT ORDERS</span>';

        else {
            foreach($result as $row) :
  ?>
      <div class="table-responsive">
        <table class="table table-hover  font-weight-bold" border = 3>
       <tr class="table-secondary" style="text-align:center">
       <th> DONATION CATEGORY </th>
       <th> STATE </th>
       <th> CITY </th>
       <th> ADDRESS </th>
       <th> PINCODE </th>
       <th> SERVINGS </th>
       
       <th> MOBILE NUMBER </th>
       <th> MAPS </th>
       <th> STATUS </th>
       </tr>

       <tr  class="table-primary" style="text-align:center">
         <td> <?php echo $row["donationcategory"]; ?> </td>
          <td> <?php echo $row["state"]; ?></td>
          <td> <?php echo $row["city"]; ?></td>
          <td> <?php echo $row["address"]; ?></td>
          <td> <?php echo $row["pincode"]; ?></td>
          <td> <?php echo $row["servings"]; ?></td>
          
          <td> <?php echo $row["mobnum"]; ?></td>
          <td> <iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>, <?php echo $row["longitude"]; ?> &h1=es;z=14&output=embed'> </iframe> </td>
          <td> <?php echo $row["status"]; ?></td>
          
      </tr>
      <?php endforeach;
      }
      ?>
      </div>

    </div>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


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
