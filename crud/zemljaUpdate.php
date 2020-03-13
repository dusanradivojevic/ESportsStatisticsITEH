<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];
        
        $countryName = $_POST['countryName'];
        $countryName = trim($countryName, " ");

        $shortCountryName = $_POST['shortCountryName'];
        $shortCountryName = trim($shortCountryName, " ");        

        $countryID = $_POST['countryID'];
        $countryID = trim($countryID, " ");

        $sql = "UPDATE zemlja SET Naziv = '$countryName', SkraceniNaziv = '$shortCountryName' WHERE ZemljaID = $countryID";
      
        $status = $korisnik->izmena($sql);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "Country is successfully updated!" : "An error has occured!"
        ]);
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>