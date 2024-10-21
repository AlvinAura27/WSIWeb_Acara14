<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['txt_nama'];
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];

    $query = "INSERT INTO user_detail (user_fullname, user_email, user_password) 
              VALUES ('$nama', '$email', '$pass')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Registrasi berhasil!";
    } else {
        echo "Registrasi gagal: " . mysqli_error($koneksi);
    }
}
?>

<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Registrasi</h2>
    <form action="register.php" method="POST">
        <p>Nama: <input type="text" name="txt_nama" required></p>
        <p>Email: <input type="email" name="txt_email" required></p>
        <p>Password: <input type="password" name="txt_pass" required></p>
        <button type="submit" name="submit">Daftar</button>
    </form>
</body>
</html>
