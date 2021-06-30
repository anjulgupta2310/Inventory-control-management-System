
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!...link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"...!>
        <link rel='stylesheet' type='text/css' href='nav.css'>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="">About us</a>
            <a href="#contact">Customer interface</a>
            <a href="#about">Staff interface</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="container" id="special">
                <h1>Welcome to Inventory Control Management System</h1>
                <h2>Manage your database of your Inventory in very efficient manner </h2>

        </div>
        <form  method='post'>
                <label for='IndustryName'><h2>Enter your Industry Name:-</h2></label>
                <input type='text' Placeholder='IndustryName' name='IndustryName'><br>
                <label for='Password'><h2>Password:-</h2></label>
                <input type='Password' Placeholder='Password' name='Password'><br>

                <button type="submit" class="registerbtn">Login</button>
                <button tyoe='submit' class='registerbtn'><a href='signUp.php'>Sign Up</a></button>
            
        </form>
    </body>
<html>
    <?php
if($_POST)
{
  include 'db_connection.php';
  $conn=OpenCon();
   $IndustryName=$_POST['IndustryName'];
   $Password=$_POST['Password'];
   $sIndustry=$conn->real_escape_string($IndustryName);
   $sPass=$conn->real_escape_string($Password);
    $query="SELECT * FROM `login` WHERE IndustryName='$sIndustry' AND  Password= '$sPass'";
    $result=$conn->query($query);
    if($result->num_rows==1)
    {
        session_start();
        $_SESSION['temp']='true';
        header('location:firstPage.php');
    }
    else{
        echo 'Wrong username or password';
    }
}

?>