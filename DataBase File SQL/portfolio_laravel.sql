-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2024 at 03:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` varchar(100) NOT NULL,
  `categories_name` varchar(100) NOT NULL,
  `categories_dtTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_dtTime`) VALUES
('category-66c736f852f19', 'Application', '2024-08-22 18:34:31'),
('category-66c7371c3a0d0', 'Games', '2024-08-22 18:34:31'),
('category-66c7372289cca', 'Front End Project', '2024-08-22 18:34:31'),
('category-66c7372ac6b1f', 'Full Stack Project', '2024-08-22 18:34:31'),
('category-66c7372ajfif0', 'React', '2024-08-22 18:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_user_Id` varchar(100) NOT NULL,
  `contact_user_name` varchar(200) DEFAULT NULL,
  `contact_user_phone` varchar(10) DEFAULT NULL,
  `contact_user_email` varchar(200) DEFAULT NULL,
  `contact_user_residence` varchar(100) DEFAULT NULL,
  `contact_user_purpose` text DEFAULT NULL,
  `contact_user_timeOfEnquiry` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'not contacted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`contact_user_Id`, `contact_user_name`, `contact_user_phone`, `contact_user_email`, `contact_user_residence`, `contact_user_purpose`, `contact_user_timeOfEnquiry`, `status`) VALUES
('user-66ce1a661b0ef', 'Utsab', '8697508881', 'utsabsarkar00@gmail.com', 'Kolkata', 'test', '2024-08-27 23:56:46', 'contacted'),
('user-66d9fb4f56b95', 'Karen Adams', '1234569879', 'utsabsarkar00gg@gmail.com', '122s', 'sdsd', '2024-09-06 00:11:19', 'contacted'),
('user-66dc234cbbf2e', 'test3', '2222222222', 'utsabsarkar0sgsgs0@gmail.com', '122s', 'gsgsgs', '2024-09-07 15:26:28', 'not contacted'),
('user-66e11f078a33a', 'Mrinmoy Paul', '1236987456', 'mini@gmil.com', 'India', 'tesh hai be', '2024-09-11 10:09:35', 'not contacted'),
('user-66e11f24b474a', 'Mrinmoy Paul', '1236987459', 'min0i@gmil.com', 'India', 'tesh hai be', '2024-09-11 10:10:04', 'not contacted');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` varchar(100) NOT NULL,
  `education_stage` varchar(100) NOT NULL,
  `education_year` varchar(10) NOT NULL,
  `education_grade` varchar(10) NOT NULL,
  `education_institute` varchar(150) NOT NULL,
  `education_headInstitute` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `education_stage`, `education_year`, `education_grade`, `education_institute`, `education_headInstitute`) VALUES
('education-66c76038b705a', 'Madhyamik Examination', '2017', '81.14%', 'H. M. EDUCATION CENTER', 'WEST BENGAL BOARD OF SECONDARY EDUCATION'),
('education-66c760a3ad1fd', 'Higher Secondary Examination', '2019', '81.72%', 'THE WEST BENGAL COUNCIL OF HIGHER SECONDARY EDUCATION', 'THE WEST BENGAL COUNCIL OF HIGHER SECONDARY EDUCATION'),
('education-66c760aeaf697', 'Graduation', '2022', '7.7CGPA', 'LALABA COLLEGE , BELUR', 'UNIVERSITY OF CALCUTTA');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `hobby_Id` varchar(200) NOT NULL,
  `hobby_name` varchar(200) NOT NULL,
  `hobby_image` varchar(50) DEFAULT NULL,
  `hobby_dtTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`hobby_Id`, `hobby_name`, `hobby_image`, `hobby_dtTime`) VALUES
