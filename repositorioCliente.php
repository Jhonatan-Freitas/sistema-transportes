<?php

class RepositorioCliente {
    private $conn;

    public function __construct(PDO $conexao){
        $this->conn = $conexao;
    }

    public function salvar(Cliente $cliente){
        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();

        $sql = "INSERT INTO cliente (nome, cpf, telefone, email) VALUES(?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $cpf);
        $stmt->bindParam(3, $telefone);
        $stmt->bindParam(4, $email);
        $stmt->execute();
    }

    public function buscar(){
        $sql = "SELECT * FROM cliente";
        $rs = $this->conn->query($sql);     
        return $rs->fetchAll(PDO::FETCH_CLASS, 'Cliente');
    }

    

    public function remover($id){
        $sql = "DELETE FROM cliente WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function update(Cliente $cliente){
        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();
        $id = $cliente->getId();
        $sql = "UPDATE cliente SET nome=?, cpf=?, telefone=?, email=? WHERE id= ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $cpf);
        $stmt->bindParam(3, $telefone);
        $stmt->bindParam(4, $email);
        $stmt->bindParam(5, $id);
        $stmt->execute();
    }
}
