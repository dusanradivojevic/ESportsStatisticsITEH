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

        $sql1 = "INSERT INTO tim VALUES(";
        $sql2 = ", '$teamName')";
      
        if($korisnik->dodavanje("tim", "TimID", $sql1, $sql2)) {
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