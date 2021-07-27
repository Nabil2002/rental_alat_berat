<?php 
include '../../../../system/db_server.php';
    $id_pelanggan = $_GET['id_pelanggan'];
    $query_data = mysqli_query($conn,"DELETE FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'")or die(mysqli_error());

    mysqli_query($conn,$query_data);

    echo "<script>alert('Data Berhasil Di Delete');
    window .location='../../../../app/admin/navigasi/data_pelanggan.php'</script>";
?>