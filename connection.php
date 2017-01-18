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


$result = $connection->query("CREATE DATABASE test_3");
//$result = $connection->query("BYLE CO DATABASE test_3");

if ($result == false){
    die('BLAD SQL: ' . $connection->error);
}
else{
    echo 'Baza utworzona';
}

$connection->close();
$connection = null;