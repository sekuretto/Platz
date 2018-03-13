-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema platz
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema platz
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `platz` DEFAULT CHARACTER SET utf8 ;
USE `platz` ;

-- -----------------------------------------------------
-- Table `platz`.`KAYTTAJA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `platz`.`KAYTTAJA` (
  `kayttajaid` INT NOT NULL AUTO_INCREMENT,
  `kayttajanimi` VARCHAR(45) NOT NULL,
  `salasana` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `kaupunki` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`kayttajaid`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `platz`.`ILMOITUS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `platz`.`ILMOITUS` (
  `ilmoitusid` INT NOT NULL AUTO_INCREMENT,
  `otiskko` VARCHAR(45) NOT NULL,
  `tyyppi` VARCHAR(45) NOT NULL,
  `kategoria` VARCHAR(45) NOT NULL,
  `lisatiedot` VARCHAR(500) NULL,
  `kuva` VARCHAR(45) NULL,
  `kayttajaid` INT NOT NULL,
  `voimassaolo` TINYINT NOT NULL,
  PRIMARY KEY (`ilmoitusid`),
  INDEX `fk_Ilmoitus_Kayttaja_idx` (`kayttajaid` ASC),
  CONSTRAINT `fk_Ilmoitus_Kayttaja`
    FOREIGN KEY (`kayttajaid`)
    REFERENCES `platz`.`KAYTTAJA` (`kayttajaid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `platz`.`ADMIN`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `platz`.`ADMIN` (
  `adminId` INT NOT NULL,
  `kayttajanimi` VARCHAR(45) NOT NULL,
  `salasana` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`adminId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `platz`.`PALAUTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `platz`.`PALAUTE` (
  `palauteId` INT NOT NULL AUTO_INCREMENT,
  `otsikko` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `teksti` VARCHAR(500) NOT NULL,
  `kayttajaid` INT NOT NULL,
  PRIMARY KEY (`palauteId`),
  INDEX `fk_Palaute_Kayttaja1_idx` (`kayttajaid` ASC),
  CONSTRAINT `fk_Palaute_Kayttaja1`
    FOREIGN KEY (`kayttajaid`)
    REFERENCES `platz`.`KAYTTAJA` (`kayttajaid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `platz`.`ILMIANTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `platz`.`ILMIANTO` (
  `ilmiantoId` INT NOT NULL,
  `syy` VARCHAR(45) NOT NULL,
  `lisatieto` VARCHAR(500) NULL,
  `ilmoitusid` INT NOT NULL,
  PRIMARY KEY (`ilmiantoId`),
  INDEX `fk_Ilmianto_Ilmoitus1_idx` (`ilmoitusid` ASC),
  CONSTRAINT `fk_Ilmianto_Ilmoitus1`
    FOREIGN KEY (`ilmoitusid`)
    REFERENCES `platz`.`ILMOITUS` (`ilmoitusid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
