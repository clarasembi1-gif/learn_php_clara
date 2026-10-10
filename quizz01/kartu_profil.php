<?php

$nama = "Clara Sembiring";
$kelas = "KA-STB 25";
$jurusan = "KOMPUTERISASI AKUTANSI";
$umur = 19;
$nilai = 95;

echo "===============================<br>";
echo "       KARTU PROFIL SISWA<br>";
echo "===============================<br>";

printf("Nama         : %s<br>", $nama);
printf("Kelas        : %s<br>", $kelas);
printf("Jurusan      : %s<br>", $jurusan);
printf("Umur         : %d tahun<br>", $umur);
printf("Nilai        : %d<br>", $nilai);

$status = ($nilai >= 75) ? "LULUS" : "TIDAK LULUS";

echo "Status       : " . $status . "<br>";
echo "===============================<br>";

?>