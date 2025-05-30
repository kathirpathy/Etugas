<?php include ("header.php");?>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
        <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="">
                <img src="img/logoilpselandar.png" height="50" alt="Sistem Pelepasan Tugas" loading="lazy" style="margin-top: 5px;"/>
            </a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">Sistem Pelepasan Tugas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">Pentadbir</a>
            </li>
        </ul>
      </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Log Keluar</a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
    </nav>
    
    <!--banner-->
    <section id="banner">
    <div class="container">
        <h1><span class="highlight">SISTEM PELEPASAN TUGAS PENSYARAH ILPS</span></h1>
        <p>Sistem ini adalah satu alternative baru bagi memudahkan pensyarah dan ketua jabatan mengisi dan mengesahkan borang perlepasan tugas pensyarah</p>
    </div>
    </section>
    </nav>
    <section id="newsletter">
      <div class="container">
        <h1>PENTADBIR</h1>
      </div>
    </section> 

    <section id="boxes">
      <div class="container">
        <div class="box">
          <a href="daftar_pengajar.php">
          <img src="img/pengajar.jpg"><h3>PENSYARAH</h3></a>
        </div>
        <div class="box">
          <!-- <img src="img/pengesahan.png">
          <a href="pengesahan.php"><h3>PENGESAHAN</h3></a> -->
        </div>
        <div class="box">
          <a href="daftar_ketuabahagian.php">
          <img src="img/kj.png"><h3>KETUA BAHAGIAN</h3></a>
        </div>
      </div>
    </section>
    <!--footer-->
    <?php include("footer.php");?>
</body>
</html>