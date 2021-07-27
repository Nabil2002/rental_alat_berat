    <link rel="stylesheet" href="../../../assets/css/users/navigasi/profile.css" type="text/css">

<div class="card">
    <div class="text-info">
        <div class="info"></div>
        <?php
        session_start();
        if (empty($_SESSION['email'])) {
            header("location:../index.php"); // jika belum login, maka dikembalikan ke file form_login.php
        } else {
        ?>
        <table border="0px" cellspacing="7" cellpadding="5">
            <tr>
                <th class="thead">Id User</th>
                <td>:</td>
                <td><?php echo $_SESSION['id_pelanggan'] ?></td>
            </tr>
            <tr>
                <th class="thead">Nama Lengkap</th>
                <td>:</td>
                <td><?php echo $_SESSION['nama_pelanggan'] ?></td>
            </tr>
            <tr>
                <th class="thead">Nama Instansi</th>
                <td>:</td>
                <td><?php echo $_SESSION['nama_instansi']; ?></td>
            </tr>
            <tr>
                <th class="thead">Email</th>
                <td>:</td>
                <td><?php echo $_SESSION['email']; ?></td>
            </tr>
            <tr>
                <th class="thead">No Telpon</th>
                <td>:</td>
                <td><?php echo $_SESSION['no_telpon']; ?></td>
            </tr>
            <tr>
                <th class="thead">Alamat</th>
                <td>:</td>
                <td><?php echo $_SESSION['alamat']; ?></td>
            </tr>
            <table>
                <?php } ?>
            </table>
    </div>
</div>