<?php
session_start();
include 'koneksi.php';

$message = '';
$showForm = false;

// Ambil parameter dari URL
$email = isset($_GET['email']) ? $_GET['email'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if ($email && $token) {
    $email = mysqli_real_escape_string($conn, $email);
    $token = mysqli_real_escape_string($conn, $token);

    // Cek token & expired
    $query = "SELECT * FROM akun WHERE email='$email' AND token='$token' AND token_expired >= NOW()";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $showForm = true;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $confirm = mysqli_real_escape_string($conn, $_POST['confirm']);

            if ($password !== $confirm) {
                $message = "Password dan konfirmasi tidak sama!";
            } else {
                // Update password & hapus token
                mysqli_query($conn, "UPDATE akun SET password='$password', token=NULL, token_expired=NULL WHERE email='$email'");
                $message = "Password berhasil diubah! <a href='login.php' class='text-indigo-600 font-semibold'>Login sekarang</a>.";
                $showForm = false;
            }
        }
    } else {
        $message = "Link reset password tidak valid atau sudah kadaluarsa.";
    }
} else {
    $message = "Link reset password tidak lengkap.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password | Supershoes.com</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans flex items-center justify-center min-h-screen">

<div class="bg-white rounded-2xl shadow-lg w-full max-w-md p-8">
  <h2 class="text-3xl font-bold text-center text-indigo-700 mb-2">Reset Password</h2>
  <p class="text-center text-gray-600 mb-6 text-sm">
    Masukkan password baru kamu di bawah ini.
  </p>

  <?php if($message): ?>
    <p class="text-center <?= $showForm ? 'text-red-500' : 'text-green-500' ?> mb-4"><?= $message ?></p>
  <?php endif; ?>

  <?php if($showForm): ?>
    <form method="POST" class="space-y-5">
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Password Baru</label>
        <input type="password" name="password" placeholder="Masukkan password baru"
               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
      </div>
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Konfirmasi Password</label>
        <input type="password" name="confirm" placeholder="Konfirmasi password"
               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
      </div>

      <button type="submit"
              class="w-full bg-indigo-600 text-white py-2 rounded-full font-semibold hover:bg-indigo-700 transition">
        Ubah Password
      </button>
    </form>
  <?php endif; ?>

  <div class="mt-8 text-center space-y-2">
    <a href="login.php"
       class="text-sm text-indigo-600 hover:underline block">&larr; Kembali ke Login</a>
    <a href="homepage.php"
       class="text-sm text-gray-500 hover:text-indigo-600 transition block">&larr; Kembali ke Beranda</a>
  </div>
</div>

</body>
</html>
