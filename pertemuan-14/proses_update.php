<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

/* hanya izinkan POST */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read.php');
}

/* validasi NIM */
$nim = bersihkan($_POST['nim'] ?? '');
if ($nim === '') {
    $_SESSION['flash_error'] = 'NIM tidak valid.';
    redirect_ke('read.php');
}

/* ambil & sanitasi data */
$nama     = bersihkan($_POST['nama_lengkap'] ?? '');
$tempat  = bersihkan($_POST['tempat_lahir'] ?? '');
$tgl      = bersihkan($_POST['tanggal_lahir'] ?? '');
$hobi     = bersihkan($_POST['hobi'] ?? '');
$pasangan = bersihkan($_POST['pasangan'] ?? '');
$kerja    = bersihkan($_POST['pekerjaan'] ?? '');
$ortu     = bersihkan($_POST['nama_orang_tua'] ?? '');
$kakak    = bersihkan($_POST['nama_kakak'] ?? '');
$adik     = bersihkan($_POST['nama_adik'] ?? '');

/* validasi */
$errors = [];

if ($nama === '')   $errors[] = 'Nama wajib diisi.';
if ($tempat === '')$errors[] = 'Tempat lahir wajib diisi.';
if ($tgl === '')   $errors[] = 'Tanggal lahir wajib diisi.';

if (!empty($errors)) {
    $_SESSION['old'] = $_POST;
    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('edit.php?nim=' . urlencode($nim));
}

/* prepared statement UPDATE */
$stmt = mysqli_prepare(
    $conn,
    "UPDATE mahasiswa SET
        nama_lengkap = ?,
        tempat_lahir = ?,
        tanggal_lahir = ?,
        hobi = ?,
        pasangan = ?,
        pekerjaan = ?,
        nama_orang_tua = ?,
        nama_kakak = ?,
        nama_adik = ?
     WHERE nim = ?"
);

if (!$stmt) {
    $_SESSION['flash_error'] = 'Kesalahan sistem (prepare gagal).';
    redirect_ke('edit.php?nim=' . urlencode($nim));
}

/* bind parameter */
mysqli_stmt_bind_param(
    $stmt,
    "ssssssssss",
    $nama, $tempat, $tgl, $hobi, $pasangan,
    $kerja, $ortu, $kakak, $adik, $nim
);

/* eksekusi */
if (mysqli_stmt_execute($stmt)) {
    unset($_SESSION['old']);
    $_SESSION['flash_sukses'] = 'Data berhasil diperbarui.';
    redirect_ke('read.php');
} else {
    $_SESSION['flash_error'] = 'Data gagal diperbarui.';
    redirect_ke('edit.php?nim=' . urlencode($nim));
}

mysqli_stmt_close($stmt);
