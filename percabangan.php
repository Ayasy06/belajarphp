<?php
//IF
$baju = true;

if($baju){
	echo "Variable baju bernilai true"; 
}
// IF ELSE
$nilai = 50;

if ($nilai > 70) {
  echo "Selamat, anda lulus!";
} else {
  echo "Mohon maaf, anda harus mengulang";
}

echo "<br>";
//TERNARY
$nilai = 50;

echo $nilai > 70 ? "Selamat, anda lulus!" : "Mohon maaf, anda harus mengulang";
//PENGECUALIAN MENGGUNAKAN ELSEIF
$nilai = 20;
    echo "Variable tersebut bernilai : {$nilai} <br>";

    if ($nilai >= 50){
      echo "GOOD JOB !";
    }elseif($nilai <= 50){
      echo "Jangan Menyerah !";
    }else{
      echo "Coba Lagi !";
    }
//PERCABANGAN SWITCH CASE
$url = '/about';

switch ($url) {
  case '/':
    echo 'Selamat datang di dashboard.';
    break;
  case '/about':
    echo 'Selamat datang di halaman about.';
    break;
  case '/contact':
    echo 'Selamat datang di halaman kontak.';
    break;
  default:
    echo 'Maaf halaman yang anda cari tidak ditemukan.';
}

echo '<br>';
?>