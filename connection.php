<?php

$connection = new mysqli(
    'localhost',   
    'root',
    'coderslab'
    // , 'test_3'        // wersja 1
    );
   
if ($connection->connect_error){
    die('MAMY BŁĄD: ' . $connection->connect_error);
}
echo "Udane połączenie";


$result = $connection->query('USE test_3');   // wersja 2

//$result = $connection->query("CREATE DATABASE test_3");       // usówamy tworzenie

if ($result == false){
    die('BLAD SQL: ' . $connection->error);
}
else{
    echo 'Baza utworzona';
}

$connection->close();
$connection = null;