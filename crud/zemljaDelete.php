<?php
    session_start();
    include ('../oop/korisnik.php');
    include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");

        $countryID = mysqli_real_escape_string($link, $_GET['countryID']);
        $countryID = trim($countryID, " ");

        $sql = "DELETE FROM zemlja WHERE ZemljaID = $countryID";
      
        if($korisnik->brisanje($sql)) {
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