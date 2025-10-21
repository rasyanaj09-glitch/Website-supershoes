<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran Berhasil</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="max-w-lg mx-auto my-20 bg-white p-8 rounded-2xl shadow-lg text-center">
    <h2 class="text-3xl font-bold text-green-600 mb-4">Pesanan Berhasil!</h2>
    <p class="mb-3">Terima kasih, <strong><?= htmlspecialchars($_GET['nama'] ?? '') ?></strong></p>
    <p>Pesanan: <strong><?= htmlspecialchars($_GET['name'] ?? '') ?></strong></p>
    <p>Jumlah: <?= htmlspecialchars($_GET['qty'] ?? '1') ?></p>
    <p>Total: <span class="font-semibold text-indigo-600">Rp <?= number_format($_GET['total'] ?? 0, 0, ',', '.') ?></span></p>
    <p>Metode: <?= htmlspecialchars($_GET['metode'] ?? '') ?></p>
    <p class="text-gray-500 mt-3">Alamat: <?= htmlspecialchars($_GET['alamat'] ?? '') ?></p>
    <a href="homepage.php">Kembali ke Beranda</a>
  </div>
</body>
</html>
