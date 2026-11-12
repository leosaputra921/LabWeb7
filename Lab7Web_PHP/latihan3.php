<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 - Perulangan dan Array</title>
</head>
<body>
<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni"];

// Menambahkan tiga nama mahasiswa baru
$mahasiswa[] = "Eka";
$mahasiswa[] = "Fajar";
$mahasiswa[] = "Gita";

echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}
echo "</ol>";
echo "<p>Jumlah mahasiswa: " . count($mahasiswa) . "</p>";
?>
</body>
</html>
