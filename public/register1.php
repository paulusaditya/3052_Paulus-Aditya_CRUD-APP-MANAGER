<?php

require 'connection.php';
$nim = $_POST["nim"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$studyprogram = $_POST["studyprogram"];
$faculty = $_POST["faculty"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_users (nim, fullname, email, studyprogram, faculty, password)
                VALUES ('$nim', '$fullname', '$email', '$studyprogram', '$faculty', '$password')";

if (mysqli_query($conn,$query_sql)) {
    echo "<script>
    alert('Akun Berhasil Dibuat');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "Pendaftaran gagal:" . mysqli_error($conn);
}
