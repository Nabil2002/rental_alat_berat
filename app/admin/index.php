<?php
    session_start();
        if (empty($_SESSION['username']))
    {
        header("location: navigasi/system_login/login.php"); // jika belum login, maka dikembalikan ke file form_login.php
    } else {
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Keywords" content="HTML,CSS,JS,PHP">
    <meta name="author" content="Nabil khoerul rijal">
    <link rel="stylesheet" href="../../assets/css/admin/styleq.css">
    <link rel="shortcut icon" href="../../assets/img/icon/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/font/fontawsome/css/all.css">
    <title>Dashboard - Admin</title>
</head>

<body>
    <div class="container">
        <!-- header -->
        <div class="header">
            <div class="icon-user">
                <label for="icon"><i class="fas fa-user-circle fa-2x"></i></label>
                <input type="checkbox" id="icon">
                <div class="drop-menu">
                    <ul>
                        <li class="list"><a href="">link 1</a></li>
                        <hr>
                        <li class="list"><a href="../../system/function/admin/system_login/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end -->
        <!-- navigasi -->
        <div class="wrapper-nav">
            <ul>
                <li class="nav-item-head"><a href="" target="content"><i
                            class="fas fa-chalkboard-teacher fa-2x"></i>&nbsp;&nbsp;Cpanel
                        ADMIN</a>
                </li>
                <hr class="rule">
                <li class="nav-item-content"><a href="navigasi/dashboard.php" target="content"><i
                            class="fas fa-home"></i>&nbsp;&nbsp;Dashboard</a></li>
                <hr class="rule">
                <span>ADD</span>
                <li class="nav-item-content"><a href="navigasi/tambah_alat.php" target="content"><i
                            class="fas fa-truck"></i>&nbsp;&nbsp;Tambah
                        Alat Berat</a>
                </li>
                <hr class="rule">
                <span>Data</span>
                <li class="nav-item-content"><a href="navigasi/data_alat.php" target="content"><i
                            class="fas fa-truck"></i>&nbsp;&nbsp;Data Alat Berat</a></li>
                <li class="nav-item-content"><a href="navigasi/data_pelanggan.php" target="content"><i
                            class="fas fa-handshake"></i>&nbsp;&nbsp;Data Pelanggan</a>
                </li>
                <hr class="rule">
            </ul>
        </div>
        <!-- end -->
        <!-- content -->
        <div class="wrapper-content" id="content">
        <!-- frameborder="0" width="100%" height="540" scrolling="none" -->
            <iframe name="content" src="navigasi/dashboard.php">
                </iframe>
        </div>
        <!-- end -->
    </div>
</body>

</html>