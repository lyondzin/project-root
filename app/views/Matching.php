<!-- Matching Notification -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found</title>
    <link href="../../public/telwin/output.css" rel="stylesheet">
    <style>
        /* Gradient Background for the Hero Section */
        .hero-bg {
            background: linear-gradient(to right, #1e3a8a, #3b82f6);
        }
    </style>
    
</head>
<body>
 <!-- navbar.html -->
<nav class="bg-blue-600 shadow-lg">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo and Text Logo Container -->
        <div class="flex items-center space-x-2">
            <!-- Logo Image -->
            <img src="../../public/image/1.jpg" class="w-16 h-16 rounded-full" alt="ELspot Logo">
            <!-- Text Logo -->
            <a href="Homepage.php" class="text-white text-4xl md:text-6xl font-extrabold tracking-wide">ELspot</a>
        </div>
        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-6 mt-4 lg:mt-0 flex-wrap">
            <a href="Login.php" class="text-white hover:underline hover:text-blue-300 transition">Login</a>
            <a href="Register.php" class="text-white hover:underline hover:text-blue-300 transition">Register</a>
            <a href="Post-Lost-Item.php" class="text-white hover:underline hover:text-blue-300 transition">Post Item</a>
            <a href="Logout.php" class="text-white hover:underline hover:text-blue-300 transition">Logout</a>
        </div>
    </div>
</nav>



<div class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
  <h2 class="text-2xl font-bold mb-4">Pemberitahuan Kecocokan</h2>
  <p class="text-gray-600">Kami akan memberi tahu Anda jika ada barang yang cocok dengan deskripsi barang hilang Anda.</p>
  <!-- Example of a notification message -->
  <div class="mt-4 p-4 bg-blue-100 border border-blue-300 rounded">
    <p class="text-blue-800">Barang yang cocok telah ditemukan: [Deskripsi Barang].</p>
  </div>
</div>
</body>