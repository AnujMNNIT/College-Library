
<html>
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("library");
$w=$_SESSION['id'];
$query="select * from employee where empid='$w'";
$result=mysql_query($query);
$cnt=mysql_num_rows($result);
$y=$_POST['a'];
$z=$_POST['b'];
$query5="select * from pending where id='$y'and bid='$z'";
$result5=mysql_query($query5);
$cnt5=mysql_num_rows($result5);
if($cnt5==1)
{
$query5="delete from pending where id='$y'and bid='$z'";
$result5=mysql_query($query5);
$query6="delete from form where id='$y'and bid='$z'";
$result6=mysql_query($query6);
$query1="select copy from books where id='$z'";
$result1=mysql_query($query1);
while($row1 = mysql_fetch_array($result1))
{
	$g=$row1['copy'];
}
$g=$g+1;
$query2="UPDATE books SET copy='$g'  WHERE id='$z'";
$result2=mysql_query($query2);
?>
		<div style="background-color:orange" class='box3'>
		<center><p><?php echo"$z" ;?> is submitted by <?php echo "$y"; ?></p><
		<center><p><?php echo  date("d-m-y");?></p><center> 
        <center><p><?php echo  date("h:i a");?></p><center>
		<center><p><?php echo  $fine ;?></p><center>
		</div>
		<?php
}
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
 if($c==""||$d==""||$e==""||$f==""||$g=="")
{
	
}
else
{
	$queryy="select * from books where id='$c'";
	$resultt=mysql_query($queryy);
	$cnt=mysql_num_rows($resultt);
	if($cnt>0)
	{
		
	}
	else
	{
		$queryy1="INSERT INTO books(id,branch,name,shelf,copy)VALUES('$c','$d','$e','$f','$g')";
		mysql_query($queryy1);
	}
}
?>
<head>
<title>MNNIT LIBRARY</title>
<style>

h2 {
  text-shadow: 2px 2px 5px red;
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

img{
	width: 25%;
	hight:25%;
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
div.box1{
	position: absolute;
	top:250px;
	left:600px;
	width:300px;
	height:325px;
	border:1px solid black;	
	background-color: pink;
    box-shadow: 10px 10px grey;
}

div.box11{
	position: absolute;
	top:250px;
	left:950px;
	width:ABSOLUTE;
	height:ABSOLUTE;
	border:1px solid black;	
	background-color: pink;
    box-shadow: 10px 10px grey;
}

div.box3{
	position: absolute;
	top:550px;
	left:600px;
	width:300px;
	height:absolute;
	border:1px solid black;	
}
div.box4{
	position: absolute;
	top:80px;
	left:500px;
	width:900px;
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

<img src="MNNIT.png" alt="MNNIT LOGO">
<center>
<div class='box1'>
<form method="POST" action="work.php">
<h2>BOOK SUBMISSION</h2>
ENTER USER ID:<br>
<input type="text" name="a" size="30"><br>
ENTER BOOK ID:<br>
<input type="text" name="b" size="30"><br>
<input type="submit" value="submit" size="30">
<input type="reset"  value="reset"  size="30"><br>
</form>
</div>
<center>

<center>
<div class="BOX11">
<form method="POST" action="work.php">
<h2>UPDATE LIBRARY</h2>
 BOOK ID:        BRANCH:<br>
<input type="text" name="c" size="20">
<input type="text" name="d" size="20"><br>
 SUBJECT:          SHELF:<br>
<input type="text" name="e" size="20">
<input type="text" name="f" size="20"><br>
COPY:<br>
<input type="text" name="g" size="20"><br>
<input type="submit" value="submit" size="20">
<input type="reset"  value="reset"  size="20"><br>
</form>
</div>
<center>




<div class='box4'>
<table style="background-color:#dbceaf">
  <tr>
    <th>NAME</th>
    <th>EMPLOYEE ID</th>
	<th>PHONE</th>
	<th>ADRESS</th>
	<th>EMAIL</th>
  </tr>
    <?php
 if($cnt>0)
 {
	  while($row = mysql_fetch_array($result)) 	  
  { 
  ?>
  <tr>
    <td> <?php echo $row['name']; ?> </td>
    <td> <?php echo $row['empid']; ?> </td>
	<td> <?php echo $row['phone']; ?> </td>
	<td> <?php echo $row['address']; ?> </td>
	<td> <?php echo $row['email']; ?> </td>
  </tr>
  <?php
  }
 }
 ?>
 </div>
 
 
	

</body>
</html>