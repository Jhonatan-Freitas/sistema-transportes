<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=transportadora","root","");
}catch(SQLException $e){
    echo "Erro ao conectar ao Bando de dados.";
}


