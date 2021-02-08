-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Feb 2021 um 13:44
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

--
-- Datenbank: `coronahealthcare`
--
--


-- Daten für Tabelle category

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Schutzmasken'),
(2, 'Desinfektionsmittel'),
(3, 'Hygienepapier'),
(4, 'Reinigungsmittel'),
(5, 'Hautreinigung');

--
-- Daten für Tabelle product
--

INSERT INTO product (id, `name`, price, description, category_id) VALUES
(1, 'Einmalhandtücher', '5.99', 'Einlagig. Lieferbar in der Farbe: Natur. Zickzackfalz. Karton mit 5.000 Stck.', 3),
(2, 'Waschlotion Kanister', '25.99', 'Zum Waschen und Pflegen der Hände. Besonders für empfindliche Haut.\r\n\r\nPh-neutral\r\nSeifen- und Alkalifrei\r\nRückfettend\r\nFlüssige Konsistenz für alle Spendersysteme', 5),
(3, 'Händedesinfektion', '10.99', 'Schülkes desderman® care, zur hygienisch/chirogischen viruziden Händedesinfektion, mit besonders hautfreundlicher Pflegeformel.\r\n\r\nAnwendungsbereiche:\r\nHygienische und chirurgische Händedesinfektion zum Einreiben – unabhängig von Waschbecken und Wasser.', 2);



-- Daten für Tabelle `address`
--

INSERT INTO `address` (`zip`, `street`, `number`, `city`) VALUES
('99096', 'Freiligrathstraße', '5B', 'Erfurt');

--
-- Daten für Tabelle `profile`
--

INSERT INTO `profile` (`createdAt`, `firstname`, `lastname`, `phone`, `email`, `address`, `password`) VALUES
('2021-01-20 16:13:08', 'Marvin', 'Ruppert', '01735929818', 'MarvinRuppert2@gmx.de', 5, '123456789'),
('2021-01-20 16:14:49', 'Marvin', 'Ruppert', '2050', 'Marvin.Ruppert@on-geo.de', 5, '123456789');




