<?php

/*
Cara menampilkan teks pada PHP

PHP memiliki tiga fungsi untuk menampilkan teks:
1. echo
2. print
3. printf
*/

// Fungsi echo
echo "<h1>Mari Belajar PHP di Politeknik Bisnis Indonesia</h1>";
echo "Hello Dunia!!...<br>";
echo "Ini adalah contoh tulisan<br>";
echo "Ini ", "contoh ", "teks ", "yang ", "terpisah.";

// Fungsi print
print "<h2>Ini adalah contoh mencetak teks</h2>";
print "Contoh mencetak teks 1<br>";
print "Contoh mencetak teks 2<br>";

// Fungsi printf
$var1 = 123456789;
$var2 = -123456789;
$var3 = 50;

printf("Nilai var1 sebagai string: %s<br>", $var1);
printf("Nilai var1 sebagai desimal: %d<br>", $var1);
printf("Nilai var2 sebagai desimal: %d<br>", $var2);
printf("Nilai var1 sebagai pecahan: %f<br>", $var1);
printf("Nilai var1 sebagai biner: %b<br>", $var1);
printf("Nilai ASCII 50 sebagai karakter: %c<br>", $var3);

?>