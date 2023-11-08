create database rh;

use rh;

create table services(
    idService int primary key AUTO_INCREMENT,
    nomService varchar(30),
    heureTravail int,
    hommeJour int
);

create table serviceDemand(
    idDemand int primary key AUTO_INCREMENT, 
    idService int,
    recrut int
);
alter table serviceDemand add foreign key(idService) references services(idService);

create table diplome(
    idDiplome int primary key AUTO_INCREMENT,
    descriDiplome varchar(100)
);

create table sitMatrimoniale(
    idSitMatrimoniale int primary key AUTO_INCREMENT, 
    descriSitMatrimoniale varchar(30)
);

create table sexe(
    idSexe int primary key AUTO_INCREMENT,
    descriSexe varchar(100)
);

create table nationalite(
    idNationalite int primary key AUTO_INCREMENT, 
    nation varchar(30)
);

create table besoin(
    idBesoin int primary key AUTO_INCREMENT,
    idService int,
    idDiplome int,
    anneeExperience int,
    idSitMatrimoniale int,
    idSexe int,
    idNationalite int
);
alter table besoin add foreign key(idService) references services(idService);
alter table besoin add foreign key(idDiplome) references diplome(idDiplome);
alter table besoin add foreign key(idSitMatrimoniale) references sitMatrimoniale(idSitMatrimoniale);
alter table besoin add foreign key(idSexe) references sexe(idSexe);
alter table besoin add foreign key(idNationalite) references nationalite(idNationalite);

-- -----------------------------------------------------------------
-- -----------------------------------------------------------------
-- DEBUT partie client --
CREATE TABLE contact(
    idContact int PRIMARY KEY AUTO_INCREMENT,
    telephone INT,
    email VARCHAR(150)
);
--  select * from contact
--  drop table contact

INSERT INTO sexe (descriSexe) VALUES ('Homme'), ('Femme');

INSERT INTO nationalite (nation) VALUES 
('Malagasy'),
('Français'),
('Anglais');
INSERT INTO diplome (descriDiplome) VALUES 
('Doctorat'),
('Master'),
('Licence'),
('Bacc');
INSERT INTO sitMatrimoniale (descriSitMatrimoniale) VALUES 
('Single'),
('Married'),
('Divorced'),
('Widowed');

create table question(
    idQuestion int primary key AUTO_INCREMENT,
    idService int, 
    descQuestion varchar(60),
    coeff int
);
alter table question add foreign key(idService) references services(idService);

create table questRep(
    idQuestRep int primary key AUTO_INCREMENT,
    idQuestion int,
    descriReponse varchar(60),
    checkRep tinyint
);
alter table questRep add foreign key(idQuestion) references question(idQuestion);
CREATE Table experience(
    idExperience int PRIMARY KEY AUTO_INCREMENT,
    annee int
);
--  select * from experience
--  drop table experience

CREATE TABLE identite(
    idIdentite int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    date_naissance DATE,
    adresse VARCHAR(30)
);
--  select * from identite
--  drop table identite

CREATE Table cv(
    idCV int PRIMARY KEY auto_increment,
    idContact int,
    idExperience int,
    idSitMatrimoniale int,
    idIdentite int
);
--  select * from cv
--  drop table cv

alter table cv add foreign key(idContact) references contact(idContact);
alter table cv add foreign key(idExperience) references experience(idExperience);
alter table cv add foreign key(idSitMatrimoniale) references sitMatrimoniale(idSitMatrimoniale);
alter table cv add foreign key(idIdentite) references identite(idIdentite);

-- DEBUT data test --
INSERT INTO sitMatrimoniale(descriSitMatrimoniale) VALUES
    ('Marie'),
    ('Divorce'),
    ('Veuve'),
    ('Celibataire');

-- FIN data test --

-- -----------------------------------------------------------------
-- -----------------------------------------------------------------
-- FIN partie client --
