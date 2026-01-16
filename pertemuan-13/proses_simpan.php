<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['txtNim'])) {
    // Sanitasi data menggunakan fungsi bersihkan() sesuai kode Anda
    $nim       = bersihkan($_POST['txtNim'] ?? '');
    $nama      = bersihkan($_POST['txtNmLengkap'] ?? '');
    $tempat    = bersihkan($_POST['txtT4Lhr'] ?? '');
    $tanggal   = date('Y-m-d', strtotime(bersihkan($_POST['txtTglLhr'] ?? '')));
    $hobi      = bersihkan($_POST['txtHobi'] ?? '');
    $pasangan  = bersihkan($_POST['txtPasangan'] ?? '');
    $kerja     = bersihkan($_POST['txtKerja'] ?? '');
    $ortu      = bersihkan($_POST['txtNmOrtu'] ?? '');
    $kakak     = bersihkan($_POST['txtNmKakak'] ?? '');
    $adik      = bersihkan($_POST['txtNmAdik'] ?? '');

    // Validasi sederhana (Soal Poin 5)
    if ($nim === '' || $nama === '') {
        $_SESSION['flash_error'] = "NIM dan Nama Lengkap wajib diisi!";
        header("Location: index.php#biodata");
        exit;
    }

    // Query INSERT (Soal Poin 2)
    $sql = "INSERT INTO mahasiswa (NIM, Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Hobi, Pasangan, Pekerjaan, Nama_Orang_Tua, Nama_Kakak, Nama_Adik) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssssss", $nim, $nama, $tempat, $tanggal, $hobi, $pasangan, $kerja, $ortu, $kakak, $adik);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['flash_sukses'] = "Biodata berhasil disimpan.";
    } else {
        $_SESSION['flash_error'] = "Gagal menyimpan: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
    header("Location: index.php#biodata"); // Konsep PRG
    exit;
}