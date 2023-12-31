<?php
include('../common/functions.php');
include('../common/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek login admin
    if ($username === 'admin' && $password === 'admin') {
        redirect('dashboard.php');
    } else {
        echo 'Login Gagal';
    }
}
?>
