<?php

require_once 'conexao/conexao.php';
require_once 'clienteDao.php';

$cliente = [];

$cliente['nome'];
$cliente['cpf'];
$cliente['telefone'];
$cliente['email'];

inserirCliente($cliente, $con);


