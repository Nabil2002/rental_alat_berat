    <link rel="stylesheet" href="../../../assets/css/admin/navigasi/data_alat.css">
    <link rel="stylesheet" href="../../../assets/font/fontawsome/css/all.css">

<div class="Wrapper-table">
    <div class="search-nav">
    <form action="" method="get">
        <input type="search" name="cari" class="kolom-search" autocomplete="off" placeholder="Cari..." required>
        <button class="fa fa-search button" for="search"></button>
    </form>
</div>
    <h3>Data Alat Berat PT.Indo Truck Pratama Depok</h3>
    <a href="data_alat.php">Tampilkan Semua Data&nbsp;</a>
    <div class="wrapper-btn-print">
        <br>
            <button class="btn-print" value="Print Halaman Ini!" onclick="printPage()" class="btn-print"><i class="fas fa-print"></i>
                Struck
            </button>
	</div>
    <?php 
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			echo "<b>Hasil pencarian : ".$cari."</b>";
		}
	?>
    <table class="table">
        <tr class="tr-header">
            <th class="child">Id Alat</th>
            <th class="child">Kategori</th>
            <th class="child">Nama Alat</th>
            <th class="child">Merk</th>
            <th class="child">Tahun pembuatan</th>
            <th class="child">Jumlah alat</th>
            <th class="child">Harga sewa</th>
            <th class="child">gambar</th>
            <th class="th-last-child">Options</th>
        </tr>
        <?php 
			include "../../../system/db_server.php";
			if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$query_data = mysqli_query($conn,"SELECT * FROM tb_kategori INNER JOIN tb_alat USING (id_kategori) WHERE nama_alat LIKE '%".$cari."%'");				
		}else{
			$query_data = mysqli_query($conn,"SELECT * FROM tb_kategori INNER JOIN tb_alat USING (id_kategori)");	
		}
			$no = 1;
			while($data = mysqli_fetch_array($query_data)){
					?>
        <tr>
            <td><?php echo $data['id_alat']; ?></td>
            <td><?php echo $data['nama_kategori']; ?></td>
            <td><?php echo $data['nama_alat']; ?></td>
            <td><?php echo $data['merk']; ?></td>
            <td><?php echo $data['tahun_pembuatan']; ?></td>
            <td><?php echo $data['jumlah_alat']; ?></td>
            <td><?php echo $data['harga_sewa']; ?></td>
            <td><img src="<?php echo "../../../assets/img/img_upload/".$data['gambar']; ?>"></td>
            <td class="td-last-child">
                <button class="button-options">
                    <a class="edit" href="data_update.php?id_alat=<?php echo $data['id_alat']; ?>">
                        Edit
                    </a>
                </button>
                <br>
                <button class="button-options">
                    <a class="hapus"
                        href="../../../system/function/admin/crud/delete_alat.php?id_alat=<?php echo $data['id_alat']; ?>"
                        onclick="konfirmasi()">Hapus</a>
                </button>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

	<script type="text/javascript">
		$(document).ready(function () {
			$('.tombol').click(function () {
				$('.menu').toggleClass("slide-menu-tampil");
			});
		});

		$(".hapus").click(function () {
			var jawab = confirm("Anda Yakin Ingin Menghapus Data Ini?");
			if (jawab === true) {
				//            kita set hapus false untuk mencegah duplicate request
				var hapus = false;
				if (!hapus) {
					hapus = true;
					$.post('hapus.php', {
							id: $(this).attr('data-id_siswa')
						},
						function (data) {
							alert(data);
						});
					hapus = false;
				}
			} else {
				return false;
			}
		});

    function printPage() {
        window.print();
    }
    </script>