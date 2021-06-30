<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!...link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"...!>
        <link rel='stylesheet' type='text/css' href='nav.css'>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="Admin.php" >Admin Interface</a>
            <a href="">About us</a>
            <a href="#contact" class="active">Customer interface</a>
            <a href="#about">Staff interface</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="container" id="special">
                <h1>Welcome to Customer Portal of Inventory Management System</h1>
                <h2>Log in and you may sign up to become the part of our company </h2>

        </div>
        <form  method='post'>
                <label for='UserName'><h2>User Name:-</h2></label>
                <input type='text' Placeholder='Name' name='UserName'><br>
                <label for='UserEmail'><h2>User Email:-</h2></label>
                <input type='text' Placeholder='Email' name='UserEmail'><br>
                

                
                <button type="submit" class="registerbtn">Login</button>
                <button type="submit" class="registerbtn"><a href='temp.php' style='color:white'>SignUp</button>
                
            
        </form>
    </body>
<html>
<?php
if($_POST)
{
  include 'db_connection.php';
  $conn= OpenCon();
  $UserName=$_POST['UserName'];
   $UserEmail=$_POST['UserEmail'];
   $Phone=$_POST['PhoneNumber'];
   $sEmail=$conn->real_escape_string($UserEmail);
   $sPhone=$conn->real_escape_string($Phone);
   
    $query="SELECT * FROM `Customer` WHERE cust_name='$UserName'AND cust_email='$sEmail'";
    $result=$conn->query($query);
    
    
    if($result->num_rows==1)
    {
        session_start();
        $_SESSION['user']=$UserName;
        $_SESSION['dbinvt_mn']='true';

        header('location:CustomerMainpage.php');
        
    }
    else{
        echo 'Wrong username or password';
    }
}

?>