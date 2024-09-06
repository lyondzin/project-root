<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Item | Lost and Found</title>
  <link href="../../public/telwin/output.css" rel="stylesheet">
  <style>
    @keyframes fadeOut {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    .fade-out {
      animation: fadeOut 3s ease-out;
    }

    .scrollable-container {
      max-height: 600px; /* Adjust the height as needed */
      overflow-y: auto;
    }

    .file-input[type="file"]::-webkit-file-upload-button {
      background: #1D4ED8; /* Blue color */
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    .file-input[type="file"]::-webkit-file-upload-button:hover {
      background: #1E40AF; /* Darker blue on hover */
    }

    .item-card {
      background: #ffffff;
      border-radius: 0.375rem; /* 6px */
      padding: 1rem;
      margin-bottom: 1rem;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border: 2px solid transparent;
      position: relative;
      overflow: hidden;
    }

    .item-card::before {
      content: '';
      position: absolute;
      top: -4px;
      left: -4px;
      width: calc(100% + 8px);
      height: calc(100% + 8px);
      border-radius: inherit;
      border: 2px solid #60A5FA; /* Light blue color */
      opacity: 0.5;
      transition: opacity 0.3s;
    }

    .item-card:hover::before {
      opacity: 1;
    }

    /* Flexbox utility for layout */
    .flex-container {
      display: flex;
      flex-direction: row;
      gap: 1rem;
    }

    .flex-1 {
      flex: 1;
    }

    .fade-in-up {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    .fade-in-up.visible {
      animation: fadeInUp 0.5s ease-out forwards;
    }
  </style>
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

  <!-- Main Content -->
  <main class="flex mt-16 px-4 sm:px-6 lg:px-8 fade-out flex-container ">
    <!-- Form Section -->
    <section class="flex-1 bg-white shadow-lg rounded-lg  sm:p-8 border-4 border-blue-500 p-4">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Post an Item</h2>
      <form id="post-item-form" class="space-y-6">
        <div>
          <label for="item-name" class="block text-sm font-medium text-gray-700 mb-2">Item Name:</label>
          <input type="text" id="item-name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter item name" required>
        </div>
        <div>
          <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category:</label>
          <select id="category" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            <option>Electronics</option>
            <option>Clothing</option>
            <option>Furniture</option>
            <option>Other</option>
          </select>
        </div>
        <div>
          <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description:</label>
          <textarea id="description" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" rows="4" placeholder="Enter item description" required></textarea>
        </div>
        <div>
          <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location:</label>
          <input type="text" id="location" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter location" required>
        </div>
        <div>
          <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Date:</label>
          <input type="date" id="date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
          <label for="photo" class="block text-sm font-medium text-gray-700 mb-2">Photo:</label>
          <input type="file" id="photo" class="file-input w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" accept=".png, .jpg, .jpeg">
          <p class="text-sm text-gray-500">Only PNG and JPG files are allowed.</p>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md hover:bg-blue-700 transition-colors">Post Item</button>
      </form>
    </section>

    <!-- Posted Items Section -->
    <aside id="posted-items" class="flex-1 bg-white shadow-lg rounded-lg  sm:p-8 ml-8 scrollable-container border-4 border-blue-500 p-4">
      <h3 class="text-xl font-bold text-gray-800 mb-4">Posted Items</h3>
      <!-- Posted items will be dynamically added here -->
    </aside>
  </main>

  <footer class="bg-gray-800 text-white py-6 mt-12">
    <div class="container mx-auto px-4 text-center">
      <p class="text-sm">&copy; 2024 ELspot. Find what you lost.</p>
    </div>
  </footer>

  <script>
    document.getElementById('post-item-form').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting the traditional way

      // Get the form data
      const itemName = document.getElementById('item-name').value;
      const category = document.getElementById('category').value;
      const description = document.getElementById('description').value;
      const location = document.getElementById('location').value;
      const date = document.getElementById('date').value;
      const photoInput = document.getElementById('photo');
      const photoFile = photoInput.files[0];

      // Create a new item card
      const itemCard = document.createElement('div');
      itemCard.classList.add('item-card');

      // Handle image preview
      let imagePreview = '';
      if (photoFile) {
        const reader = new FileReader();
        reader.onload = function(e) {
          imagePreview = `<img src="${e.target.result}" alt="Item Image" class="w-full mt-4 rounded-lg">`;
          itemCard.innerHTML = `
            <h4 class="text-lg font-semibold text-gray-800">${itemName}</h4>
            <p class="text-gray-600">Category: ${category}</p>
            <p class="text-gray-600">Location: ${location}</p>
            <p class="text-gray-600">Date: ${date}</p>
            <p class="text-gray-600">Description: ${description}</p>
            ${imagePreview}
          `;
          document.getElementById('posted-items').appendChild(itemCard);
        };
        reader.readAsDataURL(photoFile);
      } else {
        itemCard.innerHTML = `
          <h4 class="text-lg font-semibold text-gray-800">${itemName}</h4>
          <p class="text-gray-600">Category: ${category}</p>
          <p class="text-gray-600">Location: ${location}</p>
          <p class="text-gray-600">Date: ${date}</p>
          <p class="text-gray-600">Description: ${description}</p>
        `;
        document.getElementById('posted-items').appendChild(itemCard);
      }

      // Optionally clear the form fields
      document.getElementById('post-item-form').reset();
    });
  </script>
</body>
</html>
