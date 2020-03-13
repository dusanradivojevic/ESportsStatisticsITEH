<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik(""); 
        $korisnik->email = $_SESSION['login_user'];       

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

        $sql1 = "INSERT INTO igrac VALUES(";
        $sql2 = ", '$name', '$surname', '$nick', $year, $earnings, $gameID, $countryID, $teamID)";
      
        $status = $korisnik->dodavanje("igrac", "IgracID", $sql1, $sql2);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "New player is successfully inserted!" : "An error has occured!"
        ]);
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>