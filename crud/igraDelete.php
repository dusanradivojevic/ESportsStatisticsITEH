<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $gameID = $_POST['gameID'];
        $gameID = trim($gameID, " ");

        $sql = "DELETE FROM igrica WHERE IgraID = $gameID";
      
        $status = $korisnik->brisanje($sql);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "Game with ID: $gameID is deleted!" : "An error has occured!"
        ]);
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>