('hobby-66c764b4a3551', 'Football', 'football.svg', '2024-08-22 21:52:21'),
('hobby-66c764d3b2013', 'Esports', 'games.svg', '2024-08-22 21:52:21'),
('hobby-66c764f9aac84', 'Listening to Music', 'music.svg', '2024-08-22 21:52:21'),
('hobby-66c7659d6c95c', 'Innovating New Things', 'innovation.svg', '2024-08-22 21:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `language_id` varchar(100) NOT NULL,
  `language_name` varchar(100) NOT NULL,
  `language_knowledge` int(11) NOT NULL,
  `language_image` varchar(100) NOT NULL,
  `language_dtTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`language_id`, `language_name`, `language_knowledge`, `language_image`, `language_dtTime`) VALUES
('language-66c7388ac9bb0', 'HTML 5', 90, 'html.png', '2024-08-22 18:57:54'),
('language-66c7388fe12df', 'CSS3', 80, 'css.png', '2024-08-22 18:57:54'),
('language-66c7389a13fdb', 'JavaScript', 60, 'js.png', '2024-08-22 18:57:54'),
('language-66c7389fd57e1', 'Jquery', 70, 'jquery.png', '2024-08-22 18:57:54'),
('language-66c738a5b43fa', 'Bootstrap 5', 90, 'bootstrap.png', '2024-08-22 18:57:54'),
('language-66c738ab5caea', 'React Js', 40, 'react.png', '2024-08-22 18:57:54'),
('language-66c738b1dd445', 'MySQL', 70, 'mysql.png', '2024-08-22 18:57:54'),
('language-66c738b841136', 'PHP', 80, 'php.png', '2024-08-22 18:57:54'),
('language-66c738bdd94bb', 'Laravel 10', 45, 'laravel.png', '2024-08-22 18:57:54'),
('language-66e0a2bbf1fcd', 'SASS', 60, 'sass.png', '2024-09-11 01:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` varchar(100) NOT NULL,
  `project_name` varchar(300) NOT NULL,
  `project_description` text NOT NULL DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, recusandae molestias delectus possimus quibusdam tenetur omnis consequatur ex voluptatem sint, autem cumque ea reprehenderit aut impedit quisquam itaque modi quaerat quas mollitia. Repellendus, ducimus in? Similique expedita architecto hic eum voluptatum rem optio enim exercitationem placeat cum labore nemo consequuntur nesciunt, suscipit deleniti. Officia adipisci itaque culpa modi maxime quod ipsam magnam et sit sapiente minus consequatur nemo quo delectus, temporibus ex, excepturi odit ab mollitia. Enim modi a omnis ab? Molestias, nihil sed! Nihil eligendi sapiente cumque porro deleniti illum quo molestiae incidunt quibusdam delectus labore ut suscipit sequi necessitatibus autem id repudiandae, distinctio perferendis eius temporibus unde facere vitae. Natus et error tenetur quisquam libero harum dolorum ipsum, rerum quos numquam repellat cumque cum laudantium nulla vitae porro perferendis pariatur eveniet accusamus accusantium magni tempore consequuntur voluptatum molestias. Velit perspiciatis, vero inventore id nisi facere. Consectetur neque dicta praesentium vero? Doloribus perferendis architecto aperiam quisquam, ipsam veritatis odit repudiandae odio cumque illum facilis officiis tempore delectus officia iusto nulla alias? Asperiores magnam porro quia, doloribus recusandae numquam saepe illo. Ab blanditiis, molestias deserunt numquam nihil pariatur culpa, saepe aliquam expedita modi quisquam! Repudiandae voluptatum perspiciatis omnis laboriosam voluptas necessitatibus soluta magnam perferendis sed recusandae, neque tempore illo suscipit magni odit iure dolorum! Animi quis expedita beatae, minima vel labore eius ratione impedit, dicta quaerat qui dolor accusamus minus id veritatis eligendi corporis! Impedit molestias beatae quia vitae sint quasi rerum inventore eos autem numquam voluptas, quis, quas laboriosam modi quod magni aliquid dolorem saepe adipisci nulla. Nesciunt laudantium hic tenetur incidunt ea quibusdam! Voluptate iure saepe sequi recusandae odit! Ipsa earum asperiores amet dolorum magni nesciunt fuga sunt sint unde. Corrupti aspernatur reprehenderit magni ducimus, alias ullam maxime veniam? Quam cumque eos consectetur recusandae deleniti at non nisi dolor a ex minus sit, eligendi excepturi modi libero reprehenderit enim quasi, accusamus officiis ab aliquam minima corrupti. Iure, fugit labore corrupti quia autem itaque provident nihil, magni enim consequatur aliquid maxime unde tempora optio ratione numquam eos. Doloribus excepturi aspernatur dicta ipsam ad ab, nostrum ducimus omnis ratione, expedita ea soluta modi consequatur velit veritatis explicabo tenetur repellat rem, blanditiis laborum dolor saepe. Numquam est harum nihil exercitationem optio! Esse tempore sit, blanditiis odio unde incidunt mollitia iusto sapiente qui saepe nisi, ut eos modi repellendus non, doloribus necessitatibus odit dolorem rem tempora fugiat maxime officiis! Velit, eligendi libero.',
  `project_moto` text DEFAULT NULL,
  `project_duration` varchar(400) DEFAULT NULL,
  `project_languages` longtext DEFAULT NULL,
  `project_backgroundImage` text DEFAULT NULL,
  `project_image` text DEFAULT NULL,
  `project_category` varchar(100) DEFAULT NULL,
  `project_sourceCode_github` text DEFAULT NULL,
  `project_liveHostLink` text DEFAULT NULL,
  `project_dtTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_description`, `project_moto`, `project_duration`, `project_languages`, `project_backgroundImage`, `project_image`, `project_category`, `project_sourceCode_github`, `project_liveHostLink`, `project_dtTime`) VALUES
