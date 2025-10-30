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

  <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Nilai Saya</title>
    <style>
        #about {
            font-family: Arial, sans-serif;
            font-size: 14px;
            max-width: 600px;
            margin: 0 auto;
            color: brown;
        }
        #about h2 {
            color: brown;
            text-align: left;
            border-bottom: 1px solid #999;
            padding-bottom: 5px;
        }

        #about .row {
            display: flex;
            justify-content: flex-end; /* label kanan */
            margin: 5px 0;
        }

        #about .row .label {
            width: 150px;
            font-weight: bold;
            text-align: right;
            padding-right: 10px;
        }

        #about .row .value {
            flex: 1;
            text-align: left;
            color: black;
        }

        hr {
            border: 0.5px solid #999;
            margin: 15px 0;
        }

        #total {
            font-weight: bold;
            color: brown;
            margin-top: 20px;
        }

        #catatan {
            margin-top: 30px;
            font-size: 13px;
            color: black;
            border-top: 1px solid #999;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <section id="about">
        <h2>Nilai Saya</h2>

        <?php
 
        $dataMatkul = [
            [
                'nama' => "Algoritma dan Struktur Data",
                'sks' => 4,
                'hadir' => 90,
                'tugas' => 60,
                'uts' => 80,
                'uas' => 70,
            ],
            [
                'nama' => "Agama",
                'sks' => 2,
                'hadir' => 70,
                'tugas' => 50,
                'uts' => 60,
                'uas' => 80,
            ],
            [
                'nama' => "Matematika",
                'sks' => 5,
                'hadir' => 80,
                'tugas' => 70,
                'uts' => 75,
                'uas' => 60,
            ],
            [
                'nama' => "Basis Data",
                'sks' => 6,
                'hadir' => 75,
                'tugas' => 65,
                'uts' => 70,
                'uas' => 79,
            ],
            [
                'nama' => "Pemrograman Web Dasar",
                'sks' => 3,
                'hadir' => 69,
                'tugas' => 80,
                'uts' => 90,
                'uas' => 100,
            ],
        ];

        function hitungNilaiAkhir($hadir, $tugas, $uts, $uas)
        {
            return (0.1 * $hadir) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
        }

     
        function tentukanGradeDanMutu($nilaiAkhir)
        {
            if ($nilaiAkhir >= 85) {
                return ['A', 4.00];
            } elseif ($nilaiAkhir >= 80) {
                return ['A-', 3.70];
            } elseif ($nilaiAkhir >= 75) {
                return ['B+', 3.30];
            } elseif ($nilaiAkhir >= 70) {
                return ['B', 3.00];
            } elseif ($nilaiAkhir >= 65) {
                return ['B-', 2.70];
            } elseif ($nilaiAkhir >= 60) {
                return ['C+', 2.30];
            } elseif ($nilaiAkhir >= 50) {
                return ['C', 2.00];
            } elseif ($nilaiAkhir >= 40) {
                return ['D', 1.00];
            } else {
                return ['E', 0.00];
            }
        }

        $totalBobot = 0;
        $totalSKS = 0;

        foreach ($dataMatkul as $index => $matkul) {

            $nilaiAkhir = round(hitungNilaiAkhir($matkul['hadir'], $matkul['tugas'], $matkul['uts'], $matkul['uas']));

            list($grade, $mutu) = tentukanGradeDanMutu($nilaiAkhir);
  
            $bobot = $mutu * $matkul['sks'];
      
            $status = ($grade == 'E') ? "Gagal" : "Lulus";

            $totalBobot += $bobot;
            $totalSKS += $matkul['sks'];

        
            echo "<div class='row'><div class='label'>Nama Matakuliah ke-" . ($index + 1) . " :</div><div class='value'>" . $matkul['nama'] . "</div></div>";
            echo "<div class='row'><div class='label'>SKS :</div><div class='value'>" . $matkul['sks'] . "</div></div>";
            echo "<div class='row'><div class='label'>Kehadiran :</div><div class='value'>" . $matkul['hadir'] . "</div></div>";
            echo "<div class='row'><div class='label'>Tugas :</div><div class='value'>" . $matkul['tugas'] . "</div></div>";
            echo "<div class='row'><div class='label'>UTS :</div><div class='value'>" . $matkul['uts'] . "</div></div>";
            echo "<div class='row'><div class='label'>UAS :</div><div class='value'>" . $matkul['uas'] . "</div></div>";
            echo "<div class='row'><div class='label'>Nilai Akhir :</div><div class='value'>" . $nilaiAkhir . "</div></div>";
            echo "<div class='row'><div class='label'>Grade :</div><div class='value'>" . $grade . "</div></div>";
            echo "<div class='row'><div class='label'>Angka Mutu :</div><div class='value'>" . number_format($mutu, 2) . "</div></div>";
            echo "<div class='row'><div class='label'>Bobot :</div><div class='value'>" . number_format($bobot, 2) . "</div></div>";
            echo "<div class='row'><div class='label'>Status :</div><div class='value'>" . $status . "</div></div>";
            echo "<hr>";
        }

        $IPK = ($totalSKS > 0) ? $totalBobot / $totalSKS : 0;


        echo "<div id='total'>";
        echo "<div class='row'><div class='label'>Total Bobot =</div><div class='value'>" . number_format($totalBobot, 2) . "</div></div>";
        echo "<div class='row'><div class='label'>Total SKS =</div><div class='value'>" . $totalSKS . "</div></div>";
        echo "<div class='row'><div class='label'>IPK =</div><div class='value'>" . number_format($IPK, 2) . "</div></div>";
        echo "</div>";
        ?>
</html>
