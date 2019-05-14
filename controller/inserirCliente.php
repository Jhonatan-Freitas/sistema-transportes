<?php
session_start();

require_once '../conexao/conexao.php';
require_once 'cliente.class.php';
require_once 'clienteDao.php';

$cliente = new Cliente();
$clienteDao = new ClienteDao($con);
$cliente->setNome($_POST['nome']);
$cliente->setCpf($_POST['cpf']);
$cliente->setTelefone($_POST['telefone']);
$cliente->setEmail($_POST['email']);

$clienteDao->inserirCliente($cliente);

header('locale: ../clienteFormulario.php');
die();


