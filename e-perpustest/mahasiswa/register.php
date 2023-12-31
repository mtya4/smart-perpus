<!-- mahasiswa/register.php -->
<?php include('../common/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../common/head.php'); ?>
    <title>Registrasi Mahasiswa</title>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <h1 class="text-center">Registrasi Mahasiswa</h1>
                <form action="handle_registration.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username (Nama Mahasiswa):</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password (NIM):</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>



