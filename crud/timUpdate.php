<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $teamName = $_POST['teamName'];
        $teamName = trim($teamName, " ");

        $teamID = $_POST['teamID'];
        $teamID = trim($teamID, " ");

        $sql = "UPDATE tim SET NazivTima = '$teamName' WHERE TimID = $teamID";
      
        $status = $korisnik->izmena($sql);
        
        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "Team $teamName is successfully updated!" : "An error has occured!"
        ]);
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>