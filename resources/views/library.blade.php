<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Library - Hawler Medical University</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        
        .animate-bounce {
            animation: bounce 4s ease-in-out infinite;
        }
        
        .animate-spin {
            animation: spin 8s linear infinite;
        }
        
        .animate-glow {
            animation: glow 2s ease-in-out infinite;
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
        
        /* Library specific styles */
        .library-link {
            color: #3b82f6;
            transition: all 0.2s ease;
        }
        
        .library-link:hover {
            color: #f97316;
            text-decoration: underline;
        }
        
        .library-section {
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .library-section:last-child {
            border-bottom: none;
        }
        
        .library-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }
        
        .library-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transform: translateY(-5px);
        }
        
        /* Decorative elements */
        .circle-decoration {
            position: absolute;
            border-radius: 50%;
            z-index: -1;
            opacity: 0.5;
        }
        
        .animate-bounce-slow {
            animation: bounce 4s ease-in-out infinite;
        }
    </style>
</head>

<body class="" style="font-family: Cambria, Georgia, serif; max-width: 100%;
  overflow-x: hidden;">
    <!-- Scroll Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Decorative Elements -->
  

    <!-- Simplified Navbar -->
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


    <!-- Header Section - Updated to match the example -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 pt-28 bg-white">
        <div class="bg-white py-10 px-6 shadow-lg rounded-lg" data-aos="fade-up">
            <!-- Title -->
            <h1 class="text-4xl font-bold text-center text-gray-900 gradient-text">University Library</h1>

            <!-- Separator Line -->
            <div class="w-full max-w-4xl mx-auto border-t border-gray-200 mt-4 mb-2"></div>

            <!-- Metadata -->
            <div class="flex justify-center items-center space-x-4 text-gray-600 text-sm mb-4">
                <div class="flex items-center space-x-1 animate-fadeIn delay-100">
                    <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 3a2 2 0 00-2 2v14l4-4h11a2 2 0 002-2V5a2 2 0 00-2-2H5z"/>
                    </svg>
                    <span>PRESIDENCY</span>
                </div>
                <div class="flex items-center space-x-1 animate-fadeIn delay-200">
                    <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2zm0 16H5V9h14v11z"/>
                    </svg>
                    <span>18 OCTOBER 2020</span>
                </div>
               
            </div>

            <!-- Section Title -->
         
        </div> </div>

    <!-- Main Content -->
    <main class="container mx-auto pt-12 pb-12 px-4">
        <!-- Library Content -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 animate-slideInUp">
            <h2 class="text-2xl font-bold text-blue-500 mb-6">Digital Library of Hawler Medical University</h2>
            
            <div class="space-y-6">
                <!-- E-Journals Section -->
                <div class="library-section">
                    <a href="https://login.research4life.org/tacgw/login.cshtml" class="text-xl text-blue-500 hover:text-orange-500 transition-colors">e-journals subscription through Hinari</a>
                    <p class="text-gray-600 mt-1">(Access to more than 21,000 e-journals)</p>
                </div>
                
                <!-- E-Books Section -->
                <div class="library-section">
                    <a href="https://login.research4life.org/tacgw/login.cshtml" class="text-xl text-blue-500 hover:text-orange-500 transition-colors">e-books subscription through Hinari</a>
                    <p class="text-gray-600 mt-1">(Access to more than 69,000 e-books)</p>
                </div>
                
                <!-- College Libraries -->
                <div class="space-y-4">
                    <!-- Medicine -->
                    <div class="library-section">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-800">Library of the College of Medicine</h3>
                            <div class="space-x-4">
                                <a href="https://hmu.edu.krd/attachments/article/1067/Medicine%20books.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Books</a>
                                <a href="https://hmu.edu.krd/attachments/article/1067/Medicine%20Theses.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Theses</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Dentistry -->
                    <div class="library-section">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-800">Library of the College of Dentistry</h3>
                            <div class="space-x-4">
                                <a href="https://hmu.edu.krd/attachments/article/1067/Dentistry%20books.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Books</a>
                                <a href="https://hmu.edu.krd/attachments/article/1067/Dentistry%20Theses.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Theses</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pharmacy -->
                    <div class="library-section">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-800">Library of the College of Pharmacy</h3>
                            <div class="space-x-4">
                                <a href="https://drive.google.com/file/d/1pCtAsI8S1ALSaK7ns9E1pUvvmrvzxqHI/view?usp=sharing" class="text-gray-500 hover:text-orange-500 transition-colors">Book</a>
                                <a href="https://hmu.edu.krd/attachments/article/1067/Pharmacy%20Theses.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Theses</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Nursing -->
                    <div class="library-section">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-800">Library of the College of Nursing</h3>
                            <div class="space-x-4">
                                <a href="https://hmu.edu.krd/attachments/article/1067/Nursing%20books.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Books</a>
                                <a href="https://hmu.edu.krd/attachments/article/1067/Nursing%20Theses.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Theses</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Health Sciences -->
                    <div class="library-section">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-800">Library of the College of Health Sciences</h3>
                            <div class="space-x-4">
                                <a href="https://hmu.edu.krd/attachments/article/1067/HealthSciences.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Books</a>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Medical Research Center -->
                    <div class="library-section">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-800">Library of the Medical Research Center</h3>
                            <div class="space-x-4">
                                <a href="https://hmu.edu.krd/attachments/article/1067/MRC_books.pdf" class="text-gray-500 hover:text-orange-500 transition-colors">Books</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation and Rating -->
        <div class="flex flex-col md:flex-row justify-between items-center">
            <a href="#" class="flex items-center text-gray-600 hover:text-orange-500 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Prev
            </a>
            
            <div class="flex items-center">
                <span class="mr-2 text-gray-600">Rating:</span>
                <div class="flex">
                    <i class="fas fa-star text-orange-500"></i>
                    <i class="fas fa-star text-orange-500"></i>
                    <i class="far fa-star text-gray-400"></i>
                    <i class="far fa-star text-gray-400"></i>
                    <i class="far fa-star text-gray-400"></i>
                </div>
            </div>
        </div>
    </main>

    <!-- Featured Resources Section -->
    <section class="bg-gray-50 py-12 reveal">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center gradient-text mb-8">Featured Library Resources</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Resource 1 -->
                <div class="library-card p-6 animate-fadeIn delay-100">
                    <div class="bg-orange-100 text-orange-600 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Online Catalog</h3>
                    <p class="text-gray-600 mb-4">Search our comprehensive catalog of books, journals, and other resources available in our libraries.</p>
                   
                </div>
                
                <!-- Resource 2 -->
                <div class="library-card p-6 animate-fadeIn delay-300">
                    <div class="bg-orange-100 text-orange-600 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Research Databases</h3>
                    <p class="text-gray-600 mb-4">Access our collection of specialized medical and scientific research databases.</p>
                  
                </div>
                
                <!-- Resource 3 -->
                <div class="library-card p-6 animate-fadeIn delay-500">
                    <div class="bg-orange-100 text-orange-600 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Library Services</h3>
                    <p class="text-gray-600 mb-4">Learn about our services including borrowing, reference assistance, interlibrary loans, and research support.</p>
                   
                </div>
            </div>
        </div>
    </section>

    <!-- Library Hours and Information -->
    <section class="py-12 reveal">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-6 gradient-text">Library Hours & Information</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Hours -->
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Opening Hours</h3>
                        <table class="w-full">
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="py-2 font-medium">Sunday - Thursday</td>
                                    <td class="py-2 text-right">8:30 AM - 3:00 PM</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-2 font-medium">Friday - Saturday</td>
                                    <td class="py-2 text-right">Closed</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-2 font-medium">Holidays</td>
                                    <td class="py-2 text-right">Closed</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="mt-6">
                            <h4 class="font-semibold mb-2">Contact the Library</h4>
                            <p class="text-gray-600">Email: <a href="mailto:library@hmu.edu.krd" class="text-blue-500 hover:text-orange-500">library@hmu.edu.krd</a></p>
                            <p class="text-gray-600">Phone: +964 66 227 3384 ext. 1234</p>
                        </div>
                    </div>
                    
                    <!-- Information -->
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Library Policies</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Students must present valid ID cards to borrow materials</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Books may be borrowed for up to 14 days</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Reference materials and journals cannot be taken out of the library</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Late returns are subject to fines</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Maintain silence in the reading areas</span>
                            </li>
                        </ul>
                        
                        <a href="#" class="mt-6 inline-block bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600 transition-colors">Download Full Library Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-10 animate-fadeIn">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
            <!-- Contact HMU Section -->
            <div class="animate-slideInUp delay-100">
                <h3 class="text-lg font-semibold text-white mb-3 gradient-text">Contact HMU</h3>
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
                        Iraq, Kurdistan Region,<br />
                        Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
                        P.O. Box 178
                    </li>
                </ul>
            </div>
        
            <!-- Opening Hours Section -->
            <div class="animate-slideInUp delay-300">
                <h3 class="text-lg font-semibold text-white mb-3 gradient-text">Opening Hours</h3>
                <p class="hover-lift">Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
                <p class="hover-lift">Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1 animate-pulse">Closed</span></p>
            </div>
        
            <!-- Web Traffic Section -->
            <div class="animate-slideInUp delay-500">
                <h3 class="text-lg font-semibold text-white mb-3 gradient-text">Web Traffic</h3>
                <ul class="space-y-1">
                    <li class="hover-lift">👤 Today: <span class="text-gray-100 animate-pulse">2265</span></li>
                    <li class="hover-lift">👤 Yesterday: <span class="text-gray-100 animate-pulse" style="animation-delay: 0.2s;">3898</span></li>
                    <li class="hover-lift">👤 This Week: <span class="text-gray-100 animate-pulse" style="animation-delay: 0.4s;">12748</span></li>
                    <li class="hover-lift">👤 This Month: <span class="text-gray-100 animate-pulse" style="animation-delay: 0.6s;">90849</span></li>
                    <li class="hover-lift">👤 Total: <span class="text-gray-100 animate-pulse" style="animation-delay: 0.8s;">4394545</span></li>
                </ul>
                <hr class="my-4 border-gray-700" />
                <p class="text-center text-gray-100 text-xl font-bold animate-heartbeat">16</p>
                <p class="text-center text-sm text-gray-500">Online</p>
                <p class="text-center text-sm mt-2">21 November 2024</p>
            </div>
        
            <!-- QR Code Section -->
            <div class="animate-slideInUp delay-700">
                <h3 class="text-lg font-semibold text-white mb-3 gradient-text">QR Code</h3>
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
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-orange-500 text-white rounded-full p-3 shadow-lg hidden hover:bg-orange-600 transition duration-300 animate-bounce-slow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <!-- JavaScript -->
    <script>
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
        
        // Reveal animations on scroll
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        
        window.addEventListener("scroll", reveal);
        reveal(); // To check the initial state
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