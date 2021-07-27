<?php
    require'../../../db_server.php';

    if (isset($_POST['hitung'])) {
        
        $id_sewa             = $_POST['id_sewa'];
        $id_alat             = $_POST['id_alat'];
        $nama_alat           = $_POST['nama_alat'];
        $nama_kategori       = $_POST['nama_kategori'];
        $merk                = $_POST['merk'];
        $jumlah_alat         = $_POST['jumlah_alat'];
        $jumlah_alat_sewa    = $_POST['jumlah_alat_sewa'];
        $harga_sewa          = $_POST['harga_sewa'];
        $lama_sewa           = $_POST['lama_sewa'];
        $total_bayar         = floatval($jumlah_alat) * floatval($harga_sewa) * floatval($lama_sewa);

    }
?>

<html>

    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/sewa_alat/hitung_harga.css">
    <form action="../../../../app/users/navigasi/sewa_alat/isi_data_diri.php" method="post">
    <input type="hidden" name="id_sewa" value="<?php echo $id_sewa; ?>">
    <input type="hidden" name="id_alat" value="<?php echo $id_alat; ?>">
    <input type="hidden" name="nama" value="<?php echo $nama_alat; ?>">
    <input type="hidden" name="kategori" value="<?php echo $nama_kategori; ?>">
    <input type="hidden" name="merk" value="<?php echo $merk; ?>">
    <input type="hidden" name="jumlah_alat" value="<?php echo $jumlah_alat; ?>">
    <input type="hidden" name="jumlah_alat_sewa" value="<?php echo $jumlah_alat_sewa; ?>">
    <input type="hidden" name="lama_sewa" value="<?php echo $lama_sewa; ?>">
        <label for="">Total Harga :</label>
        <input type="number" name="total" class="input-field" value="<?php echo $total_bayar; ?>" readonly>
        <button type="submit">Lanjut</button>
        <p>Note : Klik Lanjut Untuk Isi Data Diri</p>
    </form>
</html>