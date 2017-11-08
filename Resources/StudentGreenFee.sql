-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema greenfee
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema greenfee
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `greenfee` DEFAULT CHARACTER SET utf8 ;
USE `greenfee` ;

-- -----------------------------------------------------
-- Table `greenfee`.`description`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greenfee`.`description` (
  `proposal_ID` INT NOT NULL,
  `accountability` VARCHAR(500) NULL,
  `anticipated outcomes` VARCHAR(500) NULL,
  `cost savings` VARCHAR(500) NULL,
  `potential` VARCHAR(500) NULL,
  `benchmarking` VARCHAR(500) NULL,
  `lifespan` VARCHAR(500) NULL,
  `student input` VARCHAR(500) NULL,
  `sustainability` VARCHAR(500) NULL,
  PRIMARY KEY (`proposal_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greenfee`.`group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greenfee`.`group` (
  `group_ID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`group_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greenfee`.`proposal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greenfee`.`proposal` (
  `proposal_ID` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `budget` DOUBLE NULL,
  `status` VARCHAR(45) NULL,
  `group` VARCHAR(45) NULL,
  `description_ID` INT NOT NULL,
  `group_group_ID` INT NOT NULL,
  PRIMARY KEY (`proposal_ID`, `description_ID`, `group_group_ID`),
  INDEX `fk_proposal_description_idx` (`description_ID` ASC),
  INDEX `fk_proposal_group1_idx` (`group_group_ID` ASC),
  CONSTRAINT `fk_proposal_description`
    FOREIGN KEY (`description_ID`)
    REFERENCES `greenfee`.`description` (`proposal_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proposal_group1`
    FOREIGN KEY (`group_group_ID`)
    REFERENCES `greenfee`.`group` (`group_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greenfee`.`advisor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greenfee`.`advisor` (
  `name` VARCHAR(45) NULL,
  `dept` VARCHAR(45) NULL,
  `advisor_email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NULL,
  `proposal_proposal_ID` INT NOT NULL,
  `proposal_description_ID` INT NOT NULL,
  `proposal_group_group_ID` INT NOT NULL,
  PRIMARY KEY (`advisor_email`, `proposal_proposal_ID`, `proposal_description_ID`, `proposal_group_group_ID`),
  INDEX `fk_advisor_proposal1_idx` (`proposal_proposal_ID` ASC, `proposal_description_ID` ASC, `proposal_group_group_ID` ASC),
  CONSTRAINT `fk_advisor_proposal1`
    FOREIGN KEY (`proposal_proposal_ID` , `proposal_description_ID` , `proposal_group_group_ID`)
    REFERENCES `greenfee`.`proposal` (`proposal_ID` , `description_ID` , `group_group_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greenfee`.`proposer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greenfee`.`proposer` (
  `name` VARCHAR(45) NULL,
  `affiliation` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NULL,
  `group_group_ID` INT NOT NULL,
  PRIMARY KEY (`email`, `group_group_ID`),
  INDEX `fk_proposer_group1_idx` (`group_group_ID` ASC),
  CONSTRAINT `fk_proposer_group1`
    FOREIGN KEY (`group_group_ID`)
    REFERENCES `greenfee`.`group` (`group_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greenfee`.`questionnaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greenfee`.`questionnaire` (
  `question name` VARCHAR(50) NOT NULL,
  `question description` VARCHAR(45) NULL,
  `rating` VARCHAR(50) NULL,
  PRIMARY KEY (`question name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greenfee`.`review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greenfee`.`review` (
  `questionnaire_question name` VARCHAR(50) NOT NULL,
  `proposal_proposal_ID` INT NOT NULL,
  `reviewcol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`questionnaire_question name`, `proposal_proposal_ID`),
  INDEX `fk_questionnaire_has_proposal_proposal1_idx` (`proposal_proposal_ID` ASC),
  INDEX `fk_questionnaire_has_proposal_questionnaire1_idx` (`questionnaire_question name` ASC),
  CONSTRAINT `fk_questionnaire_has_proposal_questionnaire1`
    FOREIGN KEY (`questionnaire_question name`)
    REFERENCES `greenfee`.`questionnaire` (`question name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_questionnaire_has_proposal_proposal1`
    FOREIGN KEY (`proposal_proposal_ID`)
    REFERENCES `greenfee`.`proposal` (`proposal_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greenfee`.`reviewer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greenfee`.`reviewer` (
  `email` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `phone` INT NOT NULL,
  `review_questionnaire_question name` VARCHAR(50) NOT NULL,
  `review_proposal_proposal_ID` INT NOT NULL,
  PRIMARY KEY (`email`, `review_questionnaire_question name`, `review_proposal_proposal_ID`),
  INDEX `fk_reviewer_review1_idx` (`review_questionnaire_question name` ASC, `review_proposal_proposal_ID` ASC),
  CONSTRAINT `fk_reviewer_review1`
    FOREIGN KEY (`review_questionnaire_question name` , `review_proposal_proposal_ID`)
    REFERENCES `greenfee`.`review` (`questionnaire_question name` , `proposal_proposal_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
