<?php
    session_start();
    $database_name = "trips";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Car.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Car.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Car.php"</script>';
                }
            }
        }
    }








?>



<head>
   <title>Shopping cart</title>
<img src="logo.png">
<div class="topnav">
  <a class="active" href="tripspage.php">Home</a>
  <a href="contactus2.php">Contact us</a>
    <a href="aboutus.html">About us</a>

  <a href="logoutadmin.php">log out</a>
</div>
   <script >
  function submitt() {
   alert("Your order has been placed");
   return true;
}
</script>
<style >
    

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
img{
  width: 80px;
  height: 85px;
  position: absolute;
  margin-left:0px;
}

</style>

</h1><br>  <br>  

</style>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>



        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
     
        table, th, tr{
            text-align: center;
            color: black;
                        background-color: orange;
        }
     
        h2{
            text-align: center;
            color: black;
            padding: 2%;
                        background-color: orange;

        }
        table th{
            background-color: orange;
            color: black;
        }
    </style>
</head>
<body style="  background-image: url('cart.jpg');">

    <div class="container" style="width: 65%">
       

        <div style="clear: both"></div>
        <h2 class="title2">Shopping Cart</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>

            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Car.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>
                                    
   


<!-- <button class="btn btn-danger btn-lg" id="cancelorder" onclick="clear_cart()">Clear Cart</button>
<script >
    function clear_cart( ) {
    if( confirm( 'Shopping cart will be cleared. Continue?' ) ) {
        $.get( "car.php?cmd=emptycart", function( data ) {
            alert( "Cart has been cleared!" );
        });
    }
}
</script> -->

<!-- 

<a href="/car.php/clear" id="clear-cart">Empty Cart</a>
<script>
$(function() {
  $('.clear-cart').on('click',function(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: '/car/clear.js',
      success: function(){
        alert('You cleared the cart!');
      },
      dataType: 'json'
    });
  })
});
</script>

 -->
</td>           
                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>


<form>
     <input type="submit" value="Place Order" onclick="submitt()">
</form>


</body>
</html>