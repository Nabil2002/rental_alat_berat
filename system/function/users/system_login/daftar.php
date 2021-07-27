<?php
    require'../../../db_server.php';

    if (isset($_POST['daftar'])) {

        $id_pelanggan        = $_POST['id_pelanggan'];
        $nama_pelanggan      = $_POST['nama_pelanggan'];
        $nama_instansi       = $_POST['nama_instansi'];
        $email               = $_POST['email'];
        $password            = $_POST['password'];
        $no_telpon           = $_POST['no_telpon'];
        $alamat              = $_POST['alamat'];

        $command =  mysqli_query($conn,"INSERT INTO tb_pelanggan VALUES(
                                                        '$id_pelanggan',
                                                        '$nama_pelanggan',
                                                        '$nama_instansi',
                                                        '$email',
                                                        '$password',
                                                        '$no_telpon',
                                                        '$alamat')");

        echo"<script>alert('Data Berhasil Di tambah');
            window.location='../../../../app/users/navigasi/system_login/login.php'</script>";
        }