<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head >
    <title>details</title>
    <body>
 <img src="logo.png" id="ii">
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="contactus2.php">Contact us</a>
  <a href="aboutus.html">About us</a>
    <a href="logoutadmin.php">Log out</a>

</div>
</body>
<style >
    

/*.topnav {
  background-color: orange;
  overflow: hidden;

}*/
*{
  margin:0px;
}

/* Style the links inside the navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
  margin-left: 90px;
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

/*.logoo{
  width: 80px;
  height: 80px;
  position: absolute;
  margin-left:0px;
  margin-top: -117px;
}*/
#ii{
  width: 80px;
  height: 80px;
  position: absolute;
  margin-left:0px;
}

</style>

</h1><br>  <br>  

</style>

</head>
<body style="background-color:black;">

<?php


if(isset($_GET['id']))
{
$host = "localhost";
 $user = "root";
 $password = "";
 $database = "trips";
 $conn = mysqli_connect($host, $user, $password, $database);
  $id=mysqli_real_escape_string($conn,$_GET['id']);

   $query=" SELECT * from tripdetails WHERE id='{$_GET['id']}' ";

    $dataconn=mysqli_query($conn,$query); //result



$totalr=mysqli_num_rows($dataconn); //row






        
        if($totalr!=0)
 {
    while($result=mysqli_fetch_assoc($dataconn)  )
    {
        
        echo "
        
        
        <div class='topp'><h1>".$result['tripName']."</h1></div>
        <h2>".$result['tripDescription']."</h2>
  

<img class='my' src='".$result['pic']."' name='image4' >
<img class='my'  src='".$result['pic2']."' name='image4' >
<img class='my'  src='".$result['pic3']."' name='image4'>

        ";
//  '<img class="my" src="data:image/jpeg;base64,'.base64_encode( $result['pic'] ).' "/>'; 
// '<img class="my" src="data:image/jpeg;base64,'.base64_encode( $result['pic2'] ).'"/>'; 
//  '<img class="my" src="data:image/jpeg;base64,'.base64_encode( $result['pic3'] ).'"/>'; 


 // echo '<img  src="data:image/jpeg;base64,'.base64_encode( $result['pic4'] ).'" alt="Avatar" style= "width:130px ; height:130px position:relative; top:250px; left:-89px">';
 
 // echo '<img  src="data:image/jpeg;base64,'.base64_encode( $result['pic5'] ).'" alt="Avatar" style= "width:130px; height:130px ; position:relative; top:320px; left:15px" >';
 // echo '<img  src="data:image/jpeg;base64,'.base64_encode( $result['pic4'] ).'" alt="Avatar" style= "width:130px; height:130px ; position:relative; top:540px; left:-115px" >';





    }

 }
 else {
    echo "no records found";
 }
}

 ?> 
 <?php
/**
    * 
    */
 
 ?>
        <style >
m{

position: relative; top: 1500px;


}
    
    
          .topp{
            color: orange;
            position: relative;
            left: 550px;
            top: 60px;
            font-size: 50px;
          }
         .topp h1{
             position: relative;
 text-align: center;
          }
          h2{
            color: orange;
            position: relative;
            left: 450px;
            top: 210px;
            font-size: 22px;
            font-family: Lucida Handwriting;

          }
 /*         h3{
            position: relative;
            top: 290px;
            left:10px;
           

          }
  
h4 { position: relative;
  top:350px; 
left: 10px;
}*/
        </style> 
      
<!--  // echo '<img  src="data:image/jpeg;base64,'.base64_encode( $result['pic4'] ).'" alt="Avatar" style= "width:130px ; height:130px position:relative; top:250px; left:-89px">';
 
 // echo '<img  src="data:image/jpeg;base64,'.base64_encode( $result['pic5'] ).'" alt="Avatar" style= "width:130px; height:130px ; position:relative; top:320px; left:15px" >';
 // echo '<img  src="data:image/jpeg;base64,'.base64_encode( $result['pic4'] ).'" alt="Avatar" style= "width:130px; height:130px ; position:relative; top:540px; left:-115px" >';

 
 <img src = "data:image/jpg;base64,' . base64_encode($result['pic']) />
<img src = "data:image/jpg;base64,' . base64_encode($result['pic2']) />
<img src = "data:image/jpg;base64,' . base64_encode($result['pic3']) /> -->

<!--  <img class="mySlides" src="aus1.jpg">

 <img class="mySlides" src="aus2.jpg">
<img class="mySlides" src="img3.jpg">
 --> 
<script >
 var slideIndex = 0;
carousel();
1
function carousel() {
  var i;
  var x = document.getElementsByClassName("my");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2500); 
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("table").toggle();
  });
});
</script>

<button  style = "position:relative; left:1px; top:10px; background-color:orange">view / hide rating details</button>


<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<div class="stars" style="position: relative; top: -120px; right: 1150px">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
 -->
<!-- 
<style >iv.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}</style> -->

</style>
</i>
<br>

