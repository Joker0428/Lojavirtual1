<?php



class DAODepartamento{
    public function cadastrar(Departamento $departamento){
        $sql = "INSERT INTO cliente
            VALUES (default, :nome, :email, :telefone,:cpf, :endereco, :cep)";

        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $cliente->getNome());

        $con->execute();

        echo "Cadastro com sucesso";



    }
}
?>