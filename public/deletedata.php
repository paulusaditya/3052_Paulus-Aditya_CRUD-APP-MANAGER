<?php
include 'conn_students.php';
include 'function.php';

$id = (int)$_GET['id'];

if(delete($id) > 0){
    echo "<script>
    alert('Data Berhasil dihapus');
    document.location.href = 'dashboard.php';
    </script>";
}else {
    echo "<script>
    alert('Data Gagal dihapus');
    document.location.href = 'dashboard.php';
    </script>";
}


?>