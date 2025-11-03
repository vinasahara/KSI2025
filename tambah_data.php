<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $sql = "INSERT INTO mahasiswa (nama, npm, jurusan, prodi, no_hp, email)
            VALUES ('$nama', '$npm', '$jurusan', '$prodi', '$no_hp', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location='index.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">KSI2025</a>
  </div>
</nav>

<div class="container mt-4">
    <h3>Tambah Data Mahasiswa</h3>
    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">NPM</label>
            <input type="text" name="npm" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" name="prodi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<footer class="text-center py-3 bg-light mt-4">
    <small>© 2025 VINASAHARA</small>
</footer>

</body>
</html>
