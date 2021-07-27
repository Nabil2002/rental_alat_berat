    <?php require'../../../../system/db_server.php'; ?>

    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/system_login/daftar.css" type="text/css">
    <link rel="stylesheet" href="../../../../assets/font/fontawsome/css/all.css">
    <?php

        $sql = "select max(id_pelanggan) from tb_pelanggan"; //mencari kode yang paling besar atau kode yang baru masuk
        $query = mysqli_query($conn,$sql) or die (mysqli_error());

        $id_pelanggan = mysqli_fetch_array($query);
        
    if($id_pelanggan){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka

        $nilai = substr($id_pelanggan[0], 1); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya. 
        $kode = (int) $nilai; //kode yang sudah di pecah di tambah 1

        $kode = $kode + 1;
        $auto_kode = "P" .str_pad($kode, 2, "0", STR_PAD_LEFT);
        }else{
        $auto_kode = "P01";
    }
    ?>
    <div class="wrapper-daftar">
                <form action="../../../../system/function/users/system_login/daftar.php" method="post" class="main-wrap"
                    name="random_form">
                    <h2>Daftar Akun Baru</h2>
					<div class="daftar-column">
						<label for="" class="label-form">id_pelanggan</label>
                        <input type="text" class="column-form" name="id_pelanggan" placeholder="id_pelanggan" value="<?php echo $auto_kode; ?>" readonly required>
					</div>
					<div class="daftar-column">
						<label for="" class="label-form">Nama Pelanggan</label>
						<input type="text" class="column-form" name="nama_pelanggan" placeholder="Nama Pelanggan" required>
					</div>
					<div class="daftar-column">
						<label for="column-form" class="label-form">Nama Instansi</label>
						<input type="text" class="column-form" name="nama_instansi" placeholder="Nama Instansi" required>
                    </div>
                    <div class="daftar-column">
						<label for="column-form" class="label-form">Email</label>
						<input type="email" class="column-form" name="email" placeholder="Email" required>
					</div>
					<div class="daftar-column">
						<label for="" class="label-form">password</label>
						<input type="password" class="column-form" name="password" placeholder="Password" required>
					</div>
					<div class="daftar-column">
						<label for="column-form" class="label-form">No Telpon</label>
						<input type="number" class="column-form" name="no_telpon" placeholder="No Telpon" required>
					</div>
					<div class="daftar-column">
						<label for="column-form" class="label-form">Alamat</label>
						<input type="text" class="column-form" name="alamat" placeholder="Alamat Kantor" required>
					</div>
					<div class="wrapper-button">
						<button type="submit" name="daftar" class="btn-daftar">Daftar</button>
					</div>
                </form>
</div>