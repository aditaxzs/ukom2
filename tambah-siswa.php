<?php

include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$ayah = $_POST['ayah'];
$ibu = $_POST['ibu'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$alamat = $_POST['alamat'];


$query = "INSERT INTO siswa (NIS, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, ayah, ibu, pekerjaan_ayah, pekerjaan_ibu, alamat) 
          VALUES ('$nis', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$ayah', '$ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$alamat')";


if($simpan){
    echo "<script>
                alert('Simpan data berhasil!');
                document.location='adminsiswa.php';
                </script>";
}  else{
    echo "<script>
                alert('Simpan data gagal!');
                document.location='adminsiswa.php';
            </script>";
}                                          
?>
