<?php
require 'koneksi.php';


$fieldContact = [
    "nama"  => ["label" => "Nama:",  "suffix" => ""],
    "email" => ["label" => "Email:", "suffix" => ""],
    "pesan" => ["label" => "Pesan Anda:", "suffix" => ""]
];


$sql  = "SELECT * FROM tbl_tamu ORDER BY cid DESC";
$q    = mysqli_query($conn, $sql);


if (!$q) {
    echo "<p>Gagal membaca data tamu: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
}


elseif (mysqli_num_rows($q) == 0) {
    echo "<p>Belum ada data tamu yang tersimpan.</p>";
}

else {
    while ($row = mysqli_fetch_assoc($q)) {


        $arrContact = [
            "nama"  => $row["cnama"]  ?? "",
            "email" => $row["cemail"] ?? "",
            "pesan" => $row["cpesan"] ?? ""
        ];

        echo tampilkanBiodata($fieldContact, $arrContact);
    }
}

function tampilkanBiodata($field, $data) {
    $html = "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>";

    foreach ($field as $key => $info) {
        $label  = $info["label"];
        $value  = htmlspecialchars($data[$key]);
        $suffix = $info["suffix"];

        $html .= "<p><strong>$label</strong> $value $suffix</p>";
    }

    $html .= "</div>";
    return $html;
}
?>
