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
    descriDiplome varchar(20)
);

create table sitMatrimoniale(
    idSitMatrimoniale int primary key AUTO_INCREMENT, 
    descriSitMatrimoniale varchar(30)
);

create table sexe(
    idSexe int primary key AUTO_INCREMENT,
    descriSexe varchar(20)
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



