<?php

include "KONEKSI.php";

$sql = "SELECT * FROM table_mhs,table_prodi Where table_mhs.id_prodi = table_prodi.id_prodi ORDER BY id_mhs"  ;
$hasil = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/719f1245a0.js" crossorigin="anonymous"></script>
    <link rel="icon" href="logo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Menampilkan Data</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Beranda</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="INSERT.php">Tambah</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--Tabel-->
    <div class="container mt-3" id="beranda">
      <h2>Tabel Data</h2>
      <p>Tabel data dibawah ini:</p>
      <table class="table table-striped text-center" style="width: 99%; background-color: white">
        <thead>
          <tr>
            <th scope="col" width="16.5%">Aksi</th>
            <th scope="col" width="16.5%">id_mhs</th>
            <th scope="col" width="16.5%">nama_prodi</th>
            <th scope="col" width="16.5%">nama_mhs</th>
            <th scope="col" width="16.5%">alamat_mhs</th>
          </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($hasil)) : ?>
          <tr>
            <th scope="row">
            <a href="editdata.php?id=<?php echo $row["id_mhs"];?>" onclick ="return confirm('yang bener?')" class="btn btn-warning btn-sm">Edit</a>
              <a href="DELETE.php?id=<?php echo $row["id_mhs"];?>" onclick ="return confirm('yang bener?')" class="btn btn-danger btn-sm">Hapus</a>
            </th>
            <td><?php echo $row["id_mhs"]; ?></td>
            <td><?php echo $row["nama_prodi"]; ?></td>
            <td><?php echo $row["nama_mhs"]; ?></td>
            <td><?php echo $row["alamat_mhs"]; ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>