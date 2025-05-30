<?php include ("header.php");?>
<?php
include "conn.php";
    //masukkan maklumat database
    if (isset($_POST['btn_submit'])){
      // $no_id = $_POST['no_id'];
      $id_pegawai = $_POST['id_pegawai'];
      $nama = $_POST['nama'];
      $subjek= $_POST['subjek'];
      $semester = $_POST['semester'];
      $tarikh_ganti = $_POST['tarikh_ganti'];
      // $masa_ganti = $_POST['masa_ganti'];
      $sebab = $_POST['sebab'];
      $jabatan = $_POST['jabatan'];
      $nama_pengganti = $_POST['nama_pengganti'];
      //$lulus_jabatan = $_POST['lulus_jabatan'];
      
      $sql = "INSERT INTO tbl_semakan (id_pegawai, nama, subjek, semester, tarikh_ganti, sebab, jabatan, nama_pengganti) VALUES ('{$id_pegawai}','{$nama}','{$subjek}','{$semester}','{$tarikh_ganti}','{$sebab}','{$jabatan}','{$nama_pengganti}')";
      
      $result = mysqli_query($conn, $sql);
      //displaying proper message fot the user to see wheteher the query excuted perfectly or not

      if (!$result){
        echo "Something went wrong ". mysqli_error($conn);
      }
      else { echo "<script type'text/javascript'>alert('Permohonan telah berjaya!')</script>";
        echo "<script type'text/javascript'> document.location = 'semakan.php'; </script>";
      }
}
?>
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
                <a class="nav-link" href="pengajar.php">Pensyarah</a>
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
        <div class="container-fluid h-custom">
            <div class="container-sm">
                <h2>Permohonan Pensyarah</h2>
    <form class="form-horizontal" role="form" action="" method="post">
    <!--input id pegawai-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="id_pegawai">ID Pegawai:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id_pegawai" placeholder="Masukkan ID Pegawai" name="id_pegawai" required>
      </div>
    </div>

    <!--input name-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="name">Nama:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" autofocus="" required>
      </div>
    </div>

    <!--input subjek / tugas-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-2" for="subjek">Subjek / Tugas : </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="subjek" placeholder="Masukkan nama subjek / tugas" name="subjek" required>
      </div>
    </div>

    <!--input semester / kelas-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-2" for="semester">Semester / Kelas : </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="semester" placeholder="Masukkan semester / kelas" name="semester" required>
      </div>
    </div>

    <!-- input tarikh ganti -->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-2" for="tarikh_ganti">Tarikh Ganti : </label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tarikh_ganti" placeholder="Masukkan tarikh ganti" name="tarikh_ganti" autofocus="" required>
      </div>
    </div>

    <!-- input masa ganti -->
    <!-- <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-2" for="masa_ganti">Masa Ganti :</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" id="masa_ganti" placeholder="Masukkan masa ganti" name="masa_ganti" autofocus="">
      </div>
    </div> -->

    <!--select sebab-->
    <div class="form-group">
    <div class="form-outline mb-2">
        <label class="control-label col-sm-3" for="sebab">Sebab :</label>
        <div class="col-sm-10">
            <select class="form-select form-select-md-3" id="sebab" name="sebab" required>
                <option selected>Pilih sebab permohonan </option>
                <option name="sebab" value="Cuti Rehat" required>Cuti Rehat</option>
                <option name="sebab" value="Cuti Kecemasan" required>Cuti Kecemasan</option>
                <option name="sebab" value="Cuti Sakit" required>Cuti Sakit</option>
                <option name="sebab" value="Kursus" required>Kursus</option>
                <option name="sebab" value="Lain-lain" required>Lain-lain</option>
            </select>
        </div>
    </div>

    <!--select jabatan-->
    <div class="form-group">
    <div class="form-outline mb-2">
        <label class="control-label col-sm-3" for="jabatan">Bengkel:</label>
        <div class="col-sm-10">
            <select class="form-select form-select-md-3" id="jabatan" name="jabatan" required>
                <option selected>Pilih Bengkel</option>
                <option name="jabatan" value="Teknologi Komputer Perisian">Teknologi Komputer Perisian</option>

                <option name="jabatan" value="Teknologi Komputer Sistem">Teknologi Komputer Sistem</option>

                <option name="jabatan" value="Teknologi Komputer Rangkaian">Teknologi Komputer Rangkaian</option>

                <option name="jabatan" value="Teknologi Minyak & Gas">Teknologi Minyak & Gas</option>

                <option name="jabatan" value="Teknologi Rekabentuk Produk Industri ">Teknologi Rekabentuk Produk Industri</option>
            </select>
        </div>
    </div>
    
    <!--select nama pengajar ganti-->
    <div class="form-group">
    <div class="form-outline mb-2">
      <label class="control-label col-sm-0" for="name">Nama Pengganti:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama_pengganti" placeholder="Masukkan nama pengganti" name="nama_pengganti" autofocus="" required>
      </div>
    </div>

    <!--button-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" id="button">
        <input type="submit" class="btn btn-primary" name="btn_submit" value="Mohon"/>
               <input type="reset" class="btn btn-primary" name="btn_reset" value="Set Semula"/>
      </div>
      </div>
      <br>
</body>
</html>