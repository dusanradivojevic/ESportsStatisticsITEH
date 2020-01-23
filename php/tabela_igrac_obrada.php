<?php
    $db_server = "localhost";
    $db_db= "esports_iteh";
    $db_table = "igrac"; // !
    $db_user = "root";
    $db_pass = "";
    
    $primaryKey = "IgracID";
    
    // Niz sa nazivima kolona iz baze. Prvi niz dodaje id atribut u svaki <tr>
    $columns = array(
        array(
                'db' => 'IgracID',
                'dt' => 'DT_RowId',
                'formatter' => function( $d, $row ) {
                    return $d;
                }
            ),
        array( 'db' => 'IgracID', 'dt' => 0 ),
        array( 'db' => 'Ime',  'dt' => 1 ),
        array( 'db' => 'Prezime',  'dt' => 2 ),
        array( 'db' => 'Nickname',  'dt' => 3 ),
        array( 'db' => 'GodinaRodjenja',  'dt' => 4 ),
        array( 'db' => 'Zarada',  'dt' => 5 ),
        array( 'db' => 'Igrica',  'dt' => 6 ),
        array( 'db' => 'ZemljaPorekla',  'dt' => 7 ),
        array( 'db' => 'Tim',  'dt' => 8 )
    );

    // SQL server connection information
    $sql_details = array(
        'user' => $db_user,
        'pass' => $db_pass,
        'db'   => $db_db,
        'host' => $db_server
    );

    require( '../DataTables-1.10.4/examples/server_side/scripts/ssp.class.php' );

    //treba da se uhvati array kog vraca ssp simple i da se izmeni na mestima koja treba
    $data = SSP::simple( $_GET, $sql_details, $db_table, $primaryKey, $columns );


    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }     
  
    
    // Changing json
    // Game
    foreach ($data['data'] as $key => $entry) {
        $sql = "SELECT NazivIgre FROM igrica WHERE IgraID = " . $data['data'][$key]['6'];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            $data['data'][$key]['6'] = $row["NazivIgre"];
        }
        else{
            $data['data'][$key]['6'] = "Error";
        }       
    }
    // Country
    foreach ($data['data'] as $key => $entry) {
        $sql = "SELECT Naziv FROM zemlja WHERE ZemljaID = " . $data['data'][$key]['7'];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            $data['data'][$key]['7'] = $row["Naziv"];
        }
        else{
            $data['data'][$key]['7'] = "Error";
        }   
    }
    // Team
    foreach ($data['data'] as $key => $entry) {
        $sql = "SELECT NazivTima FROM tim WHERE TimID = " . $data['data'][$key]['8'];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            $data['data'][$key]['8'] = $row["NazivTima"];
        }
        else{
            $data['data'][$key]['8'] = "Error";
        }   
    }

    $conn->close();
    
    echo json_encode(
        $data
    );

?>