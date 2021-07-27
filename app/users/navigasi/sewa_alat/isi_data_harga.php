	<link rel="stylesheet" href="../../../../assets/css/users/navigasi/sewa_alat/isi_data_harga1.css">
<div class="wrapper-payment">
    <h2>Isi Data Alat</h2>
    <?php
        include "../../../../system/db_server.php";
        $sql = "select max(id_sewa) from tb_sewa"; //mencari kode yang paling besar atau kode yang baru masuk
        $query = mysqli_query($conn,$sql) or die (mysqli_error());

        $id_alat = mysqli_fetch_array($query);
        
        if($id_alat){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka

            $nilai = substr($id_alat[0], 1); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya. 
            $kode = (int) $nilai; //kode yang sudah di pecah di tambah 1

            $kode = $kode + 1;
            $auto_kode = "S" .str_pad($kode, 2, "0", STR_PAD_LEFT);
        }else{
            $auto_kode = "S01";
        }
    ?>
<?php
        include "../../../../system/db_server.php";
        $id_alat = $_GET['id_alat'];
        $query_mysqli = mysqli_query($conn,"SELECT tb_alat.id_alat,tb_alat.nama_alat,tb_kategori.id_kategori,tb_kategori.nama_kategori,tb_alat.merk,tb_alat.jumlah_alat,tb_alat.harga_sewa,tb_alat.gambar FROM tb_alat,tb_kategori WHERE tb_alat.id_alat='$id_alat' AND tb_kategori.id_kategori=tb_alat.id_kategori")or die(mysqli_error());
        $data = mysqli_fetch_array($query_mysqli);{
    ?>
    <form action="../../../../system/function/users/sewa_alat/hitung_harga.php" method="POST" class="main-wrap">
        <div class="payment-column">
            <label for="" class="label-form">Id Sewa</label>
            <input type="text" class="column-form" name="id_sewa"
                value="<?php echo $auto_kode ?>" readonly>
        </div>
        <div class="payment-column">
            <label for="" class="label-form">Id Alat</label>
            <input type="text" class="column-form" name="id_alat"
                value="<?php echo $data['id_alat'] ?>" readonly>
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Nama Alat</label>
            <input type="text" class="column-form" name="nama_alat" value="<?php echo $data['nama_alat'] ?>">
        </div>
        <div class="payment-column">
            <label for="" class="label-form">Kategori</label>
            <input type="text" class="column-form" name="nama_kategori" value="<?php echo $data['nama_kategori'] ?>">
        </div>
        <div class="payment-column">
            <label for="">Merk</label>
            <input type="text" class="column-form" name="merk" value="<?php echo $data['merk'] ?>">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Jumlah Alat Total</label>
            <input type="number" class="column-form" name="jumlah_alat"
                value="<?php echo $data['jumlah_alat'] ?>" readonly>
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Jumlah Alat Yang Di Sewa</label>
            <input type="number" class="column-form" name="jumlah_alat_sewa">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Harga Sewa</label>
            <input type="number" class="column-form" name="harga_sewa" value="<?php echo $data['harga_sewa'] ?>">
        </div>
        <div class="payment-column">
            <label for="" class="label-form">Lama Sewa</label>
            <select name="lama_sewa" class="column-form">
                <option value="30">1 Bulan</option>
                <option value="60">2 Bulan</option>
                <option value="90">3 Bulan</option>
                <option value="120">4 Bulan</option>
                <option value="150">5 Bulan</option>
                <option value="180">6 Bulan</option>
                <option value="210">7 Bulan</option>
                <option value="240">8 Bulan</option>
                <option value="270">9 Bulan</option>
                <option value="300">10 Bulan</option>
                <option value="360">1 Tahun</option>
                <option value="720">2 Tahun</option>
                <option value="1080">3 Tahun</option>
            </select>
        </div>
        <div class="payment-column">
            <!-- <label for="column-form" class="label-form-img">Gambar</label> -->
            <img src="<?php echo "../../../../assets/img/img_upload/".$data['gambar']; ?>">
            <input type="hidden" class="column-img" name="gambar" value="<?php echo $data['gambar'] ?>">
            
        </div>
        <div class="wrapper-button">
            <button type="submit" name="hitung" class="btn-sewa">Hitung!Total?</button>
        </div>
    </form>
    <?php } ?>
</div>