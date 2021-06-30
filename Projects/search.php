<?php
include 'db_connection.php';
$conn=OpenCon();

if(isset($_POST['search']))
{   
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `Customer` WHERE cust_name LIKE '%".$valueToSearch."%'";
    $search_result=$conn->query($query);
    
}
 else {
    $query = "SELECT * FROM `Customer`";
    $search_result=$conn->query($query);

}

// function to connect and execute the query
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type=text/css href="registration.css">
        <style>
            .table,tr,th,td
            {
                border: 1px solid black;
                text-align:center;
            }
        </style>

    </head>
    <body>
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" class='registerbtn' value="search"><br><br>
            
            <table>
                <tr>
                    <th>Customer Id</th>
                    <th> Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone number</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = $search_result->fetch_array()):?>
                <tr>
                    <td><?php echo $row['cust_id'];?></td>
                    <td><?php echo $row['cust_name'];?></td>
                    <td><?php echo $row['cust_gender'];?></td>
                    <td><?php echo $row['cust_email'];?></td>
                    <td><?php echo $row['cust_addr'];?></td>
                    <td><?php echo $row['cust_phone'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>
</html>