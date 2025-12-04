<?php
require 'koneksi.php';

$sql = "SELECT * FORM tbl_tamu ORDER BY cid DSC";
$q = mysqli_query($conn, $sql);
?>
<table border="1" cellpadding="8" cellspcing="0">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($q)): ?>
        <tr>
            <td><?= $row['cid']; ?></td>
            <td><?= htmlspecialchars($row['cnama']) ?></td>
            <td><?= htmlspecialchars($row['cemail']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['cnama'])); ?></td>
        </tr>
        <?php endwhile; ?>
        </table>