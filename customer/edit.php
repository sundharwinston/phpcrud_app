<?php
 include '../header.php';
   $id = $_GET['id'];
    $connection_obj = mysqli_connect("localhost","root","root","php");
        if (!$connection_obj) {
            echo "Error No: " . mysqli_connect_errno();
            echo "Error Description: " . mysqli_connect_error();
            exit;
        }
       $query = "SELECT * FROM customer   WHERE id=$id";
         
        $result = mysqli_query($connection_obj, $query) or die(mysqli_error($connection_obj));
?>



<?php while ($row = mysqli_fetch_array($result)) {?>
<div class="container">
  <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
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

<?php }?>
