<?php



class DAOCliente{
    public function cadastrar(Cliente $cliente){
        $sql = "INSERT INTO cliente
            VALUES (default, :nome, :email, :telefone,:cpf, :endereco, :cep)";

        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $cliente->getNome());
        $con->bindValue(":email", $cliente->getEmail());
        $con->bindValue(":telefone", $cliente->getTelefone());
        $con->bindValue(":cpf", $cliente->getCpf());
        $con->bindValue(":endereco", $cliente->getEndereco());
        $con->bindValue(":cep", $cliente->getCep());
        $con->execute();

        echo "Cadastro com sucesso";



    }
}
?>