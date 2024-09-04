<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Variabel</title>
</head>
<body>
    <h2>Masukkan Nilai Variabel</h2>
    <form method="post">
        <label for="a">a:</label>
        <input type="number" id="a" name="a" required><br><br>
        <label for="b">b:</label>
        <input type="number" id="b" name="b" required><br><br>
        <label for="c">c:</label>
        <input type="number" id="c" name="c" required><br><br>
        <label for="d">d:</label>
        <input type="number" id="d" name="d" required><br><br>
        <label for="e">e:</label>
        <input type="number" id="e" name="e" required><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form input
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $e = $_POST['e'];

        // Melakukan perhitungan
        if ($c != 0 && $d != 0) { // Memastikan tidak ada pembagian dengan nol
            $result = (($a + $b) / ($c * $d)) - $e;

            // Menampilkan hasil perhitungan
            echo "<h2>Hasil Perhitungan:</h2>";
            echo "<p>((a + b) / (c * d)) - e = $result</p>";
        } else {
            echo "<p>c dan d tidak boleh 0 karena menyebabkan pembagian dengan nol!</p>";
        }
    }
    ?>
</body>
</html>
