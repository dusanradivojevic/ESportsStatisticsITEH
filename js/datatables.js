// PLAYERS
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
// TEAMS
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
// GAMES
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
// COUNTRIES
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