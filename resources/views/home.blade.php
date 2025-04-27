<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Home- HMU</title>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
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
    
    .animate-bounce-slow {
      animation: bounce 4s ease-in-out infinite;
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

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif">
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
          <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo">
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
            <a href="#" class="nav-item text-gray-600 hover:text-orange-600">EVENTS</a>
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
        <div class="md:hidden">
          <button id="nav-toggle" class="text-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu (Initially Hidden) -->
      <div id="nav-content" class="hidden md:hidden animate-slideInUp">
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">HOME</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">DIVISIONS</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">COLLEGE</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">FEATURE</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">SERVICE</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">EVENTS</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">PORTAL</a>
      </div>
    </div>
  </nav>

  <!-- Image Section -->
  <div class="w-full overflow-hidden pt-16 animate-fadeIn">
    <img src="{{asset('storage/images/citadel.jpg')}}" alt="Below Navbar Image"
      class="w-full h-auto object-cover rounded-md">
  </div>
  
  <!-- Overlay Text -->
  <div class="p-6 absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-40 mt-16">
    <h1 class="text-5xl md:text-8xl font-bold mb-4 animate-slideInUp text-shadow">Hawler Medical University</h1>
    <p class="text-xl md:text-2xl text-center max-w-4xl animate-slideInUp delay-200">We provide you with our best scientific experience and professionals for our
      academics and students to achieve an optimal learning outcome.</p>
  </div>

  <!-- University Info Section -->
  <section data-aos="fade-up" class="mt-10">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center justify-between px-4 md:px-20 p-4 pb-20 gap-6">
      <div data-aos="fade-right" data-aos-delay="100">
        <h1 class="text-orange-600 text-3xl pb-6 font-semibold gradient-text"><span class="text-black">HAWLER </span> MEDICAL UNIVERSITY</h1>
        <p class="text-justify text-gray-500">Hawler Medical University is public institution of undergraduate and
          postgraduate higher education and research in different medical sciences disciplines. <br><br>

          Hawler Medical University is located in the city of Erbil (Hawler) in Iraqi Kurdistan Region. Hawler Medical
          University has been established by the Council of Ministers of the Iraqi Kurdistan Regional Government in July
          2005 and endorsed by the Council of Ministers of Iraqi Federal Government in March 2006. The university has
          been established to include in itself the five colleges that were belonging to Salahaddin University in Erbil
          (except College of Health Sciences). The colleges are: College of Medicine, College of Dentistry, College of
          Pharmacy, College of Nursing and College of Health Sciences. <br><br>

          The separation has come after a suggestion made by a number of academics from these colleges supported by the
          presidency of Salahaddin University as well as the Ministry of Health and the Ministry of Higher Education and
          Scientific Researches.</p>
      </div>

      <div data-aos="fade-left" data-aos-delay="300">
        <div class="hover-lift animate-float">
          <img class="rounded-xl shadow-lg hover-glow" src="{{asset('storage/images/UniPresident.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Latest News Section -->
  <div class="bg-gray-50 py-20 reveal">
    <div class="px-4 md:px-32">
      <h2 class="text-3xl font-bold text-gray-800 gradient-text">LATEST <span class="text-orange-500">NEWS</span></h2>
      <p class="text-gray-600 mt-2 mb-10">News</p>
    </div>
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- News Cards Column -->
      <div class="lg:col-span-2 space-y-6">
        <!-- News Card 1 -->
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden hover-lift" data-aos="fade-up" data-aos-delay="100">
          <img src="{{asset('storage/images/news1.jpg')}}" alt="News Image" class="w-1/3 object-cover">
          <div class="p-4 w-2/3">
            <div class="flex items-center text-orange-600 font-semibold text-lg">
              <span class="bg-gray-200 p-2 rounded-full mr-2">20</span>
              <span>NOV</span>
            </div>
            <h3 class="font-bold text-gray-800 text-xl mt-2">
              Coordination between Hawler Medical University and Erbil Directorate of Health
            </h3>
            <p class="text-gray-600 mt-2">
              The President of Hawler Medical University met with the Erbil Directorate of Health in order to further
              coordinate dur...
            </p>
          </div>
        </div>

        <!-- News Card 2 -->
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden hover-lift" data-aos="fade-up" data-aos-delay="200">
          <img src="{{asset('storage/images/news2.jpg')}}" alt="News Image" class="w-1/3 object-cover">
          <div class="p-4 w-2/3">
            <div class="flex items-center text-orange-600 font-semibold text-lg">
              <span class="bg-gray-200 p-2 rounded-full mr-2">20</span>
              <span>NOV</span>
            </div>
            <h3 class="font-bold text-gray-800 text-xl mt-2">
              Participation in the First Sports Olympiad of Universities and Colleges in the Kurdistan Region
            </h3>
            <p class="text-gray-600 mt-2">
              Presidency of Hawler Medical University awarded the delegation of the university, which Hawler Medical
              University awarde...
            </p>
          </div>
        </div>
      </div>

      <!-- Sidebar Column -->
      <div class="bg-white rounded-lg shadow-lg p-4 hover-lift" data-aos="fade-up" data-aos-delay="300">
        <h4 class="font-bold text-gray-800 text-xl mb-4">More News</h4>
        <ul class="space-y-4">
          <!-- More News Item 1 -->
          <li class="hover-scale">
            <a href="#" class="text-gray-800 font-medium hover:text-orange-600">
              The president of the Union of International Universities presented a membership certificate to the
              president of Hawler M...
            </a>
            <p class="text-gray-500 text-sm mt-1">16 Nov 2024</p>
          </li>
          <!-- More News Item 2 -->
          <li class="hover-scale">
            <a href="#" class="text-gray-800 font-medium hover:text-orange-600">
              Academic activities of Hawler Medical University are sustaining…
            </a>
            <p class="text-gray-500 text-sm mt-1">13 Nov 2024</p>
          </li>
          <!-- More News Item 3 -->
          <li class="hover-scale">
            <a href="#" class="text-gray-800 font-medium hover:text-orange-600">
              An Evidence-Based Approach To Communication Skills In Medical Education
            </a>
            <p class="text-gray-500 text-sm mt-1">12 Nov 2024</p>
          </li>
        </ul>
        <button class="mt-6 w-full bg-orange-600 text-white font-semibold py-2 rounded hover:bg-orange-700 transition-all animate-pulse">
          EVEN MORE
        </button>
      </div>
    </div>
  </div>

  <!-- Researchers Section -->
  <section class="py-20 reveal">
    <div class="container mx-auto p-6">
      <div class="">
        <h2 class="text-3xl font-bold text-gray-800 gradient-text">FOR <span class="text-orange-500">RESEARCHERS</span></h2>
        <p class="text-gray-600 mt-2 mb-10">RESEARCHERS</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="border rounded-lg shadow-md p-4 hover-lift card-3d" data-aos="fade-up" data-aos-delay="100">
          <div class="bg-orange-500 text-white rounded-full px-3 py-1 w-fit text-sm mb-3">Researcher Accounts</div>
          <p class="text-gray-500 text-sm mb-2">Jul, 1 2023</p>
          <h3 class="font-bold text-lg mb-2">
            The Social Networking Sites for Scientists and Researchers to share papers and Collaborations
          </h3>
          <p class="text-gray-700 text-sm mb-3">
            Discover scientific knowledge and stay connected to the world of science..
          </p>
          <a href="#" class="text-orange-500 font-semibold hover:text-orange-700 transition-colors">Read the Abstract ➜</a>
        </div>

        <!-- Card 2 -->
        <div class="border rounded-lg shadow-md p-4 hover-lift card-3d" data-aos="fade-up" data-aos-delay="200">
          <div class="bg-orange-500 text-white rounded-full px-3 py-1 w-fit text-sm mb-3">HMU Publications</div>
          <p class="text-gray-500 text-sm mb-2">Jul, 18 2022</p>
          <h3 class="font-bold text-lg mb-2">
            Journals Publishing by Hawler Medical University
          </h3>
          <p class="text-gray-700 text-sm mb-3">
            EDJ is a peer-review, open-access journal, which is published two times per year. EDJ aims to publish
            peer-reviewed manuscripts of Iraqi, regional, and international interests.
          </p>
          <a href="#" class="text-orange-500 font-semibold hover:text-orange-700 transition-colors">Read the Abstract ➜</a>
        </div>

        <!-- Card 3 -->
        <div class="border rounded-lg shadow-md p-4 hover-lift card-3d" data-aos="fade-up" data-aos-delay="300">
          <div class="bg-orange-500 text-white rounded-full px-3 py-1 w-fit text-sm mb-3">Software</div>
          <p class="text-gray-500 text-sm mb-2">aug, 17 2024</p>
          <h3 class="font-bold text-lg mb-2">
            Softwares that utilizing in Writing Research...
          </h3>
          <p class="text-gray-700 text-sm mb-3">
            Till now, the Ministry of Higher Education and Scientific Research in Kurdistan Region is not connected
            to the network because there isn't…
          </p><br>
          <a href="#" class="text-orange-500 font-semibold hover:text-orange-700 transition-colors">Read the Abstract ➜</a>
        </div>

        <!-- Card 4 -->
        <div class="border rounded-lg shadow-md p-4 hover-lift card-3d" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-orange-500 text-white rounded-full px-3 py-1 w-fit text-sm mb-3">NUR Approved</div>
          <p class="text-gray-500 text-sm mb-2">Jul, 16 2021</p>
          <h3 class="font-bold text-lg mb-2">
            Important Journal and Publisher Links
          </h3>
          <p class="text-gray-700 text-sm mb-3">
            Local Kurdistan Journals Approved by the Ministry of Higher Education and Scientific Research-KRG
          </p><br><br>
          <a href="#" class="text-orange-500 font-semibold hover:text-orange-700 transition-colors">Read the Abstract ➜</a>
        </div>
      </div>
      <div class="text-center mt-6">
        <button class="bg-orange-500 text-white py-2 px-6 rounded-lg hover:bg-orange-600 transition animate-pulse">
          More Research
        </button>
      </div>
    </div>
  </section>

  <!-- Media Section -->
  <section class="bg-white py-10 reveal">
    <div class="container mx-auto">
      <!-- Section Title -->
      <h2 class="text-4xl font-bold text-center gradient-text mb-8">
        MEDIA
      </h2>
      <!-- Galleries -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Video Gallery -->
        <div class="text-center" data-aos="fade-right">
          <h3 class="text-2xl font-semibold text-gray-800 underline underline-offset-4 mb-6">
            VIDEO GALLERY
          </h3>
          <button class="bg-orange-600 text-white px-6 py-2 rounded-md hover:bg-orange-800 transition-colors animate-pulse">
            MORE VIDEO
          </button>
        </div>
        <!-- Image Gallery -->
        <div data-aos="fade-left">
          <h3 class="text-2xl font-semibold text-center text-gray-800 underline underline-offset-4 mb-6">
            IMAGE GALLERY
          </h3>
          <!-- Image Grid -->
          <div class="grid grid-cols-2 gap-4 mb-4">
            <img src="{{asset('storage/images/news1.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md hover-scale">
            <img src="{{asset('storage/images/news2.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md hover-scale">
            <img src="{{asset('storage/images/news3.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md hover-scale">
            <img src="{{asset('storage/images/news4.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md hover-scale">
          </div>
          <div class="text-center">
            <button class="bg-orange-600 text-white px-6 py-2 rounded-md hover:bg-orange-800 transition-colors animate-pulse">
              MORE IMAGES
            </button>
          </div>
        </div>
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
            <div>
              Iraq, Kurdistan Region,<br />
              Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
              P.O. Box 178
            </div>
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
        <p class="text-center text-gray-100 text-xl font-bold animate-pulse">16</p>
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
  <button id="back-to-top" class="fixed bottom-6 right-6 bg-orange-500 text-white rounded-full p-3 shadow-lg hidden hover:bg-orange-600 transition duration-300 animate-bounce-slow z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
  </button>

  <!-- JavaScript -->
  <script>
    // Initialize AOS
    AOS.init({
      duration: 1000,
      once: true
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
      
      // Reveal animations on scroll
      var reveals = document.querySelectorAll(".reveal");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        }
      }
    };
  </script>
</body>

</html>