<?php
 if(isset($_GET['id']))
{
 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "lab07";
 // $query="select * from ausrev ";
  $id=mysqli_real_escape_string($conn,$_GET['id']);

   $query=" SELECT * from ausrev WHERE id='{$_GET['id']}' ";
 try{
 $conn = mysqli_connect($host, $user, $password, $database);
 }catch(Exception $ex){
     print "error";
 }
 $dataconn=mysqli_query($conn,$query);
$totalr=mysqli_num_rows($dataconn);
}
?>



 <html>
 <style >
      .product{
            border: 1px solid orange;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: orange;
        position: relative;
        top: -250px;
        left: 400px;
        }
  </style>
    <div  style="width: 25%">
        <?php
        if(isset($_GET['id']))
{
   $id=mysqli_real_escape_string($conn,$_GET['id']);

   $query=" SELECT * from tripdetails WHERE id='{$_GET['id']}' ";

         $database_name = "trips";
    $con = mysqli_connect("localhost","root","",$database_name);
            // $query = "SELECT * FROM tripdetails WHERE id=2";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="Car.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <h5 class="text-info"><?php echo $row["tripName"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["tripPrice"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["tripName"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["tripPrice"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px; color: orange" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }}
        ?>

<div>
    <table  class="table table-striped">
        <tr>
            <th>username</th>
            <th>stars</th>
      
            <th>comment</th>
           
        </tr>
        <?php

        if($totalr!=0)
 {
    while($result=mysqli_fetch_assoc($dataconn))
    {
        echo "
        
        <tr>
        <td>".$result['username']."</td>
        <td>".$result['rating']."</td>
     
        <td>".$result['comm']."</td>
       
        </tr>
        ";
    }
 }
 else {
    echo "no records found";
 }

 ?>
     </table>
</div>
 <style >
  h1{
  position: relative;
  top: 5px;
  left: -500px;
/* text-align: left;
*/
}
    table {
  
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 45%;
  color: orange;
position: relative;
top: -50px;
left: 10px;
display: none;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}
 
<!-- <style>
  header{
    color:orange;
      font-family: Courier New;
  font-size: 17px;

  }
  ul{

    color:white;
  }
  
</style>


 <br><br>  <br>  <br>    


 

<!-- <style >
    .container {
  border: 3px solid #FF691E ;
  border-radius: 5px;
  padding: 19px;
  margin: 16px 0;
  height: 120px;
}

/* Clear floats after containers */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Float images inside the container to the left. Add a right margin, and style the image as a circle */
.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

/* Increase the font-size of a span element */
.container span {
  font-size: 20px;
  margin-right: 15px;
}

/* Add media queries for responsiveness. This will center both the text and the image inside the container */
@media (max-width: 500px) {
  .container {
    text-align: left;
  }

  .container img {
    margin: auto;
    float: none;
    display: block;
  }
}
</style> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("input[name=btnn]").click(function () {
            if ($(this).val() == "Add a review") {
                $("#comm").show();
            } else {
                $("#comm").hide();
            }
        });
    });
  
</script>

<input type="button" value="Add a review" name = "btnn"style="position:relative; left: 45PX; top:-30px" />
<style >
  #comm{
    display: none;
   
  }
  

</style>
<form   method="POST" id="comm" style="position: relative; left: 55PX; top: -20PX" >
 
   <textarea name="comm" id="speechText" rows="5"></textarea>

<!--     <input type="text" name="comm" placeholder=""id='speechText' >
 --><!--     <button type="submit" name="submit">Submit</button>
 -->      
    <link href='style.css' rel='stylesheet' type='text/css'>
    <script src="jquery-3.2.1.js"></script>
    <script type='text/javascript'>

    var recognition = new webkitSpeechRecognition();

    recognition.onresult = function(event) { 
        var saidText = "";
        for (var i = event.resultIndex; i < event.results.length; i++) {
            if (event.results[i].isFinal) {
                saidText = event.results[i][0].transcript;
            } else {
                saidText += event.results[i][0].transcript;
            }
        }
      
        document.getElementById('speechText').value = saidText;
        
      
    }

    function startRecording(){
      recognition.start();
    }


    </script>
  </head>


    <div >
      <!-- Search box-->
     <!--  <input type='text' id='speechText' > &nbsp; --> <input type='button' id='start' value=' Talk ' onclick='startRecording();'>
    </div>
<div style="padding-bottom: 18px; color: orange ; position:relative; top: 70PX;left: 20PX">rating<br/>
        <input type="text" name="username" placeholder="username" required>

<select id="rating" name="rating" style="max-width : 250px; color: orange; position:relative; top: 0PX;left: 10PX" class="form-control">
<option >Please rate </option required>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select><br><br>
    <button type="submit" name="submit" 
                class="button" value="Button1">Submit</button>  <!--  -->
    </form>


</body>

</html>
<?php
$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$db = "lab07";

$connn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$db);

  
  if(isset($_POST['submit']))
{
//   if(isset($_GET['id']))
// { 
//   $id=mysqli_real_escape_string($conn,$_GET['id']);

  $h=$_POST['username'];
  $i=$_POST['rating'];
  $j=$_POST['comm'];
  $sql="INSERT INTO ausrev (id,username,rating,comm)  
  values('$id','$h','$i','$j')";
 if (empty($h) )
      {
        echo '<script>alert(" Empty user name !")</script>';
        
    } if (empty($i))
      {
        echo '<script>alert(" Empty rating !")</script>';
        
    }
    if (empty($j))
      {
        echo '<script>alert(" Empty comment !")</script>';
        
    }
  else{
    mysqli_query($connn,$sql);
    
  }
  
}

?>
</html>