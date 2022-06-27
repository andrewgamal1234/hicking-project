
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile page</title>
	<style>


		*{
			margin:0;
			padding:0;
		}
		body{
			margin:0;
			padding:0;
			background-image: url(woman-hiking-mountain-getty-0720.jpg);
			background-position: center;
			background-size: cover;
		}
		.topnav {
  overflow: hidden;
  background-color: #333;
  margin-left: 80px;
}

.topnav a {
  float: left;
  color: orange;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-top: 32.5px;
}

.topnav a:hover {
  background-color: orange;
  color: black;
}

.topnav a.active {
  background-color: orange;
  color: white;
}
		/*h1 {
			margin: 0px;
			background-color:orange;
			color: white;
			padding: 40px;
			text-align: center;
			font-style: cursive;
			font-size: 45px;
		}*/
		/*.topnav {
			margin: 0px;
			background-color:orange;
			color: white;
			padding: 40px;
			text-align: center;
			font-style: cursive;
			font-size: 45px;
		  width:100%;
		  margin-right: 70% auto;
		  top: 10%;
		}

		
		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  
		  padding: 5px;
		  text-decoration: none;
		  font-size: 20px;
		}

	
		.topnav a:hover {
		  background-color: grey;
		  color: orange;
		}

		
		.topnav a.active {
		  background-color: black;
		  color: grey;
		}*/
		
		.regform{
			position: relative;
			top:50px;
			width: 800px;
			background-color: rgb(0,0,0,0.6);
			margin:auto;
			color: #FFFFFF;
			padding:10px 0px 10px 0px;
			text-align: center;
			border-radius: 15px 15px 0px 0px;
		}
		.main{
			background-color: rgb(0,0,0,0.5);
			width: 800px;
			margin:auto;
			position: relative;
			top:50px;
		}
		form{
			padding: 10px;
		}
		#name{
			width:100%;
			height: 100px;

		}
		.name{
			margin-left: 25px;
			margin-top: 30px;
			width: 125px;
			color:white;
			font-size: 18px;
			font-weight: 700;
		}
		.firstname{
			position: relative;
			left:200px;
			top:-37px;
			line-height: 40px;
			border-radius: 6px;
			padding:0 22px;
			font-size: 16px;			
		}
		.lastname{
			position: relative;
			left:417px;
			top:-80px;
			line-height: 40px;
			border-radius: 6px;
			padding:0 22px;
			font-size: 16px;
			color:#555;	
		}
		.firstlabel{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left:203px;
			top:-45px;
		}
		.lastlabel{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 14px;
			left:482px;
			top:-75px;
		}
		.email{
			position: relative;
			left:200px;
			top:-37px;
			line-height: 40px;
			width: 480px;
			border-radius: 6px;
			padding:0 22px;
			font-size: 16px;
			color:#555;	
		}
		.password{
			position: relative;
			left:200px;
			top:-37px;
			line-height: 40px;
			width: 480px;
			border-radius: 6px;
			padding:0 22px;
			font-size: 16px;
			color:#555;	
		}
		.phone{
			position: relative;
			left:200px;
			top:-37px;
			line-height: 40px;
			width: 480px;
			border-radius: 6px;
			padding:0 22px;
			font-size: 16px;
			color:#555;	
		}
		.addd{
			position: relative;
			left:200px;
			top:-37px;
			line-height: 40px;
			width: 480px;
			border-radius: 6px;
			padding:0 22px;
			font-size: 16px;
			color:#555;	
		}
		button{
			background-color: orange;
			display: block;
			margin:20px 0px 0px 250px;
			text-align: center;
			border-radius: 12px;
			border:2px solid white;
			padding:14px 110px;
			outline:none;
			color:white;
			cursor: pointer;
			transition: 0.25px;
		}
		button:hover{
			background-color: black;
		}
		ul li ul li{
			display:none;
		}
		ul li:hover ul li{
			display:block;
		}
		img{
  width: 80px;
  height: 80.5px;
  position: absolute;
  margin-left:0px;
}
	</style>
</head>
<body>
	<img src="logo.png">
	<div class="topnav">
	
	  <a  href="#home">Home</a>  
	    <a  href="#news">News</a>  
	    <a  href="#contact">Contact</a>  
	    <a  href="#about">About</a>  
	  
	 
	</div>
	
	
<div class="regform"><h1>Edit your profile</h1></div>
<div class="main">
	
<form action="" method="post">
	<div id="name"> 
		<h2 class="name">Name</h2>
			<input class="firstname"type="text" name="first_name" required autofocus pattern="^[A-Za-z0-9]+"><br>
			<label class="firstlabel">firstname</label>
			<input class="lastname"type="text" name="last_name" required autofocus pattern="^[A-Za-z0-9]+"><br>
			<label class="lastlabel">lastname</label>
	</div>		
		
		<h2 class="name"> Password</h2>
		<input class="password" type="password" name="password" required pattern="^[A-Za-z0-9]+">

		<h2 class="name"> Email</h2>
		<input class="email" type="text" name="email" required>

		<h2 class="name"> Phone Number</h2>
		<input class="phone" type="text" name="phonenumber" required><br>
		      
		
		<h2 class="name">Address</h2>
		<input class="addd" type="text" name="address" required><br>
		

		<button name="submit" type="submit">Update</button>
		
			</div>
	</div>

</form>

	</div>
</body>
</html>

