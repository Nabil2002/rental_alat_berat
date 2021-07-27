<?php
    require'../../../db_server.php';

    if (isset($_POST['daftar'])) {

        $nama_admin          = $_POST['nama_admin'];
        $username            = $_POST['username'];
        $password            = $_POST['password'];

        $command = "INSERT INTO tb_admin VALUES(
                                                        '',
                                                        '$nama_admin',
                                                        '$username',
                                                        '$password')";
        mysqli_query($conn,$command);

        echo"<script>alert('Data Berhasil Di tambah');
            window.location='../../../../app/admin/navigasi/system_login/login.php'</script>";
        }