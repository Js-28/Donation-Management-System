<?php

include 'connectdb.php';
session_start();
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dc = $add = $city = $state = $pincode = $servings  = $cnumber = "";
    $dcError = $addError = $stateError = $pincodeError = $servingsError = $cityError = $cnumber = "";
    $flag = 0;

    if (isset($_POST['register'])) {

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $dc = $_POST['dc'];
        $add = $_POST['add'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $servings = $_POST['servings'];
        // $email = $_POST['email'];
        $cnumber = $_POST['cnumber'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $temp=$_SESSION['loginid'];
        // echo $temp;

        if (!empty($dc)) {
            $dc = test_input($_POST['dc']);
        } else {
            $flag = 1;
            $dcError = "Donation category is required";
        }

        if (!empty($add)) {
            $add = test_input($_POST['add']);
        } else {
            $flag = 1;
            $addError = "Address is required";
        }

        // if (!empty($email)) {
        //     $email = test_input($_POST['email']);
        // } else {
        //     $flag = 1;
        //     $emailError = "Email is required";
        // }

        if (empty($_POST['state'])) {
            $stateError = "State is required";
            $flag = 1;
        } else {
            $state = test_input($_POST['state']);
        }

        if (empty($_POST['city'])) {
            $cityError = "City is required";
            $flag = 1;
        } else {
            $city = test_input($_POST['city']);
        }

        if (!empty($cnumber)) {
            $cnumber = test_input($_POST['cnumber']);
        } else {
            $flag = 1;
            $cnumberError = "Mobile Number is required";
        }

        if (!empty($pincode)) {
            $pincode = test_input($_POST['pincode']);
        } else {
            $flag = 1;
            $pincodeError = "Pincode is required";
        }

        if (!empty($servings)) {
            $servings = test_input($_POST['servings']);
        } else {
            $flag = 1;
            $servingsError = "Servings is required";
        }

        if ($flag == 0) {
          // echo $dc;
          // echo $add;
          // echo $city;
          // echo $state;
          // echo $pincode;
          // echo $servings;
          // echo $cnumber;


          //   echo $longitude;
          //   echo $latitude;
          //   echo $temp;

            $sql = "INSERT INTO donation (donationcategory, address, city, state, pincode, servings, mobnum, latitude, longitude, useremail) VALUES ('$dc', '$add', '$city', '$state', '$pincode', '$servings', '$cnumber', '$latitude', '$longitude', '$temp');";
            // echo $temp;
             $result = $conn->query($sql);

            $sql1 = "UPDATE users SET coins=coins+1 WHERE emailid = '$temp'";
             $result1 = $conn->query($sql1);


            echo "WILL SOON ASSIGN TO NGO";
            header("Refresh:5; url=index_user.php");

        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register Admin</title>
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css\form.css">

</head>

<body onload = "getLocation();">
  <!-- partial:index.partial.html -->
  <section class='login' id='login'>
    <div class='head'>
      <h1 class='company'>Register</h1>
    </div>
    <bR><br>
    <div class='form'>
      <form method="post" action="register_donor.php">

               <input class='text' type="text" placeholder="Enter Donation Category" name="dc" id="dc" value="<?php echo $dc; ?>" />
                <span><?php echo $dcError; ?></span>
                 <input class='text' type="text" placeholder="Enter Address" name="add" id="add" value="<?php echo $add; ?>" />
                <span><?php echo $addError; ?></span>

                <input class='text' type="text" placeholder="Enter State" name="state" id="state" value="<?php echo $state; ?>" />
                <span><?php echo $stateError; ?></span>

                <input class='text' type="text" placeholder="Enter City" name="city" id="city" value="<?php echo $city; ?>" />
                <span><?php echo $cityError; ?></span>

                <input class='text' type="text" placeholder="Enter Pincode" name="pincode" id="pincode" value="<?php echo $pincode; ?>" />
                <span><?php echo $pincodeError; ?></span>

                <input class='number' type="number" placeholder="Approx people to be served" name="servings" id="servings" />
                    <span><?php echo $servingsError; ?></span>



                <input class='number' type="number" placeholder="Mobile Number" name="cnumber" id="cnumber" />
                    <span><?php echo $cnumberError; ?></span>
                <input class='text' type="hidden" name="latitude" id="latitude" style="width: 100%;
                    text-align: center;
                    border-radius: 10rem;
                    height: 40px;">

            <input type="hidden" name="longitude" id="longitude" style="width: 100%;
                    text-align: center;
                    border-radius: 10rem;
                    height: 40px;">

                    <!-- <div id="location"></div> -->

            <!-- <button name='register'>Register</button> -->
<br>
<br>
<br>
        <center><button class='btn-login' name='register' type="submit">Register</button> </center>
      </form>
    </div>
  </section>
  <!-- <script src="./script.js"></script> -->
  <script type="text/javascript">

            // function getLocation() {
            //     if(navigator.geolocation) {
            //         navigator.geolocation.getCurrentPosition(showPosition, showError);
            //     }
            // }

            // function showPosition(position) {
            //     document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
            //     document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
            // }

            // function showError(error) {
            //     switch(error.code) {
            //         case error.PERMISSION_DENIED:
            //             // alert("YOU MUST ALLOW LOCATION");
            //             location.reload();
            //             break;
            //     }
            // }


            function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
          div.innerHTML = "The Browser Does not Support Geolocation";
        }
      }

      function showPosition(position) {
        // div.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
        document.getElementById("longitude").value=position.coords.longitude;
        document.getElementById("latitude").value=position.coords.latitude;

      }

      function showError(error) {
        if(error.PERMISSION_DENIED){
            alert("YOU MUST ALLOW LOCATION");
            location.reload();

        }
      }

        </script>

</body>

</html>
