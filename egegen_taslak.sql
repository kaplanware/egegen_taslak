-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Oca 2022, 00:09:12
-- Sunucu sürümü: 10.4.16-MariaDB
-- PHP Sürümü: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `egegen_taslak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `aboutJson` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `aboutJson`, `lang`) VALUES
(1, '{\"title\":\"İzmir Hakkında\",\"text\":\"İzmir, Türkiye\'de Ege Bölgesi\'nde yer alan şehir ve ülkenin 81 ilinden biridir. Ülkenin nüfus bakımından en kalabalık üçüncü şehridir. Ekonomik, tarihi ve sosyo-kültürel açıdan önde gelen şehirlerden biridir. Nüfusu 2020 itibarıyla 4.394.694 kişidir. Yüzölçümü olarak ülkenin yirmi üçüncü büyük ilidir.[6][7] Etrafı Aydın, Balıkesir, Manisa illeri ve Ege Denizi ve Ege Adaları ile çevrilidir.Antik Çağ\'ın ünlü kentleri arasında yer alan Smyrna, İyon kültürünün zenginliklerini bünyesinde barındıran bir şehir olarak adını duyuruyordu. Bu maksatla da bu şehre \\\"Güzel İzmir\\\"[8], \\\"Eski İzmir\\\" ve \\\"la Perle de l\'Ionie\\\" (İyonya\'nın İncisi) deniyordu. İzmir Körfezi çevresinde bulunan şehir, her yıl İzmir Enternasyonal Fuarı\'nı düzenleyen önemli bir fuar merkezi ve liman kentidir. İzmir\'in batısında denizi, plajları ve termal merkezleriyle Urla Yarımadası uzanır. İzmir, yatlar ve gemilerle çevrilmiş uzun ve dar bir körfezin başında yer almaktadır. Sahil boyunca palmiye, hurma ağaçları ve geniş caddeler bulunmaktadır. İzmir Limanı, Türkiye\'nin en büyük yedinci limanıdır.\"}', 1),
(2, '{\"title\":\"About Izmir\",\"text\":\"Izmir (UK: /ˈɪzmɪər/ IZ-meer, US: /ɪzˈmɪər/ iz-MEER; Turkish: İzmir, Turkish pronunciation: [ˈizmiɾ]) is a metropolitan city in the western extremity of Anatolia, capital of the province of the same name. It is the third most populous city in Turkey, after Istanbul and Ankara; and the second largest urban agglomeration on the Aegean Sea after Athens. As of the last 31/12/2019 estimation, the city of İzmir had a population of 2,965,900, while İzmir Province had a total population of 4,367,251.[2][3] Its built-up (or metro) area was home to 3,209,179 inhabitants extending on 9 out of 11 urban districts (all but Urla and Guzelbahce not yet agglomerated) plus Menemen and Menderes largely conurbated. It extends along the outlying waters of the Gulf of İzmir and inland to the north across the Gediz River Delta; to the east along an alluvial plain created by several small streams; and to slightly more rugged terrain in the south.[5] Izmir embankment by oldypak lp Izmir embankment İzmir has more than 3,000 years of recorded urban history, and up to 8,500 years of history as a human settlement since the Neolithic period. In classical antiquity the city was known as Smyrna (/ˈsmɜːrnə/ SMUR-nə; Greek: Σμύρνη, romanized: Smýrni/Smýrnē) – a name which remained in use in English and various other languages until around 1930, when government efforts led the original Greek name to be gradually phased out internationally in favor of its Turkish counterpart İzmir.[6] Lying on an advantageous location at the head of a gulf running down in a deep indentation, midway along the western Anatolian coast, İzmir has been one of the principal mercantile cities of the Mediterranean Sea for much of its history. It hosted the Mediterranean Games in 1971 and the World University Games (Universiade) in 2005. The city participated in Climathon in 2019.[7]\"}', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` int(11) NOT NULL,
  `upd_date` int(11) NOT NULL,
  `lang` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `u_id`, `title`, `content`, `slug`, `thumbnail`, `banner`, `add_date`, `upd_date`, `lang`) VALUES
