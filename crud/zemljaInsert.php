<?php
    session_start();
    include ('../oop/korisnik.php');
    include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
  //      $korisnik = unserialize($_SESSION['korisnik_object']);
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $countryName = mysqli_real_escape_string($link, $_GET['countryName']);
        $countryName = trim($countryName, " ");

        $shortCountryName = mysqli_real_escape_string($link, $_GET['shortCountryName']);
        $shortCountryName = trim($shortCountryName, " ");  

        $sql1 = "INSERT INTO zemlja VALUES(";
        $sql2 = ", '$countryName', '$shortCountryName')";
      
        if($korisnik->dodavanje("zemlja", "ZemljaID", $sql1, $sql2)) {
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