-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 06:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-com`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_body`
--

CREATE TABLE `about_body` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `dotted` varchar(50) NOT NULL,
  `play` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_body`
--

INSERT INTO `about_body` (`id`, `image`, `title`, `content`, `dotted`, `play`) VALUES
(1, 'a6.jpg', 'Who we are?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, minima delectus numquam incidunt soluta impedit, beatae quidem illum hic nihil dolor esse. Sint laudantium deleniti perspiciatis ea cupiditate nihil officia voluptas illum a dolorum laborum iusto, molestias, ratione aliquam beatae. Doloribus, expedita. Cum, error earum. Temporibus debitis possimus facilis molestias optio sint reiciendis quaerat vitae hic perferendis tempora sed deleniti quod aspernatur eum cumque, doloremque eaque dolore id esse cupiditate.', 'Lorem, ipsum dolor sit amet consectetur adipisicin', 'Lorem, ipsum dolor sit amet consectetur adipisicin'),
(2, 'a6.jpg', 'Who we are?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, minima delectus numquam incidunt soluta impedit, beatae quidem illum hic nihil dolor esse. Sint laudantium deleniti perspiciatis ea cupiditate nihil officia voluptas illum a dolorum laborum iusto, molestias, ratione aliquam beatae. Doloribus, expedita. Cum, error earum. Temporibus debitis possimus facilis molestias optio sint reiciendis quaerat vitae hic perferendis tempora sed deleniti quod aspernatur eum cumque, doloremque eaque dolore id esse cupiditate.\r\n\r\n', 'Lorem, ipsum dolor sit amet consectetur adipisicin', 'Lorem, ipsum dolor sit amet consectetur adipisicin');

-- --------------------------------------------------------

--
-- Table structure for table `about_header`
--

CREATE TABLE `about_header` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_header`
--

