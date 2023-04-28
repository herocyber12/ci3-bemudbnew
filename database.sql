-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Apr 2023 pada 13.51
-- Versi server: 10.6.12-MariaDB
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hero9499_bem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `divisi` varchar(25) NOT NULL,
  `tngl` date DEFAULT NULL,
  `jam_skrng` time NOT NULL,
  `keterangan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `tema_artikel` text NOT NULL,
  `tanggal_artikel` date NOT NULL,
  `gmbr` varchar(150) NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `tema_artikel`, `tanggal_artikel`, `gmbr`, `isi_artikel`) VALUES
(1, 'Kegiatan LDK 1 BEM UDB', '2023-03-11', 'LDK.jpg', '<p>Pada Sabtu sampai dengan Senin tanggal 11-12 Maret 2023,BEM Universitas Duta Bangsa Surakarta (BEM UDB) mengadakan kegiatan yang wajib diikuti oleh seluruh Anggota BEM UDB Periode 2023 yaitu Latihan Dasar Kepemimpinan 1 (LDK 1). Latihan dasar ini mengundang Anggota BEM UDB sebagai peserta.</p>\r\n\r\n<p>Dimana kegiatan ini bertujuan untuk meningkatkan kemampuan atau skill mahasiswa dalam memimpin, selain itu LDK adalah tempat penggemblengan mahasiswa agar bisa membangun personality semakin kuat dan tangguh. Selain itu latihan dasar ini juga mengajarkan bagaimana sistem pemerintahan yang benar dan jobdesknya di masing masing Kementrian BEM UDB. Kegiatan ini dilaksanakan di AULA UDB Kampus FIKOM.</p>\r\n\r\n<p>Kegiatan ini memiliki beberapa susunan acara didalamnya mulai dari sambutan dari kemahasiswaan, panitia pelaksana, dan ketua BEM UDB itu sendiri di aula Kampus FIKOM Universitas Duta Bangsa. Pada pukul 08.00 kegiatan di mulai, saat acara dimulai banyak materi yang disampaikan oleh Bapak Totok Wahyu,S.Kep.,N.S.,M.Kep selaku Kemahasiswaan Universitas Duta Bangsa. dari pembangunan pola pikir, job desk masing kementrian, dan alur sistem ormawa di UDB yang diharapkan kedepannya sistem tersebut dapat berjalan semestinya</p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n'),
(2, 'BEM UDB Melakukan sarasehan se-Ormawa UDB', '2023-04-15', 'sarasehan.jpg', '<p>Sarasehan&nbsp;merupakan wadah untuk berdiskusi atau bertukar pikiran yang bertujuan untuk membahas permasalahan-permasalahan yang terjadi&nbsp;dalam&nbsp;masing-masing&nbsp;Ormawa di UDB. pada tanggal 15 April 2023 BEM UDB yang bertepatan pada hari sabtu pada pukul 15:00 WIB sampai dengan jam 19:00 WIB di <em><strong>Pyramid Cafe.&nbsp;</strong></em>Badan Eksekutif Mahasiswa Universitas Duta Bangsa Surakarta (BEM UDB) melakukan kegiatan sarasehan yang dihadiri oleh Ibu RINA ARUM Selaku WAKIL REKTOR III di Universitas Duta Bangsa serta dihadiri perwakilan seluruh ormawa yang ada di UDB.</p>\r\n\r\n<p>Kegiatan ini membahas permasalahan yang terjadi di masing-masing Ormawa di UDB serta memperkenalkan Susunan Kabinet BEM UDB Periode 2022/2023 kepada Ormawa di BEM UDB. Kegiatan ini dibuka dengan dengan sambutan ketua pelaksana, Sambutan dan sedikit mater dari Ibu RINA ARUM selaku WAKIL REKTOR III UDB lalu dilanjutkan dengan Ketua dari BEM UDB setelah itu kegiatan masuk ke inti acara ya itu diskusi dengan bersama dengan seluruh ormawa UDB kegiatan ini diakhiri dengan acara foto bersama didepan tempat sarasehan <em><strong>Pyramid Cafe.</strong></em></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buatabsen`
--

