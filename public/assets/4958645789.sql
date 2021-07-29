-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 04:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` text NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `nationality`, `date_of_birth`, `image`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Noah', 'albanian', NULL, 'uploads/images/authors/(1).jpg', ' Noah is a albanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-22 17:58:07', '2021-06-21 22:35:20', NULL),
(2, 'Oliver', 'algerian', NULL, 'uploads/images/authors/(2).jpg', ' Oliver is a algerian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-22 17:58:45', '2021-06-21 22:35:20', NULL),
(3, 'Elijah', 'american', NULL, 'uploads/images/authors/(3).jpg', ' Elijah is a american author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(4, 'William', 'andorran', NULL, 'uploads/images/authors/(4).jpg', ' William is a andorran author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-22 18:26:56', '2021-06-21 22:35:20', NULL),
(5, 'James', 'angolan', NULL, 'uploads/images/authors/(5).jpg', ' James is a angolan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-22 18:51:58', '2021-06-21 22:35:20', NULL),
(6, 'Benjamin', 'antiguans', NULL, 'uploads/images/authors/(6).jpg', ' Benjamin is a antiguans author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-22 19:07:22', '2021-06-21 22:35:20', NULL),
(7, 'Lucas', 'argentinean', NULL, 'uploads/images/authors/(7).jpg', ' Lucas is a argentinean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-22 18:52:18', '2021-06-21 22:35:20', NULL),
(8, 'Henry', 'armenian', NULL, 'uploads/images/authors/(8).jpg', ' Henry is a armenian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(9, 'Alexander', 'australian', NULL, 'uploads/images/authors/(9).jpg', ' Alexander is a australian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(10, 'Mason', 'austrian', NULL, 'uploads/images/authors/(10).jpg', ' Mason is a austrian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(11, 'Michael', 'azerbaijani', NULL, 'uploads/images/authors/(11).jpg', ' Michael is a azerbaijani author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(12, 'Ethan', 'bahamian', NULL, 'uploads/images/authors/(12).jpg', ' Ethan is a bahamian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(13, 'Daniel', 'bahraini', NULL, 'uploads/images/authors/(13).jpg', ' Daniel is a bahraini author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(14, 'Jacob', 'bangladeshi', NULL, 'uploads/images/authors/(14).jpg', ' Jacob is a bangladeshi author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(15, 'Logan', 'barbadian', NULL, 'uploads/images/authors/(15).jpg', ' Logan is a barbadian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(16, 'Jackson', 'barbudans', NULL, 'uploads/images/authors/(16).jpg', ' Jackson is a barbudans author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(17, 'Levi', 'batswana', NULL, 'uploads/images/authors/(17).jpg', ' Levi is a batswana author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(18, 'Sebastian', 'belarusian', NULL, 'uploads/images/authors/(18).jpg', ' Sebastian is a belarusian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(19, 'Mateo', 'belgian', NULL, 'uploads/images/authors/(19).jpg', ' Mateo is a belgian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(20, 'Jack', 'belizean', NULL, 'uploads/images/authors/(20).jpg', ' Jack is a belizean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(21, 'Owen', 'beninese', NULL, 'uploads/images/authors/(21).jpg', ' Owen is a beninese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(22, 'Theodore', 'bhutanese', NULL, 'uploads/images/authors/(22).jpg', ' Theodore is a bhutanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(23, 'Aiden', 'bolivian', NULL, 'uploads/images/authors/(23).jpg', ' Aiden is a bolivian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(24, 'Samuel', 'bosnian', NULL, 'uploads/images/authors/(24).jpg', ' Samuel is a bosnian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(25, 'Joseph', 'brazilian', NULL, 'uploads/images/authors/(25).jpg', ' Joseph is a brazilian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(26, 'John', 'british', NULL, 'uploads/images/authors/(26).jpg', ' John is a british author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(27, 'David', 'bruneian', NULL, 'uploads/images/authors/(27).jpg', ' David is a bruneian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(28, 'Wyatt', 'bulgarian', NULL, 'uploads/images/authors/(28).jpg', ' Wyatt is a bulgarian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(29, 'Matthew', 'burkinabe', NULL, 'uploads/images/authors/(29).jpg', ' Matthew is a burkinabe author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(30, 'Luke', 'burmese', NULL, 'uploads/images/authors/(30).jpg', ' Luke is a burmese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(31, 'Asher', 'burundian', NULL, 'uploads/images/authors/(31).jpg', ' Asher is a burundian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(32, 'Carter', 'cambodian', NULL, 'uploads/images/authors/(32).jpg', ' Carter is a cambodian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(33, 'Julian', 'cameroonian', NULL, 'uploads/images/authors/(33).jpg', ' Julian is a cameroonian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(34, 'Grayson', 'canadian', NULL, 'uploads/images/authors/(34).jpg', ' Grayson is a canadian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(35, 'Leo', 'cape verdean', NULL, 'uploads/images/authors/(35).jpg', ' Leo is a cape verdean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(36, 'Jayden', 'central african', NULL, 'uploads/images/authors/(36).jpg', ' Jayden is a central african author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(37, 'Gabriel', 'chadian', NULL, 'uploads/images/authors/(37).jpg', ' Gabriel is a chadian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(38, 'Isaac', 'chilean', NULL, 'uploads/images/authors/(38).jpg', ' Isaac is a chilean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(39, 'Lincoln', 'chinese', NULL, 'uploads/images/authors/(39).jpg', ' Lincoln is a chinese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(40, 'Anthony', 'colombian', NULL, 'uploads/images/authors/(40).jpg', ' Anthony is a colombian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(41, 'Hudson', 'comoran', NULL, 'uploads/images/authors/(41).jpg', ' Hudson is a comoran author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(42, 'Dylan', 'congolese', NULL, 'uploads/images/authors/(42).jpg', ' Dylan is a congolese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(43, 'Ezra', 'costa rican', NULL, 'uploads/images/authors/(43).jpg', ' Ezra is a costa rican author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(44, 'Thomas', 'croatian', NULL, 'uploads/images/authors/(44).jpg', ' Thomas is a croatian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(45, 'Charles', 'cuban', NULL, 'uploads/images/authors/(45).jpg', ' Charles is a cuban author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(46, 'Christopher', 'cypriot', NULL, 'uploads/images/authors/(46).jpg', ' Christopher is a cypriot author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(47, 'Jaxon', 'czech', NULL, 'uploads/images/authors/(47).jpg', ' Jaxon is a czech author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(48, 'Maverick', 'danish', NULL, 'uploads/images/authors/(48).jpg', ' Maverick is a danish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(49, 'Josiah', 'djibouti', NULL, 'uploads/images/authors/(49).jpg', ' Josiah is a djibouti author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(50, 'Isaiah', 'dominican', NULL, 'uploads/images/authors/(50).jpg', ' Isaiah is a dominican author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(51, 'Andrew', 'dutch', NULL, 'uploads/images/authors/(51).jpg', ' Andrew is a dutch author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(52, 'Elias', 'east timorese', NULL, 'uploads/images/authors/(52).jpg', ' Elias is a east timorese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(53, 'Joshua', 'ecuadorean', NULL, 'uploads/images/authors/(53).jpg', ' Joshua is a ecuadorean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(54, 'Nathan', 'egyptian', NULL, 'uploads/images/authors/(54).jpg', ' Nathan is a egyptian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(55, 'Caleb', 'emirian', NULL, 'uploads/images/authors/(55).jpg', ' Caleb is a emirian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(56, 'Ryan', 'equatorial guinean', NULL, 'uploads/images/authors/(56).jpg', ' Ryan is a equatorial guinean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(57, 'Adrian', 'eritrean', NULL, 'uploads/images/authors/(57).jpg', ' Adrian is a eritrean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(58, 'Miles', 'estonian', NULL, 'uploads/images/authors/(58).jpg', ' Miles is a estonian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(59, 'Eli', 'ethiopian', NULL, 'uploads/images/authors/(59).jpg', ' Eli is a ethiopian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(60, 'Nolan', 'fijian', NULL, 'uploads/images/authors/(60).jpg', ' Nolan is a fijian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(61, 'Christian', 'filipino', NULL, 'uploads/images/authors/(61).jpg', ' Christian is a filipino author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(62, 'Aaron', 'finnish', NULL, 'uploads/images/authors/(62).jpg', ' Aaron is a finnish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(63, 'Cameron', 'french', NULL, 'uploads/images/authors/(63).jpg', ' Cameron is a french author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(64, 'Ezekiel', 'gabonese', NULL, 'uploads/images/authors/(64).jpg', ' Ezekiel is a gabonese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(65, 'Colton', 'gambian', NULL, 'uploads/images/authors/(65).jpg', ' Colton is a gambian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(66, 'Luca', 'georgian', NULL, 'uploads/images/authors/(66).jpg', ' Luca is a georgian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(67, 'Landon', 'german', NULL, 'uploads/images/authors/(67).jpg', ' Landon is a german author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(68, 'Hunter', 'ghanaian', NULL, 'uploads/images/authors/(68).jpg', ' Hunter is a ghanaian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(69, 'Jonathan', 'greek', NULL, 'uploads/images/authors/(69).jpg', ' Jonathan is a greek author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(70, 'Santiago', 'grenadian', NULL, 'uploads/images/authors/(70).jpg', ' Santiago is a grenadian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(71, 'Axel', 'guatemalan', NULL, 'uploads/images/authors/(71).jpg', ' Axel is a guatemalan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(72, 'Easton', 'guinea-bissauan', NULL, 'uploads/images/authors/(72).jpg', ' Easton is a guinea-bissauan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(73, 'Cooper', 'guinean', NULL, 'uploads/images/authors/(73).jpg', ' Cooper is a guinean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(74, 'Jeremiah', 'guyanese', NULL, 'uploads/images/authors/(74).jpg', ' Jeremiah is a guyanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(75, 'Angel', 'haitian', NULL, 'uploads/images/authors/(75).jpg', ' Angel is a haitian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(76, 'Roman', 'herzegovinian', NULL, 'uploads/images/authors/(76).jpg', ' Roman is a herzegovinian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(77, 'Connor', 'honduran', NULL, 'uploads/images/authors/(77).jpg', ' Connor is a honduran author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(78, 'Jameson', 'hungarian', NULL, 'uploads/images/authors/(78).jpg', ' Jameson is a hungarian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(79, 'Robert', 'icelander', NULL, 'uploads/images/authors/(79).jpg', ' Robert is a icelander author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(80, 'Greyson', 'indian', NULL, 'uploads/images/authors/(80).jpg', ' Greyson is a indian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(81, 'Jordan', 'indonesian', NULL, 'uploads/images/authors/(81).jpg', ' Jordan is a indonesian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(82, 'Ian', 'iranian', NULL, 'uploads/images/authors/(82).jpg', ' Ian is a iranian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(83, 'Carson', 'iraqi', NULL, 'uploads/images/authors/(83).jpg', ' Carson is a iraqi author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(84, 'Jaxson', 'irish', NULL, 'uploads/images/authors/(84).jpg', ' Jaxson is a irish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(85, 'Leonardo', 'italian', NULL, 'uploads/images/authors/(85).jpg', ' Leonardo is a italian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(86, 'Nicholas', 'ivorian', NULL, 'uploads/images/authors/(86).jpg', ' Nicholas is a ivorian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(87, 'Dominic', 'jamaican', NULL, 'uploads/images/authors/(87).jpg', ' Dominic is a jamaican author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(88, 'Austin', 'japanese', NULL, 'uploads/images/authors/(88).jpg', ' Austin is a japanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(89, 'Everett', 'jordanian', NULL, 'uploads/images/authors/(89).jpg', ' Everett is a jordanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(90, 'Brooks', 'kazakhstani', NULL, 'uploads/images/authors/(90).jpg', ' Brooks is a kazakhstani author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(91, 'Xavier', 'kenyan', NULL, 'uploads/images/authors/(91).jpg', ' Xavier is a kenyan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(92, 'Kai', 'kittian and nevisian', NULL, 'uploads/images/authors/(92).jpg', ' Kai is a kittian and nevisian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(93, 'Jose', 'kuwaiti', NULL, 'uploads/images/authors/(93).jpg', ' Jose is a kuwaiti author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(94, 'Parker', 'kyrgyz', NULL, 'uploads/images/authors/(94).jpg', ' Parker is a kyrgyz author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(95, 'Adam', 'laotian', NULL, 'uploads/images/authors/(95).jpg', ' Adam is a laotian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(96, 'Jace', 'latvian', NULL, 'uploads/images/authors/(96).jpg', ' Jace is a latvian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(97, 'Wesley', 'lebanese', NULL, 'uploads/images/authors/(97).jpg', ' Wesley is a lebanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(98, 'Kayden', 'liberian', NULL, 'uploads/images/authors/(98).jpg', ' Kayden is a liberian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(99, 'Silas', 'libyan', NULL, 'uploads/images/authors/(99).jpg', ' Silas is a libyan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(100, 'Bennett', 'liechtensteiner', NULL, 'uploads/images/authors/(100).jpg', ' Bennett is a liechtensteiner author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(101, 'Declan', 'lithuanian', NULL, 'uploads/images/authors/(101).jpg', ' Declan is a lithuanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(102, 'Waylon', 'luxembourger', NULL, 'uploads/images/authors/(102).jpg', ' Waylon is a luxembourger author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(103, 'Weston', 'macedonian', NULL, 'uploads/images/authors/(103).jpg', ' Weston is a macedonian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(104, 'Evan', 'malagasy', NULL, 'uploads/images/authors/(104).jpg', ' Evan is a malagasy author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(105, 'Emmett', 'malawian', NULL, 'uploads/images/authors/(105).jpg', ' Emmett is a malawian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(106, 'Micah', 'malaysian', NULL, 'uploads/images/authors/(106).jpg', ' Micah is a malaysian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(107, 'Ryder', 'maldivan', NULL, 'uploads/images/authors/(107).jpg', ' Ryder is a maldivan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(108, 'Beau', 'malian', NULL, 'uploads/images/authors/(108).jpg', ' Beau is a malian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(109, 'Damian', 'maltese', NULL, 'uploads/images/authors/(109).jpg', ' Damian is a maltese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(110, 'Brayden', 'marshallese', NULL, 'uploads/images/authors/(110).jpg', ' Brayden is a marshallese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(111, 'Gael', 'mauritanian', NULL, 'uploads/images/authors/(111).jpg', ' Gael is a mauritanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(112, 'Rowan', 'mauritian', NULL, 'uploads/images/authors/(112).jpg', ' Rowan is a mauritian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(113, 'Harrison', 'mexican', NULL, 'uploads/images/authors/(113).jpg', ' Harrison is a mexican author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(114, 'Bryson', 'micronesian', NULL, 'uploads/images/authors/(114).jpg', ' Bryson is a micronesian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(115, 'Sawyer', 'moldovan', NULL, 'uploads/images/authors/(115).jpg', ' Sawyer is a moldovan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(116, 'Amir', 'monacan', NULL, 'uploads/images/authors/(116).jpg', ' Amir is a monacan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(117, 'Kingston', 'mongolian', NULL, 'uploads/images/authors/(117).jpg', ' Kingston is a mongolian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(118, 'Jason', 'moroccan', NULL, 'uploads/images/authors/(118).jpg', ' Jason is a moroccan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(119, 'Giovanni', 'mosotho', NULL, 'uploads/images/authors/(119).jpg', ' Giovanni is a mosotho author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(120, 'Vincent', 'motswana', NULL, 'uploads/images/authors/(120).jpg', ' Vincent is a motswana author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(121, 'Ayden', 'mozambican', NULL, 'uploads/images/authors/(121).jpg', ' Ayden is a mozambican author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(122, 'Chase', 'namibian', NULL, 'uploads/images/authors/(122).jpg', ' Chase is a namibian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(123, 'Myles', 'nauruan', NULL, 'uploads/images/authors/(123).jpg', ' Myles is a nauruan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(124, 'Diego', 'nepalese', NULL, 'uploads/images/authors/(124).jpg', ' Diego is a nepalese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(125, 'Nathaniel', 'new zealander', NULL, 'uploads/images/authors/(125).jpg', ' Nathaniel is a new zealander author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(126, 'Legend', 'ni-vanuatu', NULL, 'uploads/images/authors/(126).jpg', ' Legend is a ni-vanuatu author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(127, 'Jonah', 'nicaraguan', NULL, 'uploads/images/authors/(127).jpg', ' Jonah is a nicaraguan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(128, 'River', 'nigerien', NULL, 'uploads/images/authors/(128).jpg', ' River is a nigerien author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(129, 'Tyler', 'north korean', NULL, 'uploads/images/authors/(129).jpg', ' Tyler is a north korean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(130, 'Cole', 'northern irish', NULL, 'uploads/images/authors/(130).jpg', ' Cole is a northern irish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(131, 'Braxton', 'norwegian', NULL, 'uploads/images/authors/(131).jpg', ' Braxton is a norwegian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(132, 'George', 'omani', NULL, 'uploads/images/authors/(132).jpg', ' George is a omani author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(133, 'Milo', 'palestinian', NULL, 'uploads/images/authors/(133).jpg', ' Milo is a palestinian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(134, 'Zachary', 'pakistani', NULL, 'uploads/images/authors/(134).jpg', ' Zachary is a pakistani author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(135, 'Ashton', 'palauan', NULL, 'uploads/images/authors/(135).jpg', ' Ashton is a palauan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(136, 'Luis', 'panamanian', NULL, 'uploads/images/authors/(136).jpg', ' Luis is a panamanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(137, 'Jasper', 'papua new guinean', NULL, 'uploads/images/authors/(137).jpg', ' Jasper is a papua new guinean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(138, 'Kaiden', 'paraguayan', NULL, 'uploads/images/authors/(138).jpg', ' Kaiden is a paraguayan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(139, 'Adriel', 'peruvian', NULL, 'uploads/images/authors/(139).jpg', ' Adriel is a peruvian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(140, 'Gavin', 'polish', NULL, 'uploads/images/authors/(140).jpg', ' Gavin is a polish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(141, 'Bentley', 'portuguese', NULL, 'uploads/images/authors/(141).jpg', ' Bentley is a portuguese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(142, 'Calvin', 'qatari', NULL, 'uploads/images/authors/(142).jpg', ' Calvin is a qatari author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(143, 'Zion', 'romanian', NULL, 'uploads/images/authors/(143).jpg', ' Zion is a romanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(144, 'Juan', 'russian', NULL, 'uploads/images/authors/(144).jpg', ' Juan is a russian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(145, 'Maxwell', 'rwandan', NULL, 'uploads/images/authors/(145).jpg', ' Maxwell is a rwandan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(146, 'Max', 'saint lucian', NULL, 'uploads/images/authors/(146).jpg', ' Max is a saint lucian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(147, 'Ryker', 'salvadoran', NULL, 'uploads/images/authors/(147).jpg', ' Ryker is a salvadoran author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(148, 'Carlos', 'samoan', NULL, 'uploads/images/authors/(148).jpg', ' Carlos is a samoan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(149, 'Emmanuel', 'san marinese', NULL, 'uploads/images/authors/(149).jpg', ' Emmanuel is a san marinese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(150, 'Jayce', 'sao tomean', NULL, 'uploads/images/authors/(150).jpg', ' Jayce is a sao tomean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(151, 'Lorenzo', 'saudi', NULL, 'uploads/images/authors/(151).jpg', ' Lorenzo is a saudi author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(152, 'Ivan', 'scottish', NULL, 'uploads/images/authors/(152).jpg', ' Ivan is a scottish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(153, 'Jude', 'senegalese', NULL, 'uploads/images/authors/(153).jpg', ' Jude is a senegalese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(154, 'August', 'serbian', NULL, 'uploads/images/authors/(154).jpg', ' August is a serbian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(155, 'Kevin', 'seychellois', NULL, 'uploads/images/authors/(155).jpg', ' Kevin is a seychellois author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(156, 'Malachi', 'sierra leonean', NULL, 'uploads/images/authors/(156).jpg', ' Malachi is a sierra leonean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(157, 'Elliott', 'singaporean', NULL, 'uploads/images/authors/(157).jpg', ' Elliott is a singaporean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(158, 'Rhett', 'slovakian', NULL, 'uploads/images/authors/(158).jpg', ' Rhett is a slovakian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(159, 'Archer', 'slovenian', NULL, 'uploads/images/authors/(159).jpg', ' Archer is a slovenian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(160, 'Karter', 'solomon islander', NULL, 'uploads/images/authors/(160).jpg', ' Karter is a solomon islander author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(161, 'Arthur', 'somali', NULL, 'uploads/images/authors/(161).jpg', ' Arthur is a somali author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(162, 'Luka', 'south african', NULL, 'uploads/images/authors/(162).jpg', ' Luka is a south african author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(163, 'Elliot', 'south korean', NULL, 'uploads/images/authors/(163).jpg', ' Elliot is a south korean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(164, 'Thiago', 'spanish', NULL, 'uploads/images/authors/(164).jpg', ' Thiago is a spanish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(165, 'Brandon', 'sri lankan', NULL, 'uploads/images/authors/(165).jpg', ' Brandon is a sri lankan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(166, 'Camden', 'sudanese', NULL, 'uploads/images/authors/(166).jpg', ' Camden is a sudanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(167, 'Justin', 'surinamer', NULL, 'uploads/images/authors/(167).jpg', ' Justin is a surinamer author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(168, 'Jesus', 'swazi', NULL, 'uploads/images/authors/(168).jpg', ' Jesus is a swazi author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(169, 'Maddox', 'swedish', NULL, 'uploads/images/authors/(169).jpg', ' Maddox is a swedish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(170, 'King', 'swiss', NULL, 'uploads/images/authors/(170).jpg', ' King is a swiss author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(171, 'Theo', 'syrian', NULL, 'uploads/images/authors/(171).jpg', ' Theo is a syrian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(172, 'Enzo', 'taiwanese', NULL, 'uploads/images/authors/(172).jpg', ' Enzo is a taiwanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(173, 'Matteo', 'tajik', NULL, 'uploads/images/authors/(173).jpg', ' Matteo is a tajik author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(174, 'Emiliano', 'tanzanian', NULL, 'uploads/images/authors/(174).jpg', ' Emiliano is a tanzanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(175, 'Dean', 'thai', NULL, 'uploads/images/authors/(175).jpg', ' Dean is a thai author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(176, 'Hayden', 'togolese', NULL, 'uploads/images/authors/(176).jpg', ' Hayden is a togolese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(177, 'Finn', 'tongan', NULL, 'uploads/images/authors/(177).jpg', ' Finn is a tongan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(178, 'Brody', 'trinidadian or tobagonian', NULL, 'uploads/images/authors/(178).jpg', ' Brody is a trinidadian or tobagonian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(179, 'Antonio', 'tunisian', NULL, 'uploads/images/authors/(179).jpg', ' Antonio is a tunisian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(180, 'Abel', 'turkish', NULL, 'uploads/images/authors/(180).jpg', ' Abel is a turkish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL);
INSERT INTO `authors` (`id`, `name`, `nationality`, `date_of_birth`, `image`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(181, 'Alex', 'tuvaluan', NULL, 'uploads/images/authors/(181).jpg', ' Alex is a tuvaluan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(182, 'Tristan', 'ugandan', NULL, 'uploads/images/authors/(182).jpg', ' Tristan is a ugandan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(183, 'Graham', 'ukrainian', NULL, 'uploads/images/authors/(183).jpg', ' Graham is a ukrainian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(184, 'Zayden', 'uruguayan', NULL, 'uploads/images/authors/(184).jpg', ' Zayden is a uruguayan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(185, 'Judah', 'uzbekistani', NULL, 'uploads/images/authors/(185).jpg', ' Judah is a uzbekistani author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(186, 'Xander', 'venezuelan', NULL, 'uploads/images/authors/(186).jpg', ' Xander is a venezuelan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(187, 'Miguel', 'vietnamese', NULL, 'uploads/images/authors/(187).jpg', ' Miguel is a vietnamese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(188, 'Atlas', 'welsh', NULL, 'uploads/images/authors/(188).jpg', ' Atlas is a welsh author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(189, 'Messiah', 'yemenite', NULL, 'uploads/images/authors/(189).jpg', ' Messiah is a yemenite author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(190, 'Barrett', 'zambian', NULL, 'uploads/images/authors/(190).jpg', ' Barrett is a zambian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(191, 'Tucker', 'zimbabwean', NULL, 'uploads/images/authors/(191).jpg', ' Tucker is a zimbabwean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(192, 'Timothy', 'afghan', NULL, 'uploads/images/authors/(192).jpg', ' Timothy is a afghan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(193, 'Alan', 'albanian', NULL, 'uploads/images/authors/(193).jpg', ' Alan is a albanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(194, 'Edward', 'algerian', NULL, 'uploads/images/authors/(194).jpg', ' Edward is a algerian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(195, 'Leon', 'american', NULL, 'uploads/images/authors/(195).jpg', ' Leon is a american author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(196, 'Dawson', 'andorran', NULL, 'uploads/images/authors/(196).jpg', ' Dawson is a andorran author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(197, 'Eric', 'angolan', NULL, 'uploads/images/authors/(197).jpg', ' Eric is a angolan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(198, 'Ace', 'antiguans', NULL, 'uploads/images/authors/(198).jpg', ' Ace is a antiguans author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(199, 'Victor', 'argentinean', NULL, 'uploads/images/authors/(199).jpg', ' Victor is a argentinean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(200, 'Abraham', 'armenian', NULL, 'uploads/images/authors/(200).jpg', ' Abraham is a armenian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(201, 'Nicolas', 'australian', NULL, 'uploads/images/authors/(201).jpg', ' Nicolas is a australian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(202, 'Jesse', 'austrian', NULL, 'uploads/images/authors/(202).jpg', ' Jesse is a austrian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(203, 'Charlie', 'azerbaijani', NULL, 'uploads/images/authors/(203).jpg', ' Charlie is a azerbaijani author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(204, 'Patrick', 'bahamian', NULL, 'uploads/images/authors/(204).jpg', ' Patrick is a bahamian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(205, 'Walker', 'bahraini', NULL, 'uploads/images/authors/(205).jpg', ' Walker is a bahraini author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(206, 'Joel', 'bangladeshi', NULL, 'uploads/images/authors/(206).jpg', ' Joel is a bangladeshi author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(207, 'Richard', 'barbadian', NULL, 'uploads/images/authors/(207).jpg', ' Richard is a barbadian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(208, 'Beckett', 'barbudans', NULL, 'uploads/images/authors/(208).jpg', ' Beckett is a barbudans author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(209, 'Blake', 'batswana', NULL, 'uploads/images/authors/(209).jpg', ' Blake is a batswana author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(210, 'Alejandro', 'belarusian', NULL, 'uploads/images/authors/(210).jpg', ' Alejandro is a belarusian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(211, 'Avery', 'belgian', NULL, 'uploads/images/authors/(211).jpg', ' Avery is a belgian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(212, 'Grant', 'belizean', NULL, 'uploads/images/authors/(212).jpg', ' Grant is a belizean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(213, 'Peter', 'beninese', NULL, 'uploads/images/authors/(213).jpg', ' Peter is a beninese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(214, 'Oscar', 'bhutanese', NULL, 'uploads/images/authors/(214).jpg', ' Oscar is a bhutanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(215, 'Matias', 'bolivian', NULL, 'uploads/images/authors/(215).jpg', ' Matias is a bolivian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(216, 'Amari', 'bosnian', NULL, 'uploads/images/authors/(216).jpg', ' Amari is a bosnian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(217, 'Lukas', 'brazilian', NULL, 'uploads/images/authors/(217).jpg', ' Lukas is a brazilian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(218, 'Andres', 'british', NULL, 'uploads/images/authors/(218).jpg', ' Andres is a british author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(219, 'Arlo', 'bruneian', NULL, 'uploads/images/authors/(219).jpg', ' Arlo is a bruneian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(220, 'Colt', 'bulgarian', NULL, 'uploads/images/authors/(220).jpg', ' Colt is a bulgarian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(221, 'Adonis', 'burkinabe', NULL, 'uploads/images/authors/(221).jpg', ' Adonis is a burkinabe author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(222, 'Kyrie', 'burmese', NULL, 'uploads/images/authors/(222).jpg', ' Kyrie is a burmese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(223, 'Steven', 'burundian', NULL, 'uploads/images/authors/(223).jpg', ' Steven is a burundian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(224, 'Felix', 'cambodian', NULL, 'uploads/images/authors/(224).jpg', ' Felix is a cambodian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(225, 'Preston', 'cameroonian', NULL, 'uploads/images/authors/(225).jpg', ' Preston is a cameroonian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(226, 'Marcus', 'canadian', NULL, 'uploads/images/authors/(226).jpg', ' Marcus is a canadian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(227, 'Holden', 'cape verdean', NULL, 'uploads/images/authors/(227).jpg', ' Holden is a cape verdean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(228, 'Emilio', 'central african', NULL, 'uploads/images/authors/(228).jpg', ' Emilio is a central african author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(229, 'Remington', 'chadian', NULL, 'uploads/images/authors/(229).jpg', ' Remington is a chadian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(230, 'Jeremy', 'chilean', NULL, 'uploads/images/authors/(230).jpg', ' Jeremy is a chilean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(231, 'Kaleb', 'chinese', NULL, 'uploads/images/authors/(231).jpg', ' Kaleb is a chinese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(232, 'Brantley', 'colombian', NULL, 'uploads/images/authors/(232).jpg', ' Brantley is a colombian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(233, 'Bryce', 'comoran', NULL, 'uploads/images/authors/(233).jpg', ' Bryce is a comoran author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(234, 'Mark', 'congolese', NULL, 'uploads/images/authors/(234).jpg', ' Mark is a congolese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(235, 'Knox', 'costa rican', NULL, 'uploads/images/authors/(235).jpg', ' Knox is a costa rican author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(236, 'Israel', 'croatian', NULL, 'uploads/images/authors/(236).jpg', ' Israel is a croatian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(237, 'Phoenix', 'cuban', NULL, 'uploads/images/authors/(237).jpg', ' Phoenix is a cuban author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(238, 'Kobe', 'cypriot', NULL, 'uploads/images/authors/(238).jpg', ' Kobe is a cypriot author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(239, 'Nash', 'czech', NULL, 'uploads/images/authors/(239).jpg', ' Nash is a czech author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(240, 'Griffin', 'danish', NULL, 'uploads/images/authors/(240).jpg', ' Griffin is a danish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(241, 'Caden', 'djibouti', NULL, 'uploads/images/authors/(241).jpg', ' Caden is a djibouti author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(242, 'Kenneth', 'dominican', NULL, 'uploads/images/authors/(242).jpg', ' Kenneth is a dominican author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(243, 'Kyler', 'dutch', NULL, 'uploads/images/authors/(243).jpg', ' Kyler is a dutch author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(244, 'Hayes', 'east timorese', NULL, 'uploads/images/authors/(244).jpg', ' Hayes is a east timorese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(245, 'Jax', 'ecuadorean', NULL, 'uploads/images/authors/(245).jpg', ' Jax is a ecuadorean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(246, 'Rafael', 'egyptian', NULL, 'uploads/images/authors/(246).jpg', ' Rafael is a egyptian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(247, 'Beckham', 'emirian', NULL, 'uploads/images/authors/(247).jpg', ' Beckham is a emirian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(248, 'Javier', 'equatorial guinean', NULL, 'uploads/images/authors/(248).jpg', ' Javier is a equatorial guinean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(249, 'Maximus', 'eritrean', NULL, 'uploads/images/authors/(249).jpg', ' Maximus is a eritrean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(250, 'Simon', 'estonian', NULL, 'uploads/images/authors/(250).jpg', ' Simon is a estonian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(251, 'Paul', 'ethiopian', NULL, 'uploads/images/authors/(251).jpg', ' Paul is a ethiopian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(252, 'Omar', 'fijian', NULL, 'uploads/images/authors/(252).jpg', ' Omar is a fijian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(253, 'Kaden', 'filipino', NULL, 'uploads/images/authors/(253).jpg', ' Kaden is a filipino author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(254, 'Kash', 'finnish', NULL, 'uploads/images/authors/(254).jpg', ' Kash is a finnish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(255, 'Lane', 'french', NULL, 'uploads/images/authors/(255).jpg', ' Lane is a french author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(256, 'Bryan', 'gabonese', NULL, 'uploads/images/authors/(256).jpg', ' Bryan is a gabonese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(257, 'Riley', 'gambian', NULL, 'uploads/images/authors/(257).jpg', ' Riley is a gambian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(258, 'Zane', 'georgian', NULL, 'uploads/images/authors/(258).jpg', ' Zane is a georgian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(259, 'Louis', 'german', NULL, 'uploads/images/authors/(259).jpg', ' Louis is a german author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(260, 'Aidan', 'ghanaian', NULL, 'uploads/images/authors/(260).jpg', ' Aidan is a ghanaian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(261, 'Paxton', 'greek', NULL, 'uploads/images/authors/(261).jpg', ' Paxton is a greek author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(262, 'Maximiliano', 'grenadian', NULL, 'uploads/images/authors/(262).jpg', ' Maximiliano is a grenadian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(263, 'Karson', 'guatemalan', NULL, 'uploads/images/authors/(263).jpg', ' Karson is a guatemalan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(264, 'Cash', 'guinea-bissauan', NULL, 'uploads/images/authors/(264).jpg', ' Cash is a guinea-bissauan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(265, 'Cayden', 'guinean', NULL, 'uploads/images/authors/(265).jpg', ' Cayden is a guinean author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(266, 'Emerson', 'guyanese', NULL, 'uploads/images/authors/(266).jpg', ' Emerson is a guyanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(267, 'Tobias', 'haitian', NULL, 'uploads/images/authors/(267).jpg', ' Tobias is a haitian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(268, 'Ronan', 'herzegovinian', NULL, 'uploads/images/authors/(268).jpg', ' Ronan is a herzegovinian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(269, 'Brian', 'honduran', NULL, 'uploads/images/authors/(269).jpg', ' Brian is a honduran author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(270, 'Dallas', 'hungarian', NULL, 'uploads/images/authors/(270).jpg', ' Dallas is a hungarian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(271, 'Bradley', 'icelander', NULL, 'uploads/images/authors/(271).jpg', ' Bradley is a icelander author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(272, 'Jorge', 'indian', NULL, 'uploads/images/authors/(272).jpg', ' Jorge is a indian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(273, 'Walter', 'indonesian', NULL, 'uploads/images/authors/(273).jpg', ' Walter is a indonesian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(274, 'Josue', 'iranian', NULL, 'uploads/images/authors/(274).jpg', ' Josue is a iranian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(275, 'Khalil', 'iraqi', NULL, 'uploads/images/authors/(275).jpg', ' Khalil is a iraqi author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(276, 'Damien', 'irish', NULL, 'uploads/images/authors/(276).jpg', ' Damien is a irish author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:20', NULL),
(277, 'Jett', 'italian', NULL, 'uploads/images/authors/(277).jpg', ' Jett is a italian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(278, 'Kairo', 'ivorian', NULL, 'uploads/images/authors/(278).jpg', ' Kairo is a ivorian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(279, 'Zander', 'jamaican', NULL, 'uploads/images/authors/(279).jpg', ' Zander is a jamaican author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(280, 'Andre', 'japanese', NULL, 'uploads/images/authors/(280).jpg', ' Andre is a japanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(281, 'Cohen', 'jordanian', NULL, 'uploads/images/authors/(281).jpg', ' Cohen is a jordanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(282, 'Crew', 'kazakhstani', NULL, 'uploads/images/authors/(282).jpg', ' Crew is a kazakhstani author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(283, 'Hendrix', 'kenyan', NULL, 'uploads/images/authors/(283).jpg', ' Hendrix is a kenyan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(284, 'Colin', 'kittian and nevisian', NULL, 'uploads/images/authors/(284).jpg', ' Colin is a kittian and nevisian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(285, 'Chance', 'kuwaiti', NULL, 'uploads/images/authors/(285).jpg', ' Chance is a kuwaiti author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(286, 'Malakai', 'kyrgyz', NULL, 'uploads/images/authors/(286).jpg', ' Malakai is a kyrgyz author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(287, 'Clayton', 'laotian', NULL, 'uploads/images/authors/(287).jpg', ' Clayton is a laotian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(288, 'Daxton', 'latvian', NULL, 'uploads/images/authors/(288).jpg', ' Daxton is a latvian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(289, 'Malcolm', 'lebanese', NULL, 'uploads/images/authors/(289).jpg', ' Malcolm is a lebanese author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(290, 'Lennox', 'liberian', NULL, 'uploads/images/authors/(290).jpg', ' Lennox is a liberian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(291, 'Martin', 'libyan', NULL, 'uploads/images/authors/(291).jpg', ' Martin is a libyan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(292, 'Jaden', 'liechtensteiner', NULL, 'uploads/images/authors/(292).jpg', ' Jaden is a liechtensteiner author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(293, 'Kayson', 'lithuanian', NULL, 'uploads/images/authors/(293).jpg', ' Kayson is a lithuanian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(294, 'Bodhi', 'luxembourger', NULL, 'uploads/images/authors/(294).jpg', ' Bodhi is a luxembourger author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(295, 'Francisco', 'macedonian', NULL, 'uploads/images/authors/(295).jpg', ' Francisco is a macedonian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(296, 'Cody', 'malagasy', NULL, 'uploads/images/authors/(296).jpg', ' Cody is a malagasy author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(297, 'Erick', 'malawian', NULL, 'uploads/images/authors/(297).jpg', ' Erick is a malawian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(298, 'Kameron', 'malaysian', NULL, 'uploads/images/authors/(298).jpg', ' Kameron is a malaysian author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(299, 'Liam', 'maldivan', NULL, 'uploads/images/authors/(299).jpg', ' Liam is a maldivan author, He has many wonderful books that have won many international and local awards, He loved books and writing since childhood,', '2021-06-23 01:49:24', '2021-06-21 22:35:21', NULL),
(300, 'bb', 'angolan', '2020-02-02', 'uploads/images/authors/4748518913.jpg', 'bb', '2021-06-22 19:14:36', '2021-06-22 16:14:36', '2021-06-22 16:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `release_year` int(4) NOT NULL,
  `edition_number` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `image` text NOT NULL,
  `pdf` text DEFAULT NULL,
  `description` text NOT NULL,
  `Language` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `release_year`, `edition_number`, `pages`, `image`, `pdf`, `description`, `Language`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'aziz', 2000, 2, 100, 'uploads/images/books/4688334087.jpg', '8295930509.pdf', 'aziz', 'English', '2021-07-02 15:42:53', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(2, 'A Passage to India', 1901, 1, 60, 'uploads/images/books/10840265273.jpg', '8295930509.pdf', 'A Passage to India is an English book , wrote in 1901 and has 60 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:50:15', NULL),
(3, 'A Revenue Stamp', 1902, 1, 70, 'uploads/images/books/4827980243.jpg', '8295930509.pdf', 'A Revenue Stamp is an English book , wrote in 1902 and has 70 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:46:08', NULL),
(4, 'Death of a City', 1903, 1, 80, 'uploads/images/books/4621731306.jpg', '8295930509.pdf', 'Death of a City is an English book , wrote in 1903 and has 80 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:48:35', NULL),
(5, 'Pinjar', 1904, 1, 50, 'uploads/images/books/5.jpg', '8295930509.pdf', 'Pinjar is an English book , wrote in 1904 and has 50 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(6, 'A Suitable Boy', 1905, 2, 70, 'uploads/images/books/6.jpg', '8295930509.pdf', 'A Suitable Boy is an English book , wrote in 1905 and has 70 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(7, 'A Tale of Two Cities', 1906, 1, 71, 'uploads/images/books/7.jpg', '8295930509.pdf', 'A Tale of Two Cities is an English book , wrote in 1906 and has 71 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(8, 'David Copperfield', 1907, 2, 74, 'uploads/images/books/8.jpg', '8295930509.pdf', 'David Copperfield is an English book , wrote in 1907 and has 74 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(9, 'Oliver Twist', 1908, 1, 76, 'uploads/images/books/9.jpg', '8295930509.pdf', 'Oliver Twist is an English book , wrote in 1908 and has 76 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(10, 'Origin of Species', 1909, 1, 78, 'uploads/images/books/10.jpg', '8295930509.pdf', 'Origin of Species is an English book , wrote in 1909 and has 78 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(11, 'A Week with Gandhi', 1910, 3, 80, 'uploads/images/books/11.jpg', '8295930509.pdf', 'A Week with Gandhi is an English book , wrote in 1910 and has 80 pages and has 3 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(12, 'A Woman\'s Life', 1911, 1, 83, 'uploads/images/books/12.jpg', '8295930509.pdf', 'A Woman\'s Life is an English book , wrote in 1911 and has 83 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(13, 'Aadhe Adhure', 1912, 1, 85, 'uploads/images/books/13.jpg', '8295930509.pdf', 'Aadhe Adhure is an English book , wrote in 1912 and has 85 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(14, 'Adventures of Sherlock Holmes', 1913, 5, 87, 'uploads/images/books/14.jpg', '8295930509.pdf', 'Adventures of Sherlock Holmes is an English book , wrote in 1913 and has 87 pages and has 5 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(15, 'Adventures of Tom Sawyer', 1914, 1, 90, 'uploads/images/books/15.jpg', '8295930509.pdf', 'Adventures of Tom Sawyer is an English book , wrote in 1914 and has 90 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(16, 'Ain - i - Akbari', 1915, 1, 92, 'uploads/images/books/16.jpg', '8295930509.pdf', 'Ain - i - Akbari is an English book , wrote in 1915 and has 92 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(17, 'Akbarnama', 1916, 6, 94, 'uploads/images/books/17.jpg', '8295930509.pdf', 'Akbarnama is an English book , wrote in 1916 and has 94 pages and has 6 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(18, 'Alice in Wonderland', 1917, 1, 96, 'uploads/images/books/18.jpg', '8295930509.pdf', 'Alice in Wonderland is an English book , wrote in 1917 and has 96 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(19, 'An Introduction to Dreamland', 1918, 1, 99, 'uploads/images/books/19.jpg', '8295930509.pdf', 'An Introduction to Dreamland is an English book , wrote in 1918 and has 99 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(20, 'Anand Math', 1919, 4, 101, 'uploads/images/books/20.jpg', '8295930509.pdf', 'Anand Math is an English book , wrote in 1919 and has 101 pages and has 4 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(21, 'Anna Karenina', 1920, 1, 103, 'uploads/images/books/21.jpg', '8295930509.pdf', 'Anna Karenina is an English book , wrote in 1920 and has 103 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(22, 'War and Peace', 1921, 1, 106, 'uploads/images/books/22.jpg', '8295930509.pdf', 'War and Peace is an English book , wrote in 1921 and has 106 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(23, 'Apple Cart', 1922, 1, 108, 'uploads/images/books/23.jpg', '8295930509.pdf', 'Apple Cart is an English book , wrote in 1922 and has 108 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(24, 'Arms and the Man', 1923, 5, 110, 'uploads/images/books/24.jpg', '8295930509.pdf', 'Arms and the Man is an English book , wrote in 1923 and has 110 pages and has 5 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(25, 'Man and Superman', 1924, 1, 112, 'uploads/images/books/25.jpg', '8295930509.pdf', 'Man and Superman is an English book , wrote in 1924 and has 112 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(26, 'Around the World in Eighty Days', 1925, 1, 115, 'uploads/images/books/26.jpg', '8295930509.pdf', 'Around the World in Eighty Days is an English book , wrote in 1925 and has 115 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(27, 'Arthshastra', 1926, 4, 117, 'uploads/images/books/27.jpg', '8295930509.pdf', 'Arthshastra is an English book , wrote in 1926 and has 117 pages and has 4 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(28, 'Asian Drama', 1927, 1, 119, 'uploads/images/books/28.jpg', '8295930509.pdf', 'Asian Drama is an English book , wrote in 1927 and has 119 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(29, 'Autobiography of a Yogi', 1928, 1, 122, 'uploads/images/books/29.jpg', '8295930509.pdf', 'Autobiography of a Yogi is an English book , wrote in 1928 and has 122 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(30, 'Baburnama', 1929, 5, 124, 'uploads/images/books/30.jpg', '8295930509.pdf', 'Baburnama is an English book , wrote in 1929 and has 124 pages and has 5 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(31, 'Ben Hur', 1930, 1, 126, 'uploads/images/books/31.jpg', '8295930509.pdf', 'Ben Hur is an English book , wrote in 1930 and has 126 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(32, 'Blind Beauty', 1931, 1, 128, 'uploads/images/books/32.jpg', '8295930509.pdf', 'Blind Beauty is an English book , wrote in 1931 and has 128 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(33, 'Dr. Zhivago', 1932, 3, 131, 'uploads/images/books/33.jpg', '8295930509.pdf', 'Dr. Zhivago is an English book , wrote in 1932 and has 131 pages and has 3 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(34, 'Broken Wings', 1933, 1, 133, 'uploads/images/books/34.jpg', '8295930509.pdf', 'Broken Wings is an English book , wrote in 1933 and has 133 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(35, 'Charandas Chor', 1934, 1, 135, 'uploads/images/books/35.jpg', '8295930509.pdf', 'Charandas Chor is an English book , wrote in 1934 and has 135 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(36, 'China Passage', 1935, 1, 138, 'uploads/images/books/36.jpg', '8295930509.pdf', 'China Passage is an English book , wrote in 1935 and has 138 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(37, 'Communist Manifesto', 1936, 4, 140, 'uploads/images/books/37.jpg', '8295930509.pdf', 'Communist Manifesto is an English book , wrote in 1936 and has 140 pages and has 4 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(38, 'Das Capital', 1937, 1, 142, 'uploads/images/books/38.jpg', '8295930509.pdf', 'Das Capital is an English book , wrote in 1937 and has 142 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(39, 'Convenient Action', 1938, 1, 144, 'uploads/images/books/39.jpg', '8295930509.pdf', 'Convenient Action is an English book , wrote in 1938 and has 144 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(40, 'Coolie', 1939, 1, 147, 'uploads/images/books/40.jpg', '8295930509.pdf', 'Coolie is an English book , wrote in 1939 and has 147 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(41, 'Crime and Punishment', 1940, 6, 149, 'uploads/images/books/41.jpg', '8295930509.pdf', 'Crime and Punishment is an English book , wrote in 1940 and has 149 pages and has 6 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(42, 'Deep Shikha', 1941, 1, 151, 'uploads/images/books/42.jpg', '8295930509.pdf', 'Deep Shikha is an English book , wrote in 1941 and has 151 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(43, 'Devdas', 1942, 1, 154, 'uploads/images/books/43.jpg', '8295930509.pdf', 'Devdas is an English book , wrote in 1942 and has 154 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(44, 'Discovery of India', 1943, 1, 156, 'uploads/images/books/44.jpg', '8295930509.pdf', 'Discovery of India is an English book , wrote in 1943 and has 156 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(45, 'Divine Comedy', 1944, 1, 158, 'uploads/images/books/45.jpg', '8295930509.pdf', 'Divine Comedy is an English book , wrote in 1944 and has 158 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(46, 'Don Quixote', 1945, 5, 160, 'uploads/images/books/46.jpg', '8295930509.pdf', 'Don Quixote is an English book , wrote in 1945 and has 160 pages and has 5 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(47, 'Faust', 1946, 1, 163, 'uploads/images/books/47.jpg', '8295930509.pdf', 'Faust is an English book , wrote in 1946 and has 163 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(48, 'For Whom the Bell Tolls', 1947, 1, 165, 'uploads/images/books/48.jpg', '8295930509.pdf', 'For Whom the Bell Tolls is an English book , wrote in 1947 and has 165 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(49, 'Old Man and the Sea', 1948, 1, 167, 'uploads/images/books/49.jpg', '8295930509.pdf', 'Old Man and the Sea is an English book , wrote in 1948 and has 167 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(50, 'Freedom at Midnight', 1949, 2, 170, 'uploads/images/books/50.jpg', '8295930509.pdf', 'Freedom at Midnight is an English book , wrote in 1949 and has 170 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(51, 'Geet Govind', 1950, 1, 172, 'uploads/images/books/51.jpg', '8295930509.pdf', 'Geet Govind is an English book , wrote in 1950 and has 172 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(52, 'Geetanjali', 1951, 1, 174, 'uploads/images/books/52.jpg', '8295930509.pdf', 'Geetanjali is an English book , wrote in 1951 and has 174 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(53, 'God of Small Things', 1952, 5, 176, 'uploads/images/books/53.jpg', '8295930509.pdf', 'God of Small Things is an English book , wrote in 1952 and has 176 pages and has 5 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(54, 'Gulliver\'s Travels', 1953, 1, 179, 'uploads/images/books/54.jpg', '8295930509.pdf', 'Gulliver\'s Travels is an English book , wrote in 1953 and has 179 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(55, 'Harsha Charitra', 1954, 1, 181, 'uploads/images/books/55.jpg', '8295930509.pdf', 'Harsha Charitra is an English book , wrote in 1954 and has 181 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(56, 'Kadambari', 1955, 2, 183, 'uploads/images/books/56.jpg', '8295930509.pdf', 'Kadambari is an English book , wrote in 1955 and has 183 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(57, 'Hero of Nymph', 1956, 1, 186, 'uploads/images/books/57.jpg', '8295930509.pdf', 'Hero of Nymph is an English book , wrote in 1956 and has 186 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(58, 'Life Divine', 1957, 1, 188, 'uploads/images/books/58.jpg', '8295930509.pdf', 'Life Divine is an English book , wrote in 1957 and has 188 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(59, 'Himalayan Blunder', 1958, 2, 190, 'uploads/images/books/59.jpg', '8295930509.pdf', 'Himalayan Blunder is an English book , wrote in 1958 and has 190 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(60, 'Hind Swaraj', 1959, 1, 192, 'uploads/images/books/60.jpg', '8295930509.pdf', 'Hind Swaraj is an English book , wrote in 1959 and has 192 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(61, 'My Experiments with Truth', 1960, 1, 195, 'uploads/images/books/61.jpg', '8295930509.pdf', 'My Experiments with Truth is an English book , wrote in 1960 and has 195 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(62, 'Hindu View of Life', 1961, 2, 197, 'uploads/images/books/62.jpg', '8295930509.pdf', 'Hindu View of Life is an English book , wrote in 1961 and has 197 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(63, 'Ignited Minds', 1962, 1, 199, 'uploads/images/books/63.jpg', '8295930509.pdf', 'Ignited Minds is an English book , wrote in 1962 and has 199 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(64, 'India 2020', 1963, 1, 202, 'uploads/images/books/64.jpg', '8295930509.pdf', 'India 2020 is an English book , wrote in 1963 and has 202 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(65, 'Wings of Fire', 1964, 1, 204, 'uploads/images/books/65.jpg', '8295930509.pdf', 'Wings of Fire is an English book , wrote in 1964 and has 204 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(66, 'Illiad', 1965, 3, 206, 'uploads/images/books/66.jpg', '8295930509.pdf', 'Illiad is an English book , wrote in 1965 and has 206 pages and has 3 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(67, 'Odyssey', 1966, 1, 208, 'uploads/images/books/67.jpg', '8295930509.pdf', 'Odyssey is an English book , wrote in 1966 and has 208 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(68, 'In Other Words', 1967, 1, 211, 'uploads/images/books/68.jpg', '8295930509.pdf', 'In Other Words is an English book , wrote in 1967 and has 211 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(69, 'Interpreter of Maladies', 1968, 4, 213, 'uploads/images/books/69.jpg', '8295930509.pdf', 'Interpreter of Maladies is an English book , wrote in 1968 and has 213 pages and has 4 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(70, 'India Divided', 1969, 1, 215, 'uploads/images/books/70.jpg', '8295930509.pdf', 'India Divided is an English book , wrote in 1969 and has 215 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(71, 'Indica', 1970, 1, 218, 'uploads/images/books/71.jpg', '8295930509.pdf', 'Indica is an English book , wrote in 1970 and has 218 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(72, 'Invisible Man', 1971, 1, 220, 'uploads/images/books/72.jpg', '8295930509.pdf', 'Invisible Man is an English book , wrote in 1971 and has 220 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(73, 'Time Machine', 1972, 1, 222, 'uploads/images/books/73.jpg', '8295930509.pdf', 'Time Machine is an English book , wrote in 1972 and has 222 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(74, 'Jungle Book', 1973, 6, 224, 'uploads/images/books/74.jpg', '8295930509.pdf', 'Jungle Book is an English book , wrote in 1973 and has 224 pages and has 6 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(75, 'Jurassic Park', 1974, 1, 227, 'uploads/images/books/75.jpg', '8295930509.pdf', 'Jurassic Park is an English book , wrote in 1974 and has 227 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(76, 'Kaya Kalp', 1975, 1, 229, 'uploads/images/books/76.jpg', '8295930509.pdf', 'Kaya Kalp is an English book , wrote in 1975 and has 229 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(77, 'Seva Sadan', 1976, 1, 231, 'uploads/images/books/77.jpg', '8295930509.pdf', 'Seva Sadan is an English book , wrote in 1976 and has 231 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(78, 'Vardaan', 1977, 1, 234, 'uploads/images/books/78.jpg', '8295930509.pdf', 'Vardaan is an English book , wrote in 1977 and has 234 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(79, 'Last Man in Tower', 1978, 4, 236, 'uploads/images/books/79.jpg', '8295930509.pdf', 'Last Man in Tower is an English book , wrote in 1978 and has 236 pages and has 4 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(80, 'The White Tiger', 1979, 1, 238, 'uploads/images/books/80.jpg', '8295930509.pdf', 'The White Tiger is an English book , wrote in 1979 and has 238 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(81, 'Leaders', 1980, 1, 240, 'uploads/images/books/81.jpg', '8295930509.pdf', 'Leaders is an English book , wrote in 1980 and has 240 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(82, 'Little Women', 1981, 1, 243, 'uploads/images/books/82.jpg', '8295930509.pdf', 'Little Women is an English book , wrote in 1981 and has 243 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(83, 'Madhushala', 1982, 1, 245, 'uploads/images/books/83.jpg', '8295930509.pdf', 'Madhushala is an English book , wrote in 1982 and has 245 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(84, 'Meghdoot', 1983, 2, 247, 'uploads/images/books/84.jpg', '8295930509.pdf', 'Meghdoot is an English book , wrote in 1983 and has 247 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(85, 'Meghdoot', 1984, 1, 250, 'uploads/images/books/85.jpg', '8295930509.pdf', 'Meghdoot is an English book , wrote in 1984 and has 250 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(86, 'Mein Kampf', 1985, 1, 252, 'uploads/images/books/86.jpg', '8295930509.pdf', 'Mein Kampf is an English book , wrote in 1985 and has 252 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(87, 'Mistaken Identity', 1986, 6, 254, 'uploads/images/books/87.jpg', '8295930509.pdf', 'Mistaken Identity is an English book , wrote in 1986 and has 254 pages and has 6 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(88, 'Mother', 1987, 1, 256, 'uploads/images/books/88.jpg', '8295930509.pdf', 'Mother is an English book , wrote in 1987 and has 256 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(89, 'My Truth', 1988, 1, 259, 'uploads/images/books/89.jpg', '8295930509.pdf', 'My Truth is an English book , wrote in 1988 and has 259 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(90, 'Pakhtoon', 1989, 2, 261, 'uploads/images/books/90.jpg', '8295930509.pdf', 'Pakhtoon is an English book , wrote in 1989 and has 261 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(91, 'Paradise Lost', 1990, 1, 263, 'uploads/images/books/91.jpg', '8295930509.pdf', 'Paradise Lost is an English book , wrote in 1990 and has 263 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(92, 'Pather Panchali', 1991, 1, 266, 'uploads/images/books/92.jpg', '8295930509.pdf', 'Pather Panchali is an English book , wrote in 1991 and has 266 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(93, 'Poverty & Un-British Rule in India', 1992, 1, 268, 'uploads/images/books/93.jpg', '8295930509.pdf', 'Poverty & Un-British Rule in India is an English book , wrote in 1992 and has 268 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(94, 'Pride and Prejudice', 1993, 5, 270, 'uploads/images/books/94.jpg', '8295930509.pdf', 'Pride and Prejudice is an English book , wrote in 1993 and has 270 pages and has 5 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(95, 'Principia', 1994, 1, 272, 'uploads/images/books/95.jpg', '8295930509.pdf', 'Principia is an English book , wrote in 1994 and has 272 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(96, 'Prison Diary', 1995, 1, 275, 'uploads/images/books/96.jpg', '8295930509.pdf', 'Prison Diary is an English book , wrote in 1995 and has 275 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(97, 'Rajatarangini', 1996, 1, 277, 'uploads/images/books/97.jpg', '8295930509.pdf', 'Rajatarangini is an English book , wrote in 1996 and has 277 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(98, 'Robinson Crusoe', 1997, 1, 279, 'uploads/images/books/98.jpg', '8295930509.pdf', 'Robinson Crusoe is an English book , wrote in 1997 and has 279 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(99, 'Rudali', 1998, 3, 282, 'uploads/images/books/99.jpg', '8295930509.pdf', 'Rudali is an English book , wrote in 1998 and has 282 pages and has 3 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(100, 'Sahab Bibi Gulam', 1999, 1, 284, 'uploads/images/books/100.jpg', '8295930509.pdf', 'Sahab Bibi Gulam is an English book , wrote in 1999 and has 284 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(101, 'Saket', 2000, 1, 286, 'uploads/images/books/101.jpg', '8295930509.pdf', 'Saket is an English book , wrote in 2000 and has 286 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(102, 'Satanic Verses', 2001, 1, 288, 'uploads/images/books/102.jpg', '8295930509.pdf', 'Satanic Verses is an English book , wrote in 2001 and has 288 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(103, 'Shah Nama', 2002, 4, 291, 'uploads/images/books/103.jpg', '8295930509.pdf', 'Shah Nama is an English book , wrote in 2002 and has 291 pages and has 4 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(104, '2 States', 2003, 1, 293, 'uploads/images/books/104.jpg', '8295930509.pdf', '2 States is an English book , wrote in 2003 and has 293 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(105, 'Tamas', 2004, 1, 295, 'uploads/images/books/105.jpg', '8295930509.pdf', 'Tamas is an English book , wrote in 2004 and has 295 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(106, 'Terhi Lakeer', 2005, 1, 298, 'uploads/images/books/106.jpg', '8295930509.pdf', 'Terhi Lakeer is an English book , wrote in 2005 and has 298 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(107, 'The Black Swan', 2006, 5, 300, 'uploads/images/books/107.jpg', '8295930509.pdf', 'The Black Swan is an English book , wrote in 2006 and has 300 pages and has 5 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(108, 'The Bubble', 2007, 1, 302, 'uploads/images/books/108.jpg', '8295930509.pdf', 'The Bubble is an English book , wrote in 2007 and has 302 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(109, 'The Company of Women', 2008, 1, 304, 'uploads/images/books/109.jpg', '8295930509.pdf', 'The Company of Women is an English book , wrote in 2008 and has 304 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(110, 'Train to Pakistan', 2009, 1, 307, 'uploads/images/books/110.jpg', '8295930509.pdf', 'Train to Pakistan is an English book , wrote in 2009 and has 307 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(111, 'The Diary of Anne Frank', 2010, 4, 309, 'uploads/images/books/111.jpg', '8295930509.pdf', 'The Diary of Anne Frank is an English book , wrote in 2010 and has 309 pages and has 4 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(112, 'The Godfather', 2011, 1, 311, 'uploads/images/books/112.jpg', '8295930509.pdf', 'The Godfather is an English book , wrote in 2011 and has 311 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(113, 'The Harry Potter series', 2012, 1, 314, 'uploads/images/books/113.jpg', '8295930509.pdf', 'The Harry Potter series is an English book , wrote in 2012 and has 314 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(114, 'The Immortals of Meluha', 2013, 5, 316, 'uploads/images/books/114.jpg', '8295930509.pdf', 'The Immortals of Meluha is an English book , wrote in 2013 and has 316 pages and has 5 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(115, 'The Oath of the Vayuputras', 2014, 1, 318, 'uploads/images/books/115.jpg', '8295930509.pdf', 'The Oath of the Vayuputras is an English book , wrote in 2014 and has 318 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(116, 'The Secret of the Nagas', 2015, 1, 320, 'uploads/images/books/116.jpg', '8295930509.pdf', 'The Secret of the Nagas is an English book , wrote in 2015 and has 320 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(117, 'The Three Musketeers', 2016, 6, 323, 'uploads/images/books/117.jpg', '8295930509.pdf', 'The Three Musketeers is an English book , wrote in 2016 and has 323 pages and has 6 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(118, 'Theory of Relativity', 2017, 1, 325, 'uploads/images/books/118.jpg', '8295930509.pdf', 'Theory of Relativity is an English book , wrote in 2017 and has 325 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(119, 'Three Men in a Boat', 2018, 2, 327, 'uploads/images/books/119.jpg', '8295930509.pdf', 'Three Men in a Boat is an English book , wrote in 2018 and has 327 pages and has 2 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(120, 'Tughlaq', 2019, 1, 330, 'uploads/images/books/120.jpg', '8295930509.pdf', 'Tughlaq is an English book , wrote in 2019 and has 330 pages and has 1 editions', 'English', '2021-07-02 15:42:53', '2021-06-21 22:35:47', NULL),
(121, 'test', 2021, 1, 100, 'uploads/images/books/4336900948.jpg', '8295930509.pdf', 'test', 'test', '2021-07-02 15:42:53', '2021-06-22 15:00:56', NULL),
(122, 'test', 2021, 1, 100, 'uploads/images/books/9412392888.jpg', '8295930509.pdf', 'test', 'testo', '2021-07-02 15:42:53', '2021-06-22 15:02:05', NULL),
(123, 'aa', 2000, 1, 11, 'uploads/images/books/7649540193.jpg', '8295930509.pdf', 'aa', 'aa', '2021-07-02 15:42:53', '2021-06-22 15:36:42', NULL),
(124, 'aa', 2000, 1, 12, 'uploads/images/books/10673717312.jpg', '8295930509.pdf', 'aa', 'aa', '2021-07-02 15:42:53', '2021-06-22 15:37:20', NULL),
(125, 'bb', 2000, 1, 1, 'uploads/images/books/9809464328.jpg', '8295930509.pdf', 'bb', 'bb', '2021-07-02 15:42:53', '2021-06-22 16:00:02', NULL),
(126, 'cc', 2020, 1, 100, 'uploads/images/books/9821038117.jpg', '8295930509.pdf', 'cc', 'cc', '2021-07-02 15:42:53', '2021-06-22 16:10:12', NULL),
(127, 'pdf', 2021, 2021, 2021, 'uploads/images/books/4990110293.jpg', '8295930509.pdf', 'pdf', 'pdf', '2021-07-02 15:42:53', '2021-07-02 11:43:14', NULL),
(128, 'sad', 1010, 1010, 1010, 'uploads/images/books/8272178036.jpg', '8295930509.pdf', 'sad', 'sas', '2021-07-02 11:58:21', '2021-07-02 11:58:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books_authors`
--

