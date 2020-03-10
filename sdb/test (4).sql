-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2019 pada 11.05
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(10) NOT NULL,
  `title_berita` text NOT NULL,
  `subtitle_berita` text NOT NULL,
  `image_berita` text NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`berita_id`, `title_berita`, `subtitle_berita`, `image_berita`, `isi_berita`) VALUES
(1, 'Celana cingkrang dan cadar bagi ASN: \'Jika harus pilih antara PNS dan cadar, saya pilih cadar\'', 'Sejumlah Aparatur Sipil Negara (ASN) di Aceh dan Banten mengatakan tidak setuju dengan wacana pelarangan celana cingkrang dan cadar di lingkungan kantor pemerintah, seperti diusulkan Menteri Agama Fachrul Razi.', 'https://ichef.bbci.co.uk/news/660/cpsprodpb/978D/production/_109479783_whatsappimage2019-11-01at09.44.20.jpg', '\"Jika harus memilih antara [menjadi] Pegawai Negeri Sipil (PNS) dan cadar, maka saya memilih menggunakan cadar,\" kata Meiriana, seorang ASN di Aceh kepada Hidayatullah, yang melaporkan untuk BBC News Indonesia, hari Jumat (01/11).\r\n\r\n\"Ini merupakan sunah Rasul, dan saya sudah menggunakan cadar selama lebih dari 10 tahun,\" tambah Meiriana\r\n\r\nStaf Dinas Kependudukan dan Catatan Sipil Kota Banda Aceh ini mengatakan penggunaan pakaian seperti cadar dan celana cingkrang merupakan pilihan dan dipakai untuk memenuhi ajaran agama.\r\n\r\nIa mengatakan \"tidak ada hubungan antara pakaian dan keamanan nasional\".\r\n\r\n\"Masalah radikalisme adalah masalah ideologi, bukan masalah cadar atau celana cingkrang. Jadi saya mengecam pernyataan menteri agama,\" kata Meiriana.\r\n\r\nPolwan terpapar paham radikal indikasi \'bahaya luar biasa\', pemerintah diminta lakukan audit ideologi\r\nBom Kartasura: Pelaku penjual gorengan \'lone wolf\' tak berjejaring dengan kelompok teroris tapi salah menangkap ajaran agama\r\nRepatriasi WNI eks-ISIS : Pemerintah belum ambil keputusan, BNPT setuju eks-kombatan diadili di Suriah\r\nMarzuki, ASN di Dinas Satpol Pamong Praja dan Wilayatul Hisbah (WH) -- lembaga yang mengawasi pelaksanaan syariat Islam -- Provinsi Aceh, mengatakan tidak ada kaitan antara celana cingkrang dan radikalisme atau keamanan nasional.\r\n\r\nIni semata-mata, katanya, karena sunah Rasul dan dianjurkan oleh agama.\r\n\r\n\"Orang-orang radikal itu yang bermasalah adalah ideologinya bukan pakaiannya. Menggunakan celana cingkrang memudahkan kita menjaga pakaian dari najis,\" kata Marzuki, ASN yang menggunakan celana cingkrang.\r\n\r\nWakil Ketua Majelis Permusyawaratan Ulama Aceh, Faisal Ali, mengatakan hukum dibuat dari rakyat dan untuk rakyat, jadi segala sesuatu butuh diteliti dan diskusi yang baik, sebab celana cingkrang dan penggunaan cadar tersebut tidak ada urusan dengan keamanan nasional.\r\n\r\n\"Dalam sudut pandang apa pun, tidak ada hubungan antara pakaian dan keamanan sosial, jadi sebelum melemparkan isu ke publik, lebih baik dibicarakan terlebih dahulu dan diteliti,\" kata Faisal Ali.\r\n\r\nPemerintah di Kabupaten Aceh Besar menilai jika larangan cadar dan celana cingkrang resmi menjadi peraturan, maka \"larangan tersebut tidak layak dipatuhi, karena pakaian adalah ranah personal\".'),
(2, 'Mengharukan, Inilah Unggahan Terakhir Pembalap Indonesia, Afridza Munandar, Sebelum Berpulang', '\r\nBOLASPORT.COM - Berita duka datang dari Sirkuit Sepang, Malaysia ketika salah satu pembalap masa depan Indonesia, Afridza Munandar, dikabarkan meninggal dunia.', 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2019/11/02/2287831660.png', 'Afridza sedianya terdaftar sebagai salah satu kontestan yang berlaga pada ajang Idemitsu Asia Talent Cup 2019 di Sirkuit Sepang Sabtu (2/11/2019) hari ini.\r\n\r\nNahas, pembalap muda tanah air tersebut harus mengalami insiden parah saat sedang melakoni Race 1.\r\n\r\nMotor yang dikendarainya hilang keseimbangan saat melaju di tikungan 10 sehingga membuatnya terjatuh di lintasan.\r\n\r\nPembalap berusia 20 tahun itu pun sempat mendapat perawatan medis di sisi lintasan sebelum akhirnya dibawa ke Rumah Sakit Kuala Lumpur dengan helikopter.\r\n\r\n\r\n\r\nSebagai buntut dari insiden tersebut, sesi balapan yang digelar hari ini pun dibatalkan.\r\n\r\nMelalui unggahannya di akun Twitter, pihak MotoGP pun memberikan pernyataan resmi bahwa Afridza menghembuskan napas terakhir di rumah sakit.\r\n\r\nBerpulangnya Afridza meninggalkan duka yang mendalam bagi dunia balap motor pada umumnya dan masyarakat Indonesia pada khususnya.'),
(3, 'Mengenal Radang Otak, Penyakit yang Sebabkan Alfin Lestaluhu Meninggal\r\n', 'KOMPAS.com - Pemain Timnas U-16, Alfin Farhan Lestaluhu, meninggal dunia saat sedang menjalani perawatan di Rumah Sakit Harapan Kita, Jakarta, Kamis (31/10/2019) malam, sekitar pukul 22.00 WIB.\r\n', 'https://asset.kompas.com/crops/y5OhADuOFRk1SbboXA9qOjCSm88=/0x0:588x392/750x500/data/photo/2019/11/01/5dbb3b06cb19b.png', 'Mengutip laporan Kompas.com, Jumat (1/11/2019), Ketua Asprov PSSI Maluku Sofyan Lestaluhu mengungkapkan, sebelum dirawat di Rumah Sakit Harapan Kita, Alfin sebelumnya menjalani perawatan di Rumah Sakit Royal Progres selama lebih kurang lima hari. Menurut Sofyan, dari hasil diagnosa dokter, Alfin terserang infeksi radang otak. Penyakit itulah yang kemudian menyebabkan Alfin meninggal dunia. Lalu, apa itu penyakit radang otak? Radang otak atau Ensefalitis disebabkan oleh infeksi yang menyerang otak ( ensefalitis infeksi) atau melalui sistem kekebalan yang menyerang otak. Siapa pun pada usia berapa pun dapat terserang ensefalitis. Dalam kasus yang jarang terjadi dapat disebabkan oleh bakteri atau bahkan jamur. Ada dua jenis utama ensefalitis, yakni primer dan sekunder. Ensefalitis primer terjadi ketika virus menginfeksi otak dan sumsum tulang belakang secara langsung. Ensefalitis sekunder terjadi ketika infeksi dimulai di tempat lain di tubuh dan kemudian menyebar ke otak. Ensefalitis adalah penyakit langka namun serius yang dapat mengancam jiwa. Baca juga: Imam Nahrawi Jadi Tersangka, Mantan Kapten Timnas: Sangat Disayangkan Gejala Ensefalitis yang disebabkan oleh infeksi, seperti yang terjadi pada Alfin biasanya diawali dengan gejala seperti flu atau sakit kepala. Dalam tahap serius, penyakit ini bisa menyebabkan perubahan tingkat kesadaran. Mulai dari kebingungan ringan atau kantuk hingga kehilangan kesadaran dan koma. Pasien juga bisa mengalami kenaikan suhu tubuh yang tinggi, kejang, keengganan terhadap cahaya terang, ketidakmampuan untuk berbicara atau mengontrol gerakan, perubahan sensorik, kekakuan leher atau perilaku yang tidak seperti biasanya. Jika disebabkan oleh autoimun, penderita bisa mengalami perubahan kepribadian atau perilaku, psikosis, gangguan gerakan, kejang, halusinasi, kehilangan ingatan atau gangguan tidur. Perawatan Untuk mengatasi penyakit ini, dokter biasanya memberikan obat anti-virus agar dapat membantu mengobati herpes ensefalitis. Namun, cara ini tidak efektif dalam mengobati bentuk lain dari ensefalitis. Sebagai gantinya, perawatan sering berfokus pada menghilangkan gejala, seperti: Istirahat total Konsumsi penghilang rasa sakit Pemberian kortikosteroid untuk Mengurangi peradangan otak Ventilasi mekanis untuk membantu pernapasan Antikonvulsan untuk mencegah atau menghentikan kejang Obat penenang untuk gelisah, agresivitas, dan lekas marah Pencegahan Ensefalitis tidak selalu dapat dicegah, tetapi kita dapat menurunkan risiko dengan vaksinasi virus yang dapat menyebabkan ensefalitis. Pastikan juga anak-anak kita menerima vaksinasi untuk virus-virus penyebab ensefalitis. Di area-area di mana nyamuk dan kutu biasa terjadi, gunakan repellant, dan kenakan lengan panjang dan celana panjang. Jika bepergian ke suatu daerah yang rawan dengan virus penyebab ensefalitis, carilah rekomendasi terbaik untuk mendapatkan vaksinasi.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailguru`
--

CREATE TABLE `detailguru` (
  `id_detail_guru` int(10) NOT NULL,
  `image_guru` text NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `rating` int(5) NOT NULL,
  `keahlian` text NOT NULL,
  `mengajar_di` varchar(30) NOT NULL,
  `biografi` text NOT NULL,
  `pengalaman` text NOT NULL,
  `paket_belajar` varchar(40) NOT NULL,
  `jadwal_tahun` int(4) NOT NULL,
  `jadwal_bulan` varchar(8) NOT NULL,
  `jadwal_minggu_ke` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailguru`
--

INSERT INTO `detailguru` (`id_detail_guru`, `image_guru`, `nama_guru`, `rating`, `keahlian`, `mengajar_di`, `biografi`, `pengalaman`, `paket_belajar`, `jadwal_tahun`, `jadwal_bulan`, `jadwal_minggu_ke`) VALUES
(4, 'https://www.provoke-online.com/images/All_Articles/EVENT/depresi_berat_aktor_jeon_tae_soo_meninggal_dunia/osas_1.jpg', 'daus', 5, 'gangguin sami', 'cilacap', 'nama daus, lahir di rahim seorang bapak, umur 9 thn, dan seterusnya', 'pernah gangguin sami', 'belajar hadits dan sunnah ', 2030, 'January', 'minggu 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `guru_id` int(10) NOT NULL,
  `image` text NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `biografi_guru` text NOT NULL,
  `rating` varchar(1) NOT NULL,
  `total_santri` int(5) NOT NULL,
  `total_pertemuan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`guru_id`, `image`, `nama_guru`, `keahlian`, `biografi_guru`, `rating`, `total_santri`, `total_pertemuan`) VALUES
(1, 'https://www.google.com/url?sa=i&source=imgres&cd=&ved=2ahUKEwjnyIjm5uTlAhXKro8KHdgqBVgQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.kaskus.co.id%2Fthread%2F533856b3fbca17703d8b4597%2Fbeberapa-keuntungan-memiliki-wajah-and-body-jelek-pas2an-ngerasa-jelek-masup%2F&psig=AOvVaw0VAMyEz5xg7WFkgJjtK3F4&ust=1573652571662143', 'Firdaus', 'Gangguin Sami', 'Nama saya Muhammad Fatihul Pampam , saya tak pernah lulus sekolah namun kini saya telah lulus s3 jurusan Ekonomi, saya ingin menjadi guru ngaji biar saya bisa ngaji', '5', 1, 1),
(2, 'https://www.google.com/url?sa=i&source=imgres&cd=&ved=2ahUKEwjnyIjm5uTlAhXKro8KHdgqBVgQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.kaskus.co.id%2Fthread%2F533856b3fbca17703d8b4597%2Fbeberapa-keuntungan-memiliki-wajah-and-body-jelek-pas2an-ngerasa-jelek-masup%2F&psig=AOvVaw0VAMyEz5xg7WFkgJjtK3F4&ust=1573652571662143', 'Mu\'don', 'Gangguin Cileg', 'Saya mu\'don saya adalah Mu\'don', '5', 1, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mengajar`
--

CREATE TABLE `jadwal_mengajar` (
  `id_jadwal_mengajar` int(10) NOT NULL,
  `jam_pelajaran` text NOT NULL,
  `hari_1` text NOT NULL,
  `hari_2` text NOT NULL,
  `hari_3` text NOT NULL,
  `hari_4` text NOT NULL,
  `hari_5` text NOT NULL,
  `hari_6` text NOT NULL,
  `hari_7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_mengajar`
--

INSERT INTO `jadwal_mengajar` (`id_jadwal_mengajar`, `jam_pelajaran`, `hari_1`, `hari_2`, `hari_3`, `hari_4`, `hari_5`, `hari_6`, `hari_7`) VALUES
(1, '06:00:00', 'Jumat, 08/11/2019', 'Sabtu, 09/11/2019', 'Ahad, 10/11/2019', 'Senin, 11/11/2019', 'Selasa, 12/11/2019', 'Rabu, 13/11/2019', 'Kamis, 14/11/2019'),
(2, '08:00:00', 'Jumat, 08/11/2019', 'Sabtu, 09/11/2019', 'Ahad, 10/11/2019', 'Senin, 11/11/2019', 'Selasa, 12/11/2019', 'Rabu, 13/11/2019', 'Kamis, 14/11/2019'),
(3, '10:00:00', 'Jumat, 08/11/2019', 'Sabtu, 09/11/2019', 'Ahad, 10/11/2019', 'Senin, 11/11/2019', 'Selasa, 12/11/2019', 'Rabu, 13/11/2019', 'Kamis, 14/11/2019'),
(4, '12:00:00', 'Jumat, 08/11/2019', 'Sabtu, 09/11/2019', 'Ahad, 10/11/2019', 'Senin, 11/11/2019', 'Selasa, 12/11/2019', 'Rabu, 13/11/2019', 'Kamis, 14/11/2019'),
(5, '14:00:00', 'Jumat, 08/11/2019', 'Sabtu, 09/11/2019', 'Ahad, 10/11/2019', 'Senin, 11/11/2019', 'Selasa, 12/11/2019', 'Rabu, 13/11/2019', 'Kamis, 14/11/2019'),
(6, '16:00:00', 'Jumat, 08/11/2019', 'Sabtu, 09/11/2019', 'Ahad, 10/11/2019', 'Senin, 11/11/2019', 'Selasa, 12/11/2019', 'Rabu, 13/11/2019', 'Kamis, 14/11/2019'),
(7, '18:00:00', 'Jumat, 08/11/2019', 'Sabtu, 09/11/2019', 'Ahad, 10/11/2019', 'Senin, 11/11/2019', 'Selasa, 12/11/2019', 'Rabu, 13/11/2019', 'Kamis, 14/11/2019'),
(8, '20:00:00', 'Jumat, 08/11/2019', 'Sabtu, 09/11/2019', 'Ahad, 10/11/2019', 'Senin, 11/11/2019', 'Selasa, 12/11/2019', 'Rabu, 13/11/2019', 'Kamis, 14/11/2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
--

CREATE TABLE `kelompok` (
  `kelompok_id` int(10) NOT NULL,
  `sekali_pertemuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelompok`
--

INSERT INTO `kelompok` (`kelompok_id`, `sekali_pertemuan`) VALUES
(2, 'Rp.150.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `keluarga_id` int(10) NOT NULL,
  `sekali_pertemuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`keluarga_id`, `sekali_pertemuan`) VALUES
(1, 'Rp.125.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal`
--

CREATE TABLE `personal` (
  `personal_id` int(10) NOT NULL,
  `sekali_pertemuan` text NOT NULL,
  `nama_paket` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `personal`
--

INSERT INTO `personal` (`personal_id`, `sekali_pertemuan`, `nama_paket`) VALUES
(1, '100.000', 'Nama Paket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(2, 'dfgdfd', 'gvfgjbhnjihyf@gtgyhujk', '000'),
(3, 'sdsdd', 'dewddeew@fdf', 'wewew'),
(4, 'sdsdsd', 'sdsdsd@mgmg', 'sdsdsdsdsd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `umur` int(100) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='pampam';

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`id`, `name`, `umur`, `alamat`, `pendidikan`) VALUES
(1, 'daushmen', 15, 'Villa 139', 'lulus paud'),
(2, 'patihul', 90, 'cilacap ', 's3 panti jompo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(10) NOT NULL,
  `name` varchar(223) NOT NULL,
  `image` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tanggal_posting` date NOT NULL,
  `isi_berita` text NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `foto`, `judul_berita`, `tanggal_posting`, `isi_berita`, `penulis`) VALUES
(1, 'foto_1.jpg', 'Crisitian Gonzales Percaya Madura United Lebih Baik Di Liga 1', '2018-02-08', 'Madura United tersingkir dari Piala Presiden di babak delapan besar.</br></br>\r\nKegagalan Madura United di Piala Presiden 2018, tak membuat Cristian Gonzales, jadi pesemitis ketika Liga 1 bergulir. Ia menilai, timnya bakal bisa berbicara banyak ketika kompetisi kasta teratas digelar.\r\n</br></br>\r\nLangkah Madura United dalam Piala Presiden terhenti di babak delapan besar. Pasukan Gomes de Oliviera tersebut dikalahkan Bali United lewat babak adu penalti di Stadion Manahan, Solo, akhir pekan lalu.\r\n</br></br>\r\nNamun, Gonzales merasa timnya tidak kalah kelas dibandingkan Bali United. Menurutnya, Madura United takluk karena tidak dinaungi dewi fortuna saja pada laga tersebut.\r\n</br></br>\r\n\"Waktu di Piala Presiden kami sebenarnya sudah bagus, meskipun lawan kalah lewat penalti. Ya sekarang kami harus lupakan itu dan konsentrasi untuk kompetisi nanti,\" ucap Gonzales.\r\n</br></br>\r\nLebih jauh, eks Arema FC tersebut menuturkan belum bisa memprediksikan lawan tangguh yang bakal dihadapai Madura United pada Liga 1 2018. Ini lantaran, ia menyebutkan seluruh kontestan pasti ingin meraih hasil maksimal.\r\n</br></br>\r\n\"Adanya Piala Presiden ini sangat bagus sebagai sarana kami untuk menilai semua tim, tetapi pasti saat kompetisi dimulai nanti situasi akan berbeda,\" ujarnya. ', 'Muhammad Ridwan'),
(2, 'foto_2.jpg', 'REVIEW Eredivisie Belanda: PSV Mantap Di Puncak, NAC Tinggalkan Degradasi', '2018-02-08', 'Kemenangan tipis PSV cukup bagi mereka mempertahankan posisi puncak, diikuti Ajax di urutan kedua setelah menang 4-2.\r\n</br></br>\r\nAZ Alkmaar mengukuhkan posisi ketiga dengan menghancurkan tuan rumah Twente, yang mengakhiri laga dengan sepuluh pemain, 4-0.\r\n</br></br>\r\nTim tamu membuka keunggulan di menit kesepuluh via penalti Alireza Jahanbakhsh. Twente berhasil mengimbangi permainan AZ sampai mereka harus kehilangan Cristian Cuevas yang diusir wasit setelah mendapat dua kartu kuning di menit ke-73.\r\n</br></br>\r\nMemasuki pengujung laga, AZ menambah tiga gol, dua di antaranya dicetak Wout Weghorst sebelum Jahanbakhsh mencetak bracenya di injury time.', 'DEWI AGRENIAWATI'),
(3, 'foto_3.jpg', 'Selasa Ini, Belanda Tunjuk Ronald Koeman Sebagai Pelatih', '2018-02-09', 'Koeman yang sudah tidak lagi bekerja sejak didepak Everton pada Oktober kemarin akan segera diresmikan sebagai pelatih Belanda.\r\n</br></br>\r\nMedia Inggris Sky Sports News menyebut Belanda akan mengangkat Ronald Koeman sebagai pelatih baru mereka pada Selasa (6/2) ini.\r\n</br></br>\r\nKoeman, 54 tahun, sudah tidak lagi memiliki pekerjaan sejak dilengserkan Everton dari kursinya sebagai manajer pada Oktober silam menyusul rentetan hasil buruk yang diraih di awal musim.\r\n</br></br>\r\nBelanda sendiri juga belum memiliki pelatih sejak ditinggal Dick Advocaat yang memutuskan mundur pascakegagalan mengantar negaranya lolos ke Piala Dunia 2018.', 'Adhe Makayasa\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ustad`
--

CREATE TABLE `ustad` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `umur` int(100) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pengalaman` text NOT NULL,
  `jadwal` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='daus';

--
-- Dumping data untuk tabel `ustad`
--

INSERT INTO `ustad` (`id`, `name`, `umur`, `alamat`, `pendidikan`, `pengalaman`, `jadwal`) VALUES
(1, 'Ust arroyyan', 17, 'jln arroyyan', 'putus sekolah', 'pernah ngajar di planet namek', 'setiap hari ke delapan'),
(2, 'Ustadz al Ustadzah', 5, 'Jln. buntu Gg. Asgard', 'S3 budidaya cebong albino', 'Belum berpengalaman', 'terserah aja ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `detailguru`
--
ALTER TABLE `detailguru`
  ADD PRIMARY KEY (`id_detail_guru`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indeks untuk tabel `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  ADD PRIMARY KEY (`id_jadwal_mengajar`);

--
-- Indeks untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`kelompok_id`),
  ADD UNIQUE KEY `kelompok_id` (`kelompok_id`);

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`keluarga_id`);

--
-- Indeks untuk tabel `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ustad`
--
ALTER TABLE `ustad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detailguru`
--
ALTER TABLE `detailguru`
  MODIFY `id_detail_guru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `guru_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  MODIFY `id_jadwal_mengajar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `kelompok_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `keluarga_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal`
--
ALTER TABLE `personal`
  MODIFY `personal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ustad`
--
ALTER TABLE `ustad`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
