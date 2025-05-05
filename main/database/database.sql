-- Criar banco de dados se não existir
CREATE DATABASE IF NOT EXISTS historias;

-- Selecionar o banco de dados
USE historias;

-- Tabela de contos
CREATE TABLE IF NOT EXISTS contos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    resenha TEXT NOT NULL,
    conto TEXT NOT NULL,
    autor VARCHAR(255) NOT NULL,
    data_publicacao DATE NOT NULL,
    curtidas INT NOT NULL DEFAULT 0
);

-- Tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    dataCadastro DATE,
    favoritadas VARCHAR(1000)
);