CREATE TABLE `books_authors` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_authors`
--

INSERT INTO `books_authors` (`id`, `book_id`, `author_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2021-06-22 01:43:18', '2021-06-21 22:43:18', '2021-06-21 22:43:18'),
(2, 2, 2, '2021-06-22 01:45:03', '2021-06-21 22:45:03', '2021-06-21 22:45:03'),
(3, 3, 3, '2021-06-22 01:46:08', '2021-06-21 22:46:08', '2021-06-21 22:46:08'),
(4, 4, 4, '2021-06-22 01:48:35', '2021-06-21 22:48:35', '2021-06-21 22:48:35'),
(5, 5, 5, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(6, 6, 6, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(7, 7, 7, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(8, 8, 8, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(9, 9, 9, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(10, 10, 10, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(11, 11, 11, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(12, 12, 12, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(13, 13, 13, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(14, 14, 14, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(15, 15, 15, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(16, 16, 16, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(17, 17, 17, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(18, 18, 18, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(19, 19, 19, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(20, 20, 20, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(21, 21, 21, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(22, 22, 22, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(23, 23, 23, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(24, 24, 24, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(25, 25, 215, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(26, 26, 284, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(27, 27, 94, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(28, 28, 99, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(29, 29, 209, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(30, 30, 183, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(31, 31, 83, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(32, 32, 170, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(33, 33, 2, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(34, 34, 99, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(35, 35, 164, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(36, 36, 190, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(37, 37, 86, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(38, 38, 192, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(39, 39, 277, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(40, 40, 177, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(41, 41, 182, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(42, 42, 194, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(43, 43, 250, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(44, 44, 210, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(45, 45, 138, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(46, 46, 3, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(47, 47, 145, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(48, 48, 275, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(49, 49, 221, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(50, 50, 267, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(51, 51, 16, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(52, 52, 119, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(53, 53, 237, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(54, 54, 154, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(55, 55, 6, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(56, 56, 2, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(57, 57, 229, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(58, 58, 147, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(59, 59, 44, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(60, 60, 72, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(61, 61, 146, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(62, 62, 228, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(63, 63, 40, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(64, 64, 47, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(65, 65, 18, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(66, 66, 28, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(67, 67, 154, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(68, 68, 287, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(69, 69, 70, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(70, 70, 191, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(71, 71, 136, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(72, 72, 247, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(73, 73, 11, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(74, 74, 147, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(75, 75, 295, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(76, 76, 216, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(77, 77, 118, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(78, 78, 89, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(79, 79, 256, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(80, 80, 253, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(81, 81, 146, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(82, 82, 45, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(83, 83, 286, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(84, 84, 75, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(85, 85, 283, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(86, 86, 264, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(87, 87, 217, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(88, 88, 231, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(89, 89, 158, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(90, 90, 46, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(91, 91, 36, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(92, 92, 79, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(93, 93, 296, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(94, 94, 183, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(95, 95, 222, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(96, 96, 34, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(97, 97, 241, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(98, 98, 191, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(99, 99, 5, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(100, 100, 290, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(101, 101, 30, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(102, 102, 177, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(103, 103, 121, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(104, 104, 13, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(105, 105, 18, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(106, 106, 179, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(107, 107, 147, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(108, 108, 170, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(109, 109, 218, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(110, 110, 158, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(111, 111, 165, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(112, 112, 16, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(113, 113, 84, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(114, 114, 125, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(115, 115, 133, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(116, 116, 47, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(117, 117, 217, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(118, 118, 167, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(119, 119, 137, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(120, 120, 237, '2021-06-21 22:40:08', '2021-06-21 22:40:08', NULL),
(121, 1, 1, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(122, 1, 2, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(123, 1, 3, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(124, 2, 2, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(125, 2, 6, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(126, 2, 9, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(127, 3, 3, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(128, 3, 6, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(129, 3, 8, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(130, 4, 2, '2021-06-21 22:48:35', '2021-06-21 22:48:35', NULL),
(131, 4, 4, '2021-06-21 22:48:35', '2021-06-21 22:48:35', NULL),
(132, 2, 2, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(133, 2, 6, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(134, 2, 9, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(135, 1, 1, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(136, 1, 2, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(137, 1, 3, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(138, 121, 5, '2021-06-22 15:00:56', '2021-06-22 15:00:56', NULL),
(139, 121, 8, '2021-06-22 15:00:56', '2021-06-22 15:00:56', NULL),
(140, 121, 9, '2021-06-22 15:00:56', '2021-06-22 15:00:56', NULL),
(141, 122, 4, '2021-06-22 15:02:05', '2021-06-22 15:02:05', NULL),
(142, 122, 11, '2021-06-22 15:02:05', '2021-06-22 15:02:05', NULL),
(143, 122, 13, '2021-06-22 15:02:05', '2021-06-22 15:02:05', NULL),
(144, 123, 8, '2021-06-22 15:36:42', '2021-06-22 15:36:42', NULL),
(145, 124, 2, '2021-06-22 15:37:20', '2021-06-22 15:37:20', NULL),
(146, 124, 4, '2021-06-22 15:37:20', '2021-06-22 15:37:20', NULL),
(147, 125, 3, '2021-06-22 16:00:02', '2021-06-22 16:00:02', NULL),
(148, 125, 7, '2021-06-22 16:00:02', '2021-06-22 16:00:02', NULL),
(149, 126, 3, '2021-06-22 16:10:12', '2021-06-22 16:10:12', NULL),
(150, 126, 6, '2021-06-22 16:10:12', '2021-06-22 16:10:12', NULL),
(151, 1, 1, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(152, 1, 2, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(153, 1, 3, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(154, 1, 4, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(155, 1, 8, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(156, 127, 2, '2021-07-02 11:43:15', '2021-07-02 11:43:15', NULL),
(157, 127, 3, '2021-07-02 11:43:15', '2021-07-02 11:43:15', NULL),
(158, 127, 4, '2021-07-02 11:43:15', '2021-07-02 11:43:15', NULL),
(159, 128, 1, '2021-07-02 11:58:21', '2021-07-02 11:58:21', NULL),
(160, 128, 3, '2021-07-02 11:58:21', '2021-07-02 11:58:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books_categories`
--

CREATE TABLE `books_categories` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_categories`
--

INSERT INTO `books_categories` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2021-06-22 01:43:18', '2021-06-21 22:43:18', '2021-06-21 22:43:18'),
(2, 2, 17, '2021-06-22 01:45:03', '2021-06-21 22:45:03', '2021-06-21 22:45:03'),
(3, 3, 22, '2021-06-22 01:46:08', '2021-06-21 22:46:08', '2021-06-21 22:46:08'),
(4, 4, 21, '2021-06-22 01:48:35', '2021-06-21 22:48:35', '2021-06-21 22:48:35'),
(5, 5, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(6, 6, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(7, 7, 8, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(8, 8, 23, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(9, 9, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(10, 10, 12, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(11, 11, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(12, 12, 21, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(13, 13, 2, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(14, 14, 14, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(15, 15, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(16, 16, 24, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(17, 17, 16, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(18, 18, 18, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(19, 19, 24, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(20, 20, 2, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(21, 21, 21, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(22, 22, 23, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(23, 23, 4, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(24, 24, 11, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(25, 25, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(26, 26, 14, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(27, 27, 16, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(28, 28, 14, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(29, 29, 19, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(30, 30, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(31, 31, 2, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(32, 32, 6, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(33, 33, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(34, 34, 21, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(35, 35, 6, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(36, 36, 19, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(37, 37, 9, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(38, 38, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(39, 39, 11, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(40, 40, 1, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(41, 41, 5, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(42, 42, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(43, 43, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(44, 44, 5, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(45, 45, 1, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(46, 46, 11, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(47, 47, 2, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(48, 48, 6, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(49, 49, 3, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(50, 50, 1, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(51, 51, 20, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(52, 52, 8, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(53, 53, 8, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(54, 54, 5, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(55, 55, 18, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(56, 56, 4, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(57, 57, 12, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(58, 58, 21, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(59, 59, 5, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(60, 60, 2, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(61, 61, 4, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(62, 62, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(63, 63, 7, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(64, 64, 3, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(65, 65, 11, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(66, 66, 14, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(67, 67, 1, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(68, 68, 4, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(69, 69, 8, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(70, 70, 10, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(71, 71, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(72, 72, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(73, 73, 3, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(74, 74, 2, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(75, 75, 6, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(76, 76, 17, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(77, 77, 10, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(78, 78, 6, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(79, 79, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(80, 80, 10, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(81, 81, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(82, 82, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(83, 83, 3, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(84, 84, 7, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(85, 85, 21, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(86, 86, 7, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(87, 87, 23, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(88, 88, 3, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(89, 89, 9, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(90, 90, 3, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(91, 91, 12, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(92, 92, 12, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(93, 93, 17, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(94, 94, 21, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(95, 95, 17, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(96, 96, 18, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(97, 97, 5, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(98, 98, 14, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(99, 99, 14, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(100, 100, 10, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(101, 101, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(102, 102, 19, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(103, 103, 8, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(104, 104, 8, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(105, 105, 10, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(106, 106, 5, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(107, 107, 13, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(108, 108, 19, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(109, 109, 15, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(110, 110, 10, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(111, 111, 19, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(112, 112, 5, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(113, 113, 8, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(114, 114, 24, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(115, 115, 10, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(116, 116, 19, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(117, 117, 8, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(118, 118, 1, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(119, 119, 22, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(120, 120, 7, '2021-06-21 22:40:21', '2021-06-21 22:40:21', NULL),
(121, 1, 1, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(122, 1, 2, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(123, 1, 3, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(124, 2, 3, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(125, 2, 6, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(126, 2, 17, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(127, 3, 4, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(128, 3, 7, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(129, 3, 22, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(130, 4, 4, '2021-06-21 22:48:35', '2021-06-21 22:48:35', NULL),
(131, 4, 6, '2021-06-21 22:48:35', '2021-06-21 22:48:35', NULL),
(132, 4, 21, '2021-06-21 22:48:35', '2021-06-21 22:48:35', NULL),
(133, 2, 3, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(134, 2, 6, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(135, 2, 17, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(136, 1, 1, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(137, 1, 2, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(138, 1, 3, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(139, 121, 2, '2021-06-22 15:00:56', '2021-06-22 15:00:56', NULL),
(140, 121, 7, '2021-06-22 15:00:56', '2021-06-22 15:00:56', NULL),
(141, 122, 6, '2021-06-22 15:02:05', '2021-06-22 15:02:05', NULL),
(142, 123, 10, '2021-06-22 15:36:42', '2021-06-22 15:36:42', NULL),
(143, 124, 9, '2021-06-22 15:37:20', '2021-06-22 15:37:20', NULL),
(144, 125, 2, '2021-06-22 16:00:02', '2021-06-22 16:00:02', NULL),
(145, 125, 8, '2021-06-22 16:00:02', '2021-06-22 16:00:02', NULL),
(146, 126, 1, '2021-06-22 16:10:12', '2021-06-22 16:10:12', NULL),
(147, 126, 5, '2021-06-22 16:10:12', '2021-06-22 16:10:12', NULL),
(148, 126, 12, '2021-06-22 16:10:12', '2021-06-22 16:10:12', NULL),
(149, 1, 1, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(150, 1, 2, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(151, 1, 3, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(152, 1, 5, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(153, 1, 13, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(154, 127, 4, '2021-07-02 11:43:14', '2021-07-02 11:43:14', NULL),
(155, 127, 5, '2021-07-02 11:43:14', '2021-07-02 11:43:14', NULL),
(156, 127, 6, '2021-07-02 11:43:14', '2021-07-02 11:43:14', NULL),
(157, 128, 3, '2021-07-02 11:58:21', '2021-07-02 11:58:21', NULL),
(158, 128, 6, '2021-07-02 11:58:21', '2021-07-02 11:58:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books_publishers`
--

CREATE TABLE `books_publishers` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_publishers`
--

INSERT INTO `books_publishers` (`id`, `book_id`, `publisher_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 77, '2021-06-22 01:43:18', '2021-06-21 22:43:18', '2021-06-21 22:43:18'),
(2, 2, 54, '2021-06-22 01:45:03', '2021-06-21 22:45:03', '2021-06-21 22:45:03'),
(3, 3, 79, '2021-06-22 01:46:08', '2021-06-21 22:46:08', '2021-06-21 22:46:08'),
(4, 4, 90, '2021-06-22 01:48:35', '2021-06-21 22:48:35', '2021-06-21 22:48:35'),
(5, 5, 29, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(6, 6, 36, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(7, 7, 3, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(8, 8, 52, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(9, 9, 29, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(10, 10, 89, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(11, 11, 3, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(12, 12, 49, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(13, 13, 48, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(14, 14, 60, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(15, 15, 74, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(16, 16, 93, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(17, 17, 56, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(18, 18, 75, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(19, 19, 88, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(20, 20, 81, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(21, 21, 87, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(22, 22, 70, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(23, 23, 17, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(24, 24, 86, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(25, 25, 18, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(26, 26, 15, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(27, 27, 69, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(28, 28, 37, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(29, 29, 88, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(30, 30, 28, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(31, 31, 21, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(32, 32, 52, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(33, 33, 58, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(34, 34, 17, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(35, 35, 42, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(36, 36, 46, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(37, 37, 60, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(38, 38, 19, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(39, 39, 13, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(40, 40, 79, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(41, 41, 55, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(42, 42, 79, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(43, 43, 81, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(44, 44, 20, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(45, 45, 46, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(46, 46, 98, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(47, 47, 2, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(48, 48, 28, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(49, 49, 56, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(50, 50, 15, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(51, 51, 34, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(52, 52, 11, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(53, 53, 99, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(54, 54, 12, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(55, 55, 44, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(56, 56, 8, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(57, 57, 92, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(58, 58, 67, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(59, 59, 17, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(60, 60, 57, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(61, 61, 39, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(62, 62, 47, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(63, 63, 29, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(64, 64, 29, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(65, 65, 4, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(66, 66, 88, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(67, 67, 30, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(68, 68, 57, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(69, 69, 49, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(70, 70, 78, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(71, 71, 6, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(72, 72, 6, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(73, 73, 7, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(74, 74, 78, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(75, 75, 26, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(76, 76, 19, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(77, 77, 99, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(78, 78, 76, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(79, 79, 85, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(80, 80, 66, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(81, 81, 44, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(82, 82, 61, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(83, 83, 45, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(84, 84, 53, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(85, 85, 1, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(86, 86, 92, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(87, 87, 95, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(88, 88, 76, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(89, 89, 9, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(90, 90, 71, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(91, 91, 72, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(92, 92, 90, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(93, 93, 58, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(94, 94, 46, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(95, 95, 65, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(96, 96, 81, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(97, 97, 34, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(98, 98, 79, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(99, 99, 8, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(100, 100, 85, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(101, 101, 3, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(102, 102, 34, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(103, 103, 13, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(104, 104, 80, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(105, 105, 94, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(106, 106, 27, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(107, 107, 67, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(108, 108, 54, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(109, 109, 26, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(110, 110, 93, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(111, 111, 81, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(112, 112, 86, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(113, 113, 37, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(114, 114, 20, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(115, 115, 68, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(116, 116, 61, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(117, 117, 11, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(118, 118, 70, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(119, 119, 48, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(120, 120, 10, '2021-06-21 22:40:58', '2021-06-21 22:40:58', NULL),
(121, 1, 1, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(122, 1, 2, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(123, 1, 77, '2021-06-22 01:55:28', '2021-06-21 22:55:28', '2021-06-21 22:55:28'),
(124, 2, 6, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(125, 2, 8, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(126, 2, 54, '2021-06-22 01:50:15', '2021-06-21 22:50:15', '2021-06-21 22:50:15'),
(127, 3, 3, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(128, 3, 5, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(129, 3, 79, '2021-06-21 22:46:08', '2021-06-21 22:46:08', NULL),
(130, 4, 3, '2021-06-21 22:48:35', '2021-06-21 22:48:35', NULL),
(131, 4, 5, '2021-06-21 22:48:35', '2021-06-21 22:48:35', NULL),
(132, 4, 90, '2021-06-21 22:48:35', '2021-06-21 22:48:35', NULL),
(133, 2, 6, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(134, 2, 8, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(135, 2, 54, '2021-06-21 22:50:15', '2021-06-21 22:50:15', NULL),
(136, 1, 1, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(137, 1, 2, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(138, 1, 77, '2021-06-22 19:12:13', '2021-06-22 16:12:13', '2021-06-22 16:12:13'),
(139, 121, 2, '2021-06-22 15:00:56', '2021-06-22 15:00:56', NULL),
(140, 121, 3, '2021-06-22 15:00:56', '2021-06-22 15:00:56', NULL),
(141, 121, 5, '2021-06-22 15:00:56', '2021-06-22 15:00:56', NULL),
(142, 122, 9, '2021-06-22 15:02:05', '2021-06-22 15:02:05', NULL),
(143, 122, 11, '2021-06-22 15:02:05', '2021-06-22 15:02:05', NULL),
(144, 122, 15, '2021-06-22 15:02:05', '2021-06-22 15:02:05', NULL),
(145, 123, 10, '2021-06-22 15:36:42', '2021-06-22 15:36:42', NULL),
(146, 124, 6, '2021-06-22 15:37:20', '2021-06-22 15:37:20', NULL),
(147, 124, 9, '2021-06-22 15:37:20', '2021-06-22 15:37:20', NULL),
(148, 125, 3, '2021-06-22 16:00:02', '2021-06-22 16:00:02', NULL),
(149, 125, 6, '2021-06-22 16:00:02', '2021-06-22 16:00:02', NULL),
(150, 126, 4, '2021-06-22 16:10:12', '2021-06-22 16:10:12', NULL),
(151, 126, 10, '2021-06-22 16:10:12', '2021-06-22 16:10:12', NULL),
(152, 1, 1, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(153, 1, 2, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(154, 1, 4, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(155, 1, 11, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(156, 1, 77, '2021-06-22 19:12:38', '2021-06-22 16:12:38', '2021-06-22 16:12:38'),
(157, 127, 4, '2021-07-02 11:43:14', '2021-07-02 11:43:14', NULL),
(158, 127, 5, '2021-07-02 11:43:15', '2021-07-02 11:43:15', NULL),
(159, 127, 6, '2021-07-02 11:43:15', '2021-07-02 11:43:15', NULL),
(160, 128, 3, '2021-07-02 11:58:21', '2021-07-02 11:58:21', NULL),
(161, 128, 5, '2021-07-02 11:58:21', '2021-07-02 11:58:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fantasy', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(2, 'Adventure', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(3, 'Romance', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(4, 'Contemporary', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(5, 'Dystopian', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(6, 'Mystery', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(7, 'Horror', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(8, 'Thriller', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(9, 'Paranormal', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(10, 'Historical fiction', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(11, 'Science Fiction', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(12, 'Memoir', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(13, 'Cooking', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(14, 'Art', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(15, 'Self-help', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(16, 'Development', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(17, 'Motivational', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(18, 'Health', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(19, 'History', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(20, 'Travel', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(21, 'Guide', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(22, 'Families & Relationships', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(23, 'Humor', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(24, 'Children’s', '2021-06-21 22:36:03', '2021-06-21 22:36:03', NULL),
(25, 'bb', '2021-06-22 19:16:52', '2021-06-22 16:16:52', '2021-06-22 16:16:52'),
(26, '1', '2021-06-22 19:17:26', '2021-06-22 16:17:26', '2021-06-22 16:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('aziz.balaha@email.com', '$2y$10$V8zoIQUNZ3wjDdjmHoZmcOOXSZyKBQLvj6B.iBzYbJP3OjICz1A0C', '2021-06-14 11:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `country` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `country`, `email`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TCK Publishing', 'Afghanistan', 'tckpublishing@a.com', 591234567, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(2, 'Reed Elsevier', 'Åland Islands', 'reedelsevier@a.com', 591234568, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(3, 'Penguin Random House', 'Albania', 'penguinrandomhouse@a.com', 591234569, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(4, 'Harper Collins', 'Algeria', 'harpercollins@a.com', 591234570, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(5, 'Simon & Schuster', 'American Samoa', 'simonandschuster@a.com', 591234571, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(6, 'Phoenix Publishing and Media Company', 'Andorra', 'en.ppm@cn', 591234572, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(7, 'Phoenix Yard Books', 'Angola', 'phoenixyardbooks@a.com', 591234573, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(8, 'Pan Macmillan', 'Anguilla', 'panmacmillan@a.com', 591234574, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(9, 'Bloomsbury', 'Antarctica', 'bloomsbury@a.com', 591234575, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(10, 'Arbordale Publishing', 'Antigua and Barbuda', 'arbordalepublishing@a.com', 591234576, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(11, 'Arcade Publishing', 'Argentina', 'skyhorsepublishing@a.com', 591234577, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(12, 'Arcadia Publishing', 'Armenia', 'arcadiapublishing@a.com', 591234578, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(13, 'Arkham House', 'Aruba', 'arkhamhouse@a.com', 591234579, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(14, 'Armida Publications', 'Australia', 'armidabooks@a.com', 591234580, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(15, 'B & W Publishing', 'Austria', 'blackandwhitepublishing@a.com', 591234581, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(16, 'Beacon Publishing', 'Azerbaijan', 'beaconpublishinginc@a.com', 591234582, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(17, 'John Blake Publishing', 'Bahamas', 'johnblakebooks@a.com', 591234583, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(18, 'Capstone Publishers', 'Bahrain', 'capstonepub@a.com', 591234584, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(19, 'Flame Tree Publishing', 'Bangladesh', 'flametreepublishing@a.com', 591234585, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(20, 'Morgan James Publishing', 'Barbados', 'morgan-james-publishing@a.com', 591234586, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(21, 'Manning Publications', 'Belarus', 'manning@a.com', 591234587, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(22, 'Mother Tongue Publishing', 'Belgium', 'mothertonguepublishing@a.com', 591234588, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(23, 'Medknow Publications', 'Belize', 'medknow@a.com', 591234589, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(24, 'Tuttle Publishing', 'Benin', 'tuttlepublishing@a.com', 591234590, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(25, 'Tachyon Publications', 'Bermuda', 'tachyonpublications@a.com', 591234591, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(26, 'City Lights Publishers', 'Bhutan', 'citylights@a.com', 591234592, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(27, 'Dover Publications', 'Bolivia', 'store.doverpublications@a.com', 591234593, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(28, 'Graywolf Press', 'Bosnia and Herzegovina', 'graywolfpress@org', 591234594, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(29, 'Dorrance Publishing Company', 'Botswana', 'dorrancepublishing@a.com', 591234595, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(30, 'Gantec Publishing Solutions', 'Bouvet Island', 'gantecpublishing@a.com', 591234596, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(31, 'Kensington Publishing Corp', 'Brazil', 'kensingtonbooks@a.com', 591234597, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(32, 'Ripple Grove Press', 'British Indian Ocean Territory', 'ripplegrovepress@a.com', 591234598, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(33, 'North Atlantic Books', 'Brunei Darussalam', 'northatlanticbooks@a.com', 591234599, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(34, 'Wiley', 'Bulgaria', 'wiley@a.com', 591234600, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(35, 'Balboa Press', 'Burkina Faso', 'balboapress@a.com', 591234601, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(36, 'BookPress Publishing', 'Burundi', 'bookpresspublishing@a.com', 591234602, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(37, 'Anchor Book Press', 'Cambodia', 'anchorbookpress@a.com', 591234603, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(38, 'Lee & Low Books', 'Cameroon', 'leeandlow@a.com', 591234604, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(39, 'The Open Book Press', 'Canada', 'theopenbookpress@a.com', 591234605, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(40, 'Hidden Brook Press', 'Cape Verde', 'hiddenbrookpress@a.com', 591234606, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(41, 'Little Book Press', 'Cayman Islands', 'littlebookpress@a.com', 591234607, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(42, 'Lakewater Press', 'Central African Republic', 'lakewaterpress@a.com', 591234608, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(43, 'Stormbird Press', 'Chad', 'stormbirdpress@a.com', 591234609, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(44, 'Autumn House Press', 'Chile', 'autumnhouse@a.org', 591234610, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(45, 'Inkwater Press', 'China', 'inkwater@a.com', 591234611, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(46, 'TouchPoint Press', 'Christmas Island', 'touchpointpress@a.com', 591234612, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(47, 'Alchemy Press Book of Horrors', 'Cocos (Keeling) Islands', 'alchemypress.wordpress@a.com', 591234613, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(48, 'Tradewind Books', 'ColombiaComoros', 'tradewindbooks@a.com', 591234614, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(49, 'Blossom Spring Publishing', 'Congo', 'blossomspringpublishing@a.com', 591234615, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(50, 'Queer Pack', 'Congo, The Democratic Republic of The', 'queer-pack@a.com', 591234616, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(51, 'Coffeetown Press', 'Cook Islands', 'coffeetownpress@a.com', 591234617, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(52, 'Eerdmans', 'Costa Rica', 'eerdmans@a.com', 591234618, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(53, 'Grey Book Press', 'Cote D\'ivoire', 'greybookpress@a.com', 591234619, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(54, 'Hydra Publications', 'Croatia', 'wordpress.hydrapublications@a.com', 591234620, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(55, 'Conundrum Press', 'Cuba', 'conundrumpress@a.com', 591234621, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(56, 'Chelsea Green Publishing', 'Cyprus', 'chelseagreen@a.com', 591234622, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(57, 'House of Anansi Press', 'Czech Republic', 'houseofanansi@a.com', 591234623, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(58, 'August House Publishers', 'Denmark', 'augusthouse@a.com', 591234624, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(59, 'blue manatee press', 'Djibouti', 'bluemanateepress@a.com', 591234625, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(60, 'Shambhala', 'Dominica', 'shambhala@a.com', 591234626, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(61, 'Green Frog Publishing', 'Dominican Republic', 'greenfrogpublishing@a.com', 591234627, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(62, 'Brick Cave Media', 'Ecuador', 'brickcavemedia@a.com', 591234628, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(63, 'Living Springs Publishers LLP', 'Egypt', 'livingspringspublishers@a.com', 591234629, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(64, 'Korero Press', 'El Salvador', 'koreropress@a.com', 591234630, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(65, 'City Lights Press', 'Equatorial Guinea', 'citylightspress@a.com', 591234631, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(66, 'eLectio Publishing', 'Eritrea', 'electiopublishing@a.com', 591234632, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(67, 'Weasel Press', 'Estonia', 'weaselpress@a.com', 591234633, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(68, 'Alfresco Press', 'Ethiopia', 'alfrescopress@a.com', 591234634, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(69, 'Native Ink Press', 'Falkland Islands (Malvinas)', 'nativeinkpress@a.com', 591234635, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(70, 'Virgogray Press', 'Faroe Islands', 'virgograypress@a.net', 591234636, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(71, 'Torquere Press', 'Fiji', 'torquerepress@a.com', 591234637, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(72, 'Pants On Fire Press', 'Finland', 'pantsonfirepress@a.com', 591234638, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(73, 'Figroot Press', 'France', 'figrootpress@a.com', 591234639, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(74, 'CKN Christian Publishing', 'French Guiana', 'holyfirepublishing@a.com', 591234640, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(75, 'Wordpool Press', 'French Polynesia', 'wordpoolpress@a.com', 591234641, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(76, 'Ink Smith Publisher', 'French Southern Territories', 'ink-smith@a.com', 591234642, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(77, 'Wolfpack Publishing', 'Gabon', 'wolfpackpublishing@a.com', 591234643, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(78, 'Moonshine Cove Publishing, LLC', 'Gambia', 'moonshinecovepublishing@a.com', 591234644, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(79, 'WiDo Publishing', 'Georgia', 'widopublishing@a.com', 591234645, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(80, 'Mason J@ Press', 'Germany', 'masonjpress@a.com', 591234646, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(81, 'Neverland Publishing Company', 'Ghana', 'neverlandpublishing@a.com', 591234647, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(82, 'The Key Publishing House Inc', 'Gibraltar', 'thekeypublish@a.com', 591234648, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(83, 'Divertir Publishing', 'Greece', 'divertirpublishing@a.com', 591234649, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(84, 'John Hunt Publishing', 'Greenland', 'johnhuntpublishing@a.com', 591234650, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(85, 'White Knuckle Press', 'Grenada', 'whiteknucklepress@a.com', 591234651, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(86, 'Anthem Press', 'Guadeloupe', 'anthempress@a.com', 591234652, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(87, 'Writerists House', 'Guam', 'writeristshouse@a.com', 591234653, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(88, 'Lore Lush Publishing', 'Guatemala', 'lorelushpublishing@a.com', 591234654, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(89, 'Tiny Fox Press', 'Guernsey', 'tinyfoxpress@a.com', 591234655, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(90, 'Echoic Mobile Press', 'Guinea', 'echoic-mobile-press@a.com', 591234656, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(91, 'Blue Swan Publishing', 'Guinea-bissau', 'blueswanpublishing@a.com', 591234657, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(92, 'Regal House Publishing', 'Guyana', 'regalhousepublishing@a.com', 591234658, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(93, 'Ink Smith Publishing', 'Haiti', 'ink-smith@a.com', 591234659, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(94, 'Tirgearr Publishing', 'Heard Island and Mcdonald Islands', 'tirgearrpublishing@a.com', 591234660, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(95, 'Triplicity Publishing', 'Holy See (Vatican City State)Honduras', 'tri-pub@a.com', 591234661, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(96, 'Coventry House Publishing', 'Hong Kong', 'coventrybooks@a.com', 591234662, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(97, 'Sleepytown Press', 'Hungary', 'sleepytownpress@a.com', 591234663, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(98, 'Leo Publishing, LLC', 'Iceland', 'leopublishing@a.net', 591234664, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(99, 'Biblio Publishing', 'India', 'BiblioPublishing@a.com', 591234665, '2021-06-21 22:36:18', '2021-06-21 22:36:18', NULL),
(100, 'bb', 'Bahrain', 'aziz.balaha@a.com', 13245, '2021-06-22 19:16:07', '2021-06-22 16:16:07', '2021-06-22 16:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'aziz', 'aziz.balaha@email.com', NULL, '$2y$10$OhoShG/0R/KUXOP7teTYjudWu2ljmlv5.6.GTwLYUJnhHVPGOmFPu', 'hUvCv5COA4EFv40YQN8frgPOxep6Tuqjv6LGp32h6vRHykmukeNEnt5EMr74', '2021-06-12 05:16:17', '2021-06-12 05:16:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books_authors`
--
ALTER TABLE `books_authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `books_categories`
--
ALTER TABLE `books_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `books_publishers`
--
ALTER TABLE `books_publishers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `books_authors`
--
ALTER TABLE `books_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `books_categories`
--
ALTER TABLE `books_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `books_publishers`
--
ALTER TABLE `books_publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books_authors`
--
ALTER TABLE `books_authors`
  ADD CONSTRAINT `books_authors_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `books_authors_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);

--
-- Constraints for table `books_categories`
--
ALTER TABLE `books_categories`
  ADD CONSTRAINT `books_categories_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `books_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `books_publishers`
--
ALTER TABLE `books_publishers`
  ADD CONSTRAINT `books_publishers_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `books_publishers_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
