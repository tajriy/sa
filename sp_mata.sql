-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2017 at 08:04 
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_mata`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` char(3) NOT NULL DEFAULT '',
  `nm_gejala` varchar(100) DEFAULT NULL,
  `pertanyaan` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `nm_gejala`, `pertanyaan`) VALUES
('G01', 'Kepala Pusing', 'apakah anda merasakan pusing di daerah kepala ?'),
('G02', 'Peglihatan Kabur', 'apakah anda merasakan kabur saat melihat sesuatu ?'),
('G03', 'Mata Mudah Lelah', 'apakah mata anda mudah lelah saat menatap sesuatu dalam waktu yang lama ?'),
('G04', 'Mata Berair / Berlebihan', 'apakah anda pernah merasakan mata anda berair secara berlebihan ?'),
('G05', 'Sering Mengucek', 'apakah anda sering mengucek mata ?'),
('G06', 'Silau Melihat Cahaya', 'apakah anda merasakan silau saat melihat ke arah cahaya ?'),
('G07', 'Mata Memerah', 'apakah mata anda pernah berubah menjadi merah ?'),
('G08', 'Kesulitan membaca', 'apakah anda merasa sulit dalam membaca tulisan ?'),
('G09', 'Sakit Kepala Saat Fokus Melihat Objek', 'apakah anda merasakan sakit di bagian kepala saat fokus melihat sebuah objek ?'),
('G10', 'Menyipitkan Mata Saat melihat Benda Jauh', 'apakah anda pernah menyipitkan mata saat akan melihat benda yang jauh ?'),
('G11', 'Mata Pedih', 'Apakah mata anda terasa pedih?'),
('G12', 'Sensitif Terhadap Cahaya', 'Apakah mata anda terasa silau, ketika melihat cahaya?'),
('G13', 'Mata Gatal', 'Apakah mata anda terasa gatal?'),
('G14', 'Mata Terasa Mengganjal', 'apakah anda merasakan pada bagian mata terasa ada yang mengganjal ?'),
('G15', 'Mata Nyeri', 'apakah anda pernah merasakan nyeri pada bagian mata ? '),
('G16', 'Ketegangan Mata', 'apakah anda pernah merasakan tegang pada bagian mata anda ?'),
('G17', 'Sulit Melihat Cahaya / Lampu Malam / Gelap', 'apakah anda sulit melihat dalam keadaan gelap ?'),
('G18', 'Pandangan Seperti Awan Tertutup', 'apakah anda pernah merasakan pandangan seperti ditutupi oleh awan ?'),
('G19', 'Mata Terasa Sakit', 'apakah anda pernah merasakan sakit pada daerah bagian mata ?'),
('G20', 'Pandangan Seperti Melihat Cahaya Mengkilap', 'apakah anda pernah merasakan pandangan seperti melihat cahaya mengkilap ?'),
('G21', 'Kesulitan Membuka Kelopak Mata', 'apakah anda pernah kesulitan membuka kelopak mata setelah bangun tidur ?'),
('G22', 'Penglihatan Menurun', 'apakah anda merasakan penglihatan anda semakin menurun ?'),
('G23', 'Mata Iritasi', 'apakah anda mengalami iritasi pada bagian mata ?'),
('G24', 'Mual atau Muntah', 'apakah anda pernah merasa mual atau muntah akhir-akhir ini ?'),
('G25', 'Penglihatan Makin Menyempit', 'apakah akhir-akhir ini anda merasa jika penglihatan anda semakin menyempit ?'),
('G26', 'Tekanan Mata Tinggi', 'apakah anda pernah merasakan tekanan tinggi pada mata anda ?'),
('G27', 'Tidak Bisa Melihat', 'apakah anda pernah merasakan tidak bisa melihat ?'),
('G28', 'Ada Benjolan Terkadang Disertai Rasa Sakit', 'apakah anda memiliki benjolan di sekitar mata yang terkadang disertai dengan rasa sakit ?'),
('G29', 'Mata Kotor', 'apakah mata anda sering terasa kotor ?'),
('G30', 'Kelopak Mata Membengkak', 'apakah anda pernah mengalami pembengkakan pada daerah kelopak mata ?'),
('G31', 'Terkadang Ada disertai Filex', 'apakah anda pernah mengalami filex ?'),
('G32', 'Kelopak Mata Merekat', 'apakah anda merasakan kelopak mata anda lengket dikarenakan kotoran mata ?');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kd_penyakit` char(3) NOT NULL,
  `nm_penyakit` varchar(60) NOT NULL,
  `penyebab` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `photo` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kd_penyakit`, `nm_penyakit`, `penyebab`, `keterangan`, `photo`, `solusi`) VALUES
