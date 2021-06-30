<?php 
session_start();
if(!$_SESSION['dbinvt_mn'])
{
    header('location:Authentication.php');
}
?>
<html>
<head>
<link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel='stylesheet' type='text/css' href='firstpage.css'>
<title>Inventory management system</title>
</head>
<body>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="">About us</a>
            <a href="search.php">Registered Customer</a>
            <a href="inventorymodule.php">Inventory Available</a>
            <a href="LowStock.php">Stock and Low Stock</a>
            <a href="#contact">Payments </a>
            <a href="#contact">Purchases</a>
            <a href="#contact">Registered Supplier</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
            </a>
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        <div class="aParent">
        <div class='container' id='first'>
            Upcoming orders
        </div>
        <div class='container' id='second'>
          Recently purchase item
        </div>
        <div class='container' id='third'>
            <a href=LowStock.php>Low Stock</a>
         </div>
         <div class='container' id='forth'>
            Borrowers 
        </div>
        </div>

</body>

</html>