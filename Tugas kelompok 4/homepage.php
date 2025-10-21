<?php include 'inc_header.php'; ?>
  <!-- HERO -->
  <section class="relative bg-gradient-to-r from-indigo-600 to-indigo-800 text-white text-center py-24 overflow-hidden">
    <img src="herosection.jpeg"
         class="absolute inset-0 w-full h-full object-cover opacity-25" alt="Sneakers background">
    <div class="relative z-10 px-6">
      <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">Langkah Gaya Terbaikmu Dimulai di Sini</h2>
      <p class="text-lg md:text-xl mb-8 text-indigo-100">Temukan koleksi sneakers eksklusif dengan desain modern dan kualitas terbaik.</p>
      <a href="#produk"
         class="bg-white text-indigo-700 px-8 py-3 rounded-full font-semibold hover:bg-indigo-100 transition duration-300">
         SHOP NOW!
      </a>
    </div>
  </section>

  <!-- BEST SELLER -->
  <section id="produk" class="max-w-7xl mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center text-indigo-700 mb-10">Our Best Seller</h2>
    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

      <!-- CARD 1 -->
      <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:scale-105 transform transition">
        <img src="s3.jpeg" alt="Sneakers 1" class="w-full h-56 object-cover">
        <div class="p-4 text-center">
          <h3 class="text-lg font-semibold">Supreme x Nike Air Force Mid: 1</h3>
          <p class="text-indigo-600 font-bold mt-1">Rp 4.799.999</p>
          <a href="checkout.php?name=Supreme%20x%20Nike%20Air%20Force%20Mid%201&price=4799999&img=./s3.jpeg"
             class="mt-3 inline-block bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition">
             Beli Sekarang
          </a>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:scale-105 transform transition">
        <img src="jordanbiru.jpg" alt="Sneakers 2" class="w-full h-56 object-cover">
        <div class="p-4 text-center">
          <h3 class="text-lg font-semibold">JORDAN 1 Retro High OG: Blue</h3>
          <p class="text-indigo-600 font-bold mt-1">Rp 2.350.000</p>
          <a href="checkout.php?name=Jordan%20Biru%20Limited&price=2350000&img=./jordanbiru.jpg"
            class="mt-3 inline-block bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition">
            Beli Sekarang
          </a>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:scale-105 transform transition">
        <img src="s2.jpeg" alt="Sneakers 3" class="w-full h-56 object-cover">
        <div class="p-4 text-center">
          <h3 class="text-lg font-semibold">Nike Air Low : Black</h3>
          <p class="text-indigo-600 font-bold mt-1">Rp 3.050.000</p>
          <a href="checkout.php?name=Nike%20Air%20Low%20Black&price=3050000&img=./s2.jpeg"
             class="mt-3 inline-block bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition">
             Beli Sekarang
          </a>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:scale-105 transform transition">
        <img src="s1.jpeg" alt="Sneakers 4" class="w-full h-56 object-cover">
        <div class="p-4 text-center">
          <h3 class="text-lg font-semibold">Puma Speedcat Pink Women</h3>
          <p class="text-indigo-600 font-bold mt-1">Rp 3.180.000</p>
          <a href="checkout.php?name=Puma%20Speedcat%20Pink%20Women&price=3180000&img=./s1.jpeg"
             class="mt-3 inline-block bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition">
             Beli Sekarang
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-indigo-600 text-white text-center py-4 mt-16">
    <p>&copy; 2025 Supershoes.com — All Rights Reserved</p>
  </footer>

</body>
</html>
