<?php

class Korisnik
{    
    public $email;

    public function __construct($e)
    {
        $email = $e;
    }

    public function __destruct()
    {
    }

    public function izmena($sql)
    {  
        include '../php/konekcija.php'; 

        if(mysqli_query($link, $sql)) {
            return true;
        }
        else{
            return false;
        }
    }

    public function brisanje($sql)
    {      
        include '../php/konekcija.php'; 

        if(mysqli_query($link, $sql)) {
            return true;
        }
        else{
            return false;
        }
    }
    
    public function dodavanje($tabela, $id_tabele, $sql1, $sql2)
    {
        include '../php/konekcija.php'; 
        
        $sql = "SELECT $id_tabele FROM $tabela ORDER BY $id_tabele DESC";
        $result = mysqli_query($link, $sql);
        $row = $result->fetch_assoc();
        $id = $row["$id_tabele"] + 1;

        $sql = $sql1 . $id . $sql2;

        if(mysqli_query($link, $sql)) {
            return true;
        }
        else{
            return false;
        }
    }    

    public function citanje($tabela, $id_tabele, $nazivKolone, $vrednostKolone)
    {
        include '../php/konekcija.php'; 
        
        $uslov = $nazivKolone . " LIKE '%" . $vrednostKolone . "%'";
        $sql = "SELECT $id_tabele FROM $tabela WHERE $uslov"; // SELECT IgraID FROM Igra WHERE NazivIgre LIKE '%Dota 2%'
        $result = mysqli_query($link, $sql);
        $row = $result->fetch_assoc();
        if($row == NULL){
            return $row;
        }
        else{
            $id = $row["$id_tabele"];
        }

        return $id;    
    } 
}