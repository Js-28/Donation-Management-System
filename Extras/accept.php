<?php
                        
                        if(isset($_POST[$row["donationid"]])) {
                            $_SESSION['ID'] = $row["donationid"];
                            $temp = $_SESSION['loginid'];
                            $k = $_SESSION['ID'];
                            $sql = "UPDATE donation SET status = 'Approved', orgemail = '$temp' WHERE donationid = '$k'";
                            $result = mysqli_query($conn, $sql);

                            if ($conn->query($sql) === TRUE) 
                                header('location: past_orders.php');
                            else 
                                echo "Error updating record: " . $conn->error;
                        }
                        ?>