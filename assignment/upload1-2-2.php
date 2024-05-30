<?php
// Check if there even is a file
if ($_FILES['file']) {
    $file = $_FILES['file'];

    // check the allowed extension and filesize
    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowedExtensions = array('png', 'jpeg', 'jpg', 'gif');
    $maxFileSize = 3 * 1024 * 1024; // 3MB

    if (!in_array($fileType, $allowedExtensions)) {
        echo "<script>alert('Only images (PNG, JPEG, JPG, GIF) are allowed!');window.location.href='../php.php#upload';</script>";
        exit();
    }

    if ($fileSize > $maxFileSize) {
        echo "<script>alert('File may not be greater then 3MB!');window.location.href='../php.php#upload';</script>";
        exit();
    }

    if (strlen($fileName) > 50 || !preg_match('/[A-Z]/', $fileName)) {
        echo "<script>alert('The file name has to be shorter then 50 characters an need 1 uppercase!');window.location.href='../php.php#upload';</script>";
        
        exit();
    }

    // Upload the file
    $uploadDir = '../uploads/';
    $destination = $uploadDir . $fileName;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        header('Location: ../php.php#upload');
        exit();
    } else {
        echo "<script>alert('There was something wrong with uploading the file :c);window.location.href='../php.php#upload';</script>";
        exit();
    }

    header('Location: ../php.php#upload');
}
?>
