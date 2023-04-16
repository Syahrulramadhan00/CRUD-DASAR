<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="npm i bootstrap-icons">
    <title>PHP CRUD</title>
</head>
<body class="bg-secondary text-white">
<nav class="navbar bg-dark-subtle text-emphasis-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">DATA MAHASISWA</span>
  </div>
</nav>
<a href="tambah.php"><button type="button" class="btn btn-dark">TAMBAH MAHASISWA</button></a>
    <br/>
    <br/>   
    <table border="1" class="table table-strip  ed table-secondary">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Email Student</th>
            <th>No Handphone</th>
            <th>Asal SMA</th>
            <th>Hobi</th>
            <th>Matkul Favorit</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM `mahasiswa` WHERE 1");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nrp']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td><?php echo $d['email_student']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['asal_sma']; ?></td>
                <td><?php echo $d['hobi']; ?></td>
                <td><?php echo $d['matkul']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-secondary">EDIT</button></a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-secondary">HAPUS</button></a>
                </td>
        </tr>
        <?php
        }
        ?>
    </table>     
</body>
</html>