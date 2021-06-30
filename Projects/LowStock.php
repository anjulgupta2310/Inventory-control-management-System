<?php
include 'db_connection.php';
$conn=OpenCon();

if(isset($_POST['search']))
{   
    $valueToSearcha = $_POST['valueToSearcha'];
    $valueToSearchb = $_POST['valueToSearchb'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `Stock` WHERE stock_id BETWEEN $valueToSearcha AND $valueToSearchb ";
    $search_result=$conn->query($query);
}
else if (isset($_POST['sort']))
{
    $query="SELECT * FROM Stock Where stock_qty<100";
    $search_result=$conn->query($query);

}
else if(isset($_POST['Update']))
{
    $stockid=$_POST['stock_id'];
    $stockitem=$_POST['stock_item'];
    $stockqty=$_POST['stock_qty'];
    $stockdesc=$_POST['stock_desc'];
    $query1="UPDATE Stock SET stock_item='$stockitem' stock_qty='$stockqty' stock_desc='$stock_desc' WHERE stock_id=$stockid";
    $search_result=$conn->query($query1);
    $query="SELECT * FROM Stock";
    $search_result=$conn->query($query);
}
 else {
    $query = "SELECT * FROM `Stock`";
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
            <a href="#home" class="active">Home</a>
            <a href="">About us</a>
            <a href="search.php">Registered Customer</a>
            <a href="inventorymodule.php">Inventory Available</a>
            <a href="LowStock.php">Stock and Low Stock</a>
            <a href="#contact">Payments </a>
            <a href="#contact">Purchases</a>
            <a href="#contact">Registered Supplier</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
            </a>
            <div class="topnav-right">
            <a href='logout.php'>Logout</a>
            </div>
        </div>
        </div>
        <h3>Welcome !! Recent Payment list</h3>
        <form action="LowStock.php" method="post">
            <input type="text" name="valueToSearcha" placeholder="Search from  Customer Id">
             
            <input type="text" name="valueToSearchb" placeholder="Search to Customer Id">
            <input type="submit" name="search" class='registerbtn' value="search"><br><br>
            <input type="submit" name="sort" class='registerbtn' value="Low Stock"><br><br>
            
          <h2>Update</h2>
          
          
          <label for="stock_id"><b>Stock Id</b></label>
          <input type="text" placeholder="Id" name="stock_id" >
          <label for="stock_item"><b>Stock item</b></label>
          <input type="text" placeholder="Item" name="stock_item" >
          <label for="stock_qty"><b>Quantity</b></label>

          <input type="text" placeholder="Quantity" name="stock_qty" >
          <label for="stock_desc"><b>Description</b></label>

          <input type="text" placeholder="Description" name="stock_desc">
          <input type="submit" name="Update" class='registerbtn' value="Update/edit"><br><br>
         
            <table>
                <tr>
                    <th>Stock Id</th>
                    <th> Stock Item</th>
                    <th>Stock qty</th>
                    <th>Stock Description</th>
                                   </tr>

      <!-- populate table from mysql database -->
                <?php while($row = $search_result->fetch_array()):?>
                <tr>
                    <td><?php echo $row['stock_id'];?></td>
                    <td><?php echo $row['stock_item'];?></td>
                    <td><?php echo $row['stock_qty'];?></td>
                    <td><?php echo $row['stock_desc'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>
</html>