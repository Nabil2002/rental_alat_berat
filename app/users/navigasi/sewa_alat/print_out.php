    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/sewa_alat/print_out.css">
<div class="wrapper-payment">
<br>
<br>
<br>
    <div class="wrapper-btn-print">
        <br>
            <button class="btn-print" value="Print Halaman Ini!" onclick="printPage()" class="btn-print"><i class="fas fa-print"></i>
                Struck
            </button>
	</div>
    <center><h2>Struck</h2></center>
        <table class="table" border="1px">
        <tr class="tr-header">
            <th class="child">Id Pembayaran</th>
            <th class="child">Id Sewa</th>
            <th class="child">Nama Alat</th>
            <th class="child">Jumlah Alat</th>
            <th class="child">Tgl bayar</th>
            <th class="child">Total Bayar</th>
            <th class="child">Gambar</th>
        </tr>
        <?php
        include "../../../../system/db_server.php";
        $sql = "select max(id_pengembalian) from tb_pengembalian"; //mencari kode yang paling besar atau kode yang baru masuk
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
        $id_pembayaran = $_POST['id_pembayaran'];
        if (isset($_POST['id_pembayaran'])) {
            $id_pembayaran      = $_POST['id_pembayaran'];
            $id_sewa            = $_POST['id_sewa'];
            $id_pelanggan       = $_POST['id_pelanggan'];
            $jumlah_alat_sewa   = $_POST['jumlah_alat_sewa'];
            $id_alat            = $_POST['id_alat'];
            ?>
            <?php 
        } else{
            $id_pembayaran      = $_GET['id_pembayaran'];
            $id_sewa            = $data['id_sewa'];
            $jumlah_alat_sewa   = $_GET['jumlah_alat_sewa'];
            $id_pelanggan       = $_GET['id_pelanggan'];
            $id_alat            = $_GET['id_alat'];
        }
        $query_mysqli = mysqli_query($conn,"SELECT tb_pembayaran.id_pembayaran,tb_sewa.id_sewa,tb_pelanggan.nama_pelanggan,tb_alat.nama_alat,tb_alat.merk,tb_alat.tahun_pembuatan,tb_alat.tahun_pembuatan,tb_alat.gambar,tb_sewa.jumlah_alat_sewa, tb_sewa.tgl_sewa,tb_sewa.lokasi,tb_pembayaran.tgl_bayar,tb_pembayaran.total_bayar FROM tb_pembayaran,tb_sewa,tb_pelanggan,tb_alat WHERE tb_pembayaran.id_pembayaran='$id_pembayaran' AND tb_sewa.id_sewa='$id_sewa' AND tb_pelanggan.id_pelanggan=tb_sewa.id_pelanggan AND tb_alat.id_alat=tb_sewa.id_alat")or die(mysqli_error());
        $data = mysqli_fetch_array($query_mysqli);{

    ?>
            <tr>
            <td><?php echo $data['id_pembayaran'] ?></td>
            <td><?php echo $data['id_sewa'] ?></td>
            <td><?php echo $data['nama_alat'] ?></td>
            <td><?php echo $jumlah_alat_sewa ?></td>
            <td><?php echo $data['tgl_bayar'] ?></td>
            <td><?php echo $data['total_bayar']; ?></td>
            <td><img src="<?php echo "../../../../assets/img/img_upload/".$data['gambar']; ?>"></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <p>Note: Simpan Struck Ini Baik-baik</p>
    <p>Hubungi No telpon atau email berikut:</p>
    <p>No    : 087872159697</p>
    <p>Email : indotruck.depok@gmail.com</p>

    <script>
    function printPage() {
        window.print();
    }
    </script>


