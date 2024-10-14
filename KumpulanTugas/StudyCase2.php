<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
<h2>Aplikasi Penilaian Mahasiswa</h2>
    <hr>
    <form method="post">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<label>Masukkan Nilai Mata Kuliah $i:</label>";
            echo "<input type='number' name='nilai[]' required><br><br>";
        }
        ?>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $jumlah_nilai = 0;
        $total_mata_kuliah = count($nilai);

        foreach ($nilai as $nilai_mk) {
            $jumlah_nilai += $nilai_mk;
        }

        $rata_rata = $jumlah_nilai / $total_mata_kuliah;

        if ($rata_rata >= 60) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        echo "<hr>";
        echo "<p>Nilai Rata-Rata: " . number_format($rata_rata, 2) . "</p>";
        echo "<p>Status Kelulusan: " . $status . "</p>";
    }
    ?>
</body>
</html>