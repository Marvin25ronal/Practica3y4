DROP DATABASE IF EXISTS db_banco;
CREATE DATABASE db_banco;
USE db_banco; 

CREATE TABLE cliente(
	no_cuenta BIGINT PRIMARY KEY,
    nombres varchar(255),
    apellidos varchar(255),
    dpi bigint,
    saldo double,
    correo varchar(255),
    contrasena varchar(255)
);

CREATE TABLE transferencia(
	no_transferencia bigint AUTO_INCREMENT PRIMARY KEY,
    no_cuenta_emisor bigint,
    no_cuenta_receptor bigint,
    cantidad double,
    fecha date,
    FOREIGN KEY (no_cuenta_emisor) REFERENCES cliente(no_cuenta),
    FOREIGN KEY (no_cuenta_receptor) REFERENCES cliente(no_cuenta)
);