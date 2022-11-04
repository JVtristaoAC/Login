<?php

namespace App\DAO;

use App\Model\LoginModel;
use \PDO;


class LoginDAO extends DAO
{

    
    public function __construct()
    {
        parent::__construct();       
    }

    public function selectByEmailAndSenha($email, $senha)
    {
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = sha1(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\LoginModel"); // Retornando um objeto específico PessoaModel
    }

    public function insert(LoginModel $model)
    {
        
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, sha1(?))";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome); 
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->execute();

    }

    public function update(LoginModel $model)
    {
        $sql = "UPDATE usuario SET nome=?, email=?, senha=? WHERE id=?";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome); 
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();

    }

    public function select()
    {
        $sql ="SELECT * FROM usuario";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/LoginModel.php';

        $sql = "SELECT * FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\LoginModel");
    }

    public function delete(int $id)
    {
        $sql ="DELETE FROM usuario WHERE id = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
        
    }

}