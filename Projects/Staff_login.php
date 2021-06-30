<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!...link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"...!>
        <link rel='stylesheet' type='text/css' href='nav.css'>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="#home" >Admin Interface</a>
            <a href="">About us</a>
            <a href="Customer_login.php">Customer interface</a>
            <a href="#about" class="active">Staff interface</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="container" id="special">
                <h1>Welcome to Staff Portal of Inventory Management System</h1>
                <h2>Manage your database of your Inventory in very efficient manner </h2>

        </div>
        <form  method='post'>
                <label for='StaffName'><h2>User Name:-</h2></label>
                <input type='text' Placeholder='Name' name='StaffName'><br>
                <label for='Password'><h2>Password:-</h2></label>
                <input type='Password' Placeholder='Password' name='Password'><br>

                <button type="submit" class="registerbtn">Login</button>
                
            
        </form>
    </body>
<html>
<?php
if($_POST)
{
  include 'db_connection.php';
  $conn= OpenCon();
   $StaffName=$_POST['StaffName'];
   $Password=$_POST['Password'];
   $sStaff=$conn->real_escape_string($StaffName);
   $sPass=$conn->real_escape_string($Password);
    $query="SELECT  *  FROM `Staff_login` WHERE StaffName='$sStaff' AND  Password= '$sPass'";
    $result=$conn->query($query);
    if($result->num_rows >0)
    {
        session_start();
        $_SESSION['dbinvt_mn']='true';
        $_SESSION['Staff']=$sStaff;
        header('location:StaffMainPage.php');
    }
    else{
        echo 'Wrong username or password';
    }
}

?>