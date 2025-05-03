events:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>University Events</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- GSAP Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Base Styles */
        body {
            font-family: Cambria, Georgia, serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #f97316;
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #e65c00;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Staggered animation delays */
        .delay-100 { transition-delay: 0.1s; }
        .delay-200 { transition-delay: 0.2s; }
        .delay-300 { transition-delay: 0.3s; }
        .delay-400 { transition-delay: 0.4s; }
        .delay-500 { transition-delay: 0.5s; }
        
        /* Hover Effects */
        .hover-grow {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-grow:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Parallax Effect */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }
        
        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .float {
            animation: float 4s ease-in-out infinite;
        }
        
        /* Pulse Animation */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        /* Rotating Animation */
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .rotate {
            animation: rotate 20s linear infinite;
        }
        
        /* Shimmer Effect */
        @keyframes shimmer {
            0% { background-position: -100% 0; }
            100% { background-position: 100% 0; }
        }
        
        .shimmer {
            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0) 100%);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        /* Event Card Hover Effect */
        .event-card {
            transition: all 0.4s ease;
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        .event-card:hover {
            transform: rotateY(5deg) scale(1.02);
            box-shadow: -5px 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .event-card:hover .card-overlay {
            opacity: 1;
        }
        
        .card-overlay {
            opacity: 0;
            transition: opacity 0.3s ease;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%);
        }
        
        /* Timeline Styles */
        .timeline {
            position: relative;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            width: 4px;
            background-color: #f97316;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 1.5s ease;
        }
        
        .timeline.animate::before {
            transform: scaleY(1);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 50px;
            width: 50%;
            opacity: 0;
            transition: all 0.8s ease;
        }
        
        .timeline-item.left {
            left: 0;
            padding-right: 40px;
            transform: translateX(-50px);
        }
        
        .timeline-item.right {
            left: 50%;
            padding-left: 40px;
            transform: translateX(50px);
        }
        
        .timeline-item.animate {
            opacity: 1;
            transform: translateX(0);
        }
        
        .timeline-dot {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: #f97316;
            border-radius: 50%;
            top: 15px;
            right: -10px;
            transform: scale(0);
            transition: transform 0.4s ease 0.4s;
        }
        
        .timeline-item.right .timeline-dot {
            left: -10px;
            right: auto;
        }
        
        .timeline-item.animate .timeline-dot {
            transform: scale(1);
        }
        
        /* Countdown Timer */
        .countdown-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        .countdown-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }
        
        .countdown-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: #f97316;
            position: relative;
        }
        
        .countdown-label {
            font-size: 0.875rem;
            color: #6b7280;
            text-transform: uppercase;
        }
        
        /* Progress Circle */
        .progress-circle {
            position: relative;
            width: 120px;
            height: 120px;
        }
        
        .progress-circle svg {
            transform: rotate(-90deg);
        }
        
        .progress-circle circle {
            fill: none;
            stroke-width: 8;
            stroke-linecap: round;
        }
        
        .progress-circle .bg {
            stroke: #f3f4f6;
        }
        
        .progress-circle .progress {
            stroke: #f97316;
            stroke-dasharray: 314;
            stroke-dashoffset: 314;
            transition: stroke-dashoffset 1s ease;
        }
        
        .progress-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5rem;
            font-weight: bold;
            color: #f97316;
        }
        
        /* Filter Buttons */
        .filter-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .filter-btn::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #f97316;
            transition: width 0.3s ease;
        }
        
        .filter-btn:hover::after,
        .filter-btn.active::after {
            width: 100%;
        }
        
        .filter-btn.active {
            color: #f97316;
            font-weight: bold;
        }
        
        /* Magnetic Button Effect */
        .magnetic-btn {
            position: relative;
            transition: transform 0.2s ease;
            transform-style: preserve-3d;
        }
        
        /* 3D Card Effect */
        .card-3d {
            transition: transform 0.5s ease;
            transform-style: preserve-3d;
        }
        
        /* Glowing Effect */
        @keyframes glow {
            0% { box-shadow: 0 0 5px rgba(249, 115, 22, 0.5); }
            50% { box-shadow: 0 0 20px rgba(249, 115, 22, 0.8); }
            100% { box-shadow: 0 0 5px rgba(249, 115, 22, 0.5); }
        }
        
        .glow {
            animation: glow 2s infinite;
        }
        
        /* Text Reveal Animation */
        .text-reveal {
            position: relative;
            overflow: hidden;
        }
        
        .text-reveal span {
            display: inline-block;
            transform: translateY(100%);
            opacity: 0;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }
        
        .text-reveal.animate span {
            transform: translateY(0);
            opacity: 1;
        }
        
        /* Staggered Text Animation */
        .stagger-text span {
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        
        /* Scroll Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background-color: #f97316;
            width: 0%;
            z-index: 9999;
            transition: width 0.1s ease;
        }
        
        /* Animated Background */
        .animated-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        
        .animated-bg span {
            position: absolute;
            display: block;
            width: 20px;
            height: 20px;
            background: rgba(249, 115, 22, 0.1);
            animation: animate 25s linear infinite;
            bottom: -150px;
            border-radius: 50%;
        }
        
        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }
        
        .animated-bg span:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }
        
        .animated-bg span:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }
        
        .animated-bg span:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }
        
        .animated-bg span:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }
        
        .animated-bg span:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }
        
        .animated-bg span:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }
        
        .animated-bg span:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }
        
        .animated-bg span:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }
        
        .animated-bg span:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }
        
        .animated-bg span:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress"></div>
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

    <!-- Header Section -->
    <header class="relative bg-gradient-to-r from-orange-500 to-orange-600 text-white overflow-hidden pt-12">
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <div class="container mx-auto px-4 py-20 relative z-10">
            <div class="text-center">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 stagger-text" id="headerTitle">
                    <span>U</span><span>n</span><span>i</span><span>v</span><span>e</span><span>r</span><span>s</span><span>i</span><span>t</span><span>y</span>
                    <span> </span>
                    <span>E</span><span>v</span><span>e</span><span>n</span><span>t</span><span>s</span>
                </h1>
                <p class="text-xl md:text-2xl mb-52 xl:mb-72 opacity-90 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    Discover, participate, and connect through our diverse range of academic, cultural, and social events happening across campus.
                </p>
                <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="500">
                    <a href="#upcoming" class="bg-white text-orange-600 hover:bg-orange-100 px-8 py-3 rounded-full font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                        Events
                    </a>
                    <a href="#calendar" class="bg-transparent border-2 bg-white text-orange-600 hover:bg-orange-100 px-8 py-3 rounded-full font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                        View Calendar
                    </a>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-0 left-0 w-full" >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
                <path fill="#f9fafb" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </header>

    <!-- Featured Event Section -->
    <section class="py-16 bg-gray-50 relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Featured Event</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto mb-6" data-aos="width" data-aos-delay="200"></div>
                <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    Don't miss our most anticipated event of the season, bringing together thought leaders, innovators, and the entire university community.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden max-w-5xl mx-auto" data-aos="zoom-in" data-aos-delay="400">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="relative overflow-hidden">
                        <img src="{{asset('storage/images/event2.jpeg')}}" alt="Annual Innovation Summit" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-4 left-4 bg-orange-500 text-white px-4 py-2 rounded-full font-semibold text-sm">
                            FEATURED
                        </div>
                    </div>
                    <div class="p-8 md:p-10 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center mb-4">
                                <span class="text-orange-500 font-semibold">May 15, 2024</span>
                                <span class="mx-2 text-gray-400">•</span>
                                <span class="text-gray-600">9:00 AM - 5:00 PM</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Annual Innovation Summit</h3>
                            <p class="text-gray-600 mb-6">
                                Join us for a day of inspiring talks, interactive workshops, and networking opportunities with industry leaders and academic pioneers. This year's theme focuses on "Technology and Humanity: Shaping Our Collective Future."
                            </p>
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                                    <i class="fas fa-map-marker-alt text-orange-500"></i>
                                </div>
                                <span class="text-gray-700">University Grand Hall, Building A</span>
                            </div>
                        </div>
                        
                        <div class="mt-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-3">Event Countdown</h4>
                            <div class="countdown-container" id="featuredCountdown">
                                <div class="countdown-item">
                                    <div class="countdown-value" id="countdown-days">00</div>
                                    <div class="countdown-label">Days</div>
                                </div>
                                <div class="countdown-item">
                                    <div class="countdown-value" id="countdown-hours">00</div>
                                    <div class="countdown-label">Hours</div>
                                </div>
                                <div class="countdown-item">
                                    <div class="countdown-value" id="countdown-minutes">00</div>
                                    <div class="countdown-label">Minutes</div>
                                </div>
                                <div class="countdown-item">
                                    <div class="countdown-value" id="countdown-seconds">00</div>
                                    <div class="countdown-label">Seconds</div>
                                </div>
                            </div>
                            
                            <button class="w-full mt-6 bg-orange-500 hover:bg-orange-600 text-white py-3 px-6 rounded-lg font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg flex items-center justify-center">
                                <span>Register Now</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Categories Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Event Categories</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto mb-6" data-aos="width" data-aos-delay="200"></div>
                <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    Explore our diverse range of events designed to enrich your university experience and connect you with opportunities for growth and engagement.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-grow" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-graduation-cap text-3xl text-orange-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Academic</h3>
                    <p class="text-gray-600 mb-4">
                        Lectures, seminars, workshops, and conferences focused on academic disciplines and research.
                    </p>
                    <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 inline-flex items-center">
                        <span>View Events</span>
                        <i class="fas fa-chevron-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-grow" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-theater-masks text-3xl text-orange-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Cultural</h3>
                    <p class="text-gray-600 mb-4">
                        Performances, exhibitions, festivals, and celebrations showcasing diverse cultures and arts.
                    </p>
                    <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 inline-flex items-center">
                        <span>View Events</span>
                        <i class="fas fa-chevron-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-grow" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-3xl text-orange-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Social</h3>
                    <p class="text-gray-600 mb-4">
                        Networking events, club activities, parties, and social gatherings for community building.
                    </p>
                    <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 inline-flex items-center">
                        <span>View Events</span>
                        <i class="fas fa-chevron-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-8 text-center hover-grow" data-aos="fade-up" data-aos-delay="700">
                    <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-briefcase text-3xl text-orange-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Career</h3>
                    <p class="text-gray-600 mb-4">
                        Job fairs, career workshops, industry panels, and professional development opportunities.
                    </p>
                    <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 inline-flex items-center">
                        <span>View Events</span>
                        <i class="fas fa-chevron-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section id="upcoming" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Events</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto mb-6" data-aos="width" data-aos-delay="200"></div>
                <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    Browse our calendar of upcoming events and mark your schedule for those that interest you.
                </p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4 mb-10" data-aos="fade-up" data-aos-delay="400">
                <button class="filter-btn px-6 py-2 text-gray-700 hover:text-orange-500 transition-colors duration-300 active" data-filter="all">All Events</button>
                <button class="filter-btn px-6 py-2 text-gray-700 hover:text-orange-500 transition-colors duration-300" data-filter="academic">Academic</button>
                <button class="filter-btn px-6 py-2 text-gray-700 hover:text-orange-500 transition-colors duration-300" data-filter="cultural">Cultural</button>
                <button class="filter-btn px-6 py-2 text-gray-700 hover:text-orange-500 transition-colors duration-300" data-filter="social">Social</button>
                <button class="filter-btn px-6 py-2 text-gray-700 hover:text-orange-500 transition-colors duration-300" data-filter="career">Career</button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event Card 1 -->
                <div class="event-card rounded-xl overflow-hidden shadow-lg bg-white" data-category="academic" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative h-56">
                        <img src="{{asset('storage/images/event3.jfif')}}" alt="Research Symposium" class="w-full h-full object-cover">
                        <div class="card-overlay absolute inset-0 flex items-end p-6">
                            <div class="bg-orange-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                Academic
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="text-orange-500 font-semibold">May 20, 2022</span>
                            <span class="mx-2 text-gray-400">•</span>
                            <span class="text-gray-600">1:00 PM - 5:00 PM</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Nursing college festival</h3>
                        <p class="text-gray-600 mb-4">
