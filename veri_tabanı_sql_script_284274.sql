-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 17 Haz 2021, 19:55:47
-- Sunucu sürümü: 10.3.22-MariaDB-log
-- PHP Sürümü: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `284274`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `marketler`
--

CREATE TABLE `marketler` (
  `MarketID` int(11) NOT NULL,
  `MarketAdi` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `marketler`
--

INSERT INTO `marketler` (`MarketID`, `MarketAdi`) VALUES
(1, 'Markamar'),
(2, 'GİMSA'),
(3, 'BİM'),
(7, 'Yunus'),
(8, 'AnkaGross'),
(9, 'A101');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `MusteriNo` int(11) NOT NULL,
  `MusteriAdi` varchar(20) DEFAULT NULL,
  `MusteriSoyadi` varchar(20) DEFAULT NULL,
  `Sifre` varchar(100) DEFAULT NULL,
  `Telefon` int(11) DEFAULT NULL,
  `Adres` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`MusteriNo`, `MusteriAdi`, `MusteriSoyadi`, `Sifre`, `Telefon`, `Adres`) VALUES
(31, 'Ayse', 'gurses', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 533, 'Adana'),
(28, 'Ali', 'Yılmaz', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 544, 'Ankara'),
(26, 'Berra', 'Aksa', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 500, 'Bursa'),
(24, 'Beyzanur', 'Gürses', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 537, 'Ankara'),
(25, 'Asaf', 'Yağız', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 544, 'İstanbul');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `SiparisNo` int(11) NOT NULL,
  `AlisTarihi` date DEFAULT NULL,
  `TeslimTarihi` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`SiparisNo`, `AlisTarihi`, `TeslimTarihi`) VALUES
(1, '2021-06-24', '2021-06-15'),
(19, '2021-06-17', '2021-06-19'),
(18, '2021-06-17', '2021-06-24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Urunler`
--

CREATE TABLE `Urunler` (
  `UrunID` int(11) NOT NULL,
  `UrunAdi` varchar(40) DEFAULT NULL,
  `SonKullanmaTarihi` date DEFAULT NULL,
  `Market` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `Urunler`
--

INSERT INTO `Urunler` (`UrunID`, `UrunAdi`, `SonKullanmaTarihi`, `Market`) VALUES
(18, 'Erik', '2021-07-10', 'AnkaGross'),
(27, 'Limon', '2021-06-24', 'Markamar'),
(5, 'Elma', '2021-06-26', 'AnkaGross'),
(20, 'Salatalık', '2021-06-25', 'Yunus'),
(13, 'Patlıcan', '2021-07-04', 'GİMSA'),
(28, 'Armut', '2021-06-24', 'GİMSA'),
(25, 'Salatalık', '2021-06-25', 'TarımKredi');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `marketler`
--
ALTER TABLE `marketler`
  ADD PRIMARY KEY (`MarketID`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`MusteriNo`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`SiparisNo`);

--
-- Tablo için indeksler `Urunler`
--
ALTER TABLE `Urunler`
  ADD PRIMARY KEY (`UrunID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `marketler`
--
ALTER TABLE `marketler`
  MODIFY `MarketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `MusteriNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `SiparisNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `Urunler`
--
ALTER TABLE `Urunler`
  MODIFY `UrunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
