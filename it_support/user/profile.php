<html>
<?php
 session_start();  
if ( isset($_SESSION['login']) && isset($_SESSION['password'])){
 include('header.php');
include 'db.php';
?>

<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>   
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- 
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="it_support";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
  die("Connection failed: " . $conn-> connect_error);
}

$sql = $conn->query("SELECT * FROM users");
?>--> 

<style>

@import url('https://fonts.googleapis.com/css?family=Boogaloo|Caveat|Fredericka+the+Great|Merienda+One|Rock+Salt&display=swap');

 @import url('https://fonts.googleapis.com/css?family=Lemon&display=swap');

body,h1,h2,h3,h4,h5,h6 {
 font-family: Monaco;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

body {
 font-family: Monaco;
  background-repeat: no-repeat;
    font-size: 17px;
}

/* Set a style for the submit button */
.btn {
  background-color:#8c8c8c;
  color: white;
  padding: 15px 12px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
   
section {
  height: 100vh;
}

/* NAVIGATION */
nav {
  width: 100%;
  margin: 0 auto;
  background: #fff;
  padding: 20px 0;
  box-shadow: 0px 5px 0px #dedede;
}

nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: #aaa;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color: #555;
}

nav.circle ul li a {
  position: relative;
  overflow: hidden;
  z-index: 1;
}

nav.circle ul li a:after {
  display: block;
  position: absolute;
  margin: 0;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '.';
  color: transparent;
  width: 1px;
  height: 1px;
  border-radius: 50%;
  background: transparent;
}
nav.circle ul li a:hover:after {
  -webkit-animation: circle 1.5s ease-in forwards;
}

/* Keyframes */
@-webkit-keyframes circle {
  0% {
    width: 1px;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    height: 1px;
    z-index: -1;
    background: #eee;
    border-radius: 100%;
  }
  100% {
    background: #aaa;
    height: 5000%;
    width: 5000%;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border-radius: 0;
  }
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
<body class="w3-light-grey w3-content" style="max-width:1600px">

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:310px; height: 570px; margin-top:100px; margin-left: -10px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <br> <br>
    <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" style="width:45%; margin-left: 60px;" class="w3-round"><br><br> 
  </div>
  <div class="w3-bar-block" >
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding" ><i class="fa fa-user fa-fw w3-margin-right"></i> User Info</a> 
     <a href="Ask.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i> Ask Question </a>
	  <a href="answer.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-question-circle  fa-fw w3-margin-right"></i> InBox </a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->


  <!-- Header -->
  
  <nav class="circle">
    <ul>
	<li><img  class="logo" src="../images/logo.png" alt="Logo" style=" width: 90px; height: 90px; display: block; text-indent: -9999px;"/> </li>
	
	<li><a>
 

 <?php 

              $email=$_SESSION['login'];
              $password=$_SESSION['password'];
              $res=$conn->query("select * from users where email='$email' and password='$password'");
              $row=$res->fetch_object();

              echo  " <i class='fas fa-user-check' > Hi </i>  ".$row->firstname;
              ?>  
                
              </a></li>
			      <li style="font-size:21px;  color: black; margin-left:500px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </nav>
<div class="w3-main" style="margin-left:400px; margin-top:150px;">
<h2 style="margin-left: 25px;"> <b>My Profile:</b></h2>
<hr color="black" width="2000 px"/ >


  <div style="margin-top:10px;">
    <table class="table table-striped table-bordered" style="width: 950px;">
                <thead>
                         
                    <th>First Name : </th>
                  <th>Email : </th>
                  <th>Password : </th>
  
                  <th>edit</th>
                </tr>
                </thead>
      <tbody style="size: 550px;">
        <?php
          $sql="select * from users where email = '".$email."' and password = '".$password."' ";


          $query=$conn->query($sql);
          while($row=$query->fetch_array()){
            ?>


         <tr>
              
              <td> <?php echo $row['firstname']; ?></td>
              
    
              
                <td> <?php echo $row['email']; ?></td>

         
                <td> <?php echo $row['password']; ?></td>
      
<td>
              <button type="button" class="btn btn-info btn-xs" data-target="#modal_update<?php echo $row['id']?>"data-toggle='modal'><span class='glyphicon glyphicon-pencil'></span> Edit</button>
             </td>
</tr> 
             <div class="modal fade" id="modal_update<?php echo $row['id']?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Update My Profile </h3>
                </div>
                <form action="update_expense.php" method="POST" enctype="multipart/form-data" style="height: 100px;">
                <div class="modal-body" style="margin-top: -114px;">
                 <input type="hidden" id="getID" name="getID" value="<?php echo $row['id']?>">

              
            
                      <label>First Name</label>
                      <input type="text" name="firstname" id="name" class="form-control" value="<?php echo $row['firstname']?>" required="">
                    
              
                      <label>Email</label>
                      <input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email']?>" required="">
        
                      <label>Password</label>
                      <input type="password"  name="password" id="pwd" class="form-control" value="<?php echo $row['password']?>" required="">
          
                    

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 80px;">No</button>
                  <input type="submit" id="submit" name="submit"  value="Yes" class="btn" style="width: 80px; height: 50px;" />
                 </div>
     
              </form>
              </div>
            </div>
          </div>  
          <?php 
            }
             ob_flush();
          ?>
                        
      </tbody>
    </table>
	</div>
	</div>
	</div>
<script>
function myFuncion()
{
	alert("Thanks!");
}
</script>
 
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<?php 
} 
?> 

</body>
<br><br><br><br><br><br>
<br><br>
<div class="footer">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a> 
</div>
</html>