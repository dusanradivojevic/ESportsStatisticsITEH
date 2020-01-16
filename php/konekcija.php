<?php
    $mysql_server = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_db = "esports_iteh";

    $link = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_db);

    if (!$link) {
        printf("Konekcija neuspešna: %s\n", mysqli_connect_error() . PHP_EOL);
        exit;
    }
?>