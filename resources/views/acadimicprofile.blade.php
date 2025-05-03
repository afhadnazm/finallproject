<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Council</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        /* Custom animation classes */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body class="bg-white text-gray-900 scroll-smooth" style="font-family: Cambria, Georgia, serif; max-width: 100%; overflow-x: hidden;">

<!-- Navbar -->
<nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-10 animate-fadeIn glass-effect p-6">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center" data-aos="fade-right">
                <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo" class="h-14 w-16.5 rounded-md">
                <span class="ml-2 text-lg font-semibold text-orange-600">Hawler Medical University</span>
                </div>

                <!-- Menu Items (Hidden on mobile) -->
                <div class="hidden md:flex space-x-1">
                    <!-- Home Dropdown -->
                    <div class="relative group">
                        <a href="/" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            HOME
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/aboutus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">About us</a>
                                <a href="{{ url('/contactus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Contact us</a>
                            </div>
                        </div>
                    </div>

                    <!-- Other Links -->
                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            DIVISIONS
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/universitycounsel') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">University Counsil</a>
                                <a href="{{ url('/presidentoffice') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">President's Office</a>
                                <a href="{{ url('/vission') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Vision and Mission</a>
                                <a href="{{ url('/logo') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">University Logo</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            COLLEGE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ route('colleges.medicine') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Medicine</a>
                                
                                <a href="{{ route('colleges.pharmacy') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Pharmacy</a>
                                <a href="{{ route('colleges.nursing') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Nursing</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            FEATURE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/library') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Library</a>
              
                                <a href="{{ url('/relevantwebs') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Relevant Websites</a>
                                <a href="{{ url('/acadimicrelations') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Academic Relations</a>
                                <a href="{{ url('/acadimicprofile') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Academicians Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            SERVICE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/it') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">IT Services</a>
                                <a href="{{ url('/documents') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Documents</a>
                                <a href="{{ url('/e-management') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">E-Management</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/events') }}" class="px-3 py-2 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">EVENTS</a>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            PORTAL
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="/student_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Student Portal</a>
                                <a href="/teacher_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Teacher Portal</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hamburger Button (Mobile) -->
                <div class="md:hidden flex items-center">
                    <button id="menu-btn" class="text-orange-500 focus:outline-none transition-transform duration-300 hover:scale-110">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg px-4 py-4 space-y-2">
                <a href="/" class="block text-gray-700 py-2 hover:text-orange-600 transition-colors duration-200">Home</a>
                <a href="{{ url('/aboutus') }}" class="block text-gray-700 py-2 hover:text-orange-600 transition-colors duration-200">About Us</a>
                <a href="{{ url('/contactus') }}" class="block text-gray-700 py-2 hover:text-orange-600 transition-colors duration-200">Contact Us</a>
                <a href="{{ url('/events') }}" class="block text-gray-700 py-2 hover:text-orange-600 transition-colors duration-200">Events</a>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Divisions
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/universitycounsel') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">University Council</a>
                        <a href="{{ url('/presidentoffice') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">President's Office</a>
                        <a href="{{ url('/vission') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Vision and Mission</a>
                        <a href="{{ url('/logo') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">University Logo</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        College
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ route('colleges.medicine') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Medicine</a>
                   
                        <a href="{{ route('colleges.pharmacy') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Pharmacy</a>
                        <a href="{{ route('colleges.nursing') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Nursing</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Feature
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/library') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Library</a>
                      
                        <a href="{{ url('/relevantwebs') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Relevant Websites</a>
                        <a href="{{ url('/acadimicrelations') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Academic Relations</a>
                        <a href="{{ url('/acadimicprofile') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Academicians Profile</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Service
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/it') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">IT Services</a>
                        <a href="{{ url('/documents') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Documents</a>
                        <a href="{{ url('/e-management') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">E-Management</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Portal
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="/student_login" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Student Portal</a>
                        <a href="/teacher_login" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Teacher Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<!-- Header -->
