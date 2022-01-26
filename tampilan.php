<?php
$nama = $_POST ['nama'];
$sekolah = $_POST ['sekolah'];
$telepon = $_POST ['telepon'];
$jeniskelamin = $_POST ['jeniskelamin'];
echo "<p>Selamat <b>$nama</b>. Pendaftaran Berhasil!</p>";
echo "<p>Biodata Anda</p>";
echo "<hr/>";
echo "Nama : " . $nama;
echo "<br/>";
echo "Jenis Kelamin : " . $jeniskelamin;
echo "<br/>";
echo "Asal SMP : " . $sekolah;
echo "<br/>";
echo "No. Telp: " . $telepon;
echo "<br/>";
?>
