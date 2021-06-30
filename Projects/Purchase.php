<?php
include 'db_connection.php';
$conn=OpenCon();

$purchid=$_POST['purch_id'];
$purchqty=$_POST['purch_qty'];
$purchrate=$_POST['purch_rate'];
$stockid=$_POST['stock_id'];
$amttopay=$_POST['amt_to_pay'];
$amttopaid=$_POST['amt_paid'];
$balance=$_POST['balance'];
$purchdate=$_POST['purch_date'];
$supid=$_POST['sup_id'];

     //$SELECT = "SELECT cust_email From Customer Where cust_email = ? Limit 1";
     //$quantity="SELECT inv_qty FROM Inventory WHERE inv_id='$invid'";
     $quantity="SELECT stock_id FROM Stock WHERE stock_id='$stockid'";
     
     $result1=$conn->query($quantity);
     $row=$result1->fetch_assoc();
    // $upda
     //Prepare statement
     /*$stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $cust_email);
     $stmt->execute();
     $stmt->bind_result($cust_email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     
      $stmt->close();*/
      
          $INSERT = "INSERT Into  Purchase(purch_id,purch_qty,purch_rate,stock_id,amt_to_pay,amt_paid,balance,purch_date,sup_id) values(?, ?, ?, ?, ?, ?,?,?,?)";
          $Update="UPDATE Stock SET stock_qty=stock_qty+'$purchqty' WHERE stock_id='$stockid'";
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("iiiiiiisi", $purchid,$purchqty,$purchrate,$stockid,$amttopay,$amttopaid,$balance,$purchdate,$supid);
        $stmt->execute();
        $result=$conn->query($Update);
        echo "New record inserted sucessfully";
        $stmt->close();
        $conn->close();
      
      
      
      
      
    
 

?>