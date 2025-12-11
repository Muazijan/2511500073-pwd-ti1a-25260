<?php
require_once 'koneksi.php';

$sql = "SELECT cid, cnama, cemail, cpesan, dcreated_at FROM tbl_tamu ORDER BY cid DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<table border='1' cellpadding='4'>";
    echo "<tr><th>No</th><th>Nama</th><th>Email</th><th>Pesan</th><th>Dibuat</th></tr>";
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$no}</td>";
        echo "<td>" . htmlspecialchars($row['cnama']) . "</td>";
        echo "<td>" . htmlspecialchars($row['cemail']) . "</td>";
        echo "<td>" . nl2br(htmlspecialchars($row['cpesan'])) . "</td>";
        echo "<td>" . $row['dcreated_at'] . "</td>";
        echo "</tr>";
        $no++;
    }
    echo "</table>";
} else {
    echo "<p>Belum ada data tamu.</p>";
}
