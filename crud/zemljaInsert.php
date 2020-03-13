<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
  //      $korisnik = unserialize($_SESSION['korisnik_object']);
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $countryName = $_POST['countryName'];
        $countryName = trim($countryName, " ");

        $shortCountryName = $_POST['shortCountryName'];
        $shortCountryName = trim($shortCountryName, " ");  

        $sql1 = "INSERT INTO zemlja VALUES(";
        $sql2 = ", '$countryName', '$shortCountryName')";
      
        $status = $korisnik->dodavanje("zemlja", "ZemljaID", $sql1, $sql2);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "$countryName is successfully inserted!" : "An error has occured!"
        ]);
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>