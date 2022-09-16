<?php

include_once './config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Employee_Name"];
    $email = $_POST["Email"];
    $contactNo = $_POST["ContactNo"];
    $designation = $_POST["Designation"];
  }


$sql = "INSERT INTO employee ( Employee_Name, Email, ContactNo, Designation)
VALUES ('$name', '$email', '$contactNo', '$designation' )";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

