-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 01:36 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gama_masterjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_foreign` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Leonardo', 'leonardo@gama.com', 'Adorei a abordagem', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `stack` varchar(50) NOT NULL,
  `ipv4_address` varchar(255) NOT NULL,
  `ipv6_address` varchar(255) NOT NULL,
  `ip_location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `email`, `stack`, `ipv4_address`, `ipv6_address`, `ip_location`, `created_at`, `updated_at`) VALUES
(4, 'leo', 'leo', '', '', '', '', '2017-07-16 07:44:11', '2017-07-16 07:44:11'),
(5, 'teste', 'teste', '', '', '', '', '2017-07-16 07:44:23', '2017-07-16 07:44:23'),
(6, 'dsads', 'dsadsad', '', '', '', '', '2017-07-16 08:38:29', '2017-07-16 08:38:29'),
(7, '', 'teste@teknisa.com', '', '::1', '', '', '2017-07-17 08:46:15', '2017-07-17 08:46:15'),
(19, 'Leandro', 'leoxaviercosta@gmail.com', '', '::1', '', '', '2017-07-17 10:23:32', '2017-07-17 10:23:32'),
(20, 'Leonardo Carvalho', 'leocarvalho_18@yahoo.com.br', '', '::1', '', '', '2017-07-17 10:24:07', '2017-07-17 10:24:07'),
(21, '', '', '', '::1', '', '', '2017-07-17 20:50:31', '2017-07-17 20:50:31'),
(22, 'LEONARDO', 'teste@gmail.com', '', '::1', '', '', '2017-07-18 04:25:13', '2017-07-18 04:25:13'),
(23, 'teste', 'testeee@gmail.com', '', '::1', '', '', '2017-07-18 04:30:12', '2017-07-18 04:30:12'),
(24, 'teste', 'testet@gmai.com', 'MARKETING', '::1', '', '', '2017-07-18 04:31:49', '2017-07-18 04:31:49'),
(25, 'leonardo', 'leo@gmaio.com', 'PROGRAMAÇÃO', '::1', '', '', '2017-07-18 04:38:35', '2017-07-18 04:38:35'),
(27, 'leo', 'leo@teste.com', '', '::1', '', '', '2017-07-18 05:06:17', '2017-07-18 05:06:17'),
(28, 'teste', 'teste2@teste.com', '', '::1', '', '', '2017-07-18 06:03:02', '2017-07-18 06:03:02'),
(31, 'testeip', 'testeip@teknisa.com', '', '192.168.43.50', '::1', '', '2017-07-18 17:11:20', '2017-07-18 17:11:20'),
(32, 'te', 'testee@teste.com', '', '192.168.0.14', '::1', '', '2017-07-19 02:32:54', '2017-07-19 02:32:54'),
(33, 'teste24', 'testee@t4este.com', '', '::1', '', 'Florianópolis - Santa Catarina', '2017-07-19 03:57:44', '2017-07-19 03:57:44'),
(34, 'leo', 'leoxaviercostaa@gmail.com', '', '::1', '', 'Florianópolis - Santa Catarina', '2017-07-19 03:59:48', '2017-07-19 03:59:48'),
(35, 'dsadsadsdd', 'dsads@dsadsa.com', '', '::1', '', 'Florianópolis - Santa Catarina', '2017-07-19 04:00:19', '2017-07-19 04:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_14_034607_create_table_post', 2),
('2016_06_16_013700_create_comments_table', 2),
('2016_06_16_015548_create_tags_table', 2),
('2016_06_16_015719_create_tags_posts_table', 2),
('2014_04_24_110151_create_oauth_scopes_table', 3),
('2014_04_24_110304_create_oauth_grants_table', 3),
('2014_04_24_110403_create_oauth_grant_scopes_table', 3),
('2014_04_24_110459_create_oauth_clients_table', 3),
('2014_04_24_110557_create_oauth_client_endpoints_table', 3),
('2014_04_24_110705_create_oauth_client_scopes_table', 3),
('2014_04_24_110817_create_oauth_client_grants_table', 3),
('2014_04_24_111002_create_oauth_sessions_table', 3),
('2014_04_24_111109_create_oauth_session_scopes_table', 3),
('2014_04_24_111254_create_oauth_auth_codes_table', 3),
('2014_04_24_111403_create_oauth_auth_code_scopes_table', 3),
('2014_04_24_111518_create_oauth_access_tokens_table', 3),
('2014_04_24_111657_create_oauth_access_token_scopes_table', 3),
('2014_04_24_111810_create_oauth_refresh_tokens_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('leoxaviercosta@gmail.com', '2e089d4596cb308f7dd3d83432226e32f104b7c2eaf166cfabd41093bdda1aca', '2016-06-23 08:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` blob NOT NULL,
  `filepath` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `fileextension` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `operator` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `filepath`, `fileextension`, `operator`, `created_at`, `updated_at`) VALUES
(1, 'Amet ut nulla repudiandae omnis.', 0x526572756d206d61676e69206173706572696f726573206e656365737369746174696275732e2041757420726570726568656e646572697420746f74616d20766f6c7570746174656d20697572652069746171756520646f6c6f7265732e204e656365737369746174696275732061206d6f6469206576656e6965742070726f766964656e742e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(2, 'Unde et tenetur itaque deserunt porro.', 0x49642073696e74206e756d7175616d206c617564616e7469756d2075742076697461652e2051756f642073756e7420636f6e736571756174757220617574656d20646f6c6f72756d2e204e6571756520706172696174757220766f6c75707461732066756769742071756961206e617475732e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(3, 'Id sint occaecati est facilis et ab odit.', 0x53656420766f6c7570746173206d61676e616d206576656e69657420686172756d2e2041757420657374206170657269616d20766f6c75707461732e20526572756d2076656e69616d20657420726572756d206173706572696f726573206675676961742076656c69742070726f766964656e742e20416c69617320616d657420657374206469676e697373696d6f7320696e76656e746f726520617574206e6f6e2e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(4, 'Consequatur magni eum hic voluptas tempora qui eveniet.', 0x4574207574207175616572617420726174696f6e65206d6f64692e2048696320617574656d20616d657420696e2e204469637461206d6178696d65207265637573616e64616520766f6c75707461746573206e616d20736f6c757461206265617461652075742065782e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(5, 'At corporis et reiciendis voluptas iusto officia.', 0x42656174616520656e696d20617420656f732e204574206973746520726572756d207265637573616e6461652073696e7420726572756d2e20566f6c7570746174656d206e6968696c20656120726570726568656e646572697420726572756d20706c6163656174206d6f6c6573746961732e204f6363616563617469206f6363616563617469206578706564697461206e6968696c2e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(6, 'Nobis est voluptas nisi placeat et fuga modi qui.', 0x50617269617475722074656d706f7269627573206163637573616e7469756d2073696e7420726570726568656e646572697420616e696d692e20536974206d6f6c65737469616520706f72726f2071756f6420656c6967656e6469206163637573616e7469756d2e20566f6c7570746174656d2065742071756f20726570756469616e64616520657374206e6968696c2e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(7, 'Esse itaque nesciunt est vero est.', 0x456120766974616520717569206e6968696c2065756d20726572756d2071756920646f6c6f72656d2065742e20456c6967656e6469206465626974697320757420657420697073616d207365642073616570652e205175692064697374696e6374696f20617574656d2071756920657374206172636869746563746f2e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(8, 'Maiores laudantium odit ea tenetur ad inventore et.', 0x4e6f6e206573742068696320696d7065646974207265696369656e6469732e204574206f666669636961207265696369656e64697320766f6c757074617465207365642e20457420726570656c6c656e64757320717569207369742e20536f6c757461206e6571756520617574206d61676e69206f6d6e69732e204572726f72207574206e6968696c206572726f722065742e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(9, 'Nostrum assumenda nostrum rerum consequuntur veniam.', 0x51756973206576656e69657420617574206f64696f2071756f73206e6f6e2e20526570656c6c6174207175696120696e206173706572696f7265732065742074656d706f726962757320636f6e73657175617475722e2044656c656e697469207175692061757420766974616520647563696d757320646f6c6f72656d206172636869746563746f2070617269617475722e20496420666163696c6973206d6f646920697461717565206e656d6f206d6f6c6c69746961206675676961742e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(10, 'Est nesciunt laboriosam dicta nulla ea.', 0x5175696120636f6e73657175617475722064697374696e6374696f206e656365737369746174696275732074656d706f7269627573206e61747573206e6f626973206f63636165636174692064696374612e20456120766f6c757074617320656f7320697073612e20526174696f6e65207065727370696369617469732061757420646f6c6f726573207365642071756964656d2e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(11, 'Harum quam quia fugit dolores culpa totam occaecati qui.', 0x51756964656d206c61626f72652073756e7420657865726369746174696f6e656d2063757069646974617465206d6f6c6c6974696120696e636964756e7420636f6e73657175756e7475722e204e6f6e206d696e75732073697420646f6c6f722071756920697073616d207175696120646f6c6f72696275732e2051756964656d2064656c656e697469207265637573616e64616520766f6c7570746174656d20766f6c7570746174756d2074656d706f7269627573206170657269616d2e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(12, 'Minima a quasi vero vel omnis sit officiis.', 0x5574207175617320617574656d206e6174757320666163696c697320636f72727570746920646f6c6f72657320656e696d2e2043756d71756520656172756d20766f6c7570746174652071756f6420656f732e20457420617574206675676974206d6f6c657374696173206d6f6c657374696165206175742071756964656d206173706572696f72657320766f6c7570746174696275732e204e656d6f206561717565206e616d206e6f6269732071756920696e2065742e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(13, 'Expedita nam qui nisi porro perspiciatis.', 0x457870656469746120717569612073696e7420646f6c6f72756d20616420696e76656e746f72652076656c20696c6c6f2e20496c6c756d2071756165206c61626f72696f73616d20656c6967656e6469206172636869746563746f20617574656d2071756f2075742e20446f6c6f72657320646f6c6f72656d20766f6c7570746174756d206173706572696f726573206e61747573206d6f6c6573746961732e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(14, 'Alias et id recusandae est placeat.', 0x457420616e696d6920636f6d6d6f646920736f6c75746120706572666572656e64697320756e646520746f74616d2e204c696265726f20636f6e736563746574757220657420766f6c7570746174652071756f2071756165726174206d6f6c6573746961652e20436f6e73657175756e74757220617574206572726f7220617373756d656e6461207061726961747572207175697320616c697175616d2e, '', '', '', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(19, 'testeeeeeeeeeeeeeeeee', 0x3c21444f43545950452068746d6c3e0d0a3c68746d6c3e0d0a3c686561643e0d0a3c2f686561643e0d0a3c626f64793e0d0a3c703e74657374653c2f703e0d0a3c2f626f64793e0d0a3c2f68746d6c3e, '', '', 'Leonardo Costa Carvalho', '2017-07-17 08:28:31', '2017-07-17 08:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE IF NOT EXISTS `posts_tags` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `posts_tags_post_id_foreign` (`post_id`),
  KEY `posts_tags_tag_id_foreign` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts_tags`
--

INSERT INTO `posts_tags` (`post_id`, `tag_id`) VALUES
(6, 11),
(1, 11),
(19, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sapiente', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(2, 'in', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(3, 'explicabo', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(4, 'error', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(5, 'temporibus', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(6, 'consequuntur', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(7, 'cupiditate', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(8, 'facere', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(9, 'perspiciatis', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(10, 'qui', '2016-06-17 07:11:53', '2016-06-17 07:11:53'),
(11, 'Teste', '2017-07-16 05:12:17', '2017-07-16 05:12:17'),
(12, 'gama', '2017-07-17 05:53:26', '2017-07-17 05:53:26'),
(13, 'academy', '2017-07-17 05:53:26', '2017-07-17 05:53:26'),
(14, 'etste', '2017-07-17 08:28:31', '2017-07-17 08:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Sofia da Silva Gaio', 'sofia_gaio@gmail.com', '$2y$10$KLLXsVyaNU4EEuaGIbm7QOqogQLE3KenTQECie7WF7gXz9Hbfr0ZS', '4EKlYCDf06MBXimhiDMxfdNuRf5KsAx4r0XlddkbvE56UbKoRN35Me0xIW0i', '2016-06-23 06:51:34', '2016-07-15 02:19:30'),
(17, 'Guilherme Xavier Costa Carvalho', 'guilherme@gmail.com', '$2y$10$QU.QXGvaEYWrRamEP/dMI.YlQ5N.u/DLPgwHRsDXM5DOV3VB05XRG', NULL, '2016-07-15 01:21:22', '2016-07-15 02:22:01'),
(35, 'Marcelo Alexsandro', 'marcelo.alex@teknisa.com', '$2y$10$QiwtGxLXrFXm.MlQW8SPd.AbrTpG3.vCYbYoc.5LlXl4JQ0uQw5s.', NULL, '2016-07-15 07:41:28', '2016-07-15 07:44:55'),
(36, 'Leonardo Costa Carvalho', 'leoxaviercosta@gmail.com', '$2y$10$ShUjAfnJSVAz1Gf7iTogcOGFGv6hYBbLtzCO5tFnrWSRm2aKqiIlG', 'CNOliSh64ksRP7aYVlEC6DthxjBXNCXAPAAwfF94dN6YTBfwiOXywOAghqBA', '2016-07-16 02:24:03', '2017-07-19 02:26:58');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD CONSTRAINT `posts_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
