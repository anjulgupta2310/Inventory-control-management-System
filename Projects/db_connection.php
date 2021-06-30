<?php
function OpenCon()
 {
 $dbhost = "192.168.64.2";
 $dbuser = "anjul";
 $dbpass = "anjul";
 $db = "inv_mngmt";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
   
?>