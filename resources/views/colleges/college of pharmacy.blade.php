
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>College of Medicine</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom animations and transitions */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .slide-in-left.appear, .slide-in-right.appear {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.8);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .scale-in.appear {
            opacity: 1;
            transform: scale(1);
        }
        
        .hover-grow {
            transition: transform 0.3s ease;
        }
        
        .hover-grow:hover {
            transform: scale(1.05);
        }
        
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        /* Staggered animation delays */
        .delay-100 { transition-delay: 0.1s; }
        .delay-200 { transition-delay: 0.2s; }
        .delay-300 { transition-delay: 0.3s; }
        .delay-400 { transition-delay: 0.4s; }
        .delay-500 { transition-delay: 0.5s; }
        
        /* Pulse animation for attention */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        /* Floating animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .float {
            animation: float 4s ease-in-out infinite;
        }
        
        /* Faculty circle animations */
        @keyframes breathe1 {
            0% { transform: scale(1); }
            40% { transform: scale(1.1); }
            60% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @keyframes breathe2 {
            0% { transform: scale(1); }
            30% { transform: scale(1.15); }
            70% { transform: scale(1.15); }
            100% { transform: scale(1); }
        }
        
        @keyframes breathe3 {
            0% { transform: scale(1); }
            50% { transform: scale(1.12); }
            80% { transform: scale(1.12); }
            100% { transform: scale(1); }
        }
        
        @keyframes breathe4 {
            0% { transform: scale(1); }
            20% { transform: scale(1.08); }
            60% { transform: scale(1.08); }
            100% { transform: scale(1); }
        }
        
        .faculty-circle-1 {
            animation: breathe1 8s infinite;
        }
        
        .faculty-circle-2 {
            animation: breathe2 10s infinite;
        }
        
        .faculty-circle-3 {
            animation: breathe3 9s infinite;
        }
        
        .faculty-circle-4 {
            animation: breathe4 11s infinite;
        }
        
        /* Animate scale in */
        @keyframes scaleIn {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        
        .animate-scaleIn {
            animation: scaleIn 0.8s ease forwards;
        }
        
        /* Slow pulse animation */
        @keyframes pulse-slow {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .animate-pulse-slow {
            animation: pulse-slow 3s infinite;
        }
    </style>
</head>

<body class="bg-gray-100"  style="font-family: Cambria, Georgia, serif">
    <!-- Header Section -->
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





    <section id="home" class="bg-[url('{{ asset('storage/images/nursing.jpg') }}')] bg-cover  bg-no-repeat py-52">
        
        <div class="container mx-auto text-center px-4 pt-20">
            <h1 class="text-5xl md:text-6xl font-bold text-white fade-in">College of Pharmacy</h1>
           
            <div class="mt-8 fade-in delay-300">
               
                <a href="#programs" class="ml-4 bg-transparent hover:bg-orange-500 text-white font-semibold py-3 px-6 border border-gray-200 rounded-full transition-all duration-300 hover-grow">Explore Programs</a>
            </div>
        </div>
    
    </section>
    


    <!-- Introduction Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
            <div>
                <h2 class="text-3xl font-semibold text-gray-700 mb-4 slide-in-left">Welcome to the College of Pharmacy</h2>
                <p class="text-gray-600 leading-relaxed slide-in-left delay-100">
                    The College of Pharmacy is dedicated to excellence in pharmaceutical education, research, and patient care.
                    Our programs prepare students to become skilled pharmacists and pharmaceutical scientists who contribute to
                    improving healthcare outcomes and advancing medication therapy.
                </p>
                <p class="text-gray-600 mt-4 leading-relaxed slide-in-left delay-200">
                    Established in 1972, our college has a proud tradition of innovation in pharmacy education. We are
                    accredited by the Accreditation Council for Pharmacy Education (ACPE) and consistently rank among the
                    top pharmacy schools nationwide for research and clinical practice.
                </p>
                <p class="text-gray-600 mt-4 leading-relaxed slide-in-left delay-300">
                    Our mission is to develop pharmacists who are medication experts, committed to patient-centered care,
                    population health, and pharmaceutical research. We foster a collaborative environment where students
                    develop the knowledge, skills, and values needed to excel in diverse pharmacy practice settings.
                </p>
                <div class="mt-6 slide-in-left delay-400">
                    <a href="#programs" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 flex items-center">
                        Learn more about our programs
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="slide-in-right">
            <img src="{{ asset('storage/images/nursing2.jpg') }}" alt="Medical Students" class="rounded-md shadow-xl">
            </div>
        </div>
    </section>
 
    <!-- Key Statistics -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center fade-in">Our Impact</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center fade-in delay-100 hover-grow">
                    <div class="text-orange-500 text-4xl font-bold mb-2 float">5,000+</div>
                    <p class="text-gray-600">Alumni Worldwide</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center fade-in delay-200 hover-grow">
                    <div class="text-orange-500 text-4xl font-bold mb-2 float">95%</div>
                    <p class="text-gray-600">Residency Match Rate</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center fade-in delay-300 hover-grow">
                    <div class="text-orange-500 text-4xl font-bold mb-2 float">$25M+</div>
                    <p class="text-gray-600">Annual Research Funding</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center fade-in delay-400 hover-grow">
                    <div class="text-orange-500 text-4xl font-bold mb-2 float">150+</div>
                    <p class="text-gray-600">Faculty Members</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center fade-in">Our Programs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in delay-100 hover-grow">
                    <img src="{{ asset('storage/images/md.jpg') }}" alt="MD Program" class="w-full  object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Doctor of Medicine (MD)</h3>
                        <p class="text-gray-600 mb-4">Our four-year MD program provides comprehensive medical education with hands-on clinical experience and research opportunities.</p>
                        <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 flex items-center">
                            Learn more
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in delay-200 hover-grow">
                    <img src="{{ asset('storage/images/md2.jpg') }}" alt="MD-PhD Program" class="w-full  object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">MD-PhD Program</h3>
                        <p class="text-gray-600 mb-4">Our dual-degree program trains physician-scientists who will lead the next generation of biomedical research and academic medicine.</p>
                        <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 flex items-center">
                            Learn more
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in delay-300 hover-grow">
                    <img src="{{ asset('storage/images/md3.jpg') }}" alt="Residency Programs" class="w-full  object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Residency Programs</h3>
                        <p class="text-gray-600 mb-4">We offer residency training in various specialties, providing advanced clinical education in state-of-the-art facilities.</p>
                        <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 flex items-center">
                            Learn more
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faculty Section - Updated with animated circles -->
    <section id="faculty" class="py-16 bg-amber-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-gray-800 mb-16 text-center fade-in">Our Distinguished Faculty</h2>
            
            <div class="flex flex-wrap justify-center gap-8 md:gap-12 lg:gap-16">
                <!-- Faculty Member 1 -->
                <div class="text-center mb-8 fade-in delay-100">
                    <div class="faculty-circle-1 mx-auto mb-4 relative">
                        <div class="w-48 h-48 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold">
                            Dr. 
                            Huner 
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Dr.  
                    Huner kamal omer</h3>
                    <p class="text-orange-500">Dean,Professor of Pharmcy</p>
                </div>
                
                <!-- Faculty Member 2 -->
                   <div class="text-center mb-8 fade-in delay-100">
                    <div class="faculty-circle-1 mx-auto mb-4 relative">
                        <div class="w-48 h-48 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold">
                            Dr. 
                            Abbas
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Dr.  
                    Abbas Mohamed Faraj</h3>
                    <p class="text-orange-500">Professor of Pharmacy</p>
                </div>
                <!-- Faculty Member 3 -->
                <div class="text-center mb-8 fade-in delay-300">
                    <div class="faculty-circle-3 mx-auto mb-4 relative">
                        <div class="w-48 h-48 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold">
                            Dr. Amanj
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Dr.  Amanj Ismael Baker</h3>
                    <p class="text-orange-500">Lecturer of NPharmcy</p>
                </div>
                
                <!-- Faculty Member 4 -->
                <div class="text-center mb-8 fade-in delay-400">
                    <div class="faculty-circle-4 mx-auto mb-4 relative">
                        <div class="w-48 h-48 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold">
                            Dr. Ansam
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Dr.  Ansam Naji Alhassani</h3>
                    <p class="text-orange-500">Assistant Professor of Pharmacology</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center fade-in">Student Testimonials</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-md fade-in delay-100 hover-grow">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('storage/images/1.png') }}" alt="Student" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Muhamad Dler</h3>
                            <p class="text-orange-500 text-sm">Class of 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "The College of Medicine provided me with exceptional clinical training and research opportunities. The faculty's dedication to teaching and mentorship has been invaluable to my growth as a future physician."
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md fade-in delay-200 hover-grow">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('storage/images/2.png') }}" alt="Student" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Siako Pshtiwan</h3>
                            <p class="text-orange-500 text-sm">Class of 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "The collaborative environment and state-of-the-art facilities at the College of Medicine have prepared me well for my residency. I particularly valued the early clinical exposure and community service opportunities."
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md fade-in delay-300 hover-grow">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('storage/images/3.png') }}" alt="Student" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Ali Barzan</h3>
                            <p class="text-orange-500 text-sm">MD-PhD Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "As an MD-PhD student, I've found the perfect balance of clinical training and research mentorship. The faculty are leaders in their fields and genuinely invested in student success."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <!-- <section id="facilities" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center fade-in">Our Facilities</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="fade-in delay-100">
                    <img src="{{ asset('storage/images/library.jfif') }}" alt="Simulation Center" class="rounded-lg shadow-xl w-full hover-grow">
                    <h3 class="text-xl font-semibold text-gray-700 mt-4">State-of-the-Art Simulation Center</h3>
                    <p class="text-gray-600 mt-2">
                        Our simulation center features high-fidelity mannequins and virtual reality technology to provide realistic clinical scenarios for hands-on learning.
                    </p>
                </div>
                <div class="fade-in delay-200">
                    <img src="https://via.placeholder.com/600x400" alt="Research Labs" class="rounded-lg shadow-xl w-full hover-grow">
                    <h3 class="text-xl font-semibold text-gray-700 mt-4">Advanced Research Laboratories</h3>
                    <p class="text-gray-600 mt-2">
                        Our research facilities are equipped with cutting-edge technology to support groundbreaking biomedical research across various disciplines.
                    </p>
                </div>
                <div class="fade-in delay-300">
                    <img src="{{ asset('storage/images/library.jfif') }}" alt="Library" class="rounded-lg shadow-xl w-full hover-grow">
                    <h3 class="text-xl font-semibold text-gray-700 mt-4">Comprehensive Medical Library</h3>
                    <p class="text-gray-600 mt-2">
                        Our library provides access to extensive medical literature, digital resources, and quiet study spaces for individual and group learning.
                    </p>
                </div>
                <div class="fade-in delay-400">
                    <img src="https://via.placeholder.com/600x400" alt="Teaching Hospital" class="rounded-lg shadow-xl w-full hover-grow">
                    <h3 class="text-xl font-semibold text-gray-700 mt-4">Affiliated Teaching Hospitals</h3>
                    <p class="text-gray-600 mt-2">
                        Our students gain clinical experience at prestigious affiliated hospitals, offering exposure to diverse patient populations and medical conditions.
                    </p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Virtual Tour -->
    <!-- <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold text-gray-700 mb-6 fade-in">Take a Virtual Tour</h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-8 fade-in delay-100">
                Explore our campus facilities, classrooms, laboratories, and clinical training areas through our interactive virtual tour.
            </p>
            <div class="fade-in delay-200 hover-grow">
                <img src="https://via.placeholder.com/1200x600" alt="Virtual Tour" class="rounded-lg shadow-xl w-full max-w-4xl mx-auto">
                <div class="mt-6">
                    <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 pulse">
                        Start Virtual Tour
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Admissions Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center fade-in">Admissions</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in delay-100">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Application Process</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">1</div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-700">Submit AMCAS Application</h4>
                                <p class="text-gray-600">Complete and submit your application through the American Medical College Application Service.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">2</div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-700">Secondary Application</h4>
                                <p class="text-gray-600">Selected applicants will receive our secondary application to complete.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">3</div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-700">Interviews</h4>
                                <p class="text-gray-600">Qualified applicants will be invited for on-campus interviews with faculty and admissions committee members.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">4</div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-700">Admissions Decision</h4>
                                <p class="text-gray-600">Final decisions are made by our admissions committee following a holistic review process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 flex items-center">
                            View detailed admissions requirements
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md fade-in delay-200">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-6">Key Dates</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center pb-2 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">AMCAS Application Opens</span>
                            <span class="text-orange-500">May 1, 2023</span>
                        </div>
                        <div class="flex justify-between items-center pb-2 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Application Deadline</span>
                            <span class="text-orange-500">October 15, 2023</span>
                        </div>
                        <div class="flex justify-between items-center pb-2 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Interview Period</span>
                            <span class="text-orange-500">September 2023 - February 2024</span>
                        </div>
                        <div class="flex justify-between items-center pb-2 border-b border-gray-200">
                            <span class="font-semibold text-gray-700">Admissions Decisions</span>
                            <span class="text-orange-500">March 15, 2024</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-gray-700">Orientation Begins</span>
                            <span class="text-orange-500">August 1, 2024</span>
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <a href="#contact" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 inline-block hover-grow">
                            Request Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Footer -->
   
    <section>
        <footer class="bg-gray-900 text-gray-300 py-10  ">
            <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
              <!-- Contact HMU Section -->
              <div>
                <h3 class="text-lg font-semibold text-white mb-3">Contact HMU</h3>
                <ul class="space-y-2">
                  <li class="flex items-center">
                    <span class="mr-2">✉️</span>
                    <a href="mailto:info@hmu.edu.krd" class="hover:text-orange-500">info@hmu.edu.krd</a>
                  </li>
                  <li class="flex items-center">
                    <span class="mr-2">🌐</span>
                    <a href="http://www.hmu.edu.krd" class="hover:text-orange-500">www.hmu.edu.krd</a>
                  </li>
                  <li>Tel: +964 66 227 3384</li>
                  <li>Fax: +964 66 227 3382</li>
                  <li class="flex items-start">
                    <span class="mr-2">📍</span>
                    Iraq, Kurdistan Region,<br />
                    Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
                    P.O. Box 178
                  </li>
                </ul>
              </div>
          
              <!-- Opening Hours Section -->
              <div>
                <h3 class="text-lg font-semibold text-white mb-3">Opening Hours</h3>
                <p>Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
                <p>Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1">Closed</span></p>
              </div>
          
              <!-- Web Traffic Section -->
              <div>
                <h3 class="text-lg font-semibold text-white mb-3">Web Traffic</h3>
                <ul class="space-y-1">
                  <li>👤 Today: <span class="text-gray-100">2265</span></li>
                  <li>👤 Yesterday: <span class="text-gray-100">3898</span></li>
                  <li>👤 This Week: <span class="text-gray-100">12748</span></li>
                  <li>👤 This Month: <span class="text-gray-100">90849</span></li>
                  <li>👤 Total: <span class="text-gray-100">4394545</span></li>
                </ul>
                <hr class="my-4 border-gray-700" />
                <p class="text-center text-gray-100 text-xl font-bold">16</p>
                <p class="text-center text-sm text-gray-500">Online</p>
                <p class="text-center text-sm mt-2">21 November 2024</p>
              </div>
          
              <!-- QR Code Section -->
              <div>
                <h3 class="text-lg font-semibold text-white mb-3">QR Code</h3>
                <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto mb-2" />
                <p class="text-center text-gray-500 text-sm">www.nik-o-mat.de</p>
              </div>
            </div>
            <div class="text-center text-gray-500 text-sm mt-8">
              <p>Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
            </div>
          </footer>
    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-orange-500 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-orange-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- JavaScript for animations and interactions -->
    <script>
        // Intersection Observer for fade-in animations
        document.addEventListener('DOMContentLoaded', function() {
            // Fade-in animations
            const fadeElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('appear');
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(element => {
                observer.observe(element);
            });
            
            // Back to top button
            const backToTopButton = document.getElementById('back-to-top');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.remove('opacity-0', 'invisible');
                    backToTopButton.classList.add('opacity-100', 'visible');
                } else {
                    backToTopButton.classList.add('opacity-0', 'invisible');
                    backToTopButton.classList.remove('opacity-100', 'visible');
                }
            });
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
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