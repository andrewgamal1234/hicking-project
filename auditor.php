<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  h1{
    color: black;
    background: orange;

  }
*{
      margin:0;
      padding: 0;
      font-family: sans-serif;

    }
body{
 /* background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.6)),url(woman-hiking-mountain-getty-0720.jpg);*/
  background-image: url(img4.jpg);
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
    .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 157px;
  left: 0;
  background-color: orange;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: orange;
  background: white;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: orange;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
 h1{
        color: black;
        background: black;
        margin: 0px;
     }
     h1{
    color: black;
    background: black;

  }
</style>
</head>
<body>

<h1><img src="logo.png" height="150px" width="150px"></h1>
        <div class="main">
          <h2>Welcome <span>Auditor</span></h2>
          
        </div>
   <div class="sidenav">
  <a class="active" href="auditor.php">Home</a>
  <button class="dropdown-btn">send survey
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="survey1.php">survey 1</a>
    <a href="survey2.php">survey 2</a>
    <a href="survey3.php">survey 3</a>
  </div>
            <a href="tabl.php">Survey results</a>
          <a href="invest.php">report admin missbehaviour</a>
          <a href="hrpenalty.php">HR admin penalty </a>
          <a href="chat/user33.php">Comment on chat </a>

            <a href="logoutadmin.php">Logout</a>

</div>
   <script >
     var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
   </script>
        <body>



</body>
</html>