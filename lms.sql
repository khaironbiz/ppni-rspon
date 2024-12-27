-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 01:00 AM
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
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_events`
--

CREATE TABLE `class_events` (
  `id` char(36) NOT NULL,
  `event_id` char(26) NOT NULL,
  `training_id` char(26) DEFAULT NULL,
  `id_penyelenggara` char(36) DEFAULT NULL,
  `curriculum_version_id` char(26) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  `toc` char(36) DEFAULT NULL,
  `mot` char(36) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `kuota` int(11) NOT NULL,
  `class_type` varchar(100) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `canva_url` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_events`
--

INSERT INTO `class_events` (`id`, `event_id`, `training_id`, `id_penyelenggara`, `curriculum_version_id`, `title`, `date_start`, `date_finish`, `toc`, `mot`, `tempat`, `price`, `kuota`, `class_type`, `file`, `canva_url`, `description`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
('01hh1a52egyn0bx3weqhmqr0x9', '01hh0zj0rymf45ew7n6zds28qv', '01hgr205dn7yfhpqpzy5x3dhzq', '', '01hgr21rbkvk8wwkztv5zf9k1n', 'NIHSS Online', '2023-12-12', '2023-12-15', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgr33x4634mrsg1863fkqfvs', NULL, 0, 30, NULL, 'https://ppni.nos.wjv-1.neo.id/files/11GR7C5nP6mlFkS6JuesJAWkbjYQWmm4Ho6KKn7Z.png', 'DAF2ReUx-Tk', '<p>Stroke adalah penyebab kematian dan kecacatan kedua &nbsp;di dunia. (Kuriakose &amp; Xiao, 2020; Lindsay et al., 2019). Kondisi ini dapat menghambat aliran darah menuju otak sehingga berisiko mempengaruhi fungsi otak dalam mengontrol seluruh aktivitas tubuh.</p>\r\n<p>Bagi penderita stroke, kondisi tersebut dapat diminimalkan dengan melakukan penilaian prognosis stroke. Di mana, prognosis adalah istilah kedokteran yang mengacu pada prediksi mengenai potensi perkembangan dari suatu penyakit.</p>\r\n<p>Penilaian Prognosis stroke dapat dilakukan dengan beberapa metode. Salah satu metode yang bisa dilakukan penilaian NIHSS.</p>\r\n<p>National Institutes of Health Stroke Scale (NIHSS) mencerminkan disfungsi serebral dengan menilai beberapa item klinis. Skor ini memiliki nilai prognostik yang kuat untuk luaran fungsional jangka panjang setelah stroke. NIHSS telah menjadi standar untuk penilaian keparahan stroke setelah uji klinis NINDS r-tPA (National Institute of Neurological Disorders and Stroke recombinant tissue-type plasminogen activator.</p>', 'nihss-online', NULL, '2023-12-07 04:56:37', '2024-02-14 12:36:59'),
('01hh1af1mb2s9y8hgf5kef5fwt', '01hh0zj0rymf45ew7n6zds28qv', '01hh19q210drfv8nd4gje2a4gk', '', '01hh1j89t0dfhw8kmq7db3adf3', 'BNLS Periode Desember 2023', '2023-12-18', '2023-12-22', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgr33x4634mrsg1863fkqfvs', NULL, 0, 0, NULL, 'https://atm-sehat.nos.wjv-1.neo.id/latihan/GCCrNhuWMKyVT4kkk0Wno2x67AVo4TMQgiRoFNTI.png', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;  padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;  border-radius: 8px; will-change: transform;\">   <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"     src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFjvGmICWg&#x2F;view?embed\">   </iframe> </div>', '<p>Penatalaksanaan kasus neurologi dimulai dari tatalaksana gawat darurat sampai&nbsp;fase rehabiitasi. Pada kegiatan tatalaksana gawat darurat diperlukan suatu&nbsp;kompetensi seorang perawat yang mampu menangani kedaruratan neurologi.&nbsp;Sehingga di harapkan perawat dapat berperan dalam memberikan pelayanan yang&nbsp;berkualitas pada pasien pasien kedaruratan neurologi yang mengancam nyawa.</p>\r\n<p>Dalam rangka peningkatan peran perawat diatas, diperlukan suatu program&nbsp;pelatihan tatalaksana kedaruratan neurologi yaitu Basic Neuro Life Support (BNLS)&nbsp;yang terstruktur bagi perawat, sehingga perawat mampu memberikan tatalaksana&nbsp;kedaruratan neurologi secara profesional dan bermutu tinggi. Sehubungan dengan&nbsp;hal tersebut, dengan ini HIPENI menyusun Kurikulum Pelatihan Basic Neuro Life&nbsp;Support (BNLS), sebagai acuan bagi penyelenggara pelatihan Basic Neuro Life&nbsp;Support (BNLS).</p>', 'bnls-periode-desember-2023', NULL, '2023-12-07 05:02:04', '2023-12-15 07:00:51'),
('01hp8dhh4477vqnyqptrj263wa', '01hh0zj0rymf45ew7n6zds28qv', '01hh19q210drfv8nd4gje2a4gk', NULL, '01hh1j89t0dfhw8kmq7db3adf3', 'BNLS Periode Maret 2024', '2024-03-06', '2024-03-09', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgr33x4634mrsg1863fkqfvs', NULL, 4000000, 30, NULL, 'https://ppni.nos.wjv-1.neo.id/files/aD9qoYXC895LeLuyjnWA1QjNeOiiWhHUKxFKvDRf.png', 'adad', '<p>adad</p>', 'bnls-periode-maret-2024', NULL, '2024-02-10 02:29:01', '2024-02-14 12:41:03'),
('01hp8tewfjyx26s3qx9tf1j29v', '01hh0zj0rymf45ew7n6zds28qv', '01hh19q210drfv8nd4gje2a4gk', NULL, '01hh1j89t0dfhw8kmq7db3adf3', 'BNLS Periode April 2024', '2024-04-17', '2024-04-20', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgr33x4634mrsg1863fkqfvs', NULL, 4000000, 30, NULL, 'https://ppni.nos.wjv-1.neo.id/files/Iuuf5GqJZr1TkIXmXrp7aDTyUeGsXLfOcYowMPGL.png', 'asd', '<p>aaxd</p>', 'bnls-periode-april-2024', NULL, '2024-02-10 06:14:46', '2024-02-14 04:37:18'),
('01hpksfxk6zds72qh31gjxdzww', '01hh0zj0rymf45ew7n6zds28qv', '01hh19q210drfv8nd4gje2a4gk', NULL, '01hh1j89t0dfhw8kmq7db3adf3', 'BNLS Periode Mei 2024', '2024-05-11', '2024-05-14', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgr33x4634mrsg1863fkqfvs', NULL, 4000000, 30, NULL, 'https://ppni.nos.wjv-1.neo.id/files/ZYzM8GbIHvw35kiroXUSZfnxRsFdtB9qaZQJx9Pi.png', '123', '<p>afsasg</p>', 'bnls-periode-mei-2024', NULL, '2024-02-14 12:29:31', '2024-02-14 12:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_provinsi` varchar(255) DEFAULT NULL,
  `id_kota` varchar(255) DEFAULT NULL,
  `id_kecamatan` varchar(255) DEFAULT NULL,
  `id_desa` varchar(255) DEFAULT NULL,
  `is_lpk` tinyint(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` char(36) NOT NULL,
  `urutan` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `child_number` int(11) DEFAULT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `urutan`, `code`, `title`, `description`, `parent_id`, `slug`, `child_number`, `user_id`, `created_at`, `updated_at`) VALUES
('01hgr02th4g21k3041r9t8v97d', '1', 'sex', 'Gender', 'Gender yang dimiliki seseorang', NULL, 'gender', 2, NULL, '2023-12-03 14:07:28', '2023-12-03 14:08:45'),
('01hgr04cmhntr9dcw6jwj2kh1f', '1', 'male', 'Laki-laki', 'Jenis kelamin laki-laki', '01hgr02th4g21k3041r9t8v97d', 'laki-laki', NULL, NULL, '2023-12-03 14:08:19', '2023-12-03 14:08:19'),
('01hgr055ms5422h1pb11ervbcm', '2', 'female', 'Perempuan', 'Jenis kelamin perempuan', '01hgr02th4g21k3041r9t8v97d', 'perempuan', NULL, NULL, '2023-12-03 14:08:45', '2023-12-03 14:08:45'),
('01hgr0t9vmsrwrbwrtrvexqdh9', '2', 'agama', 'Agama', 'Agama yang dianut seseorang', NULL, 'agama', 7, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 14:20:17', '2024-02-09 06:29:39'),
('01hgr0x86kphzf6fbxbcz3kv1a', '1', 'islam', 'Islam', 'Islam adalah ajaran yang dibawa oleh nabi muhammad', '01hgr0t9vmsrwrbwrtrvexqdh9', 'islam', NULL, NULL, '2023-12-03 14:21:54', '2023-12-03 14:21:54'),
('01hgr2902xwznnkvjppj7e18n2', '3', 'metode-pembelajaran', 'Metode Pembelajaran', 'Metode yang digunakan untuk proses belajar mengajar', NULL, 'metode-pembelajaran', 3, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 14:45:47', '2023-12-03 14:48:00'),
('01hgr2afmynay4vkefxd3pe16g', '1', 'ceramah', 'Ceramah', 'Ceramah dikelas mengulas materi yang relevan terhadap pembelajaan', '01hgr2902xwznnkvjppj7e18n2', 'ceramah', NULL, NULL, '2023-12-03 14:46:36', '2023-12-03 14:46:36'),
('01hgr2brpnghct36h99jkk0y1v', '2', 'praktik-laboratorium', 'Praktik Laboratorium', 'Praktik di laboratotorium', '01hgr2902xwznnkvjppj7e18n2', 'praktik-laboratorium', NULL, NULL, '2023-12-03 14:47:18', '2023-12-03 14:47:18'),
('01hgr2d1xcgpbpecwps916r21g', '3', 'praktik-lapangan', 'Praktik Lapangan', 'Praktik lapangan yang sesuai dengan disiplin ilmu yang dipelajari', '01hgr2902xwznnkvjppj7e18n2', 'praktik-lapangan', NULL, NULL, '2023-12-03 14:48:00', '2023-12-03 14:48:00'),
('01hgykq83t4eqpgj67wyqerzac', '4', 'pendidikan', 'Pendidikan', 'Pendidikan yang ditempuh oleh seseorang', NULL, 'pendidikan', 4, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-06 03:46:07', '2023-12-06 04:09:29'),
('01hgykrhdtz9btcrdx03d3ga6r', '1', 'pendidikan-dasar', 'Pendidikan Dasar', 'Pendidikan akademik', '01hgykq83t4eqpgj67wyqerzac', 'pendidikan-dasar', 3, NULL, '2023-12-06 03:46:49', '2023-12-06 03:57:46'),
('01hgyksh7ry0esjcv0aphtwc7x', '4', 'pendidikan-profesi', 'Pendidikan Profesi', 'Pendidikan profesi yang ditempuh seseorang', '01hgykq83t4eqpgj67wyqerzac', 'pendidikan-profesi', 3, NULL, '2023-12-06 03:47:22', '2023-12-06 04:11:06'),
('01hgykv73cqvvdam9dcjq59par', '1', 'SD', 'Sekolah Dasar', 'Tingkat pendidikan formal yang paling pertama', '01hgykrhdtz9btcrdx03d3ga6r', 'sekolah-dasar', NULL, NULL, '2023-12-06 03:48:17', '2023-12-06 04:07:32'),
('01hgyky7jr9h2922qntnkgephy', '2', 'SMP', 'Sekolah Menengah Pertama', 'Jenjang Sekolah yang ditempuh setelah menyelesaikan sekolah dasar', '01hgykrhdtz9btcrdx03d3ga6r', 'sekolah-menengah-pertama', NULL, NULL, '2023-12-06 03:49:55', '2023-12-06 04:07:46'),
('01hgykz9ftnhfsfr8gq0nbgacm', '3', 'SMA', 'Sekolah Menengah Atas', 'Sekolah yang dilaksanakan setelah menempuh jenjang SMP', '01hgykrhdtz9btcrdx03d3ga6r', 'sekolah-menengah-atas', NULL, NULL, '2023-12-06 03:50:30', '2023-12-06 04:08:01'),
('01hgymfb0n6s4fq7p6wwx9m9tr', '2', 'pendidikan-vokasi', 'Pendidikan Vokasi', 'Pendidikan vokasi merupakan pendidikan yang mengutamakan penguasaan keahlian terapan tertentu', '01hgykq83t4eqpgj67wyqerzac', 'pendidikan-vokasi', 4, NULL, '2023-12-06 03:59:16', '2023-12-06 04:05:24'),
('01hgymjbm9zvrtdr2j8t89m94b', '3', 'pendidikan-akademik', 'Pendidikan Akademik', 'Pendidikan akademik merupakan pendidikan yang mengutamakan penguasaan pada disiplin ilmu pengetahuan, teknologi, maupun seni', '01hgykq83t4eqpgj67wyqerzac', 'pendidikan-akademik', 3, NULL, '2023-12-06 04:00:55', '2023-12-06 04:07:18'),
('01hgymrm6mr43z4gy0r2hh3j98', '1', 'DI', 'Diploma I', 'Diploma satu', '01hgymfb0n6s4fq7p6wwx9m9tr', 'diploma-i', NULL, NULL, '2023-12-06 04:04:20', '2023-12-06 04:04:20'),
('01hgyms6bqm0tr652fe2vaeexg', '2', 'DII', 'Diploma II', 'Diploma Dua', '01hgymfb0n6s4fq7p6wwx9m9tr', 'diploma-ii', NULL, NULL, '2023-12-06 04:04:39', '2024-02-09 11:40:12'),
('01hgymswb7wdn08yd633ar9cr8', '3', 'DIII', 'Diploma III', 'Diploma Tiga', '01hgymfb0n6s4fq7p6wwx9m9tr', 'diploma-iii', NULL, NULL, '2023-12-06 04:05:01', '2023-12-06 04:05:01'),
('01hgymtjaeshranadran8w4s8t', '4', 'DIV', 'Diploma IV', 'Diploma Empat', '01hgymfb0n6s4fq7p6wwx9m9tr', 'diploma-iv', NULL, NULL, '2023-12-06 04:05:24', '2024-02-09 11:40:26'),
('01hgymwgwfdjh7pxbnxxevhjg6', '1', 'S1', 'Sarjana', 'Sarjana tingkat pertama', '01hgymjbm9zvrtdr2j8t89m94b', 'sarjana', NULL, NULL, '2023-12-06 04:06:28', '2023-12-06 04:06:28'),
('01hgymx66wdh9vf9px0341czg7', '2', 'S2', 'Magister', 'Sarjana tingkat dua', '01hgymjbm9zvrtdr2j8t89m94b', 'magister', NULL, NULL, '2023-12-06 04:06:50', '2023-12-06 04:06:50'),
('01hgymy17np7eg47fpq1gmacjq', '3', 'S3', 'Doktoral', 'Sarjana Tingkat tiga', '01hgymjbm9zvrtdr2j8t89m94b', 'doktoral', NULL, NULL, '2023-12-06 04:07:18', '2023-12-06 04:07:18'),
('01hgyn3cwmcnprqgh7ar228fkv', '1', 'general', 'Pendidikan Profesi Umum', 'Pendidikan Profesi Umum', '01hgyksh7ry0esjcv0aphtwc7x', 'pendidikan-profesi-umum', NULL, NULL, '2023-12-06 04:10:13', '2023-12-06 04:10:13'),
('01hgyn45avfzm3hr11pjynxays', '2', 'spesialist', 'Pendidikan Profesi Spesialis', 'Pendidikan Profesi Spesialis', '01hgyksh7ry0esjcv0aphtwc7x', 'pendidikan-profesi-spesialis', NULL, NULL, '2023-12-06 04:10:38', '2023-12-06 04:10:38'),
('01hgyn50d8gnzf969z9f900k3k', '3', 'sub-spesialis', 'Pendidikan Profesi Sub Spesialis', 'Pendidikan Profesi Sub Spesialis', '01hgyksh7ry0esjcv0aphtwc7x', 'pendidikan-profesi-sub-spesialis', NULL, NULL, '2023-12-06 04:11:06', '2023-12-06 04:11:06'),
('01hgyndgyb1zzyevdd7yk06mb1', '5', 'kegiatan-ilmiah', 'Kegiatan Ilmiah', 'Kegiatan Ilmiah', NULL, 'kegiatan-ilmiah', 4, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-06 04:15:45', '2023-12-06 04:17:30'),
('01hgyner1ytpw5te9tdgehzyt5', '1', 'seminar', 'Seminar', 'Seminar', '01hgyndgyb1zzyevdd7yk06mb1', 'seminar', NULL, NULL, '2023-12-06 04:16:25', '2023-12-06 04:16:25'),
('01hgynffjn2s6fnxm2w7md5t0z', '2', 'simposium', 'Simposium', 'Simposium', '01hgyndgyb1zzyevdd7yk06mb1', 'simposium', NULL, NULL, '2023-12-06 04:16:49', '2023-12-06 04:16:49'),
('01hgyng3n1c6wbteqxwkb9knwz', '3', 'work-shop', 'Work Shop', 'Work Shop', '01hgyndgyb1zzyevdd7yk06mb1', 'work-shop', NULL, NULL, '2023-12-06 04:17:10', '2023-12-06 04:17:10'),
('01hgyngqp1y8k9s7g0fhz4gf4e', '4', 'pelatihan', 'Pelatihan', 'Pelatihan', '01hgyndgyb1zzyevdd7yk06mb1', 'pelatihan', NULL, NULL, '2023-12-06 04:17:30', '2023-12-06 04:17:30'),
('01hgynr949n87w3fjt7mx26p1s', '6', 'role-user', 'Role User', 'Role User', NULL, 'role-user', 4, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-06 04:21:38', '2023-12-06 04:39:14'),
('01hgyns1g3x13c4412d69hk5tr', '1', 'user', 'User', 'Role User pengguna', '01hgynr949n87w3fjt7mx26p1s', 'user', NULL, NULL, '2023-12-06 04:22:03', '2023-12-06 04:22:03'),
('01hgynvdtz59ge4kbqa14wvdf2', '2', 'admin', 'Admin', 'Role admin pengguna', '01hgynr949n87w3fjt7mx26p1s', 'admin', NULL, NULL, '2023-12-06 04:23:21', '2023-12-06 04:23:21'),
('01hgypq1q4tsxp49b5dtn2645f', '3', 'super-admin', 'Super Admin', 'Super admin user', '01hgynr949n87w3fjt7mx26p1s', 'super-admin', NULL, NULL, '2023-12-06 04:38:26', '2023-12-06 04:38:26'),
('01hgyprgp3aq7zd8s1ks3nfanb', '4', 'teacher', 'Teacher', 'Tenaga pendidik', '01hgynr949n87w3fjt7mx26p1s', 'teacher', NULL, NULL, '2023-12-06 04:39:14', '2023-12-06 04:39:14'),
('01hgyz51hewx5h0x971sb8b6e4', '7', 'jenis-soal', 'Jenis Soal', 'Jenis Soal', NULL, 'jenis-soal', 2, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-06 07:05:53', '2023-12-06 07:06:59'),
('01hgyz5tyfzbfdz5r018p4c31f', '1', 'esai', 'Soal Esai', 'Jenis Soal Esai', '01hgyz51hewx5h0x971sb8b6e4', 'soal-esai', NULL, NULL, '2023-12-06 07:06:19', '2023-12-06 07:06:19'),
('01hgyz71e12rw92knprb902gjc', '2', 'pilihan-ganda', 'Soal Pilihan Ganda', 'Jenis Soal Pilihan Ganda', '01hgyz51hewx5h0x971sb8b6e4', 'soal-pilihan-ganda', NULL, NULL, '2023-12-06 07:06:58', '2023-12-06 07:06:58'),
('01hh1kv62xschv6pfq3y8h5t9w', '8', 'task', 'Task', 'Tugas yang diberikan pada peserta didik', NULL, 'task', 3, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-07 07:45:59', '2023-12-07 07:47:54'),
('01hh1kw7r1etmhfqr2gk7s23r8', '1', 'pre-test', 'Pre Test', 'Test yang diklakukan sebelum melaksanakan kegiatan pelatihan', '01hh1kv62xschv6pfq3y8h5t9w', 'pre-test', NULL, NULL, '2023-12-07 07:46:33', '2023-12-07 07:46:33'),
('01hh1kx4t2aqxwj1jsk2renc7k', '2', 'post-test', 'Post Test', 'Test yang diklakukan setelah melaksanakan kegiatan pelatihan', '01hh1kv62xschv6pfq3y8h5t9w', 'post-test', NULL, NULL, '2023-12-07 07:47:03', '2023-12-07 07:47:03'),
('01hh1kxsmdxxxpdh1cb3ge1rjf', '3', 'kuis', 'Kuis', 'Test yang diklakukan selama melaksanakan kegiatan pelatihan', '01hh1kv62xschv6pfq3y8h5t9w', 'kuis', NULL, NULL, '2023-12-07 07:47:24', '2023-12-07 07:47:24'),
('01hh3hfdnx7nrs5f5h1h11hhrq', '2', 'kristen-protestan', 'Kristen Protestan', 'Kristen protestan', '01hgr0t9vmsrwrbwrtrvexqdh9', 'kristen-protestan', NULL, NULL, '2023-12-08 01:43:05', '2023-12-08 01:43:05'),
('01hh3hvwy4xrb10y2kttn9jmd4', '9', 'status-pernikahan', 'Status Pernikahan', 'Status pernikahan', NULL, 'status-pernikahan', 4, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-08 01:49:54', '2023-12-08 01:51:29'),
('01hh3hx1xgfr2a0danvq8s2rw4', '1', 'belum-menikah', 'Belum Menikah', 'Belum menikah', '01hh3hvwy4xrb10y2kttn9jmd4', 'belum-menikah', NULL, NULL, '2023-12-08 01:50:32', '2023-12-08 01:50:32'),
('01hh3hxg5xr30m813wjsagttn5', '2', 'menikah', 'Menikah', 'Menikah', '01hh3hvwy4xrb10y2kttn9jmd4', 'menikah', NULL, NULL, '2023-12-08 01:50:47', '2023-12-08 01:50:47'),
('01hh3hy8dmsvwsqysv1bf9yp34', '3', 'cerai-hidup', 'Cerai Hidup', 'Cerai Hidup', '01hh3hvwy4xrb10y2kttn9jmd4', 'cerai-hidup', NULL, NULL, '2023-12-08 01:51:11', '2023-12-08 01:51:11'),
('01hh3hyt0n1mzvbxh33r4g1mfh', '4', 'cerai-mati', 'Cerai Mati', 'Cerai mati', '01hh3hvwy4xrb10y2kttn9jmd4', 'cerai-mati', NULL, NULL, '2023-12-08 01:51:29', '2023-12-08 01:51:29'),
('01hh3jbd9pks9n7erq0rvn5vxh', '10', 'jenis-pekerjaan', 'Jenis Pekerjaan', 'Jenis Pekerjaan', NULL, 'jenis-pekerjaan', 4, '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-08 01:58:22', '2023-12-08 02:00:37'),
('01hh3jchjc5sgv7sa5hsmrtqr4', '1', 'tidak-kerja', 'Tidak Kerja', 'Tidak kerja', '01hh3jbd9pks9n7erq0rvn5vxh', 'tidak-kerja', NULL, NULL, '2023-12-08 01:58:59', '2023-12-08 01:58:59'),
('01hh3jddct9jy26gnfxmp6amww', '2', 'asn', 'ASN', 'ASN', '01hh3jbd9pks9n7erq0rvn5vxh', 'asn', NULL, NULL, '2023-12-08 01:59:28', '2023-12-08 01:59:28'),
('01hh3jehanmv31hw6wawpee8km', '4', 'pegawai-swasta', 'Pegawai Swasta', 'Pegawai Swasta', '01hh3jbd9pks9n7erq0rvn5vxh', 'pegawai-swasta', NULL, NULL, '2023-12-08 02:00:05', '2023-12-08 02:01:08'),
('01hh3jfgk2h225vev34tb7v9zd', '3', 'non-asn', 'Non ASN', 'Non ASN', '01hh3jbd9pks9n7erq0rvn5vxh', 'non-asn', NULL, NULL, '2023-12-08 02:00:37', '2023-12-08 02:00:55'),
('01hp68pd72zhb38ta0ady3exjb', '3', 'katholik', 'Katholik', 'Agama Kristen Katholik', '01hgr0t9vmsrwrbwrtrvexqdh9', 'katholik', NULL, NULL, '2024-02-09 06:25:49', '2024-02-09 06:25:49'),
('01hp68q3jc4jbkyrxgcmqah8pe', '4', 'hindu', 'Hindu', 'Agama Hindu', '01hgr0t9vmsrwrbwrtrvexqdh9', 'hindu', NULL, NULL, '2024-02-09 06:26:12', '2024-02-09 06:26:12'),
('01hp68qq6d35ewa20am99vamm0', '5', 'budha', 'Budha', 'Agama Budha', '01hgr0t9vmsrwrbwrtrvexqdh9', 'budha', NULL, NULL, '2024-02-09 06:26:32', '2024-02-09 06:26:32'),
('01hp68rh0jmdzmw1b5qz13ahmg', '6', 'konghucu', 'Konghucu', 'Agama Konghucu', '01hgr0t9vmsrwrbwrtrvexqdh9', 'konghucu', NULL, NULL, '2024-02-09 06:26:59', '2024-02-09 06:28:45'),
('01hp68xdcrcds4k24hyvqsy7zw', '7', 'penganut-kepercayaan', 'Penganut Kepercayaan', 'Penganut Kepercayaan', '01hgr0t9vmsrwrbwrtrvexqdh9', 'penganut-kepercayaan', NULL, NULL, '2024-02-09 06:29:39', '2024-02-09 06:29:39'),
('01hpc58x89jwrxhhbcpnv7ekc6', '11', 'jenis-materi-kurikulum', 'Jenis Materi Kurikulum', 'Jenis Materi pada Kurikulum', NULL, 'jenis-materi-kurikulum', 3, '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 13:21:28', '2024-02-11 13:24:11'),
('01hpc5ah8dh1ess40g3w1gk61j', '1', 'materi-dasar', 'Materi Dasar', 'Materi Dasar pada kurikulum pelatihan', '01hpc58x89jwrxhhbcpnv7ekc6', 'materi-dasar', NULL, NULL, '2024-02-11 13:22:23', '2024-02-11 13:22:23'),
('01hpc5cw0r0sps9hgpfx3rv7j4', '2', 'materi-inti', 'Materi Inti', 'Materi Inti pada kurikulum pelatihan', '01hpc58x89jwrxhhbcpnv7ekc6', 'materi-inti', NULL, NULL, '2024-02-11 13:23:38', '2024-02-11 13:23:38'),
('01hpc5dw4feqhaw0ydtj2ms3hd', '3', 'materi-penunjang', 'Materi Penunjang', 'Materi Penunjang pada kurikulum pelatihan', '01hpc58x89jwrxhhbcpnv7ekc6', 'materi-penunjang', NULL, NULL, '2024-02-11 13:24:11', '2024-02-11 13:24:11'),
('01htby3qbppsqrbhp4h026dm5f', '12', 'lokasi-luka', 'Lokasi Luka', 'Body Structure Luka Dekubitus', NULL, 'lokasi-luka', NULL, '01hgr0cszcqhe2ab67wt3nc9yd', '2024-04-01 04:19:05', '2024-04-01 04:19:05'),
('01jg1gmjxx6kvh1qac3f6qve6g', '13', 'news-category', 'News Category', 'Kategory untuk mengelompokkan berita', NULL, 'news-category', 1, '01hgr0cszcqhe2ab67wt3nc9yd', '2024-12-26 05:56:34', '2024-12-26 05:58:00'),
('01jg1gq7rrjvembpymneyqzc5m', '1', 'news-informasi', 'Informasi', 'Kategory Berita Informasi', '01jg1gmjxx6kvh1qac3f6qve6g', 'informasi', NULL, NULL, '2024-12-26 05:58:00', '2024-12-26 05:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `crop_image`
--

CREATE TABLE `crop_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curricula`
--

CREATE TABLE `curricula` (
  `id` char(36) NOT NULL,
  `curriculum_version_id` char(26) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `jpl` varchar(255) NOT NULL,
  `canva` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curricula`
--

INSERT INTO `curricula` (`id`, `curriculum_version_id`, `title`, `type`, `jpl`, `canva`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
('01hgr26sztrsdvfkbgpft529mz', '01hgr21rbkvk8wwkztv5zf9k1n', '1.a Tingkat Kesadaran', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0l51D2ik&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>\r\n<a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0l51D2ik&#x2F;view?utm_content=DAF0l51D2ik&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\">1a. Tingkat Kesadaran</a> by Ririn Setia Rahmawati', '1a-tingkat-kesadaran', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 14:44:35', '2023-12-13 00:21:29'),
('01hgr6wa3n75bkh03yr7yw6p0y', '01hgr21rbkvk8wwkztv5zf9k1n', '1.b Menjawab Pertanyaan', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;  padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;  border-radius: 8px; will-change: transform;\">   <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"     src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0r_hyEis&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">   </iframe> </div> <a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0r_hyEis&#x2F;view?utm_content=DAF0r_hyEis&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\">1b. Menjawab Pertanyaan</a> by Ririn Setia Rahmawati', '1b-menjawab-pertanyaan', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:06:15', '2023-12-14 18:31:51'),
('01hgr6z2sfz4d0de05s1fgvwsc', '01hgr21rbkvk8wwkztv5zf9k1n', '1.c Mengikuti Perintah', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;  padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;  border-radius: 8px; will-change: transform;\">   <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"     src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0rwj9P5I&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">   </iframe> </div> <a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0rwj9P5I&#x2F;view?utm_content=DAF0rwj9P5I&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\">1c. Mengikuti Perintah</a> by Ririn Setia Rahmawati', '1c-mengikuti-perintah', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:07:45', '2023-12-14 18:32:07'),
('01hgr70p5h8y64pp9png4134ny', '01hgr21rbkvk8wwkztv5zf9k1n', '2. Gaze Conjugate', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF2Rl3ueeM&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>', '2-gaze-conjugate', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:08:38', '2023-12-14 18:34:05'),
('01hgr71vmwsmzwhn4x5wj66kj9', '01hgr21rbkvk8wwkztv5zf9k1n', '3. Lapang Pandang', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1Ug0hZ0o&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>\r\n<a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1Ug0hZ0o&#x2F;view?utm_content=DAF1Ug0hZ0o&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\">3. VISUAL: LAPANG PANDANG PADA TES KONFRONTASI</a> by Shendika Tyas', '3-lapang-pandang', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:09:16', '2023-12-14 18:35:54'),
('01hgr72bp36gfcvmksvavsc4sd', '01hgr21rbkvk8wwkztv5zf9k1n', '4. Paresis Wajah', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1Uaj5Xkc&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>', '4-paresis-wajah', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:09:33', '2023-12-14 18:36:51'),
('01hgr730bgf3tdd78xahc2xves', '01hgr21rbkvk8wwkztv5zf9k1n', '5. Motorik Lengan', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0rvpkTUE&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>\r\n<a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0rvpkTUE&#x2F;view?utm_content=DAF0rvpkTUE&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\">NIHSS RISKA EKA FATMA 5</a> by Riska Eka Fatma Hasibuan', '5-motorik-lengan', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:09:54', '2023-12-14 18:37:39'),
('01hgr73ynnvcj0v1fyt1y52aq7', '01hgr21rbkvk8wwkztv5zf9k1n', '6. Motorik Tungkai', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1THPoecA&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>', '6-motorik-tungkai', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:10:25', '2023-12-14 18:38:51'),
('01hgr74f1vy07wy1k175w71545', '01hgr21rbkvk8wwkztv5zf9k1n', '7. Ataksia', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1TMV0zPQ&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>\r\n<a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1TMV0zPQ&#x2F;view?utm_content=DAF1TMV0zPQ&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\">NIHSS RISKA EKA FATMA 7</a> by Riska Eka Fatma Hasibuan', '7-ataksia', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:10:42', '2023-12-14 18:39:39'),
('01hgr7519x375vn4jqky1r7xez', '01hgr21rbkvk8wwkztv5zf9k1n', '8. Sensorik', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF3B_K3ziQ&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>\r\n<a href=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF3B_K3ziQ&#x2F;view?utm_content=DAF3B_K3ziQ&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link\" target=\"_blank\" rel=\"noopener\">Sensorik</a> by Ranati Pusmaranga', '8-sensorik', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:11:01', '2023-12-15 08:12:31'),
('01hgr7cqn9jac2ztfxkdpkv984', '01hgr21rbkvk8wwkztv5zf9k1n', '9. Bahasa', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1UAcFIa4&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>', '9-bahasa', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:15:13', '2023-12-14 18:41:28'),
('01hgr7ecd090y0xmgqf8g7y680', '01hgr21rbkvk8wwkztv5zf9k1n', '10. Disatria', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1_mR9Q3E&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>', '10-disatria', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:16:07', '2023-12-14 18:42:36'),
('01hgr7exp16p1rxzbpvrsk4mrw', '01hgr21rbkvk8wwkztv5zf9k1n', '11. Neglect', 'Materi Inti', '1', '<div style=\"position: relative; width: 100%; height: 0; padding-top: 56.2500%;\r\n padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;\r\n border-radius: 8px; will-change: transform;\">\r\n  <iframe loading=\"lazy\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;\"\r\n    src=\"https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF1RkGDGzo&#x2F;view?embed\" allowfullscreen=\"allowfullscreen\" allow=\"fullscreen\">\r\n  </iframe>\r\n</div>', '11-neglect', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 16:16:25', '2023-12-14 18:43:37'),
('01hh1j9w5f55wey8tkjd2zssxh', '01hh1j89t0dfhw8kmq7db3adf3', 'Etikolegal Keperawatan', 'Materi Dasar', '1', 'null', 'etikolegal-keperawatan', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-07 07:19:03', '2023-12-07 07:19:03'),
('01hp2ncq6ahrhjcyr8ha6h1pt2', '01hh1j89t0dfhw8kmq7db3adf3', 'Tatalaksana kedaruratan pada pasien stroke', 'Materi Inti', '5', 'aadads', 'tatalaksana-kedaruratan-pada-pasien-stroke', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-07 20:50:46', '2024-02-10 07:06:46'),
('01hp2p8fmvwd5zdtx8f4616mdc', '01hh1j89t0dfhw8kmq7db3adf3', 'Anti Korupsi', 'Materi Penunjang', '1', 'asa', 'anti-korupsi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-07 21:05:55', '2024-02-10 07:54:38'),
('01hp2pj9me1sm04gxf6mxgpg16', '01hh1j89t0dfhw8kmq7db3adf3', 'Review Anatomi Fisiology Sistem Persarafan', 'Materi Dasar', '1', 'cssa', 'review-anatomi-fisiology-sistem-persarafan', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-07 21:11:17', '2024-02-10 07:04:15'),
('01hp2q3jmn8b5b2sqqb8ktv90v', '01hh1j89t0dfhw8kmq7db3adf3', 'Evaluasi dan Rencana Tindak Lanjut', 'Materi Penunjang', '3', 'aaad', 'evaluasi-dan-rencana-tindak-lanjut', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-07 21:20:43', '2024-02-11 00:53:44'),
('01hp8w256h7tj6jyng7b0vkhcd', '01hh1j89t0dfhw8kmq7db3adf3', 'Pemeriksaan Penunjang Pada Kedaruratan Neurology', 'Materi Dasar', '2', 'canca', 'pemeriksaan-penunjang-pada-kedaruratan-neurology', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:42:46', '2024-02-10 06:42:46'),
('01hp8w39t15dcyqacvvfb5r1hn', '01hh1j89t0dfhw8kmq7db3adf3', 'Pengkajian Keperawatan Neurology', 'Materi Inti', '4', 'adadf', 'pengkajian-keperawatan-neurology', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:43:24', '2024-02-11 00:54:11'),
('01hp8w629xnryq0g90kyfpmcmc', '01hh1j89t0dfhw8kmq7db3adf3', 'Tatalaksana kedaruratan pada pasien trauma kepala', 'Materi Inti', '3', 'sasf', 'tatalaksana-kedaruratan-pada-pasien-trauma-kepala', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:44:54', '2024-02-11 00:55:03'),
('01hp8w7ttwxdj21ptfjm69qv6d', '01hh1j89t0dfhw8kmq7db3adf3', 'Tatalaksana kedaruratan pada pasien trauma medulla spinalis', 'Materi Inti', '2', 'dSDD', 'tatalaksana-kedaruratan-pada-pasien-trauma-medulla-spinalis', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:45:52', '2024-02-10 06:45:52'),
('01hp8w8wfq19hq075027a6pc7t', '01hh1j89t0dfhw8kmq7db3adf3', 'Tatalaksana kedaruratan pada pasien infeksi saraf pusat', 'Materi Inti', '1', 'CANVA', 'tatalaksana-kedaruratan-pada-pasien-infeksi-saraf-pusat', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:46:27', '2024-02-10 06:46:27'),
('01hp8w9j9z3gbp9335fha409p0', '01hh1j89t0dfhw8kmq7db3adf3', 'Tatalaksana Peningkatan Tekanan Intrakranial', 'Materi Inti', '2', 'ADASFS', 'tatalaksana-peningkatan-tekanan-intrakranial', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:46:49', '2024-02-11 00:57:58'),
('01hp8wa7x3neeggw3z3g53r8hc', '01hh1j89t0dfhw8kmq7db3adf3', 'Tatalaksana kedaruratan pada pasien Guillen Bare Syndrome dan Myastenia Gravis', 'Materi Inti', '1', 'ADAdadf', 'tatalaksana-kedaruratan-pada-pasien-guillen-bare-syndrome-dan-myastenia-gravis', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:47:11', '2024-02-10 06:47:11'),
('01hp8wav6svvwqws2vvv0bbrxx', '01hh1j89t0dfhw8kmq7db3adf3', 'Tatalaksana kedaruratan pada pasien kejang', 'Materi Inti', '1', 'dad', 'tatalaksana-kedaruratan-pada-pasien-kejang', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:47:31', '2024-02-10 06:47:31'),
('01hp8wc9t35a5cgwa1tkhwzvvf', '01hh1j89t0dfhw8kmq7db3adf3', 'Terapi Cairan dan Elektrolit pada Kedaruratan Neurologi', 'Materi Inti', '1', 'saasf', 'terapi-cairan-dan-elektrolit-pada-kedaruratan-neurologi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:48:19', '2024-02-10 06:48:19'),
('01hp8we2xkb6cd373v1gg6tamt', '01hh1j89t0dfhw8kmq7db3adf3', 'Building Learning Commitment (BLC)', 'Materi Penunjang', '1', 'asfasf', 'building-learning-commitment-blc', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 06:49:17', '2024-02-11 00:56:27'),
('01hpat7v4t900zcqa1zjdkbg2m', '01hh1j89t0dfhw8kmq7db3adf3', 'Komunikasi Efektif', 'Materi Dasar', '1', 'asad', 'komunikasi-efektif', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 00:49:24', '2024-02-11 00:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_versions`
--

CREATE TABLE `curriculum_versions` (
  `id` char(36) NOT NULL,
  `training_id` char(26) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curriculum_versions`
--

INSERT INTO `curriculum_versions` (`id`, `training_id`, `title`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
('01hgr21rbkvk8wwkztv5zf9k1n', '01hgr205dn7yfhpqpzy5x3dhzq', 'Kurikulum Berdasarkan Mahasiswa Magister Keperawatan UI 2023', 'kurikulum-berdasarkan-mahasiswa-magister-keperawatan-ui-2023', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 14:41:50', '2023-12-03 14:41:50'),
('01hh1j89t0dfhw8kmq7db3adf3', '01hh19q210drfv8nd4gje2a4gk', 'BNLS Kemenkes 2023', 'bnls-kemenkes-2023', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-07 07:18:12', '2023-12-07 07:18:12'),
('01hp8dwq4p0vwnb122gx0a0q55', '01hh19q210drfv8nd4gje2a4gk', 'BNLS Kemenkes 2024', 'bnls-kemenkes-2024', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:35:08', '2024-02-10 02:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `duitkus`
--

CREATE TABLE `duitkus` (
  `id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `merchantCode` varchar(15) NOT NULL,
  `apiKey` varchar(150) NOT NULL,
  `base_url` varchar(100) NOT NULL,
  `hash` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `duitkus`
--

INSERT INTO `duitkus` (`id`, `type`, `merchantCode`, `apiKey`, `base_url`, `hash`) VALUES
(1, 'sanbox', 'D6168', '6042a5aec73e29d92e94a846d0740cf6', 'https://sandbox.duitku.com', 'D61686042a5aec73e29d92e94a846d0740cf6'),
(2, 'production', 'D2881', 'e09dd1d01a70d0f4d6953c711d4fa776', 'https://passport.duitku.com', 'D2881e09dd1d01a70d0f4d6953c711d4fa776');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date_start`, `date_finish`, `poster`, `description`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
('01hh0zj0rymf45ew7n6zds28qv', 'Event yang dilaksanakan oleh PP HIPENI', '2024-01-01', '2024-12-31', NULL, '<p>embed</p>', 'event-yang-dilaksanakan-oleh-pp-hipeni', NULL, '2023-12-07 01:51:27', '2023-12-07 01:51:27'),
('01hp8mw16zt3pyq4n3cwb15wnd', 'Pameran P3KI PJJ Informatika Unsia', '2024-02-20', '0204-03-30', NULL, '<p>Penjelasan</p>', 'pameran-p3ki-pjj-informatika-unsia', NULL, '2024-02-10 04:37:05', '2024-02-10 04:37:05'),
('01jg0bnygj3q9v2mnp3xkhmawm', 'BNLS', '2025-01-01', '2025-12-31', 'https://ppni.nos.wjv-1.neo.id/files/ZYzM8GbIHvw35kiroXUSZfnxRsFdtB9qaZQJx9Pi.png', '<p>Pelatihan ini</p>', 'bnls', NULL, '2024-12-25 19:10:41', '2024-12-25 19:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `event_files`
--

CREATE TABLE `event_files` (
  `id` char(36) NOT NULL,
  `event_topic_id` char(26) NOT NULL,
  `name` varchar(255) NOT NULL,
  `extention` varchar(255) NOT NULL,
  `mimeType` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_topics`
--

CREATE TABLE `event_topics` (
  `id` char(36) NOT NULL,
  `subject_study_id` char(26) NOT NULL,
  `module_id` bigint(20) NOT NULL DEFAULT 1,
  `pengajar` bigint(20) NOT NULL DEFAULT 1,
  `jpl` int(11) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time_open` datetime NOT NULL,
  `time_close` datetime NOT NULL,
  `created_by` bigint(20) NOT NULL DEFAULT 1,
  `slug` varchar(255) NOT NULL,
  `canva` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` char(36) NOT NULL,
  `user_id` char(26) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` text NOT NULL,
  `mimeType` varchar(255) DEFAULT NULL,
  `file_type` varchar(100) DEFAULT NULL,
  `extention` varchar(10) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `title`, `file_name`, `mimeType`, `file_type`, `extention`, `size`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
('01hp88man6gv61he1m7qfkdbrt', '01hgr0cszcqhe2ab67wt3nc9yd', 'Lapor Pajak', 'ppOmFO5MVFVo2eVSVH0SA7ZchaLkGtLtsBjHNCdT.png', NULL, 'file', 'png', 13815, 'https://atm-sehat.nos.wjv-1.neo.id/latihan/ppOmFO5MVFVo2eVSVH0SA7ZchaLkGtLtsBjHNCdT.png', '2024-02-10 01:03:10', '2024-02-10 01:03:10', NULL),
('01hp88r4vcfd47zpbje5ng1kha', '01hgr0cszcqhe2ab67wt3nc9yd', 'Lapor Pajak', '6b4TrrNfGcsHIlztdqsXV5JWYVy0ARIdsnGLS1Re.pdf', NULL, 'file', 'pdf', 312176, 'https://atm-sehat.nos.wjv-1.neo.id/latihan/6b4TrrNfGcsHIlztdqsXV5JWYVy0ARIdsnGLS1Re.pdf', '2024-02-10 01:05:15', '2024-02-10 01:05:15', NULL),
('01hp896mbvfnn1h9903zv4tdrp', '01hgr0cszcqhe2ab67wt3nc9yd', 'PPT KP', 'W1s3Lddhy1jS8whRLB8lzp7xfvOwY91qpltiqoXr.pptx', NULL, 'file', 'pptx', 1900615, 'https://atm-sehat.nos.wjv-1.neo.id/latihan/W1s3Lddhy1jS8whRLB8lzp7xfvOwY91qpltiqoXr.pptx', '2024-02-10 01:13:10', '2024-02-10 01:13:10', NULL),
('01hp89vkg1z8ta1qf768yhbjcp', '01hgr0cszcqhe2ab67wt3nc9yd', 'Album Dewa 19', 'PnXgGi8CWI0', NULL, 'Youtube', NULL, NULL, NULL, '2024-02-10 01:24:37', '2024-02-10 01:24:37', NULL),
('01hp89zmq0e6740vf07hypp8j1', '01hgr0cszcqhe2ab67wt3nc9yd', 'PPT Pengolahan Data', 'DAFTf4Kqgpg', NULL, 'Canva', NULL, NULL, NULL, '2024-02-10 01:26:49', '2024-02-10 01:26:49', NULL),
('01hp8bjpn4bedrsg1nkazgjwsp', '01hgr0cszcqhe2ab67wt3nc9yd', 'Sheila On 7 + Lirik (Full Album)', '0un8cDbeyPE', NULL, 'Youtube', NULL, NULL, NULL, '2024-02-10 01:54:42', '2024-02-10 01:54:42', NULL),
('01hp8bmhwxev816vd2cr4vxjj4', '01hgr0cszcqhe2ab67wt3nc9yd', 'TUTORIAL JAVASCRIPT OOP', 'aviAyIK5oSU', NULL, 'Youtube', NULL, NULL, NULL, '2024-02-10 01:55:43', '2024-02-10 01:55:43', NULL),
('01hp8jtntyvgctn8njva7r2x2d', '01hgr0cszcqhe2ab67wt3nc9yd', 'Pass Foto', 'ccYCW8CekXgzUNR61rOK7ktwHMUcTyuhC0eFWi7g.jpg', NULL, 'file', 'jpg', 379667, 'https://atm-sehat.nos.wjv-1.neo.id/latihan/ccYCW8CekXgzUNR61rOK7ktwHMUcTyuhC0eFWi7g.jpg', '2024-02-10 04:01:24', '2024-02-10 04:01:24', NULL),
('01hp8jx2czpcw7dya0erwm3nsq', '01hgr0cszcqhe2ab67wt3nc9yd', 'Anisa', 'IR3Ufn9RuksIVQk20SUWqrtuxD2wlvcnDlJvLfxy.jpg', NULL, 'file', 'jpg', 503277, 'https://atm-sehat.nos.wjv-1.neo.id/latihan/IR3Ufn9RuksIVQk20SUWqrtuxD2wlvcnDlJvLfxy.jpg', '2024-02-10 04:02:42', '2024-02-12 03:24:11', '2024-02-12 03:24:11'),
('01hp8qn1zp0s9ks8364783k90x', '01hgr0cszcqhe2ab67wt3nc9yd', 'Poster BNLS', 'gYAflvZmpiZvKOWnGZHGDanXuPxeI7njyifby2nk.jpg', NULL, 'file', 'jpg', 779736, 'https://atm-sehat.nos.wjv-1.neo.id/latihan/gYAflvZmpiZvKOWnGZHGDanXuPxeI7njyifby2nk.jpg', '2024-02-10 05:25:43', '2024-02-10 05:25:43', NULL),
('01hp935zewfrewd8ywepexzgjp', '01hgr0cszcqhe2ab67wt3nc9yd', 'LMS', '2jdPMXpMBoTut9njMw0KK82c27fKLMXpjjZfZjDu.jpg', NULL, 'file', 'jpg', 779736, 'https://ppni.nos.wjv-1.neo.id/latihan/2jdPMXpMBoTut9njMw0KK82c27fKLMXpjjZfZjDu.jpg', '2024-02-10 08:47:11', '2024-02-10 09:32:03', '2024-02-10 09:32:03'),
('01hp9397cehc9jf33ahdh9rkbf', '01hgr0cszcqhe2ab67wt3nc9yd', 'files', 'OHCpfUmGJWyAILOi2CE0d2oylZWxhPDFYojxuuvz.jpg', NULL, 'file', 'jpg', 733546, 'https://ppni.nos.wjv-1.neo.id/files/OHCpfUmGJWyAILOi2CE0d2oylZWxhPDFYojxuuvz.jpg', '2024-02-10 08:48:58', '2024-02-10 09:31:53', '2024-02-10 09:31:53'),
('01hpjyc952669ys81f9jhnekn2', '01hgr0cszcqhe2ab67wt3nc9yd', 'bnls 06-09 MART 2024', 'aD9qoYXC895LeLuyjnWA1QjNeOiiWhHUKxFKvDRf.png', NULL, 'file', 'png', 121190, 'https://ppni.nos.wjv-1.neo.id/files/aD9qoYXC895LeLuyjnWA1QjNeOiiWhHUKxFKvDRf.png', '2024-02-14 04:35:39', '2024-02-14 04:35:39', NULL),
('01hpjyeb0hb9k2y5wr9qyvvabe', '01hgr0cszcqhe2ab67wt3nc9yd', 'BNLS 17-20 APRIL 2024', 'Iuuf5GqJZr1TkIXmXrp7aDTyUeGsXLfOcYowMPGL.png', NULL, 'file', 'png', 117965, 'https://ppni.nos.wjv-1.neo.id/files/Iuuf5GqJZr1TkIXmXrp7aDTyUeGsXLfOcYowMPGL.png', '2024-02-14 04:36:47', '2024-02-14 04:36:47', NULL),
('01hpjyww1vtx2gyg9syyx02xgx', '01hgr0cszcqhe2ab67wt3nc9yd', 'BNLS 11-14 mei 2024', 'ZYzM8GbIHvw35kiroXUSZfnxRsFdtB9qaZQJx9Pi.png', NULL, 'file', 'png', 117128, 'https://ppni.nos.wjv-1.neo.id/files/ZYzM8GbIHvw35kiroXUSZfnxRsFdtB9qaZQJx9Pi.png', '2024-02-14 04:44:43', '2024-02-14 04:44:43', NULL),
('01hpksw86gh16e5m5g5aaakggm', '01hgr0cszcqhe2ab67wt3nc9yd', 'NIHSS Online', '11GR7C5nP6mlFkS6JuesJAWkbjYQWmm4Ho6KKn7Z.png', NULL, 'file', 'png', 112769, 'https://ppni.nos.wjv-1.neo.id/files/11GR7C5nP6mlFkS6JuesJAWkbjYQWmm4Ho6KKn7Z.png', '2024-02-14 12:36:14', '2024-02-14 12:36:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_10_28_083410_create_crop_images_table', 1),
(11, '2023_11_26_080839_create_events_table', 1),
(12, '2023_11_26_145951_create_class_events_table', 1),
(13, '2023_11_27_085812_create_subject_studies_table', 1),
(14, '2023_11_28_042600_create_trainings_table', 1),
(15, '2023_11_28_042947_create_curricula_table', 1),
(16, '2023_11_28_044110_create_curriculum_versions_table', 1),
(17, '2023_11_29_071211_create_event_topics_table', 1),
(18, '2023_11_30_081125_create_modules_table', 1),
(19, '2023_12_01_130149_create_module_attachments_table', 1),
(20, '2023_12_01_131057_create_codes_table', 1),
(21, '2023_12_02_075352_create_event_files_table', 1),
(22, '2023_12_03_013621_create_files_table', 1),
(23, '2023_12_06_042918_create_user_education_table', 2),
(24, '2023_12_06_043602_create_user_roles_table', 2),
(25, '2023_12_06_062150_create_training_questions_table', 2),
(26, '2023_12_06_062248_create_questions_table', 2),
(27, '2023_12_06_062309_create_question_answers_table', 2),
(28, '2023_12_07_025244_create_training_enrolls_table', 3),
(29, '2023_12_07_073220_create_tasks_table', 4),
(30, '2023_12_07_075812_create_task_answers_table', 4),
(38, '2023_12_08_074040_create_task_answer_details_table', 5),
(39, '2024_02_08_000142_create_clients_table', 6),
(40, '2024_02_11_014201_create_schedules_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` char(36) NOT NULL,
  `curriculum_id` char(26) NOT NULL,
  `title` varchar(255) NOT NULL,
  `jpl` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `curriculum_id`, `title`, `jpl`, `metode`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
('01hgr2f0bntgpvrxfyw1qftg2a', '01hgr26sztrsdvfkbgpft529mz', 'Ceramah Tingkat Kesadaran', '1', '01hgr2afmynay4vkefxd3pe16g', 'ceramah-tingkat-kesadaran', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 14:49:04', '2023-12-03 14:49:04'),
('01hp8x4gfkx5906409mcm04vzc', '01hp8w7ttwxdj21ptfjm69qv6d', 'Tatalaksana kedaruratan pada pasien trauma medula spinalis', '1', '01hgr2afmynay4vkefxd3pe16g', 'tatalaksana-kedaruratan-pada-pasien-trauma-medula-spinalis', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:01:32', '2024-02-10 07:01:32'),
('01hp8x5ftxv1zahn920p0mykqc', '01hp8w7ttwxdj21ptfjm69qv6d', 'Praktik Teknik moving dan transferring pada pasien trauma medulla spinalis', '1', '01hgr2brpnghct36h99jkk0y1v', 'praktik-teknik-moving-dan-transferring-pada-pasien-trauma-medulla-spinalis', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:02:04', '2024-02-11 10:25:36'),
('01hp8x7ffqx1gj9hqvv6p9kavr', '01hh1j9w5f55wey8tkjd2zssxh', 'Etikolegal Keperawatan Pada Kedaruratan Neurology', '1', '01hgr2afmynay4vkefxd3pe16g', 'etikolegal-keperawatan-pada-kedaruratan-neurology', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:03:09', '2024-02-10 07:03:09'),
('01hp8x90yba7y3nrymmfbhnpn9', '01hp2pj9me1sm04gxf6mxgpg16', 'Review Anatomi Fisiology Sistem Persarafan', '1', '01hgr2afmynay4vkefxd3pe16g', 'review-anatomi-fisiology-sistem-persarafan', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:04:00', '2024-02-10 07:04:00'),
('01hp8xbbc7ww8n3yxhmzzwfj59', '01hp8w256h7tj6jyng7b0vkhcd', 'Peran Perawat pada pemeriksaan penunjang neurologi', '1', '01hgr2afmynay4vkefxd3pe16g', 'peran-perawat-pada-pemeriksaan-penunjang-neurologi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:05:16', '2024-02-11 10:22:20'),
('01hp8xc0tnh6pt2jc202ev8nw4', '01hp8w256h7tj6jyng7b0vkhcd', 'Gambaran CT scan pada kasus kedaruratan neurologi', '1', '01hgr2brpnghct36h99jkk0y1v', 'gambaran-ct-scan-pada-kasus-kedaruratan-neurologi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:05:38', '2024-02-11 10:22:37'),
('01hp8xexjwf2dx3y10h3mhp6tx', '01hp2ncq6ahrhjcyr8ha6h1pt2', 'Peran perawat pada kedaruratan stroke', '1', '01hgr2afmynay4vkefxd3pe16g', 'peran-perawat-pada-kedaruratan-stroke', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:07:13', '2024-02-11 10:23:13'),
('01hp8xfkgrqpnaafbf4tjz5vrm', '01hp2ncq6ahrhjcyr8ha6h1pt2', 'Peran perawat pada terapi trombolisis intravena', '1', '01hgr2afmynay4vkefxd3pe16g', 'peran-perawat-pada-terapi-trombolisis-intravena', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:07:35', '2024-02-11 10:23:26'),
('01hp8xgqdfbtg9zwnvepnpqtvy', '01hp2ncq6ahrhjcyr8ha6h1pt2', 'Pengantar praktik skrining disfagia dan terapi trombolisis', '1', '01hgr2brpnghct36h99jkk0y1v', 'pengantar-praktik-skrining-disfagia-dan-terapi-trombolisis', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:08:12', '2024-02-11 10:23:39'),
('01hp8xh4vg31m7z9xv3jjm7rv4', '01hp2ncq6ahrhjcyr8ha6h1pt2', 'Praktik skrining disfagia', '1', '01hgr2brpnghct36h99jkk0y1v', 'praktik-skrining-disfagia', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:08:26', '2024-02-11 10:23:51'),
('01hp8xhp8a0rzad7e92ztrv31j', '01hp2ncq6ahrhjcyr8ha6h1pt2', 'Praktik pemberian terapi trombolisis', '1', '01hgr2brpnghct36h99jkk0y1v', 'praktik-pemberian-terapi-trombolisis', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:08:44', '2024-02-11 10:24:04'),
('01hp8xktxt5wh30v23d98fgjsg', '01hp8w39t15dcyqacvvfb5r1hn', 'Pengkajian Keperawatan Neurologi', '1', '01hgr2afmynay4vkefxd3pe16g', 'pengkajian-keperawatan-neurologi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:09:54', '2024-02-10 07:09:54'),
('01hp8xmvj4rybxw5wby0ggered', '01hp8w39t15dcyqacvvfb5r1hn', 'Pengantar praktik pengkajian neurologi', '1', '01hgr2brpnghct36h99jkk0y1v', 'pengantar-praktik-pengkajian-neurologi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:10:27', '2024-02-11 10:24:42'),
('01hp8xnhe3wev5mcczaabacpc8', '01hp8w39t15dcyqacvvfb5r1hn', 'Praktik pengkajian neurologi', '2', '01hgr2brpnghct36h99jkk0y1v', 'praktik-pengkajian-neurologi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:10:50', '2024-02-11 10:24:55'),
('01hp8xs8fwe504tzsd9njtk77e', '01hp8w629xnryq0g90kyfpmcmc', 'Tatalaksana kedaruratan pada pasien cedera kepala', '1', '01hgr2afmynay4vkefxd3pe16g', 'tatalaksana-kedaruratan-pada-pasien-cedera-kepala', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:12:52', '2024-02-10 07:12:52'),
('01hp8xwd71cgzcp1gn1sm0cb0t', '01hp8w629xnryq0g90kyfpmcmc', 'Terapi oksigen pada kedaruratan neurologi dan cedera kepala', '1', '01hgr2brpnghct36h99jkk0y1v', 'terapi-oksigen-pada-kedaruratan-neurologi-dan-cedera-kepala', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:14:35', '2024-02-11 10:21:26'),
('01hp8xzqzvxr2jq1ht6y4xyaz6', '01hp8w8wfq19hq075027a6pc7t', 'Tatalaksana Kedaruratan pada pasien Infeksi saraf pusat', '1', '01hgr2afmynay4vkefxd3pe16g', 'tatalaksana-kedaruratan-pada-pasien-infeksi-saraf-pusat', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:16:24', '2024-02-10 07:16:24'),
('01hp8y1gxk7hnzdse8kk4zqnze', '01hp8w9j9z3gbp9335fha409p0', 'Tatalaksana Peningkatan Tekanan Intrakranial', '1', '01hgr2afmynay4vkefxd3pe16g', 'tatalaksana-peningkatan-tekanan-intrakranial', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:17:23', '2024-02-10 07:17:23'),
('01hp8y28zfqjn6w1kjxr8bnetm', '01hp8wa7x3neeggw3z3g53r8hc', 'Tatalaksana kedaruratan pada pasien Guillen Bare Syndrome dan Myasthenia Gravis', '1', '01hgr2afmynay4vkefxd3pe16g', 'tatalaksana-kedaruratan-pada-pasien-guillen-bare-syndrome-dan-myasthenia-gravis', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:17:47', '2024-02-10 07:17:47'),
('01hp8y3160xx1s6h3e8h0zsk36', '01hp8wav6svvwqws2vvv0bbrxx', 'Tatalaksana kedaruratan pada pasien kejang', '1', '01hgr2afmynay4vkefxd3pe16g', 'tatalaksana-kedaruratan-pada-pasien-kejang', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 07:18:12', '2024-02-10 07:18:12'),
('01hpar5gk7vsef0z81m5hb12ze', '01hp8wc9t35a5cgwa1tkhwzvvf', 'Terapi Cairan dan elektrolit pada kedaruratan neurologi', '1', '01hgr2afmynay4vkefxd3pe16g', 'terapi-cairan-dan-elektrolit-pada-kedaruratan-neurologi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 00:13:11', '2024-02-11 00:13:11'),
('01hpat956qahbp0bg7yfsf6y4t', '01hpat7v4t900zcqa1zjdkbg2m', 'Komunikasi Efektif', '1', '01hgr2afmynay4vkefxd3pe16g', 'komunikasi-efektif', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 00:50:07', '2024-02-11 00:50:07'),
('01hpatnbnncv3xbdf0cpqh64p4', '01hp8we2xkb6cd373v1gg6tamt', 'Building Learning Commitment (BLC)', '1', '01hgr2brpnghct36h99jkk0y1v', 'building-learning-commitment-blc', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 00:56:47', '2024-02-11 00:56:47'),
('01hpatrhqwzrb2rzpqa5j26fer', '01hp8w9j9z3gbp9335fha409p0', 'Praktik Obat obatan pada kasus kedaruratan neurologi dan PTIK', '1', '01hgr2brpnghct36h99jkk0y1v', 'praktik-obat-obatan-pada-kasus-kedaruratan-neurologi-dan-ptik', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 00:58:32', '2024-02-11 10:26:13'),
('01hpatswn30ffxkexr1s5ms6p8', '01hp2p8fmvwd5zdtx8f4616mdc', 'Anti Korupsi', '1', '01hgr2afmynay4vkefxd3pe16g', 'anti-korupsi', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 00:59:16', '2024-02-11 00:59:16'),
('01hpatx67wd2bqpwd0yxh40gmj', '01hp8w629xnryq0g90kyfpmcmc', 'Pengantar praktik manajemen jalan nafas, kontrol servikal', '1', '01hgr2brpnghct36h99jkk0y1v', 'pengantar-praktik-manajemen-jalan-nafas-kontrol-servikal', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 01:01:04', '2024-02-11 10:21:44'),
('01hpav0j8btqaensd2v985179s', '01hp2q3jmn8b5b2sqqb8ktv90v', 'evaluasi kompetensi (pemeriksaan neurologis dan skrining disfagia', '2', '01hgr2brpnghct36h99jkk0y1v', 'evaluasi-kompetensi-pemeriksaan-neurologis-dan-skrining-disfagia', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 01:02:54', '2024-02-11 01:02:54'),
('01hpav18jg7jef8exf2zjwmqhr', '01hp2q3jmn8b5b2sqqb8ktv90v', 'Rencana Tindak Lanjut', '1', '01hgr2brpnghct36h99jkk0y1v', 'rencana-tindak-lanjut', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-11 01:03:17', '2024-02-11 01:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `module_attachments`
--

CREATE TABLE `module_attachments` (
  `id` char(36) NOT NULL,
  `module_id` char(26) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_id` varchar(36) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
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
  `id` varchar(100) NOT NULL,
  `user_id` char(36) NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) NOT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
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
  `client_id` char(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` char(36) NOT NULL,
  `training_id` char(26) NOT NULL,
  `curriculum_id` varchar(36) NOT NULL,
  `training_question_id` char(26) NOT NULL,
  `title` text DEFAULT NULL,
  `youtube_id_video` varchar(50) NOT NULL,
  `user_id` char(26) NOT NULL,
  `id_jawaban` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `training_id`, `curriculum_id`, `training_question_id`, `title`, `youtube_id_video`, `user_id`, `id_jawaban`, `created_at`, `updated_at`) VALUES
('01hh49fj66bfs1hk3tddgj5hcs', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr26sztrsdvfkbgpft529mz', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah tingkat kesadarannya', 'BiLyWXw7nOs', '01hgr0cszcqhe2ab67wt3nc9yd', '01hh4a3ewkstpxa8ah23edqkzg', '2023-12-08 08:42:36', '2023-12-15 06:02:21'),
('01hh4chjh4b3qhzy1qj4rb53ph', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr6wa3n75bkh03yr7yw6p0y', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah Nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-08 09:36:07', '2023-12-08 09:36:07'),
('01hhpa2wzzkt1pxgcmstntfswe', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr6z2sfz4d0de05s1fgvwsc', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'W0mBmvNKTHE', '01hgr0cszcqhe2ab67wt3nc9yd', '01hhxg85k6hxg9ptzxy1615ys5', '2023-12-15 08:39:29', '2023-12-18 03:42:19'),
('01hhpa41j4bcd20rw6nmawydaw', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr70p5h8y64pp9png4134ny', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:40:06', '2023-12-15 08:40:06'),
('01hhpa6k7jr2b78nx7d7t9405y', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr71vmwsmzwhn4x5wj66kj9', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:41:30', '2023-12-15 08:41:30'),
('01hhpa7mt57e785qg44sc20xp3', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr72bp36gfcvmksvavsc4sd', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:42:04', '2023-12-15 08:42:04'),
('01hhpa8r9tpje6m3abm8tfhrht', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr730bgf3tdd78xahc2xves', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:42:41', '2023-12-15 08:42:41'),
('01hhpa9y08e6tv6980v19n9y85', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr73ynnvcj0v1fyt1y52aq7', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:43:19', '2023-12-15 08:43:19'),
('01hhpaahzd1d0rr3z16y1ecsz1', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr74f1vy07wy1k175w71545', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:43:40', '2023-12-15 08:43:40'),
('01hhpabqfce3hfm453g2h93wys', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr7519x375vn4jqky1r7xez', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:44:18', '2023-12-15 08:44:18'),
('01hhpac8k26xk6ze9bvsavyrm8', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr7cqn9jac2ztfxkdpkv984', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'iJ3EgxJrupY', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:44:36', '2023-12-15 08:44:36'),
('01hhpactegb4b62mjzxjyff60g', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr7ecd090y0xmgqf8g7y680', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'RCxikmGIXTs', '01hgr0cszcqhe2ab67wt3nc9yd', '01hhpaftmw4jwg1x9xyhw91t36', '2023-12-15 08:44:54', '2023-12-15 08:47:04'),
('01hhpaka88p58r9m7zbzy951tf', '01hgr205dn7yfhpqpzy5x3dhzq', '01hgr7exp16p1rxzbpvrsk4mrw', '01hgz7kg1s2fyya8xyg6wsdgbj', 'Berapakah nilainya?', 'RCxikmGIXTs', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-15 08:48:27', '2023-12-15 08:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE `question_answers` (
  `id` char(36) NOT NULL,
  `question_id` char(26) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`id`, `question_id`, `title`, `value`, `created_at`, `updated_at`) VALUES
('01hh4a3ewkstpxa8ah23edqkzg', '01hh49fj66bfs1hk3tddgj5hcs', 'Skor 0', 0, '2023-12-08 08:53:28', '2023-12-15 05:57:47'),
('01hh4c75h4r81drc1wsd3z09jd', '01hh49fj66bfs1hk3tddgj5hcs', 'Skor 1', 1, '2023-12-08 09:30:26', '2023-12-15 05:58:12'),
('01hhp0wb90cdj0xb1fs94he2gb', '01hh49fj66bfs1hk3tddgj5hcs', 'Skor 2', 2, '2023-12-15 05:58:37', '2023-12-15 05:58:37'),
('01hhp0ww576m954jxzmby8t6ef', '01hh49fj66bfs1hk3tddgj5hcs', 'Skor 3', 3, '2023-12-15 05:58:54', '2023-12-15 05:58:54'),
('01hhpafgvs151842cp9w7a119z', '01hhpactegb4b62mjzxjyff60g', 'Skor 0', 0, '2023-12-15 08:46:23', '2023-12-15 08:46:23'),
('01hhpaftmw4jwg1x9xyhw91t36', '01hhpactegb4b62mjzxjyff60g', 'Skor 1', 1, '2023-12-15 08:46:33', '2023-12-15 08:46:33'),
('01hhpag70dc7gq6b8fmjgcjxzs', '01hhpactegb4b62mjzxjyff60g', 'Skor 2', 2, '2023-12-15 08:46:45', '2023-12-15 08:46:45'),
('01hhxg7dhcmv3gh946hzx6s0g6', '01hhpa2wzzkt1pxgcmstntfswe', 'Skor 0', 0, '2023-12-18 03:41:30', '2023-12-18 03:41:30'),
('01hhxg7skd13xxkcxchpyw3agr', '01hhpa2wzzkt1pxgcmstntfswe', 'Skor 1', 1, '2023-12-18 03:41:42', '2023-12-18 03:41:42'),
('01hhxg85k6hxg9ptzxy1615ys5', '01hhpa2wzzkt1pxgcmstntfswe', 'Skor 2', 2, '2023-12-18 03:41:54', '2023-12-18 03:41:54'),
('01hhxg8gz791ndq0yt9jzb1x3q', '01hhpa2wzzkt1pxgcmstntfswe', 'Skor 3', 3, '2023-12-18 03:42:06', '2023-12-18 03:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` char(36) NOT NULL,
  `class_event_id` char(26) DEFAULT NULL,
  `module_id` char(26) DEFAULT NULL,
  `user_id` char(26) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `finish` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` enum('N','Y') NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `class_event_id`, `module_id`, `user_id`, `start`, `finish`, `description`, `status`, `created_at`, `updated_at`) VALUES
('01hpc70pxafey2yvsmp96zv8s3', '01hp8dhh4477vqnyqptrj263wa', '01hpatswn30ffxkexr1s5ms6p8', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-12 08:00:00', '2024-02-12 08:45:00', NULL, 'N', '2024-02-11 13:51:56', '2024-02-11 13:51:56'),
('01hpc72ca3d24q1z1hmp3gwbyj', '01hp8dhh4477vqnyqptrj263wa', '01hpar5gk7vsef0z81m5hb12ze', '01hgr33x4634mrsg1863fkqfvs', '2024-02-12 08:45:00', '2024-02-12 09:30:00', NULL, 'N', '2024-02-11 13:52:51', '2024-02-11 13:52:51'),
('01hpe8845xqbjsvzxh34mtf1ee', '01hp8tewfjyx26s3qx9tf1j29v', '01hp8x7ffqx1gj9hqvv6p9kavr', '01hgr33x4634mrsg1863fkqfvs', '2024-04-17 14:30:00', '2024-04-17 15:15:00', NULL, 'N', '2024-02-12 08:51:57', '2024-02-13 08:45:00'),
('01hpgtjt9gz39z380c5tqr991z', '01hp8dhh4477vqnyqptrj263wa', '01hp8x7ffqx1gj9hqvv6p9kavr', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-03-06 14:30:00', '2024-03-06 15:15:00', NULL, 'N', '2024-02-13 08:50:50', '2024-02-13 08:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `subject_studies`
--

CREATE TABLE `subject_studies` (
  `id` char(36) NOT NULL,
  `class_event_id` char(26) NOT NULL,
  `pengampu` bigint(20) NOT NULL,
  `kode_mata_ajar` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `canva` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` char(36) NOT NULL,
  `class_event_id` char(26) NOT NULL,
  `training_id` char(26) NOT NULL,
  `jenis_tugas` char(36) NOT NULL,
  `teacher_id` char(36) NOT NULL,
  `description` text NOT NULL,
  `date_start` datetime NOT NULL,
  `date_finish` datetime NOT NULL,
  `status` enum('open','close') NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `class_event_id`, `training_id`, `jenis_tugas`, `teacher_id`, `description`, `date_start`, `date_finish`, `status`, `created_at`, `updated_at`) VALUES
('01hh1sag55fjmnjy7bqs0bmqa6', '01hh1a52egyn0bx3weqhmqr0x9', '01hgr205dn7yfhpqpzy5x3dhzq', '01hh1kw7r1etmhfqr2gk7s23r8', '01hgr33x4634mrsg1863fkqfvs', 'Sebelum anda memulai pelatihan ini mari mengerjakan soal terlebih dahulu', '2023-12-12 07:00:00', '2023-12-16 22:00:00', 'open', '2023-12-07 09:21:44', '2023-12-07 09:21:44'),
('01hhmqzxypmkkv2kah80gk7ke1', '01hh1a52egyn0bx3weqhmqr0x9', '01hgr205dn7yfhpqpzy5x3dhzq', '01hh1kx4t2aqxwj1jsk2renc7k', '01hgr0cszcqhe2ab67wt3nc9yd', 'Setelah kita banyak belajar tentang pengkajian NIHSS mari kita ingat kembali apa yang telah kita pelajari', '2023-12-18 01:03:00', '2023-12-19 01:03:00', 'open', '2023-12-14 18:04:03', '2023-12-14 18:04:03'),
('01hpe93yzjt8mmh5d6amz2fmxs', '01hp8tewfjyx26s3qx9tf1j29v', '01hh19q210drfv8nd4gje2a4gk', '01hh1kw7r1etmhfqr2gk7s23r8', '01hgr0cszcqhe2ab67wt3nc9yd', 'kerjakan dengan baik', '2024-04-17 06:00:00', '2024-04-17 08:45:00', 'open', '2024-02-12 09:07:09', '2024-02-12 09:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `task_answers`
--

CREATE TABLE `task_answers` (
  `id` char(36) NOT NULL,
  `task_id` char(36) NOT NULL,
  `training_id` char(26) NOT NULL,
  `class_event_id` char(26) NOT NULL,
  `jenis_tugas` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_finish` datetime DEFAULT NULL,
  `status` enum('open','close') NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_answers`
--

INSERT INTO `task_answers` (`id`, `task_id`, `training_id`, `class_event_id`, `jenis_tugas`, `student_id`, `nilai`, `date_start`, `date_finish`, `status`, `created_at`, `updated_at`) VALUES
('01hhtdnab5we8pzm3txn97hpg1', '01hhmqzxypmkkv2kah80gk7ke1', '01hgr205dn7yfhpqpzy5x3dhzq', '01hh1a52egyn0bx3weqhmqr0x9', '01hh1kx4t2aqxwj1jsk2renc7k', '01hgr0cszcqhe2ab67wt3nc9yd', NULL, '2023-12-16 22:58:56', '2023-12-16 23:01:28', 'open', '2023-12-16 22:58:56', '2023-12-16 23:01:28'),
('01hhtdnerk9q1kwr8f6qcv4rqq', '01hh1sag55fjmnjy7bqs0bmqa6', '01hgr205dn7yfhpqpzy5x3dhzq', '01hh1a52egyn0bx3weqhmqr0x9', '01hh1kw7r1etmhfqr2gk7s23r8', '01hgr0cszcqhe2ab67wt3nc9yd', 1, '2023-12-16 00:00:00', '2023-12-18 04:58:22', 'close', '2023-12-16 22:59:01', '2023-12-18 04:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `task_answer_details`
--

CREATE TABLE `task_answer_details` (
  `id` char(36) NOT NULL,
  `user_id` char(26) NOT NULL,
  `task_answer_id` char(26) NOT NULL,
  `question_id` char(26) NOT NULL,
  `description` text DEFAULT NULL,
  `youtube_id_video` varchar(255) DEFAULT NULL,
  `id_jawaban` char(36) DEFAULT NULL,
  `correct` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
('01hgr205dn7yfhpqpzy5x3dhzq', 'Pengkajian NIHSS', 'pengkajian-nihss', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-03 14:40:58', '2023-12-03 14:40:58'),
('01hh19q210drfv8nd4gje2a4gk', 'Basic Neurology Life Support (BNLS)', 'basic-neurology-life-support-bnls', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-07 04:48:58', '2023-12-07 04:48:58'),
('01hp8e3vcwd1ypsjrfrp1cd2v5', 'Pelatihan Machine Learning Dasar', 'pelatihan-machine-learning-dasar', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:39:02', '2024-02-10 02:39:02'),
('01hp8e4ha8rmy0v892naj0kyjz', 'Pelatihan Machine Learning Lanjutan', 'pelatihan-machine-learning-lanjutan', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:39:24', '2024-02-10 02:39:24'),
('01hp8e5cbgf4rvmgxq0tdh023b', 'Pelatihan PHP Dasar', 'pelatihan-php-dasar', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:39:52', '2024-02-10 02:39:52'),
('01hp8e5q6856kq62yym13srwb9', 'Pelatihan PHP Lanjutan', 'pelatihan-php-lanjutan', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:40:03', '2024-02-10 02:40:03'),
('01hp8e6as407dp02pbgz39gag4', 'Pelatihan PHP OOP', 'pelatihan-php-oop', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:40:23', '2024-02-10 02:40:23'),
('01hp8e6rp3xv50sstyaq9qca5e', 'Pelatihan Laravel Dasar', 'pelatihan-laravel-dasar', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:40:37', '2024-02-10 02:40:37'),
('01hp8e73trph81y46g0q9cg4d3', 'Pelatihan Laravel Lanjutan', 'pelatihan-laravel-lanjutan', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:40:49', '2024-02-10 02:40:49'),
('01hp8e7zde2n2s86dzbttdy16m', 'Pelatihan Laravel RestFul API', 'pelatihan-laravel-restful-api', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:41:17', '2024-02-10 02:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `training_enrolls`
--

CREATE TABLE `training_enrolls` (
  `id` char(36) NOT NULL,
  `user_id` char(26) NOT NULL,
  `class_event_id` char(26) NOT NULL,
  `training_id` char(26) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `status` enum('success','pending','cancel') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_enrolls`
--

INSERT INTO `training_enrolls` (`id`, `user_id`, `class_event_id`, `training_id`, `price`, `status`, `created_at`, `updated_at`) VALUES
('01hhmn3x3v3pxvwrvmdbwpbvp5', '01hgr0cszcqhe2ab67wt3nc9yd', '01hh1a52egyn0bx3weqhmqr0x9', '01hgr205dn7yfhpqpzy5x3dhzq', NULL, 'success', '2023-12-14 17:13:47', '2023-12-14 17:13:47'),
('01hhx2az7765tpsp84260y83yd', '01hgr33x4634mrsg1863fkqfvs', '01hh1a52egyn0bx3weqhmqr0x9', '01hgr205dn7yfhpqpzy5x3dhzq', NULL, 'success', '2023-12-17 23:38:46', '2023-12-17 23:38:46'),
('01hnjf954j36wfqm33xs1ksn7b', '01hgr0cszcqhe2ab67wt3nc9yd', '01hh1af1mb2s9y8hgf5kef5fwt', '01hh19q210drfv8nd4gje2a4gk', NULL, 'success', '2024-02-01 13:56:06', '2024-02-01 13:56:06'),
('01hpdgf5n6fk3624mb86ez9fhm', '01hgr0cszcqhe2ab67wt3nc9yd', '01hp8tewfjyx26s3qx9tf1j29v', '01hh19q210drfv8nd4gje2a4gk', 4000000, 'success', '2024-02-12 01:56:22', '2024-02-12 01:56:22'),
('01hpgr16q39xzt5wafzatzk4b5', '01hpgpj0h352tb8pkhec99qa81', '01hp8dhh4477vqnyqptrj263wa', '01hh19q210drfv8nd4gje2a4gk', 4000000, 'pending', '2024-02-13 08:06:16', '2024-02-13 08:06:16'),
('01hpgr6jk0a4mj3tsrebh7jbf4', '01hgr0cszcqhe2ab67wt3nc9yd', '01hp8dhh4477vqnyqptrj263wa', '01hh19q210drfv8nd4gje2a4gk', 4000000, 'success', '2024-02-13 08:09:12', '2024-02-13 08:09:12'),
('01hpkwk73jt3ex3qa7vg5vdcch', '01hgr0cszcqhe2ab67wt3nc9yd', '01hpksfxk6zds72qh31gjxdzww', '01hh19q210drfv8nd4gje2a4gk', 4000000, 'pending', '2024-02-14 13:23:44', '2024-02-14 13:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `training_questions`
--

CREATE TABLE `training_questions` (
  `id` char(36) NOT NULL,
  `training_id` char(26) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` enum('open','close') NOT NULL,
  `user_id` char(26) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_questions`
--

INSERT INTO `training_questions` (`id`, `training_id`, `title`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
('01hgz7kg1s2fyya8xyg6wsdgbj', '01hgr205dn7yfhpqpzy5x3dhzq', 'Tipe Soal A', 'open', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-06 09:33:35', '2023-12-06 12:20:44'),
('01hgznm9gykagheb35hjfw9v8r', '01hgr205dn7yfhpqpzy5x3dhzq', 'Tipe SOal B', 'open', '01hgr0cszcqhe2ab67wt3nc9yd', '2023-12-06 13:38:41', '2023-12-06 13:38:41'),
('01hp8e059cfy9ds2b6zcnhrmmg', '01hh19q210drfv8nd4gje2a4gk', 'Soal Tipe A', 'open', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:37:01', '2024-02-10 02:37:01'),
('01hp8e0zy88q9dckf4q0z19nf5', '01hh19q210drfv8nd4gje2a4gk', 'Soal Tipe B', 'open', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:37:28', '2024-02-10 02:37:28'),
('01hp8e1jc3zp14kjeg0731qag1', '01hh19q210drfv8nd4gje2a4gk', 'Soal Tipe C', 'open', '01hgr0cszcqhe2ab67wt3nc9yd', '2024-02-10 02:37:47', '2024-02-10 02:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `agama` char(36) DEFAULT NULL,
  `status_menikah` varchar(36) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan` varchar(36) DEFAULT NULL,
  `tempat_kerja` varchar(255) DEFAULT NULL,
  `status_pekerjaan` varchar(36) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_depan`, `nama_belakang`, `nik`, `gender`, `agama`, `status_menikah`, `email`, `nomor_telepon`, `tempat_lahir`, `tanggal_lahir`, `pendidikan`, `tempat_kerja`, `status_pekerjaan`, `email_verified_at`, `password`, `remember_token`, `role`, `foto`, `created_at`, `updated_at`) VALUES
('01hgr0cszcqhe2ab67wt3nc9yd', 'Khairon', 'Khairon', 3209290609840200, '01hgr04cmhntr9dcw6jwj2kh1f', '01hgr0x86kphzf6fbxbcz3kv1a', '01hh3hxg5xr30m813wjsagttn5', 'khaironbiz@gmail.com', '081213798746', 'Cirebon', '1984-09-06', '01hgyksh7ry0esjcv0aphtwc7x', 'RS Pusat Otak Nasional', '01hh3jddct9jy26gnfxmp6amww', NULL, '$2y$10$zTG/Z.EWRmmchGbj94aMEeeNuI6BK2MmbVYvEARWjLEeY1q4SsisO', NULL, '01hgypq1q4tsxp49b5dtn2645f', 'https://atm-sehat.nos.wjv-1.neo.id/latihan/Ea70kTq802iumqlGbe3q2raMFreO88lpGhBWWXMY.jpg', '2023-12-03 14:12:55', '2024-02-14 13:52:30'),
('01hgr33x4634mrsg1863fkqfvs', 'Anisa', 'Fitri Laila', 320, '01hgr055ms5422h1pb11ervbcm', '', '', 'khaironbiz@yahoo.com', '0817250909', 'Bogor', '2015-07-16', '', '', '', NULL, '$2y$10$zTG/Z.EWRmmchGbj94aMEeeNuI6BK2MmbVYvEARWjLEeY1q4SsisO', NULL, '01hgypq1q4tsxp49b5dtn2645f', 'https://atm-sehat.nos.wjv-1.neo.id/latihan/9y01vfAnpcZZ5uxd7hu25Ht2CFDGuRTtwpavaHjT.jpg', '2023-12-03 15:00:29', '2023-12-18 00:12:08'),
('01hpgpj0h352tb8pkhec99qa81', 'Khairon', 'Ners', 1234567891234567, '01hgr04cmhntr9dcw6jwj2kh1f', '01hgr0x86kphzf6fbxbcz3kv1a', '01hh3hx1xgfr2a0danvq8s2rw4', 'khairon@pkr.ac.id', '08123456789', 'Cirebon', '1984-09-06', '01hgymjbm9zvrtdr2j8t89m94b', 'RSPON', '01hh3jddct9jy26gnfxmp6amww', NULL, '$2y$10$2qrIrWq/YCQR5BxJsxCCi.kyDY9Kh6MnwyaGIcBHJEhbFC2nq9/wq', NULL, '01hgyns1g3x13c4412d69hk5tr', 'https://atm-sehat.nos.wjv-1.neo.id/latihan/HpGPPMwbKvegEfYinGLOQOSoFGRd1GfQpOwFIg9y.png', '2024-02-13 07:40:30', '2024-02-13 07:47:56'),
('01jfyv50pzjvhmvnac60ceqprt', 'Khairon', '', 3209290609841234, NULL, NULL, NULL, 'khaironbizzz@gmail.com', '081213798776', 'Cirebon', '1984-09-06', NULL, NULL, NULL, NULL, '$2y$10$4nHU/jN3QcOvWwkXqeKDYOO5mw//M2ott0PuPmta8xDl6imsav7zO', NULL, '01hgypq1q4tsxp49b5dtn2645f', NULL, '2024-12-25 05:02:34', '2024-12-25 05:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `id` char(36) NOT NULL,
  `user_id` char(26) NOT NULL,
  `jenjang_pendidikan_id` char(36) NOT NULL,
  `nama_institusi` varchar(255) NOT NULL,
  `tahun_masuk` date NOT NULL,
  `tahun_keluar` date NOT NULL,
  `nomor_ijazah` varchar(255) NOT NULL,
  `nama_penandatangan_ijazah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `user_id`, `jenjang_pendidikan_id`, `nama_institusi`, `tahun_masuk`, `tahun_keluar`, `nomor_ijazah`, `nama_penandatangan_ijazah`, `created_at`, `updated_at`) VALUES
('01hp6y2s1jf5gcr2s2vk9ppfyk', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgykv73cqvvdam9dcjq59par', 'MI Alwathaniyah', '1991-07-06', '1996-07-06', '123', 'Drs. Toha Abdullah, SPd', '2024-02-09 12:39:35', '2024-02-09 12:39:35'),
('01hp6z2enxq0hyjw016d9jd8qj', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgymswb7wdn08yd633ar9cr8', 'Politeknik Kesehatan Tasikmalaya', '2003-07-01', '2006-09-07', '123', 'Tatang', '2024-02-09 12:56:53', '2024-02-09 12:56:53'),
('01hp829e05cht4cv6njbg7mw4b', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgyky7jr9h2922qntnkgephy', 'MTs Negeri Palimanan', '1997-07-01', '2000-07-01', '123', 'Drs. Abdullah', '2024-02-09 23:12:22', '2024-02-09 23:12:22'),
('01hp82e6b0cf7ek0pastq8n153', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgykz9ftnhfsfr8gq0nbgacm', 'SMA Negeri 4 Kota Cirebon', '2000-07-01', '2003-07-01', '12345', 'Drs. Eman Sutarman', '2024-02-09 23:14:58', '2024-02-09 23:14:58'),
('01hp82h34mmpkejd26qaxczx1z', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgymwgwfdjh7pxbnxxevhjg6', 'Universitas Binawan', '2017-08-01', '2019-09-07', '12342', 'Erika Lubis, MN', '2024-02-09 23:16:33', '2024-02-09 23:16:33'),
('01hp82k93sbjy2707ehpzmefd7', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgyn3cwmcnprqgh7ar228fkv', 'Universitas Binawan', '2019-09-01', '2020-09-01', '12345', 'Erika Lubis, MN', '2024-02-09 23:17:44', '2024-02-09 23:17:44'),
('01hp83mgvkp64pvfafkh4p4d69', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgymwgwfdjh7pxbnxxevhjg6', 'Universitas Siber Asia', '2020-12-25', '2024-09-01', '12345', 'Mr. Jan Youn Cho, Ph.D., MPA., CPA', '2024-02-09 23:35:53', '2024-02-09 23:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` char(36) NOT NULL,
  `user_id` char(26) NOT NULL,
  `role_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_code`, `created_at`, `updated_at`) VALUES
('1', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgypq1q4tsxp49b5dtn2645f', '2024-02-07 15:10:30', NULL),
('2', '01hgr0cszcqhe2ab67wt3nc9yd', '01hgyns1g3x13c4412d69hk5tr', '2024-02-07 15:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webs`
--

CREATE TABLE `webs` (
  `id` char(36) NOT NULL,
  `nama_web` varchar(255) DEFAULT NULL,
  `singkatan` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `visi` varchar(255) DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `user_id` char(26) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webs`
--

INSERT INTO `webs` (`id`, `nama_web`, `singkatan`, `logo`, `visi`, `misi`, `url`, `email`, `phone`, `alamat`, `user_id`, `created_at`, `updated_at`) VALUES
('7b0e8e14-c2ba-11ef-b396-c8940271b206', 'ppni', 'ppni', 'https://nos.wjv-1.neo.id/ppni/files/OHCpfUmGJWyAILOi2CE0d2oylZWxhPDFYojxuuvz.jpg', 'visi', 'misi', 'ppni.or.id', 'khaironbiz@gmail.com', NULL, NULL, '01jfyv50pzjvhmvnac60ceqprt', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_events`
--
ALTER TABLE `class_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop_image`
--
ALTER TABLE `crop_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curricula`
--
ALTER TABLE `curricula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculum_versions`
--
ALTER TABLE `curriculum_versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duitkus`
--
ALTER TABLE `duitkus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_files`
--
ALTER TABLE `event_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_topics`
--
ALTER TABLE `event_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_attachments`
--
ALTER TABLE `module_attachments`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_studies`
--
ALTER TABLE `subject_studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_answers`
--
ALTER TABLE `task_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_answer_details`
--
ALTER TABLE `task_answer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_enrolls`
--
ALTER TABLE `training_enrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_questions`
--
ALTER TABLE `training_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nomor_telepon_unique` (`nomor_telepon`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crop_image`
--
ALTER TABLE `crop_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duitkus`
--
ALTER TABLE `duitkus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
