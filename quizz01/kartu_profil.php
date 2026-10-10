<?php

$nama = "Clara Sembiring ";
$prodi = "KA-STB 25";
$jurusan = "KOMPUTERISASI AKUTANSI";
$umur = 19;
$nilai = 95;

$status = ($nilai >= 75) ? "LULUS" : "TIDAK LULUS";

echo "<h2>KARTU PROFIL SISWA</h2>";
echo "===============================<br>";

printf("Nama         : %s<br>", $nama);
printf("Prodi        : %s<br>", $prodi);
printf("Jurusan      : %s<br>", $jurusan);
printf("Umur         : %d tahun<br>", $umur);
printf("Nilai        : %d<br>", $nilai);

echo "Status       : " . $status . "<br>";
echo "===============================<br>";

?>
