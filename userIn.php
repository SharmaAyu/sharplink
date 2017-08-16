<?php
require 'dbconnect.php';
$username= $_GET['username'];
$sql = "insert into 
		billpayment (username,jan,fab,mar,apr)"." values('$username','0','0','0','0','mar')";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
else{
    header("Location:index.html");
}
?>