<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hasiil  Kuis</title>
    <style>
      header {
        height: 60px;
        font-family: "Raleway", sans-serif;
      }
      button {
        margin: 10px;
      }
      .container{
        width: 50%;
        background-color: rgb(220, 243, 240);
        border-radius: 15px; 
        padding: 20px; 
        margin: 20px auto;
      }
      .text-right {
        text-align: right; 
      }
      .small-button {
      font-size: 12px; 
      }
      .benar {
        color: green; 
      }
      .salah{
        color: red; 
      }
      .skorPresen{
        margin: 0;
        font-weight: 500;
      }
    </style>

</head>
<body style="background-color:rgb(162, 247, 236);">
    <div style="background-color: rgb(46, 139, 135);">
      <header>
        <table>
          <tr>
            <td><img src="logo.png" alt="Learnify Logo" width="50rem"></td>
            <td><b style="font-size: 20px">Learnify: <span style="font-size:10px">Belajar cerdas, Kuasai Dunia! </span> </b></td>
          </tr>
        </table>
      </header>
    </div>
<div class="container" style="width: 100%; background-color:rgb(220, 243, 240); border-radius: 15px;">
<?php
$jawaban_benar = [0, 3, 3, 2, 0];
$kunci_jawaban = [
    "a. Hyper Text Markup Language",
    "d. background-color: red;",
    "d. br",
    "c. Memproses data di sisi server",
    "a. img src='gambar.jpg'"
];
$skor = 0;
$jawaban = $_POST['jawaban'] ?? []; //jawaban yg dikirim
//menghitung skor
$semua_terisi = true;
foreach ($jawaban_benar as $index => $benar) {
    if (!isset($jawaban[$index])) {
        $semua_terisi = false;
        break;
    }
}
?>
<!-- hasil kuis -->
        <h2 style="text-align:center; font-family:Arial; font-weight:540">Hasil Kuis</h2>
        <div style="font-size: 12px;">
            <?php foreach ($jawaban_benar as $index => $benar) : ?>
                <p>
                    Pertanyaan <?= $index + 1 ?>: 
                    <?php if (isset($jawaban[$index]) && $jawaban[$index] == $benar) : ?>
                        <span class="benar">Jawaban Anda benar!</span>
                        <?php $skor += 1; ?>
                    <?php else : ?>
                        <span class="salah">Jawaban Anda salah. Jawaban yang benar : <?= $kunci_jawaban[$index] ?></span>
                    <?php endif; ?>
                </p>
            <?php endforeach; ?>
        </div>
        <br>
        <!-- skor dan persentase -->
        <p class="skorPresen">Skor Pengguna : <?= $skor ?> / <?= count($jawaban_benar) ?></p>
        <?php
        $persentase = $skor * 20;
        ?>
        <p class="skorPresen">Persentase Nilai : <?= $persentase ?>%</p>
        <div class="text-right">
        <a href="index.php"><button type="button" class="btn btn-info small-button">Kembali Ke Halaman Utama</button></a>
    </div>
</body>
</html>
