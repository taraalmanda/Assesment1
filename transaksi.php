<?php
if (isset($_POST['btnSubmit'])) {
    $kodeTransaksi = $_POST["kodeTransaksi"];
    $tglTransaksi = $_POST["tglTransaksi"];
    $customer = $_POST["customer"];
    $barang1 = $_POST["barang1"];
    $barang2 = $_POST["barang2"];
    $barang3 = $_POST["barang3"];
    $kartuMember = $_POST["kartuMember"];
    $uangBayar = $_POST["uangBayar"];
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TOKO SUMBER BERKAH</title>
    </head>

    <body>
        <nav>
            <a href="index.php">Login</a>
            <a href="history.php">History Transaksi</a>
        </nav>
        <h2>History</h2>
        <form action="" method="post">
            <h2> Transaksi </h2>
            Kode Transaksi: <input type="text" name="kodeTransaksi"><br>
            <div>
                <label for="tglTransaksi">Tanggal Transaksi:</label>
                <input type="date" name="tgllahir" id="tgllahir">
            </div>
            Customer: <select name="customer">
                <option value="Iqbaal_Ramadhan" selected>Iqbaal Ramadhan</option>
                <option value="Angga_Yunanda" selected>Angga Yunanda</option>
                <option value="Refal_Hadi" selected>Refal Hadi</option>
                <option value="Bryan_Domani" selected>Bryan Domani</option>
                <option value="Rey_Mbayang" selected>Rey Mbayang</option>
            </select><br>
            <div>
                <label for="Barang 1">Barang 1 </label>
                <select name="Barang 1" id="Barang 1">
                    <option value="" selected>Pilih Barang</option>
                    <option value="Mie Instan">Mie Instan</option>
                    <option value="Sabun Mandi">Sabun Mandi</option>
                    <option value="Shampo">Shampo</option>
                    <option value="Sandal Jepit">Sandal Jepit</option>
                    <option value="Roti">Roti</option>
                    <option value="Buku Tulis">Buku Tulis</option>
                    <option value="Susu Kotak">Susu Kotak</option>
                    <option value="Minyak Goreng ">Minyak Goreng</option>
                    <option value="Ice Cream">Ice Cream</option>
                    <option value="Baterai">Baterai</option>
                </select>
            </div>
            <div>
                <label for="Barang 2">Barang 2 </label>
                <select name="Barang 2" id="Barang 2">
                    <option value="" selected>Pilih Barang</option>
                    <option value="Mie Instan">Mie Instan</option>
                    <option value="Sabun Mandi">Sabun Mandi</option>
                    <option value="Shampo">Shampo</option>
                    <option value="Sandal Jepit">Sandal Jepit</option>
                    <option value="Roti">Roti</option>
                    <option value="Buku Tulis">Buku Tulis</option>
                    <option value="Susu Kotak">Susu Kotak</option>
                    <option value="Minyak Goreng ">Minyak Goreng</option>
                    <option value="Ice Cream">Ice Cream</option>
                    <option value="Baterai">Baterai</option>
                </select>
            </div>
            <div>
                <label for="Barang 3">Barang 3 </label>
                <select name="Barang 3" id="Barang 3">
                    <option value="" selected>Pilih Barang</option>
                    <option value="Mie Instan">Mie Instan</option>
                    <option value="Sabun Mandi">Sabun Mandi</option>
                    <option value="Shampo">Shampo</option>
                    <option value="Sandal Jepit">Sandal Jepit</option>
                    <option value="Roti">Roti</option>
                    <option value="Buku Tulis">Buku Tulis</option>
                    <option value="Susu Kotak">Susu Kotak</option>
                    <option value="Minyak Goreng ">Minyak Goreng</option>
                    <option value="Ice Cream">Ice Cream</option>
                    <option value="Baterai">Baterai</option>
                </select>
            </div>
            <div>
                <label for="">Punya Kartu Member </label>
                <div>
                    <label for="Ya" class="radio-label cursor-pointer mr-3"><input type="radio" name="Kartu member" id="Ya"
                            value="Ya" checked>Ya</label>
                    <label for="Tidak" class="radio-label cursor-pointer"><input type="radio" name="Kartu Member" id="Tidak"
                            value="Tidak"> Tidak</label>
                </div>
                <div>
                    <div>
                        <label for="Uang Pembayaran">Uang Pembayaran </label>
                        <input type="name" name="Uang Pembayaran" id="Uang Pembayaran">
                    </div>
                    <input name="btnSubmit" value="Simpan" type="Simpan">
                    <input name="btnCancel" value="Batal" type="Reset">

        </form>

    </html>
    <?php
}
?>