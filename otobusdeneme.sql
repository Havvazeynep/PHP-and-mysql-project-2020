-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 May 2020, 13:55:05
-- Sunucu sürümü: 5.7.11
-- PHP Sürümü: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `otobusdeneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `biletler`
--

CREATE TABLE `biletler` (
  `BiletID` int(11) UNSIGNED NOT NULL,
  `MusteriTC` bigint(11) NOT NULL,
  `SeferID` int(11) NOT NULL,
  `IslemZamani` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `KoltukNo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `biletler`
--

INSERT INTO `biletler` (`BiletID`, `MusteriTC`, `SeferID`, `IslemZamani`, `KoltukNo`) VALUES
(235468, 38546861723, 2, '2020-05-11 12:18:00', 3),
(254574, 24586417212, 1, '2020-05-03 15:27:00', 8),
(148962, 32547825312, 1, '2020-04-09 09:06:00', 12),
(425353, 19579234853, 1, '2020-05-18 11:32:00', 19),
(125457, 26548561435, 1, '2020-04-22 18:26:00', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `onay` binary(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`ad`, `soyad`, `email`, `mesaj`, `onay`) VALUES
('Havva Zeynep', 'Akdemir', 'havva.zeynep.16@gmail.com', 'Keyifli bir yolculuktu. Bir sonraki seyahatimde adresim siz olacaksınız.', 0x30),
('Elif Nur', 'Akpınar', 'elifnurakpinar@gmail.com', 'Hizmetinizden memnun kaldım .Teşekkür ederim.', 0x30);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `MusteriTC` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `Ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `Soyad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Telefon` bigint(11) NOT NULL,
  `Cinsiyet` varchar(10) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`MusteriTC`, `Ad`, `Soyad`, `Email`, `Telefon`, `Cinsiyet`) VALUES
('12345678901', 'Ahmet', 'Akdemir', 'ahmet11@gmail.com', 5079782904, 'Erkek'),
('38546861723', 'Ezgi', 'Canalp', 'canalpezgi@gmail.com', 5453869120, 'Kadın'),
('24586417212', 'Ömer', 'Aksoy', 'aksyomr@gmail.com', 5073862351, 'Erkek'),
('32547825312', 'Mustafa', 'Mert', 'mrtmstf@gmail.com', 5392785329, 'Erkek'),
('19579234853', 'Halime', 'Şahin', 'halimesahin@gmail.com', 5453729845, 'Kadın'),
('26548561435', 'Kader', 'Yılmaz', 'kader26@gmail.com', 5054823479, 'Kadın'),
('15598949662', 'Elif Nur', 'Akpınar', 'elifnurakpinar@gmail.com', 5312932134, 'kadın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otobusler`
--

CREATE TABLE `otobusler` (
  `OtobusID` int(11) NOT NULL,
  `Plaka` varchar(8) COLLATE utf8_turkish_ci NOT NULL,
  `KoltukSayisi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `otobusler`
--

INSERT INTO `otobusler` (`OtobusID`, `Plaka`, `KoltukSayisi`) VALUES
(101, '33 A 21', 50),
(102, '34 HA 86', 50),
(103, '01 AA 01', 50),
(104, '33 MM 33', 50),
(105, '34 EA 67', 50),
(106, '01 SP 35', 50);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seferler`
--

CREATE TABLE `seferler` (
  `SeferID` int(11) NOT NULL,
  `KalkisSehirID` int(11) NOT NULL,
  `VarisSehirID` int(11) NOT NULL,
  `SeferAdi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `OtobusID` int(11) NOT NULL,
  `KalkisTarihi` date NOT NULL,
  `KalkisZamani` time NOT NULL,
  `VarisZamani` time NOT NULL,
  `TahminiSure` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `BiletTutari` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `seferler`
--

INSERT INTO `seferler` (`SeferID`, `KalkisSehirID`, `VarisSehirID`, `SeferAdi`, `OtobusID`, `KalkisTarihi`, `KalkisZamani`, `VarisZamani`, `TahminiSure`, `BiletTutari`) VALUES
(1, 1, 34, 'Adana-İstanbul', 101, '2020-06-01', '07:00:00', '21:00:00', '14 Saat', 130),
(2, 1, 6, 'Adana-Ankara', 102, '2020-06-01', '09:00:00', '16:00:00', '7 Saat', 80),
(3, 33, 7, 'Mersin-Antalya', 103, '2020-06-02', '11:00:00', '19:00:00', '8 Saat', 100),
(4, 32, 33, 'Isparta-Mersin', 104, '2020-06-02', '08:30:00', '17:30:00', '9 Saat', 110),
(5, 65, 1, 'Van-Adana', 105, '2020-06-03', '11:00:00', '03:00:00', '16 Saat', 150),
(6, 34, 1, 'İstanbul-Adana', 106, '2020-06-03', '21:00:00', '07:00:00', '14 Saat', 130),
(7, 63, 33, 'Şanlıurfa-Mersin', 107, '2020-06-04', '09:00:00', '15:00:00', '6 Saat', 75),
(8, 33, 20, 'Mersin-Denizli', 108, '2020-06-04', '08:00:00', '21:00:00', '13 Saat', 120),
(9, 21, 1, 'Diyarbakır-Adana', 109, '2020-06-05', '12:00:00', '19:00:00', '7 Saat', 90),
(10, 68, 38, 'Aksaray-Kayseri', 110, '2020-06-05', '10:30:00', '13:30:00', '3 Saat', 35),
(11, 33, 7, 'Mersin-Antalya', 103, '2020-06-09', '11:00:00', '19:00:00', '8 Saat', 100),
(12, 33, 7, 'Mersin-Antalya', 103, '2020-06-03', '11:00:00', '19:00:00', '8 Saat', 100),
(13, 33, 7, 'Mersin-Antalya', 103, '2020-06-04', '11:00:00', '19:00:00', '8 Saat', 100),
(14, 33, 7, 'Mersin-Antalya', 103, '2020-06-05', '11:00:00', '19:00:00', '8 Saat', 100),
(15, 33, 7, 'Mersin-Antalya', 103, '2020-06-06', '11:00:00', '19:00:00', '8 Saat', 100),
(16, 33, 7, 'Mersin-Antalya', 103, '2020-06-07', '11:00:00', '19:00:00', '8 Saat', 100),
(17, 33, 7, 'Mersin-Antalya', 103, '2020-06-08', '11:00:00', '19:00:00', '8 Saat', 100),
(18, 1, 34, 'Adana-İstanbul', 101, '2020-06-02', '07:00:00', '21:00:00', '14 Saat', 130),
(19, 1, 34, 'Adana-İstanbul', 101, '2020-06-03', '07:00:00', '21:00:00', '14 Saat', 130),
(20, 1, 34, 'Adana-İstanbul', 101, '2020-06-04', '07:00:00', '21:00:00', '14 Saat', 130),
(21, 1, 34, 'Adana-İstanbul', 101, '2020-06-05', '07:00:00', '21:00:00', '14 Saat', 130),
(22, 1, 34, 'Adana-İstanbul', 101, '2020-06-06', '07:00:00', '21:00:00', '14 Saat', 130),
(23, 1, 34, 'Adana-İstanbul', 101, '2020-06-07', '07:00:00', '21:00:00', '14 Saat', 130),
(24, 1, 34, 'Adana-İstanbul', 101, '2020-06-08', '07:00:00', '21:00:00', '14 Saat', 130),
(25, 1, 34, 'Adana-İstanbul', 101, '2020-06-09', '07:00:00', '21:00:00', '14 Saat', 130);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

CREATE TABLE `sehirler` (
  `SehirID` int(11) NOT NULL,
  `SehirAdi` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`SehirID`, `SehirAdi`) VALUES
(1, 'Adana'),
(2, 'Adıyaman'),
(3, 'Afyonkarahisar'),
(3, 'Afyonkarahisar'),
(4, 'Ağrı'),
(6, 'Ankara'),
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(20, 'Denizli'),
(21, 'Diyarbakır'),
(22, 'Edirne'),
(26, 'Eskişehir'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin'),
(34, 'İstanbul'),
(35, 'İzmir'),
(38, 'Kayseri'),
(41, 'Kocaeli'),
(42, 'Konya'),
(45, 'Manisa'),
(47, 'Mardin'),
(48, 'Muğla'),
(50, 'Nevşehir'),
(52, 'Ordu'),
(53, 'Rize'),
(55, 'Samsun'),
(60, 'Tokat'),
(61, 'Trabzon'),
(63, 'Şanlıurfa'),
(64, 'Uşak'),
(65, 'Van'),
(68, 'Aksaray'),
(78, 'Karabük'),
(80, 'Osmaniye');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `biletler`
--
ALTER TABLE `biletler`
  ADD KEY `MusteriTC` (`MusteriTC`),
  ADD KEY `SeferID` (`SeferID`),
  ADD KEY `OtobusID` (`KoltukNo`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`MusteriTC`);

--
-- Tablo için indeksler `otobusler`
--
ALTER TABLE `otobusler`
  ADD PRIMARY KEY (`OtobusID`),
  ADD UNIQUE KEY `OtobusID` (`OtobusID`);

--
-- Tablo için indeksler `seferler`
--
ALTER TABLE `seferler`
  ADD PRIMARY KEY (`SeferID`),
  ADD UNIQUE KEY `SeferID` (`SeferID`),
  ADD KEY `SehirID` (`KalkisSehirID`,`VarisSehirID`),
  ADD KEY `OtobusID` (`OtobusID`),
  ADD KEY `KalkisSehirID` (`KalkisSehirID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
