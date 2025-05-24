<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  
  $expected_email = 'b241210089@sakarya.edu.tr';
  $expected_password = 'b241210089';

  if ($email === $expected_email && $password === $expected_password) {
    
    header('Location: hakkimda.html');
    exit();
  } else {
    
    echo "<script>alert('Kullanıcı adı veya şifre yanlış.'); window.location.href = 'login.html';</script>";
    exit();
  }
} else {
  
  header('Location: login.html');
  exit();
}
