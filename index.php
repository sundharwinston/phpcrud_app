<?php
 include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ViewCustomer</title>
 
</head>
<body>
	<form action="addcustomer.php" method="post">
	<div class="container">
  <h2>Basic Table</h2><br><br>
  <table class="table">
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

  <button type="submit">AddCustomer</button>
  </form>
</div>

</body>
</html>
