-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2023 pada 15.49
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_labitech`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` text NOT NULL,
  `heading` text NOT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `caption`, `created_at`, `updated_at`) VALUES
(1, 'labitech.png', 'Logo Labitech', '2023-09-28 12:41:28', '2023-09-28 12:41:28'),
(2, 'lab1.jpeg', 'Penerimaan Murid Baru Sekolah Labitech', '2023-09-28 13:00:41', '2023-09-28 13:00:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_28_062941_create_admins_table', 1),
(6, '2023_09_28_062951_create_slides_table', 1),
(7, '2023_09_28_062958_create_posts_table', 1),
(8, '2023_09_28_063015_create_testimonials_table', 1),
(9, '2023_09_28_063022_create_faqs_table', 1),
(10, '2023_09_28_063033_create_pages_table', 1),
(11, '2023_09_28_063057_create_settings_table', 1),
(12, '2023_09_28_064136_create_features_table', 2),
(13, '2023_09_28_124003_create_galleries_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_heading` text NOT NULL,
  `about_content` text NOT NULL,
  `about_status` int(11) NOT NULL,
  `terms_heading` text NOT NULL,
  `terms_content` text NOT NULL,
  `terms_status` int(11) NOT NULL,
  `privacy_heading` text NOT NULL,
  `privacy_content` text NOT NULL,
  `privacy_status` int(11) NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_map` text NOT NULL,
  `contact_status` int(11) NOT NULL,
  `image_gallery_heading` text NOT NULL,
  `image_gallery_status` int(11) NOT NULL,
  `video_gallery_heading` text NOT NULL,
  `video_gallery_status` int(11) NOT NULL,
  `faq_heading` text NOT NULL,
  `faq_status` int(11) NOT NULL,
  `blog_heading` text NOT NULL,
  `blog_status` int(11) NOT NULL,
  `room_heading` text NOT NULL,
  `cart_heading` text NOT NULL,
  `cart_status` int(11) NOT NULL,
  `checkout_heading` text NOT NULL,
  `checkout_status` int(11) NOT NULL,
  `payment_heading` text NOT NULL,
  `signup_heading` text NOT NULL,
  `signup_status` int(11) NOT NULL,
  `signin_heading` text NOT NULL,
  `signin_status` int(11) NOT NULL,
  `forgot_password_heading` text NOT NULL,
  `reset_password_heading` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `about_heading`, `about_content`, `about_status`, `terms_heading`, `terms_content`, `terms_status`, `privacy_heading`, `privacy_content`, `privacy_status`, `contact_heading`, `contact_map`, `contact_status`, `image_gallery_heading`, `image_gallery_status`, `video_gallery_heading`, `video_gallery_status`, `faq_heading`, `faq_status`, `blog_heading`, `blog_status`, `room_heading`, `cart_heading`, `cart_status`, `checkout_heading`, `checkout_status`, `payment_heading`, `signup_heading`, `signup_status`, `signin_heading`, `signin_status`, `forgot_password_heading`, `reset_password_heading`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '<p dir=\\\"ltr\\\" style=\\\"text-align: justify; line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;\\\"><span style=\\\"font-size: 11pt; font-family: &quot;Darker Grotesque&quot;, sans-serif; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255); font-weight: bold;\\\">Di era modern, platform pemesanan hotel online semakin populer, namun masih ada beberapa tantangan dan masalah yang dihadapi pengguna dalam proses reservasi. Tantangan ini mungkin termasuk kurangnya rekomendasi yang dipersonalisasi, informasi yang tidak memadai tentang ketersediaan kamar, dan kesulitan dalam mengelola modifikasi atau pembatalan. Akibatnya, ada kebutuhan untuk aplikasi pemesanan kamar hotel yang lebih baik yang mengatasi masalah ini dan meningkatkan pengalaman pengguna secara keseluruhan.</span></p><p style=\\\"text-align: justify; font-family: Karla, sans-serif; font-size: 16px;\\\"><b style=\\\"background-color: rgb(255, 255, 255);\\\" id=\\\"docs-internal-guid-f1fcb9dd-7fff-0a77-53ad-74ab0092dab9\\\"><br></b></p><p dir=\\\"ltr\\\" style=\\\"text-align: justify; line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;\\\"><span style=\\\"font-size: 11pt; font-family: &quot;Darker Grotesque&quot;, sans-serif; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255); font-weight: bold;\\\">Web Hotelify adalah platform online yang memungkinkan pengguna untuk mencari dan memesan kamar hotel secara online. Pengguna dapat memasukkan kriteria pencarian seperti lokasi, tanggal check-in dan check-out, serta jumlah tamu untuk menemukan hotel yang sesuai dengan preferensi mereka. Web ini juga menampilkan informasi detail tentang hotel seperti fasilitas, harga, dan ulasan dari pelanggan sebelumnya. Setelah memilih hotel yang diinginkan, pengguna dapat memesan kamar secara online dengan cara memasukkan informasi pribadi dan pembayaran. Web pemesanan tiket hotel memudahkan pengguna dalam mencari dan memesan kamar hotel secara online dengan mudah dan cepat. Web kami juga memiliki keunggulan pada bidang interface yang menarik dan fitur pencarian yang terperinci, memudahkan pengguna untuk memfilter hasil pencarian.</span></p><p style=\\\"text-align: justify; font-family: Karla, sans-serif; font-size: 16px;\\\"><b style=\\\"background-color: rgb(255, 255, 255);\\\"><br></b></p><p dir=\\\"ltr\\\" style=\\\"text-align: justify; line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;\\\"><span style=\\\"font-size: 11pt; font-family: &quot;Darker Grotesque&quot;, sans-serif; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap; background-color: rgb(255, 255, 255); font-weight: bold;\\\">Dalam era digital saat ini, web pemesanan tiket hotel menjadi salah satu alternatif terbaik bagi para traveler untuk memesan kamar hotel dengan mudah dan cepat tanpa harus datang langsung ke hotel. Dengan banyaknya pilihan hotel dan opsi pembayaran yang disediakan oleh web pemesanan tiket hotel, pengguna dapat memilih kamar hotel yang sesuai dengan kebutuhan mereka dengan mudah dan nyaman.</span></p><p style=\\\"text-align: justify; color: rgb(33, 37, 41); font-family: Karla, sans-serif; font-size: 16px;\\\"><br></p>\', 1, \'Terms and Conditions\', \'<p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet imperdiet velit. Donec fringilla ipsum at odio tincidunt, sed eleifend est ultricies. Mauris aliquam id nunc vitae egestas. Phasellus fringilla, orci eu venenatis gravida, enim lorem suscipit tortor, et placerat erat sem ac ex. Pellentesque magna libero, condimentum eget diam vitae, scelerisque varius orci. Vestibulum tempor vulputate diam, eget aliquam mauris hendrerit et. Ut et libero auctor, accumsan turpis vel, laoreet odio.</p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">Mauris imperdiet nulla nulla, non pharetra justo placerat ut. Mauris lorem urna, egestas quis gravida id, pretium sed dolor. Etiam molestie magna auctor lacus pulvinar lobortis. Maecenas feugiat mattis velit at porta. Morbi tincidunt, velit id porta ultrices, nisi odio lobortis lacus, sit amet aliquet purus enim sit amet ipsum. Nulla sit amet mauris eget leo condimentum semper nec at ipsum. Phasellus nec dictum risus. Mauris id finibus quam. Vestibulum porta nulla sit amet tortor placerat accumsan. Aenean efficitur commodo purus at finibus. Phasellus sed dignissim diam, at vulputate magna.</p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">Sed laoreet pharetra blandit. Maecenas lacinia turpis eget nunc tempus tincidunt. Nullam cursus varius erat eget tincidunt. Aliquam eu eros sed diam volutpat ultricies. Aenean ullamcorper odio erat, a aliquet lectus semper sit amet. Aenean arcu purus, iaculis quis rutrum vitae, faucibus et nisi. Etiam tellus eros, sollicitudin id aliquam ut, suscipit id ante. Duis congue a orci a aliquam. Vestibulum nec risus bibendum, mollis purus vitae, efficitur lectus. Quisque sed eros non elit ultricies aliquam. Vivamus imperdiet sagittis odio, quis hendrerit eros. Etiam a ante ac velit egestas ultricies non sed mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\', 1, \'Privacy Policy\', \'<p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lobortis sed erat tincidunt malesuada. Vestibulum aliquet ultricies velit, non dictum odio. Aliquam finibus in felis ac rhoncus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed massa nunc, ultrices quis tempus ac, rhoncus rhoncus quam. In sed neque a urna pretium accumsan. Donec in elementum lacus. Aenean nulla ex, faucibus at ante rutrum, aliquet elementum libero. Curabitur vel rhoncus lectus. Fusce dictum ante eget lacus laoreet facilisis. Vestibulum a rutrum erat. Sed non ante sodales, semper est eget, blandit ligula.</p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">Quisque leo nunc, suscipit eu massa et, interdum suscipit augue. Nam ullamcorper enim enim, sit amet laoreet ex facilisis a. Donec vel eros quam. Ut posuere, lorem ac aliquam pulvinar, erat neque tristique ante, quis aliquam sem nibh sit amet quam. Nam vel efficitur orci. Morbi et lorem bibendum, elementum sapien a, tincidunt quam. Aenean tristique nec velit feugiat gravida. Donec eleifend ultrices accumsan. Etiam vitae blandit dui, vitae scelerisque libero. Vivamus viverra ac erat ac iaculis. Nam eleifend varius metus. Nunc elit lacus, bibendum id metus nec, eleifend maximus lorem. Vivamus facilisis ac purus congue faucibus.</p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">Aliquam erat volutpat. Quisque et quam eu nibh dignissim vulputate quis quis risus. Suspendisse vitae sodales nibh. Praesent viverra ullamcorper fermentum. Ut ex mauris, scelerisque ut felis non, suscipit sollicitudin dui. Nulla eu quam suscipit, ultricies turpis quis, condimentum orci. Etiam id condimentum orci. Donec sit amet urna sem. Quisque euismod arcu nec dolor auctor, at tempor est rhoncus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer quis ultricies ligula, non elementum ex. Nulla auctor nunc diam, eget sollicitudin dolor elementum ac. Etiam quam mauris, fringilla eget urna in, iaculis condimentum tellus. Fusce tincidunt dictum libero, eu dignissim nibh vestibulum ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">Quisque eu consectetur mi. Vivamus in risus nec diam iaculis convallis sed tempor dui. Nam non hendrerit mi, ac hendrerit tellus. Pellentesque rhoncus non lorem id dictum. Nullam luctus rhoncus leo, id faucibus risus sollicitudin quis. Phasellus sed tempus tellus. Praesent dolor massa, sagittis gravida euismod nec, tincidunt non libero.</p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">Fusce id auctor ligula. Praesent finibus nulla in dolor commodo porttitor. Duis ipsum sem, pharetra ac ultrices eget, pellentesque vel nulla. Donec dapibus lobortis quam eget faucibus. Nam nec justo egestas, scelerisque purus eget, lobortis ipsum. Aenean et blandit neque. Fusce non turpis condimentum, feugiat turpis eu, rutrum nulla.</p>\', 1, \'Contact Us\', \'<iframe src=\\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6145387566!2d107.4872652640447!3d-6.903253701014509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1673240699948!5m2!1sid!2sid\\\" width=\\\"600\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade\\\"></iframe>', 1, 'Terms And Conditions', '0', 1, 'Privacy Policy', 'Content Blog', 1, 'Contact', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.217558755118!2d106.94132817389607!3d-6.23502776105573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d7d7652295d%3A0xdf87f8e2c6a5bdbc!2sLabitech%20Jakarta%20TImur!5e0!3m2!1sen!2sid!4v1695905453156!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 'Gallery Kegiatan', 1, '1', 1, 'Faq', 1, 'Blog', 1, '1', '1', 1, '1', 1, '1', '1', 1, '1', 1, '1', 1, '2023-09-28 08:30:45', '2023-09-28 08:30:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` text NOT NULL,
  `short_desc` text NOT NULL,
  `content` text NOT NULL,
  `total_view` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `image`, `heading`, `short_desc`, `content`, `total_view`, `created_at`, `updated_at`) VALUES
