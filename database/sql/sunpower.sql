-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2023 at 10:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `message_date`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 'mgmg@gmail.com', 'Hello', '09888171887', 'Hello', '2023-04-05', '2023-04-05 05:17:10', '2023-04-05 05:17:10'),
(2, 'asf', 'asdfa', 'sdf', 'asdf', 'asdf', '2023-04-06', '2023-04-05 23:27:52', '2023-04-05 23:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `main_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title_eng`, `title_jp`, `gallery`, `created_at`, `updated_at`, `main_photo`, `description_eng`, `description_jp`) VALUES
(1, 'N4 တန်းခွဲသစ်လေးများထပ်ဖွင့်ပေးလိုက်ပါပြီရှင့်', 'N4 တန်းခွဲသစ်လေးများထပ်ဖွင့်ပေးလိုက်ပါပြီရှင့်', 'https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/335126118_894067911664856_1513029399227974186_n.jpg?stp=cp6_dst-jpg&_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Bop3izXvHIMAX8I1gYF&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBLwIgLgnAD4x3NvZpvCzjHxVWGOggzIm0NJVHn4-o6Eg&oe=643362EE,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/337710064_1245056603067292_6951629771496131846_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=m66HtYaiZhwAX-m2rji&_nc_ht=scontent.frgn4-1.fna&oh=00_AfAuW0gOeOG6Eh5TqPwy-cuhTGq6ZBBxCkYYTWpbb6QLCA&oe=64338854,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/337875815_1241089516496664_6522931188636231902_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=SHiQSJu6tE4AX8Lhevw&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBnLagjWhrKADKIjnTd9IgQI6OY9hcEBEzEUZavXmE54Q&oe=64332231,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/337835317_769215671325377_2271335142479174898_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=EfzR2oVTWAIAX9Tl-ZO&_nc_ht=scontent.frgn4-1.fna&oh=00_AfAVFYfZLH3lK7UAzuTDztizJJe_NmGwh8zYCbvfK2S4IQ&oe=6431F3BA,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/337670123_541606528061565_1409239865787961693_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=xImv_GJoK2MAX-dWv2v&_nc_ht=scontent.frgn4-1.fna&oh=00_AfCkm8tKKiIsKTA4AsE0mJDYO0AtTIiYDhReU5o4DeHMSg&oe=6431FDC3', NULL, NULL, NULL, 'N4 တန်းခွဲသစ်လေးများထပ်ဖွင့်ပေးလိုက်ပါပြီရှင့်', 'N4 တန်းခွဲသစ်လေးများထပ်ဖွင့်ပေးလိုက်ပါပြီရှင့်'),
(2, 'Today ခလေးတွေ JLPT form', 'Today ခလေးတွေ JLPT form', 'https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/335126118_894067911664856_1513029399227974186_n.jpg?stp=cp6_dst-jpg&_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Bop3izXvHIMAX8I1gYF&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBLwIgLgnAD4x3NvZpvCzjHxVWGOggzIm0NJVHn4-o6Eg&oe=643362EE,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/335382685_1612669812527674_33903740012618365_n.jpg?stp=cp6_dst-jpg&_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=p7hgxibWMNEAX9gfDIg&_nc_ht=scontent.frgn4-1.fna&oh=00_AfAiR9cZKLqk48l713vGhO90KbMgr2sdtNbcWtwMmtIFJA&oe=6431BFF3,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/335415792_874293420314731_6509819734758916718_n.jpg?stp=cp6_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=6ApHAzGhftAAX8T8ZRc&_nc_ht=scontent.frgn4-1.fna&oh=00_AfAMzIit4ZTlggSb58HfUZWwCcM9eDNnkD4oebCT2oliqQ&oe=6432D20E,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/335402067_183238987779834_6575904141175480303_n.jpg?stp=cp6_dst-jpg&_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=482HsAkqmpkAX9Ox0PH&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBJEsPyEvkV6kCu6mU-8JlFa2yUyjqSiNF5ja5LQHZlBA&oe=64332575,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/335384552_2552713488215556_5254826376909495961_n.jpg?stp=cp6_dst-jpg&_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=5HxG8UQNXi4AX_U9RMP&_nc_ht=scontent.frgn4-1.fna&oh=00_AfDnE2N0A9HZofzNpZxj4M7dnqOg-ql8c7eB9B966Lr68A&oe=64319E1B,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/335404820_126944510173543_4860988406703495592_n.jpg?stp=cp6_dst-jpg&_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=3fUH9dMJqvoAX84eY4h&_nc_ht=scontent.frgn4-1.fna&oh=00_AfB0wKQxs5oZEbpgBPxUZP7ENs_uSJn3QOgXYJIIAxxrsw&oe=6432B318,https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/335126118_894067911664856_1513029399227974186_n.jpg?stp=cp6_dst-jpg&_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Bop3izXvHIMAX8I1gYF&_nc_ht=scontent.frgn4-1.fna&oh=00_AfBLwIgLgnAD4x3NvZpvCzjHxVWGOggzIm0NJVHn4-o6Eg&oe=643362EE', NULL, NULL, NULL, 'Today ခလေးတွေ JLPT form', 'Today ခလေးတွေ JLPT form');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_04_04_081654_create_contacts_table', 1),
(11, '2023_04_05_115028_create_news_table', 2),
(12, '2023_04_05_125421_add_view_to_news_table', 3),
(13, '2023_04_05_165455_create_galleries_table', 4),
(14, '2023_04_06_062026_add_fields_to_galleries_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_eng`, `title_jp`, `description_eng`, `description_jp`, `photo`, `upload_date`, `created_at`, `updated_at`, `view`) VALUES
(1, 'AAM Technical Intern Trainees Enter Japan Today', '本日はAAMの技能実習生が日本へ入国', 'Today, AAM technical intern trainees entered Japan safely from Kansai Airport.\r\nGood luck to all of you in Japan.', '本日AAMの介護技能実習生達が関西空港から無事入国致しました。\r\n皆さん日本でも頑張って下さい。', 'https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/337835317_769215671325377_2271335142479174898_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=EfzR2oVTWAIAX9Tl-ZO&_nc_ht=scontent.frgn4-1.fna&oh=00_AfAVFYfZLH3lK7UAzuTDztizJJe_NmGwh8zYCbvfK2S4IQ&oe=6431F3BA', '2023.03.28', NULL, '2023-04-06 01:22:52', 74),
(2, 'AAM technical intern trainees leave for Japan today\r\n', '本日はAAMの技能実習生が日本へ出発\r\n', 'AAM technical intern trainees left for Japan today. I plan to enter Japan from Fukuoka Airport.\r\nGoodbye everyone! Please do your best in Japan.', '本日AAMの技能実習生達が日本へ出発しました。福岡空港から入国する予定です。\r\n皆さんサヨナラ！日本でも頑張って下さい。', 'https://scontent.frgn4-1.fna.fbcdn.net/v/t39.30808-6/337670123_541606528061565_1409239865787961693_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=xImv_GJoK2MAX-dWv2v&_nc_ht=scontent.frgn4-1.fna&oh=00_AfCkm8tKKiIsKTA4AsE0mJDYO0AtTIiYDhReU5o4DeHMSg&oe=6431FDC3', '2023.02.27', NULL, '2023-04-06 00:56:49', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
