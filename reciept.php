<html>
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("library");
$w=$_SESSION['id'];
$z=$_SESSION['bid'];
$x=$_SESSION['password'];
$e=date("Y-m-d");
$query11="select * from pending where bid='$z' and id='$w'";
$result11=mysql_query($query11);
$cnt11=mysql_num_rows($result11);

if($cnt11==0)
{
$query1="select shelf,copy from books where id='$z'";
$query2="select name,email,phone from student where id='$w'";
$result1=mysql_query($query1);
$result2=mysql_query($query2);
$cnt2=mysql_num_rows($result2);
while($row1 = mysql_fetch_array($result1))
{
	$a=$row1['shelf'];
	$g=$row1['copy'];
}
$g=$g-1;
$query10="UPDATE books SET copy='$g'  WHERE id='$z'";
mysql_query($query10);
while($row = mysql_fetch_array($result2))
{
	$b=$row['name'];
	$c=$row['email'];
	$d=$row['phone'];
}
$query3="INSERT INTO form(id,name,email,phone,bid,shelf,doi)VALUES('$w','$b','$c','$d','$z','$a','$e')";
mysql_query($query3);

$query6="INSERT INTO pending(bid,id,name,email,phone,doi)VALUES('$z','$w','$b','$c','$d','$e')";
mysql_query($query6);
$query8="select * from form WHERE id='$w' and doi='$e'";
$result8= mysql_query($query8);
}
else
{

}
?>
<head>
<title>MNNIT LIBRARY</title>
<style>

h2 {
  text-shadow: 2px 2px 5px red;
}


img{
	width: 15%;
	hight:15%;
  opacity: 0.8;
  filter: alpha(opacity=50);
}
img.img1{
	left:400px;
	width: 25%;
	hight:25%;
  opacity: 0.8;
  filter: alpha(opacity=50);
}
div.box2{
	position: absolute;
	top:120px;
	left:450px;
	width:absolute;
	height:absolute;
	border:1px solid black;	
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
  padding: 25px;
}

</style>
</head>
<body style="background-color:powderblue;">
<h2>
<center>
<font size="10">LIBRARY MNNIT ALLAHABAD</font>
</center>
</h2>
<img class='img1' src="MNNIT.png" alt="MNNIT LOGO">
<div style="background-color:#dbacef" class='box2'>
<center><img src="MNNIT.png" alt="MNNIT LOGO"></center>
<table style="background-color:#dbacef">
  <tr>
    <th>USER ID</th>
    <th> NAME </th>
	<th>EMAIL </th>
	<th>PHONE</th>
	<th>BOOK ID</th>
	<th>SHELF</th>
	<th>ISSUE DATE</th>
  </tr>
  <!database se fetch kar ke bharo.....>
  <?php
  $query8="select * from form where id='$w' and doi='$e'";
  $result8= mysql_query($query8);
  $cnt8=mysql_num_rows($result8);
 if($cnt8>0)
 {
	  while($row = mysql_fetch_array($result8)) 	  
  { 
?>
  <tr>
    <td> <?php echo $row[id]; ?> </td>
	<td> <?php echo $row[name] ; ?> </td>
	<td> <?php echo $row[email] ; ?> </td>
	<td> <?php echo $row[phone] ; ?> </td>
	<td> <?php echo $row[bid] ; ?> </td>
	<td> <?php echo $row[shelf] ; ?> </td>
	<td> <?php echo $row[doi] ; ?> </td>
  </tr>
  <?php
  }
 }
 ?>
</table>
<center><input type="button" style="background-color:yellow" value="Print form" onClick="window.print()"></center>
</div>
</body>
</html>