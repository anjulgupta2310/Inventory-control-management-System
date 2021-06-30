
<?php
include 'db_connection.php';
$conn=OpenCon();

$payid=$_POST['pay_id'];
$payamt=$_POST['pay_amt'];
$paydate=$_POST['pay_date'];
$invid=$_POST['inv_id'];
$custid=$_POST['cust_id'];
$invqty=$_POST['pay_inv_qty'];
$paydesc=$_POST['pay_desc'];

     //$SELECT = "SELECT cust_email From Customer Where cust_email = ? Limit 1";
     //$quantity="SELECT inv_qty FROM Inventory WHERE inv_id='$invid'";
     $quantity="SELECT inv_qty FROM Inventory WHERE inv_id='$invid'";
     
     $result1=$conn->query($quantity);
     $row=$result1->fetch_assoc();
     echo $row['inv_qty'];
    // $upda
     //Prepare statement
     /*$stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $cust_email);
     $stmt->execute();
     $stmt->bind_result($cust_email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     
      $stmt->close();*/
      if($row['inv_qty']>=$invqty)
      {
            $INSERT = "INSERT Into  Payment(pay_id,pay_amt,pay_date,inv_id,cust_id,pay_inv_qty,pay_desc) values(?, ?, ?, ?, ?, ?,?)";
            $Update="UPDATE Inventory SET inv_qty=inv_qty-'$invqty' WHERE inv_id='$invid'";
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("iisiiis", $payid, $payamt, $paydate, $invid, $custid, $invqty,$paydesc);
            $stmt->execute();
            $result=$conn->query($Update);
            echo "New record inserted sucessfully";
            $stmt->close();
            $conn->close();
      }
      else{
          echo 'Out of Stock';
          die();
      }
      
      
    
 

?>
