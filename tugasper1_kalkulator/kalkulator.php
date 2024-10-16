<?php

$hasil = 0;

if (isset($_POST)) {
    $bilangan1 = $_POST['bilangan1'] ?? 0;
    $bilangan2 = $_POST['bilangan2'] ?? 0;
    $operasi = $_POST['operasi'] ?? NULL;

    if ($operasi == "+") {
        $hasil = $bilangan1 + $bilangan2;
    } elseif ($operasi == "-") {
        $hasil = $bilangan1 - $bilangan2;
    } elseif ($operasi == "*") {
        $hasil = $bilangan1 * $bilangan2;
    } elseif ($operasi == "/") {
        if ($bilangan2 != 0) {
            $hasil = $bilangan1 / $bilangan2;
        } else {
            $hasil = "Tidak dapat dibagi dengan nol!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kalkulator Sederhana</title>
</head>
<body>
    <h1>APLIKASI KALKULATOR SEDERHANA</h1>

    <form action="" method="post">
        <label for="">Masukkan Bilangan Pertama:</label>
        <input type="number" name="bilangan1" required>
        <br>
        <label for="">Masukkan Bilangan Kedua:</label>
        <input type="number" name="bilangan2" required>
        <br>
        <label for="">Pilih Operasi</label>
        <select name="operasi" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>

        <button type="submit">Hitung</button>
    </form>

    <p>Hasil Perhitungan: <?php echo $hasil; ?></p>
</body>
</html>
