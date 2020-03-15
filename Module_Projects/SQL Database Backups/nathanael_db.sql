-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2013 at 09:31 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nathanael_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_table`
--

CREATE TABLE IF NOT EXISTS `member_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membername` varchar(256) NOT NULL,
  `memberpassword` varchar(256) NOT NULL,
  `memberdescription` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `member_table`
--

INSERT INTO `member_table` (`id`, `membername`, `memberpassword`, `memberdescription`, `date`) VALUES
(1, 'nathanaelhp@yahoo.com', '1180f80a198a58510cd7f73bc0943287', 'A human.', '2013-09-07 12:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `newscomments_table`
--

CREATE TABLE IF NOT EXISTS `newscomments_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `sender` varchar(256) NOT NULL,
  `comment` text NOT NULL,
  `allowed` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `newscomments_table`
--

INSERT INTO `newscomments_table` (`id`, `newsid`, `date`, `sender`, `comment`, `allowed`) VALUES
(1, 3, '2013-06-04 11:57:04', 'nathanaelhp@yahoo.com', 'Wow, aku mau komputer itu, keren! (Tapi harganya nggak keren bro! Murahin dikit dong!)', 0),
(2, 2, '2013-06-04 12:08:45', 'nathanaelhp@yahoo.com', 'Wah, sekarang udah ada tangan bionik kaya ginian. Pasti 10 tahun ke depan udah ada Iron Man ya? :P', 0),
(3, 2, '2013-06-07 09:36:17', 'justsomecuriousguy@gmail.com', 'Waduh, pasangnya gimana tuh?', 0),
(10, 3, '2013-09-07 10:49:44', 'gamernhp@youtube.com', 'Bisa buat gaming nggak ya? Rasanya nggak bisa deh.', 0),
(11, 4, '2013-09-07 10:51:33', 'nathanaelhp@nationalgeographic.com', 'I want to buy that l33t cam!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_table`
--

CREATE TABLE IF NOT EXISTS `news_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `synopsis` text NOT NULL,
  `detail` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`id`, `title`, `image`, `synopsis`, `detail`, `date`) VALUES
(1, 'Kisah Bayi-bayi Merana di Sekitar Ibu Kota  ', 'baby.jpg', 'TEMPO.CO, Jakarta -– Nasib bayi-bayi yang tak tertolong sungguh sangat mengenaskan. Apalagi, mereka sebenarnya sudah berada di rumah sakit. Nyawa mereka melayang hanya karena rumah sakit penuh atau orang tuanya tak mampu membayar uang muka.', 'TEMPO.CO, Jakarta -– Nasib bayi-bayi yang tak tertolong sungguh sangat mengenaskan. Apalagi, mereka sebenarnya sudah berada di rumah sakit. Nyawa mereka melayang hanya karena rumah sakit penuh atau orang tuanya tak mampu membayar uang muka.  \r\n"Ini pembangkangan terhadap program jaminan kesehatan dan tak ada kreativitas dari rumah sakit guna menyelamatkan nyawa manusia," kata Sekretaris Jenderal Komisi Nasional Perlindungan Anak, Samsul Ridwan, Kamis, 21 Februari 2013.\r\nSamsul geram terhadap para pengelola rumah sakit di Ibu Kota, yang menolak menangani bayi sakit dari keluarga miskin karena tak ada jaminan biaya operasi. Dia merujuk pada kasus Zara Naven, bayi berusia 3 bulan, di Rumah Sakit Harapan Kita.\r\nZara meninggal karena tak kunjung dioperasi pada Selasa lalu. Orang tua Zara mengaku dimintai jaminan oleh rumah sakit tersebut. "Rumah sakit tak sepatutnya mempermasalahkan biaya untuk menyelamatkan seorang bayi yang perlu ditangani segera," kata Samsul.\r\nKisah Zara berawal dari besarnya biaya operasi yang harus ia jalani, yakni sebesar Rp 200 juta. Dia divonis mengidap kelainan jantung bawaan.\r\nOrang tua Zara, pasangan Herman Hidayat, 25 tahun, dan Prefti, 23 tahun, tak mampu membayar biaya operasi sebesar itu. Plafon dana Jaminan Kesehatan Daerah (Jamkesda) yang mereka terima dari Pemerintah Kota Depok hanya Rp 110 juta. Jumlah itu pun sudah berkurang. "Saya tidak ada uang untuk menutupi kekurangan biaya," kata Prefti, di rumahnya, Rabu lalu.\r\nSelama 40 hari, Zara dirawat di ruang Intensive Care Unit RS Harapan Kita dan tak kunjung sembuh. Biaya pengobatan selama itu telah menghabiskan plafon dana Jamkesda sebesar Rp 60 juta.\r\nDugaan bahwa kematian Zara terjadi akibat masalah uang diungkapkan oleh Anah, nenek bayi itu. Menurut dia, cucunya sudah tiga kali dijadwalkan menjalani operasi. "Tapi rumah sakit belum mengizinkan karena tidak ada jaminan. Sampai akhirnya Zara meninggal," kata dia sedih.\r\nKepala Bidang Medik RS Harapan Kita, Basuni Radi, membantah tudingan bahwa Zara tidak dioperasi karena pihak keluarga tidak menyerahkan uang jaminan. Menurut dia, operasi terhadap Zara tak bisa dilakukan akibat infeksi paru-paru yang diderita Zara. "Infeksi itu membuat kondisi bayi terlalu lemah untuk dioperasi. Risikonya semakin tinggi," ujarnya kemarin.\r\nKekecewaan atas pelayanan rumah sakit juga terungkap dalam kasus kelahiran bayi prematur di Rumah Sakit Bersalin Kartini, Jakarta Selatan, Rabu lalu. Bayi itu dinyatakan meninggal dan dibungkus dengan kain. Padahal, nyatanya anak itu masih hidup.\r\nBegitu dibawa kembali ke rumah sakit dalam kondisi gawat—badan bayi itu membiru setelah dibawa orang tuanya dengan sepeda motor—pihak rumah sakit malah sempat meminta uang muka Rp 15 juta untuk biaya perawatan sang bayi. "Saya bahkan diminta ke rumah sakit lain," kata Ali Zuar, orang tua si bayi.\r\nSetelah negosiasi dilakukan, pihak rumah sakit akhirnya kembali merawat bayi itu. Namun, tak lama kemudian, pada malam harinya, anak itu mengembuskan napas terakhirnya. Kali ini, bayi tersebut benar-benar dinyatakan meninggal.\r\nDirektur RS Bersalin Kartini, Elmira Suksmawati, membantah tudingan bahwa pihaknya sempat meminta uang muka. Bahkan, dia mengaku sudah menghubungi rumah sakit lain sebagai rujukan. "Bayi tersebut butuh NICU, sedangkan kami tidak punya," katanya.\r\nKasus itu mirip dengan yang dialami Dera Nur Anggraini. Bayi prematur yang membutuhkan operasi dan perawatan di ruang ICU itu ditolak oleh sembilan rumah sakit dengan alasan penuh dan ketiadaan uang muka. Putri penjual kaus kaki di pasar malam itu meninggal pada Sabtu lalu.\r\nKetua Yayasan Pemberdayaan Konsumen Kesehatan Indonesia, Marius Wijayarta, menilai maraknya kasus penolakan rumah sakit terhadap warga tidak mampu merupakan dampak buruknya sistem penganggaran kesehatan dan jaminan sosial selama ini. "Dari pusat sampai daerah, pelayanan rumah sakit kacau-balau," katanya.\r\nMarius mencontohkan, pemerintah—selain berperan sebagai kuasa pengguna anggaran—bertindak sebagai penyelenggara dan tim pemantau. "Mereka semua yang menjalankan," ujarnya. Simak tragis dan tangis bayi di Jakarta dan sekitarnya.\r\nFIRMAN HIDAYAT | ILHAM TIRTA | ANGGRITA DESYANI | IRFAN ABDUL GANI | NURHASIM', '2013-02-22'),
(2, 'Tangan Buatan Seperti Alami Akan Segera Terwujud', 'bionichand.jpg', 'Oleh Charles Q. Choi, Kontributor TechNewsDaily | LiveScience.com\r\n\r\nSebuah tangan bionik (tangan buatan) baru dan lebih baik akan mampu mengembalikan ketangkasan orang-orang yang diamputasi, kata para peneliti. Tangan bionik itu saat ini sedang dalam tahap pengembangan.', 'Oleh Charles Q. Choi, Kontributor TechNewsDaily | LiveScience.com\r\n\r\nSebuah tangan bionik (tangan buatan) baru dan lebih baik akan mampu mengembalikan ketangkasan orang-orang yang diamputasi, kata para peneliti. Tangan bionik itu saat ini sedang dalam tahap pengembangan.\r\n\r\nDalam beberapa tahun terakhir, banyak tangan bionik yang tersedia bagi para penyandang cacat. Namun, survei menunjukkan, hingga 50 persen para penyandang cacat tidak menggunakan tangan buatan tersebut cukup sering, karena buruknya fungsi, penampilan, dan pengendalian tangan buatan tersebut.\r\n\r\nJadi, untuk meningkatkan jumlah kelenturan dan sensasi tangan bionik tersebut, para ilmuwan beralasan bahwa mereka bisa menggunakan tampilan yang menghubungkan tangan dengan sistem saraf, berpotensi memungkinkan kontrol intuitif dan umpan balik sensor yang realistis. \r\n\r\n“Impian kami adalah agar ‘Luke Skywalker’ mendapatkan kembali tangannya dengan fungsi normal,” kata Silvestro Micera kepada TechNewsDaily, merujuk ke pahlawan di “Star Wars” yang mendapatkan tangan buatan setelah tangan aslinya terputus.\r\n\r\nMicera adalah kepala laboratorium rekayasa saraf di Swiss Federa Institute of Technology di Lausanne, Swiss, yang merupakan salah satu pihak yang terlibat dalam pengembangan tangan bionik baru tersebut.\r\n\r\nDalam percobaan klinis selama empat pekan, Silvero dan koleganya menemukan bahwa mereka bisa meningkatkan umpat balik sensorik seorang penyandang cacat yang diterima dari alat bionik dengan menggunakan elektroda yang ditanamkan ke dalam saraf median dan tulang hasta di lengan dekat ujung tangan yang diamputasi. Alat tersebut membantu orang tersebut merasakan sentuhan.\r\n\r\nSelain itu, para peneliti menganalisis aktivitas saraf motorik dari urat syaraf, sinyal yang digunakan untuk membantu mengontrol otot. Mereka menemukan bahwa mereka bisa memancing keluar sinyal yang berhubungan untuk membantu mengendalikan tangan palsu yang ditempatkan di dekat penyandang cacat tetapi tidak melekat secara fisik pada lengan orang tersebut. Dengan kata lain, sangat mungkin mengembangkan tangan buatan yang dapat mengirim sinyal ke dan merespons data dari otak.\r\n\r\n“Kita berada di titik puncak dalam memberikan solusi klinis baru dan lebih efektif untuk para penyandang cacat di tahun-tahun mendatang,” kata Silvero.\r\n\r\nMilcera dan rekan-rekannya juga mengumumkan uji klinis baru yang akan segera menghubungkan tangan buatan secara langsung ke pasien sebagai bagian dari proyek NEMESIS dari Kementerian Kesehatan Italia. Mereka berharap untuk lebih memperbaiki umpan balik sensoris dan kontrol penuh bionik dengan cara tersebut.\r\n\r\nMasalah utamanya adalah, listrik dari elektroda dapat membuat sel-sel meradang, serta memaksa tubuh untuk menumbuhkan jaringan di sekitar elektroda yang menghambat sinyal ke dan dari tangan bionik. Micero menyarankan obat atau pelapis pada elektroda yang dapat membantu mencegah peradangan seperti itu.\r\n\r\nTangan alami biasanya memiliki 22 derajat (gerak) kebebasan, yang berarti mereka dapat melentur dalam 22 arah yang berbeda — misalnya, mereka dapat meregangkan jari. Sementara 22 derajat gerakan bebas tersebut tidaklah mungkin terwujud dengan tangan palsu, empat atau lima tugas menggenggam dengan cara yang berbeda saja sudah bisa sangat membantu, kata Silvero.\r\n\r\nDi masa depan, tangan buatan dapat terhubung tidak hanya dengan saraf di pinggiran sistem urat saraf, seperti pada lengan, tetapi juga terhubung dengan sumsum tulang belakang. “Sebuah solusi hibrida yang menggabungkan kedua pendekatan mungkin dapat menjadi cara untuk mendapatkan solusi tersebut,” kata Silvero.\r\n\r\nPenelitian di masa depan juga memungkinkan para penyandang cacat siap untuk menggunakan tangan bionik yang mungkin terasa seperti mengenakan eksperimen realitas virtual yang bisa membantu mereka merekonstruksi gambaran tubuhnya. “Dalam jangka waktu menengah, kami ingin melakukan eksperimen realitas virtual untuk pelatihan pasien,” kata Micera.\r\n\r\nNamun, masih banyak pekerjaan yang harus dilakukan sebelum tangan buatan mampu berfungsi layaknya tangan alami. “Saya pikir tangan Luke Skywalker ini mungkin baru bisa rampung 20 atau 30 tahun lagi, bahkan mungkin lebih,” kata Silvero.\r\n\r\nPara ilmuwan baru-baru ini merinci temuan mereka pada pertemuan tahunan American Association for the Advancement of Science di Boston.', '2013-02-22'),
(3, 'Pixel, Chromebook Google Termahal, Diluncurkan', 'chromebook.jpg', 'TEMPO.CO, California - Google meluncurkan Chromebook terbarunya, Pixel, di sebuah acara pers di San Francisco, California, Kamis. Pixel dilengkapi layar kaca, layar resolusi tinggi, dan dihargai US$ 1.000.', 'TEMPO.CO, California - Google meluncurkan Chromebook terbarunya, Pixel, di sebuah acara pers di San Francisco, California, Kamis. Pixel dilengkapi layar kaca, layar resolusi tinggi, dan dihargai US$ 1.000.\r\nIni adalah upaya terbaru Google untuk membuat Chrome lepas landas. "Pixel menaikkan level Chromebooks dengan hardware baru dan target pengguna serius," kata wakil presiden senior untuk Chrome, Sundar Pichai.\r\n"Kami ingin merancang sesuatu yang sangat high end dan premium bagi pengguna serius, mereka yang sangat, sangat menuntut terhadap laptop mereka," ujar Pichai kepada Bloomberg BusinessWeek.\r\nPixel memiliki prosesor Intel Core i5 dan penyimpanan internal yang terbatas. Gagasan di balik Chromebooks adalah bahwa konsumen akan menggunakan produk online Google dan bergantung sepenuhnya pada sistem berbasis cloud.\r\nPada dasarnya, Chromebooks hadir dengan sebuah peramban Web. Tanpa Microsoft Office atau Outlook, pengguna Chromebook akan menggunakan Google Docs dan Gmail.\r\nTingginya harga Pixel juga karena spesifikasi di luar prosesor. Pixel memiliki 4,3 juta piksel - lebih dari dua kali lipat piksel pada TV HD 1080p.\r\nPichai mengatakan hal itu akan menyebabkan konsumen tidak akan beralih ke layar lain. "Layar 12,85 incinya memiliki rasio 3:2 (agak tinggi untuk laptop) dan itu terbuat dari kaca," ujarnya.\r\nBagi mereka yang khawatir tidak akan bisa membuka dokumen Word lagi, Google berencana untuk menyediakan versi baru dari Quickoffice. Google membeli Quickoffice tahun lalu untuk memastikan file Google kompatibel dengan Microsoft Office.\r\nPixel juga dilengkapi dengan casing aluminium, tiga mikrofon, sekrup tersembunyi dan ventilasi. Google memberikan setiap pengguna Pixel ruang gratis 1TB untuk tiga tahun pertama.\r\nMeskipun demikian, Pixel juga mendapat banyak kritik. "Pixel terlalu mahal," kata Sam Biddle dari Gizmodo. Sementara kontributor Forbes, Daniel Nye Griffiths, mengatakan," Karena Pixel ditujukan untuk pengembang, tidak ada alasan untuk membelinya." Simak berita teknologi lainnya di sini.\r\nCSMONITOR | ERWIN Z', '2013-02-23'),
(4, 'Panasonic Lumix DMC-GF5 yang Lebih Akurat', 'lumixgf5.jpg', 'Saat diluncurkan tahun lalu, Panasonic Lumix GF3 cukup diminati karena ukurannya yang mungil dan desain cantik. Melanjutkan keberhasilan kamera Micro Four Third (MFT) Panasonic Lumix GF3, Panasonic secara resmi mengumumkan kehadiran generasi terbaru dari Panasonic GF-series yaitu Panasonic Lumix DMC-GF5.', 'Saat diluncurkan tahun lalu, Panasonic Lumix GF3 cukup diminati karena ukurannya yang mungil dan desain cantik. Melanjutkan keberhasilan kamera Micro Four Third (MFT) Panasonic Lumix GF3, Panasonic secara resmi mengumumkan kehadiran generasi terbaru dari Panasonic GF-series yaitu Panasonic Lumix DMC-GF5. Dari tampilannya, Panasonic Lumix DMC-GF5 sekilas hampir serupa dengan Panasonic Lumix DMC-GF3. Ukuran tidak menyusut, tapi faktor ergonomi lebih sempurna. Pegangan tangan (hand grip) baru yang memberi kenyamanan lebih dapat ditemukan di sini. GF5 juga dilengkapi layar sentuh LCD 3 inci yang memiliki tingkat kepadatan pixel lebih tinggi dari Panasonic Lumix DMC-GF3 yaitu sebesar 920.000 dot.\r\n\r\nBeberapa perbaikan lain dapat ditemukan di sisi software, termasuk perbaikan pada tampilan yang kini lebih sederhana agar lebih mudah dioperasikan. GF5 juga menggunakan sensor Live MOS terbaru dengan resolusi yang sama seperti GF3 yaitu 12.1 megapixel. Prosesor gambar Venus Engine juga menghasilkan hasil foto yang lebih baik.\r\n\r\nPerbaikan teknologi yang diusungnya juga merambat ke sektor kinerja. Panasonic Lumix DMC-GF5 kini menjanjikan akurasi fokus lebih baik yang dapat digunakan untuk menentukan area fokus hingga pada area 1 pixel dan sistem auto fokus yang sangat cepat yaitu sekitar 0,09 detik. Untuk membantu Anda menangkap momen di kondisi kurang cahaya, terdapat teknologi 3DNR (3D Noise Reduction) dan MNR (Multi Noise Reduction) yang akan mengoptimalkan pemrosesan area gelap-terang pada gambar dengan lebih sempurna dan memproduksinya dengan hasil gambar yang minim gangguan meski menggunakan ISO tinggi.\r\n\r\nSelain dapat digunakan untuk mengambil foto, kamera ini juga mampu merekam video yang dapat digunakan untuk merekam video Full HD 1080p pada 30 bingkai per detik (fps). Bagi yang suka berkreasi dengan efek-efek unik, tersedia 14 pilihan filter seperti Soft Focus, Dynamic Monochrome, Impressive Art, One Point Color, Cross Process dan Star Filter. Selain itu, disertakan juga fitur scene mode yang hadir dalam 23 pilihan scene berbeda dengan dukungan 23 contoh foto dari fotografer profesional.\r\n\r\nPanasonic Lumix DMC-GF5 akan dijual seharga sekitar $ 749.99 (termasuk lensa Lumix X 14-42mm Power Zoom) dalam tiga pilihan warna berbeda yaitu hitam, putih dan merah. Sayangnya, belum ada kabar kapan kamera ini akan hadir di Indonesia. \r\n\r\n\r\nSekilas spesifikasi Panasonic Lumix DMC-GF5:\r\nSensor: CMOS 12.1 Megapixel\r\nUkuran sensor: 4/3 (Micro Four Thirds)\r\nProsesor: Venus Engine FHD\r\nLayar: Layar sentuh LCD berukuran 3-inci, 960.000 dot\r\nAutofocus: Contrast detect, multi-area, selective single-point, tracking, single, continuos, touch, face detection, live view\r\nVideo: Full HD 1080p, 30fps\r\nScene mode: 23 Scene\r\nFilter: 14 Efek Filter\r\nDimensi: 108x67x37 mm\r\nBobot: 267 gram\r\n\r\nKristian Tjahjono, kontributor situs teknologi konsumen yangcanggih.com. Antusias terhadap berbagai jenis gadget, mulai dari komputer, ponsel, sampai kamera digital.', '2012-04-24'),
(5, 'PS4 Dukung Layar 4K', 'ps4.jpg', 'Ghiboo.com - Konsol game terbaru Sony yang baru saja diumumkan, PlayStation 4, dipastikan mampu mendukung TV dengan resolusi 4K.', 'Ghiboo.com - Konsol game terbaru Sony yang baru saja diumumkan, PlayStation 4, dipastikan mampu mendukung TV dengan resolusi 4K.\r\n\r\nSeperti diketahui, 4K adalah resolusi Ultra High-Definition yang jauh lebih tajam dibanding TV Full HD.\r\n\r\nDikutip dari Ubergizmo, Jumat (22/2), kemampuan ini ternyata hanya berlaku saat pengguna melakukan video streaming. Di Amerika Serikat sendiri layanan streming 4K baru akan tersedia beberapa tahun ke depan.\r\n\r\nSoal bermain game, PS4 belum mampu mendukung hingga resolusi 4K 3840x2160. Padahal dengan resolusi setinggi itu gamer bisa dibuat meleleh melihat grafik game yang super tajam dan sangat luar biasa.\r\n\r\nNampaknya 8-core CPU dan RAM 8GB belum mampu membuat PS4 mengimbangi teknologi layar TV terbaru. Kita tunggu saja seperti apa kemampuan grafik dari penerus PS3 ini saat dirilis akhir 2013 mendatang.', '2013-02-22'),
(6, 'PS4 Bisa Mainkan Game Bekas', 'killzone.jpg', 'Ghiboo.com - Kabar soal PlayStation 4 tak bisa memainkan game bekas atau seken nampaknya tak akan menjadi kenyataan.', 'Ghiboo.com - Kabar soal PlayStation 4 tak bisa memainkan game bekas atau seken nampaknya tak akan menjadi kenyataan.\r\n\r\nDikutip dari Ubergizmo, Jumat (22/2), saat acara pengumuman PS4 di New York, AS, beberapa waktu yang lalu, Sony memastikan tak akan memblokir game bekas.\r\n\r\nInformasi ini disampaikan langsung oleh bos dari Sony Worldwide Studio, Shuhei Yoshida saat menjawab pertanyaan dari Eurogamer.\r\n\r\nKabar baik tentunya bagi mereka yang menantikan kehadiran PS4. Pasalnya, tak dapat dipungkiri game bekas menjadi solusi bagi mereka yang punya dana terbatas namun tetap ingin memainkan versi original.', '2013-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(256) NOT NULL,
  `userpassword` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `userpassword`, `date`) VALUES
(1, 'nathanaelhp', '5f4dcc3b5aa765d61d8327deb882cf99', '2013-12-20 13:02:00'),
(2, 'admin', '63a9f0ea7bb98050796b649e85481845', '2013-12-21 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
