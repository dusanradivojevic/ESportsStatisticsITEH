<?php
   include("konekcija.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($link, $_POST['email']);
      $email = trim($email, " ");
      $password = mysqli_real_escape_string($link, $_POST['pw']); 
      $password = trim($password, " ");
      
      $sql = "SELECT KorisnikID FROM korisnik WHERE Email = '$email' and Password = '$password'";
      $result = mysqli_query($link, $sql);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
         }
         
         $_SESSION['login_user'] = $email;
         header("location: ../index.php");
      }else {
         $_SESSION['error'] = "Email or Password is invalid!";
         header("location: ../index.php");
      }
   }
?>