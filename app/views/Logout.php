<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout | Lost and Found</title>
  <link href="../../public/telwin/output.css" rel="stylesheet">
  <style>
    @keyframes fadeOut {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    .fade-out {
      animation: fadeOut 3s ease-out ;
    }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4 fade-out">
  <div class="bg-white  rounded-lg shadow-lg text-center max-w-sm w-full border-4 border-blue-500 p-4">
    <h2 class="text-2xl font-bold mb-4">Logout</h2>
    <p class="text-gray-600 mb-6">Are you sure you want to log out?</p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <form action="logout.php" method="POST">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Yes, Logout</button>
      </form>
      <a href="Homepage.php" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">Cancel</a>
    </div>
  </div>
</body>
</html>
