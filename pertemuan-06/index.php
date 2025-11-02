<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }

    

    #about, #contact {
      background-color: #7ca8fa;
      border-radius: 10px;
      padding: 20px;
      max-width: 700px;
      margin: 20px auto;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    #about h2, #contact h2 {
      color: #003366;
      border-bottom: 2px solid #003366;
      padding-bottom: 6px;
      margin-top: 0;
      margin-bottom: 16px;
    }

    #about p, #contact label {
      display: flex;
      justify-content: flex-start;
      align-items: baseline;
      margin: 0;
      padding: 6px 0;
      border-bottom: 1px solid #050505;
    }

    #about strong, #contact label > span {
      min-width: 180px;
      color: #080808;
      font-weight: 600;
      text-align: right;
      padding-right: 16px;
      flex-shrink: 0;
    }

    #contact input,
    #contact textarea {
      flex: 1;
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 8px;
      font-size: 14px;
      box-sizing: border-box;
      color: #000;
    }

    #contact button {
      margin-top: 10px;
      padding: 10px 24px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      border: none;
      margin-right: 8px;
      transition: all 0.3s ease;
    }

    #contact button[type="submit"] {
      background-color: #84eb24;
      color: #fff;
      font-weight: 600;
    }

    #contact button[type="reset"] {
      background-color: #ec1010;
      color: #272727;
      font-weight: 500;
    }

    #contact button[type="submit"]:hover {
      background-color: #0379ee;
      transform: translateY(-1px);
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    #contact button[type="reset"]:hover {
      background-color: #cccccc;
      transform: translateY(-1px);
    }

    footer {
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 12px 0;
      margin-top: 40px;
    }

    @media (max-width: 600px) {
      #about p,
      #contact label {
        flex-direction: column;
        align-items: flex-start;
      }

      #about strong,
      #contact label > span {
        text-align: left;
        padding-right: 0;
        margin-bottom: 4px;
      }

      #contact input,
      #contact textarea,
      #contact button {
        width: 100%;
      }
    } 

    #contact {
  background-image: url('maioo.gif'); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  border-radius: 10px;
  padding: 20px;
  max-width: 700px;
  margin: 20px auto;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  position: relative;
  z-index: 1;
  color: #fff;
}

  </style>
</head>
<body>

<main>


  <section id="about">
    <?php
    $nim = "2511500073&hearts;";
    $NIM = "2511500012";
    $NIm = "";
    ?>
    <h2> &#128512;TENTANG SAYA&#128512; </h2>
          <p>
            <strong>NIM:</strong>
            <?php
            echo "$nim"; 
            ?>
          </p>

          <?php
        $Nama_Lengkap = "Muazijan pratama&hearts;";
        $NAMA_LENGKAP = "MUAZIJAN PRATAMA";
        $Nama_panggilan = "ijan";
            ?>
          <P>
          <strong>Nama Lengkap:</strong>
          <?php
            echo "$Nama_Lengkap"; 
            ?>
          </P>

          <?php
            $Tempat_Lahir = "Pangkalpinang&hearts;";
            $Tempat_lahir = "Pangkalpinang";
            $TEMPAT_LAHIR = "pkp";
            ?>
          <P>
            <strong>Tempat lahir:</strong>
            <?php
            echo "$Tempat_Lahir"; 
            ?>
          </P>

          <?php
            $Tanggal_Lahir = "12-01-2007&hearts;";
            $Tanggal_lahir = "12-01-2007";
            $TANGGAL_LAHIR = "12012007";
            ?>
          <P>
            <strong>Tanggal lahir:</strong>
            <?php
            echo "$Tanggal_Lahir"; 
            ?>
          </P>

          <?php
            $hobi = "Membaca novel";
            $Hobi= "membaca novel,bersepeda&hearts;";
            $HOBI= "bersepeda";
            ?>
          <p>
            <strong>Hobi:</strong>
            <?php
            echo "$Hobi"; 
            ?>
          </p>

          <?php
            $Pasangan = "pasangan saya tidak punya alias jomblo&hearts;";
            $PASANGAN= "jomblo";
            $pasANGAN= "";
            ?>
          <P>
            <strong>Pasangan:</strong> 
         <?php
            echo " $Pasangan"; 
            ?>
          </P>


          <?php
            $Pekerjaan = "Untuk pekerjaan saya. Saya adalah seorang freelance fotografer wedding&hearts;";
            $PEKERJAAN= "Untuk pekerjaan saya. Saya adalah seorang freelance fotografer wedding";
            $kerja= "fotografer";
            ?>
          <P>
            <strong>Pekerjaan:</strong>
            <?php
            echo " $Pekerjaan"; 
            ?>
          </P>

          <?php
            $Nama_orang_tua ="Nama Ayah saya adalah MARSITO dan Nama Ibu saya KURNIASARI&hearts;";
            $ayah= "Marsito";
            $ibu= "Kurniasari";
            ?>
          <P>
            <strong>Nama orang tua:</strong>
            <?php
            echo "$Nama_orang_tua"; 
            ?>
          </P>

          
          <?php
            $Nama_kakak = "Kebetulan saya adalah kakak dari kedua adik saya&hearts;";
            $kakak= "muazijan pratama";
            $saya= "ijan";
            ?>
          <P>
            <strong>Nama kakak:</strong>
            <?php
            echo "$Nama_kakak"; 
            ?>
          </P>

          <?php
            $Nama_adik = "AMANDA DWI RIZKI DAN HUMAIRA SALSABILA&hearts;";
            $adik_1= "AMANDA DWI RIZKI";
            $adik_2= "HUMAIRA SALSABILA";
            ?>
          <P>
            <strong>Nama adik:</strong>
            <?php
            echo "$Nama_adik"; 
            ?>
          </P>
  </section>

  <?php


