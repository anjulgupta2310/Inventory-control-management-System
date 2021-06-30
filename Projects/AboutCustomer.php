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
            <a href="AboutCustomer.php" class="active">About Customer</a>
            <a href="CustomerPayment.php">Payment Status</a>
            <a href="inventorymodule.php">Inventory purchase</a>
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        <?php 
        
        
          include 'db_connection.php';
          
          $conn= OpenCon();
           $user=$_SESSION['user'];
            $query="SELECT * FROM `Customer` WHERE cust_name='$user'";
            $result=$conn->query($query);
        
        ?>
        <?php while($row = $result->fetch_assoc()):?>
                
                <br><h3> Name:-<?php echo $row['cust_name'];?></h3>
                <br><h3>Email:-<?php echo $row['cust_email'];?></h3>
                <br><h3>Gender:-<?php echo $row['cust_gender'];?></h3>
                <br><h3>Address:-<?php echo $row['cust_addr'];?></h3>
                <br><h3> no:-<?php echo $row['cust_phone'];?></h3>
                
            <?php endwhile;?>
</body>
</html>
            
        