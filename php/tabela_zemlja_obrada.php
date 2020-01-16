<?php
    $db_server = "localhost";
    $db_db= "esports_iteh";
    $db_table = "zemlja"; // !
    $db_user = "root";
    $db_pass = "";
    
    $primaryKey = "ZemljaID";
    
    // Niz sa nazivima kolona iz baze. Prvi niz dodaje id atribut u svaki <tr>
    $columns = array(
        array(
                'db' => 'ZemljaID',
                'dt' => 'DT_RowId',
                'formatter' => function( $d, $row ) {
                    return $d;
                }
            ),
        array( 'db' => 'ZemljaID', 'dt' => 0 ),
        array( 'db' => 'Naziv',  'dt' => 1 ),
        array( 'db' => 'SkraceniNaziv',  'dt' => 2 )
    );

    // SQL server connection information
    $sql_details = array(
        'user' => $db_user,
        'pass' => $db_pass,
        'db'   => $db_db,
        'host' => $db_server
    );

    require( '../DataTables-1.10.4/examples/server_side/scripts/ssp.class.php' );

    echo json_encode(
        SSP::simple( $_GET, $sql_details, $db_table, $primaryKey, $columns )
    );

?>