<?php

include_once './config/db.php';

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<table class="table table-striped table-bordered">
  <tr>
    <th>Employee ID</th>
    <th>Enter Name</th>
    <th>Enter Email</th>
    <th>Enter Contact No</th>
    <th>Enter Designation</th>
  </tr>
  
<?php                                             

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
    <td><?php echo $row["EmployeeID"] ?></td> 
    <td><?php echo $row["Employee_Name"] ?></td>
    <td><?php echo $row["Email"] ?></td>
    <td><?php echo $row["ContactNo"] ?></td>
    <td><?php echo $row["Designation"] ?></td>
    </tr>
    <?php
    
  }
} else {
  echo "0 results";
}
?>

</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php

