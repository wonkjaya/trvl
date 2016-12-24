-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2016 at 11:21 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlg_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `comment`, `date_added`) VALUES
(2, 2, 10, 'Hi, this is a comment. Thanks for this nice post. I like to see you blog. ', '2014-08-26 15:38:00'),
(3, 4, 10, 'Oh, thanks for reading this blog. Thanks for being with me.', '2014-08-26 15:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post_slug` varchar(200) NOT NULL,
  `post` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_slug`, `post`, `active`, `date_added`, `user_id`, `category_id`) VALUES
(1, 'Post 1', 'post-1', 'This is a demo post. This post is just only to test the functionality of the blog. If this post works properly then I could say that I am done for today. Thank you my dear.', 1, '2014-08-18 11:29:30', 3, 1),
(2, 'Post 2', 'post-2', 'This is the 2nd post. This post is to test the insert functionality of my blog. If this method works properly then I can say that I am done with insert. Thanks for being with me.', 1, '2014-08-18 11:50:17', 4, 1),
(3, 'Post 3', 'post-3', 'Yahh! It''s working properly. I have done the operation of CRUD on database. I feel really cool with codeigniter. This framework is really very easy to learn for the first time you start.', 1, '2014-08-18 11:50:36', 3, 1),
(4, 'Post 4 ', 'post-4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 1, '2014-08-18 18:23:29', 3, 1),
(5, 'Post 5', 'post-5', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere', 1, '2014-08-18 18:23:40', 3, 1),
(6, 'Post 6', 'post-6', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee', 1, '2014-08-18 18:23:49', 4, 1),
(7, 'Post 7', 'post-7', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.', 1, '2014-08-18 18:24:00', 3, 1),
(8, 'Post 8', 'post-8', 'The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To', 1, '2014-08-18 18:24:11', 4, 1),
(9, 'Post 9', 'post-9', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2014-08-18 18:24:18', 3, 1),
(10, 'Post 10', 'post-10', 'hello world', 1, '2014-08-19 18:38:18', 3, 1),
(11, 'Om Hendro', 'om-hendro', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(12, 'Om Wawan', 'om-wawan', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(13, 'Agan Eko', 'agan-eko', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(14, 'Agan Aldo', 'agan-aldo', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(15, 'Neng Icha', 'neng-icha', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(16, 'Agan Ferdy', 'agan-ferdy', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(17, 'Om Setyo', 'om-setyo', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(18, 'Neng Mariska', 'neng-mariska', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(19, 'Neng Silvi', 'neng-silvi', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2),
(20, 'Neng Riska', 'neng-riska', 'ini deskripsi', 1, '2014-08-19 18:38:18', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `category_id` int(11) NOT NULL,
  `category_slug` varchar(30) NOT NULL,
  `category_name` varchar(35) NOT NULL,
  `category_description` varchar(160) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`category_id`, `category_slug`, `category_name`, `category_description`) VALUES
(1, 'tour-destination', 'Tour Destination', NULL),
(2, 'tour-guide', 'Tour Guides', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `image_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image_key` varchar(30) NOT NULL,
  `image_value` varchar(100) NOT NULL,
  `description` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`image_id`, `post_id`, `image_key`, `image_value`, `description`) VALUES
(1, 1, 'thumnail', 'tour-1.jpg', ''),
(2, 2, 'thumnail', 'tour-2.jpg', ''),
(3, 3, 'thumnail', 'tour-3.jpg', ''),
(4, 4, 'thumnail', 'tour-4.jpg', ''),
(5, 5, 'thumnail', 'tour-5.jpg', ''),
(6, 6, 'thumnail', 'tour-6.jpg', ''),
(7, 7, 'thumnail', 'tour-7.jpg', ''),
(8, 8, 'thumnail', 'tour-8.jpg', ''),
(9, 9, 'thumnail', 'tour-9.jpg', ''),
(10, 10, 'thumnail', 'tour-10.jpg', ''),
(11, 11, 'thumnail', 'om-hendro.jpg', ''),
(12, 12, 'thumnail', 'om-wawan.jpg', ''),
(13, 13, 'thumnail', 'agan-eko.jpg', ''),
(14, 14, 'thumnail', 'agan-aldo.jpg', ''),
(15, 15, 'thumnail', 'neng-icha.jpg', ''),
(16, 16, 'thumnail', 'agan-ferdy.jpg', ''),
(17, 17, 'thumnail', 'om-setyo.jpg', ''),
(18, 18, 'thumnail', 'neng-mariska.jpg', ''),
(19, 19, 'thumnail', 'neng-silvi.jpg', ''),
(20, 20, 'thumnail', 'neng-riska.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('tcdh5hhrads1le9c9thf5e0u53cj9rc2', '127.0.0.1', 1482230203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323232393934363b),
('rgb73ll7jocnqeaui0spsfhj7o8t2ue4', '127.0.0.1', 1482230599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323233303330313b),
('ju0tf1mc6qgr9rul75tg82lkbv3m24bu', '127.0.0.1', 1482230688, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323233303635363b),
('hu163gmmqu8k725ct3vge85ncq4mah1j', '127.0.0.1', 1482283418, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323238333131393b),
('s49s9nb9us460r857rsvosdpkd4ih3p3', '127.0.0.1', 1482283632, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323238333433323b),
('7ei3ape1o9nieq70lesfefsei5qg80jf', '192.168.200.153', 1482284290, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323238343230333b),
('vg8d6b3j59mdqis99kk03qg6r2p2a3ob', '127.0.0.1', 1482284575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323238343238363b),
('u26m50a72ph2cms3t92v9qeepfj2me3s', '127.0.0.1', 1482298073, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323239383037333b),
('nf1dolkm4hnm1pddc9dfn720g39g5sae', '127.0.0.1', 1482298089, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323239383037333b),
('8rqv8p3nmi683b3so7b6gb388irs9gql', '127.0.0.1', 1482313030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331323733323b),
('mfoqoicuanrs6hictncaridgri3ajotj', '192.168.200.153', 1482313131, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331333038313b),
('6ct3o8ecacthgqjgef3vi4s0dkom81lm', '127.0.0.1', 1482313586, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331333438313b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('9v0dhjgb7beuoc63giqv21mvbfpu49r7', '127.0.0.1', 1482314013, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331333934373b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('m29bdmr5rjrn1gtcdjttjbki62j1ctpn', '127.0.0.1', 1482314459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331343236313b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('dbla3jg9030viql88nhehiaa83v1o1aa', '127.0.0.1', 1482315063, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331343737313b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('ssetgnctfp2u8vhf59o6t4fg330rd1s8', '127.0.0.1', 1482315553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331353334393b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('39mt9je08rmn8ufcce8o8o62eibm80k3', '127.0.0.1', 1482315882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331353736353b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('rdod85h7ltdfsc9fvjgo7rr5hvo5ka6i', '127.0.0.1', 1482316404, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331363338343b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('0e55rn7tb086mcr8hcg9pdgln541rhsb', '127.0.0.1', 1482316915, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331363832333b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('b1l6ggss5pdsl113m6dv5h11ca61o62n', '127.0.0.1', 1482317468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331373234303b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('ch5ucg62l89lpa4gtu6vkjl20ivt0kq5', '127.0.0.1', 1482317791, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331373534383b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('biuvcjt0hu77l7pj85au42mp2r8h6656', '127.0.0.1', 1482318122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331373838353b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('iv3ajl238hq96ickqk9bn15d500suu4n', '127.0.0.1', 1482319349, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331393136343b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('4h05u4b0cilhiup9c97q0tck2nq237lq', '127.0.0.1', 1482319498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331393439383b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('affuj0p5950pe0k0susnpnhiefe1u8ao', '127.0.0.1', 1482320136, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323331393833363b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('5vjn6c9cmkd2ppd0nbl6kugnrjufmsp7', '127.0.0.1', 1482320205, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323332303230353b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('nth58gv9e2jbufrqllstanju0rondu7l', '127.0.0.1', 1482326610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323332363332333b),
('njj879vl3commhegscgvjeqjr76a8dvn', '::1', 1482326675, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323332363637353b),
('3h2lac6qu7v9gdop1aj9fuq1kcbilu6n', '127.0.0.1', 1482400269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323430303236393b),
('8ggo39ej6hrmu62bi3e28e5anc33ijl8', '127.0.0.1', 1482400269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323430303236393b),
('slchkmcm3jer10e2cp1refq0uqaki2il', '127.0.0.1', 1482403689, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323430333636393b757365725f69647c733a313a2234223b757365726e616d657c733a353a2261646d696e223b757365725f747970657c733a353a2261646d696e223b),
('aqn58fr689dbl05b4006dmffq8ch11if', '127.0.0.1', 1482403669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323430333636393b),
('avr5i7m1otmhko25mnbrdigm3agbrk9h', '127.0.0.1', 1482486603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323438363630333b),
('glsd9ajh7r250h25v00545c2hottv724', '127.0.0.1', 1482487943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323438373934333b),
('bri73fr1vs2tg29iej7si2t3fbc7evru', '127.0.0.1', 1482488582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323438383537303b),
('l2av2el08jae02jrs6ev4i438mf0ijqh', '127.0.0.1', 1482488906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323438383632393b),
('1ner519253a8bg95i2grdbm4vvrdbbtf', '127.0.0.1', 1482489194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323438383934353b),
('ssppgbq8uaakebot6v8dkbt206vfb3uf', '127.0.0.1', 1482490692, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323439303339323b),
('gnffp79gp3bapcmishvm5j3nvgte7c04', '127.0.0.1', 1482490994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323439303733353b),
('r1850eh4ro8529s9r1d229jgm54c8g5v', '127.0.0.1', 1482571401, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323537313132303b),
('jo7pi55mcbm9c3g621re6jvlb4plbqer', '127.0.0.1', 1482571783, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323537313533363b),
('fb5ufd4u9nd06k30c61lh5n11lms6ncg', '127.0.0.1', 1482572946, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323537323933343b),
('0p5t0bgqksfrl5p48qmpalck22rctqtu', '127.0.0.1', 1482573540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323537333236393b),
('53f8eqdbfo1idtkk61jfmlh0elhbnabm', '127.0.0.1', 1482573857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323537333632303b),
('pnh0q04gce31s8k0d7seao4crlr9vjhj', '127.0.0.1', 1482574062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323537333939393b),
('qnsf99tmqi8b9l13khqi8vh1t7nt5aaa', '127.0.0.1', 1482574793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323537343733363b);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','author','user') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `user_type`) VALUES
(2, 'user@gmail.com', 'user', '12dea96fec20593566ab75692c9949596833adc9', 'user'),
(3, 'author@gmail.com', 'author', 'f64cd8e32f5ac7553c150bd05d6f2252bb73f68d', 'author'),
(4, 'admin@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_slug` (`post_slug`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `cat_slug` (`category_slug`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
