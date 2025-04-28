documens
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <title>University Documents & Forms</title>
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
        
        /* Basic Animations */
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
            
            /* Modern Animations */
            @keyframes float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-10px); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            
            @keyframes shimmer {
                0% { background-position: -1000px 0; }
                100% { background-position: 1000px 0; }
            }
            .animate-shimmer {
                background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0) 100%);
                background-size: 1000px 100%;
                animation: shimmer 3s infinite;
            }
            
            @keyframes bounce {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-15px); }
            }
            .animate-bounce-slow {
                animation: bounce 4s infinite;
            }
            
            @keyframes rotate {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
            .animate-rotate {
                animation: rotate 20s linear infinite;
            }
            
            @keyframes typewriter {
                from { width: 0; }
                to { width: 100%; }
            }
            .animate-typewriter {
                overflow: hidden;
                white-space: nowrap;
                border-right: 3px solid orange;
                animation: typewriter 4s steps(44) 1s 1 normal both, 
                           blinkCursor 0.75s step-end infinite;
            }
            
            @keyframes blinkCursor {
                from, to { border-color: transparent; }
                50% { border-color: orange; }
            }
            
            @keyframes wave {
                0% { transform: translateX(0) translateZ(0) scaleY(1); }
                50% { transform: translateX(-25%) translateZ(0) scaleY(0.55); }
                100% { transform: translateX(-50%) translateZ(0) scaleY(1); }
            }
            .animate-wave {
                animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
                transform-origin: center bottom;
            }
            
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
                20%, 40%, 60%, 80% { transform: translateX(5px); }
            }
            .hover-shake:hover {
                animation: shake 0.5s ease-in-out;
            }
            
            /* Scroll Animations */
            .reveal {
                position: relative;
                opacity: 0;
                transition: all 1s ease;
            }
            .reveal.active {
                opacity: 1;
            }
            .reveal.fade-bottom {
                transform: translateY(50px);
            }
            .reveal.fade-bottom.active {
                transform: translateY(0);
            }
            .reveal.fade-left {
                transform: translateX(-50px);
            }
            .reveal.fade-left.active {
                transform: translateX(0);
            }
            .reveal.fade-right {
                transform: translateX(50px);
            }
            .reveal.fade-right.active {
                transform: translateX(0);
            }
            
            /* Card Hover Effects */
            .card-hover {
                transition: all 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            
            /* Gradient Text */
            .gradient-text {
                background: linear-gradient(90deg, #ff8a00, #e52e71);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-size: 200% auto;
                animation: textShine 3s linear infinite;
            }
            
            @keyframes textShine {
                to {
                    background-position: 200% center;
                }
            }
            
            /* Parallax Effect */
            .parallax {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            /* 3D Card Effect */
            .card-3d {
                transition: transform 0.5s ease;
                transform-style: preserve-3d;
            }
            .card-3d:hover {
                transform: rotateY(10deg) rotateX(10deg);
            }
            
            /* Glowing Effect */
            @keyframes glow {
                0%, 100% { box-shadow: 0 0 5px rgba(255, 165, 0, 0.5); }
                50% { box-shadow: 0 0 20px rgba(255, 165, 0, 0.8); }
            }
            .animate-glow {
                animation: glow 2s infinite;
            }
            
            /* Staggered Animation Delays */
            .stagger-1 { animation-delay: 0.1s; }
            .stagger-2 { animation-delay: 0.2s; }
            .stagger-3 { animation-delay: 0.3s; }
            .stagger-4 { animation-delay: 0.4s; }
            .stagger-5 { animation-delay: 0.5s; }
            .stagger-6 { animation-delay: 0.6s; }
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

<body class="font-serif">
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
                                <a href="{{ url('/confrance') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2">Conferences</a>
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
                        <a href="{{ url('/it-service') }}" class="block text-gray-600 py-1 pl-4">IT Services</a>
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
            <h1 class="text-4xl font-bold text-center text-gray-900 gradient-text">Documents & Forms</h1>

            <!-- Separator Line -->
            <div class="w-full max-w-4xl mx-auto border-t border-gray-200 mt-4 mb-2"></div>

            <!-- Metadata -->
            <div class="flex justify-center items-center space-x-4 text-gray-600 text-sm mb-4">
               
                <p class="text-lg text-gray-600 leading-relaxed justify-center text-justify p-6">
                Access, submit, and manage all university-related documents and forms through our comprehensive
                documentation portal. We've streamlined the process to make paperwork simple and efficient.
            
                </p>
            </div>
                </div>
               
            </div>

            <!-- Section Title -->
         
        </div> </div>

    

    <!-- Introduction Section with Typewriter Effect -->
    <section class="py-16 animate-slideUp">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 animate-typewriter">University Documentation Portal</h2>
            
               
                    Our digital document management system ensures secure handling of all your important forms and
                    records, with easy tracking and instant updates on submission status.
                </p>
                
                <div class="mt-10 flex justify-center">
                    <div class="relative w-full max-w-lg">
                        <div class="absolute top-0 -left-4 w-72 h-72 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float"></div>
                        <div class="absolute top-0 -right-4 w-72 h-72 bg-orange-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float" style="animation-delay: 2s"></div>
                        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-orange-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float" style="animation-delay: 4s"></div>
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Documents" class="rounded-lg shadow-2xl animate-float">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Document Categories Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">Document Categories</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Category 1 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md card-hover card-3d animate-slideInRight stagger-1">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Academic Forms</h3>
                    </div>
                    <p class="text-gray-600">
                        Essential forms for academic processes including course registration, add/drop requests, 
                        grade appeals, and degree applications.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Course Registration Form</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Add/Drop Course Request</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Grade Appeal Application</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Degree Application Form</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Transcript Request Form</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-800 transition-colors">
                            View All Academic Forms
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md card-hover card-3d animate-slideInRight stagger-2">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Financial Forms</h3>
                    </div>
                    <p class="text-gray-600">
                        Documents related to tuition, scholarships, financial aid applications, 
                        payment plans, and reimbursement requests.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>FAFSA Verification Documents</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Scholarship Application</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Tuition Payment Plan Form</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Student Account Appeal</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Expense Reimbursement Form</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-800 transition-colors">
                            View All Financial Forms
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md card-hover card-3d animate-slideInRight stagger-3">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Housing & Residence</h3>
                    </div>
                    <p class="text-gray-600">
                        Forms for on-campus housing applications, room change requests, 
                        maintenance reports, and residence life programs.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Housing Application</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Room Change Request</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Maintenance Work Order</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Roommate Agreement Form</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Housing Cancellation Form</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-800 transition-colors">
                            View All Housing Forms
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md card-hover card-3d animate-slideInRight stagger-4">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Research & Grants</h3>
                    </div>
                    <p class="text-gray-600">
                        Documentation for research proposals, grant applications, 
                        IRB approvals, and research compliance requirements.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Research Proposal Template</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Grant Application Form</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>IRB Review Application</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Research Budget Template</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Research Progress Report</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-800 transition-colors">
                            View All Research Forms
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Category 5 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md card-hover card-3d animate-slideInRight stagger-5">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Employment Forms</h3>
                    </div>
                    <p class="text-gray-600">
                        Documents for faculty and staff employment, including hiring paperwork, 
                        benefits enrollment, leave requests, and performance evaluations.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>New Employee Onboarding</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Benefits Enrollment Form</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Leave Request Application</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Performance Evaluation</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Professional Development Request</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-800 transition-colors">
                            View All Employment Forms
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Category 6 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md card-hover card-3d animate-slideInRight stagger-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4 animate-pulse-slow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Administrative Forms</h3>
                    </div>
                    <p class="text-gray-600">
                        General administrative documents including policy acknowledgments, 
                        facility requests, event planning forms, and departmental procedures.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Facility Reservation Request</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Event Planning Form</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Travel Authorization Request</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Policy Acknowledgment Form</span>
                        </li>
                        <li class="flex items-start hover-shake">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Departmental Budget Request</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-800 transition-colors">
                            View All Administrative Forms
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Document Submission Process with Parallax -->
    <section class="py-16 bg-gray-50 parallax" style="background-image: url('https://images.unsplash.com/photo-1586281380117-5a60ae2050cc?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80'); background-position: center;">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white bg-opacity-95 p-8 rounded-lg shadow-xl">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-8 gradient-text">Document Submission Process</h2>
                
                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="flex flex-col md:flex-row items-start reveal fade-right">
                        <div class="bg-orange-100 rounded-full p-4 flex items-center justify-center w-16 h-16 md:mr-6 mb-4 md:mb-0 flex-shrink-0 animate-bounce-slow">
                            <span class="text-2xl font-bold text-orange-600">1</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Select the Appropriate Form</h3>
                            <p class="text-gray-600">
                                Browse our document categories or use the search function to find the specific form you need. 
                                Each form includes detailed instructions and information about required supporting documentation.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="flex flex-col md:flex-row items-start reveal fade-left">
                        <div class="bg-orange-100 rounded-full p-4 flex items-center justify-center w-16 h-16 md:mr-6 mb-4 md:mb-0 flex-shrink-0 animate-bounce-slow" style="animation-delay: 1s">
                            <span class="text-2xl font-bold text-orange-600">2</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Complete the Form</h3>
                            <p class="text-gray-600">
                                Fill out all required fields in the form. Our smart forms will validate your input in real-time 
                                and provide guidance to ensure accuracy. You can save partially completed forms and return to them later.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="flex flex-col md:flex-row items-start reveal fade-right">
                        <div class="bg-orange-100 rounded-full p-4 flex items-center justify-center w-16 h-16 md:mr-6 mb-4 md:mb-0 flex-shrink-0 animate-bounce-slow" style="animation-delay: 2s">
                            <span class="text-2xl font-bold text-orange-600">3</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Attach Supporting Documents</h3>
                            <p class="text-gray-600">
                                Upload any required supporting documentation. Our system accepts various file formats including PDF, 
                                DOCX, JPEG, and PNG. Each form will specify which supporting documents are needed.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="flex flex-col md:flex-row items-start reveal fade-left">
                        <div class="bg-orange-100 rounded-full p-4 flex items-center justify-center w-16 h-16 md:mr-6 mb-4 md:mb-0 flex-shrink-0 animate-bounce-slow" style="animation-delay: 3s">
                            <span class="text-2xl font-bold text-orange-600">4</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Submit and Track</h3>
                            <p class="text-gray-600">
                                Submit your completed form for processing. You'll receive a confirmation email with a tracking number 
                                that you can use to check the status of your submission through our online portal.
                            </p>
                        </div>
                    </div>
                </div>
                
               
            </div>
        </div>
    </section>

    <!-- Digital Signature Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row items-center reveal fade-bottom">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Digital Signatures</h2>
                        <p class="text-gray-600 mb-4">
                            Our document system supports secure digital signatures, eliminating the need to print, sign, and scan documents.
                        </p>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Legally binding electronic signatures</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Multi-factor authentication for security</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Signature audit trail and verification</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Support for multiple signatories</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <a href="#" class="text-orange-600 hover:text-orange-800 font-medium inline-flex items-center">
                                Learn more about digital signatures
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 transform rotate-6 rounded-lg animate-pulse-slow"></div>
                            <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Digital Signature" class="relative rounded-lg shadow-lg z-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Document Statistics with Counter Animation -->
    <section class="py-16 bg-gradient-to-r from-orange-200 via-orange-100 to-orange-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">Document Processing Statistics</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center reveal fade-bottom">
                    <div class="text-5xl font-bold text-orange-600 mb-2 counter" data-target="15000">0</div>
                    <p class="text-gray-600 font-medium">Forms Processed Monthly</p>
                </div>
                
                <!-- Stat 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center reveal fade-bottom" style="animation-delay: 0.2s">
                    <div class="text-5xl font-bold text-orange-600 mb-2 counter" data-target="98">0</div>
                    <p class="text-gray-600 font-medium">% Digital Submission Rate</p>
                </div>
                
                <!-- Stat 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center reveal fade-bottom" style="animation-delay: 0.4s">
                    <div class="text-5xl font-bold text-orange-600 mb-2 counter" data-target="24">0</div>
                    <p class="text-gray-600 font-medium">Hour Average Processing Time</p>
                </div>
                
                <!-- Stat 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center reveal fade-bottom" style="animation-delay: 0.6s">
                    <div class="text-5xl font-bold text-orange-600 mb-2 counter" data-target="250">0</div>
                    <p class="text-gray-600 font-medium">Different Form Types Available</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section with Accordion -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">
                Frequently Asked Questions
            </h2>

            <div class="max-w-4xl mx-auto space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden reveal fade-right">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-800">How do I submit a form electronically?</h3>
                        <svg class="faq-arrow h-6 w-6 text-orange-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            To submit a form electronically, log in to the university document portal using your university credentials. 
                            Browse or search for the form you need, complete all required fields, attach any necessary supporting documents, 
                            and click the "Submit" button. You'll receive a confirmation email with a tracking number for your submission.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden reveal fade-left">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-800">How long does it take to process my form?</h3>
                        <svg class="faq-arrow h-6 w-6 text-orange-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Processing times vary depending on the type of form and the department handling it. Most routine forms 
                            are processed within 24-48 hours. More complex applications like financial aid or research grants may 
                            take 1-2 weeks. You can check the status of your submission at any time using the tracking number 
                            provided in your confirmation email.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden reveal fade-right">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-800">Can I save a form and complete it later?</h3>
                        <svg class="faq-arrow h-6 w-6 text-orange-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Yes, our system allows you to save partially completed forms. Simply click the "Save Progress" button 
                            at the bottom of the form. You'll receive an email with a link to resume your form. Saved forms are 
                            available in your user dashboard under "Drafts" for up to 30 days.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden reveal fade-left">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-800">What file formats are accepted for supporting documents?</h3>
                        <svg class="faq-arrow h-6 w-6 text-orange-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Our system accepts the following file formats for supporting documents:
                        </p>
                        <ul class="list-disc pl-5 mt-2 text-gray-600">
                            <li>PDF (.pdf)</li>
                            <li>Microsoft Word (.doc, .docx)</li>
                            <li>Microsoft Excel (.xls, .xlsx)</li>
                            <li>Images (.jpg, .jpeg, .png)</li>
                            <li>Text files (.txt)</li>
                        </ul>
                        <p class="text-gray-600 mt-2">
                            The maximum file size for each document is 10MB.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden reveal fade-right">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-800">How do I check the status of my submission?</h3>
                        <svg class="faq-arrow h-6 w-6 text-orange-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            You can check the status of your submission in two ways:
                        </p>
                        <ol class="list-decimal pl-5 mt-2 text-gray-600">
                            <li>Log in to the document portal and go to "My Submissions" in your dashboard.</li>
                            <li>Use the tracking number from your confirmation email on the "Track Submission" page without logging in.</li>
                        </ol>
                        <p class="text-gray-600 mt-2">
                            Status updates are provided in real-time as your form moves through the approval process.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden reveal fade-left">
                    <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-800">Can I get help with completing complex forms?</h3>
                        <svg class="faq-arrow h-6 w-6 text-orange-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Yes, assistance is available for completing complex forms. You can:
                        </p>
                        <ul class="list-disc pl-5 mt-2 text-gray-600">
                            <li>Use the "Help" button within any form for contextual guidance</li>
                            <li>Schedule a virtual appointment with a document specialist</li>
                            <li>Visit the Documents Office in person during business hours</li>
                            <li>Call our help desk at (555) 123-4567</li>
                        </ul>
                        <p class="text-gray-600 mt-2">
                            We also offer regular workshops on completing common forms like financial aid applications and research grants.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Document Resources Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scaleIn">Document Resources</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Resource 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom">
                    <div class="bg-orange-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Document Guides</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Step-by-step guides for completing common university forms and understanding documentation requirements.
                    </p>
                    <div class="text-center">
                        <a href="#" class="inline-block text-orange-600 hover:text-orange-800 font-medium">
                            View Guides
                        </a>
                    </div>
                </div>
                
                <!-- Resource 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom" style="animation-delay: 0.2s">
                    <div class="bg-orange-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Video Tutorials</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Watch instructional videos on how to complete and submit various university forms and documents.
                    </p>
                    <div class="text-center">
                        <a href="#" class="inline-block text-orange-600 hover:text-orange-800 font-medium">
                            Watch Tutorials
                        </a>
                    </div>
                </div>
                
                <!-- Resource 3 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 card-hover reveal fade-bottom" style="animation-delay: 0.4s">
                    <div class="bg-orange-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Knowledge Base</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Access our comprehensive knowledge base with answers to frequently asked questions about university documents.
                    </p>
                    <div class="text-center">
                        <a href="#" class="inline-block text-orange-600 hover:text-orange-800 font-medium">
                            Browse Knowledge Base
                        </a>
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
                    <h3 class="text-xl font-bold mb-4">Document Services</h3>
                    <p class="text-gray-400">Providing efficient document management solutions for the university community since 1985.</p>
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
                    <p class="text-gray-400">Administration Building</p>
                    <p class="text-gray-400">123 University Avenue</p>
                    <p class="text-gray-400">University City, State 12345</p>
                    <p class="text-gray-400 mt-2">documents@university.edu</p>
                    <p class="text-gray-400">(555) 123-4567</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Document Portal</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Form Templates</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Submission Status</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Training Resources</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Document Policies</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Privacy Statement</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Document Updates</h3>
                    <p class="text-gray-400 mb-4">Subscribe to receive notifications about new and updated forms.</p>
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
                <p>© 2023 University Document Services. All rights reserved.</p>
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