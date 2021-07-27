    <link rel="stylesheet" href="../../../../assets/css/users/navigasi/system_login/login.css" type="text/css">
    <link rel="stylesheet" href="../../../../assets/font/fontawsome/css/all.css">
    
    <div class="content">
        <form action="../../../../system/function/admin/system_login/login.php" method="POST">
            <div class="title"><span>Admin Login</span></div>

            <div class="input-icon">
                <input type="text" name="username" class="box_login" placeholder="Username" autocomplete="off"
                    required>
                <i class="fas fa-credit-card"></i>
            </div>

            <div class="input-icon">
                <input type="password" name="password" class="box_login" placeholder="Password" autocomplete="off"
                    required>
                <i class="fas fa-lock"></i>
            </div>
            <button type="submit" class="tombol" name="login"><i class="fa fa-location-arrow"></i> LOGIN</button>

            <div class="text1">
                <span> 
                    <a href="daftar.php">Registrasi Admin</a>
                </span>
            </div>
        </form>
    </div>