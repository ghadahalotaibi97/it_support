<?php
include("auth1.php");
require('db.php');

?>
<html>
<head>
<title>Questions</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
	  font-family: Monaco;
	  background-color: #F0FFFF;
}
a {
  color: black;
}

img .logo{
  position: absolute;
  margin-left: 100px;
  align-items: center;
}
.nav{
      background: rgba(153, 153, 153,0.3);
      height: auto;
    }
    .
   .logo{
  margin: 5px 10px;
  height: 5px;
}
.menu{

float:left;
list-style: none;
margin: 20px;

}
.menu li{
  display: inline-block;
  margin: 10px 5px;

 
}
.menu li a{
  text-decoration:none;
font-size: 13px;
  color:black;
  padding: 3px 10px;
    font-family: Monaco;
  letter-spacing: 2px;


}
.menu a:hover {
 background-color:rgba(77, 77, 77,0.6);

}

.fa {
  padding: 20px;
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

table {
  height: auto;
  width:auto;
margin:auto;
  max-width: 800px;
box-sizing:border-box;
color:black;
  font-family: Monaco;
font-size: 15px;
text-align: center;
 border: 1px solid black;
 border-collapse: collapse;

}
th {
background-color:#808080;	
}
th , td {
height: 40px;
color: black;
text-align: center;
 border: 1px solid black;
  padding: 15px;
}
tr:nth-child(even) {
	background-color: #fff;
	}
caption{
color: #6495ED;
font-size: 12px;	
}

h2{
color:red;	
margin:auto;
max-width: auto;
height: auto;
width: auto;
  font-family: Monaco;
}
.all{
 width:auto;
  height: auto;
  width:80%
margin:auto;
  max-width: 300px;
box-sizing:border-box;
color:black;
font-size: 10px;
text-align: center;
  font-family: Monaco;
}
.center {
  width:80%
height:80%;
margin:auto;
  max-width: 500px;
  padding:80px;
}
.r{
	color:red;
}
.a{
	color:#6495ED;
}

.footer {
   width:auto;
  height: auto;
   size: 5px;
  background-color:rgba(153, 153, 153,0.4);
   color: black ;
   text-align:center;
   margin-top:auto; 
 
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}
</style>
</head>
<body>

<div class="nav" >
<img  class="logo" src="../images/logo.png" alt="Logo" style="float:left; width: 120px ; height: 70px ;  " > 
<ul class="menu">
<li><a href="myaccount1.php"><i class="glyphicon glyphicon-user"></i> My Account</a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out" ></i> Logout</a></li> 
</ul>
</div>

<br><br>
<div class="center">
<?php

    $res1 = mysqli_query($conn,"SELECT * FROM `ask` where answer ='waiting' ");
 
	if ($res1->num_rows > 0 ) {	
	
	echo "<table><caption><h3><b>Questions list:<b></h3></caption>
	<tr>
	<th>Name</th>
	<th>Questions</th>
	<th>Answer</th>
	</tr>";
	
    while($row = mysqli_fetch_assoc($res1)){  ?>	
<tr>
<td align="center"><?php echo $row["firstname"]; ?></td>
<td align="center"><?php echo $row["question"]; ?></td>
<td align="center">
<a class="a" href="answer.php?id=<?php echo $row["id"]; ?>">Answer</a>
</td>

</tr>
	<?php }
	?>
</table>	
<?php
	} 
else {
	echo "<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<center><h2>There is no Questions!</h2></center>
<br><br><br><br>";
	} 	
?>


</div>

</body>
<br><br><br><br><br><br>
<br><br><br>
<div class="footer">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a> 
</div>
</html>
