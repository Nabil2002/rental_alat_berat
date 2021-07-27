<?php
session_start(); // memulai session
session_destroy(); // menghapus session
header("location: ../../../../app/users/navigasi/system_login/login.php"); // mengambalikan ke Halaman Login