<?php
session_start();
$w=$_POST['a'];
$x=$_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("library");
 if($w==""||$x=="")
{
	
}
else
{
	$query="select * from student where id='$w' and password='$x'";
	$result=mysql_query($query);
	$cnt=mysql_num_rows($result);
	if($cnt>0)
	{
		$_SESSION['id']=$w;
		$_SESSION['password']=$x;
		header("location:login.php");
		
	}
}
?>
<html>
<head>
<title>MNNIT LIBRARY</title>
<style>

h2 {
  text-shadow: 2px 2px 5px red;
}


div.topnav {
    background-color: black;
    overflow: hidden;
}


/* Style the links inside the navigation bar */
div.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
div.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
div.topnav a.active {
  background-color: red;
  color: white;
}

/* Right-aligned section inside the top navigation */
div.topnav-right {
  float: right;
}
img{
	width: 25%;
	hight:25%;
  opacity: 0.8;
  filter: alpha(opacity=50);
}
img.myslides{
	width: 100%;
	hight:100%;
  opacity: 0.8;
  filter: alpha(opacity=50);
}
input[type=text], input[type=password] {
  width: 20%;
  padding: 8px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background:#FFFF33;
}
div.box{
	position: absolute;
	top:200px;
	left:400px;
	width:230px;
	height:300px;
	border:1px solid black;	
	background-color: pink;
    box-shadow: 10px 10px grey;
}
div.box2{
	position: absolute;
	top:200px;
	left:1250px;
	width:180px;
	height:300px;
	border:1px solid black;	
	box-shadow: 10px 10px grey;
}
div.box3{
	position: absolute;
	top:200px;
	left:645px;
	width:absolute;
	height:300px;

}

input[type="submit"] {
    width: 7.6em;  height: 2em;
	
	
}
input[type=reset] {
    width: 7.6em;  height: 2em;
}
input[type=text] {
    width: 15.2em;  height: 2em;
}
input[type=password] {
    width: 15.2em;  height: 2em;
}
form {
  text-align: top;
}
div.btn-group button {
  background-color: #4CAF50; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  width: 100%; 
  height:50px;/* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
}

div.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
div.btn-group button:hover {
  background-color: #3e8e41;
}


</style>
</head>
<body style="background-color:powderblue;">
<h2>
<center>
<font size="10">LIBRARY MNNIT ALLAHABAD</font>
</center>
</h2>




<div class="topnav">
  <a class="active" href="cover.php">HOME</a>
  <a href="register.php">REGISTER</a>
  <a href="books.php">BOOKS</a>
  <a href="pending.php">PENDING</a>
  <div class="topnav-right">
	<a href="updates.php">INSTRUCTIONS</a>
    <a href="contact.php">CONTACT</a>
	<a href="employee.php">EMPLOYEE LOGIN</a>
  </div>
</div>
<img src="MNNIT.png" alt="MNNIT LOGO">

<!slideshow.....>
<div class="box3">
<img class="mySlides" src="img_lights.jpg">
<img class="mySlides" src="img_lights.jpg">
<img class="mySlides" src="img_forest.jpg">
<img class="mySlides" src="img_snowtops.jpg">

  <button align="left" class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button align="right" class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>




<center>
<div class='box'>
<form method="POST" action="cover.php">
<h2>LOGIN SECTION</h2>
ENTER USER ID:<br>
<input type="text" name="a" size="30"><br>
ENTER PASSWORD:<br>
<input type="password" name="b" size="30"><br>
<input type="submit" value="submit" size="30" required>
<input type="reset"  value="reset"  size="30" required><br>
</form>
</div>
<div class='box2'>
<div class="btn-group">
  <button id="b1">REGISTER</button>
  <button id="b2">BOOKS</button>
  <button id="b3">INSTRUCTIONS</button>
  <button id="b4">PENDING</button>
  <button id="b5">CONTACT</button>
  <button id="b6">EMPLOYEE LOGIN</button>
</div>
</div>
<center>
<script type="text/javascript" class="float-left submit-button" >
    document.getElementById("b1").onclick = function () {
        location.href = "register.php";
    };
</script>
<script type="text/javascript" class="float-left submit-button" >
    document.getElementById("b2").onclick = function () {
        location.href = "books.php";
    };
</script>
<script type="text/javascript" class="float-left submit-button" >
    document.getElementById("b3").onclick = function () {
        location.href = "updates.php";
    };
</script>
<script type="text/javascript" class="float-left submit-button" >
    document.getElementById("b4").onclick = function () {
        location.href = "pending.php";
    };
</script>
<script type="text/javascript" class="float-left submit-button" >
    document.getElementById("b5").onclick = function () {
        location.href = "contact.php";
    };
</script>
<script type="text/javascript" class="float-left submit-button" >
    document.getElementById("b6").onclick = function () {
        location.href = "employee.php";
    };
</script>
</body>
</html>