CREATE TABLE IF NOT EXISTS `roles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NULL DEFAULT NULL,
	`email` VARCHAR(255) NULL DEFAULT NULL,
	`login` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`role_id` INT(4) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	CONSTRAINT `FK_users_roles`
	FOREIGN KEY (`role_id`)
	REFERENCES `roles` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ideas` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`idea` VARCHAR(255) NOT NULL DEFAULT '',
	`description` VARCHAR(1000) NULL DEFAULT '',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `languages` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL DEFAULT '',
	`authentic_name` VARCHAR(255) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `words` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`word` VARCHAR(255) NOT NULL,
	`idea_id` INT NOT NULL,
	`language_id` INT NOT NULL,
	`transcription` VARCHAR(255) NULL,
	`transcription_rus` VARCHAR(255) NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT `FK_words_ideas`
	FOREIGN KEY (`idea_id`)
	REFERENCES `ideas` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_words_languages`
	FOREIGN KEY (`language_id`)
	REFERENCES `languages` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `people` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`lastname` varchar(50) NOT NULL,
	`firstname` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `instruments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `record_types` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `file_types` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `authors` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`person_id` int(11) NOT NULL,
	#KEY `FK_authors_people` (`id`),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK_authors_people`
	FOREIGN KEY (`person_id`)
	REFERENCES `people` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `musicians` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`person_id` int(11) NOT NULL,
	#KEY `FK_musicians_people` (`id`),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK_musicians_people`
	FOREIGN KEY (`person_id`)
	REFERENCES `people` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `files` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`path` varchar(255) NOT NULL,
	`file_type_id` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`),
	#KEY `FK_files_file_types` (`file_type_id`),
	CONSTRAINT `FK_files_file_types`
	FOREIGN KEY (`file_type_id`)
	REFERENCES `file_types` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `musics` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`notation_file_id` int(11) NOT NULL,
	`creation_date` date DEFAULT NULL,
	PRIMARY KEY (`id`),
	#KEY `FK_musics_files` (`notation_file_id`),
	CONSTRAINT `FK_musics_files`
	FOREIGN KEY (`notation_file_id`)
	REFERENCES `files` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `texts` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`content_file_id` int(11) NOT NULL,
	`creation_date` date DEFAULT NULL,
	PRIMARY KEY (`id`),
	#KEY `FK_texts_files` (`content_file_id`),
	CONSTRAINT `FK_texts_files`
	FOREIGN KEY (`content_file_id`)
	REFERENCES `files` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `albums` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`creation_date` date DEFAULT NULL,
	`cover_file_id` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`),
	#KEY `FK_albums_files` (`cover_file_id`),
	CONSTRAINT `FK_albums_files`
	FOREIGN KEY (`cover_file_id`)
	REFERENCES `files` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `collectives` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`begin_date` date DEFAULT NULL,
	`end_date` date DEFAULT NULL,
	`creation_place` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `collective_musicians` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`musician_id` int(11) NOT NULL,
	#KEY `FK_collective_musicians_collectives` (`collective_id`),
	#KEY `FK_collective_musicians_people` (`musician_id`),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK_collective_musicians_collectives`
	FOREIGN KEY (`collective_id`)
	REFERENCES `collectives` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_collective_musicians_people`
	FOREIGN KEY (`musician_id`)
	REFERENCES `people` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `compositions` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`music_id` int(11) NOT NULL,
	`text_id` int(11) DEFAULT NULL,
	`name` varchar(255) NOT NULL,
	`creation_date` date DEFAULT NULL,
	`notation_file_id` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`),
	#KEY `FK_compositions_musics` (`music_id`),
	#KEY `FK_compositions_texts` (`text_id`),
	#KEY `FK_compositions_files` (`notation_file_id`),
	CONSTRAINT `FK_compositions_files`
	FOREIGN KEY (`notation_file_id`)
	REFERENCES `files` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_compositions_musics`
	FOREIGN KEY (`music_id`)
	REFERENCES `musics` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_compositions_texts`
	FOREIGN KEY (`text_id`)
	REFERENCES `texts` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `records` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`composition_id` int(11) NOT NULL,
	`album_id` int(11) NOT NULL,
	`collective_id` int(11) NOT NULL,
	`creation_date` date DEFAULT NULL,
	`record_type_id` int(11) NOT NULL,
	`duration` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'in seconds',
	`file_id` int(11) DEFAULT NULL,
	`format` varchar(50) DEFAULT NULL,
	`sample_rate` varchar(50) DEFAULT NULL,
	`bit_depth` varchar(50) DEFAULT NULL,
	PRIMARY KEY (`id`),
	#KEY `FK_records_compositions` (`composition_id`),
	#KEY `FK_records_albums` (`album_id`),
	#KEY `FK_records_collectives` (`collective_id`),
	#KEY `FK_records_record_types` (`record_type_id`),
	#KEY `FK_records_files` (`file_id`),
	CONSTRAINT `FK_records_albums`
	FOREIGN KEY (`album_id`)
	REFERENCES `albums` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_records_collectives`
	FOREIGN KEY (`collective_id`)
	REFERENCES `collectives` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_records_compositions`
	FOREIGN KEY (`composition_id`)
	REFERENCES `compositions` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_records_files`
	FOREIGN KEY (`file_id`)
	REFERENCES `files` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_records_record_types`
	FOREIGN KEY (`record_type_id`)
	REFERENCES `record_types` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `musician_records` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`musician_id` int(11) NOT NULL,
	`record_id` int(11) NOT NULL,
	`instrument_id` int(11) NOT NULL,
	PRIMARY KEY (`id`),
	#KEY `FK_musician_records_people` (`musician_id`),
	#KEY `FK_musician_records_records` (`record_id`),
	#KEY `FK_musician_records_instruments` (`instrument_id`),
	CONSTRAINT `FK_musician_records_instruments`
	FOREIGN KEY (`instrument_id`)
	REFERENCES `instruments` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_musician_records_people`
	FOREIGN KEY (`musician_id`)
	REFERENCES `people` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_musician_records_records`
	FOREIGN KEY (`record_id`)
	REFERENCES `records` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `music_authors` (
	`music_id` int(11) NOT NULL,
	`author_id` int(11) NOT NULL,
	#KEY `FK_music_authors_musics` (`music_id`),
	#KEY `FK_music_authors_people` (`author_id`),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK_music_authors_musics`
	FOREIGN KEY (`music_id`)
	REFERENCES `musics` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_music_authors_people`
	FOREIGN KEY (`author_id`)
	REFERENCES `people` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `text_authors` (
	`text_id` int(11) NOT NULL,
	`author_id` int(11) NOT NULL,
	#KEY `FK_text_authors_texts` (`text_id`),
	#KEY `FK_text_authors_people` (`author_id`),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK_text_authors_people`
	FOREIGN KEY (`author_id`)
	REFERENCES `people` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	CONSTRAINT `FK_text_authors_texts`
	FOREIGN KEY (`text_id`)
	REFERENCES `texts` (`id`)
		ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

