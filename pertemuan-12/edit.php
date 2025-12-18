<?php
 session_start();
 require 'koneksi.php';
 require'fungsi.php';

$cid = filter_input(
    INPUT_GET,
    'cid',
    FILTER_VALIDATE_INT,
    ['options' => ['min_range' => 1]]
);
if (!$cid) {
    $_SESSION['flash_error'] = "Akses tidak valid";
    redirect_ke('read.php');
    exit;
}
$stmt = mysqli_prepare(
    $conn,
    "SELECT cid, cnama, cemail, cpesan 
     FROM tbl_tamu 
     WHERE cid = ? 
     LIMIT 1"
);
if (!$stmt) {
    $_SESSION['flash_error'] = "Query tidak benar";
    redirect_ke('read.php');
    exit;
}
mysqli_stmt_bind_param($stmt, "i", $cid);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

 if (!$row) {
    $_SESSION['flash_error'] = "Data tidak ditemukan";
    redirect_ke('read.php');
}

$nama   = $row['cnama']  ?? '';
$email  = $row['cemail'] ?? '';
$pesan  = $row['cpesan'] ?? '';

$flash_error = $_SESSION['flash_error'] ?? [];
$old         = $_SESSION['old'] ?? [];

unset($_SESSION['flash_error'], $_SESSION['old']);
if (!empty($old)) {
    $nama   = $old['nama']   ?? $nama;
    $email  = $old['email']  ?? $email;
    $pesan  = $old['pesan']  ?? $pesan;
}
?>
<?php
session_start();

$flash_error = $_SESSION['flash_error'] ?? '';
$old         = $_SESSION['old'] ?? [];

unset($_SESSION['flash_error'], $_SESSION['old']);

$nama   = $old['nama']   ?? '';
$email  = $old['email']  ?? '';
$pesan  = $old['pesan']  ?? '';
$captcha= $old['captcha']?? '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <button class="menu-toggle" aria-label="Toggle Navigation">
        ☰
    </button>
    <nav>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="bukutamu.php">Buku Tamu</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </nav>
</header>

<main id="contact">
    <h2>Buku Tamu</h2>

    <!-- FLASH ERROR -->
    <?php if (!empty($flash_error)) : ?>
        <div style="
            padding:10px;
            margin-bottom:10px;
            background:#f8d7da;
            color:#721c24;
            border-radius:6px;">
            <?= $flash_error; ?>
        </div>
    <?php endif; ?>

    <form action="proses_update.php" method="POST">

        <input type="txt" name="cid" value="<?= (int)$cid; ?>">

        <label>
            Nama Lengkap
            <input type="text"
                   name="nama"
                   value="<?= htmlspecialchars($nama); ?>"
                   placeholder="Masukkan nama"
                   required
                   autocomplete="name">
        </label>

        <label>
            Email
            <input type="email"
                   name="email"
                   value="<?= htmlspecialchars($email); ?>"
                   placeholder="Masukkan email"
                   required
                   autocomplete="email">
        </label>

        <label>
            Pesan Anda
            <textarea name="pesan"
                      placeholder="Tulis pesan anda"
                      rows="4"
                      required><?= htmlspecialchars($pesan); ?></textarea>
        </label>

        <label>
            Jawab: 3 + 2 = ?
            <input type="text"
                   name="captcha"
                   value="<?= htmlspecialchars($captcha); ?>"
                   placeholder="Jawaban"
                   required>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">batal</button>
        <a href="read.php" class="reset">Kembali</a>
    </form>

    </section>
    </main>

    <script src="script.js"></script>
</body>
</html>




