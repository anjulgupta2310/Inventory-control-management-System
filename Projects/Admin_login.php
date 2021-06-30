<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!...link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"...!>
        <link rel='stylesheet' type='text/css' href='nav.css'>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Admin Interface</a>
            <a href="">About us</a>
            <a href="Customer1.php">Customer interface</a>
            <a href="Staff.php">Staff interface</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
            </a>
            <div class='topnav-right'>
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        <div class="container" id="special">
                <h1>Welcome to Admin Portal of Inventory Management System</h1>
                <h2>Manage your database of your Inventory in very efficient manner </h2>

        </div>
        <form  method='post'>
                <label for='AdminName'><h2>Admin Name:-</h2></label>
                <input type='text' Placeholder='Admin' name='AdminName'><br>
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
  $conn=OpenCon();
   $AdminName=$_POST['AdminName'];
   $Password=$_POST['Password'];
   $sAdmin=$conn->real_escape_string($AdminName);
   $sPass=$conn->real_escape_string($Password);
    $query="SELECT * FROM `Admin_login` WHERE Admin_Name='$sAdmin' AND  Password= '$sPass'";
    $result=$conn->query($query);
    if($result->num_rows==1)
    {
        session_start();
        $_SESSION['dbinvt_mn']='true';
        header('location:firstPage.php');
    }
    else{
        echo 'Wrong username or password';
    }
}

?>