<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "smart";

// Create a connection
$koneksi = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Verifikasi login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Mengenkripsi password dengan MD5

    // Query untuk memeriksa username dan password
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Login berhasil, lakukan tindakan sesuai kebutuhan
        // Misalnya, redirect ke halaman dashboard
        header("Location: ../admin/index.php");
        exit();
    } else {
        // Login gagal, tampilkan pesan error atau lakukan tindakan lainnya
        echo "Username atau password salah.";
    }
}
?>