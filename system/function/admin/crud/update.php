<?php 

include '../../../../system/db_server.php';

if (isset($_POST['update'])) {

        $id_alat                    = $_POST['id_alat'];
        $nama_alat                  = $_POST['nama_alat'];
        $merk                       = $_POST['merk'];
        $tahun_pembuatan            = $_POST['tahun_pembuatan'];
        $jumlah_alat                = $_POST['jumlah_alat'];
        $harga_sewa                 = $_POST['harga_sewa'];

        $query_sql = "UPDATE tb_alat SET 
                                    nama_alat           = '$nama_alat',
                                    merk                = '$merk',
                                    tahun_pembuatan     = '$tahun_pembuatan',
                                    jumlah_alat         = '$jumlah_alat',
                                    harga_sewa          = '$harga_sewa'
                                WHERE id_alat           ='$id_alat'";

        $result = mysqli_query($conn, $query_sql);
        
        echo "<script>alert('Data Berhasil Di Update');
        window .location='../../../../admin/navigasi/data_alat.php'</script>";
        
} else {

}


?>