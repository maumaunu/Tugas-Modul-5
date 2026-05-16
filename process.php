<?php
if(isset($_POST['username'])&& isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'Ardilla' && $password == 'password'){
        $_SESSION['username'] = $username;
        echo "<script>alert('Username berhasil');</script>";
        include "home.php";
        echo "Selamat Datang " . $_SESSION["username"];
    } else{
        echo "<script>alert('Username atau Password Salah!');</script>";
        include "index_022.php";
    }  
} else{
    echo "<script>alert('Username atau Password Kosong!');</script>";
}
?>