<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Vision and Mission - Hawler Medical University</title>
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
        
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }
        
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            25% { transform: scale(1.1); }
            50% { transform: scale(1); }
            75% { transform: scale(1.1); }
        }
        
        @keyframes wave {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        @keyframes ripple {
            0% { transform: scale(0.8); opacity: 1; }
            100% { transform: scale(2); opacity: 0; }
        }
        
        @keyframes swing {
            0%, 100% { transform: rotate(-3deg); }
            50% { transform: rotate(3deg); }
        }
        
        /* Animation Classes */
        .animate-fadeIn {
            animation: fadeIn 1.2s ease-out forwards;
        }
        
        .animate-slideInUp {
            animation: slideInUp 1s ease-out forwards;
        }
        
        .animate-slideInLeft {
            animation: slideInLeft 1s ease-out forwards;
        }
        
        .animate-slideInRight {
            animation: slideInRight 1s ease-out forwards;
        }
        
        .animate-pulse-slow {
            animation: pulse 3s infinite;
        }
        
        .animate-float {
            animation: float 5s ease-in-out infinite;
        }
        
        .animate-bounce-slow {
            animation: bounce 4s ease-in-out infinite;
        }
        
        .animate-spin-slow {
            animation: spin 15s linear infinite;
        }
        
        .animate-glow {
            animation: glow 2s ease-in-out infinite;
        }
        
        .animate-typing {
            overflow: hidden;
            white-space: nowrap;
            animation: typing 3.5s steps(40, end);
        }
        
        .animate-shimmer {
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0) 100%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite;
        }
        
        .animate-heartbeat {
            animation: heartbeat 2s ease-in-out infinite;
        }
        
        .animate-wave {
            animation: wave 3s ease-in-out infinite;
        }
        
        .animate-ripple {
            animation: ripple 2s ease-out infinite;
        }
        
        .animate-swing {
            animation: swing 3s ease-in-out infinite;
            transform-origin: top center;
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
        
        .fade-bottom {
            transform: translateY(50px);
        }
        
        .fade-bottom.active {
            transform: translateY(0);
        }
        
        .fade-left {
            transform: translateX(-50px);
        }
        
        .fade-left.active {
            transform: translateX(0);
        }
        
        .fade-right {
            transform: translateX(50px);
        }
        
        .fade-right.active {
            transform: translateX(0);
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
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
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
        
        /* Vision & Mission specific styles */
        .vision-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .vision-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transform: translateY(-5px);
        }
        
        .quote-mark {
            font-size: 5rem;
            line-height: 1;
            position: absolute;
            opacity: 0.1;
            color: #f97316;
        }
        
        .quote-mark-left {
            top: 0;
            left: 0;
        }
        
        .quote-mark-right {
            bottom: 0;
            right: 0;
        }
        
        /* Highlight text effect */
        .highlight-text {
            position: relative;
            display: inline-block;
        }
        
        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #f97316;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }
        
        .highlight-text:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        orange: {
                            50: '#fff8f1',
                            100: '#feecdc',
                            200: '#fcd9bd',
                            300: '#fdba8c',
                            400: '#ff8a4c',
                            500: '#ff5a1f',
                            600: '#d03801',
                            700: '#b43403',
                            800: '#8a2c0d',
                            900: '#771d1d',
                        }
                    }
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
                <button id="nav-toggle" class="md:hidden text-orange-600 focus:outline-none p-2 rounded-lg hover:bg-orange-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Initially Hidden) -->
        <div id="nav-content" class="hidden md:hidden py-3 border-t border-gray-200 animate-slideInUp">
            <!-- Mobile menu content here -->
        </div>
    </div>
</nav>

<!-- Header Section -->


