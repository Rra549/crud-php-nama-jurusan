<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2> Tambah Data Mahasiswa </h2>
    <from action = "proses_tambah.php" menthod= "POST">

        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label> NIM:</label>
        <input type ="text" name ="nim" required><br>   

         <label> Nomor:</label>
        <input type ="text" name ="nomor" required><br>

        <label> Jurusan:</label>
        <input type ="text" name ="Jurusan" required><br>
        
        <input type ="sumbit" value= "Tambah">
</from>
</body>
</html>