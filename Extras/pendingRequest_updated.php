<?php
    include('connectdb.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = 1>
        <tr>
        <th> DONATION CATEGORY </th>
        <th> STATE </th> 
        <th> CITY </th> 
        <th> ADDRESS </th>
        <th> PINCODE </th>
        <th> SERVINGS </th>
        <th> E_MAIL </th>
        <th> MOBILE NUMBER </th>
        <th> MAPS </th>
        <th> </th></tr>

    <?php
        $sql = "SELECT * FROM donation where status='Pending'";
        $result = mysqli_query($conn, $sql);

        $i = 1;
        foreach($result as $row) :
    ?>

        <tr>
            <td> <?php echo $row["donationcategory"]; ?> </td>
            <td> <?php echo $row["state"]; ?></td>
            <td> <?php echo $row["city"]; ?></td>
            <td> <?php echo $row["address"]; ?></td>
            <td> <?php echo $row["pincode"]; ?></td>
            <td> <?php echo $row["servings"]; ?></td>
            <td> <?php echo $row["emailid"]; ?></td>
            <td> <?php echo $row["mobnum"]; ?></td>
            <td> <iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>, <?php echo $row["longitude"]; ?> &h1=es;z=14&output=embed'> </iframe> </td>
            <td> <form method="post" action="updateStatus.php">
                    <input type="submit" id="<?php echo $row["donationid"]; ?>" name="<?php echo $row["donationid"]; ?>" value="Accept">
                    <?php
                        echo $row["donationid"] . "*****";
                        if(isset($_POST[$row["donationid"]]))
                            $_SESSION['ID'] = $row["donationid"];
                        ?>
                    </form>  </td>
        </tr>
        <?php endforeach; 
        ?>
</body>
</html>

