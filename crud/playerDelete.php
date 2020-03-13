<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $playerID = $_POST['playerID'];
        $playerID = trim($playerID, " ");

        $sql = "DELETE FROM igrac WHERE IgracID = $playerID";
      
        $status = $korisnik->brisanje($sql);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "Player with ID: $playerID is deleted!" : "An error has occured!"
        ]);   
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>