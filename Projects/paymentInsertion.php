<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type=text/css href="registration.css">
<link rel='stylesheet' type='text/css' href='firstpage.css'>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="topnav" id="myTopnav">
            <a href="StaffMainPage.php" >Home</a>
            <a href="paymentInsertion.php"class="active">Payment insertion</a>
            <a href="CustomerPayment.php">Purchase Insertion</a>
            <a href="PaymentModule.php">Payment Module</a>
            <a href="CustomerModule.php">Customer Moduke</a>
            <a href="inventorymodule.php">Inventory Module</a>
            
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
    <form action="Update.php" method="POST">
        <div class="container">
          <h1>Payment details</h1>
          <p>Please fill in this form to enter details.</p>
          <hr>
          <label for="pay_id"><b>Payment Id</b></label>
          <input type="text" placeholder="Id" name="pay_id" required>
          <label for="pay_amt"><b>Amount</b></label>
          <input type="text" placeholder="Amount" name="pay_amt" required>
          
          <label for="pay_date"><b>Date</b></label>
          <input type="text" placeholder="Date" name="pay_date" required>
          <label for="inv_id"><b>Inventory Id</b></label>
          <input type="text" placeholder="Inventory Id" name="inv_id" required>

          <label for="cust_id"><b>Customer id</b></label>
          <input type="text" placeholder="Customer Id" name="cust_id" required>
      
          <label for="pay_inv_qty"><b>Ordered Invnetory qty</b></label>
          <input type="text" placeholder="Inventory qty" name="pay_inv_qty" required>
          <label for="pay_desc"><b>Ordered Invnetory qty</b></label>
          <input type="text" placeholder="PAyment Desc" name="pay_desc" required>
          <hr>
      
          
          <button type="submit" class="registerbtn" name="search">Register</button>
        </div>
      
      </form>
      
</body>
</html>