('project-66d283156f140', 'Audio Corner', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"0\",\"day\":\"10\"}', '[{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c7389fd57e1\",\"languageName\":\"Jquery\",\"languageImage\":\"jquery.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"}]', 'audio.png', 'audio.png', 'category-66c736f852f19', NULL, NULL, '2024-08-31 08:44:34'),
('project-66d283d1bed41', 'Tic Tac Toe', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"0\",\"day\":\"15\"}', '[{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c7389fd57e1\",\"languageName\":\"Jquery\",\"languageImage\":\"jquery.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"}]', 'katakuti.png', 'katakuti.png', 'category-66c7371c3a0d0', NULL, NULL, '2024-08-31 08:44:34'),
('project-66d2844104e0c', 'Cassio Game', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"0\",\"day\":\"10\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738ab5caea\",\"languageName\":\"React Js\",\"languageImage\":\"react.png\"}]', 'cassio.png', 'cassio.png', 'category-66c7371c3a0d0', 'https://github.com/executor-utsab2000/React-Basic-Projects/tree/main/Games/Cassio%20game', 'https://cassiogamebyexecutor.netlify.app/', '2024-08-31 08:44:34'),
('project-66d284ebef454', 'Stone Paper Scissor', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"0\",\"day\":\"7\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738ab5caea\",\"languageName\":\"React Js\",\"languageImage\":\"react.png\"}]', 'sps.png', 'sps.png', 'category-66c7371c3a0d0', 'https://github.com/executor-utsab2000/React-Basic-Projects/tree/main/Games/Stone%20Paper%20Scissors', 'https://stone-paper-scissors-byexecutor.netlify.app/', '2024-08-31 08:44:34'),
('project-66d2881462d42', 'Dice Game', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"0\",\"day\":\"4\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738ab5caea\",\"languageName\":\"React Js\",\"languageImage\":\"react.png\"}]', 'dice.png', 'dice.png', 'category-66c7371c3a0d0', 'https://github.com/executor-utsab2000/Dice-Game', 'https://dice-game-mocha-psi.vercel.app/', '2024-08-31 08:44:34'),
('project-66d288b280435', 'Academia', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"3\",\"day\":\"0\"}', '[{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c7389fd57e1\",\"languageName\":\"Jquery\",\"languageImage\":\"jquery.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"}]', 'academia.png', 'academia.png', 'category-66c7372289cca', 'https://github.com/executor-utsab2000/Academia', 'https://heroic-tiramisu-c817cc.netlify.app/', '2024-08-31 08:44:34'),
('project-66d28a4257b8f', 'Crown Resto Clone', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima ', '{\"month\":\"2\",\"day\":\"5\"}', '[{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c7389fd57e1\",\"languageName\":\"Jquery\",\"languageImage\":\"jquery.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"}]', 'crown.png', 'crown.png', 'category-66c7372289cca', 'https://github.com/executor-utsab2000/Crown-Resto-', 'https://crownrestobyexecutor.netlify.app/', '2024-08-31 08:44:34'),
('project-66d28baa13cfb', 'Expense Tracker', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"1\",\"day\":\"20\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c7389fd57e1\",\"languageName\":\"Jquery\",\"languageImage\":\"jquery.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738b1dd445\",\"languageName\":\"MySQL\",\"languageImage\":\"mysql.png\"},{\"languageId\":\"language-66c738b841136\",\"languageName\":\"PHP\",\"languageImage\":\"php.png\"}]', 'crud.png', 'crud.png', 'category-66c7372ac6b1f', NULL, NULL, '2024-08-31 09:07:31'),
('project-66d28c22eed95', 'Stack Overflow QnA', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"3\",\"day\":\"20\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c7389fd57e1\",\"languageName\":\"Jquery\",\"languageImage\":\"jquery.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738b1dd445\",\"languageName\":\"MySQL\",\"languageImage\":\"mysql.png\"},{\"languageId\":\"language-66c738b841136\",\"languageName\":\"PHP\",\"languageImage\":\"php.png\"}]', 'stackOverFlow.png', 'stackOverFlow.png', 'category-66c7372ac6b1f', 'https://github.com/executor-utsab2000/Stack-OverFlow-Clone', NULL, '2024-08-31 09:07:31'),
('project-66d28c82a7b92', 'Shoe Factory', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"1\",\"day\":\"25\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c7389fd57e1\",\"languageName\":\"Jquery\",\"languageImage\":\"jquery.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738b1dd445\",\"languageName\":\"MySQL\",\"languageImage\":\"mysql.png\"},{\"languageId\":\"language-66c738b841136\",\"languageName\":\"PHP\",\"languageImage\":\"php.png\"}]', 'shoe.png', 'shoe.png', 'category-66c7372ac6b1f', 'https://github.com/executor-utsab2000/Footwear-Ecommerce-Website', NULL, '2024-08-31 09:07:31'),
('project-66d2949ea2f26', 'CRUD App (React)', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima ', '{\"month\":\"2\",\"day\":\"5\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738ab5caea\",\"languageName\":\"React Js\",\"languageImage\":\"react.png\"},{\"languageId\":\"language-66c738b841136\",\"languageName\":\"PHP\",\"languageImage\":\"php.png\"}]', 'crudReact.png', 'crudReact.png', 'category-66c7372ajfif0', NULL, NULL, '2024-08-31 09:34:12'),
('project-66d294f08550e', 'Static Portfolio Website', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"2\",\"day\":\"5\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738ab5caea\",\"languageName\":\"React Js\",\"languageImage\":\"react.png\"}]', 'portfolioReact.png', 'portfolioReact.png', 'category-66c7372ajfif0', 'https://github.com/executor-utsab2000/PortFolio-Official', 'https://utsab-dev.netlify.app/', '2024-08-31 09:34:12'),
('project-66d295482e74e', 'Weather Corner', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima ', '{\"month\":\"2\",\"day\":\"5\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738ab5caea\",\"languageName\":\"React Js\",\"languageImage\":\"react.png\"}]', 'weatherReact.png', 'weatherReact.png', 'category-66c7372ajfif0', 'https://github.com/executor-utsab2000/React-Weather-App', 'https://react-weather-app-indol-two.vercel.app/', '2024-08-31 09:34:12'),
('project-66d296695fc03', 'Recepie Corner', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima nihil dicta porro temporibus, explicabo obcaecati inventore maiores aperiam cumque sequi debitis expedita fugit architecto! Pariatur laboriosam reiciendis aut, sapiente voluptatum dicta nobis veritatis vero cum facilis architecto. Libero qui eaque natus beatae quod facilis ab cumque laborum modi? Voluptatem, quasi. Ratione iure animi consequuntur id temporibus incidunt corporis quos repellendus hic maxime inventore, autem rem qui sint dolores. Dignissimos maxime beatae laboriosam id harum corrupti nostrum tenetur nulla recusandae voluptatibus, esse ipsam doloremque eum ab vitae non!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit unde officia, qui veniam a quae incidunt, eos asperiores id tempora perferendis minima', '{\"month\":\"2\",\"day\":\"0\"}', '[{\"languageId\":\"language-66c7387pl12df\",\"languageName\":\"SASS\",\"languageImage\":\"sass.png\"},{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"},{\"languageId\":\"language-66c738ab5caea\",\"languageName\":\"React Js\",\"languageImage\":\"react.png\"}]', 'kitchenRecepie.png', 'kitchenRecepie.png', 'category-66c7372ajfif0', 'https://github.com/executor-utsab2000/Kitchen-Recepie', 'https://kitchen-recepie.vercel.app/', '2024-08-31 09:37:16'),
('project-66e131758e7b1', 'Weather Whisper', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, neque optio suscipit et assumenda impedit ratione vitae dicta cupiditate rem mollitia rerum maiores eaque ducimus quo molestiae explicabo sequi! Voluptate voluptatibus delectus ad error, placeat sed asperiores atque temporibus eveniet fuga perferendis cupiditate quo commodi ipsam minima sapiente cum enim expedita tempore corporis labore sequi deserunt. Aliquam possimus omnis quisquam accusantium amet, adipisci in odit quam perferendis nesciunt earum repellendus rerum labore ducimus! Cupiditate iste veritatis quaerat repudiandae nihil aliquam, unde iure rem eius velit ut magni modi, earum dolores veniam aliquid! Quo aut animi quidem sit vel consequuntur soluta.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, neque optio suscipit et assumenda impedit ratione vitae dicta cupiditate rem mollitia rerum maiores eaque ducimus quo molestiae explicabo sequi!', '{\"month\":\"0\",\"day\":\"7\"}', '[{\"languageId\":\"language-66c7388ac9bb0\",\"languageName\":\"HTML 5\",\"languageImage\":\"html.png\"},{\"languageId\":\"language-66c7388fe12df\",\"languageName\":\"CSS3\",\"languageImage\":\"css.png\"},{\"languageId\":\"language-66c7389a13fdb\",\"languageName\":\"JavaScript\",\"languageImage\":\"js.png\"},{\"languageId\":\"language-66c7389fd57e1\",\"languageName\":\"Jquery\",\"languageImage\":\"jquery.png\"},{\"languageId\":\"language-66c738a5b43fa\",\"languageName\":\"Bootstrap 5\",\"languageImage\":\"bootstrap.png\"}]', 'Weather Whisper.png', 'Weather Whisper.png', 'category-66c736f852f19', NULL, NULL, '2024-09-11 11:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `social_Id` varchar(150) NOT NULL,
  `social_name` varchar(50) NOT NULL,
  `social_link` text NOT NULL,
  `social_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`social_Id`, `social_name`, `social_link`, `social_image`) VALUES
('\r\nsocial-66c94a7da5b3a', 'github', 'https://github.com/executor-utsab2000', 'git.png'),
('\r\nsocial-66c94a7da5bf9', 'instagram', 'https://www.instagram.com/executor_jit/', 'insta.png'),
('social-66c94a61c99a9', 'linkedin', 'https://www.linkedin.com/in/utsab-sarkar-971bb5184/', 'in.png'),
('social-66c94a7590da2', 'facebook', 'https://www.facebook.com/profile.php?id=100075459850106', 'fb.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_user_Id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `categoryToProject` (`project_category`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`social_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `categoryToProject` FOREIGN KEY (`project_category`) REFERENCES `categories` (`categories_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
