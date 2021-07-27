	<link rel="stylesheet" href="../../../../assets/css/users/navigasi/sewa_alat/isi_data_harga1.css">
<div class="wrapper-payment">
    <h2>Isi Data Alat Pengembalian</h2>
<?php
        include "../../../../system/db_server.php";
        $sql = "select max(id_pengembalian) from tb_pengembalian"; //mencari kode yang paling besar atau kode yang baru masuk
        $query = mysqli_query($conn,$sql) or die (mysqli_error());

        $id_pengembalian = mysqli_fetch_array($query);
        
        if($id_pengembalian){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka

            $nilai = substr($id_pengembalian[0], 1); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya. 
            $kode = (int) $nilai; //kode yang sudah di pecah di tambah 1

            $kode = $kode + 1;
            $auto_kode = "P" .str_pad($kode, 2, "0", STR_PAD_LEFT);
        }else{
            $auto_kode = "P01";
        }
    ?>
    <?php
        include "../../../../system/db_server.php";
        if (isset($_POST['id_sewa'])) {
            $id_sewa            = $_POST['id_sewa'];
            $id_alat            = $_POST['id_alat'];
            var_dump($id_sewa);
            ?>
            <?php 
        } else{
            $id_sewa            = $_GET['id_sewa'];
            $id_alat            = $_GET['id_alat'];
        }
        $query_mysqli = mysqli_query($conn,"SELECT tb_sewa.id_sewa,tb_alat.id_alat,tb_alat.nama_alat,tb_kategori.id_kategori,tb_kategori.nama_kategori,tb_alat.merk,tb_alat.jumlah_alat,tb_sewa.jumlah_alat_sewa,tb_alat.harga_sewa,tb_alat.gambar FROM tb_alat,tb_kategori,tb_sewa WHERE tb_sewa.id_sewa='$id_sewa' AND tb_alat.id_alat='$id_alat' AND tb_kategori.id_kategori=tb_alat.id_kategori")or die(mysqli_error());
        $data = mysqli_fetch_array($query_mysqli);{

    ?>
    <form action="../../../../system/function/users/pengembalian/pengembalian_alat.php" method="POST" class="main-wrap">
        <div class="payment-column">
            <label for="" class="label-form">Id Pengembalian</label>
            <input type="text" class="column-form" name="id_pengembalian"
                value="<?php echo $auto_kode; ?>" readonly>
        </div>
        <div class="payment-column">
            <label for="" class="label-form">Id sewa</label>
            <input type="text" class="column-form" name="id_sewa" value="<?php echo $data['id_sewa']; ?>">
        </div>
        <div class="payment-column">
            <label for="" class="label-form">Id alat</label>
            <input type="text" class="column-form" name="id_alat" value="<?php echo $data['id_alat']; ?>">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Nama Alat</label>
            <input type="text" class="column-form" name="nama_alat" value="<?php echo $data['nama_alat']; ?>">
        </div>
        <div class="payment-column">
            <label for="">Merk</label>
            <input type="text" class="column-form" name="merk" value="<?php echo $data['merk']; ?>">
        </div>
        <div class="payment-column">
            <label for="">Jumlah Alat</label>
            <input type="text" class="column-form" name="jumlah_alat" value="<?php echo $data['jumlah_alat']; ?>">
        </div>
        <div class="payment-column">
            <label for="">Jumlah Alat Sewa</label>
            <input type="text" class="column-form" name="jumlah_alat_sewa" value="<?php echo $data['jumlah_alat_sewa']; ?>">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Tanggal Pengembalian</label>
            <input type="date" class="column-form" name="tgl_pengembalian">
        </div>
        <!-- <div class="payment-column">
            <label for="column-form" class="label-form">Tanggal Jatuh Tempo</label>
            <input type="number" class="column-form" name="tgl_jatuh_tempo">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Denda</label>
            <input type="number" class="column-form" name="denda" value="500000" readonly>
        </div> -->
        <div class="wrapper-button">
            <button type="submit" name="submit" class="btn-sewa">Submit</button>
        </div>
    </form>
</div>
<?php } ?>