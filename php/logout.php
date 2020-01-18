<?php
   session_start();

   if(isset($_SESSION['login_user'])) {
        unset($_SESSION['login_user']);
        unset($_SESSION['korisnik_object']);
        session_destroy();
   }

   header("location: ../index.php");
?>