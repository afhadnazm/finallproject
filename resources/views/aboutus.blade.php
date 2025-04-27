<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>About HMU</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <style>
    /* Animation Keyframes */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    
    @keyframes slideInUp {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    
    @keyframes slideInLeft {
      from { transform: translateX(-50px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
    
    @keyframes slideInRight {
      from { transform: translateX(50px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
    
    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    
    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }
    
    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    
    @keyframes glow {
      0%, 100% { box-shadow: 0 0 5px rgba(249, 115, 22, 0.5); }
      50% { box-shadow: 0 0 20px rgba(249, 115, 22, 0.8); }
    }

    @keyframes shimmer {
      0% {
        background-position: -200% 0;
      }
      100% {
        background-position: 200% 0;
      }
    }

    @keyframes ripple {
      0% {
        box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.3);
      }
      100% {
        box-shadow: 0 0 0 20px rgba(249, 115, 22, 0);
      }
    }

    @keyframes typewriter {
      from { width: 0; }
      to { width: 100%; }
    }

    @keyframes blink {
      50% { border-color: transparent; }
    }
    
    /* Animation Classes */
    .animate-fadeIn {
      animation: fadeIn 1s ease forwards;
    }
    
    .animate-slideInUp {
      animation: slideInUp 1s ease forwards;
    }
    
    .animate-slideInLeft {
      animation: slideInLeft 1s ease forwards;
    }
    
    .animate-slideInRight {
      animation: slideInRight 1s ease forwards;
    }
    
    .animate-pulse {
      animation: pulse 2s infinite;
    }
    
    .animate-float {
      animation: float 5s ease-in-out infinite;
    }
    
    .animate-bounce-slow {
      animation: bounce 4s ease-in-out infinite;
    }
    
    .animate-spin {
      animation: spin 8s linear infinite;
    }
    
    .animate-glow {
      animation: glow 2s ease-in-out infinite;
    }

    .animate-shimmer {
      background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0) 100%);
      background-size: 200% 100%;
      animation: shimmer 2s infinite;
    }

    .animate-ripple {
      animation: ripple 1.5s infinite;
    }

    .animate-typewriter {
      overflow: hidden;
      white-space: nowrap;
      border-right: 3px solid #f97316;
      animation: 
        typewriter 4s steps(40) 1s forwards,
        blink 0.5s step-end infinite alternate;
      width: 0;
    }
    
    /* Animation Delays */
    .delay-100 {
      animation-delay: 0.1s;
    }
    
    .delay-200 {
      animation-delay: 0.2s;
    }
    
    .delay-300 {
      animation-delay: 0.3s;
    }
    
    .delay-400 {
      animation-delay: 0.4s;
    }
    
    .delay-500 {
      animation-delay: 0.5s;
    }

    .delay-700 {
      animation-delay: 0.7s;
    }

    .delay-1000 {
      animation-delay: 1s;
    }
    
    /* Hover Effects */
    .hover-scale {
      transition: transform 0.3s ease;
    }
    
    .hover-scale:hover {
      transform: scale(1.05);
    }
    
    .hover-lift {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .hover-glow {
      transition: box-shadow 0.3s ease;
    }
    
    .hover-glow:hover {
      box-shadow: 0 0 15px rgba(249, 115, 22, 0.7);
    }

    .hover-rotate {
      transition: transform 0.5s ease;
    }

    .hover-rotate:hover {
      transform: rotate(5deg);
    }

    .hover-expand {
      transition: letter-spacing 0.3s ease;
    }

    .hover-expand:hover {
      letter-spacing: 1px;
    }
    
    /* Scroll Reveal */
    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: all 1s ease;
    }
    
    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Custom Styles */
    .text-shadow {
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    
    .gradient-text {
      background: linear-gradient(90deg, #f97316, #c2410c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    
    .card-3d {
      transition: transform 0.5s ease;
      transform-style: preserve-3d;
    }
    
    .card-3d:hover {
      transform: rotateY(10deg) rotateX(5deg);
    }
    
    /* Navbar dropdown animation */
    .dropdown-content {
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 180px;
      background-color: white;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      border-radius: 0.5rem;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
      transition: all 0.2s ease;
      z-index: 50;
      border-top: 2px solid #f97316;
    }
    
    .dropdown:hover .dropdown-content {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
    
    /* Scroll Progress Bar */
    .progress-container {
      width: 100%;
      height: 3px;
      background: transparent;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 100;
    }
    
    .progress-bar {
      height: 3px;
      background: linear-gradient(90deg, #f97316, #c2410c);
      width: 0%;
    }

    /* Enhanced Navigation */
    .nav-item {
      position: relative;
      padding: 0.5rem 0.75rem;
      transition: all 0.2s ease;
      font-weight: 500;
    }

    .nav-item:hover {
      color: #f97316;
    }

    .nav-item::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background-color: #f97316;
      transition: all 0.2s ease;
    }

    .nav-item:hover::after {
      width: 80%;
      left: 10%;
    }

    .glass-effect {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }
    
    /* Decorative elements */
    .circle-decoration {
      position: absolute;
      border-radius: 50%;
      z-index: -1;
      opacity: 0.5;
    }

    /* Timeline styles */
    .timeline-row {
      transition: all 0.3s ease;
    }
    
    .timeline-row:hover {
      background-color: rgba(249, 115, 22, 0.1);
    }

    /* Video container with glow */
    .video-container {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 30px rgba(249, 115, 22, 0.3);
      transition: all 0.5s ease;
    }

    .video-container:hover {
      box-shadow: 0 0 50px rgba(249, 115, 22, 0.5);
    }

    /* Animated border */
    .animated-border {
      position: relative;
    }

    .animated-border::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      border: 2px solid transparent;
      border-radius: 12px;
      animation: border-dance 8s linear infinite;
    }

    @keyframes border-dance {
      0% {
        border-color: rgba(249, 115, 22, 0.7);
        border-top-color: transparent;
        border-right-color: transparent;
      }
      25% {
        border-color: rgba(249, 115, 22, 0.7);
        border-right-color: transparent;
        border-bottom-color: transparent;
      }
      50% {
        border-color: rgba(249, 115, 22, 0.7);
        border-bottom-color: transparent;
        border-left-color: transparent;
      }
      75% {
        border-color: rgba(249, 115, 22, 0.7);
        border-left-color: transparent;
        border-top-color: transparent;
      }
      100% {
        border-color: rgba(249, 115, 22, 0.7);
        border-top-color: transparent;
        border-right-color: transparent;
      }
    }
  </style>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            orange: {
              50: '#fff7ed',
              100: '#ffedd5',
              200: '#fed7aa',
              300: '#fdba74',
              400: '#fb923c',
              500: '#f97316',
              600: '#ea580c',
              700: '#c2410c',
              800: '#9a3412',
              900: '#7c2d12',
              950: '#431407',
            },
          },
          fontFamily: {
            serif: ['Cambria', 'Georgia', 'serif'],
          },
        }
      }
    }
  </script>
</head>

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif">
  <!-- Scroll Progress Bar -->
  <div class="progress-container">
    <div class="progress-bar" id="progressBar"></div>
  </div>

  <!-- Decorative Elements -->
  <div class="circle-decoration bg-orange-200 w-64 h-64 top-40 -left-20 animate-float" style="animation-delay: 0s;"></div>
  <div class="circle-decoration bg-orange-100 w-96 h-96 top-96 -right-40 animate-float" style="animation-delay: 2s;"></div>
  <div class="circle-decoration bg-orange-50 w-48 h-48 bottom-40 left-1/4 animate-float" style="animation-delay: 1s;"></div>

  <!-- Navbar -->
  <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-10 animate-fadeIn glass-effect">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <div class="size-40 font-bold text-orange-600 py-6 hover-scale">
          <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo" class="animate-pulse">
        </div>

        <!-- Menu Items (Hidden on mobile) -->
        <div class="hidden md:flex space-x-6 text-xl font-bold relative mx-auto">
          <!-- Home Dropdown -->
          <div class="relative dropdown group">
            <a href="/" class="nav-item text-gray-600 hover:text-orange-600 flex items-center">
              HOME
              <svg class="w-5 h-5 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="dropdown-content">
              <a href="{{ url('/aboutus') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">About us</a>
              <a href="{{ url('/contactus') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Contact us</a>
            </div>
          </div>
          
          <!-- Other Links -->
          <div class="relative dropdown group">
            <a href="#" class="nav-item text-gray-600 hover:text-orange-600 flex items-center">
              DIVISONS
              <svg class="w-5 h-5 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="dropdown-content">
              <a href="{{ url('/universitycounsel') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">University Counsil</a>
              <a href="{{ url('/presidentoffice') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">President's Office</a>
              <a href="{{ url('/vission') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Vision and Mission</a>
              <a href="{{ url('/logo') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">University Logo</a>
            </div>
          </div>
          
          <div class="relative dropdown group">
            <a href="#" class="nav-item text-gray-600 hover:text-orange-600 flex items-center">
              COLLEGE
              <svg class="w-5 h-5 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="dropdown-content">
              <a href="{{ route('colleges.medicine') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">College of Medicine</a>
              <a href="{{ route('colleges.dentistry') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">College of Dentistry</a>
              <a href="{{ route('colleges.pharmacy') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">College of Pharmacy</a>
              <a href="{{ route('colleges.nursing') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">College of Nursing</a>
            </div>
          </div>

          <div class="relative dropdown group">
            <a href="#" class="nav-item text-gray-600 hover:text-orange-600 flex items-center">
              FEATURE
              <svg class="w-5 h-5 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="dropdown-content">
              <a href="{{ url('/library') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Library</a>
              <a href="{{ url('/confrance') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Confrances</a>
              <a href="{{ url('/relevantwebs') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Relevant Websites</a>
              <a href="{{ url('/acadimicrelations') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Academic Relations</a>
              <a href="{{ url('/acadimicprofile') }}" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Academicians Profile</a>
            </div>
          </div>

          <div class="relative dropdown group">
            <a href="" class="nav-item text-gray-600 hover:text-orange-600 flex items-center">
              SERVICE
              <svg class="w-5 h-5 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="dropdown-content">
              <a href="#" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">IT Services</a>
              <a href="#" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Documents</a>
              <a href="#" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">E-Managment</a>
            </div>
          </div>
          
          <div>
            <a href="#" class="nav-item text-gray-600 hover:text-orange-600 hover-expand">EVENTS</a>
          </div>
          
          <div class="relative dropdown group">
            <a href="#" class="nav-item text-gray-600 hover:text-orange-600 flex items-center">
              PORTAL
              <svg class="w-5 h-5 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="dropdown-content">
              <a href="/student_login" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Student Portal</a>
              <a href="/teacher_login" class="block py-2 text-gray-600 hover:text-orange-600 hover:bg-orange-50 px-4 whitespace-nowrap">Teacher Portal</a>
            </div>
          </div>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button id="nav-toggle" class="text-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 animate-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu (Initially Hidden) -->
      <div id="nav-content" class="hidden md:hidden animate-slideInUp">
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600">HOME</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600">DIVISIONS</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600">COLLEGE</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600">FEATURE</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600">SERVICE</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600">EVENTS</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600">PORTAL</a>
      </div>
    </div>
  </nav>

  <!-- Image and Text Container -->
  <div class="relative w-screen overflow-hidden pt-20">
    <div class="animate-fadeIn">
      <img src="{{ asset('storage/images/about.jpg') }}" alt="Below Navbar Image" class="w-full h-auto object-cover rounded-md hover-glow">
    </div>
    
    <!-- Overlay Text -->
    <div class="absolute inset-0 flex items-center justify-center text-white p-4 md:p-8 lg:p-12">
      <div class="max-w-2xl text-center">
        <h1 style="font-family: Cambria, Georgia, serif;" class="text-3xl md:text-5xl font-bold mb-4 text-center pt-24 animate-slideInUp text-shadow">
          About HMU
        </h1>
      </div>
    </div>
  </div>

  <section class="container p-8 md:p-16 md:px-24" data-aos="fade-up">
    <h1 class="text-orange-600 text-lg animate-pulse">HMU</h1>
    <h2 class="text-4xl md:text-5xl py-2 gradient-text animate-typewriter">Overview</h2>
    <p class="text-xl text-gray-600 mt-4" data-aos="fade-up" data-aos-delay="200">
      Hawler Medical University is located in the city of Erbil (Hawler) in Iraqi Kurdistan Region. Hawler Medical University has been established by the Council of Ministers of the Iraqi Kurdistan Regional Government in July 2005 and endorsed by the Council of Ministers of Iraqi Federal Government in March 2006. The university has been established to include in itself the five colleges that were belonging to Salahaddin University in Erbil (except College of Health Sciences). The colleges are: College of Medicine, College of Dentistry, College of Pharmacy, College of Nursing and College of Health Sciences.
    </p>
    <p class="text-xl text-gray-600 mt-4" data-aos="fade-up" data-aos-delay="300">
      The separation has come after a suggestion made by a number of academics from these colleges supported by the presidency of Salahaddin University as well as the Ministry of Health and the Ministry of Higher Education and Scientific Researches.
    </p>
    <p class="text-xl text-gray-600 mt-4" data-aos="fade-up" data-aos-delay="400">
      The overall aim of establishment of Hawler Medical University is to improve the medical education in the region as well as to have a better management of the mentioned colleges. This does not mean that the colleges are newly established, but the management structure is new while the oldest college which is the College of Medicine was founded in 1977.
    </p>
  </section>

  <section class="px-4 py-8" data-aos="zoom-in">
    <div class="flex justify-center">
      <div class="relative w-full max-w-7xl video-container animated-border" style="padding-top: 56.25%;">
        <iframe class="absolute top-0 left-0 w-full h-full rounded-lg" 
                src="https://www.youtube.com/embed/2O3dImGX4cQ" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
      </div>
    </div>
  </section>

  <section class="bg-white" data-aos="fade-up">
    <div class="container mx-auto my-10 p-6 bg-white rounded-lg shadow-lg hover-lift">
      <h2 class="text-2xl font-bold mb-4 gradient-text">Timeline of University History</h2>
      <table class="w-full border border-gray-200">
        <thead>
          <tr>
            <th class="text-left py-2 px-4 bg-orange-100 font-semibold">Date</th>
            <th class="text-left py-2 px-4 bg-orange-100 font-semibold">Event</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t border-gray-200 timeline-row" data-aos="fade-right" data-aos-delay="100">
            <td class="py-2 px-4 font-semibold">1977</td>
            <td class="py-2 px-4">The College of Medicine was established as part of the University of Sulaimaniyah, making it one of the oldest medical colleges in the region. Later, it became part of Salahaddin University.</td>
          </tr>
          <tr class="border-t border-gray-200 bg-gray-50 timeline-row" data-aos="fade-right" data-aos-delay="200">
            <td class="py-2 px-4 font-semibold">2005</td>
            <td class="py-2 px-4">Hawler Medical University was officially founded by the Kurdistan Regional Government's Council of Ministers. It brought together several medical colleges, previously part of Salahaddin University, including the Colleges of Medicine, Dentistry, Pharmacy, and Nursing.</td>
          </tr>
          <tr class="border-t border-gray-200 timeline-row" data-aos="fade-right" data-aos-delay="300">
            <td class="py-2 px-4 font-semibold">2009-2012</td>
            <td class="py-2 px-4">The university expanded its facilities and introduced new educational and research programs to strengthen its role in medical education.</td>
          </tr>
          <tr class="border-t border-gray-200 bg-gray-50 timeline-row" data-aos="fade-right" data-aos-delay="400">
            <td class="py-2 px-4 font-semibold">2011</td>
            <td class="py-2 px-4">Establishment of the Medical Research Center, which supports various research initiatives in the health and medical sciences.</td>
          </tr>
          <tr class="border-t border-gray-200 timeline-row" data-aos="fade-right" data-aos-delay="500">
            <td class="py-2 px-4 font-semibold">2015</td>
            <td class="py-2 px-4">The College of Health Sciences was added, further broadening the university's educational offerings in public health and clinical laboratory sciences.</td>
          </tr>
          <tr class="border-t border-gray-200 bg-gray-50 timeline-row" data-aos="fade-right" data-aos-delay="600">
            <td class="py-2 px-4 font-semibold">Present</td>
            <td class="py-2 px-4">HMU remains a leading medical university in the Kurdistan region, offering undergraduate and graduate programs in medicine, dentistry, pharmacy, and nursing. The university collaborates with international institutions, provides scholarships, and conducts medical research, aiming to elevate healthcare education in Iraq.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <footer class="bg-gray-900 text-gray-300 py-10 px-4 md:px-6 lg:px-12 animate-fadeIn">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Contact HMU Section -->
      <div class="animate-slideInUp delay-100">
        <h3 class="text-lg font-semibold text-white mb-4 gradient-text">Contact HMU</h3>
        <ul class="space-y-2">
          <li class="flex items-center hover-lift">
            <span class="mr-2 animate-pulse">✉️</span>
            <a href="mailto:info@hmu.edu.krd" class="hover:text-orange-500 transition-colors">info@hmu.edu.krd</a>
          </li>
          <li class="flex items-center hover-lift">
            <span class="mr-2 animate-pulse" style="animation-delay: 0.2s;">🌐</span>
            <a href="http://www.hmu.edu.krd" class="hover:text-orange-500 transition-colors">www.hmu.edu.krd</a>
          </li>
          <li class="hover-lift">Tel: +964 66 227 3384</li>
          <li class="hover-lift">Fax: +964 66 227 3382</li>
          <li class="flex items-start hover-lift">
            <span class="mr-2 animate-float">📍</span>
            <div>
              Iraq, Kurdistan Region,<br />
              Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
              P.O. Box 178
            </div>
          </li>
        </ul>
      </div>

      <!-- Opening Hours Section -->
      <div class="animate-slideInUp delay-300">
        <h3 class="text-lg font-semibold text-white mb-4 gradient-text">Opening Hours</h3>
        <p class="hover-lift">Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
        <p class="hover-lift">Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1 animate-pulse">Closed</span></p>
      </div>

      <!-- Web Traffic Section -->
      <div class="animate-slideInUp delay-500">
        <h3 class="text-lg font-semibold text-white mb-4 gradient-text">Web Traffic</h3>
        <ul class="space-y-1">
          <li class="hover-lift">👤 Today: <span class="text-gray-100 animate-pulse">2265</span></li>
          <li class="hover-lift">👤 Yesterday: <span class="text-gray-100 animate-pulse" style="animation-delay: 0.2s;">3898</span></li>
          <li class="hover-lift">👤 This Week: <span class="text-gray-100 animate-pulse" style="animation-delay: 0.4s;">12748</span></li>
          <li class="hover-lift">👤 This Month: <span class="text-gray-100 animate-pulse" style="animation-delay: 0.6s;">90849</span></li>
          <li class="hover-lift">👤 Total: <span class="text-gray-100 animate-pulse" style="animation-delay: 0.8s;">4394545</span></li>
        </ul>
        <hr class="my-4 border-gray-700" />
        <p class="text-center text-gray-100 text-xl font-bold animate-pulse">16</p>
        <p class="text-center text-sm text-gray-500">Online</p>
        <p class="text-center text-sm mt-2">21 November 2024</p>
      </div>

      <!-- QR Code Section -->
      <div class="animate-slideInUp delay-700">
        <h3 class="text-lg font-semibold text-white mb-4 gradient-text">QR Code</h3>
        <div class="relative w-32 h-32 mx-auto mb-2 animate-float">
          <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto hover-scale" />
          <div class="absolute inset-0 bg-orange-500 bg-opacity-20 rounded animate-pulse" style="animation-duration: 3s;"></div>
        </div>
        <p class="text-center text-gray-500 text-sm">www.nik-o-mat.de</p>
      </div>
    </div>
    <div class="text-center text-gray-500 text-sm mt-8 animate-fadeIn delay-1000">
      <p>Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="back-to-top" class="fixed bottom-6 right-6 bg-orange-500 text-white rounded-full p-3 shadow-lg hidden hover:bg-orange-600 transition duration-300 animate-bounce-slow z-50 animate-ripple">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
  </button>

  <!-- JavaScript -->
  <script>
    // Initialize AOS
    AOS.init({
      duration: 1000,
      once: true,
      offset: 100
    });
    
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('nav-content');
    
    if (mobileMenuButton && mobileMenu) {
      mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    }
    
    // Back to Top Button
    const backToTopButton = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.remove('hidden');
      } else {
        backToTopButton.classList.add('hidden');
      }
    });
    
    backToTopButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
    
    // Scroll Progress Bar
    window.onscroll = function() {
      let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      let scrolled = (winScroll / height) * 100;
      document.getElementById("progressBar").style.width = scrolled + "%";
      
      // Reveal animations on scroll
      var reveals = document.querySelectorAll(".reveal");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        }
      }
    };
  </script>
</body>

</html>