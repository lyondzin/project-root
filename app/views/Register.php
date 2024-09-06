<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Lost and Found</title>
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

    .footer {
      background-color: #f8f9fa;
      padding: 2rem 0;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    .footer-content p {
      margin-bottom: 1rem;
      color: #6c757d;
    }

    .footer-content a {
      color: #007bff;
      text-decoration: none;
    }

    .footer-content a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 m-0 p-0">

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

  <!-- Registration Form -->
  <main class="flex-grow mt-16 px-4 sm:px-6 lg:px-8 fade-out mb-12">
    <div class="max-w-md mx-auto bg-white shadow-xl rounded-lg border-4 border-blue-500 p-6">
      <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Create Your Account</h2>
      <form id="registration-form" class="space-y-6" onsubmit="return validateForm()">
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
          <input type="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your password" required>
          <img src="https://img.icons8.com/ios-filled/50/000000/visible.png" alt="Show Password" class="eye-icon" id="toggle-password" onclick="togglePassword('password', 'toggle-password')">
          <p id="password-error" class="error-message"></p>
        </div>
        <div class="password-container">
          <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
          <input type="password" id="confirm-password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Confirm your password" required>
          <img src="https://img.icons8.com/ios-filled/50/000000/visible.png" alt="Show Password" class="eye-icon" id="toggle-confirm-password" onclick="togglePassword('confirm-password', 'toggle-confirm-password')">
          <p id="confirm-password-error" class="error-message"></p>
        </div>
        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
          <input type="text" id="phone" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your phone number" required>
          <p id="phone-error" class="error-message"></p>
        </div>
        <div id="success-message" class="success-message hidden text-center">Registration successful! Redirecting...</div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md hover:bg-blue-700 transition-colors">Register</button>
      </form>

      <div class="mt-6 text-center text-gray-600">
        <p>Or register with:</p>
        <div class="flex justify-center mt-4 space-x-4">
          <button class="bg-red-600 text-white px-4 py-2 rounded-full shadow-lg hover:bg-red-700 transition-colors">Google</button>
        </div>
      </div>

      <div class="mt-6 text-center text-gray-500">
        <p>Already have an account? <a href="Login.php" class="text-blue-600 hover:underline">Login here</a></p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
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
        passwordError.textContent = 'Password must be at least 9 characters long and contain at least one uppercase letter, one special character, and one number.';
        isValid = false;
      } else {
        passwordError.textContent = '';
      }

      // Confirm Password validation
      const confirmPassword = document.getElementById('confirm-password').value;
      const confirmPasswordError = document.getElementById('confirm-password-error');
      if (password !== confirmPassword) {
        confirmPasswordError.textContent = 'Passwords do not match.';
        isValid = false;
      } else {
        confirmPasswordError.textContent = '';
      }

      // Phone Number validation
      const phone = document.getElementById('phone').value;
      const phoneError = document.getElementById('phone-error');
      const phonePattern = /^\d{4}-?\d{4}-?\d{4}$/; // Maximum of 15 digits with dashes every 4 digits
      if (!phonePattern.test(phone)) {
        phoneError.textContent = 'Phone number must be a maximum of 15 digits and can include dashes every 4 digits.';
        isValid = false;
      } else {
        phoneError.textContent = '';
      }

      if (isValid) {
        // Show success message
        document.getElementById('success-message').classList.remove('hidden');

        // Redirect to Login.php after 3 seconds
        setTimeout(() => {
          window.location.href = 'Login.php';
        }, 2000);

        return false; // Prevent form submission
      }

      return false; // Prevent form submission
    }

    function togglePassword(fieldId, iconId) {
      const passwordField = document.getElementById(fieldId);
      const eyeIcon = document.getElementById(iconId);
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.src = 'https://img.icons8.com/ios-filled/50/000000/invisible.png'; // Change to the 'hide' icon
      } else {
        passwordField.type = 'password';
        eyeIcon.src = 'https://img.icons8.com/ios-filled/50/000000/visible.png'; // Change to the 'show' icon
      }
    }
  </script>
</body>
</html>
