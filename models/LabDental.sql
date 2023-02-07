/*Base de Datos para el sitio de LabDental*/
CREATE DATABASE LabDental;
USE LabDental;

CREATE TABLE Admin(
	usuario VARCHAR(20),
    password VARCHAR(50),
    
    PRIMARY KEY (usuario)
);

CREATE TABLE Galeria (
	imagen VARCHAR(200),
    descripcion VARCHAR(50),
    
    PRIMARY KEY (imagen)
);