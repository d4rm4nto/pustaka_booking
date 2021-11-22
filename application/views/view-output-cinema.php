<html>
<head>
    <title>View Output Cinema</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    <h4>Pemesanan Tiket 99</h4>
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pemesan</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td>:</td>
                <td>
                    <?= $judul; ?>
                </td>
            </tr>
            <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>
                    <?= $pukul; ?>
                </td>
            </tr>
            <tr>
                <td>Tipe Studio</td>
                <td>:</td>
                <td>
                    <?= $tipe; ?>
                </td>
            </tr>
            <tr>
                <td>Jumlah Pesan</td>
                <td>:</td>
                <td>
                    <?= $jumlah; ?>
                </td>
            </tr>
            <?php
            if ($tipe == "Regular 2D") {
                $harga = 40000;
            }else if ($tipe == "3D") {
                $harga = 80000;
            } else if ($tipe == "Velvet") {
                $harga = 100000;
            }
            $total = $harga * $jumlah
            ?>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td>
                    <?= $total; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('cinema'); ?>">Input Lagi</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>