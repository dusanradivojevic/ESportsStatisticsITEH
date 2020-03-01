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
        if($gameID == null){
            // return;
            header("location: ../index.php");
        }

        $country = mysqli_real_escape_string($link, $_GET['playerCountry']);
        $country = trim($country, " ");

        $countryID = $korisnik->citanje("zemlja", "ZemljaID", "Naziv", "$country");
        if($countryID == null){
            //return;
            header("location: ../index.php");
        }

        $team = mysqli_real_escape_string($link, $_GET['playerTeam']);
        $team = trim($team, " ");

        $teamID = $korisnik->citanje("tim", "TimID", "NazivTima", "$team");
        if($teamID == null){
            //return;
            header("location: ../index.php");
        }

        $sql = "UPDATE igrac SET Ime = '$name', Prezime = '$surname', 
        Nickname = '$nick', GodinaRodjenja = $year, Zarada = $earnings, 
        Igrica = $gameID, ZemljaPorekla = $countryID, Tim = $teamID
         WHERE IgracID = $playerID";
      
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