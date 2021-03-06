-- MySQL Script generated by MySQL Workbench
-- Qua 13 Dez 2017 08:18:37 BRT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hrmDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hrmDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hrmDB` DEFAULT CHARACTER SET utf8 ;
USE `hrmDB` ;

-- -----------------------------------------------------
-- Table `hrmDB`.`userCuidador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrmDB`.`userCuidador` (
  `iduserCuidador` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NULL,
  `dataNascimento` DATE NULL,
  `email` VARCHAR(60) NULL,
  `senha` VARCHAR(60) NOT NULL,
  `dataCadastro` TIMESTAMP NULL,
  PRIMARY KEY (`iduserCuidador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrmDB`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrmDB`.`user` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `cuidadorEmail` VARCHAR(45) NOT NULL,
  `dataCadastro` VARCHAR(60) NOT NULL,
  `userCuidador_iduserCuidador` INT NULL,
  PRIMARY KEY (`idUser`),
  INDEX `fk_user_userCuidador1_idx` (`userCuidador_iduserCuidador` ASC),
  CONSTRAINT `fk_user_userCuidador1`
    FOREIGN KEY (`userCuidador_iduserCuidador`)
    REFERENCES `hrmDB`.`userCuidador` (`iduserCuidador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrmDB`.`pontos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrmDB`.`pontos` (
  `idPontos` INT NOT NULL AUTO_INCREMENT,
  `ponto` INT(11) NULL,
  `descAtividade` VARCHAR(60) NULL,
  `user_idUser` INT NOT NULL,
  PRIMARY KEY (`idPontos`, `user_idUser`),
  INDEX `fk_pontos_user1_idx` (`user_idUser` ASC),
  CONSTRAINT `fk_pontos_user1`
    FOREIGN KEY (`user_idUser`)
    REFERENCES `hrmDB`.`user` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrmDB`.`hrm`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrmDB`.`hrm` (
  `idHrm` INT NOT NULL AUTO_INCREMENT,
  `taxaHRM` INT(12) NULL,
  `tipoAtividade` VARCHAR(60) NULL,
  `dataRegistro` VARCHAR(45) NULL,
  `user_idUser` INT NOT NULL,
  PRIMARY KEY (`idHrm`, `user_idUser`),
  INDEX `fk_hrm_user1_idx` (`user_idUser` ASC),
  CONSTRAINT `fk_hrm_user1`
    FOREIGN KEY (`user_idUser`)
    REFERENCES `hrmDB`.`user` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrmDB`.`dicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrmDB`.`dicas` (
  `idDicas` INT NOT NULL AUTO_INCREMENT,
  `dica` VARCHAR(200) NULL,
  PRIMARY KEY (`idDicas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrmDB`.`user_has_dicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrmDB`.`user_has_dicas` (
  `user_idUser` INT NOT NULL,
  `dicas_idDicas` INT NOT NULL,
  INDEX `fk_user_has_dicas_dicas1_idx` (`dicas_idDicas` ASC),
  INDEX `fk_user_has_dicas_user_idx` (`user_idUser` ASC),
  PRIMARY KEY (`user_idUser`, `dicas_idDicas`),
  CONSTRAINT `fk_user_has_dicas_user`
    FOREIGN KEY (`user_idUser`)
    REFERENCES `hrmDB`.`user` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_dicas_dicas1`
    FOREIGN KEY (`dicas_idDicas`)
    REFERENCES `hrmDB`.`dicas` (`idDicas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrmDB`.`conquistas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrmDB`.`conquistas` (
  `idconquistas` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `icon` BLOB NULL,
  `level` INT(11) NULL,
  PRIMARY KEY (`idconquistas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hrmDB`.`conquistas_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hrmDB`.`conquistas_user` (
  `conquistas_idconquistas` INT NOT NULL,
  `user_idUser` INT NOT NULL,
  PRIMARY KEY (`conquistas_idconquistas`, `user_idUser`),
  INDEX `fk_conquistas_has_user_user1_idx` (`user_idUser` ASC),
  INDEX `fk_conquistas_has_user_conquistas1_idx` (`conquistas_idconquistas` ASC),
  CONSTRAINT `fk_conquistas_has_user_conquistas1`
    FOREIGN KEY (`conquistas_idconquistas`)
    REFERENCES `hrmDB`.`conquistas` (`idconquistas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_conquistas_has_user_user1`
    FOREIGN KEY (`user_idUser`)
    REFERENCES `hrmDB`.`user` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

