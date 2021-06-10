Create DATABASE salao1;
use salao1;
CREATE TABLE `usuario` (
  `usuario_Id` INT(5) NOT NULL AUTO_INCREMENT,
  `usuario_nome` VARCHAR(45) NOT NULL,
  `usuario_senha` VARCHAR(45) NOT NULL,
  `usuario_email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`usuario_Id`));
  
  CREATE TABLE `cliente` (
  `cliente_Id` INT(5) NOT NULL AUTO_INCREMENT,
  `cliente_nome` VARCHAR(45) NOT NULL,
  `cliente_senha` VARCHAR(45) NOT NULL,
  `cliente_email` VARCHAR(45) NOT NULL,
  `cliente_data_nasc` DATE ,
  `cliente_data_cadastro` DATE NOT NULL,
  PRIMARY KEY (`cliente_Id`));

CREATE TABLE `servico` (
  `servico_Id` INT(5) NOT NULL AUTO_INCREMENT,
  `servico_preco` DECIMAL(10,2) NOT NULL,
  `servico_descrição` TEXT NOT NULL,
  `servico_runtime` TIME NOT NULL,
  PRIMARY KEY (`servico_Id`));

   CREATE TABLE `agenda` (
  `agenda_id` INT(5) NOT NULL AUTO_INCREMENT,
  `agenda_data` DATE NOT NULL,
  `agenda_hora` TIME NOT NULL,
  `agenda_status` VARCHAR(15) NOT NULL,
  `agenda_servico_id` INT(5) NOT NULL,
  `agenda_cliente_Id` INT(5) NOT NULL,
  PRIMARY KEY (`agenda_id`),
  CONSTRAINT `fk_cliente_id`
    FOREIGN KEY (`agenda_cliente_Id`)
    REFERENCES `salao1`.`cliente` (`cliente_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servico_id`
    FOREIGN KEY (`agenda_servico_id`)
    REFERENCES `salao1`.`servico` (`servico_Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
   CREATE TABLE IF NOT EXISTS `salao1`.`administrador` (
    `idAdministrador` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NULL DEFAULT NULL,
    `email` VARCHAR(45) NOT NULL,
    `senha` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idAdministrador`))
    ENGINE = InnoDB
    AUTO_INCREMENT = 2
    DEFAULT CHARACTER SET = latin1;

