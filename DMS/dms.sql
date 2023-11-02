-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 10:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_phone` varchar(255) NOT NULL,
  `branch_address` text NOT NULL,
  `branch_state` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `branch_phone`, `branch_address`, `branch_state`, `created_at`, `updated_at`) VALUES
(1, 'ရန်ကုန်ရုံးချုပ်', '09979668782', 'အမှတ်(၁၀)၊ မြေညီထပ်၊ လှိုင်မြို့နယ်၊ ရန်ကုန်', 'ရန်ကုန်', NULL, NULL),
(2, 'မန္တလေးရုံးချုပ်', '09979668782', 'အမှတ်(၈၀)၊ မန္တလေးမြို့', 'မန္တလေး', NULL, NULL),
(3, 'နေပြည်တော်ရုံးချုပ်', '09979668782', 'အမှတ်(၁၂၀)၊ နေပြည်တော်မြို့', 'နေပြည်တော်', NULL, NULL),
(4, 'ပဲခူးရုံးချုပ်', '09979668782', 'အမှတ်(၇၀)၊ ပဲခူးမြို့', 'ပဲခူး', NULL, NULL),
(5, 'မကွေးရုံးချုပ်', '09979668782', 'အမှတ်(၄၃)၊ ပွင့်ဖြူမြို့နယ်၊ မကွေး', 'မကွေး', NULL, NULL),
(6, 'စစ်ကိုင်းရုံးချုပ်', '09979668782', 'အမှတ်(၁၀)၊ မုံရွာမြို့', 'စစ်ကိုင်း', NULL, NULL),
(7, 'ဧရာဝတီရုံးချုပ်', '09979668782', 'အမှတ်(၁၄၀)၊ ပုသိမ်မြို့', 'ဧရာဝတီ', NULL, NULL),
(8, 'တနသ်ာရီရုံးချုပ်', '09979668782', 'အမှတ်(၂၀၈)၊ မြိတ်မြို့', 'တနသ်ာရီ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_phone`, `contact_description`, `created_at`, `updated_at`) VALUES
(7, 'fgretrt', '09876543212', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2023-03-21 02:38:48', '2023-03-21 02:38:48'),
(8, 'sdfdf', '09876543212', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2023-03-21 02:39:13', '2023-03-21 02:39:13'),
(9, 'dsdfd', '09876543212', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2023-03-21 02:39:22', '2023-03-21 02:39:22'),
(13, 'HSLH', '09979668782', 'Hello', '2023-03-23 08:40:16', '2023-03-23 08:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(6, '2023_03_03_042712_create_sessions_table', 1),
(19, '2014_10_12_000000_create_users_table', 2),
(20, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(21, '2014_10_12_100000_create_password_resets_table', 2),
(22, '2019_08_19_000000_create_failed_jobs_table', 2),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(24, '2023_03_04_152253_create_roles_table', 2),
(33, '2023_03_18_154546_create_rates_table', 3),
(34, '2023_03_18_154709_create_branches_table', 3),
(35, '2023_03_19_081109_create_orders_table', 4),
(36, '2023_03_20_154724_create_contacts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `sender_phone` varchar(255) NOT NULL,
  `pickup_address` text NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_vehicle` varchar(255) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `receiver_phone` varchar(255) NOT NULL,
  `receiver_address` text NOT NULL,
  `estimate_arrival_date` date DEFAULT NULL,
  `deliver_method` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `parcel_price` int(11) DEFAULT NULL,
  `delivery_fee` int(11) DEFAULT NULL,
  `parcel_weight` int(11) DEFAULT NULL,
  `sender_note` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `sender_name`, `sender_phone`, `pickup_address`, `pickup_date`, `pickup_vehicle`, `receiver_name`, `receiver_phone`, `receiver_address`, `estimate_arrival_date`, `deliver_method`, `payment_method`, `parcel_price`, `delivery_fee`, `parcel_weight`, `sender_note`, `order_status`, `user_id`, `created_at`, `updated_at`) VALUES
(11, '#81092600', 'Hla Hla', '09853167893', 'Mandalay', '2023-03-24', 'ကား', 'Aye Aye', '09875432576', 'Yangon', NULL, 'အိမ်အရောက်', 'လက်ခံသူရှင်း', 7000, NULL, NULL, NULL, 'ပစ္စည်းယူဆောင်ပြီး', 1, '2023-02-15 21:40:59', '2023-03-23 09:33:36'),
(12, '#65016073', 'Kyaw Kyaw', '09853167893', 'Bago', '2023-03-24', 'စက်ဘီး', 'Aye Aye', '09875432576', 'Yangon', NULL, 'အောင်မင်္ဂလာအဝေးပြေးဂိတ်', 'ပို့သူရှင်း', NULL, NULL, NULL, NULL, 'ပစ္စည်းလာယူနေဆဲ', 1, '2022-10-12 21:41:41', '2023-03-23 09:33:48'),
(13, '#10717876', 'Mya Mya', '09853167893', 'dsdsd', '2023-03-24', 'ကား', 'Aye Aye', '09875432576', 'sdsdsdsd', NULL, 'ဒဂုံဧရာအဝေးပြေးဂိတ်', 'ပို့သူရှင်း', NULL, NULL, NULL, NULL, 'ဂိုထောင်ရောက်ရှိ', 1, '2022-11-09 03:32:00', '2023-03-23 09:34:01'),
(14, '#42324425', 'July', '09853167893', 'sdfsdf', '2023-03-24', 'စက်ဘီး', 'August', '09875432576', 'dsfdsfdf', NULL, 'အိမ်အရောက်', 'လက်ခံသူရှင်း', 5000, NULL, NULL, NULL, 'ပို့ဆောင်နေပါပြီ', 1, '2022-12-15 03:33:00', '2023-03-23 09:34:16'),
(15, '#76566479', 'Tun Tun', '09853167893', 'dfdfd', '2023-03-24', 'ကား', 'Mya Mya', '09875432576', 'dfsdfd', NULL, 'အောင်မင်္ဂလာအဝေးပြေးဂိတ်', 'ပို့သူရှင်း', NULL, NULL, NULL, NULL, 'ပို့ဆောင်ပြီးပါပြီ', 1, '2023-01-18 03:34:10', '2023-03-23 09:34:32'),
(16, '#20402093', 'KKO', '09853167893', 'dfdsfd', '2023-03-24', 'ကား', 'Oo', '09875432576', 'dfdfd', NULL, 'ဒဂုံဧရာအဝေးပြေးဂိတ်', 'လက်ခံသူရှင်း', 5000, NULL, NULL, NULL, 'အော်ဒါတင်ထားဆဲ', 1, '2023-02-14 03:34:56', '2023-03-22 03:34:56'),
(17, '#55436539', 'DD', '09853167893', 'dfdsfd', '2023-03-23', 'ကား', 'AA', '09875432576', 'dfdsfdsf', NULL, 'အိမ်အရောက်', 'ပို့သူရှင်း', NULL, NULL, NULL, NULL, 'အော်ဒါတင်ထားဆဲ', 1, '2023-03-22 03:35:18', '2023-03-22 03:35:18'),
(18, '#99952799', 'YY', '09853167893', 'dfsdfds', '2023-03-24', 'ကား', 'KK', '09875432576', 'fsdfsdf', NULL, 'အောင်မင်္ဂလာအဝေးပြေးဂိတ်', 'ပို့သူရှင်း', NULL, NULL, NULL, NULL, 'အော်ဒါတင်ထားဆဲ', 1, '2023-03-22 03:35:50', '2023-03-22 03:35:50'),
(21, '#27762795', 'UU', '09853167893', 'ewrere', '2023-03-24', 'ကား', 'DD', '09875432576', 'werewre', NULL, 'အိမ်အရောက်', 'ပို့သူရှင်း', NULL, NULL, NULL, NULL, 'အော်ဒါတင်ထားဆဲ', 1, '2022-12-08 03:49:40', '2023-03-22 03:49:40'),
(23, '#66752756', 'XX', '09853167893', 'fdfds', '2023-03-24', 'ကား', 'SS', '09875432576', 'dfsdd', NULL, 'အောင်မင်္ဂလာအဝေးပြေးဂိတ်', 'ပို့သူရှင်း', NULL, NULL, NULL, NULL, 'အော်ဒါတင်ထားဆဲ', 1, '2023-01-11 03:50:35', '2023-03-22 03:50:35'),
(24, '#50706383', 'Han Su', '09979668782', 'Yangon', '2023-03-24', 'ကား', 'KKO', '09979668782', 'Mandalay', '2023-03-25', 'အိမ်အရောက်', 'ပို့သူရှင်း', NULL, 2000, 3, NULL, 'ပစ္စည်းလာယူနေဆဲ', 8, '2023-03-23 08:39:28', '2023-03-23 08:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_location` bigint(20) UNSIGNED NOT NULL,
  `to_location` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `from_location`, `to_location`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2000, NULL, NULL),
(2, 1, 2, 4000, NULL, NULL),
(3, 1, 3, 4000, NULL, NULL),
(4, 1, 4, 3000, NULL, NULL),
(5, 1, 5, 4500, NULL, NULL),
(6, 1, 6, 6000, NULL, NULL),
(7, 1, 7, 3000, NULL, NULL),
(8, 1, 8, 6000, NULL, NULL),
(9, 2, 2, 2000, NULL, NULL),
(10, 2, 1, 4000, NULL, NULL),
(11, 2, 3, 4000, NULL, NULL),
(12, 2, 4, 3000, NULL, NULL),
(13, 2, 5, 4500, NULL, NULL),
(14, 2, 6, 6000, NULL, NULL),
(15, 2, 7, 3000, NULL, NULL),
(16, 2, 8, 6000, NULL, NULL),
(17, 3, 3, 2000, NULL, NULL),
(18, 3, 1, 4000, NULL, NULL),
(19, 3, 2, 4000, NULL, NULL),
(20, 3, 4, 3000, NULL, NULL),
(21, 3, 5, 4500, NULL, NULL),
(22, 3, 6, 6000, NULL, NULL),
(23, 3, 7, 3000, NULL, NULL),
(24, 3, 8, 6000, NULL, NULL),
(25, 4, 4, 2000, NULL, NULL),
(26, 4, 1, 4000, NULL, NULL),
(27, 4, 2, 4000, NULL, NULL),
(28, 4, 3, 3000, NULL, NULL),
(29, 4, 5, 4500, NULL, NULL),
(30, 4, 6, 6000, NULL, NULL),
(31, 4, 7, 3000, NULL, NULL),
(32, 4, 8, 6000, NULL, NULL),
(33, 5, 5, 2000, NULL, NULL),
(34, 5, 1, 4000, NULL, NULL),
(35, 5, 2, 4000, NULL, NULL),
(36, 5, 3, 3000, NULL, NULL),
(37, 5, 4, 4500, NULL, NULL),
(38, 5, 6, 6000, NULL, NULL),
(39, 5, 7, 3000, NULL, NULL),
(40, 5, 8, 6000, NULL, NULL),
(41, 6, 6, 2000, NULL, NULL),
(42, 6, 1, 4000, NULL, NULL),
(43, 6, 2, 4000, NULL, NULL),
(44, 6, 3, 3000, NULL, NULL),
(45, 6, 4, 4500, NULL, NULL),
(46, 6, 5, 6000, NULL, NULL),
(47, 6, 7, 3000, NULL, NULL),
(48, 6, 8, 6000, NULL, NULL),
(49, 7, 7, 2000, NULL, NULL),
(50, 7, 1, 4000, NULL, NULL),
(51, 7, 2, 4000, NULL, NULL),
(52, 7, 3, 3000, NULL, NULL),
(53, 7, 4, 4500, NULL, NULL),
(54, 7, 5, 6000, NULL, NULL),
(55, 7, 6, 3000, NULL, NULL),
(56, 7, 8, 6000, NULL, NULL),
(57, 8, 8, 2000, NULL, NULL),
(58, 8, 1, 4000, NULL, NULL),
(59, 8, 2, 4000, NULL, NULL),
(60, 8, 3, 3000, NULL, NULL),
(61, 8, 4, 4500, NULL, NULL),
(62, 8, 5, 6000, NULL, NULL),
(63, 8, 6, 3000, NULL, NULL),
(64, 8, 7, 6000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', NULL, NULL),
(2, 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('97v3afjIyaJro3oA8Qs0889DQIobI5mSuEE3Y6HG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/111.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHpTZG5pMEMxYXlKSElzWWNLZGlqYnBOaUZJdmlxMnBjY1NCc0twTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1677854154),
('9z8xuU2v2b3NyRstU08L9IFI2Du741rJ43OpsbME', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/111.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGlLMmxhaFFaRUVEU3c0cW1VWHZZNkNuRjFBS3lzY1lnUEpvdDR4diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1677856060);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'KKO', '09876543212', 'kko@gmail.com', NULL, '$2y$10$vJHa8nKkDBUbhEbRenUA5.EOF2G2VSv7gUHBcjZzCuzB2oqgR5A06', NULL, '2022-09-14 04:50:56', NULL),
(2, 2, 'Admin', '09876543212', 'admin@gmail.com', NULL, '$2y$10$G4zY9Su50iVrHHCFBcJLXOl4EB2n1D4.YIupbSk6aqtV7g6xO86XS', NULL, NULL, NULL),
(7, 1, 'Han Su', '09979668782', 'hansulinnhtet@gmail.com', NULL, '$2y$10$mNogV/V1.FIdOJQZrt7kQ.rgRLDD7TWs8l8R5GBNUh2GMn.wXWY4q', NULL, '2022-09-16 10:25:09', '2023-03-19 10:25:09'),
(8, 1, 'Han Su', '09979668782', 'hansu@gmail.com', NULL, '$2y$10$ZbhnJFiWazKJUzZuYr2w7eDePLOB5M37wf9xkb8DQDsBsbJFUBolO', 'NeCvpuOQgZpVbuveWWKDYpt6Meb84x90dxOgbyMjWdW0fIoJ9twBSS0KfRks', '2022-10-19 10:27:26', '2023-03-19 10:27:26'),
(9, 1, 'Winter', '09979668782', 'winter@gmail.com', NULL, '$2y$10$74J/WA2uQahvC3xWh4y4u.nW96ON/b/ykh1CavCdbXHSAyJzjG00i', NULL, '2022-11-24 10:28:50', '2023-03-19 10:28:50'),
(10, 1, 'Rina', '09979668782', 'rina@gmail.com', NULL, '$2y$10$xvrCNdjdls0U.8DD66kbFuo24s4qvFldkXbZZwFrB6aIajhp4Givi', NULL, '2022-11-25 10:29:45', '2023-03-19 10:29:45'),
(11, 1, 'Taeyeon', '09979668782', 'taeyeon@gmail.com', NULL, '$2y$10$Mmig29gC3F7mepzrbskTIu/9C94BtXe3F5hs/y4s0PeDCzPA0nrwu', NULL, '2022-11-25 19:47:04', '2023-03-19 19:47:04'),
(12, 1, 'TaeTae', '09979668782', 'taetae@gmail.com', NULL, '$2y$10$gYey6/s8nI4inc/7g//IButfNdYkb7KamBBabTV50V72FSy.EHWB6', NULL, '2022-12-13 20:32:37', '2023-03-19 20:32:37'),
(13, 1, 'TaeTae', '09979668782', 'taetae1@gmail.com', NULL, '$2y$10$FUW4hORFY4A./vmdiLrAouqIfeSNpIhlCi0MDJ4NeaVc1U2DebEFa', NULL, '2022-12-23 20:36:08', '2023-03-19 20:36:08'),
(14, 1, 'TaeTae', '09979668782', 'taetae2@gmail.com', NULL, '$2y$10$Ze.ak8BTHDacJzkLIr0J4.SPxR9lFX.Wqsn2wdEd9QjEO/6MdNQVa', NULL, '2022-12-25 20:49:59', '2023-03-19 20:49:59'),
(15, 1, 'TaeTae', '09979668782', 'taetae3@gmail.com', NULL, '$2y$10$IB/iY6ltH329Ju98Lj2KTO/zlUHXnn.g4uVjEDb.j2qqEAAxyofqa', NULL, '2022-12-28 20:52:08', '2023-03-19 20:52:08'),
(16, 1, 'TaeTae', '09979668782', 'taetae4@gmail.com', NULL, '$2y$10$/15qk77THj7dhGB0qZuCy.wTyE1xy9sql1XsU5TAOc1u4TiUGudhy', NULL, '2022-12-31 20:55:24', '2023-03-19 20:55:24'),
(17, 1, 'TaeTae', '09979668782', 'taetae5@gmail.com', NULL, '$2y$10$wu6Pu5ie1W9r7bXNZIoseurmqUxD0WneTHEGSUyNbjujm1/ehu54e', NULL, '2023-01-09 20:56:40', '2023-03-19 20:56:40'),
(18, 1, 'TaeTae', '09979668782', 'taetae6@gmail.com', NULL, '$2y$10$po.HA7UlyvHg6QqnDWTFA.f3uWLPh08Dz9DuEX61MUXSLG.uiwOG6', NULL, '2023-01-04 20:58:57', '2023-03-19 20:58:57'),
(19, 1, 'GG', '09876543212', 'gg@gmail.com', NULL, '$2y$10$hT3YPzFZjYBcMtLzJI6PN.gjaT3hGfW7QJLNaeCgihKeWJMylz.Wu', NULL, '2023-02-01 08:55:27', '2023-03-20 08:55:27'),
(20, 1, 'GG', '09876543212', 'gg1@gmail.com', NULL, '$2y$10$l6Wo20/2WgGQxhKl9LsS8eNwhXTAmxUXb5KhHdb93Il1IAhb.MnkC', NULL, '2023-02-09 08:56:02', '2023-03-20 08:56:02'),
(21, 1, 'GG', '09876543212', 'gg2@gmail.com', NULL, '$2y$10$9DJZz2JhSojYSZzu52WP/ewFHcGWt5VVCpS2ADMr7WfkOgM5aem42', NULL, '2023-02-11 08:56:36', '2023-03-20 08:56:36'),
(22, 1, 'hs', '09876543211', 'hs@gmail.com', NULL, '$2y$10$NNJecvMEZtlmC9LJrZ1pVeWz.jO.sAL8Z5TuDnk3o248Kqx7XiC.G', NULL, '2023-02-20 08:59:12', '2023-03-20 08:59:12'),
(23, 1, 'dfd', '09876543123', 'dfdf@gmail.com', NULL, '$2y$10$2mV9jHn7EQLdhYMvUVLMyexXOctJwLPAmtXT4WzTC8wgRriMbI.4u', NULL, '2023-02-22 09:01:06', '2023-03-20 09:01:06'),
(24, 1, 'dfdfdfd', '09876543212', 'dfdfd@gmail.com', NULL, '$2y$10$QrDrTxAej9sZmEIYiC9oqua8QlQLtmcWVLl0FxwDt4xkogImXAaGy', NULL, '2023-03-01 09:01:49', '2023-03-20 09:01:49'),
(25, 1, 'rr', '09876543212', 'rr@gmail.com', NULL, '$2y$10$mVvWzy.o1Y3QITgK6jbDnu5pjaL/29/Tcnqpkg5MhTyc9sqCIoQY2', NULL, '2023-03-09 09:06:08', '2023-03-20 09:06:08'),
(26, 1, 'tt', '09876543212', 'tt@gmail.com', NULL, '$2y$10$2hv0KsTM0Tb7Ri7lV7V0Ou6YKPlU.IKmG/1Bt/jPi9tLtap6noZAO', NULL, '2023-03-14 09:06:35', '2023-03-20 09:06:35'),
(27, 1, 'yy', '09876543212', 'yy@gmail.com', NULL, '$2y$10$WzxVSBKviQkpCTHEoCS5F.fDzTlPa1fh.u2fd8qu9JUNY9L0j5d2e', NULL, '2023-03-17 09:07:48', '2023-03-20 09:07:48'),
(28, 1, 'Han Su Linn', '09979668782', 'hansulinn@gmail.com', NULL, '$2y$10$N3PGP7Cd7fRv6W09RkrY0e9sZpcQZV0i9vaBV8XoFo68fFLia2/vi', NULL, '2023-03-21 22:34:06', '2023-03-20 22:34:06'),
(29, 1, 'UU', '09876543212', 'uu@gmail.com', NULL, '$2y$10$wO5lKmtfPoWO4yhbm86tV.5IEncqJZsmCdHwG3Whxd0Boll7wVg.i', NULL, '2023-03-24 21:50:08', '2023-03-24 21:50:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
