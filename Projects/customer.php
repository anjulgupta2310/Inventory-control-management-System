<?php
$cust_id=$_POST['cust_id'];
$cust_name=$_POST['cust_name'];
$cust_email=$_POST['cust_email'];
$cust_gender=$_POST['cust_gender'];
$cust_addr=$_POST['cust_addr'];
$cust_phone=$_POST['cust_phone'];

if (!empty($cust_id) || !empty($cust_name) || !empty($cust_email) || !empty($cust_gender) || !empty($cust_addr) || !empty($cust_phone)) {
 $host = "192.168.64.2";
    $dbUsername = "anjul";
    $dbPassword = "anjul";
    $dbname = "inv_mngmt";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT cust_email From Customer Where cust_email = ? Limit 1";
     $INSERT = "INSERT Into Customer (cust_id,cust_name,cust_email,cust_gender,cust_addr,cust_phone) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $cust_email);
     $stmt->execute();
     $stmt->bind_result($cust_email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssi", $cust_id, $cust_name, $cust_email, $cust_gender, $cust_addr, $cust_phone);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>