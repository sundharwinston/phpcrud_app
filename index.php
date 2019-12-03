<?php
 include 'header.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ViewCustomer</title>
 
</head>
<body>
	<div class="container">
  	<form action="addcustomer.php" method="post">

    <h2>Customer Table</h2><br><br>
    <table class="table">
    <button class="pull-right btn btn-primary"type="submit">AddCustomer</button>
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
        </tr>
        <tr>
          <td>Mary</td>
          <td>Moe</td>
          <td>mary@example.com</td>
        </tr>
        <tr>
          <td>July</td>
          <td>Dooley</td>
          <td>july@example.com</td>
        </tr>
      </tbody>
    </table>

    </form>
</div>

</body>
</html>