the College of Nursing organized its annual festival, which included various activities organized by the students and teaching staff from

the Department of Nursing and the Department of Midwifery. 
                        </p>
                   
                    </div>
                </div>
                
                <!-- Event Card 2 -->
                <div class="event-card rounded-xl overflow-hidden shadow-lg bg-white" data-category="academic" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative h-56">
                        <img src="{{asset('storage/images/event1.jfif')}}" alt="Research Symposium" class="w-full h-full object-cover">
                        <div class="card-overlay absolute inset-0 flex items-end p-6">
                            <div class="bg-orange-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                Academic
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="text-orange-500 font-semibold">july 1, 2022</span>
                            <span class="mx-2 text-gray-400">•</span>
                            <span class="text-gray-600">1:00 PM - 5:00 PM</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Football Competition 2022</h3>
                        <p class="text-gray-600 mb-4">

                        The Sport Unit at the Hawler Medical University organized a football competition of the students of the different colleges of the university 

                        </p>
                   
                    </div>
                </div>
                
                <!-- Event Card 3 -->
                <div class="event-card rounded-xl overflow-hidden shadow-lg bg-white" data-category="academic" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative h-56">
                        <img src="{{asset('storage/images/event4.jfif')}}" alt="Research Symposium" class="w-full h-full object-cover">
                        <div class="card-overlay absolute inset-0 flex items-end p-6">
                            <div class="bg-orange-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                Academic
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="text-orange-500 font-semibold">May 2, 2023</span>
                            <span class="mx-2 text-gray-400">•</span>
                            <span class="text-gray-600">1:00 PM - 5:00 PM</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Cleaning and preparing parking place and internal roads</h3>
                        <p class="text-gray-600 mb-4">

                        Professor Dr. Nooraddin Ismail, President of Hawler Medical University, accompanied by Assist. Prof. Dr. Hawri Bakr, Vice President for Admin and Financial Affairs,
                        </p>
                   
                    </div>
                </div>
                
                <!-- Event Card 4 -->
                <div class="event-card rounded-xl overflow-hidden shadow-lg bg-white" data-category="academic" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative h-56">
                        <img src="{{asset('storage/images/event5.jpg')}}" alt="Research Symposium" class="w-full h-full object-cover">
                        <div class="card-overlay absolute inset-0 flex items-end p-6">
                            <div class="bg-orange-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                Academic
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="text-orange-500 font-semibold">May 20, 2023</span>
                            <span class="mx-2 text-gray-400">•</span>
                            <span class="text-gray-600">1:00 PM - 5:00 PM</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Workshop on Cholera Outbreak</h3>
                        <p class="text-gray-600 mb-4">

                        The Directorate of Health and Safety at Hawler Medical University in cooperation with the Directorate of Disease Prevention of the Ministry of Health held a workshop
                        </p>
                   
                    </div>
                </div>
                
                <!-- Event Card 5 -->
                <div class="event-card rounded-xl overflow-hidden shadow-lg bg-white" data-category="academic" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative h-56">
                        <img src="{{asset('storage/images/event6.jpeg')}}" alt="Research Symposium" class="w-full h-full object-cover">
                        <div class="card-overlay absolute inset-0 flex items-end p-6">
                            <div class="bg-orange-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                Academic
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="text-orange-500 font-semibold">May 20, 2022</span>
                            <span class="mx-2 text-gray-400">•</span>
                            <span class="text-gray-600">1:00 PM - 5:00 PM</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Honoring Professor Dr. Nooraddin Ismail by Nineveh Medical Association</h3>
                        <p class="text-gray-600 mb-4">

                        During the First Medical Conference of the Nineveh Medical Association on 26 May 2022, the Association honored Professor Dr. Nooraddin Ismail, President of

