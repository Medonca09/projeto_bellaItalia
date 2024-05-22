CREATE DATABASE IF NOT EXISTS bellaItalia;
USE bellaItalia;

CREATE TABLE IF NOT EXISTS Cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO Cliente (nome, cpf, email) VALUES
('João Silva', '123.456.789-00', 'joao.silva@example.com'),
('Maria Oliveira', '987.654.321-00', 'maria.oliveira@example.com');

CREATE TABLE IF NOT EXISTS Destino (
    id_destino INT AUTO_INCREMENT PRIMARY KEY,
    nome_destino VARCHAR(100) NOT NULL,
    regiao VARCHAR(100) NOT NULL,
    turismo VARCHAR(255) NOT NULL
);

INSERT INTO Destino (nome_destino, regiao, turismo) VALUES
('Rio de Janeiro', 'Sudeste', 'Praias, Pão de Açúcar, Cristo Redentor'),
('Foz do Iguaçu', 'Sul', 'Cataratas do Iguaçu, Parque das Aves');

CREATE TABLE IF NOT EXISTS Hotel (
    id_hotel INT AUTO_INCREMENT PRIMARY KEY,
    nome_hotel VARCHAR(100) NOT NULL,
    cidade_hotel VARCHAR(100) NOT NULL,
    dias_hospedagem INT NOT NULL,
    data_chegada DATE NOT NULL,
    data_saida DATE NOT NULL
);

INSERT INTO Hotel (nome_hotel, cidade_hotel, dias_hospedagem, data_chegada, data_saida) VALUES
('Hotel Copacabana Palace', 'Rio de Janeiro', 5, '2024-06-01', '2024-06-06'),
('Hotel das Cataratas', 'Foz do Iguaçu', 3, '2024-07-10', '2024-07-13');

