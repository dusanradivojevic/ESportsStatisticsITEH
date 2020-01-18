<?php
    session_start();
    include ('../oop/korisnik.php');
    include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");

        $gameName = mysqli_real_escape_string($link, $_GET['gameName']);
        $gameName = trim($gameName, " ");

        $releaseYear = mysqli_real_escape_string($link, $_GET['releaseYear']);
        $releaseYear = trim($releaseYear, " ");  

        $sql1 = "INSERT INTO igrica VALUES(";
        $sql2 = ", '$gameName', $releaseYear)";
      
        if($korisnik->dodavanje("igrica", "IgraID", $sql1, $sql2)) {
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