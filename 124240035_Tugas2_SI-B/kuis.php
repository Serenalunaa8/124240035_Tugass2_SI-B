<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Kuis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      button {
        margin: 10px;
      }
      header {
        height: 60px;
        font-family: "Raleway", sans-serif;
      }
      p, label {
        margin: 0; 
      }
      .text-right {
        text-align: right; 
      }
      .container{
        width: 50%;
        background-color: rgb(220, 243, 240);
        border-radius: 15px; 
        padding: 20px; 
        margin: 20px auto;
      }
    </style>

  </head>
  <body style="background-color:rgb(162, 247, 236);">
    <div style="background-color:rgb(46, 139, 135);">
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
    <form action="hasil.php" method="POST">

<?php
$kuis = [
    ["pertanyaan" => "1. Apa kepanjangan dari HTML?", "pilihan" => ["a. Hyper Text Markup Language", "b. Hyperlinks and Text Markup Language", "c. Home Tool Markup Language", "d. Hyper Tool Multi Language"]],
    ["pertanyaan" => "2. Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS?", "pilihan" => ["a. background: red;", "b. bgcolor: red;", "c. color-background: red;", "d. background-color: red;"]],
    ["pertanyaan" => "3. Tag HTML apa yang digunakan untuk membuat baris baru?", "pilihan" => ["a. newline", "b. hr", "c. line", "d. br"]],
    ["pertanyaan" => "4. Apa fungsi utama dari PHP?", "pilihan" => ["a. Mengatur tata letak halaman web", "b. Mengatur tampilan halaman web", "c. Memproses data di sisi server", "d. Menambahkan animasi ke halaman web"]],
    ["pertanyaan" => "5. Bagaimana cara menampilkan gambar di HTML?", "pilihan" => ["a. img src='gambar.jpg'", "b. image src='gambar.jpg'", "c. pic src='gambar.jpg'", "d. photo src='gambar.jpg'"]]
];
$jawaban_benar = [0, 3, 3, 2, 0];
?>

    <h2 style="text-align: center">Kuis</h2>
    <form action="hasil.php" method="post">
        <?php foreach ($kuis as $soal => $jwb) { ?>
            <p><label><?= $jwb["pertanyaan"] ?></label></p> 
            <?php foreach ($jwb["pilihan"] as $key => $value) { ?> 
                <input type="radio" id="jawaban-<?= $soal ?>-<?= $key ?>" name="jawaban[<?= $soal ?>]" value="<?= $key ?>" required>
                <label for="jawaban-<?= $soal ?>-<?= $key ?>"><?= $value ?></label><br>
            <?php } ?>
            <br>
        <?php } ?>
        <div class="text-right">
          <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
        </div>
    </form>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
