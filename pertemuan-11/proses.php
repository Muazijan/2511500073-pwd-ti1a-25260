<?php
session_start();
require_once 'koneksi.php';
require_once 'fungsi.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('index.php#contact');
}


$nama  = bersihkan($_POST['txtNama'] ?? '');
$email = bersihkan($_POST['txtEmail'] ?? '');
$pesan = bersihkan($_POST['txtPesan'] ?? '');


$_SESSION['old'] = [
    'nama' => $nama,
    'email' => $email,
    'pesan' => $pesan
];


if ($nama !== '' && strlen($nama) < 3) $errors[] = "Nama minimal 3 karakter.";
if ($pesan !== '' && strlen($pesan) < 10) $errors[] = "Pesan minimal 10 karakter.";
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Format email tidak valid.";



if (!empty($errors)) {
    $_SESSION['msg'] = implode(' ', $errors);
    redirect('index.php#contact');
}

$sql = "INSERT INTO tbl_tamu (cnama, cemail, cpesan) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    $_SESSION['msg'] = "Gagal mempersiapkan query: " . $conn->error;
    redirect('index.php#contact');
}

$stmt->bind_param("sss", $nama, $email, $pesan);

if ($stmt->execute()) {
    $_SESSION['msg'] = "Pesan berhasil dikirim.";
    unset($_SESSION['old']);
} else {
    $_SESSION['msg'] = "Gagal menyimpan data: " . $stmt->error;
}


redirect('index.php#contact');
