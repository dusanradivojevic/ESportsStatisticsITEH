<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];
        
        $playerID = mysqli_real_escape_string($link, $_POST['playerID']);
        $playerID = trim($playerID, " ");

        $name = $_POST['name'];
        $name = trim($name, " ");

        $surname = $_POST['surname'];
        $surname = trim($surname, " ");

        $nick = $_POST['nick'];
        $nick = trim($nick, " ");

        $year =  $_POST['year'];
        $year = trim($year, " ");

        $earnings = $_POST['earn'];
        $earnings = trim($earnings, " ");

        $game = $_POST['game'];
        $game = trim($game, " ");

        $gameID = $korisnik->citanje("igrica", "IgraID", "NazivIgre", "$game");

        $country = $_POST['country'];
        $country = trim($country, " ");

        $countryID = $korisnik->citanje("zemlja", "ZemljaID", "Naziv", "$country");

        $team = $_POST['team'];
        $team = trim($team, " ");

        $teamID = $korisnik->citanje("tim", "TimID", "NazivTima", "$team");

        $sql = "UPDATE igrac SET Ime = '$name', Prezime = '$surname', 
        Nickname = '$nick', GodinaRodjenja = $year, Zarada = $earnings, 
        Igrica = $gameID, ZemljaPorekla = $countryID, Tim = $teamID
         WHERE IgracID = $playerID";
        
        $status = $korisnik->izmena($sql);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "Player is successfully updated!" : "An error has occured!"
        ]);        
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>