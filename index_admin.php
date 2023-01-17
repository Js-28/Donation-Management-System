<?php
  include 'connectdb.php';
  error_reporting(0);
?>

<head>
  <?php
      include 'header_admin.php';
  ?>

</head>

<body>
  <?php
      include 'admin_nav.php';
  ?>

  <main>
    <h1>Dashboard</h1>
    <!-- <p class="text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur animi voluptatibus cum maxime distinctio
      iste quod deleniti eius, autem voluptates cumque suscipit iure quasi eligendi ullam. Sapiente eligendi porro
      reprehenderit corrupti error facilis quo, fugiat fugit? Maiores aliquam ad, molestiae iste nihil, commodi
      doloremque tempore excepturi aut id ducimus unde?
    </p> -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">

        <div class="card text-dark bg-light mb-3" style="height: 18rem;max-width: 18rem; text-align:center;">

          <!-- <div class="card-header"></div> -->
          <img src="img/user1.jpg" class="card-img img-thumbnail" style="height:290px;" alt="...">
          <div class="card-body card-img-overlay" style="margin-top:10px;">
            <h2 class="card-title">Total Users</h2>
            <div class="container-fluid" style="margin-top:50px;">
           <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                $i = mysqli_num_rows($result);
                echo "<h2>" . $i . "</h2>";
            ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-dark bg-light mb-3" style="height: 18rem;max-width: 18rem; text-align:center;">
          <img src="img/ngo.jpg" class="card-img img-thumbnail" style="height:290px;" alt="...">
          <div class="card-body card-img-overlay" style="margin-top:10px;">
            <h2 class="card-title">Total NGOs</h2>
            <div class="container-fluid" style="margin-top:50px;">
              <?php
                $sql = "SELECT * FROM organisation";
                $result = mysqli_query($conn, $sql);
                $i = mysqli_num_rows($result);
                echo "<h2>" . $i . "</h2>";
            ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-white bg-secondary mb-3" style="height: 18rem;max-width: 18rem; text-align:center;">
          <img src="img/don2.png" class="card-img img-thumbnail" style="height:290px;" alt="...">

          <div class="card-body card-img-overlay"  style="margin-top:10px;">
            <h2 class="card-title">Total Donations</h2>
            <div class="container-fluid" style="margin-top:60px;color:white;">
              <?php
                $sql = "SELECT * FROM donation";
                $result = mysqli_query($conn, $sql);
                $i = mysqli_num_rows($result);
                echo "<h2>" . $i . "</h2>";
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>


  </main>

  <script src="app.js"></script>
</body>

</html>