CREATE TABLE `buatabsen` (
  `tanggal` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `id_profil`
--

CREATE TABLE `id_profil` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `uid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `id_profil`
--

INSERT INTO `id_profil` (`id`, `username`, `password`, `uid`) VALUES
(1, 'lexis12', 'b3c7950c7185c5040b3044a3e47bdcb8', 'uid-5679'),
(6, 'secxploit7', 'ca165c2aac0d3f3b4f7fa6fdfc986eda', 'UID-7759'),
(7, 'lexis123', 'b3c7950c7185c5040b3044a3e47bdcb8', 'UID-8411'),
(9, 'riajuliana', '94f61d7805d9f700379897e2e196bd47', 'UID-5846'),
(10, 'apriliaa', '4b0095661650808dd6146229d2b69cc5', 'UID-5734'),
(11, 'restyyyy', '73073ec14257fba22c4c581862aa94fd', 'UID-6202'),
(12, 'Anastaciarvk', '6c052adfa49f6db965919a9c66665aed', 'UID-2767'),
(13, 'Rieeskaa', 'eb5051d98b427b6fe4d818230276a09c', 'UID-3092'),
(14, 'Sinta Dewi A', 'af1efc331a9ad2a036b7f6554edd8f8d', 'UID-6251'),
(15, 'apriliamaya', '51ebddea7cdfb10d22da1dca74dc5ea1', 'UID-5538'),
(16, 'Safira_mine', '859fac973a64e3b86244a73ef374e237', 'UID-9910'),
(18, 'Ailza rck', '3508f5c3214e4cc05bec56eb8d1a7536', 'UID-7624'),
(19, 'bintang_66as', '83b63bf3c9884416bc44edb3e25a386e', 'UID-8987'),
(20, 'Diniiiitw', '4b804ba0f2402c27d8f0224246af636b', 'UID-7392'),
(21, 'anggitabem30', '93ddb8f7d1e9cfc9c6e95e390984688a', 'UID-5985'),
(22, 'IdaIrma ', 'a7f744e72a3b4f57091f05db42b56d7a', 'UID-7371'),
(23, 'tita1234', '15285557f8b82f499ed7b1b1f27599ac', 'UID-5714'),
(24, 'Umi Nur M', '432f45b44c432414d2f97df0e5743818', 'UID-1532'),
(25, 'Irfan Arif R', 'ba3fc4a4cdcb03b1b31e52adf1b32a65', 'UID-8020'),
(26, 'Jovita_21', '4328c2d3eac2a40f74712f2f005eed3c', 'UID-719'),
(27, 'Amallia ', '86bc684b928644e8e244b3e9b06d764b', 'UID-4228'),
(28, 'Anggie April', '74e9793e48f542454949c748019dbc01', 'UID-1721'),
(29, 'Khoirul Nisa', 'b94ca5cd85ebde56b967237691f88879', 'UID-3903'),
(30, 'Dwi supriant', '169a52fa30ff0046692c906dadce0836', 'UID-7484');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `id_lkeuangan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  `keterangan` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_proker`
--

CREATE TABLE `laporan_proker` (
  `id_lproker` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_proker` varchar(25) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `status` set('Berjalan','Tidak Berjalan') NOT NULL,
  `keterangan` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginuser`
--

CREATE TABLE `loginuser` (
  `uid` varchar(25) NOT NULL,
  `nim` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `divisi` varchar(100) NOT NULL,
  `foto_profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `loginuser`
--

INSERT INTO `loginuser` (`uid`, `nim`, `nama`, `prodi`, `no_hp`, `divisi`, `foto_profil`) VALUES
('UID-1230', NULL, 'Muhammad yasin fathkhurra', NULL, NULL, 'psdm', NULL),
('UID-1532', 210207049, 'Umi nur muamalah', 'D3 Keperawatan 21A1', '082134667487', 'humas', NULL),
('UID-1721', 210103003, 'Anggie Apriliana', 'S1-Teknik Informatika', '098747313188', 'sekretaris', NULL),
('UID-2767', 220208051, 'Anastacia Ratih Vida Kusuma ', 'S1 Keperawatan ', '088239673965', 'sosial', NULL),
('UID-2971', NULL, 'Agnesia Kurmaliasari', '', NULL, 'sosial', NULL),
('UID-3092', 220205037, 'Yuanita rieska damayanti', 'D3 Rekam Medik dan Informasi Kesehatan', '085701630430', 'sosial', NULL),
('UID-3788', NULL, 'Kevin yoga ananta', NULL, NULL, 'litbang & kastrat', NULL),
('UID-3903', 220207014, 'Khoirul nisaki solekhah', 'D3 keperawatan ', '083843320396', 'humas', NULL),
('UID-4228', 220102001, 'Amallia hajar nur fadila', 'Manajemen informatika ', '085602669332', 'sosial', NULL),
('UID-4815', NULL, 'Niko suta denarta', NULL, NULL, 'kominfo', NULL),
('UID-5538', 220207003, 'Aprilia maya safitri', 'D3 keperawatan', '088225292025', 'psdm', NULL),
('uid-5679', NULL, 'Joko', NULL, NULL, 'Admin', NULL),
('UID-5714', 200208085, 'Tita Lestari', 'S1-Keprawatan', '081779561445', 'litbang & kastrat', NULL),
('UID-5734', 210208080, 'Siti Aprilia', 'S1 keperawatan', '082133515130', 'bendahara', NULL),
('UID-5846', 220101164, 'Ria juliana', 'S1- Sistem Informasi', '081325322776', 'kominfo', NULL),
('UID-5985', 210208002, 'Anggita Riski Dela Clarita', 'S1 keperawatan', '088742736408', 'litbang & kastrat', NULL),
('UID-6202', 220101157, 'Dwi Resty Kartika', 'Sistem Informasi', '085942086028', 'kominfo', NULL),
('UID-6251', 200208084, 'Sinta Dewi Anggraini', 'S1 Keperawatan', '085601698439', 'sekretaris', NULL),
('UID-719', 220102016, 'Jovita permatasari', 'Manajemen Informatika ', '085866818871', 'sosial', NULL),
('UID-7371', 220207011, 'Ida irma', 'D3 keperawatan', '085740492793', 'humas', NULL),
('UID-7392', 200208082, 'Dini Tri Wahyuni', 'S1 Keperawatan', '082197581634', 'bendahara', NULL),
('UID-7484', 210208074, 'Dwi suprianto', 'S1 keperawatan', '081779297598', 'humas', NULL),
('UID-7624', 220207001, 'Ailza ramdhani cahya kosiari ', 'D3 keperawatan ', '089523062096', 'litbang & kastrat', NULL),
('UID-7759', 200103204, 'Syahrul Agung Fathoni', 'Teknik Informatika', '085879707126', 'kominfo', NULL),
('UID-7955', NULL, 'Muhammad Irfan', NULL, NULL, 'psdm', NULL),
('UID-8020', 200312010, 'irfan arif ramadhan', 'S1 Teknik Industri', '085640166660', 'psdm', NULL),
('UID-8411', 200103198, 'Krisna Joko Purjianto', 'Teknik Informatika', '085156078295', 'ketua', NULL),
('UID-8602', NULL, 'Zufinda Efendi', NULL, NULL, 'wakil ketua', NULL),
('UID-8987', 220103294, 'Bintang Anugrah Semesta', 'S1 Teknik Informatika', '085647965194', 'psdm', NULL),
('UID-9910', 220207028, 'Safira Jasmine', 'D3 Keperawatan ', '087823238896', 'psdm', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `notifikasi_id` int(11) NOT NULL,
  `notifikasi_tanggal` date NOT NULL,
  `notifikasi_judul` varchar(150) NOT NULL,
  `notifikasi_isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`notifikasi_id`, `notifikasi_tanggal`, `notifikasi_judul`, `notifikasi_isi`) VALUES
(1, '2023-12-04', 'Rapat', 'Rapat dengan pak totok hari kamis minggu ini jam 3 an');

-- --------------------------------------------------------

--
-- Struktur dari tabel `no_surat`
--

CREATE TABLE `no_surat` (
  `id_surat` int(11) NOT NULL,
  `nomor_surat` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `kegunaan_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `no_surat`
--

INSERT INTO `no_surat` (`id_surat`, `nomor_surat`, `tanggal_surat`, `kegunaan_surat`) VALUES
(434780, '104/BEM/UDB/III/2023', '2023-03-03', 'Surat Peminajaman Tempat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oprec_bemu`
--

CREATE TABLE `oprec_bemu` (
  `id_oprec` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `status` enum('Diterima','Ditolak') DEFAULT NULL,
  `alasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `oprec_bemu`
--

INSERT INTO `oprec_bemu` (`id_oprec`, `nama`, `prodi`, `no_hp`, `email`, `divisi`, `status`, `alasan`) VALUES
('OPREC-1071', 'Bintang Anugrah Semesta', 'S1 Teknik Informatika', '085647965194', 'bintangsemesta808@gmail.com', 'kominfo', 'Diterima', 'Untuk mengembangkan minat dan bakat saya dalam berorganisasi '),
('OPREC-1727', 'DWI RESTY KARTIKA', 'SISTEM INFORMASI', '085942086028', 'restysebelasjanuari@gmail.com', 'kominfo', 'Diterima', 'karena ingin menambah pengalaman berorganisasi, meningkatkan softskill, meluaskan relasi dan networking, keluar dari zona nyaman, berkontribusi untuk kampus.'),
('OPREC-1897', 'Anastacia Ratih Vida Kusu', 'S1 Keperawatan ', '088239673965', 'anastaciaratihvida@gmail.com', 'sosial', 'Diterima', 'Saya ingin melatih rasa tanggung jawab saya, belajar pengalaman berorganisasi serta menambah wawasan mengenai organisasi beserta tugasnya'),
('OPREC-2701', 'Irfan Arif Ramadhan', 'Teknik Industri', '085640166660', 'irfanariframadhan@gmail.com', 'kajian dan strategi', 'Diterima', '-'),
('OPREC-2706', 'Anggie Apriliana', 'S1-Teknik Informatika', '085747313188', 'anggieapriliana93@gmail.com', 'sekretaris', 'Diterima', 'Dengan keikutsertaan saya dalam organisasi tersebut, saya ingin menemukan lebih banyak relasi, teman ataupun jaringan baik dalam lingkungan internal maupun eksternal organisasi ataupun regional hingga nasional. Karena akan banyak sekali manfaat dari hal tersebut untuk pribadi saya.'),
('OPREC-3935', 'Siti aprilia', 'S1 keperawatan', '082133515130', 'Semprilips2@gmail.com', 'bendahara', 'Diterima', 'Belajar berorganisasi,dan memanajemen waktu kuliah saat berorganisasi'),
('OPREC-4327', 'Amallia Hajar Nur Fadlila', 'D3- manajemen informatika', '085602669332', 'amalliafadlilah21@gmail.com', 'kominfo', 'Diterima', 'menambah pengalaman, dan meningkatkan kepercayaan diri'),
('OPREC-4574', 'RIA JULIANA', 'S1 SISTEM INFORMASI ', '081325322776', 'riajuliana57@gmail.com', 'kominfo', 'Diterima', 'Alasan saya mendaftar BEM UDB ini karena saya yakin akan menambah pengalaman saya, dan ketika pengalaman baru itu otomatis akan memberikan wawasan baru pula, dengan bekal wawasan baru ini saya tentunya akan bisa belajar bagaimana cara mengelola waktu dengan baik antara jam kuliah dan tugas kewajiban saya di organisasi. Ketika telah mengikuti BEM UDB tentunya memiliki jiwa kepemimpinan menyelesaikan masalah nah dengan itu saya akan mudah bagaimana menyikapi dan mencari solusi dalam masalah yang ada, selain itu masuk di BEM UDB ini juga belajar bersosialisasi dengan orang banyak secara efektif dan dapat bermanfaat dalam bekerja nantinya karena sudah terbiasa berkomunikasi atau bersosialisasi dengan orang lain akan menjadi tidak ragu(malu) ketika akan berbicara di depan publik. Dan yang terakhir saya yakin dengan masuk BEM UDB akan merubah kepribadian saya menjadi lebih disiplin, cekatan, dan tidak asal bertindak dalam menyelesaikan masalah. '),
('OPREC-4880', 'YUANITA RIESKA DAMAYANTI', 'D3 Rekam Medik dan Inform', '085701630430', 'yuanitarieska6@gmail.com ', 'sosial', 'Diterima', 'Ingin menambah pengalaman dan juga menambah wawasan dalam berorganisasi '),
('OPREC-6015', 'Aprilia maya safitri', 'D3 keperawatan', '088225292025', 'apriliamayasafitri@gmail.com', 'kominfo', 'Diterima', 'karna keinginan untuk mencoba coba hal baru '),
('OPREC-7006', 'Ailza ramdhani Cahya kosi', 'D3 keperawatan ', '089523062096', 'ailzaramdhani0@gmail.com', 'kajian dan strategi', 'Diterima', 'Belajar berorganisasi, berkomunikasi,dan bersosialisasi dengan atau sesama jurusan dan menambah wawasan diluar kegiatan kampus '),
('OPREC-7089', 'Muhammad yasin fathkhurra', 'TI', '895324209191', 'yysnff@gmail.com', 'psdm', 'Diterima', 'Disuruh atas an untuk mengikuti BEM UDB (pak totok) '),
('OPREC-7455', 'Umi Nur Muamalah', 'D3 Keperawatan', '082134667487', 'umimuamalah7@gmail.com', 'sosial', 'Diterima', '-'),
('OPREC-7663', 'Jovita permatasari ', 'D3 Manajemen Informatika ', '085866818871', 'prsjovita@gmail.com', 'kominfo', 'Diterima', 'Ingin menambah pengetahuan dan pengalaman baru'),
('OPREC-8029', 'Khoirul Nisaki Solekhah', 'D3 keperawatan ', '083843320396', 'nisa57589@gmail.com', 'sosial', 'Diterima', 'mendapatkan teman baru lintas jurusan,belajar bekerja secara tim,belajar berorganisasi,belajar kepemimpinan dan speakup'),
('OPREC-8095', 'DIYAH AYU NOVITA SARI ', 'D3 keperawatan ', '085965542143', 'diyahayunovitasari11@gmail.com', 'kominfo', 'Diterima', 'Karena ingin menambah wawasan, ingin menambah pengetahuan dan ingin menambah pengalaman '),
('OPREC-8733', 'Safira Jasmine', 'D3 Keperawatan ', '087823238896', 'jasminesafira33@gmail.com', 'kominfo', 'Diterima', 'Karena ingin mencoba mencari pengalaman baru'),
('OPREC-9251', 'Ida Irma Mardiana ', 'D3 KEPERAWATAN ', '085740492793', 'idairma41@gmail.com', 'kominfo', 'Diterima', 'Untuk menambah pengetahuan dan wawasan serta menambah pengalaman ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `posting_id` int(11) NOT NULL,
  `posting_judul` varchar(15) NOT NULL,
  `posting_gambar` varchar(150) NOT NULL,
  `posting_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `namaproker` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `status` enum('Belum Disetujui','Disetujui','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id`, `divisi`, `namaproker`, `tanggal`, `alasan`, `status`) VALUES
(179803, 'ketua', 'Rapar Akhir dan LPJ', '2023-09-22', 'Rapat Akhir bersamaan rapat mubes dibarengi dengan pelaporan LPJ Kegiatan masing masing kementrian', 'Disetujui'),
(203786, 'sosial', 'GIM (GERAKAN INFAK MAHASISWA)', '2023-05-25', 'Kegiatan gerakan infak mahasiswa ini nanti dilaksanakan dengan meletakkan kotak infak pada 5 tempat yaitu fakultas ilmu kesehatan, fakultas ilmu komputer, fakultas ilmu hukum dan bisnis, masjid fakultas ilmu komputer, masjid fakultas ilmu kesehatan cemani', 'Disetujui'),
(285023, 'litbang & kastrat', 'Lomba Nasional dan Webinat Nasional Kekerasan Seksual', '2023-05-20', 'Lomba nasional poster dengan tema \"pencegahan kekerasan seksual di masyarkat\"\r\n\r\nLomba videografi nasional dengan tema \"dampak psikologis kekerasan seksual\"\r\n\r\nWebinar nasional dengan tema \"Perlindungan, penanganan, dan pemulihan korban kekerasan seksual ', 'Disetujui'),
(502323, 'psdm', 'Serasehan BEM UDB', '2023-04-14', 'Kegiatan bertukar pendapat/pikiran antar ormawa UDB dilanjutkan buka bersama', 'Disetujui'),
(758600, 'kominfo', 'Maintenance Website ', '2023-05-03', 'Maintenance website yang bertujuan untuk merawat website agar tetap berada pada performa yang baik, terupdate, dan terhindar dari berbagai permasalahan yang dapat merugikan website BEM UDB', 'Disetujui'),
(812115, 'ketua', 'Pelantikan', '2023-02-23', 'Melantik seluruh anggota BEM UDB', 'Disetujui'),
(941790, 'psdm', 'LDK 1', '2023-03-11', 'Latihan Dasar Kepemimpinan dengan tema \"Explore The Ability to Build The Spirit of Leadhership\"', 'Disetujui'),
(968050, 'humas', 'Kunjungan di kampus lain', '2023-07-01', 'Devisi Humas', 'Disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sesi`
--

CREATE TABLE `sesi` (
  `id` char(32) NOT NULL,
  `data` text DEFAULT NULL,
  `terakhir_diakses` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `id_profil`
--
ALTER TABLE `id_profil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`) USING BTREE;

--
-- Indeks untuk tabel `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`id_lkeuangan`);

--
-- Indeks untuk tabel `laporan_proker`
--
ALTER TABLE `laporan_proker`
  ADD PRIMARY KEY (`id_lproker`);

--
-- Indeks untuk tabel `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`uid`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`notifikasi_id`);

--
-- Indeks untuk tabel `no_surat`
--
ALTER TABLE `no_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`posting_id`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `id_profil`
--
ALTER TABLE `id_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `notifikasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posting`
--
ALTER TABLE `posting`
  MODIFY `posting_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
