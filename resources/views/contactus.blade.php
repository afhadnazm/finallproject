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
  @vite(['resources/css/app.css', 'resources/js/app.js'])
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

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif; max-width: 100%;
  overflow-x: hidden;">
  <!-- Scroll Progress Bar -->
  <div class="progress-container">
    <div class="progress-bar" id="progressBar"></div>
  </div>

  

  <!-- Navbar -->
  <nav class="bg-white backdrop-blur-md shadow-sm fixed top-0 left-0 w-full z-40 p-4 sm:p-6">
    <div class="container mx-auto px-2 sm:px-4">
      <div class="flex justify-between items-center h-12 sm:h-16">
        <!-- Logo -->
        <div class="flex items-center">
          <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo" class="h-8 w-8 sm:h-12 sm:w-12 md:h-16 md:w-16 rounded-md">
          <span class="ml-1 sm:ml-2 text-xs sm:text-sm md:text-base lg:text-lg font-semibold text-orange-600">Hawler Medical University</span>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex space-x-1">
          <!-- Home Dropdown -->
          <div class="relative group">
            <a href="/" class="px-2 py-2 text-sm xl:text-base text-gray-700 flex items-center hover:text-orange-600 transition-colors duration-200">
              HOME
              <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
              <div class="py-2 px-4">
                <a href="{{ url('/aboutus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">About us</a>
                <a href="{{ url('/contactus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Contact us</a>
              </div>
            </div>
          </div>

          <!-- Divisions Dropdown -->
          <div class="relative group">
            <a href="#" class="px-2 py-2 text-sm xl:text-base text-gray-700 flex items-center hover:text-orange-600 transition-colors duration-200">
              DIVISIONS
              <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
              <div class="py-2 px-4">
                <a href="{{ url('/universitycounsel') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">University Counsil</a>
                <a href="{{ url('/presidentoffice') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">President's Office</a>
                <a href="{{ url('/vission') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Vision and Mission</a>
                <a href="{{ url('/logo') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">University Logo</a>
              </div>
            </div>
          </div>

          <!-- College Dropdown -->
          <div class="relative group">
            <a href="#" class="px-2 py-2 text-sm xl:text-base text-gray-700 flex items-center hover:text-orange-600 transition-colors duration-200">
              COLLEGE
              <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
              <div class="py-2 px-4">
                <a href="{{ route('colleges.medicine') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Medicine</a>
                <a href="{{ route('colleges.pharmacy') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Pharmacy</a>
                <a href="{{ route('colleges.nursing') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Nursing</a>
              </div>
            </div>
          </div>

          <!-- Feature Dropdown -->
          <div class="relative group">
            <a href="#" class="px-2 py-2 text-sm xl:text-base text-gray-700 flex items-center hover:text-orange-600 transition-colors duration-200">
              FEATURE
              <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
              <div class="py-2 px-4">
                <a href="{{ url('/library') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Library</a>
                <a href="{{ url('/relevantwebs') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Relevant Websites</a>
                <a href="{{ url('/acadimicrelations') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Academic Relations</a>
                <a href="{{ url('/acadimicprofile') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Academicians Profile</a>
              </div>
            </div>
          </div>

          <!-- Service Dropdown -->
          <div class="relative group">
            <a href="#" class="px-2 py-2 text-sm xl:text-base text-gray-700 flex items-center hover:text-orange-600 transition-colors duration-200">
              SERVICE
              <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
              <div class="py-2 px-4">
                <a href="{{ url('/it') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">IT Services</a>
                <a href="{{ url('/documents') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Documents</a>
                <a href="{{ url('/e-management') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">E-Management</a>
              </div>
            </div>
          </div>

          <a href="{{ url('/events') }}" class="px-2 py-2 text-sm xl:text-base text-gray-700 hover:text-orange-600 transition-colors duration-200">EVENTS</a>

          <!-- Portal Dropdown -->
          <div class="relative group">
            <a href="#" class="px-2 py-2 text-sm xl:text-base text-gray-700 flex items-center hover:text-orange-600 transition-colors duration-200">
              PORTAL
              <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
              <div class="py-2 px-4">
                <a href="/student_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Student Portal</a>
                <a href="/teacher_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Teacher Portal</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <div class="lg:hidden">
          <button id="menu-btn" class="text-orange-500 focus:outline-none">
            <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-lg rounded-b-lg overflow-hidden">
        <div class="px-2 sm:px-4 py-2 space-y-1">
          <!-- Mobile Accordion Menu -->
          <div class="mobile-accordion">
            <button class="flex justify-between items-center w-full py-2 text-sm sm:text-base text-gray-700 hover:text-orange-600">
              <span>HOME</span>
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="hidden px-2 sm:px-4 py-2 bg-gray-50 rounded-lg">
              <a href="/" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Home</a>
              <a href="{{ url('/aboutus') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">About Us</a>
              <a href="{{ url('/contactus') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Contact Us</a>
            </div>
          </div>

          <div class="mobile-accordion">
            <button class="flex justify-between items-center w-full py-2 text-sm sm:text-base text-gray-700 hover:text-orange-600">
              <span>DIVISIONS</span>
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="hidden px-2 sm:px-4 py-2 bg-gray-50 rounded-lg">
              <a href="{{ url('/universitycounsel') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">University Council</a>
              <a href="{{ url('/presidentoffice') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">President's Office</a>
              <a href="{{ url('/vission') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Vision and Mission</a>
              <a href="{{ url('/logo') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">University Logo</a>
            </div>
          </div>

          <div class="mobile-accordion">
            <button class="flex justify-between items-center w-full py-2 text-sm sm:text-base text-gray-700 hover:text-orange-600">
              <span>COLLEGE</span>
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="hidden px-2 sm:px-4 py-2 bg-gray-50 rounded-lg">
              <a href="{{ route('colleges.medicine') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">College of Medicine</a>
              <a href="{{ route('colleges.pharmacy') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">College of Pharmacy</a>
              <a href="{{ route('colleges.nursing') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">College of Nursing</a>
            </div>
          </div>

          <div class="mobile-accordion">
            <button class="flex justify-between items-center w-full py-2 text-sm sm:text-base text-gray-700 hover:text-orange-600">
              <span>FEATURE</span>
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="hidden px-2 sm:px-4 py-2 bg-gray-50 rounded-lg">
              <a href="{{ url('/library') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Library</a>
              <a href="{{ url('/relevantwebs') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Relevant Websites</a>
              <a href="{{ url('/acadimicrelations') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Academic Relations</a>
              <a href="{{ url('/acadimicprofile') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Academicians Profile</a>
            </div>
          </div>

          <div class="mobile-accordion">
            <button class="flex justify-between items-center w-full py-2 text-sm sm:text-base text-gray-700 hover:text-orange-600">
              <span>SERVICE</span>
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="hidden px-2 sm:px-4 py-2 bg-gray-50 rounded-lg">
              <a href="{{ url('/it-service') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">IT Services</a>
              <a href="{{ url('/documents') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Documents</a>
              <a href="{{ url('/e-management') }}" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">E-Management</a>
            </div>
          </div>

          <a href="{{ url('/events') }}" class="block py-2 text-sm sm:text-base text-gray-700 hover:text-orange-600">EVENTS</a>

          <div class="mobile-accordion">
            <button class="flex justify-between items-center w-full py-2 text-sm sm:text-base text-gray-700 hover:text-orange-600">
              <span>PORTAL</span>
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="hidden px-2 sm:px-4 py-2 bg-gray-50 rounded-lg">
              <a href="/student_login" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Student Portal</a>
              <a href="/teacher_login" class="block py-1 text-xs sm:text-sm text-gray-600 hover:text-orange-600">Teacher Portal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <!-- Hero Section with Contact Us Header -->
 

  <!-- Main Content -->
  <section class="bg-gray-50 py-52">
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
  <script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

</body>

</html>