(1, 'labitech.png', 'Labitech Popi Jakarta   ongoing Available Now!', 'Labitech', 'bersiap siaplah akan hadir platform Labitech', 11, '2023-09-28 10:34:50', '2023-09-28 06:22:55'),
(2, 'contoh.jpg', 'lorem ipsum', 'lorem ipsum', 'da;jfhasghahiashkfhsakfl;asjf', 1, '2023-09-28 13:24:30', '2023-09-28 13:24:30'),
(3, 'contoh.jpg', 'Kegiatan Lomba LTC', 'Penyelenggaraan lomba Labitech Talent Competition', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!', 1, '2023-09-28 13:42:16', '2023-09-28 13:42:16'),
(4, 'contoh.jpg', 'Pembiasaan Pagi', 'Para murid melakukan pembiasaan pagi', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!', 1, '2023-09-28 13:42:16', '2023-09-28 13:42:16'),
(5, 'contoh.jpg', 'Kegiatan Olahraga', 'Lorem ipsum', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!', 1, '2023-09-28 13:44:39', '2023-09-28 13:44:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `home_feature_status` text NOT NULL,
  `home_testimonial_status` text NOT NULL,
  `home_latest_post_total` text NOT NULL,
  `home_latest_post_status` text NOT NULL,
  `address` text DEFAULT NULL,
  `copyright` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `pinterest` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `theme_color_1` text NOT NULL,
  `theme_color_2` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `phone`, `email`, `home_feature_status`, `home_testimonial_status`, `home_latest_post_total`, `home_latest_post_status`, `address`, `copyright`, `facebook`, `twitter`, `linkedin`, `pinterest`, `instagram`, `theme_color_1`, `theme_color_2`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'favicon.ico', '0816 - 2626 - 19', 'hrdlabitechjuara@gmail.com', 'Show', 'Show', '4', 'Show', 'Jl. Rawa Jaya No 37, RT 8/ RW 4, Kec Duren Sawit, Jakarta Timur, DKI Jakarta, 13460', 'Copyright $copy 2023  | All Right Reserved', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.pinterest.com', 'https://instagram.com', 'FFE3E1', 'FFE3E1', '2023-09-28 08:10:41', '2023-09-28 08:10:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`id`, `image`, `heading`, `text`, `button_text`, `button_url`, `created_at`, `updated_at`) VALUES
(1, 'bg.png', 'Sekolah Laboratorium Islamic Technology', 'Sekolah Para Hafizh dan Juara', 'Labitech Popi Jakarta', NULL, '2023-09-28 10:50:50', '2023-09-28 10:50:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `photo`, `name`, `designation`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'labitech.png', 'Masyarakat Labitech', 'Bintang 5', 'Keren!!!!', '2023-09-28 11:36:55', '2023-09-28 11:36:56'),
(2, 'labitech.png', 'Admin Labitech', 'Mantap banget', 'Keren', '2023-09-28 12:07:10', '2023-09-28 12:07:11'),
(3, 'labitech.png', 'Dymas Arya Nanda', 'Pengalaman terbaik', 'Guru guru disini sangat ramah dan merangkul', '2023-09-28 13:45:48', '2023-09-28 13:45:48'),
(4, 'labitech.png', 'Alan Turismo', 'KBM sangat menyenangkan', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,\r\n    consectetur ducimus sapiente necessitatibus adipisci assumenda quasi\r\n    eligendi modi natus ipsam illo recusandae vitae. Non repudiandae enim\r\n    accusamus ad adipisci facere!', '2023-09-28 13:46:44', '2023-09-28 13:46:44'),
(5, 'labitech.png', 'Anjar Tukisman', 'sangat terbaik', 'pelajaran yang terbaik dan bagus', '2023-09-28 13:47:52', '2023-09-28 13:47:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
