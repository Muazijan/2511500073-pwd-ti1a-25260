<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

/*
  Validasi NIM wajib ada & string
*/
$nim = filter_input(INPUT_GET, 'nim', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$nim) {
    $_SESSION['flash_error'] = 'NIM tidak valid.';
    redirect_ke('read.php');
}

/*
  Prepared statement DELETE (AMAN SQL Injection)
*/
$stmt = mysqli_prepare(
    $conn,
    "DELETE FROM mahasiswa WHERE nim = ?"
);

if (!$stmt) {
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('read.php');
}

/*
  Bind parameter
  s = string (karena NIM varchar)
*/
mysqli_stmt_bind_param($stmt, "s", $nim);

/*
  Eksekusi
*/
if (mysqli_stmt_execute($stmt)) {
    $_SESSION['flash_sukses'] = 'Data berhasil dihapus.';
} else {
    $_SESSION['flash_error'] = 'Data gagal dihapus.';
}

/*
  Tutup statement
*/
mysqli_stmt_close($stmt);

/*
  PRG Pattern
*/
redirect_ke('read.php');
