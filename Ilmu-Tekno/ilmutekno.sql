-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 02:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilmutekno`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `about` text NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `about`, `foto`) VALUES
(10, 'Ilmu-Tekno merupakan sebuah website yang kami kembangkan untuk memenuhi kebutuhan netizen akan informasi seputar teknologi. Dalam website ini berfokus pada postingan artikel/berita (blog),dimana jika login sebagai admin bisa melakukan penambahan,edit,serta hapus artikel. Selain itu web kami memiliki fitur pencarian dan playlist video yang mungkin akan berguna bagi para pengunjung untuk melihat video seputar teknologi masa kini ataupun berita-berita menarik.Web ini masih akan terus dikembangkan untuk menjadi web yang lebih baik lagi.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `about` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `nim`, `username`, `password`, `foto`, `level`, `jurusan`, `hobi`, `about`) VALUES
(1, 'Almaas Rozikin Herawan', 'almaasrozikin@gmail.com', '183140914111031', 'almaas', '21232f297a57a5a743894a0e4a801fc3', '1.jpg', 'superadmin', 'Sistem Infromasi', 'Membaca,Ngegame,Menyanyi', 'Ketertarikan saya akan dunia IT,sudah dimulai saat ketika saya duduk di bangku SD,dimana saya mulai mengenal internet.\r\n\r\nSekarang saya berkuliah di jurusan yang berkecimpung dalam dunia IT,\r\n\r\nyaitu Jurusan Sistem Informasi.Saya berkuliah di Universitas Brawijaya Program Pendidikan Vokasi.'),
(2, 'User', 'user@gmail.com', '183140913111021', 'user', '6ad14ba9986e3615423dfca256d04e3f', '2.jpg', 'admin', 'Teknik Elektro', 'Membaca', 'Saya adalah user dengan level admin,saya tidak memiliki kewenangan penuh dalam pengolahan data di website ini'),
(11, 'Goku', 'goku_dbz@gmail.com', '19201920', 'goku', 'goku123', '.jpg', 'admin', 'Martial Arts', 'Bertarung', 'Haloo,Nama Saya Goku\r\nSaya ahli dalam seni bela diri\r\nKalian Pasti tidak asing dengan saya kan??\r\nHehehe...\r\nKamehameha..');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `posting` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `tanggal`, `judul`, `id_kategori`, `posting`, `foto`) VALUES
(100, '2019-04-09', 'Siapa? Penguasa Pasar ', 1, 'Smartphone bukan lagi menjadi barang mewah saat ini. Siapapun, hampir semua orang memiliki sebuah ponsel pintar di saku mereka. Ada berbagai merek dijual di pasar, namun siapa sebenarnya penguasa pasar smartphone saat ini?\r\nJika dilihat dari varian sistem operasi, berdasarkan artikel ulasan Ronald wan ini terlihat bahwa Android masih mendominasi. Dan merek yang masih merajai pasar adalah Samsung dengan pangsa pasar 21 persen di tahun 2016 lalu.', '100.jpg'),
(102, '2019-04-17', 'Apakah Internet akan ada Selamanya?', 3, 'Internet saat ini telah menjadi kebutuhan bagi semua orang.Seolah-olah kita akan terasa kesulitan jika tidak ada internet.Namun jangan kalian pikir kalau internet bisa bertahan selamanya.Berikut beberapa penyebab kematian internet : 1.Solar flare yang mengancam telekomunikasi 2.Rusaknya Satelit 3.Kebijakan Pemerintah Dunia', '102.jpg'),
(103, '2019-04-17', 'Teknologi Masa Depan', 1, 'Teknologi-teknologi baru yang sedang dikembangkan benar-benar revolusioner, hal-hal yang nyaris tidak pernah terbayangkan sebelumnya oleh para ilmuwan dan hanya ada dalam khayalan-khayalan manusia. Di suatu hari nanti, manusia mungkin bisa hidup ratusan tahun tanpa mengenal penyakit, memiliki kecerdasan yang genius, dan pergi bertamasya ke luar angkasa. Ini adalah beberapa teknologi masa depan yang ditunggu-tunggu pengembangannya oleh semua orang', '103.jpg'),
(104, '2019-04-23', 'Proyek Transportasi Masa Depan', 4, 'siapa nih di antara kalian yang sering nonton film-film fiksi ilmiah dan menampilkan teknologi canggih yang futuristis. Yap, so donï¿½t worry anymore, berbekal penemuan teknologi terbaru, konsep transportasi futuristik tercanggih di masa depan akhirnya dapat terwujudkan yah gais. Kereta cepat yang futuristik, menyerupai kapsul transportasi sebagai kereta hampa udara, merupakan proyek transportasi tercepat dari film fiksi ilmiah bergerak melalui terowongan bawah laut. Waw, emang bisa yah terowongan itu terletak di dasar laut?', '104.jpg'),
(106, '2019-04-28', 'Ini Dia Beberapa Fakta Tentang IMEI', 1, 'Baru baru ini Kementrian Komunikasi dan Informatika telah memberlakukan registrasi kartu SIM prabayar bagi para pengguna layanan seluler. Dikutip dari berita teknologi, pemerintah dalam waktu dekat akan memberlakukan registrasi IMEI ponsel. Mungkin sering dilihatnya tulisan IMEI oleh para pengguna  ponsel yang tertera didalam kardus ponsel atau juga beberapa jenisnya pada body ponsel mencantumkan nomor tersebut. Tetapi tidak banyak yang mengetahui arti dan fungsi dari IMEI itu sendiri.\r\n\r\nBerikut beberapa fakta tentang IMEI diantarnya yaitu :\r\n\r\nPengertian IMEI\r\nIMEI ini sediri merupakan singkatan dari Internasional Mobile Equipment Identity yang terdiri dari 15 hingga 16 nomor. Nomor ini sendiri diberikan oleh GSMA yang merupakan lembaga global.\r\n\r\nSerupa NIK Pada KTP\r\nIMEI ini seperti NIK pada KTP atau Kartu Tanda Penduduk tetapi pada ponsel. IMEI bagi operator seluler berguna untuk mendeteksi perangkat yang telah terdaftar pada jaringan mereka. Mulai dari berapa banyaknya pelanggan yang menggunakan android atau berapa banyaknya pelanggan yang menggunakan ponsel yang menggunakan teknologi android. Nomor IMEI di Indonesia terdaftar di Kementerian Perindustrian sebelum diedarkan dipasaran.\r\n\r\nFungsi dari IMEI\r\nBanyaknya pengguna ponsel yang belum mengetahui IMEI ini berfungsi untuk apa? Yang paling mudah adalah IMEI ini berfungsi untuk mendeteksi keberadaan ponsel pada saat hilang. Sekarang ini memang banyaknya sistem operasi yang menyediakan banyak aplikasi keamanan. Tetapi bagi pelanggan yang tidak memiliki aplikasi keamanan maka nomor IMEI ini bisa menjadi pilihan. Caranya memang tidak semudah menggunakan aplikasi, karena pelanggan yang kehilangan ponselnya untuk memastikan posisi ponsel mereka harus mendatangi gerai operator.\r\n\r\nSekarang ini nomor itulah yang akan dijadikan pemerintah untuk mulai melakukan registrasi.\r\n\r\nAchmad Rodjih Almanshoer selaku Telematika Kementrian Perindustrian mengatakan registrasi ini akan mampu menghalau aksi pasar gelap ponsel. Achmad mengatakan jika pihaknya akan melakukan kerjasam dengan GSMA untuk mensinkronisasi IMEI yang berada di Kemenperin dengan GSMA. Achmad juga menambahkan jika pihaknya akan menyiapkan sistem piranti lunak untuk mensinkronisasi data yang sudah ada. Kominfo dan Kemendag juga akan memberikan informasi mana ponsel yang illegal dan yang tidak illegal.\r\n\r\nItulah beberapa fakta tentang IMEI diantarnya. Hingga sekarang belum adanya sanksi terkait penggunaan registrasi IMEI tetapi nantinya bersama Kominfo akan memberikan kebijakan. Tetapi sanksinya belum ditentukan karena nantinya akan ada kebijakan bersama yang familiar.', '106.jpg'),
(107, '2019-04-27', 'Ini Dia Beberapa Cara Termudah Untuk Bisa Menikmat Kuota VideoMax', 3, 'Seperti yang kita ketahui, bahwa kuota videomax merupakan sebuah paket kuota yang ditawarkan oleh salah satu provider terkenal di Indonesia yang bernama Telkomsel. Ya, kuota videomax ini memang dikhususkan bagi para pengguna kartu simPATI, yang hanya bisa dipergunakan untuk menonton konten video dan film pada beberapa chanel seperti HOOQ, VIU, dan CHATCHPLAY. Dengan kata lain, kuota videomax ini hanya berlaku untuk 3 chanel tersebut saja. Meksi kita sudah tidak asing lagi dengan keberadaan paket kuota ini, namun ada saja sebagian dari masyarakat kita yang tidak tahu tentang cara menggunakan kuota VideoMax tersebut.', '990.jpg'),
(108, '2019-04-28', 'Cara Melacak HP dengan IMEI, Bisakah? Ini Fakta Sebenarnya!', 1, 'IMEI alias International Mobile Equipment Identity pasti ada di setiap smartphone yang kita gunakan selama asli.\r\n\r\nTerdiri dari 15 atau 16 digit angka, tidak ada HP yang memiliki IMEI sama. Kata orang, IMEI bisa digunakan untuk melacak HP.\r\nBisakah IMEI Digunakan Untuk Melacak HP?\r\nSalah satu tujuan dibuatnya IMEI adalah untuk mengurangi tingkat pencurian handphone. Akan tetapi, bukan berarti kita bisa mencarinya sendiri dengan menggunakan aplikasi gratis.\r\n\r\nBanyak aplikasi yang mengatakan bisa melacak lokasi HP hanya melalui IMEI, baik yang tersedia di Play Store maupun tidak.\r\n\r\nJaka sudah mencoba beberapa cara dan metode, tapi tidak ada satupun yang berhasil melacak lokasi HP secara tepat.', '108.jpg'),
(993, '2019-04-29', 'Apa Itu Cloud Gaming? Masa Depan Game? Ini Penjelasannya!', 2, 'Apa Itu Cloud Computing?\r\nKita mulai dari cloud computing terlebih dahulu. Istilah ini digunakan untuk menjelaskan adanya gabungan pemanfaatan komputer dengan pengembangan teknologi berbasis internet.\r\n\r\nIdiom cloud atau awan memang sering digunakan sebagai metafora untuk menggambarkan tentang internet yang tak terlihat secara fisik, seolah berada di balik awan.\r\n\r\n\r\nMelalui komputasi awan ini kita bisa mengerjakan berbagai aktivitas dalam jaringan selama kita terhubung dengan internet.\r\n\r\nContoh dari adanya cloud computing ini adalah iCloud milik Apple dan Microsoft Azure milik Microsoft.\r\nLantas, apa maksud dari cloud gaming? Secara singkat, cloud gaming adalah sebuah gagasan bahwa kita tidak lagi membutuhkan PC atau konsol untuk bermain game.\r\n\r\nCloud gaming (disebut juga game on demand) memiliki banyak kesamaan dengan streaming video di Youtube.\r\n\r\nKita tidak perlu mengunduh video di Youtube agar bisa menyaksikannya, selama kita terkoneksi dengan internet. Begitu pula dengan cloud gaming, kamu enggak perlu download game tersebut.\r\n\r\nKetika kita mengakses suatu game melalui cloud gaming, server akan menjalankan sebuah game untuk kamu.\r\n\r\nServer akan melakukan berbagai pekerjaan berat, ketika komputermu hanya perlu menerima video dan audio dari game yang sedang kamu mainkan.\r\n\r\nYang perlu kamu lakukan adalah bermain dengan menggunakan controller yang ada seperti keyboard dan mouse.\r\n\r\nAnaloginya, kamu sedang menikmati layanan streaming video, namun interaktif sehingga kamu bisa memberikan timbal balik.', '993.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Berita'),
(2, 'Gaming'),
(3, 'Internet'),
(4, 'Transportasi'),
(5, 'Kesehatan'),
(6, 'Komputer'),
(7, 'Hiburan');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `code` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`code`, `nama`, `email`, `subjek`, `pesan`) VALUES
(2, 'Almaas Rozikin', 'almaasrozikin@gmail.com', 'Saran', 'Sejauh ini website sangat user friendly,hanya saja perlu ditingkatkan lagi terkait dengan pengaksesan artikel dan pencarian data.'),
(3, 'Hajar Pamuji', 'hajjar209@yahoo.com', 'Kritik', 'Sejauh ini sih baik,cuma beberapa data belum dapat diakses,dan playlist video kurang banyak!'),
(4, 'Vina Rosa', 'vinaar18@gmail.com', 'Keluhan', 'Beberapa data tidak dapat diakses,dan sangat lama untuk memutar playlist video\r\nPerlu ditingkatkan lagii'),
(6, 'Lord Bahago', 'Bahagoo @gmail.com', 'kecewa', 'sangat mengecewakan'),
(7, 'King Sharman', 'sharking@yahoo.co.id', 'Reward', 'I will gave you a reward,please contact me back!');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_status` int(11) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `email`, `alamat`, `id_status`, `no_telp`) VALUES
(201, 'Almaas Rozikin', 'almaasrozikin@gmail.com', 'Jl.Mawar 18', 1, '0812526761231'),
(202, 'Maudy Ayunda', 'mauydy12@gmail.com', 'Jl.Arwana', 2, '08192139313'),
(203, 'Budi Raharjo', 'budi_rhj@gmail.com', 'Jl.Kenanga No.18', 3, '08567312188'),
(204, 'Sania Yulia', 'saniyu13@yahoo.com', 'Jl.Borobudur 20', 3, '08775764312'),
(205, 'Tania Oktavi', 'tania-ok99@yahoo.com', 'Jl.Merpati No.25', 1, '089332212991'),
(206, 'Handoko V', 'handok9971@gmail.com', 'Jl.Singosari No.99', 2, '0812634257611'),
(303, 'Alan Walker', 'alwanker@gmail.com', 'Jl.Serdadu No.98', 3, '081129387881212');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `video` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `tanggal`, `judul`, `id_kategori`, `video`, `deskripsi`) VALUES
(501, '2019-04-02', 'Teknologi Masa Depan', 1, 'https://www.youtube.com/embed/deA6GG1-A90', 'Teknologi-teknologi baru yang sedang dikembangkan benar-benar revolusioner, hal-hal yang nyaris tidak pernah terbayangkan sebelumnya oleh para ilmuwan dan hanya ada dalam khayalan-khayalan manusia.\r\n\r\nDi suatu hari nanti, manusia mungkin bisa hidup ratusan tahun tanpa mengenal penyakit, memiliki kecerdasan yang genius, dan pergi bertamasya ke luar angkasa.\r\n\r\nIni adalah beberapa teknologi masa depan yang ditunggu-tunggu pengembangannya oleh semua orang'),
(502, '2019-04-04', 'Proyek Transportasi Masa Depan', 4, 'https://www.youtube.com/embed/wiyAzhZlkh4', 'siapa nih di antara kalian yang sering nonton film-film fiksi ilmiah dan menampilkan teknologi canggih yang futuristis. Yap, so don?t worry anymore, berbekal penemuan teknologi terbaru, konsep transportasi futuristik tercanggih di masa depan akhirnya dapat terwujudkan yah gais. Kereta cepat yang futuristik, menyerupai kapsul transportasi sebagai kereta hampa udara, merupakan proyek transportasi tercepat dari film fiksi ilmiah bergerak melalui terowongan bawah laut. Waw, emang bisa yah terowongan itu terletak di dasar laut?'),
(503, '2019-04-08', 'Mengenal AI', 6, 'https://www.youtube.com/embed/DLjuQuwfHlw', 'Kecerdasan Buatan atau Artificial Intelligence (AI) adalah cabang ilmu komputer yang menekankan pengembangan intelijen mesin,\r\npola berpikir dan bekerja seperti manusia. Misalnya, pengenalan suara, pemecahan masalah, pembelajaran, dan perencanaan.'),
(504, '2019-04-10', '5 Game VR Terbaik', 2, 'https://www.youtube.com/embed/utZyOOhqkfg', 'Dunia gaming pastinya bakal tambah menantang ya Gang, dengan adanya Virtual Reality alias VR. \r\n			Teknologi dengan pengalaman baru yang bahkan gak bisa didapetin hanya dengan ngeliat monitor. \r\n			Yah meski untuk merasakannya kalian harus merogoh kocek yang cukup dalam. \r\n			Karena selain beli perangkat VR kayak Oculus Rift atau HTC Vive, \r\n			kalian juga wajib punya PC dengan spek tinggi atau konsol kayak PlayStation VR dan kontroler VR pendukung. \r\n			Kalian mau tahu apa aja 5 game virtual reality terbaik yang wajib dicoba?');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Tetap '),
(2, 'Sementara'),
(3, 'Aktif'),
(4, 'Non Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=994;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
