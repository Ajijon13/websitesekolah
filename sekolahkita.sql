-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 03:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(9, 'ssssq', '2022-12-29 03:40:53', 'dzg', '0000-00-00', '0000-00-00', 'mall', '11.00-10.00', 'fxxfxgffg', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0',
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(5, 'ffff', '2022-12-29 03:44:06', 2, 'kkk', 1, '92732b603ebd37a85d1cfad525895c67.png'),
(6, 'SD', '2023-01-10 07:48:22', 1, 'Ajijon', 1, 'fde699f1417ac251dbfbc35e7a96349b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `title`, `text`, `photo`) VALUES
(4, 'Wisuda', 'sehat dan kuat', '213c0530655ade93637e0d3b5dbbeace.jpg'),
(5, 'Aaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbb', '7983eab5a162b3dadbed11ae153158f4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekstrasd`
--

CREATE TABLE `tbl_ekstrasd` (
  `id` int(5) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ekstrasd`
--

INSERT INTO `tbl_ekstrasd` (`id`, `ket`, `foto`) VALUES
(1, 'ECC (English Converstaion Club)', '7f492bbd6e706883c365f7478dc5d9e5.jpeg'),
(2, 'kakakakka', 'e0fbb9c3b49c0e09e83f1a0267d9d653.jpg'),
(3, 'aaaaaa', '4afcfe874aa839162638b5c563d6cf25.jpeg'),
(4, 'MCC (Mandarin Conversation Club)', '04c8d2bca28c9e60f743834d22358fa5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekstrasmp`
--

CREATE TABLE `tbl_ekstrasmp` (
  `id` int(5) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ekstrasmp`
--

INSERT INTO `tbl_ekstrasmp` (`id`, `ket`, `foto`) VALUES
(1, 'Juara 1 lomba pidato', '8baa0a469c115ca597608cfc99b235df.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id` int(5) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id`, `ket`, `foto`) VALUES
(1, 'Labotarium Komputer', 'b32e6036a961ee60093d1e57faed4eda.jpg'),
(2, 'bbbbbbbbbbbbbbb', '000f23940c94881193e19677defe3273.jpg'),
(3, 'Lapangan Sekolah', 'f469c2387408c4c4f0a77f5ffbc1df66.jpeg'),
(4, 'Bangunan Sekolah', '7361ca3d02ecf76801d35f2434175769.jpeg'),
(5, 'admin', '63a134836863714f9c250e79f39ee0f3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitassmp`
--

CREATE TABLE `tbl_fasilitassmp` (
  `id` int(5) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(20, 'Halo', '2023-01-10 07:48:40', 'ffa2c06495e1db3bfcbb9968f6b8f44c.jpeg', 6, 1, 'Ajijon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galerismp`
--

CREATE TABLE `tbl_galerismp` (
  `id` int(5) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galerismp`
--

INSERT INTO `tbl_galerismp` (`id`, `ket`, `foto`) VALUES
(1, 'foto yeyeye', 'bb8eb56d45e9c50083e7e9d4e2932973.jpg'),
(2, 'aaaaaaaaaaaaa', '366ae79183ff479cdeb5daff4f710be4.jpg'),
(3, 'aaaaaaaaaaa', '51814e1d8030e8bbcf31d6789032a67a.jpeg'),
(4, 'aabb', 'b650b0dc0bd8a40260b6a9a010da8613.jpeg'),
(5, 'Lab Komputer', '26af4d3fc3cfdedd178a445a660f247a.jpeg'),
(6, 'aaaaaaaaaaa', '61ec1b66e1ea19bdc49509939c4e9cc6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_nip`, `guru_nama`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_mapel`, `guru_photo`, `guru_tgl_input`) VALUES
(1, '-', 'Nensy Larasati,S.Pd.', 'L', 'Bandung', '25 September 1993', 'Bahasa Jawa	', 'a9cbe86849c837cc0931eff7b9991d00.png', '2017-01-26 07:49:43'),
(2, '927482658274981', 'Mei Indri, S.Pd', 'L', 'Purwokerto', '25 Juni 2020', 'Bahasa Indonesia	', '792ef9e0267a1b021c9b99763a980a0b.jpg', '2017-01-26 13:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-06 05:49:04'),
(13, 'Olah Raga', '2017-01-13 13:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text,
  `log_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `keterangan_mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`, `keterangan_mapel`) VALUES
(2, 'IPA', 'Belajar IPA'),
(3, 'IPS', 'Belajar IPS'),
(4, 'Bahasa Inggris', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaturan`
--

CREATE TABLE `tbl_pengaturan` (
  `id` int(11) NOT NULL,
  `sambutan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengaturan`
--

INSERT INTO `tbl_pengaturan` (`id`, `sambutan`, `foto`, `visi`, `misi`, `sejarah`) VALUES
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quam quia molestias suscipit quae pariatur illo provident eum quasi sapiente, qui sed praesentium harum nihil maiores dolores a numquam odit.\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, modi perferendis. Quidem nesciunt quam, aperiam ullam provident dolorem quis beatae, corporis totam eveniet tempore magnam nisi quibusdam blanditiis explicabo tempora!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quos eligendi itaque voluptate fugit temporibus? Veritatis dicta modi adipisci placeat temporibus dolorem est quae quidem deserunt aut, provident magni cumque.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusantium nobis minima laboriosam voluptates odit cupiditate animi. Quas, officiis sunt! Totam quisquam ratione sit veritatis blanditiis inventore error ab quod.lorem', '8f3a2444b3ca94fe60e99b5235df3c54.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quam quia molestias suscipit quae pariatur illo provident eum quasi sapiente, qui sed praesentium harum nihil maiores dolores a numquam odit.\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, modi perferendis. Quidem nesciunt quam, aperiam ullam provident dolorem quis beatae, corporis totam eveniet tempore magnam nisi quibusdam blanditiis explicabo tempora!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quos eligendi itaque voluptate fugit temporibus? Veritatis dicta modi adipisci placeat temporibus dolorem est quae quidem deserunt aut, provident magni cumque.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusantium nobis minima laboriosam voluptates odit cupiditate animi. Quas, officiis sunt! Totam quisquam ratione sit veritatis blanditiis inventore error ab quod.lorem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quam quia molestias suscipit quae pariatur illo provident eum quasi sapiente, qui sed praesentium harum nihil maiores dolores a numquam odit.\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, modi perferendis. Quidem nesciunt quam, aperiam ullam provident dolorem quis beatae, corporis totam eveniet tempore magnam nisi quibusdam blanditiis explicabo tempora!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quos eligendi itaque voluptate fugit temporibus? Veritatis dicta modi adipisci placeat temporibus dolorem est quae quidem deserunt aut, provident magni cumque.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusantium nobis minima laboriosam voluptates odit cupiditate animi. Quas, officiis sunt! Totam quisquam ratione sit veritatis blanditiis inventore error ab quod.lorem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quam quia molestias suscipit quae pariatur illo provident eum quasi sapiente, qui sed praesentium harum nihil maiores dolores a numquam odit.\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, modi perferendis. Quidem nesciunt quam, aperiam ullam provident dolorem quis beatae, corporis totam eveniet tempore magnam nisi quibusdam blanditiis explicabo tempora!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quos eligendi itaque voluptate fugit temporibus? Veritatis dicta modi adipisci placeat temporibus dolorem est quae quidem deserunt aut, provident magni cumque.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusantium nobis minima laboriosam voluptates odit cupiditate animi. Quas, officiis sunt! Totam quisquam ratione sit veritatis blanditiis inventore error ab quod.lorem');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaturansmp`
--

CREATE TABLE `tbl_pengaturansmp` (
  `id_pengaturansmp` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengaturansmp`
--

INSERT INTO `tbl_pengaturansmp` (`id_pengaturansmp`, `visi`, `misi`, `sejarah`) VALUES
(1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam nobis sunt ratione non recusandae et tempora delectus, eum eaque. Ut libero ex maxime nisi quam quo atque exercitationem corrupti modi!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis quidem in maxime nulla veniam, cupiditate atque totam necessitatibus aliquid, incidunt, voluptates sapiente unde quod ratione quasi omnis corrupti delectus fugit.', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam nobis sunt ratione non recusandae et tempora delectus, eum eaque. Ut libero ex maxime nisi quam quo atque exercitationem corrupti modi!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis quidem in maxime nulla veniam, cupiditate atque totam necessitatibus aliquid, incidunt, voluptates sapiente unde quod ratione quasi omnis corrupti delectus fugit.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Pinus', NULL, 'L', '@pinus', 'f0a3182e570809d7cde6f8b1de8e371a', NULL, 'pinus@gmail.com', '+6281330177147', NULL, NULL, NULL, NULL, 1, '1', '2023-01-11 14:09:03', '705d205189b07691bce6cde33cccbd0f.png'),
(2, 'Admin Pinus', NULL, 'L', '@pinus', 'f0a3182e570809d7cde6f8b1de8e371a', NULL, 'adminpinus@gmail.com', '+6281330177147', NULL, NULL, NULL, NULL, 1, '2', '2023-01-11 14:10:20', 'd9ee9ce4036576b492b961a3de325ea2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text,
  `pengumuman_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(9, 'frsarta', 'gdzhfzhfzxf hgxf', '2022-12-29 03:39:21', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2020-04-30 09:24:35', '::1', 'Chrome'),
(932, '2020-04-30 17:03:42', '::1', 'Chrome'),
(933, '2020-04-30 17:17:54', '192.168.43.1', 'Chrome'),
(934, '2020-05-01 18:28:26', '::1', 'Chrome'),
(935, '2020-05-01 21:12:36', '192.168.43.1', 'Chrome'),
(936, '2020-05-02 12:58:12', '192.168.43.22', 'Chrome'),
(937, '2020-05-02 17:19:17', '::1', 'Firefox'),
(938, '2020-05-02 17:41:38', '192.168.43.22', 'Chrome'),
(939, '2020-05-02 18:07:26', '192.168.43.1', 'Chrome'),
(940, '2020-05-03 21:17:35', '::1', 'Chrome'),
(941, '2020-05-04 22:36:09', '::1', 'Chrome'),
(942, '2020-05-05 21:10:13', '::1', 'Chrome'),
(943, '2020-05-05 21:32:53', '192.168.43.1', 'Chrome'),
(944, '2022-12-22 12:28:57', '127.0.0.1', 'Firefox'),
(945, '2022-12-23 08:42:55', '127.0.0.1', 'Firefox'),
(946, '2022-12-27 14:36:50', '::1', 'Chrome'),
(947, '2022-12-28 00:19:56', '127.0.0.1', 'Firefox'),
(948, '2022-12-28 03:06:44', '::1', 'Chrome'),
(949, '2022-12-29 02:08:12', '127.0.0.1', 'Firefox'),
(950, '2022-12-29 02:10:02', '::1', 'Chrome'),
(951, '2022-12-30 00:51:25', '::1', 'Chrome'),
(952, '2022-12-30 11:01:06', '127.0.0.1', 'Firefox'),
(953, '2022-12-31 00:53:21', '::1', 'Chrome'),
(954, '2022-12-31 17:09:44', '::1', 'Chrome'),
(955, '2023-01-01 03:45:58', '127.0.0.1', 'Firefox'),
(956, '2023-01-02 01:09:13', '127.0.0.1', 'Firefox'),
(957, '2023-01-02 01:27:05', '::1', 'Chrome'),
(958, '2023-01-03 00:50:16', '127.0.0.1', 'Firefox'),
(959, '2023-01-03 15:17:30', '::1', 'Chrome'),
(960, '2023-01-04 11:53:08', '::1', 'Chrome'),
(961, '2023-01-04 22:25:41', '::1', 'Chrome'),
(962, '2023-01-05 22:39:48', '::1', 'Chrome'),
(963, '2023-01-05 23:35:33', '127.0.0.1', 'Firefox'),
(964, '2023-01-07 03:30:00', '::1', 'Chrome'),
(965, '2023-01-07 10:51:47', '127.0.0.1', 'Firefox'),
(966, '2023-01-08 01:49:46', '127.0.0.1', 'Firefox'),
(967, '2023-01-08 01:50:31', '::1', 'Chrome'),
(968, '2023-01-09 11:57:48', '::1', 'Chrome'),
(969, '2023-01-10 00:07:49', '127.0.0.1', 'Firefox'),
(970, '2023-01-10 00:20:45', '::1', 'Chrome'),
(971, '2023-01-11 00:44:46', '127.0.0.1', 'Firefox'),
(972, '2023-01-11 01:27:01', '::1', 'Chrome'),
(973, '2023-01-12 00:36:41', '127.0.0.1', 'Firefox'),
(974, '2023-01-12 00:37:20', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasisd`
--

CREATE TABLE `tbl_prestasisd` (
  `id` int(5) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prestasisd`
--

INSERT INTO `tbl_prestasisd` (`id`, `ket`, `foto`) VALUES
(2, 'Juara 1 lomba pidato B.Inggris', '94cc8a0e86b105b65e40e721025dcb02.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasismp`
--

CREATE TABLE `tbl_prestasismp` (
  `id` int(5) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prestasismp`
--

INSERT INTO `tbl_prestasismp` (`id`, `ket`, `foto`) VALUES
(1, 'Juara 1 lomba pidato', '203ad8e6bb9e6af6604135966e3bd5cb.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(27, 'jgxhxhhgvn gxhfzxyr', '<p>lorem nvcjcjgcj&nbsp; jctxcut</p>\r\n', '2022-12-29 03:42:16', 1, 'Pendidikan', 0, 'af73e70e273852b4ad0e68d07c85d980.png', 2, 'kkk', 0, 'jgxhxhhgvn-gxhfzxyr'),
(28, 'aaaaaaaaaaaaaa', '<p>lot vclJCBJKVBJKDS VKBSDKHVB DB VKSDKHVKHkh jkvbskavb fsvkhbfskhavb kfsbvksfa vkhsfbvsfvfs</p>\r\n', '2023-01-05 03:56:36', 1, 'Pendidikan', 0, '5ef281b838e770e9fd16934e18830829.jpg', 1, 'Ajijon', 0, 'aaaaaaaaaaaaaa'),
(29, 'adddd ', '<p>a das dsa dsa das d asd sadsa dsa dasdsad sa dsa dsadsadsad sa d a</p>\r\n', '2023-01-05 03:56:56', 13, 'Olah Raga', 2, '3210a778159fd0f6780c46e41e8815ad.png', 1, 'Ajijon', 0, 'adddd'),
(30, 'smp pinus', '', '2023-01-08 01:56:12', 1, 'Pendidikan', 6, '037e96eba4775290a0d7948c48c63bdd.jpeg', 1, 'Ajijon', 0, 'smp-pinus'),
(31, 'aaaaaaaaaaaa', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus saepe explicabo fuga adipisci voluptatem suscipit ad temporibus pariatur, ut voluptatibus minus, iure velit cum error in voluptate at! Nostrum, optio?</p>\r\n', '2023-01-10 12:58:20', 5, 'Penelitian', 2, 'df64e1fbe329eb606574b5f41f262305.jpg', 1, 'Ajijon', 0, 'aaaaaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ekstrasd`
--
ALTER TABLE `tbl_ekstrasd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ekstrasmp`
--
ALTER TABLE `tbl_ekstrasmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fasilitassmp`
--
ALTER TABLE `tbl_fasilitassmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `tbl_galerismp`
--
ALTER TABLE `tbl_galerismp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengaturansmp`
--
ALTER TABLE `tbl_pengaturansmp`
  ADD PRIMARY KEY (`id_pengaturansmp`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_prestasisd`
--
ALTER TABLE `tbl_prestasisd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prestasismp`
--
ALTER TABLE `tbl_prestasismp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_ekstrasd`
--
ALTER TABLE `tbl_ekstrasd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_ekstrasmp`
--
ALTER TABLE `tbl_ekstrasmp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_fasilitassmp`
--
ALTER TABLE `tbl_fasilitassmp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_galerismp`
--
ALTER TABLE `tbl_galerismp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pengaturansmp`
--
ALTER TABLE `tbl_pengaturansmp`
  MODIFY `id_pengaturansmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=975;
--
-- AUTO_INCREMENT for table `tbl_prestasisd`
--
ALTER TABLE `tbl_prestasisd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_prestasismp`
--
ALTER TABLE `tbl_prestasismp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
