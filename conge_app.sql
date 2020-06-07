
-- 
-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** `demande_conge`

CREATE TABLE `demande_conge`
(
 `id`         int NOT NULL AUTO_INCREMENT ,
 `from_date`  date NOT NULL ,
 `to_date`    date NOT NULL ,
 `created_at` datetime NOT NULL ,
 `status`     tinyint NULL ,
 `comment`    mediumtext NOT NULL ,
 `User_id`    int NOT NULL ,
 `type_conge` int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_39` (`User_id`),
CONSTRAINT `FK_39` FOREIGN KEY `fkIdx_39` (`User_id`) REFERENCES `Users` (`id`),
KEY `fkIdx_48` (`type_conge`),
CONSTRAINT `FK_48` FOREIGN KEY `fkIdx_48` (`type_conge`) REFERENCES `type_conge` (`id`)
);




-- 
-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** `payment`

CREATE TABLE `payment`
(
 `id`           int NOT NULL AUTO_INCREMENT ,
 `month`        date NOT NULL ,
 `gross_salary` float NOT NULL ,
 `leave_days`   integer NOT NULL ,
 `user_id`      int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_60` (`user_id`),
CONSTRAINT `FK_60` FOREIGN KEY `fkIdx_60` (`user_id`) REFERENCES `Users` (`id`)
);






-- 
-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** `Service`

CREATE TABLE `Service`
(
 `id`                int NOT NULL AUTO_INCREMENT ,
 `service_name`      varchar(45) NOT NULL ,
 `service_shortname` varchar(45) NULL ,

PRIMARY KEY (`id`)
);






-- 
-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** `type_conge`

CREATE TABLE `type_conge`
(
 `id`          int NOT NULL AUTO_INCREMENT ,
 `conge_name`  varchar(50) NOT NULL ,
 `conge_label` varchar(45) NOT NULL ,
 `solde_conge` integer NULL ,

PRIMARY KEY (`id`)
);


-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** `Users`

CREATE TABLE `Users`
(
 `id`            int NOT NULL AUTO_INCREMENT ,
 `username`      varchar(50) NOT NULL ,
 `password`      varchar(50) NOT NULL ,
 `email`         varchar(45) NOT NULL ,
 `full_name`     varchar(50) NOT NULL ,
 `cin`           varchar(50) NOT NULL ,
 `tel`           varchar(20) NOT NULL ,
 `role`          varchar(45) NOT NULL ,
 `salary`        float NULL ,
 `hire_date`     date NULL ,
 `sexe`          char(2) NULL ,
 `sold_conge`    integer NULL ,
 `photo_profile` varchar(200) NOT NULL ,
 `service_id_1`  int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_28` (`service_id_1`),
CONSTRAINT `FK_28` FOREIGN KEY `fkIdx_28` (`service_id_1`) REFERENCES `Service` (`id`)
);










