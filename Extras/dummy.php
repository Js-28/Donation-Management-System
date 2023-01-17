<?php

include 'connectdb.php';
include 'register_org.php';
session_start();
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $oname = $email = $password = $cpassword = $city = $onameError = $emailError = $passwordError = $cpasswordError = $cityError = "";
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

        if (!empty($city)) {
            $city = test_input($_POST['city']);
        } else {
            $flag = 1;
            $cityError = "City is required";
        }

        if ($flag == 0) {
            $from = "shahneel9016@gmail.com"; // this is your Email address
            echo $email;
            $to = $email; // this is the sender's Email address
            // $first_name = $_POST['first_name'];
            // $last_name = $_POST['last_name'];
            $subject = "OTP For SmileFoundation";
            $otp = rand(100000,999999);
            $_SESSION['otp12'] = $otp;
            $message = "Dear Customer\nYour OTP For The Verification Is  " . $otp;
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
    
            echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
            header("Location: otp.php");
        }
    }
}

?>

