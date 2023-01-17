<?php 
if(isset($_POST['submit'])){
    $from = "shahneel9016@gmail.com"; // this is your Email address
    $to = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "OTP For SmileFoundation";
    $otp = rand(100000,999999);
    $message = "Dear Customer\nYour OTP For The Verification Is  " . $otp;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    
    }
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
<!-- Message:<br><textarea rows="5" name="message" cols="30"></textarea><br> -->
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>