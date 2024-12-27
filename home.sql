-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 07:59 AM
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
-- Database: `myci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Slug` varchar(255) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `Tanggal` varchar(255) NOT NULL,
  `Paragraf1` text DEFAULT NULL,
  `Paragraf2` text DEFAULT NULL,
  `Paragraf3` text DEFAULT NULL,
  `Paragraf4` text DEFAULT NULL,
  `Paragraf5` text DEFAULT NULL,
  `Paragraf6` text DEFAULT NULL,
  `Paragraf7` text DEFAULT NULL,
  `Paragraf8` text DEFAULT NULL,
  `Paragraf9` text DEFAULT NULL,
  `Paragraf10` text DEFAULT NULL,
  `Paragraf11` text DEFAULT NULL,
  `Paragraf12` text DEFAULT NULL,
  `PictureP1` varchar(255) DEFAULT NULL,
  `PictureP2` varchar(255) DEFAULT NULL,
  `PictureP3` varchar(255) DEFAULT NULL,
  `PictureP4` varchar(255) DEFAULT NULL,
  `PictureP5` varchar(255) DEFAULT NULL,
  `PictureP6` varchar(255) DEFAULT NULL,
  `PictureP7` varchar(255) DEFAULT NULL,
  `PictureP8` varchar(255) DEFAULT NULL,
  `PictureP9` varchar(255) DEFAULT NULL,
  `PictureP10` varchar(255) DEFAULT NULL,
  `PictureP11` varchar(255) DEFAULT NULL,
  `PictureP12` varchar(255) DEFAULT NULL,
  `Kategori` varchar(255) DEFAULT NULL,
  `View` int(11) NOT NULL DEFAULT 0,
  `DateSlug` varchar(255) DEFAULT NULL,
  `Coding1` text DEFAULT NULL,
  `Coding2` text DEFAULT NULL,
  `Coding3` text DEFAULT NULL,
  `Coding4` text DEFAULT NULL,
  `Coding5` text DEFAULT NULL,
  `Coding6` text DEFAULT NULL,
  `Coding7` text DEFAULT NULL,
  `Coding8` text DEFAULT NULL,
  `Coding9` text DEFAULT NULL,
  `Coding10` text DEFAULT NULL,
  `Coding11` text DEFAULT NULL,
  `Coding12` text DEFAULT NULL,
  `Coding1CSS` text DEFAULT NULL,
  `Coding1JS` text DEFAULT NULL,
  `Coding2CSS` text DEFAULT NULL,
  `Coding2JS` text DEFAULT NULL,
  `Coding3CSS` text DEFAULT NULL,
  `Coding3JS` text DEFAULT NULL,
  `Coding4CSS` text DEFAULT NULL,
  `Coding4JS` text DEFAULT NULL,
  `Coding5CSS` text DEFAULT NULL,
  `Coding5JS` text DEFAULT NULL,
  `Coding6CSS` text DEFAULT NULL,
  `Coding6JS` text DEFAULT NULL,
  `Coding7CSS` text DEFAULT NULL,
  `Coding7JS` text DEFAULT NULL,
  `Coding8CSS` text DEFAULT NULL,
  `Coding8JS` text DEFAULT NULL,
  `Coding9CSS` text DEFAULT NULL,
  `Coding9JS` text DEFAULT NULL,
  `Coding10CSS` text DEFAULT NULL,
  `Coding10JS` text DEFAULT NULL,
  `Coding11CSS` text DEFAULT NULL,
  `Coding11JS` text DEFAULT NULL,
  `Coding12CSS` text DEFAULT NULL,
  `Coding12JS` text DEFAULT NULL,
  `infoCoding1` text DEFAULT NULL,
  `infoCoding2` text DEFAULT NULL,
  `infoCoding3` text DEFAULT NULL,
  `infoCoding4` text DEFAULT NULL,
  `infoCoding5` text DEFAULT NULL,
  `infoCoding6` text DEFAULT NULL,
  `infoCoding7` text DEFAULT NULL,
  `infoCoding8` text DEFAULT NULL,
  `infoCoding9` text DEFAULT NULL,
  `infoCoding10` text DEFAULT NULL,
  `infoCoding11` text DEFAULT NULL,
  `infoCoding12` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`ID`, `Slug`, `Judul`, `Picture`, `Penulis`, `Tanggal`, `Paragraf1`, `Paragraf2`, `Paragraf3`, `Paragraf4`, `Paragraf5`, `Paragraf6`, `Paragraf7`, `Paragraf8`, `Paragraf9`, `Paragraf10`, `Paragraf11`, `Paragraf12`, `PictureP1`, `PictureP2`, `PictureP3`, `PictureP4`, `PictureP5`, `PictureP6`, `PictureP7`, `PictureP8`, `PictureP9`, `PictureP10`, `PictureP11`, `PictureP12`, `Kategori`, `View`, `DateSlug`, `Coding1`, `Coding2`, `Coding3`, `Coding4`, `Coding5`, `Coding6`, `Coding7`, `Coding8`, `Coding9`, `Coding10`, `Coding11`, `Coding12`, `Coding1CSS`, `Coding1JS`, `Coding2CSS`, `Coding2JS`, `Coding3CSS`, `Coding3JS`, `Coding4CSS`, `Coding4JS`, `Coding5CSS`, `Coding5JS`, `Coding6CSS`, `Coding6JS`, `Coding7CSS`, `Coding7JS`, `Coding8CSS`, `Coding8JS`, `Coding9CSS`, `Coding9JS`, `Coding10CSS`, `Coding10JS`, `Coding11CSS`, `Coding11JS`, `Coding12CSS`, `Coding12JS`, `infoCoding1`, `infoCoding2`, `infoCoding3`, `infoCoding4`, `infoCoding5`, `infoCoding6`, `infoCoding7`, `infoCoding8`, `infoCoding9`, `infoCoding10`, `infoCoding11`, `infoCoding12`, `created_at`, `updated_at`) VALUES
