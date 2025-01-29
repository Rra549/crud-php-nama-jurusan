<?php
include 'koneksi.php';
$id = $_GET ['id'];

$sql = "DELETE FORM mahasiswa WHERE id=$id";

if ($conn->query ($sql)=== True){
    header ("location: index.php");
    exit;
} else{
    echo "error: " . $conn->error;
}

$conn->close();