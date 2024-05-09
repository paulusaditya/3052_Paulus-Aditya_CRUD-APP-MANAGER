<?php
require 'connection.php';
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users 
                WHERE email = '$email' AND password = '$password'";
            
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    //set Session
    $_SESSION["login"] = true;

    //cek remember me
    if(isset($_POST['remember'])){
        //set cookie
        setcookie('key', hash('sha256', $password), time()+60);

    }

    header("Location: public/dashboard.php");
    exit;
} else {
    echo "<script> 
        alert('Email atau password anda salah, Silahkan coba lagi.')
        document.location.href = 'index.php';
    </script>";
}