<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel | Lost and Found</title>
  <link href="../../public/telwin/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <!-- Navigation Bar -->
  <nav class="bg-blue-600 shadow-lg">
<div class="container mx-auto px-4 py-4 flex items-center justify-between">
  <!-- Logo and Text Logo Container -->
  <div class="flex items-center space-x-2">
    <!-- Logo Image -->
    <img src="../../public/image/1.jpg" class="w-16 h-16 rounded-full" alt="ELspot Logo">
    <!-- Text Logo -->
    <a href="Homepage.php" class="text-white text-6xl font-extrabold tracking-wide">ELspot</a>
  </div>
  <!-- Navigation Links -->
  <div class="space-x-6 mt-4 lg:mt-0 flex flex-wrap">
    <a href="Login.php" class="text-white hover:underline hover:text-blue-300 transition">Login</a>
    <a href="Register.php" class="text-white hover:underline hover:text-blue-300 transition">Register</a>
    <a href="Post-Lost-Item.php" class="text-white hover:underline hover:text-blue-300 transition">Post Item</a>
    <a href="Logout.php" class="text-white hover:underline hover:text-blue-300 transition">Logout</a>
    
  </div>
</div>
</nav>

  <!-- Admin Panel -->
  <div class="max-w-7xl mx-auto p-6 mt-20">
    <h2 class="text-3xl font-bold mb-6 text-center sm:text-left">Admin Panel</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-2xl font-bold mb-4">Manage Users</h3>
        <p>Tools to manage user accounts.</p>
        <!-- Add functionality to manage users -->
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-2xl font-bold mb-4">Manage Items</h3>
        <p>Tools to manage posted items.</p>
        <!-- Add functionality to manage items -->
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-2xl font-bold mb-4">View Reports</h3>
        <p>Tools to view and handle reports.</p>
        <!-- Add functionality to view reports -->
      </div>
    </div>
  </div>
  
</body>

</html>
