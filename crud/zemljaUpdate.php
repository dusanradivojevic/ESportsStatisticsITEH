<?php
    session_start();
    include ('../oop/korisnik.php');
    include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];
        
        $countryName = mysqli_real_escape_string($link, $_GET['countryName']);
        $countryName = trim($countryName, " ");

        $shortCountryName = mysqli_real_escape_string($link, $_GET['shortCountryName']);
        $shortCountryName = trim($shortCountryName, " ");        

        $countryID = mysqli_real_escape_string($link, $_GET['countryID']);
        $countryID = trim($countryID, " ");

        $sql = "UPDATE zemlja SET Naziv = '$countryName', SkraceniNaziv = '$shortCountryName' WHERE ZemljaID = $countryID";
      
        if($korisnik->izmena($sql)) {
            header("location: ../index.php");
        }
        else{
            header("location: ../neuspesan.php");
        }
    }
    else{
        header("location: ../index.php");
    }
?>