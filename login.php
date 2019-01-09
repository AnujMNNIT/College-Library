
<html>
<?php
session_start();
function date_difff($date1, $date2)  
{ 
    $diff = strtotime($date2) - strtotime($date1); 
    $fine=abs(round($diff / 86400))-14; 
	if($fine<0)
	{
		return 0;
	}
	else
	{
		return $fine;
	}
	
} 


mysql_connect("localhost","root","");
mysql_select_db("library");
$w=$_SESSION['id'];
$x=$_SESSION['password'];
$date1=date("Y-m-d");
$query="select * from student where id='$w'";
$result=mysql_query($query);
$cnt=mysql_num_rows($result);
$query5="select * from pending where id='$w'";
$result5=mysql_query($query5);
$cnt5=mysql_num_rows($result5);
$y=$_POST['a'];
$z=$_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("library");
if($y==$w)
{
 if($y==""||$z=="")
{

}
else
{ 
  
	$query2="select * from pending where id='$w'";
	$query3="select copy from books where id='$z'";	
	$result2=mysql_query($query2);
	$cnt2=mysql_num_rows($result2);
	$result3=mysql_query($query3);
	$cnt3=mysql_num_rows($result3);
	while($row3 = mysql_fetch_array($result3))
	if($cnt2<4)
	{
	
		if($cnt3==0|| $row3['copy']==0)
		{
			echo"book is not available";
		}
		else
		{
			$_SESSION['id']=$w;
			$_SESSION['bid']=$z;
			$_SESSION['password']=$x;
			echo "ho gya";
		    header("location:reciept.php");
		}
		
	}
	else
	{
		echo"first submit your book";
	}
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
	height:300px;
	border:1px solid black;	
	 background-color: pink;
  box-shadow: 10px 10px grey;
}

div.box5{
	position: absolute;
	top:250px;
	left:950px;
	width:400px;
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
<form method="POST" action="login.php">
<h2>ISSUE YOUR BOOK</h2>
ENTER USER ID:<br>
<input type="text" name="a" size="30"><br>
ENTER BOOK ID:<br>
<input type="text" name="b" size="30"><br>
<input type="submit" value="submit" size="30">
<input type="reset"  value="reset"  size="30"><br>
</form>
</div>
<center>


<div class='box5'>
<table style="background-color:#FFFFFF">
<p style="background-color:#cd12b5">PENDING BOOKS</P>
  <tr>
    <th>BOOK ID</th>
	<th>ISSUE DATE</th>
	<th>FINE</th>
  </tr>
    <?php
 if($cnt5>0)
 {
	  while($row = mysql_fetch_array($result5)) 	  
  { 
  ?>
  <tr>
   <?php $fine=date_difff($row['doi'],$date1);?>
    <td> <?php echo $row['bid']; ?> </td>
	<td> <?php echo $row['doi']; ?> </td>
	<td> <?php echo $fine; ?> </td>
  </tr>
  <?php
  }
 }
 ?>
</table>
</div>

<div class='box4'>
<table style="background-color:#dbceaf">
  <tr>
    <th>NAME</th>
    <th>USER ID</th>
	<th>PHONE</th>
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
    <td> <?php echo $row['id']; ?> </td>
	<td> <?php echo $row['phone']; ?> </td>
	<td> <?php echo $row['email']; ?> </td>
  </tr>
  <?php
  }
 }
 ?>
 </div>
 
</script>
</body>
</html>