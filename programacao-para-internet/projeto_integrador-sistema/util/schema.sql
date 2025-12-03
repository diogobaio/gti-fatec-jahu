CREATE DATABASE IF NOT EXISTS petmais CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
SHOW DATABASES;
USE petmais;
CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    nome_social VARCHAR(255) NULL,
    genero CHAR(1) NOT NULL,
    -- M, F, O
    cpf VARCHAR(14),
    data_nascimento DATE,
    celular VARCHAR(20),
    rua VARCHAR(255),
    numero VARCHAR(10),
    complemento VARCHAR(50),
    bairro VARCHAR(255),
    cidade VARCHAR(255),
    cep VARCHAR(10),
    estado CHAR(2),
    email VARCHAR(255) NOT NULL,
    nivel_acesso ENUM('Administrador', 'Funcionário', 'Cliente') NOT NULL,
    senha VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL DEFAULT NULL
);
CREATE TABLE IF NOT EXISTS produtos (
    id_produto BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    categoria ENUM(
        'alimentacao',
        'brinquedos',
        'acessorios',
        'higiene',
        'saude'
    ) NOT NULL,
    descricao TEXT NOT NULL,
    quantidade INT UNSIGNED NOT NULL DEFAULT 0,
    valor_unitario DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL DEFAULT NULL
)