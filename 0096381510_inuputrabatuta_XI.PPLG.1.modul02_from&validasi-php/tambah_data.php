<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h2>Formulir Tambah Data Siswa</h2>
    <form action="proses_tambah_php" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="alamat">Alamat:</label>
        <input type="alamat" name="alamat" required><br><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>