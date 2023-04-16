<?php
include 'koneksi.php';

$id =$_POST ['id'];
$nama =$_POST ['nama'];
$nrp =$_POST ['nrp'];
$alamat =$_POST ['alamat'];
$jenis_kelamin =$_POST ['jenis_kelamin'];
$prodi =$_POST ['prodi'];
$email_student =$_POST ['email_student'];
$no_hp =$_POST ['no_hp'];
$asal_sma =$_POST ['asal_sma'];
$hobi =$_POST ['hobi'];
$matkul =$_POST ['matkul'];

mysqli_query($koneksi,"update mahasiswa set nama='$nama', nrp='$nrp', alamat='$alamat', jenis_kelamin='$jenis_kelamin', prodi='$prodi', email_student='$email_student', no_hp='$no_hp', asal_sma='$asal_sma', hobi='$hobi', matkul='$matkul' where id='$id'");

header("location:index.php");
?>