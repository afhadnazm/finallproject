<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Home - HMU</title>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
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
          animation: {
            fadeIn: 'fadeIn 1s ease forwards',
            slideInUp: 'slideInUp 1s ease forwards',
            slideInLeft: 'slideInLeft 1s ease forwards',
            slideInRight: 'slideInRight 1s ease forwards',
            pulse: 'pulse 2s infinite',
            float: 'float 5s ease-in-out infinite',
            bounce: 'bounce 4s ease-in-out infinite',
            spin: 'spin 8s linear infinite',
            glow: 'glow 2s ease-in-out infinite',
          },
          keyframes: {
            fadeIn: {
              'from': { opacity: '0' },
              'to': { opacity: '1' }
            },
            slideInUp: {
              'from': { transform: 'translateY(50px)', opacity: '0' },
              'to': { transform: 'translateY(0)', opacity: '1' }
            },
            slideInLeft: {
              'from': { transform: 'translateX(-50px)', opacity: '0' },
              'to': { transform: 'translateX(0)', opacity: '1' }
            },
            slideInRight: {
              'from': { transform: 'translateX(50px)', opacity: '0' },
              'to': { transform: 'translateX(0)', opacity: '1' }
            },
            pulse: {
              '0%, 100%': { transform: 'scale(1)' },
              '50%': { transform: 'scale(1.05)' }
            },
            float: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-10px)' }
            },
            bounce: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-15px)' }
            },
            spin: {
              'from': { transform: 'rotate(0deg)' },
              'to': { transform: 'rotate(360deg)' }
            },
            glow: {
              '0%, 100%': { boxShadow: '0 0 5px rgba(249, 115, 22, 0.5)' },
              '50%': { boxShadow: '0 0 20px rgba(249, 115, 22, 0.8)' }
            }
          },
          transitionDelay: {
            '100': '0.1s',
            '200': '0.2s',
            '300': '0.3s',
            '400': '0.4s',
            '500': '0.5s',
            '600': '0.6s',
            '700': '0.7s',
            '800': '0.8s',
            '900': '0.9s',
            '1000': '1s',
          }
        }
      }
    }
  </script>
</head>

