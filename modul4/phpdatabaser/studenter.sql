--
-- Tabellstruktur for tabell `studenter`
--

CREATE TABLE IF NOT EXISTS `studenter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etternavn` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fornavn` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `klasse` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobil` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `www` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `epost` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `opprettet` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

--
-- Dataark for tabell `studenter`
--

INSERT INTO `studenter` (`etternavn`, `fornavn`, `klasse`, `mobil`, `www`, `epost`, `opprettet`) VALUES
('Andersen', 'Petter', '6DT', '666', 'http://www.vg.no/', 'ola [at] andersen.no', NULL),
('Pettersen', 'Jens', '2DT', '90990992', 'www.pettersen.no', 'jens.pettersen [at] ', NULL),
('Collin', 'Knut', '4DT', '123', '', 'kc [at] hin.no', NULL),
('Lee', 'Jason', '3DT', '000', 'www.haha.no', 'jason at hin', NULL),
('Olsen', 'Ole', '3DT', '123456789', NULL, NULL, NULL),
('Sponheim', 'Larz', '1DT', '13371337', 'http://www.venstre.no', 'lars[at]venstre.no', NULL),
('Jensen', 'Jens', '3DT', '12345678', '', 'jens [at] hin.no', NULL),
('Olsen', 'Petter', '1DT', '123', '', 'pt [at] hin.no', NULL),
('Nordmann', 'Ola', '2DT', '12345678', NULL, 'ola@hin.no', '2012-03-08 13:00:00'),
('Nordmann', 'Marte', '2DT', '12345678', NULL, 'marte@hin.no', '2012-03-08 12:13:00'),
('Nordmann', 'Ola Petter', '2DT', '12345678', NULL, NULL, NULL),
('Nordmann', 'Kari Anne', '2DT', '12345678', NULL, NULL, NULL),
('Nordmann', 'Fredrik', '2DT', '12345679', NULL, '', NULL),
('Nordmann', 'Silje', '2DT', '12345678', NULL, NULL, NULL),
('Sponheim', 'Lars', '14STA', '13371337', '', 'lars[at]venstre.no', NULL);

