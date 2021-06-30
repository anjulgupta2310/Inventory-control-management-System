<?php session_start(); ?>
<html>
<head>
<link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel='stylesheet' type='text/css' href='firstpage.css'>
<title>Inventory management system</title>
</head>
<body>
<div class="topnav" id="myTopnav">
            <a href="#home" >Home</a>
            <a href="AboutCustomer.php" >About Customer</a>
            <a href="CustomerPayment.php" class="active">Payment Status</a>
            <a href="inventorymodule.php">Inventory purchase</a>
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
</body>
</html>
<?php 
        
        
          include 'db_connection.php';
          
          $conn= OpenCon();
           $user=$_SESSION['user'];
            $query="SELECT inv_id,inv_rate,Pay_date,Pay_amt,Pay_id,Pay_inv_qty
            FROM Inventory natural join Payment natural join Customer
            WHERE cust_name = '$user'";
            $result=$conn->query($query);
        
        ?>
        <?php while($row = $result->fetch_assoc()):?>
                
                <br><h3> Inventory Id:-<?php echo $row['inv_id'];?></h3>
                <br><h3>Inventory Rate:-<?php echo $row['inv_rate'];?></h3>
                <br><h3>Payment Date:-<?php echo $row['Pay_date'];?></h3>
                <br><h3>Payment Amount:-<?php echo $row['Pay_amt'];?></h3>
                <br><h3> Payment ID:-<?php echo $row['Pay_id'];?></h3>
                
            <?php endwhile;?>
