<?php
    include("konekcija.php");
    include("../oop/korisnik.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $email = $_POST['email'];
        $email = trim($email, " ");
        $password = $_POST['pw']; 
        $password = trim($password, " ");
        
        $sql = "SELECT KorisnikID FROM korisnik WHERE Email = '$email'";
        $result = mysqli_query($link, $sql);
        
        $count = mysqli_num_rows($result);
        
        // If there is no results than this new user is unique
            
        if($count == 0) {
            if(isset($_SESSION['error'])){
                unset($_SESSION['error']);
            }

            $sql = "SELECT KorisnikID FROM korisnik ORDER BY KorisnikID DESC";
            $result = mysqli_query($link, $sql);
            $row = $result->fetch_assoc();
            $id = $row["KorisnikID"] + 1;


            $sql = "INSERT INTO korisnik VALUES ($id, '$email', '$password')";

            if(mysqli_query($link, $sql)) {
                $_SESSION['korisnik_object'] = new Korisnik($email);
                $_SESSION['login_user'] = $email;
                echo json_encode([
                    "status" => 1,
                    "message" => "Registration successful!"
                ]);
            }
            else{
                $_SESSION['error'] = "Email or Password is invalid!";
                echo json_encode([
                    "status" => 0,
                    "message" => "Email or Password is invalid!"
                ]);
            }
            
        }else {
            $_SESSION['error'] = "User with that email already exists!";
            echo json_encode([
                "status" => 0,
                "message" => "User with that email already exists!"
            ]);
        }
    }

?>