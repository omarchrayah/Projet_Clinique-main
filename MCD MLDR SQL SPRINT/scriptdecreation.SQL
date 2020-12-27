DROP DATABASE IF EXISTS MLRfinal;

CREATE DATABASE IF NOT EXISTS MLRfinal;
USE MLRfinal;
# -----------------------------------------------------------------------------
#       TABLE : USER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS USER
 (
   ID_USER BIGINT(111) NOT NULL  ,
   USERNAME CHAR(32) NULL  ,
   PASSWORD CHAR(32) NULL  ,
   TYPE_COMPTE CHAR(32) NULL  
   , PRIMARY KEY (ID_USER) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RDVO
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RDVO
 (
   ID_RDV BIGINT(111) NOT NULL  ,
   ID_PATIENT BIGINT(110) NOT NULL  ,
   ID_MOTIF SMALLINT NOT NULL  ,
   ID_MEDECIN SMALLINT NOT NULL  ,
   DATE_RDV DATE NULL  ,
   HEURE_RDV INTEGER NULL  ,
   PAYER CHAR(32) NULL  
   , PRIMARY KEY (ID_RDV) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE RDVO
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_RDVO_PATIENT
     ON RDVO (ID_PATIENT ASC);

CREATE  INDEX I_FK_RDVO_MOTIF
     ON RDVO (ID_MOTIF ASC);

CREATE  INDEX I_FK_RDVO_MEDECIN
     ON RDVO (ID_MEDECIN ASC);

# -----------------------------------------------------------------------------
#       TABLE : MEDECIN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MEDECIN
 (
   ID_MEDECIN SMALLINT NOT NULL  ,
   NOM_MEDECIN CHAR(32) NULL  ,
   PRENOM_MEDECIN CHAR(32) NULL  ,
   SPECIALITE_MEDECIN CHAR(32) NULL  
   , PRIMARY KEY (ID_MEDECIN) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CRENAUX
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CRENAUX
 (
   ID_CRENAUX BIGINT(111) NOT NULL  ,
   ID_MEDECIN SMALLINT NOT NULL  ,
   JOUR DATE NULL  ,
   DE BIGINT(111) NULL  ,
   A BIGINT(111) NULL  
   , PRIMARY KEY (ID_CRENAUX) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CRENAUX
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CRENAUX_MEDECIN
     ON CRENAUX (ID_MEDECIN ASC);

# -----------------------------------------------------------------------------
#       TABLE : MOTIF
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MOTIF
 (
   ID_MOTIF SMALLINT NOT NULL  ,
   NOM_MOTIF CHAR(32) NULL  ,
   PRIX_MOTIF CHAR(32) NULL  ,
   LISTE_PIECES TEXT NULL  ,
   CONSIGNE TEXT NULL  
   , PRIMARY KEY (ID_MOTIF) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ACTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ACTION
 (
   ID_ACTION SMALLINT NOT NULL  ,
   ID_COMPTE SMALLINT NOT NULL  ,
   ACTION CHAR(32) NULL  ,
   DATE_ACTION DATE NULL  
   , PRIMARY KEY (ID_ACTION) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ACTION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ACTION_COMPTE
     ON ACTION (ID_COMPTE ASC);

# -----------------------------------------------------------------------------
#       TABLE : PATIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PATIENT
 (
   ID_PATIENT BIGINT(110) NOT NULL  ,
   NOM_PATIENT CHAR(32) NULL  ,
   PRENOM_PATIENT CHAR(32) NULL  ,
   ADRESSE_PATIENT TEXT NULL  ,
   TEL_PATIENT BIGINT(10) NULL  ,
   DATE_NAISSANCE DATE NULL  ,
   DEPARTEMENT_NAISSANCE CHAR(32) NULL  ,
   PAYS_NAISSANCE CHAR(32) NULL  ,
   NSS CHAR(32) NULL  
   , PRIMARY KEY (ID_PATIENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : COMPTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMPTE
 (
   ID_COMPTE SMALLINT NOT NULL  ,
   ID_PATIENT BIGINT(110) NOT NULL  ,
   SOLDE DECIMAL(10,2) NULL  
   , PRIMARY KEY (ID_COMPTE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMPTE
# -----------------------------------------------------------------------------


CREATE UNIQUE INDEX I_FK_COMPTE_PATIENT
     ON COMPTE (ID_PATIENT ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE RDVO 
  ADD FOREIGN KEY FK_RDVO_PATIENT (ID_PATIENT)
      REFERENCES PATIENT (ID_PATIENT) ;


ALTER TABLE RDVO 
  ADD FOREIGN KEY FK_RDVO_MOTIF (ID_MOTIF)
      REFERENCES MOTIF (ID_MOTIF) ;


ALTER TABLE RDVO 
  ADD FOREIGN KEY FK_RDVO_MEDECIN (ID_MEDECIN)
      REFERENCES MEDECIN (ID_MEDECIN) ;


ALTER TABLE CRENAUX 
  ADD FOREIGN KEY FK_CRENAUX_MEDECIN (ID_MEDECIN)
      REFERENCES MEDECIN (ID_MEDECIN) ;


ALTER TABLE ACTION 
  ADD FOREIGN KEY FK_ACTION_COMPTE (ID_COMPTE)
      REFERENCES COMPTE (ID_COMPTE) ;


ALTER TABLE COMPTE 
  ADD FOREIGN KEY FK_COMPTE_PATIENT (ID_PATIENT)
      REFERENCES PATIENT (ID_PATIENT) ;

