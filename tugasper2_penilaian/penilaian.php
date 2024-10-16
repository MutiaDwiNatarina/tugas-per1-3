<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>

<div class="container">
    <h2>Aplikasi Penilaian Mahasiswa</h2>
    <form action="" method="post">
        <label for="nilai1">Masukkan Nilai Mata Kuliah 1:</label>
        <input type="text" id="nilai1" name="nilai1" required><br/>
        <br>

        <label for="nilai2">Masukkan Nilai Mata Kuliah 2:</label>
        <input type="text" id="nilai2" name="nilai2" required><br/>
        <br>

        <label for="nilai3">Masukkan Nilai Mata Kuliah 3:</label>
        <input type="text" id="nilai3" name="nilai3" required><br/>
        <br>

        <button type="submit" name="submit">COBA</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];

        if (is_numeric($nilai1) && is_numeric($nilai2) && is_numeric($nilai3)) {
            
            $nilai_rata = ($nilai1 + $nilai2 + $nilai3) / 3;
            $status_kelulusan = ($nilai_rata >= 60) ? "Lulus" : "Tidak Lulus";
        
            echo "Nilai Rata-Rata: " . number_format($nilai_rata, 2) . "<br/>";
            echo "Status Kelulusan: " . $status_kelulusan . "<br/>";
        }  
    }
    ?>
</div>
</body>
</html>