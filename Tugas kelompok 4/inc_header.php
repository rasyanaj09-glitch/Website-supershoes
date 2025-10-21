<?php

include 'koneksi.php';
session_start();
$logged_in = isset($_SESSION['akun_id']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Supershoes.com</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .search-input {
      transition: width 0.3s ease;
      width: 120px;
    }
    .search-input:focus,
    .search-input:hover {
      width: 220px;
    }
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
    }
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

  <!-- HEADER -->
  <header class="bg-indigo-600 text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold tracking-wide">
        <span class="text-white">Super</span><span class="text-indigo-200">Shoes</span>.com
      </h1>

      <nav class="flex items-center space-x-6">
        <a href="homepage.php" class="hover:text-indigo-200 transition">Home</a>
        <a href="about.php" class="hover:text-indigo-200 transition">About</a>
        <a href="contacts.php" class="hover:text-indigo-200 transition">Contacts</a>

        <div class="relative">
          <input type="text" placeholder="Find yours..." 
                 class="search-input px-3 py-1 rounded-full text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300" />
          <svg xmlns="http://www.w3.org/2000/svg" 
               class="w-5 h-5 absolute top-1/2 right-3 -translate-y-1/2 text-indigo-500" 
               fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
          </svg>
        </div>

        <?php if ($logged_in): ?>
          <a href="logout.php" class="hover:text-indigo-200 font-medium">Logout</a>
        <?php else: ?>
          <a href="login.php" class="hover:text-indigo-200 font-medium">Login</a>
          <a href="signup.php"
             class="bg-white text-indigo-700 px-4 py-1 rounded-full font-semibold hover:bg-indigo-100 transition">
             Sign Up
          </a>
        <?php endif; ?>
      </nav>
    </div>
  </header>
