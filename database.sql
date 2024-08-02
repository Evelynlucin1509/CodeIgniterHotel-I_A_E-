-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS `hotelevelyn`;
USE `hotelevelyn`;

-- Crear la tabla hotel
CREATE TABLE hotel (
    id_hotel INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    categoria VARCHAR(20)
);