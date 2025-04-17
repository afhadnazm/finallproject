<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>College of Medicine</title>
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        @layer utilities {
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            .animate-fadeIn {
                animation: fadeIn 1.2s ease-out forwards;
            }

            @keyframes slideUp {
                from { transform: translateY(20px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            .animate-slideUp {
                animation: slideUp 1s ease-out forwards;
            }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-serif">
    <!-- Header Section -->
    <section class="bg-gradient-to-r from-orange-200 via-orange-100 to-orange-200 py-12 shadow animate-fadeIn">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-extrabold text-gray-800 tracking-tight">College of Medicine</h1>
            <p class="text-orange-600 mt-4 text-lg">Home &gt; Colleges &gt; College of Medicine</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white animate-slideUp">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center px-6">
            <div>
                <h2 class="text-4xl font-bold text-gray-700 mb-6">Welcome to the College of Medicine</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    We provide high-quality medical education and clinical training to future doctors, equipping them with knowledge, skills, and compassion to advance healthcare.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Our curriculum emphasizes clinical excellence, innovation in research, and service to the community.
                </p>
            </div>
            <div class="transform hover:scale-105 transition duration-500">
                <img src="{{ asset('storage/images/medicine.jpg') }}" alt="College of Medicine" class="rounded-xl shadow-2xl">
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Goals -->
    <section class="bg-gray-50 py-16 animate-fadeIn">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Mission, Vision & Goals</h2>
            <p class="text-gray-600 mb-10">Our guiding principles in education, research, and service.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-bold text-orange-600 mb-3">Mission</h3>
                    <p class="text-gray-600">Deliver innovative medical education promoting research and patient care for global health improvement.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-bold text-orange-600 mb-3">Vision</h3>
                    <p class="text-gray-600">Be a regional leader in medical education, research, and healthcare services.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-bold text-orange-600 mb-3">Goals</h3>
                    <ul class="text-gray-600 list-disc list-inside space-y-2 text-left">
                        <li>Train competent and compassionate professionals.</li>
                        <li>Advance research to improve patient care.</li>
                        <li>Promote health awareness and global outreach.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Departments Section -->
    <section class="py-16 bg-white animate-slideUp">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Departments</h2>
            <p class="text-gray-600 mb-10">Explore our specialized departments</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-r from-white to-orange-50 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-semibold text-orange-600 mb-2">Department of Anatomy</h3>
                    <p class="text-gray-600">Structural study of the human body through advanced labs and visual tools.</p>
                </div>
                <div class="bg-gradient-to-r from-white to-orange-50 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-semibold text-orange-600 mb-2">Department of Physiology</h3>
                    <p class="text-gray-600">Understanding human body functions to build strong clinical foundations.</p>
                </div>
                <div class="bg-gradient-to-r from-white to-orange-50 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-semibold text-orange-600 mb-2">Department of Surgery</h3>
                    <p class="text-gray-600">Hands-on training in surgical techniques using modern simulation tools.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Programs -->
    <section class="py-16 bg-gray-50 animate-fadeIn">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Academic Programs</h2>
            <p class="text-gray-600 mb-10">Educational pathways for future healthcare professionals</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">MBBS Program</h3>
                    <p class="text-gray-600">Comprehensive 6-year program preparing globally competent physicians.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Master’s in Internal Medicine</h3>
                    <p class="text-gray-600">Postgraduate clinical training focused on diagnostics and adult care.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transform hover:-translate-y-1 transition">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Continuing Medical Education (CME)</h3>
                    <p class="text-gray-600">Short-term programs for ongoing professional development and licensing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-16 bg-white animate-slideUp">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Contact Information</h2>
            <p class="text-gray-600 mb-10">Have questions? We're here to help!</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-md">
                    <div class="text-orange-600 text-3xl mb-3">📞</div>
                    <h3 class="font-semibold text-gray-700">Phone</h3>
                    <p class="text-gray-500">+964 66 2272386</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-md">
                    <div class="text-orange-600 text-3xl mb-3">📍</div>
                    <h3 class="font-semibold text-gray-700">Location</h3>
                    <p class="text-gray-500">Medical Education Building, Erbil</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-md">
                    <div class="text-orange-600 text-3xl mb-3">📧</div>
                    <h3 class="font-semibold text-gray-700">Email</h3>
                    <p class="text-gray-500">medicine@hmu.edu.krd</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