(1, 1, 'Duyuru 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi.', 'duyuru-1', 'thumb_duyuru-1.jpg', 'duyuru-1.jpg', 1642013662, 0, 1),
(2, 1, 'Duyuru 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi.', 'duyuru-2', 'thumb_duyuru-2.jpg', 'duyuru-2.jpg', 1642011662, 0, 1),
(3, 1, 'Duyuru 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi.', 'duyuru-3', 'thumb_duyuru-3.jpg', 'duyuru-3.jpg', 1641893662, 0, 1),
(4, 1, 'Duyuru 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi.', 'duyuru-4', 'thumb_duyuru-4.jpg', 'duyuru-4.jpg', 1641963662, 0, 1),
(5, 1, 'Notice 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi.', 'notice-5', 'thumb_duyuru-5.jpg', 'duyuru-5.jpg', 1642013662, 0, 2),
(6, 1, 'Notice 6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi.', 'notice-6', 'thumb_duyuru-6.jpg', 'duyuru-6.jpg', 1642011662, 0, 2),
(7, 1, 'Notice 7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi.', 'notice-7', 'thumb_duyuru-7.jpg', 'duyuru-7.jpg', 1641893662, 0, 2),
(8, 1, 'Notice 8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus itaque maxime necessitatibus nostrum praesentium quae! Animi at atque consectetur facilis, impedit placeat velit voluptatem voluptates. Explicabo impedit libero nisi.', 'notice-8', 'thumb_duyuru-8.jpg', 'duyuru-8.jpg', 1641963662, 0, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('48m02vh9k5v3de745rjtg09rfq2cm4jf', '::1', 1642020751, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032303735313b6c616e67756167657c733a373a227475726b697368223b),
('nn36pboe246p6pbsncvba8pqlg1ke9mr', '::1', 1642021069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032313036393b6c616e67756167657c733a373a227475726b697368223b),
('k5amhlkuetd3u88l3opr2sf39i0fnnvl', '::1', 1642021434, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032313433343b6c616e67756167657c733a373a227475726b697368223b),
('jb0g5d0gn1nlclqogi4v32fid9cknp2k', '::1', 1642022080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032323038303b6c616e67756167657c733a373a227475726b697368223b),
('0tcvi9o51e1i23ttdg6h6ktcddlfm7n4', '::1', 1642022420, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032323432303b6c616e67756167657c733a373a227475726b697368223b),
('8roegadk350evpo80j5nd4ppq1al69ar', '::1', 1642022733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032323733333b6c616e67756167657c733a373a227475726b697368223b),
('b6k82iffib7mrkq8icus0l89gbtnr8mo', '::1', 1642023230, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032333233303b6c616e67756167657c733a373a227475726b697368223b),
('9eqcvhphpaj6qbm3l0obv9tpd7pcbjmd', '::1', 1642024278, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032343237383b6c616e67756167657c733a373a227475726b697368223b),
('shs0ouhd6e0bkvrloe94ucq99tqf378q', '::1', 1642024610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032343631303b6c616e67756167657c733a373a227475726b697368223b),
('fqulkrbpebbvp6nj7lvvk36kan3k0o0j', '::1', 1642025167, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032353136373b6c616e67756167657c733a373a227475726b697368223b),
('toag0b2nb2vmrqvu2ij3ee2jbd1g2pb8', '::1', 1642025575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032353537353b6c616e67756167657c733a373a227475726b697368223b),
('rll51e3237t8r58p7ucnrus9762fp1k1', '::1', 1642025934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032353933343b6c616e67756167657c733a373a227475726b697368223b),
('cbodqi4td7t5bavpe94e0h8on1sk6p4g', '::1', 1642026238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032363233383b6c616e67756167657c733a373a227475726b697368223b),
('e7c70j7m85a0klr4o7tc779k40499lim', '::1', 1642026539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032363533393b6c616e67756167657c733a373a227475726b697368223b),
('ojtumkt95tr9foacdjfhajf119d444ur', '::1', 1642026877, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032363837373b6c616e67756167657c733a373a227475726b697368223b),
('m61f5blj8mk90vaol5s53uj5p096up7n', '::1', 1642027353, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032373335333b6c616e67756167657c733a373a227475726b697368223b),
('vaq6hkn1sk1h7t6kiulml0j7hpj9fvl2', '::1', 1642027668, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032373636383b6c616e67756167657c733a373a22656e676c697368223b),
('pjch1elbddqg7eneo8kij0dt649oiim9', '::1', 1642028012, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032383031323b6c616e67756167657c733a373a227475726b697368223b),
('97grobknl1vugr3mi7ij5ki9p1m000tb', '::1', 1642028316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032383331363b6c616e67756167657c733a373a227475726b697368223b),
('umav32o2n8ldrjo359tjgmrpjo479pf0', '::1', 1642028644, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032383634343b6c616e67756167657c733a373a22656e676c697368223b6c616e67756167655f69647c733a313a2232223b),
('cakb3d5cdvsv4p0fuibqu6o0nkbosspm', '::1', 1642028930, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634323032383634343b6c616e67756167657c733a373a227475726b697368223b6c616e67756167655f69647c733a313a2231223b);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `languages`
--

INSERT INTO `languages` (`id`, `title`) VALUES
(1, 'turkish'),
(2, 'english');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parents` int(11) NOT NULL,
  `is_sub_main` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `title`, `parents`, `is_sub_main`) VALUES
(1, 'home', 0, 0),
(2, 'posts', 0, 0),
(3, 'places_to_travel', 0, 0),
(4, 'gallery', 0, 1),
(5, 'sub_menu', 4, 0),
(6, 'sub_menu', 4, 0),
(7, 'sub_menu', 4, 1),
(8, 'sub_sub_menu', 7, 0),
(9, 'sub_sub_menu', 7, 1),
(10, 'sub_sub_sub_menu', 9, 0),
(11, 'sub_sub_sub_menu', 9, 0),
(12, 'contact', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'title', 'Egegen Taslak Çalışma'),
(4, 'slider', '[{\"img\":\"slider1.jpg\",\"text\":\"Slider 1\"},{\"img\":\"slider2.jpg\",\"text\":\"Slider 2\"},{\"img\":\"slider3.jpg\",\"text\":\"Slider 3\"}]');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `mail`) VALUES
(1, 'Barış', 'Kaplan', 'kaplan1912@gmail.com');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Tablo için indeksler `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
