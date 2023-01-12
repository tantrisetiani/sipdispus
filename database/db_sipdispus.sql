-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 02:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipdispus`
--

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE `komponen` (
  `id_komponen` int(11) NOT NULL,
  `komponen` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`id_komponen`, `komponen`) VALUES
(1, 'Perencanaan Kinerja'),
(2, 'Pengukuran Kinerja'),
(3, 'Pelaporan Kinerja'),
(4, 'Evaluasi Akuntabilitas Kinerja Internal');

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id_opd` int(20) NOT NULL,
  `jabatan` varchar(1024) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `nama_lengkap` varchar(1024) NOT NULL,
  `nip` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id_opd`, `jabatan`, `bidang`, `nama_lengkap`, `nip`) VALUES
(1, 'Kepala Dinas', 'Ketua Kepala', 'Ir. B. Eko Yunianto, M.Si.', '1929210310'),
(2, 'Sekretaris Dinas', 'Sekretaris 1', 'Ir. Siti Nurul Hidayati', '8120391031'),
(3, 'Kepala Bidang Pelayanan Perpustakaan', 'Kepala Bidang', 'Penta Lianawati, S.E, M.Si.', '102910293103'),
(4, 'Kepala Bidang Arsip Dinamis', 'Kepala Arsip', 'Yustina Ratri Cahyani, S.Sos', '102910293103'),
(5, 'Kepala Bidang Arsip Statis', 'Kepala Statis', 'Tri, S.H.', '102910293103');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `id_opd` int(11) NOT NULL,
  `id_subkomponen` int(11) NOT NULL,
  `tanggal` text CHARACTER SET utf8mb4 NOT NULL,
  `nilai` float NOT NULL,
  `kualitas` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `hasil` float NOT NULL,
  `kualitas_hasil` varchar(10) NOT NULL,
  `predikat` varchar(50) NOT NULL,
  `catatan` varchar(1024) CHARACTER SET utf8mb4 NOT NULL,
  `daftar_evidence` varchar(1024) CHARACTER SET utf8mb4 NOT NULL,
  `kesimpulan_evaluasi` varchar(5120) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_u`, `id_opd`, `id_subkomponen`, `tanggal`, `nilai`, `kualitas`, `hasil`, `kualitas_hasil`, `predikat`, `catatan`, `daftar_evidence`, `kesimpulan_evaluasi`) VALUES
