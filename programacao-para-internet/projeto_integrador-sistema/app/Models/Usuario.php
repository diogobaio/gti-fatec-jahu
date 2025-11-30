<?php
// Em qual pasta ele está?
namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

// Mesmo nome do arquivo
class Usuario {

    // Aqui declaramos uma função para cada operação de CRUD

    // Busca todos os usuários no BD
    public static function buscarTodos(){
        // Primeiro vamos conectar no banco de dados
        // Precisamos importar o PDO antes de criar a classe
        // Como vamos utilizar arquivo DATABASE, importamos ele também
        $pdo = Database::conectar();

        // Geraremos o script SQL de consulta
        $sql = "SELECT * FROM usuarios";

        // Retornamos o resultado da consulta
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados){
        try{
            $pdo = Database::conectar();

            $senha_criptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuarios (nome, nome_social, genero, cpf, data_nascimento, celular, rua, numero, complemento, bairro, cidade, cep, estado, email, nivel_acesso, senha)";
            $sql = "VALUES (:nome, :nome_social, :genero, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento, :bairro, :cidade, :cep, :estado, :email, :nivel_acesso, :senha)";

            // Prepara o SQL para ser inserido no BD e limpa códigos maliciosos
            $stmt = $pdo->prepare($sql);

            // Passa as variáveis para o SQL
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':data_nascimento', $dados['data_nascimento']);
             $stmt->bindParam('senha', $senha_criptografada);
            //...continuar

            // Executa o SQL
            $stmt->execute();
            // Retorna o ID de registro no BD
            return (int) $pdo->lastInsertId();

        }catch (PDOException $e){
            echo "Erro ao inserir: ". $e->getMessage();
            exit;
        }
    }
}