<?php session_start();?>
<html>
<head>
<link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel='stylesheet' type='text/css' href='firstpage.css'>
<title>Inventory management system</title>
</head>
<body>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="AboutCustomer.php">About Customer</a>
            <a href="CustomerPayment.php">Payment Status</a>
            <a href="inventorymodule.php">Inventory available</a>
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        <h2>Welcome <?php echo $_SESSION['user'];?> to inventory management system</h2>
</body>
</html>
