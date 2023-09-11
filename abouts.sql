-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 01:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_con`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `banner_img` text DEFAULT NULL,
  `about_image_two` varchar(255) DEFAULT NULL,
  `about_image_three` varchar(255) DEFAULT NULL,
  `about_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_description`, `banner_img`, `about_image_two`, `about_image_three`, `about_image`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Grace Education - an Out Standing Firm:', 'Grace Education is specialized in international educational services. As we are a UK-based education consultancy firm that believes in offering quality service. We promote foreign education meticulously because we come with the aim that every student gets an attainable education. We build a strong network with all the overseas universities, that\'s why we can provide excellent service.', '1694339242banner.jpg', '169434032964fd94e99789aabout.jpg', '169434032964fd94e998394about.jpg', '169434032964fd94e994d49about.jpg', '2023-05-23 04:03:59', '2023-09-10 10:08:33', '<div class=\"container\">\r\n<div class=\"row align-items-center\">\r\n<div class=\"col-lg-12 pl-60 md-pl-15\">\r\n<div class=\"contact-wrap\">\r\n<div class=\"sec-title mb-30\">\r\n<h2 class=\"title pb-38\">What We Do for Our Students</h2>\r\n<p class=\"margin-0 pb-15\">At Grace Education, you don\'t need to worry because we help our students in every manner, from visa process to foreign university application process. <br /><br />You can apply to different education abroad programs when you simply consult us. There are various durations and levels of foreign education such as summer schools, advanced training, secondary specialized or higher education. We solve the problems of our clients in a complex:<br /><br />1) Obtaining a Visa<br />2) Selection of a Program<br />3) Enrollment<br />4) Preparation of IELTS<br />5) Booking accommodation and flights<br /><br />Indeed, studying abroad has its pros and cons: on the one hand, it can be costly and stressful. On the other hand, you will broaden your horizons and increase your ability to get a job anywhere in the world. In short, it is the most demandable education that everyone desires. By keeping the requirement of students, Grace Education is here to offer a budget-oriented and qualitative foreign education.</p>\r\n<h4>Why choose us?</h4>\r\n<p>Grace Education is an international educational platform for people who want to develop, win, overcome challenges, set new goals, and achieve them. We are not an overseas education consulting company. It is a guide toward a successful future.<br /><br />1) Many students enrolled in foreign universities with us<br />2) Our students enroll in top demanded university<br />3) We know how to build a world-class career abroad<br /><br />Our goal is to provide a satisfactory solution with the choice of the curriculum and the full self-realization of our clients. This is the main reason we offer a range of services from career planning to psychological support and accompanying students during their studies.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"container\">\r\n<div class=\"row align-items-center\">\r\n<div class=\"col-lg-6 md-mb-30\">\r\n<div class=\"rs-animation-shape\">\r\n<div class=\"images\"><img src=\"https://www.7skyconsultancy.com/assets/images/ceo.png\" alt=\"\" /></div>\r\n<div class=\"middle-image2\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-6 pl-60 md-pl-15\">\r\n<div class=\"contact-wrap\">\r\n<div class=\"sec-title mb-30\">\r\n<h2 class=\"title pb-38\">MESSAGE FROM MANAGING DIRECTOR</h2>\r\n<p class=\"margin-0 pb-15\"><strong>Dear Students, Parents &amp; Partners:</strong> <br /><br />Grace Education is established with a mission to give quality study abroad results to the students. I take this occasion to thank you for considering us to be part of your educational endeavors. We want to make the overall trip of the students from home country to overseas a pleasurable and hassle-free experience. <br /><br />We explosively believe that the success of an association isn\'t just grounded on the gains measured in figures, but also the quality, service standards and client satisfaction. For us creating a sustainable business by exceeding the prospects of the students and the partners institutions is more important than anything differently. <br /><br />Being an educational adviser , it\'s our duty to feed genuine comforting and guidance to the students icing an ever- advancing career. I\'m privileged to be the leader of our largely devoted and committed team which strives to achieve the excellence in the field of career counseling and overseas education. We\'re doing our best to win the trust of the students by being ethical and transparent in our services. The student referrals are an ample evidence to the quality of the services we give. We believe that positive word- of- mouth is extremely important for our success in this competitive market.<br /><br />I once again thank you for believing in us and giving us the occasion to serve you. <br /><br />Yours Sincerely,<br />Munam Ali <br /><strong>Managing Director</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
