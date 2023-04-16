<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <title>EDIT CRUD</title>
</head>
<body class="bg-secondary text-white">
<nav class="navbar bg-dark-subtle text-emphasis-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">DATA MAHASISWA</span>
  </div>
</nav>
    <a href="index.php"><button type="button" class="btn btn-dark">Kembali</button></a>
    <br/>
    <br/>
    <h1>Edit Data Mahasiswa</h1>
    <?php
    include 'koneksi.php';
    $id=$_GET['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="update.php">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
            </td>
        </tr>
        <tr>
            <td>NRP</td>
            <td>
                <input type="number" name="nrp" value="<?php echo $d['nrp']; ?>">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
            </td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>
                <input type="text" name="prodi" value="<?php echo $d['prodi']; ?>">
            </td>
        </tr>
        <tr>
            <td>Email Student</td>
            <td>
                <input type="text" name="email_student" value="<?php echo $d['email_student']; ?>">
            </td>
        </tr>
        <tr>
            <td>No Handphone</td>
            <td>
                <input type="number" name="no_hp" value="<?php echo $d['no_hp']; ?>">
            </td>
        </tr>
        <tr>
            <td>Asal SMA</td>
            <td>
                <input type="text" name="asal_sma" value="<?php echo $d['asal_sma']; ?>">
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <input type="text" name="hobi" value="<?php echo $d['hobi']; ?>">
            </td>
        </tr>
        <tr>
            <td>Matkul Favorit</td>
            <td>
                <input type="text" name="matkul" value="<?php echo $d['matkul']; ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-dark" value="SIMPAN"></td>
        </tr>
    </table>
    </form>
    <?php
    }
    ?>
</body>
</html>