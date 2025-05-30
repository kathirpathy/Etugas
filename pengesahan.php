<?php include ("header.php");?>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
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
    
    <section class="vh-100">
        <div class="container-md">
            <div class="container-fluid h-custom">
                <h2>Pengesahan Tugas</h2>
                <div class="w3-responsive">
                    
    <!--table-->
    <div class="demo-html">
        <!-- Button trigger modal rekod baru -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"> REKOD BARU </button>
        <br>
        <br> -->
    <!--table start-->
    <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Bil</th>
			<th>Nama Pengajar</th>
            <th>Jabatan</th>
            <th>Subjek</th>
            <th>Semester</th>
			<th>Tarikh cuti</th>
            <th>Masa</th>
            <th>Sebab</th>
            <th>Status</th>													
		</tr>
    </thead>
    <tbody>
            
    </tbody>
</table>
</div>
</div>       
</section>

    <!--footer-->
    <?php include("footer.php");?>
</body>
</html>