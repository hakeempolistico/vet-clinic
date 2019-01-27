CREATE TABLE `vet_clinic_v2`.`schedule_status` ( `id` INT NOT NULL AUTO_INCREMENT ,  `name` TEXT NULL ,  `status` INT NOT NULL DEFAULT '1' ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;


INSERT INTO `schedule_status` (`id`, `name`, `status`) VALUES (NULL, 'Pending', '1'), (NULL, 'Accepted', '1'), (NULL, 'Rejected', '1'), (NULL, 'Cancel', '1');


DROP TABLE `global_parameter_types`; 

DROP TABLE `global_parameter`; 
