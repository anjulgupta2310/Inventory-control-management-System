<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type=text/css href="registration.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="topnav" id="myTopnav">
            <a href="StaffMainPage.php">Home</a>
            <a href="paymentInsertion.php" >Payment insertion</a>
            <a href="purchinter.php" class="active">Purchase Insertion</a>
            
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
    <form action="Purchase.php" method="POST">
        <div class="container">
          <h1>Purchase details</h1>
          <p>Please fill in this form to enter details.</p>
          <hr>
          <label for="purch_id"><b>Purchase Id</b></label>
          <input type="text" placeholder="Id" name="purch_id" required>
          <label for="purch_qty"><b>Quantity</b></label>
          <input type="text" placeholder="Quantity" name="purch_qty" required>
          
          <label for="purch_rate"><b>Rate</b></label>
          <input type="text" placeholder="Rate" name="purch_rate" required>
          <label for="stock_id"><b>Stock Id</b></label>
          <input type="text" placeholder="Stock Id" name="stock_id" required>

          <label for="amt_to_pay"><b>Payable amount</b></label>
          <input type="text" placeholder="Payable amount" name="amt_to_pay" required>
      
          <label for="amt_paid"><b>Paid amount</b></label>
          <input type="text" placeholder="Paid amount" name="amt_paid" required>
          <label for="balance"><b>Net balance left</b></label>
          <input type="text" placeholder="Net" name="balance" required>
          <label for="purch_date"><b>Date</b></label>
          <input type="text" placeholder="Date" name="purch_date" required>
          <label for="sup_id"><b>Supplier id</b></label>
          <input type="text" placeholder="Supplier Id" name="sup_id" required>
          <hr>
      
          
          <button type="submit" class="registerbtn" name="search">Register</button>
        </div>
      
      </form>
      
</body>
</html>