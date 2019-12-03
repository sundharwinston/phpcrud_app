<?php
include_once 'header.php';

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php";

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$conn = new mysqli($php, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($email!='' && $fname!=''){
  $sql = "INSERT INTO customer (firstname, lastname, email,password) VALUES ('$fname', '$lname', '$email', '$pass')";
    echo "New record created successfully";
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<div class="container">
  
  <form action="post">
    <div class="form-group">
      <label for="firstname">firstname:</label>
      <input type="firstname" name="firstname" class="form-control" id="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">lastname:</label>
      <input type="lastname" name="lastname" class="form-control" id="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

</div>
