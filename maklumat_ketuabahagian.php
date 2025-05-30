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
        <a class="navbar-brand" href="admin.php">Sistem Pelepasan Tugas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="maklumat_pengguna.php">Pentadbir</a>
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
    <div class="container-xl">
    <div class="table-responsive">
        <!-- <div class="container-md"> -->
            <div class="container-fluid h-custom">
                <h2>Maklumat Ketua Bahagian</h2>
                <!-- <div class="w3-responsive"> -->
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
                            <th>Nama Pengguna</th>
                            <th>Nama</th>
                            <th>Emel</th>
                            <th>No Telefon</th>
                            <th>Alamat</th>
                            <th>Jabatan</th>
                            <th>Peranan</th>
                            <!-- <th>Tahapakses</th> -->
                            <th>Tindakan</th>
                            <!-- <th></th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include "conn.php";
                        $query = "SELECT * FROM tbl_ketuabahagian";
                        $view = mysqli_query($conn,$query);
                        //buat turutan no
                        $i=1;
                        while($row = mysqli_fetch_assoc($view)){
                            $no_id= $row['no_id'];
                            $id_pegawai= $row['id_pegawai'];
                            $username= $row['username'];
                            // $password = $row['password'];
                            $nama = $row['nama'];
                            $emel= $row['emel'];
                            $notel = $row['notel'];
                            $alamat = $row['alamat'];
                            $jabatan = $row['jabatan'];
                            $peranan= $row['peranan'];
                            // $tahapakses= $row['tahapakses'];

                        echo "<tr>";
                        echo "<td scope='row'>$i</td>";
                        echo "<td>$id_pegawai</td>";
                        echo "<td>$username</td>";
                        // echo "<td>$password</td>";
                        echo "<td>$nama</td>";
                        echo "<td>$emel</td>";
                        echo "<td>$notel</td>";
                        echo "<td>$alamat</td>";
                        echo "<td>$jabatan</td>";
                        echo "<td>$peranan</td>";
                        // echo "<td>$tahapakses</td>";
                        echo "<td><a href='edit_ketuabahagian.php?update && edit={$no_id}' button type='button' class='btn btn-warning'> 
                        <i class='bi bi-pencil-square'> </i></button>
                        
                        <a href='delete_ketuabahagian.php?delete={$no_id}' button type='button' class='btn btn-danger'>
                        <i class='bi bi-trash-fill'> </i></button> </td>";
                        // echo "<td><a href='edit.php?update && edit={$no_id}' class='btn btn-success'>Edit</a></td>";
                        // echo "<td><a href='delete.php?delete={$no_id}' class='btn btn-danger'>Delete</a></td>";
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