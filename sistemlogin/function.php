<?php 
$conn = mysqli_connect('localhost','root', '', 'db_login');

function register(){
    global $conn;
    $username = stripslashes(strtolower($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

    if($password !== $password2){
        echo "
        <script>
            alert('konfirmasi password tidak sesuai');
        </script>
        ";
        return 0;
    }

    $query0 = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($query0) > 0){
        echo "
        <script>
            alert('user tidak tersedia');
        </script>
        ";
        return 0;
    }

    $passwordEnkripsi = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$passwordEnkripsi')");
    $result = mysqli_affected_rows($conn);
    return $result;
}

function login(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($query);


    if(mysqli_num_rows($query) > 0){

        //buka password
        $passwordVerify = password_verify($password, $row['password']);

        if($passwordVerify > 0){
            
            return 1;
        }
    }else{
        echo "
        <script>
            alert('username tidak terdaftar');
            document.location.href = 'login.php';
        </script>
        ";

    }
}
?>