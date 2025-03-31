
//dodavanje novih redaka u tablicu

ALTER TABLE `stsl_ucenik`
ADD COLUMN `ime_oca` VARCHAR(50) AFTER `prezime`,
ADD COLUMN `ime_majke` VARCHAR(50) AFTER `ime_oca`;

//azurira insert upiz
INSERT INTO `stsl_ucenik` (`ime`, `prezime`, `ime_oca`, `ime_majke`, `oib`, `datum_rodenja`, `adresa`, `grad`, `spol`, `rjesenje`, `klasa`) VALUES 
('Nikolina', 'Smilović', 'Ante', 'Marija', 1111111111, '2011-01-01', 'Matice Hrvatske 11', 'Split', 'žensko', 'rjesenje1', 'klasa1'),
('Ana Maria', 'Ugrin', 'Josip', 'Ivana', 1111111111, '2011-01-01', 'Matice Hrvatske 11', 'Split', 'žensko', 'rjesenje1', 'klasa1');

//azurira vec postojece podatke
UPDATE `stsl_ucenik`
SET `ime_oca` = 'Ante', `ime_majke` = 'Marija'
WHERE `id_uc` = 1;

UPDATE `stsl_ucenik`
SET `ime_oca` = 'Josip', `ime_majke` = 'Ivana'
WHERE `id_uc` = 2;

//provjerava promjene u tablici
DESC `stsl_ucenik`;
