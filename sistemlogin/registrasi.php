<?php 
require 'function.php';
if(isset($_POST['register'])){
    if(register() > 0){
        echo "
        <script>
            alert('berhasil');
        </script>
        ";
    }else{
        echo "
        <script>
            alert('gagal');
        </script>
        ";
    }
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
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-4 m-5 bg-primary text-white p-4" style="border-radius: 20px;">
                <form method="post">
                    <h1>Registrasi </h1>
                    <div class="mb-3">
                        <label for="username" class="form-label">username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="konfirmasipassword" class="form-label">konfirmasi password</label>
                        <input type="password" class="form-control" id="konfirmasipassword" name="password2">
                    </div>
                    <p>sudah punya akun? <a href="login.php" style="color: white;">login</a></p>
                    <button type="submit" class="btn btn-success" name="register">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>