
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
    <div  style="float: right;">
      <button type="button" class="btn btn-secondary add-btn" onclick="window.location.href='register_org.php'">Add Organisation</button>

    </div>
  </div>
  <div class="container-fluid" style="margin-top:100px;">
  <div class="table-responsive">
    <?php
        $sql = "SELECT * FROM organisation";
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
        <th> ORGANISATION ID </th>
        <th> NAME </th>
        <th> E_MAIL ID</th>
        <th> CITY </th>
        <th> MOBILE NUMBER </th>
        <th> COINS </th>

      </tr>
      <?php
            foreach($result as $row) :
        ?>



        <tr  class="table-primary" style="text-align:center">
            <td> <?php echo $row["oid"]; ?> </td>
            <td> <?php echo $row["oname"]; ?></td>
            <td> <?php echo $row["emailid"]; ?></td>
            <td> <?php echo $row["city"]; ?></td>

            <td> <?php echo $row["mobnum"]; ?></td>
            <td> <?php echo $row["coins"]; ?></td>
            <td><button type="button" class="btn btn-secondary" >X</button></td>

        </tr>
        <?php endforeach;
            }
        ?>
  </div>
  </div>
</div>



  <script src="app.js"></script>
  </body>
</html>
