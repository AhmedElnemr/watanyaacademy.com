-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2021 at 01:13 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u912101198_watanyaacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `main_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_department_id`, `main_image`, `title`, `contents`, `created_at`, `updated_at`) VALUES
(1, 1, 'activitys/cHTrMJCfJWhdmg7FZrhngB6EVyLJEmKvhxsPRCNS.jpg', 'الندوات والملتقيات', 'في اعتقاد الأكاديميه الوطنية للعلوم الشاملة أن عقد هذه الندوات والمؤتمرات يمثل الهواء النقي الذي يجدد الحياة الثقافية، وبدون هذه الندوات والمؤتمرات تفتقد الحياة الثقافية عاملاً مهماً من عوامل تنشيطها وتجديدها وتنقيتها من الأفكار والتعميمات الخاطئة، كما أن الندوات والمؤتمرات الثقافية تتيح طرح الأفكار الجديدة وتجريبها بدون خوف أو وجل اعتماداً على جمهور الحضور الذي يناقش ويجادل ويفند ويطور، وتتيح هذه الندوات والمؤتمرات إمكانية التواصل بين المفكرين والباحثين والنقاد بما يؤدي للإطلاع المباشر على نتاجاتهم الفكرية، والقراءة الواعية لها، وتوسيع دائرة انتشارها.', '2021-04-02 22:27:41', '2021-05-04 17:30:11'),
(6, 2, 'activitys/0UJ7yvZvfpIthJCTTviGZKzwgc8ko5oiz16k67QW.jpg', 'المؤتمرات داخل وخارج مصر', 'إن عقد هذه الندوات والمؤتمرات يمثل الهواء النقي الذي يجدد الحياة الثقافية. وبدون هذه الندوات والمؤتمرات تفتقد الحياة الثقافية عاملاً مهماً من عوامل تنشيطها وتجديدها وتنقيتها من الأفكار والتعميمات الخاطئة. كما أن الندوات والمؤتمرات الثقافية تتيح طرح الأفكار الجديدة وتجريبها بدون خوف أو وجل اعتماداً على جمهور الحضور الذي يناقش ويجادل ويفند ويطور. وتتيح هذه الندوات والمؤتمرات إمكانية التواصل بين المفكرين والباحثين والنقاد بما يؤدي للإطلاع المباشر على نتاجاتهم الفكرية، والقراءة الواعية لها، وتوسيع دائرة انتشارها.', '2021-04-03 00:39:06', '2021-05-04 17:38:01'),
(8, 5, 'activitys/zQ9eEYHiE8mhE8tfjj2It6hFm8oBoH4QuZb117rO.png', 'زيارات رسمية', 'نؤمن إيماناً لا شك فيه بأن الزيارات الرسميه سواء لكبار العلماء والمفكرين أو حتي للمؤسسات المدنية من الأهمية بمكان لاسيما وأنها تقرب المسافات بين التوجهات الفكريه مما يثمر وينتج عنه هذه المشاركات العلمية والمعرفيه بين كثير من الكيانات المهمه', '2021-05-04 18:06:09', '2021-05-04 18:06:09'),
(9, 6, 'activitys/vHetPk3pNs6iE0EoRJikiIv5HDDMByx6e5T9ZnYH.jpg', 'لقاءات تلفزيونيه', 'نشاطات الأكاديميه في التليفزيون المصري والعربي', '2021-05-15 01:11:23', '2021-05-15 01:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `activity_departments`
--

CREATE TABLE `activity_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ليس ضرورى',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_departments`
--

INSERT INTO `activity_departments` (`id`, `title`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'ندوات وملتقيات', NULL, '2021-04-02 22:17:09', '2021-05-15 01:06:40'),
(2, 'مؤتمرات', NULL, '2021-04-02 22:17:18', '2021-04-02 22:18:13'),
(5, 'زيارات', NULL, '2021-04-15 22:38:20', '2021-04-15 22:38:20'),
(6, 'لقائات تلفزيونية', NULL, '2021-04-15 22:38:20', '2021-05-15 01:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `admin_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `group_id`, `admin_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$1VE/l.naiKV/Opgu6xl79efaNTNXyKTfxqhnEcaZTrxUTigYKinsy', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'admin2', 'admin2@admin2.com', '$2y$10$xRTie3BfIn3onzwj0A37YuLsWvYiJ73dQ7DgLB161j9fDup2D8Jc6', NULL, NULL, NULL, NULL, '2021-03-29 21:23:19', '2021-03-29 21:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key_word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_contents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `key_word`, `url_name`, `title`, `contents`, `background`, `video`, `color_title`, `color_contents`, `created_at`, `updated_at`) VALUES
(1, 'home_bannar', NULL, 'أهلا بك فى الأكاديمية الوطنية للعلوم الشاملة', 'بتسجيلك فى برامج الأكاديمية الوطنية للعلوم الشاملة تتعلم العلم بكل يسر وسهولة علي أيدي علماء ومفكرين متخصصين في كافة العلوم المختلفه من خلال الوسائل المتقدمة المعتمدة فى برنامج الأكاديمية', 'banners/V35CGppKHuMimNy0AXzYM8vkwME18bz9UM5XckgB.jpg', 'banners/tPJNCunDpQJIcBW2yMYIlZAFOLGZvyyVp3YzExAK.mp4', '#ede8e8', '#ebe5e5', NULL, '2021-05-12 10:35:24'),
(2, 'vision', NULL, 'صفحة رؤية الأكاديمية', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/lV760RFwfDYfoNMe2nhrQ1LHhN6AU7dmFu9HvrmW.jpg', 'banners/tPJNCunDpQJIcBW2yMYIlZAFOLGZvyyVp3YzExAK.mp4', NULL, NULL, NULL, '2021-05-02 23:10:43'),
(6, 'word_of_prestent', '#', 'صفحة كلمة رئيس الاكاديمية', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/7klw05VfADcvJZLOnMkPvYqwIXKPNBp3OJVOfzQH.jpg', NULL, NULL, NULL, '2021-04-03 13:45:16', '2021-05-07 17:06:41'),
(7, 'lessons', '#', 'صفحة الكورسات', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/IuleAiwrIZKoEsyPDkSbxBhn4BZVBiQYqlcsvXIe.jpg', NULL, NULL, NULL, '2021-04-03 13:45:52', '2021-05-02 23:49:37'),
(8, 'team_work', '#', 'أعضاء هيئة التدريس', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/uKUwK4XPm2Oj7fGr9aVvkgP0RyKwP3lBHVYCy2re.png', NULL, NULL, NULL, '2021-04-03 13:46:50', '2021-05-13 15:40:00'),
(9, 'courses', '#', 'كورسات ودورات مفتوحة', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/EMbAPENCML9f4vHdlIHhtCgYJOKUuPOxEFpUl8qq.jpg', NULL, NULL, NULL, '2021-04-03 13:48:23', '2021-05-03 23:04:24'),
(10, 'how_to_study', '#', 'كيفيه الدراسة', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/UBom15nEa5OY6rGHGovHV2GnljCmOqZigj6PCNnI.jpg', NULL, NULL, NULL, '2021-04-03 13:49:30', '2021-05-03 23:09:41'),
(11, 'how_to_subscribe', '#', 'كيفيه الالتحاق', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/7sZVtDmGRKQZUPCIKMk8T75oEB0fcuSYVgGPqaCm.jpg', NULL, NULL, NULL, '2021-04-03 13:50:37', '2021-05-02 23:24:13'),
(12, 'news', '#', 'الاخبار', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/P0mqxpS6i6Dc0aETaMEwWSrWpmsEJqL0ukBr0VQZ.jpg', NULL, NULL, NULL, '2021-04-03 13:51:24', '2021-05-02 23:31:10'),
(13, 'activities', '#', 'الانشطه', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/pSOcR3cjz0A816CMHZfjBJ8G0Y2h0X1XI4C9vNQt.jpg', NULL, NULL, NULL, '2021-04-03 13:51:57', '2021-05-02 23:38:56'),
(15, 'contact_us', '#', 'تواصل معنا', 'بتسجيلك فى برنامج الأكاديمية الوطنية للعلوم الشاملة تتجاوز العقبات وتتعلم العلم بكل يسر وسهولة من خلال الوسائل المتقدمة المعتمدة فى برنامج الأكاديمية ...', 'banners/p6aohghDnQE1efoFHIDR2YSXhU3XWDrd4fbXlaaD.jpg', NULL, NULL, NULL, '2021-04-11 21:51:39', '2021-05-02 23:40:44'),
(16, 'message', NULL, 'صفحة رسالة الأكاديمية', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/9LO7jS3czJjXPuewTR5D5Wz4dKFMoUdu4QYwoS1A.png', NULL, NULL, NULL, '2021-04-16 17:14:39', '2021-05-02 23:46:57'),
(17, 'goals', NULL, 'صفحة أهداف الأكاديمية', 'و هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم', 'banners/ljZ7JAzDyqRRGJ7Fd77yZGxJZ1XxqOLN1JQoLlce.jpg', NULL, NULL, NULL, '2021-04-16 17:14:39', '2021-05-04 16:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'clients/K3dUO40bE5WEpR3jAuodYynoQI1ogrH3tSyW7xAK.png', '2021-04-14 14:08:53', '2021-04-17 15:36:38'),
(4, NULL, 'clients/VcQwiCdYMbxK5A2BBZRNiFez4Y1DRfIl6FqxOd8x.png', '2021-04-14 14:12:02', '2021-04-17 15:36:50'),
(5, NULL, 'clients/beMDWIhXQv5q72ca1KluqnKzR5bzqMSe2rNbDIoP.png', '2021-04-14 14:12:10', '2021-04-17 15:37:02'),
(6, NULL, 'clients/QfGxzlFkrLQx3UkxiNToZan94KQofrJkpLDflUpv.png', '2021-04-17 15:37:14', '2021-04-17 15:37:14'),
(7, NULL, 'clients/T4TGCtdlicx2JUkxRknWkvOwMLKXdSKZCDwHVMuy.png', '2021-04-17 15:38:25', '2021-04-17 15:38:25'),
(8, NULL, 'clients/u3GVP59wpQaoPbnbBre3rOHCNdAoI4LkvTKdM56G.png', '2021-05-01 17:29:17', '2021-05-01 17:29:17'),
(9, NULL, 'clients/M6DXsi9vVM8Br5IiLgX1gfYZvuHN2c4xcF2GoZSY.jpg', '2021-05-01 17:31:02', '2021-05-01 17:31:02'),
(10, NULL, 'clients/6ditHzBUHeJVqNOOQAb9yFTSvtT34g3fyskisnSi.png', '2021-06-04 21:02:03', '2021-06-04 21:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` enum('read','unread') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `phone`, `subject`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'mostafa', 'm@m.com', 'موقع جديد للأكاديمية الوطنية للعلوم الشاملة', NULL, NULL, NULL, '2021-04-11 22:06:05', '2021-04-11 22:06:05'),
(8, 'Den', 'info@godomainsite.com', 'TERMINATION OF DOMAIN watanyaacademy.com\r\nInvoice#: 481656\r\nDate: 2021-04-28\r\n\r\nIMMEDIATE ATTENTION REGARDING YOUR DOMAIN watanyaacademy.com IS ABSOLUTLY NECESSARY\r\n\r\nTERMINATION OF YOUR DOMAIN watanyaacademy.com WILL BE COMPLETED WITHIN 24 HOURS\r\n\r\nYour payment for the renewal of your domain watanyaacademy.com has not received yet\r\n\r\nWe have tried to reach you by phone several times, to inform you regarding the TERMINATION of your domain watanyaacademy.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://godomainsite.ga/?n=watanyaacademy.com&r=a&t=1619500450&p=v11\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN watanyaacademy.com WILL BE TERMINATED!\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://godomainsite.ga/?n=watanyaacademy.com&r=a&t=1619500450&p=v11\r\n\r\nYOUR IMMEDIATE ATTENTION IS ABSOLUTELY NECESSARY IN ORDER TO KEEP YOUR DOMAIN watanyaacademy.com\r\n\r\nThe submission notification watanyaacademy.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, '2021-04-27 07:14:17', '2021-04-27 07:14:17'),
(11, 'KennethAging', 'no-replysak@gmail.com', 'Good day!  watanyaacademy.com \r\n \r\nDid you know that it is possible to send business offer wholly lawfully? \r\nWe suggest a new unique way of sending appeal through feedback forms. Such forms are located on many sites. \r\nWhen such messages are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nalso, messages sent through feedback Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\n \r\nWe only use chat.', NULL, NULL, NULL, '2021-05-05 14:22:04', '2021-05-05 14:22:04'),
(12, 'Eric Jones', 'eric.jones.z.mail@gmail.com', 'My name’s Eric and I just came across your website - watanyaacademy.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like watanyaacademy.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=watanyaacademy.com', NULL, NULL, NULL, '2021-05-12 02:30:55', '2021-05-12 02:30:55'),
(13, 'Mazlan Selvi', 'no-replyNoirm@gmail.com', 'Dear Friend, \r\n \r\nMy names are Mr. Mezlan Selvi, a lawyer base in Kuala Lumpur - Malaysia. I have previously sent you an email regarding a transaction of US$13.5 Million left behind by my late client before his tragic death but no response from you. \r\n \r\nHowever, I am contacting you once again with strong believe that you will work /partner with me to execute this business transaction in good faith. Please if you are interested in proceeding with me, kindly respond to me via my private email mselvi@ponnusamylawassociates-my.com for more detailed information. \r\n \r\nAs a matter of fact, this transaction is 100% risk free and I look forward to your acknowledgement. \r\n \r\nRegards, \r\nMr. Mazlan Selvi \r\nEmail: mselvi@ponnusamylawassociates-my.com', NULL, NULL, NULL, '2021-05-13 20:06:46', '2021-05-13 20:06:46'),
(14, 'Mike Haig', 'no-replyExing@gmail.com', 'Good Day \r\n \r\nI have just verified your SEO on  watanyaacademy.com for its Local SEO Trend and seen that your website could use an upgrade. \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart enhancing your local visibility with us, today! \r\n \r\nregards \r\nMike Haig\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', NULL, NULL, NULL, '2021-05-14 18:58:44', '2021-05-14 18:58:44'),
(15, 'Mike Eddington', 'no-reply@google.com', 'Hi there \r\n \r\nI have just checked  watanyaacademy.com for its SEO Trend and saw that your website could use a push. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\nregards \r\nMike Eddington\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, '2021-05-16 02:40:10', '2021-05-16 02:40:10'),
(16, 'Sambo Dasuki', 'mmzxxz288@gmail.com', 'Dear Partner; \r\n \r\nI came across your email contact on Database; Where i was searching for a competent Partner who can handle a lucrative business for me as trustee and manager. I anticipate to read from you soon so I can provide you with more details. \r\n \r\nYours Sincerely, \r\nAlh. Sambo Dasuki \r\nmmzxxz288@gmail.com', NULL, NULL, NULL, '2021-05-18 19:15:17', '2021-05-18 19:15:17'),
(17, 'Yahoo', 'press@yahoo.com', 'Most profitable cryptocurrency miners has been released : \r\nDBT Miner: $7,500 (Bitcoin), $13,000 (Litecoin), $13,000 (Ethereum), and $15,000 (Monero) \r\n \r\nGBT Miner: $22,500 (Bitcoin), $39,000 (Litecoin), $37,000 (Ethereum), and $45,000 (Monero) \r\nRead more here : \r\nhttps://www.yahoo.com/now/bitwats-release-most-profitable-asic-195600764.html', NULL, NULL, NULL, '2021-05-20 17:41:50', '2021-05-20 17:41:50'),
(18, 'Mike Sykes', 'no-reply@google.com', 'Hi there \r\n \r\nI have just verified your SEO on  watanyaacademy.com for its SEO Trend and saw that your website could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nMike Sykes\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, '2021-05-23 02:23:06', '2021-05-23 02:23:06'),
(19, 'Dr Atef', 'atefbbss@yahoo.com', 'السلام عليكم\r\nاتمني الانضمام لسيادتكم حيث لدي خبرة اكثر من 25 عام فى مجال التدربس والتدريب وارسل لسيادتكم كل المستندات\r\n\r\nكيف سيكون المستقبل التكنولوجي لدولة الإمارات؟ كيف ستفتح الرقمنة الأبواب لفرص عمل جديدة؟ كيف يمكن للمهنيين تطوير مهاراتهم التقنية؟\r\n\r\n \r\n\r\nحوار تكنولوجي متعمق مع أحد أبرز قامات التكنولوجيا في دولة الإمارات، د.عاطف عباس (Dr. Atif Abdulhameed)، استشاري التحول الرقمي والذكاء الاصطناعي لأكثر من ٢٠ عامً. \r\n\r\n \r\n\r\nالحوار باللغة العربية: https://bit.ly/3suhPcW\r\n\r\n \r\n\r\nباللغة الإنجليزية: https://bit.ly/3qnUmIG', NULL, NULL, NULL, '2021-05-25 08:40:29', '2021-05-25 08:40:29'),
(20, 'Rajiv Michael', 'rajiindian3@gmail.com', 'Hello Dear, \r\n \r\nI am working directly with a private family portfolio that can provide funding for credible clients with feasible projects. Currently, we have investment funds for viable projects. \r\n \r\nThey are interested in the following: Institution, Library, Hospitals, Green energy, \r\nPower projects, Agriculture and Real Estate. They can also partner with your company on other projects of value. The interest rate and tenure are fantastic. \r\n \r\nYour response is most anticipated if this is of interest to you. Reach me on email: financial@eurocleargroups.email or rajiindian3@gmail.com \r\n \r\n \r\nKind regards, \r\n \r\nRajiv Michael \r\nFinancial Consultant \r\nWhatsApp: +15183802182 \r\nTelegram@ +12092482370 \r\nEuroclear Groups \r\nfinancial@eurocleargroups.email \r\nUrl: http://euroclear.com', NULL, NULL, NULL, '2021-05-25 18:20:14', '2021-05-25 18:20:14'),
(21, 'Tyler Becker', 'tyler@cryptosuite.info', 'Hey there its Tyler, \r\nDo you want to quit and just toss in the towel? \r\nYour ready to give up on this online income thingh huh? \r\nI have been there so many times I lost count. \r\nBut I knew that if I could find something that worked, then I would \r\nget the income I wanted. \r\nIts not time to quit, its time to just follow a simple step by step process. (Proof of this !!) \r\n \r\nGo Here To See How https://jvz8.com/c/1176113/294890 \r\n \r\nTalk Soon \r\n \r\nTyler', NULL, NULL, NULL, '2021-05-27 16:40:24', '2021-05-27 16:40:24'),
(22, 'CRYPTO LUX', 'reportmail11@protonmail.com', 'CRYPTO LUX is the only financial platform in the world to have anti-crime certification for cryptocurrency trading. Visit our website: https://luxcripto.com/ \r\n \r\nYou can invest and earn. \r\nYou can work with us. \r\nor contact us via WhatsApp at the following number:+ 202-830-3201', NULL, NULL, NULL, '2021-06-02 07:21:50', '2021-06-02 07:21:50'),
(23, 'Mike Gilbert', 'no-replyExing@gmail.com', 'Greetings \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Gilbert\r\n \r\nSpeed SEO Digital Agency', NULL, NULL, NULL, '2021-06-12 01:32:12', '2021-06-12 01:32:12'),
(24, 'Alexander Alan', 'alexander466alan@gmail.com', 'Looking for Facebook likes or Instagram followers? \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', NULL, NULL, NULL, '2021-06-17 12:36:08', '2021-06-17 12:36:08'),
(25, 'Mike Dodson', 'no-reply@google.com', 'Greetings \r\n \r\nI have just took an in depth look on your  watanyaacademy.com for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Dodson\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, '2021-06-19 12:07:33', '2021-06-19 12:07:33'),
(26, 'AL SAEED CORPORATION LLC', 'alsaeedcorporation963@gmail.com', 'We are AL SAEED CORPORATION LLC \r\nWe give out loans to individuals/companies at 2% interest rate annually. We are interested in financing projects of large volume. The repayment period is 1 year to 30 years. \r\nCONTACT US: \r\nE-mail: adelhamad@alsaeedcorp.com', NULL, NULL, NULL, '2021-06-19 15:28:14', '2021-06-19 15:28:14'),
(27, 'Ashlay Hazalton', 'ashlayhazalton36145@gmail.com', 'Hi, this is Chris. \r\nWho win all online casinos by using FREE BONUS. \r\n \r\nWitch mean, I don’t really spend money in online casinos. \r\n \r\nBut I win every time, and actually, everybody can win by following my directions. \r\n \r\neven you can win! \r\n \r\nSo, if you’re the person, who can listen to someone really smart, you should just try!! \r\n \r\nThe best online casino, that I really recommend is, Vera&John. \r\nEstablished in 2010 and became best online casino in the world. \r\n \r\nThey give you free bonus when you charge more than $50. \r\nIf you charge $50, your bonus is going to be $50. \r\n \r\nIf you charge $500, you get $500 Free bonus. \r\nYou can bet up to $1000. \r\n \r\nJust try roulette, poker, black jack…any games with dealers. \r\nBecause dealers always have to make some to win and, only thing you need to do is to be chosen. \r\n \r\nDon’t ever spend your bonus at slot machines. \r\nYOU’RE GONNA LOSE YOUR MONEY!! \r\n \r\nNext time, I will let you know how to win in online casino against dealers!! \r\n \r\nDon’t forget to open your VERA&JOHN account, otherwise you’re gonna miss even more chances!! \r\n \r\n \r\n \r\nOpen Vera&John account (free) \r\nhttps://bit.ly/3wZkpco', NULL, NULL, NULL, '2021-06-28 10:50:09', '2021-06-28 10:50:09'),
(28, 'SEO X Press Digital Agency', 'lovingmeaghan32@gmail.com', 'Good Day \r\n \r\n \r\nI have just analyzed  watanyaacademy.com for the  ranking keywords and saw that your website could use a boost. \r\n \r\n \r\nWe will increase your Ranks organically and safely, using only whitehat methods, \r\n \r\n \r\nIf interested, please email us \r\n \r\nsupport@digital-x-press.com \r\n \r\n \r\nregards \r\nMike Fisher\r\n \r\nSEO X Press Digital Agency \r\nhttps://www.digital-x-press.com', NULL, NULL, NULL, '2021-07-01 13:47:41', '2021-07-01 13:47:41'),
(29, 'Yasuhiro Yamada', 'info.rohtopharmaceutical@gmail.com', 'Hello, \r\n \r\n \r\nWith all due respect. If you are based in United States or Canada, I write to inform you that we need you to serve as our Spokesperson/Financial Coordinator for our company ROHTO PHARMACEUTICAL CO., LTD. and its clients in the United States and Canada. It\'s a part-time job and will only take few minutes of your time daily and it will not bring any conflict of interest in case you are working with another company. If interested reply me using this email address: admin@rohtopharmaceutical.jp \r\n \r\n \r\nYasuhiro Yamada \r\nSenior Executive Officer, \r\nROHTO Pharmaceutical Co.,Ltd. \r\n1-8-1 Tatsumi-nishi, \r\nIkuno-Ku, Osaka, 544-8666, \r\nJapan.', NULL, NULL, NULL, '2021-07-03 02:50:55', '2021-07-03 02:50:55'),
(30, 'Mike Marshman', 'alexiacrok32@gmail.com', 'Hi there \r\n \r\nIncrease your watanyaacademy.com Moz DA Score with us and get more visibility and exposure for your website. \r\nWe have tons of client`s feedbacks that this simple boost doubled their sales in a matter of weeks. \r\n \r\nMore info: \r\nhttps://www.monkeydigital.org/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.org/product/ahrefs-dr50-ur70-seo-plan/ \r\nhttps://www.monkeydigital.org/product/trust-flow-seo-package/ \r\n \r\n \r\nthank you \r\nMike Marshman', NULL, NULL, NULL, '2021-07-03 12:36:23', '2021-07-03 12:36:23'),
(31, 'Mike Jacobson', 'corradolan32@gmail.com', 'Howdy \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Jacobson\r\n \r\nSpeed SEO Digital Agency', NULL, NULL, NULL, '2021-07-07 16:08:29', '2021-07-07 16:08:29'),
(32, 'Nick Wilson', 'nick@saaytext.com', 'Hi Its Nick, \r\n \r\nWe have a business texting platform that will help your team engage customers, leads & past clients through texting. \r\n \r\nRates are $49 for 30,000 texts, which is under 0.002 per message. \r\n \r\nYou can bulk text your WHOLE LIST or send two-way texts and get replies. \r\n \r\n \r\nCheck it out @ http://SaayText.com \r\n \r\nThank you, \r\nNick', NULL, NULL, NULL, '2021-07-13 13:41:26', '2021-07-13 13:41:26'),
(33, 'Mike Jerome', 'caroylnwhite32@gmail.com', 'Hi there \r\n \r\nI have just analyzed  watanyaacademy.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Jerome\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, '2021-07-19 01:50:53', '2021-07-19 01:50:53'),
(34, 'Jamesskern', 'no-replysak@gmail.com', 'Hi!  watanyaacademy.com \r\n \r\nDo you know the simplest way to point out your product or services? Sending messages through feedback forms can allow you to easily enter the markets of any country (full geographical coverage for all countries of the world).  The advantage of such a mailing  is that the emails that will be sent through it\'ll end up within the mailbox that\'s meant for such messages. Causing messages using Feedback forms is not blocked by mail systems, which suggests it\'s sure to reach the recipient. You may be ready to send your provide to potential customers who were previously unprocurable because of spam filters. \r\nWe offer you to check our service for complimentary. We are going to send up to fifty thousand message for you. \r\nThe cost of sending one million messages is us $ 49. \r\n \r\nThis letter is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', NULL, NULL, NULL, '2021-07-29 15:27:56', '2021-07-29 15:27:56'),
(35, 'SEO X Press Digital Agency', 'juliaholliday7162@gmail.com', 'Good Day \r\n \r\n \r\nI have just took an in depth look on your  watanyaacademy.com for the  ranking keywords and saw that your website could use a boost. \r\n \r\n \r\nWe will increase your Ranks organically and safely, using only whitehat methods, \r\n \r\n \r\nIf interested, please email us \r\n \r\nsupport@digital-x-press.com \r\n \r\n \r\nregards \r\nMike Nyman\r\n \r\nSEO X Press Digital Agency \r\nhttps://www.digital-x-press.com', NULL, NULL, NULL, '2021-07-29 21:03:24', '2021-07-29 21:03:24'),
(36, 'Mike Farrell', 'earnestbell7162@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your watanyaacademy.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your watanyaacademy.com to have a DA between 50 to 60 points in Moz with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Farrell\r\n \r\nsupport@monkeydigital.co', NULL, NULL, NULL, '2021-07-29 22:00:05', '2021-07-29 22:00:05'),
(37, 'Mike Oswald', 'paulholmes3262@gmail.com', 'Hello \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Oswald\r\n \r\nSpeed SEO Digital Agency', NULL, NULL, NULL, '2021-08-06 01:04:24', '2021-08-06 01:04:24'),
(38, 'Mike Daniels', 'joelculpepper3262@gmail.com', 'Hi there \r\n \r\nI have just verified your SEO on  watanyaacademy.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nMike Daniels\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, '2021-08-09 21:01:46', '2021-08-09 21:01:46'),
(39, 'Mike Wallace', 'johnmclaughlin7162@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your watanyaacademy.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your watanyaacademy.com to have a DA between 50 to 60 points in Moz with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Wallace\r\n \r\nsupport@monkeydigital.co', NULL, NULL, NULL, '2021-08-23 10:39:19', '2021-08-23 10:39:19'),
(40, 'SEO X Press Digital Agency', 'no-replysak@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Green\r\n \r\nsupport@digital-x-press.com', NULL, NULL, NULL, '2021-08-28 00:43:59', '2021-08-28 00:43:59'),
(41, 'Mike Babcock', 'robertramirez7162@gmail.com', 'Hello \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Babcock\r\n \r\nSpeed SEO Digital Agency', NULL, NULL, NULL, '2021-08-30 10:56:15', '2021-08-30 10:56:15'),
(42, 'Mike Bradberry', 'no-replyNoirm@gmail.com', 'Howdy \r\n \r\nI have just took a look on your SEO for  watanyaacademy.com for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nMike Bradberry\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, '2021-09-07 17:09:33', '2021-09-07 17:09:33'),
(43, 'Mike Paterson', 'no-replyNoirm@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your watanyaacademy.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your watanyaacademy.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Paterson\r\n \r\nsupport@monkeydigital.co', NULL, NULL, NULL, '2021-09-24 17:07:23', '2021-09-24 17:07:23'),
(44, 'Mike Hawkins', 'no-replyNoirm@gmail.com', 'Hi \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Hawkins\r\n \r\nSpeed SEO Digital Agency', NULL, NULL, NULL, '2021-09-30 14:31:15', '2021-09-30 14:31:15'),
(45, 'Mike Baldwin', 'no-replyNoirm@gmail.com', 'Hi \r\n \r\nI have just took an in depth look on your  watanyaacademy.com for its SEO metrics and saw that your website could use an upgrade. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Baldwin\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, '2021-10-05 17:24:34', '2021-10-05 17:24:34'),
(46, 'Mike Flannagan', 'no-replyNoirm@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Flannagan\r\n \r\nsupport@digital-x-press.com', NULL, NULL, NULL, '2021-10-07 20:59:06', '2021-10-07 20:59:06'),
(47, 'Jamesskern', 'no-replysak@gmail.com', 'Good day!  watanyaacademy.com \r\n \r\nWe suggest \r\n \r\nSending your message through the feedback form which can be found on the sites in the Communication partition. Feedback forms are filled in by our program and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique improve the chances that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis offer is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', NULL, NULL, NULL, '2021-10-17 17:42:33', '2021-10-17 17:42:33'),
(48, 'Daniel', 'support@newlightdigital.com.hubspot-inbox.com', 'Hey guys, \r\n \r\nI am offering a significant discount on all our digital marketing services through the end of the year. If you were ever thinking about doing stuff like this, now is the time. This is a killer deal. We help companies just like yours generate leads every day. \r\n \r\n1. Write, optimize, and format 3 blog posts per month \r\n(Value: $1,200) - Now $600/month \r\n \r\n2. Four hours of SEO per month \r\n(Value: $600) - Now $300/month \r\n \r\n3. Email marketing -- two emails per month to your list of prospects \r\n(Value $600) - Now $300/month \r\n \r\n4. Social media posting -- 5 posts per week on your social channels (FB + TW + LN) \r\n(Value $500) - Now $300/month \r\n \r\nPlease let me know. \r\n \r\nPS: Need a new website? We build AMAZING sites. Check out our portfolio here: https://bit.ly/3EK5qry \r\n \r\n \r\n-Daniel Todercan \r\nFounder and Chief Strategist \r\nNew Light Digital \r\n \r\n+1 (917) 744-9170 \r\nhttp://www.newlightdigital.com/', NULL, NULL, NULL, '2021-10-22 12:15:43', '2021-10-22 12:15:43'),
(49, 'Mike Leapman', 'no-replyNoirm@gmail.com', 'Good Day \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Leapman\r\n \r\nSpeed SEO Digital Agency', NULL, NULL, NULL, '2021-10-27 12:28:26', '2021-10-27 12:28:26'),
(50, 'Ryan Nilsen', 'reviewcarrier@gmx.com', 'Hey, \r\nI’m the founder of ReviewCarrier, a google’s reviews digital agency. \r\nIt’s designed for folks like you who want to boost their sales using Google Reviews so I’d love to know if you are interested to learn more. \r\nNow, I know your time is valuable. I don’t want you to feel like I’m trying to grab time from you. \r\nI’m very happy to offer you a discount for your first order because I appreciate it’s a weird one-off thing. \r\nIf you want to boost your SEO and convert more customers thanks to Google Reviews feel free to reach out to contact@reviewcarrier.com \r\nHave a great day. \r\n-Ryan, Founder of http://reviewcarrier.com', NULL, NULL, NULL, '2021-10-27 14:20:06', '2021-10-27 14:20:06'),
(51, 'Mike Reynolds', 'no-replyNoirm@gmail.com', 'Howdy \r\n \r\nI have just took a look on your SEO for  watanyaacademy.com for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nMike Reynolds\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, '2021-11-07 14:22:44', '2021-11-07 14:22:44'),
(52, 'Mike Wilson', 'no-replyNoirm@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Wilson\r\n \r\nsupport@digital-x-press.com', NULL, NULL, NULL, '2021-11-09 14:18:16', '2021-11-09 14:18:16'),
(53, 'Jenny', 'jenny@foremedia.net', 'Hey, I visited your site and I think that your content is amazing! It is really engaging and original, you must have worked so hard to generate such a quality content. We are ForeMedia and we help website owners with great websites to maximize the revenue they make from their website. I would love to buy Ad Spaces on your website and pay you per each impression of the ads on your site. We are Google Ad Exchange Premium partners and we work with more than 100 Ad Network & thousands of premium direct advertisers who would LOVE to buy Ads directly from your site and we can guarantee to increase your revenue by at least 45% compared to other advertising solutions you are currently using. You deserve to earn more for your content and maximize your earning potential and I will help you unlock that potential! There is no cost, you can register to our monetization platform for free on this link: https://foremedia.net/start I will be available for you on the Live Chat if you need any help, or you can email me back to: jenny@foremedia.net if you have any questions. I have at least 17 Premium Advertisers that have asked me to approach you because they would like to advertise on your website on Premium eCPM [cost per impressions] basis. Have a good day & feel free to ping me for any question! Click the link here for 1 minute registration to our platform [it\'s free!]: https://go.foremedia.net/u/start/', NULL, NULL, NULL, '2021-11-09 22:22:46', '2021-11-09 22:22:46'),
(54, 'David Holman', 'davidholman200@gmail.com', 'We are a Team of IT Experts specialized in the production of Real and Novelty Documents such as Passport, Driving License , IELTS Certificate,  NCLEX Certificate, ID Cards, Diplomas, SS Cards, University Certificates, Green Cards, Death Certificate, Working Permits, Visa\'s etc. Contact us on WhatsApp for more information +49 1590 2969018. or Email us at... documentsservicesexperts@gmail.com', NULL, NULL, NULL, '2021-11-12 03:54:11', '2021-11-12 03:54:11'),
(55, 'Mike Roger', 'no-replyNoirm@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your watanyaacademy.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.strictlydigital.net/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Roger', NULL, NULL, NULL, '2021-11-15 08:39:07', '2021-11-15 08:39:07'),
(56, 'Mike Dunce', 'no-replyNoirm@gmail.com', 'Hi \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\n \r\n35% Black Friday / Cyber Monday coupon: \r\n \r\nBLACKOCEAN \r\n \r\nregards \r\nMike Dunce\r\n \r\nSpeed SEO Digital Agency', NULL, NULL, NULL, '2021-11-25 11:53:05', '2021-11-25 11:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ليس ضرورى',
  `price` double NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `level_id`, `title`, `slug`, `contents`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'الماده الأولى : علم الاتكيت وآداب التصرف', 'الماده-الأولى-:-علم-الاتكيت-وآداب-التصرف', 'الاتيكيت هو  السلوك بالغ التهذيب أو احترام الذات واحترام الآخرين وحسن التعامل معهم أو آداب في الخصال الحميدة أو السلوك المقبول اجتماعيا.\r\nيعتبر الإتيكيت فن كبقية الفنون مفهوم الإتيكيت هو احترام النفس، واحترام الآخرين، وحسن التعامل معهم هو مفهوم راق ومحتوى إنساني حضاري، فالحضارة ليست قصراً، ولا سيارة فارهة، ولا مجرد زينة في الوجه والملبس، ولكنها ـ بالدرجة الاولى ـ التعامل الإنساني الراقي فيما يعرف بـ (آداب اللياقة).', 30, 'courses/WNO9UnW47LrgkpVdDGOpNOBTwpY8vKql0XcLOM4U.png', '2021-03-31 20:53:30', '2021-05-03 21:31:48'),
(9, 1, 'الماده الثانيه : التربيه القرآنيه', 'الماده-الثانيه-:-التربيه-القرآنيه', 'تنطلق فلسفة التربية في القرآن الكريم من الإيمان بالله تعالى وملائكته وكتبه ورسله واليوم الآخر، وبالقضاء والقدر خيره وشره، والالتزام بالعمل الصالح والتعاون عليه، والتعرف على الحق والتواصي به. وبناء الإنسان بناءً متكاملًا يقوم على تأديب النفس، وتصفية الروح وتثقيف العقل، وتقوية الجسد حتى يصل إلى الكمال الإنساني المتسامي في إطار من القيم والأخلاق التي ينشأ عليها ويُعَوّد على التعامل بها.\r\n\r\nوفى دراسة بعنوان: «فلسفة التربية في القرآن الكريم»، للدكتور علي محمد علوان، يرى أن فلسفة التربية في القرآن تمتاز بالفهم في الشمول والتوحيد، وإلى مراقبة السلوك ومحاسبة النفس، فهي توحد في ذات الإنسان بين جسده وروحه وما يربطهما من قيم وأخلاق، وبين عقله وعاطفته وما يحكمهما من علم وحكمة بين عقيدته وإيمانه، وما يصدقهما من عمله لا ينفصل أحدهما عن الآخر.', 100, 'courses/AwYeiIJZgXtXpYnNvh1sc7vGtUDppOrf8ngmyk1I.jpg', '2021-05-03 00:24:29', '2021-05-03 21:32:04'),
(10, 1, 'الماده الثالثه : مبادئ العلوم السياسيه', 'الماده-الثالثه-:-مبادئ-العلوم-السياسيه', 'العلوم السياسية هي : إحدى تخصصات العلوم الاجتماعية التي تدرس نظرية السياسة وتطبيقاتها ووصف وتحليل النظم السياسية وسلوكها السياسي وأثرها على المجتمع. هذه الدراسات تكون غالبا ذات طابع أكاديمي التوجه، نظري وبحثي.\r\n\r\nالحقول العلمية الفرعية التي تتناولها العلوم السياسية تتضمن: علم السياسة المقارِن، والاقتصاد السياسي، والنظرية السياسية أو الفلسفة السياسية، والمنهجية السياسية، والسياسة العامة، والإدارة العامة، والعلاقات الدولية. كما تهتم العلوم السياسية بمواضيع المدنيات، والأنظمة القومية، وتحليل السياسات ما بين الأمم، والتطور السياسي، والقانون الدولي، وعلم السياسة، وتاريخ الفكر السياسي، والحريات العامة وحقوق الإنسان. فضلا عن كونها مرتبطة بالاقتصاد، والقانون، وعلم الاجتماع، والتاريخ، والفلسفة، والجغرافيا، وعلم النفس، وعلم الإنسان، وعلم الأعصاب، وعلوم الأحياء.', 100, 'courses/37URgawn5H2Cxe194S6WDR9qBdjRB41AK3fBjOoB.jpg', '2021-05-03 00:27:40', '2021-05-03 21:33:30'),
(11, 1, 'الماده الرابعه : تاريخ مصر الحديث', 'الماده-الرابعه-:-تاريخ-مصر-الحديث', 'يتم التأريخ لتاريخ مصر المعاصر بدءا من عام 1882 ، عندما أصبحت مصر مستعمرة بريطانية. استمر هذا الوضع في مصر حتى عام 1922 عندما حصلت مصر رسميا على الاستقلال ، لكن القوات البريطانية بقيت موجودة في مصر بوجود الملكية، لم يتم الحكم الذاتي لمصر إلا بعد حدوث ثورة 23 يوليو بقيادة مجموعة الضباط الأحرار عام 1952 والتي كان جمال عبد الناصر أحد أهم أفرادها. الدولة المصرية التي تشكلت بعد ثورة يوليو كانت في الغالب ذات حكم الحزب الواحد لكن رغم ذلك كانت التوجهات السياسية تختلف حسب الزعيم الذي يتسلم القيادة من جمال عبد الناصر إلى أنور السادات إلى حسني مبارك.', 100, 'courses/NZnNrXQ4TWzf3HazUYB9iSVgNG63voH83DzvWcD8.jpg', '2021-05-03 00:46:35', '2021-05-03 21:32:18'),
(12, 1, 'الماده الخامسه : الدروس النحويه', 'الماده-الخامسه-:-الدروس-النحويه', 'يعتبر العلماء أن علم النحو بمكانة أبي العلوم العربية، ويعدوه من أهم علوم اللغة العربية والقنطرة التي نعبر بها عليه إلى التزود بالعلوم اللغوية والعلوم الشرعية وغيرها. ... وإن علم النحو من العلوم المهمة التي لا غنى عنها لطالب العلم، وهو من أسمى العلوم قدرًا وأنفعها.', 100, 'courses/NLyBathxMbRS5ZOyi3FMnpMpwIjVkYPwSti0WG1e.jpg', '2021-05-03 00:52:53', '2021-05-03 21:32:26'),
(13, 1, 'الماده السادسه : فن إداره الحياه', 'الماده-السادسه-:-فن-إداره-الحياه', 'الفرق بين الناجح وغير الناجح في هذه الحياة، يتلخص في كيفية إدارة الشخص لحياته، فالحياة مثلها مثل العمل، نستطيع أن نتحكم بها ونسيطر عليها إذا استطعنا أن نديرها بشكل جيد.\r\nوإدارة الحياة تأتي عن طريق إدارة الانفعال، وإدارة الغضب، وعدد من المهارات التي تساعد الإنسان على فهم نفسه ومن حوله من الناس.\r\nفالحياة نكتة كبيرة لمن أرادها كذلك؛ أو معقدة ومتعبة لمن أرادها كذلك أيضا، وأنا أعتبرها مجموعة افتراضات تقررها أنت أيها الإنسان ولا أحد يفرضها عليك.', 100, 'courses/XZEFUgBvMNcJ4sZci7AqGSS2oNvb9stiXiwFlPu2.jpg', '2021-05-03 00:58:08', '2021-05-03 21:33:50'),
(14, 2, 'المادة الأولى : الفقه الاسلامي', 'المادة-الأولى-:-الفقه-الاسلامي', 'للفقه مكانة مهمة في الإسلام، حيث دلت النصوص الشرعية على فضله ووجوب التفقه في الدين، وكان من أعلام فقهاء الصحابة ذوو تخصص في استنباط الأحكام الشرعية، وكانت لهم اجتهادات ومذاهب فقهية، وأخذ عنهم فقهاء التابعين في مختلف البلدان، وبذلك بدء تأسيس المدارس الفقهية في الحجاز والعراق والشام واليمن ومصر، وتلخصت منها المذاهب ... سيدرس معنا الطالب بالاكاديميه المدارس الفقهيه كيف نشأت؟ وكيف كان أصجابها يفكرون، والكلام عن فقه العبادات بنظره دقيقه مع بيان فلسفة كل مدرسة في اعتمادها علي الأدلة التي بنيت عليها الأحكام التكليفية، وأيضاً سيدرس الطالب فقه المعاملات بصوره اسقاطيه علي واقعنا المعاصر حتي يستطيع الطالب التعايش مع واقعه وبيئته.', 100, 'courses/2a2qgsb4i1LLxozmyL8LT3kbaDQeOPKYXRX1jPQJ.png', '2021-05-03 21:46:23', '2021-05-03 22:10:52'),
(15, 2, 'المادة الثانية : ريادة الأعماال', 'المادة-الثانية-:-ريادة-الأعماال', 'ريادة الأعمال، وسميت أيضا الاعتمار، أو هندسة المشاريع، عملية تحديد مشروع تجاري معين للبدء به والتركيز عليه وتوفير الموارد اللازمة وتنظيمها وتحمل المخاطر في سبيل تحقيق ربح مالي، وتعرف أيضا على أنها عملية إنشاء منظمة أو مجموعة منظمات جديدة أو تطوير منظمات قائمة، وهي بالتحديد إنشاء عمل أو عدة أعمال جديدة أو الأستجابة لفرص ...', 100, 'courses/lp8qsXV4DYZdAA5jAw1O2cgY6IbJPKMbpo3xXmPd.jpg', '2021-05-03 22:00:31', '2021-05-03 22:00:31'),
(16, 2, 'المادة الثالثة : تاريخ الأديان', 'المادة-الثالثة-:-تاريخ-الأديان', 'ترجع أهمية دراسة الأديان والعقائد والمذاهب والفرق المختلفة مجتمعة،الىتحقيق مستوى عال من الإدراك والمعرفة الكلية الشاملة للديانات، حيث تضع الدارس لها فى موقف الحَكَم ليصل بعقله إلى النتائج الصحيحة المنضبطة، فيقوم بعمل مقارنة صحيحة علمية منهجية تعتمد على الحجج القوية والبراهين والأدلة لإثبات ما توصل إليه من علم صحيح لا يستند إلى قول متعصب أو متحيز بل بمنطق معقول ومقبول بعيدًا عن أى هوًى أو انحرافٍ ذهنى، \r\nإن علم مقارنة الأديان علم ضرورى يؤدى إلى استخلاص أوجه الشبه والاختلاف بين الأديان ويساعد على معرفة الصحيح من الفاسد وإظهار الحقيقة وإرجاعها إلى مصدرها الإلهى الحقيقى.', 100, 'courses/3Zd6fBJQKf0ll0WjBS4nQHYToMzRbQ12OUu0J6R4.jpg', '2021-05-03 22:10:08', '2021-05-03 22:10:08'),
(17, 2, 'المادة الرابعة : قواعد البحث العلمي', 'المادة-الرابعة-:-قواعد-البحث-العلمي', 'يهدف هذا المقرر لمساعده الطلاب الباحثين في التعرف على خصائص البحث وسمات الباحث الجيد ، كما يهتم بتعليم الطلاب كيفية اختيار عنوان الدراسة وشروط هذا العنوان ، مروراً بتحديد مشكلة الدراسة وأهدافها وأهميتها ، ووصولاً إلى طريقة توثيق المراجع العلمية ، حيث تهتم هذه الماده بإعداد الباحث لتصميم خطة بحث بطريقة علمية جيده.', 100, 'courses/ZdqFAen9UqBXUM7KzRIzcL8k06XjsNNdoLkltN0l.gif', '2021-05-03 22:23:26', '2021-05-03 22:23:26'),
(18, 2, 'المادة الخامسة : مبادئ علم القانون', 'المادة-الخامسة-:-مبادئ-علم-القانون', 'تهدف دراسة هذه  الماده الى تعريف الطالب بالقوانين التي تحكم حياته اليومية في كافة المناحي وبما له من حقوق ومايقع عليه من واجبات، ومن الأهمية بمكان لطلاب وطالبات الأكاديميه الوطنية للعلوم الشامله التعرف على أسس ومبادىء علم القانون و المتمثلة في نظريتي القانون والحق', 100, 'courses/XTSYk1se80XDdsrUNhH6EPU7FBeqEBz6XCYmjB1r.jpg', '2021-05-03 22:32:51', '2021-05-18 19:00:42'),
(19, 2, 'المادة السادسه : الصحه النفسيه', 'المادة-السادسه-:-الصحه-النفسيه', 'الصحة النفسية أو الصحة العقلية هي مستوى الرفاهية النفسية أو العقل الخالي من الاضطرابات، \"وهي الحالة النفسية للشخص الذي يتمتع بمستوى عاطفي وسلوكي جيد\".\r\n من وجهة نظر علم النفس الإيجابي أو النظرة الكلية للصحة العقلية من الممكن أن تتضمن قدرة الفرد على الاستمتاع بالحياة وخلق التوازن بين أنشطة الحياة ومتطلباتها لتحقيق المرونة النفسية.', 100, 'courses/xVgfKLvym3NfmORxVrfRJymQ1LlZpNuKCtni320h.gif', '2021-05-03 22:55:19', '2021-05-03 22:55:19'),
(20, 5, 'المادة الأولى : العلوم الكونية في القرآن الكريم', 'المادة-الأولى-:-العلوم-الكونية-في-القرآن-الكريم', 'إذا كان اتساع الكون هو أهم كشف كوني في القرن العشرين، فإن القرآن قد ذكر تلك الحقيقة بوضوح تام، وكذا الحال في اكتشاف العلم أن الكون بدأ محُيزًا، ثم حدث له انفجار، وعبر عن ذلك علميًّا بنظرية \"الانفجار الأعظم\"، فإن في القرآن الحقيقة التي تعين العلماء على معرفة بداية الزمان والمكان الكوني في حدث \"فتق الرتق\"، ولسوف تفخر نوبل مع تطور العلم حينما يكتشف العلم حقيقة المفردات العلمية القرآنية المتعلقة بالسماء ذات الحُبك، وأعمدة السموات التي لا تُرى، وطباقية الكون المعبرة عن السبع سماوات الطباق، وحقيقة الكون المطوي\r\n\r\n فيا أيها المسلمون، تلمَّسوا العلم في كتابكم العزيز وحققوه في الأرض والسماء، فلا قائمة لكم إلا بالتمسك بالدستور العام المتمثل في كتاب الله وسنة نبيه، والأخذ بأسباب التقدم العلمي والتقني، وأعيدوا إلى الحياة وجْهها المشرق الذي تاه حينما تخلَّفتم عن ركْب الحياة؛ حتى يصبح العلم وسيلة لراحة العالم بعد أن غرق البشر في بحار المادة المظلمة، انهَضوا من غفوتكم، تسعَدْ بكم الأُمم، ويَعَمَّ الأرضَ السلامُ، والحمد لله رب العالمين.', 100, 'courses/TvJVrwDuXWwmqUXYuin2y6Kz6GydqbWCOWtwWx3P.jpg', '2021-05-04 01:55:43', '2021-05-04 01:55:43'),
(21, 5, 'المادة الثانية : القيم واحترام الآخر', 'المادة-الثانية-:-القيم-واحترام-الآخر', 'تلعب القيم دوراً بارزاً في حياة الأفراد، فهي تشكل الجانب المعنوي في السلوك الإنساني، والعصب الرئيس للسلوك الوجداني، والثقافي، والاجتماعي عند الإنسان.\r\nويمكن القول إن القيم تشكل مضمون الثقافة ومحتواها، والثقافة هي التعبير الحي عن القيم، كما أنها تلعب دوراً بارزاً في تحديد سلوك الفرد، ويمكن تلخيص أهميتها في حياة الفرد في الأمور الآتية: تلعب القيم دوراً مهماً في تشكيل الشخصية الفردية وتحديد أهدافها في إطار معيار صحيح، ولقد كانت شخصية النبي عليه السلام نموذجاً حياً لمنظومة القيم التي جاء بها الدين، ولهذا فقد قالت السيدة عائشة عندما ُسئلت عن أخلاق النبي “كان خلقه القرآن”.', 100, 'courses/9ulIWvzitHGaqpZWQZF31vhlCNmSUoWNaUHkNB9G.jpg', '2021-05-04 02:22:45', '2021-05-04 02:23:32'),
(22, 5, 'المادة الثالثة : الحاسب الآلي', 'المادة-الثالثة-:-الحاسب-الآلي', 'هنالك أسباب متنوعة تجعلنا نتعلم أكثر ما نستطيع عن استخدامات الحاسب الالكتروني في حياتنا، كذلك هنالك فوائد كثيرة نجنيها من هذا التعلم، فنحن لا نستطيع أن نكون ونبلغ مستوى تعليمي ممتاز دون هذا التعلم فالمعرفة بالحاسوب تساعدنا في الحصول على فرص عمل جيدة، كما إنها تجعل إنتاجنا في العمل بكفاءة اكبر ويكون بمقدورنا إتمام جميع المهام التي قد يستحيل إتمامها يدويا، فضلا عن المتعة التي نحققها من جراء استخدامنا هذا الجهاز الرائع.\r\nفالحاسوب جهاز الكتروني مصنوع من مكونات منفصلة يمكن توجيهها باستخدام أوامر خاصة لمعالجة أو إدارة البيانات بطريقة ما. ومكونات نظام الحاسوب الرئيسية سوف نستعرضها لاحقا. إما العمليات الأساسية التي تنفذها الحواسيب فهي استقبال البيانات المدخلة ومن ثم معالجتها أي إجراء الحسابات أو المقارنات ومعالجة المدخلات للوصول إلى إظهار المعلومات المخرجة والحصول على النتائج المطلوبة.', 100, 'courses/Qqb7Ly6nd6snLTdQFKeOkhzJQFNIifSoSZ0oF57o.gif', '2021-05-04 02:36:32', '2021-05-04 02:36:32'),
(23, 5, 'المادة الرابعة : التنمية المستدامة', 'المادة-الرابعة-:-التنمية-المستدامة', 'مقرر مادة التنمية المستدامه والتخطيط الاستراتيجي \r\nيهتم المقرر بتقديم شرح وافى وتفصيلي يرتبط بمفهوم التنمية المستدامة التي تمثل إدارة وحماية قاعدة الموارد الطبيعية وتوجيه التغير التقني والمؤسسي بطريقة تضمن تحقيق واستمرار إرضاء الحاجات البشرية للأجيال الحالية والمستقبلية. وإن تلك التنمية المستدامة (في الزراعة والغابات والمصادر السمكية) تحمي الأرض والمياه والمصادر الوراثية النباتية والحيوانية ولا تضر بالبيئة وتتسم بأنها ملائمة من الناحية الفنية ومناسبة من الناحية الاقتصادية ومقبولة من الناحية الاجتماعية، وتوضيح مدى ارتباطها بالتخطيط الاستراتيجي الذى يمثل تخطيط بعيد المدى، ويأخذ في الاعتبار جميع المتغيّرات الخارجيّة والداخليّة، ويقوم بتحديد جميع الشرائح والقطاعات المستهدفة وخاصة إذا تم اعتبار أن المجتمع هو تلك المنظمة التي تحتاج تخطيط إستراتيجي لتحقيق استمرارية الجوانب الاقتصادية، والاجتماعية والمؤسسية والبيئية للمجتمع”، حيث تُمكّنُ التنمية المستدامة المجتمع وأفراده ومؤسساته من تلبية احتياجاتهم والتعبير عن وجودهم الفعلي في الوقت الحالي مع حفظ التنوع الحيوي والحفاظ على النظم الإيكولوجية والعمل على استمرارية واستدامة العلاقات الإيجابية بين النظام البشري والنظام الحيوي حتى لا يتم الجور على حقوق الأجيال القادمة في العيش بحياة كريمة، كما يحمل هذا المفهوم للتنمية المستدامة ضرورة مواجهة العالم لمخاطر التدهور البيئي الذي يجب التغلب عليه مع عدم التخلي عن حاجات التنمية الاقتصادية وكذلك المساواة والعدل الاجتماعي.\r\nأهداف المقرر: في نهاية المقرر يستطيع المتدرب تحقيق ما يلي:\r\n\r\n1- توضيح تعريف التنمية المستدامة وأهميتها\r\n2- يذكر اهم أبعاد ومكونات التنمية المستدامة\r\n3- يعدد اهم العوامل المؤثرة في تحقيق التنمية المستدامة واهم المعوقات الايدلوجية\r\n4- يناقش كيف يمكن تحقيق التنمية المستدامة على مستوى الفرد والمجتمع\r\n5- يحدد أهم الممارسات البيئية للمؤسسة وأثرها على تحقيق النمو المستدام\r\n6- يذكر طرق استخدام مبادئ التنمية المستدامة في تحسين السمعة و جذب الجمهور\r\n7- يتقن إدارة المخاطر البيئية المترتبة على الأنشطة والعمليات التشغيلية للمؤسسة\r\n8- يوضح دورالجهات الحكومية في نشر وتحقيق مفهوم التنمية المستدامة\r\n9- قواعد ومهارات خدمة أفراد المجتمع وأثره في تحقيق الاستدامة\r\n10- مبادئ ومعايير التنمية المستدامة للمؤسسة\r\n11-استراتيجيات التنمية المستدامة\r\n12- مراحل تطبيق خطط الاستدامة في الأعمال المختلفة\r\n13- توضيح مفهوم التخطيط الاستراتيجي واهميته للفرد والمجتمع والمنظمة\r\n14- عناصر التخطيط الاستراتيجي ومقومات نجاحها\r\n15-اهم السمات الشخصية للنجاح المجتمعي في ظل التخطيط الاستراتيجي والتنمية المستدامة\r\n\r\nومما تجدر الإشارة إليه، أنه رغم شمولية مفهوم التنمية المستدامة واشتمالها على جوانب اقتصادية واجتماعية ومؤسسية وبيئية وغيرها إلاّ أنّ التأكيد على البعد البيئي في فلسفة ومحتوى التنمية المستدامة، إنّما يرجع إلى أن إقامة المشروعات الاقتصادية الكثيرة والمتنوعة يجهد البيئة سواء من خلال استخدام الموارد الطبيعية القابلة للنضوب أو من خلال ما تحدثه هذه المشروعات من هدر أو تلويث للبيئة، ومن ثمّ تأخذ التنمية المستدامة في اعتبارها سلامة البيئة وذلك وفق تخطيط استراتيجي جيد ، وتعطي اهتماماً متساوياً ومتوازياً للظروف البيئية مع الظروف الاقتصادية والاجتماعية، وتكون حماية البيئة والاستخدام المتوازن للموارد الطبيعية جزءاً لا يتجزأ من عملية التنمية المستدامة للمجتمع من أجل الارتقاء به.\r\n\r\nأ.د/ جيهان على السيد سويد\r\nأستاذ العلوم التربوية والنفسية – جامعة المنوفية', 100, 'courses/encd1C8UqHq9JHOOwQQQNRgWpvreJUcBoEStmPTy.png', '2021-05-04 02:46:30', '2021-05-04 02:46:30'),
(24, 5, 'المادة الخامسة : التنمية البشرية في السنة النبوية', 'المادة-الخامسة-:-التنمية-البشرية-في-السنة-النبوية', 'يدركُ النّاظر في سنّة المصْطفى صلى الله عليه وسلم -وقدْ أٌوْتي جَوامع الكلم- وفي سيرته العَطِرة المباركة أنّها حافلةٌ بكلّ ما من شأنه الارتقاءُ بالإنسانِ والمجتمع البشري، والعنايةُ به روحيًّا وفكريًّا.. وعقليًّا وبدنيًّا، ما يعنى أن نصوص السنة النبوية لا تهتم بجانبٍ واحد فقط للتنمية، بل تهتم بالتنمية الشاملة للإنسان؛ من تنظيم شؤون حياته وأعماله بالمبادرات النافعة، ورسم الخُطط الناجحة لتعامله مع الآخرين، ودوره في إعمار الأرض والارتقاء بالمجتمع.\r\n\r\nوبذلك سبقت السنةُ النّبوية النظريات الحديثة كافة في مجال التنمية البشرية؛ لعنايتها الخاصة بالاستثمار في العنصر البشري، وتطوير قدراته في مختلف الجوانب، والنّهوض بالمجتمع ليصل إلى أعلى درجات الكمال والرقي، والازدهار والتنمية.. ولا عجب في ذلك؛ فالسنة النبوية شعلة من مشكاة النبوة.. ووحي خفي أوحاه الله إلى رسوله صلى الله عليه وسلم: «ألا إني أوتيتُ الكتابَ ومثلَه معَه»', 100, 'courses/U4MY7uY5UsWfiy2BGMH5QhBsgZWBFjoLjGMK47gt.jpg', '2021-05-04 02:56:39', '2021-05-04 02:56:39'),
(25, 5, 'المادة السادسة : الجنائي العام', 'المادة-السادسة-:-الجنائي-العام', 'حيث أنه لا يعزر بالجهل بالقانون الجنائي ، إذ أنه فى جميع الأحوال سينطبق عليك _إن أنت خالفت قواعده _ سواء كنت تعلمها أم تجهلها ، ولما كان ما ينتظر المتهم بمخالفه قواعد هذا القانون هى عقوبات رادعه تمس حريته أو ذمته الماليه أو حتى حياته ذاتها  - كان من الضرورى جداً أن نتعلم مبادئه العامه لنكون فى مأمن من الوقوع فى مشاكله بقدر الإمكان بحيث ندرس مفهوم الجريمه وأقسامها وأركانها وسلطان هذه القاعده من حيث الزمان والمكان والأشخاص وكذا الأسباب التى تبيح ارتكاب جريمه فى بعض الأحيان كالدفاع الشرعى عن النفس ، واستخدام الحق وغيرها ، مع دراسة  موانع المسؤولية الجنائية كالإكراه وحالات الضرورة وغيرها ، مع دراسة الشروط المطلوبه للاستفاده من توافر تلك الحالات بشكل مبسط.', 100, 'courses/7zpsxdwoH2cFtkUYkE3AuxTaJIV9ZrDjQfFa3juw.jpg', '2021-05-04 03:02:42', '2021-05-19 00:58:17'),
(26, 6, 'المادة الأولى : السيره النبوية', 'المادة-الأولى-:-السيره-النبوية', 'لمحه عن حياة العرب قبل البعثة، مَولد النبيّ صلي الله عليه وسلم ونشأته، شباب النبيّ ، تعبُّد النبيّ في غار حراء، أحداث الدعوة المكّية، نزول الوَحي على النبيّ صلي الله عليه وسلم، أحداث الدعوة المدنيه، وكيف عايش النبي صلي الله عليه وسلم من هم مختلفون عنه في الديانة، وكيف صنع حضارة في عشر سنوات فقط.', 100, 'courses/vOBX2utOuE6zeOnuq7hsoUiuMq2D51AnyOJiClKE.jpg', '2021-05-05 13:13:34', '2021-05-05 13:14:19'),
(27, 6, 'المادة الثانية : استراتيجيات الأمن القومي', 'المادة-الثانية-:-استراتيجيات-الأمن-القومي', 'ما يتعلمه الطالب من هذه الماده: \r\n1- توسيع آفاق الدارسين في مجال الأمن القومي، والاستراتيجية القومية، وتعريفهم بحقائق التهديدات التي تواجه الامن القومي المصري، وأنسب دور لكل من قطاعات الدولة في مواجهة هذه التهديدات.\r\n2- النظرة إلي المشاكل القومية نظرة شاملة، تضم كل الأبعاد السياسية والعسكرية والاقتصاديه والاجتماعية.\r\n3- اسلوب إدارة الأزمات وصناعة القرار.', 100, 'courses/Cu9euscDIQ8azjHWdAJD1CLbu9QBCpjG0yEa9d87.jpg', '2021-05-05 13:46:45', '2021-05-19 01:02:25'),
(28, 6, 'المادة الثالثة : التاريخ الإسلامي', 'المادة-الثالثة-:-التاريخ-الإسلامي', 'يمكن اعتبار التاريخ الإسلامي يمتد منذ بداية الدعوة الإسلامية بعد نزول الوحي في شبه الجزيرة العربية على النبي محمد بن عبد الله بمكة ثم تأسيس الدولة الإسلامية بالمدينة المنورة مرورا بالدولة الأموية في دمشق التي امتدت من حدود الصين حتى جبال البرانس شمال الأندلس ثم الدولة العباسية، بما تضمنته هذه الدول الإسلامية من إمارات ...', 100, 'courses/Krliw5qox76mOv5HoByFOEgWOgay7rtWnF0zN4m8.png', '2021-05-05 13:55:38', '2021-05-05 13:55:38'),
(29, 6, 'المادة الرابعة : الوثائق والأرشفه الإلكترونية', 'المادة-الرابعة-:-الوثائق-والأرشفه-الإلكترونية', 'عملية تحويل الكم المتراكم (المستندات والوثائق) إلى صور ومستندات إلكترونية وترتيبها وحفظها على اسطوانات ضوئية (CD/DVD). وتعتبر عملية التحويل الرقمي أولى مراحل التحول الى الرقمية (Digitizing) أو ما يطلق عليه الأرشفة الإلكترونية', 100, 'courses/2uKGxGUAXF5HIIH8qI7b9NCRdwo3QyxQEUjchU2o.jpg', '2021-05-08 13:20:11', '2021-05-08 13:20:11'),
(30, 6, 'المادة الخامسة : التفكير الإبداعي', 'المادة-الخامسة-:-التفكير-الإبداعي', 'من أهم أهداف التفكير الإبداعي في التعليم تنمية وعي الطالب بكل ما يحصل حوله، وزيادة قدرته على ابتكار وسائل جديدة لحل المشكلات ومواجهة التّحديات التي تواجهه في الحياة، وتفعيل دوره في المدرسة وفي المجتمع، وزيادة كفاءته الذهنية عن طريق تحرير ذهنه من النمطية من أجل إنتاج وتصور إمكانيات جديدة محتملة.', 100, 'courses/Y4v4KI38VOu9unb7PmLAuKlrwVxuMiF442g1iZ4c.jpg', '2021-05-08 13:27:53', '2021-05-08 13:27:53'),
(31, 6, 'المادة السادسه : حقوق الإنسان', 'المادة-السادسه-:-حقوق-الإنسان', 'مادة حقوق الإنسان هي: المبادئ الأخلاقية أو المعايير الاجتماعية التي تصف نموذجاً للسلوك البشري الذي يُفهم عموما بأنه مجموعة من الـحقوق الأساسية التي لا يجوز المس بها وهي مستحقة وأصيلة لكل شخص لمجرد كونها أو كونه إنسان، فهي ملازمة لهم بغض النظر عن هويتهم أو مكان وجودهم أو لغتهم أو ديانتهم أو أصلهم العرقي أو أي وضع آخر.', 100, 'courses/QMgJ8GinbfwpaYWv3yhEqPtbFzdlEhfoQAtYgNfd.jpg', '2021-05-08 13:35:34', '2021-05-08 13:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('activities') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `type`, `related_id`, `image`, `created_at`, `updated_at`) VALUES
(9, 'activities', 7, 'activitys/7/GBd1eqUBNwFf0UvU1H6PZeUBqLbIieA5SWt1dAK4.jpeg', '2021-04-03 13:23:50', '2021-04-03 13:23:50'),
(18, 'activities', 6, 'activitys/6/FPau2npB4ImrZ5rvzsArkrgLqonm5ahkulnD6hFo.jpg', '2021-04-17 16:20:41', '2021-04-17 16:20:41'),
(19, 'activities', 1, 'activitys/1/Gk5pjsjuYOOEXKXa7AbMIUPuQnMxjFbLskqYxRXg.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(20, 'activities', 1, 'activitys/1/m5Y7qXt5oVvmgopb2yISARxSmGHyL01X71GdFXVA.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(21, 'activities', 1, 'activitys/1/APFRxPd8tSyJI4QPcpg82CFyH7m5CVAnhdfXGpq6.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(22, 'activities', 1, 'activitys/1/RDk6pRFBXeVffJIIk9X8iCXef796Cl3VVlW3cxTQ.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(23, 'activities', 1, 'activitys/1/A5FqQHlBP8rO7lMGGRcd6bU66J8oexk4MgG7pjUn.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(24, 'activities', 1, 'activitys/1/in6zBjJfGx7loCwMwSCgkezpD0p758kFtoQdVDCT.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(25, 'activities', 1, 'activitys/1/RNELt6hnq5VnhkFpzm88i6ocfSdhH0F9JmNShp1q.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(26, 'activities', 1, 'activitys/1/4APy5dzVibRLmsurvrYYen9kYBhAEe17W8zX2VOu.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(27, 'activities', 1, 'activitys/1/A0zWi41tFmzvktlQC43CZVUHAE7LBvPbxAMwMBWo.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(28, 'activities', 1, 'activitys/1/81aagg41TCDZbPJNjEZ0N46MenM8h9e1i8TGtitZ.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(29, 'activities', 1, 'activitys/1/yiQDMAM6BBSbRQZtRXknhh1iOBGE1OMgTFOW3rj7.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(30, 'activities', 1, 'activitys/1/i1JCM7SAunC7kVxyiQ3HXVV6DfZAOvSqim8OnlaO.jpg', '2021-05-04 17:26:06', '2021-05-04 17:26:06'),
(31, 'activities', 6, 'activitys/6/JkSnaBPKvhqSP808WZ40aDDEt1VjwHxekATvglUY.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(32, 'activities', 6, 'activitys/6/taaswllF5p9w1NyfXfZeJIoF0gMKN0Hzp8SLD62Z.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(33, 'activities', 6, 'activitys/6/klFpmRfeRQCQjeUm7WNqviFgtVydFpOnDj05owK0.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(34, 'activities', 6, 'activitys/6/vuHW51wph2E3YlTcHIbI0RGG2F50HzGNPR4vXWlO.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(35, 'activities', 6, 'activitys/6/27ZtfCq1JNGPnUZwHtnx6Oz50MMMHwOsmVtrmVEP.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(36, 'activities', 6, 'activitys/6/azIYf7AYfCLAk15wJ8ic8zV1dswY3BxbtPWP8rRu.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(37, 'activities', 6, 'activitys/6/vtgUZ218GHogUHTguCENcwTTRPGaloxtOkdfit3D.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(38, 'activities', 6, 'activitys/6/faKEWERzIJeWqx2hFeb37VJwb6cJU67idNcq0FDN.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(39, 'activities', 6, 'activitys/6/2dIigIO6V10uPVJTTm2UYOjbg4GPmwdxH8h3jDnO.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(40, 'activities', 6, 'activitys/6/hLGDR7QUkYTbvIXatwc55j3kNbm3a5nEfoDE7x99.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(41, 'activities', 6, 'activitys/6/Ab3fEOlKav65yW3hE0tRvhThumnjQ5tfTj3y9f7E.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(42, 'activities', 6, 'activitys/6/ATCw2X6htlW9KI5e37epiNPy5PfYJot1XZVquW5H.jpg', '2021-05-04 17:38:01', '2021-05-04 17:38:01'),
(43, 'activities', 8, 'activitys/8/7PtAPyaJNIbcjb6ved2F6e1nHC6ML0sZkzmZFJJL.jpg', '2021-05-04 18:06:09', '2021-05-04 18:06:09'),
(44, 'activities', 8, 'activitys/8/1sTWcIIa41OFhCN0GzMjPPGBkG40Nt5K6EGCZG14.jpg', '2021-05-04 18:06:09', '2021-05-04 18:06:09'),
(45, 'activities', 8, 'activitys/8/BfQ1tUyRZEiu2VO9aFpFxhQC8Sfl8aoKb15hyDHu.jpg', '2021-05-04 18:06:09', '2021-05-04 18:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ليس ضرورى',
  `price` double NOT NULL DEFAULT 0,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `title`, `contents`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'المستوى الأول', NULL, 1500, 'levels/AVLLjoJUkfimJVVXnsGy2U3FiNInIXBPTlX6zs1M.jpg', '2021-03-31 20:45:46', '2021-05-13 15:31:12'),
(2, 'المستوى الثانى', NULL, 1500, 'levels/FVGUHtrbywG6mnap1QEEggYGNqBlmeGLg39QaxHq.jpg', '2021-03-31 20:46:16', '2021-05-13 15:22:48'),
(5, 'المستوى الثالث', NULL, 1500, 'levels/rj5hSKp99fjfd2kFxXyvXLpfNemXZ9wSZReP5WHd.png', '2021-04-15 22:31:17', '2021-05-13 15:23:09'),
(6, 'المستوى الرابع', NULL, 1500, 'levels/QJadTdAbfwiR3lDOijviDPEbljy5AIgQd6VtHtuf.png', '2021-04-15 22:31:56', '2021-05-13 15:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_07_31_101142_create_visits_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_04_09_105520_create_settings_table', 1),
(10, '2020_04_09_105529_create_admins_table', 1),
(11, '2020_04_19_161046_create_site_texts_table', 1),
(12, '2020_04_19_163423_create_contacts_table', 1),
(13, '2020_10_12_000000_create_users_table', 1),
(14, '2021_03_29_223518_create_banners_table', 1),
(15, '2021_03_29_223658_create_teams_table', 1),
(16, '2021_03_29_223923_create_levels_table', 1),
(17, '2021_03_29_224255_create_courses_table', 1),
(18, '2021_03_29_224647_create_open_courses_table', 1),
(19, '2021_03_29_225007_create_activity_departments_table', 1),
(20, '2021_03_29_225127_create_activities_table', 1),
(21, '2021_03_29_230222_create_images_table', 1),
(22, '2021_03_29_230459_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `contents`, `image`, `created_at`, `updated_at`) VALUES
(5, 'موقع جديد للأكاديمية الوطنية للعلوم الشاملة', 'موقع-جديد-للأكاديمية-الوطنية-للعلوم-الشاملة', 'تم انتقال أكاديمية الوطنية للتدريب الى مقرة الجديد فى القاهرة مدينة نصر .', 'courses/euSlUTwuJfPvUUS6v5xZnZjprpXpoLr5mMdEnKgN.png', '2021-04-11 21:46:05', '2021-05-03 21:09:58'),
(6, 'الحوكمة الرقمية والبعد البيئي والتغيرات المناخية', 'الحوكمة-الرقمية-والبعد-البيئي-والتغيرات-المناخية', 'الجلسة الأولى لقطاع العلوم الأساسية وذلك في إطار فعاليات اليوم الثاني لمؤتمر جامعة عين شمس', 'courses/P3rDBrJFre61wx5jJ0pINgOVap0Yuz1P0pogk5fM.jpg', '2021-04-11 21:47:26', '2021-05-03 21:24:34'),
(7, 'أ.د. محمود المتيني رئيس جامعة عين شمس يكرم 25 طالبًا', 'أ.د.-محمود-المتيني-رئيس-جامعة-عين-شمس-يكرم-25-طالبًا', 'كرم الأستاذ الدكتور محمود المتيني رئيس جامعة عين شمس 25 طالبًا وطالبة مـن الطلاب الفائقين بكلیات ( الطـب، الهندسة، الصیدلة، العلوم، الزراعة )', 'courses/KCH7eoyJ9fHOzlU7YVLs44wyZygadJUNDFtRMaKc.jpg', '2021-04-17 16:09:06', '2021-05-03 21:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `open_courses`
--

CREATE TABLE `open_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0 COMMENT 'ليس ضرورى',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `open_courses`
--

INSERT INTO `open_courses` (`id`, `title`, `slug`, `contents`, `image`, `duration`, `price`, `created_at`, `updated_at`) VALUES
(6, 'المواريث الشرعية', 'المواريث-الشرعية', 'بسم الله الرحمن الرحيم\r\nالحمد لله رب العالمين والصلاة والسلام على أشرف المرسلين سيدنا محمد وعلى آله وصحبه وسلم أجمعين وبعد .....\r\nنظام الإرث في الإسلام نظام عادل لأنه من صنع العليم الخبيرالذي يعلم صلاح المرء في معاشه وآخراه ، ولذلك يجب على المسلم أن يلتزم به حرفيا دون المساس به دون تعديل أو إضافة ، لأن نظام الإرث من حدود الله التي قال الله فيها :\r\n \" تِلْكَ حُدُودُ اللَّهِ وَمَنْ يُطِعِ اللَّهَ وَرَسُولَهُ يُدْخِلْهُ جَنَّاتٍ تَجْرِي مِنْ تَحْتِهَا الْأَنْهَارُ خَالِدِينَ فِيهَا وَذَلِكَ الْفَوْزُ الْعَظِيمُ . وَمَنْ يَعْصِ اللَّهَ وَرَسُولَهُ وَيَتَعَدَّ حُدُودَهُ يُدْخِلْهُ نَارًا خَالِدًا فِيهَا وَلَهُ عَذَابٌ مُهِينٌ \" النساء 13/14\r\nفي هذه الآيات بيان من الله أن تلك الأحكام هي حدود الله الواجب تعظيمها، فطاعته تعالى تورث الجنان، ومعصيته وتجاوزحدوده يورث العذاب في النيران.\r\nروي عن ابن عباس في شأن تلك الأيات : يعني المواريث التي سمى الله .\r\nوعلم المواريث من أنفع العلوم الشرعية وأشرفها، وقد أرشدنا رسولنا إلى أهمية هذا العلم  بقوله : \" يَا أَبَا هُرَيْرَةَ، تَعَلَّمُوا الْفَرَائِضَ وَعَلِّمُوه ، فَإِنَّهُ نِصْفُ الْعِلْمِ، وَهُوَ يُنْسَى، وَهُوَ أَوَّلُ شَيْءٍ يُنْزَعُ مِنْ أُمَّتِي\" سنن ابن ماجه\r\nوروي أيضا عن رسول الله - صلى الله عليه وسلم - قوله : \" الْعِلْمُ ثَلَاثَةٌ، وَمَا سِوَى ذَلِكَ فَهُوَ فَضْل: آيَةٌ مُحْكَمَةٌ، أَوْ سُنَّةٌ قَائِمَةٌ، أَوْ فَرِيضَةٌ عَادِلَةٌ \" سنن أبي داود\r\n ونتحدث عن علم الفرائض وما يتعلق بها من وصية ووقف في 24 ساعة، منها 16ساعة عن علم الفرائض(التعريف، والأسباب، والشروط ، والموانع ، والحقوق المتعلقة بالتركة، والورثة وبيان حقوقهم ، ومسائل تطبيقية عمليه متنوعة)   \r\nإضافة إلى 6 ساعات دراسة متعلقة بالقسم الثاني الوصية وما يتعلق بها من أحكام التعريف والشروط المتعلقة بها وبعض احكام الوصية منها الوصية بالمنافع والوصية بالمعلوم والوصية للحمل وضوابط العمل بالوصية الواجبة ) ، ثم يكون حسن المختتم بساعتين عن الوقف وأحكامه \r\nوالله الموفق\r\nد/ أحمد سعد عسران\r\nأستاذ الشريعه/ جامعة القاهره', 'courses/YEEHpwp1WQZt0MEbFjrXvrhiFEMXso4pwyPE8Lui.png', 'شهرين', 0, '2021-05-01 17:49:08', '2021-05-03 21:38:02'),
(7, 'اللغه الانجليزيه', 'اللغه-الانجليزيه', NULL, 'courses/BqnMBzlMGrGBVDKJFbqRpk3QLjzq9spQYMUmGreP.jpg', '3 شهور', 0, '2021-05-01 17:53:14', '2021-05-03 21:38:19'),
(8, 'tot', 'tot', 'تفاصيل ومحاور البرنامج التدريبي\r\nيهدف هذا البرنامج الى تأهيل المشاركين تأهيلاً علمياً ومهارياً واكسابهم الخبرات التطبيقية اللازمة للعمل كمدربين محترفين في مجالات عملهم، ويتناول البرنامج الحواجز النفسية التي يتعرض لها المدرب في بداية عمله وكيف يمكن التغلب عليها. ويستعرض البرنامج أكثر من نموذج من نماذج التدريب العلمية مثل ( نموذج كولب – نموذج مك كارتي – نموذج الأنظمة التمثيلية – نموذج هيرمان)، كما يتميز هذا البرنامج بتناوله للوسائل والتطبيقات الالكترونية التي تساعد المحاضرين والمدربين المحترفين في تنفيذ التدريب عن بعد أونلاين', 'courses/CREfa3TFX5whDa7QWO5uji2knD42rhmKhBkLwSnm.png', 'شهرين', 0, '2021-05-01 17:54:52', '2021-05-05 01:15:33'),
(9, 'العلاج بالحجامه cupping therapy', 'العلاج-بالحجامه-cupping-therapy', 'الهدف العام من التخصص: استخدام الحجامة في علاج الأمراض\r\n\r\nالفئات المستهدفة: العاملون في المجال الصحي، والمهتمون بتعلم الحجامة\r\n\r\nطرق التدريس والتدريب: شرح نظري وتطبيق عملي لكل تقنيات الحجامة\r\n\r\nمميزات حضور البرنامج: تعلم كل تقنيات الحجامة والتشخيص والحصول على شهادة معتمده من جامعة عين شمس', 'courses/PWPjsCey67Kyl7vRxFhhrgmWb7P8USexgCNNfLr7.jpg', 'شهرين', 0, '2021-05-01 17:57:40', '2021-05-15 02:18:25'),
(11, 'التجويد مع الاجازه بالسند', 'التجويد-مع-الاجازه-بالسند', NULL, 'courses/LhXEZWbyF3dZKdO3wdcaztP7ZyLd6N5sNfSfXoAb.jpg', 'شهرين', 0, '2021-05-01 18:00:48', '2021-05-03 21:39:49'),
(12, 'tkt', 'tkt', NULL, 'courses/lhltDCzCanTMQWbcZFfSSXtiX7cqtaJ04ERF58KR.png', 'شهرين', 0, '2021-05-01 18:08:46', '2021-05-01 18:08:46'),
(13, 'STARTERS', 'STARTERS', NULL, 'courses/jYuBiOpb9WtuxKCXIzuRNAqhAzDYtmK4fH1KBGGO.jpg', '3 شهور', 0, '2021-05-01 18:11:08', '2021-05-01 18:11:08'),
(14, 'الإعداد والتقديم التليفزيوني', 'الإعداد-والتقديم-التليفزيوني', 'نَّ العمل التلفزيوني يحتاج إلى الكثير من الإعداد خاصة في التمكن من النحو والقراءة، وقد قمنا بالتخطيط لدورات تمكن الطالب من قدرته على إعداد وتقديم عمل تلفزيوني، وهناك خطوط عامة تشترك فيها جميع الأعمال لا بدَّ من عرضها في دورة الإعداد والتقديم التلفزيوني ...', 'courses/qmC0LaseangINIM02lH6V6ojbvDiz3Fl57TRBxYr.jpg', 'شهرين', 0, '2021-05-05 01:25:52', '2021-05-19 01:12:28'),
(15, 'التصوير والإخراج التليفزيوني', 'التصوير-والإخراج-التليفزيوني', 'إن التصور هو أحد أهم المبادئ في التصوير والإخراج فهو عبارة عن أنك تحدد ما هي مهمتك لإيصال قصة الفيلم إلى الجمهور، وكيف تعبر عن ذلك بصرياً. وقد تكون ترجمة القصة إلى مشاهد مرئية وإخراجها بشكلها النهائي واحدة من أكثر خطوات التحضير صعوبة ولكن تصورك لها من البداية سيساعدك على القيام بتلك الخطوات على أكمل وجه.', 'courses/lS5VLGbbfY2cy8UwSQs92p4MYMq2wBLPjXlnzBLY.jpg', '4 شهور', 0, '2021-05-05 01:29:48', '2021-05-05 01:29:48'),
(16, 'صناعة السيناريو Screenwriting', 'صناعة-السيناريو-screenwriting', 'كتابة السيناريو (بالإنجليزية: Screenwriting)‏ أو كتابة النصوص، هي فن حرفة الكتابة لقطاع الإعلام كالأفلام الرئيسية والإنتاج التلفزيوني وألعاب الفيديو. وغالباً ما تكون هذه المهنة مستقلة. يكون كاتب السيناريو مسؤولاً عن البحث عن قصة وتطوير السرد وكتابة النص، ثم تسليمها بالصيغة المطلوبة للمنفّذين.', 'courses/i8hH06VEaLZOkG2h6s85ChyCyJs9JNHgyEbQ2nRm.jpg', '3 شهور', 0, '2021-05-05 14:23:12', '2021-05-19 01:10:31'),
(17, 'دبلومة التغذية العلاجيه', 'دبلومة-التغذية-العلاجيه', 'العلاج بالتغذية الطبية (MNT) هو منهج علاجي لمعالجة الأمراض الطبية والأعراض المتصلة بها عن طريق اتباع نظام غذائي معين يضعه ويتابع تنفيذه أخصائيو التغذية', 'courses/AXECRPu4mGVvsTgULoUasZeHYLe5Y3Cetrlcp6pa.jpg', 'شهرين', 0, '2021-05-08 13:43:57', '2021-05-08 13:44:51'),
(18, 'دبلومة التأهيل للحياه الزوجيه', 'دبلومة-التأهيل-للحياه-الزوجيه', 'الأسرة هي النواة الأولى للمجتمع، بل هي العنوان الكاشف لحالة أفراده وطبائعهم وسلوكياتهم، فالمجتمعات مهما كان حجمها، تبدأ بالفرد الذي لا يكون له وجود إلا من خلال الأسرة، وهي الدائرة الأولى والأقرب التي يتعلم منها كيف يتعامل مع من حوله، ذلك أن سلوكيات الفرد ومفردات لغته مكتسبة في جانب كبير منها، كما أن اتجاهاته نحو القضايا التي يتعرض لها في حياته يغترف فيها من معين الأسرة', 'courses/D2FuUZ331DyGlRkSAFWExJSRl7Ts9D4WxrZnBDYD.jpg', '3 شهور', 0, '2021-05-08 16:03:31', '2021-05-08 16:03:31'),
(19, 'صناعة الداعية المتميز', 'صناعة-الداعية-المتميز', 'لا يزال الخطاب الدينى يواجه تحديات عديدة لكن أساسها الأول هو صناعة الداعية المتميز وهو ما حاولنا إيجاده، بعمل برنامج للدعاة المتميزين الذين يمثلون دعاة العصر فى التجديد المنشود كى يواكب الخطاب الدينى متطلبات عصره، وألا تظل الدعوة  للعلوم الشرعية فقط.\r\nأهمية أن يكون الداعية موسوعى وملم - ولو قشور- بالطب والاقتصاد والفلسفة والسياسة وعلم النفس والاجتماع والمستجدات مهم للغايه\r\n\r\nعلماؤنا الأوائل كانوا موسوعيين فى العلم والعقيدة والفكر، فما الذى يمنع أن يكون داعية اليوم ممسكًا بتلابيب الدعوة بحق عن طريق الإطلاع على تلك العلوم، مع تسهيل تحصيلها من جانب الأزهر والأوقاف فى شكل مناهج متماسة مع الدين.', 'courses/DTvMwtPFruLY8IIAii4Rbqc8KA4X70PIqSjHjNrC.png', 'شهر', 0, '2021-05-14 20:32:25', '2021-05-14 20:32:25'),
(20, 'دبلومة إدارة الأعمال', 'دبلومة-إدارة-الأعمال', 'يعدّ تخصّص إدارة الأعمال بأنّه واحدٌ من أهمّ التخصّصات المنتشرة في يومنا هذا، ذلك لأنّ المؤسسات على اختلافها تعوِّل عليه تعويلاً كبيراً لأداء مهماتها، وإنجاز أهدافها، ومن هنا فقد لاقى هذا التخصص إقبالاً كبيراً من الرّاغبين بإكمال دراستهم الجامعية ونيل شهادة البكالوريوس، وأيضاً من الأشخاص الّذين يريدون إكمال دراساتهم العليا ونيل شهادتي الماجستير والدكتوراة؛ وذلك نظراً إلى الخبرة التي يعطيها هذا التخصص لمن يعملون في قطاع الأعمال، أو لمن يديرون مؤسسات ومنشآت متنوعة.\r\n\r\nتخصّص إدارة الأعمال هو واحد من العلوم التي يتعلم منها الطالب أساليب توظيف كافّة الموارد المتوفّرة في المؤسسة، بشكل يحقّق المنفعة العامة في نهاية المطاف، ويجلب الأرباح الوفيرة للمؤسسة، ويحقّق الهدف من العمل. والهدف الرئيسي من إدارة الأعمال هو ربط عناصر الإنتاج الثلاثة وهي الأرض، ورأس المال، والقوى البشرية ببعضها البعض.', 'courses/NTHqiwHL5rvMqnF4RSPy3sVZCpBaXgr5BVX3hbyA.png', '3 شهور', 0, '2021-05-14 20:38:25', '2021-05-14 20:38:25'),
(21, 'دبلوم الإرشاد الأسري Family Counseling', 'دبلوم-الإرشاد-الأسري-family-counseling', 'محتويات الدبلومه:\r\nتشمل 6 مستويات تتم دراستها علي مدار شهر ونصف وتحتوي علي:\r\n\r\nالمستوى الاول : مقدمه وتمهيد للارشاد الاسرى\r\n– مفهوم وأهداف الارشاد الاسرى\r\n– نظريات الارشاد الاسرى\r\n– استراتيجيات الارشاد والتوجيه\r\n– مراحل الارشاد الأسري\r\n\r\nالمستوى الثاني : الخطوبه\r\n– اسس اختيار شريك الحياه\r\n– سيكولوجية الرجل والمرأة\r\n– مشكلات فترة الخطوبة\r\n– الارشاد الوقائي قبل الزواج\r\n\r\nالمستوي الثالث: الزواج\r\n– أنواع الازواج والزوجات والفروق بينهما\r\n– العلاقه بين الزوجين ” فن الاتصال – أنماط الشخصيات – الانظمه التمثيليه – الفروق بين المرأة والرجل)\r\n– المشكلات الأسريه وحلولها (مشاكل الاسره – مشاكل الزوجين – مشاكل فى تعديل سلوك الابناء)\r\n– الملل الزوجي واعادة بناء العلاقة وتجديدها\r\n– العنف الأسري وأساليب التعامل المناسبة\r\n– مرض الخرس الزوجي وعلاجه\r\n– الخيانة الزوجية (أسباب وعلاج وطرق وقاية)\r\n– المشاكل التي يمر بها الزوجين بسبب العلاقات الجنسية وطرق علاجها\r\n– اسباب وعلاج الاضطرابات الجنسية\r\n– اسباب فشل الحياه الزوجية\r\n– فن إدارة الخلافات الزوجية\r\n– دور المرشد الاسري في العلاقة الزوجية\r\n– مهارات التواصل بين الازواج وحل المشاكل\r\n\r\nالمستوي الرابع: الطلاق\r\n– اثر المشكلات الزوجية على الابناء وطرق الوقاية منها\r\n– اثر الطلاق على الأسرة و الاولاد\r\n– الاضطرابات النفسية التي تعانى منها المطلقة وطرق علاجه\r\n– تأهيل الارامل والمطلقات\r\n\r\nالمستوي الخامس: الوالدية\r\n– مراحل نمو الأطفال\r\n– الأنماط الوالدية\r\n– مرحلة المراهقة وإستراتيجيات التعامل الذكى\r\n– كيف نربي أبنائنا بإيجابية ونصنع معهم الطموح\r\n– كيف تربي أبنائك عاطفياً\r\n– كيف تعالج مشاكل الأبناء من خوف وانعدام ثقة ….إلخ\r\n– تأهيل الاطفال اليتامي والاحداث\r\n\r\nالمستوي السادس: اعداد الاستشاري الأسري المتمكن\r\n– التقنيات الفنيه للمرشد الاسرى\r\n– فن المشوره وطرق تقديم النصح والارشاد\r\n– مهارات المقابلة الارشادية\r\n– دراسة الحالات بطريقه علميه\r\n– كيفية التسويق لخدماتك وتقديمها للجمهور بصورة احترافية\r\n– بناء علامة تجارية في مجال الاستشارات الأسرية والزوجية\r\n=========', 'courses/eVqUu8oSizPQrvGsaHHVMDnjvYCuFImcqjwvMMVd.jpg', 'شهر ونصف', 0, '2021-05-14 21:10:56', '2021-05-19 01:16:34'),
(22, 'كورس كيف تتقن فن البيع Arts and Skills of Sales and Negotiation with Clients and Ending of Transactions', 'كورس-كيف-تتقن-فن-البيع-arts-and-skills-of-sales-and-negotiation-with-clients-and-ending-of-transactions', 'كيف تتقن فن البيع من خلال هذا الكورس سنتعرف على طرق اتقان فن البيع؛ لأن فن البيع من المهارات الضرورية لكل عمل تقريبا لأن أغلب الأعمال تعتمد على البيع.', 'courses/m10iNY3vPfh1j3Q4DsDfOoGkKzUJ6ald2VcT2KwS.png', 'شهر', 0, '2021-05-15 01:16:11', '2021-05-19 01:15:11'),
(23, 'دبلومة الموارد البشريه (HR)', 'دبلومة-الموارد-البشريه-(hr)', 'إنَّ \"الموارد البشرية\" أو \"Human Resources\" والذي يُعبَّر عنه بالاختصار الشائع \"HR\" هو العنصر الرئيسي في أي شركة، والذي يُركِّز على التوظيف، والإدارة، وتعريف الموظفين بتعليمات الشركة، أو المؤسسة، أو المنظمة التي يعملون بها.', 'courses/X9SDnKTM2Yq5qiI4cQSgws6hPrkTuG1FfX2DKnVm.png', 'شهر ونص', 0, '2021-05-15 01:25:25', '2021-05-15 01:25:25'),
(24, 'دورة التعليق الصوتي voice over', 'دورة-التعليق-الصوتي-voice-over', 'هذا كورس مميّز جدّاً ومقدّم باللغة العربية بشكل كامل. صممت هذه الدورة لتمكنك من وضع أولى خطواتك بثبات في مجال التعليق الصوتي و بعد انتهاءك من هذه الدورة سوف تتمكن من إنتاج و بيع خدماتك الصوتية كعامل حر و مستقل في هذا المجال.', 'courses/MjBqYXPvC5UJxOm25Olk638alDIHYVNTy8QnvJsM.jpg', 'شهر ونص', 0, '2021-05-15 01:35:16', '2021-05-15 01:35:16'),
(25, 'التسويق الالكتروني digital marketing', 'التسويق-الالكتروني-digital-marketing', 'يعتبر التسويق من أهم خطوات التجارة، والتسويق الإلكتروني أو التسويق الرقمي هو من أهم طرق التسويق الحديثة، حيث إنّه يحقق أعلى معدلات وصول للشرائح والفئات المستهدفة في الخطة التسويقية، ويطلق هذا المصطلح على جميع الممارسات والأساليب الإعلانية المرتبطة بالتسويق عن طريق شبكة الإنترنت.', 'courses/VmVsxPtVbNZQP3Z6QMJsUJCaSzKWA46RtYaionYG.jpg', 'شهر ونصف', 0, '2021-05-15 01:37:52', '2021-05-15 02:00:02'),
(26, 'فن إدارة الوقت time management', 'فن-إدارة-الوقت-time-management', 'إدارة وتنظيم الوقت وتمالك الضغوط هو إحدى مساقات تخصص مهارات النجاح وتطوير الذات ، ويتحدث هذا المساق المجاني عن تعريف إدارة الوقت وأهمية تنظيم الوقت والتي من ضمنها القدرة على تنظيم الوقت للمذاكرة وعلاقة إدارة الوقت بزيادة الإنتاجية ، بالإضافة إلى مهارات إدارة الوقت التي يمكنك اكتسابها، و خطوات تنظيم الوقت في حياتنا وكيفية التغلب على الضغوطات المحيطة.', 'courses/uXl40im8IsnKmGC4LN0hWj0ComrcyTbnOM1a4sH3.jpg', 'شهر', 0, '2021-05-15 01:49:59', '2021-05-15 02:05:31'),
(27, 'فن القيادة leadership', 'فن-القيادة-leadership', 'يتناول هذا الكورس موضوع القيادة من جوانب مختلفة متعلقة بشخصية القائد وسِمَاته النفسية وسلوكياته، مروراً بدور العاملين وكيفية تحفيزهم وإشراكهم والتأثير الإيجابيّ عليهم، وصولاً إلى قيادة المجموعات (مع إبراز بعض المشاكل في عملية اتخاذ القرارات ضمن فرق العمل) وقيادة عملية التغيير في المؤسسات.', 'courses/ty4F0l4Q8I2aiTVOPD0ZCydd0kPX1GSvS1sAsuh1.jpg', 'شهر ونصف', 0, '2021-05-15 01:57:12', '2021-05-15 02:02:29'),
(28, 'العلاج بسم النحل or honey bee venom', 'العلاج-بسم-النحل-or-honey-bee-venom', 'في هذه الدورة سنتعرف على طرق العلاج بمنتجات النحل (حبوب اللقاح – غذاء الملكات – شمع النحل – صمغ النحل سم النحل).\r\nمحاور الدورة:\r\nأهمية ذكر النحل في القرأن الكريم والإعجاز العلمي والتفسير العلمي لآيتي النحل.\r\nأهمية العلاج بسم النحل.\r\nأنواع العلاج المختلفة بسم النحل والتطوير فيها.\r\nبيولوجي النحل (حياة النحل) والخطوات الاسترشادية قبل العلاج بسم النحل.\r\nالخواص الطبيعية والفيزيائية لسم النحل.\r\nالتركيب الكيميائي لسم النحل.\r\nنبذة عن أهم الفوائد العلاجية لمنتجات النحل.\r\nبعض الوصفات العلاجية المركبة من منتجات النحل لمختلف الأمراض.\r\nالتعريف بسم النحل وطريقة استخلاصه.\r\nالفرق بين اللسع المباشر بالنحل والحقن بسم النحل.\r\nالنظام الغذائي أثناء العلاج بسم النحل (مع ذكر الممنوعات).\r\nالأعراض الجانبية أثناء العلاج بسم النحل.\r\nالإسعافات الأولية لتحقيق جلسة آمنة بسم النحل.\r\nالأمراض التي تعالج بسم النحل مع تحديد الجرعة السليمة والمواضع الصحيحة لكل حالة.\r\nعلاقة سم النحل بالحجامة والإبر الصينية.\r\nأحدث الطرق والأساليب العلاجية في العلاج بسم النحل.\r\nكيفية عمل خريطة علاجية لكل مريض بدون الرجوع لمذكرة أو كتاب.\r\nتدريب عملي علمي لكل الأعضاء ليتقنوا أفضل طرق الحقن الآمنة وتحديد الجرعة المناسبة.\r\nبروتوكول العلاج الأمن بسم النحل وتحديد الجرعات الأمنة للأطفال والشباب وكبار السن.', 'courses/8YOZqXaFIJWKzOwatG2gaIlmzKtLwWQ66LJBasHX.jpg', 'شهر', 0, '2021-05-15 02:11:58', '2021-05-15 02:25:31'),
(29, 'دورة فن تخريج الحديث النبوي', 'دورة-فن-تخريج-الحديث-النبوي', 'لا يخفى على أحد من أهل العلم أهمية أصول التخريج وشرف منزلته وذلك لأنّه أساس لمعرفة السنة النبوية التي عليها مدار فهم القرآن وتفسيره، حيث جعل الله سبحانه وتعالى بيانه إلى الرسول صلى الله عليه وسلم في قوله: {وَأَنْزَلْنَا إِلَيْكَ الذِّكْرَ لِتُبَيِّنَ لِلنَّاسِ مَا نُزِّلَ إِلَيْهِمْ} [النحل: 44] ، فهي عليها مدار ...', 'courses/Zg9MpjaT5V09i89D0SZowWBEdr5xdwXx0X76QfhA.jpg', 'شهرين', 0, '2021-05-15 02:22:16', '2021-05-15 02:22:16'),
(30, 'دورة اتقان علم أصول الفقه', 'دورة-اتقان-علم-أصول-الفقه', 'لم أصول الفقه ليس مُجرَّد علم لكنَّه في حقيقة الأمر أحد أكبر إنجازات المُسلمين الفكريَّة وأحد أعظم البناءات العلميَّة التي أتوا بها. إنَّه علم من أدقّ العلوم وأصعبها، والذي من المُمكن اعتباره دُرَّة تاج العلوم الإسلاميَّة في جانب التشريع. “علم أصول الفقه” عندما نتعرَّف عليه سنعلم أنَّ التشريع الإسلاميّ ذو قوَّة ومتانة ورسوخ حتى لا يُقارن بأيّ تشريع آخر. هذا القول ليس من قبيل المُبالغة وليس من قبيل تمجيد المُسلمين لديانتهم، بل هو الحقيقة المحضة.\r\n\r\nولعرض هذه الحقيقة لا بُدَّ أنْ نعرض خريطة للديانات من حيث الجانب التشريعيّ، ثمَّ نبدأ في تعريف أصول الفقه بالفهم المُبسَّط، وخصوصيَّته من بين العلوم، وبيان مجالاته ومذاهبه الكُبرى.', 'courses/8959osWVYocCt1biIpIDhVseMkORZVauDoq72AE2.png', '3 شهور', 0, '2021-05-15 02:30:53', '2021-05-15 02:30:53'),
(31, 'دبلومة لغة الإشاره Sign language', 'دبلومة-لغة-الإشاره-sign-language', 'لغة الاشارة تعتبر من أقدم وسائل التواصل والتخاطب للصم والبكم، والتي ظهرت في إسبانيا في القرن 17 للتعامل مع من لا يملكون القدرة على الكلام والسمع. وتعتبر من اللغات التي تستخدم فيها لغة اليدين بإشارات محددة، وتكون الإشارات تبعا لكل حرف من الحروف الأبجدية، ومن خلالها يمكن تكوين جمل.', 'courses/457BgQxksxDIF997pMuY0DmZssl4EQwiMspy1h17.jpg', 'شهر ونص', 0, '2021-05-16 20:54:11', '2021-05-16 20:59:29'),
(32, 'كورس فن الاتيكيت Etiquette', 'كورس-فن-الاتيكيت-etiquette', 'يضم الاتيكيت مجموعة القواعد والمبادئ المكتوبة، وغير المكتوبة، والتي تنظم المجاملات والأسبقية، ومختلف المناسبات والحفلات والمآدب الرسمية والاجتماعية، وهذه القواعد والمبادئ تدل على الخلق القويم الذي يجمع بين الرقي، والبساطة، والجمال. ويشمل فن الاتيكيت الموضوعات التالية: إتيكيت التعامل الرسمي والاجتماعي', 'courses/FnLlNY2TZrcpOsri2BQMF5GOnn4lghOOcMIhSkRl.jpg', 'شهر ونص', 0, '2021-05-16 20:58:35', '2021-05-16 20:58:35'),
(33, 'كورس المحاسبه والإدارة الماليه  FINANCIAL ACCOUNTING IN ENGLISH', 'كورس-المحاسبه-والإدارة-الماليه-financial-accounting-in-english', 'تعتبر الإدارة المحاسبية والمالية العصب الرئيسي لإدارة المؤسسات والتأكد من إمكانية استمراريتها وتحقيق أهدافها المرجوة على المدى القصير والمدى البعيد معا، فهي تساعد المؤسسات على التحقق من موقفها المالي من خلال تجميع وتحليل البيانات الرقمية الرمزية وتحويلها إلى معلومات تساعد الإدارة والأطراف الخارجية ذات العلاقة في تفهم الأوضاع المالية واتخاذ القرارات المناسبة، إضافة إلى تحقيق الرقابة الداخلية للتحقق من سلامة العمل المحاسبي والقوائم المالية المختلفة. الإدارة المحاسبية إلزامية قانونا وتعتمد على إعداد القوائم المالية، بينما تحولها المحاسبة الادارية إلى معلومات وتقارير تؤثر في القرارات الإدارية للمؤسسات. في هذا المساق يستطيع الطالب أن يتعرف على القوائم المالية الأساسية', 'courses/g9eU5cUHF8uQYgV5v8IRcxGU0tXs7fIMKeqqrNhM.jpg', 'شهرين', 0, '2021-05-16 21:06:48', '2021-05-16 21:08:03'),
(34, 'كورس تعليم الفوتوشوب Photoshop', 'كورس-تعليم-الفوتوشوب-photoshop', 'فوتوشوب Photoshop هو برنامج احترافي في تصميم وتعديل الصور، يتضمن كورس فوتوشوب كاملاً شرحاً شاملاً في نحو 25 درساً. ... ويعد هذا الكورس هو أكبر وأشمل كورس عربي على الإنترنت يتبع منهجاً علمياً في تسلسل الدروس وشرحها دون إسهاب أو حشو زائد.', 'courses/jcsCFe2viuntxehsdWxMscdjE7eweK2NNHkfwNwA.jpg', 'شهر ونصف', 0, '2021-05-16 21:18:14', '2021-05-16 21:18:14'),
(35, 'دبلومة علم النفس الإيجابي  Positive Psychology', 'دبلومة-علم-النفس-الإيجابي-positive-psychology', 'يمكن تعريف علم النفس الإيجابي بأنه أحد العلوم الحديثة التي تركز على دراسة وتنمية الشخصية الإنسانية، كذلك البحث عن كلّ ما يساعد الإنسان لتكون حياته أفضل عن طريق دراسة الأدوار التكيفية للانفعالات والسمات الإيجابية، كذلك كل ما يوصل الفرد للرفاه النفسي والسعادة، فقد اهتم علم النفس الإيجابي بالبحث عن الجوانب الإيجابية لدى الفرد وفهم مكامن القوة لديه، كبديل عن البحث في الجوانب السلبية والإضطرابات النفسية، كما كان سائد في علم النفس المرضي.', 'courses/9s0qWIKKaBHOnkHIiIEVAdxJMTwyZw3TZMtkTSSF.jpg', 'شهر ونصف', 0, '2021-05-18 18:51:11', '2021-05-19 01:13:56'),
(36, 'دبلومة الطب النبوي', 'دبلومة-الطب-النبوي', 'لطب النبوي هو مصطلح يطلق على مجموعة النصائح المنقولة عن النبي محمد تتعلق بأمور طبية الذي تطبب به ووصفه لغيره، والتي وصلت على شكل أحاديث نبويه بعضها علاجي وبعضها وقائي، لم يستخدم مصطلح الطب النبوي على عهد النبي محمد ولا الصحابة ولا الخلفاء الراشدون إنما ظهرت في شكل أحاديث بدأ تجميعها على يد ابن قيم الجوزية في كتابه ...', 'courses/YAtECjeK91cEDlhP5gziLA8nTgQPk6YNkJGzIo6n.jpg', 'شهرين', 0, '2021-05-18 19:10:44', '2021-05-18 19:10:44'),
(37, 'دبلومة القيادة التربوية Educational Leadership', 'دبلومة-القيادة-التربوية-educational-leadership', 'القيادة التربوية هي عملية تحريك وتوجيه مواهب وطاقات المعلمين والتلاميذ والوالدين نحو تحقيق الأهداف التعليمية المشتركة. غالبًا ما يستخدم هذا المصطلح بشكل مترادف مع قيادة المدارس في الولايات المتحدة وقد حل محل الإدارة التربوية في المملكة المتحدة. تقدم عدد من الجامعات في الولايات المتحدة درجات علمية عليا في القيادة التربوية. ... الدراسية ورسم خرائط المناهج بواسطة Fenwick W.', 'courses/wmfhNcwm9F2VswWb9s00AcywW7n2X1iJm7r7Pg1R.jpg', 'شهر', 0, '2021-05-19 01:09:24', '2021-05-19 01:09:24'),
(38, 'دبلومة العلوم الشرعيه', 'دبلومة-العلوم-الشرعيه', 'الهدف من دبلومة العلوم الشرعية : التأهيل والبناء الفكري والعقدي لمجموعة مختصرة من العلوم في دائرة العقيدة والفكر والفلسفة والأخلاق والأديان وعلم الكلام ومناهج البحث وأصول الفقه ، كذلك الدفاع عن المعتقد والوقاية من خطر الإلحاد والسموم الفكرية.\r\nستتعلم في هذه الدبلوة:\r\nستتعلم عقيدتك الصحيحة بين الكثير من الاعتقادات الناشئة والباطلة ، وتستطيع أن تقاوم وتعزز اليقين بإيمانك بالله سبحانه وبكتابه وبنبيه ضد دعوات التغيير والتحريف والتزوير لأي فرقة أو مذهب أو ديانة أو معتقد ، وستتكون لك الوقاية وقوة الدفاع والملكة على الحوار والمناظرة مع الآخر ضمن سلسلة من القواعد والإجراءات ، كما تتعرف على أصول مقارنة الأديان ، والأديان السماوية وتصنيفها وكتبها ومناهجها وتاريخها ومقارنتها و تاريخ الفلسفة ونشأتها وأفكار الفلاسفة والملحدين الغربيين وتصوراتهم ، وتستطيع أن تفرق بين أنواع اللادينية وتضع قواعد للرد على الملحدين ، وتتعرف على السنن الإلهية في القرآن الكريم وقواعد الحديث النبوي في الجرح والتعديل ، وكيفية تحقيق أي نص وقواعده وضوابطه ، وكيفية كتابة بحث علمي محكم ضمن القواعد الصحيحة والمنصوص عليها ، وكيفية اختيار الموضوع وربطه بالأهداف وخطة سير البحث ، كذلك التعرف على القواعد الفقهية الحاكمة وبعض قواعد أصول الفقه ومناهج الاستدلال ، وأجزاء من المنطق في التفكير ومناهج علماء الإسلام ، إلى جانب عرض ونقد لمنهج التصوف والأخلاق. كما ستتعرف على طرق إصلاح الفكر ، وعوامل السقوط والنهضة الحضارية .\r\nوسيحصل الطالب بعد اتمامه واجتيازه الدبلومه والاختبارات علي شهاده معتمدة من جامعة عين شمس', 'courses/w7CkBTwjYBZPZv1ORaujw3a7MWZDbp5RbkEFL8NR.png', '6 شهور', 0, '2021-05-20 01:10:33', '2021-05-20 01:11:05'),
(39, 'التخطيط الشخصي وإدارة الاولويات', 'التخطيط-الشخصي-وإدارة-الاولويات', 'إدارة الوقت هي عملية تخطيطية للسيطرة على الوقت الذي يقضيه الإنسان في مختلف الأنشطة. وهو عبارة ... غالبًا ما ترتبط استراتيجيات إدارة الوقت بالتوصية بتعيين الأهداف الشخصية. ... \"العمل في ترتيب الأولوية\" تحديد الأهداف وتحديد الأولويات. ... قد يوصي المؤلفون بفترات تخطيط يومية أو أسبوعية أو شهرية أو غيرها من المراحل المرتبطة ...', 'courses/0UjoV7bbSHU20gseutfeAGi0ZllWDQFQNh00XmVy.jpg', 'شهر', 0, '2021-05-22 01:43:52', '2021-05-22 01:43:52'),
(40, 'CBT العلاج المعرفي السلوكي', 'cbt-العلاج-المعرفي-السلوكي', 'العلاج السلوكي المعرفي (CBT) هو أحد أساليب العلاج النفسي التي تساعد المريض على إدراك أنماط التفكير السلبية أو غير الصحيحة مما يُمكنه من التأقلم مع المواقف الصعبة التي تعرض لها والتعامل معها بصورة أكثر فعالية، يتم الاعتماد على هذا النهج العلاجي بمفرده أو ضمن مجموعة من العلاجات الأخرى في السيطرة على عدد غير محدود من الاضطرابات النفسية والعقلية في مقدمتها القلق المفرط ونوبات الاكتئاب وغير ذلك.', 'courses/f5xPLsWDJkOXppszAJLeRK2YQeYlUzNZG34M8L9K.jpg', 'شهر', 0, '2021-05-22 03:00:55', '2021-05-22 03:00:55'),
(41, 'أوتوكاد AutoCAD 2021', 'أوتوكاد-autocad-2021', 'يعتبر أوتوكاد برنامج تصميم ذو استخدام عام في العديد من المجالات، يستخدمه المهندسين من مختلف الاختصاصات لإنشاء الرسومات والتصاميم الهندسية ويستخدمه مديري المشاريع، بالإضافة إلى العديد من المهن والصناعات.', 'courses/fOAUycQOSRgb9oiCMctZQrAaQ7cv6H31IaN80Yxg.png', '3 شهور', 0, '2021-05-23 02:09:42', '2021-05-23 02:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$f44UbNkn66i74O2g8z5UhuDsgvjHJ4AFOlbUAAej17.CmcUqH/DZq', '2021-05-30 03:21:57'),
('admin@admin.com', '28db0b75f6efcecbd0ce217cf740642acb0b528bf424d71d801d4be831a31e27', '2021-05-30 03:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `activity_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `student_name`, `qualification`, `age`, `address`, `phone`, `email`, `image`, `course_id`, `activity_id`, `created_at`, `updated_at`) VALUES
(18, 'أحمد حسام بدر الدين', 'هندسة مدنى', '25', 'ش.جسر السويس محطة الجراج', '01121116883', 'ah.hossam1996@gmail.com', NULL, NULL, NULL, '2021-05-17 10:25:09', '2021-05-17 10:25:09'),
(19, 'علياء جمال محمد محمود المتولي سليمان', 'حاصله علي ليسانس اداب ودبلومه تربوي ودبلومه في التربيه الخاصه', '31', 'المنصوره', '01151135259', 'Aliaagamal887@gmail.com', NULL, NULL, NULL, '2021-05-18 09:24:22', '2021-05-18 09:24:22'),
(21, 'سهام بكر عبدالله', 'بكالوريوس تربية', '45', 'المنيا .٢٧شارع نفرتيتى', '01096901706', 'bakef450@gmail.com', NULL, NULL, NULL, '2021-05-19 19:09:01', '2021-05-19 19:09:01'),
(22, 'ماجد رجب محمد عطية', 'بكالريوس العلوم الصحية التطبيقية', '٢٥', 'شرم الشيخ جنوب سيناء', '٠١٠٠٦٠١٤٦١٢', 'magedragb1111@gmail.com', NULL, 20, NULL, '2021-05-21 03:38:59', '2021-05-21 03:38:59'),
(26, 'منى مصطفى العزب على', 'باحثة دكتوراه اقتصاد وإدارة وقانون بيئي', '40', '٢٥٦ شارع الهادي البشير الاربعين جسر السويس', '01069377206', 'Mona.Alazab@iesr.asu.edu.eg', NULL, NULL, NULL, '2021-05-22 16:25:45', '2021-05-22 16:25:45'),
(27, 'محسن دهشان يونس دهشان', 'دكتوراه في فلسفة التربية', '41', 'الإسكندرية', '01000066184', 'dr.dahshan1@gmail.com', NULL, NULL, NULL, '2021-05-22 17:28:19', '2021-05-22 17:28:19'),
(28, 'جواد محمد حامي', 'ماجستير إدارة اعمال', '66', 'العراق .. محافظة واسط', '009647816226112', 'jj_201194@yahoo.com', NULL, NULL, NULL, '2021-05-27 12:39:00', '2021-05-27 12:39:00'),
(29, 'جواد محمد حامي', 'ماجستير إدارة اعمال', '66', 'العراق .. محافظة واسط', '009647816226112', 'jj_201194@yahoo.com', NULL, NULL, NULL, '2021-05-27 12:39:25', '2021-05-27 12:39:25'),
(30, 'وائل عبد العزيز عبد الحميد عبد العزيز', 'ليسانس اداب وماجستير في الأدب والنقد الحديث', '45', 'منشأة الشريكين شبين الكوم منوفية', '01065167413', 'waelaziz393@gmail.com', NULL, NULL, NULL, '2021-05-27 14:39:19', '2021-05-27 14:39:19'),
(31, 'عبدالله مصباح عبدالله حسنين', 'طالب', '21', 'الصواف كوم حماده البحيره', '01032259665', 'bhsnyn04@gmail.com', NULL, NULL, NULL, '2021-05-29 22:47:53', '2021-05-29 22:47:53'),
(32, 'حفصة أحمد حجازي الخولي', 'جامعي', '19', 'مصر - المنوفية - بركة السبع', '01016120926', 'hafsaaelkholy2002@gmail.com', NULL, NULL, NULL, '2021-05-29 22:48:03', '2021-05-29 22:48:03'),
(33, 'ندى أحمد محمد زلابية', 'بكالوريوس علوم', '19', 'المنوفية_ اشمون _ شارع حمزة بن عبد المطلب', '01114059166', 'noda.zalabia@gmail.com', NULL, NULL, NULL, '2021-05-29 22:48:43', '2021-05-29 22:48:43'),
(34, 'حفصة أحمد حجازي الخولي', 'جامعي', '19', 'مصر - المنوفية - بركة السبع', '01016120926', 'hafsaaelkholy2002@gmail.com', NULL, NULL, NULL, '2021-05-29 22:49:01', '2021-05-29 22:49:01'),
(36, 'آلاء محمود مشحوت', 'كليه العلوم', '19', 'المنوفية_ مركز السادات', '01097789024', 'a.alaa321@icloud.com', NULL, NULL, NULL, '2021-05-29 23:02:55', '2021-05-29 23:02:55'),
(37, 'آلاء محمود مشحوت عبدالرازق', 'كليه العلوم', '19', 'الموفية_ مركز السادات', '01097789024', 'a.alaa321@icloud.com', NULL, NULL, NULL, '2021-05-29 23:03:58', '2021-05-29 23:03:58'),
(39, 'رانيا السيد مناع', 'طالبه', '21', 'منشاه السادات ‘الشهداء‘المنوفيه', '01029860764', 'raniamanaa783@gmail.com', NULL, NULL, NULL, '2021-05-29 23:37:52', '2021-05-29 23:37:52'),
(40, 'سهيله السيد الكردي', 'الثاني الجامعي', '20', 'فيشا الكبري منوف المنوفيه', '01287579603', 'sohailaelkordy66@gmail.com', NULL, NULL, NULL, '2021-05-30 00:05:49', '2021-05-30 00:05:49'),
(41, 'آيه ناصر مرسى سيف الدين', 'خريج من كليه العلوم', '22', 'سمادون اشمون المنوفيه', '01098646467', 'ayanasser123445@gmail.com', NULL, NULL, NULL, '2021-05-30 00:19:18', '2021-05-30 00:19:18'),
(42, 'فايزه محمود محمود يوسف', 'خريج علوم قسم كمياء وفيزياء 2021_2022', '22', 'المنوفية/ شبين الكوم/ بتبس', '01065593579', 'fezoooo233@gmail.com', NULL, NULL, NULL, '2021-05-30 00:23:09', '2021-05-30 00:23:09'),
(43, 'ندا احمد عبد المعبود محمد', 'كلية العلوم جامعة المنوفيه', '21', 'السادس من أكتوبر', '01027747547', 'nada22388@gmail.com', NULL, NULL, NULL, '2021-05-30 00:29:52', '2021-05-30 00:29:52'),
(44, 'Enas Hamdy Eldamen', 'كليه العلوم', '21', 'بركه السبع عزبه راتب', '01030657354', 'www.enas.yahoo.com@m', NULL, NULL, NULL, '2021-05-30 01:08:48', '2021-05-30 01:08:48'),
(45, 'جهاد علي عبدالرحمن', 'طالبة جامعية', '20', 'المنوفيه السادات', '01020790482', 'gehadalisarhan2001@gmail.com', NULL, NULL, NULL, '2021-05-30 01:21:34', '2021-05-30 01:21:34'),
(46, 'اسراء طارق عبدالوهاب', 'بكاليريوس علوم', '22', 'شبين الكوم', '01090453443', 'esraa531889@gmail.com', NULL, NULL, NULL, '2021-05-30 01:24:35', '2021-05-30 01:24:35'),
(47, 'فارس محمد سعيد حسين القاصد', 'ثانوية عامة ،طالب فرقة تانية كلية العلوم جامعة المنوفية قسم الفزياء', '20', 'منوفية-سرس الليان -شارع خلف المستشفي العام بسرس الليان', '01273028595', 'faresmohamed1298@gmail.com', NULL, NULL, NULL, '2021-05-30 01:32:51', '2021-05-30 01:32:51'),
(48, 'نورهان سعيد أبو السعود زايد', 'طلبه بكليه العلوم', '20', 'محافظه المنوفيه مدينه منوف', '01276036788', 'nourhansaeed525@gmail.com', NULL, NULL, NULL, '2021-05-30 01:37:38', '2021-05-30 01:37:38'),
(49, 'أسماء ممدوح صلاح محمد', 'طالبة', '20', 'أشمون -المنوفية', '01024257880', 'asmaamamduoh8@gmail.com', NULL, NULL, NULL, '2021-05-30 02:31:03', '2021-05-30 02:31:03'),
(50, 'احمد راضي رجب أبو قشوه', 'طالب', '20', 'قريه غمرين .مركز منوف .محافظه المنوفيه', '01113672533', 'ahmedabokashwa2001@gmail.com', 'register/7hvn4F4XiqbtAsHlNVhEEQLwtX8FJhjvQX0SCm2K.jpg', NULL, NULL, '2021-05-30 02:55:45', '2021-05-30 02:55:45'),
(51, 'أحمد راضي رجب أبو قشوة', 'طالب', '20', 'غمرين .منوف .المنوفيه', '01113672533', 'ahmedabokashwa2001@gmail.com', NULL, NULL, NULL, '2021-05-30 02:57:02', '2021-05-30 02:57:02'),
(52, 'خلود احمد السبكي', 'طالب بكليه العلوم', '20', 'سبك الاحد اشمون المنوفيه', '01023023704', 'mekholod552@gmail.com', NULL, NULL, NULL, '2021-05-30 03:30:39', '2021-05-30 03:30:39'),
(53, 'مصطفي سعيد مصطفى عابدين', 'متوقع تخرج من كليه العلوم جامعه المنوفيه', '22', 'مركز تلا منوفيه', '01092462244', 'mabdeen549@gmail.com', NULL, NULL, NULL, '2021-05-30 03:50:39', '2021-05-30 03:50:39'),
(54, 'احمد طارق احمد محمد', 'بكالريوس علوم جامعه المنوفية', '21', 'شبرا الخيمة-القليوبية', '01274769053', 'ahmedmido991@ymail.com', NULL, NULL, NULL, '2021-05-30 03:58:56', '2021-05-30 03:58:56'),
(55, 'صباح مدحت محمد محمد فخري عبد اللطيف', 'خريج', '22', 'كفر سبك الباجور المنوفيه', '01283421747', 'Sabah.Mohamaden@gmail.com', NULL, NULL, NULL, '2021-05-30 05:28:04', '2021-05-30 05:28:04'),
(56, 'ايه صلاح هلال عبدالكريم هلال', 'فرقه ثالثه علوم منوفيه', '22', 'رمله الانجب مركز اشمون', '01122960661', 'ayas09904@gmail.com', NULL, NULL, NULL, '2021-05-30 07:09:40', '2021-05-30 07:09:40'),
(57, 'ايه صلاح هلال عبدالكريم', 'فرقه ثالثه علوم منوفيه', '22', 'رمله الانجب مركز اشمون', '01122960661', 'ayas09904@gmail.com', NULL, NULL, NULL, '2021-05-30 07:10:31', '2021-05-30 07:10:31'),
(58, 'عبدالرحمن جمال السيد ديب', 'كليه علوم', '22', 'جنزور-بركه السبع-منوفيه', '01273474004', 'gamalabdelrahman826@gmail.com', NULL, NULL, NULL, '2021-05-30 07:21:29', '2021-05-30 07:21:29'),
(59, 'محمد جمال محمد حميده', 'طالب فرقه تانيه كليه علوم', '20', 'مدينة السادات- المنوفيه', '01277145315', 'm.gamal010606@gmail.com', NULL, NULL, NULL, '2021-05-30 07:59:23', '2021-05-30 07:59:23'),
(60, 'محمد فخري محمد رشاد', 'طالب بكلية العلوم', '20', 'شبين الكوم - المنوفية', '01067100998', 'm.fakhry1010@gmail.com', NULL, NULL, NULL, '2021-05-30 08:03:08', '2021-05-30 08:03:08'),
(61, 'ندى ممدوح يوسف', 'طالبة', '19', 'الباجور المنوفية', '01158547712', 'nadamamdouh205@gmail.com', NULL, NULL, NULL, '2021-05-30 08:33:01', '2021-05-30 08:33:01'),
(62, 'Hager Salah elashmony', 'بكالوريوس علوم', '21', 'قويسنا', '01212065726', 'salahashmony1@gmail.com', NULL, NULL, NULL, '2021-05-30 08:51:33', '2021-05-30 08:51:33'),
(63, 'هاجر صلاح الاشمونى', 'بكالوريوس علوم', '21', 'قويسنا', '01212065726', 'salahashmony1@gmail.com', NULL, NULL, NULL, '2021-05-30 08:53:01', '2021-05-30 08:53:01'),
(64, 'آمنه عبدالله زكى الدقونى', 'طالب علوم', '21', 'اشمون المنوفية', '01102752525', 'amna.Abdallah2421@gmail.com', NULL, NULL, NULL, '2021-05-30 09:42:13', '2021-05-30 09:42:13'),
(65, 'أحمد سعيد أحمد الاقرع', 'بكالوريوس علوم', '21', 'منوف المنوفيه', '01015714358', 'ahmed.saidalakraa@gmail.com', NULL, NULL, NULL, '2021-05-30 10:15:16', '2021-05-30 10:15:16'),
(66, 'مصطفى الشحات فتحي اسماعيل', 'بكالوريوس علوم', '22', 'منوف', '01211259145', 'mostafaesmail1337@gmail.com', NULL, NULL, NULL, '2021-05-30 10:24:56', '2021-05-30 10:24:56'),
(67, 'صفا حسام منير الشافعي', 'طالبة', '21', 'شبين الكوم المنوفية', '01098855063', '1235ndbhddjj@gmail.com', NULL, NULL, NULL, '2021-05-30 10:29:54', '2021-05-30 10:29:54'),
(68, 'سلسبيل سامي عبد الصادق جعفر', 'طالبه بكليه العلوم', '20', 'كفر فيشا - منوف المنوفيه', '01006959085', 'salsabeelgaffer@gmail.com', NULL, NULL, NULL, '2021-05-30 13:06:33', '2021-05-30 13:06:33'),
(69, 'سلسبيل سامي عبد الصادق جعفر', 'طالبه بكليه العلوم', '20', 'كفر فيشا منوف المنوفيه', '01006959085', 'salsabeelgaffer@gmail.com', NULL, NULL, NULL, '2021-05-30 13:07:54', '2021-05-30 13:07:54'),
(70, 'Taghreed Atef Morsy El-saify', 'Still studying in faculty of science', '22', 'Quesna- elmenofi', '01284883851', 'taghreedatef3@gmail.com', NULL, NULL, NULL, '2021-05-30 13:42:49', '2021-05-30 13:42:49'),
(71, 'إيناس محمد على عسل', 'كلية العلوم الفرقه الثانيه', '20', 'سمادون مركز اشمون محافظة المنوفيه', '01092340747', 'enasasal123@gmail.com', NULL, NULL, NULL, '2021-05-30 16:29:15', '2021-05-30 16:29:15'),
(74, 'سمر عبدالناصر عبدالحميد هنداوي', 'طالبة في كلية العلوم جامعة المنوفيه', '22', 'شبرابلوله منوف منوفيه', '01014574204', 'samarhendawy438@gmail.com', NULL, NULL, NULL, '2021-05-30 19:21:20', '2021-05-30 19:21:20'),
(75, 'بسنت سامي عبد المعبود ماضي', 'بكالوريوس علوم', '22', 'الحامول مركز منوف شارع ضرب الشيخ حسن', '01061856810', 'bassantmady28@gmail.com', NULL, NULL, NULL, '2021-05-30 19:22:24', '2021-05-30 19:22:24'),
(76, 'بسنت سامي عبد المعبود ماضي', 'بكالوريوس علوم', '22', 'الحامول مركز منوف شارع ضرب السيخ حسن', '01061856810', 'bassantmady28@gmail.com', NULL, NULL, NULL, '2021-05-30 19:24:13', '2021-05-30 19:24:13'),
(77, 'شروق عاطف عبدالعزيز الفرماوي', 'كليه علوم جامعه المنوفيه مستوي رايع', '22', 'فيشا الكبري منوف منوفيه', '01223966364', 'shoroukatef1234@gmail.com', NULL, NULL, NULL, '2021-05-30 19:27:10', '2021-05-30 19:27:10'),
(78, 'مريم فكري السيد', 'بكالوريوس علوم شبين الكوم', '22', 'شارع داير الناحية_طبلوها_تلا_ المنوفية', '01023653712', 'miraymomm14@gmail.com', NULL, NULL, NULL, '2021-05-30 19:31:18', '2021-05-30 19:31:18'),
(79, 'رنا جمال محمد', 'الفرقة الرابعة علوم المنوفية', '20', 'طوخ طنبشا مركز بركة السبع', '01066162798', 'ranagamal367@gmail.com', NULL, NULL, NULL, '2021-05-30 19:33:47', '2021-05-30 19:33:47'),
(80, 'محروس فتحي محروس بحيري', 'كليه العلوم جامعه المنوفيه', '21', 'قويسنا_المنوفيه', '01121025971', 'mahrousfathy94@gmail.com', NULL, NULL, NULL, '2021-05-30 19:33:47', '2021-05-30 19:33:47'),
(81, 'سندس رافت فوزي محمود', 'بكالوريوس علوم', '22', 'شبين الكوم -المنوفية', '01021709916', 'sondosrafaat65@gmail.com', NULL, NULL, NULL, '2021-05-30 19:34:25', '2021-05-30 19:34:25'),
(83, 'ايمان فارس محمد عبد الكريم', 'بكالوريوس علوم', '22', 'القناطر الخيريه', '01124359136', 'emanfaris007@gmail.com', NULL, NULL, NULL, '2021-05-30 19:40:35', '2021-05-30 19:40:35'),
(84, 'الشيماء عامر السيد أحمد حسين', 'طالب بالفرقة الرابعة بكلية العلوم', '22', 'قرية كفر شبرا بلولة_ مركز منوف', '01026503946', 'scshimaaamer99@gmail', NULL, NULL, NULL, '2021-05-30 19:57:01', '2021-05-30 19:57:01'),
(85, 'امل طارق عثمان امام', 'بكالوريوس علوم قسم كيمياء وحيوان', '22', 'محافظة المنوفية مركز شبين الكوم قرية ميت مسعود', '01154215865', 'amltarek18228@gmail.com', NULL, NULL, NULL, '2021-05-30 20:01:59', '2021-05-30 20:01:59'),
(86, 'نورا محمد فهيم ناصف', 'بكالوريوس العلوم قسم كيمياء وحيوان', '22', 'محافظة المنوفية مركز اشمون', '01211801653', 'mohamednoura686@gmail.com', NULL, NULL, NULL, '2021-05-30 20:04:35', '2021-05-30 20:04:35'),
(87, 'تقي طارق عبدالمنعم الجيزاوي', 'بكالوريوس علوم', '22', 'منوف', '01022729253', 'tokaelgezawy000@yahoo.com', NULL, NULL, NULL, '2021-05-30 20:18:34', '2021-05-30 20:18:34'),
(88, 'تقي طارق عبدالمنعم الجيزاوي', 'بكالوريوس علوم', '22', 'منوف', '01022729253', 'tokaelgezawy000@yahoo.com', NULL, NULL, NULL, '2021-05-30 20:20:13', '2021-05-30 20:20:13'),
(89, 'هاجر إبراهيم محمد صقر', 'طالبة بكلية العلوم', '21', 'مركز تلا-محافظة المنوفية', '01069933984', 'hagarsalman272@gmail.com', NULL, NULL, NULL, '2021-05-30 21:35:35', '2021-05-30 21:35:35'),
(90, 'محمود مصطفى أحمد فاضل العرابي', 'طالب بكلية الشريعة والقانون بطنطا', 'mahmoudfadel50@yahoo.com', 'كفر الترعة الجديد مركز شربين محافظة الدقهلية', '01020197784', 'mahmoudfadel50@yahoo.com', 'register/PEqpXlpX8Wyw6IXtTakxuMZm2BRwSdcCoVrsaS3j.jpg', NULL, NULL, '2021-05-31 14:11:32', '2021-05-31 14:11:32'),
(91, 'محمود مصطفى أحمد فاضل العرابي', 'طالب بكلية الشريعة والقانون بطنطا', '21', 'كفر الترعة الجديد مركز شربين محافظة الدقهلية', '01020197784', 'mahmoudfadel50@yahoo.com', NULL, NULL, NULL, '2021-05-31 14:14:29', '2021-05-31 14:14:29'),
(92, 'محمود مصطفى أحمد فاضل', 'طالب بكلية الشريعة والقانون بطنطا', '21', 'كفر الترعة الجديد مركز شربين محافظة الدقهلية', '01020197784', 'mahmoudfadel50@yahoo.com', NULL, NULL, NULL, '2021-05-31 14:15:37', '2021-05-31 14:15:37'),
(93, 'سارة أحمد إسماعيل عبد الغني', 'دبلومة إدارة وسكرتارية معهد متوسط', '28', '25ش معوض عتريس_ش الغريب _ميت عقبة العجوزة _ الجيزة', '01124222764', 'sa217454@gamail.com', NULL, NULL, NULL, '2021-06-03 23:51:04', '2021-06-03 23:51:04'),
(94, 'ابتهال عثمان ابراهيم سلام', 'تربية', '25', 'القلشي _تلا_منوفية', '01065753013', 'ibsallam305@gmail.com', NULL, 23, NULL, '2021-06-05 12:58:38', '2021-06-05 12:58:38'),
(96, 'Taghreed Atef Morsy El-saify', 'Still studying in faculty of science', '21', 'Quesna- elmenofi', '01284883851', 'taghreedatef3@gmail.com', NULL, NULL, NULL, '2021-06-22 04:13:40', '2021-06-22 04:13:40'),
(98, 'عبدالله عيد الوارث عنتر ماضى', 'باكلريوس تجاره انجليزى', '24', 'مدينه السادات المنوفيه', '01024101123', 'mady5680@gimal.com', 'register/dZiB45tXp4kKevbNaSdS57e7kLL0mGadONWnfrfZ.jpg', NULL, NULL, '2021-07-07 21:55:57', '2021-07-07 21:55:57'),
(99, 'ahmed', 'الثانوية العامة', '20', 'دماص-الدقهلية-مصر', '01095224969', 'salahahmedmm1@gmail.com', NULL, NULL, NULL, '2021-07-21 07:15:18', '2021-07-21 07:15:18'),
(102, 'ريهام حسن', 'ليسانس آثار جامعه القاهرة', '35', 'المنصوره', '01010554832', 'arch.reham2020@gmail.com', NULL, NULL, NULL, '2021-07-22 06:04:23', '2021-07-22 06:04:23'),
(103, 'Shrouk Shaban Abugalia', 'طالبه ثانوي عام', '18', 'طبلوها مركز تلا', '01556942599', 'shreoukshahbaan9@gmail.com', NULL, NULL, NULL, '2021-07-23 14:51:45', '2021-07-23 14:51:45'),
(104, 'عبدالرحمن أحمد نجم', 'الصف الخامس الابتدائي', '١١', 'المنصوره', '٠١٠١٠٥٥٤٨٣٢', 'arch.reham2020@gmail.com', NULL, 24, NULL, '2021-07-25 04:44:13', '2021-07-25 04:44:13'),
(106, 'محمود علي محمود علي', 'ليسانس حقوق', '40', 'قرية القصر -مركز الداخله- محافظة الوادي الجديد', '01201966624', 'mosmr43@gmail.com', NULL, NULL, NULL, '2021-08-10 00:02:38', '2021-08-10 00:02:38'),
(109, 'عادل زكريا عبدالله دراز', 'بكالوريوس تجارة', '34', 'Mohalet-Deyay Desouq Kafrelshikh', '01001073482', 'adel_statu@yahoo.com', NULL, 9, NULL, '2021-08-23 14:17:03', '2021-08-23 14:17:03'),
(111, 'ساره محمود', 'دبلوم الدراسيه الفنيه التجارية المتقدمة', '38', 'الدقهلية / المنصورة', '01014517970', 'saramahmoudwriter@gmail.com', NULL, NULL, NULL, '2021-09-08 14:47:54', '2021-09-08 14:47:54'),
(112, 'ساره محمود', 'دبلوم الدراسيه الفنيه التجارية المتقدمة', '38', 'الدقهلية / المنصورة', '01014517970', 'saramahmoudwriter@gmail.com', NULL, NULL, NULL, '2021-09-08 14:49:00', '2021-09-08 14:49:00'),
(113, 'دنيا جاد عبده', 'طالبة في كلية دار العلوم القاهرة', '19', 'شارع بور سعيد السيدة زينب', '01149757848', 'donyagad74@gmail.com', NULL, NULL, NULL, '2021-09-14 23:02:01', '2021-09-14 23:02:01'),
(114, 'مريم احمد', 'ثانويه عامه', '18', 'زهراء المعادي', '01091397365', 'mariemmnsor@gmail.com', NULL, NULL, NULL, '2021-09-16 14:52:03', '2021-09-16 14:52:03'),
(116, 'علاء محمد عيد صالح', 'بكالوريوس تجارة', '35', 'ابوالنمرس - الجيزة', '01030896961', 'alaas447@gmail.com', NULL, NULL, NULL, '2021-10-16 12:14:03', '2021-10-16 12:14:03'),
(117, 'علاء محمد عيد صالح', 'بكالوريوس تجارة', '35', 'ابوالنمرس - الجيزة', '01030896961', 'alaas447@gmail.com', NULL, 25, NULL, '2021-10-16 13:37:44', '2021-10-16 13:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fave_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `android_app` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ios_app` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL DEFAULT 0,
  `longitude` double NOT NULL DEFAULT 0,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat_ghost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_app` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termis_condition` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter_open_course` int(11) DEFAULT 1,
  `counter_course` int(11) DEFAULT 1,
  `counter_student` int(11) DEFAULT 1,
  `counter_teacher` int(11) DEFAULT 1,
  `web_site_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eg_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `out_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `header_logo`, `footer_logo`, `login_banner`, `image_slider`, `fave_icon`, `title`, `desc`, `footer_desc`, `address1`, `address2`, `phone1`, `phone2`, `fax`, `android_app`, `ios_app`, `email1`, `email2`, `latitude`, `longitude`, `address`, `publisher`, `facebook`, `twitter`, `instagram`, `linkedin`, `telegram`, `youtube`, `google_plus`, `snapchat_ghost`, `whatsapp`, `about_app`, `termis_condition`, `counter_open_course`, `counter_course`, `counter_student`, `counter_teacher`, `web_site_name`, `eg_account`, `out_account`, `created_at`, `updated_at`) VALUES
(1, 'setting/P6ksvpUGjBonWjiOLUXg9ju80hbYW8Urub4DHxxC.jpg', NULL, 'setting/BpSISjiwgCgIWNBcVOxn3k899QfEsotNcbbtKAG5.jpg', 'setting/Xzjlr9mpjY4lGZUqTdsrbmpsWLFvAibFiQvx70bs.png', 'setting/aavpZVqwBNRF3A8Xg0ZEhRLoANdxc3KUNJ2qXx7i.ico', 'الأكاديمية الوطنية للعلوم الشاملة', NULL, NULL, 'اكتوبر بجوار قناه مودة الفضائيه', 'المنوفيه/ شبين الكوم- شارع الاستاد الرياضي - بجوار حتحوت', '01003349678', '01067798618', NULL, NULL, NULL, 'mohelshazly0100@gmail.com', NULL, 0, 0, '0', NULL, 'https://www.facebook.com', '#', NULL, NULL, NULL, 'https://www.youtube.com/', 'https://www.google.com', NULL, '01003349678', NULL, NULL, 100, 25, 800, 35, NULL, '2420333000042021', 'EG630002024202420333000042021  Banque misr', '2021-03-29 21:15:37', '2021-05-18 18:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `site_texts`
--

CREATE TABLE `site_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key_word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_contents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_texts`
--

INSERT INTO `site_texts` (`id`, `key_word`, `title`, `contents`, `logo`, `video`, `color_title`, `color_contents`, `created_at`, `updated_at`) VALUES
(1, 'vision', 'رؤية الأكاديمية', 'الأكاديمية الوطنية للعلوم الشاملة أكاديمية متنوعة الثقافة متوازنة جامعة بين الآصالة دون انكفاء عليها، ومعاصرة دون ذوبان فيها، فهي صورة حية للثقافة المتوازنة التي تحدد ملامح شخصية المجتمع وقوام وجوده، فهي علوم معتمدة ومعتبرة نتاج الباحثين في العلم قديماً وحديثاً، في إطارالتأصيل والتنظير والشرح والتوضيح .\r\nوقد آلت الأكاديمية على نفسها خدمة العلوم التخصصية في شتى أنواع الثقافة دون تبعية لحزبية أو تقليد أعمى، أو استعمال العلوم التخصصية مطية لمصالح سياسية أو طائفية .', 'site_texts/iGkPT1Ey7dmjrwAUHYbaKEcETfcRuXKVukhqYZML.jpg', NULL, NULL, NULL, '2021-04-03 15:41:58', '2021-05-14 02:55:22'),
(2, 'message', 'رسالة الأكاديمية', 'وفاء بأمانة العلوم التخصصية، ومحافظة على حقيقة جوهرالعلوم والثقافة الشاملة المتنوعة، وسعياً لإظهار نفائس وجواهر تلك العلوم التخصصية المتنوعة، ومعالجة مفاهيم مغلوطة، وتصحيحاً لأفكار خاطئة، ونشراً لفضائل وصداً لرذائل.\r\n فالأكاديمية كيان علمي ثقافي تخصصي مدني مركزها الرئيسي بجمهورية مصر العربية لنشر الثقافة التخصصية من خلال أنشطتها ومواد دراستها العلمية .\r\nفإن الأكاديمية آلت على نفسها أن تبذل جهوداً ضخمة من خلال باحثيها لتساعد في التنمية الفكرية والعلمية للأوطان ولا سيما مصرنا الحبيبة ، وتكون لبنة قوية في البناء لصرح عظيم في سماء بنت المعز .', 'site_texts/s2ozySrFiH5Upm3XTk2i312cbDsuicoxuE5N0hK6.jpeg', NULL, NULL, NULL, '2021-04-03 15:44:12', '2021-05-14 02:58:26'),
(3, 'goals', 'أهداف الأكاديمية', 'تهدف الأكاديمية الوطنية للعلوم الشاملة إلى :\r\n\r\n1: تأصيل قيم الإخاء الإنسانية الأصيلة والاصلية . \r\n2: مجابهة التطرف والعنف الفكري من خلال نشر سماحة الأديان .\r\n3: إنشاء موقع الكتروني شامل لمواكبة التحديات المعاصرة .\r\n4: مناهجنا العلمية تتمتع بالتعددية الفكرية والتنوع الثقافي الإنساني .\r\n5: خلق جيل وطني متعدد الثقافات يحمل صفات القيادة .\r\n\r\nوالله الموفق', 'site_texts/1KVhj0vdMw4M4vgjPbqOcG8R22vq0tFPODgKUfvF.png', NULL, NULL, NULL, '2021-04-03 15:45:26', '2021-05-14 03:10:26'),
(4, 'word_of_prestent', 'كلمة رئيس الأكاديمية', 'الحمد لله رب العالمين والصلاة والسلام على أشرف المرسلين سيدنا محمد وعلى آله وصحبه وسلم أجمعين ..\r\nكان حلماً فخاطراً فاحتمالاً .. فأضحى حقيقة لا خيالاً  \r\nالأكاديمية الوطنية للعلوم الشاملة كانت حلماً يراود كياني منذ حين لاسيما وأنت تحيا في زمن تتضارب فيه الأقوال، وتتشعب فيه الأفكار، صحيحها وسقيمها،  اختلط فيه الحابل بالنابل، فكانت الأكاديمية موجةً مضادةً لكل دخيل على ثقافتنا، مشروعاً علمياً منوعاً يطل بأشعتهِ الذهبية على أرجاء المعمورة ليضيء ليلها، ويهدي حيرانها في الدروب، تستمد علومها من عبق التاريخ في أصالتها وهويتها، وتهتدي إلى فجرها الباسم من خلال العلوم المعاصرة، لتعبر الجسر بين الآصالة والمعاصرة . \r\n\r\nمحمد الشاذلي\r\nرئيس الأكاديمية الوطنية للعلوم الشاملة', 'site_texts/Ub4NFuWK9FH8N0YNg3fd4D2B3lyvPMB5KF43uo35.jpg', 'site_texts/v1.mp4', NULL, NULL, '2021-04-03 15:46:28', '2021-05-14 02:50:44'),
(5, 'how_to_study', 'الدراسة بالأكاديمية', 'يقوم برنامج الأكاديمية علي نظامين:\r\nالنظام الاول: النظام الأكاديمي وهو عباره عن 4 ترم ، مدة الترم 3 شهور ، يدرس الطالب في كل ترم 6 مواد علمية من أهم المواد العلمية التي يحتاجها الإنسان في حياته العلمية والعملية علي أن يكون الطالب قد درس 24 مادة علمية بعد إتمامه دراسة ال 4 ترم كامله ، وفي نهاية العام سوف يخضع الطالب لامتحان حتي يتثبت لإدارة الموقع أن الطالب قد حصل واستفاد من  المواد المرصوده للعام الدراسي وسوف يتم تحديد موعد حفل التخرج وفيه يتم تسليم شهادات التخرج والدروع، وسوف يلتقي الطالب في هذه الحفل بكل أعضاء هيئة التدريس الذين درسوا له علي مدار العام الدراسي\r\n\r\nالنظام الثاني: الدراسة التخصصية المفتوحه وفيها يختار الطالب ما يروق له من الكورسات أو الدبلومات أياً كان هذا التخصص أو الكورس أو الدبلومه ويقوم بالتسجيل في برنامج الكورسات والدبلومات وبمجرد تسجيل الطالب سيتم التواصل معه عن طريق إدارة الأكاديميه، وبعد اكتمال العدد المحدد للكورس سيتم التواصل من الدارس عن طريق شؤون الدارسين لتحديد مواعيد الكورس أو الدبلومه\r\n وبعد انتهاء الطالب من الدراسة الأكاديمية ( 4 ترم ) وهو النظام الاول، أو انتهاء الكورس أو الدبلومه وهو النظام الثاني سوف يحصل علي شهادة معتمده من جامعة عين شمس وهي إحدى  كبرى الجامعات المصريه الرسمية المعتمده المعترف بها عالمياً', 'site_texts/UonHPJOzbI3qYxv0tzO1OuLr1YsM15CPtH6it5VI.jpeg', NULL, NULL, NULL, '2021-04-03 15:47:14', '2021-05-13 16:10:26'),
(6, 'how_to_subscribe', 'الالتحاق بالأكاديمية', '1-	يقوم الطالب باختيار البرنامج العلمي الذي يود أن يلتحق به\r\n2-	يقوم الطالب بملئ استمارة الإلتحاق بالمستوي العلمي الذي يود أن يدرسه\r\n3-	بعد مراجعه بيانات الطالب من جهة شؤون الدارسين سوف تتواصل الاكاديمية بالطالب لإبلاغه بتفاصيل الدراسة', 'site_texts/3PV9Fxe2aZjhG8BQxUcb1t4xb8jLmiEMmIcDQJSt.jpeg', NULL, NULL, NULL, '2021-04-03 15:47:53', '2021-05-14 03:08:49'),
(7, 'main_about', 'أهلاً بكم فى الأكاديمية الوطنية للعلوم الشاملة', 'وفاء بأمانة العلوم التخصصية، ومحافظة على حقيقة جوهر العلوم والثقافة الشاملة المتنوعة، وسعياً لإظهار نفائس وجواهر تلك العلوم التخصصية المتنوعة، ومعالجة مفاهيم مغلوطة، وتصحيحاً لأفكار خاطئة، ونشراً لفضائل وصداً لرذائل.\r\n فالأكاديمية كيان علمي ثقافي تخصصي مدني مركزها الرئيسي بجمهورية مصر العربية لنشر الثقافة التخصصية من خلال أنشطتها ومواد دراستها العلمية،\r\nفإن الأكاديمية آلت على نفسها أن تبذل جهوداً ضخمة من خلال باحثيها لتساعد في التنمية الفكرية والعلمية للأوطان ولا سيما مصرنا الحبيبة ، وتكون لبنة قوية في البناء لصرح عظيم في سماء بنت المعز .', 'site_texts/o6j1ckPtCClS7YOAJO9xeoBls3Aye65mvabgPCPA.jpeg', NULL, '#000000', '#820808', '2021-04-03 15:48:57', '2021-05-14 03:25:34'),
(8, 'legal_counsel', 'المستشار القانونى للأكاديمية', 'المستشار/ أحمد المبروك', 'site_texts/Cw1wVgluTQXU46D2tQHAe4IHvxMJRDWkQrdhgnxY.jpeg', 'site_texts/2gjUk1WmsLEZnBHcdFVFRUqYbGmLXKvTz3Y3Q1tt.jpg', NULL, NULL, '2021-04-03 15:49:40', '2021-05-14 02:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `face_book` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `image`, `contents`, `cv`, `face_book`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(5, 'د. رباب النحاس', 'دكتور جامعى', 'teams/LgZ3ZMLcd7pMjdV70I8B79eGC0t77c9i4UqJqenb.jpg', '#', 'teams/0PEw4xi8G8ycu74j2yBHD7ujHYuBVixz1fKetjX7.pdf', '#', '#', '#', NULL, '2021-03-31 21:42:05', '2021-05-05 00:56:38'),
(6, 'أ.د ندى محفوظ كابوه', 'دكتور جامعى', 'teams/qsX7BpBr7hA1ivw0AxNId1IYa6oUx9ArU1ffmeto.jpg', 'دكتوراة فى العلوم والدراسات وحاصل على شهادة الدكتوراة جامعة المنوفية', 'teams/XDMelhDXkB01zpVl5bojuNKPdWgFWTtrkQERK06H.pdf', 'https://www.google.com', '#', '#', NULL, '2021-03-31 21:42:05', '2021-05-05 00:46:18'),
(11, 'أ.د أحمد الشافعي', 'دكتور جامعي', 'teams/RWnvcAvKbTPvuImtlRTuyLWOir1o8GPYyLN5EmXX.jpg', '#', 'teams/GTUoRBo9lQg5c1VUGygqk4y9TN0UVrOEJAUr52Wz.pdf', '#', '#', '#', NULL, '2021-05-05 01:06:56', '2021-05-05 01:06:56'),
(12, 'أ.د أحمد سعد عسران', 'دكتور جامعي', 'teams/EuiNWp1PEAkqqZ2aulEoXcDdEe9004xZy8HX2DvE.jpg', '#', 'teams/QdrgwSqwfdFnYBWFwWicYywzYdD4n80MS5JTDXqC.pdf', '#', '#', '#', NULL, '2021-05-05 01:38:46', '2021-05-05 01:38:46'),
(13, 'أ.د عبد الحميد يحي', 'دكتور جامعي', 'teams/mz9DrkyAUSE9EDrsnLzABctmRGyZ97hHDK3attnb.jpg', '#', 'teams/Q5vuI9OmNzKjPi5Glwo6jMl3QX3npMP0TYZcTCbx.pdf', '#', '#', '#', NULL, '2021-05-05 01:40:41', '2021-05-14 20:10:50'),
(14, 'د. نورهان النجار', 'باحث أكاديمي', 'teams/LLQTN2IEp5r4n2kCIp3r2bt2B9ur3dM2JABhgo5J.jpg', '#', 'teams/YiOgA6ihwsYj5p5cAUS3gcEwVvFmM1nfpc36oxpC.pdf', '#', '#', '#', NULL, '2021-05-05 01:43:14', '2021-05-05 01:43:14'),
(15, 'أ.د ولاء محمد عبد العزيز', 'دكتور جامعي', 'teams/2PSILQElR8xCsUK5GIiNvGIWMQd0kKOOr02cQIe8.jpg', '#', 'teams/PWQqg2OvqhNjVwUnyfP0yUUOGRhbjN0T1WMT65zc.pdf', '#', '#', '#', NULL, '2021-05-05 01:52:51', '2021-05-05 01:54:24'),
(16, 'أ.د محمد فرج', 'دكتور جامعي', 'teams/FgS7XZod2tlmyfiRQOmbqa1H9gX1RlghkLHm2POz.jpg', '#', 'teams/NpwkokRUQhUJg2UBd3VD1nbrW4WvVuCxvzaQtFpn.pdf', '#', '#', '#', NULL, '2021-05-05 01:58:29', '2021-05-05 01:58:29'),
(17, 'د. لميس سيف نايل', 'باحث أكاديمي', 'teams/aaNOzkBlm6VZyisvlLFWJkKqMYUw3LMXx8tfIZqJ.jpg', '#', 'teams/1u8PIdnU7SbMOGK35MWSsZ7yl8whGiEKvFZq9GzF.pdf', '#', '#', '#', NULL, '2021-05-05 05:38:22', '2021-05-05 05:38:22'),
(18, 'د. كريمان بكنام صدقي', 'دكتور جامعي', 'teams/gkQ1nlrXKfaOoAJTkXVGSDG1iRSqMc7EkSQm5ndM.jpg', '#', 'teams/PWSTLI0TFGg6vQ4wviqv9PHi2Ukuff4YvfP3FAhh.pdf', '#', '#', '#', NULL, '2021-05-05 12:51:24', '2021-05-05 12:51:24'),
(19, 'أ.د رانيا الكيلاني', 'دكتور جامعي', 'teams/2GJJOKHqvr2E0fxeOLHTzL0isGBPLEEbOnfKgzlT.jpg', '#', 'teams/zaypjSuw5ED6Kv5Qq5PEVoQU0sHs3hvvZUKNHigk.pdf', '#', '#', '#', NULL, '2021-05-05 12:59:06', '2021-05-05 12:59:06'),
(20, 'أ.د علا عزت', 'دكتور جامعي', 'teams/52WHtbpmdQj1f51SDmW9VUTQPyK6ydtpatxsJm6W.jpg', '#', 'teams/OcCjK9G2lcIfHvr0uyzVmF0OWIyZohy5nFd1iAE3.pdf', '#', '#', '#', NULL, '2021-05-05 14:06:32', '2021-05-05 14:06:32'),
(21, 'د. محمد بحيري', 'دكتور جامعي', 'teams/IcVaY2MIMUIEi0yfgFmjIBV8EvvsMSKfs0PS8sqH.jpg', '#', 'teams/i8e9Kq4QUA3A1dIphthWCYZKcZOKAcwYliwYunTN.pdf', '#', '#', '#', NULL, '2021-05-05 14:17:56', '2021-05-05 14:29:01'),
(22, 'د. أسماء حسنين', 'باحث أكاديمي', 'teams/sRbfF57W99BPl97FE3E7SG0jo0reny2VsONrzdE9.jpg', '#', 'teams/hm0PiSwbMaa6GyTiG41M8SbLgNQk2kD3sDXdpc49.pdf', '#', '#', '#', NULL, '2021-05-06 17:22:32', '2021-05-06 17:22:32'),
(23, 'أ.د جيهان سويد', 'دكتور جامعي', 'teams/Wl6d8v47k9eqKnmgCYKoaHtbygrerQ2n7TSGLaoW.jpg', '#', 'teams/zNCX2xZL0XHzjAfciwkDeo0XmBNGHEwinh1ybgM7.pdf', '#', '#', '#', NULL, '2021-05-06 17:32:15', '2021-05-06 17:32:15'),
(24, 'د. تهاني التري', 'مدرب مهارات ناعمه بدولة الإمارات', 'teams/Enf3qoATixUwTPMJ1FZdv2bVH7aXda4Jh6FvQpV5.jpg', '#', 'teams/TBFOVG0folUw5vDyX564fcfNeKOR6FSST9UclMzv.pdf', '#', '#', '#', NULL, '2021-05-06 17:38:35', '2021-05-06 17:38:35'),
(25, 'د. ايمان مصطفى', 'دكتور جامعي', 'teams/1xct0pp4p8A3fIzvadMfD8KoAlIuCeT5xAEK7vK6.jpg', '#', 'teams/56c4ryhM3eNofXXwayIGgV1UPmTTplGiVtaPpGXp.pdf', '#', '#', '#', NULL, '2021-05-06 17:44:30', '2021-05-06 17:44:30'),
(26, 'أ.د محمد أبو عامر', 'دكتور جامعي', 'teams/sWZHS2y75d4dIWw7szE1uPhwjQZTBJktPvJT8Iej.jpg', '#', 'teams/Oq72G0EUvgz2FBQevBz504TIlwXNj9oc5pO8okgZ.pdf', '#', '#', '#', NULL, '2021-05-06 17:53:21', '2021-05-06 17:53:21'),
(27, 'د. دعاء حسني عبد الوارث', 'دكتور جامعي', 'teams/svSrPkFn3KHGaNTXIYHcC67SnnNlwjd0eQTPQDeQ.jpg', '#', 'teams/g9C0FfmTroxtmWP8qzqv3eaeTitMcWyNk8FBNqOx.pdf', '#', '#', '#', NULL, '2021-05-06 18:06:19', '2021-05-06 18:06:19'),
(28, 'أ.د روضه حمزه', 'دكتور جامعي', 'teams/TplfXIfrrEgrrySUy0Ey4mKiC70U18qx5NK0QQwy.jpg', '#', 'teams/FuV5yKWjq1DHJKowJ58LeidY5jmREuFCXGZyLRHq.pdf', '#', '#', '#', NULL, '2021-05-07 03:12:37', '2021-05-07 03:12:37'),
(29, 'أ.د سحر محمد', 'دكتور جامعي', 'teams/n3uszVVtKiq0lCbYO2KrLfk2ATpNhc6ac2ISv9J6.jpg', '#', 'teams/Z1o1PFZY9r7lEAkJ1xRQsApwAUwdueaPubY2LI3a.pdf', '#', '#', '#', NULL, '2021-05-07 03:16:29', '2021-05-07 03:16:29'),
(30, 'أ.د كريمه شلبي', 'دكتور جامعي', 'teams/kucQq2ZOw9kesHIIpgUjY7fh8dotHxnR8z5MNyYJ.jpg', '#', 'teams/UJsfrHBGVMQfU5VHr1kjU8wbY49H0xmTPtXdLv5A.pdf', '#', '#', '#', NULL, '2021-05-07 03:21:19', '2021-05-07 03:21:19'),
(31, 'أ.د ميسون الفيومي', 'دكتور جامعي', 'teams/dhqVWDCJBjD4oSn3H3b51MqCRHQRWCLFDvuwyqBC.jpg', '#', 'teams/uWpb1TnY3S7ldXRvvEwY07aYjDVOcLFgXaViFDiC.pdf', '#', '#', '#', NULL, '2021-05-08 15:56:48', '2021-05-13 15:26:48'),
(32, 'د. غاده أحمد', 'باحث دكتوراه أصول التربيه كلية الدراسات العليا للتربية جامعة القاهره', 'teams/dyEmClzNoSRZ6ikndQqq0p9TMhcjd9jBXScUFBFR.jpg', '#', 'teams/ZLtcMi3NDeZLZpshPUnGVxaMbN7qU8JcauqU7lq0.pdf', '#', '#', '#', NULL, '2021-05-18 22:46:36', '2021-05-20 14:06:51'),
(33, 'كبير المخرجين بالتليفزيون المصري / محمد فوزي', 'محاضر ومدرب دولي باتحاد الإذاعات الأوروبيه ومحاضر بمعهد الإذاعه والتليفزيون بماسبيرو', 'teams/mll6pjYkFMWllYRz0guLMHXxH8whhqTsqHxbamGf.jpg', '#', NULL, '#', '#', '#', NULL, '2021-05-18 23:03:51', '2021-05-20 14:07:52'),
(34, 'أ. السيد عيسى', 'أستاذ اللغه العربيه بالأكاديمية', 'teams/TTjBUr2VIhOmJwWOy85inyaqLrzyu7AXuESGx8E9.jpg', '#', NULL, '#', '#', '#', NULL, '2021-05-20 14:11:59', '2021-06-01 18:00:22'),
(35, 'أ.د محمد فكري سراج الدين', 'دكتور جامعي', 'teams/GA0N5UuLicavZKTBOGuFDsz0KLY1fexMyxOprL9J.jpg', '#', 'teams/LiovBoBNpdgPlskj94WArf5C3SLZr70nGunpUPLj.pdf', '#', '#', '#', NULL, '2021-06-01 18:17:45', '2021-06-01 18:17:45'),
(36, 'أ.د سلوى سعيد ناصر', 'دكتور جامعي', 'teams/H1vwnHlPNHJFj14uNLjxYTHIPCRff0sbqaT0sdnU.jpg', '#', 'teams/A1NbhWhEh6ajAZ5FsElFJmWC35918JpBIhmRiCd2.pdf', '#', '#', '#', NULL, '2021-06-01 18:20:05', '2021-06-01 18:20:05'),
(37, 'أ.د عاطف عباس عبد الحميد', 'استشاري نظم المعلومات والأرشفة الإلكترونية - اكاديمية جرناس أبو ظبي', 'teams/l1zR3Z2Mg4YbN4UEd8WZEkiMXCQ2zxysaaNO99pd.jpg', '#', 'teams/d6TruGZYrFg0ijz1Tn82JKYJfvfG6VEcCR0OEjVW.pdf', '#', '#', '#', NULL, '2021-06-08 00:46:17', '2021-06-08 00:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` enum('student','teacher') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL DEFAULT 0,
  `longitude` double NOT NULL DEFAULT 0,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_blocked` enum('blocked','not_blocked') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not_blocked',
  `is_login` enum('online','offline') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'offline',
  `logout_time` int(11) DEFAULT NULL,
  `is_confirmed` int(11) NOT NULL DEFAULT 0,
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forget_password_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `software_type` enum('ios','android','web') COLLATE utf8mb4_unicode_ci DEFAULT 'web',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `date` date DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_activity_department_id_foreign` (`activity_department_id`);

--
-- Indexes for table `activity_departments`
--
ALTER TABLE `activity_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_level_id_foreign` (`level_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `open_courses`
--
ALTER TABLE `open_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_texts`
--
ALTER TABLE `site_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `activity_departments`
--
ALTER TABLE `activity_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `open_courses`
--
ALTER TABLE `open_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_texts`
--
ALTER TABLE `site_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_activity_department_id_foreign` FOREIGN KEY (`activity_department_id`) REFERENCES `activity_departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registers`
--
ALTER TABLE `registers`
  ADD CONSTRAINT `registers_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registers_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
