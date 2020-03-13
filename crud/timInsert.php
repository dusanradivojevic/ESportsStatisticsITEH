<?php
    session_start();
    include ('../oop/korisnik.php');
    // include ("../php/konekcija.php");

    if(isset($_SESSION['korisnik_object'])){
    //    $korisnik = $_SESSION['korisnik_object'];
        $korisnik = new Korisnik("");
        $korisnik->email = $_SESSION['login_user'];

        $teamName = $_POST['teamName'];
        $teamName = trim($teamName, " ");

        $sql1 = "INSERT INTO tim VALUES(";
        $sql2 = ", '$teamName')";
      
        $status = $korisnik->dodavanje("tim", "TimID", $sql1, $sql2);

        echo json_encode([
            "status" => $status ? 1 : 0,
            "message" => $status ? "New team is successfully inserted!" : "An error has occured!"
        ]);
    }
    else{
        echo json_encode([
            "status" => 0,
            "message" => "You are not logged in!"
        ]);
    }
?>