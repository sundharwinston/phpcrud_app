<?php
 include 'header.php';
 $url =   "../images/bg.jpg";
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

<html lang="en">
<head>
       <link rel="stylesheet" media="screen" href="../css/index.css" />

<title>ViewCustomer</title>
</head>
<style>

</style>  
<body>

	<div class="container">
   <!--    <span class="brn-body">
        <img src="images/bg.jpg">
      </span> -->
      <h2>Customer Table</h2><br><br>
      <table class="table">
      <a class="pull-right btn btn-primary" href="addcustomer.php">AddCustomer</a>
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
            <td><?php echo $row["firstname"] ?></td>
            <td><?php echo $row["lastname"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><a class="btn btn-primary" href="customer/edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><a class="btn btn-primary" href="customer/delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
          </tr>
        <?php }?>
        </tbody>
      </table>
</div>

</body>
</html>
