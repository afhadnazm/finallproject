<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>College of Medicine</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'slide-in-left': 'slideInLeft 0.8s ease-out forwards',
                        'slide-in-right': 'slideInRight 0.8s ease-out forwards',
                        'scale-in': 'scaleIn 0.8s ease-out forwards',
                        'pulse-slow': 'pulse 3s infinite',
                        'float': 'float 4s ease-in-out infinite',
                        'breathe1': 'breathe1 8s infinite',
                        'breathe2': 'breathe2 10s infinite',
                        'breathe3': 'breathe3 9s infinite',
                        'breathe4': 'breathe4 11s infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-50px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(50px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '100%': { opacity: '1', transform: 'scale(1)' }
                        },
                        pulse: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.05)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        },
                        breathe1: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '40%, 60%': { transform: 'scale(1.1)' }
                        },
                        breathe2: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '30%, 70%': { transform: 'scale(1.15)' }
                        },
                        breathe3: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%, 80%': { transform: 'scale(1.12)' }
                        },
                        breathe4: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '20%, 60%': { transform: 'scale(1.08)' }
                        }
                    },
                    transitionDelay: {
                        '100': '0.1s',
                        '200': '0.2s',
                        '300': '0.3s',
                        '400': '0.4s',
                        '500': '0.5s',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif">
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

    <section id="home" class="bg-[url('{{ asset('storage/images/medicine2.jpg') }}')] bg-cover bg-no-repeat py-52">
        <div class="container mx-auto text-center px-4 pt-20">
            <h1 class="text-5xl md:text-6xl font-bold text-white opacity-0 animate-fade-in">College of Medicine</h1>
           
            <div class="mt-8 opacity-0 animate-fade-in delay-300">
                <a href="#contact" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 hover:scale-105 transform">Apply Now</a>
                <a href="#programs" class="ml-4 bg-transparent hover:bg-orange-500 text-white font-semibold py-3 px-6 border border-gray-200 rounded-full transition-all duration-300 hover:scale-105 transform">Explore Programs</a>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center px-4">
            <div>
                <h2 class="text-3xl font-semibold text-gray-700 mb-4 opacity-0 animate-slide-in-left">Welcome to the College of Medicine</h2>
                <p class="text-gray-600 leading-relaxed opacity-0 animate-slide-in-left delay-100">
                    The College of Medicine is committed to providing high-quality medical education and clinical
                    training to future doctors. Our programs focus on equipping students with the medical knowledge,
                    clinical skills, and compassion necessary to serve patients and advance healthcare worldwide.
                </p>
                <p class="text-gray-600 mt-4 leading-relaxed opacity-0 animate-slide-in-left delay-200">
                    Founded in 1965, our college has a rich history of excellence in medical education. We are
                    accredited by the Liaison Committee on Medical Education (LCME) and have consistently ranked
                    among the top medical schools nationally for research and primary care.
                </p>
                <p class="text-gray-600 mt-4 leading-relaxed opacity-0 animate-slide-in-left delay-300">
                    Our mission is to educate and inspire the next generation of physicians who will lead the
                    advancement of healthcare through innovative research, compassionate patient care, and
                    community service. We are dedicated to fostering a diverse and inclusive environment where
                    students can thrive academically and personally.
                </p>
                <div class="mt-6 opacity-0 animate-slide-in-left delay-400">
                    <a href="#programs" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors duration-300 flex items-center">
                        Learn more about our programs
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="opacity-0 animate-slide-in-right">
                <img src="{{ asset('storage/images/medicine.jpg') }}" alt="Medical Students" class="rounded-md shadow-xl">
            </div>
        </div>
    </section>

    <!-- Key Statistics -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center opacity-0 animate-fade-in">Our Impact</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center opacity-0 animate-fade-in delay-100 hover:scale-105 transform transition-transform duration-300">
                    <div class="text-orange-500 text-4xl font-bold mb-2 animate-float">5,000+</div>
                    <p class="text-gray-600">Alumni Worldwide</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center opacity-0 animate-fade-in delay-200 hover:scale-105 transform transition-transform duration-300">
                    <div class="text-orange-500 text-4xl font-bold mb-2 animate-float">95%</div>
                    <p class="text-gray-600">Residency Match Rate</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center opacity-0 animate-fade-in delay-300 hover:scale-105 transform transition-transform duration-300">
                    <div class="text-orange-500 text-4xl font-bold mb-2 animate-float">$25M+</div>
                    <p class="text-gray-600">Annual Research Funding</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center opacity-0 animate-fade-in delay-400 hover:scale-105 transform transition-transform duration-300">
                    <div class="text-orange-500 text-4xl font-bold mb-2 animate-float">150+</div>
                    <p class="text-gray-600">Faculty Members</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center opacity-0 animate-fade-in">Our Programs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md opacity-0 animate-fade-in delay-100 hover:scale-105 transform transition-transform duration-300">
                    <img src="{{ asset('storage/images/md.jpg') }}" alt="MD Program" class="w-full object-cover">
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
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md opacity-0 animate-fade-in delay-200 hover:scale-105 transform transition-transform duration-300">
                    <img src="{{ asset('storage/images/md2.jpg') }}" alt="MD-PhD Program" class="w-full object-cover">
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
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md opacity-0 animate-fade-in delay-300 hover:scale-105 transform transition-transform duration-300">
                    <img src="{{ asset('storage/images/md3.jpg') }}" alt="Residency Programs" class="w-full object-cover">
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
            <h2 class="text-4xl font-bold text-gray-800 mb-16 text-center opacity-0 animate-fade-in">Our Distinguished Faculty</h2>
            
            <div class="flex flex-wrap justify-center gap-8 md:gap-12 lg:gap-16">
                <!-- Faculty Member 1 -->
                <div class="text-center mb-8 opacity-0 animate-fade-in delay-100">
                    <div class="mx-auto mb-4 relative animate-breathe1">
                        <div class="w-48 h-48 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold">
                            Dr. Dashty
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Dr. Dashty Abbas Tawfeeq</h3>
                    <p class="text-orange-500">Dean, Professor of Medicine</p>
                </div>
                
                <!-- Faculty Member 2 -->
                <div class="text-center mb-8 opacity-0 animate-fade-in delay-200">
                    <div class="mx-auto mb-4 relative animate-breathe2">
                        <div class="w-48 h-48 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold">
                            Dr. Afrah
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Dr. Afrah Hameed Sultan</h3>
                    <p class="text-orange-500">Chair, Department of Surgery</p>
                </div>
                
                <!-- Faculty Member 3 -->
                <div class="text-center mb-8 opacity-0 animate-fade-in delay-300">
                    <div class="mx-auto mb-4 relative animate-breathe3">
                        <div class="w-48 h-48 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold">
                            Dr. Ahmed
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Dr. Ahmed Khudair Yassin</h3>
                    <p class="text-orange-500">Professor of Medicine</p>
                </div>
                
                <!-- Faculty Member 4 -->
                <div class="text-center mb-8 opacity-0 animate-fade-in delay-400">
                    <div class="mx-auto mb-4 relative animate-breathe4">
                        <div class="w-48 h-48 rounded-full bg-orange-500 flex items-center justify-center text-white text-2xl font-bold">
                            Dr. Abdulkhaliq
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Dr. Abdulkhaliq Kerim Emin</h3>
                    <p class="text-orange-500">Professor of Surgery</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center opacity-0 animate-fade-in">Student Testimonials</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-md opacity-0 animate-fade-in delay-100 hover:scale-105 transform transition-transform duration-300">
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
                <div class="bg-gray-50 p-8 rounded-lg shadow-md opacity-0 animate-fade-in delay-200 hover:scale-105 transform transition-transform duration-300">
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
                <div class="bg-gray-50 p-8 rounded-lg shadow-md opacity-0 animate-fade-in delay-300 hover:scale-105 transform transition-transform duration-300">
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

    <!-- Admissions Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-gray-700 mb-12 text-center opacity-0 animate-fade-in">Admissions</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="opacity-0 animate-fade-in delay-100">
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
                <div class="bg-white p-8 rounded-lg shadow-md opacity-0 animate-fade-in delay-200">
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
                        <a href="#contact" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 inline-block hover:scale-105 transform">
                            Request Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <!-- Footer -->
    <section>
        <footer class="bg-gray-900 text-gray-300 py-10">
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
    </section>

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
            const fadeElements = document.querySelectorAll('[class*="animate-"]');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = "1";
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
        // Mobile menu toggle
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Mobile accordion functionality
        document.addEventListener('DOMContentLoaded', function() {
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
</body>
</html>
