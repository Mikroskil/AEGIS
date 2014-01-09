<?php
session_start();
if(!isset($_SESSION['userID'])) {
header('location:login.php'); }
else { $username = $_SESSION['userID']; }
require_once("koneksi.php"); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Group Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">
	</head>

	<body>
		<header id="main-header" class="container">
        	<div class="container-up navbar navbar-inverse navbar-fixed-top">
                <nav class="navbar-inner">
                	<div class="container">
                        <ul class="nav">
                            <li><a href="HomePage.php">Home</a></li>
                            <li><a href="profil.php">Profile</a></li>
                            <li class="active"><a href="GroupPage.php">Group</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                            <form method="get" class="navbar-search" id="search">
                                <input name="q" type="text" class="search-query" placeholder="Search..." />
                            </form>
                            </li> 
                            <li><a href="#"><?php echo "$username" ?></a></li>
                            <li><a href="logout.php">Logout</a></li>              	
                        </ul>
                	</div>
                </nav>
    		</div>
		</header>
    
    	<section id="main-content" class="container content">
        	<div id="struktur">
            	<div id="strheader" class="container">
                <h2>Struktur Standar Penulisan Skripsi</h2>
                    <ul>
                        <li><h4><a href="#bab1">BAB I</a></h4></li>
                        <li><h4><a href="#bab2">BAB II</a></h4></li>
                        <li><h4><a href="#bab3">BAB III</a></h4></li>
                        <li><h4><a href="#bab4">BAB IV</a></h4></li>
                        <li><h4><a href="#bab5">BAB V</a></h4></li>
                        <li><h4><a href="#bab6">BAB VI</a></h4></li>
                    </ul>
            	</div>
                
                <div id="strcontent" class="container">
					
                    <ul>
                    <h3 id="bab1">BAB I. PENDAHULUAN</h3>
                    <p>Berisi latar belakang, identifikasi dan batasan masalah, maksud dan tujuan, metodologi, waktu dan lokasi penelitian dan sistematika penulisan.</p>
                    	<li>1.1	Latar Belakang Masalah</li>
                    	<li>1.2	Identifikasi Masalah</li>
                    	<li>1.3	Batasan Masalah</li>
                    	<li>1.4	Maksud dan Tujuan</li>
                    	<ul><li>1.4.1	Maksud</li>
                    		<li>1.4.2	Tujuan</li></ul>
                    	<li>1.5	Metodologi</li>
                    	<ul><li>1.5.1	Metodologi Pengumpulan Data</li>
                    		<li>1.5.2	Metodologi Pengembangan Sistem</li></ul>
                    	<li>1.6	Lokasi dan Waktu Penelitian</li>
                    		<ul><li>1.6.1	Lokasi Penelitian</li>
                    		<li>1.6.2	Waktu Penelitian</li></ul>
                    	<li>1.7	Sistematika Penulisan</li>
                    </ul>
                    
                    
                    <ul>
                    <h3 id="bab2">BAB II. Landasan Teori</h3>
                    <p>Berisi teori dasar yang mendukung penulisan TA atau Skripsi, mencakup metoda atau teknik yang digunakan, teori tentang permasalahan, uraian singkat perangkat implementasi yang dipakai, dan kerangka penyelesaian masalah. Contoh : Definisi SI yang sudah umum tidak perlu disertakan</p>
                        <li>2.1 Analisis dan Perancangan Sistem Informasi</li>
                        <ul><li>2.1.1 Pengertian</li>
                            <li>2.1.2 Teknik Analisis dan Perancangan Sistem Informasi</li>
                            <li>2.1.3 Perangkat Analisis dan Perancangan Sistem Informasi</li></ul>
                        <li>2.2 Teori tentang masalah yg dibahas</li>
                        <ul><li>2.2.1 Sistem Penjualan</li><ul>
                            <li>2.2.1.1 Pengertian</li>
                            <li>2.2.1.2 Macam-macam Penjualan</li></ul></ul>
                       	<li>2.3 Perangkat Implementasi Sistem</li>
                        <ul><li>2.3.1 Uraian singkat Bahasa Pemrograman Visual Basic 6.0</li>
                            <li>2.3.2 Pemrograman Client Server dengan Visual Basic 6.0</li></ul>
                    </ul>
                    
                    <ul>
                    <h3 id="bab3">BAB III. ANALISIS KEBUTUHAN</h3>
                    <li>3.1 Tinjauan Organisasi</li>
                        <ul><li>3.1.1 Sejarah singkat Organisasi</li>
                        <li>3.1.2 Struktur Organisasi dan Uraian Tugas</li></ul>
                    <li>3.2 Analisis Sistem ( Sistem berjalan/lama )</li>
                        <ul><li>3.2.1 Prosedur Kerja Sistem Penjualan</li>
                        	<li>3.2.2 Identifikasi Dokumen</li>
                            <ul><li>3.2.2.1  Dokumen Masukan</li>
                            <li>3.2.2.2. Dokumen Keluaran</li></ul>
                			<li>3.2.3 Identifikasi Kebutuhan Pemakai ( Kebutuhan akan Sistem rancangan baru, Kemampuan akan sistem yang akan dibuat. )</li></ul>
                    <li>3.3 Analisis Kebutuhan Sistem ( Sistem rancangan yg baru )
                        <ul><li>3.3.1 Kebutuhan Informasi</li>
                        <li>3.3.2 Kebutuhan Aplikasi</li>
                        <li>3.3.3 Kebutuhan Perangkat Keras</li></ul>
                    <li>3.4 Analisis Kebutuhan Perangkat Lunak ( Sistem rancangan yg baru )
                        <ul><li>3.4.1 Kebutuhan Fungsional Perangkat Lunak</li>
                        <li>3.4.2 Pemodelan Kebutuhan Fungsional</li>
                            <ul><li>3.4.2.1 Diagram Konteks</li>
                            <li>3.4.2.2 Diagram Alir Data</li>
                            <li>3.4.2.3 Kamus Data<li>
                            <li>3.4.2.4 Spesifikasi Proses</li></ul>
                        <li>3.4.3 Pemodelan Data Konseptual</li></ul>
                    <li>3.5 Kriteria dan Batasan sistem ( Sistem rancangan yg baru )*optional</li>	
                </ul>
                
                <ul>
                <h3 id="bab4">BAB IV. PERANCANGAN</h3>
                    <li>4.1 Usulan Struktur Organisasi yg  baru ( Bila ada )</li>
                    <li>4.2 Perancangan Sistem Informasi</li>
                        <ul><li>4.2.1 Perancangan Prosedur Kerja Sistem Baru</li></ul>
                    <li>4.3 Perancangan Perangkat Keras</li>
                        <ul><li>4.3.1 Arsitektur Konfigurasi Perangkat keras</li>
                        <li>4.3.2 Spesifikasi Perangkat Keras</li>
                        <li>4.3.3 Spesifikasi Perangkat Lunak</li></ul>
                    <li>4.4 Perancangan Basis Data</li>
                        <ul><li>4.4.1 Keterhubungan Antar Tabel</li>
                        <li>4.4.2 Deskripsi Tabel</li></ul>
                    <li>4.5 Perancangan Perangkat Lunak</li>
                        <ul><li>4.5.1 Arsitektur Perangkat Lunak</li>
                        <li>4.5.2 Antar Muka Pemakai</li>
                        <li>4.5.3 Algoritma Program</li></ul>
                </ul>
                
                <ul>
                <h3 id="bab5">BAB V. IMPLEMENTASI DAN PENGUJIAN</h3>
                    <li>5.1 Lingkungan Implementasi</li>
                        <ul><li>5.1.1 Perangkat Keras</li>
                        <li>5.1.2 Perangkat Lunak</li></ul>
                    <li>5.2 Hasil Implementasi</li>
                        <ul><li>5.2.1 Implementasi Basis Data</li>
                        <li>5.2.2 Implementasi Modul Program</li>
                        <li>5.2.3 Implementasi Antar Muka Pemakai</li></ul>
                    <li>5.3 Lingkungan Pengujian</li>
                        <ul><li>5.3.1 Perangakat Keras</li>
                        <li>5.3.2 Perangkat Lunak</li></ul>
                    <li>5.4 Pelaksanaan Pengujian</li>
                </ul>
                
                <ul>
                <h3 id="bab6">BAB VI. KESIMPULAN DAN SARAN</h3>
                    <li>6.1 Kesimpulan</li>
                    <li>6.2 Saran</li>
                </ul>
                
                </div>
            </div>
            
            <div id="strfooter" class="container">
            <a href="#"><button class="btn btn-primary">Back To Top</button></a>
            <a href="GroupPage.php"><button class="btn btn-primary">Back To Group Page</button></a>
            </div>
        </section>
    	<footer>
        	<div class="navbar">
            	<div class="navbar-inner" id="main-footer">
            			    Provided By AEGIS TEAM<br>
                            <a href="www.mikroskil.ac.id">Mikroskil</a>
            	</div>
            </div>
    	</footer>
        <script src="jquery/jquery.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
	</body>
</html>
