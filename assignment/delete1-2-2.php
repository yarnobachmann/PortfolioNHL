<?php
// Deletes file
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $uploadDir = '../uploads/';

    if (file_exists($uploadDir . $file)) {
        unlink($uploadDir . $file);
        header('Location: ../php.php#upload');
        exit();
    } else {
        echo "<script>alert('File not found!');window.location.href='../php.php#upload';</script>";
        exit();
    }
}
?>
