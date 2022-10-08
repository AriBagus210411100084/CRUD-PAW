<?php

    $koneksi=mysqli_connect("localhost","root","","firman");
    $sql="SELECT * FROM table_prodi order by nama_prodi";
    $hasil=mysqli_query($koneksi,$sql);

    $id=$_GET['id'];
    $hasil2=mysqli_query($koneksi,"SELECT * FROM table_mhs WHERE id_mhs=$id");
    $data = mysqli_fetch_array($hasil2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="SELECT.php">Halaman Utama</a>
        </li>
    </div>
    </nav>
    <div class="container mt-3">
        <h2>Edit Data Mahasiswa</h2>
        <form method="POST" name="data" action="actionedit.php">
        <div class="mb-3 mt-3">
            <input type="hidden" class="form-control" id="id_mhs" placeholder="Masukkan ID Mahasiswa" name="id_mhs" value="<?php echo $data['id_mhs']?>" >
        </div>
        <div class="mb-3 mt-3">
            <label for="nama_mhs" class="form-label">Nama Mahasiswa :</label>
            <input type="text" class="form-control" id="nama_mhs" placeholder="Masukkan Nama Mahasiswa" name="nama_mhs" value="<?php echo $data['nama_mhs']?>" >
        </div>
        <div class="mb-3 mt-3">
            <label for="nama_mhs" class="form-label">Nama Prodi :</label>
            <select class="form-control input-color" id="nama_prodi" name="nama_prodi" value="<?php $data['nama_prodi']?>" >
            <?php
                while($baris=mysqli_fetch_assoc($hasil))
                {
            ?>
            <option value="<?php echo $baris['id_prodi'];?>"><?php echo $baris['nama_prodi'];?></option>
            <?php }?>
            </select>
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat :</label>
            <input type="text" class="form-control" id="alamat_mhs" placeholder="Masukkan Alamat" name="alamat_mhs" value="<?php echo $data['alamat_mhs']?>" >
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
</body>
</html>