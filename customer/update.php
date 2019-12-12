<?php

 $del = $_GET['id'];
if($del){
 $fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];


$query = "UPDATE customer SET firstname = '$fname', lastname = '$lname',password='$pass',email='$email' WHERE id = '$del'";
        $result = mysqli_query(mysqli_connect("localhost","root","root","php"), $query);
           echo "<script> location.href='../index.php'; </script>";

	
}

