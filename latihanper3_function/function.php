<?php
function LuasLingkaran($r){
    $luas =3.14 *($r*$r);
    return $luas;
}

function kosong($a, $b){
    $hasil = $a + $b;
    return $hasil;
}

function FormatRupiah($angka){
    $rupiah = "Rp. ".number_format($angka,2,",",".");
    return $rupiah;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Deskripsi</th>
        <th>Hasil</th>
    </tr>
    <tr>
        <td>Luas Lingkaran (r = 5)</td>
        <td><?php echo LuasLingkaran(5); ?></td>
    </tr>
    <tr>
        <td>Penjumlahan 5 + 6</td>
        <td><?php echo kosong(5, 6); ?></td>
    </tr>
    <tr>
        <td>Penjumlahan 10 + 30</td>
        <td><?php echo kosong(10, 30); ?></td>
    </tr>
    <tr>
        <td>Format Rupiah (20000)</td>
        <td><?php echo FormatRupiah(20000); ?></td>
    </tr>
</table>

</body>
</html>
