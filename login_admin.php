<?php include ("header.php");?>

<style>
form {
    border: 3px solid #f1f1f1;
    width: 30%;
    border: 1px solid black;
    margin:auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.resetbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

h2 {
     text-align: center;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
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
                <a class="nav-link" href="index.php">Log Keluar</a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
    </nav>

    <h2>Pentadbir</h2>
    <form action="login_proses_admin.php" method="post">
        <div class="imgcontainer">
            <img src="./img/admin.png" alt="Avatar" class="avatar">
        </div>
        
        <div class="container">
            <label><b>Nama Pengguna</b></label>
            <input type="text" placeholder="Masukkan Nama Pengguna" name="username" required>
            <label><b>Kata Laluan</b></label>
            <input type="password" placeholder="Masukkan Kata Laluan" name="password" required>
            <input type="submit" class="btn btn-success" name="login" value="Log Masuk" ></button>
        </div>
        <!-- <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
        <button type="reset" class="resetbtn">Reset</button> -->
    </div>
</form>
<br>
<br>
</body>
</html>