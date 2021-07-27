    <link rel="stylesheet" href="../../../assets/css/admin/navigasi/data_pelanggan1.css">
    <link rel="stylesheet" href="../../../assets/font/fontawsome/css/all.css">

<div class="Wrapper-table">
    <div class="search-nav">
    <form action="" method="get">
        <input type="search" name="cari" class="kolom-search" autocomplete="off" placeholder="Cari..." required>
        <button class="fa fa-search button" for="search"></button>
    </form>
</div>
    <h3>Data Pelanggan PT.Sinar Graha Indonesia</h3>
    <a href="data_alat.php">Tampilkan Semua Data&nbsp;</a>
    <div class="wrapper-btn-print">
        <br>
            <button value="Print Halaman Ini!" onclick="printPage()" class="btn-print"><i class="fas fa-print"></i>
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
            <th class="child">Id Pelanggan</th>
            <th class="child">Nama Pelanggan</th>
            <th class="child">Nama Instansi</th>
            <th class="child">Email</th>
            <th class="child">Password</th>
            <th class="child">Nomer Telpon</th>
            <th class="child">Alamat</th>
            <th class="th-last-child">Options</th>
        </tr>
        <?php 
			include "../../../system/db_server.php";
			if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$query_data = mysqli_query($conn,"SELECT * FROM tb_pelanggan WHERE nama_pelanggan LIKE '%".$cari."%'");				
		}else{
			$query_data = mysqli_query($conn,"SELECT * FROM tb_pelanggan");	
		}
			$no = 1;
			while($data = mysqli_fetch_array($query_data)){
					?>
        <tr>
            <td><?php echo $data['id_pelanggan']; ?></td>
            <td><?php echo $data['nama_pelanggan']; ?></td>
            <td><?php echo $data['nama_instansi']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['no_telpon']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
                <button class="button-options">
                    <a class="edit" href="data_update.php?id_alat=<?php echo $data['id_alat']; ?>">
                        Edit
                    </a>
                </button>
                <br>
                <button class="button-options">
                    <a class="hapus"
                        href="../../../system/function/admin/crud/delete_pelanggan.php?id_pelanggan=<?php echo $data['id_pelanggan']; ?>"
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