<div class="py-52 container mx-auto fade-in">
<div class="text-center mb-8" id="all" data-aos="fade-up">
  <h1 class="text-4xl font-bold text-gray-800 mb-2">Academicians Profile</h1>
  <div class="flex justify-center gap-4 text-sm text-gray-600" data-aos="fade-up" data-aos-delay="100">
    <span>BLOG</span>
    <span>|</span>
    <span>HMU</span>
    <span>|</span>
    <span>25 APRIL 2021</span>
  </div>
</div>

<!-- Filter Buttons -->
<div class="flex flex-wrap justify-center gap-2 mb-6" data-aos="fade-up" data-aos-delay="150">
  <a href="#all" class="bg-orange-300 text-white px-4 py-2 rounded hover:bg-orange-500 transition-colors duration-300 transform hover:scale-105">All</a>
  <a href="#college-medicine" class="bg-orange-300 text-white px-4 py-2 rounded hover:bg-orange-500 transition-colors duration-300 transform hover:scale-105">College of Medicine</a>
  <a href="#college-dentistry" class="bg-orange-300 text-white px-4 py-2 rounded hover:bg-orange-500 transition-colors duration-300 transform hover:scale-105">College of Dentistry</a>
  <a href="#college-pharmacy" class="bg-orange-300 text-white px-4 py-2 rounded hover:bg-orange-500 transition-colors duration-300 transform hover:scale-105">College of Pharmacy</a>
  <a href="#college-nursing" class="bg-orange-300 text-white px-4 py-2 rounded hover:bg-orange-500 transition-colors duration-300 transform hover:scale-105">College of Nursing</a>
  <a href="#college-health-sciences" class="bg-orange-300 text-white px-4 py-2 rounded hover:bg-orange-500 transition-colors duration-300 transform hover:scale-105">College of Health Sciences</a>
</div>

<!-- Search Bar -->
<div class="flex justify-center mb-8" data-aos="fade-up" data-aos-delay="200">
  <input type="text" placeholder="Search..." class="w-1/2 px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent transition-all duration-300">
</div>

