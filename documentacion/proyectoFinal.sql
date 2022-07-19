-- Creo la base de datos proyecto_final

CREATE DATABASE proyecto_final;

-- Entro la base de datos proyecto_final

USE proyecto_final;

-- Creo las tablas de la base de datos
-- Creo la tabla usuarios

CREATE TABLE usuarios(
	idUsuario INT(5) NOT NULL AUTO_INCREMENT,
    nick VARCHAR(20) NOT NULL,
	clave VARCHAR(20) NOT NULL,
	tipoUsuario ENUM("admin","normal") NOT NULL,
	PRIMARY KEY(idUsuario)
);

-- Creo la tabla deportistas

CREATE TABLE deportistas(
	idDeportista INT(5) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	apellido VARCHAR(50) NOT NULL,
	foto imagen NOT NULL,
	PRIMARY KEY(id) 
);

-- Creo la tabla categorias

CREATE TABLE categorias(
	idCategoria INT(5) NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(50) NOT NULL 
	PRIMARY KEY (idDeportista)
);

-- Creo la tabla noticias

CREATE TABLE noticias(
	idNoticia INT(10) NOT NULL AUTO_INCREMENT,
	idCategoria INT(5) NOT NULL,
	titulo VARCHAR(50) NOT NULL,
	cuerpo text NOT NULL,
	fechaPublicacion DATE NOT NULL,
	PRIMARY KEY (idNoticia),
	KEY noti_idNoticia (idNoticia),
	KEY noti_idCategoria (idCAtegoria),
	-- Creo la primera contraints dandonle un nombre "cur_tipoCurso_fk1" y enganchando el campo "tipoCurso" de la 
	-- de la cursos con el campo "id" de la tabla tiposCursos
	CONSTRAINT noti_idNoticia_fk1 FOREIGN KEY (tipoCurso) REFERENCES noticias(idNoticias), 
	CONSTRAINT noti_idCategoria_fk2 FOREIGN KEY (profesor) REFERENCES categorias(idCategorias)
);