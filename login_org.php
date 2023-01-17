<?php

include 'connectdb.php';
error_reporting(0);

session_start();
$_SESSION['user'] = '';
$_SESSION['logged'] = 0;
$_SESSION['coins'] ='';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $password = $emailError = $passwordError = "";
    $flag = 0;

    if (isset($_POST['login'])) {

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email)) {
            $email = test_input($_POST['email']);
            $email = $_POST['email'];
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

        if ($flag == 0) {

            $sql = "SELECT emailid, psw, oname, coins FROM organisation WHERE emailid = '$email' and psw = '$password'";
            $result = $conn->query($sql);

            //echo mysqli_num_rows($result);

            if (mysqli_num_rows($result) == 1) {
              $row = mysqli_fetch_array($result);
              $_SESSION['user'] = $row['oname'];
              $_SESSION['logged'] = 1;
              $_SESSION['coins'] = $row['coins'];
              $_SESSION['loginid'] = $row['emailid'];
              // echo $_SESSION['user'] . " -----" . $_SESSION['logged'];
              header("Location: index_org.php");
            } else {
                echo "INVALID CREDENTIALS";
            }

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
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
      <h1 class='company'>Login</h1>
    </div>
    <bR><br>
    <div class='form'>
      <form method="post" action="login_org.php">
        <input type="text" placeholder='Username' class='text' name="email" id="email" value="<?php echo $email; ?>">
                <span><?php echo $emailError; ?></span><br>

                <input type="password" placeholder='••••••••••••••' class='password' name="password" id="password">
                    <span><?php echo $passwordError; ?></span>  <br><br>
        <center><button class='btn-login' name='login' type='submit'>Login</button>  </center>
       <center> <a class='forgot' href='register_org.php'>Create New Account</a></center>
     
      </form>
    </div>
  </section>
  <!-- partial -->
  <script src="./script.js"></script>

</body>

</html>