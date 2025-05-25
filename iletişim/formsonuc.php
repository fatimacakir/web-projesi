<?php

$ad = $_POST['ad'] ?? '';
$email = $_POST['email'] ?? '';
$telefon = $_POST['telefon'] ?? '';
$mesaj = $_POST['mesaj'] ?? '';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonuçları</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>




<div class="container mt-5">
  <h1 class="text-center text-success mb-4">Form Bilgileri</h1>

  <div class="card shadow">
    <div class="card-body">
      <p><strong>Ad Soyad:</strong> <?= $ad ?></p>
      <p><strong>E-posta:</strong> <?= $email ?></p>
      <p><strong>Telefon:</strong> <?= $telefon ?></p>
      <p><strong>Mesaj:</strong><br> <?= $mesaj ?></p>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="iletisim.html" class="btn btn-primary">Geri Dön</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
