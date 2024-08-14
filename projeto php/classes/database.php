<?php

// CONECTANDO O BANCO DE DADOS
class database
{
    public function connectDB()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'database';

        $dsn = 'mysql:host=' . $host . ';dbname:' . $dbname;

        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Conexão bem-sucedida!';

            return $pdo;
        } catch (PDOException $e) {
            echo 'Erro na conexão: ' . $e->getMessage();
        }
    }
}