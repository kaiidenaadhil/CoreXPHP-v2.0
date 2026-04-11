<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Section - Growth Engineered</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">
  <!-- Hero Section -->
  <section class="relative h-screen flex flex-col justify-center items-center text-center px-4 overflow-hidden">
    <!-- Background Video / Canvas -->
    <div class="absolute inset-0 z-0">
      <video autoplay loop muted class="w-full h-full object-cover">
        <source src="your-background-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Your Growth, Engineered: We Build Funnels, Apps & Results.</h1>
      <p class="text-xl md:text-2xl mb-6">Start with a free audit—get your personalized strategy in 24 hours.</p>
      <button class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-3 px-6 rounded-full transition duration-300" onclick="openCalendarPopup()">Get My Free Audit Now</button>
    </div>

    <!-- Visuals -->
    <div class="relative z-10 mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-6xl">
      <div class="bg-white bg-opacity-10 rounded-xl p-6 shadow-lg">
        <img src="https://picsum.photos/600/400?random=1" alt="Live App Dashboard" class="rounded-lg w-full">
      </div>
      <div class="bg-white bg-opacity-10 rounded-xl p-6 shadow-lg">
        <img src="https://picsum.photos/600/400?random=2" alt="Human Team Working on UI/Design" class="rounded-lg w-full">
      </div>
    </div>

    <!-- Testimonials on Hover -->
    <div class="absolute bottom-10 left-10 z-10 hidden md:block">
      <div class="bg-white bg-opacity-20 p-4 rounded-lg backdrop-blur hover:bg-opacity-80 transition duration-300">
        <p class="text-sm text-white">⭐️ "They helped us 4x our conversions in 3 months!" – Alex R.</p>
      </div>
    </div>

    <!-- Chatbot -->
    <div class="fixed bottom-6 right-6 z-50">
      <button class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-full shadow-lg">💬 Need a Quick Quote?</button>
    </div>
  </section>

  <script>
    function openCalendarPopup() {
      // Replace this with actual calendar integration
      alert("Open calendar integration for audit booking.");
    }
  </script>
</body>
</html>
