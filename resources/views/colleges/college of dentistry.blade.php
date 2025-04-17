<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>College of Dentistry</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeUp {
      animation: fadeUp 1s ease-out forwards;
    }
  </style>
</head>

<body class="bg-white text-gray-800 scroll-smooth" style="font-family: 'Georgia', serif;">

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-orange-100 to-white py-16">
    <div class="container mx-auto text-center px-4 animate-fadeUp">
      <h1 class="text-5xl font-extrabold text-orange-600 transition-all duration-700 hover:scale-105">
        College of Dentistry
      </h1>
      <p class="mt-4 text-lg text-gray-600">Pioneering excellence in oral health education, research & care</p>
      <p class="text-sm text-orange-500 mt-2">Home / Colleges / Dentistry</p>
    </div>
  </section>

  <!-- About Section -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
      <div class="animate-fadeUp">
        <img src="{{asset('storage/images/dent.jpg')}}" alt="College Building" class="rounded-xl shadow-xl transition-transform duration-500 hover:scale-105" />
      </div>
      <div class="animate-fadeUp delay-200">
        <h2 class="text-3xl font-bold mb-4 text-gray-700">Welcome to Our College</h2>
        <p class="text-gray-600 leading-relaxed">
          As a leader in dental education, the College of Dentistry is dedicated to preparing professionals equipped with cutting-edge clinical skills, a strong ethical foundation, and a commitment to lifelong learning.
        </p>
        <p class="mt-4 text-gray-600 leading-relaxed">
          With access to modern clinics and research labs, our students become change-makers in oral health locally and globally.
        </p>
      </div>
    </div>
  </section>

  <!-- Mission Vision Goals -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-10 animate-fadeUp">
        <h2 class="text-4xl font-bold text-orange-600">Our Core Values</h2>
        <p class="text-gray-600 mt-2">What drives us forward</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-orange-50 p-6 rounded-lg shadow-md transition duration-500 hover:shadow-xl hover:scale-105 animate-fadeUp">
          <h3 class="text-xl font-semibold text-orange-600 mb-2">Mission</h3>
          <p class="text-gray-700">To educate future dentists who are leaders in care, research, and service with a focus on innovation and community engagement.</p>
        </div>
        <div class="bg-orange-50 p-6 rounded-lg shadow-md transition duration-500 hover:shadow-xl hover:scale-105 animate-fadeUp">
          <h3 class="text-xl font-semibold text-orange-600 mb-2">Vision</h3>
          <p class="text-gray-700">To be a nationally and internationally recognized dental institution for outstanding academic excellence and impactful research.</p>
        </div>
        <div class="bg-orange-50 p-6 rounded-lg shadow-md transition duration-500 hover:shadow-xl hover:scale-105 animate-fadeUp">
          <h3 class="text-xl font-semibold text-orange-600 mb-2">Goals</h3>
          <ul class="list-disc list-inside text-gray-700">
            <li>Deliver outstanding dental training</li>
            <li>Advance oral health research and innovation</li>
            <li>Serve the community with integrity and care</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Departments -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto text-center px-4">
      <div class="text-center mb-10 animate-fadeUp">
        <h2 class="text-4xl font-bold text-gray-800">Departments</h2>
        <p class="text-gray-600">Explore our diverse academic and clinical departments</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Repeatable Card -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform duration-500 hover:scale-105 animate-fadeUp">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Oral & Maxillofacial Surgery</h3>
          <p class="text-gray-600">Training students in surgical treatment of complex dental and facial conditions.</p>
        </div>
        <!-- Add similar cards with same style -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform duration-500 hover:scale-105 animate-fadeUp">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Orthodontics</h3>
          <p class="text-gray-600">Focusing on correcting dental alignment and jaw irregularities.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-transform duration-500 hover:scale-105 animate-fadeUp">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Prosthodontics</h3>
          <p class="text-gray-600">Specializing in dental prosthetics and aesthetic restoration.</p>
        </div>
        <!-- ... -->
      </div>
    </div>
  </section>

  <!-- Student Life -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
      <div class="animate-fadeUp">
        <img src="{{asset('storage/images/denti.jpg')}}" alt="Student Life" class="rounded-xl shadow-lg hover:scale-105 transition duration-500" />
      </div>
      <div class="animate-fadeUp delay-300">
        <h2 class="text-3xl font-bold text-gray-700 mb-4">Student Life</h2>
        <p class="text-gray-600 leading-relaxed">
          Life at the College of Dentistry is enriched with academic rigor, vibrant student organizations, and hands-on community service.
        </p>
        <p class="mt-4 text-gray-600 leading-relaxed">
          A balance of professional growth and personal development is what defines our campus experience.
        </p>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
      <div class="text-center mb-10 animate-fadeUp">
        <h2 class="text-4xl font-bold text-orange-600">Contact Information</h2>
        <p class="text-gray-600">Have questions? Reach out to us!</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6 text-center">
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 animate-fadeUp">
          <div class="text-3xl text-orange-500 mb-2">📞</div>
          <h3 class="font-semibold text-gray-700">Phone</h3>
          <p class="text-gray-500">+964 66 2272385</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 animate-fadeUp">
          <div class="text-3xl text-orange-500 mb-2">📍</div>
          <h3 class="font-semibold text-gray-700">Location</h3>
          <p class="text-gray-500">Dental Hospital Complex, Erbil</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 animate-fadeUp">
          <div class="text-3xl text-orange-500 mb-2">📧</div>
          <h3 class="font-semibold text-gray-700">Email</h3>
          <p class="text-gray-500">dentistry@hmu.edu.krd</p>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
