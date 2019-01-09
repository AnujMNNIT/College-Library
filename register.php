<html>
<?php
$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];
$z=$_POST['d'];
$q=$_POST['e'];
mysql_connect("localhost","root","");
mysql_select_db("library");
 if($w==""||$x==""||$y==""||$z==""||$q=="")
{
	
}
else
{
	$query="select * from student where id='$z'";
	$result=mysql_query($query);
	$cnt=mysql_num_rows($result);
	if($cnt>0)
	{
		
	}
	else
	{
		$query2="INSERT INTO student(name,email,phone,id,password)VALUES('$w','$x','$y','$z','$q')";
		mysql_query($query2);
		?>
		<div class="box3">
		<a href="cover.php">LOGIN HERE</a>
		<p><?php echo"registered"; ?> </p>
		</div>
		<?php
	}
}
?>
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




input[type=text], input[type=password],input[type=email],input[type=number]  {
  width: 20%;
  padding: 8px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background:#FFF333;
}
div.box{
	position: absolute;
	top:150px;
	left:580px;
	width:350px;
	height:absolute;
	border:1px solid black;	
	background-color: pink;
    box-shadow: 10px 10px grey;
}

div.box3{
	position: absolute;
	top:630px;
	left:580px;
	width:350px;
	height:absolute;
	border:1px solid black;	
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
input[type=email] {
    width: 15.2em;  height: 2em;
}
input[type=number] {
    width: 15.2em;  height: 2em;
}
input[type=password] {
    width: 15.2em;  height: 2em;
}
form {
  text-align: top;
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
  <a class="active" href="register.php">REGISTER</a>
  <a href="books.php">BOOKS</a>
  <a href="pending.php">PENDING</a>
  <div class="topnav-right">
	<a  href="updates.php">INSTRUCTIONS</a>
    <a href="contact.php">CONTACT</a>
	<a href="employee.php">EMPLOYEE LOGIN</a>
  </div>
</div>

<img src="MNNIT.png" alt="MNNIT LOGO">
<center>
<div class='box'>
<form method="POST" action="register.php">
<h1>REGISTER</h1>
ENTER NAME:<br>
<input type="text" name="a" size="30"><br>
ENTER EMAIL:<br>
<input type="email" name="b" size="30"><br>
ENTER PHONE:<br>
<input type="number" name="c" size="30"><br>
ENTER USER ID:<br>
<input type="text" name="d" size="30"><br>
ENTER PASSWORD:<br>
<input type="password" name="e" size="30"><br>
<input type="submit" value="submit" size="30">
<input type="reset"  value="reset"  size="30"><br>
<p>enter your college id as user id<p>
</form>
</div>
</center>
</body>
</html>