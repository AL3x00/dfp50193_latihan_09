<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>

<body>
    <h2>Produk</h2>
    <?php
    $produk = [
        'namaproduk' => 'Drinking Water',
        'size' => '500 ml',
        'harga' => '70 sen',
    ];
    ?>
    <table>
        <tr>
            <td>Product Name:</td>
            <td><?php echo $produk['namaproduk']; ?></td>
        </tr>
        <tr>
            <td>Size:</td>
            <td><?php echo $produk['size']; ?></td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><?php echo $produk['harga']; ?></td>
        </tr>
    </table>

    <h2>Transaksi</h2>
    <?php
    $transaksi = [
        'satu' => [
            'tarikh' => '01-10-2021',
            'perkara' => 'Terima dari pemborong',
            'masuk' => 100,
            'keluar' => null,
            'baki' => 100,
        ],

        'dua' => [
            'tarikh' => '03-10-2021',
            'perkara' => 'CBR Enterprise',
            'masuk' => null,
            'keluar' => 30,
            'baki' => 70,
        ]
    ];
    ?>
    <table border="1" cellspacing="0">
        <tr>
            <th>Tarikh</th>
            <th>Perkara</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Baki</th>

        </tr>
        <?php
        $bil = 1;
        foreach ($transaksi as $info) {
        ?>
            <tr>
                <td><?php echo $info['tarikh']; ?></td>
                <td><?php echo $info['perkara']; ?></td>
                <td><?php echo $info['masuk']; ?></td>
                <td><?php echo $info['keluar']; ?></td>
                <td><?php echo $info['baki']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>