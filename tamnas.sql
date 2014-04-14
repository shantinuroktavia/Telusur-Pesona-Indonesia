CREATE TABLE IF NOT EXISTS `TamanNasional` (
	`IdTaman` INT(10) NOT NULL,
	`NamaTaman` VARCHAR(64) NOT NULL,
	`Provinsi` VARCHAR(32) NOT NULL,
	`Profil` TEXT NOT NULL,
	`Akses` VARCHAR(500),
	`NomorKontak` VARCHAR(20),
	`HTM` INT(10),
	`Tips` TEXT,
	PRIMARY KEY (`IdTaman`),
	KEY `IdTaman` (`IdTaman`)
);

