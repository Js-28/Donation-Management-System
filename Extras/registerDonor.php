<?php
    include('connectdb.php');
    error_reporting(0);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dc = $add = $city = $state  = $pincode = $servings = $email = $cnumber = "";
        $dcError = $addError = $emailError = $stateError = $pincodeError = $servingsError = $cityError = $cnumber = "";
        $flag = 0;

        if(isset($_POST['register'])) {

            function test_input($data) {
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
            $email = $_POST['email'];
            $cnumber = $_POST['cnumber'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];

            if(!empty($dc)) 
                $dc = test_input($_POST['dc']);

            else {
                $flag = 1;
                $dcError = "Donation category is required";
            }

            if(!empty($add)) 
                $add = test_input($_POST['add']);

            else {
                $flag = 1;
                $addError = "Address is required";
            }

            if(!empty($email)) 
                $email = test_input($_POST['email']);

            else {
                $flag = 1;
                $emailError = "Email is required";
            }
        
            if (empty($_POST['state'])) {
                $stateError = "State is required";
                $flag = 1;
            }

            else 
                $state = test_input($_POST['state']);

            if (empty($_POST['city'])) {
                $cityError = "City is required";
                $flag = 1;
            }
    
            else 
                $city = test_input($_POST['city']);

            if(!empty($cnumber)) 
                $cnumber = test_input($_POST['cnumber']);
    
            else {
                $flag = 1;
                $cnumberError = "Mobile Number is required";
            }

            if(!empty($pincode)) 
                $pincode = test_input($_POST['pincode']);
    
            else {
                $flag = 1;
                $pincodeError = "Pincode is required";
            }

            if(!empty($servings)) 
                $servings = test_input($_POST['servings']);
    
            else {
                $flag = 1;
                $servingsError = "Servings is required";
            }

            if($flag == 0) {

                $sql = "INSERT INTO donation (donationcategory, address, city, state, pincode, servings, emailid, mobnum, latitude, longitude)" . 
                        "VALUES ('$dc', '$add', '$city', '$state', '$pincode', '$servings', '$email', '$cnumber', '$latitude', '$longitude');";
                        
                $result = $conn->query($sql);

                echo "WILL SOON ASSIGN TO NGO";
                
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    
</head>
<body onload = "getLocation();">
    <form class="myForm" method="post" action="registerDonor.php">
    <div style="display:flex;font-size: 23px;font-family: 'Ubuntu', sans-serif;letter-spacing: 2px;margin-bottom: 2rem;">
            
            <div style="font-weight: bolder;font-size: 25px;align-items: center;margin-right: 5rem;">DONATION CATEGORY: </div>
                <div style="margin-right: 5rem;">
                <input type="text" placeholder="Enter Donation Category" name="dc" id="dc" value="<?php echo $dc; ?>" style="width: 100%;
                text-align: center;
                border-radius: 10rem;
                height: 40px;"></div>
                <span><?php echo $dcError; ?></span>
           </div> 

           <div style="font-weight: bolder;font-size: 25px;align-items: center;margin-right: 5rem;">ADDRESS: </div>
                <div style="margin-right: 5rem;">
                <input type="text" name="add" id="add" value="<?php echo $add; ?>" style="width: 100%;
                text-align: center;
                border-radius: 10rem;
                height: 40px;"></div>
                <span><?php echo $addError; ?></span>
           </div> 

           <div style="font-weight: bolder;font-size: 25px;align-items: center;margin-right: 5rem;">STATE: </div>
                <div style="margin-right: 5rem;">
                <input type="text" placeholder="Enter State" name="state" id="state" value="<?php echo $state; ?>" style="width: 100%;
                text-align: center;
                border-radius: 10rem;
                height: 40px;"></div>
                <span><?php echo $stateError; ?></span>
           </div>

            <div style="font-weight: bolder;font-size: 25px;align-items: center;margin-right: 5rem;">CITY: </div>
                <div style="margin-right: 5rem;"><input type="text" placeholder="Enter City" name="city" id="city" value="<?php echo $city; ?>" style="width: 100%;
                text-align: center;
                border-radius: 10rem;
                height: 40px;"></div>
                <span><?php echo $cityError; ?></span>
           </div>            

           <div style="font-weight: bolder;font-size: 25px;align-items: center;margin-right: 5rem;">PINCODE: </div>
                <div style="margin-right: 5rem;"><input type="text" placeholder="Enter Pincode" name="pincode" id="pincode" value="<?php echo $pincode; ?>" style="width: 100%;
                text-align: center;
                border-radius: 10rem;
                height: 40px;"></div>
                <span><?php echo $pincodeError; ?></span>
           </div>


            <div style="display:flex;font-size: 23px;font-family: 'Ubuntu', sans-serif;letter-spacing: 2px;margin-bottom: 2rem;">
                <div style="font-weight: bolder;font-size: 25px;align-items: center;margin-right: 5rem;">SERVINGS: </div>
                <div style="margin-right: 5rem;"><input type="number" placeholder="Approx people to be served" name="servings" id="servings" style="width: 100%;
                    text-align: center;
                    border-radius: 10rem;
                    height: 40px;"></div>
                    <span><?php echo $servingsError; ?></span>
            </div>

            <div style="font-weight: bolder;font-size: 25px;align-items: center;margin-right: 5rem;">EMAIL: </div>
                <div style="margin-right: 5rem;"><input type="text" placeholder="Enter Email-Id" name="email" id="email" value="<?php echo $email; ?>" style="width: 100%;
                text-align: center;
                border-radius: 10rem;
                height: 40px;"></div>
                <span><?php echo $emailError; ?></span>
           </div> 

            <div style="display:flex;font-size: 23px;font-family: 'Ubuntu', sans-serif;letter-spacing: 2px;margin-bottom: 2rem;">
                <div style="font-weight: bolder;font-size: 25px;align-items: center;margin-right: 5rem;">MOBILE NUMBER: </div>
                <div style="margin-right: 5rem;"><input type="number" placeholder="Mobile Number" name="cnumber" id="cnumber" style="width: 100%;
                    text-align: center;
                    border-radius: 10rem;
                    height: 40px;"></div>
                    <span><?php echo $cnumberError; ?></span>
            </div>

            <input type="hidden" name="latitude" id="latitude" style="width: 100%;
                    text-align: center;
                    border-radius: 10rem;
                    height: 40px;">

            <input type="hidden" name="longitude" id="longitude" style="width: 100%;
                    text-align: center;
                    border-radius: 10rem;
                    height: 40px;">

            <button name='register'>Register</button>

        </form>

        <script type="text/javascript">

            function getLocation() {
                if(navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                }
            }

            function showPosition(position) {
                document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
            }

            function showError(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        alert("YOU MUST ALLOW LOCATION");
                        location.reload();
                        break;
                }
            }

        </script>

</body>
</html>