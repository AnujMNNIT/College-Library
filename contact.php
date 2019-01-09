
<html>
<head>
<title>MNNIT LIBRARY</title>
<style>
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 

h2 {
  text-shadow: 2px 2px 5px red;
}



img{
	width: 25%;
	hight:25%;
  opacity: 0.8;
  filter: alpha(opacity=50);
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


table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
div.box{
	position: absolute;
	top:150px;
	left:580px;
	width:300px;
	height:220px;
	border:1px solid black;
   background-color :white;	
}
div.box2{
	position: absolute;
	top:150px;
	left:900px;
	width:300px;
	height:220px;
	border:1px solid black;	
	background-color:white;
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
  <a href="cover.php">HOME</a>
  <a href="register.php">REGISTER</a>
  <a href="books.php">BOOKS</a>
  <a href="pending.php">PENDING</a>
  <div class="topnav-right">
	<a href="updates.php">INSTRUCTIONS</a>
    <a class="active" href="contact.php">CONTACT</a>
	<a href="employee.php">EMPLOYEE LOGIN</a>
  </div>
</div>


<img src="MNNIT.png" alt="MNNIT LOGO">
 <i class="material-icons">computer</i> 
<div class="box">

<h4 style="background-color:#DC143C">GMAIL:</h4><br>
<center><p>anujsingh04072000@gmail.com</p></center><br>
<center><p>anujsinghmnnit2017@gmail.com<p></center><br>
</div>
<div class="box2" src="email.jpg">
<h4 style="background-color:#2D48E9">CONTACT:</h4><br>
<center><p>+918423221519</p></center><br>
<center><p>+917985904971</center></p><br>
</div>





<div class ="box5" id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(25.4920, 81.8639),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEhU0EaFWjc3A0kMW-X5Lm_tgc1gaoHy0&callback=myMap">
></script>




</body>
</html>