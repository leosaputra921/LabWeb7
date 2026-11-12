<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Percabangan</title>
</head>
<body>
<h2>Latihan 2: Nilai Akhir Mahasiswa</h2>
<?php
// Data uji: nama, nilai tugas, nilai UTS, nilai UAS
$dataNilai = [
    ["Siti", 85, 78, 90],
    ["Budi", 90, 88, 92],
    ["Rina", 70, 65, 72],
    ["Dewi", 50, 45, 55],
];

foreach ($dataNilai as [$nama, $tugas, $uts, $uas]) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    if ($nilaiAkhir >= 85) {
        $predikat = "A";
    } elseif ($nilaiAkhir >= 75) {
        $predikat = "B";
    } elseif ($nilaiAkhir >= 60) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }

    echo "<p>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
    echo "Predikat: " . $predikat;
    echo "</p>";
}
?>
</body>
</html>
