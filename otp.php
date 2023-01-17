<?php
    include 'connectdb.php';

    session_start();    
    // echo "<script>alert('Mail Sent')</script>";

    echo "<center style='color:white'>Check Your Inbox</center>";
    if(isset($_POST['submit'])) {
        $otp = $_SESSION['otp12'];
        // echo $otp;
        // echo "<br>";
        // echo $_POST['cnumber'];
        if($otp == $_POST['number']) {
          // echo "LOGGED IN SUCCESSFULLY";
                $email=$_SESSION['email'];
                $cnumber=$_SESSION['mobnum'];
                $oname=$_SESSION['oname'];
                $city=$_SESSION['city'];
                $password=$_SESSION['password'];

            $sql = "SELECT emailid FROM organisation WHERE emailid = '$email'";
                $result = $conn->query($sql);

                if (mysqli_num_rows($result) == 0) {
                    $sql = "INSERT INTO organisation (oname, emailid, city, psw, mobnum)" .
                        "VALUES ('$oname', '$email', '$city', '$password','$cnumber');";
                    $result = $conn->query($sql);
                    echo "LOGGED IN SUCCESSFULLY";
                    header("Location: login_org.php");
                } 
                else 
                    echo "INVALID CREDENTIALS";
        }

        else{
            echo "<script>alert('INVALID OTP Register Again')</script>";
            header("refresh:1 ; url= register_org.php");
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

<body>
  <!-- partial:index.partial.html -->
  <section class='login' id='login'>
    <div class='head'>
      <h1 class='company'>Register</h1>
    </div>
    <bR><br>
    <div class='form'>
      <form method="post" action="otp.php">
            <input type="number" class='number' placeholder="OTP" name="number" id="number">

    </div>

<br>
<br>
<br>
        <center><button class='btn-login' name='submit'>Verify OTP</button> </center>
      </form>
    </div>
  </section>
  <!-- <script src="./script.js"></script> -->

</body>

</html>