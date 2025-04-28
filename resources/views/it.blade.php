<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>University IT Services</title>
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
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        scaleIn: {
                            '0%': { transform: 'scale(0.95)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        slideInRight: {
                            '0%': { transform: 'translateX(50px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        pulse: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.05)' },
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 1.2s ease-out forwards',
                        'slide-up': 'slideUp 1s ease-out forwards',
                        'scale-in': 'scaleIn 1s ease-out forwards',
                        'slide-in-right': 'slideInRight 1s ease-out forwards',
                        'pulse-slow': 'pulse 3s infinite',
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
                        <a href="{{ url('/confrance') }}" class="block text-gray-600 py-1 pl-4">Conferences</a>
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
            <h1 class="text-4xl font-bold text-center text-gray-900 gradient-text">IT Services</h1>

            <!-- Separator Line -->
            <div class="w-full max-w-4xl mx-auto border-t border-gray-200 mt-4 mb-2"></div>

            <!-- Metadata -->
            <div class="flex justify-center items-center space-x-4 text-gray-600 text-sm mb-4">
               
                <p class="text-lg text-gray-600 leading-relaxed justify-center text-justify p-6">
                    Our IT Services department provides comprehensive technology solutions to support the academic and
                    administrative needs of our university community. We are committed to delivering reliable, innovative, and
                    secure IT services to enhance the educational experience for students, faculty, and staff.
               
            
                </p>
            </div>
                </div>
               
            </div>

            <!-- Section Title -->
         
        </div> </div>

  

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scale-in">Our Services</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 animate-slide-in-right" style="animation-delay: 0.1s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Network & WiFi</h3>
                    </div>
                    <p class="text-gray-600">
                        Secure, high-speed internet access across campus with dedicated networks for students, faculty, and
                        guests. Connect seamlessly to our WiFi from anywhere on university grounds.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Campus-wide coverage with 1000+ access points</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Gigabit speeds in academic buildings</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Secure authentication with university credentials</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 animate-slide-in-right" style="animation-delay: 0.2s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Email & Collaboration</h3>
                    </div>
                    <p class="text-gray-600">
                        University email accounts, cloud storage, and collaboration tools to facilitate communication and
                        teamwork among students and faculty members.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Microsoft 365 and Google Workspace integration</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Unlimited cloud storage for academic work</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Video conferencing and virtual classroom tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 animate-slide-in-right" style="animation-delay: 0.3s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Computer Labs</h3>
                    </div>
                    <p class="text-gray-600">
                        State-of-the-art computer laboratories equipped with the latest hardware and software to support
                        academic research and coursework requirements.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>24/7 access to main library computer lab</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Specialized labs for engineering, design, and media</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Remote lab access for off-campus students</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 animate-slide-in-right" style="animation-delay: 0.4s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Software Resources</h3>
                    </div>
                    <p class="text-gray-600">
                        Access to a wide range of academic and professional software applications, including specialized tools
                        for various disciplines and departments.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Adobe Creative Cloud for all students</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>MATLAB, SPSS, and other research software</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>AutoCAD, Revit, and engineering applications</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Programming IDEs and development tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 animate-slide-in-right" style="animation-delay: 0.5s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Learning Management</h3>
                    </div>
                    <p class="text-gray-600">
                        Support for our online learning management system, providing students and faculty with tools for course
                        delivery, assignment submission, and academic engagement.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Canvas LMS with mobile app access</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Integrated plagiarism detection tools</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Online testing and proctoring solutions</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Digital textbooks and course materials</span>
                        </li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 animate-slide-in-right" style="animation-delay: 0.6s">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-200 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Printing Services</h3>
                    </div>
                    <p class="text-gray-600">
                        Convenient printing stations located throughout campus, allowing students to print documents directly
                        from their devices with easy payment options.
                    </p>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Mobile printing from any device</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Color and black & white options</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Large format printing for posters and projects</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-2">•</span>
                            <span>Scanning and document conversion services</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- New Section: Cybersecurity -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scale-in">Cybersecurity Services</h2>
            
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg animate-fade-in">
                <div class="flex flex-col md:flex-row items-center mb-8">
                    <div class="bg-orange-100 p-6 rounded-full mb-6 md:mb-0 md:mr-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Protecting Our Digital Community</h3>
                        <p class="text-gray-600">
                            Our cybersecurity team works tirelessly to protect university data and systems from threats. We implement robust security measures and provide education to ensure our community stays safe online.
                        </p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <div class="border border-orange-200 rounded-lg p-5">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Security Services</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Multi-factor authentication for all accounts</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>VPN services for secure remote access</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Data encryption for sensitive information</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Regular security audits and vulnerability assessments</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="border border-orange-200 rounded-lg p-5">
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Security Training</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Phishing awareness campaigns</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Data protection workshops</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Online security best practices</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-500 mr-2">•</span>
                                <span>Mandatory security training for all staff</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scale-in">
                Frequently Asked Questions
            </h2>

            <div class="max-w-4xl mx-auto space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md animate-slide-up" style="animation-delay: 0.1s">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">How do I reset my university password?</h3>
                    <p class="text-gray-600">
                        You can reset your password by visiting the account management portal at accounts.university.edu or by
                        contacting the IT Help Desk for assistance. For security reasons, you'll need to verify your identity using your student ID or other personal information.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md animate-slide-up" style="animation-delay: 0.2s">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">How do I connect to the university WiFi?</h3>
                    <p class="text-gray-600">
                        Select the "University-WiFi" network on your device, enter your university credentials when prompted,
                        and follow the on-screen instructions to complete the connection process. If you're having trouble connecting, visit our WiFi setup guide at wifi.university.edu.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md animate-slide-up" style="animation-delay: 0.3s">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Where can I find computer labs on campus?</h3>
                    <p class="text-gray-600">
                        Computer labs are located in the Main Library, Science Building, Engineering Complex, and Student
                        Center. Hours and available resources vary by location. You can check real-time availability of computers in each lab through our online portal.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md animate-slide-up" style="animation-delay: 0.4s">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">How do I access university-licensed software?</h3>
                    <p class="text-gray-600">
                        Visit our software portal at software.university.edu and log in with your university credentials to
                        browse and download available software for your academic needs. Many applications can also be accessed remotely through our virtual desktop infrastructure.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md animate-slide-up" style="animation-delay: 0.5s">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">What should I do if my laptop isn't working properly?</h3>
                    <p class="text-gray-600">
                        The IT Services department offers hardware diagnostics and basic repair services for student and faculty devices. Visit the Tech Support Center in the IT Building during business hours, or submit a support ticket online for assistance.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md animate-slide-up" style="animation-delay: 0.6s">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">How can I get training on university technology systems?</h3>
                    <p class="text-gray-600">
                        We offer regular workshops and online tutorials for all university technology systems. Check our training calendar at training.university.edu for upcoming sessions, or access our comprehensive knowledge base for self-paced learning.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Service Request Section -->
    <section class="py-16 bg-orange-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12 animate-scale-in">Request IT Service</h2>
            
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <p class="text-gray-600 mb-6 text-center">
                    Need technical assistance? Submit a service request and our IT team will respond promptly to address your needs.
                </p>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
                        </div>
                    </div>
                    
                    <div>
                        <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <select id="department" name="department" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
                            <option value="">Select Department</option>
                            <option value="academic">Collage of Medicine</option>
                            <option value="admin">Collage of Pharmcy</option>
                            <option value="student">Collage of Nursing</option>
                            <option value="research">Collage of dentistry</option>
                            
                        </select>
                    </div>
                    
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service Type</label>
                        <select id="service" name="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
                            <option value="">Select Service Type</option>
                            <option value="account">Account Management</option>
                            <option value="network">Network/WiFi Issues</option>
                            <option value="software">Software Installation</option>
                            <option value="hardware">Hardware Support</option>
                            <option value="training">Training Request</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description of Issue</label>
                        <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500"></textarea>
                    </div>
                    
                    <div>
                        <label for="priority" class="block text-sm font-medium text-gray-700 mb-1">Priority Level</label>
                        <div class="flex space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="priority" value="low" class="mr-2 text-orange-600">
                                <span>Low</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="priority" value="medium" class="mr-2 text-orange-600" checked>
                                <span>Medium</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="priority" value="high" class="mr-2 text-orange-600">
                                <span>High</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="priority" value="urgent" class="mr-2 text-orange-600">
                                <span>Urgent</span>
                            </label>
                        </div>
                    </div>
                    
                    <div>
                        <button type="submit" class="w-full bg-orange-600 text-white py-2 px-4 rounded-md hover:bg-orange-700 transition-colors">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">IT Services</h3>
                    <p class="text-gray-400">Providing technology solutions and support for the university community since 1985.</p>
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
                    <p class="text-gray-400">IT Services Building</p>
                    <p class="text-gray-400">123 University Avenue</p>
                    <p class="text-gray-400">University City, State 12345</p>
                    <p class="text-gray-400 mt-2">support@university.edu</p>
                    <p class="text-gray-400">(555) 123-4567</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Help Desk</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Knowledge Base</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Service Status</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Training Resources</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">Software Downloads</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-orange-300 transition-colors">IT Policies</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">IT Newsletter</h3>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest IT updates and announcements.</p>
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
                <p>© 2023 University IT Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const navToggle = document.getElementById('nav-toggle');
            const navContent = document.getElementById('nav-content');
            
            navToggle.addEventListener('click', function() {
                navContent.classList.toggle('hidden');
            });
            
            // Mobile accordion functionality
            const accordionButtons = document.querySelectorAll('.mobile-accordion button');
            
            accordionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    content.classList.toggle('hidden');
                    
                    // Rotate arrow icon
                    const arrow = this.querySelector('svg');
                    arrow.classList.toggle('rotate-90');
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

<Actions>
  <Action name="Add responsive dropdown animations" description="Enhance the dropdown menus with smooth animations" />
  <Action name="Implement sticky header" description="Make the navbar stick to the top when scrolling" />
  <Action name="Add dark mode toggle" description="Implement a dark/light mode switch" />
  <Action name="Optimize mobile menu" description="Improve the mobile menu experience with better transitions" />
  <Action name="Add breadcrumb navigation" description="Implement breadcrumb navigation for better user orientation" />
</Actions>

