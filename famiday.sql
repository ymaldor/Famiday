-- MySQL Script generated by MySQL Workbench
-- 04/03/17 13:01:58
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema famiday
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `famiday` ;

-- -----------------------------------------------------
-- Schema famiday
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `famiday` DEFAULT CHARACTER SET utf8 ;
USE `famiday` ;

-- -----------------------------------------------------
-- Table `famiday`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `famiday`.`user` (
  `id` VARCHAR(32) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `datecreation` DATE NOT NULL,
  `online` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `famiday`.`family`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `famiday`.`family` (
  `id` VARCHAR(32) NOT NULL,
  `familyname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `famiday`.`event`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `famiday`.`event` (
  `id` VARCHAR(32) NOT NULL,
  `eventname` VARCHAR(45) NOT NULL,
  `eventstart` DATETIME NOT NULL,
  `eventend` DATETIME NOT NULL,
  `location` VARCHAR(255) NULL,
  `participant` VARCHAR(255) NOT NULL,
  `summary` LONGTEXT NULL,
  `last_modif` DATE NULL,
  `frequence` VARCHAR(45) NULL,
  `until` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `famiday`.`message`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `famiday`.`message` (
  `id` VARCHAR(32) NOT NULL,
  `object` VARCHAR(60) NOT NULL,
  `message` LONGTEXT NOT NULL,
  `datemessage` DATETIME NOT NULL,
  `trashed` TINYINT(1) NOT NULL,
  `read` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `famiday`.`personne`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `famiday`.`personne` (
  `id` VARCHAR(32) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `datebirth` DATE NULL,
  `phone` INT NOT NULL,
  `adress` VARCHAR(70) NOT NULL,
  `about` LONGTEXT NULL,
  `userid` VARCHAR(32) NULL,
  `idfamily` VARCHAR(32) NOT NULL,
  `responsible` TINYINT(1) NULL,
  `sexe` TINYINT(1) NULL,
  `status` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_personne_user1_idx` (`userid` ASC),
  INDEX `fk_personne_family1_idx` (`idfamily` ASC),
  CONSTRAINT `fk_personne_user1`
    FOREIGN KEY (`userid`)
    REFERENCES `famiday`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_personne_family1`
    FOREIGN KEY (`idfamily`)
    REFERENCES `famiday`.`family` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `famiday`.`message_sent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `famiday`.`message_sent` (
  `from` VARCHAR(32) NOT NULL,
  `to` VARCHAR(32) NOT NULL,
  `message` VARCHAR(32) NOT NULL,
  INDEX `fk_message_sent_user1_idx` (`from` ASC),
  INDEX `fk_message_sent_user2_idx` (`to` ASC),
  INDEX `fk_message_sent_message1_idx` (`message` ASC),
  CONSTRAINT `fk_message_sent_user1`
    FOREIGN KEY (`from`)
    REFERENCES `famiday`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_sent_user2`
    FOREIGN KEY (`to`)
    REFERENCES `famiday`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_sent_message1`
    FOREIGN KEY (`message`)
    REFERENCES `famiday`.`message` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
