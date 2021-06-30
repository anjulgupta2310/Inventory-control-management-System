<?php
include 'db_connection.php';
$conn=OpenCon();

if(isset($_POST['search']))
{   
    $valueToSearcha = $_POST['valueToSearcha'];
    $valueToSearchb = $_POST['valueToSearchb'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `Payment` WHERE pay_id BETWEEN $valueToSearcha AND $valueToSearchb ";
    $search_result=$conn->query($query);
}
else if (isset($_POST['sort']))
{
    $query="SELECT * FROM Payment ORDER BY inv_id";
    $search_result=$conn->query($query);

}
 else {
    $query = "SELECT * FROM `Payment`";
    $search_result=$conn->query($query);

}

?>
<!DOCTYPE html>
<html>
    <head>

        <title>PHP HTML TABLE DATA SEARCH</title>
        <link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type=text/css href="inventory.css">
        <link rel='stylesheet' type='text/css' href='firstpage.css'>
        <style>
            .table,tr,th,td
            {
                border: 1px solid black;
                text-align:center;
            }
        </style>

    </head>
    <body>
    <div class="topnav" id="myTopnav">
            <a href="StaffMainPage.php" >Home</a>
            <a href="paymentInsertion.php">Payment insertion</a>
            <a href="CustomerPayment.php">Purchase Insertion</a>
            <a href="PaymentModule.php" class="active">Payment Module</a>
            <a href="CustomerModule.php" >Customer Moduke</a>
            <a href="inventorymodule.php" >Inventory module</a>

            
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        <h3>Welcome !! Recent Payment list</h3>
        <form action="PaymentModule.php" method="post">
            <input type="text" name="valueToSearcha" placeholder="Search from  Payment Id">
             
            <input type="text" name="valueToSearchb" placeholder="Search to Payment Id">
            <input type="submit" name="search" class='registerbtn' value="search"><br><br>
            <input type="submit" name="sort" class='registerbtn' value="sort by Inventory Id"><br><br>
         
            <table>
                <tr>
                    <th>Payment Id</th>
                    <th> Paymant amount</th>
                    <th>Date</th>
                    <th>Inventory Id</th>
                    <th>Customer Id</th>
                    <th>Quantity</th>
                    <th> Description</th>
                    

                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = $search_result->fetch_array()):?>
                <tr>
                    <td><?php echo $row['pay_id'];?></td>
                    <td><?php echo $row['pay_amt'];?></td>
                    <td><?php echo $row['pay_date'];?></td>
                    <td><?php echo $row['inv_id'];?></td>
                    <td><?php echo $row['cust_id'];?></td>
                    <td><?php echo $row['pay_inv_qty'];?></td>
                    <td><?php echo $row['pay_desc'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>
</html>