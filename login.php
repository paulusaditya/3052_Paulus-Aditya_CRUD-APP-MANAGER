<?php

require 'connection.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users 
                WHERE email = '$email' AND password = '$password'";
            
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: public/dashboard.php");
} else {
    echo "<script> 
        alert('Email atau password anda salah, Silahkan coba lagi.')
    </script>";
}