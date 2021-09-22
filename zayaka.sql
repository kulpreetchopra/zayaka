-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 12:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zayaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `about` text NOT NULL,
  `vedio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `tittle`, `about`, `vedio`) VALUES
(2, 'About Zayaka(ذائقہ) Restaurent', 'BrandCrowd makes searching for the best restaurant logo easy by offering users access to a library of sample restaurant-related and food logos you can customize. Most restaurant logos focus on the nationality of the cuisine, venue specifics, and style. Ensure your gastronomical-related logo is concise with hunger-inducing attributes. Remember that most consumers have strong associations with Zayaka Team.<br>Thankyou!!', 'https://www.youtube.com/embed/hUQ6kVhoM88');

-- --------------------------------------------------------

--
-- Table structure for table `aboutbanner`
--

CREATE TABLE `aboutbanner` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutbanner`
--

INSERT INTO `aboutbanner` (`id`, `tittle`, `name`, `image`) VALUES
(1, 'About Zayaka(ذائقہ) Restaurent', 'About Us', 'adminimage/gallery-img-06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(350) NOT NULL,
  `mobile` varchar(350) NOT NULL,
  `gender` varchar(350) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `forgott_pass` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `about` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `gender`, `address`, `username`, `password`, `forgott_pass`, `image`, `about`, `time`, `admin`) VALUES
(1, 'Kulpreet Chopra', 'kulpreetsingh0128@gmail.com', '6266060879', 'male', 'B-94 New Fort View Colony Koteshwar Road Gwalior ', 'Kulpreet Chopra', 'kulpreet', '', 'adminimage/admin.jpg', 'Full Stack Web Developer', '2020-11-08 18:15:45', ''),
(7, 'Neha Bhadoriya ', 'nehabhadoriya33@gmail.com', '6267177460', 'female', 'Naka chandraVadni Lashkar Gwalior(M.P.)', 'Neha Bhadoriya', 'Ram@1234', '', 'adminimage/admin.jpg', 'Web Designer &developer', '2020-12-01 16:55:30', 'Kulpreet Chopra'),
(9, 'Gunjan Gupta', 'gg2354875@gmail.com', '6260848521', 'female', 'Purani jeen rui ki mandi  main road morenaMP', 'Gunjan Gupta', 'Gunjan@', 'green', 'adminimage/admin.jpg', 'full Stack developer', '2021-03-28 10:24:01', 'Kulpreet Chopra');

-- --------------------------------------------------------

--
-- Table structure for table `adminreply`
--

CREATE TABLE `adminreply` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `message_id` int(100) NOT NULL,
  `reply` text NOT NULL,
  `admin` varchar(350) NOT NULL,
  `reply_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminreply`
--

