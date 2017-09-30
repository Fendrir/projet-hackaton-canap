#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
#        Drop Database.
#------------------------------------------------------------

DROP DATABASE IF EXISTS cc_riders;

#------------------------------------------------------------
#        Create Database.
#------------------------------------------------------------

CREATE DATABASE cc_riders;

#------------------------------------------------------------
#        Use Database.
#------------------------------------------------------------

USE cc_riders;

#------------------------------------------------------------
# Table: Uti_co
#------------------------------------------------------------

CREATE TABLE Uti_co(
        uti_co_id            int (11) Auto_increment  NOT NULL ,
        uti_co_nom           Varchar (25) NOT NULL ,
        uti_co_prenom        Varchar (25) NOT NULL ,
        uti_co_mail          Varchar (30) NOT NULL ,
        uti_co_description   Varchar (1000) NOT NULL ,
        uti_co_adresse       Varchar (100) NOT NULL ,
        uti_co_tel           Varchar (12) NOT NULL ,
        uti_co_metier        Varchar (45) NOT NULL ,
        uti_co_com_id        Int NOT NULL ,
        uti_co_ambiance_id   Int NOT NULL ,
        uti_co_ambiance_id_1 Int NOT NULL ,
        uti_co_notes_id      Int NOT NULL ,
        uti_co_pseudo        Varchar (15) NOT NULL ,
        uti_co_espace        Varchar (45) NOT NULL ,
        PRIMARY KEY (uti_co_id ) ,
        UNIQUE (uti_co_mail ,uti_co_tel )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: uti_co_com
#------------------------------------------------------------

CREATE TABLE uti_co_com(
        uti_co_com_id      int (11) Auto_increment  NOT NULL ,
        uti_co_com_content Varchar (500) NOT NULL ,
        PRIMARY KEY (uti_co_com_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: uti_co_notes
#------------------------------------------------------------

CREATE TABLE uti_co_notes(
        uti_co_notes_id      int (11) Auto_increment  NOT NULL ,
        uti_co_notes_content Varchar (3) NOT NULL ,
        PRIMARY KEY (uti_co_notes_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: uti_co_ambiance
#------------------------------------------------------------

CREATE TABLE uti_co_ambiance(
        uti_co_ambiance_id  int (11) Auto_increment  NOT NULL ,
        uti_co_ambiance_nom Varchar (25) NOT NULL ,
        PRIMARY KEY (uti_co_ambiance_id ) ,
        UNIQUE (uti_co_ambiance_nom )
)ENGINE=InnoDB;

ALTER TABLE Uti_co ADD CONSTRAINT FK_Uti_co_uti_co_com_id FOREIGN KEY (uti_co_com_id) REFERENCES uti_co_com(uti_co_com_id);
ALTER TABLE Uti_co ADD CONSTRAINT FK_Uti_co_uti_co_ambiance_id FOREIGN KEY (uti_co_ambiance_id) REFERENCES uti_co_ambiance(uti_co_ambiance_id);
ALTER TABLE Uti_co ADD CONSTRAINT FK_Uti_co_uti_co_ambiance_id_1 FOREIGN KEY (uti_co_ambiance_id_1) REFERENCES uti_co_ambiance(uti_co_ambiance_id);
ALTER TABLE Uti_co ADD CONSTRAINT FK_Uti_co_uti_co_notes_id FOREIGN KEY (uti_co_notes_id) REFERENCES uti_co_notes(uti_co_notes_id);
