<?php
session_start();
$tgl_pengaduan  =$_POST['tgl_pengaduan'];
$nik            =$_SESSION['nik'];
$isi_laporan    =$_POST['isi_laporan'];
$lokasi_Foto    =$_FILES['Foto']['tmp_name'];
$nama_Foto      =$_FILES['Foto']['name'];
$status         =0;

if(move_uploaded_file($lokasi_Foto, 'Foto/'.$nama_Foto)){
$sql ="INSERT INTO pengaduan(tgl_pengaduan,nik,isi_laporan,Foto,status)
VALUES('$tgl_pengaduan ',' $nik ','$isi_laporan ','$nama_Foto ','$status')";

include 'koneksi.php';
if(mysqli_query($koneksi, $sql)){
    echo"<script>alert('pengaduan sudah Tersimpan');
    window.location.assign('masyarakat.php'); </script>";
}else{
    echo"<script>alert('pengaduan Gagal Tersimpan');
    window.location.assign('masyarakat.php?url=tulis-pengaduan'); </script>";
   }
}