<?php
require 'koneksi.php';
require 'query.php';
$nama = isset($_GET["user_fullname"]) ? $_GET["user_fullname"] : "";
$data = new Crud();
?>

<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Selamat datang <?php echo $nama; ?>!</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($data->readData() as $value) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $value['user_fullname']; ?></td>
                <td><?php echo $value['user_email']; ?></td>
                <td><a href="edit.php?id=<?php echo $value['id']; ?>">Edit</a></td>
                <td><a href="hapus.php?id=<?php echo $value['id']; ?>">Hapus</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
