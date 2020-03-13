<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $countryID = $_POST['countryID'];
        $countryID = trim($countryID, " ");

        $sql = "DELETE FROM zemlja WHERE ZemljaID = $countryID";
      
        $status = $korisnik->brisanje($sql);
        
        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "Country with ID: $countryID is deleted!" : "An error has occured!"
        ]);
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>