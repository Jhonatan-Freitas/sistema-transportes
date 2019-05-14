<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciando bootstrap curso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">

    <head>

    <body>

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light  menu">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cadastrar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="clienteForm.php">Cliente</a>
                                <a class="dropdown-item" href="#">Frota</a>
                                <a class="dropdown-item" href="#">Funcionário</a>
                            </div>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Sair</a>
                              </li>
                    </ul>
                </div>
            </nav>