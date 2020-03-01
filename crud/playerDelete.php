<?php
    session_start();
    include ('../oop/korisnik.php');
    include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $playerID = mysqli_real_escape_string($link, $_GET['playerID']);
        $playerID = trim($playerID, " ");

        $sql = "DELETE FROM igrac WHERE IgracID = $playerID";
      
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