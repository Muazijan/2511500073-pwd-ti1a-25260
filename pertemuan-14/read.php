<?php
// koneksi database
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Biodata Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
            padding: 10px;
            border: 1px solid #333;
        }
        td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        .link-aksi {
            text-decoration: none;
            color: blue;
            margin: 0 5px;
        }
    </style>
</head>
<body>

<h2>Daftar Biodata Mahasiswa</h2>

<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] === 'sukses') {
        echo '<p style="color: green;">Data berhasil diproses.</p>';
    } elseif ($_GET['status'] === 'gagal') {
        echo '<p style="color: red;">Terjadi kesalahan.</p>';
    }
}
?>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Hobi</th>
            <th>Pasangan</th>
            <th>Pekerjaan</th>
            <th>Nama Orang Tua</th>
            <th>Nama Kakak</th>
            <th>Nama Adik</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;

        // Query aman tanpa kolom tidak dikenal
        $sql = "SELECT * FROM mahasiswa ORDER BY nim ASC";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "<tr><td colspan='12'>Data tidak dapat ditampilkan.</td></tr>";
        } else {
            while ($d = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td>
                <a class="link-aksi" href="edit.php?nim=<?= urlencode($d['nim']); ?>">Edit</a>
                |
                <a class="link-aksi"
                   href="hapus.php?nim=<?= urlencode($d['nim']); ?>"
                   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                   Delete
                </a>
            </td>
            <td><?= htmlspecialchars($d['nim']); ?></td>
            <td><?= htmlspecialchars($d['nama_lengkap']); ?></td>
            <td><?= htmlspecialchars($d['tempat_lahir']); ?></td>
            <td><?= htmlspecialchars($d['tanggal_lahir']); ?></td>
            <td><?= htmlspecialchars($d['hobi']); ?></td>
            <td><?= htmlspecialchars($d['pasangan']); ?></td>
            <td><?= htmlspecialchars($d['pekerjaan']); ?></td>
            <td><?= htmlspecialchars($d['nama_orang_tua']); ?></td>
            <td><?= htmlspecialchars($d['nama_kakak']); ?></td>
            <td><?= htmlspecialchars($d['nama_adik']); ?></td>
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<br>
<a href="index.php">➕ Tambah Data Baru</a>

</body>
</html>
