<?php
    $cust_id=$_POST['cust_id'];
    $cust_name=$_POST['cust_name'];
    $cust_email=$_POST['cust_email'];
    $cust_gender=$_POST['cust_gender'];
    $cust_addr=$_POST['cust_addr'];
    $cust_phone=$_POST['cust_phone'];

/*if (!empty($cust_id) || !empty($cust_name) || !empty($cust_email) || !empty($cust_addr) || !empty($cust_phone)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = " ";
    $dbName = "temp";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die('connect error' . $conn->connect_error);
    }
}

else{
    echo "all fields are required";
    die();
}*/
    $conn=new mysqli('localhost','root','','temp');
    if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into Customer(cust_id, cust_name, cust_email, cust_gender, cust_addr,cust_phone) values (?,?,?,?,?,?)");
		$stmt->bind_param("isscss", $cust_id, $cust_name, $cust_email, $cust_gender, $cust_addr, $cust_phone);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully..."; 
		$stmt->close();
		$conn->close();
    }
?>
$