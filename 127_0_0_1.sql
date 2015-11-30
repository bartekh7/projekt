-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Lis 2015, 21:00
-- Wersja serwera: 5.6.20
-- Wersja PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `cdcol`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `cds`
--
ALTER TABLE `cds`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;--
-- Baza danych: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=38 ;

--
-- Zrzut danych tabeli `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'przepisy', 'UÅ¼ytkownicy', 'id', '', '', '_', ''),
(2, 'przepisy', 'UÅ¼ytkownicy', 'user', '', '', '_', ''),
(3, 'przepisy', 'UÅ¼ytkownicy', 'pass', '', '', '_', ''),
(4, 'przepisy', 'UÅ¼ytkownicy', 'email', '', '', '_', ''),
(12, 'przepisy', 'poziomy', 'id', '', '', '_', ''),
(11, 'przepisy', 'kategorie', 'obrazek', '', '', '_', ''),
(10, 'przepisy', 'kategorie', 'nazwa', '', '', '_', ''),
(9, 'przepisy', 'kategorie', 'id', '', '', '_', ''),
(13, 'przepisy', 'poziomy', 'nazwa', '', '', '_', ''),
(14, 'przepisy', 'Komentarze', 'id', '', '', '_', ''),
(15, 'przepisy', 'Komentarze', 'poziomid', '', '', '_', ''),
(16, 'przepisy', 'Komentarze', 'przepis', '', '', '_', ''),
(17, 'przepisy', 'Komentarze', 'userid', '', '', '_', ''),
(18, 'przepisy', 'Komentarze', 'czas', '', '', '_', ''),
(19, 'przepisy', 'Komentarze', 'przepisid', '', '', '_', ''),
(20, 'przepisy', 'Komentarze', 'utworzono', '', '', '_', ''),
(21, 'przepisy', 'Komentarze', 'edytowano', '', '', '_', ''),
(22, 'przepisy', 'komentarze', 'komentarz', '', '', '_', ''),
(23, 'przepisy', 'przepisy', 'id', '', '', '_', ''),
(24, 'przepisy', 'przepisy', 'nazwa', '', '', '_', ''),
(25, 'przepisy', 'przepisy', 'przepis', '', '', '_', ''),
(37, 'przepisy', 'przepisy', 'poziomid', '', '', '_', ''),
(36, 'przepisy', 'przepisy', 'kategoriaid', '', '', '_', ''),
(35, 'przepisy', 'przepisy', 'userid', '', '', '_', ''),
(29, 'przepisy', 'przepisy', 'czas', '', '', '_', ''),
(32, 'przepisy', 'komentarze', 'userid', '', '', '_', ''),
(33, 'przepisy', 'komentarze', 'przepisid', '', '', '_', ''),
(34, 'przepisy', 'komentarze', 'poziomid', '', '', '_', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

--
-- Zrzut danych tabeli `pma_designer_coords`
--

INSERT INTO `pma_designer_coords` (`db_name`, `table_name`, `x`, `y`, `v`, `h`) VALUES
('przepisy', 'kategorie', 104, 366, 1, 1),
('przepisy', 'komentarze', 585, 39, 1, 1),
('przepisy', 'poziomy', 381, 176, 1, 1),
('przepisy', 'przepisy', 583, 269, 1, 1),
('przepisy', 'uzytkownicy', 0, 170, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_navigationhiding`
--

CREATE TABLE IF NOT EXISTS `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Zrzut danych tabeli `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"przepisy","table":"uzytkownicy"},{"db":"przepisy","table":"przepisy"},{"db":"przepisy","table":"kategorie"},{"db":"przepisy","table":"komentarze"},{"db":"przepisy","table":"poziomy"},{"db":"przepisy","table":"Komentarze"},{"db":"phpmyadmin","table":"pma_column_info"},{"db":"phpmyadmin","table":"pma_designer_coords"},{"db":"phpmyadmin","table":"pma_history"},{"db":"phpmyadmin","table":"pma_pdf_pages"}]');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_savedsearches`
--

