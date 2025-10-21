<?php include 'inc_header.php'; ?>

  <!-- ABOUT SECTION -->
  <section class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center fade-in">
    <div>
      <img src="about.jpeg" alt="Tentang Supershoes" class="rounded-2xl shadow-lg w-full object-cover">
    </div>
    <div>
      <h2 class="text-4xl font-bold text-indigo-700 mb-6">Tentang Supershoes.com</h2>
      <p class="text-gray-700 mb-4 leading-relaxed">
        <span class="font-semibold text-indigo-600">Supershoes.com</span> adalah rumah bagi para penggemar sneakers sejati. 
        Kami menghadirkan berbagai pilihan sepatu dari merek ternama seperti Nike, Adidas, Puma, dan banyak lagi — 
        semuanya dipilih dengan teliti untuk memastikan kualitas dan gaya terbaik.
      </p>
      <p class="text-gray-700 mb-4 leading-relaxed">
        Kami percaya bahwa setiap langkah memiliki cerita. Karena itu, kami ingin setiap pelanggan tampil percaya diri 
        dengan sepatu yang bukan hanya keren, tapi juga nyaman dipakai sepanjang hari.
      </p>
      <p class="text-gray-700 leading-relaxed">
        Tim kami terdiri dari orang-orang yang mencintai fashion, sport, dan inovasi. 
        Kami terus berkembang untuk menghadirkan tren sneakers terbaru dengan pelayanan yang cepat, aman, dan memuaskan.
      </p>

      <a href="homepage.php" 
         class="inline-block mt-8 bg-indigo-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-700 transition">
         Kembali ke Beranda
      </a>
    </div>
  </section>

  <!-- VISI MISI -->
  <section class="bg-indigo-50 py-16 fade-in">
    <div class="max-w-5xl mx-auto text-center px-6">
      <h3 class="text-3xl font-bold text-indigo-700 mb-6">Visi & Misi Kami</h3>
      <p class="text-gray-700 mb-8 leading-relaxed">
        Kami memiliki visi untuk menjadi toko sneakers online nomor satu di Indonesia dengan misi menghadirkan produk 
        orisinal, pelayanan ramah, dan pengalaman belanja yang menyenangkan bagi semua pelanggan kami.
      </p>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-2xl shadow-md">
          <h4 class="text-xl font-semibold text-indigo-600 mb-2">Kualitas Terjamin</h4>
          <p class="text-gray-600">Setiap produk kami melalui tahap verifikasi untuk memastikan keaslian dan mutu terbaik.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-md">
          <h4 class="text-xl font-semibold text-indigo-600 mb-2">Layanan Cepat</h4>
          <p class="text-gray-600">Pengiriman cepat ke seluruh Indonesia dengan sistem pelacakan yang akurat dan mudah.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-md">
          <h4 class="text-xl font-semibold text-indigo-600 mb-2">Kepuasan Pelanggan</h4>
          <p class="text-gray-600">Kami selalu siap mendengarkan masukan untuk terus memperbaiki pelayanan kami.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-indigo-600 text-white text-center py-4 mt-16">
    <p>&copy; 2025 Supershoes.com — All Rights Reserved</p>
  </footer>

  <!-- Animasi Scroll -->
  <script>
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
  </script>

</body>
</html>