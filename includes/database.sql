create table ventas(
    id SERIAL NOT NULL PRIMARY KEY,
    nombre VARCHAR(50),
    precio DECIMAL(10,2)
);

INSERT INTO ventas (nombre, precio) VALUES ('Cuaderno Universitario Rayado', 3.50);
INSERT INTO ventas (nombre, precio) VALUES ('Bolígrafo Azul BIC', 0.75);
INSERT INTO ventas (nombre, precio) VALUES ('Mochila Escolar Jansport', 45.99);
INSERT INTO ventas (nombre, precio) VALUES ('Caja de Lápices de Colores Faber-Castell', 12.50);
INSERT INTO ventas (nombre, precio) VALUES ('Tijeras Escolares Maped', 2.80);
INSERT INTO ventas (nombre, precio) VALUES ('Pegamento en Barra Pritt', 1.50);
INSERT INTO ventas (nombre, precio) VALUES ('Calculadora Científica Casio FX-991', 29.99);
INSERT INTO ventas (nombre, precio) VALUES ('Resaltador Amarillo Stabilo', 1.20);
INSERT INTO ventas (nombre, precio) VALUES ('Carpeta A4 de 3 anillas', 4.99);
INSERT INTO ventas (nombre, precio) VALUES ('Juego de Geometría Truper', 6.75);