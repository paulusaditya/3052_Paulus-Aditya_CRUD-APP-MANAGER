<?php

include "conn_students.php";

// Establish database connection
$db = mysqli_connect('localhost', 'root', '', 'db_students');

// Fungsi untuk mengambil data dari database
if (!function_exists('select')) {
    function select($query)
    {
        global $db; // Akses koneksi database global

        $result = mysqli_query($db, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
}


function select($query)
{
    global $db; // Access global database connection

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function edit($post)
{
    $db = mysqli_connect('localhost', 'root', '', 'db_students');

    $id = $post['id'];
    $nim = $post['nim'];
    $fullname = $post['fullname'];
    $email = $post['email'];
    $faculty = $post['faculty'];
    $programstudy = $post['programstudy'];

    // Access uploaded file data
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // Check if file was uploaded successfully
    if (!empty($image_name) && is_uploaded_file($image_tmp)) {
        // Generate unique file name
        $file_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $encrypted_name = md5(uniqid(rand(), true));
        $target_file = 'img/'. $encrypted_name . '.' . $file_extension;

        // Move uploaded file to target directory
        if (move_uploaded_file($image_tmp, $target_file)) {
            // Update image information in the database
            $query = "UPDATE tbl_students SET nim = '$nim', fullname = '$fullname', email = '$email', faculty = '$faculty', programstudy = '$programstudy', image ='$encrypted_name.$file_extension' WHERE id = '$id'";
            mysqli_query($db, $query);

            return mysqli_affected_rows($db);
        } else {
            // Error message if file upload fails
            return "Error: Failed to upload image.";
        }
    } else {
        // If no new image is uploaded, only update other information
        $query = "UPDATE tbl_students SET nim = '$nim', fullname = '$fullname', email = '$email', faculty = '$faculty', programstudy = '$programstudy' WHERE id = '$id'";
        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
    }
}


function create($post)
{
    $db = mysqli_connect('localhost', 'root', '', 'db_students');

    $nim = $post['nim'];
    $fullname = $post['fullname'];
    $email = $post['email'];
    $faculty = $post['faculty'];
    $programstudy = $post['programstudy'];
    
    // Access uploaded file data
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // Check if file was uploaded successfully
    if (!empty($image_name) && !empty($image_tmp)) {
        // Generate unique file name
        $file_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $encrypted_name = md5(uniqid(rand(), true));
        $target_file = 'img/'. $encrypted_name . '.' . $file_extension;

        // Move uploaded file to target directory
        move_uploaded_file($image_tmp, $target_file);

        // Check if NIM already exists
        $check_query = "SELECT * FROM tbl_students WHERE nim = '$nim'";
        $check_result = mysqli_query($db, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            echo "<script>alert('NIM sudah terdaftar! Silakan gunakan NIM yang berbeda.'); document.location.href = 'dashboard.php';</script>";
        } else {
            // Insert data into database
            $query = "INSERT INTO tbl_students (nim, fullname, email, faculty, programstudy, image) 
                      VALUES ('$nim', '$fullname', '$email', '$faculty', '$programstudy', '$encrypted_name.$file_extension')";
            $result = mysqli_query($db, $query);

            if (!$result) {
                die("Query Error: " . mysqli_error($db));
            } else {
                echo "<script>alert('Data Berhasil ditambahkan'); document.location.href = 'dashboard.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Image tidak boleh kosong'); document.location.href = 'dashboard.php';</script>";
    }
}




function delete($id)
{
    $db = mysqli_connect('localhost', 'root', '', 'db_students');

    $query = "DELETE FROM tbl_students WHERE id = $id";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}


?>