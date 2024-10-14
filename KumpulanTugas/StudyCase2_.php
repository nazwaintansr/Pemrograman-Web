<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<hr>
<h2>Aplikasi Penilaian Mahasiswa</h2>
<hr>
<form method="post">
<h3>Masukkan nilai kuliah</h3> 
<input type="number" name="nilai1"><br> 
<h3>Masukkan nilai kuliah</h3> 
<input type="number" name="nilai2"><br> 
<h3>Masukkan nilai kuliah</h3> 
<input type="number" name="nilai3"><br><br>
<input type="submit" name="submit">
</form>

<?php
    if (isset($_POST['submit'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];
        $RataRata = ($nilai1 + $nilai2 + $nilai3) / 3;
        if ($RataRata >= 60) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }
        Echo "<h3>Nilai Rata-Rata : $RataRata</h3>";
        Echo "<h3>Status : $status</h3>";
    }
?>
</body>
</html>