<?php
function tampilkanAngkaGanjil($angkaPertama, $angkaTerakhir)
{
    // Periksa apakah parameter pertama lebih besar dari parameter terakhir
    if ($angkaPertama > $angkaTerakhir) {
        echo "Angka pertama harus lebih kecil atau sama dengan angka terakhir.";
        return;
    }

    // Iterasi dari angka pertama hingga angka terakhir
    for ($i = $angkaPertama; $i <= $angkaTerakhir; $i++) {
        // Periksa apakah angka ganjil
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}

// Contoh penggunaan fungsi
tampilkanAngkaGanjil(1, 20);
echo "<br>";
function tampilkanAngkaGenap($angkaPertama, $angkaTerakhir)
{
    // Periksa apakah parameter pertama lebih besar dari parameter terakhir
    if ($angkaPertama > $angkaTerakhir) {
        echo "Angka pertama harus lebih kecil atau sama dengan angka terakhir.";
        return;
    }

    // Iterasi dari angka pertama hingga angka terakhir
    for ($i = $angkaPertama; $i <= $angkaTerakhir; $i++) {
        // Periksa apakah angka genap
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Contoh penggunaan fungsi
tampilkanAngkaGenap(1, 20);

echo "<br>  <br>";

$nilai1 = 3;
$nilai2 = 6;

echo "$nilai1 + $nilai2 = " . $nilai1 + $nilai2;
echo "<br>";

echo "$nilai1 - $nilai2 = " . $nilai1 - $nilai2;
echo "<br>";

echo "$nilai1 x $nilai2 = " . $nilai1 * $nilai2;
echo "<br>";

echo "$nilai1 / $nilai2 = " . $nilai1 / $nilai2;
echo "<br>";
