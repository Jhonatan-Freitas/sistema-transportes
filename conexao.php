<?php
require 'config.php';

try{
	$con = new PDO(DB_DNS, USER, SENHA);
	
}catch(PDOException $e){
	echo "Falha na conexao";
	$e->getMessege();
	die();
}

