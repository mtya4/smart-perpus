<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'perpustakaan';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}
?>

