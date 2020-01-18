<?php 

    session_start();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Sports</title>
    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/tables_crud.css">
    <script src="js/modal.js"></script>
    <script src="js/tables_crud.js"></script>

    <link rel="icon" href="images/sword.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.min.css" />
    <script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".tim_tabela").DataTable({
                "columns": [
                        { "title": "TeamID" },
                        { "title": "Team name" }
                    ],
                "ajax": "php/tabela_tim_obrada.php",
                "processing": true,
                "serverSide": true
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $(".zemlja_tabela").DataTable({
                "columns": [
                        { "title": "CountryID" },
                        { "title": "Country name" },
                        { "title": "Short name" }
                    ],
                "ajax": "php/tabela_zemlja_obrada.php",
                "processing": true,
                "serverSide": true
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $(".igra_tabela").DataTable({
                "columns": [
                        { "title": "GameID" },
                        { "title": "Game name" },
                        { "title": "Release year" }
                    ],
                "ajax": "php/tabela_igrica_obrada.php",
                "processing": true,
                "serverSide": true
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $(".igraci_tabela").DataTable({
                "columns": [
                        { "title": "PlayerID" },
                        { "title": "Name" },
                        { "title": "Surname" },
                        { "title": "Nickname" },
                        { "title": "Birth year" },
                        { "title": "Earnings ($)" },
                        { "title": "Game" },
                        { "title": "Country" },
                        { "title": "Team" }
                    ],
                "ajax": "php/tabela_igrac_obrada.php",
                "processing": true,
                "serverSide": true
            });
        });
    </script>

    

</head>
<body>

    <?php include ('html/header.html'); ?>

    <div class="banner">        
        <h1></h1>
        <a href="#teamAnchor" class="btn">
            Teams
        </a>
        <a href="#countryAnchor" class="btn">
            Countries   
        </a>  
        <a href="#getStartedAnchor" class="btn">
            Get Started   
        </a>
        <a href="#gameAnchor" class="btn">
            Games  
        </a>  
        <a href="#playerAnchor" class="btn">
            Players  
        </a>          
    </div>
    <div class="about">
        <a name="getStartedAnchor"></a>
        <h1><div class="logo"><span>e</span>Sports largest tournaments</div></h1>
        <div class="projekti" style="background-image: url('/images/css-lattice-pattern.png');">
            <a name="anchor"></a>
            <div class="col-1-of-3 card">
                <img src="images/dota2international.png" alt="international_2019">
                <h3>The International 2019</h3>
                <p>Game: Dota 2<br><br>This is the tournament where the top 18 teams from around the globe battle for the aegis of champions and the biggest prize pool in history of esports.</p>
            </div>
            <div class="col-1-of-3 card">
                <img src="images/fortnite.jpg" alt="fortnite">
                <h3>Fortnite World Cup Finals 2019</h3>
                <p>Game: Fortnite<br><br>With the prize pool of more than 15 million dollars this tournamet definitely represents one epic battleground with intense and rough battles of the best.</p>
            </div>
            <div class="col-1-of-3 card">
                <img src="images/pubg.jpg" alt="pubg-gc">
                <h3>PUBG Global Championship</h3>
                <p>Game: Playerunknown's battlegrounds<br><br>First of its kind. Although PUBG came out only 2 years ago, it was extremely fast accepted by gamers from all around the world and the need for tournament was soon at its peak.</p>
            </div>
        </div>
    </div>

<!-- LOG IN FORM -->
    <?php
       // include ('php/session.php');
        if(!isset($_SESSION['login_user'])){
        ?>
        <button class="open-button" onclick="openLoginForm()">Sign in</button>

        <div class="form-popup" id="myLoginForm">
            <form action="php/login.php" method="post" class="form-container">

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="pw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pw" required>

                <button type="submit" class="btn" >Login</button>
                <button type="button" class="btn cancel" onclick="closeLoginForm()">Close</button>
            </form>
        </div>
        <?php
        }
        else{
            ?>
 <!-- LOG OUT FORM -->
            <button class="open-button" onclick="openLogoutForm()" class="logoutBtn">Sign out</button>

            <div class="form-popup" id="myLogoutForm">
                <form action="php/logout.php" method="post" class="form-container">

                    <button type="submit" class="btn" >Logout</button>
                    <button type="button" class="btn cancel" onclick="closeLogoutForm()">Close</button>
                </form>
            </div>
            
            <?php
        }
            ?>
            
<!-- REGISTRATION FORM -->
    <div class="form-popup" id="myRegistrationForm">
        <form action="php/registration.php" method="post" class="form-container">

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="pw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pw" required>

            <button type="submit" class="btn">Submit</button>
            <button type="button" class="btn cancel" onclick="closeRegistrationForm()">Close</button>
        </form>
    </div>
    
        
<!-- TABLES -->
    <a name="teamAnchor"></a>
    <h1>Teams</h1><br>
    <table class="tim_tabela display" width="100%">
    <tbody>
    </tbody>
    </table>
    <div class="crud">
        <!-- Insert form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('insert-team-popup-form')">Insert</button>
        </div>    
        <div id="insert-team-popup-form" class="crudModal">
            <div class="form-popup-insert-team" id="popupForm-insert-team">
                <form action="crud/timInsert.php" class="form-container-insert-team" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="teamName"><b>Team name:</b></label>
                    <input type="text" id="teamName" placeholder="Name of the team" name="teamName" required>
                    <button type="submit" class="btn">Insert</button>
                    <button type="button" class="btn cancel" onclick="closeForm('insert-team-popup-form')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Update form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('update-team-popup-form')">Update</button>
        </div>
        <div id="update-team-popup-form" class="crudModal">
            <div class="form-popup-update-team" id="popupForm-update-team">
                <form action="crud/timUpdate.php" class="form-container-update-team" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="teamID"><b>Team ID:</b></label>
                    <input type="number" id="teamID" placeholder="Id of the team" name="teamID" required>
                    <label for="teamName"><b>Team name:</b></label>
                    <input type="text" id="teamName" placeholder="Name of the team" name="teamName" required>
                    <button type="submit" class="btn">Update</button>
                    <button type="button" class="btn cancel" onclick="closeForm('update-team-popup-form')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Delete form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('delete-team-popup-form')">Delete</button>
        </div>
        <div id="delete-team-popup-form" class="crudModal">
            <div class="form-popup-delete-team" id="popupForm-delete-team">
                <form action="crud/timDelete.php" class="form-container-delete-team" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="teamID"><b>Team ID:</b></label>
                    <input type="number" id="teamID" placeholder="Id of the team" name="teamID" required>
                    <button type="submit" class="btn">Delete</button>
                    <button type="button" class="btn cancel" onclick="closeForm('delete-team-popup-form')">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    
    <a name="countryAnchor"></a>
    <br><h1>Countries</h1><br>
    <table class="zemlja_tabela display" width="100%">
    <tbody>
    </tbody>
    </table>
    <div class="crud">
        <!-- Insert form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('insert-country-popup-form')">Insert</button>
        </div>    
        <div id="insert-country-popup-form" class="crudModal">
            <div class="form-popup-insert-country" id="popupForm-insert-country">
                <form action="crud/zemljaInsert.php" class="form-container-insert-country" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="countryName"><b>Country name:</b></label>
                    <input type="text" id="countryName" placeholder="Name of the country" name="countryName" required>
                    <label for="shortCountryName"><b>Short name:</b></label>
                    <input type="text" id="shortCountryName" placeholder="Short name of the country" name="shortCountryName" required>
                    <button type="submit" class="btn">Insert</button>
                    <button type="button" class="btn cancel" onclick="closeForm('insert-country-popup-form')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Update form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('update-country-popup-form')">Update</button>
        </div>
        <div id="update-country-popup-form" class="crudModal">
            <div class="form-popup-update-country" id="popupForm-update-country">
                <form action="crud/zemljaUpdate.php" class="form-container-update-country" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="countryID"><b>Country ID:</b></label>
                    <input type="number" id="countryID" placeholder="Id of the country" name="countryID" required>
                    <label for="countryName"><b>Country name:</b></label>
                    <input type="text" id="countryName" placeholder="Name of the country" name="countryName" required>
                    <label for="shortCountryName"><b>Short name:</b></label>
                    <input type="text" id="shortCountryName" placeholder="Short name of the country" name="shortCountryName" required>
                    <button type="submit" class="btn">Update</button>
                    <button type="button" class="btn cancel" onclick="closeForm('update-country-popup-form')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Delete form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('delete-country-popup-form')">Delete</button>
        </div>
        <div id="delete-country-popup-form" class="crudModal">
            <div class="form-popup-delete-country" id="popupForm-delete-country">
                <form action="crud/zemljaDelete.php" class="form-container-delete-country" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="countryID"><b>Country ID:</b></label>
                    <input type="number" id="countryID" placeholder="Id of the team" name="countryID" required>
                    <button type="submit" class="btn">Delete</button>
                    <button type="button" class="btn cancel" onclick="closeForm('delete-country-popup-form')">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <a name="gameAnchor"></a>
    <br><h1>Games</h1><br>
    <table class="igra_tabela display" width="100%">
    <tbody>
    </tbody>
    </table>
    <div class="crud">
        <!-- Insert form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('insert-game-popup-form')">Insert</button>
        </div>    
        <div id="insert-game-popup-form" class="crudModal">
            <div class="form-popup-insert-game" id="popupForm-insert-game">
                <form action="crud/igraInsert.php" class="form-container-insert-game" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="gameName"><b>Game name:</b></label>
                    <input type="text" id="gameName" placeholder="Name of the game" name="gameName" required>
                    <label for="releaseYear"><b>Release year:</b></label>
                    <input type="number" id="releaseYear" placeholder="Year of release" name="releaseYear" required>
                    <button type="submit" class="btn">Insert</button>
                    <button type="button" class="btn cancel" onclick="closeForm('insert-game-popup-form')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Update form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('update-game-popup-form')">Update</button>
        </div>
        <div id="update-game-popup-form" class="crudModal">
            <div class="form-popup-update-game" id="popupForm-update-game">
                <form action="crud/igraUpdate.php" class="form-container-update-game" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="gameID"><b>Game ID:</b></label>
                    <input type="number" id="gameID" placeholder="Id of the game" name="gameID" required>
                    <label for="gameName"><b>Game name:</b></label>
                    <input type="text" id="gameName" placeholder="Name of the game" name="gameName" required>
                    <label for="releaseYear"><b>Release year:</b></label>
                    <input type="number" id="releaseYear" placeholder="Year of release" name="releaseYear" required>
                    <button type="submit" class="btn">Update</button>
                    <button type="button" class="btn cancel" onclick="closeForm('update-game-popup-form')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Delete form -->
        <div class="open-btn-table">
            <button class="open-button-table" onclick="openForm('delete-game-popup-form')">Delete</button>
        </div>
        <div id="delete-game-popup-form" class="crudModal">
            <div class="form-popup-delete-game" id="popupForm-delete-game">
                <form action="crud/igraDelete.php" class="form-container-delete-game" method="get">
                    <h2>Enter necessary information</h2>
                    <label for="gameID"><b>Game ID:</b></label>
                    <input type="number" id="gameID" placeholder="Id of the game" name="gameID" required>
                    <button type="submit" class="btn">Delete</button>
                    <button type="button" class="btn cancel" onclick="closeForm('delete-game-popup-form')">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    
    <a name="playerAnchor"></a>
    <br><h1>Players</h1><br>
    <table class="igraci_tabela display" width="100%">
    <tbody>
    </tbody>
    </table>
    <hr>

    <?php include ('html/footer.html'); ?>
</body>
</html>