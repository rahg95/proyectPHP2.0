-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema GestorEventos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema GestorEventos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `GestorEventos` DEFAULT CHARACTER SET utf8 ;
USE `GestorEventos` ;

-- -----------------------------------------------------
-- Table `GestorEventos`.`Cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GestorEventos`.`Cargo` (
  `idCargo` INT NOT NULL AUTO_INCREMENT,
  `Cargo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCargo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GestorEventos`.`Empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GestorEventos`.`Empleados` (
  `idEmpleados` INT NOT NULL AUTO_INCREMENT,
  `Nombres` VARCHAR(75) NOT NULL,
  `Apellidos` VARCHAR(75) NOT NULL,
  `Usuarios` VARCHAR(20) NOT NULL,
  `Password` VARCHAR(100) NOT NULL,
  `idCargo` INT NOT NULL,
  PRIMARY KEY (`idEmpleados`),
  INDEX `idCargo_idx` (`idCargo` ASC),
  CONSTRAINT `idCargo`
    FOREIGN KEY (`idCargo`)
    REFERENCES `GestorEventos`.`Cargo` (`idCargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GestorEventos`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GestorEventos`.`Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `Categoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GestorEventos`.`Eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GestorEventos`.`Eventos` (
  `idEventos` INT NOT NULL AUTO_INCREMENT,
  `idEmpleados` INT NOT NULL,
  `Fecha_publicacion` DATETIME NOT NULL,
  `Titulo` VARCHAR(75) NOT NULL,
  `Lugar` VARCHAR(75) NOT NULL,
  `Descripcion` LONGTEXT NOT NULL,
  `Imagen` VARCHAR(30) NOT NULL,
  `Fecha_inicio` DATETIME NOT NULL,
  `Fecha_final` DATETIME NOT NULL,
  `idCategoria` INT NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEventos`),
  INDEX `idEmpleados_idx` (`idEmpleados` ASC),
  INDEX `idCategoria_idx` (`idCategoria` ASC),
  CONSTRAINT `idEmpleados`
    FOREIGN KEY (`idEmpleados`)
    REFERENCES `GestorEventos`.`Empleados` (`idEmpleados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idCategoria`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `GestorEventos`.`Categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GestorEventos`.`Reporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GestorEventos`.`Reporte` (
  `idReporte` INT NOT NULL AUTO_INCREMENT,
  `idEventos` INT NOT NULL,
  `Descripcion` VARCHAR(100) NOT NULL,
  `Fecha_modificacion` DATETIME NULL,
  PRIMARY KEY (`idReporte`),
  INDEX `idEventos_idx` (`idEventos` ASC),
  CONSTRAINT `idEventos`
    FOREIGN KEY (`idEventos`)
    REFERENCES `GestorEventos`.`Eventos` (`idEventos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
