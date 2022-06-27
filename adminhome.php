<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  position: fixed;
  height: 100%;
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
   
        <body>



</body>
</html> 
