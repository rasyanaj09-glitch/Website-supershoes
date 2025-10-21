<?php
include 'koneksi.php';
// Ambil data produk dari URL
$name  = $_GET['name'] ?? '';
$price = $_GET['price'] ?? 0;
$img   = $_GET['img'] ?? '';

// Saat form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $qty     = $_POST['quantity'];
    $metode  = $_POST['metode'];
    $total   = $price * $qty;

    // Simpan data order ke database (tanpa kolom status)
    $stmt = $conn->prepare("INSERT INTO `order` (akun_id, tanggal_order, total_harga) VALUES (?, NOW(), ?)");
    $akun_id = 1; // contoh: akun login id 1 (bisa pakai $_SESSION nantinya)
    $stmt->bind_param("id", $akun_id, $total);
    $stmt->execute();
    $stmt->close();

    // Redirect ke halaman sukses
    header("Location: success.php?name=" . urlencode($name) .
        "&qty=" . urlencode($qty) .
        "&total=" . urlencode($total) .
        "&nama=" . urlencode($nama) .
        "&metode=" . urlencode($metode) .
        "&alamat=" . urlencode($alamat));
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout - Supershoes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<div class="max-w-2xl mx-auto my-10 bg-white p-8 rounded-2xl shadow-lg">
  <h2 class="text-3xl font-bold text-indigo-700 mb-6 text-center">Checkout</h2>

  <?php if ($name && $price && $img): ?>
  <div class="text-center mb-6">
    <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($name) ?>" class="w-48 h-48 object-cover mx-auto rounded-lg shadow-md mb-4">
    <h3 class="text-xl font-semibold"><?= htmlspecialchars($name) ?></h3>
    <p class="text-indigo-600 font-bold mt-1">Rp <?= number_format($price, 0, ',', '.') ?></p>
  </div>
  <?php endif; ?>

  <form method="POST" class="space-y-4">
    <div>
      <label class="block text-gray-600">Nama Penerima</label>
      <input name="nama" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
    </div>
    <div>
      <label class="block text-gray-600">Alamat Lengkap</label>
      <textarea name="alamat" class="w-full border border-gray-300 rounded-lg px-3 py-2" rows="3" required></textarea>
    </div>
    <div>
      <label class="block text-gray-600 mb-1">Jumlah Barang</label>
      <input id="quantity" name="quantity" type="number" min="1" value="1" 
             class="w-24 border border-gray-300 rounded-lg px-3 py-2 text-center"
             oninput="updateTotal()">
    </div>
    <div id="total" class="text-lg font-semibold text-indigo-700">
      Total: Rp <?= number_format($price, 0, ',', '.') ?>
    </div>
    <div>
      <label class="block text-gray-600">Metode Pembayaran</label>
      <select name="metode" class="w-full border border-gray-300 rounded-lg px-3 py-2">
        <option>Transfer Bank</option>
        <option>COD (Bayar di Tempat)</option>
        <option>e-Wallet (GoPay, OVO, DANA)</option>
      </select>
    </div>
    <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
      Konfirmasi Pembayaran
    </button>
  </form>
</div>

<script>
function updateTotal() {
  const qty = parseInt(document.getElementById('quantity').value) || 1;
  const price = <?= $price ?>;
  const total = price * qty;
  document.getElementById('total').innerText = `Total: Rp ${total.toLocaleString('id-ID')}`;
}
</script>

</body>
</html>
