-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2023 at 11:02 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin2`
--

DROP TABLE IF EXISTS `admin2`;
CREATE TABLE IF NOT EXISTS `admin2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin2`
--

INSERT INTO `admin2` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'lumawag993');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `rate`, `status`) VALUES
(3, 'Brian Lumawag', 'I love your website', 'Positive', 'Not Posted'),
(6, 'Realyn', 'I hate you', 'Negative', 'Not Posted'),
(7, 'Realyn', 'Hello', 'Neutral', 'Not Posted');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `division` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `title`, `email`, `division`, `phone`, `image`) VALUES
(44, 'REMELYN A. BABIDA	', 'PCAO', '', 'Support to Operations Division', '043-288-6162	', '231-2318671_businesswoman-blank-profile-picture-female.png'),
(46, 'ROGELIO D. MADARCOS	', 'PARPO II', 'parpo2.orientalmindoro@dar.gov.ph', 'Office of the PARPO', '043-288-6162	', '415-4156423_boy-comments-man-icon-png.png'),
(47, 'CLAUDETTE C. CASTILLO	', 'CARPO', 'carpo.ltid.orientalmindoro@dar.gov.ph', 'Land Tenure Services Division', '043-288-2241	', '231-2318671_businesswoman-blank-profile-picture-female.png'),
(48, 'Atty. RONNIL C. ROSILLO	', 'OIC-Chief	', 'chief.legal.orientalmindoro@dar.gov.ph', 'Legal Division', '', '415-4156423_boy-comments-man-icon-png.png'),
(49, 'Engr. EULALIA A. CARINGAL	', 'MARPO - PUERTO GALERA, SAN TEODORO, BACO, CALAPAN AND NAUJAN', 'eulacaringal@gmail.com', 'DAR Municipal Office', '', '231-2318671_businesswoman-blank-profile-picture-female.png'),
(50, 'OPHELIA L. RADOVAN	', 'MARPO - VICTORIA, SOCORRO, POLA AND PINAMALAYAN', 'opheliaradovan@yahoo.com', 'DAR Municipal Office', '', '231-2318671_businesswoman-blank-profile-picture-female.png'),
(51, 'ESTER C. CAWAGDAN	', 'MARPO - GLORIA, BANSUD AND BONGABONG', 'ester.cawagdan@gmail.com', 'DAR Municipal Office', '', '231-2318671_businesswoman-blank-profile-picture-female.png'),
(52, 'Engr. ARNEL S. BARRIOS	', 'MARPO - ROXAS, MANSALAY AND BULALACAO', 'darclusterfive@yahoo.com', 'DAR Municipal Office', '', '415-4156423_boy-comments-man-icon-png.png'),
(29, 'ENGR. GINA S. ALMONTE ', 'OIC-CARPO', 'carpo.pbdd.orientalmindoro@dar.gov.ph', 'Program Beneficiaries Development Division', '', '231-2318671_businesswoman-blank-profile-picture-female.png');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `folder_id` int(30) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_path` text NOT NULL,
  `is_public` tinyint(1) DEFAULT '0',
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `description`, `user_id`, `folder_id`, `file_type`, `file_path`, `is_public`, `date_updated`) VALUES
(1, 'My File', 'This is my file', 1, 11, 'txt', '1616126640_My File.txt', 1, '2021-03-19 11:04:13'),
(2, 'Brian V Lumawag CT 1', 'sadsad', 3, 13, 'docx', '1683613800_Brian V Lumawag CT 1.docx', 1, '2023-05-09 14:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

DROP TABLE IF EXISTS `folders`;
CREATE TABLE IF NOT EXISTS `folders` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent_id` int(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `user_id`, `name`, `parent_id`) VALUES
(10, 3, 'My Folder', 0),
(11, 1, 'New Folder', 0),
(13, 3, 'Brian Lumawag', 0);

-- --------------------------------------------------------

--
-- Table structure for table `legal`
--

DROP TABLE IF EXISTS `legal`;
CREATE TABLE IF NOT EXISTS `legal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ltc_app_no` varchar(50) NOT NULL,
  `lcms_case_no` varchar(50) NOT NULL,
  `transferor` varchar(500) NOT NULL,
  `transferor_address` varchar(255) NOT NULL,
  `transferee` varchar(500) NOT NULL,
  `transferee_address` varchar(255) NOT NULL,
  `title_type` varchar(50) NOT NULL,
  `title_no` varchar(50) NOT NULL,
  `tax_dec_no` varchar(50) NOT NULL,
  `lot_no` varchar(50) NOT NULL,
  `survey_no` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `area_per_title` decimal(10,4) NOT NULL,
  `area_for_transfer` decimal(10,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legal`
--

INSERT INTO `legal` (`id`, `ltc_app_no`, `lcms_case_no`, `transferor`, `transferor_address`, `transferee`, `transferee_address`, `title_type`, `title_no`, `tax_dec_no`, `lot_no`, `survey_no`, `barangay`, `municipality`, `area_per_title`, `area_for_transfer`) VALUES
(3, 'LTC App. No-2021-0844', 'CPO-0406-2022-0002', 'SPS. SANTOS RUADO and ERLY ROXAS-RUADO', 'Brgy. Pag-Asa, Bansud, Oriental Mindoro', 'ALERSON ROXAS RUADO, MERRY ANN ROXAS, RUADO, BABYLYN ROXAS RUADO and CHRISTOPHER ROXAS RUADO', 'Brgy. Pag-Asa, Bansud, Oriental Mindoro', 'TCT', 'T-66629', '2015-020007-00254', 'B-1', 'PCS-045203-089389', 'Pag-asa', 'Bansud', '0.3748', '0.3748'),
(4, 'LTC App. No-2021-0845', 'CPO-0406-2022-0003', 'FELIPE MENDOZA, mrd. to Ponciana Babao', 'Villa,Pag- asa,Bansud, Oriental Mindoro', 'SPS. RODRIGO B. EMBIDA and MILAGROS L. EMBIDA', 'Villa,Pag- asa,Bansud, Oriental Mindoro', 'TCT', 'J-7126 (T-43154)', '2015-020013-00880', '195-B-1', 'PSD-125114', 'Villa Pag-asa', 'Bansud', '2.2500', '0.5000'),
(5, 'LTC App. No-2021-0846', 'CPO-0406-2022-0004', 'MANUEL T. REVILLOSA ', 'Brgy. Marfrancisco, Pinamalayan, Oriental Mindoro', 'ROCHELLE M. SAMARITA', 'Brgy. Maragooc, Gloria, Oriental Mindoro', 'TCT', 'T-10856', '2015-060021-00259', 'B-3', 'PSD-44574', 'Maragooc', 'Gloria', '1.0001', '1.0001'),
(6, 'LTC App. No-2021-0847', 'CPO-0406-2022-0005', 'Co-owner/s: MA. JULIE ANDREA G. GENIL mrd. to Jerry Ricafranca', 'Tawagan, Calapan City', 'SPS. CRISANTO M. MADERAZO and MARIETA T. MADERAZO', 'Masipit, Calapan City', 'TCT', '064-2021002020', '21-059-00531', '1640-D-2-B-5', 'PSD-045208-054225', 'Tawagan', 'Calapan City', '4.9988', '0.7497'),
(7, 'LTC App. No-2021-0848', 'CPO-0406-2022-0006', 'SPS. SERGIO ENRIQUEZ and ROSA BAGOS', 'Personas, Calapan City', 'SPS. MERVIN G. MENDOZA and NIÃ‘A DE VERA-MENDOZA', 'St. Libis, Calapan City', 'TCT', 'T-117288', '11-016-00559', '2112-B-1', 'PSD-04-145797', 'Canubing II', 'Calapan City', '0.6091', '0.6091'),
(8, 'LTC App. No-2021-0849', 'CPO-0406-2022-0007', 'SPS. SERGIO ENRIQUEZ and ROSA BAGOS', 'Personas, Calapan City', 'SPS. MERVIN G. MENDOZA and NIÃ‘A DE VERA-MENDOZA', 'St. Libis, Calapan City', 'TCT', 'T-117286', '11-016-00557', '2112-A-1', 'PSD-04-145796', 'Canubing II', 'Calapan City', '0.6091', '0.6091'),
(9, 'LTC App. No-2021-0850A-0850D', 'CPO-0406-2022-0008', 'JOSEFINA VIAÃ‘A (married) executed by CRISPIN VIAÃ‘A DAPITO mrd. to Mary Rose Amparado et al.', 'Brgy. Suqui, Calapan City, Oriental Mindoro', 'CRISANTO VIAÃ‘A DAPITO, CLARITO VIAÃ‘A DAPITO, ROSA DAPITO GANAPIN, JOEY VIAÃ‘A DAPITO (all married) and ROSALINDA VIAÃ‘A DAPITO and TRISHA ELAINE DAPITO (all single)', 'Brgy. Suqui, Calapan City, Oriental Mindoro', 'TCT', 'RT-161 (T-60985)', '11-058-00584', '443-A', 'PSD-182763', 'Suqui', 'Calapan City', '0.1377', '0.1377'),
(10, 'LTC App. No-2021-0851', 'CPO-0406-2022-0009', 'PELAGIA ANILAO mrd. to CRISPIN EVANGELISTA executed by Pelagia Anilao Evangelista, Ponciano Anilao Evangelista et al.', 'Balatero, Puerto Galera, Oriental Mindoro', 'PELAGIA ANILAO EVANGELISTA (widow), PONCIANO ANILAO EVANGELISTA (single), LUISA ANILAO EVANGELISTA mrd. to Juanito Recede Regunay, CRISPIN ANILAO EVANGELISTA, JR. mrd. to Julia Balido Anilao, LOLITA ANILAO EVANGELISTA mrd. to Efren Belen Anilao and LEONARDO ANILAO EVANGELISTA (single).', 'Balatero, Puerto Galera, Oriental Mindoro', 'TCT', '064-2019004118', '2015-110004-02147', '4', 'PSD-04-011425', 'Balatero', 'Puerto Galera', '2.6685', '2.6685');

-- --------------------------------------------------------

--
-- Table structure for table `lti`
--

DROP TABLE IF EXISTS `lti`;
CREATE TABLE IF NOT EXISTS `lti` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `title_no` int(11) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `sqm` decimal(10,2) DEFAULT NULL,
  `ammortization_schedule` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pbdd`
--

DROP TABLE IF EXISTS `pbdd`;
CREATE TABLE IF NOT EXISTS `pbdd` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `arbo` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `arb_household_member` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `card_bank_member` varchar(3) NOT NULL,
  `pcic_insured` varchar(3) NOT NULL,
  `rsba_registered` varchar(3) NOT NULL,
  `rsbsa_reference` varchar(50) NOT NULL,
  `organization_membership` varchar(50) NOT NULL,
  `crop_planted` varchar(50) NOT NULL,
  `area_planted` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbdd`
--

INSERT INTO `pbdd` (`id`, `name`, `arbo`, `age`, `gender`, `category`, `arb_household_member`, `relationship`, `card_bank_member`, `pcic_insured`, `rsba_registered`, `rsbsa_reference`, `organization_membership`, `crop_planted`, `area_planted`) VALUES
(4, 'Brian Lumawag', 'bcc', 12, 'male', 'ARB', 'esaeSAd', 'dsadasd', 'no', 'yes', 'yes', 'as13213213', 'adewqe12', '23', '32');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `timestamp`) VALUES
(6, 'Climate Change Awareness Activity for Sitio Kabilang Ilog Agrarian Reform Beneficiaries Organization (SKIARBO) on March 15, 2023.', 'This activity is under the Climate Resilient Farm Productivity Support Project (CRFPSP) of the Department of Agrarian Reform (DAR). The organization operates at Barangay Lumangbayan, Pinamalayan, Oriental Mindoro and most of its members are fishermen and/or vegetable and palay growers in the area.', 'climate.jpg', '2023-04-04 05:28:58'),
(7, 'Climate Change Awareness Activity for Muravilla Agrarian Reform Beneficiaries Organization (MARBIO) on March 6, 2023', 'This activity is under the Climate Resilient Farm Productivity Support Project (CRFPSP) of the Department of Agrarian Reform (DAR).', '339242804_2548463498637296_4996448617001092020_n.jpg', '2023-04-04 05:38:28'),
(8, 'Pormal nang inilunsad noong Pebrero 28, 2023 ang KaSaMa( Katuwang sa Market) para sa Agrarian  Reform  Beneficiaries (ARBs) na isang Inter- Agency Unified Marketing Platform Project', 'Ang KASAMA para sa ARBs ay isang proyektong kolaborasyon ng mga ahensya ng pamahalaan sa pangunguna ng DAR katuwang ang Department of Agriculture(DA), Mindoro State University (MinSU), Philippine Information Agency (PIA), Department of Information and Communications Technology (DICT), Provincial Local Government Unit (PLGU)  of Oriental Mindoro and Pamahalaang Bayan ng Pola na may layuning matulungan ang mga Agrarian Reform Beneficiaries na mas maibenta pang lalo ang mga produkto sa pamamagitan ng on-line marketing platform ( www.agriventures.tech).\r\nPinagunahan ang pagpapasinaya sa gawain ni Regional Director Marvin V. Bernal of DARRO- MiMaRoPa kasama sina Director Ronald M. Gareza ng Bureau of Agrarian Reform Beneficiaries Development (BARBD)-DAR Central Office, Dr. Hubert A. Dolor bilang Provincial Administrator (PLGU) ng Oriental Mindoro, Mayor Jennifer M. Cruz (Municipality of Pola, OrMin), President Levy B. Arago (MinSu), Norly A. Tabo ( Provincial Officer DICT OrMin), Mr. Rustom Gonzaga Agriculturist II,  (DA) at mga leader na representante ng 3 beneficiary organizations mula sa bayan ng Pola, Oriental Mindoro.', '334089238_1604913286596667_3921091690534667588_n.jpg', '2023-04-04 05:44:36'),
(9, 'A Review and Planning Session (RPS) activity was conducted by the DAR Program Beneficiaries Development Division (PBDD) of Oriental Mindoro on January 19 to 20, 2023 held at DAR Conference Hall, Masipit, Calapan City.', 'Tasks and targets of PBDD Personnel for the development of Agrarian Reform Beneficiaries (ARB) were discussed during the session.\r\nThe session was attended by Senior Agrarian Reform Program Officer (SARPO) Gefelyn Goleng of DAR MIMAROPA who discussed the concept of the proposed On-line Marketing Project in MIMAROPA during the session.\r\nFor the implementation of the on-line marketing project, 10 products of the DAR-assisted organizations in Oriental Mindoro were selected to be the pilot of the said platform.', '326991933_735349584810110_4505872926978895905_n.jpg', '2023-04-04 06:40:06'),
(10, 'A two-day dialogue between farmers and officials of the Department of Agrarian Reform (DAR) was facilitated by the DAR tackling issues and concerns of farmers in the province of Oriental Mindoro.', 'Engr. Rogelio D. Madarcos, the OIC Provincial Agrarian Reform Program Officer II (OIC PARPO II) personally welcomed all guests as he opened the activity on its 1st day. He said that the objectives of the activity is to provide positive developments to issues and concerns of farmers and farmer groups.\r\nPresent to the acitivity are some 40 farmers from the province, Magsasaka Partylist Representative Arlene Bodegas and officials from the DAR such as Atty. Jayvie Fruelda who is the head of the DAR Legal Division, Chief Agrarian Reform Program Officer (CARPO) Claudette Castillo, Municipal Agrarian Reform Program Officers (MARPO) Arnel S. Barrios, MARPO Rene Catly and MARPO Ophel Radovan and personnel and staff from Legal Division and Land Tenure Improvement Division (LTID).\r\nAlso present to the activity are representatives from DAR Central Office CRS led by Senior Agrarian Reform Program Officer (SARPO) Elmer Tiaga and Ms. Catherine Lardizabal, Agrarian Refor Program officer I (ARPO I) who also participated to the dialogue.\r\nA total of 7 pending farmers issues and concerns in the province were tackled and provided with development during the two-day dialogue.', '300503560_2286481578183985_1621896177205113438_n.jpg', '2023-04-04 07:38:21'),
(11, 'A Land of Hope', 'Ms. Jie Anne M. Villacrusis, 24 years old, said she has been farming since she was 7 years old as she had been helping her father in establishing farmland â€“ not their own â€“ but of a landowner who lives in Villa Cerveza, Victoria in the province of Oriental Mindoro.\r\nNow a graduate of Bachelor of Science in Agriculture (BSA) major in Crop Science, her experience as a seasoned farmer as being born in a family of farmers paved the way to receiving 8,900 square meters of agricultural land from the Department of Agrarian Reform (DAR) from its Comprehensive Agrarian Reform Program (CARP) Executive Order No. 75, series of 2019.\r\nâ€œSabi ko nun pangarap ko talaga na balang araw magkaron kami ng sariling lupa para hindi na kami yung nag-uupa, di na nangungupahan sa iba para lang magbukid. Sabi ko noon makagraduate lang talaga ako, plano ko talaga na bibilhan ko si Papa ng sariling lupa. Pero sa tulong po ng DAR nagkaron kami ng sariling lupa sa ngayon at dream come true para sa amin lalo kay Papaâ€, said Jie Anne.\r\nJie Anne was born in Barangay Alcate, Victoria, Oriental Mindoro. During her early childhood, her family owns no property. Thus, their only option is to work on somebodyâ€™s farmland in exchange for a better living. Her childhood innocence was early exposed to the real-life hardships of farming where she and her siblingsâ€™ routine were to forage in forests to bring whatever available food to their table.\r\nâ€œNaranasan pa namin dati na sa bundok mangunguha kami ng kamoteng kahoy, pangbenta para lang may pambili ng bigas. Syempre si Papa farmer lang, farmer si Papa noon konti lang kinikita, kasi nangungupahan lang kami sa bukid ng ibang tao. Anim po kami na magkakapatid e, yung isang tinapay at dalawang noodles ay paghahatian pa namin na magkakapatidâ€, said Jie Anne.\r\nBeing the youngest of the 6 children of her family, she and the 4th sibling of her family, who is also her only sister, enjoy different fortunes as they were able to have the opportunity to be sent to school, unlike their 4 brothers, who are already grown-ups, failed to finish their studies and already with families of their own.\r\nJie Anne remembers the time in her life, especially when she was young, and had nothing to eat in a day but still managed to survive the onslaught of poverty. She recalls her life way back in her childhood days as she shares her unforgettable experiences reminding her how thankful she should be in her situation right now.\r\nâ€œSobrang hirap po talaga. Parang isang kahig, isang tuka. Naranasan pa namin na wala talagang kain na kanin, naranasan naming maglaga ng saging, yung lang at saka noodlesâ€, said Jie Anne.  Kasa-kasama kami ni Papa kapag nagbubukid sya. Minsan ay nagapipilapil, naranasan ko din magtalok, sumakay sa handtractor kahit na nabibiyabit at hindi pa kaya ng katawan, maliit pa ako nun e pero kaming magkakapatid sanay na kami sa bukid. Sobrang hirap po, pag pahina-hina ka walang mangyayariâ€, Jie Ann added.  â€œMinsan sobrang hirap kailangan mong tiisin at wala naman talaga pagkukunanâ€, she added. \r\nJie Anne is a graduate of Bachelor of Science in Agriculture (BSA) Major in Crop Science in 2019 at the Mindoro State University (MinSU) in Barangay Alcate, Victoria, Oriental Mindoro.  Achieving a degree wasnâ€™t a cakewalk as Jie Anne had to face numerous financial struggles during those times as a student having a family with limited resources.\r\nâ€œNung nag-aaral po ako, sobrang hirap kasi nag-pang abot kami ni Ate sa college. Eh magkano ang tuition nun? Tapos si Papa ay konti lang naman kinikitaâ€, said Jie Anne. â€œNaranasan ko na minsan may babayaran kami na mga papel papel sa school. E di iyak ako nun iyak ako kay Mama kasi wala kaming pambayad. Ay di iintayin pa namin na magkaron kami ng extra si Papa o kaya makapang hiram sina mama sa ibang tao para may pambayad kamiâ€, Jie Anne furthered.\r\nâ€œNaranasan ko rin na papasok ako na agahan lang ang kain ko tapos tanghali wala na ulit pag uwi na kasi walang pambaon. Tapos baon ko nun magkano lang saktong pamasahe langâ€, Jie Anne said.\r\nJie Anne narrated that even in her 4th year of college, her struggle continued but she never fails to pursue her dream of getting a degree in agriculture.  She believes that the key to achieving all her dreams in life which mainly is to provide a better living for her family starts when she gets formal education.\r\nâ€œPagdating ko ng third year college 4th year kailangan namin ng computer kasi nagte-thesis na. Eh wala akong pambili. Kahit magwala ako dun sa amin kahit mag-iyak naman ako  walang ibibili po samin. Eh di tiis-tiis. Hiram lang ako sa ka-klase ko ng kung ano-ano, awa ng Dios naka graduate ako kahit wala ako nung mga ganung bagay. Nakagraduate naman po, nakapag thesis, nakapag defense nanghiram ng computer, nakatapos dinâ€, said Jie Anne with smiles as she remembers all the hardships she went through.\r\nâ€œAy nung nakagraduate ako eh di sobrang saya ko po nun! Talagang ini-offer ko yun kina Mama at kila Papaâ€, Jie Anne proudly said.\r\nJie Anne finally received her title on January 17, 2022 during the Department of Agrarian Reform (DAR) Certificate of Land Ownership Award (CLOA) distribution activity held at the Mindoro State University (MinSU) Main Campus Auditorium in Alcate, Victoria, Oriental Mindoro.  She is among with the other 220 Agrarian Reform Beneficiaries of which the title was personally handed by DAR Undersecretary Elmer Distor, Regional Director for MIMAROPA, Atty. Marvin Bernal, and former PARPO II Engr. Isagani G. Placido, among others.\r\nThe current OIC - Provincial Agrarian Reform Program Officer II (PARPO II), Engr. Rogelio D. Madarcos said the identification of ARBs started at DAR Municipal Office of Cluster II upon signing into law of Executive Order No. 75 by then President Rodrigo R. Duterte. The said Executive Order paves the way for the DAR to facilitate the coverage of government-owned lands that are not actually, directly, and exclusively used, and found to be necessary for which it was reserved, for distribution to would-be beneficiaries under the Comprehensive Agrarian Reform Program (CARP).\r\nSenior Agrarian Reform Program Technologist (SARPT) Rizaldy S. Abog who is the personnel assigned in the area said all Agriculture graduate applicants were selected based on the given criteria set by the law pursuant to DAR Administrative Order No.03, Series of 2020.\r\nBy the time the CLOAs were distributed, Jie Anne was filled with joy that time because finally, and for the first time in her life, she will own a land â€“ a dream she ever wanted for her family and what she has been dreaming of since her childhood.\r\nâ€œSobra, sobra, sobra, sobrang thank you!, Jie Anne utterly said as her eyes celebrates in joyfulness. â€œParang walang hanggang pasasalamat po gusto kong sabihin sa government sa programang binigay na to sa mga graduates ng agriculture, sa mga anak ng magsasaka. Kasi kung di dahil po sa inyo siguro ay, hindi matutupad ang pangarap ko at pangarap nina Mama, pangarap po naminâ€, she added.\r\nâ€œMaraming salamat po sa DAR particularly sa Cluster II Office sa pangunguna ni MARO Ophelia Radovan at kanyang staff kundi dahil po sa kanila ay hindi maisasakatuparan ang paglipat ng titulo sa amin kaya salamat po ng maramiâ€, said Jie Anne.\r\nJie Anne shares that there were times when they talk about the milestones of accomplishment they had as a family, they often cry especially when she remembers how her family dealt with scarcity of things in the past.\r\nâ€œSyempre minsan po kapag nagkukwentuhan po kami nina Papa nila Mama nag-iiyakan talaga kami kasi ang hirap talaga pero ngayon iba-iba na kasi unti unti na natutupad yung mga pangarap namin.\r\n\"Dati talaga sobrang hirap kapag naalala namin, nagtatawanan na lang kami pag minsan kasi yung kasi yung hirap na pinagdaanan namin noon, ibang iba na ngayonâ€, said Jie Anne.\r\nFarming is an undeniable passion for Jie Anne as it is inducted in her blood as she has a strong sympathy for farmers.  â€œNo farming, no food talaga.  Kasi  di ba, sila naman talaga yung naghihirap? Kung walang farmer, wala naman tayo makakain kaya sobrang importante talaga ang farmingâ€, she said.\r\nâ€œNapakaganda ng programang ito ng gobyerno kasi kahit anak ako ng farmer, wala kaming sariling lupa. Ngayon mayroon na akong sariling lupa, tapos agriculture student po ako parang mapa-practice ko din lahat ng mga natutunan nun sa school. Saktong sakto po talaga. Parang advantage para sa akin na yung mga natutunan ko madali ko po maa-apply. Dahil anak nga ako ng farmer, laki sa bukid, sanay na sanay sa trabaho sa bukidâ€, Jie Anne expounded.\r\nJie Anne promised to take care of the blessing of owning a land that has been given to her and do her responsibility as a beneficiary of the Comprehensive Agrarian Reform Program (CARP).\r\nâ€œSyempre namomotivate ako na pag ayos ng lupa na ibinigay sa amin para hindi naman masayang yung binigay ng gobyerno sa amin. Bawat araw, napakahalaga, hindi ka talaga makapag aksaya ng orasâ€, Jie Anne proudly said.\r\nJie Anne is now an active member of the Muravilla ARB and Irrigators Organization (MARBIO) of Barangay Alcate, Victoria, Oriental Mindoro of which the majority of members are Agrarian Reform Beneficiaries (ARB) like her.\r\nJie Anne has her message to her fellow farmer ARBs. â€œParang ang sarap sa pakiramdam, sa mga farmers sana hindi sayangin ang bigay ng gobyerno na biyaya. Sana ay pag-igihin pang mabuti yung mga pagbubukid pagtatrabaho para mapabuti po ang ating buhayâ€.\r\nShe shares a strong hope that everything she wishes for in her life will be certain now, now that she has the asset of owning land, quality education, and a very supportive family ever since. \r\nâ€œ100% na sure na sure, na makukuha ko ang mga pangarap ko lalo ngayon unti unti na po natutupad. Katulad nito, parang sakin hindi biro na magkaron ka ng sariling lupa. hindi biro na yung pangalan mo makikita mo talaga sa titulo na masasabi mong sayo to. Hindi biro yung ganon kaya sobrang thankful po ako sa pamahalaan sa pamamagitan ng DAR. Hindi po ito masasayangâ€, Jie Anne ended.', '301377215_2291317377700405_5135119394059635124_n.jpg', '2023-04-04 08:29:45'),
(12, 'DAR Oriental Mindoro celebrates National Women\'s Month.', 'National Women\'s Month 1233', '337997194_895072788445316_8857996541012298287_n.jpg', '2023-04-13 08:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

DROP TABLE IF EXISTS `queue`;
CREATE TABLE IF NOT EXISTS `queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queue_no` int(11) NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose_of_visit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','served','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `status_index` (`status`),
  KEY `queue_no_index` (`queue_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`id`, `queue_no`, `client_name`, `service`, `purpose_of_visit`, `status`, `created_at`) VALUES
(3, 2, 'Brian', 'Land Tenure Services', 'sdadasd', 'cancelled', '2023-06-01 08:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1+admin , 2 = users',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', 'admin', 1),
(3, 'Mark Jason ', 'user', 'user', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
