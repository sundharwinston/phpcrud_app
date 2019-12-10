<?php
 include 'header.php';
    $connection_obj = mysqli_connect("localhost","root","root","php");
        if (!$connection_obj) {
            echo "Error No: " . mysqli_connect_errno();
            echo "Error Description: " . mysqli_connect_error();
            exit;
        }
         
        $query = "SELECT * FROM customer";
         
        $result = mysqli_query($connection_obj, $query) or die(mysqli_error($connection_obj));
        mysqli_close($connection_obj);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>ViewCustomer</title>
</head>
<body>
	<div class="container">
    <!--   <span class="close-btn">
        <img src="images/bg.jpg">
      </span> -->
      <h2>Customer Table</h2><br><br>
          
      <table class="table">
      <button class="pull-right btn btn-primary"type="submit"><a href="addcustomer.php"></a>AddCustomer</button>
        <thead>
          <tr>
            <th>S.No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php  
          $count=1;

          while ($row = mysqli_fetch_array($result)){ ?>
       <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row["firstname"] ?></td>
            <td><?php echo $row["lastname"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><button class="btn btn-primary"><a href="../customer/edit.php"></a>Edit</button></td>
            <td><button class="btn btn-danger"><a href=""></a>Delete</button> </td>
          </tr>
        <?php $count++; }?>
        </tbody>
      </table>
</div>

</body>
</html>
