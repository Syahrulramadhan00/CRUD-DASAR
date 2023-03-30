<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$email_student = $_POST['email_student'];
$no_hp = $_POST['no_hp'];
$asal_sma = $_POST['asal_sma'];
$hobi = $_POST['hobi'];
$matkul = $_POST['matkul'];

mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nrp','$alamat','$jenis_kelamin','$prodi','$email_student','$no_hp','$asal_sma','$hobi','$matkul')");

header("location:index.php");
?>