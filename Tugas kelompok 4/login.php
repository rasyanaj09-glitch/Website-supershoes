<?php
session_start();
include 'koneksi.php'; // pastikan koneksi database benar

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM akun WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['akun_id'] = $user['ID'];
        $_SESSION['akun_nama'] = $user['nama'];
        header("Location: homepage.php");
        exit;
    } else {
        $message = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Supershoes.com</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans flex items-center justify-center min-h-screen">

<div class="bg-white rounded-2xl shadow-lg w-full max-w-md p-8">
  <h2 class="text-3xl font-bold text-center text-indigo-700 mb-6">Selamat Datang Kembali</h2>

  <?php if($message): ?>
    <p class="text-red-500 text-center mb-4"><?= $message ?></p>
  <?php endif; ?>

  <form method="POST" class="space-y-5">
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
    <div class="flex justify-between items-center text-sm">
      <label class="flex items-center space-x-2">
        <input type="checkbox" class="text-indigo-600 focus:ring-indigo-500">
        <span>Ingat saya</span>
      </label>
      <a href="forgotpw.php" class="text-indigo-600 hover:underline">Lupa password?</a>
    </div>
    <button type="submit"
            class="w-full bg-indigo-600 text-white py-2 rounded-full font-semibold hover:bg-indigo-700 transition">
      Login
    </button>
  </form>

  <p class="text-center text-sm text-gray-600 mt-6">
    Belum punya akun?
    <a href="signup.php" class="text-indigo-600 hover:underline font-semibold">Daftar Sekarang</a>
  </p>

  <div class="mt-8 text-center">
    <a href="homepage.php"
       class="text-sm text-gray-500 hover:text-indigo-600 transition">&larr; Kembali ke Beranda</a>
  </div>
</div>

</body>
</html>