('P01', 'Miopia', 'Miopia terjadi ketika bola mata terlalu panjang, relatif terhadap kekuatan fokus kornea dan lensa mata. Hal ini menyebabkan fokus cahaya yang masuk jatuh pada titik di depan retina, padahal mata normal mengharuskan bayangan jatuh tepat dipermukaan retina.', '-', 'mata-normal-dan-mata-miopia.jpg', 'Rabun jauh atau mata minus dapat dikoreksi dengan kacamata, lensa kontak atau bedah refraktif. Apapun yang akan dilakukan tujuannya adalah sama, yaitu agar bayangan objek atau cahaya jatuh tepat dipermukaan retina. Jika yang digunakan adalah kata mata atau lensa kontak, maka membutuhkan lensa yang negatif (makanya disebut dengan mata minus) atau konkaf (lensa cekung) agar cahaya jatuh lebih jauh, berbeda dengan lensa cembung (konveks) yang membuat cahanya mengumpul dan jatuh lebih dekat, maka dari itu lensa cembung digunakan untuk rabun dekat (mata plus) dan sebaliknya lensa cekung digunakan untuk rabuh jauh (mata minus).'),
('P02', 'Hipermetropia', 'penyebab rabut dekat karena kornea yang datar. rabun dekat dapat terjadi ketika cahaya yang masuk tidak bisa difokuskan dipermukaan retina dan saat cahaya tersebut difokuskan malah dibelakang retina.', 'Hipermetropi atau rabun dekat adalah kelainan refraksi mata di mana bayangan dari sinar yang masuk ke mata jatuh di belakang retina. Hal ini dapat disebabkan karena bola mata yang terlalu pendek atau kelengkungan kornea yang kurang.Penderita kelainan mata ini tidak dapat membaca pada jarak yang normal (30 cm) dan harus menjauhkan bahan bacaannya untuk dapat membaca secara jelas.', 'images.jpg', '- Menggunakan Kacamata atau lensa kontak. Mengguanakan Lensa Cembung atau Konveks.\r\n- Memberi Penerangan yang cukup saat membaca atau bekerja dengan melihat objek-objek yang dekat, beristirahat mata anda setelah sekian lama membaca atau bekerja.'),
('P03', 'Astigmatisma', 'Astigmatisma disebabkan seringnya menggosok mata dengan keras atau penyakit kornea mata dan cacat optik di mana penglihatan kabur karena ketidakmampuan optik mata untuk fokus benda titik menjadi gambar terfokus tajam pada retina.', 'Astigmatisma adalah sebuah gejala penyimpangan dalam pembentukkan bayangan pada lensa, hal ini disebabkan oleh cacat lensa yang tidak dapat memberikan gambaran/ bayangan garis vertikal dengan horizotal secara bersamaan. Astigmatisma adalah cacat optik di mana penglihatan kabur karena ketidakmampuan optik mata untuk fokus benda titik menjadi gambar terfokus tajam pada retina.', '112.jpg', '- Penggunaan lensa korektif dapat membantu memfokuskan cahaya yang menerpa kornea mata penderita astigmatisme yang memiliki lengkungan atau permukaan tidak rata.\r\n- Konsultasikan jenis pengobatan astigmatisme yang ada dengan dokter Anda sebelum menentukan pengobatan yang sesuai dengan jenis astigmatisme yang dimiliki.\r\n- Pengobatan astigmatisme yang menggunakan bantuan sinar laser bertujuan memperbaiki jaringan pada kornea mata yang tidak melengkung seperti seharusnya. Jaringan sel terluar yang ada pada permukaan kornea akan diangkat terlebih dulu sebelum sinar laser digunakan untuk mengubah bentuk kornea dan memulihkan kemampuan mata memfokuskan cahaya.\r\n'),
('P04', 'Presbiopia', 'Presbiopia disebabkan oleh proses yang berkaitan dengan usia.  Presbiopia umumnya berasal dari penebalan bertahap dan hilangnya fleksibilitas lensa alami di dalam mata.', 'Presbiopi adalah istilah untuk kondisi mata manusia yang kehilangan kemampuan secara bertahap untuk fokus pada objek jarak dekat. Presbiopi juga merupakan salah satu hal yang akan dirasakan manusia sebagai bagian dari proses penuaan tubuh secara alami.\r\nBiasanya seseorang baru menyadari menderita presbiopi saat dirinya harus merentangkan lengan agar bisa membaca buku atau koran, atau ketika melihat ponselnya. Namun, ada beberapa faktor yang memperbesar risiko seseorang mengidap presbiopi, yaitu: Uisa, Obat-obatan dan Kondisi medis lainnya.', 'a.jpg', '- Kacamata. Penggunaan kacamata adalah cara sederhana dan aman untuk menangani presbiopia. Jika kacamata baca biasa tidak bisa menangani, pasien mungkin akan diresepkan kacamata berlensa khusus untuk presbiopia.\r\n- Lensa Kontak. \r\n- Bedah Refraktif. bertujuan untuk mengubah bentuk kornea mata untuk meningkatkan penglihatan jarak dekat. Namun, pasien tetap membutuhkan kacamata usai pembedahan untuk aktivitas yang membutuhkan penglihatan jarak dekat.\r\n- Implan Lensa. lensa mata penderita akan diganti dengan lensa mata sintetis. Umumnya, pasien yang memilih prosedur ini pernah menjalani pembedahan LASIK sebelumnya.\r\n- Inlay Kornea. Dokter akan memasukkan ring plastik kecil di sudut setiap kornea mata untuk mengubah lengkungannya. Risiko inlay kornea lebih kecil jika dibandingkan tindakan pembedahan mata lainnya.'),
('P05', 'Katarak', 'Katarak merupakan sebuah penyakit yang menyebabkan lensa mata menjadi keruh dan menyebabkan penglihatan berkurang atau kebutaan. Penyakit ini bisa mengganggu berbagai aktifitas karena mata tidak bisa melihat dengan baik dan lebih parah pada malam hari. Ka', 'Katarak adalah bagian keruh pada lensa mata yang biasanya bening dan akan mengaburkan penglihatan. Katarak tidak menyebabkan rasa sakit dan termasuk penyakit yang sangat umum terjadi.\r\nLensa mata adalah bagian transparan di belakang pupil (titik hitam di tengah bagian mata yang gelap) yang berfungsi untuk memfokuskan cahaya pada lapisan retina. Dengan adanya katarak, kejernihan lensa mata berkurang dan cahaya yang masuk ke mata menjadi terhalang.', '', '- Kacamata dan lampu yang lebih terang mungkin bisa membantu katarak yang ringan. Meski demikian, katarak akan berkembang seiring waktu dan akhirnya penderita akan membutuhkan operasi.\r\n- Satu-satunya langkah pengobatan yang terbukti paling efektif adalah operasi. Efek penyembuhan dari operasi akan sangat signifikan, terutama bagi penderita dengan kondisi katarak yang sudah menghambat kegiatan sehari-hari.\r\n- Dalam operasi katarak, lensa yang keruh akan diangkat dan digantikan dengan lensa plastik bening. Operasi tersebut biasanya dilakukan dengan pembiusan lokal agar mata Anda menjadi mati rasa.\r\n- Pemakaian kacamata juga mungkin akan diperlukan untuk membantu penglihatan jauh atau dekat. Sama halnya jika Anda telah berkacamata, ukuran lensa bisa berubah. Disarankan untuk menunggu pemulihan sampai selesai sebelum membuat kacamata baru.\r\n'),
('P06', 'Aplasi Retina', 'Ablasi retina adalah sebuah kondisi yang menyebabkan lapisan penting dari jaringan pada retina mengalami penurunan sehingga posisinya lebih kebawah atau menarik ke dalam yang menyebabkan gangguan untuk pembuluh darah di daerah ini. Kondisi ini akan menyeb', ' Ablasio retina merupakan penyakit yang dapat menyebabkan kebutaan, karena terlepasnya retina dari perlekatan dengan lapian bawah, bahkan sebagian atau seluruhnya sehingga berdampak terputunya proses penglihatan.\r\n Kondisi Ablasio retina lebih umum terjadi pada pria dibanging wanita. Sedangkan tipe ablasio yang paling umum terjadi adalah tipe ablasio retina regmatogenosa. Sedangkan kan tipe lainnya adalah ablasio retina traksional dan ablasio retina eksudatif.\r\n', 'abs.jpg', '- segera datang ke  dokter ahli bidang  mata untuk segera mendaptkan pertolongan agar terhindar dari robekan yang yang berlanjut.\r\n- Perawatan yang biasanya dilakukan adalah operasi. Selama operasi, dokter mata Anda akan menutup lubang retina dan pasangmemasang kembali retina Anda. Operasi harus akan diawasi oleh ahli bedah mata yang berpengalaman, yang baik akan melakukan operasi sendiri atau mengawasi seorang ahli bedah yang lebih junior yang mungkin melakukan sebagian atau seluruh operasi.\r\n'),
('P07', 'Chalazion', 'Chalazion adalah benjolan pada kelopak mata atas atau bawah, tapi umumnya terjadi pada kelopak mata bagian atas. Kondisi ini merupakan tidak berfungsinya kelenjar meibom yang berada tepat di atas bulu mata. Kelenjar meibom adalah penghasil komponen lipid ', 'Kalazion adalah benjolan pada kelopak mata atas atau bawah, tapi umumnya terjadi pada kelopak mata bagian atas. Kondisi ini merupakan tidak berfungsinya kelenjar meibom yang berada tepat di atas bulu mata. Kelenjar meibom adalah penghasil komponen lipid yang membuat lapisan luar mata selalu basah dan lembap sehingga bola mata tidak kering dan iritasi.', 'khalazion.jpg', '- Kondisi ini jarang yang membutuhkan penanganan medis secara khusus. Sekitar 25 hingga 50 persen pengidap kalazion bisa sembuh dengan sendirinya dalam waktu dua minggu hingga enam bulan.\r\n- Kompres air hangat. Gunakan kain lembut yang telah dibasahi air hangat, lalu kompres kelopak mata Anda. Frekuensi kompres bisa tiga hingga empat kali sehari. Cara ini dapat mengurangi rasa mengganjal pada kelopak mata serta melembapkan permukaan benjolan.\r\n- Pijatan lembut setelah dikompres. Langkah ini untuk mengeluarkan cairan dari dalam benjolan. Jangan lupa untuk mencuci tangan Anda sebelum melakukan pemijatan. Anda juga bisa menggunakan cotton bud yang bersih.\r\n- Bersihkan kelopak mata. Lakukan setidaknya dua kali dalam sehari agar tidak ada penumpukan kotoran mata yang bisa memicu iritasi serta infeksi\r\n'),
('P08', 'Kongjivitas Alergi', 'Konjungtivitis adalah peradangan selaput yang meliputi bagian depan mata atau konjungtivas dan menyebabkan mata berwarna kemerahan dan biasanya menular.', '-', 'konjungtivitas alergi.jpg', '-'),
('P09', 'Kongjivitas Virus', '', '', '', ''),
('P10', 'Keratitis', 'Keratitis adalah peradangan atau inflamasi yang terjadi pada kornea mata. Cedera mata atau adanya infeksi merupakan penyebab utama pada keratitis.', '-', 'kerati.jpg', '- Jangan lupa untuk melepas lensa kontak sebelum Anda tidur atau berenang.\r\n- Merawat lensa kontak secara rutin dan seksama, misalnya mencuci tangan sebelum membersihkan lensa kontak, menggunakan produk-produk pembersih steril khusus untuk lensa kontak, serta jangan membersihkan lensa kontak dengan cairan yang sudah dipakai.\r\n- Pastikan Anda mengganti lensa kontak sesuai batas waktunya.\r\n- Hindari penggunaan obat tetes mata kortikosteroid, kecuali atas anjuran dokter.\r\n- Jangan lupa untuk mencuci tangan sebelum Anda menyentuh mata atau bagian sekitarnya. Terutama jika Anda mengidap luka akibat virus herpes.\r\n'),
('P11', 'Pterygium', 'Pterygium adalah kondisi mata yang ditandai dengan tumbuhnya selaput yang menutupi bagian putih pada bola mata. Kondisi ini dapat terjadi pada salah satu atau kedua mata sekaligus.', '-', 'glukoma.jpg', '- Anda dapat menghindari pajanan dari lingkungan di sekitar, seperti sinar matahari, asap, atau debu yang dapat memicu pterygium. Misalnya, dengan mengenakan kacamata hitam atau topi saat bepergian.\r\n- obat tetes mata yang mengandung steroid dan lubrikasi, dapat dilakukan untuk mencegah terjadinya inflamasi atau meringankan gejala.'),
('P12', 'Glukoma', 'Glaukoma adalah jenis gangguan penglihatan yang ditandai dengan terjadinya kerusakan pada saraf optik yang biasanya diakibatkan oleh adanya tekanan di dalam mata', '-', 'glukoma.jpg', '- Obat Tetes Mata. Umumnya obat tetes mata sering menjadi bentuk penanganan pertama untuk glaukoma yang disarankan oleh dokter . Obat tetes ini berguna melancarkan pembuangan cairan mata (aqueous humour) atau mengurangi produksinya.\r\nJenis Obat Tetes Mata :\r\n- Alpha-adrenergic agonists. Obat ini berfungsi meningkatkan aliran aqueous humour dan mengurangi produksinya. Efek samping yang mungkin saja terjadi setelah menggunakan alpha-adrenergic agonists adalah pembengkakan, gatal, dan merah pada mata, badan terasa lelah, mulut kering, hipertensi, dan detak jantung tidak teratur. Beberapa contoh obat ini adalah brimonidine dan apraclonidine.\r\n- Beta-blockers. Obat ini bekerja dengan cara memperlambat produksi aqueous humour guna mengurangi tekanan intraokular pada mata. Efek samping yang mungkin terjadi setelah mengonsumsi beta-blockers adalah mata terasa gatal, tersengat, atau panas. Mata juga bisa menjadi kering. Beberapa contoh obat ini adalah timolol, levobunolol hydrochloride, dan betaxolol hydrochloride.\r\n- Prostaglandin analogue. Obat ini mampu memperlancar pengaliran aqueous humour sehingga tekanan di dalam mata berkurang. Efek samping yang mungkin terjadi setelah mengonsumsi prostaglandin analogue adalah sakit, bengkak, dan merah pada mata, mata menjadi sensitif terhadap cahaya, mata menjadi kering, menggelapnya warna mata, pembuluh darah pada bagian putih mata menjadi bengkak, serta sakit kepala. Beberapa contoh obat ini adalah travoprost, bimatoprost, latanoprost, dan tafluprost.\r\n- Carbonic anhydrase inhibitors. Obat ini bekerja dengan cara mengurangi produksi aqueous humour sehingga tekanan di dalam mata berkurang. Efek samping yang mungkin terjadi setelah mengonsumsi carbonic anhydrase inhibitors adalah iritasi pada mata, mulut terasa pahit dan kering, serta mual. Beberapa contoh obat ini adalah dorzolamide dan brinzolamide.\r\n- Cholinergic agents atau miotic. Obat ini bekerja dengan cara meningkatkan pengaliran aqueous humour. Efek samping yang mungkin terjadi setelah mengonsumsi cholinergic agents atau miotic adalah penglihatan menjadi buram dan pupil mengecil. Salah satu contoh obat ini adalah pilocarpine.\r\n- Sympathomimetics.  Obat ini mampu memperlancar pengaliran aqueous humour sekaligus mengurangi produksinya. Efek samping yang mungkin terjadi setelah mengonsumsi sympathomimetics adalah nyeri dan merah pada mata. Salah satu contoh obat ini adalah brimonidine tartrate.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `kd_rules` char(4) NOT NULL,
  `jika` varchar(100) NOT NULL,
  `maka` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`kd_rules`, `jika`, `maka`) VALUES
('R001', 'G01 and G02 and G03 and G05 and G10', 'P01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `authKey` varchar(128) NOT NULL,
  `accessToken` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `authKey`, `accessToken`) VALUES
(2, 'test', '8cfff3c034ab00b49315b4f37507230d', 'test', 'test'),
(7, 'asrory', 'f2827c4bff70c200ea56def0b1fb7607', 'pU4EUuY9kj3GhzkEKVFVMTIl8bdh2a0U', 'asrory');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`kd_rules`),
  ADD KEY `kd_penyakit` (`jika`),
  ADD KEY `kd_gejala` (`maka`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
