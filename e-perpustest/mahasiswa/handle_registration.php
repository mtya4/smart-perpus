<!-- mahasiswa/handle_registration.php -->
<?php
include('../common/functions.php');
include('../common/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Selanjutnya, lakukan validasi input jika diperlukan

    // Periksa apakah username sudah ada di database
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // User sudah ada, mungkin tampilkan pesan kesalahan atau redirect ke halaman login
        echo 'Username sudah terdaftar.';
    } else {
        // User belum ada, buat user baru
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', 'mahasiswa')";

        if (mysqli_query($conn, $query)) {
            redirect('dashboard.php'); // Redirect ke halaman dashboard setelah pendaftaran berhasil
        } else {
            echo 'Pendaftaran Gagal: ' . mysqli_error($conn); // Menampilkan pesan kesalahan MySQL
        }
    }
}
?>



