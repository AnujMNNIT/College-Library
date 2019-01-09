<?php
mysql_connect("localhost","root","");
mysql_select_db("library");
$query="select * from pending";
	$result=mysql_query($query);
	$cnt=mysql_num_rows($result);
?>
<html>
<head>
<title>MNNIT LIBRARY</title>
<style>


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
	width:500px;
	height:absolute;
	border:1px solid black;	
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
  <a class="active" href="pending.php">PENDING</a>
  <div class="topnav-right">
	<a href="updates.php">INSTRUCTIONS</a>
    <a href="contact.php">CONTACT</a>
	<a href="employee.php">EMPLOYEE LOGIN</a>
  </div>
</div>


<img src="MNNIT.png" alt="MNNIT LOGO">
<div class='box'>
<table style="background-color:#FFFFFF">
  <tr>
    <th>BOOK ID</th>
    <th>USER ID</th>
	<th>NAME</th>
	<th>ISSUE DATE</th>
  </tr>
    <?php
 if($cnt>0)
 {
	  while($row = mysql_fetch_array($result)) 	  
  { 
?>
 
  <tr>
    <td> <?php echo $row[bid]; ?> </td>
    <td><?php echo $row[id]; ?></td>
	<td><?php echo $row[name]; ?></td>
	<td><?php echo $row[doi]; ?></td>
  </tr>
  <?php
  }
 }
 ?>
</table>
</div>
</body>
</html>