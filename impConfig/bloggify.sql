-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 02:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggify`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `sno` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `sno` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `views` text NOT NULL,
  `isRecycle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `sno` bigint(20) NOT NULL,
  `categoryTitle` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`sno`, `categoryTitle`, `description`) VALUES
(10, 'Fashion', 'A fashion blog can cover many things such as specific items of clothing and accessories, beauty tips, trends in various apparel markets (haute couture, prêt-à-porter, etc.), celebrity fashion choices and street fashion trends. ... Some retailers in the fashion industry have started blogs to promote their products.'),
(11, 'Travel', 'A travel blogger, also known as travel writer or just as “blogger”, is someone who travels around the world collecting material for writing about their travel experiences, deriving income from a variety of on-line and off-line sources.'),
(12, 'Beauty Products', 'The tone and style in which the posts are written for the blog depends on the target audience and your style of conveying things.\r\nA beauty blog is a place where you can find posts related to beauty sections.'),
(13, 'Coding', ' A platform for developers, that provides you with a personalised curation service on programming topics. Use it to write and read quality articles on programming. Not for content-marketing disguised as programming tutorials.'),
(14, 'Health', 'A health blog can cover diverse health related concerns such as nutrition and diet, fitness, weight control, diseases, disease management, societal trends affecting health, analysis about health, business of health and health research.'),
(15, 'Technology', 'Technical blogging is a great way to share your expertise while building a potentially valuable readership. It can help you to document projects, or provide guidance to other web users. You can also monetize your content, or use your blog to market your services.'),
(16, 'Lifestyle', 'A lifestyle blog is best defined as a digital content representation of its author’s everyday life and interests. A lifestyle blogger creates content inspired and curated by their personal interests and daily activities. As such, lifestyle blogs are oftentimes highly personalized to the author’s location, life stage and experience.'),
(17, 'Science', 'ScienceBlogs is an invitation-only blog network and virtual community that operated initially for a little less than twelve years, from 2006 to 2017. It was created by Seed Media Group to enhance public understanding of science.'),
(18, 'Plants', 'A blogger by definition is someone who posts informational entries on the internet. A plant blogger is one who posts and discusses plants'),
(19, 'Mental Health', 'They are part of a social media campaign to reduce the stigma around mental health and encourage honest conversations. Each blog post is written from a personal experience and includes categories on depression, anxiety, bipolar, and more.');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `sno` bigint(20) NOT NULL,
  `comment` longtext NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
