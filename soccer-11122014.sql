/*
our first version of the assignment table:
soccer-11122014.sql
*/

drop table if exists test_Customers;

create table italian_soccer_teams
( TeamID int unsigned not null auto_increment primary key,
TeamName varchar(50),
City varchar(50),
StadiumName varchar(80),
CurrentRanking int
);

insert into italian_soccer_teams values (NULL,"Juventus","Turin","Juventus Stadium",1);
insert into italian_soccer_teams values (NULL,"Roma","Rome","Stadio Olimpico",2);
insert into italian_soccer_teams values (NULL,"Napoli","Naples","Stadio San Paolo",3);
insert into italian_soccer_teams values (NULL,"Sampdoria","Genoa","Stadio Luigi Ferraris",4);
insert into italian_soccer_teams values (NULL,"Lazio","Rome","Stadio Olimpico",5);
insert into italian_soccer_teams values (NULL,"Genoa","Genoa","Stadio Luigi Ferraris",6);
insert into italian_soccer_teams values (NULL,"AC Milan","Milan","San Siro",7);
insert into italian_soccer_teams values (NULL,"Udinese","Udine","Stadio Friuli",8);
insert into italian_soccer_teams values (NULL,"Inter Milan","Milan","San Siro",9);
insert into italian_soccer_teams values (NULL,"Hellas Verona","Verona","Stadio Marcantonio Bentegodi",10);
insert into italian_soccer_teams values (NULL,"Fiorentina","Florence","Stadio Artemio Franchi",11);
insert into italian_soccer_teams values (NULL,"Palermo","Palermo","Stadio Renzo Barbera",12);
insert into italian_soccer_teams values (NULL,"Sassuolo","Sassuolo","Citta del Tricolore",13);
insert into italian_soccer_teams values (NULL,"Torino","Turin","Stadio Olimpico",14);
insert into italian_soccer_teams values (NULL,"Cagliari","Cagliari","Stadio Sant'Elia",15);
insert into italian_soccer_teams values (NULL,"Empoli","Empoli","Stadio Carlo Castellani",16);
insert into italian_soccer_teams values (NULL,"Atalanta","Bergamo","Stadio Atleti Azzurri d'Italia",17);
insert into italian_soccer_teams values (NULL,"Chievo Verona","Verona","Stadio Marcantonio Bentegodi",18);
insert into italian_soccer_teams values (NULL,"Cesena","Cesena","Stadio Dino Manuzzi",19);
insert into italian_soccer_teams values (NULL,"Parma","Parma","Stadio Ennio Tardini",20);