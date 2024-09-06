<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Items | Lost and Found</title>
  <link href="../../public/telwin/output.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    .page-wrapper {
      min-height: 100vh;
      display: flex;
    }
    .content {
      flex: 1;
    }
    @media (min-width: 768px) {
      .mobile-menu-button {
        display: none;
      }
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="page-wrapper flex flex-col">

    <!-- Navigation Bar -->
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
        <!-- Mobile Menu Button -->
        <button class="mobile-menu-button md:hidden text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </nav>

    <!-- Search Form -->
    <main class="content py-10">
      <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg border-4 border-blue-500 p-6">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Search for Items</h2>
        <form id="search-form" class="space-y-6">
          <div class="mb-4">
            <label for="search-query" class="block text-gray-700 text-sm font-medium">Search Query:</label>
            <input type="text" id="search-query" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter keywords">
          </div>
          <div class="mb-4">
            <label for="category" class="block text-gray-700 text-sm font-medium">Category:</label>
            <select id="category" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
              <option>All Categories</option>
              <option>Electronics</option>
              <option>Clothing</option>
              <option>Furniture</option>
              <option>Other</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="location" class="block text-gray-700 text-sm font-medium">Location:</label>
            <input type="text" id="location" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter location">
          </div>
          <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition-colors">Search</button>
        </form>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
      <div class="container mx-auto px-4 text-center">
        <p class="text-sm">&copy; 2024 ELspot. Find what you lost.</p>
      </div>
    </footer>

  </div>

</body>
</html>
