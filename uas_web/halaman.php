<?php

if(isset($_GET['url'])){
    switch ($_GET['url']) {
      
        case 'tulis-pengaduan':
        include 'tulis-pengaduan.php';
        break;

        case'lihat-pengaduan';
        include 'lihat-pengaduan.php';
        break;
    
       case  'detail-pengaduan';
      include 'detail-pengaduan.php';
       break;
 
      case'lihat-tanggapan'; 
      include 'lihat-tanggapan.php';
      break;
       default:
         echo "Halaman Tidak Ditemukan";
         break;    
    }
}else{
    echo"Selamat Datang DI APlikasi Pngaduan Masyarakat ,Dimana Aplikasi ini dibuat
      untuk mengadukan tindakan yang menyimpang dari ketentuan masyarakat.<br>";
      echo "Anda Login sebagai : ". $_SESSION['nama'];
}