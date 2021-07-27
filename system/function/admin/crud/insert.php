<?php
    require'../../../db_server.php';

    if (isset($_POST['tambah'])) {

        $id_alat                    = $_POST['id_alat'];
        $id_kategori                = $_POST['id_kategori'];
        $nama_alat                  = $_POST['nama_alat'];
        $merk                       = $_POST['merk'];
        $tahun_pembuatan            = $_POST['tahun_pembuatan'];
        $jumlah_alat                = $_POST['jumlah_alat'];
        $harga_sewa                 = $_POST['harga_sewa'];
        
        $ekstensi_diperbolehkan	    = array('png','jpg');
			$gambar                 = $_FILES['gambar']['name'];
			$x                      = explode('.', $gambar);
			$ekstensi               = strtolower(end($x));
			$ukuran	                = $_FILES['gambar']['size'];
			$file_tmp               = $_FILES['gambar']['tmp_name'];

        if($ukuran < 1044070){
                    move_uploaded_file($file_tmp, '../../../../assets/img/img_upload/'.$gambar);
        $command =  mysqli_query($conn,"INSERT INTO tb_alat VALUES(
                                                        '$id_alat',
                                                        '$id_kategori',
                                                        '$nama_alat',
                                                        '$merk',
                                                        '$tahun_pembuatan',
                                                        '$jumlah_alat',
                                                        '$harga_sewa',
                                                        '$gambar')");

        echo"<script>alert('Data Berhasil Di tambah');
            window.location='../../../../app/admin/navigasi/data_alat.php'</script>";
        }
    }


?>