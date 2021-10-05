<?php
session_start();
require_once('conn.php');





	if(isset($_POST['submit']) && !empty($_POST['firstname'])  && !empty($_POST['email']) && !empty($_POST['password'])){ 
   
    
     $firstname =$_POST['firstname'];
      $email= $_POST['email'];
     $password = $_POST['password'];
     $id = $_POST['getID'];

    $sql="UPDATE users SET firstname='".$firstname."',email='".$email."',password='".$password."' WHERE id='".$id."'";
    $update =mysqli_query($conn,$sql);
    if($update === TRUE)
    {
      echo '
         <script type="text/javascript">
          alert(" Update Success!");
          window.location.replace("profile.php");
         </script>';
    
    }

else{
		echo '
         <script type="text/javascript">
          alert("Error!");
          window.location.replace("profile.php");
         </script>';
	}

}




		?>
<?php mysqli_close($conn); ?>