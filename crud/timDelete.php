<?php
    session_start();
    include ('../oop/korisnik.php');
    include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");

        $teamID = mysqli_real_escape_string($link, $_GET['teamID']);
        $teamID = trim($teamID, " ");

        $sql = "DELETE FROM tim WHERE TimID = $teamID";
      
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