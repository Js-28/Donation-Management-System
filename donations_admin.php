<?php
  include 'connectdb.php';
  error_reporting(0);
?>
<html lang="en" dir="ltr">
  <head>
      <?php
         include 'header_admin.php';
      ?>
  </head>
  <body>
    <?php
      include 'admin_nav.php';
    ?>
    <div class="container-fluid">
  <div class="container">
    <div style="float: left;">
      <div class="search">
        <i class='bx bx-search'></i>
        <input type="text" class="hide" placeholder="Quick Search ...">
      </div>
    </div>
    <!-- <div  style="float: right;">
      <button type="button" class="btn btn-secondary add-btn">Add Organisation</button>

    </div> -->
  </div>
      <div class="container" style="margin-top:100px;">
        <div class="" style="overflow-x:auto;">


      <div class="table-responsive">
        <?php
            $sql = "SELECT * FROM donation";
            $result = mysqli_query($conn, $sql);

            $i = 1;
            if (mysqli_num_rows($result) == 0) {
                echo 'No Users';
            }
            else
            {
            ?>
            <table class="table table-hover  font-weight-bold" border = 3>
            <tr class="table-secondary" style="text-align:center">
            <th> DONATION ID </th>
            <th> DONATION CATEGORY </th>
            <th> STATE </th>
            <th> CITY </th>
            <th> ADDRESS </th>
            <th> PINCODE </th>
            <th> SERVINGS </th>
            <th> E_MAIL </th>
            <th> MOBILE NUMBER </th>
            <th> LOCATIONS </th>
            <th> STATUS</th>
            <th> ORGANISATION EMAIL ACCEPTS</th>

          </tr>
          <?php
                foreach($result as $row) :
            ?>



            <tr  class="table-primary" style="text-align:center">
                <td> <?php echo $row["donationid"]; ?> </td>
                <td> <?php echo $row["donationcategory"]; ?> </td>
                <td> <?php echo $row["state"]; ?></td>
                <td> <?php echo $row["city"]; ?></td>
                <td> <?php echo $row["address"]; ?></td>
                <td> <?php echo $row["pincode"]; ?></td>
                <td> <?php echo $row["servings"]; ?></td>
                <td> <?php echo $row["useremail"]; ?></td>
                <td> <?php echo $row["mobnum"]; ?></td>
                <td> <iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>, <?php echo $row["longitude"]; ?> &h1=es;z=14&output=embed'> </iframe> </td>
                <td> <?php echo $row["status"]; ?> </td>
                <td> <?php echo $row["orgemail"]; ?> </td>
            </tr>
            <?php endforeach;
                }
            ?>
      </div>
    </div>
      </div>
      </div>
  <script src="app.js"></script>
  </body>
</html>
