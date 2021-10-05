<?php
require('db.php');
include("auth1.php");
?>
<html>
<head>
<title>Send Answer</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
	  font-family: Monaco;
	  background-color: #F0FFFF;
}
* {
  box-sizing: border-box;
}

.active {
background-color:rgba(77, 77, 77,0.6);

}

/* Add styles to the form container */
.container {
 width:auto;
  height: auto;
  width:80%
margin:auto;
  max-width: 300px;
  padding: 10px;
  background-color:rgba(153, 153, 153,0.4);
}

/* Full-width input fields */
input[type=text], input[type=password] , input[type=number] , input[type=date] , input[type=time] , textarea{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus , input[type=number]:focus , input[type=date]:focus , input[type=time]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit button */
.btn {
  
  color: black;
  padding: 5px 5px;
  background-color:rgba(153, 153, 153,0.4);
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border: 2px solid #000000;
}
textarea{
background-color: #ddd;
 background: #f1f1f1;
  }
form{
  
            text-align: center;

        }
.btn:hover {
  opacity: 1;
}

a {
  color: black;
 
}

img .logo{
  position: absolute;
  margin-left:-100px;
  align-items: center;
}


    .nav{
      background: rgba(153, 153, 153,0.3);
      width:auto;
  height: auto;
    }
    .
   .logo{

  margin: 10px 20px;
  height: 30px;
}
.menu{

float:left;
list-style: none;
margin: 20px;

}
.menu li{
  display: inline-block;
  margin: 5px 5px;

 
}
.menu li a{
  text-decoration:none;

font-size: 13px;
  color:black;
  padding: 3px 10px;
  font-family: sans-serif;
  letter-spacing: 2px;


}
.menu a:hover {
 background-color:rgba(77, 77, 77,0.6);

}
.footer {
   width:auto;
  height: auto;
   size: 8px;
  background-color:rgba(153, 153, 153,0.4);
   color: black ;
   text-align:center;

}

.fa {
  padding: 19px;
  font-size: 20px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}
.cancel {
color: black;
  padding: 5px 5px;
  background-color:rgba(153, 153, 153,0.4);
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border: 2px solid #000000;	
}
</style>
</head>
<body>

<div class="nav" >
<img  class="logo" src="../images/logo.png" alt="Logo" style="float:left; width: 120px ; height: 70px;"> 
<ul class="menu">
<li><a href="myaccount1.php"><i class="glyphicon glyphicon-user"></i> My Account</a></li>
</ul>
</div>
<?php
if(isset($_POST['new']) && $_POST['new']==1)
{
	
$id = $_REQUEST['id'];	
$answer=$_REQUEST["answer"];

$sql="update ask set answer='$answer' where id='$id'";

$result = mysqli_query($conn,$sql) or die (mysqli_error());

header("Location: questions.php");
} else {
?>
 <br><br>
<form method="post" class="container" enctype="multipart/form-data" >
<input type="hidden" name="new" value="1" />
<h2>Send Answer:</h2>
<textarea rows="10" cols="20" placeholder="Send Answer" name="answer" required></textarea>
<button type="submit" name="submit" class="btn">Done</button>
<br><br>
<button  class="cancel" onclick="location.href='../admin/questions.php'">Cancel</button>
<br> <br>
</form>
<?php } ?>

</body>
<br><br><br><br><br><br>
<br><br>
<div class="footer">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a> 
</div>
</html>