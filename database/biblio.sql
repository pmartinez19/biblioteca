DROP DATABASE bibliotecapedro if EXISTS ;
CRETE DATABASE bibliotecapedro;

CREATE TABLE `bibliotecapedro`.`USERS` (
     `id` INT NOT NULL AUTO_INCREMENT, 
     `nom` VARCHAR(20) NOT NULL , 
     `email` VARCHAR(100) NOT NULL, 
     `password` VARCHAR(16) NOT NULL , 
      PRIMARY KEY (`id`),
      UNIQUE `email` (`email`)
    );
ALTER TABLE `USERS` ADD `admin` BOOLEAN NOT NULL DEFAULT FALSE AFTER `password`;
ALTER TABLE `USERS` ADD `updated_at` TIMESTAMP NOT NULL AFTER `admin`, ADD `created_at` TIMESTAMP NOT NULL AFTER `updated_at`;


CREATE TABLE `bibliotecapedro`.`LLIBRES` (
     `id` INT NOT NULL AUTO_INCREMENT , 
     `ISBN` INT NOT NULL , 
     `titol` VARCHAR(100) NOT NULL , 
     `autor` VARCHAR(100) NOT NULL , 
     `genere` VARCHAR(20) NOT NULL , 
     PRIMARY KEY (`id`));

CREATE TABLE `bibliotecapedro`.`PRESTECS` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `data` DATE NOT NULL , 
    `disponible` BOOLEAN NOT NULL , 
    `id_user` INT NOT NULL , 
    `id_llibre` INT NOT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `PRESTECS` ADD CONSTRAINT `user_fk` 
FOREIGN KEY (`id_user`) 
REFERENCES `USERS`(`id`) 
ON DELETE CASCADE 
ON UPDATE CASCADE;

ALTER TABLE `PRESTECS` ADD CONSTRAINT `llibre_fk` 
FOREIGN KEY (`id_llibre`) REFERENCES 
`LLIBRES`(`id`) ON DELETE CASCADE 
ON UPDATE CASCADE;

GRANT SELECT, INSERT, UPDATE ON bibliotecapedro.LLIBRES.ISBN, bibliotecapedro.LLIBRES.titol, bibliotecapedro.LLIBRES.autor,
bibliotecapedro.LLIBRES.genere TO adminbib@'%';

REVOKE ALL PRIVILEGES ON `bibliotecapedro`.`LLIBRES` FROM 'adminbib'@'%';

GRANT SELECT, INSERT, UPDATE, DELETE ON `bibliotecapedro`.`LLIBRES` TO 'adminbib'@'%';

REVOKE ALL PRIVILEGES ON `bibliotecapedro`.`LLIBRES` FROM 'adminbib'@'%'; GRANT SELECT, INSERT, UPDATE (`ISBN`, `titol`, `autor`, `genere`), DELETE ON `bibliotecapedro`.`LLIBRES` TO 'adminbib'@'%'; ALTER USER 'adminbib'@'%' ;

GRANT SELECT, INSERT, UPDATE (`data`, `disponible`, `id_user`, `id_llibre`), DELETE ON `bibliotecapedro`.`PRESTECS` TO 'adminbib'@'%'; ALTER USER 'adminbib'@'%' ;

REVOKE ALL PRIVILEGES ON `bibliotecapedro`.`USERS` FROM 'adminbib'@'%'; GRANT SELECT, INSERT (`id`, `nom`, `email`, `password`), UPDATE (`nom`, `email`, `password`), DELETE ON `bibliotecapedro`.`USERS` TO 'adminbib'@'%'; ALTER USER 'adminbib'@'%';