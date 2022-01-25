<?php
//Tipe data string (teks)
$nama = "Ayasy Insan Aulia";
//Tipe data integer
$umur = 15;
//Tipe data float
$berat = 43;
//Tipe data boolean
$menikah = false;
//tipe data string
$huruf = 'A';
//tipe data numerik
$nilai = 15; // angka positif
$poin = -15; // angka negatif
$panjang = 233.12;
$kapasistas = 13232.12;
$jarak = 1.2E-5;
//tipe data boolean
$isActive = false;
$menikah = true;
//tipe data string menggunakan metode single quoted
$string1 = 'Ini adalah contoh string sederhana';
$string2 = 'Variabel juga tidak otomatis ditampilkan : $string1';

echo $string1; echo "<br>"; //br berfungsi untuk membuat baris baru
echo $string2; 
echo "<br>";echo "<br>";
	
//tipe data string menggunakan metode double quoted
$stringa = "Ini adalah contoh string sederhana 2";
$stringb = "Variabel akan otomatis ditampilkan : $stringa";
 
echo $stringa; echo "<br>"; //br berfungsi untuk membuat baris baru
echo $stringb; 
echo "<br>";echo "<br>";

$nama = "Ayas";
$umur = 15;

echo "Nama saya adalah ", $nama, " dan saya berumur ", $umur; echo "<br>";
echo "Nama saya adalah ".$nama." dan saya berumur ".$umur; echo "<br>";
echo "<br>";echo "<br>";

$a = "1";
$b = 2;
echo $a + $b;
?>