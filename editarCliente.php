<?php

session_start();

require 'repositorioCliente.php';
require 'cliente.php';
require 'conexao.php';

$cliente = new Cliente();
$clienteDao = new RepositorioCliente($con);

