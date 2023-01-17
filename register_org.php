

<?php

include 'connectdb.php';
session_start();
error_reporting(0);
$_SESSION['otp12']=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $oname = $email = $password = $cpassword = $city = $onameError = $emailError = $passwordError = $cpasswordError = $cityError = $mobnum = $mobnumError = "";
    $flag = 0;

    if (isset($_POST['register'])) {

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $oname = $_POST['oname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $city = $_POST['city'];
        $mobnum=$_POST['cnumber'];

        if (!empty($oname)) {
            $oname = test_input($_POST['oname']);
        } else {
            $flag = 1;
            $onameError = "Organisation Name is required";
        }

        if (!empty($email)) {
            $email = test_input($_POST['email']);
        } else {
            $flag = 1;
            $emailError = "Email is required";
        }

        if (empty($_POST['password'])) {
            $passwordError = "Password is required";
            $flag = 1;
        } else {
            $password = test_input($_POST['password']);
        }

        if (empty($_POST['cpassword'])) {
            $cpasswordError = "Confirm Password is required";
            $flag = 1;
        } else if ($password != $cpassword) {
            $cpasswordError = "Password and Confirm Password should match";
            $flag = 1;
        } else {
            $cpassword = test_input($_POST['password']);
        }
        if (!empty($mobnum)) {
            $mobnum = test_input($_POST['city']);
        } else {
            $flag = 1;
            $mobnumError = "Mobile number is required";
        }

        if (!empty($city)) {
            $city = test_input($_POST['city']);
        } else {
            $flag = 1;
            $cityError = "City is required";
        }


        if ($flag == 0) {
            $_SESSION['email']=$_POST['email'];
            $_SESSION['mobnum']=$_POST['cnumber'];
            $_SESSION['oname']=$_POST['oname'];
            $_SESSION['city']=$_POST['city'];
            $_SESSION['password']=$_POST['password'];
            $to = $email; // this is the sender's Email address
            $subject = "OTP For SmileFoundation";
            $otp = rand(100000, 999999);
            $_SESSION['otp12'] = $otp;
            $message = "Dear Customer\nYour OTP For The Verification Is  " . $otp;
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to, $subject, $message, $headers);
            // echo '<br>'.$otp."<br>";
            // $msg="Mail Sent. Thank you for register " . $first_name . ", we will contact you shortly.";
            // echo "<script>alert('Mail Sent')</script>";
            header("location: otp.php");
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

<body>
  <!-- partial:index.partial.html -->
  <section class='login' id='login'>
    <div class='head'>
      <h1 class='company'>Register</h1>
    </div>
    <bR><br>
    <div class='form'>
      <form method="post" action="register_org.php">

                <input type="text" class='text' placeholder="First Name" name="oname" id="oname" value="<?php echo $oname; ?>" >
 <span><?php echo $onameError; ?></span>
                <br>

            <input type="text" class='text' placeholder="Email-Id" name="email" id="email" value="<?php echo $email; ?>">
                <span><?php echo $emailError; ?></span>


            <input type="password" class='password' placeholder="Password" name="password" id="password">
                    <span><?php echo $passwordError; ?></span>
            <input type="password" class='password'placeholder="Confirm Password" name="cpassword" id="cpassword">
                    <span><?php echo $cpasswordError; ?></span>
            <input type="number" class='number' placeholder="Mobile Number" name="cnumber" id="cnumber">
                    <span><?php echo $mobnumError; ?></span>

            <input type="text" class='text' placeholder="Enter city" name="city" id="city">
                    <span><?php echo $cityError; ?></span>
<br>
<br>
<br>
        <center><button class='btn-login' name='register'>Register</button> </center>
      </form>
    </div>
  </section>
  <!-- <script src="./script.js"></script> -->

</body>

</html>