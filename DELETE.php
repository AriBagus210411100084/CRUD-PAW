<?php
include "KONEKSI.php";
$id_mhs = $_GET['id'];

$sql ="DELETE FROM table_mhs WHERE id_mhs=$id_mhs";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('Anda gagal menghapus data, silahkan coba kembali :(');
      document.location.href='SELECT.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('Anda telah berhasil menghapus data dari table_mhs');
      document.location.href='SELECT.php';   
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="logo.png" />
  <title>Menghapus Data</title>
</head>
<body>
  
</body>
</html>