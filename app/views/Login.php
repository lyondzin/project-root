<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Lost and Found</title>
  <link href="../../public/telwin/output.css" rel="stylesheet">
  <style>
    @keyframes fadeOut {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    .fade-out {
      animation: fadeOut 3s ease-out;
    }

    .error-message {
      color: red;
      font-size: 0.875rem;
      margin-top: 0.25rem;
    }

    .success-message {
      color: green;
      font-size: 0.875rem;
      margin-top: 0.25rem;
    }

    .eye-icon {
      position: absolute;
      margin-top: 0.90rem;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      width: 24px; /* Adjust the width as needed */
      height: 24px; /* Adjust the height as needed */
    }

    .password-container {
      position: relative;
    }

    .password-field {
      padding-right: 40px; /* Add extra padding to prevent text overlap with icon */
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 m-0 p-0">

  <!-- Navigation Bar -->
  <nav class="bg-blue-600 shadow-lg mb-12">
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

  <!-- Login Form -->
  <main class="flex-grow px-4 sm:px-6 lg:px-8 fade-out mb-12">
    <div class="max-w-md mx-auto bg-white shadow-xl rounded-lg sm:p-8 border-4 border-blue-500 p-6">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Login to Your Account</h2>
      <form id="login-form" class="space-y-6" onsubmit="return validateForm()">
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
          <input id="username" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your username" required>
          <p id="username-error" class="error-message"></p>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
          <input id="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email" required>
          <p id="email-error" class="error-message"></p>
        </div>
        <div class="password-container">
          <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
          <input type="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 password-field" placeholder="Enter your password" required>
          <img src="https://img.icons8.com/ios-filled/50/000000/visible.png" alt="Show Password" class="eye-icon" id="toggle-password" onclick="togglePassword()">
          <p id="password-error" class="error-message"></p>
        </div>
        <div id="success-message" class="success-message hidden">Login successful! Redirect...</div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md hover:bg-blue-700 transition-colors">Login</button>
      </form>

      <div class="mt-6 text-center text-gray-600">
        <p>Or login with:</p>
        <div class="flex justify-center mt-4 space-x-4">
          <button class="bg-red-600 text-white px-4 py-2 rounded-full shadow-lg hover:bg-red-700 transition-colors">Google</button>
        </div>
      </div>

      <div class="mt-6 text-center text-gray-500">
        <p>Don't have an account? <a href="Register.php" class="text-blue-600 hover:underline">Register here</a></p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6 mt-12">
    <div class="container mx-auto px-4 text-center">
      <p class="text-sm">&copy; 2024 ELspot. Find what you lost.</p>
    </div>
  </footer>

  <script>
    function validateForm() {
      let isValid = true;

      // Username validation
      const username = document.getElementById('username').value;
      const usernameError = document.getElementById('username-error');
      const usernamePattern = /^(?=.*[A-Z]).{7,}$/; // At least one uppercase letter and more than 6 characters
      if (!usernamePattern.test(username)) {
        usernameError.textContent = 'Username must be at least 7 characters long and contain at least one uppercase letter.';
        isValid = false;
      } else {
        usernameError.textContent = '';
      }

      // Email validation
      const email = document.getElementById('email').value;
      const emailError = document.getElementById('email-error');
      const emailPattern = /^[^\s@]+@gmail\.com$/; // Must be a Gmail address
      if (!emailPattern.test(email)) {
        emailError.textContent = 'Email must be a valid Gmail address.';
        isValid = false;
      } else {
        emailError.textContent = '';
      }

      // Password validation
      const password = document.getElementById('password').value;
      const passwordError = document.getElementById('password-error');
      const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{9,}$/; // At least one uppercase letter, one special character, one number, and more than 8 characters
      if (!passwordPattern.test(password)) {
        console.log('Password failed validation'); // Debugging
        passwordError.textContent = 'Password must be at least 9 characters long and contain at least one uppercase letter, one special character, and one number.';
        isValid = false;
      } else {
        console.log('Password passed validation'); // Debugging
        passwordError.textContent = '';
      }

      if (isValid) {
        // Simulate successful login
        document.getElementById('success-message').classList.remove('hidden');
        // Optionally, redirect to another page after a delay
        setTimeout(() => {
          window.location.href = 'Homepage.php'; // Redirect to the homepage or any other page
        }, 2000);
      }

      return false; // Prevent form from submitting for demonstration purposes
    }

    function togglePassword() {
      const passwordField = document.getElementById('password');
      const eyeIcon = document.getElementById('toggle-password');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.src = 'https://img.icons8.com/ios-filled/50/000000/invisible.png'; // Eye icon for hiding
      } else {
        passwordField.type = 'password';
        eyeIcon.src = 'https://img.icons8.com/ios-filled/50/000000/visible.png'; // Eye icon for showing
      }
    }
  </script>

</body>
</html>
