CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NULL DEFAULT NULL,
	`email` VARCHAR(255) NULL DEFAULT NULL,
	`login` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`role_id` INT(4) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	CONSTRAINT `users_roles`
	FOREIGN KEY (`role_id`)
	REFERENCES `roles` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
)
	COLLATE='utf8_general_ci'
	ENGINE=InnoDB;

CREATE TABLE `roles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
)
	COLLATE='utf8_general_ci'
	ENGINE=InnoDB;

CREATE TABLE `ideas` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`idea` VARCHAR(255) NOT NULL DEFAULT '',
	`description` VARCHAR(1000) NULL DEFAULT '',
	PRIMARY KEY (`id`)
)
	COLLATE='utf8_general_ci'
	ENGINE=InnoDB;

CREATE TABLE `languages` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL DEFAULT '',
	`authentic_name` VARCHAR(255) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
)
	COLLATE='utf8_general_ci'
	ENGINE=InnoDB;

CREATE TABLE `words` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`word` VARCHAR(255) NOT NULL,
	`idea_id` INT NOT NULL,
	`language_id` INT NOT NULL,
	`transcription` VARCHAR(255) NULL,
	`transcription_rus` VARCHAR(255) NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT `words_ideas`
	FOREIGN KEY (`idea_id`)
	REFERENCES `ideas` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `words_languages`
	FOREIGN KEY (`language_id`)
	REFERENCES `languages` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
)
	COLLATE='utf8_general_ci'
	ENGINE=InnoDB;

