<?php
    require'../../../db_server.php';

    if (isset($_POST['login'])) {

    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $query_sql   = "SELECT * FROM tb_pelanggan WHERE email ='$email' AND password ='$password'";
    $result      = mysqli_query($conn, $query_sql);
    $row         = mysqli_fetch_array($result);

    $id_pelanggan     = $row['id_pelanggan'];
    $nama_pelanggan   = $row['nama_pelanggan'];
    $nama_instansi    = $row['nama_instansi'];
    $email            = $row['email'];
    $no_telpon        = $row['no_telpon'];
    $alamat           = $row['alamat'];

    if ($row['email'] == $email and $row['password'] == $password) {
        session_start();
        $_SESSION['id_pelanggan']       = $id_pelanggan;
        $_SESSION['nama_pelanggan']     = $nama_pelanggan;
        $_SESSION['nama_instansi']      = $nama_instansi;
        $_SESSION['email']              = $email;
        $_SESSION['no_telpon']          = $no_telpon;
        $_SESSION['alamat']             = $alamat;

        header("location: ../../../../app/users/halaman_utama.php");
    } else {
        echo "<script>alert('Maaf email atau Password Salah!');
        window .location='../../views/admin/login.php'</script>";
    }
}
?>