(4, 'visual_studio_code_20240817235623', 'Visual Studio Code', '1723917329_5551c43ce2b6fdeb998f.png', 'Wildan Athif Muttaqien', 'Sat Aug 17 2024', 'Visual Studio Code (VSCode) adalah editor kode sumber yang ringan dan dapat dikustomisasi, dirancang untuk pengembangan perangkat lunak di berbagai bahasa pemrograman. VSCode mendukung berbagai platform, termasuk Windows, macOS, dan Linux. Dengan antarmuka pengguna yang bersih dan intuitif, serta ekosistem yang kaya, VSCode memungkinkan pengembang untuk meningkatkan produktivitas dan kualitas kode mereka.\r\n<br><br>', 'Berikut adalah link download Visual Studio Code (VSCode):\r\n<br>\r\n<a style=\"color: red;\" href=\"https://code.visualstudio.com/download\" target=\"_blank\">https://code.visualstudio.com/download</a>', '<br><br>\r\nRekomendasi Extansions untuk Visual Studio Code (VSCode) untuk HTML & CSS:\r\n<br>\r\n<br>\r\n<div style=\"text-align: left\">\r\n<h3>1. Live Server</h3>\r\n<br>\r\nLive Server menyediakan fitur live reload yang memungkinkan Anda melihat perubahan yang Anda buat pada file HTML, CSS, atau JavaScript secara langsung di browser tanpa harus menyegarkan halaman secara manual.\r\n</div>', '<br>\r\n<div style=\"text-align: left\">\r\n<h3>2. Prettier</h3>\r\n<br>\r\nPrettier adalah alat yang sangat berguna untuk memastikan kode Anda terformat dengan konsisten dan otomatis, menghemat waktu, dan meningkatkan keterbacaan kode. Dengan dukungan untuk berbagai bahasa dan konfigurasi yang fleksibel, Prettier membantu menjaga standar kode di seluruh proyek dan tim pengembangan.\r\n</div>', '<br>\r\n<div style=\"text-align: left\">\r\n<h3>3. Auto Rename Tag</h3>\r\n<br>\r\nAuto Rename Tag adalah ekstensi yang sangat berguna untuk pengembangan web yang menggunakan HTML atau XML. Dengan fitur otomatisasi untuk memperbarui tag terkait, ekstensi ini membantu Anda menghindari kesalahan dan mempercepat proses pengeditan tag. Ini meningkatkan produktivitas dan memastikan konsistensi dalam penulisan kode tag HTML/XML.\r\n</div>', '<br>\r\n<div style=\"text-align: left\">\r\n<h3>4. Atom One Dark Theme</h3>\r\n<br>\r\nAtom One Dark Theme adalah tema gelap yang sangat populer karena desainnya yang estetis dan kemampuannya untuk mengurangi kelelahan mata serta meningkatkan fokus. Dengan warna sintaks yang jelas dan kesesuaian dengan berbagai bahasa pemrograman, tema ini menawarkan pengalaman pengkodean yang nyaman dan menyenangkan.\r\n</div>', '<br>\r\n<div style=\"text-align: left\">\r\n<h3>5. CodeSnap</h3>\r\n<br>\r\nCodeSnap adalah alat yang berguna untuk pengembang yang sering perlu membagikan tangkapan layar kode mereka dalam dokumentasi, blog, atau presentasi. Dengan kemudahan penggunaan, kualitas tinggi, dan opsi penyesuaian, CodeSnap membuat proses pembuatan gambar kode menjadi cepat dan efisien.\r\n</div>', '', '', '', '', '', '', '', '1723914033_2714fcdca8603f01eb3e.jpg', '1723914654_b2a0f7f3a26e3c36dc55.jpg', '1723916425_641959d3b411013299fc.jpg', '1723917223_993577dc4011e34abfc2.jpg', '1723917223_5d997a8849040dd84e89.jpg', '1723917223_317392847662b0d30890.jpg', '', '', '', '', 'E-Learning', 2, '_20240817235623', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', NULL, NULL),
(5, 'belajar_html_css_-_part_1_20240818005638', 'Belajar HTML & CSS - Part 1', '1723957615_03b59de518739bc1b82f.png', 'Wildan Athif Muttaqien', 'Sun Aug 18 2024', 'HTML (HyperText Markup Language) adalah bahasa markup standar yang digunakan untuk membuat dan menyusun halaman web dan aplikasi web. HTML mendefinisikan struktur dan konten halaman web dengan menggunakan elemen dan tag yang ditandai dengan tanda kurung sudut (< >).\r\n<br><br>\r\nCSS (Cascading Style Sheets) adalah bahasa stylesheet yang digunakan untuk mendesain dan mengatur tampilan halaman web yang ditulis dalam HTML. CSS memungkinkan pengembang untuk mengontrol layout, warna, font, dan elemen desain lainnya dari halaman web secara terpisah dari struktur HTML-nya. Dengan CSS, Anda dapat menciptakan desain yang konsisten di seluruh halaman dan situs web.\r\n<br><br>\r\nSumber materi dari:\r\n<br>\r\n<a style=\"color: red;\" href=\"https://code.visualstudio.com/download\" target=\"_blank\">https://www.w3schools.com/html/default.asp</a>', '<br>\r\n<div style=\"text-align:left\">\r\n<h3>Berikut beberapa contoh element pada HTML:</h3>\r\n<br>\r\n1. Penggunaan Heading dan Paragraph di HTML\r\n</div>\r\n<br>', '<br>\r\n2. Penggunaan List di HTML', '<br>\r\n3. Hyperlink pada HTML', '<br>\r\n4. Cara Menampilkan Gambar', '<br>\r\n5. Menggunakan Table di HTML', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'E-Learning', 9, '_20240818005638', '', '<!-- Heading h1 - h6 bersifat block -->\r\n<h1>Contoh Heading h1</h1>\r\n<h2>Contoh Heading h2</h2>\r\n<h3>Contoh Heading h3</h3>\r\n<h4>Contoh Heading h4</h4>\r\n<h5>Contoh Heading h5</h5>\r\n<h6>Contoh Heading h6</h6>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Paragraph bersifat block -->\r\n<p>Contoh paragaph 1.</p>\r\n<p>Contoh paragaph 2.</p>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Huruf tebal, miring, dan garis bawah bersifat inline-->\r\n<b>Ini teks tebal!</b>\r\n<br>\r\n<i>Ini teks miring!</i>\r\n<br>\r\n<u>Ini teks dengan garis bawah!</u>\r\n\r\n<br><br><hr><br>\r\n\r\n<p>Ini adalah paragraph yang di dalamnya ada <strong>teks tebal!</strong></p>\r\n<p>Ini adalah paragraph yang di dalamnya ada <em>teks miring!</em></p>', '<!-- List pada HTML -->\r\n\r\n<h3>List dengan tag Ordered List</h3>\r\n<!-- Type: 1, A, a, I, i  -->\r\n<ol type=\"1\">\r\n    <li>List 1</li>\r\n    <li>List 2</li>\r\n    <li>List 3</li>\r\n</ol>\r\n\r\n<br><hr><br>\r\n\r\n<h3>List dengan tag Unordered List</h3>\r\n<!-- Type: dics, square, circle  -->\r\n<ul Type=\"dics\">\r\n    <li>List 1</li>\r\n    <li>List 2</li>\r\n    <li>List 3</li>\r\n</ul>\r\n\r\n<br><hr><br>\r\n\r\n<h3>List dengan tag Description List, Definition Term, Definition Description</h3>\r\n<!-- Type: dics, square, circle  -->\r\n<dl Type=\"dics\">\r\n    <dt>List 1</dt>\r\n    <dd>Deskripsi 1</dd>\r\n    <dt>List 2</dt>\r\n    <dd>Deskripsi 2</dd>\r\n    <dt>List 3</dt>\r\n    <dd>Deskripsi 3</dd>\r\n</dl>', '<!-- Atribut pada Anchor -->\r\n<h3>Bentuk dari Hyperlink di HTML</h3>\r\n<a href=\"https://www.instagram.com/athif_kyuziera?igsh=NHFsazN2a2diM3Rp\">Hyperlink 1</a>\r\n<br>\r\n<a href=\"https://www.instagram.com/asion_pkmkc2024?igsh=MTR2OHY5YnhncGwxMA==\" target=\"_blank\">Hyperlink 2</a>\r\n\r\n<br><hr><br>\r\n\r\n<h3>Bisa untuk Berpindah Halaman</h3>\r\n<!-- Berpindah ke halaman lain dalam satu folder -->\r\n<a href=\"tester2.html\">Pindah ke halaman 2</a>\r\n\r\n<br>\r\n\r\n<!-- Berpindah ke halaman lain dengan masuk folder di tingkat bawahnya -->\r\n<a href=\"Nama Folder/\">Pindah ke halaman 3</a>\r\n\r\n<br>\r\n\r\n<!-- Berpindah ke halaman lain dengan masuk folder di tingkat atas -->\r\n<a href=\"../tester.html\">Pindah ke halaman 1</a>\r\n\r\n<br><br><hr><br>\r\n\r\n<h3>Bisa untuk Berpindah ke Bagian Tertentu</h3>\r\n\r\n<ul>\r\n    <li><a href=\"#bagian1\">Pergi ke bagian 1</a></li>\r\n    <li><a href=\"#bagian2\">Pergi ke bagian 2</a></li>\r\n    <li><a href=\"tester3.html#bagian3\">Pergi ke bagian 3 di halaman berbeda</a></li>\r\n</ul>', '<!-- Image beserta atributnya -->\r\n\r\n<h3>Gambar Dengan Tittle</h3>\r\n<img src=\"/Sample 1.jpg\" width=\"200\" title=\"Ini foto Wildan\">\r\n\r\n<br><br><hr>\r\n\r\n<h3>Mengatur Ratio Dengan Width & Height</h3>\r\n<img src=\"/Sample 2.jpg\" width=\"200\" height=\"338\">\r\n\r\n<br><br><hr>\r\n\r\n<h3>Menggunakan Object Fit</h3>\r\n<img src=\"/Sample 3.jpg\" width=\"200\" style=\"aspect-ratio: 2/3; object-fit: cover;\">\r\n\r\n<br><br><hr>\r\n\r\n<h3>Menampilkan Gambar Pada Folder Lain</h3>\r\n<img src=\"/Nama Folder/Sample 4.jpg\" width=\"200\">\r\n\r\n<br><br><hr>\r\n\r\n<h3>Teks Menggantikan Gambar yang Tidak Ada</h3>\r\n <img src=\"/Sample.jpg\" width=\"200\" alt=\"Teks Pengganti\">', '<!-- Table beserta atributnya -->\r\n\r\n<h3>Bentuk Table Sederhana</h3>\r\n<br>\r\n\r\n<table border=\"1\" cellpadding=\"5\" cellspacing=\"1\">\r\n 	<tr>\r\n      	<td>Baris 1, Kolom 1</td>\r\n     	<td>Baris 1, Kolom 2</td>\r\n  	</tr>\r\n    <tr>\r\n      	<td>Baris 2, Kolom 1</td>\r\n     	<td>Baris 2, Kolom 2</td>\r\n  	</tr>\r\n</table>\r\n\r\n<br><hr><br>\r\n\r\n<h3>Bentuk Table Dengan CSS</h3>\r\n\r\n<table class=\"table\" border=\"1px\" width=\"300px\">\r\n    <tr>\r\n        <th>No</th>\r\n        <th>Nama</th>\r\n        <th>Posisi</th>\r\n        <th>Gaji</th>\r\n    </tr>\r\n    <tr>\r\n        <td>1</td>\r\n        <td>John Doe</td>\r\n        <td>Manajer</td>\r\n        <td>$5000</td>\r\n    </tr>\r\n    <tr>\r\n        <td>2</td>\r\n        <td>Jane Smith</td>\r\n        <td>Supervisor</td>\r\n        <td>$3500</td>\r\n    </tr>\r\n    <tr>\r\n        <td>3</td>\r\n        <td>Bob Johnson</td>\r\n        <td>Staf</td>\r\n        <td>$2500</td>\r\n    </tr>\r\n</table>\r\n\r\n<!-- Penggunaan Rowspan & Colspan -->\r\n\r\n<h3>Rowspan dan Colspan</h3>\r\n\r\n<table class=\"table\" border=\"1px\" width=\"400px\">\r\n    <tr>\r\n        <th rowspan=\"2\">Nama</th>\r\n        <th colspan=\"2\">Informasi Kontak</th>\r\n    </tr>\r\n    <tr>\r\n        <th>Email</th>\r\n        <th>Telepon</th>\r\n    </tr>\r\n    <tr>\r\n        <td>John Doe</td>\r\n        <td>johndoe@example.com</td>\r\n        <td>+62-123-4567</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Jane Doe</td>\r\n        <td>janedoe@example.com</td>\r\n        <td>+62-987-6543</td>\r\n    </tr>\r\n</table>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '/* CSS untuk tabel */\r\n.table {\r\n    width: 80%;\r\n    margin: 20px auto;\r\n    border-collapse: collapse;\r\n}\r\n\r\n.table tr th, .table tr td {\r\n    padding: 12px;\r\n    text-align: left;\r\n    border-bottom: 1px solid #ddd;\r\n    background-color: #f9f9f9;\r\n    transition: background-color 0.2s ease-in-out;\r\n}\r\n\r\n.table tr th {\r\n    background-color: #007BFF;\r\n    color: #fff;\r\n    text-transform: uppercase;\r\n    font-weight: bold;\r\n}', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', 'html runcode', 'html runcode', 'html runcode', 'html runcode', 'html runcode', 'none', 'none', 'none', 'none', 'none', 'none', NULL, NULL),
(6, 'belajar_html_css_-_part_2_20240819130927', 'Belajar HTML & CSS - Part 2', '1724047767_34cb3e6c10888e92323a.png', 'Wildan Athif Muttaqien', 'Mon Aug 19 2024', 'CSS (Cascading Style Sheets) adalah bahasa stylesheet yang digunakan untuk mendesain dan mengatur tampilan halaman web yang ditulis dalam HTML. CSS memungkinkan pengembang untuk mengontrol layout, warna, font, dan elemen desain lainnya dari halaman web secara terpisah dari struktur HTML-nya. Dengan CSS, Anda dapat menciptakan desain yang konsisten di seluruh halaman dan situs web.\r\n<br><br>\r\n\r\nSumber materi dari:\r\n<br>\r\n<a style=\"color: red;\" href=\"https://code.visualstudio.com/download\" target=\"_blank\">https://www.w3schools.com/html/default.asp</a>', '<br>\r\n<div style=\"text-align:left\">\r\n<h3>Berikut beberapa penggunaan element HTML dengan CSS:</h3>\r\n<br>\r\n1. Menggunakan Div di HTML Tahap Awal\r\n</div>\r\n<br>', '<br>\r\n2. Selek Class dan ID di CSS', '<br>\r\n3. Membentuk Div dengan CSS', '<br>\r\n4. Membuat Div ke Berbagai Bentuk', '<br>\r\n5. Membuat Button di HTML dan CSS', '<br>\r\n6. Membuat Komposisi Halaman Sederhana', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'E-Learning', 13, '_20240819130927', '', '<!-- Penggunaan Div di HTML -->\r\n\r\n<!-- Div berfungsi sebagai pembungkus dan bersifat block -->\r\n<div style=\"color: red;\">\r\n    <a>Ini adalah teks inline di dalam div atau pembungkus.</a>\r\n</div>\r\n<a>Ini adalah teks inline di luar div</a>\r\n\r\n<br><br><hr><br>\r\n\r\n<!-- Div bisa membungkus elemen lebih dari satu -->\r\n<div style=\"color: #0000ff\">\r\n    <p>Ini adalah paragraf tag p</p>\r\n    <a href=\"\">Ini adalah hyperlink tag a</a>\r\n</div>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Div bisa membungkus div lainnya -->\r\n<div>\r\n    <div style=\"color:rgb(0, 128, 0)\"><p>Ini adalah paragraf di dalam div di dalam div</p></div>\r\n    <p>Ini adalah paragraf di dalam div</p>\r\n</div>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Span mirip seperti Div, namun bersifat Inline -->\r\n<span style=\"color: hsl(46, 100%, 50%)\">\r\n    <a>Ini anchor di dalam span</a>\r\n</span>\r\n<a style=\"color: hwb(0 16% 35%)\">Ini anchor di dalam span</a>', '<!-- Memberikan class atau id pada tag HTML -->\r\n<p class=\"tagPClass\">Ini adalah paragraf dengan class</p>\r\n<p id=\"tagPClass\">Ini adalah paragraf dengan id</p>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Seleksi CSS bertingkat -->\r\n<div class=\"tagDivClass\">\r\n    <h3>Ini adalah tag Heading</h3>\r\n    <p>Ini adalah tag paragraph 1</p>\r\n    <p>Ini adalah tag paragraph 2</p>\r\n</div>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Menggunakan style yang sama untuk dua element yang berbeda kelas -->\r\n<p class=\"tagPClass1\">Ini adalah paragraf 1 dengan desain A</p>\r\n<p class=\"tagPClass2\">Ini adalah paragraf 1 dengan desain B</p>', '<!-- Membuat sebuah kotak dengan div -->\r\n<div class=\"divSquareSample\"></div>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Membuat sebuah lingkaran dengan div -->\r\n<div class=\"divCircleSample\"></div>', '<!-- Membuat sebuah kotak di daman lingkaran dengan 2 div -->\r\n<div class=\"divCircleSample2\">\r\n    <div class=\"divSquareSample2\"></div>\r\n</div>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Membuat div yang bertingkat dan diletakkan di tengah -->\r\n<div class=\"divSquareSample3\">\r\n    <div class=\"divSquareSample3A\"></div>\r\n</div>\r\n\r\n<br><hr><br>\r\n\r\n<!-- Membuat div yang bertingkat dan diletakkan di tengah -->\r\n<div class=\"divSquareSample3\">\r\n    <div class=\"divSquareSample3A\">\r\n        <div class=\"divCircleSample3\">\r\n          <div class=\"divCircleSample3A\"></div>\r\n      </div>\r\n    </div>\r\n</div>', '<!-- Button sederhana di HTML -->\r\n<button>\r\n    Ini adalah Button\r\n</button>\r\n\r\n<br><br>\r\n\r\n<!-- Button di dalam Anchor -->\r\n<a href=\"https://www.gsmarena.com/\">\r\n    <button>\r\n        Anchor dengan Button\r\n    </button>\r\n</a>\r\n\r\n<br><br>\r\n\r\n<!-- Penggunaan button dengan CSS -->\r\n<button class=\"buttonSampleStyle\">\r\n    Button dengan CSS\r\n</button>', '<div class=\"container\">\r\n        <div class=\"header\">\r\n            <h1>Judul Halaman</h1>\r\n        </div>\r\n\r\n        <div class=\"main-content\">\r\n          \r\n            <div class=\"sidebar\">\r\n                <h2>Sidebar</h2>\r\n                <p>Ini adalah area sidebar dengan beberapa teks di dalamnya.</p>\r\n            </div>\r\n            <div class=\"article\">\r\n                <h2>Artikel Utama</h2>\r\n                <p>Ini adalah artikel utama. Di sini Anda dapat menulis konten utama dari halaman Anda.</p>\r\n                <p>Anda bisa menambahkan lebih banyak konten atau elemen HTML di sini.</p>\r\n            </div>\r\n          \r\n        </div>\r\n\r\n        <div class=\"footer\">\r\n            <p>© 2024 Nama Anda. Semua hak dilindungi.</p>\r\n        </div>\r\n</div>', '', '', '', '', '', '', '', '', '', '/* Cara mengidentifikasi class dan id di CSS */\r\n.tagPClass {\r\n    font-family: \'Courier New\', Courier, monospace;\r\n    font-size: larger;\r\n    font-weight: 600;\r\n    color: brown;\r\n}\r\n#tagPClass {\r\n    font-family: Cambria, Cochin, Georgia, Times, \'Times New Roman\', serif;\r\n    font-size: 20px;\r\n    text-align: center;\r\n}\r\n\r\n\r\n/* Memanggil tag di dalam tag di CSS */\r\n.tagDivClass {\r\n    background: rgb(209, 209, 209);\r\n    padding: 1px;\r\n    border-radius: 1em;\r\n}\r\n.tagDivClass h3 {\r\n    color: rgb(9, 126, 235);\r\n}\r\n.tagDivClass p {\r\n    color: rgb(175, 9, 235);\r\n}\r\n\r\n\r\n/* Penggunaan style yang sama untuk dua kelas */\r\n.tagPClass1, .tagPClass2 {\r\n    font-family: Arial, Helvetica, sans-serif;\r\n    font-size: larger;\r\n}\r\n.tagPClass1 {\r\n    font-weight: 600;\r\n    color: red;\r\n}\r\n.tagPClass2 {\r\n    font-weight: 500;\r\n    color: blue;\r\n}\r\n', '', '/* Membentuk kotak */\r\n.divSquareSample {\r\n  background: red;\r\n  width: 250px;\r\n  height: 250px;\r\n  margin: 20px;\r\n}\r\n\r\n/* Membentuk lingkaran */\r\n.divCircleSample {\r\n  background: linear-gradient(45deg, #ff9e36 0%, #f30aa9 100%);\r\n  width: 250px;\r\n  height: 250px;\r\n  border: 4px solid black;\r\n  border-radius: 10em;\r\n  margin: 20px;\r\n}', '', '/* Membuat lingkaran dan kotak */\r\n.divCircleSample2 {\r\n  background: linear-gradient(\r\n    45deg,\r\n    #f09433 0%,\r\n    #e6683c 25%,\r\n    #dc2743 50%,\r\n    #cc2366 75%,\r\n    #bc1888 100%\r\n  );\r\n  width: 250px;\r\n  height: 250px;\r\n  border-radius: 10em;\r\n}\r\n.divSquareSample2 {\r\n  background: rgb(54, 54, 54);\r\n  width: 100px;\r\n  height: 100px;\r\n  border-radius: 2em 1em 3em 1.5em;\r\n}\r\n\r\n\r\n/* Membuat item di dalam div berada di tengah */\r\n.divSquareSample3 {\r\n  background: linear-gradient(\r\n    45deg,\r\n    #f09433 0%,\r\n    #e6683c 25%,\r\n    #dc2743 50%,\r\n    #cc2366 75%,\r\n    #bc1888 100%\r\n  );\r\n  width: 250px;\r\n  height: 250px;\r\n  border-radius: 3em;\r\n  display: flex;\r\n  align-items: center;\r\n  justify-content: center;\r\n}\r\n.divSquareSample3A {\r\n  border: 16px solid white;\r\n  width: 160px;\r\n  height: 160px;\r\n  border-radius: 3em;\r\n  display: flex;\r\n  align-items: center;\r\n  justify-content: center;\r\n}\r\n\r\n\r\n/* Menambahkan div yang bertingkat */\r\n.divCircleSample3 {\r\n  border: 16px solid white;\r\n  width: 70px;\r\n  height: 70px;\r\n  border-radius: 10em;\r\n  display: flex;\r\n  align-items: center;\r\n  justify-content: center;\r\n}\r\n\r\n/* Menyesuaikan tata letak div tanpa mengganggu div lainnya */\r\n.divCircleSample3A {\r\n    background: white;\r\n    width: 20px;\r\n    height: 20px;\r\n    border-radius: 10em;\r\n    transform: translate(262%, -262%);\r\n}', '', '/* Penggunaan style CSS untuk button */\r\n.buttonSampleStyle {\r\n    background: #7ed6df;\r\n    border: 0;\r\n    border-right: #22a6b3 4px solid;\r\n    border-bottom: #22a6b3 4px solid;\r\n    border-radius: 0.5em;\r\n    padding: 6px 18px;\r\n    font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;\r\n    font-size: medium;\r\n    transition: all 200ms ease-in-out;\r\n}\r\n.buttonSampleStyle:hover {\r\n    background: #ff7979;\r\n    border-right: #eb4d4b 4px solid;\r\n    border-bottom: #eb4d4b 4px solid;\r\n    transition: all 200ms ease-in-out;\r\n}\r\n.buttonSampleStyle:active {\r\n    background: #badc58;\r\n    margin-top: 3px;\r\n    margin-left: 3px;\r\n    border-right: #6ab04c 1px solid;\r\n    border-bottom: #6ab04c 1px solid;\r\n    transition: all 50ms ease-in-out;\r\n}', '', '.container {\r\n    width: 80%;\r\n    margin: 20px auto;\r\n    padding: 20px;\r\n    background-color: #f4f4f4;\r\n    border: 1px solid #ddd;\r\n}\r\n.header, .footer {\r\n    background-color: #333;\r\n    color: white;\r\n    padding: 10px;\r\n    text-align: center;\r\n}\r\n.main-content {\r\n    display: flex;\r\n    justify-content: space-between;\r\n}\r\n.sidebar {\r\n    width: 30%;\r\n    background-color: #e2e2e2;\r\n    padding: 10px;\r\n}\r\n.article {\r\n    width: 70%;\r\n    background-color: #fff;\r\n    padding: 10px;\r\n}\r\n.footer {\r\n    margin-top: 10px;\r\n}', '', '', '', '', '', '', '', '', '', '', '', 'none', 'html runcode', 'html runcode', 'html runcode', 'html runcode', 'html runcode', 'html runcode', 'none', 'none', 'none', 'none', 'none', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
