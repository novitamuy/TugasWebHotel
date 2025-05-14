<form action="proses2.php" method="POST">
    <link rel="stylesheet" href="style2.css">
    <label for="id_pembayaran">id_pembayaran:</label>
    <input type="text" name="id_pembayaran" required><br>

    <label for="id_kamar">id_kamar:</label>
    <input type="text" name="id_kamar" required><br>

    <label for="harga">harga:</label>
    <input type="text" name="harga" required><br>

    <label for="total_biaya">total_biaya:</label>
    <input type="text" name="total_biaya" required><br>

    <label for="cek_in">cek_in:</label>
    <input type="date" name="cek_in" required><br>

    <label for="cek_out">cek_out:</label>
    <input type="date" name="cek_out" required><br>

    <label for="no_kamar">no_kamar:</label>
    <input type="text" name="no_kamar" required><br>

    <label for="metode_pembayaran">Metode Pembayaran:</label>
    <select name="metode_pembayaran" required>
        <option value="tunai">Tunai</option>
        <option value="transfer">Transfer Bank</option>
    </select><br>

    <input type="submit" value="Proses Pembayaran">
    <a href="proses2.php"></a>
</form>