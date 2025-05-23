<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>University E-Management Services</title>
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
            
            @keyframes scaleIn {
                from { transform: scale(0.95); opacity: 0; }
                to { transform: scale(1); opacity: 1; }
            }
            .animate-scaleIn {
                animation: scaleIn 1s ease-out forwards;
            }
            
            @keyframes slideInRight {
                from { transform: translateX(50px); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            .animate-slideInRight {
                animation: slideInRight 1s ease-out forwards;
            }
            
            @keyframes pulse {
                0%, 100% { transform: scale(1); }
                50% { transform: scale(1.05); }
            }
            .animate-pulse-slow {
                animation: pulse 3s infinite;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-10px); }
            }
            .animate-float {
                animation: float 5s ease-in-out infinite;
            }

            @keyframes typing {
                from { width: 0 }
                to { width: 100% }
            }
            .animate-typing {
                overflow: hidden;
                white-space: nowrap;
                animation: typing 3.5s steps(40, end);
            }

            @keyframes shimmer {
                0% { background-position: -1000px 0; }
                100% { background-position: 1000px 0; }
            }
            .animate-shimmer {
                background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0) 100%);
                background-size: 1000px 100%;
                animation: shimmer 2s infinite;
            }

            @keyframes glow {
                0%, 100% { box-shadow: 0 0 5px rgba(255, 154, 77, 0.5); }
                50% { box-shadow: 0 0 20px rgba(255, 154, 77, 0.8); }
            }
            .animate-glow {
                animation: glow 2s ease-in-out infinite;
            }

            @keyframes spin-slow {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
            .animate-spin-slow {
                animation: spin-slow 15s linear infinite;
            }

            @keyframes bounce-slow {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-15px); }
            }
            .animate-bounce-slow {
                animation: bounce-slow 4s ease-in-out infinite;
            }

            .reveal {
                position: relative;
                opacity: 0;
                transition: all 1s ease;
            }
            .reveal.active {
                opacity: 1;
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

            .card-hover {
                transition: all 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-10px);
            }

            .card-3d {
                transition: transform 0.5s ease;
                transform-style: preserve-3d;
            }

            .progress-bar {
                position: relative;
                height: 8px;
                border-radius: 4px;
                background-color: #f3f4f6;
                overflow: hidden;
            }
            .progress-bar-fill {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                background-color: #ff5a1f;
                transition: width 1s ease;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #ff8a4c;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #ff5a1f;
        }

        /* Decorative elements */
        .circle-decoration {
            position: absolute;
            border-radius: 50%;
            z-index: -1;
            opacity: 0.5;
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

<body class=" font-serif">
    <!-- Decorative Elements -->
  

  <!-- Navbar -->
  <nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-10 animate-fade-in p-6">
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
                    <div class="relative group">
                        <a href="/" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded">
                            HOME
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                    <!-- Other Links -->
                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded">
                            DIVISIONS
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded">
                            COLLEGE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded">
                            FEATURE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded">
                            SERVICE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                    <a href="{{ url('/events') }}" class="px-3 py-2 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded">EVENTS</a>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded">
                            PORTAL
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4">
                        Divisions
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/universitycounsel') }}" class="block text-gray-600 py-1 pl-4">University Council</a>
                        <a href="{{ url('/presidentoffice') }}" class="block text-gray-600 py-1 pl-4">President's Office</a>
                        <a href="{{ url('/vission') }}" class="block text-gray-600 py-1 pl-4">Vision and Mission</a>
                        <a href="{{ url('/logo') }}" class="block text-gray-600 py-1 pl-4">University Logo</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4">
                        College
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ route('colleges.medicine') }}" class="block text-gray-600 py-1 pl-4">College of Medicine</a>
                   
                        <a href="{{ route('colleges.pharmacy') }}" class="block text-gray-600 py-1 pl-4">College of Pharmacy</a>
                        <a href="{{ route('colleges.nursing') }}" class="block text-gray-600 py-1 pl-4">College of Nursing</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4">
                        Feature
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/library') }}" class="block text-gray-600 py-1 pl-4">Library</a>
                      
                        <a href="{{ url('/relevantwebs') }}" class="block text-gray-600 py-1 pl-4">Relevant Websites</a>
                        <a href="{{ url('/acadimicrelations') }}" class="block text-gray-600 py-1 pl-4">Academic Relations</a>
                        <a href="{{ url('/acadimicprofile') }}" class="block text-gray-600 py-1 pl-4">Academicians Profile</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4">
                        Service
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/it') }}" class="block text-gray-600 py-1 pl-4">IT Services</a>
                        <a href="{{ url('/documents') }}" class="block text-gray-600 py-1 pl-4">Documents</a>
                        <a href="{{ url('/e-management') }}" class="block text-gray-600 py-1 pl-4">E-Management</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4">
                        Portal
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="/student_login" class="block text-gray-600 py-1 pl-4">Student Portal</a>
                        <a href="/teacher_login" class="block text-gray-600 py-1 pl-4">Teacher Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Header Section -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 pt-28 bg-white">
        <div class="bg-white py-10 px-6 shadow-lg rounded-lg" data-aos="fade-up">
            <!-- Title -->
            <h1 class="text-4xl font-bold text-center text-gray-900 gradient-text">E-Management Services</h1>

            <!-- Separator Line -->
            <div class="w-full max-w-4xl mx-auto border-t border-gray-200 mt-4 mb-2"></div>

            <!-- Metadata -->
            <div class="flex justify-center items-center space-x-4 text-gray-600 text-sm mb-4">
               
                <p class="text-lg text-gray-600 leading-relaxed justify-center text-justify p-6">
                Our E-Management Services provide comprehensive digital solutions that streamline academic and administrative processes across the university. We leverage cutting-edge technology to enhance the educational experience for students, faculty, and staff.
            
                </p>
            </div>  <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a href="#services" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105 animate-glow">
                        Explore Services
                    </a>
                    <a href="#contact" class="bg-white border-2 border-orange-500 text-orange-500 hover:bg-orange-50 px-6 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                        Contact Support
                    </a>
                </div>
                </div>
               
            </div>

            <!-- Section Title -->
         
        </div> </div>

 


    <!-- Services Section -->
    <section id="services" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">Our E-Management Systems</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Learning Management System</h3>
                    </div>
                    <p class="text-gray-600">
                        Our comprehensive LMS provides a digital learning environment where students can access course materials, submit assignments, participate in discussions, and track their academic progress.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Interactive course content and multimedia resources</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Automated grading and feedback systems</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Collaborative learning tools and discussion forums</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Mobile-friendly interface for learning on the go</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom" style="animation-delay: 0.2s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow" style="animation-delay: 0.5s">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Student Information System</h3>
                    </div>
                    <p class="text-gray-600">
                        Our secure SIS maintains comprehensive student records, academic histories, and personal information, providing authorized access to students, faculty, and administrative staff.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Centralized student data management</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Academic progress tracking and reporting</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Secure access to transcripts and records</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Customizable dashboards for different user roles</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom" style="animation-delay: 0.4s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow" style="animation-delay: 1s">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Course Registration System</h3>
                    </div>
                    <p class="text-gray-600">
                        Our intuitive course registration platform allows students to browse available courses, plan their academic schedules, and register for classes with real-time availability updates.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Streamlined course selection and registration</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Waitlist management and notifications</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Prerequisite verification and degree audit</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Schedule conflict detection and resolution</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom" style="animation-delay: 0.6s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow" style="animation-delay: 1.5s">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Grading & Assessment</h3>
                    </div>
                    <p class="text-gray-600">
                        Our comprehensive grading system enables faculty to manage assessments, record grades, and provide feedback while giving students transparent access to their academic performance.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Customizable grading schemes and rubrics</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Automated grade calculation and weighting</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Performance analytics and progress tracking</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Secure grade submission and approval workflows</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom" style="animation-delay: 0.8s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow" style="animation-delay: 2s">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Digital Campus</h3>
                    </div>
                    <p class="text-gray-600">
                        Our digital campus platform creates a virtual university environment where students can access services, participate in campus activities, and engage with the university community online.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Virtual campus tours and interactive maps</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Online student organizations and clubs</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Digital event management and attendance</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Virtual office hours and advising sessions</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom" style="animation-delay: 1s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow" style="animation-delay: 2.5s">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Mobile Applications</h3>
                    </div>
                    <p class="text-gray-600">
                        Our suite of mobile applications extends the university experience to smartphones and tablets, providing on-the-go access to essential services and information.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Native iOS and Android applications</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Push notifications for important updates</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Offline access to course materials</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Biometric authentication for secure access</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- System Integration Diagram -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">Integrated E-Management Ecosystem</h2>
            
            <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-lg card-3d">
                <div class="relative h-96 md:h-[500px]">
                    <!-- Central Hub -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-orange-100 rounded-full w-40 h-40 flex items-center justify-center z-10 animate-pulse-slow">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                            <p class="font-bold text-gray-800 mt-2">Central Data Hub</p>
                        </div>
                    </div>
                    
                    <!-- Connecting Lines (using pseudo-elements in CSS would be better, but for simplicity) -->
                    <div class="absolute top-0 left-0 w-full h-full">
                        <!-- Lines will be drawn with JavaScript -->
                    </div>
                    
                    <!-- Surrounding Systems -->
                    <div class="absolute top-[15%] left-[20%] bg-orange-50 rounded-lg p-4 shadow-md w-32 text-center animate-float" style="animation-delay: 0.5s">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <p class="font-medium text-gray-700 mt-2">LMS</p>
                    </div>
                    
                    <div class="absolute top-[15%] right-[20%] bg-orange-50 rounded-lg p-4 shadow-md w-32 text-center animate-float" style="animation-delay: 1s">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <p class="font-medium text-gray-700 mt-2">SIS</p>
                    </div>
                    
                    <div class="absolute bottom-[15%] left-[20%] bg-orange-50 rounded-lg p-4 shadow-md w-32 text-center animate-float" style="animation-delay: 1.5s">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <p class="font-medium text-gray-700 mt-2">Grading</p>
                    </div>
                    
                    <div class="absolute bottom-[15%] right-[20%] bg-orange-50 rounded-lg p-4 shadow-md w-32 text-center animate-float" style="animation-delay: 2s">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <p class="font-medium text-gray-700 mt-2">Mobile Apps</p>
                    </div>
                    
                    <div class="absolute top-1/2 left-[5%] bg-orange-50 rounded-lg p-4 shadow-md w-32 text-center animate-float" style="animation-delay: 2.5s">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="font-medium text-gray-700 mt-2">Registration</p>
                    </div>
                    
                    <div class="absolute top-1/2 right-[5%] bg-orange-50 rounded-lg p-4 shadow-md w-32 text-center animate-float" style="animation-delay: 3s">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <p class="font-medium text-gray-700 mt-2">Digital Campus</p>
                    </div>
                </div>
                
                <div class="mt-8 text-center">
                    <p class="text-gray-600">Our integrated e-management ecosystem connects all digital services through a central data hub, ensuring seamless information flow and consistent user experience across platforms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-gradient-to-r from-orange-200 via-orange-100 to-orange-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">System Performance</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <!-- Stat 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center reveal fade-bottom">
                    <div class="text-4xl font-bold text-orange-500 mb-2">
                        <span class="counter" data-target="99.9">0</span>%
                    </div>
                    <p class="text-gray-700 font-medium">System Uptime</p>
                    <div class="mt-4 progress-bar">
                        <div class="progress-bar-fill" style="width: 99.9%"></div>
                    </div>
                </div>
                
                <!-- Stat 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center reveal fade-bottom" style="animation-delay: 0.2s">
                    <div class="text-4xl font-bold text-orange-500 mb-2">
                        <span class="counter" data-target="25000">0</span>+
                    </div>
                    <p class="text-gray-700 font-medium">Daily Active Users</p>
                    <div class="mt-4 progress-bar">
                        <div class="progress-bar-fill" style="width: 85%"></div>
                    </div>
                </div>
                
                <!-- Stat 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center reveal fade-bottom" style="animation-delay: 0.4s">
                    <div class="text-4xl font-bold text-orange-500 mb-2">
                        <span class="counter" data-target="5000">0</span>+
                    </div>
                    <p class="text-gray-700 font-medium">Courses Managed</p>
                    <div class="mt-4 progress-bar">
                        <div class="progress-bar-fill" style="width: 78%"></div>
                    </div>
                </div>
                
                <!-- Stat 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center reveal fade-bottom" style="animation-delay: 0.6s">
                    <div class="text-4xl font-bold text-orange-500 mb-2">
                        <span class="counter" data-target="98">0</span>%
                    </div>
                    <p class="text-gray-700 font-medium">User Satisfaction</p>
                    <div class="mt-4 progress-bar">
                        <div class="progress-bar-fill" style="width: 98%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- User Guides Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">User Guides</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Guide 1: Students -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg shadow-md overflow-hidden card-hover reveal fade-left">
                    <div class="h-40 bg-orange-200 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-orange-500 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-orange-200 to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">For Students</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Course registration and enrollment</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Accessing course materials and assignments</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Checking grades and academic progress</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Using mobile applications</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <a href="#" class="inline-block bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 transition-colors animate-shimmer">
                                View Student Guide
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Guide 2: Faculty -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg shadow-md overflow-hidden card-hover reveal fade-bottom">
                    <div class="h-40 bg-orange-200 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-orange-500 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-orange-200 to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">For Faculty</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Course setup and content management</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Creating and grading assessments</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Student performance tracking</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Communication tools and office hours</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <a href="#" class="inline-block bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 transition-colors animate-shimmer">
                                View Faculty Guide
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Guide 3: Administrators -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg shadow-md overflow-hidden card-hover reveal fade-right">
                    <div class="h-40 bg-orange-200 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-orange-500 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-orange-200 to-transparent h-20"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">For Administrators</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>System configuration and management</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>User account administration</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Data reporting and analytics</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Security and compliance management</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <a href="#" class="inline-block bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 transition-colors animate-shimmer">
                                View Admin Guide
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">
                Frequently Asked Questions
            </h2>

            <div class="max-w-4xl mx-auto space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md reveal fade-bottom" style="animation-delay: 0.1s">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-xl font-bold text-gray-800">How do I reset my E-Management account password?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 faq-arrow transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <p>You can reset your password by clicking the "Forgot Password" link on the login page. Enter your university email address, and you'll receive a password reset link. For security reasons, the link expires after 24 hours. If you don't receive the email, check your spam folder or contact the IT Help Desk.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md reveal fade-bottom" style="animation-delay: 0.2s">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-xl font-bold text-gray-800">How do I access my courses on the Learning Management System?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 faq-arrow transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <p>After logging into the E-Management portal, click on the "LMS" icon or select it from the main menu. You'll see a dashboard with all your enrolled courses. Click on any course tile to access its content, assignments, and resources. If you don't see a course you're registered for, contact your instructor or the registrar's office.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md reveal fade-bottom" style="animation-delay: 0.3s">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-xl font-bold text-gray-800">When can I register for next semester's courses?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 faq-arrow transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <p>Course registration dates are published in the academic calendar and vary based on your academic standing. Seniors typically register first, followed by juniors, sophomores, and freshmen. You'll receive an email notification when your registration window opens. You can view the exact date and time in your Student Information System dashboard under "Registration Status."</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md reveal fade-bottom" style="animation-delay: 0.4s">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-xl font-bold text-gray-800">How do I view my grades and academic progress?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 faq-arrow transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <p>You can view your grades in two ways: For current course grades, access the LMS and navigate to each course's gradebook. For your official transcript and cumulative GPA, log into the Student Information System and select "Academic Records" or "Transcript." You can also generate a degree audit report to track your progress toward graduation requirements.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white p-6 rounded-lg shadow-md reveal fade-bottom" style="animation-delay: 0.5s">
                    <button class="flex justify-between items-center w-full text-left faq-toggle">
                        <h3 class="text-xl font-bold text-gray-800">Is there a mobile app for the E-Management system?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 faq-arrow transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                        <p>Yes, our university offers a comprehensive mobile app that provides access to all E-Management services. The app is available for both iOS and Android devices. Search for "University Name Mobile" in your app store. After downloading, log in with your university credentials to access your courses, grades, campus maps, event calendars, and more. The app also supports push notifications for important announcements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">E-Management Services</h3>
                    <p class="text-gray-400">Providing innovative digital solutions for the university community since 2005.</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <p class="text-gray-400">Technology Center</p>
                    <p class="text-gray-400">123 University Avenue</p>
                    <p class="text-gray-400">University City, State 12345</p>
                    <p class="text-gray-400 mt-2">e-support@university.edu</p>
                    <p class="text-gray-400">(555) 123-4567</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Help Center</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">System Status</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Training Resources</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">User Guides</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Terms of Use</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">System Updates</h3>
                    <p class="text-gray-400 mb-4">Subscribe to receive notifications about system updates and maintenance.</p>
                    <form class="space-y-4">
                        <div>
                            <input type="email" placeholder="Your email address" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                        <button type="submit" class="w-full bg-orange-600 text-white py-2 px-4 rounded-md hover:bg-orange-700 transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 University E-Management Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Animations and Interactions -->
    <script>
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
        
        // FAQ Accordion
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const arrow = button.querySelector('.faq-arrow');
                
                // Toggle content visibility
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    content.classList.add('hidden');
                    arrow.classList.remove('rotate-180');
                } else {
                    content.classList.remove('hidden');
                    content.style.maxHeight = content.scrollHeight + "px";
                    arrow.classList.add('rotate-180');
                }
            });
        });
        
        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the slower
        
        function runCounter() {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                
                // Check if counter is in viewport
                const rect = counter.getBoundingClientRect();
                const isInViewport = (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
                
                if (isInViewport) {
                    const inc = target / speed;
                    
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(() => runCounter(), 1);
                    } else {
                        counter.innerText = target;
                    }
                }
            });
        }
        
        window.addEventListener('scroll', runCounter);
        runCounter(); // Initial check
        
        // 3D Card Effect
        document.querySelectorAll('.card-3d').forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
            });
        });
        
        // Draw connecting lines for the system integration diagram
        window.addEventListener('load', () => {
            const canvas = document.createElement('canvas');
            const container = document.querySelector('.card-3d');
            const centralHub = container.querySelector('.rounded-full');
            const systems = container.querySelectorAll('.absolute.bg-orange-50');
            
            canvas.width = container.offsetWidth;
            canvas.height = container.offsetHeight;
            canvas.style.position = 'absolute';
            canvas.style.top = '0';
            canvas.style.left = '0';
            canvas.style.pointerEvents = 'none';
            canvas.style.zIndex = '5';
            
            container.appendChild(canvas);
            
            const ctx = canvas.getContext('2d');
            
            function drawLines() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                
                const hubRect = centralHub.getBoundingClientRect();
                const containerRect = container.getBoundingClientRect();
                
                const hubCenterX = hubRect.left + hubRect.width / 2 - containerRect.left;
                const hubCenterY = hubRect.top + hubRect.height / 2 - containerRect.top;
                
                systems.forEach(system => {
                    const systemRect = system.getBoundingClientRect();
                    const systemCenterX = systemRect.left + systemRect.width / 2 - containerRect.left;
                    const systemCenterY = systemRect.top + systemRect.height / 2 - containerRect.top;
                    
                    // Draw line
                    ctx.beginPath();
                    ctx.moveTo(hubCenterX, hubCenterY);
                    ctx.lineTo(systemCenterX, systemCenterY);
                    ctx.strokeStyle = 'rgba(251, 146, 60, 0.4)';
                    ctx.lineWidth = 2;
                    ctx.stroke();
                    
                    // Draw pulsing circle at the connection point
                    const now = Date.now() / 1000;
                    const size = 4 + Math.sin(now * 2) * 2;
                    ctx.beginPath();
                    ctx.arc(systemCenterX, systemCenterY, size, 0, Math.PI * 2);
                    ctx.fillStyle = 'rgba(251, 146, 60, 0.8)';
                    ctx.fill();
                });
                
                requestAnimationFrame(drawLines);
            }
            
            drawLines();
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