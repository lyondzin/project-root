<!-- Verification Form -->
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

<div class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
  <h2 class="text-2xl font-bold mb-4">Verifikasi Barang</h2>
  <form id="verification-form">
    <div class="mb-4">
      <label for="verification-question" class="block text-gray-700">Jawaban Pertanyaan Verifikasi:</label>
      <input type="text" id="verification-question" class="w-full p-2 border border-gray-300 rounded" placeholder="Jawaban">
    </div>
    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Verifikasi</button>
  </form>
</div>