Hawler Medical University, 
                        </p>
                   
                    </div>
                </div>
                <!-- Event Card 6 -->
                <div class="event-card rounded-xl overflow-hidden shadow-lg bg-white" data-category="academic" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative h-56">
                        <img src="{{asset('storage/images/event7.jpg')}}" alt="Research Symposium" class="w-full h-full object-cover">
                        <div class="card-overlay absolute inset-0 flex items-end p-6">
                            <div class="bg-orange-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                Academic
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="text-orange-500 font-semibold">February 5, 2021</span>
                            <span class="mx-2 text-gray-400">•</span>
                            <span class="text-gray-600">1:00 PM - 5:00 PM</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Assessment and Examination Process</h3>
                        <p class="text-gray-600 mb-4">

                        Assistant Professor Dr. Kamaran Younis M. Amin, President of Hawler Medical University,
                        </p>
                   
                    </div>
                </div>
            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="1100">
                <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white py-3 px-8 rounded-full font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                    View All Events
                </a>
            </div>
        </div>
    </section>

    <!-- Event Timeline Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Event Timeline</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto mb-6" data-aos="width" data-aos-delay="200"></div>
                <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    Plan ahead with our chronological view of upcoming events throughout the semester.
                </p>
            </div>
            
            <div class="timeline" id="timeline">
                <!-- Timeline Item 1 -->
                <div class="timeline-item left">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <span class="text-orange-500 font-semibold block mb-2">May 15, 2024</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Innovation Summit</h3>
                        <p class="text-gray-600 mb-4">
                            A day of inspiring talks, interactive workshops, and networking opportunities.
                        </p>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-orange-500 text-sm"></i>
                            </div>
                            <span class="text-gray-700">University Grand Hall</span>
                        </div>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="timeline-item right">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <span class="text-orange-500 font-semibold block mb-2">May 20, 2024</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Research Symposium</h3>
                        <p class="text-gray-600 mb-4">
                            Showcasing groundbreaking research from graduate students and faculty.
                        </p>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-orange-500 text-sm"></i>
                            </div>
                            <span class="text-gray-700">Science Building</span>
                        </div>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="timeline-item left">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <span class="text-orange-500 font-semibold block mb-2">May 25, 2024</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Spring Welcome Mixer</h3>
                        <p class="text-gray-600 mb-4">
                            Meet fellow students, faculty, and staff at this casual networking event.
                        </p>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-orange-500 text-sm"></i>
                            </div>
                            <span class="text-gray-700">Student Union Ballroom</span>
                        </div>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="timeline-item right">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <span class="text-orange-500 font-semibold block mb-2">June 5, 2024</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">International Cultural Festival</h3>
                        <p class="text-gray-600 mb-4">
                            Celebrate global diversity with performances, food, art, and cultural exhibitions.
                        </p>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-orange-500 text-sm"></i>
                            </div>
                            <span class="text-gray-700">University Quad</span>
                        </div>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                
                <!-- Timeline Item 5 -->
                <div class="timeline-item left">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <span class="text-orange-500 font-semibold block mb-2">June 10, 2024</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Summer Career Fair</h3>
                        <p class="text-gray-600 mb-4">
                            Connect with over 50 employers offering internships and career opportunities.
                        </p>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-orange-500 text-sm"></i>
                            </div>
                            <span class="text-gray-700">Recreation Center</span>
                        </div>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                
                <!-- Timeline Item 6 -->
                <div class="timeline-item right">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <span class="text-orange-500 font-semibold block mb-2">June 15, 2024</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Distinguished Speaker Series</h3>
                        <p class="text-gray-600 mb-4">
                            An insightful lecture by Nobel laureate Dr. Jane Smith on quantum computing.
                        </p>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-orange-500 text-sm"></i>
                            </div>
                            <span class="text-gray-700">Lecture Hall A, Main Building</span>
                        </div>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Statistics Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Event Statistics</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto mb-6" data-aos="width" data-aos-delay="200"></div>
                <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    Our vibrant campus community hosts hundreds of events each year, engaging thousands of participants.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="progress-circle mx-auto mb-4" data-value="250">
                        <svg width="120" height="120">
                            <circle class="bg" cx="60" cy="60" r="50"></circle>
                            <circle class="progress" cx="60" cy="60" r="50"></circle>
                        </svg>
                        <div class="progress-text">250+</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Events</h3>
                    <p class="text-gray-600">
                        Events hosted across campus each academic year
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="progress-circle mx-auto mb-4" data-value="15000">
                        <svg width="120" height="120">
                            <circle class="bg" cx="60" cy="60" r="50"></circle>
                            <circle class="progress" cx="60" cy="60" r="50"></circle>
                        </svg>
                        <div class="progress-text">15K+</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Attendees</h3>
                    <p class="text-gray-600">
                        Students, faculty, staff, and community members engaged
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="progress-circle mx-auto mb-4" data-value="50">
                        <svg width="120" height="120">
                            <circle class="bg" cx="60" cy="60" r="50"></circle>
                            <circle class="progress" cx="60" cy="60" r="50"></circle>
                        </svg>
                        <div class="progress-text">50+</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Student Clubs</h3>
                    <p class="text-gray-600">
                        Active student organizations hosting regular events
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md text-center" data-aos="fade-up" data-aos-delay="700">
                    <div class="progress-circle mx-auto mb-4" data-value="95">
                        <svg width="120" height="120">
                            <circle class="bg" cx="60" cy="60" r="50"></circle>
                            <circle class="progress" cx="60" cy="60" r="50"></circle>
                        </svg>
                        <div class="progress-text">95%</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Satisfaction</h3>
                    <p class="text-gray-600">
                        Average attendee satisfaction rating across all events
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Calendar Section -->
    <section id="calendar" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Event Calendar</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto mb-6" data-aos="width" data-aos-delay="200"></div>
                <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    Browse our interactive calendar to find events by date and add them to your personal schedule.
                </p>
            </div>
            
            <div class="bg-gray-50 p-8 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
                <div class="flex flex-wrap justify-between items-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-800">May 2024</h3>
                    <div class="flex space-x-2">
                        <button class="bg-white hover:bg-gray-100 text-gray-800 p-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="bg-white hover:bg-gray-100 text-gray-800 p-2 rounded-lg transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                
                <div class="grid grid-cols-7 gap-4 mb-4 text-center">
                    <div class="font-semibold text-gray-600">Sun</div>
                    <div class="font-semibold text-gray-600">Mon</div>
                    <div class="font-semibold text-gray-600">Tue</div>
                    <div class="font-semibold text-gray-600">Wed</div>
                    <div class="font-semibold text-gray-600">Thu</div>
                    <div class="font-semibold text-gray-600">Fri</div>
                    <div class="font-semibold text-gray-600">Sat</div>
                </div>
                
                <div class="grid grid-cols-7 gap-4">
                    <!-- Previous Month -->
                    <div class="p-2 text-center text-gray-400">28</div>
                    <div class="p-2 text-center text-gray-400">29</div>
                    <div class="p-2 text-center text-gray-400">30</div>
                    
                    <!-- Current Month -->
                    <div class="p-2 text-center text-gray-700">1</div>
                    <div class="p-2 text-center text-gray-700">2</div>
                    <div class="p-2 text-center text-gray-700">3</div>
                    <div class="p-2 text-center text-gray-700">4</div>
                    <div class="p-2 text-center text-gray-700">5</div>
                    <div class="p-2 text-center text-gray-700">6</div>
                    <div class="p-2 text-center text-gray-700">7</div>
                    <div class="p-2 text-center text-gray-700">8</div>
                    <div class="p-2 text-center text-gray-700">9</div>
                    <div class="p-2 text-center text-gray-700">10</div>
                    <div class="p-2 text-center text-gray-700">11</div>
                    <div class="p-2 text-center text-gray-700">12</div>
                    <div class="p-2 text-center text-gray-700">13</div>
                    <div class="p-2 text-center text-gray-700">14</div>
                    <div class="p-2 text-center bg-orange-500 text-white rounded-full font-bold">15</div>
                    <div class="p-2 text-center text-gray-700">16</div>
                    <div class="p-2 text-center text-gray-700">17</div>
                    <div class="p-2 text-center text-gray-700">18</div>
                    <div class="p-2 text-center text-gray-700">19</div>
                    <div class="p-2 text-center bg-orange-100 text-orange-600 rounded-full font-bold">20</div>
                    <div class="p-2 text-center text-gray-700">21</div>
                    <div class="p-2 text-center text-gray-700">22</div>
                    <div class="p-2 text-center text-gray-700">23</div>
                    <div class="p-2 text-center text-gray-700">24</div>
                    <div class="p-2 text-center bg-orange-100 text-orange-600 rounded-full font-bold">25</div>
                    <div class="p-2 text-center text-gray-700">26</div>
                    <div class="p-2 text-center text-gray-700">27</div>
                    <div class="p-2 text-center text-gray-700">28</div>
                    <div class="p-2 text-center text-gray-700">29</div>
                    <div class="p-2 text-center text-gray-700">30</div>
                    <div class="p-2 text-center text-gray-700">31</div>
                    
                    <!-- Next Month -->
                    <div class="p-2 text-center text-gray-400">1</div>
                </div>
                
                <div class="mt-8">
                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Events on May 15, 2024</h4>
                    <div class="bg-white p-4 rounded-lg border border-gray-200 mb-3">
                        <div class="flex items-center">
                            <div class="w-3 h-12 bg-orange-500 rounded-full mr-4"></div>
                            <div>
                                <h5 class="font-semibold text-gray-800">Annual Innovation Summit</h5>
                                <div class="flex items-center text-sm text-gray-600">
                                    <span>9:00 AM - 5:00 PM</span>
                                    <span class="mx-2">•</span>
                                    <span>University Grand Hall</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
         
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">University Events</h3>
                    <p class="text-gray-400">
                        Connecting our community through engaging and enriching events that inspire learning, creativity, and collaboration.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-orange-500 transition-colors duration-300">Home</a></li>
                        <li><a href="#upcoming" class="text-gray-400 hover:text-orange-500 transition-colors duration-300">Upcoming Events</a></li>
                        <li><a href="#calendar" class="text-gray-400 hover:text-orange-500 transition-colors duration-300">Calendar</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-orange-500 transition-colors duration-300">Event Policies</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-orange-500 transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-700 hover:bg-orange-500 w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-orange-500 w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-orange-500 w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-orange-500 w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="mt-6">
                        <h4 class="text-lg font-semibold mb-2">Download Our App</h4>
                        <div class="flex space-x-3">
                            <a href="#" class="bg-gray-700 hover:bg-gray-600 p-2 rounded transition-colors duration-300">
                                <i class="fab fa-apple text-2xl"></i>
                            </a>
                            <a href="#" class="bg-gray-700 hover:bg-gray-600 p-2 rounded transition-colors duration-300">
                                <i class="fab fa-android text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-4">
                        Subscribe to our newsletter for updates on events and special announcements.
                    </p>
                    <form>
                        <div class="flex">
                            <input type="email" placeholder="Your email" class="px-4 py-2 w-full rounded-l-md focus:outline-none text-gray-800">
                            <button type="submit" class="bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-r-md transition-colors duration-300">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 University Events. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-orange-500 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-orange-600 z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- JavaScript for animations and interactions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS animation library
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
            
            // Staggered text animation for header title
            const headerTitle = document.getElementById('headerTitle');
            if (headerTitle) {
                const spans = headerTitle.querySelectorAll('span');
                spans.forEach((span, index) => {
                    span.style.transitionDelay = `${index * 0.05}s`;
                    setTimeout(() => {
                        span.style.opacity = '1';
                        span.style.transform = 'translateY(0)';
                    }, 100);
                });
            }
            
            // Countdown Timer for Featured Event
            function updateCountdown() {
                const eventDate = new Date('May 15, 2024 09:00:00').getTime();
                const now = new Date().getTime();
                const distance = eventDate - now;
                
                if (distance > 0) {
                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    document.getElementById('countdown-days').innerText = days.toString().padStart(2, '0');
                    document.getElementById('countdown-hours').innerText = hours.toString().padStart(2, '0');
                    document.getElementById('countdown-minutes').innerText = minutes.toString().padStart(2, '0');
                    document.getElementById('countdown-seconds').innerText = seconds.toString().padStart(2, '0');
                }
            }
            
            updateCountdown();
            setInterval(updateCountdown, 1000);
            
            // Event Filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const eventCards = document.querySelectorAll('.event-card');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    // Show/hide event cards based on filter
                    eventCards.forEach(card => {
                        if (filter === 'all' || card.getAttribute('data-category') === filter) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
            
            // Timeline Animation
            const timeline = document.getElementById('timeline');
            const timelineItems = document.querySelectorAll('.timeline-item');
            
            function animateTimeline() {
                if (timeline) {
                    const timelineTop = timeline.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (timelineTop < windowHeight * 0.75) {
                        timeline.classList.add('animate');
                        
                        timelineItems.forEach((item, index) => {
                            setTimeout(() => {
                                item.classList.add('animate');
                            }, 300 * index);
                        });
                    }
                }
            }
            
            // Progress Circle Animation
            const progressCircles = document.querySelectorAll('.progress-circle');
            
            function animateProgressCircles() {
                progressCircles.forEach(circle => {
                    const circleTop = circle.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (circleTop < windowHeight * 0.8) {
                        const progressElement = circle.querySelector('.progress');
                        const value = parseInt(circle.getAttribute('data-value'));
                        const max = 100;
                        const circumference = 2 * Math.PI * 50;
                        
                        const offset = circumference - (value / max) * circumference;
                        progressElement.style.strokeDashoffset = offset;
                    }
                });
            }
            
            // Scroll Progress Bar
            const scrollProgress = document.querySelector('.scroll-progress');
            
            function updateScrollProgress() {
                const windowScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (windowScroll / height) * 100;
                
                scrollProgress.style.width = scrolled + '%';
            }
            
            // Back to Top Button
            const backToTopButton = document.getElementById('back-to-top');
            
            function toggleBackToTopButton() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.remove('opacity-0', 'invisible');
                    backToTopButton.classList.add('opacity-100', 'visible');
                } else {
                    backToTopButton.classList.add('opacity-0', 'invisible');
                    backToTopButton.classList.remove('opacity-100', 'visible');
                }
            }
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Magnetic Button Effect
            const magneticButtons = document.querySelectorAll('.magnetic-btn');
            
            magneticButtons.forEach(button => {
                button.addEventListener('mousemove', function(e) {
                    const position = button.getBoundingClientRect();
                    const x = e.clientX - position.left - position.width / 2;
                    const y = e.clientY - position.top - position.height / 2;
                    
                    button.style.transform = `translate(${x * 0.3}px, ${y * 0.5}px)`;
                });
                
                button.addEventListener('mouseout', function() {
                    button.style.transform = 'translate(0px, 0px)';
                });
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Event listeners for scroll animations
            window.addEventListener('scroll', function() {
                animateTimeline();
                animateProgressCircles();
                updateScrollProgress();
                toggleBackToTopButton();
            });
            
            // Initial calls
            animateTimeline();
            animateProgressCircles();
            updateScrollProgress();
            toggleBackToTopButton();
        });
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