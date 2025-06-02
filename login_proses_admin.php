<?php
include "conn.php";
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Checking if user exists in the database
    $query = "SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($conn, $query);

    $rows = mysqli_num_rows($result);
    if($rows == 1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location: admin.php");
    } else {
        echo '<div class="form"><h3>USERNAME/PASSWORD IS INCORRECT.</h3><br/>Click here to <a href="index.php">Login</a></div>';
    }
}
?>
