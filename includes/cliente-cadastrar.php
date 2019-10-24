<?php
  include 'model/conexao.php';
  include 'model/cliente.class.php';
  include 'dao/cliente.dao.php';

  if ($_POST){

    try{
        $obj = new Cliente();
        $obj->setNome($_Post['nome']);
        $obj->setEmail($_Post['email']);
        $obj->setTelefone($_Post['telefone']);
        $obj->setCpf($_Post['cpf']);
        $obj->setEndereco($_Post['endereco']);
        $obj->setCep($_Post['cep']);
        
        $DAO = new DAOCliente();
        $DAO-> cadastrar($obj);

    }catch(Exception $e){
        echo $e->getMessage();
    }
  }



?>