(1, 2, 1, 1, '16/12/2022', 90, 'A', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(2, 2, 1, 2, '16/12/2022', 100, 'AA', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(3, 2, 1, 3, '16/12/2022', 80, 'BB', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(4, 2, 1, 4, '16/12/2022', 70, 'B', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(5, 2, 1, 5, '16/12/2022', 85, 'A', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(6, 2, 1, 6, '16/12/2022', 90, 'A', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(7, 2, 1, 7, '16/12/2022', 80, 'BB', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(8, 2, 1, 8, '16/12/2022', 100, 'AA', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(9, 2, 1, 9, '16/12/2022', 80, 'BB', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(10, 2, 1, 10, '16/12/2022', 85, 'A', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(11, 2, 1, 11, '16/12/2022', 82, 'A', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(12, 2, 1, 12, '16/12/2022', 90, 'A', 86, 'A', 'Memuaskan', '-', '-', 'Ditingkatkan lagi'),
(13, 2, 4, 1, '03/01/2023', 90, 'A', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(14, 2, 4, 2, '03/01/2023', 90, 'A', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(15, 2, 4, 3, '03/01/2023', 89, 'A', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(16, 2, 4, 4, '03/01/2023', 99, 'AA', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(17, 2, 4, 5, '03/01/2023', 95, 'AA', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(18, 2, 4, 6, '03/01/2023', 90, 'A', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(19, 2, 4, 7, '03/01/2023', 100, 'AA', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(20, 2, 4, 8, '03/01/2023', 77, 'BB', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(21, 2, 4, 9, '03/01/2023', 78, 'BB', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(22, 2, 4, 10, '03/01/2023', 99, 'AA', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(23, 2, 4, 11, '03/01/2023', 90, 'A', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi'),
(24, 2, 4, 12, '03/01/2023', 90, 'A', 90.58, 'AA', 'Sangat Memuaskan', '-', '-', 'Dapat ditingkatkan lagi');

-- --------------------------------------------------------

--
-- Table structure for table `subkomponen`
--

CREATE TABLE `subkomponen` (
  `id_subkomponen` int(11) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `subkomponen` varchar(1024) NOT NULL,
  `kriteria` varchar(5000) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkomponen`
--

INSERT INTO `subkomponen` (`id_subkomponen`, `id_komponen`, `subkomponen`, `kriteria`, `bobot`) VALUES
(1, 1, 'Dokumen Perencanaan Kinerja telah Tersedia', '<p>1.&nbsp;Terdapat pedoman teknis perencanaan kinerja.</p>\r\n\r\n<p>2.&nbsp;Terdapat dokumen perencanaan kinerja jangka panjang.</p>\r\n\r\n<p>3.&nbsp;Terdapat dokumen perencanaan kinerja jangka menengah.</p>\r\n\r\n<p>4.&nbsp;Terdapat dokumen perencanaan kinerja jangka pendek.</p>\r\n\r\n<p>5.&nbsp;Terdapat dokumen perencanaan aktivitas yang mendukung kinerja.</p>\r\n\r\n<p>6.&nbsp;Terdapat dokumen perencanaan anggaran yang mendukung kinerja.</p>\r\n', 6),
(2, 1, 'Dokumen Perencanaan kinerja telah memenuhi standar yang baik, yaitu untuk mencapai hasil, dengan ukuran kinerja yang SMART, menggunakan penyelarasan (cascading) disetiap level secara logis, serta memperhatikan kinerja bidang lain (crosscutting)', '<p>1.&nbsp;Dokumen Perencanaan Kinerja telah diformalkan.</p>\r\n\r\n<p>2.&nbsp;Dokumen Perencanaan Kinerja telah dipublikasikan tepat waktu.</p>\r\n\r\n<p>3.&nbsp;Dokumen Perencanaan Kinerja telah menggambarkan Kebutuhan atas Kinerja sebenarnya yang perlu dicapai.</p>\r\n\r\n<p>4.&nbsp;Kualitas Rumusan Hasil (Tujuan/Sasaran) telah jelas menggambarkan kondisi kinerja yang akan dicapai.</p>\r\n\r\n<p>5.&nbsp;Ukuran Keberhasilan (Indikator Kinerja) telah memenuhi kriteria SMART.</p>\r\n\r\n<p>6.&nbsp;Indikator Kinerja Utama (IKU) telah menggambarkan kondisi Kinerja Utama yang harus dicapai, tertuang secara berkelanjutan (sustainable - tidak sering diganti dalam 1 periode Perencanaan Strategis).</p>\r\n\r\n<p>7.&nbsp;Target yang ditetapkan dalam Perencanaan Kinerja dapat dicapai (achievable), menantang, dan realistis.</p>\r\n\r\n<p>8.&nbsp;Setiap Dokumen Perencanaan Kinerja menggambarkan hubungan yang berkesinambungan, serta selaras antara Kondisi/Hasil yang akan dicapai di setiap level jabatan (Cascading).</p>\r\n\r\n<p>9.&nbsp;Perencanaan kinerja dapat memberikan informasi tentang hubungan kinerja, strategi, kebijakan, bahkan aktivitas antar bidang/dengan tugas dan fungsi lain yang berkaitan (Crosscutting).</p>\r\n\r\n<p>10.&nbsp;Setiap unit/satuan kerja merumuskan dan menetapkan Perencanaan Kinerja.</p>\r\n\r\n<p>11.&nbsp;Setiap pegawai merumuskan dan menetapkan Perencanaan Kinerja.</p>\r\n', 9),
(3, 1, 'Perencanaan Kinerja telah dimanfaatkan untuk mewujudkan hasil yang berkesinambungan', '<p>1.&nbsp;Anggaran yang ditetapkan telah mengacu pada Kinerja yang ingin dicapai.</p>\r\n\r\n<p>2.&nbsp;Aktivitas yang dilaksanakan telah mendukung Kinerja yang ingin dicapai.</p>\r\n\r\n<p>3.&nbsp;Target yang ditetapkan dalam Perencanaan Kinerja telah dicapai dengan baik, atau setidaknya masih on the right track.</p>\r\n\r\n<p>4.&nbsp;Rencana aksi kinerja dapat berjalan dinamis karena capaian kinerja selalu dipantau secara berkala.</p>\r\n\r\n<p>5.&nbsp;Terdapat perbaikan/penyempurnaan Dokumen Perencanaan Kinerja yang ditetapkan dari hasil analisis perbaikan kinerja sebelumnya.</p>\r\n\r\n<p>6.&nbsp;Terdapat perbaikan/penyempurnaan Dokumen Perencanaan Kinerja dalam mewujudkan kondisi/hasil yang lebih baik.</p>\r\n\r\n<p>7.&nbsp;Setiap unit/satuan kerja memahami dan peduli, serta berkomitmen dalam mencapai kinerja yang telah direncanakan.</p>\r\n\r\n<p>8.&nbsp;Setiap Pegawai memahami dan peduli, serta berkomitmen dalam mencapai kinerja yang telah direncanakan.</p>\r\n', 15),
(4, 2, 'Pengukuran Kinerja telah dilakukan', '<p>1.&nbsp;Terdapat pedoman teknis pengukuran kinerja dan pengumpulan data kinerja.</p>\r\n\r\n<p>2.&nbsp;Terdapat Definisi Operasional yang jelas atas kinerja dan cara mengukur indikator kinerja.</p>\r\n\r\n<p>3.&nbsp;Terdapat mekanisme yang jelas terhadap pengumpulan data kinerja yang dapat diandalkan.</p>\r\n', 6),
(5, 2, 'Pengukuran Kinerja telah menjadi kebutuhan dalam mewujudkan Kinerja secara Efektif dan Efisien dan telah dilakukan secara berjenjang dan berkelanjutan', '<p>1.&nbsp;Pimpinan selalu teribat sebagai pengambil keputusan (Decision Maker) dalam mengukur capaian kinerja.</p>\r\n\r\n<p>2.&nbsp;Data kinerja yang dikumpulkan telah relevan untuk mengukur capaian kinerja yang diharapkan.</p>\r\n\r\n<p>3.&nbsp;Data kinerja yang dikumpulkan telah mendukung capaian kinerja yang diharapkan.</p>\r\n\r\n<p>4.&nbsp;Pengukuran kinerja telah dilakukan secara berkala.</p>\r\n\r\n<p>5.&nbsp;Setiap level organisasi melakukan pemantauan atas pengukuran capaian kinerja unit dibawahnya secara berjenjang.</p>\r\n\r\n<p>6.&nbsp;Pengumpulan data kinerja telah memanfaatkan Teknologi Informasi (Aplikasi).</p>\r\n\r\n<p>7.&nbsp;Pengukuran capaian kinerja telah memanfaatkan Teknologi Informasi (Aplikasi).</p>\r\n', 9),
(6, 2, 'Pengukuran Kinerja telah dijadikan dasar dalam pemberian Reward dan Punishment, serta penyesuaian strategi dalam mencapai kinerja yang efektif dan efisien', '<p>1.&nbsp;Pengukuran Kinerja telah menjadi dasar dalam penyesuaian (pemberian/pengurangan) tunjangan kinerja/penghasilan.</p>\r\n\r\n<p>2.&nbsp;Pengukuran Kinerja telah menjadi dasar dalam penempatan/penghapusan Jabatan baik struktural maupun fungsional.</p>\r\n\r\n<p>3.&nbsp;Pengukuran kinerja telah mempengaruhi penyesuaian (Refocusing) Organisasi.</p>\r\n\r\n<p>4.&nbsp;Pengukuran kinerja telah mempengaruhi penyesuaian Strategi dalam mencapai kinerja.</p>\r\n\r\n<p>5.&nbsp;Pengukuran kinerja telah mempengaruhi penyesuaian Kebijakan dalam mencapai kinerja.</p>\r\n\r\n<p>6.&nbsp;Pengukuran kinerja telah mempengaruhi penyesuaian Aktivitas dalam mencapai kinerja.</p>\r\n\r\n<p>7.&nbsp;Pengukuran kinerja telah mempengaruhi penyesuaian Anggaran dalam mencapai kinerja.</p>\r\n\r\n<p>8.&nbsp;Terdapat efisiensi atas penggunaan anggaran dalam mencapai kinerja.</p>\r\n\r\n<p>9.&nbsp;Setiap unit/satuan kerja memahami dan peduli atas hasil pengukuran kinerja.</p>\r\n\r\n<p>10.&nbsp;Setiap pegawai memahami dan peduli atas hasil pengukuran kinerja.</p>\r\n', 15),
(7, 3, 'Terdapat Dokumen Laporan yang menggambarkan ', '<p>1.&nbsp;Dokumen Laporan Kinerja telah disusun.</p>\r\n\r\n<p>2.&nbsp;Dokumen Laporan Kinerja telah disusun secara berkala.</p>\r\n\r\n<p>3.&nbsp;Dokumen Laporan Kinerja telah diformalkan.</p>\r\n\r\n<p>4.&nbsp;Dokumen Laporan Kinerja telah direviu.</p>\r\n\r\n<p>5.&nbsp;Dokumen Laporan Kinerja telah dipublikasikan.</p>\r\n\r\n<p>6.&nbsp;Dokumen Laporan Kinerja telah disampaikan tepat waktu.</p>\r\n', 3),
(8, 3, 'Dokumen Laporan Kinerja telah memenuhi Standar menggambarkan Kualitas atas Pencapaian Kinerja, informasi keberhasilan/kegagalan kinerja serta upaya perbaikan/penyempurnaannya', '<p>1.&nbsp;Dokumen Laporan Kinerja disusun secara berkualitas sesuai dengan standar.</p>\r\n\r\n<p>2.&nbsp;Dokumen Laporan Kinerja telah mengungkap seluruh informasi tentang pencapaian kinerja.</p>\r\n\r\n<p>3.&nbsp;Dokumen Laporan Kinerja telah menginfokan analisis dan evaluasi realisasi kinerja dengan target tahunan.</p>\r\n\r\n<p>4.&nbsp;Dokumen Laporan Kinerja telah menginfokan analisis dan evaluasi realisasi kinerja dengan target jangka menengah.</p>\r\n\r\n<p>5.&nbsp;Dokumen Laporan Kinerja telah menginfokan analisis dan evaluasi realisasi kinerja dengan realisasi kinerja tahun-tahun sebelumnya.</p>\r\n\r\n<p>6.&nbsp;Dokumen Laporan Kinerja telah menginfokan analisis dan evaluasi realisasi kinerja dengan realiasi kinerja di level nasional/internasional (Benchmark Kinerja).</p>\r\n\r\n<p>7.&nbsp;Dokumen Laporan Kinerja telah menginfokan kualitas atas keberhasilan/kegagalan mencapai target kinerja beserta upaya nyata dan/atau hambatannya.</p>\r\n\r\n<p>8.&nbsp;Dokumen Laporan Kinerja telah menginfokan efisiensi atas penggunaan sumber daya dalam mencapai kinerja.</p>\r\n\r\n<p>9.&nbsp;Dokumen Laporan Kinerja telah menginfokan upaya perbaikan dan penyempurnaan kinerja ke depan (Rekomendasi perbaikan kinerja).</p>\r\n\r\n<p>10.&nbsp;Dokumen Laporan Kinerja telah menginfokan efisiensi atas penggunaan sumber daya dalam mencapai kinerja.</p>\r\n', 4.5),
(9, 3, 'Pelaporan Kinerja telah memberikan dampak yang besar dalam penyesuaian strategi/kebijakan dalam mencapai kinerja berikutnya', '<p>1.&nbsp;Informasi dalam laporan kinerja selalu menjadi perhatian utama pimpinan (Bertanggung Jawab).</p>\r\n\r\n<p>2.&nbsp;Penyajian informasi dalam laporan kinerja menjadi kepedulian seluruh pegawai.</p>\r\n\r\n<p>3.&nbsp;Informasi dalam laporan kinerja berkala telah digunakan dalam penyesuaian aktivitas untuk mencapai kinerja.</p>\r\n\r\n<p>4.&nbsp;Informasi dalam laporan kinerja berkala telah digunakan dalam penyesuaian penggunaan anggaran untuk mencapai kinerja.</p>\r\n\r\n<p>5.&nbsp;Informasi dalam laporan kinerja telah digunakan dalam evaluasi pencapaian keberhasilan kinerja.</p>\r\n\r\n<p>6.&nbsp;Informasi dalam laporan kinerja telah digunakan dalam penyesuaian perencanaan kinerja yang akan dihadapi berikutnya.</p>\r\n\r\n<p>7.&nbsp;Informasi dalam laporan kinerja selalu mempengaruhi perubahan budaya kinerja organisasi.</p>\r\n', 7.5),
(10, 4, 'Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan ', '<p>1.&nbsp;Terdapat pedoman teknis Evaluasi Akuntabilitas Kinerja Internal.</p>\r\n\r\n<p>2.&nbsp;Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan pada seluruh unit kerja/perangkat daerah.</p>\r\n\r\n<p>3.&nbsp;Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan secara berjenjang.</p>\r\n', 5),
(11, 4, 'Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan secara berkualitas dengan Sumber Daya yang memadai', '<p>1.&nbsp;Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan sesuai standar.</p>\r\n\r\n<p>2.&nbsp;Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan oleh SDM yang memadai.</p>\r\n\r\n<p>3.&nbsp;Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan dengan pendalaman yang memadai.</p>\r\n\r\n<p>4.&nbsp;Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan pada seluruh unit kerja/perangkat daerah.</p>\r\n\r\n<p>5.&nbsp;Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan menggunakan Teknologi Informasi (Aplikasi).</p>\r\n', 7.5),
(12, 4, 'Implementasi SAKIP telah meningkat karena evaluasi Akuntabilitas Kinerja Internal sehingga memberikan kesan yang nyata (dampak) dalam efektifitas dan efisiensi Kinerja', '<p>1.&nbsp;Seluruh rekomendasi atas hasil evaluasi akuntablitas kinerja internal telah ditindaklanjuti.</p>\r\n\r\n<p>2.&nbsp;Telah terjadi peningkatan implementasi SAKIP dengan melaksanakan tindak lanjut atas rerkomendasi hasil evaluasi akuntablitas Kinerja internal.</p>\r\n\r\n<p>3.&nbsp;Hasil Evaluasi Akuntabilitas Kinerja Internal telah dimanfaatkan untuk perbaikan dan peningkatan akuntabilitas kinerja.</p>\r\n\r\n<p>4.&nbsp;Hasil dari Evaluasi Akuntabilitas Kinerja Internal telah dimanfaatkan dalam mendukung efektifitas dan efisiensi kinerja.</p>\r\n\r\n<p>5.&nbsp;Telah terjadi perbaikan dan peningkatan kinerja dengan memanfaatkan hasil evaluasi akuntablitas kinerja internal.</p>\r\n', 12.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_u` int(50) NOT NULL,
  `id_opd` int(11) NOT NULL,
  `nama_user` varchar(1024) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `foto_profil` varchar(255) NOT NULL,
  `level` varchar(1024) NOT NULL,
  `is_trash` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1 = aktif | 2 = nonaktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `id_opd`, `nama_user`, `username`, `password`, `foto_profil`, `level`, `is_trash`) VALUES
(1, 0, 'Admin Pertama', 'admin', '21232f297a57a5a743894a0e4a801fc3', '208dce70684235288c39bc639bef3e8f.jpeg', 'Admin', 1),
(2, 0, 'Ir. B. Eko Yunianto, M.Si.', 'ekoyunianto', '4cbbe6a074cff250b73c654373544215', '22707597eaa66a0cdbfe551a2c099ddc.jpeg', 'Penilai', 1),
(3, 1, 'Sekretariat Daerah Kabupaten Madiun', 'sekda', '143853039dad575c9fe430499b8bf2a4', 'adbd70d75f05228689dc038b148ae239.jpeg', 'Instansi', 1),
(4, 0, 'Ir. Siti Nurul Hidayati', 'sitinurul', '86c49912c4ce8eabe296f918b862381d', '8fcccad8651571b05ebf85ee852e0495.jpg', 'Penilai', 1),
(5, 2, 'Dinas Sosial', 'dinsos', '845388911209126f2566e2edeedcbc45', '8835ad31f1448a23a4ff4e4d1c67cf01.jpg', 'Instansi', 1),
(6, 2, 'Inspektorat', 'inspektorat', 'dbfd35a0b4ec29080895ba9dd847decc', '5c31939ed6efd978fac274078ee3270a.jpg', 'Instansi', 1),
(7, 0, 'Admin Kedua', 'adminkedua', '8f1b8c1bb2622e1f02f15bc864d3a93a', '84ab9309f1bb8a4dbb42bb369e7c6427.jpg', 'Admin', 1),
(8, 0, 'Penta Lianawati, S.E, M.Si.', 'pentalianawati', '3a58b44ddebce27b15fae5b0260228cd', 'b0136d52bd4b3fde2ce8ceb86f5f2acb.jpg', 'Penilai', 1),
(9, 4, 'Dinas Pariwisata Pemuda dan Olahraga', 'disparpora', 'adc2076fec6d58a937875d93bb827102', 'aca86b13cc4d425549a0a21dd58e0ca7.jpg', 'Instansi', 1),
(10, 0, 'Yustina Ratri Cahyani, S.Sos', 'yustinaratri', '38c674bba42b6fd73bc63fbf191f20e8', 'a349c46dc795143f41384756e9818726.png', 'Penilai', 1),
(11, 0, 'Tri, S.H.', 'tri', '3df3eb1de374c34727014c9aa4d180f3', 'ffa785e0a8271f4697a6b638ff558a63.png', 'Penilai', 1),
(12, 4, 'Yustina Ratri Cahyani, S.Sos', 'yustinaratri2', '35ac51f9ead95b460b1a982edecfda18', '63557bd974682649d49b8927cd4ffe4d.png', 'Instansi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komponen`
--
ALTER TABLE `komponen`
  ADD PRIMARY KEY (`id_komponen`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_subkomponen` (`id_subkomponen`),
  ADD KEY `id_opd` (`id_opd`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `subkomponen`
--
ALTER TABLE `subkomponen`
  ADD PRIMARY KEY (`id_subkomponen`),
  ADD KEY `id_komponen` (`id_komponen`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`),
  ADD KEY `id_opd` (`id_opd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komponen`
--
ALTER TABLE `komponen`
  MODIFY `id_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `id_opd` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subkomponen`
--
ALTER TABLE `subkomponen`
  MODIFY `id_subkomponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
