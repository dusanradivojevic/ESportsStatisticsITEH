<?php
   

   if(!isset($_SESSION['login_user'])){
      $_SESSION['login_user'] = array();
      header('Location: .'); 
      exit();
   }
   
   
   
?>