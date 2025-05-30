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
                <a class="nav-link" href="ketuabahagian.php">Ketua Bahagian</a>
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
                <h2>Kelulusan Permohonan</h2>
                <div class="w3-responsive">

                <!--table-->
                <div class="demo-html">
                    <!-- Button trigger modal rekod baru -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        REKOD BARU
                    </button> -->
                    <br>
                    <br>
                    
                    <!--table start-->
                    <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                    
                        
                        <tr>
                            <th>Bil</th>
                            <th>ID Pegawai</th>
                            <th>Nama</th>
                            <!-- <th>No Telefon</th> -->
                            <th>Subjek/Tugas</th>
                            <th>Semester/Kelas</th>
                            <th>Tarikh ganti</th>
                            <!-- <th>Masa ganti</th> -->
                            <th>Sebab</th>
                            <th>Bengkel</th>
                            <th>Nama Pengganti</th>
                            <!-- <th>No telefon pengganti</th>
                            <th>Peranan</th> -->
                            <th>Status</th>
                            <th>Tindakan</th>
                            <!-- <th></th> -->
                        </tr>
                    </thead>
                    <tbody>
                   

                    <?php
                        include "conn.php";
                        $query = "SELECT * FROM tbl_semakan";
                        $view = mysqli_query($conn,$query);
                        //buat turutan no
                        $i=1;
                        while($row = mysqli_fetch_assoc($view)){

                            $no_id = $row['no_id'];
                            $id_pegawai = $row['id_pegawai'];
                            $nama = $row['nama'];
                            $subjek= $row['subjek'];
                            $semester = $row['semester'];
                            $tarikh_ganti = $row['tarikh_ganti'];
                            // $masa_ganti = $row['masa_ganti'];
                            $sebab = $row['sebab'];
                            $jabatan = $row['jabatan'];
                            $nama_pengganti = $row['nama_pengganti'];
                            $lulus_jabatan = $row['lulus_jabatan'];
                    
                            // $lulus_jabatan = $row['lulus_jabatan'];

                        echo "<tr>";
                        echo "<td scope='row'>$i</td>";
                        echo "<td>$id_pegawai</td>";
                        echo "<td>$nama</td>";
                        echo "<td>$subjek</td>";
                        echo "<td>$semester</td>";
                        echo "<td>$tarikh_ganti</td>";
                        // echo "<td>$masa_ganti</td>";
                        echo "<td>$sebab</td>";
                        echo "<td>$jabatan</td>";
                        echo "<td>$nama_pengganti</td>";
                        echo "<td>$lulus_jabatan</td>";
                        echo "<td><a href='edit_kelulusan.php? update && edit={$no_id}' button type='button' class='btn btn-warning'> 
                        <i class='bi bi-pencil-square'></i></button></td>";
                        // echo "<td><button type='button' class='btn btn-info'><a href='view_kelulusan.php? view={$no_id}'> 
                        // <i class='bi bi-eye'></i></button></td>";
                        // echo "<td>$lulus_jabatan</td>";
                        // echo "<td></td>";
                        echo "</tr>";
                        $i++;
                        }
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>       
<br>
<br>

    <!--footer-->
    <?php include("footer.php");?>
</body>
</html>