CREATE TABLE IF NOT EXISTS `pma_savedsearches` (
`id` int(5) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Zrzut danych tabeli `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2015-06-02 19:48:56', '{"lang":"pl","collation_connection":"utf8mb4_general_ci"}');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_usergroups`
--

CREATE TABLE IF NOT EXISTS `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma_users`
--

CREATE TABLE IF NOT EXISTS `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_history`
--
ALTER TABLE `pma_history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
 ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma_recent`
--
ALTER TABLE `pma_recent`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_relation`
--
ALTER TABLE `pma_relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma_table_info`
--
ALTER TABLE `pma_table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma_tracking`
--
ALTER TABLE `pma_tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
 ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma_users`
--
ALTER TABLE `pma_users`
 ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `pma_column_info`
--
ALTER TABLE `pma_column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT dla tabeli `pma_history`
--
ALTER TABLE `pma_history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;--
-- Baza danych: `przepisy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE IF NOT EXISTS `kategorie` (
`id` int(6) NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `obrazek` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=22 ;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`, `obrazek`) VALUES
(1, 'Ciasta i ciastka', 'ciastko2.jpg'),
(3, 'Desery', 'deser.jpg'),
(4, 'Drinki', 'drinki.jpg'),
(5, 'Makarony', 'makarony.jpg'),
(6, 'Napoje', 'napoje.jpg'),
(7, 'Pizza', 'pizza.jpg'),
(8, 'Potrawy z grilla', 'pzgrill.jpg'),
(11, 'Przetwory', 'przetwory.jpg'),
(12, 'Ryby', 'ryby.jpg'),
(13, 'Sosy', 'sosy.jpg'),
(14, 'Zupy', 'zupy.jpg'),
(18, 'Dania gÅ‚Ã³wne', 'danieg.jpg'),
(20, 'Potrawy mÄ…czne', 'pzmaki.jpg'),
(21, 'Potrawy miÄ™sne', 'pzmies.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE IF NOT EXISTS `komentarze` (
`id` int(10) NOT NULL,
  `komentarz` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `userid` int(10) NOT NULL,
  `przepisid` int(10) NOT NULL,
  `poziomid` int(10) NOT NULL,
  `czas` int(10) NOT NULL,
  `utworzono` datetime NOT NULL,
  `edytowano` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `poziomy`
--

CREATE TABLE IF NOT EXISTS `poziomy` (
`id` int(11) NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `poziomy`
--

INSERT INTO `poziomy` (`id`, `nazwa`) VALUES
(1, 'Łatwy'),
(2, 'Średni'),
(3, 'Trudny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przepisy`
--

CREATE TABLE IF NOT EXISTS `przepisy` (
`id` int(10) NOT NULL,
  `nazwa` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `przepis` text COLLATE utf8_polish_ci NOT NULL,
  `userid` int(10) NOT NULL,
  `kategoriaid` int(10) NOT NULL,
  `poziomid` int(10) NOT NULL,
  `czas` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=17 ;

--
-- Zrzut danych tabeli `przepisy`
--

INSERT INTO `przepisy` (`id`, `nazwa`, `przepis`, `userid`, `kategoriaid`, `poziomid`, `czas`) VALUES
(11, 'Zupa pomidorowa z makaronem', 'Zagotowac bulion z pomidorami. Jesli sa pestki, przecedzic przez sito. Doprawic sola, cukrem i pieprzem. Ugotowac makaron w osolonym wrzatku. Podawac zupe z makaronem i posiekana natka pietruszki. Uwaga: zupa pomidorowa to klasyk i kazdy potrafi ja ugotowac. Sekret tkwi w jakosci produktow - musi byc prawdziwy bulion warzywny a nie kostka i prawdziwe pomidory. Drugi sekret polega na dodaniu do zupy co najmniej tyle samo cukru co soli. Makaron do zupy nalezy ugotowac oddzielnie a nie w zupie! Jesli chcemy, zeby zupa miala lagodniejszy smak podajmy ja z kremowka.', 2, 14, 2, 45),
(12, 'Tradycyjna zupa ogorkowa', 'Gotowac seler, pietruszke i por razem z miesem około godziny. Wyjac pietruszke, por i seler. Marchewke i ziemniaki obrac i pokroic w kostke. Dodac do gotujacego sie wywaru. Gotowac 15 minut. Pokroic  ogorki w cieniutkie plasterki, dodac do zupy. Gotowac 5 minut. Dodac smietane', 1, 14, 1, 30),
(13, 'Sos zurawinowy z rozmarynem', 'Rozgrzac lekko patelnie rozpuscic cukier puder. Kiedy zacznie brazowiec rozprowadzic go drewniana lyzka i dodac zurawine. Wlac porto i dolozyc dwie galazki rozmarynu. Gotowac na malym ogniu, az zurawina popeka, a konsystencja sosu zacznie przypominac dzem. Wyjac galazki rozmarynu i w razie potrzeby doslodzic sos. Przed podaniem przybrac listkami rozmarynu.', 1, 13, 3, 15),
(14, 'Nalesniki z serem', 'Maka, mleko, sol, jajka, cukier wanilinowy i cukier dokladnie mieszamy, az do uzyskania gladkiej konsystencji, bez grudek. Tak przygotowane ciasto rozlewamy na patelnie i smazymy na zloto.', 1, 20, 1, 30),
(16, 'Grzybowa', 'GRzybflgadg', 7, 14, 3, 45);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
`id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `haslo` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`) VALUES
(1, 'bartek', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'bartek@stud.prz.edu.pl'),
(2, 'tomek', '6dbd0fe19c9a301c4708287780df41a2', 'tomaszsd@wert.ty'),
(3, 'asda', 'a53be3835f516385721166300d45a5f6', 'asd@da'),
(4, 'marek', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'marek@onet.eu'),
(5, 'janek34', '76419c58730d9f35de7ac538c2fd6737', 'ogorek132@gmail.com'),
(6, 'adrian', '8c4205ec33d8f6caeaaaa0c10a14138c', 'adrian@og.du'),
(7, 'grzegorz', '7f5f33cc2cf04e342ea3bb9a5c6953f4', 'zadam@amd.pl'),
(8, 'wojtek', '0d333f240498cfd51eb8bd1d74ee0f6e', 'wojtek@o2.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kategorie`
--
ALTER TABLE `kategorie`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentarze`
--
ALTER TABLE `komentarze`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `userid` (`userid`,`przepisid`,`poziomid`), ADD KEY `poziomid` (`poziomid`), ADD KEY `przepisid` (`przepisid`);

--
-- Indexes for table `poziomy`
--
ALTER TABLE `poziomy`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `przepisy`
--
ALTER TABLE `przepisy`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `userid` (`userid`,`kategoriaid`,`poziomid`), ADD KEY `poziomid` (`poziomid`), ADD KEY `kategoriaid` (`kategoriaid`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `poziomy`
--
ALTER TABLE `poziomy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `przepisy`
--
ALTER TABLE `przepisy`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
ADD CONSTRAINT `komentarze_ibfk_1` FOREIGN KEY (`poziomid`) REFERENCES `poziomy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `komentarze_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `uzytkownicy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `komentarze_ibfk_3` FOREIGN KEY (`przepisid`) REFERENCES `przepisy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `przepisy`
--
ALTER TABLE `przepisy`
ADD CONSTRAINT `przepisy_ibfk_1` FOREIGN KEY (`poziomid`) REFERENCES `poziomy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `przepisy_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `uzytkownicy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `przepisy_ibfk_3` FOREIGN KEY (`kategoriaid`) REFERENCES `kategorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Baza danych: `test`
--
--
-- Baza danych: `webauth`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Zrzut danych tabeli `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
