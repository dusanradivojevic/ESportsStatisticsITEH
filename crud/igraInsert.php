<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik(""); 
        $korisnik->email = $_SESSION['login_user'];       

        $gameName = $_POST['gameName'];
        $gameName = trim($gameName, " ");

        $releaseYear = $_POST['releaseYear'];
        $releaseYear = trim($releaseYear, " ");  

        $sql1 = "INSERT INTO igrica VALUES(";
        $sql2 = ", '$gameName', $releaseYear)";
      
        $status = $korisnik->dodavanje("igrica", "IgraID", $sql1, $sql2);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "New game is successfully inserted!" : "An error has occured!"
        ]);          
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>