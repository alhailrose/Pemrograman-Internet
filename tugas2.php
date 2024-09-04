<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operasi Matematika</title>
</head>
<body>
    <?php
        // Penjumlahan dan Pengurangan
        $penjumlahan1 = 6 + 1;
        $pengurangan1 = 6 - 1;

        // Perkalian
        $perkalian1 = 6 * 2;
        $perkalian2 = 6 * 2.5;

        // Pembagian
        $pembagian1 = 6 / 4;
        $pembagian2 = 6 / 4.0;
        $modulus1 = 6 % 5;
        $modulus2 = 6 % 4;
        $modulus3 = 6 % 3;

        // Menampilkan hasil
        echo "<h3>Penjumlahan dan Pengurangan :</h3>";
        echo "6 + 1 = $penjumlahan1<br>";
        echo "6 - 1 = $pengurangan1<br><br>";

        echo "<h3>Perkalian :</h3>";
        echo "6 * 2 = $perkalian1<br>";
        echo "6 * 2.5 = $perkalian2<br><br>";

        echo "<h3>Pembagian :</h3>";
        echo "6 / 4 = $pembagian1<br>";
        echo "6 / 4.0 = $pembagian2<br>";
        echo "6 % 5 = $modulus1<br>";
        echo "6 % 4 = $modulus2<br>";
        echo "6 % 3 = $modulus3<br>";
    ?>
</body>
</html>
