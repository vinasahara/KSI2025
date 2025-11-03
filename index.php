<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSI2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">KSI2025</a>
  </div>
</nav>

<!-- Content -->
<div class="container mt-4">
    <h3>Data Mahasiswa</h3>
    <table class="table table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Prodi</th>
                <th>No HP</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['npm']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['jurusan']}</td>
                        <td>{$row['prodi']}</td>
                        <td>{$row['no_hp']}</td>
                        <td>{$row['email']}</td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="text-center py-3 bg-light mt-4">
    <small>© 2025 VINASAHARA</small>
</footer>

</body>
</html>
