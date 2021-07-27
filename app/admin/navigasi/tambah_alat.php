    <?php require'../../../system/db_server.php'; ?>

    <link rel="stylesheet" href="../../../assets/css/admin/navigasi/tambah_dat.css">
    <link rel="stylesheet" href="../../../assets/font/fontawsome/css/all.css">
    <?php

        $sql = "select max(id_alat) from tb_alat"; //mencari kode yang paling besar atau kode yang baru masuk
        $query = mysqli_query($conn,$sql) or die (mysqli_error());

        $id_alat = mysqli_fetch_array($query);
        
    if($id_alat){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka

        $nilai = substr($id_alat[0], 1); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya. 
        $kode = (int) $nilai; //kode yang sudah di pecah di tambah 1

        $kode = $kode + 1;
        $auto_kode = "A" .str_pad($kode, 2, "0", STR_PAD_LEFT);
        }else{
        $auto_kode = "A01";
    }
    ?>
    <div class="wrapper-insert">
        <h2>Tambah Data Alat Berat</h2>
        <form action="../../../system/function/admin/crud/insert.php" method="post" class="main-wrap" enctype="multipart/form-data">
            <div class="insert-column">
                <label for="" class="label-form">ID Alat</label>
                <input type="text" class="column-form" name="id_alat" placeholder="" value="<?php echo $auto_kode; ?>" required>
            </div>

            <div class="insert-column">
                <label for="" class="label-form">Jenis Kategori</label>
                <select name="id_kategori" class="column-form">
                    <?php
                        require'../../../system/db_server.php';
                        $result = mysqli_query($conn,"select * from tb_kategori");
                        while ($data = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>
                <?php } ?>
                    </select>
                
            </div>
            <div class="insert-column">
                <label for="" class="label-form">Nama Alat</label>
                <input type="text" class="column-form" name="nama_alat" placeholder="Nama Alat" required>
            </div>
            <div class="insert-column">
                <label for="" class="label-form">Merk</label>
                <input type="text" class="column-form" name="merk" placeholder="Merk Alat" required>
            </div>
            <div class="insert-column">
                <label for="" class="label-form">Tahun Pembuatan</label>
                <input type="date" class="column-form" name="tahun_pembuatan" placeholder="Tahun Pembuatan" required>
            </div>
            <div class="insert-column">
                <label for="" class="label-form">Jumlah Alat</label>
                <input type="number" class="column-form" name="jumlah_alat" placeholder="Jumlah Alat" required>
            </div>
            <div class="insert-column">
                <label for="" class="label-form">Harga Sewa/hari</label>
                <input type="number" class="column-form" name="harga_sewa" placeholder="Jumlah Harga Sewa" required>
            </div>
            <div class="insert-column">
                <label for="" class="label-form">Gambar</label>
                <input type="file" class="column-form" name="gambar" required>
            </div>
            <div class="wrapper-button">
                <button type="submit" name="tambah" class="button-sub">Bayar</button>
            </div>
        </form>
    </div>