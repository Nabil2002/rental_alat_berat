        <link rel="stylesheet" href="../../../assets/css/admin/styleq.css">
        <link rel="stylesheet" href="../../../assets/font/fontawsome/css/all.css">

        <div class="wrapper-content"></div>
        <h1>Dashboard</h1>
        <div class="wrapper-card">
            <?php
                $sql_query = "SELECT * FROM tb_kategori INNER JOIN tb_alat USING (id_kategori) WHERE "
            ?>

            <div class="main-card">
                <i class="fas fa-truck icon"></i>
                <span class="label">Jumlah Alat Berat</span>
                <span class="content-label">40</span>
            </div>

            <div class="main-card">
                <i class="fas fa-handshake icon"></i>
                <span class="label">Jumlah Peminjam</span>
                <span class="content-label">30</span>
            </div>

            <div class="main-card">
                <i class="fas fa-truck icon"></i>
                <span class="label">Jumlah Alat Berat</span>
                <span class="content-label">40</span>
            </div>

        </div>
        </div>
        <!-- end -->
        </div>