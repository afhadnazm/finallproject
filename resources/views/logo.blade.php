<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>University Logo - Hawler Medical University</title>
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
        
        /* Logo specific styles */
        .logo-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .logo-card:hover {
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
        
        /* Logo animation */
        .logo-spin {
            transition: transform 1.5s ease;
        }
        
        .logo-spin:hover {
            transform: rotate(360deg);
        }
        
        .logo-pulse {
            animation: pulse 3s infinite;
        }
        
        /* Symbol highlight effect */
        .symbol-highlight {
            position: relative;
            display: inline-block;
        }
        
        .symbol-highlight::after {
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
        
        .symbol-highlight:hover::after {
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

<body class="" style="font-family: Cambria, Georgia, serif; max-width: 100%;
  overflow-x: hidden;">
    <!-- Scroll Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>
    
    <!-- Decorative Elements -->
  
    <!-- Simplified Navbar -->
    <nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-10 animate-fadeIn glass-effect">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo" class="h-10 w-10 rounded-md">
                    <span class="ml-2 text-lg font-semibold text-orange-600">Hawler Medical University</span>
                </div>

                <!-- Menu Items (Hidden on mobile) -->
                <div class="hidden md:flex space-x-1">
                    <!-- Home Dropdown -->
                    <div class="relative dropdown">
                        <a href="/" class="nav-item text-gray-700 flex items-center">
                            HOME
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-content">
                            <div class="py-2 px-4">
                                <a href="{{ url('/aboutus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">About us</a>
                                <a href="{{ url('/contactus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Contact us</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Other Links -->
                    <div class="relative dropdown">
                        <a href="#" class="nav-item text-gray-700 flex items-center">
                           DIVISIONS
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-content">
                            <div class="py-2 px-4">
                                <a href="{{ url('/universitycounsel') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">University Counsil</a>
                                <a href="{{ url('/presidentoffice') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">President's Office</a>
                                <a href="{{ url('/vission') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Vision and Mission</a>
                                <a href="{{ url('/logo') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">University Logo</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative dropdown">
                        <a href="#" class="nav-item text-gray-700 flex items-center">
                         COLLEGE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-content">
                            <div class="py-2 px-4">
                                <a href="{{ route('colleges.medicine') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Medicine</a>
                                <a href="{{ route('colleges.dentistry') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Dentistry</a>
                                <a href="{{ route('colleges.pharmacy') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Pharmacy</a>
                                <a href="{{ route('colleges.nursing') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Nursing</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative dropdown">
                        <a href="#" class="nav-item text-gray-700 flex items-center">
                        FEATURE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-content">
                            <div class="py-2 px-4">
                                <a href="{{ url('/library') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Library</a>
                                <a href="{{ url('/confrance') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Conferences</a>
                                <a href="{{ url('/relevantwebs') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Relevant Websites</a>
                                <a href="{{ url('/acadimicrelations') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Academic Relations</a>
                                <a href="{{ url('/acadimicprofile') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Academicians Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative dropdown">
                        <a href="#" class="nav-item text-gray-700 flex items-center">
                       SERVICE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-content">
                            <div class="py-2 px-4">
                                <a href="{{ url('/it-service') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">IT Services</a>
                                <a href="{{ url('/documents') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Documents</a>
                                <a href="{{ url('/e-management') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">E-Management</a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ url('/events') }}" class="nav-item text-gray-700">EVENTS</a>
                    
                    <div class="relative dropdown">
                        <a href="#" class="nav-item text-gray-700 flex items-center">
                       PORTAL
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-content">
                            <div class="py-2 px-4">
                                <a href="/student_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Student Portal</a>
                                <a href="/teacher_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Teacher Portal</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <!-- Login Button -->
                    <button type="button" class="hidden md:block text-white bg-gradient-to-r from-orange-500 to-orange-600 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-orange-300 font-medium rounded-lg px-4 py-1.5 text-sm">Login</button>
                    
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 pt-28 bg-white">
        <div class="bg-white py-10 px-6 shadow-lg rounded-lg" data-aos="fade-up">
            <!-- Title -->
            <h1 class="text-4xl font-bold text-center text-gray-900 gradient-text">University Logo</h1>

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

    <!-- Main Content Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Logo Image Section -->
                    <div class="flex justify-center reveal fade-right">
                        <div class="relative">
                            <div class="absolute inset-0 bg-orange-500 rounded-full opacity-10 animate-pulse-slow"></div>
                            <img src="{{ asset('storage/images/logo.jpg') }}" alt="Hawler Medical University Logo" class="w-64 h-64 object-contain relative z-10 logo-spin hover-scale">
                            <div class="absolute -inset-4 border-2 border-dashed border-orange-300 rounded-full animate-spin-slow"></div>
                        </div>
                    </div>
                    
                    <!-- Logo Description Section -->
                    <div class="reveal fade-left">
                        <h2 class="text-3xl font-bold gradient-text mb-6">University Logo Symbolism</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            The logo of Hawler Medical University is rich with symbolism that represents our heritage, mission, and values. Each element has been carefully designed to convey meaning:
                        </p>
                        
                        <div class="space-y-4">
                            <div class="bg-orange-50 p-4 rounded-lg hover-lift">
                                <h3 class="text-xl font-semibold text-orange-600 mb-2">Erbil Citadel</h3>
                                <p class="text-gray-700">
                                    The straight lines inside the emblem and the upper short lines refer to <span class="symbol-highlight font-medium">Erbil Citadel</span>, which is the symbol of Erbil city and its ancient history and civilization.
                                </p>
                            </div>
                            
                            <div class="bg-orange-50 p-4 rounded-lg hover-lift">
                                <h3 class="text-xl font-semibold text-orange-600 mb-2">Nail and Snake</h3>
                                <p class="text-gray-700">
                                    The <span class="symbol-highlight font-medium">nail</span> is the first symbol of writing by human being and it shows that the place is very ancient. The <span class="symbol-highlight font-medium">snake</span> is a symbol of wisdom, health and medicine.
                                </p>
                            </div>
                            
                            <div class="bg-orange-50 p-4 rounded-lg hover-lift">
                                <h3 class="text-xl font-semibold text-orange-600 mb-2">Eagle</h3>
                                <p class="text-gray-700">
                                    The <span class="symbol-highlight font-medium">eagle</span> is a symbol of determination, proud, strive, and revolution of our nation.
                                </p>
                            </div>
                            
                            <div class="bg-orange-50 p-4 rounded-lg hover-lift">
                                <h3 class="text-xl font-semibold text-orange-600 mb-2">Surrounding Lines</h3>
                                <p class="text-gray-700">
                                    The <span class="symbol-highlight font-medium">lines around the Citadel</span> are symbols of scientific route and the way of university which goes with wisdom and preciseness. It is also a symbol of communication between the history, past, present and future.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Elements Interactive Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center gradient-text mb-12 animate-scaleIn">Logo Elements</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <!-- Element 1: Citadel -->
                <div class="bg-white rounded-lg shadow-md p-6 hover-lift reveal fade-bottom">
                    <div class="h-40 flex items-center justify-center">
                        <div class="w-32 h-32 bg-orange-100 rounded-lg flex items-center justify-center animate-float">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center text-gray-800 mb-2">Erbil Citadel</h3>
                    <p class="text-gray-600 text-center">Symbol of Erbil's ancient history and civilization</p>
                </div>
                
                <!-- Element 2: Nail -->
                <div class="bg-white rounded-lg shadow-md p-6 hover-lift reveal fade-bottom" style="animation-delay: 0.2s;">
                    <div class="h-40 flex items-center justify-center">
                        <div class="w-32 h-32 bg-orange-100 rounded-lg flex items-center justify-center animate-float" style="animation-delay: 0.5s;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center text-gray-800 mb-2">Nail</h3>
                    <p class="text-gray-600 text-center">First symbol of writing by human beings</p>
                </div>
                
                <!-- Element 3: Snake -->
                <div class="bg-white rounded-lg shadow-md p-6 hover-lift reveal fade-bottom" style="animation-delay: 0.4s;">
                    <div class="h-40 flex items-center justify-center">
                        <div class="w-32 h-32 bg-orange-100 rounded-lg flex items-center justify-center animate-float" style="animation-delay: 1s;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-orange-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center text-gray-800 mb-2">Snake</h3>
                    <p class="text-gray-600 text-center">Symbol of wisdom, health and medicine</p>
                </div>
                
                <!-- Element 4: Eagle -->
                <div class="bg-white rounded-lg shadow-md p-6 hover-lift reveal fade-bottom" style="animation-delay: 0.6s;">
                    <div class="h-40 flex items-center justify-center">
                        <div class="w-32 h-32 bg-orange-100 rounded-lg flex items-center justify-center animate-float" style="animation-delay: 1.5s;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-center text-gray-800 mb-2">Eagle</h3>
                    <p class="text-gray-600 text-center">Symbol of determination, pride, and revolution</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Usage Guidelines -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold gradient-text text-center mb-12 animate-scaleIn">Logo Usage Guidelines</h2>
                
                <div class="bg-orange-50 rounded-lg p-8 shadow-md reveal fade-bottom">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Do's</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Use the official logo files provided by the university</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Maintain the logo's proportions when resizing</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Allow sufficient clear space around the logo</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Use the logo on appropriate backgrounds that ensure visibility</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Don'ts</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <span>Alter the logo's colors or elements</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <span>Distort or stretch the logo</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <span>Add effects such as shadows or outlines</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <span>Use the logo for unauthorized purposes</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-8 text-center">
                        <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 animate-glow">
                            Download Logo Files
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-orange-200 via-orange-100 to-orange-200">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 animate-scaleIn">Need More Information?</h2>
            <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">
                If you have questions about using the university logo or need additional resources, please contact our communications department.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 animate-glow">
                    Contact Communications
                </a>
                <a href="#" class="bg-white border-2 border-orange-500 text-orange-500 hover:bg-orange-50 px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                    View Brand Guidelines
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