-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2015 at 01:38 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lesson`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`) VALUES
(4, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(5, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(6, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(7, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(8, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(9, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(10, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(11, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(12, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(13, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(14, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(15, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(16, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(17, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(18, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(19, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(20, 'Իմ առաջին հոդվածը', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(21, 'PDOÖŠÕ¸Õ¾ Õ¡Õ¾Õ¥Õ¬Õ¡ÖÕ¾Õ¡Õ® Õ°Õ¸Õ¤Õ¾Õ¡Õ®', 'Lorem Ipsum-Õ¨ Õ¿ÕºÕ¡Õ£Ö€Õ¸Ö‚Õ©ÕµÕ¡Õ¶ Ö‡ Õ¿ÕºÕ¡Õ£Ö€Õ¡Õ¯Õ¡Õ¶ Õ¡Ö€Õ¤ÕµÕ¸Ö‚Õ¶Õ¡Õ¢Õ¥Ö€Õ¸Ö‚Õ©ÕµÕ¡Õ¶ Õ°Õ¡Õ´Õ¡Ö€ Õ¶Õ¡Õ­Õ¡Õ¿Õ¥Õ½Õ¾Õ¡Õ® Õ´Õ¸Õ¤Õ¥Õ¬Õ¡ÕµÕ«Õ¶ Õ¿Õ¥Ö„Õ½Õ¿ Õ§: ÕÕ¯Õ½Õ¡Õ® 1500-Õ¡Õ¯Õ¡Õ¶Õ¶Õ¥Ö€Õ«Ö` Lorem Ipsum-Õ¨ Õ°Õ¡Õ¶Õ¤Õ«Õ½Õ¡ÖÕ¥Õ¬ Õ§ Õ¿ÕºÕ¡Õ£Ö€Õ¡Õ¯Õ¡Õ¶ Õ¡Ö€Õ¤ÕµÕ¸Ö‚Õ¶Õ¡Õ¢Õ¥Ö€Õ¸Ö‚Õ©ÕµÕ¡Õ¶ Õ½Õ¿Õ¡Õ¶Õ¤Õ¡Ö€Õ¿ Õ´Õ¸Õ¤Õ¥Õ¬Õ¡ÕµÕ«Õ¶ Õ¿Õ¥Ö„Õ½Õ¿, Õ«Õ¶Õ¹Õ¨ Õ´Õ« Õ¡Õ¶Õ°Õ¡ÕµÕ¿ Õ¿ÕºÕ¡Õ£Ö€Õ«Õ¹Õ« Õ¯Õ¸Õ²Õ´Õ«Ö Õ¿Õ¡Ö€Õ¢Õ¥Ö€ Õ¿Õ¡Õ¼Õ¡Õ¿Õ¥Õ½Õ¡Õ¯Õ¶Õ¥Ö€Õ« Ö…Ö€Õ«Õ¶Õ¡Õ¯Õ¶Õ¥Ö€Õ« Õ£Õ«Ö€Ö„ Õ½Õ¿Õ¥Õ²Õ®Õ¥Õ¬Õ¸Ö‚ Õ»Õ¡Õ¶Ö„Õ¥Ö€Õ« Õ'),
(22, 'PDOÖŠÕ¸Õ¾ Õ¡Õ¾Õ¥Õ¬Õ¡ÖÕ¾Õ¡Õ® Õ°Õ¸Õ¤Õ¾Õ¡Õ® Õ°Õ¡Õ´Õ¡', 'Lorem Ipsum-Õ¨ Õ¿ÕºÕ¡Õ£Ö€Õ¸Ö‚Õ©ÕµÕ¡Õ¶ Ö‡ Õ¿ÕºÕ¡Õ£Ö€Õ¡Õ¯Õ¡Õ¶ Õ¡Ö€Õ¤ÕµÕ¸Ö‚Õ¶Õ¡Õ¢Õ¥Ö€Õ¸Ö‚Õ©ÕµÕ¡Õ¶ Õ°Õ¡Õ´Õ¡Ö€ Õ¶Õ¡Õ­Õ¡Õ¿Õ¥Õ½Õ¾Õ¡Õ® Õ´Õ¸Õ¤Õ¥Õ¬Õ¡ÕµÕ«Õ¶ Õ¿Õ¥Ö„Õ½Õ¿ Õ§: ÕÕ¯Õ½Õ¡Õ® 1500-Õ¡Õ¯Õ¡Õ¶Õ¶Õ¥Ö€Õ«Ö` Lorem Ipsum-Õ¨ Õ°Õ¡Õ¶Õ¤Õ«Õ½Õ¡ÖÕ¥Õ¬ Õ§ Õ¿ÕºÕ¡Õ£Ö€Õ¡Õ¯Õ¡Õ¶ Õ¡Ö€Õ¤ÕµÕ¸Ö‚Õ¶Õ¡Õ¢Õ¥Ö€Õ¸Ö‚Õ©ÕµÕ¡Õ¶ Õ½Õ¿Õ¡Õ¶Õ¤Õ¡Ö€Õ¿ Õ´Õ¸Õ¤Õ¥Õ¬Õ¡ÕµÕ«Õ¶ Õ¿Õ¥Ö„Õ½Õ¿, Õ«Õ¶Õ¹Õ¨ Õ´Õ« Õ¡Õ¶Õ°Õ¡ÕµÕ¿ Õ¿ÕºÕ¡Õ£Ö€Õ«Õ¹Õ« Õ¯Õ¸Õ²Õ´Õ«Ö Õ¿Õ¡Ö€Õ¢Õ¥Ö€ Õ¿Õ¡Õ¼Õ¡Õ¿Õ¥Õ½Õ¡Õ¯Õ¶Õ¥Ö€Õ« Ö…Ö€Õ«Õ¶Õ¡Õ¯Õ¶Õ¥Ö€Õ« Õ£Õ«Ö€Ö„ Õ½Õ¿Õ¥Õ²Õ®Õ¥Õ¬Õ¸Ö‚ Õ»Õ¡Õ¶Ö„Õ¥Ö€Õ« Õ'),
(23, 'PDO֊ով ավելացված հոդված', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման'),
(24, 'PDO֊ով ավելացված հոդված համար 2', 'Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման');

-- --------------------------------------------------------

--
-- Table structure for table `EmployeeContacts`
--

CREATE TABLE IF NOT EXISTS `EmployeeContacts` (
  `ContactID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) NOT NULL,
  `ContactInfo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ContactType` int(11) NOT NULL DEFAULT '1',
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ContactID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `EmployeeContacts`
--

INSERT INTO `EmployeeContacts` (`ContactID`, `EmployeeID`, `ContactInfo`, `ContactType`, `RegDate`) VALUES
(1, 1, 'petros@martirosyanc.com', 1, '0000-00-00 00:00:00'),
(2, 1, 'peto@martiros.am', 1, '2015-03-08 10:10:30'),
(3, 1, '5259558', 2, '2015-03-08 10:10:30'),
(4, 2, 'adfgadf@gmail.com', 1, '2015-03-08 10:11:44'),
(5, 3, 'karine@gmail.com', 1, '2015-03-08 10:24:44'),
(6, 3, '8565859', 2, '2015-03-08 10:24:44'),
(7, 3, '855259', 2, '2015-03-08 10:24:44'),
(8, 3, 'karinka856', 3, '2015-03-08 10:24:44'),
(9, 4, 'davit@garazmanyan.io', 1, '2015-03-08 10:24:44'),
(10, 4, 'davitgarazm@gmail.com', 1, '2015-03-08 10:24:44'),
(11, 4, 'davit1@gmail.com', 1, '2015-03-08 10:24:44'),
(12, 4, '85695585', 2, '2015-03-08 10:24:44'),
(13, 5, 'zaqar@zaq.am', 1, '2015-03-08 10:24:44'),
(14, 5, '52555858', 2, '2015-03-08 10:24:44'),
(15, 5, '55256958', 2, '2015-03-08 10:24:44'),
(16, 5, 'zaqarik1981', 3, '2015-03-08 10:24:44'),
(17, 6, 'gayanq@zaq.am', 1, '2015-03-08 10:24:44'),
(18, 6, '85625952', 2, '2015-03-08 10:24:44'),
(19, 6, '56596958', 2, '2015-03-08 10:24:44'),
(20, 6, 'gayancho', 3, '2015-03-08 10:24:44'),
(21, 8, 'zabel@myau.am', 1, '2015-03-08 10:24:44'),
(22, 8, 'zabelllla', 2, '2015-03-08 10:24:44'),
(23, 9, 'sarchapet@march.com', 1, '2015-03-08 10:24:44'),
(24, 9, '52252', 2, '2015-03-08 10:24:44'),
(25, 9, '95625', 2, '2015-03-08 10:24:44'),
(26, 9, 'samarchapet', 3, '2015-03-08 10:24:44'),
(27, 10, 'srbuhiashotyan@mail.ru', 1, '2015-03-08 10:24:44'),
(28, 10, '95625575', 2, '2015-03-08 10:24:44'),
(29, 10, '85659524', 2, '2015-03-08 10:24:44'),
(30, 10, 'ashotyansrbuhi', 3, '2015-03-08 10:24:44'),
(31, 17, 'zadoyangago@mail.com', 1, '2015-03-08 10:24:44'),
(32, 17, '5626585', 2, '2015-03-08 10:24:44'),
(33, 18, '8585558', 2, '2015-03-08 10:24:44'),
(34, 19, '52624878', 2, '2015-03-08 10:24:44'),
(35, 20, '52487588', 2, '2015-03-08 10:24:44'),
(36, 21, '9512357', 2, '2015-03-08 10:24:44'),
(37, 21, '753258', 2, '2015-03-08 10:24:44'),
(38, 21, '8595258', 2, '2015-03-08 10:24:44'),
(39, 21, '8597515', 2, '2015-03-08 10:24:44'),
(40, 22, '129512357', 2, '2015-03-08 10:24:44'),
(41, 22, '13753258', 2, '2015-03-08 10:24:44'),
(42, 22, '158595258', 2, '2015-03-08 10:24:44'),
(43, 22, '218597515', 2, '2015-03-08 10:24:44'),
(44, 23, 'dss152', 3, '2015-03-08 10:24:44'),
(45, 23, 'dmjjdi25', 3, '2015-03-08 10:24:44'),
(46, 23, 'kjh85', 3, '2015-03-08 10:24:44'),
(47, 23, 'hjbhy25', 3, '2015-03-08 10:24:44'),
(48, 25, 'magaa@mail.ru', 1, '2015-03-08 10:24:44'),
(49, 25, '894523', 2, '2015-03-08 10:24:44'),
(50, 25, '325487', 2, '2015-03-08 10:24:44'),
(51, 25, 'magaaaaa', 3, '2015-03-08 10:24:44'),
(52, 25, 'facebook.com/asdfsda', 5, '2015-03-09 15:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `EmployeeContactsTypes`
--

CREATE TABLE IF NOT EXISTS `EmployeeContactsTypes` (
  `ContactTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `ContactTypeDescr` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ContactTypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `EmployeeContactsTypes`
--

INSERT INTO `EmployeeContactsTypes` (`ContactTypeID`, `ContactTypeDescr`) VALUES
(1, 'Էլ․֊փոստ'),
(2, 'Հեռախոս'),
(3, 'Սքայփ'),
(4, 'Viber');

-- --------------------------------------------------------

--
-- Table structure for table `EmployeeFees`
--

CREATE TABLE IF NOT EXISTS `EmployeeFees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) NOT NULL,
  `PaymentDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Amount` decimal(10,0) NOT NULL,
  `Cheque` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `EmployeeFees`
--

INSERT INTO `EmployeeFees` (`ID`, `EmployeeID`, `PaymentDate`, `Amount`, `Cheque`) VALUES
(1, 5, '2014-06-04 12:34:03', 15000, 0),
(2, 5, '2014-06-04 12:35:31', 15000, 0),
(3, 5, '2014-06-04 12:38:20', 15000, 0),
(4, 5, '2014-06-04 12:38:20', 8000, 1),
(5, 3, '2014-06-04 12:38:20', 12000, 1),
(6, 1, '2014-06-04 12:38:48', 15000, 1),
(7, 2, '2014-06-04 12:38:48', 8000, 1),
(8, 2, '2006-06-04 12:38:48', 12000, 0),
(9, 8, '2014-06-04 12:39:46', 15000, 1),
(10, 9, '2014-06-04 12:39:46', 8000, 1),
(11, 7, '2014-06-04 12:39:46', 80000, 0),
(12, 10, '2014-06-04 12:39:46', 15000, 1),
(13, 1, '2014-06-04 12:39:46', 5000, 1),
(14, 4, '2014-06-04 12:39:46', 3000, 0),
(15, 16, '2015-01-04 13:38:48', 3000, 0),
(16, 12, '2014-07-04 12:38:48', 3000, 1),
(17, 8, '2012-09-04 12:38:48', 4000, 0),
(18, 8, '2013-07-04 16:38:48', 2500, 0),
(19, 21, '2015-07-04 12:38:48', 4500, 0),
(20, 19, '2014-05-04 12:38:48', 12000, 1),
(21, 6, '2011-07-04 12:38:48', 125000, 1),
(22, 1, '2010-07-04 08:38:48', 3600, 0),
(23, 12, '2014-07-04 12:38:48', 2500, 0),
(24, 5, '2014-07-04 12:38:48', 1000, 1),
(25, 9, '2011-03-25 10:38:48', 25000, 1),
(26, 8, '2014-07-04 12:38:48', 12500, 0),
(27, 1, '2012-03-04 12:12:48', 100000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE IF NOT EXISTS `Employees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `First Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Last Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `RegDate` datetime NOT NULL,
  `Gender` int(11) NOT NULL DEFAULT '1',
  `Salary` decimal(10,0) NOT NULL DEFAULT '200000',
  `NumberOfChildren` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`ID`, `First Name`, `Last Name`, `RegDate`, `Gender`, `Salary`, `NumberOfChildren`) VALUES
(1, 'Պետրոս', 'Մարտիրոսյան', '2014-03-28 00:00:00', 1, 300000, 5),
(2, 'adfgadf', 'Papikyan', '2014-03-09 00:00:00', 1, 300000, 1),
(3, 'Կարինե', 'Մարտիրոսյան', '2014-03-11 00:00:00', 2, 300000, 3),
(4, 'Դավիթ', 'Գարազմանյան', '2014-03-10 00:00:00', 1, 300000, 3),
(5, 'Զաքար', 'Զաքարյան', '2014-03-28 00:00:00', 1, 450000, 5),
(6, 'Գայանե', 'Մայանյան', '2014-03-24 00:00:00', 2, 450000, 3),
(8, 'Զաբել', 'Զաբելյան', '2014-03-28 00:00:00', 2, 510000, 5),
(9, 'Սարչապետ', 'Մարչապետյան', '2014-03-10 00:00:00', 1, 510000, 5),
(10, 'Սրբուհի', 'Աշոտյան', '2013-12-15 00:00:00', 2, 612000, 3),
(11, 'Հարևան', 'Վրացիդզե', '2013-09-08 00:00:00', 1, 408000, 3),
(13, 'Սրբուհի', 'Խելոքյանց', '0000-00-00 00:00:00', 1, 300000, 1),
(14, 'Վարդուհի', 'Խելոքյանունց', '0000-00-00 00:00:00', 1, 300000, 3),
(15, 'Սրբուհի', 'Խելոքյանց', '0000-00-00 00:00:00', 2, 300000, 3),
(16, 'Պետրոս', 'Պողոսյան', '2014-03-27 00:00:00', 1, 450000, 3),
(17, 'Գագո', 'Զադոյան', '2013-11-10 00:00:00', 1, 360000, 3),
(20, 'Բարդուղիմեոս', 'Պապիկյան', '2013-12-08 00:00:00', 1, 360000, 3),
(21, 'Մագա', 'Արատյան', '2014-06-26 00:00:00', 2, 750000, 2),
(22, 'Զառա', 'Մարատյան', '2014-06-26 00:00:00', 1, 500000, 0),
(23, 'Գերեգին', 'Մակարյան', '2014-01-26 00:00:00', 1, 320000, 0),
(24, 'Մարգար', 'Պլտոյան', '2012-05-22 00:00:00', 1, 421500, 0),
(25, 'Մագա', 'Մարգարյան', '2014-06-03 00:00:00', 2, 300000, 4),
(26, 'Մարինա', 'Դուռգա', '2014-06-26 00:00:00', 2, 150000, 5),
(27, 'Արտակ', 'Գրիգորյան', '2015-01-26 00:00:00', 1, 25000, 2),
(28, 'Մարտուն', 'Անթառանյան', '2015-02-26 00:00:00', 1, 170000, 6),
(29, 'Մարգարիտա', 'Ծաղիկյան', '2012-01-26 00:00:00', 2, 40000, 2),
(30, 'Պետրոս', 'Պողոսյան', '2015-03-11 00:00:00', 1, 25000, 2),
(31, 'Գարեգին', 'Պետրոսյան', '2015-06-15 00:00:00', 1, 200000, 5),
(32, 'Մարգարիտա', 'Պետրոսյան', '2015-06-15 00:00:00', 2, 200000, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
