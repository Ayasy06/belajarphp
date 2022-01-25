<?php
//PERULANGAN FOR
for ($i = 0; $i < 100; $i++) {
    echo "Wajib Ngulik <br>";
}
//MENAMPILKAN ARRAY
$list = ['RPL', 'Wajib', 'Ngulik'];

for ($i = 0; $i < count($list); $i++) {
    echo "{$list[$i]} <br>";
}
//PERINTAH BREAK DAN CONTINUE
# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 40
    }
}
//PERULANGAN WHILE
$i = 0;

while ($i < 20) {
    echo "{$i} <br>";

    $i++;
}
//PERULANGAN TANPA BATAS DENGAN WHILE
while (true) {
    echo "RPL Wajib Ngulik !! <br>";
}
//PERULANGAN DO WHILE
while (false) {
    echo "Perulangan while! <br>";
}

do {
    echo "Perulangan do while! <br>";
} while (false);
//PERULANGAN FOREACH
//SINTAKS SINGKAT
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $l) {
    echo "Nama : {$l} <br>";
}
//SINTAKS LENGKAP
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $key => $l) {
    echo "[{$key}] Nama : {$l} <br>";
}