$namaMatkul1 = "Matematika";
$sksMatkul1 = 3;
$nilaiHadir1 = 85;
$nilaiTugas1 = 80;
$nilaiUTS1 = 75;
$nilaiUAS1 = 78;

$namaMatkul2 = "Fisika";
$sksMatkul2 = 4;
$nilaiHadir2 = 65; 
$nilaiTugas2 = 70;
$nilaiUTS2 = 68;
$nilaiUAS2 = 72;


$namaMatkul3 = "Kimia";
$sksMatkul3 = 2;
$nilaiHadir3 = 90;
$nilaiTugas3 = 85;
$nilaiUTS3 = 88;
$nilaiUAS3 = 92;

$namaMatkul4 = "Biologi";
$sksMatkul4 = 3;
$nilaiHadir4 = 78;
$nilaiTugas4 = 82;
$nilaiUTS4 = 80;
$nilaiUAS4 = 85;


$namaMatkul5 = "Bahasa Inggris";
$sksMatkul5 = 2;
$nilaiHadir5 = 95;
$nilaiTugas5 = 90;
$nilaiUTS5 = 93;
$nilaiUAS5 = 96;


function hitungNilaiAkhir($hadir, $tugas, $uts, $uas) {
    return (0.1 * $hadir) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
}

function tentukanGrade($nilaiAkhir, $hadir) {
    if ($hadir < 70) {
        return 'E';
    }
    if ($nilaiAkhir >= 80) return 'A';
    if ($nilaiAkhir >= 75) return 'A-';
    if ($nilaiAkhir >= 70) return 'B+';
    if ($nilaiAkhir >= 65) return 'B';
    if ($nilaiAkhir >= 60) return 'B-';
    if ($nilaiAkhir >= 55) return 'C+';
    if ($nilaiAkhir >= 50) return 'C';
    if ($nilaiAkhir >= 45) return 'C-';
    if ($nilaiAkhir >= 40) return 'D';
    return 'E';
}

function tentukanMutu($grade) {
    switch ($grade) {
        case 'A': return 4.0;
        case 'A-': return 3.75;
        case 'B+': return 3.5;
        case 'B': return 3.0;
        case 'B-': return 2.75;
        case 'C+': return 2.5;
        case 'C': return 2.0;
        case 'C-': return 1.75;
        case 'D': return 1.0;
        case 'E': return 0.0;
        default: return 0.0;
    }
}


function tentukanStatus($grade) {
    $lulusGrades = ['A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-'];
    return in_array($grade, $lulusGrades) ? 'LULUS' : 'GAGAL';
}

$matkul = [
    1 => ['nama' => $namaMatkul1, 'sks' => $sksMatkul1, 'hadir' => $nilaiHadir1, 'tugas' => $nilaiTugas1, 'uts' => $nilaiUTS1, 'uas' => $nilaiUAS1],
    2 => ['nama' => $namaMatkul2, 'sks' => $sksMatkul2, 'hadir' => $nilaiHadir2, 'tugas' => $nilaiTugas2, 'uts' => $nilaiUTS2, 'uas' => $nilaiUAS2],
    3 => ['nama' => $namaMatkul3, 'sks' => $sksMatkul3, 'hadir' => $nilaiHadir3, 'tugas' => $nilaiTugas3, 'uts' => $nilaiUTS3, 'uas' => $nilaiUAS3],
    4 => ['nama' => $namaMatkul4, 'sks' => $sksMatkul4, 'hadir' => $nilaiHadir4, 'tugas' => $nilaiTugas4, 'uts' => $nilaiUTS4, 'uas' => $nilaiUAS4],
    5 => ['nama' => $namaMatkul5, 'sks' => $sksMatkul5, 'hadir' => $nilaiHadir5, 'tugas' => $nilaiTugas5, 'uts' => $nilaiUTS5, 'uas' => $nilaiUAS5],
];

$totalBobot = 0;
$totalSKS = 0;

for ($i = 1; $i <= 5; $i++) {
    $nilaiAkhir = hitungNilaiAkhir($matkul[$i]['hadir'], $matkul[$i]['tugas'], $matkul[$i]['uts'], $matkul[$i]['uas']);
    $grade = tentukanGrade($nilaiAkhir, $matkul[$i]['hadir']);
    $mutu = tentukanMutu($grade);
    $bobot = $mutu * $matkul[$i]['sks'];
    $status = tentukanStatus($grade);

    
    ${"nilaiAkhir$i"} = $nilaiAkhir;
    ${"grade$i"} = $grade;
    ${"mutu$i"} = $mutu;
    ${"bobot$i"} = $bobot;
    ${"status$i"} = $status;

    $totalBobot += $bobot;
    $totalSKS += $matkul[$i]['sks'];
}

$IPK = $totalSKS > 0 ? $totalBobot / $totalSKS : 0;


echo "<h2>Hasil Perhitungan</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "<p>Mata Kuliah $i: {$matkul[$i]['nama']}<br>";
    echo "Nilai Akhir: " . ${"nilaiAkhir$i"} . "<br>";
    echo "Grade: " . ${"grade$i"} . "<br>";
    echo "Mutu: " . ${"mutu$i"} . "<br>";
    echo "Bobot: " . ${"bobot$i"} . "<br>";
    echo "Status: " . ${"status$i"} . "</p>";
}
echo "<p>Total Bobot: $totalBobot</p>";
echo "<p>Total SKS: $totalSKS</p>";
echo "<p>IPK: " . number_format($IPK, 2) . "</p>";


echo "<section id='ipk'>";
echo "<h3>Indeks Prestasi Kumulatif (IPK)</h3>";
echo "<p>IPK Anda adalah: " . number_format($IPK, 2) . "</p>";
echo "</section>";


?>
