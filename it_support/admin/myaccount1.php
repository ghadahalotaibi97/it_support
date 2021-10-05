<?php
include("auth1.php");
?>
<html>
<head>
<title>My Account</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

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
  margin-left:-100px;
  align-items: center;
}
.nav{
 width:auto;
  height: auto;
    margin-top: auto;
   background: rgba(153, 153, 153,0.3);
    }
	.
 .logo{
  margin: 5px 10px;
  height: 5px;
}
.menu{
 width:auto;
  height: auto;
  left: 100%;
  top: 20%;
  margin-top: auto;
float:left;
list-style: none;
margin: 20px;

}
.menu li{
 width:auto;
  height: auto;
  left: 100%;
  top: 10%;
  margin-top: auto;
  display: inline-block;
  margin: 10px 5px;

 
}
.menu li a{
	 width:auto;
  height: auto;
  left: 100%;
  top: 10%;
  margin-top: auto;
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

.button {
  border-radius: 4px;
  background-color: #44f895;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;}

.footer {
   width:auto;
  height: auto;
   size: 5px;
  background-color:rgba(153, 153, 153,0.4);
   color: black ;
   text-align:center;

}
  .center {
  width:80%
height:80%;
margin:auto;
  max-width: 500px;
  padding: 80px;
  background-color:rgba(153, 153, 153,0.4);
  

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
.select{
	 width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;	
}

</style>
</head>

<header>
<div class="nav" >
<img  class="logo" src="../images/logo.png" alt="Logo" style="float:left; width: 120px ; height: 70px ;" /> 
<ul class="menu">
<li><a href="questions.php" class="m2"><i class="glyphicon glyphicon-question-sign"></i> Questions (<span id="count1" style="color:red; font-size:10px;"></span>
<span style="color:red; font-size:10px;"> New Questions!</span>)</a></li> 
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out" ></i> Logout</a></li>
</ul>
</div>
</header>

<br><br>
<body>
<div class="center">
<h1><strong>Admin Account</strong></h1>
<br><br>

<center>
<a href="https://www.redseaintl.com/">Visit Red Sea Site!</a>

</center>
</div>
</body>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br>
<div class="footer">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a> 
</div>
</html>
<script type="text/javascript">

$(document).ready(function(){
 
 function load_unseen_notification(view1 = '')
 {
  $.ajax({
   url:"fetch1.php",
   method:"POST",
   data:{view1:view1},
   dataType:"json",
   success:function(data)
   {
	   
   }
  });
 }
 load_unseen_notification();
 
 $(document).on('click','.m2', function(){
  $('#count1').html('');
  load_unseen_notification('yes');
 });
 
         $("#count1").load("fetch1.php");

         setInterval(function(){
             $("#count1").load('fetch1.php')
             }, 10000);
      });
 </script>
