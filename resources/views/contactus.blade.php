<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Contact Us - HMU</title>
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

    @keyframes wave {
      0%, 100% { transform: rotate(0deg); }
      25% { transform: rotate(10deg); }
      75% { transform: rotate(-10deg); }
    }

    @keyframes heartbeat {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.1); }
    }

    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      75% { transform: translateX(5px); }
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

    .animate-wave {
      animation: wave 2s ease-in-out infinite;
      transform-origin: bottom center;
    }

    .animate-heartbeat {
      animation: heartbeat 1.5s ease-in-out infinite;
    }

    .animate-shake {
      animation: shake 0.5s ease-in-out infinite;
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

    .hover-shake:hover {
      animation: shake 0.5s ease-in-out;
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

    /* Form input focus effect */
    .input-focus-effect {
      transition: all 0.3s ease;
      border: 1px solid #e5e7eb;
    }

    .input-focus-effect:focus {
      border-color: #f97316;
      box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.2);
      outline: none;
    }

    /* Contact card hover effect */
    .contact-card {
      transition: all 0.3s ease;
      overflow: hidden;
      position: relative;
    }

    .contact-card::before {
      content: '';
      position: absolute;
      top: -100%;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(249, 115, 22, 0.2) 0%, transparent 50%, transparent 100%);
      transition: all 0.6s ease;
    }

    .contact-card:hover::before {
      top: 0;
      left: 0;
    }

    .contact-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Map container with animated border */
    .map-container {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
    }

    .map-container::after {
      content: '';
      position: absolute;
      inset: 0;
      border: 2px solid transparent;
      border-radius: 12px;
      background: linear-gradient(45deg, #f97316, transparent, #f97316) border-box;
      -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      animation: border-dance 8s linear infinite;
    }

    @keyframes border-dance {
      0% { background-position: 0% 0%; }
      100% { background-position: 400% 0%; }
    }

    /* Hero section styles */
    .hero-section {
      position: relative;
      background-color: #f8f9fa;
      overflow: hidden;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.1));
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
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

  <!-- Hero Section with Contact Us Header -->
  <div class="hero-section bg-gradient-to-r from-orange-100 to-orange-50 pt-24">
    <div class="container mx-auto px-4 py-16">
      <div class="text-center">
        <h1 class="text-5xl font-bold mb-4 gradient-text animate-fadeIn">Contact Us</h1>
        <p class="text-orange-500 mt-2 animate-fadeIn delay-300">
          <span class="hover-scale inline-block">Home</span> 
          <span class="inline-block mx-2">></span> 
          <span class="hover-scale inline-block">Contact us</span>
        </p>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <section class="bg-gray-50 py-10">
    <div class="container mx-auto">
      <!-- Main Content -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 px-4">
        <!-- Map Section -->
        <div data-aos="fade-right" data-aos-delay="200">
          <h2 class="text-2xl font-semibold text-gray-700 mb-4 gradient-text">
            Find Our Location
          </h2>
          <div class="map-container hover-lift">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.4056322154425!2d-122.4074365!3d37.7841124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064c1b3c51f%3A0x91ec4736003580db!2sRincon%20Center!5e0!3m2!1sen!2sus!4v1635741777447!5m2!1sen!2sus"
              class="w-full h-64 rounded-md border border-gray-300 shadow-sm"
              allowfullscreen=""
              loading="lazy">
            </iframe>
          </div>
        </div>
  
        <!-- Form Section -->
        <div data-aos="fade-left" data-aos-delay="300">
          <h2 class="text-2xl font-semibold text-gray-700 mb-4 gradient-text">
            Interested in discussing?
          </h2>
          <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="animate-slideInUp" style="animation-delay: 0.1s;">
              <input
                type="text"
                placeholder="Enter Name"
                class="border border-gray-300 p-2 rounded-md w-full input-focus-effect hover-scale">
            </div>
            <div class="animate-slideInUp" style="animation-delay: 0.2s;">
              <input
                type="email"
                placeholder="Enter Email"
                class="border border-gray-300 p-2 rounded-md w-full input-focus-effect hover-scale">
            </div>
            <div class="animate-slideInUp" style="animation-delay: 0.3s;">
              <input
                type="text"
                placeholder="Enter Subject"
                class="border border-gray-300 p-2 rounded-md w-full input-focus-effect hover-scale">
            </div>
            <div class="animate-slideInUp" style="animation-delay: 0.4s;">
              <input
                type="tel"
                placeholder="Enter Phone"
                class="border border-gray-300 p-2 rounded-md w-full input-focus-effect hover-scale">
            </div>
            <div class="col-span-2 animate-slideInUp" style="animation-delay: 0.5s;">
              <textarea
                placeholder="Enter Message"
                class="border border-gray-300 p-2 rounded-md w-full h-32 input-focus-effect hover-scale"></textarea>
            </div>
            <div class="col-span-2 flex justify-end space-x-4 animate-slideInUp" style="animation-delay: 0.6s;">
              <button
                type="reset"
                class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300 hover-scale transition-all">
                Reset
              </button>
              <button
                type="submit"
                class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 hover-scale transition-all animate-pulse">
                Send your message
              </button>
            </div>
          </form>
        </div>
      </div>
  
      <!-- Contact Info -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-10 px-4">
        <!-- Call Us -->
        <div class="text-center bg-white p-4 rounded-md shadow-md contact-card" data-aos="zoom-in" data-aos-delay="100">
          <div class="text-orange-500 text-3xl mb-2 animate-wave">
            📞
          </div>
          <h3 class="font-semibold text-gray-700">Call Us</h3>
          <p class="text-gray-500">Phone: +964 66 2272384</p>
        </div>
        <!-- Address -->
        <div class="text-center bg-white p-4 rounded-md shadow-md contact-card" data-aos="zoom-in" data-aos-delay="200">
          <div class="text-orange-500 text-3xl mb-2 animate-float">
            📍
          </div>
          <h3 class="font-semibold text-gray-700">Address</h3>
          <p class="text-gray-500">100 m Street, Inside Rizgary Teaching Hospital, Erbil</p>
        </div>
        <!-- Email -->
        <div class="text-center bg-white p-4 rounded-md shadow-md contact-card" data-aos="zoom-in" data-aos-delay="300">
          <div class="text-orange-500 text-3xl mb-2 animate-pulse">
            📧
          </div>
          <h3 class="font-semibold text-gray-700">Email</h3>
          <p class="text-gray-500">info@hmu.edu.krd</p>
        </div>
        <!-- P.O. Box -->
        <div class="text-center bg-white p-4 rounded-md shadow-md contact-card" data-aos="zoom-in" data-aos-delay="400">
          <div class="text-orange-500 text-3xl mb-2 animate-bounce-slow">
            📦
          </div>
          <h3 class="font-semibold text-gray-700">P.O. Box</h3>
          <p class="text-gray-500">178</p>
        </div>
      </div>
    </div>
  </section>

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
    };
  </script>
</body>

</html>