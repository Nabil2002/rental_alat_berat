<?php
    require'../../../db_server.php';

    if (isset($_POST['pesan'])) {
        
        $id_pembayaran = $_POST['id_pembayaran'];
        $id_sewa = $_POST['id_sewa'];
        $id_pelanggan = $_POST['id_pelanggan'];
        $id_alat = $_POST['id_alat'];
        $total_bayar = $_POST['total_bayar'];
        $tgl_sewa = date('d-m-y');
        $lama_sewa  = $_POST['lama_sewa'];
        $lokasi = $_POST['lokasi'];
        $jumlah_alat_sewa = $_POST['jumlah_alat_sewa'];
        $tgl_bayar = $_POST['tgl_bayar'];

        $sql = "SELECT * FROM tb_alat WHERE id_alat='$id_alat'";
        $hasil = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($hasil);
        $hitung =$data['jumlah_alat'] - $jumlah_alat_sewa;

        $sql_query1 = mysqli_query($conn,"INSERT INTO tb_sewa VALUES(
                                                '$id_sewa',
                                                '$id_pelanggan',
                                                '$id_alat',
                                                '$tgl_sewa',
                                                '$lama_sewa',
                                                '$lokasi',
                                                '$jumlah_alat_sewa')");

        $sql_query2 = mysqli_query($conn,"INSERT INTO tb_pembayaran VALUES(
                                                '$id_pembayaran',
                                                '$id_sewa',
                                                '$tgl_bayar',
                                                '$total_bayar')");
        
        $sql_query3 = mysqli_query($conn,"UPDATE tb_alat SET
                                                        jumlah_alat = '$hitung'
                                                        WHERE  id_alat = '$id_alat'");

    }
?>

<html>

    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/sewa_alat/pesan_alat.css">
    <form action="../../../../app/users/navigasi/sewa_alat/print_out.php" method="post">
    <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>">
    <input type="hidden" name="id_sewa" value="<?php echo $id_sewa; ?>">
    <input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>">
    <input type="hidden" name="id_alat" value="<?php echo $id_alat; ?>">
    <input type="hidden" name="total_bayar" value="<?php echo $total_bayar; ?>">
    <input type="hidden" name="tgl_sewa" value="<?php echo $tgl_sewa; ?>">
    <input type="hidden" name="jumlah_alat_sewa" value="<?php echo $jumlah_alat_sewa; ?>">
    <input type="hidden" name="lokasi" value="<?php echo $lokasi; ?>">
    <input type="hidden" name="jumlah_alat_sewa" value="<?php echo $jumlah_alat_sewa; ?>">
    <input type="hidden" name="tgl_bayar" value="<?php echo $tgl_bayar; ?>">
        <input type="hidden" name="id_pembayaran" class="input-field" value="<?php echo $id_pembayaran; ?>" readonly>
        <button type="submit">Lanjut</button>
        <p>Note : Klik Lanjut Untuk Print Struck</p>
    </form>
</html>