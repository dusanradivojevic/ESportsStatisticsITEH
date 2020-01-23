<?php
    session_start();
    include ('../oop/korisnik.php');
    include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $teamName = mysqli_real_escape_string($link, $_GET['teamName']);
        $teamName = trim($teamName, " ");

        $teamID = mysqli_real_escape_string($link, $_GET['teamID']);
        $teamID = trim($teamID, " ");

        $sql = "UPDATE tim SET NazivTima = '$teamName' WHERE TimID = $teamID";
      
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