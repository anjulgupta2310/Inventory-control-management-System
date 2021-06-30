<?php
include 'db_connection.php';
$conn=OpenCon();

if(isset($_POST['search']))
{   
    $valueToSearcha = $_POST['valueToSearcha'];
    $valueToSearchb = $_POST['valueToSearchb'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `Customer` WHERE cust_id BETWEEN $valueToSearcha AND $valueToSearchb ";
    $search_result=$conn->query($query);
}
else if (isset($_POST['sort']))
{
    $query="SELECT * FROM Customer ORDER BY cust_name";
    $search_result=$conn->query($query);

}
 else {
    $query = "SELECT * FROM `Customer`";
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
            <a href="PaymentModule.php">Payment Module</a>
            <a href="CustomerModule.php" class="active">Customer Moduke</a>
            <a href="inventorymodule.php" >Inventory module</a>

            
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        <h3>Welcome !! Recent Payment list</h3>
        <form action="CustomerModule.php" method="post">
            <input type="text" name="valueToSearcha" placeholder="Search from  Customer Id">
             
            <input type="text" name="valueToSearchb" placeholder="Search to Customer Id">
            <input type="submit" name="search" class='registerbtn' value="search"><br><br>
            <input type="submit" name="sort" class='registerbtn' value="sort by Customer name"><br><br>
         
            <table>
                <tr>
                    <th>Customer Id</th>
                    <th> Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Gender</th>
                    <th>Customer Address</th>
                    <th>Customer Phone</th>
                    
                    

                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = $search_result->fetch_array()):?>
                <tr>
                    <td><?php echo $row['cust_id'];?></td>
                    <td><?php echo $row['cust_name'];?></td>
                    <td><?php echo $row['cust_email'];?></td>
                    <td><?php echo $row['cust_gender'];?></td>
                    <td><?php echo $row['cust_addr'];?></td>
                    <td><?php echo $row['cust_phone'];?></td>
                    
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>
</html>