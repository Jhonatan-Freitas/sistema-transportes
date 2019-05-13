<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=agenda","root","");
}catch(SQLException $e){
    echo "Erro ao conectar ao Bando de dados.";
}


