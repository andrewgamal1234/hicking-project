<!DOCTYPE html>
<html>
    <title>Contact Us</title>
 

    
<style>
 *{
  margin:0;
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
body{
  background-color: black;
}

.about-section {
  padding-left: 50px;
  padding-right: 50px;
  max-width: 600px;
  text-align: left;
  color: orange;
 
}
.image{
  height: 500px; 
  right: 150px;
}
  img{
  width: 80px;
  height: 80.5px;
  position: absolute;
  margin-left:0px;
}

  #ims{
  width: 900px;
  height: 300.5px;
  position: absolute;
  margin-left:0px;
}




.mydiv
{
    position: absolute;
    width: 500px;
    height: 500px;
    top:140px ;
    right:50px ;
    padding-left: 100%; ;
}
label
{
  font-family: 'Trebuchet MS', sans-serif;
  width: 250px;
  height: 100px;
  color:orange;
  font-size:24px;
}

input[type=text] 
{
  background-color:orange;
  color:black;
  width: 200px;
}
input[type=textarea]
{   padding-top: 1px;
    height: 100px;
    width: 200px;
    color: black;
    background-color: orange;
    resize: none;
}
p
{
font-family: 'Trebuchet MS', sans-serif;
width: 350px;
height: 100px;
color:orange;
font-size:24px;
}
p.textinfo
{
 font-size:30px;
 position: absolute;
 top: 500px;
 left: 60px;
}

p.nameinfo
{
 position: absolute;
 top: 10px;
 left: 80px;
}
img
{
position: absolute;
top:120px; 
left:50px ;
}

 </style>   
    <body style="background-color: black;">
      <div class="topnav">
  <a class="active" href="tripspage.php">Home</a>
  <a href="contactus2.php">Contact us</a>
  <a href="aboutus.html">About us</a>
  <a href="logoutadmin.php">Log out</a>

</div>

   <?php

 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "trips";
 $query="select*from messages";
 
 try{
 $conn = mysqli_connect($host, $user, $password, $database);
 }catch(Exception $ex){
     print "error";
 }
 $dataconn=mysqli_query($conn,$query);
$totalr=mysqli_num_rows($dataconn);
// insert
 if(isset($_POST['submit']))
 {
     $insertQuery = "INSERT INTO `messages`( `FirstName` , `Email`, `Phone`,`Message`) VALUES ( '$_POST[fullname]' , '$_POST[mailfield]', '$_POST[phone]', '$_POST[message]')";
     
     try
  {
     $insertResult = mysqli_query($conn, $insertQuery);
     
     if($insertResult)
     {
         if(mysqli_affected_rows($conn) > 0){
             echo "data inserted";
         }else{
             echo "data not inserted";
         }
     }
 }catch(Exception $ex){
       print "error insert" .$ex->getMessage();  
     }
 }
 
 

?>
<p class="textinfo">Jobs fill your pockets, <br> Adventures fill your soul</p>
<img src="logo.png" alt="this picture contains a person, mountains and trees" width="700" height="400" style="margin-left: -50px;margin-top: -110px;">
<form action="contactus2.php" method="post" >
<div class="mydiv">
<p>Hike it® <br> 18 Address block 8 appartement <br> 01010101010 <br> mail@gmail.com<br></p>
<br><label class="name">FullName</label>
<br>
<input type="text" id="fullname"   name="fullname"required>
<br><hr color="orange">
<label class="mail">Mail</label> 
<br>
<input type="text" id="mailfield" name='mailfield'required>
<br><hr color="orange">
<label class="phonenum">Phone</label>
<br>
<input type="text" id="phone" name='phone' style="background-color: orange; width : 40%"required>
<br><hr color="orange">
<label class="msg">Message</label>
<br>
<input type="textarea" id="message" name='message' required>
<script>message{$.fn.setCursorPositionln};</script>
<br>
</div>
<button type="submit"  name="submit" style="position: relative;
top: 470px;
left: 1160px" >Submit</button>

</form>
    </body>
</html>