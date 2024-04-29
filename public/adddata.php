<?php
include 'conn_students.php';
include 'function.php';

if (isset($_POST['add'])) {
    if (create($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di tambahkan');
        document.location.href = 'dashboard.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Berhasil di tambahkan');
        document.location.href = 'dashboard.php';
        </script>";
    }
}

?>