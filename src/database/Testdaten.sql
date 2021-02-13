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

INSERT INTO `product` (`id`, `name`, `price`, `description`, `picturePath` , `category_id`) VALUES
(1, 'Einmalhandtücher', '5.99', 'Einlagig. Lieferbar in der Farbe: Natur. Zickzackfalz. Karton mit 5.000 Stck.', 3),
(2, 'Waschlotion Kanister', '25.99', 'Zum Waschen und Pflegen der Hände. Besonders für empfindliche Haut.\r\n\r\nPh-neutral\r\nSeifen- und Alkalifrei\r\nRückfettend\r\nFlüssige Konsistenz für alle Spendersysteme', 5),
(3, 'Händedesinfektion', '10.99', 'Schülkes desderman® care, zur hygienisch/chirogischen viruziden Händedesinfektion, mit besonders hautfreundlicher Pflegeformel.\r\n\r\nAnwendungsbereiche:\r\nHygienische und chirurgische Händedesinfektion zum Einreiben – unabhängig von Waschbecken und Wasser.', 2),
(4, 'Reinigungspapier auf Rolle', '36.99', 'Ideal für die Maschinenreinigung. 38 cm breit, 3-lagig, extra stark, stahlblau.\r\nPer Rolle 1000 Abrisse à 38 cm', 'Reinigungspapier_Rolle.jpg', 3),
(5, 'Tork Reinigungspapier, 2er Pack', '43.00', 'Ideal für die Maschinenreinigung, für Industrie und Werkstätten. 37 cm breit, 2-lagiges perforiertes Tissue-Reinigungspapier, stahlblau. Im 2er Pack, per Rolle 1.000 Abrisse à 34 cm.', 'Tork_Reinigungspapier.jpg', 3),
(6, 'Tork Reinigungspapier Kleinrolle Advanced 10x', '47.00', 'Sehr strapazierfähiges Wischtuch für verschiedenste Reinigungsarbeiten. 23 cm breit, 2-lagig perforiertes Reinigungspapier. Sehr saugfähig im 10 er Pack, per Rolle 200 Abrisse à 28 cm.', 'Tork_Kleinrolle.jpg', 3),
(7, 'Auro Desinfektionsmittel', '9.00', 'Desinfektionsmittel Lösung zur Anwendung auf der Haut.\r\n\r\nAnwendung: Verwenden Sie nur eine geringe Menge von 3-5ml (Das Volumen entspricht etwa einer Kirsche oder einem Teelöffel (5ml)). Verreiben Sie die Desinfektion für ca. 30 Sekunden.', 'Auro_Desinfektionsmittel.jpg', 2),
(8, 'Sterillium classic pure Händedesinfektion', '2.86', 'Sterillium® classic pure\r\nDas klassische Sterillium® als farbstoff- und parfümfreie Variante', 'Steri_Desinfektionsmittel.jpg', 2),
(9, 'lerasept Händedesinfektion 5l', '90.25', 'Lerasept® HR ist ein flüssiges, auf Alkohol basierendes Handdekontaminationsmittel.\r\nLerasept® HR ist auf einen hautverträglichen pH-Wert eingestellt und enthält ein Rückfettungssystem.', 'lerasept_Kanister.jpg', 2),
(10, '0,5 l Moebert Desinfektionsmittel 78g Ethanol', '9.83', '0,5 l Handdesinfektionsmittel 78g Ethanol nach WHO Desinfektionsmittel für Hände', 'Moebert_Desinfektionsmittel.jpg', 2),
(11, 'Falthandtücher Recyclingpapier 2 Kartons', '23.90', 'Ideal für die Maschinenreinigung. 38 cm breit, 3-lagig, extra stark, stahlblau.\r\nPer Rolle 1000 Abrisse à 38 cm', 'Falthandtuch.jpg', 3),
(12, 'Octenisan Waschlotion 150 ml', '2.66', 'Waschlotion für Haut und Haare auf Basis ausgesuchter Pflegesubstanzen, hautmilder Tenside und Octenidin.', 'Octenisan_Waschlotion.jpg', 5),
(13, 'ISANAMED Waschlotion 300 ml', '1.78', 'Die ISANA MED WASCHLOTION ist für die Reinigung von Kopf bis Fuß geeignet.\r\n\r\nfür empfindliche Haut\r\nseifen- & alkalifrei', 'Isanamed_Waschlotion.jpg', 5),
(14, 'ECOLAB Manisoft® Waschlotion', '3.25', 'Schonende Reinigung der Haut mit rückfettenden Pflegekomponenten.', 'Manisoft_Waschlotion.jpg', 5),
(15, 'Waschlotion Schülke S&M 500ml', '1.99', 'Seifenfrei zur täglichen Haut- und Händereinigung: Mit dezentem Duft und zartem Schaum.', 'Schuelke_Waschlotion.jpg', 5),
(16, 'Atemschutzmaske FFP2 NR mit Atemventil', '21.45', 'Einsatz: für mittlere Risiken wie mindergiftige feste und flüssige Aerosole\r\nInhalt pro VE: 10 x 20 Stück', 'Atemschutzmaske.jpg', 1),
(17, '10x Atemschutzmaske Halbmaske FFP2/KN95-9801', '29.90', 'Zertifizierte Einweg-Masken mit hohem Tragekomfort und wirksamer Filtration von Bakterien und Viren\r\nInhalt 10 Stück', 'Atemschutzmaske_Halbmaske.jpg', 1),
(18, '10x Atemschutzmaske FFP3', '70.54', '3M Medica Atemschutzmaske FFP3 mit Cool-Flow Ventil 9332\r\nInhalt: 10 Stück', 'Atemschutzmaske_FFP3.jpg', 1),
(19, 'Atemschutzmaske medizinisch 50Stk', '29.00', 'Mund-Nasen-Schutzmaske 3-lagig, Schmelzblasfilter, Ohrenhalterung, Nasenbügel für Nasenrücken\r\nInhalt: 50 Stück', 'Atemschutzmaske_med.jpg', 1),
(20, 'Einweg-Maske Atemmaske EN 14683 Typ II R', '9.50', 'Schützen Sie Ihre Gesundheit: leichte, bequeme und geruchlose Einweg-Maske. Reizt die Haut nicht.\r\nErfüllt die europäische Norm: EN 14683 Type IIR Atem-Schutzmaske 3-Lagig\r\nInhalt: 50 Stück', 'Atemschutzmaske_SMDP.jpg', 1),
(21, 'Hygienereiniger Poliboy 500ml', '3.99', 'Für alle abwischbaren Oberflächen im ganzen Haus\r\nHygienisch, sicher, sauber', 'Hygienereiniger_Poliboy.jpg', 4),
(22, 'Chlor Hygienereiniger 10l', '33.99', 'Gerüche, Verfärbungen, Schmutz und Bakterien werden aufgelöst und entfernt.\r\nChlor- Hygiene- Reiniger wirkt auch dort, wo andere Reiniger aufgeben.', 'chlor-hygiene-reiniger-10l.jpg', 4),
(23, 'orochemie_Hygienereiniger 10l + 6x1l', '24.95', 'Verwendbar auf desinfizierten Oberflächen und Böden in medizinischen Bereichen: kein Kleben oder Verfärben.\r\npH-Wert 11 - 12.', 'orochemie_Hygienereiniger.jpg', 4),
(24, 'Dimex Hygienereiniger fruit Duftreiniger', '6.56', 'Frischer Duftreiniger\r\nZitronenduft\r\nUniversell einsetzbar\r\nHochwirksam\r\nmit Didecyldimethylammoniumchlorid', 'Dimex_Hygienereiniger.jpg', 4),
(25, 'Haka Hygienereiniger Spray 1l', '13.95', 'Entfernt 99,99% der Bakterien und Viren - auch Corona-Viren\r\nSchnelle Hygiene für Küche, Wohnbereich, Kinderzimmer u.v.m.\r\nEffektiv und verträglich – für Oberflächen mit Lebensmittelkontakt', 'Haka_Hygienereiniger.jpg', 4);


-- Daten für Tabelle `address`
--

INSERT INTO `address` (`zip`, `street`, `number`, `city`) VALUES
('99096', 'Freiligrathstraße', '5B', 'Erfurt');

--
-- Daten für Tabelle `profile`
--

INSERT INTO `profile` (`createdAt`, `firstname`, `lastname`, `phone`, `email`, `address`, `password`) VALUES
('2021-01-20 16:13:08', 'Marvin', 'Ruppert', '01735929818', 'MarvinRuppert2@gmx.de', 1, '123456789'),
('2021-01-20 16:14:49', 'Marvin', 'Ruppert', '2050', 'Marvin.Ruppert@on-geo.de', 1, '123456789');




