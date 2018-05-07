# Capstone
This is a project I am making for school and also for my father.  It is a web based application that will be used to keep track of members of a club that he is secretary and treasurer for.  Currently it is for administrators only, but I will be making a page for someone to sign up to the club to become a member. 

****SCRIPT TO CREATE DATABASE****
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema capstonedb2018
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema capstonedb2018
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `capstonedb2018` DEFAULT CHARACTER SET latin1 ;
USE `capstonedb2018` ;

-- -----------------------------------------------------
-- Table `capstonedb2018`.`members`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capstonedb2018`.`members` (
  `id` INT(20) NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(15) NOT NULL,
  `lname` VARCHAR(15) NOT NULL,
  `address` TEXT NOT NULL,
  `city` VARCHAR(15) NOT NULL,
  `state` VARCHAR(2) NOT NULL,
  `zip` CHAR(5) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `phone` TEXT NOT NULL,
  `status` VARCHAR(8) NOT NULL,
  `payment` DATE NOT NULL,
  `nra` CHAR(9) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 29
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `capstonedb2018`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capstonedb2018`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(70) NOT NULL,
  `role` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

