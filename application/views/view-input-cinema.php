<html>
<head>
    <title>View Input Cinema</title>
</head>
<body>
    <center>
        <form action="<?= base_url('Cinema/cetak'); ?>"method="post">
        <table>
            <tr>
                <th colspan="3">
                    <h4>Pemesanan Tiket Cinema 99</h4>
                </th>
            </tr>
            <tr>
                <th>Nama Pemesan</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>Judul Film</th>
                <th>:</th>
                <td>
                    <select name="judul" id="judul">
                        <option>Pilih</option>
                        <option>Parasite</option>
                        <option>Hereditary</option>
                        <option>The Closet</option>
                        <option>Kamen Rider</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Pukul</th>
                <th>:</th>
                <td>
                    <input type="radio" name="pukul" value="14.20"> 14.20
                    <input type="radio" name="pukul" value="15.40"> 15.40
                    <input type="radio" name="pukul" value="16.40"> 16.40
                </td>
            </tr>
            <tr>
                <th>Tipe Studio</th>
                <th>:</th>
                <td>
                    <input type="radio" name="tipe" value="Regular 2D"> Regular 2D
                    <input type="radio" name="tipe" value="3D"> 3D
                    <input type="radio" name="tipe" value="Velvet"> Velvet
                </td>
            </tr>
            <tr>
                <th>Jumlah Pesan</th>
                <th>:</th>
                <td>
                    <input type="text" name="jumlah" id="jumlah">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Hitung">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>
