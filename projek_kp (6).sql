-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 05:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_table`
--

CREATE TABLE `address_table` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `town` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_table`
--

INSERT INTO `address_table` (`address_id`, `user_id`, `province`, `postcode`, `address`, `town`) VALUES
(11, 5, 'Jawa Timur', '60111', 'Perum ITS Blok U No. 124', 'Surabaya'),
(12, 6, 'Jawa Timur', '60111', 'Gebang', 'Surabaya'),
(13, 8, 'Jawa Timur', '60164', 'Perak', 'Surabaya'),
(14, 11, 'Jekardah', '14045', 'Anak Jaksel', 'Jakarta Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_buy` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `approve_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_table`
--

INSERT INTO `cart_table` (`cart_id`, `user_id`, `date_buy`, `flag`, `approve_flag`) VALUES
(17, 6, '2019-08-06 08:56:38', 1, 1),
(18, 5, '2019-08-06 08:56:38', 1, 1),
(19, 6, '2019-08-06 08:56:38', 1, 1),
(20, 6, '2019-08-06 08:56:38', 0, 1),
(21, 5, '2019-08-06 08:56:38', 1, 1),
(22, 8, '2019-08-06 08:56:39', 1, 1),
(23, 5, '2019-08-06 08:56:39', 1, 1),
(26, 5, '2019-08-06 08:56:39', 1, 1),
(32, 5, '2019-08-06 08:56:39', 0, 1),
(37, 11, '2019-08-22 08:57:52', 1, 0),
(38, 11, '2019-08-22 09:39:00', 1, 0),
(39, 11, '2019-08-22 09:44:05', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `parent_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`, `parent_category_id`) VALUES
(42, 'Ahli Daya', 0),
(43, 'Paket Borongan', 0),
(56, 'Administration Services', 42),
(57, 'Facility Services', 43),
(58, 'Security Services', 43),
(59, 'Operator Services', 43),
(60, 'Gate Services', 43);

-- --------------------------------------------------------

--
-- Table structure for table `chat_table`
--

CREATE TABLE `chat_table` (
  `chat_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `guid` varchar(100) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_table`
--

INSERT INTO `chat_table` (`chat_id`, `message`, `nickname`, `guid`, `timestamp`) VALUES
(1, 'haii aku mau nego', 'opi', 'c01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `message_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `submit_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`message_id`, `full_name`, `email`, `message`, `submit_time`, `flag`) VALUES
(5, 'Rizvi Sofbrina', 'rizvi@gmail.com', 'saya menyarankan ..', '2019-08-03 15:38:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_cart_table`
--

CREATE TABLE `product_cart_table` (
  `product_cart_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cart_table`
--

INSERT INTO `product_cart_table` (`product_cart_id`, `cart_id`, `product_id`, `quantity`, `add_time`) VALUES
(16, 17, 38, 1, '2019-06-27 07:35:02'),
(17, 17, 39, 2, '2019-06-27 07:35:12'),
(18, 18, 38, 1, '2019-07-01 06:13:08'),
(19, 17, 38, 2, '2019-07-02 03:11:10'),
(20, 17, 41, 1, '2019-07-02 03:11:19'),
(21, 19, 38, 2, '2019-07-02 04:08:22'),
(27, 20, 43, 1, '2019-07-02 06:05:29'),
(28, 20, 40, 4, '2019-07-02 07:27:58'),
(29, 21, 42, 1, '2019-07-10 03:42:03'),
(30, 21, 42, 2, '2019-07-10 03:43:46'),
(31, 22, 38, 1, '2019-07-10 03:50:02'),
(32, 21, 38, 1, '2019-07-29 01:54:56'),
(33, 21, 38, 1, '2019-07-29 01:55:02'),
(35, 23, 42, 1, '2019-08-03 06:39:18'),
(38, 23, 38, 1, '2019-08-05 07:05:23'),
(39, 26, 43, 10, '2019-08-05 08:50:15'),
(45, 32, 42, 4, '2019-08-06 01:33:50'),
(46, 32, 38, 2, '2019-08-06 06:53:19'),
(49, 32, 38, 1, '2019-08-12 07:21:01'),
(52, 37, 38, 2, '2019-08-22 01:55:23'),
(53, 37, 39, 1, '2019-08-22 01:55:54'),
(54, 37, 40, 1, '2019-08-22 01:56:00'),
(55, 37, 42, 4, '2019-08-22 01:56:09'),
(56, 38, 38, 2, '2019-08-22 02:38:45'),
(57, 39, 40, 1, '2019-08-22 02:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_images_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_link` varchar(100) NOT NULL,
  `image_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_images_id`, `product_id`, `image_link`, `image_detail`) VALUES
(37, 37, 'uploads/secretary.jpg', 'uploads/secretary_detail.png'),
(38, 38, 'uploads/administrasi.jpg', 'uploads/secretary_detail.png'),
(39, 39, 'uploads/resepsionis.jpg', 'uploads/secretary_detail.png'),
(40, 40, 'uploads/callcenter.jpg', 'uploads/secretary_detail.png'),
(41, 41, 'uploads/itOfficer.jpg', 'uploads/secretary_detail.png'),
(42, 42, 'uploads/entryData.jpg', 'uploads/secretary_detail.png'),
(43, 43, 'uploads/housekeeping.jpg', 'uploads/housekeeping_detail.png'),
(44, 44, 'uploads/driver.jpg', 'uploads/housekeeping_detail.png'),
(45, 45, 'uploads/officeboy.jpg', 'uploads/housekeeping_detail.png'),
(46, 46, 'uploads/security.jpg', 'uploads/housekeeping_detail.png'),
(47, 47, 'uploads/security.jpg', 'uploads/housekeeping_detail.png'),
(48, 48, 'uploads/operator1.jpg', 'uploads/housekeeping_detail.png'),
(49, 49, 'uploads/operator1.jpg', 'uploads/housekeeping_detail.png'),
(50, 50, 'uploads/operator1.jpg', 'uploads/housekeeping_detail.png'),
(51, 51, 'uploads/operator1.jpg', 'uploads/housekeeping_detail.png'),
(52, 52, 'uploads/accessgate.jpg', 'uploads/housekeeping_detail.png'),
(53, 53, 'uploads/parkingmanagement.jpg', 'uploads/housekeeping_detail.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active_flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `category_id`, `seller_id`, `product_name`, `price`, `short_desc`, `description`, `add_time`, `active_flag`) VALUES
(37, 56, 1, 'Secretary', '6200000.00', 'Pelayanan dalam mendukung aktivitas manajemen.', '<ul><li>PT PDS menyediakan sekretaris yang memiliki kemampuan bahasa Inggris dan komunikasi yang baik, penampilan menarik, berkepribadian dan memiliki interpersonal skill. Mereka siap memberikan pelayanan secara profesional dalam mendukung aktivitas manajemen.</li></ul>', '2019-08-20 07:42:43', 0),
(38, 56, 1, 'Administration Officer', '6200000.00', 'Pelayanan dalam mendukung proses bisnis.', '<ul><li> PT PDS menyediakan layanan administrasi dan entry data yang didukung personil yang memiliki terampil dan kemampuan melakukan chek dan validitas dokumen dan menjaga kerahasiannya. Layanan ini diberikan untuk mendukung proses bisnis dan demi keberhasilan perusahaan pelanggan dalam menjalankan usaha. Personil yang ditugaskan mampu melakukan pekerjaan secara teliti dan konsisten. </li><ul>', '2019-08-20 07:42:43', 0),
(39, 56, 1, 'Receptionist', '6200000.00', 'Memiliki sikap positif dan kecakapan komunikasi dalam melayani tamu perusahaan.', '<ul><li> PT PDS menyediakan jasa pelayanan Resepsionis dengan kemampuan yang handal dalam melayani tamu perusahaan dengan sikap positif yang diimbangi dengan penguasaan bahasa Inggris yang memadai dan komunikasi yang menyenangkan. Selain penampilan fisik yang menarik, mereka sangat mengutamakan kualitas pelayanan, dengan menjaga etika. </li><ul>', '2019-08-20 07:42:43', 0),
(40, 56, 1, 'Call Center', '6200000.00', 'Pelayanan untuk membantu pelanggan dalam mengelola hubungan dengan relasi bisnis.', '<ul><li> PT PDS memberikan layanan call center untuk membantu pelanggan dalam mengelola hubungan dengan relasi bisnis. PT PDS buka hanya menyediakan sumber daya manusia telekomunikasi terdidik, tetapi juga sistem dan metode serta hardware and applications yang up-to-date. Dengan demikian pengoperasian call center dapat berjalan secara efektif dalam mendukung business processes pelanggan. </li></ul>', '2019-08-20 07:42:43', 0),
(41, 56, 1, 'IT Officer', '6200000.00', 'Memiliki kemampuan dalam penerapan teori dan kerja praktik yang handal.', '<ul><li> PT PDS menyediakan layanan yang didukung kompetensi dan keterampilan. Personil yang ditugaskan mampu melakukan pekerjaan dengan penerapan tugas dan kerja praktik yang handal. </li></ul>', '2019-08-20 07:42:43', 0),
(42, 56, 1, 'Entry Data', '6200000.00', 'Pelayanan dalam pengelolaan input data secara tepat dan akurat.', '<ul><li> Input data dapat menjadi sangat memakan waktu dan memiliki biaya yang tinggi untuk pemeliharaannya. Tak perlu khawatir, PDS menyediakan dukungan yang diperlukan untuk mengelola kebutuhan entry data, dengan menerapkan teknologi dan teknik terbaik untuk menyediakan kualitas kerja dan pelayanan yang unggul. </li></ul>', '2019-08-20 07:42:43', 0),
(43, 57, 1, 'Housekeeping', '6200000.00', 'Pelayanan dalam mendukung aktivitas kebersihan gedung.', '<ul><li>PT PDS menyediakan layanan housekeeping yang terdiri dari petugas kebersihan, perawatan taman hingga petugas kebersihan gedung pencakar langit bersertifikasi. Layanan yang diberikan telah mengacu pada standar best practices, dan telah teruji dalam melayani rumah sakit standar internasional.</li></ul>', '2019-08-20 07:42:43', 0),
(44, 57, 1, 'Driver', '6200000.00', 'Pelayanan dalam menyediakan pengemudi beserta armadanya.', '<ul><li> PT PDS menyediakan jasa layanan pengemudi, yang didukung oleh para pengemudi yang terampil dan cekatan yang mampu memberikan kenyamanan bagi penumpangnya. Mereka bukan sekedar memiliki SIM, tetepi juga telah  dilatih tetang  mengemudi yang aman melalui pelatihan safety riding, serta sikap dan perilaku yang baik, sopan dan memiliki dedikasi yang baik. </li></ul>', '2019-08-20 07:42:43', 0),
(45, 57, 1, 'Office Boy', '6200000.00', 'Pelayanan dalam menjaga aktivitas kebersihan gedung secara harian atau berkala.', '<ul><li> PT PDS juga memberikan layanan office boy untuk pembersihan harian, berkala, hingga yang khusus bagi industri tertentu. Semuanya kami sediakan di PT PDS lengkap dengan karyawan yang terlatih, serta peralatan dan sistem yang dirancang khusus untuk mendukung kebutuhan khusus dan kelancaran bisnis Anda. </li></ul>', '2019-08-20 07:42:43', 0),
(46, 58, 1, 'Access Control', '6200000.00', 'Pelayanan yang memiliki kemampuan bela diri dan sertifikat keamanan.', '<ul><li> PT PDS menyediakan jasa pelayanan jasa security yang profesional dengan kemampuan handal yang didukung POLRI dan POMAL. Personil keamanan yang ditugaskan dibekali dengan kemampuan beladiri dan memiliki sertifkat keamanan. Dalam menjalankan tugasnya, mereka selalu bersikap sopan namun tegas, hormat dan penuh perhatian, mampu berkomunikasi dengan baik, teliti, cekatan, mampu mengindentifikasi gangguan, dan memegang teguh ketentuan yang berlaku di lingkungan poerusahaan tempat mereka bekerja. </li></ul>', '2019-08-20 07:42:43', 0),
(47, 58, 1, 'Security Guard', '6200000.00', 'Pelayanan yang memiliki kemampuan bela diri dan sertifikat keamanan.', '<ul><li> PT PDS menyediakan jasa pelayanan jasa security yang profesional dengan kemampuan handal yang didukung POLRI dan POMAL. Personil keamanan yang ditugaskan dibekali dengan kemampuan beladiri dan memiliki sertifkat keamanan. Dalam menjalankan tugasnya, mereka selalu bersikap sopan namun tegas, hormat dan penuh perhatian, mampu berkomunikasi dengan baik, teliti, cekatan, mampu mengindentifikasi gangguan, dan memegang teguh ketentuan yang berlaku di lingkungan poerusahaan tempat mereka bekerja. </li></ul>', '2019-08-20 07:42:43', 0),
(48, 59, 1, 'Head Truck Operator', '6200000.00', 'Pelayanan yang memiliki kemampuan, keterampilan, dan cekatan dalam mengoperasikan berbagai peralatan.', '<ul><li> PT PDS menyediakan jasa layanan operator untuk mengoperasikan berbagai peralatan seperti; RTG, Forklif, Reach Stacher dan alat berat lainnya. Mereka berpengalaman yang memiliki kemampuan, keterampilan, dan cekatan, sehingga mampu memberikan pelayanan cepat dan aman. </li></ul>', '2019-08-20 07:42:43', 0),
(49, 59, 1, 'Crane Operator', '6200000.00', 'Pelayanan yang memiliki kemampuan, keterampilan, dan cekatan dalam mengoperasikan berbagai peralatan.', '<ul><li> PT PDS menyediakan jasa layanan operator untuk mengoperasikan berbagai peralatan seperti; RTG, Forklif, Reach Stacher dan alat berat lainnya. Mereka berpengalaman yang memiliki kemampuan, keterampilan, dan cekatan, sehingga mampu memberikan pelayanan cepat dan aman. </li></ul>', '2019-08-20 07:42:43', 0),
(50, 59, 1, 'Forklift Operator', '6200000.00', 'Pelayanan yang memiliki kemampuan, keterampilan, dan cekatan dalam mengoperasikan berbagai peralatan.', '<ul><li> PT PDS menyediakan jasa layanan operator untuk mengoperasikan berbagai peralatan seperti; RTG, Forklif, Reach Stacher dan alat berat lainnya. Mereka berpengalaman yang memiliki kemampuan, keterampilan, dan cekatan, sehingga mampu memberikan pelayanan cepat dan aman. </li></ul>', '2019-08-20 07:42:44', 0),
(51, 59, 1, 'Reach Staker Operator', '6200000.00', 'Pelayanan yang memiliki kemampuan, keterampilan, dan cekatan dalam mengoperasikan berbagai peralatan.', '<ul><li> PT PDS menyediakan jasa layanan operator untuk mengoperasikan berbagai peralatan seperti; RTG, Forklif, Reach Stacher dan alat berat lainnya. Mereka berpengalaman yang memiliki kemampuan, keterampilan, dan cekatan, sehingga mampu memberikan pelayanan cepat dan aman. </li></ul>', '2019-08-20 07:42:44', 0),
(52, 60, 1, 'Access Gate', '6200000.00', 'Pelayanan dalam menjaga Pass Gate berbasis teknologi informasi.', '<ul><li> PT PDS menyediakan layanan Pass Gate berbasis teknologi informasi, sehingga pelayanan dapat dilakukan secara cepat dan tepat, serta akurasi yang tinggi dalam pelaporan. Layanan dilakukan dengan penuh dedikasi, dan mengedepankan keramahan untuk menjaga reputasi dan sekaligus meningkatkan citra perusahaan pelanggan. </li></ul>', '2019-08-20 07:42:44', 0),
(53, 60, 1, 'Parking Management', '6200000.00', 'Pelayanan dalam menawarkan sistem manajemen yang transparan.', '<ul><li> PT PDS hadir menawarkan layanan services yang berkualitas dan kepercayaan akan layanan parking management yang lebih baik. Dengan dukungan karyawan terlatih dan sistem manajemen yang transaparan. Anda dapat mengakses hasil dari sistem operasional, manajemen, perpajakan, serta pendapatan parkir secara langsung dan jelas, serta memastikan para pelanggan Anda mendapatkan pelayanan dan pengalaman yang lebih baik. </li></ul>', '2019-08-20 07:42:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `perusahaan_name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(30) NOT NULL DEFAULT 'buyer',
  `ban_flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `first_name`, `last_name`, `perusahaan_name`, `username`, `email`, `password`, `user_type`, `ban_flag`) VALUES
(1, 'Admin', 'Admin', '', 'admin', 'admin@admin.com', '$2y$10$2fsiOiSV9GmPDfBLbo5D7eanESB3cFNLXk0MEAADhkhmv2IQwGZUy', 'admin', 0),
(5, 'rizvi', 'sofbrina', 'itsinformatika', 'rizvisfbrina', 'opi@its.com', '$2y$10$VUH1PsROYcZIAmR89sN4TOGziNhIP19pqhhohbN8FiOXlwqvE1R0i', 'user', 0),
(6, 'Yasinta', 'Romadhona', 'ITSTCInformatika', 'yasinta', 'yasinta16@mhs.if.its.ac.id', '$2y$10$225wjlhYqSwqx38bKaJnKutT1gu/sqHsyxMIu5Fw5QDmaPq8PhODi', 'user', 0),
(7, 'yazen', 'wenda', 'ITSTCInformatika', 'yazen', 'yasinta_elfs@ymail.com', '$2y$10$vgKrnexj4zct.CK5XJuQZOstOrZ3rfZ7xeiU/JTR4dxFBxM0wRqNy', 'user', 1),
(8, 'cloe', 'water', 'jam dinding', 'jam123', 'jam@gmail.com', '$2y$10$sFLYK4tB9qXGDSVuubEhUOoQZBkkmjWhS5jviKGkrNJdlBSSnzL52', 'user', 0),
(9, 'ani', 'ani', 'opicompany', 'opiopi', 'opi@company.co.id', '$2y$10$1CJhAnrRsHKuvDHUfSjY5uyecy057h0cariY4OAThoelvmZdRaf/C', 'user', 0),
(10, 'yasinta', 'romadhona', 'lapappala', 'lalala', 'laa@gmail.com', '$2y$10$z1lUy8Huq7g/MfQHXiDhauwZAX5FrsrNAWFseLkOqmljsOoIXSbW.', 'user', 0),
(11, 'Do', 'Kyungsoo', 'PT Apa Mencari Apa', 'kyungsooya', 'apa@gmail.com', '$2y$10$nai2gu3y.9ZYAZcmIiVQluSbd1tCWQxLe0j8DuG7ccdIWpHRORy8W', 'user', 0),
(12, 'Rizal', 'Mohamad', 'Mesin UGM 2016', 'rizall', 'tmesin@mesin.mesin.co.id', '$2y$10$NPv44SvZzvPAbP1aoHdqLu4Bt758BQXzKfQ7PcRXEICvBYQiVVeF6', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_table`
--
ALTER TABLE `address_table`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chat_table`
--
ALTER TABLE `chat_table`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `product_cart_table`
--
ALTER TABLE `product_cart_table`
  ADD PRIMARY KEY (`product_cart_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_images_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_table`
--
ALTER TABLE `address_table`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_table`
--
ALTER TABLE `cart_table`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `chat_table`
--
ALTER TABLE `chat_table`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_cart_table`
--
ALTER TABLE `product_cart_table`
  MODIFY `product_cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_table`
--
ALTER TABLE `address_table`
  ADD CONSTRAINT `user_address` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD CONSTRAINT `user_cart` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_cart_table`
--
ALTER TABLE `product_cart_table`
  ADD CONSTRAINT `product_cart_table_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart_table` (`cart_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_cart_table_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_table` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images` FOREIGN KEY (`product_id`) REFERENCES `product_table` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_table`
--
ALTER TABLE `product_table`
  ADD CONSTRAINT `product_category` FOREIGN KEY (`category_id`) REFERENCES `category_table` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_product` FOREIGN KEY (`seller_id`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
