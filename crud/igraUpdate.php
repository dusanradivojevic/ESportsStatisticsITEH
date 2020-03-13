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

        $gameID = $_POST['gameID'];
        $gameID = trim($gameID, " ");

        $sql = "UPDATE igrica SET NazivIgre = '$gameName', GodinaNastanka = $releaseYear WHERE IgraID = $gameID";
      
        $status = $korisnik->izmena($sql);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "Game with ID: $gameID is successfully updated!" : "An error has occured!"
        ]);
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>