<?php
include "conn.php";
session_start();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
//echo $username;
//echo $password;
//Checking is user existing in the database or not
    $query = "SELECT * FROM tbl_daftar WHERE username='{$username}'and password='{$password}'";
    $result = mysqli_query($conn,$query);
//semak@baca coding satu persatu baris
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        
        header("Location: pengajar.php");
    }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
    }
}else{
}
?>