<?php
include('../common/functions.php');
include('../common/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cari user berdasarkan username
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // User sudah terdaftar, lakukan proses login
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            // Password benar, lakukan login
            redirect('dashboard.php');
        } else {
            echo 'Login Gagal';
        }
    } else {
        // User belum terdaftar, lakukan proses pendaftaran otomatis
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', 'mahasiswa')";

        if (mysqli_query($conn, $query)) {
            // Pendaftaran berhasil, lakukan login
            redirect('dashboard.php');
        } else {
            echo 'Login Gagal';
        }
    }
}
?>

