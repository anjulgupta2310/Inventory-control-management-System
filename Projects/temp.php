<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type=text/css href="registration.css">
</head>
<body>
  <div class="mydiv">
   <span> <?php 
    include 'db_connection.php';

    $query='SELECT * From Customer WHERE cust_id=20185102';
    $conn=OpenCon();
    $result=$conn->query($query);
    while($row=$result->fetch_assoc())
    {
    echo "Customer Id: <p style='color:red;'>" . $row['cust_id'] . "</p>";
    echo 'Customer Name :<b>' .$row['cust_name'].'<br>';
    echo  'Customer email :<b>'  .$row['cust_email'].'<br>';
    echo  'Customer Address : <b>'  .$row['cust_addr'].'<br>';
    }
    CloseCon($conn);
    ?>
  </div>
    <form action="customer.php" method="POST">
        <div class="container">
          <h1>Welcome to the Inventory management syatem</h1>
          <p>Please fill in this form to enter details.</p>
          <hr>
          <label for="cust_id"><b>Customer Id</b></label>
          <input type="text" placeholder="Id" name="cust_id" required>
          <label for="cust_name"><b>Customer Name</b></label>
          <input type="text" placeholder="Customer name" name="cust_name" required>
          <label for="Customer email"><b>Email</b></label>

          <input type="text" placeholder="Enter Email" name="cust_email" required>
          
          <div class="form-group">
            <label for="cust_gender">Gender</label>
            <div>
              <label for="male" class="radio-inline"
                ><input
                  type="radio"
                  name="cust_gender"
                  value="m"
                  id="male"
                />Male</label
              >
              <label for="female" class="radio-inline"
                ><input
                  type="radio"
                  name="cust_gender"
                  value="f"
                  id="female"
                />Female</label
              >
              <label for="others" class="radio-inline"
                ><input
                  type="radio"
                  name="cust_gender"
                  value="o"
                  id="others"
                />Others</label
              >
            </div>
          </div>

          <label for="cust_addr"><b>Customer address</b></label>
          <input type="text" placeholder="Enter address" name="cust_addr" required>
      
          <label for="cust_phone"><b>Customer Phone</b></label>
          <input type="text" placeholder="Phone Number" name="cust_phone" required>
          <hr>
          <button type="submit" class="registerbtn">Register</button>
        </div>
        
      </form>
  
</body>
</html>