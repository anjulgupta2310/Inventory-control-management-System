<?php session_start();?>
<html>
<head>
<link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel='stylesheet' type='text/css' href='firstpage.css'>
<title>Inventory management system</title>
</head>
<body>
        <div class="topnav" id="myTopnav">
            <a href="StaffMainPage.php" class="active">Home</a>
            <a href="paymentInsertion.php">Payment insertion</a>
            <a href="CustomerPayment.php">Purchase Insertion</a>
            <a href="PaymentModule.php">Payment Module</a>
            <a href="CustomerModule.php">Customer Moduke</a>
            <a href="inventorymodule.php">Inventory Module</a>
            
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        <h2>Welcome <?php echo $_SESSION['Staff'];?> to inventory management system</h2>
</body>
</html>