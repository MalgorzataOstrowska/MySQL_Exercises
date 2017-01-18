<?php

$connection = new mysqli(
    'localhost',
    //'nieistniejacy_serwer_MySQL',    
    'root',
    //'nieistniejacy_uzytkownik',
    'coderslab'
    //'byle_jakie_haslo',
    //null
    );
   
if ($connection->connect_error){
    die('MAMY BŁĄD: ' . $connection->connect_error);
}
echo "Udane połączenie";

$connection->close();
$connection = null;