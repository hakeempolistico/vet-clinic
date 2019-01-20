ALTER TABLE `diagnose` ADD `treatment_details` TEXT NULL AFTER `diagnose_details`;
ALTER TABLE `diagnose` ADD `note` TEXT NULL AFTER `treatment_details`;
