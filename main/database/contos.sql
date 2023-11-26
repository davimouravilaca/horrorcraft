CREATE TABLE IF NOT EXISTS contos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    resenha TEXT NOT NULL,
    conto TEXT NOT NULL,
    autor VARCHAR(255) NOT NULL,
    data_publicacao DATE NOT NULL
);
