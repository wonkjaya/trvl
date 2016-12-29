-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2016 at 03:04 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post_slug` varchar(200) NOT NULL,
  `post` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`),
  UNIQUE KEY `post_slug` (`post_slug`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `posts`
--

TRUNCATE TABLE `posts`;
--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_slug`, `post`, `status`, `date_added`, `author`, `category`) VALUES
(1, 'Tangkuban Perahu', 'tangkuban-perahu', 'This is a demo post. This post is just only to test the functionality of the blog. If this post works properly then I could say that I am done for today. Thank you my dear.', 1, '2014-08-18 11:29:30', 'admin', 'tour-destination'),
(2, 'Kawah Ijen', 'kawah-ijen', 'This is the 2nd post. This post is to test the insert functionality of my blog. If this method works properly then I can say that I am done with insert. Thanks for being with me.', 1, '2014-08-18 11:50:17', 'admin', 'tour-destination'),
(3, 'Tanah Lot', 'tanah-lot', 'Yahh! It''s working properly. I have done the operation of CRUD on database. I feel really cool with codeigniter. This framework is really very easy to learn for the first time you start.', 1, '2014-08-18 11:50:36', 'admin', 'tour-destination'),
(4, 'Lake Singkarak', 'lake-singkarak', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 1, '2014-08-18 18:23:29', 'admin', 'tour-destination'),
(5, 'Pantai Bunaken', 'pantai-bunaken', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere', 1, '2014-08-18 18:23:40', 'admin', 'tour-destination'),
(6, 'Taman Mini Indonesia', 'taman-mini-indonesia', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee', 1, '2014-08-18 18:23:49', 'admin', 'tour-destination'),
(7, 'Pantai Sanur Bali', 'pantai-sanur-bali', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.', 1, '2014-08-18 18:24:00', 'admin', 'tour-destination'),
(8, 'Raja Ampat', 'raja-ampat', 'The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To', 1, '2014-08-18 18:24:11', 'admin', 'tour-destination'),
(9, 'Pantai Indrayanti', 'pantai-indrayanti', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2014-08-18 18:24:18', 'admin', 'tour-destination'),
(10, 'Nusa Dua Bali', 'nusa-dua-bali', 'hello world', 1, '2014-08-19 18:38:18', 'admin', 'tour-destination'),
(11, 'Om Hendro', 'om-hendro', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(12, 'Om Wawan', 'om-wawan', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(13, 'Agan Eko', 'agan-eko', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(14, 'Agan Aldo', 'agan-aldo', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(15, 'Neng Icha', 'neng-icha', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(16, 'Agan Ferdy', 'agan-ferdy', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(17, 'Om Setyo', 'om-setyo', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(18, 'Neng Mariska', 'neng-mariska', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(19, 'Neng Silvi', 'neng-silvi', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(20, 'Neng Riska', 'neng-riska', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'tour-guide'),
(21, 'Bpk Jatmiko Sekeluarga', 'bpk-jatmiko-sekeluarga', 'Saya sekeluarga senang sekali bisa berlibur ketempat liburan yang kami impikan bersama Kuiren Tour And Travel. Kami seperti dimanja oleh Kuiren sehingga kami merasa nyaman dan tidak sungkan-sungkan untuk meminta antar kembali pada next liburan kami.', 1, '2014-08-19 18:38:18', 'admin', 'testimony'),
(22, 'Bpk Jaya Sekeluarga', 'bpk-jaya-sekeluarga', 'Kami senang sekali bisa berlibur ketempat liburan yang kami impikan bersama Kuiren Tour And Travel. Kami seperti dimanja oleh Kuiren sehingga kami merasa nyaman dan tidak sungkan-sungkan untuk meminta antar kembali pada next liburan kami.', 1, '2014-08-19 18:38:18', 'admin', 'testimony'),
(23, 'Mariska(Unibraw)', 'mariska-unibraw', 'Saya senang sekali bisa Merasakan kenyamanan saat studi tour bersama Kuiren Tour And Travel. Kami seperti dimanja oleh Kuiren sehingga kami merasa nyaman dan tidak sungkan-sungkan untuk meminta antar kembali pada next liburan kami.', 1, '2014-08-19 18:38:18', 'admin', 'testimony'),
(24, 'Tomy(PT. Mitra Marga)', 'tomy-pt-mitra-marga', 'Saya senang sekali bisa Merasakan kenyamanan saat berliburr bersama Kuiren Tour And Travel. Kami seperti dimanja oleh Kuiren sehingga kami merasa nyaman dan tidak sungkan-sungkan untuk meminta antar kembali pada next liburan kami.', 1, '2014-08-19 18:38:18', 'admin', 'testimony'),
(25, 'New Camry', 'new-camry', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'car-rental'),
(26, 'Car Family', 'car-family', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'car-rental'),
(27, 'Big Jeep', 'big-jeep', 'ini deskripsi', 1, '2014-08-19 18:38:18', 'admin', 'car-rental'),
(28, 'Resort Bintang', 'resort-bintang', 'hello world', 1, '2014-08-19 18:38:18', 'admin', 'tour-destination'),
(30, 'Hello World', 'tour-destination', '<p>hello bray</p>', 1, '2016-12-29 13:55:54', 'admin', 'tour-destination'),
(31, 'rohman Ahmad', 'rohman-ahmad', '<p>helllo</p>', 1, '2016-12-29 14:01:12', 'admin', 'tour-destination'),
(32, 'asdasd ASHKAJS I', 'asdasd-ashkajs-i', '<p>asdasddd</p>', 2, '2016-12-29 14:03:28', 'admin', 'tour-destination');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
