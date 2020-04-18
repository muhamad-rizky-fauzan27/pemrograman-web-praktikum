<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$alat = query("SELECT * FROM tubes_193040014")

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    table {
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 2px solid black;
      text-align: center;
      margin: 5px 5px 5px 5px;
    }

    img {
      height: 200px;
      width: 200px;
      margin: 5px 5px 5px 5px;
    }
  </style>
  <title>193040014</title>
</head>

<body>
  <div class="container">
    <table cellpadding="10" cellspacing="0">
      <tr>
        <th>Nomor</th>
        <th>Gambar</th>
        <th>Nama alat musik</th>
        <th>Asal Daerah</th>
        <th>Cara main</th>
        <th>Bahan pembuatan</th>

      </tr>
      <?php $i = 1 ?>
      <?php foreach ($alat as $musik) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="assets/img/<?= $musik["Gambar"]; ?>"></td>
          <td><?= $musik["Nama_alat_musik"] ?></td>
          <td><?= $musik["Asal_daerah"] ?></td>
          <td><?= $musik["Cara_main"] ?></td>
          <td><?= $musik["bahan_pembuatan"] ?></td>

        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>