<!-- Hero Section -->
<section class="relative pt-52 py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="overflow-hidden mb-6">
                <h2 class="text-3xl font-bold gradient-text animate-typing">Shaping the Future of Healthcare Education</h2>
            </div>
            <p class="text-lg text-gray-600 leading-relaxed animate-fadeIn" style="animation-delay: 0.5s;">
                At Hawler Medical University, we are committed to excellence in medical education, research, and community service. Our vision and mission guide us in developing healthcare professionals who are not only skilled practitioners but also compassionate leaders.
            </p>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Vision Content -->
            <div class="reveal fade-right">
                <div class="relative">
                    <span class="quote-mark quote-mark-left">"</span>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Vision</h2>
                    <div class="vision-card p-6 relative">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Hawler Medical University is intended to be an <span class="highlight-text font-medium">innovative center of excellence</span> in learning and research while supporting students and researchers committed to assisting the community.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            The aim is to promote the development of students to reach their true potential in becoming <span class="highlight-text font-medium">competent, ethical, caring, and inquiring</span> doctors, dentists, pharmacists, and nurses, as well as visionary leaders.
                        </p>
                    </div>
                    <span class="quote-mark quote-mark-right">"</span>
                </div>
            </div>
            
            <!-- Vision Image -->
            <div class="flex justify-center reveal fade-left">
                <div class="relative">
                    <div class="absolute inset-0 bg-orange-500 rounded-lg opacity-10 animate-pulse-slow"></div>
                    <img src="https://img.freepik.com/premium-photo/students-studying-library-one-them-is-writing-notepad-with-pen_662214-24090.jpg" alt="Students studying" class="w-full h-auto object-cover rounded-lg shadow-lg relative z-10 hover-lift">
                    <div class="absolute -bottom-4 -right-4 bg-white p-4 rounded-lg shadow-lg animate-float">
                        <div class="text-orange-500 font-bold text-xl">Excellence</div>
                        <div class="text-gray-600 text-sm">in Education</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Mission Image -->
            <div class="flex justify-center order-2 md:order-1 reveal fade-right">
                <div class="relative">
                    <div class="absolute -inset-4 border-2 border-dashed border-orange-300 rounded-full animate-spin-slow"></div>
                    <img src="{{ asset('storage/images/logo.jpg') }}" alt="Hawler Medical University Logo" class="w-64 h-64 object-contain relative z-10 hover-scale">
                    <div class="absolute -top-4 -left-4 bg-white p-4 rounded-lg shadow-lg animate-float" style="animation-delay: 1s;">
                        <div class="text-orange-500 font-bold text-xl">Innovation</div>
                        <div class="text-gray-600 text-sm">through Research</div>
                    </div>
                </div>
            </div>
            
            <!-- Mission Content -->
            <div class="order-1 md:order-2 reveal fade-left">
                <div class="relative">
                    <span class="quote-mark quote-mark-left">"</span>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Mission</h2>
                    <div class="vision-card p-6 relative">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            The university is committed to <span class="highlight-text font-medium">academic freedom</span> and the principles of equal opportunity without discrimination in delivering its services and applying knowledge with high standards of intellectual, educational, and research productivity.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            It aims to be a <span class="highlight-text font-medium">leading medical institution</span> that provides education and research services in all fields of health and education like a modern medical university in a well-developed country.
                        </p>
                    </div>
                    <span class="quote-mark quote-mark-right">"</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-16 bg-gradient-to-r from-orange-200 via-orange-100 to-orange-200">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12 animate-scaleIn">Our Core Values</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
            <!-- Value 1: Excellence -->
            <div class="bg-white rounded-lg shadow-md p-6 hover-lift reveal fade-bottom">
                <div class="h-16 flex items-center justify-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center animate-float">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-center text-gray-800 mt-4 mb-2">Excellence</h3>
                <p class="text-gray-600 text-center">Striving for the highest standards in education, research, and healthcare delivery</p>
            </div>
            
            <!-- Value 2: Innovation -->
            <div class="bg-white rounded-lg shadow-md p-6 hover-lift reveal fade-bottom" style="animation-delay: 0.2s;">
                <div class="h-16 flex items-center justify-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center animate-float" style="animation-delay: 0.5s;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-center text-gray-800 mt-4 mb-2">Innovation</h3>
                <p class="text-gray-600 text-center">Embracing new ideas, technologies, and approaches to advance medical education and practice</p>
            </div>
            
            <!-- Value 3: Ethics -->
            <div class="bg-white rounded-lg shadow-md p-6 hover-lift reveal fade-bottom" style="animation-delay: 0.4s;">
                <div class="h-16 flex items-center justify-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center animate-float" style="animation-delay: 1s;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-center text-gray-800 mt-4 mb-2">Ethics</h3>
                <p class="text-gray-600 text-center">Upholding the highest standards of integrity, professionalism, and ethical conduct</p>
            </div>
            
            <!-- Value 4: Compassion -->
            <div class="bg-white rounded-lg shadow-md p-6 hover-lift reveal fade-bottom" style="animation-delay: 0.6s;">
                <div class="h-16 flex items-center justify-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center animate-float" style="animation-delay: 1.5s;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-center text-gray-800 mt-4 mb-2">Compassion</h3>
                <p class="text-gray-600 text-center">Fostering empathy, care, and respect for patients, colleagues, and the community</p>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Goals -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12 animate-scaleIn">Strategic Goals</h2>
        
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div class="space-y-6">
                    <!-- Goal 1 -->
                    <div class="bg-orange-50 p-6 rounded-lg shadow-md hover-lift reveal fade-left">
                        <div class="flex items-center mb-3">
                            <div class="bg-orange-100 p-2 rounded-full mr-3 animate-pulse-slow">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Educational Excellence</h3>
                        </div>
                        <p class="text-gray-600">Develop and implement innovative curricula that meet international standards while addressing local healthcare needs.</p>
                    </div>
                    
                    <!-- Goal 2 -->
                    <div class="bg-orange-50 p-6 rounded-lg shadow-md hover-lift reveal fade-left" style="animation-delay: 0.2s;">
                        <div class="flex items-center mb-3">
                            <div class="bg-orange-100 p-2 rounded-full mr-3 animate-pulse-slow" style="animation-delay: 0.5s;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Research Impact</h3>
                        </div>
                        <p class="text-gray-600">Foster a culture of research and innovation that addresses critical healthcare challenges and contributes to global medical knowledge.</p>
                    </div>
                </div>
                
                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Goal 3 -->
                    <div class="bg-orange-50 p-6 rounded-lg shadow-md hover-lift reveal fade-right">
                        <div class="flex items-center mb-3">
                            <div class="bg-orange-100 p-2 rounded-full mr-3 animate-pulse-slow" style="animation-delay: 1s;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Community Service</h3>
                        </div>
                        <p class="text-gray-600">Strengthen partnerships with healthcare facilities and community organizations to improve public health outcomes and provide valuable learning experiences for students.</p>
                    </div>
                    
                    <!-- Goal 4 -->
                    <div class="bg-orange-50 p-6 rounded-lg shadow-md hover-lift reveal fade-right" style="animation-delay: 0.2s;">
                        <div class="flex items-center mb-3">
                            <div class="bg-orange-100 p-2 rounded-full mr-3 animate-pulse-slow" style="animation-delay: 1.5s;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Global Engagement</h3>
                        </div>
                        <p class="text-gray-600">Establish and strengthen international collaborations with leading medical institutions to enhance educational opportunities and research capabilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-orange-500 to-orange-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6 animate-scaleIn">Join Us in Our Mission</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            Be part of our journey to shape the future of healthcare education and improve health outcomes in our community and beyond.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#" class="bg-white text-orange-600 hover:bg-gray-100 px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 animate-glow">
                Explore Programs
            </a>
            <a href="#" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-orange-600 px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                Contact Us
            </a>
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
</body>
</html>