<?php
 $del = $_GET['id'];
if($del){
	$conn = mysqli_connect("localhost","root","root","php");
	if($conn){
		$sql = "DELETE FROM customer WHERE id='$del'";
		$result = mysqli_query($conn,$sql);

               echo "<script type='text/javascript'>alert('Deleted
               Successfully');</script>";

           echo "<script> location.href='../index.php'; </script>";


	}
}

?>