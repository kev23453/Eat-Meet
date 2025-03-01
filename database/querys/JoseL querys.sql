create database eat_meet

use eat_meet

create table token(
id_token int primary key identity(1,1),
token varchar(100) not null,
creado_a datetime default current_timestamp,
finaliza_a datetime null,
confirmado bit default 0
)

create table UsuarioToken(
id_registro int primary key identity(1,1),
id_usuario int foreign key references usuario(id_usuario),
id_token int foreign key references token(id_token)
)

create table restaurante(
id_restaurante int primary key identity(1,1),
nombre varchar (50) not null,
numero_telefonico varchar (20) null
)

create table categoria(
id_categoria int primary Key identity(1,1),
categoria varchar (40) not null
)

create table CategoriaRestaurante(
id_registro int primary key identity(1,1),
id_restaurante int foreign key references restaurante(id_restaurante),
id_categoria int foreign key references categoria(id_categoria)
)