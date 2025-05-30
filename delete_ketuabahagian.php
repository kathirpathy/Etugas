<?php
    include "conn.php";
    if(isset($_GET['delete']))
    {
        $no_id = $_GET['delete'];

        $query = "DELETE FROM tbl_ketuabahagian WHERE no_id = {$no_id}";
        $delete_query = mysqli_query($conn, $query);
        
        
        header('Location: maklumat_ketuabahagian.php');
    }
?>