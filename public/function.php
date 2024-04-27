<?php

$db = mysqli_connect('localhost', 'root', '', 'db_students');
function select($query)
{
    $db = mysqli_connect('localhost', 'root', '', 'db_students');
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

    $query = "UPDATE tbl_students SET nim = '$nim', fullname = '$fullname', email = '$email', faculty = '$faculty', programstudy = '$programstudy' WHERE id = '$id'";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

function create($post)
{
    $db = mysqli_connect('localhost', 'root', '', 'db_students');

    $id = $post['id'];
    $nim = $post['nim'];
    $fullname = $post['fullname'];
    $email = $post['email'];
    $faculty = $post['faculty'];
    $programstudy = $post['programstudy'];

    $query = "INSERT INTO tbl_students VALUES ('$id', '$nim', '$fullname', '$email', '$faculty', '$programstudy')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

function delete($id)
{
    $db = mysqli_connect('localhost', 'root', '', 'db_students');

    $query = "DELETE FROM tbl_students WHERE id = $id";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}


?>