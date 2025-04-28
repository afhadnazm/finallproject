<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>President's Office</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
            0%, 100% { box-shadow: 0 0 5px rgba(234, 88, 12, 0.5); }
            50% { box-shadow: 0 0 20px rgba(234, 88, 12, 0.8); }
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
                box-shadow: 0 0 0 0 rgba(234, 88, 12, 0.3);
            }
            100% {
                box-shadow: 0 0 0 20px rgba(234, 88, 12, 0);
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
            border-right: 3px solid #ea580c;
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
            box-shadow: 0 0 15px rgba(234, 88, 12, 0.7);
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
            background: linear-gradient(90deg, #ea580c, #c2410c);
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
            border-top: 2px solid #ea580c;
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
            background: linear-gradient(90deg, #ea580c, #c2410c);
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
            color: #ea580c;
        }

        .nav-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: #ea580c;
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

        /* Animated border */
        .animated-border {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
        }

        .animated-border::after {
            content: '';
            position: absolute;
            inset: 0;
            border: 2px solid transparent;
            border-radius: 12px;
            background: linear-gradient(45deg, #ea580c, transparent, #ea580c) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            animation: border-dance 8s linear infinite;
        }

        @keyframes border-dance {
            0% { background-position: 0% 0%; }
            100% { background-position: 400% 0%; }
        }

        /* List item animation */
        .animated-list li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .animated-list li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 0.5rem;
            height: 0.5rem;
            background-color: #ea580c;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .animated-list li:hover {
            transform: translateX(5px);
        }

        .animated-list li:hover:before {
            background-color: #c2410c;
            transform: scale(1.5);
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
<body class="bg-white text-gray-900" style="font-family: Cambria, Georgia, serif; max-width: 100%;
  overflow-x: hidden;">
    <!-- Scroll Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Decorative Elements -->
    

    <!-- Navbar -->
    <nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-10 animate-fadeIn glass-effect p-6">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo" class="h-24 w-24 rounded-md">
                <span class="ml-2 text-lg font-semibold text-orange-600">Hawler Medical University</span>
            </div>

            <!-- Menu Items (Hidden on mobile) -->
            <div class="hidden md:flex space-x-1">
                <!-- Home Dropdown -->
                <div class="relative dropdown">
                    <a href="/" class="nav-item text-gray-700 flex items-center">
                        HOME
                        <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <div class="py-2 px-4">
                            <a href="{{ route('colleges.medicine') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Medicine</a>
                          
                            <a href="{{ route('colleges.pharmacy') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Pharmacy</a>
                            <a href="{{ route('colleges.nursing') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">College of Nursing</a>
                        </div>
                    </div>
                </div>

                <div class="relative dropdown">
                    <a href="#" class="nav-item text-gray-700 flex items-center">
                        FEATURE
                        <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <div class="py-2 px-4">
                            <a href="{{ url('/library') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Library</a>
             
                            <a href="{{ url('/relevantwebs') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Relevant Websites</a>
                            <a href="{{ url('/acadimicrelations') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Academic Relations</a>
                            <a href="{{ url('/acadimicprofile') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Academicians Profile</a>
                        </div>
                    </div>
                </div>

                <div class="relative dropdown">
                    <a href="#" class="nav-item text-gray-700 flex items-center">
                        SERVICE
                        <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <div class="py-2 px-4">
                            <a href="{{ url('/it') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">IT Services</a>
                            <a href="{{ url('/documents') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Documents</a>
                            <a href="{{ url('/e-management') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">E-Management</a>
                        </div>
                    </div>
                </div>

                <a href="{{ url('/events') }}" class="nav-item text-gray-700">EVENTS</a>

                <div class="relative dropdown">
                    <a href="#" class="nav-item text-gray-700 flex items-center">
                        PORTAL
                        <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

            <!-- Hamburger Button (Mobile) -->
            <div class="md:hidden flex items-center">
                <button id="menu-btn" class="text-orange-500 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg px-4 py-4 space-y-2">
            <a href="/" class="block text-gray-700 py-2">Home</a>
            <a href="{{ url('/aboutus') }}" class="block text-gray-700 py-2">About Us</a>
            <a href="{{ url('/contactus') }}" class="block text-gray-700 py-2">Contact Us</a>
            <a href="{{ url('/events') }}" class="block text-gray-700 py-2">Events</a>

            <p class="font-bold text-orange-500 mt-4">Divisions</p>
            <a href="{{ url('/universitycounsel') }}" class="block text-gray-600 py-1 pl-4">University Council</a>
            <a href="{{ url('/presidentoffice') }}" class="block text-gray-600 py-1 pl-4">President's Office</a>
            <a href="{{ url('/vission') }}" class="block text-gray-600 py-1 pl-4">Vision and Mission</a>
            <a href="{{ url('/logo') }}" class="block text-gray-600 py-1 pl-4">University Logo</a>
        </div>
    </div>
</nav>



    <!-- Hero Section with Page Title -->
  

    <div class="max-w-5xl mx-auto px-4 py-52 text-gray-800">
        <!-- Image -->
        <div class="mb-8" data-aos="zoom-in">
            <div class="animated-border hover-lift">
                <img src="{{ asset('storage/images/UniPresident.jpg') }}" alt="University President" class="w-full rounded-md shadow-md">
            </div>
        </div>

        <!-- Role Header Card -->
        <div class="flex items-center gap-4 text-sm text-gray-600 border-t border-b py-3 mb-6 animate-fadeIn" data-aos="fade-up">
            <div class="flex items-center gap-2 text-orange-500 font-semibold animate-pulse">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2.5 2.5v15l7.5-3.75L17.5 17.5v-15L10 6.25 2.5 2.5z" /></svg>
                University President
            </div>
            <span class="flex items-center gap-1 hover-scale"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 2a1 1 0 000 2h8a1 1 0 000-2H6zM3 6a1 1 0 011-1h12a1 1 0 011 1v11a1 1 0 01-1 1H4a1 1 0 01-1-1V6z" /></svg> 13 October 2020</span>
        
        </div>

        <!-- President Info -->
        <div class="mb-8 bg-white p-6 rounded-lg shadow-md hover-lift" data-aos="fade-up" data-aos-delay="200">
            <h2 class="font-semibold text-lg gradient-text">Professor Dr. Nooraddin Ismail Alla Werdi, University President</h2>
            <p class="text-sm mt-1 animate-fadeIn delay-100">Telephone number: <span class="hover-scale inline-block">+964 66 2233444</span></p>
            <p class="text-sm animate-fadeIn delay-200">Email address: <a href="mailto:nooraddin.alla@hmu.edu.krd" class="text-blue-600 hover:text-orange-500 transition-colors hover-scale inline-block">nooraddin.alla@hmu.edu.krd</a></p>
        </div>

        <!-- Responsibilities -->
        <div class="prose prose-sm text-justify text-gray-700 bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
            <p class="animate-fadeIn">The University President is responsible to oversee all activities and issues of the university and its colleges. Specific activities include:</p>
            <ul class="list-disc pl-6 mt-4 animated-list">
                <li class="animate-slideInLeft" style="animation-delay: 0.1s;">Maintain high level relations with other universities and related governmental ministries and directorates</li>
                <li class="animate-slideInLeft" style="animation-delay: 0.2s;">Report to the Ministry of Higher Education and Scientific Research and keep the communication well maintained</li>
                <li class="animate-slideInLeft" style="animation-delay: 0.3s;">Approve assignment and release of deans, assistant deans and heads of departments</li>
                <li class="animate-slideInLeft" style="animation-delay: 0.4s;">Approve recruitment of staff</li>
                <li class="animate-slideInLeft" style="animation-delay: 0.5s;">Supervise training and staff</li>
                <li class="animate-slideInLeft" style="animation-delay: 0.6s;">Supervise planning and follow up activities</li>
                <li class="animate-slideInLeft" style="animation-delay: 0.7s;">Oversee the quality assurance activities</li>
                <li class="animate-slideInLeft" style="animation-delay: 0.8s;">Exchange of correspondence with other universities and medical departments and organizations in the region or outside the region</li>
                <li class="animate-slideInLeft" style="animation-delay: 0.9s;">Head the University Council meetings</li>
                <li class="animate-slideInLeft" style="animation-delay: 1.0s;">Approve minutes of colleges' council meetings</li>
                <li class="animate-slideInLeft" style="animation-delay: 1.1s;">Hold other admin and financial authorities delegated by the Ministry of Higher Education and Scientific Research</li>
                <li class="animate-slideInLeft" style="animation-delay: 1.2s;">Member of the Ministerial Council of the Higher Education and Scientific Research</li>
                <li class="animate-slideInLeft" style="animation-delay: 1.3s;">Patron of Zanco Journal of Medical Sciences, Erbil Dental Journal, and Erbil Journal of Nursing and Midwifery</li>
            </ul>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-orange-500 text-white rounded-full p-3 shadow-lg hidden hover:bg-orange-600 transition duration-300 animate-bounce-slow z-50 animate-ripple">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <section class="w-full">
        <footer class="bg-gray-900 text-gray-300 py-10 px-4 md:px-6 lg:px-12">
            <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Contact HMU Section -->
                <div class="animate-fadeIn" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-lg font-semibold text-white mb-4 gradient-text">Contact HMU</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center hover-scale">
                            <span class="mr-2 animate-pulse">✉️</span>
                            <a href="mailto:info@hmu.edu.krd" class="hover:text-orange-500 transition-colors">info@hmu.edu.krd</a>
                        </li>
                        <li class="flex items-center hover-scale">
                            <span class="mr-2 animate-spin" style="animation-duration: 10s;">🌐</span>
                            <a href="http://www.hmu.edu.krd" class="hover:text-orange-500 transition-colors">www.hmu.edu.krd</a>
                        </li>
                        <li class="flex items-center hover-scale">
                            <span class="mr-2">📞</span>
                            Tel: +964 66 227 3384
                        </li>
                        <li class="flex items-center hover-scale">
                            <span class="mr-2">📠</span>
                            Fax: +964 66 227 3382
                        </li>
                        <li class="flex items-start hover-scale">
                            <span class="mr-2 animate-bounce-slow">📍</span>
                            <span>
                                Iraq, Kurdistan Region,<br />
                                Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
                                P.O. Box 178
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Opening Hours Section -->
                <div class="animate-fadeIn" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg font-semibold text-white mb-4 gradient-text">Opening Hours</h3>
                    <p class="hover-scale">Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
                    <p class="hover-scale">Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1 animate-pulse">Closed</span></p>
                </div>

                <!-- Web Traffic Section -->
                <div class="animate-fadeIn" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-lg font-semibold text-white mb-4 gradient-text">Web Traffic</h3>
                    <ul class="space-y-1">
                        <li class="hover-scale">👤 Today: <span class="text-gray-100">2265</span></li>
                        <li class="hover-scale">👤 Yesterday: <span class="text-gray-100">3898</span></li>
                        <li class="hover-scale">👤 This Week: <span class="text-gray-100">12748</span></li>
                        <li class="hover-scale">👤 This Month: <span class="text-gray-100">90849</span></li>
                        <li class="hover-scale">👤 Total: <span class="text-gray-100">4394545</span></li>
                    </ul>
                    <hr class="my-4 border-gray-700" />
                    <p class="text-center text-gray-100 text-xl font-bold animate-pulse">16</p>
                    <p class="text-center text-sm text-gray-500">Online</p>
                    <p class="text-center text-sm mt-2">21 November 2024</p>
                </div>

                <!-- QR Code Section -->
                <div class="animate-fadeIn" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-lg font-semibold text-white mb-4 gradient-text">QR Code</h3>
                    <div class="hover-glow rounded-lg p-2 inline-block">
                        <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto mb-2 hover-scale" />
                    </div>
                    <p class="text-center text-gray-500 text-sm">www.nik-o-mat.de</p>
                </div>
            </div>
            <div class="text-center text-gray-500 text-sm mt-8 animate-fadeIn" data-aos="fade-up" data-aos-delay="500">
                <p>Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
            </div>
        </footer>
    </section>

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