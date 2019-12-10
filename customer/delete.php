<?php
 $del = $_GET['id'];
if($_GET['del']){
	$conn = mysqli_connect("localhost","root","root","php");
	if($conn){
		$sql = "DELETE FROM customer WHERE id=19";


	}
}

?>