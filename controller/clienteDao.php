
<?php

class ClienteDao{

    private $con;

     public function __construct($con){
        $this->con = $con;
    }

function inserirCliente(Cliente $cliente){
    $nome = $cliente->getNome();
    $cpf = $cliente->getCpf();
    $telefone = $cliente->getTelefone();
    $email = $cliente->getEmail();

    $query = "insert into cliente (nome, cpf, telefone, email) values(?,?,?,?)";
    $stmt = $this->con->prepare($query);
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $cpf);
    $stmt->bindParam(3, $telefone);
    $stmt->bindParam(4, $email);
    $stmt->execute();
}

function buscarClinte(){
    $query = "select * from cliente";
    $stmt = $con->prepare($query);
    $rs = $stmt->execute();
    return $rs;
}


function removerCliente($id, $con){
    $query = "delete from cliente where id = ?";
    $stmt = $con->prepare($query);
    $stmt->bindParam(1, $id);
    $stmt->execute();
}
    
function buscarClintePorId($id, $con){
    $query = "select * from cliente where id = ?";
    $stmt = $con->prepare($query);
    $stmt->bindParam(1, $id);
    $rs = $stmt->execute();
    return $rs;
}

function editarCliente($cliente, $con){
    $nome = $cliente['nome'];
    $cpf = $cliente['cpf'];
    $telefone = $cliente['telefone'];
    $email = $cliente['email'];
    $id = $cliente['id'];

    $query = "update cliente set nome=?, cpf=?, telefone=?, email=?, where id =?";
    $stmt = $con->prepare($query);
    $stmt = $con->prepare($query);
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $cpf);
    $stmt->bindParam(3, $telefone);
    $stmt->bindParam(4, $email);
    $stmt->bindParam(5, $id);
    $stmt->execute();
}

}