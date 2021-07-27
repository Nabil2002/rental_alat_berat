<?php
    require'../../../db_server.php';

    if (isset($_POST['submit'])) {

        $id_pengembalian    = $_POST['id_pengembalian'];
        $id_sewa            = $_POST['id_sewa'];
        $id_alat            = $_POST['id_alat'];
        $tgl_pengembalian   = $_POST['tgl_pengembalian'];
        $jumlah_alat        = $_POST['jumlah_alat'];
        $jumlah_alat_sewa   = $_POST['jumlah_alat_sewa'];
        $total_alat         = floatval($jumlah_alat) + floatval($jumlah_alat_sewa);
        // $tgl_jatuh_tempo    = $_POST['tgl_jatuh_tempo'];

        $query_sql1 = mysqli_query($conn,"INSERT INTO tb_pengembalian VALUES(
                                                        '$id_pengembalian',
                                                        '$id_sewa',
                                                        '$id_alat',
                                                        '$tgl_pengembalian')");

        $sql_query2 = mysqli_query($conn,"UPDATE tb_alat SET
                                                        jumlah_alat = '$total_alat'
                                                        WHERE  id_alat = '$id_alat'");

    }
?>

<html>

    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/sewa_alat/pesan_alat.css">
    <form action="../../../../app/users/navigasi/pengembalian/print_out.php" method="post">
    <input type="hidden" name="id_pengembalian" value="<?php echo $id_pengembalian; ?>">
    <input type="hidden" name="id_sewa" value="<?php echo $id_sewa; ?>">
    <input type="hidden" name="id_alat" value="<?php echo $id_alat; ?>">
    <input type="hidden" name="tgl_pengembalian" value="<?php echo $tgl_pengembalian; ?>">
    <input type="hidden" name="jumlah_alat" value="<?php echo $jumlah_alat; ?>">
    <input type="hidden" name="jumlah_alat_sewa" value="<?php echo $jumlah_alat_sewa; ?>">
    <input type="hidden" name="total_alat" value="<?php echo $total_alat; ?>">
    <input type="hidden" name="tgl_bayar" value="<?php echo $tgl_bayar; ?>">
        <input type="hidden" name="id_pembayaran" class="input-field" value="<?php echo $id_pengembalian; ?>" readonly>
        <button type="submit">Lanjut</button>
        <p>Note : Klik Lanjut Untuk Print Struck</p>
    </form>
</html>