<!-- Content Sections -->
<div class="space-y-16">

  <!-- Dean Section -->
  <section id="dean" data-aos="fade-up">
  <h2 class="text-2xl font-semibold mb-6">Dean</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <!-- Card -->
    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in">
      <img src="{{ asset('storage/images/dashty.png') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Dashty Abbas Tawfeeq</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">
          Department of Medicine<br>
          College of Medicine
        </p>
      </div>
    </div>

    <!-- Repeat for others -->
    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('storage/images/bassam.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Bassam Karem Amin</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">
        Department of Conservative Dentistry<br>
        College of Dentistry
        </p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="150">
      <img src="{{ asset('storage/images/huner.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">
        Huner kamal omer</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">
        Department of Phrmaceutics<br>
        College of Pharmacy
        </p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('storage/images/vian.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Vian Afan Naqshbandi</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">
          Department of  Nursing<br>
          College of  Nursing
        </p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="250">
      <img src="{{ asset('storage/images/hamida.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">
        Hamdia Mirkhan Ahmed</h3>
        <p class="text-sm text-gray-600">Professor</p>
        <p class="text-sm text-gray-500">
        Department of Physiotherapy<br>
        College of Health Sciences
        </p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="300">
      <img src="{{ asset('storage/images/aza.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Aza Bahadeen Taha</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">
          Medical Research Center
        </p>
      </div>
    </div>

  </div>
</section>


  <!-- Head of Department Section -->
  <section id="head-department" data-aos="fade-up">
  <h2 class="text-2xl font-semibold mb-6">Head Of Department</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Card 1 -->
    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in">
      <img src="{{ asset('storage/images/ali.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Ali Hussain ASTORKI</h3>
        <p class="text-sm text-gray-600">Lecturer</p>
        <p class="text-sm text-gray-500">
          Department of Physiotherapy<br>
          College of Health Sciences
        </p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('storage/images/katan.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">
        Katan Sabir Ali</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">
        Department of Medical <br> Microbiology<br>
        College of Health Sciences
        </p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="150">
      <img src="{{ asset('storage/images/rundk.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">
        Rundk Ahmad Hwaiz</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">
        Department of Nutrition and Dietetics
        <br>
          College of Health Sciences
        </p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('storage/images/sangar.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Sangar Muhammad AHMED</h3>
        <p class="text-sm text-gray-600">Lecturer</p>
        <p class="text-sm text-gray-500">
        Department of Public Health<br>
          College of Health Sciences
        </p>
      </div>
    </div>

  </div>
</section>


  <!-- College of Medicine Section -->
  <section id="college-medicine" data-aos="fade-up">
  <h2 class="text-2xl font-semibold mb-6">College of Medicine</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in">
      <img src="{{ asset('storage/images/dashty.png') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Dashty Abbas Tawfeeq</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">Department of Medicine<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="50">
      <img src="{{ asset('storage/images/abbas.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Abbas Abdulqader Ahmed</h3>
        <p class="text-sm text-gray-600">Professor</p>
        <p class="text-sm text-gray-500">Department of Pediatrics<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('storage/images/abdulkadr.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">
        Abdulkadr Muhammed Sleman Alany</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">Department of  Surgery<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="150">
      <img src="{{ asset('storage/images/abdulkareem.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">
        Abdulkareem Abdulwahhab Abdulkareem</h3>
        <p class="text-sm text-gray-600">Professor</p>
        <p class="text-sm text-gray-500">Department of Medicine<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('storage/images/abdulkhaliq.png') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Abdulkhaliq Kerim Emin</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">Department of Surgery<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="250">
      <img src="{{ asset('storage/images/afrah.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">
        Afrah Hameed Sultan</h3>
        <p class="text-sm text-gray-600">Assistant Professor</p>
        <p class="text-sm text-gray-500">Department of Basic Sciences<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="300">
      <img src="{{ asset('storage/images/ala.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Ala Omer Salih</h3>
        <p class="text-sm text-gray-600">Lecturer</p>
        <p class="text-sm text-gray-500">Department of Surgery<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="350">
      <img src="{{ asset('storage/images/aras.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Aras Raafiq Abdullah</h3>
        <p class="text-sm text-gray-600">Lecturer</p>
        <p class="text-sm text-gray-500">Department of Surgery<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="400">
      <img src="{{ asset('storage/images/avin.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">
        Avin Sadiq Jamil</h3>
        <p class="text-sm text-gray-600">Lecturer</p>
        <p class="text-sm text-gray-500">Department of Obstetrics and Gynecology<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="450">
      <img src="{{ asset('storage/images/bestun.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Bestun Omer Saleh</h3>
        <p class="text-sm text-gray-600">Lecturer</p>
        <p class="text-sm text-gray-500">Department of Surgery<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="500">
      <img src="{{ asset('storage/images/chro.jpeg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Chro Yaseen Qader</h3>
        <p class="text-sm text-gray-600">Lecturer</p>
        <p class="text-sm text-gray-500">Department of Basic Sciences<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="550">
      <img src="{{ asset('storage/images/hast.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Hast Karim Ali</h3>
        <p class="text-sm text-gray-600">Lecturer
        </p>
        <p class="text-sm text-gray-500">Department of Surgery<br>College of Medicine</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center space-x-4 card-hover" data-aos="zoom-in" data-aos-delay="600">
      <img src="{{ asset('storage/images/haval.jpg') }}" alt="Profile" class="w-24 h-24 object-cover rounded-lg">
      <div>
        <h3 class="text-lg font-semibold text-gray-800">Haval Sabr</h3>
        <p class="text-sm text-gray-600">Lecturer</p>
        <p class="text-sm text-gray-500">Department of Surgery<br>College of Medicine</p>
      </div>
    </div>

  </div>
</section>

  <!-- College of Dentistry Section -->
  <section id="college-dentistry" data-aos="fade-up">
  <h2 class="text-2xl font-semibold mb-6">College of Dentistry</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in">
      <img src="{{ asset('storage/images/bassam.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Bassam Kareem Amin</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Conservative Dentistry <br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="50">
      <img src="{{ asset('storage/images/ahmed.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ahmed Hasan Ahmed</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Conservative Dentistry <br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('storage/images/alaa.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Alaa Mahmud Mustafa</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Pedodontics, Orthodontics and Preventive Dentistry (POP)<br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="150">
      <img src="{{ asset('storage/images/araz.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Araz Muhammad Yousif</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Basic Sciences <br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('storage/images/asma.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Asmaa Qasim Rahman</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Oral Diagnosis and Oral Medicine<br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="250">
      <img src="{{ asset('storage/images/aso.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">ASO AKO MUHAMMAD</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Conservative Dentistry <br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="300">
      <img src="{{ asset('storage/images/aveen.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">
        aveen ageel jalal</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Periodontology<br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="350">
      <img src="{{ asset('storage/images/barzan.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Barzan Abdulwahab MirzaOmer</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Periodontology <br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="400">
      <img src="{{ asset('storage/images/fahd.jpeg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">
        Fahd Sudad Ikram</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Prosthodontics<br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="450">
      <img src="{{ asset('storage/images/nabeel.jpeg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Nabeel Seryoka Hanna Martani</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Conservative Dentistry <br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="500">
      <img src="{{ asset('storage/images/nyaz.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Niaz Salih Abdulla</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Basic Sciences <br> Collage of Dentistry</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="550">
      <img src="{{ asset('storage/images/rezhaw.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">
        Rezhaw Omar Hasan</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Oral Diagnosis and Oral Medicine <br> College of Pharmacy <br> Collage of Dentistry</p>
      </div>
    </div>

  </div>
</section>


  <!-- College of Pharmacy Section -->
  <section id="college-pharmacy" data-aos="fade-up">
    <h2 class="text-2xl font-semibold mb-4">College of Pharmacy</h2>
   
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in">
      <img src="{{ asset('storage/images/huner.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Huner kamal omer</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Phrmaceutics<br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="50">
      <img src="{{ asset('storage/images/2abas.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Abbas Mohamed Faraj</h3>
        <p class="text-sm text-gray-500">Professor</p>
        <p class="text-sm text-gray-400">Department of Clinical Analysis<br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('storage/images/adnan3.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Adnan Burhan Qader</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Phrmaceutics <br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="150">
      <img src="{{ asset('storage/images/anjam.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Anjam Hama Abdullah</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Phrmaceutics <br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('storage/images/ansam.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ansam Naji Alhassani</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Pharmacolog<br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="250">
      <img src="{{ asset('storage/images/aram.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">
        Aram Sardar Ibrahim</h3>
        <p class="text-sm text-gray-500">Assistant Lecturer</p>
        <p class="text-sm text-gray-400">Department of Clinical Pharmacy<br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="300">
      <img src="{{ asset('storage/images/asmaa.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Asmaa Awni Haydar</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Pharmacology<br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="350">
      <img src="{{ asset('storage/images/azheen.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Azheen Sedeeq Ahmed</h3>
        <p class="text-sm text-gray-500">Assistant  Lecturer</p>
        <p class="text-sm text-gray-400">Department of Clinical Analysis <br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="400">
      <img src="{{ asset('storage/images/bano.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Bano Anwar Othman</h3>
        <p class="text-sm text-gray-500">Assistant  Lecturer</p>
        <p class="text-sm text-gray-400">Department of Clinical Analysis <br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="450">
      <img src="{{ asset('storage/images/belan.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Belan Rahman Mustafa</h3>
        <p class="text-sm text-gray-500">Assistant Lecturer</p>
        <p class="text-sm text-gray-400">Department of Clinical Pharmacy<br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="500">
      <img src="{{ asset('storage/images/bashdar.jpeg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Bashdar Mahmud Hussen/h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Clinical Analysis<br> College of Pharmacy</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="550">
      <img src="{{ asset('storage/images/bootan.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Bootan Abdulqader Salih</h3>
        <p class="text-sm text-gray-500">Assistant Lecturer <br> College of Nursing</p>
        <p class="text-sm text-gray-400">Department of Clinical Pharmacy<br> College of Pharmacy</p>
      </div>
    </div>

  </div>
  </section>

  <!-- College of Nursing Section -->
  <section id="college-nursing" data-aos="fade-up">
    <h2 class="text-2xl font-semibold mb-4">College of Nursing</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in">
      <img src="{{ asset('storage/images/vian2.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Vian Afan Naqshbandi</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of  Nursing <br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="50">
      <img src="{{ asset('storage/images/abuzed.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">
        Abuzed Saber Kareem</h3>
        <p class="text-sm text-gray-500">Assistant Lecturer</p>
        <p class="text-sm text-gray-400">Department of  Nursing <br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('storage/images/adnan2.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Adnan Rasheed Aziz</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="150">
      <img src="{{ asset('storage/images/ahmed2.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ahmed Naif Ali</h3>
        <p class="text-sm text-gray-500">Assistant Lecturer
        </p>
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('storage/images/ahmed3.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ahmed Ali Rasool</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="250">
      <img src="{{ asset('storage/images/ali2.jpeg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ali Taher Mohammedameen</h3>
        <p class="text-sm text-gray-500">Assistant Lecturer</p>
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="300">
      <img src="{{ asset('storage/images/amanj2.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Amanj Yassin Hamad Amin</h3>
        <p class="text-sm text-gray-500">Assistant Lecturer</p>
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="350">
      <img src="{{ asset('storage/images/ammar.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ammar AbdulJabbar Mohamed</h3>
        <p class="text-sm text-gray-500">Assistant Lecturer</p>
        <p class="text-sm text-gray-400">Department of Nursing <br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="400">
      <img src="{{ asset('storage/images/awaz.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Awaz Aziz Saeed</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="450">
      <img src="{{ asset('storage/images/azheen2.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Azheen Muhammed Rasul</h3>
        
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="500">
      <img src="{{ asset('storage/images/azzadin.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Azzadin Kamal Mahmod/h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="550">
      <img src="{{ asset('storage/images/bahjat.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Bahjat Ahmed Mohammad</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Nursing<br> College of Nursing</p>
      </div>
    </div>

  </div>
  </section>

  <!-- College of Health Sciences Section -->
  <section id="college-health-sciences" data-aos="fade-up">
    <h2 class="text-2xl font-semibold mb-4">College of Health Sciences</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in">
      <img src="{{ asset('storage/images/hamida2.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Hamdia Mirkhan Ahmed</h3>
        <p class="text-sm text-gray-500">Professor</p>
        <p class="text-sm text-gray-400">Department of Conservative Dentistry <br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="50">
      <img src="{{ asset('storage/images/ali.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ali Hussein ASTOKORKI</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of CPhysiotherapy <br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('storage/images/katan.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Katan Sabir Ali</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Medical Microbiology<br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="150">
      <img src="{{ asset('storage/images/rundk.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Rundk Ahmad Hwaiz</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Nutrition and Dietetics <br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('storage/images/sangar.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Sangar Muhammad AHMED</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Public Health <br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="250">
      <img src="{{ asset('storage/images/ahang2.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ahang Hasan Mawlood</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of  Medical Microbiology <br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="300">
      <img src="{{ asset('storage/images/ahmad.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Ahmed Akil</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of  Medical Microbiology <br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="350">
      <img src="{{ asset('storage/images/alla.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Alla'a Miyasar Ahmed</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Medical Microbiology<br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="400">
      <img src="{{ asset('storage/images/amani.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Amani Layth Alsagheer</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Clinical Biochemistry <br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="450">
      <img src="{{ asset('storage/images/amer.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Amer Ali Khaleel</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of  Medical Microbiology <br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="500">
      <img src="{{ asset('storage/images/dler.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Dler Qader Gallaly</h3>
        <p class="text-sm text-gray-500">Assistant Professor</p>
        <p class="text-sm text-gray-400">Department of Physiotherapy<br>College of Health Sciences</p>
      </div>
    </div>

    <div class="flex bg-white rounded-xl shadow p-4 items-center card-hover" data-aos="zoom-in" data-aos-delay="550">
      <img src="{{ asset('storage/images/hangaw.jpg') }}" class="w-24 h-24 rounded-lg object-cover mr-4" alt="Profile">
      <div>
        <h3 class="text-lg font-semibold">Hangaw Omar Haji</h3>
        <p class="text-sm text-gray-500">Lecturer</p>
        <p class="text-sm text-gray-400">Department of Clinical Biochemistry<br>College of Health Sciences</p>
      </div>
    </div>

  </div>
  </section>

</div>

</div>

<section class="w-full fade-in">
  <footer class="bg-gray-900 text-gray-300 py-10 px-4 md:px-6 lg:px-12" data-aos="fade-up">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Contact HMU Section -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4">Contact HMU</h3>
        <ul class="space-y-2">
          <li class="flex items-center">
            <span class="mr-2">✉️</span>
            <a href="mailto:info@hmu.edu.krd" class="hover:text-orange-500 transition-colors duration-300">info@hmu.edu.krd</a>
          </li>
          <li class="flex items-center">
            <span class="mr-2">🌐</span>
            <a href="http://www.hmu.edu.krd" class="hover:text-orange-500 transition-colors duration-300">www.hmu.edu.krd</a>
          </li>
          <li>Tel: +964 66 227 3384</li>
          <li>Fax: +964 66 227 3382</li>
          <li class="flex items-start">
            <span class="mr-2">📍</span>
            Iraq, Kurdistan Region,<br />
            Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
            P.O. Box 178
          </li>
        </ul>
      </div>

      <!-- Opening Hours Section -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4">Opening Hours</h3>
        <p>Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
        <p>Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1 transition-colors duration-300">Closed</span></p>
      </div>

      <!-- Web Traffic Section -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4">Web Traffic</h3>
        <ul class="space-y-1">
          <li>👤 Today: <span class="text-gray-100">2265</span></li>
          <li>👤 Yesterday: <span class="text-gray-100">3898</span></li>
          <li>👤 This Week: <span class="text-gray-100">12748</span></li>
          <li>👤 This Month: <span class="text-gray-100">90849</span></li>
          <li>👤 Total: <span class="text-gray-100">4394545</span></li>
        </ul>
        <hr class="my-4 border-gray-700" />
        <p class="text-center text-gray-100 text-xl font-bold">16</p>
        <p class="text-center text-sm text-gray-500">Online</p>
        <p class="text-center text-sm mt-2">21 November 2024</p>
      </div>

      <!-- QR Code Section -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4">QR Code</h3>
        <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto mb-2 rounded-lg shadow-md transition-transform duration-300 hover:scale-105" />
        <p class="text-center text-gray-500 text-sm">www.nik-o-mat.de</p>
      </div>
    </div>
    <div class="text-center text-gray-500 text-sm mt-8">
      <p>Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
    </div>
  </footer>
</section>

<script>
    // Initialize AOS animation library
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: false,
        mirror: true
    });

    // Mobile menu toggle
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Mobile accordion functionality
    const accordionButtons = document.querySelectorAll('.mobile-accordion button');
    accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');
            
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

</body>
</html>