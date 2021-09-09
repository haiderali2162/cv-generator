<?php


session_start();

require_once('../db/DbConn.php');

if (!isset($_SESSION['user_name'])) {
    header("location: adminpanel");
}


$target = "./uploads/";
//getting the exect name of the image with location to upload
$target_file = $target . basename($_FILES['img_file']['name']);

//checking the image file type
$file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$upload_status = 0;


if (isset($_POST['upload_img'])) {
    $is_img = getimagesize($_FILES['img_file']['tmp_name']);

    if ($is_img) {
        $upload_status = 1;
    } else {
        $upload_status = 0;
    }
}



if (file_exists($target_file)) {
    $upload_status = 0;
}


if ($_FILES['img_file']['size'] > 1000000) {
    $upload_status = 0;
}



if ($upload_status === 0) {
    echo '<script> alert("error");</script>';
} else {
    if (move_uploaded_file($_FILES['img_file']['tmp_name'], $target_file)) {

        //saving image into database
        $data = array('img_path' => $target_file, 'user_name' => $_SESSION['user_name']);
        $db->uploadImage($data);

        echo '<script> alert("file: ' . htmlspecialchars(basename($_FILES['img_file']['name'])) . '  uploaded successfully"); </script>';
    } else {
        echo '<script> alert("failed to upload the file");</script>';
    }
}


header("location: dashboard");
