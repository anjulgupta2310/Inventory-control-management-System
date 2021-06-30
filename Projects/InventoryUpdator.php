<?php
include 'db_connection.php';
$conn=OpenCon();

if(isset($_POST['search']))
{   
    $invid = $_POST['inv_id'];
    $stockid = $_POST['stock_id'];
    $Quantity=$_POST['inv_qty'];

    // search in all table columns
    // using concat mysql function
    $query1 = "UPDATE Stock SET stock_qty=stock_qty-'$Quantity' Where stock_id='$stockid'";
    $query2 = "UPDATE Inventory SET inv_qty=inv_qty+'$Quantity' Where stock_id='$stockid'";
    $query = "SELECT * FROM `Inventory`";
    $search_result1=$conn->query($query1);
    $search_result2=$conn->query($query2);
    $search_result=$conn->query($query);
}


 else {
    $query = "SELECT * FROM `Inventory`";
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
            <a href="#home" >Home</a>
            <a href="AboutCustomer.php" >About Customer</a>
            <a href="CustomerPayment.php" >Payment Status</a>
            <a href="inventorymodule.php" class="active">Inventory purchase</a>
            
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        <h2>Welcome to the inventory Available</h2>
        <form action="InventoryUpdator.php" method="post">
            <input type="text" name="inv_id" placeholder="Inventory Id">
             
            <input type="text" name="stock_id" placeholder="Stock Id">
            <input type="text" name="inv_qty" placeholder="Quantity to Add">
            <input type="submit" name="search" class='registerbtn' value="search"><br><br>
            
         
            <table>
                <tr>
                    <th>Inventory Id</th>
                    <th> Inventory quantity</th>
                    <th>Inventory Rate</th>
                    <th>Inventory Description</th>
                    <th>Stock Id</th>
                    <th>Inventory Name</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = $search_result->fetch_array()):?>
                <tr>
                    <td><?php echo $row['inv_id'];?></td>
                    <td><?php echo $row['inv_qty'];?></td>
                    <td><?php echo $row['inv_rate'];?></td>
                    <td><?php echo $row['inv_desc'];?></td>
                    <td><?php echo $row['stock_id'];?></td>
                    <td><?php echo $row['inv_name'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>
</html>