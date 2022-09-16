<?php

include_once './config/db.php';

$sql = "UPDATE employee SET Designation = 'Manager' WHERE Employee_Name = 'Zakir Hossain'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