INSERT INTO `adminreply` (`id`, `name`, `message_id`, `reply`, `admin`, `reply_time`) VALUES
(50, 'Kulpreet Chopra', 28, '<a href=\"https://meet.google.com/jrd-bqud-tzu\">Zoin Meeting On  12-11-2020 7:00 PM</a>', 'Kulpreet Chopra', '2020-11-12 07:57:18'),
(51, 'Neha Bhadoriya ', 29, '<a href=\"https://meet.google.com/jrd-bqud-tzu\">Zoin Meeting On  12-11-2020 7:00 PM</a>', 'Kulpreet Chopra', '2020-11-12 07:56:31'),
(52, 'Gunjan Gupta', 31, '<a href=\"https://meet.google.com/jrd-bqud-tzu\">Zoin Meeting On  12-11-2020 7:00 PM</a>', 'Kulpreet Chopra', '2020-11-12 07:56:19'),
(53, 'Kritaghya Gupta', 32, '<a href=\"https://meet.google.com/jrd-bqud-tzu\">Zoin Meeting On  12-11-2020 7:00 PM</a>', 'Kulpreet Chopra', '2020-11-12 07:55:57'),
(54, 'Neha Bhadoriya ', 33, 'hello neha', 'Neha Bhadoriya ', '2020-12-01 07:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `contactbanner`
--

CREATE TABLE `contactbanner` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactbanner`
--

INSERT INTO `contactbanner` (`id`, `tittle`, `name`, `image`) VALUES
(1, 'ContactUs Zayaka(?????) Restaurent', 'Contact Us', 'adminimage/all-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `contact` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `tittle`, `contact`) VALUES
(1, 'Email Address', 'kulpreetsingh0128@gmail.com'),
(2, 'Watsp No', '6266060879'),
(3, 'Mobile', '6266060879'),
(4, 'Company Address', 'B6/22, 1st Floor, Safdarjung Enclave, New Delhi 110029, INDIA'),
(5, 'Office Address', 'B94, New Fort View Colony, Koteshwar Road, Gwalior, INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `desert`
--

CREATE TABLE `desert` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `item_no` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL,
  `price` varchar(350) NOT NULL,
  `about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desert`
--

INSERT INTO `desert` (`id`, `tittle`, `item_no`, `name`, `image`, `link`, `price`, `about`) VALUES
(1, 'Desert Menu Zayaka(ذائقہ ) Restaurent', '5001', 'Rasmalai', 'adminimage/gallery-img-01.jpg', 'ordernow.php', '400', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `item_no` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(350) NOT NULL,
  `price` varchar(350) NOT NULL,
  `about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`id`, `tittle`, `item_no`, `name`, `image`, `link`, `price`, `about`) VALUES
