<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>College of Nursing</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    .fade-in {
      animation: fadeIn 1s ease-in-out both;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body class="bg-white text-gray-800" style="font-family: 'Georgia', serif;">
  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-orange-100 to-white py-16">
    <div class="container mx-auto text-center px-4">
      <h1 class="text-5xl font-extrabold text-orange-700 fade-in">College of Nursing</h1>
      <p class="mt-4 text-lg text-gray-600">Empowering the future of compassionate healthcare</p>
      <p class="text-sm text-orange-500 mt-2">Home / Colleges / Nursing</p>
    </div>
  </section>

  <!-- About Section -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
      <div class="fade-in">
        <img src="{{asset('storage/images/nursing.jpg')}}" alt="College of Nursing" class="rounded-xl shadow-xl transition duration-700 hover:scale-105" />
      </div>
      <div class="fade-in delay-150">
        <h2 class="text-3xl font-bold mb-4 text-gray-700">Welcome to Our College</h2>
        <p class="text-gray-600 leading-relaxed">
          The College of Nursing delivers world-class education and clinical training that produces highly competent and ethical nurses ready to meet today’s healthcare demands.
        </p>
        <p class="mt-4 text-gray-600 leading-relaxed">
          Our students learn in high-tech labs and real-world environments, gaining the expertise and confidence to lead in global health communities.
        </p>
      </div>
    </div>
  </section>

  <!-- Mission Vision Goals -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-10">
        <h2 class="text-4xl font-bold text-orange-700">Our Core Values</h2>
        <p class="text-gray-600 mt-2">The foundation of our mission</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-orange-50 p-6 rounded-lg shadow-md fade-in">
          <h3 class="text-xl font-semibold text-orange-600 mb-2">Mission</h3>
          <p class="text-gray-700">To deliver top-tier nursing education and clinical training that meets global healthcare standards and promotes lifelong learning.</p>
        </div>
        <div class="bg-orange-50 p-6 rounded-lg shadow-md fade-in delay-100">
          <h3 class="text-xl font-semibold text-orange-600 mb-2">Vision</h3>
          <p class="text-gray-700">To be a leading institution recognized for transformative nursing education, impactful research, and exceptional patient care.</p>
        </div>
        <div class="bg-orange-50 p-6 rounded-lg shadow-md fade-in delay-200">
          <h3 class="text-xl font-semibold text-orange-600 mb-2">Goals</h3>
          <ul class="list-disc list-inside text-gray-700">
            <li>Deliver exceptional nursing programs</li>
            <li>Foster research & innovation in nursing</li>
            <li>Promote community health initiatives</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Departments Section -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto text-center px-4">
      <div class="text-center mb-10">
        <h2 class="text-4xl font-bold text-gray-800">Departments</h2>
        <p class="text-gray-600">Explore our academic and clinical departments</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Adult Health Nursing</h3>
          <p class="text-gray-600">Focuses on nursing care for adult populations in various healthcare settings.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Pediatric Nursing</h3>
          <p class="text-gray-600">Emphasizes the care of infants, children, and adolescents with family-centered approaches.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Community Health Nursing</h3>
          <p class="text-gray-600">Trains nurses to promote wellness and preventive care in community settings.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Psychiatric Nursing</h3>
          <p class="text-gray-600">Specializes in mental health care and psychiatric therapeutic techniques.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Midwifery</h3>
          <p class="text-gray-600">Provides training in maternal and newborn care before, during, and after childbirth.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Nursing Fundamentals</h3>
          <p class="text-gray-600">Covers the core principles and basic practices essential to all areas of nursing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Student Life -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
      <div class="fade-in">
        <img src="{{asset('students.jpg')}}" alt="Student Life" class="rounded-xl shadow-lg transition duration-700 hover:scale-105" />
      </div>
      <div class="fade-in delay-150">
        <h2 class="text-3xl font-bold text-gray-700 mb-4">Student Life</h2>
        <p class="text-gray-600 leading-relaxed">
          Life at the College of Nursing is dynamic and enriching. Students engage in medical outreach, simulation labs, nursing research, and student-led health initiatives.
        </p>
        <p class="mt-4 text-gray-600 leading-relaxed">
          We emphasize both academic excellence and personal development through mentorship programs, cultural activities, and collaborative learning.
        </p>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
      <div class="text-center mb-10">
        <h2 class="text-4xl font-bold text-orange-700">Contact Information</h2>
        <p class="text-gray-600">Have questions? Reach out to us!</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6 text-center">
        <div class="bg-white p-6 rounded-lg shadow-md fade-in">
          <div class="text-3xl text-orange-500 mb-2">📞</div>
          <h3 class="font-semibold text-gray-700">Phone</h3>
          <p class="text-gray-500">+964 66 2272388</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md fade-in delay-100">
          <div class="text-3xl text-orange-500 mb-2">📍</div>
          <h3 class="font-semibold text-gray-700">Location</h3>
          <p class="text-gray-500">Nursing Education Building, Erbil</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md fade-in delay-200">
          <div class="text-3xl text-orange-500 mb-2">📧</div>
          <h3 class="font-semibold text-gray-700">Email</h3>
          <p class="text-gray-500">nursing@hmu.edu.krd</p>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
