<?php
include_once './config/db.php';

// sql to delete a record
$sql = "DELETE FROM employee WHERE employeeID=34";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
