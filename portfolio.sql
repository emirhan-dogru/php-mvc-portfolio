-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Şub 2022, 16:22:54
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `portfolio`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `birthdate` date NOT NULL,
  `job` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `adress` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `bio` text COLLATE utf8_turkish_ci NOT NULL,
  `short_skills` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `img_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `small_img_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `img_path` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `name_surname`, `email`, `phone`, `birthdate`, `job`, `adress`, `bio`, `short_skills`, `img_url`, `small_img_url`, `img_path`) VALUES
(1, 'Emirhan DOĞRU', 'emirhan-dogru@hotmail.com', '+90 545 250 89 42', '2002-09-24', 'Software Engineer', 'İstanbul - Turkey / Kadıköy', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.', 'developer,enginner,programmer,freelancer', 'CF622589-0113-4443-BE11-0AA7D7E8E064.jpg', 'CF622589-0113-4443-BE11-0AA7D7E8E064.jpg', 'uploads/2022/02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  `img_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `small_img_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `img_path` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `name`, `content`, `img_url`, `small_img_url`, `img_path`) VALUES
(1, 'Deneme Blog', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur. <strong>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan</strong> mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n', '479E2362-879E-4639-91E1-D2B84BD5EDEE.jpg', '479E2362-879E-4639-91E1-D2B84BD5EDEE.jpg', 'uploads/2022/02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `message` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name_surname`, `email`, `message`) VALUES
(1, 'Rodgers', 'fikoxeny@mailinator.com', 'Laudantium iste mol');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `category_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `img_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `small_img_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `img_path` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `category_name`, `url`, `img_url`, `small_img_url`, `img_path`) VALUES
(2, 'test1', 'php', '', 'A404DC1F-9DD9-42CA-A954-DC23B605DC41.jpg', 'A404DC1F-9DD9-42CA-A954-DC23B605DC41.jpg', 'uploads/2022/02'),
(3, 'test2', 'php', '', 'F6993DC6-9AE2-49BA-AECE-D9F3D3EF101B.jpg', 'F6993DC6-9AE2-49BA-AECE-D9F3D3EF101B.jpg', 'uploads/2022/02'),
(4, 'test3', 'js', 'http://google.com', 'AADE7CA5-017D-4496-B95C-5669D3B04DAD.jpeg', 'AADE7CA5-017D-4496-B95C-5669D3B04DAD.jpeg', 'uploads/2022/02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `website_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `website_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `website_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `website_author` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `website` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `github` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `firstLogin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `name_surname`, `email`, `password`, `website_title`, `website_description`, `website_keywords`, `website_author`, `facebook`, `twitter`, `instagram`, `website`, `github`, `firstLogin`) VALUES
(1, 'Emirhan DOĞRU', 'admin@cvlogin.com', '$2y$13$0FGj4JF2DmrUvfbJPz4c4uxQ2ocRgI2i9m4uR0ZsgYVsqxHGv8Aqy', 'Portfolio Website Page', 'PHP MVC Kullanarak oluşturduğum portfolyo projesi', 'php , mvc , portfolio , portfolyo , cv , cms , cms project', 'Emirhan Doğru', 'javascript:void(0)', 'javascript:void(0)', 'http://instagram.com/eemirhandogru', 'http://emirhandogru.com', 'https://github.com/emirhan-dogru', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `key` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `progress` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `skill`
--

INSERT INTO `skill` (`id`, `key`, `value`, `progress`) VALUES
(1, 'services', 'Web Development', 0),
(4, 'services', 'Graphic Design', 0),
(5, 'services', 'Landing Page', 0),
(6, 'services', 'On-Page SEO', 0),
(7, 'services', 'Web Hosting', 0),
(8, 'interests', 'Painting & Drawing', 0),
(9, 'interests', 'Reading & Writing', 0),
(10, 'interests', 'Music & Cinema', 0),
(11, 'interests', 'Travel & Picnik', 0),
(12, 'interests', 'Rain & Snow', 0),
(13, 'programming', 'HTML & CSS', 95),
(14, 'programming', 'JavaScript', 80),
(15, 'programming', 'WordPress', 5),
(16, 'language', 'Turkish', 90),
(17, 'language', 'English', 60),
(18, 'language', 'Deutschland', 5);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
