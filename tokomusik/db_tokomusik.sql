-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 03:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokomusik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Iniadmin ', 'admin', '21232f297a57a5a743894a0e4a801fc3', '+6282220683777', 'iniadmin.00@gmail.com', 'Jl. Sentosa Dalam 2, No.1, Kel. Sungai Pinang Dalam, Kec. Sungai Pinang, SAMARINDA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(1, 'Gitar Akustik'),
(2, 'Gitar Listrik'),
(3, 'Piano'),
(7, 'Drum'),
(8, 'Keyboard');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga_satuan` decimal(10,2) DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_create`) VALUES
(6, 2, 'Gitar Elektrik (listrik) Ibanez Jem', 1200000, '<p><strong>Spesifikasi :</strong></p>\r\n\r\n<p>Body Mahogany</p>\r\n\r\n<p>Neck Mahogany</p>\r\n\r\n<p>Fingerboard Rosewood</p>\r\n\r\n<p>Tanam besi/trushroad bisa di setting double action</p>\r\n\r\n<p>Tuning Machine Dryer glover</p>\r\n\r\n<p>24 Fret</p>\r\n\r\n<p>Double Pickup GnB</p>\r\n\r\n<p>Senar D&#39;Addario</p>\r\n\r\n<p>Fret steel/baja tebal</p>\r\n\r\n<p>Tremolo Standart Ibanez Jem</p>\r\n\r\n<p>Playbility nyaman di tangan</p>\r\n\r\n<p>Jarak senar rendah sehingga nyaman dimainkan</p>\r\n\r\n<p>Suara terjamin mantap</p>\r\n\r\n<p>Finishing mulus</p>\r\n', 'produk1699508366.jpg', 1, '2023-11-09 05:39:26'),
(7, 1, 'Gitar Akustik Cowboy GWC235EQ', 1000000, '<p><strong>Spesifikasi</strong><br />\r\nNeck : Mahogany + Trush rod (ada besi stel neck)<br />\r\nBody Top Nato Selected<br />\r\nBack side Mahogany Selected<br />\r\nTuning machine : Grover<br />\r\nFingerboard : Rose wood<br />\r\nBridge : Rose wood<br />\r\nFrets : Steel<br />\r\nSnare : String<br />\r\nPreamp : &ndash;<br />\r\nColour : Natural<br />\r\nFinish : Satin Dop<br />\r\nPick Up : EQ5</p>\r\n', 'produk1699926299.jpg', 1, '2023-11-14 01:44:59'),
(8, 2, 'Yamaha Pacifica PAC112V Gitar Elektrik', 3160000, '<p>Yamaha PAC112V Series Guitar Guitar Elektrik, tampil dengan desain khas Pacifica, PAC112V memiliki konfigurasi elektronik modern yaitu Humbucker-Single Coil-Single Coil dan konstruksi neck ber-radius 13-3/4&quot; yang memiliki 22 fret sehingga nyaman di tangan. Karakteristik ini membuat PAC112V cocok untuk berbagai gaya permainan. Seri Yamaha Pacifica menyenangkan untuk dikoleksi. Hardware : Bridge: Vintage Style Tremolo (PAC112V menggunakan block saddle). Tuning Machine: Die Cast PAC112V dengan coil split Perbedaan PAC112V dan PAC112J terletak pada fitur coil split di 112V, serta model hardware dan knob. Fitur coil split pada PAC112V ini membuat pickup humbucker menjadi single coil sehingga memperbanyak variasi suara.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; Memiliki konfigurasi elektronik modern yaitu Humbucker-Single Coil-Single Coil<br />\r\n&bull; Konstruksi neck ber-radius 13-3/4&quot; yang memiliki 22 fret sehingga nyaman di tangan<br />\r\n&bull; Hardware : Bridge: Vintage Style Tremolo (PAC112V menggunakan block saddle)<br />\r\n&bull; Tuning Machine: Die Cast PAC112V dengan coil split Perbedaan PAC112V dan PAC112J terletak pada fitur coil split di 112V</p>\r\n', 'produk1699926545.jpg', 1, '2023-11-14 01:49:05'),
(9, 2, 'Gitar Listrik X100', 17680000, '<p>Asal: Tiongkok Daratan<br />\r\nBahan Fingerboard: Rosewood<br />\r\nBahan belakang/Samping: mahoni<br />\r\nPosisi nada: 24<br />\r\nBahan tubuh: Picea Asperata<br />\r\nCocok untuk: sekolah di rumah, kinerja profesional, pemula, uniseks<br />\r\nNomor Model: X100<br />\r\n<br />\r\nModel entry level dari seri X baru, X100 menampilkan pemutaran cepat dan licin yang sama dari model seri X kelas atas dengan kayu badan Meranti dan leher Maple batu keras, jatoba untuk fingerboard dengan jari-jari 400mm(15.75 &quot;), dua pickup humbucker output tinggi, dan sistem tremolo 6 titik tersedia dalam tiga polesan pori terbuka: Hitam, ceri hitam, dan ceri hitam meledak.<br />\r\n<br />\r\nKonstruksi<br />\r\n<br />\r\nBolt-On<br />\r\n<br />\r\nTubuh<br />\r\n<br />\r\nMeranti<br />\r\n<br />\r\nLeher<br />\r\n<br />\r\nHardmaple<br />\r\n<br />\r\nFRETBOARD<br />\r\n<br />\r\nJatoba<br />\r\nRadius: 15.75 &quot;(400))<br />\r\n<br />\r\nFret<br />\r\n<br />\r\n24<br />\r\n<br />\r\nTimbangan<br />\r\n<br />\r\n25.5 &quot;(648))<br />\r\n<br />\r\nTuner<br />\r\n<br />\r\nDie-Cast<br />\r\n<br />\r\nJembatan<br />\r\n<br />\r\nTremolo 6k<br />\r\n<br />\r\nPickup<br />\r\n<br />\r\nCortSet Pickup Powersound<br />\r\n<br />\r\nElektronik<br />\r\n<br />\r\nSakelar pemilih 1 Volume, 1 Tone, 3 Way<br />\r\n<br />\r\nPerangkat Keras<br />\r\n<br />\r\nKrom<br />\r\n<br />\r\nBadan Meranti<br />\r\n<br />\r\nTubuh Meranti memiliki karakteristik tonal yang mirip dengan mahoni dengan mid-midrange yang kuat<br />\r\nItu akan memotong campuran dengan otoritas untuk ritme sambil memberikan nilai tertinggi yang manis untuk pemandu lagu.<br />\r\n<br />\r\nPickup Powersound<br />\r\n<br />\r\nPickup Powersound menyediakan pukulan humbucker klasik<br />\r\nDan nada dengan kualitas/nilai penawaran yang tidak bisa mengalahkan.<br />\r\n<br />\r\nTremolo Vintage 6 sekrup<br />\r\n<br />\r\nGaya vintage 6-screw tremolo bridge transfer lebih dari strings&#39; getaran energi<br />\r\nKe dalam tubuh gitar untuk resonansi akustik yang lebih besar sambil memberikan stabilitas penyetelan yang sangat baik.<br />\r\n<br />\r\nKontur tubuh ergonomis<br />\r\n<br />\r\nKenyamanan dan penampilan ditingkatkan dengan potongan lengan berkontur yang elegan di bagian atas.<br />\r\nModifikasi untuk tubuh ini telah ditata dengan hati-hati pada tubuh<br />\r\nX gitar untuk kenyamanan maksimal tanpa perlu membuang kayu dalam jumlah yang tidak perlu.<br />\r\nGaris-garis</p>\r\n', 'produk1699926899.jpg', 1, '2023-11-14 01:54:59'),
(10, 7, 'Drum Elektrik Yamaha DTX402 / DTX402K / DTX 402 / 402K (Penerus 400k )', 5000000, '<p>Jual Drum Elektrik Yamaha DTX 402k Baru, Garansi Resmi Yamaha Indonesia 1 Tahun</p>\r\n\r\n<p><strong>BONUS:</strong></p>\r\n\r\n<p>- 3 in 1 Holder untuk menyimpan Headphone, Stick Drum dan Drum Key</p>\r\n\r\n<p>- STICK DRUM</p>\r\n\r\n<p>- 3 DVD berisi : ==&gt; 1900 MP3 Minus One Drum ==&gt; E-Drum PC Game + 200 Lagu</p>\r\n', 'produk1699927120.jpg', 1, '2023-11-14 01:58:40'),
(11, 7, 'Alesis NITRO MESH KIT Electric Drum Set | Drum Elektrik', 7600000, '<p>Alesis NITRO MESH KIT Electric Drum Set | Drum Elektrik</p>\r\n\r\n<p><strong>FITUR</strong></p>\r\n\r\n<p>Nitro Mesh Drum Kit</p>\r\n\r\n<p>&bull; Mesh drum heads for a quiet yet natural response</p>\r\n\r\n<p>&bull; 8&rdquo; dual-zone snare pad, (3) 8&rdquo; tom pads</p>\r\n\r\n<p>&bull; (3) 10&rdquo; cymbals: ride cymbal, hi-hat, crash w/choke</p>\r\n\r\n<p>&bull; Kick drum, Kick Pedal, HiHat Pedal</p>\r\n\r\n<p>&bull; 4-post aluminium rack&mdash;super solid for stability and flexibility</p>\r\n\r\n<p>&bull; Connection cables, drum sticks, drum key, and power supply included Nitro Drum Module</p>\r\n\r\n<p>&bull; 40 ready-to-play classic and modern kits&mdash;385 drum and cymbal sounds</p>\r\n\r\n<p>&bull; 60 built-in play-along tracks, sequencer, metronome, and performance recorder</p>\r\n\r\n<p>&bull; CD/MP3 aux input to play along with your own songs</p>\r\n\r\n<p>&bull; USB/MIDI connection for virtual instruments and recording software</p>\r\n\r\n<p>&bull; MIDI in and out ports connects directly to stand-alone MIDI gear</p>\r\n\r\n<p>&bull; Stereo line outputs and headphone output BONUS:</p>\r\n\r\n<p>&bull; DRUM STICKS KONFIGURASI KIT DAN KELENGKAPAN</p>\r\n\r\n<p>&bull; Nitro Drum Module</p>\r\n\r\n<p>&bull; 8&quot; Dual-Zone Mesh Snare Pad</p>\r\n\r\n<p>&bull; (3) 8&quot; Mesh Tom Pads</p>\r\n\r\n<p>&bull; 10&quot; Hi-Hat Pad</p>\r\n\r\n<p>&bull; 10&quot; Crash Pad w/ Choke</p>\r\n\r\n<p>&bull; 10&quot; Ride Pad</p>\r\n\r\n<p>&bull; Kick Pad Tower</p>\r\n\r\n<p>&bull; Kick Pedal</p>\r\n\r\n<p>&bull; Hi-Hat Pedal</p>\r\n\r\n<p>&bull; 4-Post Aluminium Rack</p>\r\n\r\n<p>&bull; Cable Snake</p>\r\n\r\n<p>&bull; Cable Wrap Strips</p>\r\n\r\n<p>&bull; Drum Key</p>\r\n\r\n<p>&bull; Power Supply</p>\r\n\r\n<p>&bull; Nitro Module User Guide</p>\r\n\r\n<p>&bull; Kit Assembly Guide</p>\r\n\r\n<p>&bull; Safety &amp; Warranty Manual</p>\r\n\r\n<p><strong>DIMENSI PRODUK</strong></p>\r\n\r\n<p>PxLXT (cm) = 109x61x96</p>\r\n\r\n<p>Berat (kg) = 13.5</p>\r\n', 'produk1699927398.jpg', 1, '2023-11-14 02:03:18'),
(12, 7, 'Drum Elektrik Portable Digital Electronic Kit Electric AROMA TDX-15', 3500000, '<p>Produk: Drum Elektrik</p>\r\n\r\n<p>Merk: AROMA</p>\r\n\r\n<p>Tipe: TDX-15</p>\r\n\r\n<p>*BONUS: 3 set Stick Drum (random)</p>\r\n\r\n<p>- Drum elektrik yang cocok untuk latihan ataupun pertunjukan.</p>\r\n\r\n<p>- Dapat disambungkan ke headphone ataupun amplifier.</p>\r\n\r\n<p>- Permainan drum jadi tidak mengganggu tetangga ataupun orang lain.</p>\r\n\r\n<p>- Lengkap dengan fitur-fitur dan efek-efek drum yang menarik.</p>\r\n\r\n<p>- Kualitas bagus dan terjamin, sehingga awet dan tahan lama.</p>\r\n\r\n<p><strong>SPESIFIKASI:</strong></p>\r\n\r\n<p>- Standard 4+3 drum kit configuration (1 snare, 3 toms, hi-hat, crash and ride cymbals with pedal bass drum</p>\r\n\r\n<p>- 8 inch silicone snare drum and toms</p>\r\n\r\n<p>- 10 inch silicone crash and ride cymbals with choke</p>\r\n\r\n<p>- Silicone hi hat with pedal</p>\r\n\r\n<p>- Pedal bass drum</p>\r\n\r\n<p><strong>MODULE:</strong></p>\r\n\r\n<p>- 12 preset drum sounds: Rock Jazz, Funk, Metal Electric, Rock Live, Metal, Live, Electric Live, GM Standard, GM Room, GM Power, Percussion</p>\r\n\r\n<p>- Metronome</p>\r\n\r\n<p>- USB MIDI</p>\r\n\r\n<p>- Aux Input (3.5mm Jack)</p>\r\n\r\n<p>- Headphone Output (3.5mm Jack)</p>\r\n\r\n<p>- Audio Output (3.5mm Jack)</p>\r\n\r\n<p>- DC In (9V)</p>\r\n', 'produk1699927846.jpg', 1, '2023-11-14 02:10:46'),
(13, 8, 'ALESIS HARMONY 61 MKIII 61 Key Portable Keyboard with Built In Speakers', 2450000, '<p>&nbsp;</p>\r\n\r\n<p>ALESIS HARMONY 61 MKIII 61 Key Portable Keyboard with Built In Speakers</p>\r\n\r\n<p><strong>FITUR:</strong></p>\r\n\r\n<p>&bull; 61 piano style keys with built in speakers</p>\r\n\r\n<p>&bull; 300 built in tones with layer and split modes</p>\r\n\r\n<p>&bull; One touch song mode with 300 built in rhythms</p>\r\n\r\n<p>&bull; Play along with 40 demo songs or record your own</p>\r\n\r\n<p>&bull; 1/8&rdquo; headphone jack mutes speakers for private practice</p>\r\n\r\n<p><strong>BONUS:</strong></p>\r\n\r\n<p>&bull; SUSTAIN PEDAL</p>\r\n\r\n<p>&bull; HEADPHONE</p>\r\n\r\n<p>&bull; KEYBOARD STAND</p>\r\n\r\n<p>&bull; BENCH (KURSI)</p>\r\n\r\n<p>&bull; MUSIC REST</p>\r\n\r\n<p>KONFIGURASI KIT DAN KELENGKAPAN:</p>\r\n\r\n<p>&bull; HARMONY 61 MKIII Portable Keyboard</p>\r\n\r\n<p>&bull; Power Adapter</p>\r\n\r\n<p>&bull; User Guide</p>\r\n\r\n<p>&bull; Safety &amp; Warranty Manual</p>\r\n\r\n<p><strong>DIMENSI PRODUK</strong></p>\r\n\r\n<p>PxLXT (cm) = 95x32x11</p>\r\n\r\n<p>Berat (kg) = 5</p>\r\n', 'produk1699928293.jpg', 1, '2023-11-14 02:18:13'),
(14, 8, 'Roland E-X50 Arranger Keyboard', 7600000, '<p>Roland E-X50 Arranger Keyboard</p>\r\n\r\n<p>Keyboard entertainment serba bisa yang mudah digunakan dengan sound professional dan fitur Roland</p>\r\n\r\n<p>- Design yang cantik dan user interface yang sederhana</p>\r\n\r\n<p>- Sistem speakers stereo bawaan dengan woofer dan tweeter independent dan juga bass-reflex untuk sound yang berisi dan powerful</p>\r\n\r\n<p>- Suara piano akustik yang ekspresif dan kaya yang diambil dari piano-piano panggung Roland</p>\r\n\r\n<p>- Hampir 700 tone tambahan, termasuk electric pianos, organs, orchestral instruments, percussion, world sounds, dan lainnya</p>\r\n\r\n<p>- Fungsi Auto-accompaniment memungkinkan anda untuk mengontrol aransemen musik yang rumit dengan hanya menggunakan penjarian tangan kiri</p>\r\n\r\n<p>- 300 style musik, plus kemampuan untuk menambah 30 style custom melalui Style Converter software untuk macOS dan Windows</p>\r\n\r\n<p>- Fitur recording untuk merekam penampilan keyboard dan arranger</p>\r\n\r\n<p>- Bluetooth audio untuk streaming musik dari perangkat mobile anda melalui system speaker pada keyboard</p>\r\n\r\n<p>- Input mic dengan efek untuk bernyanyi bersama</p>\r\n\r\n<p>- Jack headphones untuk berlatih dengan sunyi</p>\r\n\r\n<p>- Output stereo untuk menghubungkan ke sound system yang lebih besar jika diperlukan</p>\r\n\r\n<p>- Port USB untuk menghubungkan ke komputer dan perangkat memori</p>\r\n\r\n<p>Ukuran: 116 x 48.5 x 19.8 cm</p>\r\n\r\n<p>Berat: 13.5 kg</p>\r\n', 'produk1699928831.jpg', 1, '2023-11-14 02:27:11'),
(15, 8, 'Wolfstrom LH-1100 Semi Weighted Keys Digital Piano Keyboard Elektrik', 4636000, '<p>+ Produk Dijamin Baru dan Asli Wolfstrom</p>\r\n\r\n<p>+ 2 Warna: Black &amp; White</p>\r\n\r\n<p>+ Free Ongkir Jakarta</p>\r\n\r\n<p>+ 1 Tahun Garansi Resmi</p>\r\n\r\n<p>PILIHAN WARNA ADA DI Halaman ke 3</p>\r\n\r\n<p>KUNJUNGI ETALASE UNTUK MELIHAT PIANO YANG LAIN</p>\r\n\r\n<p>How to Use Bluetooth: (Khusus untuk variant Bluetooth) Bluetooth otomatis menyala ketika piano di nyalakan, Pilih Piano Audio **** (masing-masing piano punya 4 nama unik) masukan kode 8888 untuk pairing</p>\r\n\r\n<p>Wolfstrom sekali lagi hadir dengan digital piano keyboard keluaran terbaru dengan harga yang sangat terjangkau. Meskipun LH-1100 harganya termurah, kualitasnya tetap terjamin dan sesuai spesifikasi dibawah. Untuk mekanisme keysnya, LH-1100 menggunakan spring loaded semi-weighted keys yang artinya sudah ada tekanan di jari saat menekan keysnya dan akan dengan cepat reboundnya. Meskipun semi-weighted, keysnya juga sudah touch sensitive, dimana suara piano akan sensitive (lebih keras/lembut) terhadap force atau kekuatan saat keys ditekan.</p>\r\n\r\n<p><strong>Features:</strong></p>\r\n\r\n<p>+ Standard Touch Spring Loaded Semi-Weighted Keys</p>\r\n\r\n<p>+ Touch Sensitive Keys + USB/MiDi - bisa menghubungkan piano ke laptop atau komputer anda supaya bisa dengan gampang merekam dan mengedit (audio editing software seperti audacity, garage band, logic pro dll.) suara dari piano anda dalam bentuk MiDi dengan mudah dan secara live.</p>\r\n\r\n<p>+ Headphone Jack - bisa menghubungkan piano ke headphones anda atau dedicated speaker untuk beberapa kebutuhan seperti memainkan dengan sepenuh hati tanpa harus kuatir mengganggu orang lain disekitar.</p>\r\n\r\n<p>+ Demo Tracks - 80</p>\r\n\r\n<p>+ Tones - 380</p>\r\n\r\n<p>+ Rhythms - 128</p>\r\n\r\n<p>+ Single Track Recording</p>\r\n\r\n<p>+ Metronome</p>\r\n\r\n<p>+ Tempo 20bpm - 280bpm</p>\r\n\r\n<p>+ Transpose -12 to +12</p>\r\n\r\n<p>+ Split Function</p>\r\n\r\n<p>+ Bahan - Wood PVC</p>\r\n\r\n<p>+ Dual Tone</p>\r\n\r\n<p>+ Chord Function</p>\r\n\r\n<p>+ DC Power, Audio In/Out, MIDI, Headphone, Sustain Pedal</p>\r\n', 'produk1699929146.jpg', 1, '2023-11-14 02:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(5, 'lenggo', '$2y$10$Lyo3IJs2qywKX3SEwkVE1.uz4g6bM3xeF/4S3taDmvLm28dof/t2C'),
(6, 'hersa', '$2y$10$aX3aSnYGSxUBnAlvh6oJ8uMUJomPHEEFq8XwCwGNf4DJ7japr6H32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `tb_keranjang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_product` (`product_id`),
  ADD CONSTRAINT `tb_keranjang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
