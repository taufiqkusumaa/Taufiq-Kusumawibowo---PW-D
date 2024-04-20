<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku Tamu</title>
</head>
<body>
    <h2>List Buku Tamu</h2>
    <?php
    // Membaca isi buku tamu dari file
    $file = file("guestbook.txt");
    $total_lines = count($file);
    
    // Menampilkan isi buku tamu
    for ($i = 0; $i < $total_lines; $i += 2) {
        $nama = trim($file[$i]);
        $pesan = trim($file[$i + 1]);
        echo "<b>Nama:</b> $nama<br>";
        echo "<b>Pesan:</b> $pesan<br><br>";
    }
    ?>
    <br>
    <a href="index.php">Kembali ke Form Buku Tamu</a>
</body>
</html>
