<?php
    include('connectdb.php');

    $sql = "SELECT oname, city FROM organisation";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr> <th> NAME OF ORGANISATION </th><th> CITY </th> </tr>";	
        
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["oname"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "</tr>";
        }
    } 
    else 
        echo "GET SET GO";

?>