<?php include ("header.php");?>
<?php include "conn.php";
//masukkan maklumat database

    if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
        $query = "SELECT no_id, username, id_pegawai, nama, emel, notel, alamat, jabatan, peranan FROM tbl_ketuabahagian WHERE no_id={$id}";
        $view = mysqli_query($conn, $query);
        
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
            // $tahapakses = $row['tahapakses'];
        }
    }
    if(isset($_POST['update'])){
        {
            // $no_id= $_POST['no_id'];
            $id_pegawai= $_POST['id_pegawai'];
            $username= $_POST['username'];
            // $password = $row['password'];
            $nama = $_POST['nama'];
            $emel= $_POST['emel'];
            $notel = $_POST['notel'];
            $alamat = $_POST['alamat'];
            $jabatan = $_POST['jabatan'];
            $peranan= $_POST['peranan'];
            
            $sql = "UPDATE tbl_ketuabahagian SET id_pegawai = '{$id_pegawai}', username = '{$username}', nama ='{$nama}', emel ='{$emel}', notel ='{$notel}', alamat ='{$alamat}', jabatan ='{$jabatan}', peranan = '{$peranan}' WHERE no_id ={$no_id}";
            
            $update = mysqli_query($conn,$sql);
            
            if(!$update){
                    echo "something went wrong". mysqli_error($conn);
                }
                else{ echo "<script type'text/javascript'>alert('Data ketua bahagian berjaya diubah!')</script>";
                    echo "<script type'text/javascript'>document.location='maklumat_ketuabahagian.php';</script>";
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
                <a class="nav-link" href="maklumat_ketuabahagian.php">Pentadbir</a>
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
                <div class="col-md-8 align-self-center">
                    <center><h3 class="text-primary">Maklumat Ketua Bahagian <u><?php echo $nama ?></u></h3></center></div>
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
                    <h1>Kemaskini Data Ketua Bahagian</h1>

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
                                <label class="col-sm-3 control-label">Nama Pengguna :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username"  name="username" autocomplete="off" value="<?php echo $username ?>">
                                </div>
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">Nama :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama"  name="nama" autocomplete="off" value="<?php echo $nama ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">Emel :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="emel"  name="emel" autocomplete="off" value="<?php echo $emel ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">No Telefon :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="notel"  name="notel" autocomplete="off" value="<?php echo $notel ?>">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Alamat :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="editRate" name="alamat" value="<?php echo $alamat ?>" autocomplete="off">
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

                                                <option name="jabatan" value="Teknologi Rekabentuk Produk Industri ">Teknologi Rekabentuk Produk Industri</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Peranan :</label>
                                            <div class="col-sm-9">
                                                <select class="form-select form-select-md-3" id="editProductStatus" name="peranan" value="<?php echo $peranan ?>">
                                                <option selected><?php echo $peranan?></option>
                                                <option value="Ketua Bahagian">Ketua Bahagian</option>
                                                <option value="Pensyarah">Pensyarah</option>
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