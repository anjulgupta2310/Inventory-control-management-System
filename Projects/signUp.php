<html>
<head>
    <title>Signup page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!...link rel=stylesheet type=text/css href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"...!>
        <link rel='stylesheet' type='text/css' href='nav.css'>
</head>
<body>
   <br><br> <h1>Enter your Industry and company Name and Password to create your own Database</h1><br><br>
<form action='signUp.php' method='post'>
                <label for='IndustryName'><h2>Enter your Industry Name:-</h2></label>
                <input type='text' Placeholder='IndustryName' name='IndustryName'><br>
                <label for='Password'><h2>Password:-</h2></label>
                <input type='Password' Placeholder='Password' name='Password'><br>

                
                <button type='submit' class='registerbtn' name='search'>Sign Up</button>
            
        </form>
</body>
</html>
<?php
include 'db_connection.php';
if(isset($_POST['search']))
{
$conn=OpenCon();
$IndustryName=$_POST['IndustryName'];
$Password=$_POST['Password'];
$stmt = $conn->prepare("insert into login(IndustryName, Password )  values(?, ?)");
		$stmt->bind_param("ss", $IndustryName,$Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
}
?>