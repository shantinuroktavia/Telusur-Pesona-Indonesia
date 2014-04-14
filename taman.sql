
CREATE TABLE IF NOT EXISTS `Penginapan` (
	`IdTaman` INT(10) NOT NULL,
	`IdPenginapan` INT(10) NOT NULL,
	`NamaPenginapan` VARCHAR(100) NOT NULL,
	`Lokasi` VARCHAR(100) NOT NULL,
	`NomorKontak` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`IdPenginapan`),
	KEY `IdTaman` (`IdTaman`)
);

CREATE TABLE IF NOT EXISTS `Thread` (
	`IdThread` INT(10) NOT NULL AUTO_INCREMENT,
	`JudulThread` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`IdThread`)
);

