<?php
$koneksi = mysqli_connect("localhost","root","","firman");

$id_mhs=$_POST['id_mhs'];
$nama_prodi=$_POST['nama_prodi'];
$nama_mhs=$_POST['nama_mhs'];
$alamat_mhs=$_POST['alamat_mhs'];

$sql="UPDATE table_mhs SET nama_mhs='$nama_mhs', id_prodi='$nama_prodi', alamat_mhs='$alamat_mhs' WHERE id_mhs=$id_mhs";
$hasil=mysqli_query($koneksi,$sql);

if ($hasil){
    header("location:SELECT.php");
}

?>