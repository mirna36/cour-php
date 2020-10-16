DROP DATABASE IF EXISTS DB_MONUMENT;

CREATE DATABASE DB_MONUMENT;

USE DB_MONUMENT;

CREATE TABLE Monument (
    ID_Monument INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Nom_Monument VARCHAR(30) not null unique,
    Arrondissement_Monument INT(2) not null,
    Adresse_Monument VARCHAR(150) not null,
    Site_Web_Monument VARCHAR(100) not null,
	date_creation date not null,
    FK_ID_TYPE_MONUMENT INT(5) not null
)ENGINE=InnoDB;


CREATE TABLE TYPE_Monument (
    ID_TYPE_Monument INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Libelle_TYPE_Monument VARCHAR(50) not null unique check ( Libelle_TYPE_Monument <> "")
)ENGINE=InnoDB;


CREATE TABLE Station (
    ID_Station INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Nom_Station VARCHAR(50) not null unique
)ENGINE=InnoDB;


CREATE TABLE LIGNE_METRO (
    ID_LIGNE_METRO INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Numero_LIGNE_METRO INT(2) not null,
    Nom_LIGNE_METRO VARCHAR(50) not null
)ENGINE=InnoDB;


CREATE TABLE DESSERVIR (
    ID_DESSERVIR INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    FK_ID_Monument INT(5),
    FK_ID_Station INT(5)
)ENGINE=InnoDB;
 
 
CREATE TABLE AVOIR (
    ID_AVOIR INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    FK_ID_Station INT(5),
    FK_ID_LIGNE_METRO INT(5)
)ENGINE=InnoDB;

create table utilisateur (
	id_utilisateur int(5) auto_increment primary key not null,
	email_utilisateur varchar(255) not null unique,
	mdp_utilisateur varchar(255) not null,
	type_utilisateur char(03) not null
)ENGINE=InnoDB;

INSERT INTO utilisateur VALUES
(1,"admin@gmail.com","admin","ADM");
 
 
ALTER TABLE Monument
ADD CONSTRAINT FK_TYPE_MONUMENT
FOREIGN KEY (FK_ID_TYPE_MONUMENT) REFERENCES TYPE_MONUMENT(ID_TYPE_Monument);

ALTER TABLE DESSERVIR
ADD CONSTRAINT FK_DESSERVIR_ID_MONUMENT
FOREIGN KEY (FK_ID_MONUMENT) REFERENCES Monument(ID_Monument);

ALTER TABLE DESSERVIR
ADD CONSTRAINT FK_DESSERVIR_ID_Station
FOREIGN KEY (FK_ID_Station) REFERENCES Station(ID_Station);

ALTER TABLE AVOIR
ADD CONSTRAINT FK_AVOIR_ID_Station 
FOREIGN KEY (FK_ID_Station) REFERENCES Station(ID_Station);

ALTER TABLE AVOIR 
ADD CONSTRAINT FK_AVOIR_ID_LIGNE_METRO
FOREIGN KEY (FK_ID_LIGNE_METRO) REFERENCES LIGNE_METRO(ID_LIGNE_METRO);

