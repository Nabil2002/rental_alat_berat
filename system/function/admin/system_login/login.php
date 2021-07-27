<?php
    require'../../../db_server.php';

    if (isset($_POST['login'])) {

    $username      = $_POST['username'];
    $password   = $_POST['password'];

    $query_sql   = "SELECT * FROM tb_admin WHERE username ='$username' AND password ='$password'";
    $result      = mysqli_query($conn, $query_sql);
    $row         = mysqli_fetch_array($result);

    $username   = $row['username'];
    $alamat     = $row['alamat'];

    if ($row['username'] == $username and $row['password'] == $password) {
        session_start();
        $_SESSION['username']       = $username;

        header("location: ../../../../app/admin/index.php");
    } else {
        echo "<script>alert('Maaf username atau Password Salah!');
        window .location='../../../../app/admin/navigasi/system_login/login.php'</script>";
    }
}
?>