(1, 'Dinner Menu Zayaka(ذائقہ ) Restaurent', '2001', 'Shejwani Pulaw', 'adminimage/blog-img-09.jpg', 'ordernow.php', '300', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `item_no` varchar(150) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL,
  `price` varchar(250) NOT NULL,
  `about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`id`, `tittle`, `item_no`, `name`, `image`, `link`, `price`, `about`) VALUES
(2, 'Drinks Menu  Zyaka(????? ) Restaurent', '6001', 'Milk Shake', 'adminimage/img-02.jpg', 'ordernow.php', '210', 'clear chicken broth with mixed vegetables with tofu pieces.'),
(3, 'Drinks Menu Zyaka(????? ) Restaurent', '6002', 'Zalzeera Drink', 'adminimage/img-03.jpg', 'ordernow.php', '130', 'clear chicken broth with creamy corn and egg drop with white meat chicken pieces.');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `faq` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `tittle`, `faq`) VALUES
(1, 'Frequently Asked Questions', 'Can you tell us about Zayaka Restaurent?'),
(2, 'Frequently Asked Questions', 'Can you tell us about Zayaka Restaurent?'),
(3, 'Frequently Asked Questions', 'Can you tell us about Zayaka Restaurent?'),
(4, 'Frequently Asked Questions', 'Can you tell us about Zayaka Restaurent?'),
(5, 'Frequently Asked Questions', 'Can you tell us about Zayaka Restaurent?'),
(6, 'Frequently Asked Questions', 'Can you tell us about Zayaka Restaurent?'),
(7, 'Frequently Asked Questions', 'Can you tell us about Zayaka Restaurent?'),
(8, 'Frequently Asked Questions', 'Can you tell us about Zayaka Restaurent?');

-- --------------------------------------------------------

--
-- Table structure for table `footer_services1`
--

CREATE TABLE `footer_services1` (
  `id` int(11) NOT NULL,
  `title` varchar(350) NOT NULL,
  `service` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_services1`
--

INSERT INTO `footer_services1` (`id`, `title`, `service`) VALUES
(4, 'NEED HELP', 'Seating'),
(5, 'NEED HELP', 'Ticket Donation'),
(6, 'NEED HELP', 'Pricing'),
(7, 'NEED HELP', 'Gift Certificate'),
(8, 'NEED HELP', 'Group Sales'),
(9, 'NEED HELP', 'Customer Service');

-- --------------------------------------------------------

--
-- Table structure for table `footer_services2`
--

CREATE TABLE `footer_services2` (
  `id` int(11) NOT NULL,
  `title` varchar(350) NOT NULL,
  `services` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_services2`
--

INSERT INTO `footer_services2` (`id`, `title`, `services`) VALUES
(4, 'VISIT US', 'FAQs'),
(5, 'VISIT US', 'Accessibility'),
(6, 'VISIT US', 'Seating'),
(7, 'VISIT US', 'Where to Eat'),
(9, 'VISIT US', 'Parking'),
(10, 'VISIT US', 'Getting Here');

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

CREATE TABLE `homeslider` (
  `id` int(11) NOT NULL,
  `tittle` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL,
  `name` varchar(350) NOT NULL,
  `link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeslider`
--

INSERT INTO `homeslider` (`id`, `tittle`, `about`, `image`, `name`, `link`) VALUES
(4, 'Menu Masala Zayaka(Ø°Ø§Ø¦Ù‚Û) Restaurent	', 'See how your users experience your website in Realtime or view trends to see any changes in performance over time.', 'adminimage/slider-02.jpg', 'Order Now', 'ordernow.php'),
(6, 'Welcome To Zayaka(Ø°Ø§Ø¦Ù‚Û) Restaurent', 'See how your users experience your website in Realtime or view   trends to see any changes in performance over time.', 'adminimage/all-bg.jpg', 'Reservation', 'reservation.php');

-- --------------------------------------------------------

--
-- Table structure for table `homespecial`
--

CREATE TABLE `homespecial` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `item_no` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL,
  `price` text NOT NULL,
  `about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homespecial`
--

INSERT INTO `homespecial` (`id`, `tittle`, `item_no`, `name`, `image`, `link`, `price`, `about`) VALUES
(8, 'Our Specials Zayka (Ø°Ø§Ø¦Ù‚Û) Restaurent', '6001', 'Biryani Pulaw', 'adminimage/slider-02.jpg', 'ordernow.php', '320', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `homewindow`
--

CREATE TABLE `homewindow` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `name` varchar(250) NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homewindow`
--

INSERT INTO `homewindow` (`id`, `tittle`, `name`, `link`, `image`) VALUES
(3, 'Menu Masala Zyaka(????? ) Restaurent', 'Reserve Now', 'reservation.php', 'adminimage/reservation.jpg'),
(11, 'Menu Masala Zyaka(Ø°Ø§Ø¦Ù‚Û ) Restaurent', 'Main Menu', 'menu.php', 'adminimage/blog-img-05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `src` text NOT NULL,
  `link` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `src`, `link`) VALUES
(3, 'Location Map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.9304138165667!2d78.16096461498327!3d26.23145048342569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c68cd645d54f%3A0x3638e0fd60701df0!2sShri%20Koteshwar%20Mahadev%20Temple%2C%20Gwalior!5e0!3m2!1sen!2sin!4v1605259051336!5m2!1sen!2sin', 'https://goo.gl/maps/utgUsFsVRZUEG3549');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `item_no` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(350) NOT NULL,
  `price` varchar(350) NOT NULL,
  `about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `tittle`, `item_no`, `name`, `image`, `link`, `price`, `about`) VALUES
(1, 'Lunch Menu Zayaka(ذائقہ ) Restaurent', '1001', 'Korma Curri', 'adminimage/blog-img-04.jpg', 'ordernow.php', '340', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `main_footer`
--

CREATE TABLE `main_footer` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(350) NOT NULL,
  `about` text NOT NULL,
  `button_name` varchar(350) NOT NULL,
  `button_link` varchar(350) NOT NULL,
  `copyright` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_footer`
--

INSERT INTO `main_footer` (`id`, `image`, `title`, `about`, `button_name`, `button_link`, `copyright`) VALUES
(1, 'adminimage/logo.png', 'STAY CONNECTED', 'Join over 14,000 people who receive our dishes articles,and photos, information on upcoming new tasty dishes, ticket deals & more via our email lists.', 'SIGN UP', 'registration.php', '2020 Zayaka (ذائقہ ) Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `menuslider`
--

CREATE TABLE `menuslider` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menuslider`
--

INSERT INTO `menuslider` (`id`, `tittle`, `image`, `name`) VALUES
(2, 'Menu Masala Zyaka (Ø°Ø§Ø¦Ù‚Û ) Restaurent', 'adminimage/all-bg.jpg', 'Main Menu');

-- --------------------------------------------------------

--
-- Table structure for table `menuwindow`
--

CREATE TABLE `menuwindow` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menuwindow`
--

INSERT INTO `menuwindow` (`id`, `name`, `image`, `link`) VALUES
(5, 'Drinks  Menu', 'adminimage/img-01.jpg', 'menu1.php'),
(7, 'Dessert Menu', 'adminimage/gallery-img-02.jpg', 'menu2.php'),
(8, 'Nonveg Menu', 'adminimage/img-08.jpg', 'menu3.php'),
(9, 'Snack Menu', 'adminimage/img-04.jpg', 'menu4.php'),
(10, 'Dinner Menu', 'adminimage/blog-img-04.jpg', 'menu5.php'),
(11, 'Lunch Menu', 'adminimage/gallery-img-01.jpg', 'menu6.php');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `mobile` varchar(350) NOT NULL,
  `message` text NOT NULL,
  `message_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `mobile`, `message`, `message_time`) VALUES
(29, 'Neha Bhadoriya ', 'nehabhadoriya33@gmail.com', '6267177460', 'Hello zayaka admin ðŸ˜…âœŒ', '2020-11-09 13:37:22'),
(28, 'Kulpreet Chopra', 'kulpreetsingh0128@gmail.com', '6266060879', 'Kya kar rha haiðŸ˜‹', '2020-11-09 13:03:47'),
(31, 'Gunjan Gupta', 'gg2354875@gmail.com', '6260848521', 'HelloðŸ–', '2020-11-10 18:05:18'),
(32, 'Kritaghya Gupta', 'kri@gmail.com', '7000761192', 'Hello', '2020-11-12 07:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `link` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id`, `tittle`, `link`) VALUES
(1, 'Side Currently Under Maintanence', '#'),
(2, 'New User Login Feachers Comming Soon', '#'),
(3, 'Activity Food Quize Comming Soon', 'activity.php');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `link` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `active` varchar(350) NOT NULL,
  `icon` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `name`, `link`, `image`, `active`, `icon`) VALUES
(1, 'Home', 'index.php', 'adminimage/logo.png', 'active', 'fas fa-home'),
(3, 'Menu', 'menu.php', 'adminimage/logo.png', '', 'fas fa-utensils'),
(4, 'About', 'about.php', 'adminimage/logo.png', '', 'far fa-lightbulb'),
(5, 'Contact', 'contact.php', 'adminimage/logo.png', '', 'fas fa-phone-alt');

-- --------------------------------------------------------

--
-- Table structure for table `nonveg`
--

CREATE TABLE `nonveg` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `item_no` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL,
  `price` varchar(350) NOT NULL,
  `about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nonveg`
--

INSERT INTO `nonveg` (`id`, `tittle`, `item_no`, `name`, `image`, `link`, `price`, `about`) VALUES
(1, 'NonVeg Menu Zayaka(ذائقہ ) Restaurent', '4001', 'Chicken', 'adminimage/img-08.jpg', 'ordernow.php', '560', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `orderbanner`
--

CREATE TABLE `orderbanner` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderbanner`
--

INSERT INTO `orderbanner` (`id`, `tittle`, `name`, `image`) VALUES
(1, 'Order Now Zayaka(ذائقہ) Restaurent', 'Order Now', 'adminimage/slider-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `mobile` varchar(350) NOT NULL,
  `address` text NOT NULL,
  `oname` varchar(350) NOT NULL,
  `onumber` varchar(350) NOT NULL,
  `oqty` varchar(350) NOT NULL,
  `oprice` varchar(350) NOT NULL,
  `otime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `name`, `email`, `mobile`, `address`, `oname`, `onumber`, `oqty`, `oprice`, `otime`) VALUES
(8, 'Neha Bhadoriya ', 'nehabhadoriya33@gmail.com', '6267177460', 'Naka ChandraVadni Lashkar Gwalior(M.P.)', 'ice cream', '2345', '05', '500', '2020-11-12 07:44:04'),
(6, 'Kritaghya Gupta', 'kri@gmail.com', '7000761192', 'ghasmandi police chowki, ghasmandi', 'Zalzeera Drink', '6001', '02', '130', '2020-11-12 07:43:18'),
(7, 'Kulpreet Chopra', 'kulpreetsingh0128@gmail.com', '6266060879', 'B-94 New Fort View Colony Koteshwar Road Gwalior', 'Zalzeera Drink', '6001', '03', '130', '2020-11-12 07:43:00'),
(9, 'Kulpreet Chopra', 'kulpreetsingh0128@gmail.com', '6266060879', 'B-94 New Fort View Colony Koteshwar Road Gwalior', 'Rasmalai', '5001', '02', '400', '2020-11-28 14:35:42'),
(28, '', '', '', '', '', '', '', '', '2020-12-03 05:42:24'),
(56, '', '', '', '', '', '', '', '', '2020-12-03 05:44:23'),
(57, '', '', '', '', '', '', '', '', '2020-12-03 07:08:23'),
(58, '', '', '', '', '', '', '', '', '2020-12-03 07:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--
-- Error reading structure for table zayaka.ratings: #1932 - Table 'zayaka.ratings' doesn't exist in engine
-- Error reading data for table zayaka.ratings: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `zayaka`.`ratings`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `registrationbanner`
--

CREATE TABLE `registrationbanner` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationbanner`
--

INSERT INTO `registrationbanner` (`id`, `tittle`, `name`, `image`) VALUES
(1, 'Register Now Zayaka(ذائقہ) Restaurent', 'Register Now', 'adminimage/slider-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `mobile` varchar(350) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(350) NOT NULL,
  `persons` varchar(150) NOT NULL,
  `otime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `mobile`, `date`, `time`, `persons`, `otime`) VALUES
(1, 'Kulpreet Chopra', 'kulpreetsingh0128@gmail.com', '6266060879', '2020-11-27', '22:42', '04', '2020-11-11 14:11:14'),
(2, 'Neha Bhadoriya ', 'nehabhadoriya33@gmail.com', '6267177460', '2020-11-12', '04:00 PM', '05', '2020-11-12 07:42:11'),
(3, 'Kulpreet Chopra', 'kulpreetsingh0128@gmail.com', '6266060879', '2020-11-17', '01:00 PM', '05', '2020-11-17 08:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `reservationbanner`
--

CREATE TABLE `reservationbanner` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservationbanner`
--

INSERT INTO `reservationbanner` (`id`, `tittle`, `name`, `image`) VALUES
(1, 'Reserve Your Table Zayaka(ذائقہ) Restaurent', 'Reserve Now', 'adminimage/reservation.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `about` text NOT NULL,
  `name` varchar(350) NOT NULL,
  `service` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `tittle`, `about`, `name`, `service`) VALUES
(1, 'Our Services', 'Providing the ace of all the trades and progressing with proficiency of running a tourism website, the team at visit bharat believes in 360 (degree symbol) excellence.', 'Services Offering By Zayaka Restaurent', 'Best Quarantine Centers for covid-19'),
(2, 'Our Services', 'Providing the ace of all the trades and progressing with proficiency of running a tourism website, the team at visit bharat believes in 360 (degree symbol) excellence.', 'Services Offering By Zayaka Restaurent', 'Vendor finalizations and contracts'),
(3, 'Our Services', 'Providing the ace of all the trades and progressing with proficiency of running a tourism website, the team at visit bharat believes in 360 (degree symbol) excellence', 'Services Offering By Zayaka Restaurent', '100% transparency & online support'),
(4, 'Our Services', 'Providing the ace of all the trades and progressing with proficiency of running a tourism website, the team at visit bharat believes in 360 (degree symbol) excellence', 'Services Offering By Zayaka Restaurant', 'Get Free Home Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `snack`
--

CREATE TABLE `snack` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `item_no` varchar(250) NOT NULL,
  `name` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(350) NOT NULL,
  `price` varchar(350) NOT NULL,
  `about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snack`
--

INSERT INTO `snack` (`id`, `tittle`, `item_no`, `name`, `image`, `link`, `price`, `about`) VALUES
(2, 'Snack Menu Zyaka(ذائقہ ) Restaurent', '3001', 'Pan Pizza', 'adminimage/blog-img-05.jpg', 'ordernow.php', '90', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `wicon` varchar(350) NOT NULL,
  `whatsaap` varchar(350) NOT NULL,
  `licon` varchar(350) NOT NULL,
  `linkedin` varchar(350) NOT NULL,
  `ficon` varchar(350) NOT NULL,
  `facebook` varchar(350) NOT NULL,
  `ticon` varchar(350) NOT NULL,
  `twitter` varchar(350) NOT NULL,
  `iicon` varchar(350) NOT NULL,
  `instagram` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `wicon`, `whatsaap`, `licon`, `linkedin`, `ficon`, `facebook`, `ticon`, `twitter`, `iicon`, `instagram`) VALUES
(4, 'fab fa-whatsapp', '+916266060879', 'fab fa-linkedin fa-2x', 'https://www.linkedin.com', 'fab fa-facebook-f', 'https://www.facebook.com', 'fab fa-twitter', 'https://www.twitter.com', 'fab fa-instagram fa-2x', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `sub_footer`
--

CREATE TABLE `sub_footer` (
  `id` int(11) NOT NULL,
  `bar` text NOT NULL,
  `social_title` varchar(350) NOT NULL,
  `contact_title` varchar(350) NOT NULL,
  `contact_no` varchar(350) NOT NULL,
  `opening_hr` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_footer`
--

INSERT INTO `sub_footer` (`id`, `bar`, `social_title`, `contact_title`, `contact_no`, `opening_hr`) VALUES
(4, 'Sunday-Monday: Closed Tue-Sat : 9AM - 10PM', 'SHOW US MORE LOVE AND SUPPORT ON', 'FOR ANY HELP YOU MAY CALL US AT', '+91 6266060879', '(MONDAY TO SATURDAY, 9AM - 9PM)');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `tittle` varchar(350) NOT NULL,
  `name` varchar(350) NOT NULL,
  `facebook` varchar(350) NOT NULL,
  `instragram` varchar(350) NOT NULL,
  `linkedin` varchar(350) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `tittle`, `name`, `facebook`, `instragram`, `linkedin`, `about`, `image`) VALUES
(1, 'Our Team', 'Kulpreet Chopra', 'https://www.facebook.com/cutexchorra.sam.3', 'https://instagram.com/kulpreet_chopra?igshid=1vz6gikloolj', 'https://www.linkedin.com/in/kulpreet-singh-chopra-9203671a4', 'Full Stack Web Developer', 'adminimage/admin.jpg'),
(2, 'Our Team', 'Neha Bhadoriya ', 'https://www.facebook.com/cutexchorra.sam.3', 'https://instagram.com/kulpreet_chopra?igshid=1vz6gikloolj', 'https://www.linkedin.com/in/kulpreet-singh-chopra-9203671a4', 'Web Designer', 'adminimage/22.jpg'),
(3, 'Our Team', 'Gunjan Gupta', '#', '#', '#', 'Web Designer', 'adminimage/20201104_173539.jpg'),
(4, 'Our Team', 'Kritaghya Gupta', '#', '#', '#', 'Web Developer', 'adminimage/Screenshot_20200924-150013_WhatsApp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `color` varchar(350) NOT NULL,
  `shade` varchar(350) NOT NULL,
  `font` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `color`, `shade`, `font`) VALUES
(5, 'red', '#ff010db0', 'Rubik, sans-serif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `mobile` varchar(350) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(350) NOT NULL,
  `username` varchar(350) NOT NULL,
  `password` varchar(350) NOT NULL,
  `forgott_pass` varchar(350) NOT NULL,
  `interest` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `address`, `gender`, `username`, `password`, `forgott_pass`, `interest`, `time`) VALUES
(3, 'Gunjan Gupta', 'gg2354875@gmail.com', '6260848521', 'morena', 'female', 'Gunjan Gupta', 'Gunjan@123', '', 'Vegeterian Food', '2020-11-08 17:16:39'),
(4, 'Kritaghya Gupta', 'kri@gmail.com', '7000761192', 'ghasmandi police chowki, ghasmandi', 'male', 'Kritaghya Gupta', 'kritaghya', '', 'Non-Vegeterian Food', '2020-11-08 17:16:39'),
(8, 'Kulpreet Chopra', 'kulpreetsingh0128@gmail.com', '6266060879', 'B-94 New Fort View Colony Koteshwar Road Gwalior', 'male', 'Kulpreet Chopra', 'kulpreet', 'green', 'Vegeterian Food', '2020-11-27 04:43:46'),
(9, 'Neha Bhadoriya ', 'nehabhadoriya33@gmail.com', '6267177460', 'Naka ChandraVadni Lashkar Gwalior(M.P.)', 'female', 'Neha Bhadoriya', 'Ram@1234', '', 'Vegeterian Food', '2020-11-12 07:48:33'),
(10, 'robin fhfj', 'guptakritaghya@gmail.com', '8839287361', 'ghasmandi police chowki, ghasmandi', 'male', 'kri', 'kritaghya', 'green', 'Non-Vegeterian Food', '2020-11-19 16:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `tittle` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `welimage` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `tittle`, `description`, `welimage`) VALUES
(17, 'Welcome To Zyaka (Ø°Ø§Ø¦Ù‚Û) Restaurent', 'BrandCrowd makes searching for the best restaurant logo easy by offering users access to a library of sample restaurant-related and food logos you can customize. Most restaurant logos focus on the nationality of the cuisine, venue specifics, and style. Ensure your gastronomical-related logo is concise with hunger-inducing attributes. Remember that most consumers have strong associations with Zayaka Team.', 'adminimage/gallery-img-06.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutbanner`
--
ALTER TABLE `aboutbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminreply`
--
ALTER TABLE `adminreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactbanner`
--
ALTER TABLE `contactbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desert`
--
ALTER TABLE `desert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_services1`
--
ALTER TABLE `footer_services1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_services2`
--
ALTER TABLE `footer_services2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeslider`
--
ALTER TABLE `homeslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homespecial`
--
ALTER TABLE `homespecial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homewindow`
--
ALTER TABLE `homewindow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_footer`
--
ALTER TABLE `main_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuslider`
--
ALTER TABLE `menuslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuwindow`
--
ALTER TABLE `menuwindow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonveg`
--
ALTER TABLE `nonveg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderbanner`
--
ALTER TABLE `orderbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationbanner`
--
ALTER TABLE `registrationbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservationbanner`
--
ALTER TABLE `reservationbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snack`
--
ALTER TABLE `snack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_footer`
--
ALTER TABLE `sub_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aboutbanner`
--
ALTER TABLE `aboutbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `adminreply`
--
ALTER TABLE `adminreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `contactbanner`
--
ALTER TABLE `contactbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `desert`
--
ALTER TABLE `desert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dinner`
--
ALTER TABLE `dinner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `footer_services1`
--
ALTER TABLE `footer_services1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footer_services2`
--
ALTER TABLE `footer_services2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `homeslider`
--
ALTER TABLE `homeslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homespecial`
--
ALTER TABLE `homespecial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homewindow`
--
ALTER TABLE `homewindow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_footer`
--
ALTER TABLE `main_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menuslider`
--
ALTER TABLE `menuslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menuwindow`
--
ALTER TABLE `menuwindow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nonveg`
--
ALTER TABLE `nonveg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderbanner`
--
ALTER TABLE `orderbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `registrationbanner`
--
ALTER TABLE `registrationbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservationbanner`
--
ALTER TABLE `reservationbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `snack`
--
ALTER TABLE `snack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_footer`
--
ALTER TABLE `sub_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
