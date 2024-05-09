<?php
include 'conn_students.php';
include 'function.php';

session_start();

if(!isset($_SESSION["login"])){
    header("Location: ../index.php");
    exit;
}

if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil diubah');
        document.location.href = 'dashboard.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal diubah');
        document.location.href = 'dashboard.php';
        </script>";
    }
}


?>