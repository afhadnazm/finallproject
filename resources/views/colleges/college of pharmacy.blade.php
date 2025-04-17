<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>College of Pharmacy</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    .fade-in {
      animation: fadeIn 1s ease-in-out both;
    }

    .fade-in.delay-100 {
      animation-delay: 0.1s;
    }

    .fade-in.delay-200 {
      animation-delay: 0.2s;
    }

    .fade-in.delay-300 {
      animation-delay: 0.3s;
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

<body class="bg-white text-gray-800" style="font-family: Cambria, Georgia, serif;">
  <!-- Hero -->
  <section class="bg-gradient-to-r from-orange-100 to-white py-16">
    <div class="container mx-auto text-center px-4">
      <h1 class="text-5xl font-extrabold text-orange-600 fade-in">College of Pharmacy</h1>
      <p class="mt-4 text-lg text-gray-600">Empowering the future of pharmaceutical care</p>
      <p class="text-sm text-orange-500 mt-2">Home / Colleges / Pharmacy</p>
    </div>
  </section>

  <!-- About -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto grid md:grid-cols-2 gap-10 items-center px-4">
      <div class="fade-in">
        <img src="{{asset('storage/images/pharmacy.jpg')}}" alt="College of Pharmacy"
          class="rounded-xl shadow-xl transition duration-700 hover:scale-105" />
      </div>
      <div class="fade-in delay-150">
        <h2 class="text-3xl font-bold mb-4 text-gray-700">Welcome to Our College</h2>
        <p class="text-gray-600 leading-relaxed">
          The College of Pharmacy fosters excellence in education, research, and community service. Our students are trained to become compassionate, innovative leaders who advance healthcare through medicine.
        </p>
        <p class="mt-4 text-gray-600 leading-relaxed">
          Through hands-on labs, clinical rotations, and research opportunities, students build real-world experience and confidence in pharmacological sciences.
        </p>
      </div>
    </div>
  </section>

  <!-- Mission, Vision, Goals -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
   <div class="text-center mb-10 fade-in delay-100">
      <h2 class="text-4xl font-bold text-orange-600">Our Core Values</h2>
      <p class="text-gray-600 mt-2">What drives our commitment to excellence</p>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-orange-50 p-6 rounded-lg shadow-md fade-in">
        <h3 class="text-xl font-semibold text-orange-600 mb-2">Mission</h3>
        <p class="text-gray-700">Deliver an exceptional pharmacy education that integrates patient-centered care, research, and innovation.</p>
      </div>
      <div class="bg-orange-50 p-6 rounded-lg shadow-md fade-in delay-100">
        <h3 class="text-xl font-semibold text-orange-600 mb-2">Vision</h3>
        <p class="text-gray-700">To be a national leader in pharmacy education, producing professionals who shape the future of medicine.</p>
      </div>
      <div class="bg-orange-50 p-6 rounded-lg shadow-md fade-in delay-200">
        <h3 class="text-xl font-semibold text-orange-600 mb-2">Goals</h3>
        <ul class="list-disc list-inside text-gray-700">
          <li>Provide modern and ethical pharmacy training</li>
          <li>Encourage clinical and pharmaceutical research</li>
          <li>Engage with communities for public health awareness</li>
        </ul>
      </div>
    </div>
  </div>
</section>

  <!-- Departments -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto text-center px-4">
      <div class="text-center mb-10">
        <h2 class="text-4xl font-bold text-gray-800">Departments</h2>
        <p class="text-gray-600">Explore our academic and research divisions</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Pharmaceutical Chemistry</h3>
          <p class="text-gray-600">Focuses on drug design, synthesis, and chemical analysis of medications.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Pharmacology & Toxicology</h3>
          <p class="text-gray-600">Studies drug actions, side effects, and safe medication use in various treatments.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Clinical Pharmacy</h3>
          <p class="text-gray-600">Trains students in patient interaction, medication therapy management, and clinical practice.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Pharmaceutics</h3>
          <p class="text-gray-600">Focuses on formulation, manufacturing, and quality control of pharmaceutical products.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Pharmacognosy</h3>
          <p class="text-gray-600">Studies medicinal properties of natural sources like plants and herbs.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-500 hover:scale-105">
          <h3 class="text-xl font-semibold text-orange-500 mb-2">Industrial Pharmacy</h3>
          <p class="text-gray-600">Prepares students for roles in pharmaceutical manufacturing and regulatory affairs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-10">
        <h2 class="text-4xl font-bold text-orange-600">Contact Information</h2>
        <p class="text-gray-600">Get in touch with us today</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6 text-center">
        <div class="bg-gray-50 p-6 rounded-lg shadow-md fade-in">
          <div class="text-3xl text-orange-500 mb-2">📞</div>
          <h3 class="font-semibold text-gray-700">Phone</h3>
          <p class="text-gray-500">+964 66 2272387</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-md fade-in delay-100">
          <div class="text-3xl text-orange-500 mb-2">📍</div>
          <h3 class="font-semibold text-gray-700">Location</h3>
          <p class="text-gray-500">Pharmacy Complex, Erbil</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-md fade-in delay-200">
          <div class="text-3xl text-orange-500 mb-2">📧</div>
          <h3 class="font-semibold text-gray-700">Email</h3>
          <p class="text-gray-500">pharmacy@hmu.edu.krd</p>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
