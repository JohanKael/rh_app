create database rh;

use rh;

create table services(
    idService int,
    nomService varchar(30),
    heureTravail int,
    hommeJour int
):
alter table services add primary key(idService);

create table serviceDemand(
    idDemand int, 
    idService int,
    heureDemand int, 
    hommeJour int
);
alter table serviceDemand add foreign key(idService);

create table diplome(
    idDiplome int,
    descriDiplome char(1)
);
alter table diplome add primary key(idDiplome);

create table sitMatrimoniale(
    idSitMatrimoniale int, 
    descriSitMatrimoniale varchar(30)
);
alter table sitMatrimoniale add primary key(idSitMatrimoniale);

create table sexe(
    idSexe int,
    descriSexe char(1)
);
alter table sexe add primary key(idSexe);

create table nationalite(
    idNationalite int, 
    nation varchar(30)
);
alter table nationalite add primary key(idNationalite);

create table besoin(
    idBesoin int,
    idService int,
    idDiplome int,
    anneeExperience int,
    idSitMatrimoniale int,
    idSexe tinyint,
    idNationalite int
);
alter table besoin add primary key(idBesoin);
alter table besoin add foreign key(idService) references services(idService);
alter table besoin add foreign key(idDiplome) references diplome(idDiplome);
alter table besoin add foreign key(idSitMatrimoniale) references sitMatrimoniale(idSitMatrimoniale);
alter table besoin add foreign key(idSexe) references sexe(idSexe);
alter table besoin add foreign key(idNationalite) references nationalite(idNationalite);