<body class="bg-gray-100 font-serif max-w-[100vw] overflow-x-hidden">
  <!-- Scroll Progress Bar -->
  <div class="fixed top-0 left-0 h-1 w-full bg-gray-200 z-50">
    <div id="progressBar" class="h-full bg-orange-500 transition-all duration-300 ease-out"></div>
  </div>

  <!-- Navbar -->
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

  <!-- Hero Section -->
  <div class="relative w-full pt-16">
    <!-- Hero Image -->
    <div class="w-full overflow-hidden">
      <img src="{{asset('storage/images/citadel.jpg')}}" alt="Hero Image" class="w-full h-[40vh] sm:h-[50vh] md:h-[60vh] lg:h-[70vh] object-cover">
      <!-- Dark Overlay -->
      <div class="absolute inset-0 bg-black/50 mt-16"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white mt-16 px-4">
      <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-2 sm:mb-4 text-center opacity-0 animate-slideInUp shadow-lg">Hawler Medical University</h1>
      <p class="text-xs sm:text-sm md:text-base lg:text-lg text-center max-w-2xl sm:max-w-3xl md:max-w-4xl opacity-0 animate-slideInUp" style="animation-delay: 0.2s;">We provide you with our best scientific experience and professionals for our academics and students to achieve an optimal learning outcome.</p>
    </div>
  </div>

  <!-- University Info Section -->
  <section class="py-8 sm:py-12 md:py-20">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 items-center">
        <div data-aos="fade-right" data-aos-delay="100" class="order-2 md:order-1">
          <h1 class="text-xl sm:text-2xl md:text-3xl pb-2 sm:pb-4 font-semibold bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent"><span class="text-black">HAWLER </span> MEDICAL UNIVERSITY</h1>
          <p class="text-justify text-xs sm:text-sm md:text-base text-gray-500">
            Hawler Medical University is public institution of undergraduate and postgraduate higher education and research in different medical sciences disciplines.
            <br><br>
            Hawler Medical University is located in the city of Erbil (Hawler) in Iraqi Kurdistan Region. Hawler Medical University has been established by the Council of Ministers of the Iraqi Kurdistan Regional Government in July 2005 and endorsed by the Council of Ministers of Iraqi Federal Government in March 2006. The university has been established to include in itself the five colleges that were belonging to Salahaddin University in Erbil (except College of Health Sciences). The colleges are: College of Medicine, College of Dentistry, College of Pharmacy, College of Nursing and College of Health Sciences.
            <br><br>
            The separation has come after a suggestion made by a number of academics from these colleges supported by the presidency of Salahaddin University as well as the Ministry of Health and the Ministry of Higher Education and Scientific Researches.
          </p>
        </div>

        <div data-aos="fade-left" data-aos-delay="300" class="order-1 md:order-2">
          <div class="transform transition-all duration-300 hover:translate-y-[-5px] hover:shadow-xl">
            <img class="rounded-xl shadow-lg w-full" src="{{asset('storage/images/UniPresident.jpg')}}" alt="University President">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest News Section -->
  <section class="bg-gray-50 py-8 sm:py-12 md:py-20">
    <div class="container mx-auto px-4">
      <div class="mb-6 sm:mb-8">
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 bg-gradient-to-r from-gray-800 to-gray-800 bg-clip-text">LATEST <span class="text-orange-500">NEWS</span></h2>
        <p class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2">Stay updated with our university</p>
      </div>
      
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6">
        <!-- News Cards Column -->
        <div class="lg:col-span-2 space-y-4 sm:space-y-6">
          <!-- News Card 1 -->
          <div class="flex flex-col sm:flex-row bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:translate-y-[-5px] hover:shadow-xl" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('storage/images/news1.jpg')}}" alt="News Image" class="w-full sm:w-1/3 h-40 sm:h-48 object-cover">
            <div class="p-3 sm:p-4 w-full sm:w-2/3">
              <div class="flex items-center text-orange-600 font-semibold text-sm sm:text-base md:text-lg">
                <span class="bg-gray-200 p-1 sm:p-2 rounded-full mr-1 sm:mr-2 text-xs sm:text-sm">20</span>
                <span class="text-xs sm:text-sm">NOV</span>
              </div>
              <h3 class="font-bold text-gray-800 text-sm sm:text-base md:text-lg lg:text-xl mt-1 sm:mt-2">
                Coordination between Hawler Medical University and Erbil Directorate of Health
              </h3>
              <p class="text-gray-600 mt-1 sm:mt-2 text-xs sm:text-sm">
                The President of Hawler Medical University met with the Erbil Directorate of Health in order to further coordinate dur...
              </p>
            </div>
          </div>

          <!-- News Card 2 -->
          <div class="flex flex-col sm:flex-row bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:translate-y-[-5px] hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
            <img src="{{asset('storage/images/news2.jpg')}}" alt="News Image" class="w-full sm:w-1/3 h-40 sm:h-48 object-cover">
            <div class="p-3 sm:p-4 w-full sm:w-2/3">
              <div class="flex items-center text-orange-600 font-semibold text-sm sm:text-base md:text-lg">
                <span class="bg-gray-200 p-1 sm:p-2 rounded-full mr-1 sm:mr-2 text-xs sm:text-sm">20</span>
                <span class="text-xs sm:text-sm">NOV</span>
              </div>
              <h3 class="font-bold text-gray-800 text-sm sm:text-base md:text-lg lg:text-xl mt-1 sm:mt-2">
                Participation in the First Sports Olympiad of Universities and Colleges in the Kurdistan Region
              </h3>
              <p class="text-gray-600 mt-1 sm:mt-2 text-xs sm:text-sm">
                Presidency of Hawler Medical University awarded the delegation of the university, which Hawler Medical University awarde...
              </p>
            </div>
          </div>
        </div>

        <!-- Sidebar Column -->
        <div class="bg-white rounded-lg shadow-lg p-3 sm:p-4 transform transition-all duration-300 hover:translate-y-[-5px] hover:shadow-xl" data-aos="fade-up" data-aos-delay="300">
          <h4 class="font-bold text-gray-800 text-sm sm:text-base md:text-lg lg:text-xl mb-3 sm:mb-4">More News</h4>
          <ul class="space-y-2 sm:space-y-4">
            <!-- More News Item 1 -->
            <li class="transform transition-all duration-300 hover:translate-x-1">
              <a href="#" class="text-gray-800 font-medium hover:text-orange-600 transition-colors text-xs sm:text-sm">
                The president of the Union of International Universities presented a membership certificate to the
                president of Hawler M...
              </a>
              <p class="text-gray-500 text-xs mt-1">16 Nov 2024</p>
            </li>
            <!-- More News Item 2 -->
            <li class="transform transition-all duration-300 hover:translate-x-1">
              <a href="#" class="text-gray-800 font-medium hover:text-orange-600 transition-colors text-xs sm:text-sm">
                Academic activities of Hawler Medical University are sustaining…
              </a>
              <p class="text-gray-500 text-xs mt-1">13 Nov 2024</p>
            </li>
            <!-- More News Item 3 -->
            <li class="transform transition-all duration-300 hover:translate-x-1">
              <a href="#" class="text-gray-800 font-medium hover:text-orange-600 transition-colors text-xs sm:text-sm">
                An Evidence-Based Approach To Communication Skills In Medical Education
              </a>
              <p class="text-gray-500 text-xs mt-1">12 Nov 2024</p>
            </li>
          </ul>
          <button class="mt-4 sm:mt-6 w-full bg-orange-600 text-white font-semibold py-1 sm:py-2 rounded hover:bg-orange-700 transition-all text-xs sm:text-sm">
            EVEN MORE
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Researchers Section -->
  <section class="py-8 sm:py-12 md:py-20">
    <div class="container mx-auto px-4">
      <div class="mb-6 sm:mb-8">
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 bg-gradient-to-r from-gray-800 to-gray-800 bg-clip-text">FOR <span class="text-orange-500">RESEARCHERS</span></h2>
        <p class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2">Resources and opportunities for academic research</p>
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        <!-- Card 1 -->
        <div class="border rounded-lg shadow-md p-3 sm:p-4 transform transition-all duration-300 hover:translate-y-[-5px] hover:shadow-xl hover:rotate-1" data-aos="fade-up" data-aos-delay="100">
          <div class="bg-orange-500 text-white rounded-full px-2 sm:px-3 py-1 w-fit text-xs sm:text-sm mb-2 sm:mb-3">Researcher Accounts</div>
          <p class="text-gray-500 text-xs sm:text-sm mb-1 sm:mb-2">Jul, 1 2023</p>
          <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            The Social Networking Sites for Scientists and Researchers to share papers and Collaborations
          </h3>
          <p class="text-gray-700 text-xs sm:text-sm mb-2 sm:mb-3">
            Discover scientific knowledge and stay connected to the world of science..
          </p>
          <a href="#" class="text-orange-500 font-semibold hover:text-orange-700 transition-colors text-xs sm:text-sm">Read the Abstract ➜</a>
        </div>

        <!-- Card 2 -->
        <div class="border rounded-lg shadow-md p-3 sm:p-4 transform transition-all duration-300 hover:translate-y-[-5px] hover:shadow-xl hover:rotate-1" data-aos="fade-up" data-aos-delay="200">
          <div class="bg-orange-500 text-white rounded-full px-2 sm:px-3 py-1 w-fit text-xs sm:text-sm mb-2 sm:mb-3">HMU Publications</div>
          <p class="text-gray-500 text-xs sm:text-sm mb-1 sm:mb-2">Jul, 18 2022</p>
          <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            Journals Publishing by Hawler Medical University
          </h3>
          <p class="text-gray-700 text-xs sm:text-sm mb-2 sm:mb-3">
            EDJ is a peer-review, open-access journal, which is published two times per year. EDJ aims to publish
            peer-reviewed manuscripts of Iraqi, regional, and international interests.
          </p>
          <a href="#" class="text-orange-500 font-semibold hover:text-orange-700 transition-colors text-xs sm:text-sm">Read the Abstract ➜</a>
        </div>

        <!-- Card 3 -->
        <div class="border rounded-lg shadow-md p-3 sm:p-4 transform transition-all duration-300 hover:translate-y-[-5px] hover:shadow-xl hover:rotate-1" data-aos="fade-up" data-aos-delay="300">
          <div class="bg-orange-500 text-white rounded-full px-2 sm:px-3 py-1 w-fit text-xs sm:text-sm mb-2 sm:mb-3">Software</div>
          <p class="text-gray-500 text-xs sm:text-sm mb-1 sm:mb-2">Aug, 17 2024</p>
          <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            Softwares that utilizing in Writing Research...
          </h3>
          <p class="text-gray-700 text-xs sm:text-sm mb-2 sm:mb-3">
            Till now, the Ministry of Higher Education and Scientific Research in Kurdistan Region is not connected
            to the network because there isn't…
          </p><br>
          <a href="#" class="text-orange-500 font-semibold hover:text-orange-700 transition-colors text-xs sm:text-sm">Read the Abstract ➜</a>
        </div>

        <!-- Card 4 -->
        <div class="border rounded-lg shadow-md p-3 sm:p-4 transform transition-all duration-300 hover:translate-y-[-5px] hover:shadow-xl hover:rotate-1" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-orange-500 text-white rounded-full px-2 sm:px-3 py-1 w-fit text-xs sm:text-sm mb-2 sm:mb-3">NUR Approved</div>
          <p class="text-gray-500 text-xs sm:text-sm mb-1 sm:mb-2">Jul, 16 2021</p>
          <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            Important Journal and Publisher Links
          </h3>
          <p class="text-gray-700 text-xs sm:text-sm mb-2 sm:mb-3">
            Local Kurdistan Journals Approved by the Ministry of Higher Education and Scientific Research-KRG
          </p><br><br>
          <a href="#" class="text-orange-500 font-semibold hover:text-orange-700 transition-colors text-xs sm:text-sm">Read the Abstract ➜</a>
        </div>
      </div>
      
      <div class="text-center mt-6 sm:mt-8">
        <button class="bg-orange-500 text-white py-1 sm:py-2 px-4 sm:px-6 rounded-lg hover:bg-orange-600 transition-colors text-xs sm:text-sm">
          More Research
        </button>
      </div>
    </div>
  </section>

  <!-- Media Section -->
  <section class="bg-white py-8 sm:py-12 md:py-20">
    <div class="container mx-auto px-4">
      <!-- Section Title -->
      <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-center bg-gradient-to-r from-orange-600 to-orange-800 bg-clip-text text-transparent mb-6 sm:mb-8">
        MEDIA
      </h2>
      
      <!-- Galleries -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
        <!-- Video Gallery -->
        <div class="text-center" data-aos="fade-right">
          <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-semibold text-gray-800 underline underline-offset-4 mb-4 sm:mb-6">
            VIDEO GALLERY
          </h3>
          <div class="aspect-w-16 aspect-h-9 mb-4 sm:mb-6">
            <div class="w-full h-48 sm:h-56 md:h-64 bg-gray-200 rounded-lg flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 sm:h-16 w-12 sm:w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </div>
          <button class="bg-orange-600 text-white px-4 sm:px-6 py-1 sm:py-2 rounded-md hover:bg-orange-800 transition-colors text-xs sm:text-sm">
            MORE VIDEOS
          </button>
        </div>
        
        <!-- Image Gallery -->
        <div data-aos="fade-left">
          <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-semibold text-center text-gray-800 underline underline-offset-4 mb-4 sm:mb-6">
            IMAGE GALLERY
          </h3>
          <!-- Image Grid -->
          <div class="grid grid-cols-2 gap-2 sm:gap-4 mb-4 sm:mb-6">
            <img src="{{asset('storage/images/news1.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md transform transition-all duration-300 hover:scale-105 h-24 sm:h-32 md:h-40 w-full object-cover">
            <img src="{{asset('storage/images/news2.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md transform transition-all duration-300 hover:scale-105 h-24 sm:h-32 md:h-40 w-full object-cover">
            <img src="{{asset('storage/images/news3.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md transform transition-all duration-300 hover:scale-105 h-24 sm:h-32 md:h-40 w-full object-cover">
            <img src="{{asset('storage/images/news4.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md transform transition-all duration-300 hover:scale-105 h-24 sm:h-32 md:h-40 w-full object-cover">
          </div>
          <div class="text-center">
            <button class="bg-orange-600 text-white px-4 sm:px-6 py-1 sm:py-2 rounded-md hover:bg-orange-800 transition-colors text-xs sm:text-sm">
              MORE IMAGES
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-8 sm:py-10">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 px-4">
      <!-- Contact HMU Section -->
      <div>
        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-white mb-2 sm:mb-3 bg-gradient-to-r from-orange-400 to-orange-600 bg-clip-text text-transparent">Contact HMU</h3>
        <ul class="space-y-1 sm:space-y-2">
          <li class="flex items-center transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">
            <span class="mr-1 sm:mr-2">✉️</span>
            <a href="mailto:info@hmu.edu.krd" class="hover:text-orange-500 transition-colors">info@hmu.edu.krd</a>
          </li>
          <li class="flex items-center transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">
            <span class="mr-1 sm:mr-2">🌐</span>
            <a href="http://www.hmu.edu.krd" class="hover:text-orange-500 transition-colors">www.hmu.edu.krd</a>
          </li>
          <li class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">Tel: +964 66 227 3384</li>
          <li class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">Fax: +964 66 227 3382</li>
          <li class="flex items-start text-xs sm:text-sm">
            <span class="mr-1 sm:mr-2">📍</span>
            <div>
              Iraq, Kurdistan Region,<br />
              Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
              P.O. Box 178
            </div>
          </li>
        </ul>
      </div>

      <!-- Opening Hours Section -->
      <div>
        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-white mb-2 sm:mb-3 bg-gradient-to-r from-orange-400 to-orange-600 bg-clip-text text-transparent">Opening Hours</h3>
        <p class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
        <p class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">Friday and Saturday: <span class="bg-orange-500 text-white rounded px-1 sm:px-2 py-0.5 sm:py-1 text-xs">Closed</span></p>
      </div>

      <!-- Web Traffic Section -->
      <div>
        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-white mb-2 sm:mb-3 bg-gradient-to-r from-orange-400 to-orange-600 bg-clip-text text-transparent">Web Traffic</h3>
        <ul class="space-y-1 sm:space-y-2">
          <li class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">👤 Today: <span class="text-gray-100">2265</span></li>
          <li class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">👤 Yesterday: <span class="text-gray-100">3898</span></li>
          <li class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">👤 This Week: <span class="text-gray-100">12748</span></li>
          <li class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">👤 This Month: <span class="text-gray-100">90849</span></li>
          <li class="transform transition-all duration-300 hover:translate-x-1 text-xs sm:text-sm">👤 Total: <span class="text-gray-100">4394545</span></li>
        </ul>
        <hr class="my-2 sm:my-4 border-gray-700" />
        <p class="text-center text-gray-100 text-lg sm:text-xl font-bold">16</p>
        <p class="text-center text-xs sm:text-sm text-gray-500">Online</p>
        <p class="text-center text-xs sm:text-sm mt-1 sm:mt-2">21 November 2024</p>
      </div>

      <!-- QR Code Section -->
      <div>
        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-white mb-2 sm:mb-3 bg-gradient-to-r from-orange-400 to-orange-600 bg-clip-text text-transparent">QR Code</h3>
        <div class="relative w-24 sm:w-28 md:w-32 h-24 sm:h-28 md:h-32 mx-auto mb-1 sm:mb-2">
          <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto transform transition-all duration-300 hover:scale-110" />
        </div>
        <p class="text-center text-gray-500 text-xs sm:text-sm">www.nik-o-mat.de</p>
      </div>
    </div>
    <div class="text-center text-gray-500 text-xs sm:text-sm mt-6 sm:mt-8">
      <p>Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="back-to-top" class="fixed bottom-4 sm:bottom-6 right-4 sm:right-6 bg-orange-500 text-white rounded-full p-2 sm:p-3 shadow-lg hidden hover:bg-orange-600 transition duration-300 z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
  </button>

  <!-- JavaScript -->
  <script>
    // Initialize AOS
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init({
        duration: 1000,
        once: true,
        disable: 'mobile'
      });
      
      // Mobile Menu Toggle
      const menuBtn = document.getElementById('menu-btn');
      const mobileMenu = document.getElementById('mobile-menu');
      
      if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
          mobileMenu.classList.toggle('hidden');
        });
      }
      
      // Mobile Accordion Menu
      const accordionButtons = document.querySelectorAll('.mobile-accordion button');
      
      accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
          const content = this.nextElementSibling;
          const arrow = this.querySelector('svg');
          
          content.classList.toggle('hidden');
          arrow.classList.toggle('rotate-180');
          
          // Close other accordions
          accordionButtons.forEach(otherButton => {
            if (otherButton !== button) {
              const otherContent = otherButton.nextElementSibling;
              const otherArrow = otherButton.querySelector('svg');
              
              if (!otherContent.classList.contains('hidden')) {
                otherContent.classList.add('hidden');
                otherArrow.classList.remove('rotate-180');
              }
            }
          });
        });
      });
      
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
    });
  </script>
</body>

</html>