INSERT INTO `about_header` (`id`, `title`, `subtitle`) VALUES
(0, '#KnowUs', 'Read all case studies our products!\r\n\r\n'),
(1, '#KnowUs\r\n', 'Read all case studies our products!\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Gilman', 'admin', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `subtitle`, `title`) VALUES
(1, 'b22.jpg', 'Repair Services\r\n', 'Up to 70% Off - All t-Shirt & Accessories\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `name`, `email`, `phone`, `city`, `district`, `address`, `user_id`) VALUES
(5, 'farcy', 'admin@gmail.com', '4456666', 'sylhet', 'sylhet', 'sylhet', 7),
(6, 'h', 'admin@gmail.com', '444', 's', 'd', 's', 7);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `title`, `content`, `category`, `date`) VALUES
(1, 'b2.jpg', 'why were going to alaska and why\r\nyou should too', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in some form, by injected randomised words.', 'Minciya', '2023-12-09'),
(4, 'b3.jpg', 'why were going to alaska and why\r\nyou should too', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in some form, by injected randomised words.', 'Minciya', '2023-12-09'),
(5, 'b3.jpg', 'why were going to alaska and why\r\nyou should too', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in some form, by injected randomised words.', 'Minciya', '2023-12-09'),
(6, 'b4.jpg', 'why were going to alaska and why\r\nyou should too', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in some form, by injected randomised words.', 'Minciya', '2023-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `blog_header`
--

CREATE TABLE `blog_header` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blog_header`
--

INSERT INTO `blog_header` (`id`, `title`, `subtitle`) VALUES
(1, '#Readmore\r\n', 'Read all case studies our products!\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `hours`) VALUES
(1, 'Address: 562 Wellington Road, Street 32, San Francisco\r\n\r\n', 'Phone: +01 2222 365 /(+91) 01 2345 6789\r\n\r\n', 'Hours: 10:00 - 18:00, Mon - Sat\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details_head`
--

CREATE TABLE `contact_details_head` (
  `id` int(11) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_details_head`
--

INSERT INTO `contact_details_head` (`id`, `subtitle`, `title`, `subtitle2`) VALUES
(1, 'GET IN TOUCH\r\n', 'Visit one of our agency locations or contact us today\r\n', 'Head Offfice\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_header`
--

CREATE TABLE `contact_header` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_header`
--

INSERT INTO `contact_header` (`id`, `title`, `subtitle`) VALUES
(1, '#Let\'s_talk', 'LEAVE A MESSAGE.WE LOVE TO HEAR FROM YOU!\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact__address`
--

CREATE TABLE `contact__address` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact__address`
--

INSERT INTO `contact__address` (`id`, `link`, `contact`) VALUES
(1, 'map', '56 Glassford street Glasgow G1 1UL New Yourk'),
(2, 'envelope', 'contact@example.com'),
(3, 'phone', '\r\ncontact@example.com'),
(4, 'clock', '\r\nMonday to Saturday: 9.00am to 16.00pm');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `image`, `service`) VALUES
(1, 'f1.png', ' Free Shipping\r\n'),
(2, 'f2.png', ' Online Order\r\n'),
(3, 'f3.png', ' Save Money\r\n'),
(4, 'f4.png', ' Promotions\r\n'),
(5, 'f5.png', ' Happy sell\r\n'),
(6, 'f6.png', '24/7 Support\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `sub_title`, `title`, `title2`, `content`, `img`) VALUES
(1, 'Trade-in-offers', 'Super value deals', 'On all products', 'save more with coupons & up to 70% off! ', 'hero4.png');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_name`, `user_id`, `date`, `status`) VALUES
(14, '#invoice7', 7, 'December 6, 2023, 3:11 pm', 0),
(15, '#invoice7', 7, 'December 6, 2023, 3:12 pm', 2),
(16, '#invoice7', 7, 'December 6, 2023, 3:23 pm', 2),
(17, '#invoice7', 7, 'December 7, 2023, 8:25 am', 2),
(18, '#invoice7', 7, 'December 7, 2023, 12:46 pm', 2),
(19, '#invoice7', 7, 'December 9, 2023, 3:46 am', 1),
(20, '#invoice7', 7, 'December 9, 2023, 8:15 am', 2),
(21, '#invoice7', 7, 'December 10, 2023, 11:09 am', 2);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_img`) VALUES
(1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_arrivals`
--

CREATE TABLE `new_arrivals` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `icon2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `new_arrivals`
--

INSERT INTO `new_arrivals` (`id`, `image`, `subtitle`, `title`, `icon`, `price`, `icon2`) VALUES
(1, 'f1.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '', '200', ''),
(2, 'f1.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '', '200', ''),
(3, 'f1.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '', '200', ''),
(4, 'f1.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '', '200', ''),
(5, 'f1.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '', '200', ''),
(6, 'f1.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '', '200', ''),
(7, 'f1.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '', '200', ''),
(8, 'f1.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '', '200', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_pro_heading`
--

CREATE TABLE `new_pro_heading` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `new_pro_heading`
--

INSERT INTO `new_pro_heading` (`id`, `title`, `subtitle`) VALUES
(1, 'Feature Products', 'Summer Collection New Morden Design');

-- --------------------------------------------------------

--
-- Table structure for table `order_cart`
--

CREATE TABLE `order_cart` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_cart`
--

INSERT INTO `order_cart` (`order_id`, `user_id`, `product_id`, `qty`, `invoice_id`) VALUES
(2, 7, 3, 1, 14),
(3, 7, 3, 1, 15),
(4, 7, 5, 2, 15),
(5, 7, 3, 1, 16),
(6, 7, 5, 2, 16),
(7, 7, 2, 2, 17),
(8, 7, 3, 2, 17),
(9, 7, 2, 3, 18),
(10, 7, 6, 1, 18),
(11, 7, 0, 6, 19),
(12, 7, 3, 5, 19),
(13, 7, 3, 6, 20),
(14, 7, 1, 3, 20),
(15, 7, 2, 4, 21),
(16, 7, 4, 3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `subtitle`, `title`, `price`, `size`, `content`) VALUES
(1, 'f3.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '20', 'M', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea veritatis aut eius nisi excepturi perferendis voluptatem, aliquid accusamus illo, praesentium eaque nesciunt hic quos ab reiciendis assumenda sint dignissimos voluptate maiores aspernatur! Et doloribus modi reprehenderit? Impedit culpa autem animi blanditiis vitae similique necessitatibus consectetur veniam aspernatur veritatis provident, facere cumque quisquam quam nobis aut fugiat illum deserunt natus ipsum corrupti voluptas dignissimos? Iste esse molestiae suscipit quisquam veritatis aspernatur dolor. Facilis unde porro ratione et sed odio at. Repudiandae, vel corrupti! Veritatis optio aut atque. Saepe quos repellat, in autem molestiae, quod minima voluptatibus est asperiores aliquid expedita praesentium.'),
(2, 'f5.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '20', 'M', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea veritatis aut eius nisi excepturi perferendis voluptatem, aliquid accusamus illo, praesentium eaque nesciunt hic quos ab reiciendis assumenda sint dignissimos voluptate maiores aspernatur! Et doloribus modi reprehenderit? Impedit culpa autem animi blanditiis vitae similique necessitatibus consectetur veniam aspernatur veritatis provident, facere cumque quisquam quam nobis aut fugiat illum deserunt natus ipsum corrupti voluptas dignissimos? Iste esse molestiae suscipit quisquam veritatis aspernatur dolor. Facilis unde porro ratione et sed odio at. Repudiandae, vel corrupti! Veritatis optio aut atque. Saepe quos repellat, in autem molestiae, quod minima voluptatibus est asperiores aliquid expedita praesentium.'),
(3, 'f4.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '20', 'M', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea veritatis aut eius nisi excepturi perferendis voluptatem, aliquid accusamus illo, praesentium eaque nesciunt hic quos ab reiciendis assumenda sint dignissimos voluptate maiores aspernatur! Et doloribus modi reprehenderit? Impedit culpa autem animi blanditiis vitae similique necessitatibus consectetur veniam aspernatur veritatis provident, facere cumque quisquam quam nobis aut fugiat illum deserunt natus ipsum corrupti voluptas dignissimos? Iste esse molestiae suscipit quisquam veritatis aspernatur dolor. Facilis unde porro ratione et sed odio at. Repudiandae, vel corrupti! Veritatis optio aut atque. Saepe quos repellat, in autem molestiae, quod minima voluptatibus est asperiores aliquid expedita praesentium.'),
(4, 'f3.jpg', 'adidas', 'Cartoon Astronaut T-Shirts', '20', 'M', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea veritatis aut eius nisi excepturi perferendis voluptatem, aliquid accusamus illo, praesentium eaque nesciunt hic quos ab reiciendis assumenda sint dignissimos voluptate maiores aspernatur! Et doloribus modi reprehenderit? Impedit culpa autem animi blanditiis vitae similique necessitatibus consectetur veniam aspernatur veritatis provident, facere cumque quisquam quam nobis aut fugiat illum deserunt natus ipsum corrupti voluptas dignissimos? Iste esse molestiae suscipit quisquam veritatis aspernatur dolor. Facilis unde porro ratione et sed odio at. Repudiandae, vel corrupti! Veritatis optio aut atque. Saepe quos repellat, in autem molestiae, quod minima voluptatibus est asperiores aliquid expedita praesentium.');

-- --------------------------------------------------------

--
-- Table structure for table `pro_heading`
--

CREATE TABLE `pro_heading` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pro_heading`
--

INSERT INTO `pro_heading` (`id`, `title`, `subtitle`) VALUES
(1, 'New Collection', 'Summer Collection New Morden Design');

-- --------------------------------------------------------

--
-- Table structure for table `p_size`
--

CREATE TABLE `p_size` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_header`
--

CREATE TABLE `shop_header` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `shop_header`
--

INSERT INTO `shop_header` (`id`, `title`, `subtitle`) VALUES
(1, '#stayhome\r\n', 'save more with coupons & up to 70% off!\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sm_banner`
--

CREATE TABLE `sm_banner` (
  `id` int(11) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sm_banner`
--

INSERT INTO `sm_banner` (`id`, `subtitle`, `title`, `content`, `image`) VALUES
(1, 'crazy deals', 'buy 1 get 1 free', 'The best classic dress is on sale at cara', 'b17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sm_banner1`
--

CREATE TABLE `sm_banner1` (
  `id` int(11) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `button` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sm_banner1`
--

INSERT INTO `sm_banner1` (`id`, `subtitle`, `title`, `content`, `button`) VALUES
(1, 'Spring/Summer', 'Upcomming Season', 'The best classic dress is on sale at cara', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(7, 'gilman', 'admin@gmail.com', '123456'),
(9, 'hero alom', 'hero@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_body`
--
ALTER TABLE `about_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_header`
--
ALTER TABLE `blog_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details_head`
--
ALTER TABLE `contact_details_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_header`
--
ALTER TABLE `contact_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact__address`
--
ALTER TABLE `contact__address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_arrivals`
--
ALTER TABLE `new_arrivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_pro_heading`
--
ALTER TABLE `new_pro_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_cart`
--
ALTER TABLE `order_cart`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_heading`
--
ALTER TABLE `pro_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_size`
--
ALTER TABLE `p_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_header`
--
ALTER TABLE `shop_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm_banner`
--
ALTER TABLE `sm_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm_banner1`
--
ALTER TABLE `sm_banner1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_info`
--
ALTER TABLE `website_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_body`
--
ALTER TABLE `about_body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_header`
--
ALTER TABLE `blog_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_details_head`
--
ALTER TABLE `contact_details_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_header`
--
ALTER TABLE `contact_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact__address`
--
ALTER TABLE `contact__address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_arrivals`
--
ALTER TABLE `new_arrivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_pro_heading`
--
ALTER TABLE `new_pro_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_cart`
--
ALTER TABLE `order_cart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pro_heading`
--
ALTER TABLE `pro_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_size`
--
ALTER TABLE `p_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_header`
--
ALTER TABLE `shop_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sm_banner`
--
ALTER TABLE `sm_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sm_banner1`
--
ALTER TABLE `sm_banner1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
