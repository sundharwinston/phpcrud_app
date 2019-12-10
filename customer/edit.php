<?php

$con = mysqli_connect("localhost","root","root","php");


echo $student_id = $_GET['id']; 
$query = "SELECT * FROM customer WHERE id = '$student_id'"; 
$result = mysql_query($query);
$row = mysql_fetch_array($result);
mysql_close();

?>



<div class="container">
  <form action="edit.php" method="post">
    <div class="form-group">
      <label for="firstname">firstname:</label>
      <input type="firstname" name="firstname" value="<?php echo $row['firstname'] ?>" class="form-control" id="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">lastname:</label>
      <input type="lastname" name="lastname" value="<?php echo $row['lastname'] ?>" class="form-control" id="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" value="<?php echo $row['password'] ?>" class="form-control" id="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" name="form_submit" class="btn btn-success">Submit</button>
  </form>
</div>
