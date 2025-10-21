<?php include 'inc_header.php'; ?>

  <!-- CONTACT HERO -->
  <section class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white text-center py-20 fade-in">
    <h2 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg">Hubungi Kami</h2>
    <p class="text-indigo-100 text-lg max-w-2xl mx-auto">
      Kami senang mendengar dari Anda! Jika ada pertanyaan, saran, atau ingin bekerja sama, silakan hubungi kami melalui formulir atau kontak di bawah.
    </p>
  </section>

  <!-- CONTACT CONTENT -->
  <section class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 fade-in">
    
    <!-- FORM -->
    <div>
      <h3 class="text-2xl font-bold text-indigo-700 mb-4">Kirim Pesan</h3>
      <form action="#" method="POST" class="bg-white p-6 rounded-2xl shadow-md space-y-4">
        <div>
          <label class="block text-gray-700 mb-1 font-semibold">Nama Lengkap</label>
          <input type="text" name="name" placeholder="Masukkan nama Anda"
                 class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>
        <div>
          <label class="block text-gray-700 mb-1 font-semibold">Email</label>
          <input type="email" name="email" placeholder="contoh@email.com"
                 class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>
        <div>
          <label class="block text-gray-700 mb-1 font-semibold">Pesan</label>
          <textarea name="message" rows="5" placeholder="Tulis pesan Anda di sini..."
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
        </div>
        <button type="submit"
                class="bg-indigo-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-indigo-700 transition">
          Kirim Pesan
        </button>
      </form>
    </div>

    <!-- INFO -->
    <div class="space-y-6">
      <h3 class="text-2xl font-bold text-indigo-700 mb-4">Informasi Kontak</h3>
      <p class="text-gray-700 leading-relaxed">
        Kami siap membantu Anda setiap hari Senin – Sabtu, pukul 09.00 - 18.00 WIB.
      </p>

      <div class="bg-white p-6 rounded-2xl shadow-md space-y-4">
        <div class="flex items-center space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-9 13V5a2 2 0 012-2h6a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h6" />
          </svg>
          <span class="text-gray-700">support@supershoes.com</span>
        </div>

        <div class="flex items-center space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l3.6 7.59a1 1 0 00.9.41h7.4a1 1 0 00.9-.55l3.38-6.84A1 1 0 0021 5H6" />
          </svg>
          <span class="text-gray-700">+62 812-3456-7890</span>
        </div>

        <div class="flex items-center space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414a4 4 0 10-1.414 1.414l4.243 4.243a1 1 0 001.414-1.414z" />
          </svg>
          <span class="text-gray-700">Jl. Sudirman No. 88, Jakarta, Indonesia</span>
        </div>
      </div>

      <div class="mt-8">
        <iframe class="rounded-2xl shadow-md w-full h-64"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.855799911013!2d110.36708147401722!3d-7.801389577296799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a579c8b5e7eeb%3A0xfaf8e9d177b6f84f!2sJakarta!5e0!3m2!1sen!2sid!4v1689671337795!5m2!1sen!2sid"
                allowfullscreen="" loading="lazy"></iframe>
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