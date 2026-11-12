<?php
$data = null;
$error = [];
$nama = $nim = $prodi = $email = $semesterInput = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) !== 10) {
        $error[] = "NIM harus berupa 10 digit angka.";
    }
    if ($prodi === "") $error[] = "Program studi wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit($semesterInput)
        || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}

function e($teks) {
    return htmlspecialchars($teks, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Formulir Data Mahasiswa</h2>

<?php if ($error): ?>
    <div class="error">
        <strong>Terdapat kesalahan:</strong>
        <ul>
            <?php foreach ($error as $pesan): ?>
                <li><?= e($pesan) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="">
    <p><label>Nama<br>
        <input type="text" name="nama" value="<?= e($nama) ?>">
    </label></p>
    <p><label>NIM<br>
        <input type="text" name="nim" value="<?= e($nim) ?>">
    </label></p>
    <p><label>Program Studi<br>
        <input type="text" name="prodi" value="<?= e($prodi) ?>">
    </label></p>
    <p><label>Semester (1-14)<br>
        <input type="text" name="semester"
               value="<?= e($semesterInput) ?>">
    </label></p>
    <p><label>Email<br>
        <input type="text" name="email" value="<?= e($email) ?>">
    </label></p>
    <button type="submit">Kirim</button>
</form>

<?php if ($data): ?>
    <div class="ok">
        <h3>Ringkasan Data Mahasiswa</h3>
        <table>
            <tr><td>Nama</td><td>: <?= e($data["nama"]) ?></td></tr>
            <tr><td>NIM</td><td>: <?= e($data["nim"]) ?></td></tr>
            <tr><td>Program Studi</td><td>: <?= e($data["prodi"]) ?></td></tr>
            <tr><td>Semester</td><td>: <?= $data["semester"] ?></td></tr>
            <tr><td>Email</td><td>: <?= e($data["email"]) ?></td></tr>
        </table>
    </div>
<?php endif; ?>
</body>
</html>
