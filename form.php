<?php 

?>

<form action="create.php" method="post">

<h1>
   Employee Form
</h1>
 
 Name: <input type="text" name="Employee_Name" placeholder="Employee Name Here" required><br>

Email: <input type="text" name="Email" placeholder="Your Email Here" required><br>

Contact No: <input type="text" name="ContactNo" placeholder="Your Contact No Here" required><br>

Designation: <input type="text" name="Designation" placeholder="Your Designation Here" required><br>

<input type="submit" value="submit">
</form>

<!DOCTYPE html>
<html>
  
  <style>
input[type=text], select {
  width: 45%; 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block; 
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box; 
}

input[type=submit] {
  width: 50%; 
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>

</html>
