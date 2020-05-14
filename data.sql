-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2020 at 08:59 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `XnTQPp4tAK`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `block` int(11) DEFAULT '0',
  `timestamp` datetime NOT NULL,
  `hasPic` int(11) NOT NULL DEFAULT '0',
  `lastLogin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `firstname`, `lastname`, `email`, `password`, `role`, `block`, `timestamp`, `hasPic`, `lastLogin`) VALUES
(52, 'Super', 'Admin', 'superadmin@hngi7.com', '$2y$10$ATdx8a0PgRKg0SR.z.gCUONZTbPjMKXYBF6kc7THHqpJLhHmyfDL2', 1, 0, '2019-10-23 00:00:00', 1, '2020-03-19 10:27:11'),
(81, 'Ayeni', 'Kehinde', 'kenny4all40@gmail.com', '$2y$10$c52d4LmyuVaknmEelLS4Dum.yYAN.PHieOOQdoFAWDtGEy5oGGwAO', 1, 0, '2019-10-30 05:08:48', 1, '2020-05-10 08:21:58'),
(101, 'John', 'Ebri', 'johnebri18@gmail.com', '$2y$10$DxjZ1epVnlv0JQ53ZEdvqu8VV16sq2ajyPaZ37JbPUptff4WZbGr2', 1, 0, '2019-11-09 14:21:33', 0, '2019-12-03 11:05:00'),
(102, 'Emmanuel', 'Owojori', 'emmanuelboluwajib1@gmail.com', '$2y$10$heDxJRvQ3G3a8h7RLe8a0.ODYMVGrI6mh0eUiFSAvyfPmoojaT/Eu', 1, 0, '2019-11-10 13:27:34', 0, '2020-02-26 17:55:14'),
(103, 'Motunrayo', 'Da-costa', 'motunrayodacosta@gmail.com', '$2y$10$tpDFm/qB.PWadMdAii8QeO9ZJ4e5tarpW3PcV40mbsqV0Jxn6ZUS6', 1, 0, '2019-11-10 21:33:36', 0, '2020-04-25 14:59:25'),
(105, 'John', 'Ebri', 'john.ebri@yahoo.com', NULL, 2, 0, '2020-02-26 17:55:55', 0, NULL),
(106, 'Seyi', 'Onifade', 'seyi@hng.tech', NULL, 1, 0, '2020-05-08 09:41:14', 0, NULL),
(115, 'Emmanuel', 'Owojori B', 'owojoriemmanuelb1@gmail.com', NULL, 1, 0, '2020-05-08 17:34:29', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificate_request`
--

CREATE TABLE `certificate_request` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slack_username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `certificate_request`
--

