<?php 
    include('connectdb.php');
    session_start();

    $temp = $_SESSION['loginid'];
    $k = $_SESSION['ID'];

    $sql = "UPDATE donation SET status = 'Approved', orgemail = '$temp' WHERE donationid = '$k'";
    $result = mysqli_query($conn, $sql);

    if ($conn->query($sql) === TRUE) {
        echo $_SESSION['ID'];
        echo $_SESSION['loginid'];
        // header('location: index_org.php');
    }
    else 
        echo "Error updating record: " . $conn->error;

    // echo "ASSIGNED TO NGO" . $_SESSION['loginorg'];
?>