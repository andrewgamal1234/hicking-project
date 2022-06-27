<?php
$deldata=$_GET["ID"];
$host = "localhost";
 $user = "root";
 $password = "";
 $database = "hikingproject";
 $query="DELETE from register WHERE id=$deldata";
 
 try{
 $conn = mysqli_connect($host, $user, $password, $database);
 
 }catch(Exception $ex){
     print "error";
 }
 

 $dataconn=mysqli_query($conn,$query);

 echo "the deleted ID is ".$deldata;


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		*{ background-color: orange;
	}</style>
</head>
<body>

</body>
</html>