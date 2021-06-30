<?php
	$cust_id = $_POST['cust_id'];
	$cust_name = $_POST['cust_name'];
	$cust_email = $_POST['cust_email'];
	$cust_gender = $_POST['cust_gender'];
	$cust_addr = $_POST['cust_addr'];
	$cust_phone = $_POST['cust_phone'];

	// Database connection
	$conn = new mysqli('localhost','root','','temp');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else 
	{
		$stmt = $conn->prepare("insert into customer(cust_id, cust_name, cust_email, cust_gender, cust_addr, cust_phone)  values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssss", $cust_id, $cust_name, $cust_email, $cust_gender, $cust_addr, $cust_phone);
		$execval = $stmt->execute();
		echo $execval;
		echo "egistration successfully...";
		$stmt->close();
		$conn->close();
	}
?>