# Lab7Web_PHP - Praktikum 7: Pemrograman Server-Side dengan PHP

## Tujuan
1. Memahami perbedaan pemrosesan client-side dan server-side.
2. Menjalankan file PHP melalui server lokal (XAMPP).
3. Menggunakan variabel, operator, percabangan, perulangan, dan function.
4. Memproses form dengan metode GET dan POST.
5. Melakukan validasi dan sanitasi input dasar di sisi server.
6. Membangun aplikasi formulir data mahasiswa sederhana.

## Perangkat
Laptop/PC, web browser (Google Chrome), Visual Studio Code, PHP 8.x, XAMPP (Apache).

## Cara Menjalankan
1. Jalankan modul **Apache** pada XAMPP Control Panel.
2. Salin folder `Lab7Web_PHP` ke `C:\xampp\htdocs\`.
3. Buka browser dan akses `http://localhost/Lab7Web_PHP/`.
   Jangan membuka file PHP dengan klik ganda.

## Struktur File
| File | Keterangan |
|------|------------|
| `index.php` | Latihan 1 - Menjalankan PHP |
| `latihan2.php` | Latihan 2 - Variabel, operator, percabangan |
| `latihan3.php` | Latihan 3 - Perulangan dan array |
| `latihan4.php` | Latihan 4 - Function |
| `latihan5_cari.php` | Latihan 5 - Form GET |
| `latihan6_post.php` | Latihan 6 - Form POST |
| `latihan7_barang.php` | Latihan 7 - Pengolahan data sederhana |
| `mini_project.php` | Mini Project - Formulir Data Mahasiswa |
| `eksperimen.php` | Eksperimen mandiri |
| `style.css` | Gaya tampilan mini project dan eksperimen |
| `Laporan_Praktikum_7_PHP.docx` | Laporan praktikum |

## Ringkasan Hasil
Seluruh latihan berjalan sesuai harapan. Data dari form diproses di server,
divalidasi dengan `trim()`, `is_numeric()`, `ctype_digit()`, dan
`filter_var()`, lalu ditampilkan kembali dengan `htmlspecialchars()`.
Detail pengujian ada pada file laporan.
