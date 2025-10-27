<?php
// index.php
$mahasiswa = [
    ['npm' => '23753', 'nama' => 'Vina Sahara', 'prodi' => 'Teknik Informatika', 'angkatan' => 2023],
    ['npm' => '23754', 'nama' => 'Cindy Naysilla', 'prodi' => 'Sistem Informasi', 'angkatan' => 2022],
    ['npm' => '23755', 'nama' => 'Cici Delia', 'prodi' => 'Teknik Komputer', 'angkatan' => 2024],
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KSI2025 - Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">KSI2025</a>
  </div>
</nav>

<main class="container my-5">
  <h2 class="mb-4">Data Mahasiswa</h2>

  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($mahasiswa as $i => $m): ?>
      <tr>
        <td><?= $i + 1 ?></td>
        <td><?= htmlspecialchars($m['npm']) ?></td>
        <td><?= htmlspecialchars($m['nama']) ?></td>
        <td><?= htmlspecialchars($m['prodi']) ?></td>
        <td><?= htmlspecialchars($m['angkatan']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>

<footer class="bg-light text-center py-3">
  <small>&copy; 2025 VINASAHARA</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
