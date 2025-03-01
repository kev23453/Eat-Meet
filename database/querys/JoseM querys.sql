CREATE TABLE CategoriaComida(
    id_categoria INT PRIMARY KEY IDENTITY(1,1),
    categoria VARCHAR(255) UNIQUE
);

CREATE TABLE Restaurante_x_platillo(
    id_registro INT PRIMARY KEY IDENTITY(1,1),
    id_restaurante INT,
    id_platillo INT
);

CREATE TABLE platillos( 
    id_platillos INT PRIMARY KEY IDENTITY(1,1),
    nombre_platillos VARCHAR(255),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES CategoriaComida(id_categoria)
);

CREATE TABLE bebidas( 
    id_bebidas INT PRIMARY KEY IDENTITY(1,1),
    nombre_bebida VARCHAR(255),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES CategoriaBebida(id_categoria)
);

CREATE TABLE Recetas(
    id_recetas INT PRIMARY KEY IDENTITY(1,1),
    id_usuario INT,  
    fecha DATETIME
);

CREATE TABLE CategoriaBebida(
    id_categoria INT PRIMARY KEY IDENTITY(1,1),
    categoria VARCHAR(255) UNIQUE
);

CREATE TABLE descripcion_platillo(
    id_descripcion INT PRIMARY KEY IDENTITY(1,1),
    descripcion VARCHAR(255),
    id_platillo INT,
    FOREIGN KEY (id_platillo) REFERENCES platillos(id_platillos)
);
