-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 10:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `tgl`) VALUES
(606852050, 'Luncurkan Green Fund Digital Philantrophy 2.0, Greeneration Foundation Tampung Gagasan', '<p>Bandung, 10 Oktober 2022 -&nbsp;Hingga hari ini, laju kecepatan kerusakan lingkungan masih berjalan jauh lebih cepat dibandingkan kecepatan inovasi solusinya. Sudah banyak pihak, kelompok, organisasi dan lembaga yang memiliki ide, inovasi, program, teknologi, bahkan tim untuk mewujudkan penanganan perubahan iklim, namun terkendala untuk menjaga keberlanjutan program dan juga mempercepat serta meningkatkan solusi lingkungan karena adanya gap secara finansial.</p>\n\n<p><br />\nGap tersebut muncul karena faktanya, pemerintah Indonesia hanya mampu memenuhi 34% anggaran untuk perubahan iklim dari total kebutuhan yang mencapai 266.6 triliun rupiah. Menteri Keuangan Indonesia, Sri Mulyani bahkan terang-terangan menegaskan bahwa pemerintah tak mampu memenuhi anggaran perubahan iklim jika hanya mengandalkan APBN. Oleh karena itu, Indonesia membutuhkan stimulus pendanaan perubahan iklim dari sektor industri, masyarakat, bahkan lembaga internasional.</p>\n\n<p>Merespon fakta yang disampaikan pemerintah dan kondisi darurat perubahan iklim yang makin mendesak, Green Fund Digital Philanthropy (GFDP) berupaya menutup gap yang muncul dengan inisiatif menghimpun donasi publik untuk mendukung berbagai inisiatif solusi perubahan iklim. GFDP menghadirkan platform digital yang mewadahi masyarakat sehingga pelaku industri untuk bergotong royong lewat donasi publik. GFDP juga membawa misinya dengan kampanye 10.10.10. Kampanye ini menyuarakan 10 tahun ke depan sebagai dekade kritis untuk memulihkan bumi. Oleh karena itu GFDP menargetkan 10 juta masyarakat Indonesia untuk berdonasi setidaknya Rp10.000 per bulan sebagai bentuk kontribusi untuk menangani perubahan iklim.</p>\n\n<p>Konten ini telah tayang di Kompasiana.com dengan judul &quot;Luncurkan Green Fund Digital Philantrophy 2.0, Greeneration Foundation Tampung Gagasan Masyarakat tentang Perubahan Iklim Lewat Lomba Logo&quot;, Klik untuk baca:<br />\nhttps://www.kompasiana.com/greenerationid/63463ec008a8b50b045e8ad2/luncurkan-green-fund-digital-philantrophy-2-0-greeneration-foundation-tampung-gagasan-masyarakat-tentang-perubahan-iklim-lewat-lomba-logo</p>\n\n<p>Kreator: Greeneration Foundation</p>\n\n<p>Kompasiana adalah platform blog, setiap konten menjadi tanggungjawab kreator.</p>\n\n<p>Tulis opini Anda seputar isu terkini di Kompasiana.com</p>\n\n<p>Untuk mengoptimalkan layanan platform digital GFDP, Greeneration Foundation meluncurkan Green Fund Digital Philanthropy&nbsp;2.0. Peluncuran versi terbaru GFDP ini juga dibarengi pembukaan Lomba Logo 10.10.10 GFDP&nbsp;untuk melibatkan masyarakat dan tenaga ahli dalam membangun inisiatif ini. Peluncuran ini dilaksanakan secara daring pada 10 Oktober 2022. Kegiatan ini turut dihadiri oleh perwakilan Initial Funders GFDP seperti Muliandy Nasution sebagai Pengurus Yayasan Kemanusiaan KADIN, Arti Indallah Tjakranegara selaku VCA Country Engagement Manager, Yayasan Hivos dan Arifin Putra, aktor dan&nbsp;influencer yang telah mendukung pengembangan GFDP sejak awal. Sementara untuk rangkaian Lomba Logo 10.10.10 GFDP juga didukung oleh Arkadia Works, Asosiasi Desainer Grafis Indonesia (ADGI), Sembilan Matahari, dan Bandung Creative City Forum.</p>\n\n<p>Konten ini telah tayang di Kompasiana.com dengan judul &quot;Luncurkan Green Fund Digital Philantrophy 2.0, Greeneration Foundation Tampung Gagasan Masyarakat tentang Perubahan Iklim Lewat Lomba Logo&quot;, Klik untuk baca:<br />\nhttps://www.kompasiana.com/greenerationid/63463ec008a8b50b045e8ad2/luncurkan-green-fund-digital-philantrophy-2-0-greeneration-foundation-tampung-gagasan-masyarakat-tentang-perubahan-iklim-lewat-lomba-logo</p>\n\n<p>Kreator: Greeneration Foundation</p>\n\n<p>Kompasiana adalah platform blog, setiap konten menjadi tanggungjawab kreator.</p>\n\n<p>Tulis opini Anda seputar isu terkini di Kompasiana.com</p>\n\n<p>Mohamad Bijaksana Junerosano selaku Founder dari Greeneration Foundation menyampaikan urgensi inisiasi Green Fund Digital Philanthropy. &quot;Saat ini, kerusakan lingkungan kerusakan lingkungan yang terjadi saat ini cenderung lebih cepat dibandingkan usaha yang kita lakukan. Kita banyak belajar dari organisasi sejenis yang memiliki open donation sehingga kita membentuk platform ini lebih transparan dan inklusif untuk bisa dijangkau oleh banyak pihak, serta lebih spesifik untuk isu lingkungan dengan jumlah donasi awal yakni 10.000 rupiah saja setiap bulannya,&quot; ujarnya.</p>\n\n<p>Dukungan untuk GFDP sudah mengalir dari beberapa pihak, salah satunya adalah Yayasan Kemanusiaan KADIN. Muliandy Nasution, Pengurus Yayasan Kemanusiaan KADIN, menyampaikan bahwa dukungan KADIN untuk GFDP merupakan salah satu bentuk komitmen konkrit KADIN Indonesia untuk mempercepat restorasi lingkungan, khususnya dalam perubahan iklim.&nbsp;</p>\n\n<p>Konten ini telah tayang di Kompasiana.com dengan judul &quot;Luncurkan Green Fund Digital Philantrophy 2.0, Greeneration Foundation Tampung Gagasan Masyarakat tentang Perubahan Iklim Lewat Lomba Logo&quot;, Klik untuk baca:<br />\nhttps://www.kompasiana.com/greenerationid/63463ec008a8b50b045e8ad2/luncurkan-green-fund-digital-philantrophy-2-0-greeneration-foundation-tampung-gagasan-masyarakat-tentang-perubahan-iklim-lewat-lomba-logo</p>\n\n<p>Kreator: Greeneration Foundation</p>\n\n<p>Kompasiana adalah platform blog, setiap konten menjadi tanggungjawab kreator.</p>\n\n<p>Tulis opini Anda seputar isu terkini di Kompasiana.com</p>\n\n<p>Arti Indallah Tjakranegara dari HIVOS turut menyampaikan data yang memperkuat urgensi penggalangan dana publik untuk lingkungan. Berdasarkan riset yang dilakukan oleh OXFAM, penanganan perubahan iklim di Asia pada tahun 2020 membutuhkan USD 100-435 miliar. Sedangkan di tahun 2030, kita akan membutuhkan USD 1-1.8 triliun. Namun, pendanaan yang ada di dunia saat ini cukup sedikit dibandingkan yang kita butuhkan. Oleh karena itu, inisiatif GFDP dibutuhkan untuk menggalang dana lebih banyak dan menyebarkan dana tersebut lebih cepat ke komunitas lokal. Sehingga, kita bisa bersama-sama menangani perubahan iklim ini lebih cepat.</p>\n\n<p>Di kesempatan ini juga, Green Fund Digital Philanthropy meluncurkan Lomba Logo 10.10.10 GFDP, dengan tujuan menggalang keterlibatan masyarakat sedini mungkin. Lomba Logo 10.10.10 GFDP kali ini tidak hanya mencari desain logo yang terbaik, namun juga desain produk ramah lingkungan dan strategi kampanye serta komunikasi GFDP yang out of the box. Total hadiah yang akan didapatkan para pemenang lebih dari 30 juta rupiah. Greeneration Foundation akan membuka lomba dari 10 Oktober hingga 12 November 2022 di lombalogo101010.greeneration.org. Kamu juga bisa menonton ulang Sosialisasi Lomba Logo 10.10.10 GFDP di YouTube Greeneration Foundation.</p>\n\n<p>Konten ini telah tayang di Kompasiana.com dengan judul &quot;Luncurkan Green Fund Digital Philantrophy 2.0, Greeneration Foundation Tampung Gagasan Masyarakat tentang Perubahan Iklim Lewat Lomba Logo&quot;, Klik untuk baca:<br />\nhttps://www.kompasiana.com/greenerationid/63463ec008a8b50b045e8ad2/luncurkan-green-fund-digital-philantrophy-2-0-greeneration-foundation-tampung-gagasan-masyarakat-tentang-perubahan-iklim-lewat-lomba-logo</p>\n\n<p>Kreator: Greeneration Foundation</p>\n\n<p>Kompasiana adalah platform blog, setiap konten menjadi tanggungjawab kreator.</p>\n\n<p>Tulis opini Anda seputar isu terkini di Kompasiana.com</p>\n', '202211011429596360caf78d468.jpeg', '2022-11-01 14:29:59'),
(1082028761, 'ARTIKEL WEB DESAIN', '<p>Web Design adalah salah satu istilah tentang desain secara visual yang diterapkan kepada media digital yaitu website. Dimana hal ini juga berkaitan dengan apa itu web development, Karena pengembangan sebuah website tidak hanya menuntut fungsionalitas website tersebut, melainkan kita juga membutuhkan sebuah esensi seni yang disebut design. Kembali ke tujuan website tersebut dibuat. Tujuan dibuatnya sebuah website tidak lain dan tidak bukan adalah sebagai salah satu media komunikasi, dimana memang bertujuan untuk membuat atau menyampaikan informasi secara cepat dan realtime. Membuat desain pada sebuah website memerlukan kemampuan khusus dimana tidak semua orang bisa &nbsp;memberikan desain unik tanpa menghilangkan fungsi utama dari website tersebut. Seperti yang kita sendiri alami ketika mengunjungi sebuah website, saat mengunjungi sebuah website tentu yang pertama kali kita lihat adalah desain dari website itu sendiri, baik itu dari komposisi warna sampai tata letak. Seorang web desainer yang baik adalah mereka yang mengerti akan esensi warna dan memiliki perasaan dalam membayangkan sebagai pembaca atau pengunjung website. Misalnya saja dalam pemilihan warna. Seorang web designer perlu memperkirakan warna yang menarik namun tetap nyaman dipandang mata. Dan menghindari warna sejenis antara background dengan tulisan.</p>\r\n\r\n<p><a href=\"http://id.wikipedia.org/wiki/Web_Desain\" target=\"_blank\">Web Design</a>&nbsp;adalah proses merancang halaman web, situs web, Wweb atau aplikasi multimedia untuk Web. Memanfaatkan berbagai disiplin ilmu, seperti animasi,&nbsp;authoring, desain komunikasi, identitas korporat, desain grafis, interaksi manusia-komputer, arsitektur informasi, interaksi desain, pemasaran, fotografi, mesin pencari optimasi dan tipografi. Ada beberapa prinsip yang harus diperhatikan dalam membuat Web Design, diantaranya sebagai berikut :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Metaphore yaitu suatu penerapan prinsip &ndash; prinsip lama untuk digunakan pada suatu prinsip yang baru.</li>\r\n	<li>Clarity yaitu suatu prinsip dimana pembuatan web harus mempunyai tujuan/kejelasan untuk apa web tersebut dibuat.</li>\r\n	<li>Consistency yaitu dalam pembuatan web, perancang web harus konsisten dengan tema yang diangkat.</li>\r\n	<li>Alignment yaitu mengenai kerapihan tulisan yang dibuat pada suatu artikel. Prinsip ini mempunyai peranan penting karena mempengaruhi pembacaan suatu artikel.</li>\r\n	<li>Proximity yaitu merupakan kelengkapan dari suatu field.</li>\r\n	<li>Contrast yaitu prinsip dimana para pembaca nyaman dalam melihat suatu situs</li>\r\n</ol>\r\n\r\n<p><strong>FUNGSI</strong></p>\r\n\r\n<p>Sebelum men-design , sebaiknya kita mngetahui dan memahami beberapa fungsi situs web agar design yang dibuat sesuai dengan fungsi situs web.Secara umum fungsi situs web adalah sebagai berikut:</p>\r\n\r\n<p>1. Fungsi Komunikasi</p>\r\n\r\n<p>Situs web tang berfungsi sebagai komunikasi pada umumnya adalah web dinamis.Karena dibuat menggunakan pemrograman web(server side) maka dilengkapi dengan fasilitas yang memberikan fungsi-fungsi komunikasi seperti web mail ,formanthec,chatting,forum dll.</p>\r\n\r\n<p>2. Fungsi Informasi</p>\r\n\r\n<p>&nbsp;Menekankan pada kualitas konten,karena tujuan situs ini mnyampaikan isinya</p>\r\n\r\n<p>&nbsp;Sebaiknya berisi teks dan grafik</p>\r\n\r\n<p>Fasilitas yang memberikan fungsi informasi,news,file,company,library,prefences dll.</p>\r\n\r\n<p>3.&nbsp;Fungsi Entertainment</p>\r\n\r\n<p>Sebagai sarana hiburan/penggunaan animasi gambar dan element bergerak dapatmeningkatkan mutu persentasi design,meski tetap harus mempertimbangkan kecepatandownloadnya.Contoh fungsi Entertaiment: game online,film online,music online dll.4.</p>\r\n\r\n<p>4.Fungsi Transaksi</p>\r\n\r\n<p>Situs web dapat dijadikan transaksi bisnis baik barang jasa,dll.situs&nbsp;web menghubungkanperusahaan konsumen dan komunitas tertentu melalui sarana elektronik.Pembayarannyabisa memudahkan kartu kredit,transfer atauupun membayar langsung.</p>\r\n\r\n<p><img alt=\"Image result for contoh web desain\" src=\"https://vallet.id/index.php/2020/01/29/artikel-web-desain/\" /></p>\r\n\r\n<p><strong>TUJUAN</strong></p>\r\n\r\n<p>Untuk membuat situs web atau dokumen elektronik dan aplikasi yang berada pada web server dan menampilkan konten dan fitur antarmuka interaktif kepada pengguna akhir dalam bentuk halaman Web. Seperti unsur-unsur teks, gambar (gif, jpeg) untuk ditempatkan pada halaman menggunakan HTML / XHTML / tag XML. Menampilkan media yang lebih kompleks (vektor grafis, animasi, video, suara) membutuhkan plug-in seperti Adobe Flash, QuickTime, Java run-time dan lain-lain. Plug-in juga dimasukkan ke dalam halaman web dengan menggunakan HTML / tag XHTML.</p>\r\n', '202211020852286361cd5cbb79f.png', '2022-11-02 08:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_isi_materi`
--

CREATE TABLE `tb_isi_materi` (
  `id_isi` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl` datetime NOT NULL,
  `part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_isi_materi`
--

INSERT INTO `tb_isi_materi` (`id_isi`, `id_materi`, `judul`, `isi`, `tgl`, `part`) VALUES
(12345, 97500905, 'Pengenalan Adobe photoshop dasar', '<p>Photoshop adalah program desktop publishing dan grafis populer. Adobe<br />\r\nPhotoshop juga merupakan salah satu software keluaran dari Adobe, yang<br />\r\nsangat popular di kalangan photography dan art designer grafis komputer.<br />\r\nFitu-fitur Adobe Photoshop sampai sekarang masih terus dikembangkan.<br />\r\nBanyak teknik yang harus dikuasai agar dapat menghasilkan kualitas gambar<br />\r\nyang sempurna. Penguasaan Adobe Photoshop dan Corel Draw dapat saling<br />\r\nmenunjang satu sama lainnya. Dengan beberapa fasilitas yang ada pada<br />\r\nphotoshop, akan menarik untuk mempelajari lebih lanjut. Agar dapat<br />\r\nmengembangkan dalam pembelajaran ini diharapkan dari berbagai sumber<br />\r\nyang relevan.</p>\r\n', '2022-11-01 11:02:59', 1),
(439517134, 1908702240, 'Materi Desain Grafis Lengkap Untuk Pemula Beserta Tips dan Triknya', '<h3>Jenis-jenis dan Contoh Desain Grafis</h3>\r\n\r\n<p>Desain grafis ada banyak jenisnya. Tapi kita akan coba tampilkan contoh populer yang paling sering kita jumpai dalam dunia digital.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Contoh Desain Grafis: Logo</h3>\r\n\r\n<p>Contoh pertama adalah <strong><a href=\"https://teksnologi.com/tips-desain-logo/\" target=\"_blank\">desain logo</a></strong>. Logo biasa digunakan sebagai identitas suatu brand, organisasi, atau perusahaan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://teksnologi.com/wp-content/uploads/2020/09/contoh-logo-desain-grafis-1024x526.jpg\" style=\"height:526px; width:1024px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Contoh Desain Grafis: Banner</h3>\r\n\r\n<p>Banner biasa digunakan untuk menampilkan pesan ataupun iklan pada halaman website.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://teksnologi.com/wp-content/uploads/2020/09/contoh-desain-banner-1024x526.jpg\" style=\"height:526px; width:1024px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Contoh Desain Grafis: Templat<strong>e</strong></h3>\r\n\r\n<p>Kita bisa membuat desain dengan lebih cepat menggunakan template yang sudah jadi. Sehingga kita hanya tinggal memodifikasinya saja.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"contoh desain template\" src=\"https://teksnologi.com/wp-content/uploads/2020/09/contoh-desain-template-1024x526.jpg\" style=\"height:526px; width:1024px\" /></p>\r\n\r\n<h3>Contoh Desain Grafis: Typography</h3>\r\n\r\n<p>Membuat desain huruf dan tulisan (tipografi dan font).</p>\r\n\r\n<p><img alt=\"\" src=\"https://teksnologi.com/wp-content/uploads/2020/09/contoh-desain-typography-1024x526.jpg\" style=\"height:526px; width:1024px\" /></p>\r\n\r\n<h3>Contoh Desain Grafis: Mockup</h3>\r\n\r\n<p>Dengan menggunakan mockup, kita bisa mensimulasikan bagaimana jika desain yang sudah kita buat tersebut diterapkan ke dalam benda atau produk yang nyata.</p>\r\n\r\n<p><img alt=\"\" src=\"https://teksnologi.com/wp-content/uploads/2020/09/contoh-desain-mockup-1024x526.jpg\" style=\"height:526px; width:1024px\" /></p>\r\n\r\n<h3>Contoh Desain Grafis: Photo Editing</h3>\r\n\r\n<p>Editing dan manipulasi foto.</p>\r\n\r\n<p><img alt=\"edit manipulasi foto photoshop\" src=\"https://teksnologi.com/wp-content/uploads/2019/09/hasil-karya-manipulasi-foto-photoshop-terbaik1-1024x526.jpg\" style=\"height:526px; width:1024px\" /></p>\r\n\r\n<h3>Contoh Desain Grafis: Illustration</h3>\r\n\r\n<p>Pada dasarnya, pekerjaan seorang ilustrator berbeda dengan desainer grafis.</p>\r\n\r\n<p>Namun keduanya akan bisa saling terkait satu sama lain.</p>\r\n\r\n<p>Pekerjaan seorang ilustrator adalah membuat gambar ilustrasi. Sedangkan desainer grafis akan mengolah gambar ilustrasi tersebut ke dalam desain visual, misalnya seperti banner, poster, logo, dan sejenisnya.</p>\r\n\r\n<p>Dalam desain grafis, karya ilustrasi juga sangat dibutuhkan. Untuk itu, kategori ini juga menarik untuk dibahas, terutama untuk kalangan desainer pemula, guna menambah lebih banyak referensi dan perspektif.</p>\r\n\r\n<p>Ilustrasi vector saat ini banyak digunakan untuk kebutuhan website, aplikasi, ataupun kebutuhan media cetak.</p>\r\n\r\n<p><img alt=\"contoh desain vector\" src=\"https://teksnologi.com/wp-content/uploads/2020/09/contoh-desain-vector-ilustrasi-1024x526.jpg\" style=\"height:526px; width:1024px\" /></p>\r\n\r\n<h3>Contoh Desain Grafis: Digital Drawing &amp; Digital Painting</h3>\r\n\r\n<p>Lebih lanjut, kategori digital painting &amp; drawing ini lebih mengarah ke pekerjaan seorang ilustrator digital.</p>\r\n\r\n<p>Namun sekali lagi, karena antara ilustrator dan desainer grafis juga masih ada keterkaitan, maka menurut kami ini juga menarik untuk dibahas guna memperbanyak referensi dan perspektif.</p>\r\n\r\n<p>Menggambar ilustrasi digital bisa mengarah ke kategori komik, concept art, character art, ataupun konsep digital art lainnya.</p>\r\n', '2022-11-02 11:43:31', 2),
(1681960589, 97500905, 'Dasar Adobe Photoshop ', '<p>Adobe Photoshop atau biasa disebut Photoshop, adalah <strong>perangkat lunak editor citra buatan Adobe System yang di khususkan untuk pengeditan foto/gambar dan pembuatan efek</strong>. Hasil gambar yang diolah dengan Adobe Photoshop ini banyak digunakan mulai dari periklanan, fotografi, website hingga multimedia pembelajaran</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHwA3AMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAEAAIDBQYBBwj/xABDEAACAQMCAwQHBQYFAgcBAAABAgMABBESIQUxQRMiUWEGFDJxgZHRBxVCobEjJFJicvAzNJLB4URkU4KDhKKy8Rb/xAAbAQACAwEBAQAAAAAAAAAAAAAAAwECBAUGB//EACkRAAICAQQBAgUFAAAAAAAAAAABAhEDBBIhMUETcQUiIzJRFBVCscH/2gAMAwEAAhEDEQA/AM92hcnFrGDAO/kEZ/qpa+2ZBDaJlc5VNR1e8VIltEuoLxNAcaeUhyOnTl5VwwJEQY+Ix53xp1Ajy5CgBFJWkV1sdKjbSFYg/P3/AJVzMiO0psEWPOCrB9I/PNSaYyRjiysSN/b2/KmmKI+1xSPnyYPk78+Xx+dAWMQvrMqWiOvLTpYgUjHMBIpsz3yTnQe77qkEChWC8Vh3XOkFxnyxiulVRHb723DEAd/veY2oAHaXUFX1dFZDuRkFvfvT3n1Kw9ViUnqobI929SNa2+7DiURznB7Nu8ffiq+ecx6SkuQRv0waAsJ19oohS3j7THtKDqP51FvqK47wOMdc+FDC5lV9SthvEc8VztpCc8z4gb0AGNHIoLGNwBzOk7VyNXlJEas5AyQozgUKbqUhlZ9iMEEnBrizygZXbpsDyoALZWXGpWXPLIxmm0O1xMxXW2oj2QaQnlOyjPjgcqACKVDesSbct+W1IXMjezg/CgAmlQvrL7jK5rpuHAySuPGgAmlQ3rMmM5GPGl6y+2438qACaVDdvJ5eW1PjeaUkJgkeAoAm38KW9Ojt7uaRo4IyWU4KY3+VRMtz2piCanHMAcjQBJ5VIqyGNdMeoFgAeufCg3knjwHXTnlmkLuZVChyFByFBwAaAD5zKlz34VR1wNIAx8qilzG5WRQG8MihGu5mbUzZbxp08sxKs+xZQe8Bv5iigLW1uO21y4yds7bgYpnEIo5hGxKIWOzs2KHsL2KKKVlYamOdI8Nh9aC9KCt1Hw5WwVa40kAcuQ+dN8lVL5eTpVLViqXSH+LSRg7fOmQqkrLLLNp0tkENvjp+dDHhcDRmaHhxdRI6geskE6SQTyx+E1U8TghjeEwRlFlhWTSW1YJz1pjTSM6yJs0xhSK+N0s0ejQqqC/w8ahur1JZXRWXAfoelZIADpXar7kufhGwu3SPhKwl1LHBbDDYk5xiqmMNLpj1DLb1S0sZoXBVu3Zr4DJPdB7WCV4The0SIsOQO+BRfCrO8kE0klpcjQ24MbAkeW1bP7HHC+iTD/upPdyWt2XfHcGT03q3puSNOOMu0eF3HD7tuKib1e47FsMA0LEA53HKpuKzcQt5VtoeH3LIyB2ZIGwCTyOBXtg7VN2iDDqFbn8xUE3GLS1JXTIrdVbAx9aXOMYcyY2OJy+08Pvob9Yn7KwutTAYPYOcflXeFLxa3tJIjYXMaAHU3YMGJ+VewTcfuXAkitwE55dyCB48qzlx6dWYuOzmuCU/kJLKfMYwPdmlKeOTpMu9PNK2YURcQuuERwGxm3ZipaFsqQf96B4XbX8MNwWsLpe0Xu5t3GPyr2rhnErS/tu1srtZQBuDsfOrRApUMjEqRkGnrCn0zJKbj2j5t9T4k05kfh17lmOcW7/Sirq34hJamL7uvDvt+7vkflX0OWxyJ/SmGT+r502OnvyInqNvg+e0Fza2n71BcIuMATRMoPuyOdcaYzL+zZVUAZJbGB9eVenfavA9zwewQLket5ywJC9xtzWCjs7eNSkiII1BOojbJ8BzrDqJLFLaa9OnlhuEJ1mYSE4VYtKb5HP9edF8OEyzx+rpqkC90EeR/wCarpQsY0Q9mABsVO+3v60XwyaSMRTRMY305DLsRSsTttjsipUG9heT3ZiitJLq8eYRmNJArHOdR39ojFa2w9EeGLDdx8YaX1y3uGiPYy4XAVSOn8xrGiR+2aTW3aE515wc+OaITjpsomieTvMxfJPPYD/anMpHvkvr30f4HFnR2598g+lUd5aWEOez1/Fs1XXXpBrzl/zqpueLagcN+dZ5qfhnY00tN/OCZap6uwZmKqgOCx6U4RxEAqAVPI+IqT0FhTil7HBLEJkeRu5jnhM0RxOFbbiN1AqdmscrIEH4QCRinwyYnjWJP6nb9jmavUQlqJYYQpd7v8G8DtreHhRmnXLXB0nVzGOWPkDVNx24iWW20NqWOfUd98CnXF8v3g1vbk9jCoCBz1HKqi6lWWaPU4wG7xx5881ML3WZ8jW1JLosPX7dLlJY+IzKI3do1NoCF1Ek/i3O5qt4nPFPJCIJGdY4ljLOoXURnfGT40YZY3xjiBRc7ho1yD/ZppkURlTxBM7HHZjHLlWsyUVWCDgg1yrV2VTJDJdKwBKkgKuefI+Z28s1Vkb7DaqknKVKlUEHtX2PMF9EnBXP70/6LW5V9OcagPfyrC/ZA7L6JkKmT60/e+C1tp9UiAZwfCmLJS4Ohiz7Y7WhXMuAqazljz6VBNZ26xid0V+yOojGdQHP60dCA6BQCGHnVV6QGWPh0yKhZT3XVWALLnvKpPXGajKk4XQ/HDHJboujNXl5e+kTSRcKiSC0zjtQCNXw5VlPSL0ZveHQ9s9vG5U5DgHcdduteocDls5eHRTWWlbfcBQunSfAjoRyqbiUfb2bxypqDA7ePlXNjCauT8G304tUjxSyvntQs1tOIpEOCVYjfwPiK9X9C+Ntxfh57XHrMOFcYxq88fD515nx6zFrNIihVXfbpjNG/Z3xSSz9IEt8kRznsWGOXgfmAK1YJ8qRy9RidNHrbyAHBU7ePSlqHQUNIHknIY/s1O2BzqVQ2NuVdJHKmkuDG/alJMnDuGiBgC93pIO+2hj/ALV5tLP2xYY1aNhk7AcyfdXpv2m2/rHCbUNE0pWclQhwQdDCvNYYkHZ9qUQk6ShYqSfAnr8+VcnV16rOlpYy9NV0Qwlzq1kY0qOzUcyepJ579PpVlZ57NMkE6BvQQRJHZxFGCX77Bu6mBnAzz+HjR1tjSuDkaeec5peLsbkVIJghad2CvEuADiRwtCcV4VE0kZuWR3PdBjm2HvwanwxLY8q4VbGDj5U4SVv3Fa5xsf8A3J+tQNwqyBI7NvD/ABSauNHkvyroXcZ0491BNsH4VL90qwsR2bltQk1Espxg494qaeeWSQyyujPJ3mbVkknx86Ij9XEYEsTmTtQdSsNPZ4G2PHOaZdCEzubWIrCT3Q5yQPOoUUpbkuQcm1t8GRtpG7aUqwAIzk88VG+lsEfxHem2zsrsFBZnHID/AHpYKkLuQMZxVofcKl0WJsbMbG8zliPbTl06+6o5beziQZuHYsx7qFGwPnU+q01/5UhcnlbNnGP6vGulrTTg2e/s7W7Z/wDvzp4sBxZjH7W4A8Si/WmyraiMmGSZpM/jQAfkaKluLLse5BGZR0MTAfPXQ5ulPO0t+vIN9agAel0qSWVZNOmGOIDO0ed/mTUe2KAPavse1D0QbSob96k/Ra10l2yPp0ac7HNZf7GYw/oc5z/1cn6LW0a1XVrCgkfEVqxySXKMmaM3L5XQyBA4BA2NUnpFaveyCzVNSxjHQnWR5+RrRIcKNKj3Cs7xLiAtOOAdtJAoADyiEuo2xnOMD41mzz44O3ooxlGn2QXfCp+Feja2MLzPIg1PMjYcnwBrvo5PcvbywyTzXE0L94THOoY2KtgZ67H6Vp7RWa3Ru3W5RwMugADjxoS6jtreVZoj2ZXIfwI//d6w5ptQalwaopuVIxXp1wqzmLTxjQ8MJc7e2B4D3/rWd9COFy33HI5IO5Hbd8MV5NnZT4ZP6Vt+JWNvxiOK4Z2VMgK6bHHLHhg8jmifRvhFnw+2mlthKouHzJr/ABgZAAI9/wA6y6DURnJxvonV46imW8IBhUgEbd7JyQetOqOSSCKFSWEaclVxg4roOeR2r0MHwcPUQh+eTK/aPKsfCrUO2lWnOWAyR3Sdq84trdJ3KtNJIEO6vzG3yz5++t99qUMc/CrBJElf96JXsxkg9m1YC5uWitWS3V2Jbc4xg7Z1H3VydavrOjfo39Jfg5IiTXCxdnsBqyMZBzjPnsx+VGmNYxGU21R5/Oh+G2CqEEZJnu3CIpG/jgbE/l8KKcYEQJydGM/Gl4Oxmf7VZGJGQsqnAOMgVztWpr+2cDwp3ZOfZViOhCmtJlF2jHkuaTMynDLg+dTW2YgweJ9zz08q5ODIVKo3Lfu43oAh7Q+ApF6TIyjvKw+BphoAx8cpjiZF2LHOfhSG6AjbHTwoiThF8i63t3VepYYx76GCMgOrqOVWiqZSXRoGtn7xaa8G247Z9s58VpernBzPeYOCpE74OT/Tz+tTOgI7ig7gNhd8H3Lt1puNDqojG4JwEBGBy/Dz/vrT6FAr8Oi1Ek3EhPM6iSD55SkOGQa1U9tpcc9RBBzuPY/vFE4B2aMDVlg2B1bbfT513s1CgPpGGycL3gOgPd5/rRQArcOtyinRKgJ56jtncA5T3Chb21hhiGhisvVHY56jbujr51ZkLmQGIEB8DMY2OBjPdoHicttgwompwfbGk435ZwDQ0B6v9j7EeibYz/m5OXuWt0sxU53rD/Y6mr0SY/8AdSfotbhhpGSK0QraIndkqFJDqQaX8PGque07PiUs9x2qK7aklUnTuBsR9a5xXiK2Vq7qy9oCBjngHbOPKq3hvFrmPiES3Nw00EjaH1dAdgf0pWTA8itE4viH6efuX1v6naq3q7RoGOplQ4GfHFU3pHdes2kkNhLGC4/bTlwEiTxJqC7sraSNp5NTs6Dug4BPI7eNVU1nF2haSMGMHUtvklFPLJHInYeQx471wYZ55ZNM9bhxbqcR1tf6hbW1u6zW69MMA69GI/4qzTilws6v6s0QVSIVkBUIOrnb5eA99VdhMlreu+oyuT7CnvMxoq7vZp7iSEMmoqEkK8ogOaZ6nPOox4X6juPH9lssYqSXZbdrbSsJ5JVkdQFBJzv7qKgk7ZdStt5DnVbZcPBKtKGVF9iMjdvEn+9qukXYd0Cu3p4zSuXR5nWQwQk1j7sxf2mNJBwyyljTWfWNwzfyncV5o3FpmdPWFYPnYRkkHpg16Z9q9olzwiwWRtOLrIPLfQ1eYRPb20bqGWeRjpGiQgY67b4OetI1UE8lsZpptQSDYuI5na4utUQR8Rfh0EeJ8edWErBxEykEFNiOXOsqIAzGJlJVTq2BJOa0+/Y2+oEHsxkEYxSIY1F2Onlc1RE3tn4VLA83aJHGHck4WNSd/cBTCoLHfbbr5U5Mo4eOQqynIIOCD5U4UGNHe6ynqM+RkFf2nOuBbwgkWVwQDvjtNqZ6/fZz94XWfEzNn9aR4lf4I+8bo/8Art9aABpJZG1KzNpP4dRI/OojRhtY+yic3cJaQkMurdPfQzBQcawaAKmcwdi5F/qymAh1AGq69lR4I0SKNNPMoSc7UN2kf/hZx7qTujL3EC/nmmKrEtujROU7QDKjffJG/l+vyprMHOCwzyVhtj4+YoSTisLPuJtIIYd0ZBGMfi5Um4tAQcJJnIz3diNv5ueBTSoYWDRmPddQI08tP05V0MneZwu4AOSMN17vjQR4tCEIXttWNmYb89xnVSPFodasqSYXkNPTr+KiwC2KFmwMq+MkY2IG+fDpVfxTsdIAhZJOYZVADeOfOphxaAEnTPvjpy/+XhihL68SeOOOPtNKDk/U9OpqGB7B9jRx6IsCd/WpP0Wt0xHPOSKw/wBjDR//AMkdaBv3uT9FrZO6W/EV1/4FwukfyuPqPzFOi+DNkmot2UvEohDO6sFdWBIDb6h4VR3CrDMUAJjYbHrj+/0rVekVmstoZ4zoeHfyI6/GsZcya3DLrLldIj6HPI1ZZ4YU9xilocuqypYi+gDtHCkjHWiguR1J3H61X8eu/ULXVEheaRgkcajck1Y2wkiiAnOqb8TedDXVufWRcuV7ULiLVuIh1cjx8B5ZrjwjGCbij6BC8WJRvnoy/DOHX/btArP2pYtM52O/u5dfnW8tOHW/DrZRbRiRwB3n8ag4WiW4UWy60O7ytvqNHdsO1XUuzNpI6Y8R8ajS6mDycmDXYZywvY64Bn4k9u+ZrWQL/Eu9WaN2kayKw0sAR7qjUyJIY1XUD5bVJokKgZCgcsdK71I8jGWSLduzI/aYqycP4dlFcLd5IPQaGzisJAbNC+UXUf4omAA9+a1n2uJPDwfh7W8v7Q3fhz7jbV51ax8RuQjGVY1Z9K6mxk+Q8sGudqlHe+TraOUnBcFslwDcTLamOONhhpyMgYPJfz/OpA6sI1Qd1VwCM4PzqOys/VtC6RcgvmSR8DGx6DpTlJMrZ59c1jxTuVLo25YVGya3aNJWMsCz5GdJJH6VFOFabX2caoR7BJAFdU4ZtyPHFcfc8y3vrQZyMwGQ/sokULuQrMa7Jbu+nREqbZOMnI8d6kDONgSPjTwwYd92yBjGM7UAC+qS5+GfhXZLdwEPZKAVBBXr50SHYey74xge7wqE4zQBi4ioDIwOD1pwGggE7Z5iuR7SMCMmnIDqO2w6VZdiG+Ce6FuukQMWIG+c8v7zQ1dQjXyFSQ3KpkSRIV8SNxV3IrtsipYom6NsV/YE5yMjGNvrQRz40bg2ElIYJOK5G5SRXAUlSGAYZBx0PlW/4HxLgEPCpWveCW1wCrTWxZRksu7RMeex+YIqHMtHE5Gr+x/b0WYA/wDVSH8hW2v7druyeJf8QYZD/MNxWC4heeqWsdp6Pxvw+AEzP2TKuXbfT12/4rJP6TekMPGhFccXu0ikfAVZAQmrYHl8abHNSE59HJ8t9npHFOMrc8GS375uHkCuuOYG/wCtC29utqolca29rV4ms96XcRim4EnEOFy3Mc+vsnK4ydJILZ/mOPhWAf0l45kN97XQI5Et/wAVk1MXldpnT+HZo6PHsmrZ7xbxNO4UAk8tbdPfQfpBIscscFsx7OMa3fO7nl/furxlfSj0jjQyHjV2qnb/ABBn5Yrh9IeNOFd+K3BY+02oH/alY4ZIpqTH5depSTro9z4dNGYIwWIwoJ6g7UTfp20GqE9/Hd2614AnpLx0YVeL3QHkw+lOb0q9IVxjjN4P/OPpUej898UW/cIvwfQ9lN29pFLn21BqY7184r6W+kUS6Y+NXir4Bh9KQ9MPSU8+N3v+sfSuktQkuUcWWC5Np9np/wBsGj7m4YznYXuRvjPcbavM/XMKSuVIGnWzeyOoAqG+45xbi8SjiN9Ncoja0jlIIU4xnl4Gh4FSTUJfLA1YHxrNmqcrH4rgtqLLglxLdXTxRxtIrtpwSRqHh5Zq3BLTOSoU5OQOlU/CL+fhksFzbWUJjikJkySQBv1BB38atLWVplErjDOoYg9CaTCNSs0Sk3FIKgBJkIeNcLqw/XyHnT4ZO1XGrBik7JUZe8QQTqHlQr+2a5k7bnamiy6+7JRt6xD7On215VDNbMXGqRcqAuUUY2qrpZPiaALNbDtRI3arlV1HUMZ91V0zdnIyc9JxTcnxPzpjbnegDLSwGK4wdwVzleVMRTrO4xjxrVrZWpDE28ZIYgZHIUTDw+xKKTZwkkkE4O+/vqwlxZh5BhsYwaeiZByurFbxuF8MyxPDrY7ctJ+tALYWYY4tYh7loJ2syap+0IPPzpOilVADE7861M1laiWQi3i9r+Gmeq2+B+wj6/hoDYzKFCMirPg94bEiQ2yTRag4jl5LIPZcf3+lW/qNoSM20W5/gFd9UttAXsI9PhpFBZJoFf0tm1/s+HWQOeZUnNR/fEdw2ifhtsqMhWR4U0PjIOc7gkHcUWeH2QGfVIc/0CnrY2vsi3jA57KKgs3J+Rt1x/hc1k1lBYyoNARHL5xjfx8c5rOSDKYK75G9bJOGcOMIY2FuW2OdFP8Au3h5IBsbfH9FQVlbdmGmTSyAurEqG2YHGenv8qcmVBWtt918NPPh9t/opDhnDwwxYW/L+CgHExLAKwI91MkJJ5HT0rdDh9hq/wAlB/poK6sLMTMBaxYH8goI2mPxsOtIA52GBWr9StcAerxYx/AK6tlarutvED/QKkmmZ61VmDAbaRnOK7IqiNm9rpy61oltoEfKQxqW5kLSkgh5GGMjzWoI2szlrFcKpYJJ38YIOnI61qbUuyK0gwxUZHgajSKPWW7NdTjDHG5HhREYA2AwMVC7G1wcb2j8KbUn4j8Kk18joTYfw86kggpUWbnNukHYw4Rs69A1HyJ8N/yHhT5LkaJoxb24FyVfIj3ixvhD+EdKAAKaedGNLk50R7x4wF2G1RYB3xQB/9k=\" style=\"height:222px; width:394px\" />.</p>\r\n', '2022-11-02 08:03:22', 2),
(1822031413, 1908702240, 'Materi Desain Grafis Lengkap Untuk Pemula Beserta Tips dan Triknya', '<p>Berkarya di industri kreatif itu memang menyenangkan. Terlebih jika pesan visual yang kita sampaikan bisa menginspirasi banyak orang. Pastinya, Anda mau kan? Menjadi seorang yang ahli dalam bidang desain grafis?</p>\r\n\r\n<p>Nah, untuk bisa mulai berkarya di bidang ini, setidaknya kita perlu memahami dasar-dasar desain grafis terlebih dahulu.</p>\r\n\r\n<p>Di artikel ini, kita akan membahas apa saja teknik desain grafis yang sering digunakan oleh kalangan desainer profesional, beserta dengan tips dan triknya untuk pemula.</p>\r\n\r\n<p>Sekedar informasi, pekerjaan seorang desainer grafis umumnya berbeda dengan perkerjaan berikut ini:</p>\r\n\r\n<ul>\r\n	<li>Ilustrator</li>\r\n	<li>Animator</li>\r\n	<li>Video editor</li>\r\n</ul>\r\n\r\n<p>Namun beberapa perkerjaan di atas sering kali dianggap sama oleh orang awam. Mungkin banyak yang mengira sama, karena mereka sama-sama bekerja menghasilkan karya visual.</p>\r\n\r\n<p>Memang terkadang beberapa pekerjaan tersebut masih memiliki keterkaitan dengan software desain grafis. Untuk itu, kami akan membahasnya juga guna memperbanyak referensi dan perspektif.</p>\r\n\r\n<p>Untuk itu, artikel ini akan selalu kami update, agar bisa tetap relevan dengan tren di tahun 2022 ke depan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Pengertian Desain Grafis</strong></h2>\r\n\r\n<p>Apa itu desain grafis? Desain grafis adalah suatu proses kreatif untuk menghasilkan suatu karya dalam bentuk tampilan visual. Bisa berupa gambar, tipografi, ilustrasi, layout, animasi, ataupun elemen visual lainnya.</p>\r\n\r\n<p>Desain grafis merupakan bentuk komunikasi visual, sehingga ada pesan yang bisa disampaikan di dalamnya.</p>\r\n\r\n<p>Itulah pengertian desain grafis dan juga definisinya secara sederhana.</p>\r\n', '2022-11-02 11:38:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `no_whatsapp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url_facebook` text NOT NULL,
  `url_instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `no_whatsapp`, `email`, `url_facebook`, `url_instagram`) VALUES
(1, '082125246091', 'muhamadhaudy25@gmail.com', 'https://www.google.com', 'https://www.instagram.com/wanteknologiinternasional');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `judul`, `isi`, `gambar`) VALUES
(212599470, 'Kursus/Private UI/UX Design', '<p>Pelajari beragam materi UI UX Design meliputi UX Research, UI Design, UX Writing</p>\r\n', '202211020958386361dcde28c8b.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `judul_materi`, `isi`, `gambar`, `tgl`) VALUES
(97500905, 'Belajar Adobe Photoshop Dasar', '<p><strong>Adobe Photoshop&nbsp;</strong>atau biasanya di sebut sebagai&nbsp;<strong>Photoshop</strong>&nbsp;merupakan perangkat lunak editor citra buatan Adobe Systems yang dikhususkan untuk pengeditan foto atau gambar dan pembuatan efek.</p>\r\n', '202211011355596360c2ffa2986.jpg', '2022-11-01 13:55:59'),
(1908702240, 'Dasar Design Grafis', '<p>Desain grafis adalah suatu bentuk komunikasi visual yang menggunakan teks dan gambar untuk menyampaikan informasi atau pesan seefektif mungkin. <strong>Desain grafis</strong> pada awalnya diterapkan untuk media-media statis, seperti buku, majalah, dan brosur.</p>\r\n', '20221101215727636133d7a870c.png', '2022-11-01 21:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `id_mitra` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mitra`
--

INSERT INTO `tb_mitra` (`id_mitra`, `gambar`) VALUES
(378744606, '20221101204850636123c2ce8e7.png'),
(1413522236, '20221101204911636123d7db02f.png'),
(1432716833, '20221101204903636123cfd84a0.png'),
(1924568754, '20221101205327636124d7849fe.png'),
(2021300418, '20221101204843636123bb56364.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipsdantrik`
--

CREATE TABLE `tb_tipsdantrik` (
  `id_tips` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tipsdantrik`
--

INSERT INTO `tb_tipsdantrik` (`id_tips`, `judul`, `isi`, `gambar`, `tgl`) VALUES
(773808212, '6 Tips & Trik Belajar Desain Grafis Bagi Pemula Sampai Mahir', '<p>Jika kamu tidak memiliki latar belakang desain tapi ingin menggeluti bidang desain grafis, kamu berada dalam artikel yang tepat. Berikut ini adalah beberapa tips dan trik belajar desain grafis terlebih khusus bagi pemula sampai menjadi mahir.</p>\r\n\r\n<p>Selain ATM (Amati-Tiru-Modifikasi), ada beberapa hal lho yang perlu kamu perhatikan terutama saat kamu mencari cara belajar desain grafis bagi pemula.</p>\r\n\r\n<p>Sebagai non-desainer, kamu mungkin pernah merasa bahwa desain yang telah dibuat belum terlihat profesional dan tidak sesuai dengan apa yang kamu harapkan. Tapi jangan khawatir, pada artikel ini MyEduSolve telah mengumpulkan daftar tips dan trik desain grafis untuk membantumu membuat desain yang tampak lebih mahir walaupun belum memiliki banyak pengalaman seputar desain.</p>\r\n\r\n<h3>1. Tetap Sederhana</h3>\r\n\r\n<p>Tips desain yang paling penting untuk non-desainer dan desainer pemula adalah membuatnya tetap sederhana. Dari pada membuat desain luar biasa yang sulit dipahami, para audiens banyak lho yang justru lebih tertarik pada desain minimalis.</p>\r\n\r\n<p>Desain sederhana biasanya menggunakan jumlah minimum teks dan <em>font</em>, perhatikan juga <em>balance</em> dari warna dan visual.</p>\r\n\r\n<h3>2. Gunakan Color Palette yang Kohesif</h3>\r\n\r\n<p><em>Color palette</em> merupakan sekumpulan warna yang disusun dan di <em>mix and match</em> hingga memberikan kombinasi warna yang menarik di mata audiens. Biasanya, para desainer grafis menggunakan&nbsp;<em>color palette</em>&nbsp;untuk menjaga identitas dan konsistensi desainnya.&nbsp;</p>\r\n\r\n<p>Untuk ekstraksi palet warna yang lebih detail, disarankan menggunakan <a href=\"https://color.adobe.com/create\" target=\"_blank\">Adobe Color</a>, situs <em>web</em> yang dapat memberi beberapa palet warna dari gambar apa pun.</p>\r\n\r\n<h3>3. Pilih Font yang Tepat</h3>\r\n\r\n<p>Selain tips belajar desain grafis bagi pemula, sebetulnya langkah ini sudah mulai masuk ke dalam tahap selanjutnya yaitu mengenai&nbsp;<em>design principle</em> terutama <em>typography.</em></p>\r\n\r\n<p><br />\r\nKejelasan informasi dalam desain dan huruf yang mudah dibaca sangatlah krusial. Pastikan untuk tidak membatasi desain-mu pada satu <em>font</em> saja. Cobalah bereksperimen dengan gaya <em>font </em>yang berbeda dan tetap berpegang pada gaya <em>font</em> unik tapi masih bisa terbaca dengan jelas dalam desain.&nbsp;</p>\r\n\r\n<p>Nah, dalam memadu-padankan jenis <em>font </em>yang berbeda juga tidak bisa sesuka hati, ya. Pelajari lebih lanjut soal <em>font family, hierarchy, </em>dan hindari menggunakan terlalu banyak <em>font </em>yang berbeda. Mungkin maksimal 3 <em>font</em> berbeda dalam 1 desain sudah termasuk ideal.</p>\r\n\r\n<h3>4. Manfaatkan Jarak (Spasi) dengan Baik</h3>\r\n\r\n<p>Spasi yang baik adalah salah satu alat terpenting dalam menciptakan komposisi yang seimbang. Kamu akan menemukannya pada spasi di <em>margin</em>, di antara bentuk, paragraf, garis, kata, dan bahkan di antara huruf.</p>\r\n\r\n<p>Pada dasarnya, <em>space</em> berarti ruang yang berwarna putih. Dalam hal ini, ia bertindak sebagai aturan untuk membantumu menyelaraskan elemen, menjaganya agar tetap seimbang, dan saling melengkapi. Misalnya <em>grid,</em> menggunakan ukuran jarak tertentu untuk membuat dasar pada desain.</p>\r\n\r\n<h3>5. Selalu Konsisten</h3>\r\n\r\n<p>Sekarang setelah kamu telah melakukan semua pekerjaan ini dan mempertimbangkan semua prinsip penting dalam desain, pastikan mengikuti aturan yang kamu tetapkan untuk diri sendiri dan konsisten dalam desain tersebut.</p>\r\n\r\n<p>Tetapkan aturan untuk ukuran dan jarak antar elemen tipe seperti judul, subjudul, <em>body copy,</em> dan manfaatkan gaya paragraf dan karakter di Adobe untuk menerapkan aturan ini dengan mudah di mana pun elemen teks tersebut muncul.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pastikan citra desain yang kamu buat memiliki tampilan dan nuansa yang sama. Cari gambar yang memiliki nada warna atau tingkat saturasi yang sama dan lebih memperhatikan hal-hal detail.</p>\r\n', '20221102125203636205835391b.jpg', '2022-11-02 12:52:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_isi_materi`
--
ALTER TABLE `tb_isi_materi`
  ADD PRIMARY KEY (`id_isi`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `tb_tipsdantrik`
--
ALTER TABLE `tb_tipsdantrik`
  ADD PRIMARY KEY (`id_tips`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1871387578;

--
-- AUTO_INCREMENT for table `tb_isi_materi`
--
ALTER TABLE `tb_isi_materi`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2054124024;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1959618862;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1908702241;

--
-- AUTO_INCREMENT for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021300419;

--
-- AUTO_INCREMENT for table `tb_tipsdantrik`
--
ALTER TABLE `tb_tipsdantrik`
  MODIFY `id_tips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1612721927;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_isi_materi`
--
ALTER TABLE `tb_isi_materi`
  ADD CONSTRAINT `tb_isi_materi_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `tb_materi` (`id_materi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
