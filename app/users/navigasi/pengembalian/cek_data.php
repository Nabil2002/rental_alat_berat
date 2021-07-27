<html>
    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/pengembalian_alat/cek_data.css">
    <form action="../../../../app/users/navigasi/pengembalian/pengembalian_alat.php" method="post">
        <div class="insert-column">
            <label for="" class="label-form">Id Sewa :</label>
            <select name="id_sewa" class="input-field-1">
                <?php
                    require'../../../../system/db_server.php';
                    $result = mysqli_query($conn,"select * from tb_sewa");
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $data['id_sewa']; ?>"><?php echo $data['id_sewa']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="insert-column">
            <label for="" class="label-form">Id Alat :</label>
            <select name="id_alat" class="input-field-2">
                <?php
                    require'../../../../system/db_server.php';
                    $result = mysqli_query($conn,"select * from tb_alat");
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $data['id_alat']; ?>"><?php echo $data['nama_alat']; ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" name="submit">Lanjut</button>
        <p>Note : Klik Lanjut Untuk Isi Data Pengembalian</p>
    </form>
</html>