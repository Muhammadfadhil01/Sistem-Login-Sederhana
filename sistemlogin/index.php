<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "
    <script>
        document.location.href = 'login.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan ngoding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:linen;">
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem login</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container m-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h2>Deksripsi</h2>
                        <p>Sistem login ini memungkinkan pengguna untuk masuk ke
                            dalam aplikasi dengan menggunakan username dan password yang sudah terdaftar.
                            Pengguna dapat mengakses fitur-fitur yang terbatas hanya setelah berhasil login.
                            Setelah selesai menggunakan aplikasi, pengguna dapat logout untuk keluar dari akun mereka.</p>
                        <br>
                        <p>Fitur:</p>
                        <p>1. Login: Pengguna memasukkan username dan password untuk masuk ke dalam aplikasi. Jika username dan password cocok, pengguna diarahkan ke halaman utama aplikasi.</p>
                        <p>2. Logout: Pengguna dapat logout dari akun mereka untuk keluar dari aplikasi. Setelah logout, pengguna akan diarahkan kembali ke halaman login.</p>
                        <p>3. Pesan Kesalahan: Jika terjadi kesalahan saat login (misalnya, username atau password salah), pesan kesalahan yang sesuai akan ditampilkan kepada pengguna.</p>
                        <p>4. Session: Setelah login berhasil, session akan dibuat untuk menyimpan informasi tentang pengguna yang sedang login.</p>
                        <br>
                        <p>Teknologi:</p>
                        <p>1. PHP (untuk logika aplikasi dan interaksi dengan database).</p>
                        <p>2. MySQL sebagai database untuk menyimpan data pengguna.</p>
                        <p>3. HTML, CSS, dan JavaScript untuk tampilan dan interaksi antarmuka pengguna.</p>
                        <br>
                        <a href="logout.php" style="font-size: 35px; color:white">Logout</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>