-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cadastro
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cadastro
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cadastro` DEFAULT CHARACTER SET utf8 ;
USE `cadastro` ;

-- -----------------------------------------------------
-- Table `cadastro`.`genero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cadastro`.`genero` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cadastro`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cadastro`.`aluno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(30) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `nascimento` DATE NOT NULL,
  `telefone` VARCHAR(11) NULL,
  `email` VARCHAR(254) NULL,
  `genero_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_aluno_genero_idx` (`genero_id` ASC),
  CONSTRAINT `fk_aluno_genero`
    FOREIGN KEY (`genero_id`)
    REFERENCES `cadastro`.`genero` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
