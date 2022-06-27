<?php

 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "hikingproject";
 $query="select*from register";
 
 try{
 $conn = mysqli_connect($host, $user, $password, $database);
 }catch(Exception $ex){
     print "error";
 }
 $dataconn=mysqli_query($conn,$query);
$totalr=mysqli_num_rows($dataconn);
// insert
 if(isset($_POST['addTrip']))
 {
     $insertQuery = "INSERT INTO `register`( `first_name` , `last_name`, `email`, `phonenumber`,`password`,`usertype`) VALUES ( '$_POST[first_name]' , '$_POST[last_name]', '$_POST[email]', '$_POST[phonenumber]','$_POST[password]','$_POST[usertype]')";
     try
  {
     $insertResult = mysqli_query($conn, $insertQuery);
     
     if($insertResult)
     {
         if(mysqli_affected_rows($conn) > 0){
             echo ('<script type="text/javascript">alert("data inserted")</script>');
         }else{
             echo ('<script type="text/javascript">alert("no data added")</script>');
         }
     }
 }catch(Exception $ex){
       print "error insert" .$ex->getMessage();  
     }
 }
 
?>





 <html>
 <head>
    <title>Admin </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<style>
  		.tqwee{
  			margin-top: 50px;

  		}
  		 h1{
		    color: black;
		    background: black;
		    margin: 0px;
		 }
		  body{

		  }
		  .ss{
		  	margin-left: 400px;
		  }
          <style>
  h1{
    color: black;
    background: black;

  }
*{
      margin:0;
      padding: 0;
      font-family: sans-serif;

    }
body{
 /* background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.6)),url(woman-hiking-mountain-getty-0720.jpg);*/
  background-image: url(iStock-1153641199.jpg);
      background-position: center;
      background-size: cover;
}
input[type=text], select {
  width: 50%;
  padding: 15px 10px;
  margin: 20px -200px;
  margin-left: 100px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: black;color: orange;
}
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
 

}
.main h1 span{
      color: orange;
    }

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: orange;
  position: absolute;
  height: 400%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: orange;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: black;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
      .main{
      margin: 100px 230px;
      color: black;
    }
    .main h2{
      font-size: 64px;
      margin-bottom: 30px;
    }
    .main h2 span{
      color: orange;
    }
    .searchhh{

  background-color: grey;
  border: none;
  color: orange;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
  cursor: pointer;
  /*margin-right:700px;*/
  margin-left: 800px;
margin-top: 110px;

/*border-radius: 50%;*/

    }


</style>
  	</style>
</head>
<body>
       <h1><img src="logo.png" height="150px" width="150px"></h1>
        <div class="sidebar">
         <a class="active" href="adminhome.php">Home</a>
          <a href="admincontrol.php">User Control</a>
          <a href="trip.php">Trips Control</a>
          <a href="chat/user22.php">View/respond to Messages</a>
          <a href="logoutadmin.php">Logout</a>
        </div>

        <div class="main">
          <h2>Welcome <span>Admin</span></h2>
          
        </div>
<!-- 	 <h1><img src="logo.png" height="150px" width="150px"></h1>
 -->	<form action="admincontrol.php" method="post" style="  width: 85% ;position: relative;top: 20px; left: 250px;">
		<div class="tqwee">
			First name:<br><input type="text" name="first_name" placeholder="First name"required><br>
			Last name:<br><input type="text" name="last_name" placeholder="Last name"required>><br>
			Email:<br><input type="text" name="email" placeholder="Email "required>><br>
			Phone number:<br><input type="number" name="phonenumber" placeholder="Phone" style="background-color: black;;position: relative;top: 10px; left: 100px; width: 50%;height: 6%"required><br><br>
			Password:<br><input type="text" name="password" placeholder="Password"required>><br>
			<br><br>
			Specify the user type:<br>
			<input type="text" name="usertype"  placeholder="user/admin/auditor " required>
			
		</div>
			<input type="submit" name="addTrip" value="Add" style="background-color:orange;color:black;position: relative; width:100px;height:40px;top: -15px;left: 310px;"><br><br>
    	</div>
	</form>
	<form method="post">
		<div class="ss"style="position: relative; top: 5px;left: -149px;">
			<label>Search</label>
			<input type="text" name="search">
			<input type="submit" name="searchhh" value="Search" style="background-color:orange;color:black;position: relative; width:100px;height:40px;top: 3px;left: 310px;">
		</div>
	</form>


<?php
 
 $con = new PDO("mysql:host=localhost;dbname=hikingproject",'root','');

if (isset($_POST["searchhh"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `register` WHERE first_name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table class="table table-hover" style="  color:orange; width: 70% ;position: relative;top: 20px; left: 300px;">
			<tr>
				<th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
             <th>Password</th>
             <th>User type</th>
           <!--  <th>Delete User/Admin</th>
            <th> Edit USer/Admin </th> -->
			</tr>
			<tr>
				<td><?php echo $row->id; ?></td>
				<td><?php echo $row->first_name; ?></td>
				<td><?php echo $row->last_name;?></td>
				<td><?php echo $row->email; ?></td>
				<td><?php echo $row->phonenumber;?></td>
				<td><?php echo $row->password; ?></td>
				<td><?php echo $row->usertype; ?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>
<hr>
    <table  class="table table-hover" style="color:orange;  width: 70% ;position: relative;top: 20px; left: 300px;
">
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
             <th>Password</th>
              <th>User type</th>
            <th>Delete User/Admin</th>
            
        </tr>
        <?php
        if($totalr!=0)
 {
    while($result=mysqli_fetch_assoc($dataconn))
    {
        echo "
        
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['first_name']."</td>
        <td>".$result['last_name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phonenumber']."</td>
        <td>".$result['password']."</td>
        <td>".$result['usertype']."</td>
        <td><a href='deleteuser.php?ID=".$result['id']."'</a>Delete</td>
       
        </tr>
        ";
    }
 }
 else {
    echo "no records found";
 }
 ?>
 
    </table>
</body>
</html>