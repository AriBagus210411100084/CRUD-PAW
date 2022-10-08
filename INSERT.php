<?php

$koneksi = mysqli_connect("localhost", "root", "", "firman");
$sql = "SELECT * FROM table_prodi";
$hasil = mysqli_query($koneksi,$sql);

if(isset($_POST["submit"])){
    $id_mhs = $_POST['id_mhs'];
    $nama_prodi = $_POST['nama_prodi'];
    $nama_mhs = $_POST['nama_mhs'];
    $alamat_mhs = $_POST['alamat_mhs'];

$sql = "INSERT INTO table_mhs VALUE('$id_mhs','$nama_prodi','$nama_mhs','$alamat_mhs')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('Anda gagal menginputkan data, silahkan coba kembali :(');
      document.location.href='INSERT.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('Anda telah berhasil menginputkan data ke table_mhs');
      document.location.href='SELECT.php';   
    </script>";}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="logo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Menambahkan Data</title>
    <style>
      .input-color{
        background-color: whitesmoke;
      }
    </style>
  </head>
  <body>
    <!--<h1>Lagi Belajar Bootstrap!</h1>-->
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="SELECT.php">Beranda</a>
          </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Tambah</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="container mt-3">
        <h2>Menambahkan Data</h2>
        <p>Silahkan masukkan data dibawah ini:</p>
        <form method="post">
          <div class="form-floating mb-3 mt-3">
            <input type="number" class="form-control input-color" id="id_mhs" placeholder="Masukkan id_mhs" name="id_mhs" required>
            <label for="id_mhs">Id_Mhs</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <select class="form-select" aria-label="Default select example" name="nama_prodi">
                <option selected>->pilih prodi<-</option>
                <?php
                    while($row=mysqli_fetch_assoc($hasil))
                    {
                ?>
                    <option value="<?php echo $row['id_prodi'];?>"><?php echo $row['nama_prodi']?></option>
                    <?php } ?>
            </select><br>
            <label for="nama_prodi">Nama Prodi</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nama_mhs" placeholder="Masukkan nama_mhs" name="nama_mhs" required>
            <label for="nama_mhs">Nama</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="alamat_mhs" placeholder="Masukkan alamat_mhs" name="alamat_mhs" required>
            <label for="alamat_mhs">Alamat</label>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
        </form>
      </div>
    </div>

    <!--Bagian Bawah-->
    <footer class="bg-primary text-center text-lg-start fixed-bottom">
      <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright By
        <a class="text-white">Ari Bagus Firmansyah</a>
      </div>
    </footer>
    </body>
</html>