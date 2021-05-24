-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 22, 2021 la 12:37 AM
-- Versiune server: 10.4.18-MariaDB
-- Versiune PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `coca_cola`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nume` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `parola` varchar(40) NOT NULL,
  `c1` int(11) DEFAULT 0,
  `c2` int(11) DEFAULT 0,
  `c3` int(11) DEFAULT 0,
  `c4` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `nume`, `email`, `parola`, `c1`, `c2`, `c3`, `c4`) VALUES
(1, 'Tezabo', 'tezbo@sbcglobal.net', 'wdjwidaidj', 1, 0, 0, 0),
(2, 'Madaked', 'mddallara@aol.com', '1231isa', 0, 0, 0, 0),
(3, 'Ionale', 'tlinden@msn.com', 'dadiaje', 0, 0, 0, 0),
(4, 'Indhsac', 'mschilli@att.net', 'sakeifi', 0, 0, 0, 0),
(5, 'Ybcjsdcs', 'ullman@att.net', 'qdqioeji', 0, 0, 0, 0),
(6, 'Opecahc', 'chrwin@mac.com', 'ch*ejnsj', 0, 0, 0, 0),
(7, 'Anagui', 'gilmoure@yahoo.cam', 'asdausaa', 0, 0, 0, 0),
(8, 'Opebgr', 'pjacklam@comcast.net', '@32sddiia', 0, 0, 0, 0),
(9, 'Uitatat', 'staikos@yahoo.cam', 'ajsijcii', 0, 0, 0, 0),
(10, 'Koplis', 'nachbaur@gmail.com', '923e829sak', 0, 0, 0, 0),
(11, 'Hymjk', 'hyper@verizon.net', 'iaudoanf', 0, 0, 0, 0),
(12, 'Nehaaan', 'neha36@yahoo.com', '90923js', 0, 0, 0, 0),
(13, 'Kgatej', 'kshlerin.carmine@gmail.com', '2sdajaa', 0, 0, 0, 0),
(14, 'Viscents', 'vincenza.stamm@vandervort.com', 'oidnnns', 0, 0, 0, 0),
(15, 'Nojks', 'gmcclure@hotmail.com', 'paooanc', 0, 0, 0, 0),
(16, 'Kolpin', 'sstroman@krajcik.org', '232sjjslaa', 0, 0, 0, 0),
(17, 'Yoidt', 'hhahn@schmeler.com', 'acj7ewdhu', 0, 0, 0, 0),
(18, 'Werstd', 'barrett.schroeder@swaniawski.o', 'wuehdiwu6k', 0, 0, 0, 0),
(19, 'Qperts', 'payton.schmitt@hotmail.com', 'sii$32dc', 0, 0, 0, 0),
(20, 'Ytreopd', 'lorine.conn@romaguera.com', '23djuc777', 0, 0, 0, 0),
(21, 'Uitopert', 'caden.hermann@rau.com', 'w900udjnd', 0, 0, 0, 0),
(22, 'Tevina', 'tevin.gibson@yahoo.com', 'ajisjosa3', 0, 0, 0, 0),
(23, 'Yasnetr', 'ystanton@morar.com', 'as88dnm', 0, 0, 0, 0),
(24, 'Uitenfg', 'sheller@wintheiser.com', 'asdiojwe9', 0, 0, 0, 0),
(25, 'Adison', 'hahn.jaydon@thompson.com', 'wiwjiow9', 0, 0, 0, 0),
(26, 'Lutar', 'lgreenholt@hotmail.com', 'wekdown2&@39', 0, 0, 0, 0),
(27, 'Homakl', 'lparker@heathcote.info', 'wdnjwn2$2', 0, 0, 0, 0),
(28, 'Treins', 'reilly.ignacio@prosacco.com', 'ajcnwi3', 0, 0, 0, 0),
(29, 'Adams', 'adams.myrl@volkman.net', '@#ewjiwj', 0, 0, 0, 0),
(30, 'Maxien', 'maxie75@gmail.com', 'suyyadjak123', 0, 0, 0, 0),
(31, 'Sherlok', 'sherwood.paucek@larkin.com', 'wojdwn213', 0, 0, 0, 0),
(32, 'Opalk', 'opal.cruickshank@yahoo.com', 'adniuwe42', 0, 0, 0, 0),
(33, 'Kunze', 'kunze.christophe@gmail.com', '2u3jdsny', 0, 0, 0, 0),
(34, 'Iocnia', 'hnikolaus@gmail.com', 'kqowdoj91', 0, 0, 0, 0),
(35, 'Chanzen', 'chandler90@yahoo.com', 'jndajncui7', 0, 0, 0, 0),
(36, 'Clenven', 'cleve.davis@stehr.info', 'dnain9', 0, 0, 0, 0),
(37, 'Rttta', 'retta41@hotmail.com', 'djjdnj2i1', 0, 0, 0, 0),
(38, 'Xakce', 'zakary.davis@hotmail.com', 'moiwj0', 0, 0, 0, 0),
(39, 'Ionsjkk', 'hudson.hal@hotmail.com', 'dwjniu1', 0, 0, 0, 0),
(40, 'Openju', 'ghoeger@walter.org', 'minci32', 0, 0, 0, 0),
(41, 'Polinu', 'fharvey@west.com', 'cnunui782', 0, 0, 0, 0),
(42, 'Kolsim', 'murray.dereck@gmail.com', 'mcknwoj9', 0, 0, 0, 0),
(43, 'Uinterd', 'viva12@ritchie.com', 'cnwen2sk', 0, 0, 0, 0),
(44, 'Uintsh', 'vallie.grant@deckow.com', 'nd2o7KDNS', 0, 0, 0, 0),
(45, 'Lopsma', 'ullrich.angelica@mayert.com', 'mcownew901', 0, 0, 0, 0),
(46, 'Opestb', 'eichmann.leonard@ebert.com', '123nsjje892', 0, 0, 0, 0),
(47, 'Iandj', 'hester.bogan@gmail.com', 'cioiwj831', 0, 0, 0, 0),
(48, 'Kmester', 'kemmer.enrico@hotmail.com', 'cni901w', 0, 0, 0, 0),
(49, 'Rexcs', 'rex.bosco@gmail.com', 'cnowniw733', 0, 0, 0, 0),
(50, 'Iona', 'qhermann@beier.com', 'cnwo8881u31', 0, 0, 0, 0),
(51, 'Ioan', 'ion@gmail.com', '123456', 0, 0, 0, 0),
(52, 'Gheorghe', 'ina@gmail.com', '123456', 0, 0, 0, 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
