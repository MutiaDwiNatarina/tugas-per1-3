<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Pencatatan Data Penjualan</title>
</head>
<body>
    <h4>Sistem Pencatatan Data Penjualan</h4>
    <hr>
    <h4>Laporan Penjualan:</h4>
    
    <?php
    // Array data produk
    $products = [
        ['nama' => 'Produk A', 'harga' => 10000, 'jumlah' => 5],
        ['nama' => 'Produk B', 'harga' => 7500, 'jumlah' => 10],
        ['nama' => 'Produk C', 'harga' => 12000, 'jumlah' => 8]
    ];

    $total_penjualan = 0;
    $total_jumlah_terjual = 0;
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga Per Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): 
                // Menghitung total untuk setiap produk
                $total_per_produk = $product['harga'] * $product['jumlah'];
                
                // Menambahkan ke total keseluruhan
                $total_penjualan += $total_per_produk;
                $total_jumlah_terjual += $product['jumlah'];
            ?>
            <tr>
                <td><?php echo $product['nama']; ?></td>
                <td><?php echo number_format($product['harga'], 0, ',', ''); ?></td>
                <td><?php echo $product['jumlah']; ?></td>
                <td><?php echo number_format($total_per_produk, 0, ',', ''); ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="2" align="right"><strong>Total Penjualan</strong></td>
                <td><strong><?php echo $total_jumlah_terjual; ?></strong></td>
                <td><strong><?php echo number_format($total_penjualan, 0, ',', ''); ?></strong></td>
            </tr>
        </tbody>
    </table>
</body>
</html>