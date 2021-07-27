    <link rel="stylesheet" href="../../../assets/css/admin/navigasi/data_update.css">
    <link rel="stylesheet" href="../../../assets/font/fontawsome/css/all.css">

<div class="wrapper-payment">
                <h2>Update Data Alat Berat</h2>
                <?php 
                    include "../../../system/db_server.php";
                    $id_alat = $_GET['id_alat'];
                    $query_mysqli = mysqli_query($conn,"SELECT * FROM tb_kategori INNER JOIN tb_alat USING (id_kategori) WHERE id_alat='$id_alat'")or die(mysqli_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){
                ?>
                <form action="../../../system/function/admin/crud/update.php" method="POST" class="main-wrap">
                    <div class="payment-column">
                        <label for="" class="label-form">Id Alat</label>
                        <input type="text" class="column-form-rek" name="id_alat"
                            value="<?php echo $data['id_alat'] ?>" readonly>
                    </div>
                    <div class="payment-column">
                        <label for="" class="label-form">Kategori</label>
                        <input type="text" class="column-form" name="nama_kategori" value="<?php echo $data['nama_kategori'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="column-form" class="label-form">Nama Alat</label>
                        <input type="text" class="column-form" name="nama_alat" value="<?php echo $data['nama_alat'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="">Merk</label>
                        <input type="text" class="column-form" name="merk" value="<?php echo $data['merk'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="column-form" class="label-form">Tahun Pembuatan</label>
                        <input type="date" class="column-form" name="tahun_pembuatan"
                            value="<?php echo $data['tahun_pembuatan'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="column-form" class="label-form">Jumlah Alat</label>
                        <input type="number" class="column-form" name="jumlah_alat"
                            value="<?php echo $data['jumlah_alat'] ?>">
                    </div>
                    <div class="payment-column">
                        <label for="column-form" class="label-form">Harga Sewa</label>
                        <input type="number" class="column-form" name="harga_sewa" value="<?php echo $data['harga_sewa'] ?>">
                    </div>
                                        <div class="payment-column">
                        <label for="column-form" class="label-form">Harga Sewa</label>
                        <input type="file" class="column-form" name="gambar" value="<?php echo $data['gambar'] ?>">
                    </div>
                    <div class="wrapper-button">
                        <button type="submit" name="update" class="btn-daftar">Update</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>