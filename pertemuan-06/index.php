<!DOCTYPE html> 
<html> 
<head> 
  <title>Belajar PHP Dasar</title> 
</head> 
<body> 
  <h1><?php echo "Halo, Dunia PHP!"; ?></h1> 
  <h2>SELAMAT DATANG DI PHP, Muazijan Pratama!</h2>
</body> 
</html> 

<?php 
$Nama = "MUAZIJAN PRATAMA"; 
$Umur = 18; 
$Tinggi = 168 ; 
$Hobi = "bersepeda dan membaca novel" ;
$aktif = true; 
 
echo "Nama: $Nama <br>"; 
echo "Umur: $Umur tahun <br>"; 
echo "Tinggi: $Tinggi cm <br>"; 
echo "Hobi: $Hobi <br>";
echo "Status aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>"; 
var_dump($Nama); 
var_dump($Umur); 
var_dump($Tinggi); 
var_dump($Hobi); 
var_dump($aktif); 
?>  



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
    <h2> &#128512;TENTANG SAYA&#128512; </h2>
          <p><strong>NIM:</strong>2511500073&hearts;</p>
          <P><strong>Nama Lengkap:</strong>Muazijan pratama&hearts;</P>
          <P><strong>Tempat lahir:</strong>Pangkalpinang&hearts;</P>
          <P><strong>Tanggal lahir:</strong>12-01-2007&hearts;</P>
          <p><strong>Hobi:</strong>membaca novel,bersepeda,&hearts;</p>
          <P><strong>Pasangan:</strong> pasangan saya tidak punya alias jomblo&hearts;</P>
          <P><strong>Pekerjaan:</strong>Untuk pekerjaan saya. Saya adalah seorang freelance fotografer wedding&hearts;</P>
          <P><strong>Nama orang tua:</strong>Nama Ayah saya adalah MARSITO dan Nama Ibu saya KURNIASARI&hearts;</P>
          <P><strong>Nama kakak:</strong>Kebetulan saya adalah kakak dari kedua adik saya&hearts;</P>
          <P><strong>Nama adik:</strong>AMANDA DWI RIZKI DAN HUMAIRA SALSABILA&hearts;</P>
  </section>

  


</body>
</html>

