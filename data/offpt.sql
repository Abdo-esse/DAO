-- Active: 1733434204073@@127.0.0.1@3306
CREATE DATABASE offpt;
use offpt;
CREATE Table stagiaire(
    id int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    age date,
    login VARCHAR(50),
    password VARCHAR(59)
);