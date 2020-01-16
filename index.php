<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Sports</title>
    <link rel="stylesheet" href="css/indexStyle.css">
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
    <div class="nav">
        <div class="logo">
            <a href="#" >
                <img src="images/sword.png" alt="sword_logo" height="50" width="50">
            </a>
        </div>
        <ul>
            <li><a href="index.php">Homepage</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <div class="banner">        
        <h1></h1>
        <a href="#anchor" class="btn">
            Get Started   
        </a>      
    </div>
    <div class="about">
        <br>
        <br>
        <br>
        <br>
        <br>
        <a name="anchor"></a>
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

    <h1>Teams</h1><br>
    <table class="tim_tabela display" width="100%">
    <tbody>
    </tbody>
    </table>
    <hr>

    <br><h1>Countries</h1><br>
    <table class="zemlja_tabela display" width="100%">
    <tbody>
    </tbody>
    </table>
    <hr>

    <br><h1>Games</h1><br>
    <table class="igra_tabela display" width="100%">
    <tbody>
    </tbody>
    </table>
    <hr>

    <br><h1>Players</h1><br>
    <table class="igraci_tabela display" width="100%">
    <tbody>
    </tbody>
    </table>
    <hr>


    <div class="footer">
        <div class="row">
            <div class="col-1-of-3">
                Adress: 
                    <li>Blizzard Entertainment</li>
                    <li>Irvine, California</li>
                    <li>United States of America</li>
                
            </div>
            <div class="col-1-of-3">
                Contact: 
                <li>blizzard@blizzard.com</li>
            </div>
            <div class="col-1-of-3">
                <a href="#" >
                <img src="images/sword.png" alt="sword_logo" height="100" width="100">
                </a>
            </div>
        </div>      
    </div>
</body>
</html>