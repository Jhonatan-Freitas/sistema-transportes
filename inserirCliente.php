<?php
session_start();

require 'repositorioCliente.php';
require 'cliente.php';
require 'conexao.php';

$cliente = new Cliente();
$clienteDao = new RepositorioCliente($con);

$cliente->setNome($_POST['nome']);
$cliente->setCpf($_POST['cpf']);
$cliente->setTelefone($_POST['telefone']);
$cliente->setEmail($_POST['email']);

$clienteDao->salvar($cliente);

header('location: cadCliente.php');
die();