
CREATE  DATABASE LinkedOut;


CREATE TABLE `Personne` (
	`idPersonne` INT(10) NOT NULL AUTO_INCREMENT,
	`nom` varchar(50) NOT NULL,
	`prenom` varchar(50) NOT NULL,
	`description` TEXT,
	`telephone` varchar(500),
	`mail` varchar(100) NOT NULL,
	`mdp` varchar(500) NOT NULL,
	PRIMARY KEY (`idPersonne`)
);

CREATE  TABLE `Recruteur` (
	`idRecruteur` INT(10) NOT NULL AUTO_INCREMENT,
	`idPersonne` INT(10) NOT NULL,
	PRIMARY KEY (`idRecruteur`)
);

CREATE  TABLE `Etudiant` (
	`idEtudiant` INT(10) NOT NULL AUTO_INCREMENT,
	`idPersonne` INT(10) NOT NULL,
	`lienCV` TEXT NOT NULL,
	`linkedIn` TEXT NOT NULL,
	`twitter` TEXT NOT NULL,
	PRIMARY KEY (`idEtudiant`)
);

CREATE  TABLE `Recherche` (
	`idRecherche` INT(10) NOT NULL AUTO_INCREMENT,
	`domaine` varchar(50) NOT NULL,
	`poste` varchar(50) NOT NULL,
	`description` TEXT NOT NULL,
	`date` DATE NOT NULL,
	`typeEmploi` DATE NOT NULL,
	`idEtudiant` INT(10) NOT NULL,
	PRIMARY KEY (`idRecherche`)
);

CREATE  TABLE `Competence` (
	`idCompetence` INT(10) NOT NULL AUTO_INCREMENT,
	`libelle` varchar(50) NOT NULL,
	PRIMARY KEY (`idCompetence`)
);

CREATE TABLE `CompetenceByEtudiant` (
	`idEtudiant` INT(10) NOT NULL,
	`idCompetence` INT(10) NOT NULL,
	`valeur` INT(10) NOT NULL,
	PRIMARY KEY (`idEtudiant`,`idCompetence`)
);

CREATE TABLE `Formation` (
	`idFormation` INT(10) NOT NULL AUTO_INCREMENT,
	`titre` varchar(50) NOT NULL,
	`description` TEXT NOT NULL,
	`niveauEtude` varchar(50) NOT NULL,
	`lienPhoto` varchar(50) NOT NULL,
	`idEcole` INT(10) NOT NULL,
	PRIMARY KEY (`idFormation`)
);

CREATE TABLE `FormationByEtudiant` (
	`idEtudiant` INT(10) NOT NULL,
	`idFormation` INT(10) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idEtudiant`,`idFormation`)
);

CREATE TABLE `Ecole` (
	`idEcole` INT(10) NOT NULL AUTO_INCREMENT,
	`nom` varchar(50) NOT NULL,
	`ville` varchar(50) NOT NULL,
	`lienPhoto` TEXT NOT NULL,
	PRIMARY KEY (`idEcole`)
);

CREATE TABLE `Entreprise` (
	`idEntreprise` INT(10) NOT NULL AUTO_INCREMENT,
	`nom` varchar(50) NOT NULL,
	`domaine` varchar(50) NOT NULL,
	`lienPhoto` TEXT NOT NULL,
	`adresse` varchar(200) NOT NULL,
	`cp` INT(10) NOT NULL,
	`ville` varchar(50) NOT NULL,
	`region` varchar(50) NOT NULL,
	`pays` varchar(50) NOT NULL,
	`description` varchar(50) NOT NULL,
	`site` TEXT NOT NULL,
	PRIMARY KEY (`idEntreprise`)
);

CREATE  TABLE `RecruteurByEntreprise` (
	`idRecruteur` INT(10) NOT NULL,
	`idEntreprise` INT(10) NOT NULL,
	PRIMARY KEY (`idRecruteur`,`idEntreprise`)
);

CREATE  TABLE `Annonce` (
	`idAnnonce` INT(10) NOT NULL AUTO_INCREMENT,
	`titre` varchar(50) NOT NULL,
	`description` TEXT NOT NULL,
	`poste` varchar(50) NOT NULL,
	`date` DATE NOT NULL,
	`typeEmploi` varchar(50) NOT NULL,
	`niveauEtude` varchar(50) NOT NULL,
	`idRecruteur` INT(10) NOT NULL,
	`idEntreprise` INT(10) NOT NULL,
	PRIMARY KEY (`idAnnonce`)
);

CREATE  TABLE `Admin` (
	`idAdmin` INT(10) NOT NULL AUTO_INCREMENT,
	`login` varchar(50) NOT NULL,
	`mdp` varchar(500) NOT NULL,
	PRIMARY KEY (`idAdmin`)
);


ALTER TABLE `Recruteur` ADD CONSTRAINT `Recruteur_fk0` FOREIGN KEY (`idPersonne`) REFERENCES `Personne`(`idPersonne`);

ALTER TABLE `Etudiant` ADD CONSTRAINT `Etudiant_fk0` FOREIGN KEY (`idPersonne`) REFERENCES `Personne`(`idPersonne`);

ALTER TABLE `Recherche` ADD CONSTRAINT `Recherche_fk0` FOREIGN KEY (`idEtudiant`) REFERENCES `Etudiant`(`idEtudiant`);

ALTER TABLE `CompetenceByEtudiant` ADD CONSTRAINT `CompetenceByEtudiant_fk0` FOREIGN KEY (`idEtudiant`) REFERENCES `Etudiant`(`idEtudiant`);

ALTER TABLE `CompetenceByEtudiant` ADD CONSTRAINT `CompetenceByEtudiant_fk1` FOREIGN KEY (`idCompetence`) REFERENCES `Competence`(`idCompetence`);

ALTER TABLE `Formation` ADD CONSTRAINT `Formation_fk0` FOREIGN KEY (`idEcole`) REFERENCES `Ecole`(`idEcole`);

ALTER TABLE `FormationByEtudiant` ADD CONSTRAINT `FormationByEtudiant_fk0` FOREIGN KEY (`idEtudiant`) REFERENCES `Etudiant`(`idEtudiant`);

ALTER TABLE `FormationByEtudiant` ADD CONSTRAINT `FormationByEtudiant_fk1` FOREIGN KEY (`idFormation`) REFERENCES `Formation`(`idFormation`);

ALTER TABLE `RecruteurByEntreprise` ADD CONSTRAINT `RecruteurByEntreprise_fk0` FOREIGN KEY (`idRecruteur`) REFERENCES `Recruteur`(`idRecruteur`);

ALTER TABLE `RecruteurByEntreprise` ADD CONSTRAINT `RecruteurByEntreprise_fk1` FOREIGN KEY (`idEntreprise`) REFERENCES `Entreprise`(`idEntreprise`);

ALTER TABLE `Annonce` ADD CONSTRAINT `Annonce_fk0` FOREIGN KEY (`idRecruteur`) REFERENCES `Recruteur`(`idRecruteur`);

ALTER TABLE `Annonce` ADD CONSTRAINT `Annonce_fk1` FOREIGN KEY (`idEntreprise`) REFERENCES `Entreprise`(`idEntreprise`);