INSERT INTO `certificate_request` (`id`, `name`, `email`, `slack_username`, `year`, `status`, `file`) VALUES
(2, 'Ayeni kehinde', 'kenny4all40@yahoo.com', 'ayenko', '2019-11-02', 'pending', NULL),
(3, 'Emmanuel Owojori', 'emmanuelboluwajib1@gmail.com', '@Dev_phileo', '2019-11-04', 'processing', NULL),
(4, 'Ayeni kehinde Oluwatosin', 'kenny4all40@gmail.com', 'ayenko', '2019-11-02', 'processing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `contact_id` int(11) NOT NULL,
  `ticket_id` int(15) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`contact_id`, `ticket_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 0, 'Name can be blank', 'agboola.eniola4031@gmail.com', 'hey there', 'hbjb,n'),
(2, 0, 'Ibrahim Oluwapeluwa', 'Ipeluwa@gmail.com', 'Test', 'Hhhh'),
(3, 0, 'ghtg', 'try@test.com', 'Internet solution f', 'fefe'),
(4, 0, 'KennethOwevy', 's.z.y.m.a.n.skiashley5@gmail.com', 'genital herpes remedy ', 'remedial approach definition  <a href= http://www.studiomerliniortodonzia.it/cgi-bin/bentelan.htm >studiomerliniortodonzia.it/cgi-bin/bentelan.htm</a>  natural remedies menopause '),
(5, 0, 'Barbara Atyson', 'barbaratysonhw@yahoo.com', 'Explainer Videos for hng.tech', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service which we feel can benefit your site hng.tech.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=zvGF7uRfH04\r\nhttps://www.youtube.com/watch?v=MOnhn77TgDE\r\nhttps://www.youtube.com/watch?v=KhSCHaI6gw0\r\n\r\nAll of our videos are in a similar animated format as the above examples and we have voice over artists with US/UK/Australian accents.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video such as Youtube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\n0-1 minutes = $159\r\n1-2 minutes = $269\r\n\r\n*All prices above are in USD and include a custom video, full script and a voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to get in touch (making sure you leave the \'re:\' part in the subject line).\r\nIf you are not interested, simply delete this message and we won\'t contact you again.\r\n\r\nKind Regards,\r\nBarbara'),
(6, 0, 'Claudia Clement', 'claudiauclement@yahoo.com', 'DA 96 Do-follow Backlink from Amazon', 'Hi, We are wondering if you would be interested in our service, where we can provide you with a dofollow link from Amazon (DA 96) back to hng.tech?\r\n\r\nThe price is just $77 per link, via Paypal.\r\n\r\nTo explain what DA is and the benefit for your website, along with a sample of an existing link, please read here: https://justpaste.it/6jp87\r\n\r\nIf you\'d be interested in learning more, reply to this email but please make sure you include the word INTERESTED in the subject line field, so we can get to your reply sooner.\r\n\r\nKind Regards,\r\nClaudia'),
(7, 0, 'Patrick Timothy Njoli', 'patimjoli@gmail.com', 'Backend question', 'I\'m currently in the C# track on startdotng. Will .Net be added to the BACKEND track technologies for HNGi7');

-- --------------------------------------------------------

--
-- Table structure for table `countdown`
--

CREATE TABLE `countdown` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `last_updated` datetime NOT NULL,
  `updated_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countdown`
--

INSERT INTO `countdown` (`id`, `start_date`, `start_time`, `last_updated`, `updated_by`) VALUES
(3, '2020-06-01', '00:00:00', '2020-04-26 11:13:04', 'Ayeni Kehinde');

-- --------------------------------------------------------

--
-- Table structure for table `inbox_messages`
--

CREATE TABLE `inbox_messages` (
  `id` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inbox_messages`
--

INSERT INTO `inbox_messages` (`id`, `message`, `subject`, `sender_id`, `receiver_id`, `status`) VALUES
(1, 'I hope you will get this sms in good faith', 'Testing Inbox', 81, 94, 'read'),
(2, 'I wanted to reply to your message', 'RE: Testing Inbox', 94, 81, 'read'),
(3, 'testing tester', 'hey there', 43, 94, 'new'),
(4, 'testing test', 'hey there', 43, 93, 'new'),
(5, 'testing test', 'hey there', 43, 81, 'read'),
(6, 'It sends', 'news', 43, 94, 'new'),
(7, 'Okay then, let\'s see it', 'Let\'s view message', 52, 94, 'read'),
(8, 'Okay seen', 'RE: Let\'s view message', 94, 52, 'read'),
(9, 'hello', 'Another testing', 81, 93, 'read'),
(10, 'final test', 'Update', 52, 94, 'new'),
(11, 'hhhh', 'itg-africa.com hosting', 95, 43, 'new'),
(12, '', '', 93, 95, 'new'),
(13, '', '', 93, 43, 'new'),
(14, '', '', 81, 93, 'new'),
(15, 'numerous', 'Let\'s view message', 52, 43, 'new'),
(16, 'Hey you, this is a response', 'RE: RE: Let\'s view message', 52, 94, 'new'),
(17, 'nxjanjnjnjanjnjanjnjnajnjan', 'Test', 101, 102, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE `interns` (
  `intern_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `link_to_cv` varchar(200) NOT NULL,
  `interest` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `current_location` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `employment_status` varchar(50) NOT NULL,
  `about` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`intern_id`, `name`, `email`, `phone_no`, `link_to_cv`, `interest`, `country`, `current_location`, `employment_status`, `about`, `status`, `timestamp`) VALUES
(4, 'Ayeni kehinde oluwatosin', 'kenny4all40@gmail.com', '09030448824', 'https://linkedin.com', 'Backend', '', 'Kaduna', 'Employee', 'testing testing', 1, '2019-11-11 07:08:46'),
(6, 'Seyi Onifade', 'gidxyluz@gmail.com', '08160614229', 'https://google.com', 'DevOps, Digital Marketing', '', 'Bauchi', 'Employee', 'Testing registration', 2, '2020-05-08 10:48:29'),
(13, 'Ayooluwatomiwa AJAYI', 'ayooluwatomiwaajayi@gmail.com', '08168171196', 'https://www.linkedin.com/in/ajayi-ayooluwatomiwa-56409485', 'Frontend', '', 'Oyo', 'Unemployed', 'I am a recent graduate of Obafemi Awolowo University from the department of Electronic and Electrical Engineering and I am currently waiting for NYSC.\r\nI developed interest in coding sometime in January this year and I was able to get started with coding about two months ago and I also enrolled in Start.Ng\'s internship.\r\nI\'m looking at building a career in frontend development and I believe HNGi will is a major step in the right direction for me.', 0, '2020-05-08 15:00:08'),
(14, 'John Ebri', 'john.ebri@yahoo.com', '07030601520', 'http://test', 'Backend', '', 'Edo', 'Self-employed', 'jhgghjgjhgjh jhg hjhjg ghjgjh hjg jhghjg h', 0, '2020-05-08 15:29:51'),
(15, 'Elijah Aborisade', 'aborisadeelijah@gmail.com', '+2347065894885', 'https://www.linkedin.com/in/elijah-aborisade-48a31474', 'Backend', '', 'Lagos', 'Unemployed', 'I am a graduate of Metallurgical and Materials Engineering from Federal University of Technology Akure. I am a technology savvy with excellent communication skill. I am a good team player and I love making things work. I am undergoing internship with StartNG. I am an intermediate python web developer with basic knowledge of MySQL, Javascript and few other programming languages. I pay attention to details.', 0, '2020-05-08 15:28:25'),
(16, 'Chibueze Emmanuel Okoye', 'tricelex@gmail.com', '07062194202', 'https://github.com/tricelex', 'Backend', '', 'Lagos', 'Freelance', 'I\'ve always had a thing for technology. I\'m a pre-nysc graduate of computer science. I started my journey designing flyers using Photoshop, before building WordPress sites.\r\nI\'ve learnt things by bruteforcing my way through them all. And I\'m currently looking for a defined structure for progression.\r\nMy interest includes backend programming. Logical and critical thinking works best for me. ', 0, '2020-05-08 15:39:43'),
(17, 'Emmanuel Mbaya', 'emmanuelbaldwin@gmail.com', '+2347019899806', 'https://www.linkedin.com/in/emmanuelmbaya/', 'Mobile Development', '', 'Borno', 'Employee', 'I love programming and learning new things', 0, '2020-05-08 15:35:39'),
(18, 'Ndubuisi chukwuemeka', 'ndubuisichukwuemeka2@gmail.com', '07083861345', 'https://www.linkedin.com/in/ndubuisi-chukwuemeka-308b7818a/', 'Frontend', '', 'Kaduna', 'Unemployed', 'A young graduate and an intern at startdotng', 0, '2020-05-08 16:05:36'),
(19, 'Ezekiel Benjamin', 'kyel2030@gmail.com', '09027291199', 'https://www.linkedin.com/in/kyel-ezekiel-benjamin-1ab48a183/', 'Frontend', '', 'Lagos', 'Freelance', 'a software developer and a UI/Ux designer looking to land my dream job', 0, '2020-05-08 16:13:02'),
(20, 'Olasumbo Afolabi', 'olasumboeniola1@gmail.com', '07083820152', 'https://www.linkedin.com/in/afolabi-olasumbo-43b4b8196/', 'Frontend', '', 'Lagos', 'Unemployed', 'I\'m a front end developer', 0, '2020-05-08 16:17:41'),
(21, 'BUSARI ThankGod Kolawole', 'busarithienkie@gmail.com', '08168134287', 'https://drive.google.com/file/d/1LkyjHBu2vNiNGMEP4OfkCv6kZLNJNIuO/view?usp=drivesdk', 'Mobile Development', '', 'Lagos', 'Recently Employed (3 months or less)', 'My names are BUSARI ThankGod Kolawole. I\'m a graduate of Obafemi Awolowo University in the department of Electronics and Electrical Engineering. I love programming. I have built some application for the company I am working for. I am currently an intern in Start.ng at stage 5 presently. I am hardworking, dedicated, smart and I want to learn more about Android development. I want to be very good at it. I will be happy if I am considered. Kind regards.', 0, '2020-05-08 16:27:21'),
(22, 'Hafsah Emekoma', 'hafsyezinne@gmail.com', '09097392818', 'https://github.com/Iamhafsah', 'Frontend', '', 'Lagos', 'Unemployed', 'Learning is something I see as a necessary part of life. I am Hafsah, a junior front end developer with knowledge of HTML, CSS, and JavaScript. I studied criminology and security studies in the university of Ilorin, kwara, Nigeria. When I\'m not learning something new or battling JavaScript, I listen to music, read books, or cook.', 0, '2020-05-08 16:38:02'),
(23, 'Yusuff Faruq', 'faruqyusuff437@gmail.com', '09062289933', 'https://www.linkedin.com/in/faruq-yusuff-073712190', 'Frontend, Mobile Development', '', 'Lagos', 'Unemployed', 'I am a front-end developer with skills in HTML, CSS, JavaScript, React, Gatsby and so on. I also build cross platform mobile apps using Flutter and Dart.', 0, '2020-05-08 16:40:41'),
(24, 'Oseni Ridwan Agbolahan', 'Oseniagbolahanr@gmail.com', '08141982484', 'https://www.linkedin.com/in/oseni-agbolahan-291707150', 'Backend', '', 'Oyo', 'Unemployed', 'I am Oseni Agbolahan, a recent graduate of chemical engineering.\r\nI have interests in data analytics and software development, as I have started getting materials and I am on the verge of installing an IDE for python programming.\r\n\r\nI will be glad if I am considered for this internship opportunity.\r\n\r\n', 0, '2020-05-08 16:31:25'),
(25, 'Daniel', 'danielamadi05@gmail.com', '08064310490', 'https://www.linkedin.com/in/daniel-amadi-a44a63191', 'Backend', '', 'Lagos', 'Freelance', 'I am Daniel Amadi and I have passion for programming. I am looking to grow and develop my skill in an environment that enhances development while being able to connect and exchange ideas with people whose passion align with mine. ', 0, '2020-05-08 16:43:45'),
(26, 'Vipul Aggarwal', 'vipulaggarwal099@gmail.com', '9654555419', 'https://github.com/vipul-aggarwal-099', 'Backend, Frontend', '', 'Lagos', 'Self-employed', 'I am Vipul Aggarwal, About my background, I am totally from a different field. It\'s an amazing and wonderful experience. This opportunity helps me to get dive my goals into a great career and build something meaningful. I hope for the best in my internship journey, meet my goals get towards my first tech job. Thank You.', 0, '2020-05-08 16:52:42'),
(27, 'Amao Samuel Abayomi ', 'yhomzsamuel@gmail.com', '08135518633 ', 'https://www.linkedin.com/in/amao-samuel-abayomi-68a6b0185', 'Digital Marketing, UI/UX Design', '', 'Lagos', 'Employee', 'I\'m a graduate of psychology primarily interested in ui/ux design. I\'m a tech enthusiast who participated in last years HNG internship. Unfortunately I couldn\'t makes it to the final but I\'m hoping that with determination and zeal i would make it to this year\'s final. ', 0, '2020-05-08 16:57:51'),
(28, 'Salaudeen Sodiq', 'salsod1st@gmail.com', '08130435830', 'https://www.linkedin.com/in/sodiq-salaudeen-033481179', 'Frontend', '', 'Osun', 'Unemployed', 'I am a frontend enthusiast who believe that anyone with the right frame of mind can learn anything he/she set his/her mind to. That makes me love self learning and also have the zeal to keep on moving forward even when every bone in my body is telling me otherwise. I am presently an intern in startdotng who has been supporting us all the way and that makes me want to do more than just go and learn. I want to make an impact...', 0, '2020-05-08 17:03:58'),
(29, 'Ojukwu Chibuzor', 'chibuzor.ojukwu@gmail.com', '09017235152', 'https://www.linkedin.com/in/phirmware/', 'DevOps', '', 'Rivers', 'Unemployed', 'My name is Ojukwu Chibuzor, I am a student of the university of portharcourt, I am also a fullstack developer using languages and frameworks like javascript, typescript, angular, nodejs and Go, I am also looking forward to learn and improve in the devOps field learning configuration orchestration and provisioning tools like ansible, kubernetes and terraform. I would love to be a part of this internship so I can grow my portfolio, learn a lot, collaborate, network and also meet a lot of people.', 0, '2020-05-08 16:59:38'),
(30, 'Wekwa Victory Chiamaka', 'victorywekwa@gmail.com', '09045540149', 'https://www.linkedin.com/in/victory-chiamaka-wekwa-102b88133', 'Backend', '', 'Rivers', 'Unemployed', 'Hello, My name is Victory Wekwa. A recent graduate of Petroleum Engineering, University of Port Harcourt. I started learning how to code personally in January 2020 and then joined the start.ng internship which further improved my learning and added more to my success story. I am passionate about personal development and committed to learning and growing.', 0, '2020-05-08 17:16:39'),
(31, 'Uchendu Samuel uche', 'samueluchendu47@gmail.com', '08077056296', 'https://github.com/samueluchendu/Samueluchendu/', 'Backend', '', 'Ogun', 'Employee', 'My name is  Uchendu Samuel uche, a graduate of National Open University of Nigeria. A team player and am passionate about learning and improve on myself.', 0, '2020-05-08 17:33:27'),
(32, 'Maryam Bello ', 'bellomaryam351@gmail.com', '08102749911 ', 'https://www.github.com/marybello ', 'Backend, Frontend, UI/UX Design', '', 'Lagos', 'Unemployed', 'I am a biochemistry graduate who has developed passion in programming and wish to pursue a career in it. I love new challenges and that\'s one of the reason I chose programming. I am pretty good with html5 and css3 and basic Javascript. I want to learn more, become a senior software engineer and make a difference ', 0, '2020-05-08 17:53:39'),
(33, 'Asinmiyu Jamiu Olalekan', 'asinmiyujamiu@gmail.com', '07064904957', 'http://linkedin.com/in/asinmiyu-jamiu-1b83381a7', 'Backend, Frontend', '', 'Osun', 'Recently Employed (3 months or less)', 'I am kind of person who loves learning and I always develop myself every single day.', 0, '2020-05-08 17:30:49'),
(34, 'EMMANUEL GABRIEL', 'contacteghosa@gmail.com', '08158406306', 'https://www.linkedin.com/in/emmanuel-eghosa-gabriel-2b7232129/', 'Backend', '', 'Lagos', 'Employee', 'I am a friendly, playful, jovial yet industrious person. I have always loved to code which made me start coding in 2019 but I never actually had that breakthrough. I felt with the good reputation and result of your company, I would be able to get that breakthrough I so deserved. To push myself further, I joined start.ng learning something new( the c# language) and it has been interesting I must say. I am looking forward to joining this internship and growing with you guys', 0, '2020-05-08 17:58:08'),
(35, 'Chukwuemeka Collins Anyanwu ', 'Eme42c@gmail.com', '07033548895', 'https://ccanyanwu.github.io/bioData/', 'Frontend', '', 'Rivers', 'Unemployed', 'I\'m passionate about using technology in solving real world problems in creative manner and I\'m looking forward to this internship to further hone skills gotten over the years to greater effect. I never give up. ', 0, '2020-05-08 17:58:31'),
(36, 'Andrew Gabriel Osabuede', 'buedgabby@gmail.com', '07032118136', 'https://www.linkedin.com/in/andrew-gabriel-1bb1ab1a5/', 'Backend', '', 'Lagos', 'Self-employed', 'I\'m Andrew Gabriel, i live in lagos state and  am a backend developer,i started learning backend development with python(django) less than a year now, i\'m a trustworthy dedicated and eager to learn person, in a family of 6, 4 brothers with my mom and dad .\r\n', 0, '2020-05-08 18:04:31'),
(37, 'Abdulkareem Mustapha ', 'aphatheology@gmail.com', '08107371388', 'https://www.linkedin.com/in/abdulkareem-mustapha', 'Frontend', '', 'Ogun', 'Unemployed', 'I am a Civil Engineering student in Funaab. Learning Software Development is what I feel I\'m passionate about and I\'ve been doing my best in balancing it with my course of study in the University. ', 0, '2020-05-08 18:16:31'),
(38, 'Nworie Chukwuemeka', 'chukwuemekalivenus@gmail.com', '09035015508', 'https://www.linkedin.com/in/nworie-chukwuemeka-929405178', 'Frontend', '', 'Lagos', 'Unemployed', 'My name is a Nworie chukwuemeka known as JAYFRESH  2020 startng intern I want to learn scale up in the tech industry i am really ready for this thank you.', 0, '2020-05-08 17:19:39'),
(40, 'Adesina oluwatobi', 'oluwatobi275@gmail.com', '08103674650', 'https://www.linkedin.com/in/emmyola-adex-b50337185', 'Backend', '', 'Lagos', 'Employee', 'I am the name mention above, am a young man of age went to National open university of Nigeria study Mathematics and Computer Science taken this internship is to advance my career in programming looking forward to become a developer.', 0, '2020-05-08 18:22:26'),
(41, 'Damilola Babalola', 'teminidami@yahoo.co.uk', '07034707018', 'https://dharmyx.github.io/My-CV/#Damilola', 'Frontend', '', 'Lagos', 'Employee', 'Damilola is an aspiring front-end web developer. He\'s a cool, calm composed individual who is ready to learn and explore, open-minded and objective. I am highly motivated and a positive thinker.', 0, '2020-05-08 18:27:31'),
(42, 'Betty Bada', 'badabee440@gmail.com', '09060435115', 'https://www.linkedin.com/in/bettybada/', 'Frontend', '', 'Lagos', 'Employee', 'I am a tech enthusiast who has an interest in front end development. I currently work as a product marketer and would like to have a career as a frontend developer very soon. I have dedicated a few hours a day consistently for the past few months and I am ready to make the necessary sacrifices in order to achieve my goals. I believe this program would put me on the right path and help me get to where I need to be.', 0, '2020-05-08 17:52:29'),
(43, 'Emmanuel Owojori B', 'emmanuelboluwajib1@gmail.com', '09012968320', 'https://github.com/', 'DevOps', '', 'Lagos', 'Employee', 'f', 2, '2020-05-08 18:41:12'),
(44, 'Maryam Bello ', 'Hassananafiu@gmail.com', '08102749911', 'https://www.github.com/marybello', 'Backend, Frontend, UI/UX Design', '', 'Lagos', 'Self-employed', 'I am a biochemistry graduate who has passion for programming and want to pursue a career in the field. I love challenges which is why I find programming very interesting and good for me. I aspire to become a renowned software developer..I am smart and goal oriented. I\'m pretty good at html5 and css3 and basic Javascript. And I\'m eager to learn more and develop my skills in order to fulfill my dreams. ', 0, '2020-05-08 18:42:17'),
(45, 'Emmanuel Olajide', 'emmanuelolajide@rocketmail.com', '07051866391', 'http://linkedin.com/in/emmanuel-olajide-1a0396104', 'Frontend, UI/UX Design', '', 'Lagos', 'Freelance', 'I’m a graduate of Computer technology from babcock university.\r\nI’m passionate about tech and I’m interested in gaining experience.', 0, '2020-05-09 08:05:38'),
(46, 'Ebuka Abraham', 'buka4rill@gmail.com', '08108593199', 'https://www.linkedin.com/in/ebuka-abraham-2a5bb171/', 'Backend', '', 'Lagos', 'Employee', 'I am a frontend engineer seeking to explore back end engineering', 0, '2020-05-09 08:06:12'),
(47, 'Akinkunmi Michael Temitope ', 'miketemi2017@gmail.com', '09066665431', 'http://linkedin.com/in/akinkunmi-michael-temitope-2246881a3', 'UI/UX Design', '', 'Lagos', 'Unemployed', 'I’m Highly creative and multitalented Designer with extensive experience in UI/UX design.\r\nI\'m a dynamic team player with well-developed written and verbal communication abilities. Passionate and inventive creator of innovative problem solving strategies; accustomed to performing in deadline-driven environments.', 0, '2020-05-09 08:24:50'),
(48, 'AMAJOR UGOCHUKWU CHRISTIAN', 'maximmajor4us@gmail.com', '07068051646', 'https://www.linkedin.com/in/ugochukwu-amajor-7179b5149', 'Frontend', '', 'Bauchi', 'Unemployed', 'I am an energetic, ambitious person who has developed a mature and \r\nresponsible approach to any task that I undertake or situation that I am presented \r\nwith. As a graduate in Electrical Electronics Engineering with several years’ worth of \r\nexperience in Electrical/Electronic Circuit Designs, installation, Computer\r\nTroubleshooting/Repair and maintenance. I am excellent in working with others to \r\nachieve a certain objective on time and with excellence.\r\n', 0, '2020-05-09 08:31:52'),
(49, 'Opeyemi fowose', 'opeyemi.fowose@gmail.com', '09035116412', 'https://docs.google.com/document/d/1Eav6FYaMaYoM9CJkgqOZfsMSJnQDeyVTovGvTisXoD8/edit?usp=sharing', 'Frontend', '', 'Delta', 'Self-employed', 'Some months ago, I would have called myself a newbie to software development, but all thanks to startdotng that granted the beginners badge. I am into cleaning service (laundry and house cleaning), I call myself a clean agent. I am pumped up about this, can\'t wait to meet mentors and interns alike, and can\'t wait to advance my career as a developer.', 0, '2020-05-09 08:43:51'),
(50, 'Deborah Ologundudu', 'dhebbieu@gmail.com', '+2348138183185', 'https://www.linkedin.com/in/deborah-ologundudu-03b10114a', 'UI/UX Design', '', 'Lagos', 'Unemployed', 'I graduated with a degree in Mathematics last year. I choose that course, because I\'ve always been interested in solving problems. I Design to solve problems.', 0, '2020-05-09 08:53:21'),
(51, 'Emmanuel Taiwo ', 'taiwoo431@gmail.com', '08134299696 ', 'https://www.linkedin.com/in/taiwo-emmanuel-192b67103/', 'Frontend', '', 'Ogun', 'Unemployed', 'I studied microbiology in school, but I\'ve always wondered how web applications and websites function. Until Start.ng, all I knew was html basics nothing else but in the past 2-3 months and I intend to keep learning all the way to HNG internship. I\'m aspiring to become a full stack developer. ', 0, '2020-05-09 09:07:29'),
(52, 'Ajanaku Temitope Grace ', 'gracetemitope14@gmail.com', '08081369170', 'https://www.linkedin.com/mwlite/in/ajanaku-temitope-427778199#search', 'Frontend', '', 'Edo', 'Unemployed', 'My name is Temitooe Grace, a female Frontend developer I’m training. Also a student in University of Benin. \r\n\r\nLooking forward to working on projects and most especially learning through rigorous drilling. Thanks for the opportunity ', 0, '2020-05-09 08:40:52'),
(53, 'Patrick Timothy Njoli', 'patimjoli@gmail.com', '08031370465', 'https://www.linkedin.com/in/ogmaro', 'Backend', '', 'Federal Capital Territory', 'Unemployed', 'I\'m a quick learner of modern and creative technologies who want to build a career in the world of technology.', 0, '2020-05-09 09:05:43'),
(54, 'Anagwu Brain Philemon', 'philbrainy@gmail.com', '07069501730', 'https://github.com/PhilemonBrain', 'Backend', '', 'Delta', 'Unemployed', 'I am an aspiring BackEnd Programmer. I started learning how to code 5 months ago when i had an accident and broke my leg. I hope to get better with the program.', 0, '2020-05-09 09:44:03'),
(55, 'Nwigwe Ifeanyi Michael', 'rubzyg@gmail.com', '08168325437', 'http://linkedin.com/in/ifeanyi-nwigwe-25945993', 'Backend', '', 'Lagos', 'Freelance', 'I have a Bsc in computer science, I am adept with the Wordpress tech and I am currently learning Python, django and JavaScript. I have worked as an IT support and also as a Wordpress developer. ', 0, '2020-05-09 10:12:27'),
(56, 'tom tim', 'tom@gmail.com', '058847837847', 'http://test', 'Backend', 'Albania', '', 'Employee', 'testing tom tim', 0, '2020-05-09 22:31:27'),
(57, 'John Ebri', 'newnew@yahoo.com', '07030601520', 'http://test', 'Backend', 'Brazil', 'Lagos', 'Employee', 'tester and ', 0, '2020-05-09 22:38:11'),
(58, 'mensah ', 'mensah@yahoo.com', '090998487884', 'http://test', 'Backend', 'Ghana', '', 'Employee', 'man from ghana', 0, '2020-05-09 22:46:23'),
(60, 'Emmanuel Owojori B', 'owojoriemmanuelb1@gmail.com', '09012968320', 'https://github.com/', 'Digital Marketing', 'American Samoa', '', 'Self-employed', 'jjj', 2, '2020-05-10 00:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `intern_experience`
--

CREATE TABLE `intern_experience` (
  `id` int(11) NOT NULL,
  `names` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stack` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `experience` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `intern_experience`
--

INSERT INTO `intern_experience` (`id`, `names`, `stack`, `image`, `experience`, `status`) VALUES
(8, 'Sam', 'DevOps', '', 'It was a great time going through the programme, there are a lot of things I learnt, things I won\'t have learnt on my own. I\'m glad I took part in the programme.', 1),
(12, 'Eniola', 'Backend', '', 'A must have experience! Don\'t miss the next one!', 1),
(18, 'Utibe Okon', 'Machine Learning', '', 'Interns get to work on real life projects, this beats hundreds of hours of watching tutorial videos. Highly recommended.', 1),
(20, 'Olatunji Fatai', 'Backend', '', 'I love HNG Internship', 1),
(50, 'Wale', 'Backend', 'uploads/interns/5dc0ad4b4492e6.52354261.jpg', 'Nice time it was ', 0),
(74, 'Emmanuel', 'Backend', 'uploads/interns/5eb5e85d252b69.81485784.png', 'Nice one', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `mentor_id` int(11) NOT NULL,
  `area_of_expertise` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `photo_url` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `link_to_github` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `link_to_linkedin` varchar(200) NOT NULL,
  `link_to_cv` varchar(200) NOT NULL,
  `why_interested` text NOT NULL,
  `current_state` varchar(50) NOT NULL,
  `employment_status` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL,
  `fb_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `dribble_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`mentor_id`, `area_of_expertise`, `photo_url`, `name`, `email`, `phone_no`, `link_to_github`, `link_to_linkedin`, `link_to_cv`, `why_interested`, `current_state`, `employment_status`, `status`, `timestamp`, `fb_url`, `twitter_url`, `dribble_link`) VALUES
(70, 'Frontend', 'images/uploads/mentors/5dc42cc08b40f7.55916976.jpg', 'Motunrayo Da-costa', 'motunrayodacosta@yahoo.com', '08120689072', 'https://github.com/Dacosta-M', 'https://www.linkedin.com/in/motunrayodacosta/', 'https://res.cloudinary.com/dxikrojwn/image/upload/v1573137564/Motunrayo_s_resume.pdf', 'To make an Impact', 'Lagos', 'https://twitter.com/Da_motun', 2, '2019-11-07 14:40:00', '', '', ''),
(71, 'Frontend | Backend', 'images/uploads/mentors/5dc42d46a985c6.96273925.png', 'Oluwatomisin Lalude', 'oluwatomisin1605@gmail.com', '08154332954', 'https://github.com/tomisinlalude', 'https://www.linkedin.com/in/oluwatomisinlalude/', 'https://drive.google.com/open?id=18g_-ejcU9grjrlt4_RcNhrNkjfZ19LJU', 'It\'s a win-win. Passion and knowledge.', 'Lagos', 'https://twitter.com/tomisinlalude', 2, '2019-11-07 14:42:14', '', '', ''),
(72, 'Machine-learning', 'images/uploads/mentors/5dc4337ce25c10.28510548.png', 'Edidiong Etuk Michael', 'edidiongmichael08@gmail.com', 'tel:09073679556', 'https://github.com/edeediong', 'https://linkedin.com/edeediong', 'https://github.com/edeediong', 'To help others attain better state', 'Lagos', 'https://www.twitter.com/edeediong', 2, '2019-11-07 15:08:44', '', '', ''),
(74, 'Frontend | Backend', 'images/uploads/mentors/5dc43964418c05.82306876.jpg', 'Ephraim Aigbefo', 'aigbefoephraim@yahoo.com', '07033771198', 'https://github.com/EphraimDev', 'https://www.linkedin.com/in/ephraim-aigbefo-21735064/', 'https://github.com/EphraimDev', 'It\'s my way of giving back to the community', 'Lagos', 'https://twitter.com/AigbefoEphraim', 2, '2019-11-07 15:33:56', '', '', ''),
(75, 'Frontend', 'images/uploads/mentors/5dc4430e5d4010.48319542.jpeg', 'Jeffrey Ogah', 'jeff.ogah@gmail.com', '07053439635', 'https://github.com/jeffogah', 'https://www.linkedin.com/in/jeffrey-ogah-55472216a/', 'https://res.cloudinary.com/jeffogah/image/upload/v1573143289/Jeffrey_Ogah_CV.pdf', 'Already mentoring', 'Akwa Ibom', 'https://twitter.com/jeff_ogah', 2, '2019-11-07 16:15:10', '', '', ''),
(76, 'UI/UX-Design | Digital-marketing', 'images/uploads/mentors/5dc44c18c14ca3.40275784.jpg', 'Obinna Okoh', 'wizyokoh@gmail.com', '+2347061940053', 'https://drive.google.com/open?id=1-EcnFpPsI9lq1IDJJUe62XNqMHoC2u_C', 'https://www.linkedin.com/in/obinna-okoh-181131186/', 'https://drive.google.com/open?id=118dNiTe2Zmm08myYCqsG_Qj6DjxWsbGi', 'I was once an intern at HNG internship 5', 'Enugu', 'https://twitter.com/x9tynine', 2, '2019-11-07 16:53:44', '', '', ''),
(78, 'UI/UX-Design', 'images/uploads/mentors/5dc481dae8d858.46832142.jpg', 'Patrick Aziken', 'onaziken@gmail.com', '08060419102', 'https://behance.net/skylarng89', 'https://linkedin.com/in/patrickaziken', 'http://cvmkr.com/gkGC', 'I love passing down knowledge acquired to others.', 'Lagos', 'https://twitter.com/skylarng89', 2, '2019-11-07 20:43:06', '', '', ''),
(79, 'Frontend | Backend', 'images/uploads/mentors/5dc48699f0f7c0.70457133.jpg', 'Asoluka Austin ', 'stracool9@gmail.com', '08167231071', 'https://www.example.com', 'https://trim.ng/austinasolukalinkedin', 'https://www.example.com', 'Give back to HNGi and grow with her.', 'Delta', 'Freelance', 2, '2019-11-07 21:03:21', 'https://www.facebook.com', 'https://twitter.com/sleekCodes', ''),
(84, 'Backend', 'images/uploads/mentors/5dc565871e4412.48923930.jpeg', 'Oluwapelumi Oluwaseyi', 'nathanoluwaseyi@gmail.com', '08122641382', '', '', 'https://github.com/eniayomi', 'To impact and learn with others ', 'Lagos', 'Employee', 1, '2019-11-08 12:54:31', 'https://facebook.com/techteel', 'https://twitter.com/techteel', ''),
(86, 'Frontend | Backend', 'images/uploads/mentors/5dc5786c96c391.41491810.jpg', 'Kelvin Chikezie', 'kevchike@gmail.com', '07036819092', '', 'https://www.linkedin.com/in/kevchikezie/', 'https://drive.google.com/drive/folders/1uCSYVcNgfm5LmRSn7eWB-U3DL4IokdzE', 'It\'s an avenue to add value to the lives of others', 'FCT', 'Employee', 2, '2019-11-08 14:15:08', 'https://www.facebook.com/kevchikezie', 'https://twitter.com/kevchikezie', ''),
(87, 'Frontend | Backend', 'images/uploads/mentors/5dc584054ad6a7.00632112.jpg', 'Idris Lawal', 'idriseun222@gmail.com', '08092992048', 'https://github.com/IDTitanium', 'https://linkedin.com/in/idris-lawal-oluwaseun', 'https://idrislawal.herokuapp.com', 'To Learn and To Guide', 'Lagos', 'Employee', 2, '2019-11-08 15:04:37', 'https://facebook.com/lawal.hidris', 'https://twitter.com/oluwaseunmi', ''),
(89, 'Backend', 'images/uploads/mentors/5dc58f391f3b93.34904650.jpg', 'Chiamaka Osumgba', 'osumgbachiamaka@gmail.com', '08168988303', 'https://github.com/osumgbachiamaka', 'https://www.linkedin.com/in/chiamaka-osumgba', 'https://drive.google.com/file/d/18SSfrpZVrhwADVSYvpA0z2KRMcQJCfy_/view?usp=drivesdk', 'While mentoring you learn, it\'s a growth process.', 'Abia', 'Unemployed', 2, '2019-11-08 15:52:25', 'https://www.facebook.com/osumgba.chiamaka', 'https://twitter.com/KindnessOsumgba', ''),
(90, 'Frontend | UI/UX-Design', 'images/uploads/mentors/5dc591568dc4d0.39615545.png', 'Iheonye Chukwuemeka', 'kingsleyiheonye@gmail.com', '08161151097', 'https://github.com/sophisticateddev', 'https://www.linkedin.com/in/chukwuemeka-iheonye-03089ba6/', 'https://drive.google.com/open?id=1EhD4QF30eB4cbBaMuCzAmZ5p6-ci9JJt', 'I love Knowledge Sharing', 'Lagos', 'Employee', 2, '2019-11-08 16:01:26', 'https://www.facebook.com/chukwuemeka.iheonye', 'https://twitter.com/kingsleyiheonye', 'https://dribbble.com/sophisticateddev'),
(91, 'Backend', 'images/uploads/mentors/5dc5b95f0a6fc6.84833354.jpg', 'Chinedu Ebinim', 'enoch4real7@gmail.com', '08064979380', 'https://github.com/neydoo', '', 'https://drive.google.com/open?id=1r1pBOWyc6Zt3-vBTI8fa7j11xfS19cDy', 'it\'s my very little way of giving back', 'Lagos', 'Employee', 2, '2019-11-08 18:52:15', 'https://web.facebook.com/neydoo', 'https://twitter.com/ney_dooh', ''),
(92, 'Frontend', 'https://res.cloudinary.com/peterdbrainy/image/upload/v1573410225/id-edited.jpg', 'Onyebinamma Ebuka Peter', 'peterdbrainy5@gmail.com', '08164633970', 'https://github.com/ebukapeter55', 'https://www.linkedin.com/in/onyebinamma-ebuka-peter-002aa8136/', 'https://drive.google.com/file/d/1DyTilQ03hkn8n0yetXBbL3WouNynMJF0/view?usp=sharing', 'To share my knowledge and expertise.', 'Lagos', 'Employee', 2, '2019-11-08 19:27:34', 'https://web.facebook.com/onyebinamma.peter', 'https://twitter.com/peterdbrainy5', ''),
(93, 'Backend', 'images/uploads/mentors/5dc5c1bfe94d32.44905472.jpg', 'Wisdom Ebong', 'wisdomaebong@gmail.com', '08093684282', 'https://github.com/webong', 'https://www.linkedin.com/in/wisdomaebong/', 'https://www.linkedin.com/in/wisdomaebong/', 'Doing Good', 'Akwa Ibom', 'Employee', 2, '2019-11-08 19:27:59', 'https://web.facebook.com/wisdomaebong', 'http://twitter.com/wisdomaebong', ''),
(94, 'Mobile-Development', 'images/uploads/mentors/5dc5c5afeba136.27534788.jpeg', 'David Ibukun Kuforiji', 'ibukunkuforiji@gmail.com', '07039895841', 'https://github.com/Kufo2018', '', 'https://drive.google.com/open?id=1ILZ4toyFM7GkpMnM469Z59ZCROVQ61yF', 'To help build the tech ecosystem in Nigeria', 'Oyo', 'Employee', 2, '2019-11-08 19:44:47', 'https://web.facebook.com/david.kuforiji', 'https://twitter.com/Rhett0112358', ''),
(95, 'Backend', 'https://res.cloudinary.com/dx9dvkfeg/image/upload/v1573414847/samples/Dotun/IMG-20191110-WA0000.jpg', 'Amujo Oluwasomidotun', 'samuelamujo@gmail.com', '8137796995', 'https://www.github.com/AmujoDotun', 'https://www.linkedin.com/mwlite/me', 'https://www.amujodotun.com', 'I find Joy to help others with the little I know.', 'Oyo', 'Freelance', 2, '2019-11-08 19:46:27', 'https://www.facebook.com/amujodotun', 'https://mobile.twitter.com/amujo_dotun', ''),
(98, 'Backend', 'images/uploads/mentors/5dc698535be088.60517738.jpg', 'Oluwatoba Adeyefa', 'sainttobs@gmail.com', '07053842846', 'https://github.com/sainttobs', '', 'https://adeyefatoba.tech', 'To help mentor and train new developers', 'Ogun', 'Employed', 2, '2019-11-09 10:43:31', 'https://facebook.com/adeyefa.toba', 'https://twitter.com/adeyefa_codes', ''),
(100, 'Frontend', 'images/uploads/mentors/5dc8116b7651d4.42662504.png', 'Emmanuel', 'emmanuelboluwajib1@gmail.com', '09012986320', 'https://github.com/phileo', 'https://linkedin.com/emmanuel%20Owojori', 'https://linkedin.com/emmanuel%20Owojori', 'https://linkedin.com/emmanuel%20Owojori', 'Cross River', 'Employed', 1, '2019-11-10 13:32:27', 'https://linkedin.com/emmanuel%20Owojori', 'https://linkedin.com/emmanuel%20Owojori', ''),
(101, 'Frontend', 'https://res.cloudinary.com/dzm1ukvj1/image/upload/v1573414821/IMG_20180724_153717_4-min.jpg', 'John Ademoye', 'moyojohn188@gmail.com', '08186091742', 'https://github.com/Moyo75', '', 'https://res.cloudinary.com/dzm1ukvj1/image/upload/v1573406896/CV-Ademoye-EN.pdf', 'To help newbies in tech become world-class', 'Lagos', 'Unemployed', 2, '2019-11-10 19:55:57', 'https://web.facebook.com/profile.php?id=100005117209396', 'https://twitter.com/AdemoyeJohn', ''),
(102, 'Frontend | Backend | UI/UX-Design', 'images/uploads/mentors/5dc88919e36052.38448190.jpg', 'Alexander Garuba', 'alexandergaruba96@gmail.com', '09067967853', 'https://github.com/ahless007', 'https://www.linkedin.com/in/ahless/', 'https://github.com/ahless007', 'Love to help build of talents by empowering them', 'Lagos', 'Employed', 0, '2019-11-10 22:03:05', 'https://www.facebook.com/ahless007', 'https://twitter.com/ahless007', 'https://dribbble.com/ahless'),
(103, 'Frontend', 'images/uploads/mentors/5dc9368ab4d010.45987810.jpg', 'Edmund Ekott', 'edmund.timfon@gmail.com', '09039364141', 'https://github.com/edmund1645', 'https://www.linkedin.com/in/edmund-ekott-b03176165/', 'https://edmundekott.me', 'To help usher in the next billion creators', 'Akwa Ibom', 'Freelance', 0, '2019-11-11 10:23:06', 'https://www.facebook.com/kvng.edmund', 'https://twitter.com/26th_edmund', ''),
(104, 'Backend', 'images/uploads/mentors/5dea24e45461e2.59994238.jpg', 'Claret Nnamocha', 'devclareo@gmail.com', '+2349034116102', 'https://github.com/claretnnamocha/', 'https://www.linkedin.com/in/claretnnamocha/', 'https://drive.google.com/open?id=1P5DO3nyBqiTErcWFrPZC2H6Yoq3-TkciaXkMaFQcfzw', 'Mentoring people, makes me a better developer', 'Imo', 'Employed', 0, '2019-12-06 09:52:36', 'https://web.facebook.com/claretnnamocha', 'https://twitter.com/claretnnamocha/', '');

-- --------------------------------------------------------

--
-- Table structure for table `mentors_form_status`
--

CREATE TABLE `mentors_form_status` (
  `id` int(11) NOT NULL,
  `form_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `form_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mentors_form_status`
--

INSERT INTO `mentors_form_status` (`id`, `form_name`, `form_status`) VALUES
(1, 'Mentors Registration form', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `ref` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `names` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'new',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `ref`, `names`, `email`, `phone`, `amount`, `status`) VALUES
(1, '19110', 'Ola', 'sirhollyfat@gmail.com', '08155771172', '5000', 'new'),
(2, '46606', 'Ola', 'sirhollyfat@gmail.com', '08155771172', '5000', 'new'),
(3, '03166', 'Olatunji Fatai', 'sirhollyfat@gmail.com', '08130327697', '10000', 'new'),
(4, '43739', 'Emmanuel', 'kenny4all40@gmail.com', '09073679556', '86', 'new'),
(5, '69793', 'Emmanuel', 'kenny4all40@gmail.com', '09012986320', '62', 'new'),
(6, '69454', 'emmanuel', 'kenny4all40@gmail.com', '09012986320', '3000', 'new'),
(7, '86361', 'Ibrahim Oluwapeluwa', 'Ipeluwa@gmail.com', '09052220341', '100', 'new'),
(8, '73348', 'Ibrahim Oluwapeluwa', 'Ipeluwa@gmail.com', '+2349052220341', '200000', 'new'),
(9, '00282', 'JOHN EBRI', 'john.ebri@yahoo.com', '07030601520', '44', 'new'),
(10, '68403', 'Emmanuel Owojori', 'emmanuelboluwajib1@gmail.com', '912968320', '500', 'new'),
(11, '67937', 'Seyi Onifade', 'seyi@hng.tech', '08160614229', '20000', 'new'),
(12, '53732', 'Edidiong Etuk Michael', 'superadmin@hngi7.com', '09012986320', '3000', 'new'),
(13, '71367', 'Emmanuel', 'superadmin@hngi7.com', '09012986320', '3000', 'new'),
(14, '43727', 'Emmanuel', 'superadmin@hngi7.com', '09012986320', '3000', 'new'),
(15, '31588', 'Emmanuel', 'superadmin@hngi7.com', '09012986320', '3000', 'new'),
(16, '63940', 'Emmanuel', 'superadmin@hngi7.com', '09012986320', '3000', 'new'),
(17, '52515', 'Emmanuel', 'seie@gmail.com', 'tel:09073679556', '3000', 'new'),
(18, '61216', 'Emmanuel', 'superadmin@hngi7.com', '09012986320', '3000', 'new'),
(19, '50043', 'Emmanuel', 'admin@admin.com', '08102562103', '3000', 'new'),
(20, '80820', 'Emmanuel', 'superadmin@hngi7.com', '09012986320', '3000', 'new'),
(21, '77595', 'Emmanuel', 'superadmin@hngi7.com', 'tel:09073679556', '3000', 'new'),
(22, '47132', 'Yhh', 'oij@ijj.com', '656788', '50', 'new'),
(23, '60131', 'Jamesmagma', 's.z.y.m.anskiashley5@gmail.com', '82826382791', '145434', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `reg_form_status`
--

CREATE TABLE `reg_form_status` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reg_form_status`
--

INSERT INTO `reg_form_status` (`id`, `name`, `status`) VALUES
(1, 'Registration Form Status', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resetpassword`
--

INSERT INTO `resetpassword` (`id`, `email`, `code`) VALUES
(5, 'john.ebri@yahoo.com', '15df0b9de11653'),
(6, 'john.ebri@yahoo.com', '15df0ba040bd80'),
(7, 'john.ebri@yahoo.com', '15df0ba19c79a8'),
(8, 'johnebri18@gmail.com', '15e569f8207b84'),
(9, 'john.ebri@yahoo.com', '15e5762033c5da'),
(10, 'john.ebri@yahoo.com', '15e57e55d7509f'),
(11, 'johnebri18@gmail.com', '15e57e56994da1'),
(12, 'emmanuelboluwajib1@gmail.com', '15eb59473a4976'),
(13, 'owojoriemmanuelb1@gmail.com', '15eb595c93fe27'),
(14, 'emmanuelboluwajib1@gmail.com', '15eb59765d2ef3'),
(15, 'owojoriemmanuelb1@gmail.com', '15eb59870b775f'),
(16, 'owojoriemmanuelb1@gmail.com', '15eb5988030bea'),
(17, 'joshua.moshood@gmail.com', '15eb5991dbd817');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Moderator');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `sponsor_id` int(11) NOT NULL,
  `sponsor_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor_logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `business_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `about_you` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`sponsor_id`, `sponsor_name`, `sponsor_email`, `sponsor_logo`, `business_address`, `about_you`) VALUES
(25, 'John Doe', 'kenny4all40@gmail.com', 'uploads/sponsor-img/C360_2019-02-07-15-31-37-511.jpg', 'No2', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `email`) VALUES
(1, 'sirhollyfat@gmail.com'),
(2, 'kenny4all40@gmail.com'),
(4, 'agboola.eniola4031@gmail.com'),
(5, 'ipeluwa@gmail.com'),
(6, 'philiponyeador@gmail.com'),
(8, 'john.ebri@yahoo.com'),
(9, 'emmanuelboluwajib1@gmail.com'),
(10, 'e@gmail.com'),
(11, 'get@gmail.com'),
(12, 'emily@gmail.com'),
(13, 'emily@gmail'),
(14, 'emily'),
(15, 'railsting@gmail.com'),
(16, 'dfff'),
(17, 'abc@yahoo.com'),
(18, 'lilianovrawah@gmail.com'),
(19, 'jljlkj'),
(20, 'me@yahoo.com'),
(21, 'k@gmail.com'),
(22, 'eroncist@gmail.com'),
(23, 'sam'),
(24, 'sam@g.com'),
(25, 'sammy@g.com'),
(26, 'isaac.adegboye@yahoo.com'),
(27, 'eferhamamus@gmail.com'),
(28, 'jeffgraphics'),
(29, 'jeffgraphics@gmnail.com'),
(30, 'jeffgraphics@gmail.com'),
(31, 'dgdgdg'),
(32, '000@ggggg'),
(33, '0055@9999'),
(34, 'main@gmail.com'),
(35, 'kkkg@gmail.com'),
(36, 'hdgdgdgdi@gmail.com'),
(37, 'kilomgarpb@gmail.com'),
(38, 'hello@g.com'),
(39, 'serigabriel@yahoo.com'),
(40, 'gslinkinc@gmail.com'),
(41, 'unachukwu.samuel@gmail.com'),
(42, 'olayinkareal.fatai9@gmail.com'),
(43, 'testing111@yahoo.com'),
(44, 'wu@gmail.com'),
(45, 'iamsarscode@gmail.com'),
(46, 'augustineofoegbu1@gmail.com'),
(47, 'akomolafeayoyinka@gmail.com'),
(48, 'timothymayor24@gmail.com'),
(49, 'olasumboeniola1@gmail.com'),
(50, 'pat8k4u@gmail.com'),
(51, 'dauda933@gmail.com'),
(52, 'ddd@ddd.ddd'),
(53, 'akinwaleayomide39@gmail.com'),
(54, 'ogbeidemurphy@gmail.com'),
(55, 'akinsholarufox@gmail.com'),
(56, 'nzubeanthony4@gmail.com'),
(57, 'nwankwohenry9@gmail.com'),
(58, 'my2017ustrip@gmail.com'),
(59, 'atomic1a5@gmail.com'),
(60, 'blqckmqnjames@gmail.com'),
(61, 'adedejiadam@gmail.com'),
(62, 'hilghsilk2damson@gmail.com'),
(63, 'c.iradukund@alustudent.com'),
(64, 'bestj2015.ne@gmail.com'),
(65, 'victoroluwatimileyin1@gmail.com'),
(66, 'iyiolasamuel44@gmail.com'),
(67, 'rachael.odetayo@yahoo.com'),
(68, 'juniormbogning@gmail.com'),
(69, 'toluenelarry@gmail.com'),
(70, 'samuelebeagu@gmail.com'),
(71, 'khadijatogunfemi@gmail.com'),
(72, 'tayorgudestryhero@gmail.com'),
(73, 'tunezmania@gmail.com'),
(74, 'tayorgudestryhero01@gmail.com'),
(75, 'egophillips@hotmail.com'),
(76, 'jimohrukayat08@gmail.com'),
(77, 'mercybassey683@gmail.com'),
(78, 'pascharissimon@gmail.com'),
(79, 'opraise139@gmail.com'),
(80, 'koladeodutoye9913@gmail.com'),
(81, 'princesskarencummings@gmail.com'),
(82, 'enweazu.daniel@gmail.com'),
(83, 'vipulaggarwal099@gmail.com'),
(84, 'charlesclinton2003@gmail.com'),
(85, 'bazzanapalowo@gmail.com'),
(86, 'davidi.ohis25@gmail.com'),
(87, 'zlayiwola@gmail.com'),
(88, 'macmartins081@gmail.com'),
(89, 'teminidami@yahoo.co.uk'),
(90, 'nlewohaa@gmail.com'),
(91, 'olafimihana@gmail.com'),
(92, 'gentlekboy@gmail.com'),
(93, 'manuelckay@gmail.com'),
(94, 'Promise.course@gmail.com'),
(95, 'salsod1st@gmail.com'),
(96, 'abiolataiwo36@yahoo.com'),
(97, 'bellomaryam351@gmail.com'),
(98, 'sofoluweseun@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `certificate_request`
--
ALTER TABLE `certificate_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `countdown`
--
ALTER TABLE `countdown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox_messages`
--
ALTER TABLE `inbox_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
  ADD PRIMARY KEY (`intern_id`);

--
-- Indexes for table `intern_experience`
--
ALTER TABLE `intern_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`mentor_id`);

--
-- Indexes for table `mentors_form_status`
--
ALTER TABLE `mentors_form_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_form_status`
--
ALTER TABLE `reg_form_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `certificate_request`
--
ALTER TABLE `certificate_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `countdown`
--
ALTER TABLE `countdown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inbox_messages`
--
ALTER TABLE `inbox_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
  MODIFY `intern_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `intern_experience`
--
ALTER TABLE `intern_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `mentor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `mentors_form_status`
--
ALTER TABLE `mentors_form_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reg_form_status`
--
ALTER TABLE `reg_form_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `sponsor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
