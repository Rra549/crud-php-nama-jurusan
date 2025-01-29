<?php
include 'koneksi.php';
$id = $_GET ['id'];
$sql = "SELECT * FROM mahasiswa WHERE id =$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action=" proses_edit.php" menthod="POST">
        <input type = "hidden" name ="id" value="<?php echo $data['id']; ?>">
        Nama: <input type="text" Name="nama" value="<?php echo $data ['nama']; ?>">
        Nim: <input type="text" Name="nim" value="<?php echo $data ['nim']; ?>">
        email: <input type="text" Name="email" value="<?php echo $data ['email']; ?>">
        Nomor: <input type="text" Name="nomor" value="<?php echo $data ['nomor']; ?>">
        jurusan: <input type="text" Name="jurusan" value="<?php echo $data ['jurusan']; ?>">
        <input type ="sumbit" value="simpan">
</form>
</body>
</html>