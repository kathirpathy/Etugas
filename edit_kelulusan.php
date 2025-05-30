<?php include ("header.php");?>
<?php include "conn.php";
//masukkan maklumat database

    if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
        $query = "SELECT no_id, id_pegawai, nama, subjek, semester, tarikh_ganti, sebab, jabatan, nama_pengganti, lulus_jabatan FROM tbl_semakan WHERE no_id={$id}";
        $view = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_assoc($view)){
            $no_id = $row['no_id'];
            $id_pegawai = $row['id_pegawai'];
            $nama = $row['nama'];
            $subjek = $row['subjek'];
            $semester = $row['semester'];
            $tarikh_ganti = $row['tarikh_ganti'];
            // $masa_ganti = $row['masa_ganti'];
            $sebab = $row['sebab'];
            $jabatan = $row['jabatan'];
            $nama_pengganti = $row['nama_pengganti'];
            $lulus_jabatan = $row['lulus_jabatan'];
            // $tahapakses = $row['tahapakses'];
        }
    }
    if(isset($_POST['update'])){
        {
          
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
            $lulus_jabatan = $_POST['lulus_jabatan'];

            
            $sql = "UPDATE tbl_semakan SET id_pegawai = '{$id_pegawai}', nama = '{$nama}', subjek ='{$subjek}', semester ='{$semester}', tarikh_ganti ='{$tarikh_ganti}', sebab ='{$sebab}', jabatan = '{$jabatan}', nama_pengganti = '{$nama_pengganti}', lulus_jabatan = '{$lulus_jabatan}' WHERE no_id ={$no_id}";
            
            $update = mysqli_query($conn,$sql);
            
            if(!$update){
                    echo "something went wrong". mysqli_error($conn);
                }
                else{ echo "<script type'text/javascript'>alert('Data berjaya diubah!')</script>";
                    echo "<script type'text/javascript'>document.location='kelulusan.php';</script>";
                }
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
    <div class="page-wrapper">
        <div class="row page-titles">
                <div class="col-md-6 align-self-center">
                    <center><h3 class="text-primary">Permohonan <u><?php echo $nama ?></u></h3></center></div>
                </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8" style="margin-left: 10%;">
            <div class="card">
                <div class="card-title"> 
            </div>
            
            <div id="add-brand-messages"></div>
            <div class="card-body">
                <div class="input-states">
                    <form class="form-horizontal" method="post"  id="submitProductForm" action=""enctype="multipart/form-data">
                    
                    <fieldset>
                    <u><h3>Kelulusan Permohonan</h3></u>

                        <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">ID Pegawai</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="id_pegawai"  name="id_pegawai" autocomplete="off" value="<?php echo $id_pegawai ?>">
                                    </div>
                                </div>
                            </div>
                    
                                            
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">Nama Pengajar</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama"  name="nama" autocomplete="off" value="<?php echo $nama ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">Subjek/Tugas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="subjek"  name="subjek" autocomplete="off" value="<?php echo $subjek ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">Semester/Kelas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="semester"  name="semester" autocomplete="off" value="<?php echo $semester ?>">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Tarikh Ganti</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="editRate" name="tarikh_ganti" value="<?php echo $tarikh_ganti ?>" autocomplete="off">
                                    </div>
                                    </div>
                                </div>

                            <!-- <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Masa Ganti</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" id="editRate" name="masa_ganti" value="<?php echo $masa_ganti ?>" autocomplete="off">
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Sebab</label>
                                            <div class="col-sm-9">
                                                <select class="form-select form-select-md-3" id="sebab" name="sebab" value="<?php echo $sebab ?>" >
                                                <option selected><?php echo $sebab?></option>
                                                <option name="sebab" value="Cuti Rehat">Cuti Rehat</option>
                                                <option name="sebab" value="Cuti Kecemasan">Cuti Kecemasan</option>
                                                <option name="sebab" value="Cuti Sakit">Cuti Sakit</option>
                                                <option name="sebab" value="Kursus">Kursus</option>
                                                <option name="sebab" value="Lain-lain">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            
                            <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Jabatan</label>
                                            <div class="col-sm-9">
                                                <select class="form-select form-select-md-3" id="editProductStatus" name="jabatan" value="<?php echo $jabatan ?>" >
                                                <option selected><?php echo $jabatan?></option>
                                                    <option name="jabatan" value="Teknologi Komputer Perisian">Teknologi Komputer Perisian</option>

                                                    <option name="jabatan" value="Teknologi Komputer Sistem">Teknologi Komputer Sistem</option>

                                                    <option name="jabatan" value="Teknologi Komputer Rangkaian">Teknologi Komputer Rangkaian</option>

                                                    <option name="jabatan" value="Teknologi Minyak & Gas">Teknologi Minyak & Gas</option>

                                                    <option name="jabatan" value="Teknologi Rekabentuk Produk Industri">Teknologi Rekabentuk Produk Industri</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                
                                <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Nama Pengganti</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_pengganti" name="nama_pengganti" value="<?php echo $nama_pengganti ?>"  autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-9">
                                                <select class="form-select form-select-md-3" id="lulus_jabatan" name="lulus_jabatan" value="<?php echo $lulus_jabatan ?>">
                                                <option selected><?php echo $lulus_jabatan?></option>
                                                    <option name="lulus_jabatan" value="Diterima">Diterima</option>
                                                    <option name="lulus_jabatan" value="Ditolak">Ditolak</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <center><input type="submit"  id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30" name="update" value="Hantar"></button></center>
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>