-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 04:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maigo_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `title`, `date`, `text`, `author`) VALUES
(4, 'CS.jpg', '𝙁𝙚𝙗𝙧𝙪𝙖𝙧𝙮 𝙞𝙨 𝘾𝙞𝙫𝙞𝙡 𝙍𝙚𝙜𝙞𝙨𝙩𝙧𝙖𝙩𝙞𝙤𝙣 𝙈𝙤𝙣𝙩𝙝', '2024-02-01', '', 'Municipality of Maigo'),
(5, 'Holy-Week.png', 'HOLY WEEK', '2024-03-27', '', 'Municipality of Maigo'),
(6, 'upcoming1.jpg', 'Poblacion Child Development Center is now accepting early registration.', '2024-03-27', '', 'Municipality of Maigo'),
(7, 'up5.jpg', 'Opening of DR Dental Clinic in Maigo', '2024-04-20', '', 'Municipality of Maigo'),
(8, 'upcoming4.jpg', 'Ferry Garden Restobar, Soon to Open', '2024-04-01', '', 'Municipality of Maigo'),
(9, 'ucpcoming6.jpg', 'International Women\'s Day', '2024-03-26', '', 'Municipality of Maigo'),
(27, 'n1 (2).jpg', 'Deadline for Registration and Requirements of Players for Basketball and Volleyball (𝐈𝐧𝐭𝐞𝐫-𝐁𝐚𝐫𝐚𝐧𝐠𝐚𝐲 ', '2024-04-30', '𝐀𝐍𝐍𝐎𝐔𝐍𝐂𝐄𝐌𝐄𝐍𝐓 : Deadline for Registration and Requirements of Players for Basketball and Volleyball (𝐈𝐧𝐭𝐞𝐫-𝐁𝐚𝐫𝐚𝐧𝐠𝐚𝐲 𝐎𝐧𝐥𝐲)\r\n\r\n𝑴𝑶𝑵𝑫𝑨𝒀 11:59AM!\r\n[On Tuesday, start na ang ball games.]\r\n\r\n𝐈𝐍𝐓𝐄𝐑-𝐀𝐆𝐄𝐍𝐂𝐘 𝑴𝑶𝑵𝑫𝑨𝒀 5:00PM deadline', 'maigo ldn'),
(28, 'n1 (7).jpg', 'Provincial Director of Lanao del Norte Provincial Police Office and party conducted  BIBLE giving at', '2024-04-09', 'On March 29, 2024, PCOL SANDY SALARES VALES, Provincial Director of Lanao del Norte Provincial Police Office and party conducted  BIBLE giving at San Isidro Labrador Parish Church Brgy Poblacion Maigo ,Lanao del Norte.\r\n\r\n#goodfriday2024\r\n#SerbisyongNagkakaisa\r\n#ToServeandProtect\r\n#PNPKakampiNyo', 'maigo ldn');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `date`, `author`, `text`) VALUES
(13, '1event.jpg', 'Maigo Celebrates 65th Founding Anniversary, 14th Nangkaan Festival', '2024-02-27', 'Municipality of Maigo', ''),
(14, '2event.jpg', 'MSU-MSAT Joins the 65th Araw ng Maigo Celebration', '2024-02-27', 'Municipality of Maigo', ''),
(15, '3news.jpg', 'Maigo MPS Joined the Kick Off Program for the 65th Araw ng Maigo', '2024-02-14', 'Municipality of Maigo', ''),
(16, '4news.jpg', 'Ground Breaking Ceremony of the New Municipal Hall', '2023-05-17', 'Municipality of Maigo', ''),
(17, 'news5.jpg', 'Maigo Fire Station participated in the 1st Quarter ', '2024-03-24', 'Municipality of Maigo', ''),
(18, 'ramadan.jpg', 'The Ramadhan Islamic Seminar Program Series 2', '2024-02-27', 'Municipality of Maigo', ''),
(19, 'squad.jpg', 'Squadding Weekly Interactive Meeting (SWIM)', '2024-04-01', 'Municipality of Maigo', ''),
(20, 'outreach.jpg', 'Operation Christmas Children Outreach', '2024-03-03', 'Municipality of Maigo', ''),
(38, 'n1 (1).jpg', 'Maigo ABC pres. takes seat as new ex-officio SP Member', '2024-02-19', 'maigo ldn', 'MAIGO, Lanao del Norte - Barangay Labuay Chairman Joseph A. Neri Jr. of Maigo town secured his seat as an ex-officio provincial board member of the Sangguniang Panlalawigan (SP) on Friday, January 12, as he ran unopposed for Association of Barangay Council (ABC) federated president in the province.\r\n\r\nRight after the ABC - Lanao del Norte Chapter election held at the SP Session Hall, Neri immediately took his oath, replacing former ex-officio board member Genesis Tura.\r\n\r\nNeri took oath before Maigo Mayor Paeng Rizalda at the MSU-Maigo. Along with him was his Vice President, Hon. Casan Colo of SND, Auditor, Hon. Josephine Pacquiao of Linamon, and his Board of Directors - Hon. Ruel Lozano of Tubod, Hon. Abubacar Asis of Sapad, Hon. Edwin Macasarte of Kolambugan, Hon. Virginia Yap of Lala, Hon. Bryan Baguio of Kapatagan, and Hon. Achmad Tawantawan of Salvador.\r\n\r\nAlso present during the ceremony were DILG Provincial Director Bruce Colao and Sangguniang Panlalawigan Members Hon. Reinario Bihag and Hon Achmad Taha.\r\n\r\nIn his speech, Neri expressed immense gratitude to Governor Imelda \'Angging\' Quibranza-Dimaporo and Mayor Rizalda for their trust and support and for believing that he can lead and represent all the Punong Barangay of the province.\r\n\r\nAs it is his first term, Neri vowed to do his best to fulfill his duties saying, \"I will take full responsibility, determination, and perseverance in serving the people. This is my passion and this is my commitment.\" PIO-LDN\r\n#AlagangGobAngging \r\n#ProvinceOfLanaoDelNorte \r\n#TheLandofBeautyandBounty  \r\n#AbanteLaNorte'),
(39, 'n1 (6).jpg', 'Accomplishment Report on Anti-Illegal Drugs Operation (Buy-Bust)', '2024-03-18', 'huhu', 'At around 11:30 PM, PNP personnel of Maigo MPS (Lead unit) led by PMAJ AUSTIN KARL T TIROL, OIC together with Pers of 1st PMFC under direct supervision of PMAJ ZEAN PAUL L CUBIL, FC, jointly conducted buy-bust operation w/ PDEA Pre-Ops no. 30002-042024-0159 at Purok 3, Brgy. Claro M Recto, Maigo, LDN which resulted in the arrest of  alias \"Turko\", a resident of Brgy. Claro M Recto, Maigo, Lanao del Norte;  and confiscation of suspected \"shabu\" wherein poseur-buyer was able to buy One (1) pc heat-sealed transparent sachet believed to be \"shabu\"\r\n\r\nRecovered from the possession & control of Nur are as follows: \r\n\r\na) Five (5) pcs small size HSTP sachet containing white crystalline substance believed to be \"shabu\";\r\nb) 500 peso bill used as marked money w/ serial # HK294266\r\nc) one (1) pc matchbox\r\n \r\nAll seized drug evidences has an estimated weight of 0.08 gram with estimated SDP of more or less PHP 2,000.00 and an estimated market value of PHP 3,000.00\r\n\r\nThe whole operation was properly recorded w/ two (2) ARD duly witnessed at all times by the accused, One (1) Media representative and Two (2) Barangay Officials of Brgy. Claro M Recto, Maigo, LDN. \r\n\r\nFurther, the arrested person together with confiscated pieces of evidence was brought to Maigo MPS for documentation while a case for violation of RA 9165 is being prepared for inquest against the suspect.\r\n\r\nSource: PMAJ AUSTIN KARL T TIROL, OIC\r\n\r\nDrafter: PCpl April Anne A Cabuguas\r\nAsst PCR PNCO'),
(40, 'n1 (4).jpg', 'MSUSAA Meeting Held at MSU General Santos', '2024-04-26', 'maigo', 'On April 26, 2024, Campus Head 𝑨𝒕𝒕𝒚. 𝑱𝒂𝒎𝒂𝒍𝒐𝒅𝒆𝒏 𝑨. 𝑩𝒂𝒔𝒂𝒓, in his capacity as the Chairman of the Mindanao State University System Athletic Association (MSUSAA), presided the preparation meeting hosted by MSU General Santos under the able leadership of Chancellor 𝑫𝒓. 𝑼𝒔𝒎𝒂𝒏 𝑫. 𝑨𝒓𝒂𝒈𝒂𝒔𝒊. The meeting was called in preparation for the upcoming MSUSAA Unity Games to be held in MSU General Santos from May 30 to June 6.\r\n\r\nSports Coordinator 𝑴𝒔. 𝑭𝒂𝒕𝒉𝒎𝒂 𝑺𝒐𝒏𝒂𝒚𝒚𝒂 𝑴. 𝑴𝒊𝒏𝒂𝒈𝒂 and other representatives from the eleven (11) campuses of the Mindanao State University System also graced the event, all of whom were warmly welcomed by the host campus. The association is expecting two thousand athletes to participate in the Unity Games this year.'),
(41, 'n1 (3).jpg', 'PNP Personnel of Maigo MPS under the direct supervision of PMAJ AUSTIN KARL T TIROL, OIC conducted M', '2024-02-20', 'maigo ldn', 'PNP Personnel of Maigo MPS under the direct supervision of PMAJ AUSTIN KARL T TIROL, OIC conducted Maximize deployment on Enhanced Police Visibility through the conduct of Police Presence, at Beaches/Resorts of Maigo, Lanao del Norte during the celebration of  Easter Sunday to prevent any occurrence of crime within the AOR.\r\n\r\n#PNPKakampiNyo\r\n#SerbisyongNagkakaisa\r\n#BagongPilipinas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'maigo_admin', '1234'),
(9090, 'maigo_admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
