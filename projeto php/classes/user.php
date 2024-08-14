<?php
// INCLUINDO O AQUIVO INDEX.PHP
include_once('cadastro.php');

// CRIANDO A CLASSE USUARIO
class user
{
    public $name   = null;
    public $user   = $_POST['usuario'];
    public $password   = $_POST['senha'];


    // MÉTODO PARA CRIAÇÃO DO USUARIO
    public function create($pdo, $user, $password)
    {
        try {
            $query = 'INSERT INTO user (name, user, password) VALUES (:name, :user, :password)';

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':name, $name');
            $stmt->bindParam(':user, $user');
            $stmt->bindParam(':password, $password');

            $stmt->execute();

            echo 'Novo registro criado com sucesso!';
        } catch (PDOException $e) {
            echo 'Erro ao inserir dados: ' . $e->getMessage();
        }
    }
}