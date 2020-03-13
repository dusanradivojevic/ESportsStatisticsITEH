<?php
   session_start();

   if(isset($_SESSION['login_user'])) {
        session_unset();        
        session_destroy();
   }

   echo json_encode([
      "status" => 1,
      "message" => "Goodbye!"
  ]);
?>