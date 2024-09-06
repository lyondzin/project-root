<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lost and Found | ELspot</title>
<link href="../../public/telwin/output.css" rel="stylesheet">
  <style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
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
<body class="bg-gray-50 text-gray-800">

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


  <!-- Hero Section -->
  <header class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-24 fade-in-up" id="hero-section">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl sm:text-5xl font-bold mb-4 tracking-tight">Welcome to ELspot</h1>
      <p class="text-lg sm:text-xl mb-8 font-light">Find what you lost, restore hope.</p>
      <a href="Post-Lost-Item.php" class="bg-white text-blue-600 px-6 py-2 sm:px-8 sm:py-3 rounded-lg shadow-lg hover:bg-gray-200 transition">Post an Item</a>
    </div>
  </header>

  <!-- Features Section -->
  <section class="py-16 bg-gray-100 fade-in-up" id="features-section">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-center mb-12 text-blue-600">Our Features</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Feature 1: Matching System -->
        <div class="bg-white rounded-xl p-6 shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl fade-in-up">
          <div class="flex items-center justify-center mb-4">
            <!-- Feature Icon -->
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M4 6h16M4 6l2 14h12l2-14M9 21h6" />
              </svg>
            </div>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-center mb-2">Matching System</h3>
          <p class="text-gray-600 text-center mb-4">Find potential matches between your lost items and those found by others.</p>
          <div class="text-center">
            <a href="Matching.php" class="inline-block bg-blue-600 text-white px-4 sm:px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">Explore Matching</a>
          </div>
        </div>
        <!-- Feature 2: Post Items -->
        <div class="bg-white rounded-xl p-6 shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl fade-in-up">
          <div class="flex items-center justify-center mb-4">
            <!-- Feature Icon -->
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </div>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-center mb-2">Post Items</h3>
          <p class="text-gray-600 text-center mb-4">Post your lost or found items with details and photos to help others locate them.</p>
          <div class="text-center">
            <a href="Post-Lost-Item.php" class="inline-block bg-blue-600 text-white px-4 sm:px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">Post an Item</a>
          </div>
        </div>
        <!-- Feature 3: Search Items -->
        <div class="bg-white rounded-xl p-6 shadow-lg transform transition-transform hover:scale-105 hover:shadow-2xl fade-in-up">
          <div class="flex items-center justify-center mb-4">
            <!-- Feature Icon -->
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h2m2 0h.01M17 16H7m10-4H7m10-4H7m0 8h.01M12 14h0" />
              </svg>
            </div>
          </div>
          <h3 class="text-xl sm:text-2xl font-bold text-center mb-2">Search Items</h3>
          <p class="text-gray-600 text-center mb-4">Search lost or found items by keywords, category, or location to recover what you've lost.</p>
          <div class="text-center">
            <a href="Search-Item.php" class="inline-block bg-blue-600 text-white px-4 sm:px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">Start Searching</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="bg-blue-600 text-white text-center py-16 fade-in-up" id="cta-section">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl sm:text-4xl font-bold mb-4">Join Us Now!</h2>
      <p class="text-lg sm:text-xl mb-6">Register and start using ELspot to make your community safer and more connected
      .</p>
      <a href="Register.php" class="bg-white text-blue-600 px-6 sm:px-8 py-2 sm:py-3 rounded-lg shadow-lg hover:bg-gray-200 transition">Get Started</a>
    </div>
  </section>

 <!-- Comment Section -->
<section class="py-16 bg-gray-100 fade-in-up" id="comment-section">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-center mb-8 text-blue-600">Comment on This Website</h2>
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
      <form id="comment-form" action="#" method="POST">
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
          <input  id="name" name="name" required class="w-full border-gray-300 border rounded-lg p-3">
          <p id="name-error" class="text-red-500 text-sm mt-1 hidden">Name must be between 10 and 30 characters long.</p>
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
          <input  id="email" name="email" required class="w-full border-gray-300 border rounded-lg p-3">
          <p id="email-error" class="text-red-500 text-sm mt-1 hidden">Please enter a valid Gmail address.</p>
        </div>
        <div class="mb-4">
          <label for="comment" class="block text-gray-700 font-bold mb-2">Comment:</label>
          <textarea id="comment" name="comment" rows="4" required class="w-full border-gray-300 border rounded-lg p-3"></textarea>
          <p id="comment-error" class="text-red-500 text-sm mt-1 hidden">Comment must be less than 255 characters.</p>
          <p id="success-message" class="text-green-500 text-sm mt-1 hidden">Comment submitted successfully!</p>
        </div>
        <div class="text-center">
          <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">Submit Comment</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- JavaScript for Validation -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('comment-form');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const commentInput = document.getElementById('comment');

    form.addEventListener('submit', (event) => {
      event.preventDefault();

      // Clear previous error messages
      document.getElementById('name-error').classList.add('hidden');
      document.getElementById('email-error').classList.add('hidden');
      document.getElementById('comment-error').classList.add('hidden');
      document.getElementById('success-message').classList.add('hidden');

      // Validate Name
      const name = nameInput.value.trim();
      if (name.length < 10 || name.length > 30) {
        document.getElementById('name-error').classList.remove('hidden');
        return;
      }

      // Validate Email
      const email = emailInput.value.trim();
      const emailRegex = /^[^\s@]+@gmail\.com$/;
      if (!emailRegex.test(email)) {
        document.getElementById('email-error').classList.remove('hidden');
        return;
      }

      // Validate Comment
      const comment = commentInput.value.trim();
      if (comment.length > 255) {
        document.getElementById('comment-error').classList.remove('hidden');
        return;
      }

      // Show success message
      document.getElementById('success-message').classList.remove('hidden');
      form.reset(); // Optional: Reset the form fields
    });
  });
</script>


  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto px-4 text-center">
      <p class="text-sm">&copy; 2024 ELspot. Find what you lost.</p>
    </div>
  </footer>

  <!-- JavaScript for Scroll Animations -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const elements = document.querySelectorAll('.fade-in-up');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1
      });

      elements.forEach(element => {
        observer.observe(element);
      });
    });
  </script>

</body>
</html>
