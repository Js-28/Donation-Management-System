<?php

    $servername = "localhost";
    $username = "root";
    $password1 = "";
    $database = "donation";

    $conn = mysqli_connect($servername, $username, $password1, $database);
    if (!$conn)
        die("Sorry we failed to connect: ". mysqli_connect_error());

?>