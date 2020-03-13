<?php
   include("konekcija.php");
   include("../oop/korisnik.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = $_POST['email'];
      $email = trim($email, " ");
      $password = $_POST['pw']; 
      $password = trim($password, " ");
      
      $sql = "SELECT KorisnikID FROM korisnik WHERE Email = '$email' and Password = '$password'";
      $result = mysqli_query($link, $sql);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
         }
         
         $_SESSION['korisnik_object'] = new Korisnik($email);
         $_SESSION['login_user'] = $email;
         $_SESSION['success'] = "Successful login, welcome!";
         
         echo json_encode([
            "status" => 1,
            "message" => "Successful login, welcome!"
        ]);
         // header("location: ../index.php");
      }else {
         if(isset($_SESSION['message'])){
            unset($_SESSION['message']);
         }
         $_SESSION['error'] = "Invalid Email and Password!";
         echo json_encode([
            "status" => 0,
            "message" => "Invalid Email and Password!"
        ]);
         // header("location: ../index.php");
      }
   }
?>