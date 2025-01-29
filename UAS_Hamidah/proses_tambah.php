<?php
include 'koneksi.php';

$nama = $_POST ['nama'];
$nama = $_POST ['nim'];
$nama = $_POST ['email'];
$nama = $_POST ['nomor'];
$nama = $_POST ['jurusan'];

$sql =" INSERT INTO mahasiswa (nama, nim, email, nomor, jurusan) VALUES ('$nama', '$nim', '$email', '$nomor', '$jurusan')";

if ($conn->query($sql) === TRUE){
    header("Location: index.php");
    exit;
}   else{
    echo "eror: ".$sql. "<br>" . $conn->eror;
}

$conn->close();