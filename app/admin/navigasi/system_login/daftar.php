    <?php require'../../../../system/db_server.php'; ?>

    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/system_login/daftar.css" type="text/css">
    <link rel="stylesheet" href="../../../../assets/font/fontawsome/css/all.css">

    <div class="wrapper-daftar">
        <form action="../../../../system/function/admin/system_login/daftar.php" method="post" class="main-wrap"
                name="random_form">
        <h2>Daftar Akun Baru</h2>
		<div class="daftar-column">
			<label for="" class="label-form">Nama Admin</label>
			<input type="text" class="column-form" name="nama_admin" placeholder="Nama admin" required>
		</div>
		<div class="daftar-column">
            <label for="column-form" class="label-form">Username</label>
            <input type="text" class="column-form" name="username" placeholder="Username" required>
        </div>
			<div class="daftar-column">
			<label for="" class="label-form">password</label>
			<input type="password" class="column-form" name="password" placeholder="Password" required>
		</div>
		<div class="wrapper-button">
			<button type="submit" name="daftar" class="btn-daftar">Daftar</button>
		</div>
    </form>
</div>