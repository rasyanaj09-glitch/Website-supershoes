<?php
session_start();
include 'koneksi.php';

$message = '';
$resetLink = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Cek apakah email terdaftar
    $query = "SELECT * FROM akun WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $token = bin2hex(random_bytes(16)); // buat token unik
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour")); // token berlaku 1 jam

        // Simpan token ke database (tambahkan kolom token & token_expired di tabel akun jika ingin simpan)
        mysqli_query($conn, "UPDATE akun SET token='$token', token_expired='$expires' WHERE email='$email'");

        // Link reset password (langsung ditampilkan di browser)
        $resetLink = "http://localhost/tugas kelompok/resetpassword.php?email=" . urlencode($email) . "&token=$token";
        $message = "Tautan reset password (untuk belajar, langsung ditampilkan di bawah):";
    } else {
        $message = "Email tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password | Supershoes.com</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans flex items-center justify-center min-h-screen">

<div class="bg-white rounded-2xl shadow-lg w-full max-w-md p-8">
  <h2 class="text-3xl font-bold text-center text-indigo-700 mb-6">Lupa Password</h2>

  <?php if($message): ?>
    <p class="text-center mb-4"><?= $message ?></p>
    <?php if($resetLink): ?>
        <p class="text-indigo-600 text-center break-words"><?= $resetLink ?></p>
    <?php endif; ?>
  <?php endif; ?>

  <form method="POST" class="space-y-5">
    <div>
      <label class="block text-gray-700 font-semibold mb-1">Masukkan Email</label>
      <input type="email" name="email" placeholder="contoh@email.com"
             class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>

    <button type="submit"
            class="w-full bg-indigo-600 text-white py-2 rounded-full font-semibold hover:bg-indigo-700 transition">
      Dapatkan Link Reset
    </button>
  </form>

  <div class="mt-6 text-center">
    <a href="login.php" class="text-indigo-600 hover:underline">&larr; Kembali ke Login</a>
  </div>
</div>

</body>
</html>
