    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/sewa_alat/isi_data_diri.css">
<div class="wrapper-payment">
    <h2>Isi Data Diri</h2>
        <?php
		$con mysqli_connect("localhost", "root", "");
		 mysqli_select_db($conn, "siswa");
        $sql = "select max(nis) from siswa"; //mencari kode yang paling besar atau kode yang baru masuk
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
        $sql = "select max(id_pembayaran) from tb_pembayaran"; //mencari kode yang paling besar atau kode yang baru masuk
        $query = mysqli_query($conn,$sql) or die (mysqli_error());

        $id_alat = mysqli_fetch_array($query);
        
    if($id_alat){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka

        $nilai = substr($id_alat[0], 1); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya. 
        $kode = (int) $nilai; //kode yang sudah di pecah di tambah 1

        $kode = $kode + 1;
        $auto_kode_bayar = "P" .str_pad($kode, 2, "0", STR_PAD_LEFT);
        }else{
        $auto_kode_bayar = "P01";
    }
?>
<?php
        include "../../../../system/db_server.php";
        $id_alat = $_POST['id_alat'];
        if (isset($_POST['id_sewa'])) {
            $id_alat            = $_POST['id_alat'];
            $total              = $_POST['total'];
            $jumlah_alat        = $_POST['jumlah_alat'];
            $jumlah_alat_sewa   = $_POST['jumlah_alat_sewa'];
            $lama_sewa          = $_POST['lama_sewa'];
            ?>
            <?php 
        } else{
            $id_alat            = $_GET['id_alat'];
            $jumlah_alat        = $data['jumlah_alat'];
            $jumlah_alat_sewa   = $_GET['jumlah_alat_sewa'];
            $lama_sewa          = $_GET['lama_sewa'];
            $total              = 0;
        }
        $query_mysqli = mysqli_query($conn,"SELECT tb_alat.id_alat,tb_alat.nama_alat,tb_kategori.id_kategori,tb_kategori.nama_kategori,tb_alat.merk,tb_alat.jumlah_alat,tb_alat.harga_sewa,tb_alat.gambar FROM tb_alat,tb_kategori WHERE tb_alat.id_alat='$id_alat' AND tb_kategori.id_kategori=tb_alat.id_kategori")or die(mysqli_error());
        $data = mysqli_fetch_array($query_mysqli);{

    ?>
    <form action="../../../../system/function/users/sewa_alat/pesan_alat.php" method="POST" class="main-wrap">
        <div class="payment-column">
            <label for="" class="label-form">Id Pembayaran</label>
            <input type="text" class="column-form" name="id_pembayaran"
                value="<?php echo $auto_kode_bayar ?>" readonly>
        </div>
        <div class="payment-column">
            <label for="" class="label-form">Id Sewa</label>
            <input type="text" class="column-form" name="id_sewa"
                value="<?php echo $auto_kode ?>" readonly>
        </div>
        <br>
        <div class="insert-column">
            <label for="" class="label-form">Id Pelanggan</label>
            <select name="id_pelanggan" class="column-form">
                <?php
                    require'../../../../system/db_server.php';
                    $result = mysqli_query($conn,"select * from tb_pelanggan");
                    while ($data1 = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $data1['id_pelanggan']; ?>"><?php echo $data1['nama_pelanggan']; ?></option>
            <?php } ?>
            </select>
        </div>
        <br>
        <div class="payment-column">
            <label for="column-form" class="label-form">Nama Alat</label>
            <input type="text" class="column-form" name="nama_alat" value="<?php echo $data['nama_alat'] ?>">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Jumlah Alat</label>
            <input type="number" class="column-form" name="jumlah_alat_sewa"
                value="<?php echo $jumlah_alat_sewa ?>">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Total Bayar</label>
            <input type="number" class="column-form" name="total_bayar"
                value="<?php echo $total ?>">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Tgl Bayar</label>
            <input type="date" class="column-form" name="tgl_bayar">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Lokasi</label>
            <input type="text" class="column-form" name="lokasi">
        </div>
        <div class="payment-column">
            <label for="column-form" class="label-form">Lama Sewa</label>
            <input type="text" class="column-form" name="lama_sewa"
            value="<?php echo $lama_sewa ?>">
        </div>
        <div class="payment-column">
            <!-- <label for="" class="label-form">Id Alat</label> -->
            <input type="hidden" class="column-form" name="id_alat"
                value="<?php echo $id_alat ?>" readonly>
        </div>
        <div class="wrapper-button">
            <button type="submit" name="pesan" class="btn-pesan">Pesan</button>
        </div>
    </form>
    <?php } ?>
</div>