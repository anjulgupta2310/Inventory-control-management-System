<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else 
	{	$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$query='SELECT * FROM registration';
		$result=$conn->query($query);
		while($row=$result->fetch_assoc())
		{
			$field1name = $row["firstname"];
        	$field2name = $row["lastname"];
        	$field3name = $row["gender"];
        	$field4name = $row["email"];
			$field5name = $row["password"];
			$field6name = $row["number"];
 
        	echo '<br><b>'.$field1name. $field2name.'</b><br />';
        	echo $field3name.'<br />';
        	echo $field4name.'<br />';
			echo $field5name.'<br>';
			echo $field6name.'<br><br>';
		}
		$stmt->close();
		$conn->close();
	}
?>