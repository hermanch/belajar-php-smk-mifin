<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Mahasiswa</title>
</head>
<body>
<h2>Daftar Absensi Mahasiswa</h2>
  <ol>
    <?php
    for ($i= 1; $i <= 1000; $i++) {
      echo "<li>Nama Mahasiswa ke-$i</li>";
    }
    ?>
  </ol>
</body>
</html>