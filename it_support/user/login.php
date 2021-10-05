
<?php
   ob_start();
   session_start();
?>

<title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
	background-color:F0FFFF;
	 background-image: url("https://media.istockphoto.com/photos/technical-support-concept-maintenance-sign-wrench-and-srewdriver-picture-id1199145131?k=20&m=1199145131&s=612x612&w=0&h=ZdR5zGHxD0w8o8dXPfLllCDOC3BGZU7To-67T3X2Wls=");
	  background-repeat: no-repeat;
	  background-size: cover;
	   background-position: center; 
	padding-button:50px;
}
.container {
    background-color:rgba(153, 153, 153,0.4);
	
}
  h1 {
            font-family: Monaco;
            font-weight: 600;
            font-size: 70px;
            color: black;
            text-align: center;
        }

        input:focus~label,
        textarea:focus~label,
        input:valid~label,
        textarea:valid~label {
            font-size: 0.75em;
            color: black;
            top: -5px;
            -webkit-transition: all 0.225s ease;
            transition: all 0.225s ease;
        }

        .styled-input {
            float: left;
            width: 293px;
            margin: 1rem 0;
            position: relative;
            border-radius: 4px;
        }

        @media only screen and (max-width: 768px) {
            .styled-input {
                width: 100%;
            }
        }

        .styled-input label {
            color: black;
            padding: 1.3rem 30px 1rem 30px;
            position: absolute;
            top: 10px;
            left: 0;
            -webkit-transition: all 0.25s ease;
            transition: all 0.25s ease;
            pointer-events: none;
        }

        .styled-input.wide {
            width: 650px;
            max-width: 100%;
        }

        input,
        textarea {
            padding: 30px;
            border: 5px;
            width: 100%;
            font-size: 1rem;
        background-color: #4b8cfb;
            color: white;
            border-radius: 4px;
			opacity:0.7;
        }

        input:focus,
        textarea:focus {
            outline: 0;
        }

        input:focus~span,
        textarea:focus~span {
            width: 100%;
            -webkit-transition: all 0.075s ease;
            transition: all 0.075s ease;
        }

        textarea {
            width: 100%;
            min-height: 15em;
        }

        .input-container {
            width: 650px;
            max-width: 100%;
            margin: 20px auto 25px auto;
        }

        .submit-btn {
            float: right;
            padding: 7px 35px;
            border-radius: 60px;
            display: inline-block;
            background-color: #4b8cfb;
            color: black;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06),
                0 2px 10px 0 rgba(0, 0, 0, 0.07);
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .submit-btn:hover {
            transform: translateY(1px);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.10),
                0 1px 1px 0 rgba(0, 0, 0, 0.09);
        }

        @media (max-width: 768px) {
            .submit-btn {
                width: 100%;
                float: none;
                text-align: center;
            }
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
</head>
  <nav class="circle">

    <ul>
	<li><img  class="logo" src="../images/logo.png" alt="Logo" style=" width: 90px; height: 90px; display: block; text-indent: -9999px;"/> </li>
    </ul>
  </nav>

<br><br><br>
<body>
  <?php
  include "conn.php";
  if($_POST)
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
  $sql = "SELECT * FROM `users` where email='".$email."' and password='".$password."' ";
    $query =  mysqli_query($conn, $sql);
    if( mysqli_num_rows($query)> 0)
     {
   
 $query=$conn->query($sql);
          while($qry=$query->fetch_array()){

$_SESSION['login']=$email;
    $_SESSION['password']=$password;
     $s=$qry['status'];
	 $f="admin";
      if(strcmp($s,$f)==0){
        $_SESSION['user'] = $qry;
        $_SESSION['success'] ="You are now logged in";
        header('location:../admin/myaccount1.php');     
      }else{
        $_SESSION['user'] = $qry;
        $_SESSION['success']  = "You are now logged in";

        header('location: profile.php');
		  } }
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }

  ?> 
  
   <div class="container">
        <div class="row">
            <h1>Login</h1>
        </div>
		  <form class="form-horizontal" method="post" action="">
		  <div class="row input-container">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                    <label for="email">Email:</label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input  type="password" id="pwd" name="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                    <label for="pwd">Password:</label>
                </div>
            </div>
         
  <div class="col-xs-12">
                <button type="submit" class="btn-lrg submit-btn">Login in</button>
      </div> 
    </div>
    </div>
  </form>

</body>
<br><br><br><br><br><br>
<div class="footer">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a> 
</div>
</html>
