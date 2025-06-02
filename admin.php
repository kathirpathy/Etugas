<?php include ("header.php");?>
<style>
/* Flexbox untuk menengahkan ikon */
#boxes .container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px; /* ruang antara box */
    flex-wrap: wrap;
    text-align: center;
}

#boxes .box {
    width: 200px;
}

#boxes .box img {
    width: 100px;
    height: auto;
    margin-bottom: 10px;
}
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo kiri -->
            <a class="navbar-brand" href="#">
                <img src="img/logoilpselandar.png" height="50" alt="Logo" loading="lazy" style="margin-top: 5px;"/>
            </a>

            <!-- Butang toggler untuk responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Item kanan -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <span class="navbar-text me-3 fw-bold">Sistem Pelepasan Tugas</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Log Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--banner-->
    <section id="banner">
        <div class="container">
            <h1><span class="highlight">SISTEM PELEPASAN TUGAS PENSYARAH ILPS</span></h1>
            <p>Sistem ini adalah satu alternatif baru bagi memudahkan pensyarah dan ketua jabatan mengisi dan mengesahkan borang perlepasan tugas pensyarah</p>
        </div>
    </section>

    <!--judul-->
    <section id="newsletter">
        <div class="container">
            <h1>PENTADBIR</h1>
        </div>
    </section> 

    <!--ikon butang-->
    <section id="boxes">
        <div class="container">
            <div class="box">
                <a href="pilih_daftar.php">
                    <img src="img/daftar.png">
                    <h3>DAFTAR</h3>
                </a>
            </div>
            <div class="box">
                <a href="maklumat_pengguna.php">
                    <img src="img/maklumat.png">
                    <h3>MAKLUMAT PENGGUNA</h3>
                </a>
            </div>
            <div class="box">
                <a href="laporan_admin.php">
                    <img src="img/laporan.png">
                    <h3>LAPORAN</h3>
                </a>
            </div>
        </div>
    </section>

    <!--footer-->
    <?php include("footer.php");?>
</body>
</html>
