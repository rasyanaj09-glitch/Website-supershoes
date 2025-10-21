<?php
session_start();
include 'koneksi.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Cek apakah email sudah terdaftar
    $check = mysqli_query($conn, "SELECT * FROM akun WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $message = "Email sudah terdaftar!";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO akun (nama, email, password) VALUES ('$nama', '$email', '$password')");
        if ($insert) {
            // Login otomatis setelah signup
            $_SESSION['akun_id'] = mysqli_insert_id($conn);
            $_SESSION['akun_nama'] = $nama;
            header("Location: homepage.php");
            exit;
        } else {
            $message = "Terjadi kesalahan, coba lagi!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup | Supershoes.com</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans flex items-center justify-center min-h-screen">

<div class="bg-white rounded-2xl shadow-lg w-full max-w-md p-8">
  <h2 class="text-3xl font-bold text-center text-indigo-700 mb-6">Daftar Akun Baru</h2>

  <?php if($message): ?>
    <p class="text-red-500 text-center mb-4"><?= $message ?></p>
  <?php endif; ?>

  <form method="POST" class="space-y-5">
    <div>
      <label class="block text-gray-700 font-semibold mb-1">Nama Lengkap</label>
      <input type="text" name="nama" placeholder="Nama Anda"
             class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>
    <div>
      <label class="block text-gray-700 font-semibold mb-1">Email</label>
      <input type="email" name="email" placeholder="contoh@email.com"
             class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>
    <div>
      <label class="block text-gray-700 font-semibold mb-1">Password</label>
      <input type="password" name="password" placeholder="Masukkan password"
             class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>

    <button type="submit"
            class="w-full bg-indigo-600 text-white py-2 rounded-full font-semibold hover:bg-indigo-700 transition">
      Daftar Sekarang
    </button>
  </form>

  <p class="text-center text-sm text-gray-600 mt-6">
    Sudah punya akun?
    <a href="login.php" class="text-indigo-600 hover:underline font-semibold">Login Sekarang</a>
  </p>

  <div class="mt-8 text-center">
    <a href="homepage.php"
       class="text-sm text-gray-500 hover:text-indigo-600 transition">&larr; Kembali ke Beranda</a>
  </div>
</div>

</body>
</html>
