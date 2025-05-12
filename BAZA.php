CREATE DATABASE gogstorg_zavrsni CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE gogstorg_zavrsni;

CREATE TABLE `stsl_ucenik` (
    `id_uc` INT(4) AUTO_INCREMENT PRIMARY KEY, 
    `ime` VARCHAR(50) NOT NULL,  
    `prezime` VARCHAR(50) NOT NULL,
    `oib` VARCHAR(11),  
    `datum_rodenja` DATE,  
    `adresa` VARCHAR(100),
    `grad` VARCHAR(50),
    `spol` ENUM('muško','žensko'),
    `rjesenje` VARCHAR(100),
    `klasa` VARCHAR(45)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_roditelj` (
    `id_ro` INT(4) AUTO_INCREMENT PRIMARY KEY, 
    `ime` VARCHAR(50),  
    `prezime` VARCHAR(50),
    `telefon` VARCHAR(15)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_roditelj_dijete` (
    `id_ro` INT(4) NOT NULL, 
    `id_uc` INT(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_razrednik` (
    `id_ra` INT(4) AUTO_INCREMENT PRIMARY KEY, 
    `ime` VARCHAR(50),  
    `prezime` VARCHAR(50),
    `telefon` VARCHAR(15)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_razred` (
    `id_raz` INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    `oznaka_raz` VARCHAR(10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_sk_godina` (
    `id_skgod` INT(5) PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    `sk_godina` VARCHAR(10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_ucenik_razred` (
    `id_ra` INT(20) NOT NULL, 
    `id_uc` INT(20) NOT NULL,  
    `id_skgod` INT(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_korisnik` (
    `id_ko` INT(2) AUTO_INCREMENT PRIMARY KEY, 
    `ime` VARCHAR(50),  
    `prezime` VARCHAR(50),
    `titula` VARCHAR(50),
    `korisnicko_ime` VARCHAR(50) UNIQUE,
    `lozinka` VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_dnevnik_rada` (
    `id_dr` INT(4) AUTO_INCREMENT PRIMARY KEY, 
    `id_ko` INT(2), 
    `opis` TEXT,
    `datum_unosa` DATETIME DEFAULT NOW()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `stsl_dosje_ucenika` (
    `id_do` INT(10) AUTO_INCREMENT PRIMARY KEY, 
    `id_uc` INT(5), 
    `id_ko` INT(2), 
    `opis` TEXT,
    `datum_unosa` DATETIME 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





INSERT INTO `stsl_ucenik` (`ime`, `prezime`, `oib`, `datum_rodenja`,  `adresa`, `grad`, `spol`, `rjesenje`, `klasa`) VALUES 
('Nikolina', 'Smilović', 1111111111, '2011-01-01', 'Matice Hrvatske 11', 'Split', 'zensko', 'rjesenje1', 'klasa1'),
('Ana Maria', 'Ugrin', 1111111111, '2011-01-01', 'Matice Hrvatske 11', 'Split', 'zensko', 'rjesenje1', 'klasa1'),
('Nataša', 'Burilović', 1111111111, '2011-01-01', 'Matice Hrvatske 11', 'Split', 'zensko', 'rjesenje1', 'klasa1'),
('Antonia', 'Borzić', 1111111111, '2011-01-01', 'Matice Hrvatske 11', 'Split', 'zensko', 'rjesenje1', 'klasa1');


INSERT INTO `stsl_ucenik_razred` (`id_ra`, `id_uc`, `id_skgod`) VALUES 
(1, 2, 1),(6, 3, 1),(19, 4, 1),(27, 1, 1),(28, 5, 1);

INSERT INTO `stsl_dosje_ucenika` (`id_uc`, `id_ko`, `opis`, `datum_unosa`) VALUES 
(2,2,'test - Ima mokraćnih problema','2024-11-18 15:45'),
(2,1,'test - Donio nalaze','2024-11-19 15:45'),
(3,1,'test - Želučane tegobe','2024-11-20 15:45');

INSERT INTO `stsl_sk_godina` (`sk_godina`) VALUES
('24/25');

INSERT INTO `stsl_razred` (`oznaka_raz`) VALUES
('1a'),('2a'),('3a'),('4a'),
('1b'),('2b'),('3b'),('4b'),
('g1a'),('g2a'),('g3a'),('g4a'),
('g1b'),('g2b'),('g3b'),('g4b'),
('g1m'),('g2m'),('g3m'),('g4m'),
('1or'),('2or'),('3or'),('4or'),
('g1p'),('g2p'),('g3p'),('g4p'),
('g1d'),('g2d'),('g3d'),
('1c'),('2c'),('3c'),
('1d'),('2d'),('3d');

INSERT INTO `stsl_korisnik` (`ime`, `prezime`, `titula`, `korisnicko_ime`, `lozinka`) 
VALUES 
('Ana Maria', 'Ugrin', 'pedagog', 'pedagog', '$2y$10$FyzrNJ0ET1E.MZVeayc8qu4juUenBNeYjg87lh/AdpWwll/jMKMLu'),
('Nataša', 'Burilović', 'psiholog', 'psiholog', '$2y$10$JBXoLeZdRg8qtISzXqwcvO22asZn2fHDsLQe2y0dkkls8Ee4CJ2Ey'),
('Antonia', 'Borzić', 'stped', 'stped', '$2y$10$0ewv.xPwyl5chV25lw7JjOJKJxyrodO/.WHiiY/P9drnR6ExmTgZ.');

INSERT INTO `stsl_dnevnik_rada` (`id_ko`, `opis`, `datum_unosa`) VALUES 
(1,'test - Dojava o bombi','2024-11-18 15:45'),
(1,'test - Policija zaprimila izvještaj','2024-11-19 16:10'),
(2,'test - Pronašli krivca: Ante Antic','2024-11-20 17:20');




INSERT INTO `stsl_roditelj` (`ime`, `prezime`, `telefon`) VALUES 
('Ante', 'Smilović','0917894516'),
('Ana', 'Balić', '0971452631'),
('Karlo', 'Balić', '0971452622'),
('Josip', 'Franković', '0981472536'),
('Jelena', 'Franković', '0981472511'),
('Anđelka', 'Lozert', '0917418520');

INSERT INTO `stsl_roditelj_dijete` (`id_ro`,`id_uc`) VALUES 
(1,1),(2,2),(3,2),(4,3),(5,3),(6,4);

INSERT INTO `stsl_razrednik` (`ime`, `prezime`, `telefon`) VALUES
('Nikolina', 'Smilović','0917894516'),
('Tomislav', 'Jukić', '0971452631'),
('Duška', 'Boban', '0971452622'),
('Nives', 'Škero', '0981472536'),
('Martina', 'Javorčić', '0981472511'),
('Jelena', 'Gluić', '0917418520');

//Tino
