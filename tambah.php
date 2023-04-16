<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <title>Tambah CRUD</title>
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
    <h1>Tambah Data Mahasiswa</h1>
    <form method="post"action="operasi_tambah.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NRP</td>
                <td><input type="number" name="nrp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr>
                <td>Email Student</td>
                <td><input type="text" name="email_student"></td>
            </tr>
            <tr>
                <td>No Handphone</td>
                <td><input type="number" name="no_hp"></td>
            </tr>
            <tr>
                <td>Asal SMA</td>
                <td><input type="text" name="asal_sma"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td><input type="text" name="hobi"></td>
            </tr>
            <tr>
                <td>Matkul Favorit</td>
                <td><input type="text" name="matkul"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-dark" value="MASUKAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>

