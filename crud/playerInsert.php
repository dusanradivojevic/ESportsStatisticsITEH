<?php
    session_start();
    include ('../oop/korisnik.php');
    include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik(""); 
        $korisnik->email = $_SESSION['login_user'];       

        $name = mysqli_real_escape_string($link, $_GET['playerName']);
        $name = trim($name, " ");

        $surname = mysqli_real_escape_string($link, $_GET['playerSurname']);
        $surname = trim($surname, " ");

        $nick = mysqli_real_escape_string($link, $_GET['playerNickname']);
        $nick = trim($nick, " ");

        $year = mysqli_real_escape_string($link, $_GET['birthYear']);
        $year = trim($year, " ");

        $earnings = mysqli_real_escape_string($link, $_GET['earnings']);
        $earnings = trim($earnings, " ");

        $game = mysqli_real_escape_string($link, $_GET['playerGame']);
        $game = trim($game, " ");

        $gameID = $korisnik->citanje("igrica", "IgraID", "NazivIgre", "$game");
        if($gameID == NULL){
            header("location: ../index.php");
        }

        $country = mysqli_real_escape_string($link, $_GET['playerCountry']);
        $country = trim($country, " ");

        $countryID = $korisnik->citanje("zemlja", "ZemljaID", "Naziv", "$country");
        if($countryID == null){
            header("location: ../index.php");
        }

        $team = mysqli_real_escape_string($link, $_GET['playerTeam']);
        $team = trim($team, " ");

        $teamID = $korisnik->citanje("tim", "TimID", "NazivTima", "$team");
        if($teamID == null){
            header("location: ../index.php");
        }

        $sql1 = "INSERT INTO igrac VALUES(";
        $sql2 = ", '$name', '$surname', '$nick', $year, $earnings, $gameID, $countryID, $teamID)";
      
        if($korisnik->dodavanje("igrac", "IgracID", $sql1, $sql2)) {
            header("location: ../index.php");
        }
        else{
            // header("location: ../neuspesan.php");
        }
    }
    else{
        header("location: ../index.php");
    }
?>