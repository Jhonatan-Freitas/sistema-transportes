<?php

require_once '../conexao/conexao.php';
require_once 'clienteDao.php';

$cliente = [];

$cliente['nome'] = $_POST['nome'];
$cliente['cpf'] = $_POST['cpf'];
$cliente['telefone'] = $_POST['telefone'];
$cliente['email'] = $_POST['email'];

inserirCliente($cliente, $con);

var_dump($_POST);



