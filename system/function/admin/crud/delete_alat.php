<?php 
include '../../../../system/db_server.php';
    $id_alat = $_GET['id_alat'];
    $query_data = mysqli_query($conn,"DELETE FROM tb_alat WHERE id_alat='$id_alat'")or die(mysqli_error());

    mysqli_query($conn,$query_data);

    echo "<script>alert('Data Berhasil Di Delete');
    window .location='../../../../app/admin/navigasi/data_alat.php'</script>";
?>