<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Council</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .float-animate {
            animation: float 3s ease-in-out infinite;
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.03);
        }
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .gradient-text {
            background: linear-gradient(90deg, #f97316, #f59e0b);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body class="bg-white text-gray-900" style="font-family: Cambria, Georgia, serif; max-width: 100%; overflow-x: hidden;">

<!-- Navbar -->
<nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-10 animate-fade-in p-6" data-aos="fade-down" data-aos-duration="800">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center hover-scale">
                    <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo" class="h-24 w-24 rounded-md float-animate">
                    <span class="ml-2 text-lg font-semibold text-orange-600">Hawler Medical University</span>
                </div>

                <!-- Menu Items (Hidden on mobile) -->
                <div class="hidden md:flex space-x-1">
                    <!-- Home Dropdown -->
                    <div class="relative group">
                        <a href="/" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            HOME
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/aboutus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">About us</a>
                                <a href="{{ url('/contactus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Contact us</a>
                            </div>
                        </div>
                    </div>

                    <!-- Other Links -->
                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            DIVISIONS
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/universitycounsel') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">University Counsil</a>
                                <a href="{{ url('/presidentoffice') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">President's Office</a>
                                <a href="{{ url('/vission') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Vision and Mission</a>
                                <a href="{{ url('/logo') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">University Logo</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            COLLEGE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ route('colleges.medicine') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Medicine</a>
                                
                                <a href="{{ route('colleges.pharmacy') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Pharmacy</a>
                                <a href="{{ route('colleges.nursing') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Nursing</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            FEATURE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/library') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Library</a>
              
                                <a href="{{ url('/relevantwebs') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Relevant Websites</a>
                                <a href="{{ url('/acadimicrelations') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Academic Relations</a>
                                <a href="{{ url('/acadimicprofile') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Academicians Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            SERVICE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/it') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">IT Services</a>
                                <a href="{{ url('/documents') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Documents</a>
                                <a href="{{ url('/e-management') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">E-Management</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/events') }}" class="px-3 py-2 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">EVENTS</a>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-all duration-300">
                            PORTAL
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="/student_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Student Portal</a>
                                <a href="/teacher_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Teacher Portal</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hamburger Button (Mobile) -->
                <div class="md:hidden flex items-center">
                    <button id="menu-btn" class="text-orange-500 focus:outline-none transition-transform duration-300 hover:scale-110">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg px-4 py-4 space-y-2 transition-all duration-300 ease-in-out">
                <a href="/" class="block text-gray-700 py-2 hover:bg-orange-50 hover:text-orange-600 rounded px-2 transition-colors duration-200">Home</a>
                <a href="{{ url('/aboutus') }}" class="block text-gray-700 py-2 hover:bg-orange-50 hover:text-orange-600 rounded px-2 transition-colors duration-200">About Us</a>
                <a href="{{ url('/contactus') }}" class="block text-gray-700 py-2 hover:bg-orange-50 hover:text-orange-600 rounded px-2 transition-colors duration-200">Contact Us</a>
                <a href="{{ url('/events') }}" class="block text-gray-700 py-2 hover:bg-orange-50 hover:text-orange-600 rounded px-2 transition-colors duration-200">Events</a>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Divisions
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50 transition-all duration-300 ease-in-out">
                        <a href="{{ url('/universitycounsel') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">University Council</a>
                        <a href="{{ url('/presidentoffice') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">President's Office</a>
                        <a href="{{ url('/vission') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Vision and Mission</a>
                        <a href="{{ url('/logo') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">University Logo</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        College
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50 transition-all duration-300 ease-in-out">
                        <a href="{{ route('colleges.medicine') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Medicine</a>
                   
                        <a href="{{ route('colleges.pharmacy') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Pharmacy</a>
                        <a href="{{ route('colleges.nursing') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Nursing</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Feature
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50 transition-all duration-300 ease-in-out">
                        <a href="{{ url('/library') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Library</a>
                      
                        <a href="{{ url('/relevantwebs') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Relevant Websites</a>
                        <a href="{{ url('/acadimicrelations') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Academic Relations</a>
                        <a href="{{ url('/acadimicprofile') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Academicians Profile</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Service
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50 transition-all duration-300 ease-in-out">
                        <a href="{{ url('/it') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">IT Services</a>
                        <a href="{{ url('/documents') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Documents</a>
                        <a href="{{ url('/e-management') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">E-Management</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Portal
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50 transition-all duration-300 ease-in-out">
                        <a href="/student_login" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Student Portal</a>
                        <a href="/teacher_login" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Teacher Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="py-52 container mx-auto">
   <!-- Title -->
 <!-- Header Section -->
<div class="mb-6" data-aos="fade-up" data-aos-duration="800">
  <!-- Title -->
  <h1 class="text-5xl font-bold text-gray-900 mb-4 transform transition-all duration-500 hover:scale-105 hover:text-orange-600 cursor-default">Academic Relations</h1>

  <!-- Divider -->
  <hr class="border-gray-200 mb-4 transition-all duration-1000 w-0 hover:w-full" />

  <!-- Sub-header row -->
  <div class="flex items-start space-x-4">
    <!-- Orange pin icon -->
    <div class="bg-white text-white p-3 rounded shadow hover:rotate-12 transition-transform duration-300">
      📌
    </div>

    <!-- Info & subtitle -->
    <div>
      <!-- Info row -->
      <div class="flex flex-wrap items-center text-sm text-gray-500 space-x-4 mb-1">
        <span class="flex items-center hover:text-orange-600 transition-colors duration-300"><span class="mr-1">📁</span>BLOG</span>
        <span class="flex items-center hover:text-orange-600 transition-colors duration-300"><span class="mr-1">📂</span>HMU</span>
        <span class="flex items-center hover:text-orange-600 transition-colors duration-300"><span class="mr-1">📅</span>25 MARCH 2021</span>
      
      </div>
      <!-- Subtitle -->
      <h2 class="text-xl font-semibold text-gray-800 hover:text-orange-600 transition-colors duration-300">Relevant Websites</h2>
    </div>
  </div>
</div>

    <!-- Table -->
    <table class="w-full border text-sm mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
      <thead class="bg-gray-100">
        <tr>
          <th class="border px-4 py-2 text-left w-16 hover:bg-orange-50 transition-colors duration-300">SN</th>
          <th class="border px-4 py-2 text-left hover:bg-orange-50 transition-colors duration-300">Country</th>
          <th class="border px-4 py-2 text-left hover:bg-orange-50 transition-colors duration-300">University</th>
          <th class="border px-4 py-2 text-left hover:bg-orange-50 transition-colors duration-300">Link</th>
        </tr>
      </thead>
      <tbody id="table-body" class="bg-white">
        <!-- Dynamic content inserted here -->
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="text-center space-x-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
      <button onclick="changePage(-1)" id="prevBtn" class="px-4 py-2 bg-gray-100 hover:bg-orange-100 hover:text-orange-600 rounded shadow disabled:opacity-50 transition-all duration-300 transform hover:-translate-x-1">Prev</button>
      <button onclick="changePage(1)" id="nextBtn" class="px-4 py-2 bg-gray-100 hover:bg-orange-100 hover:text-orange-600 rounded shadow disabled:opacity-50 transition-all duration-300 transform hover:translate-x-1">Next</button>
    </div>
  </div>

  <script>
    const data = [
      ["Kurdistan Region-Iraq", "Tishik International University"],
      ["Iran", "Kermanshah University of Medical Sciences"],
      ["Malaysia", "Universiti Sains of Malaysia"],
      ["Germany", "Department of Pharmaceutical Biology, Gothenburg University (JGU) Mainz"],
      ["Poland", "Poznan University of Medical Science"],
      ["Cyprus", "Cyprus Health and Social Science University"],
      ["Turkey", "Firat University"],
      ["Van-Turkey", "YUZUNCU YIL UNIVERSITY"],
      ["Kurdistan Region-Iraq", "Awamedica Drug Manufacturer"],
      ["Russia", "Federal State Education Budget Institution of Higher Education"],
      ["USA", "Latter-day Saint Charities (LDS Charities)"],
      ["Iran", "Tehran University of Medical Sciences (TUMS)"],
      ["UK", "The Global Child Dental Fund"],
      ["UK", "The London School of Economics and Political Science"],
      ["UK", "University of Dundee"],
      ["UK", "Cardiff University"],
      ["UK", "London, NGOs in Humanitarian Settings"]
    ];

    const rowsPerPage = 10;
    let currentPage = 0;

    function renderTable() {
      const tbody = document.getElementById("table-body");
      tbody.innerHTML = "";
      const start = currentPage * rowsPerPage;
      const end = start + rowsPerPage;
      const pageItems = data.slice(start, end);

      pageItems.forEach((item, index) => {
        const row = document.createElement("tr");
        row.className = "hover:bg-orange-50 transition-colors duration-200";
        row.innerHTML = `
          <td class="border px-4 py-2 hover:text-orange-600 transition-colors duration-200">${start + index + 1}</td>
          <td class="border px-4 py-2 hover:text-orange-600 transition-colors duration-200">${item[0]}</td>
          <td class="border px-4 py-2 hover:text-orange-600 transition-colors duration-200">${item[1]}</td>
          <td class="border px-4 py-2 text-blue-600 underline cursor-pointer hover:text-orange-600 transition-colors duration-200">PDF</td>
        `;
        tbody.appendChild(row);
      });

      document.getElementById("prevBtn").disabled = currentPage === 0;
      document.getElementById("nextBtn").disabled = end >= data.length;
    }

    function changePage(direction) {
      currentPage += direction;
      renderTable();
    }

    renderTable();
  </script>

<section class="w-full" data-aos="fade-up" data-aos-duration="800">
  <footer class="bg-gray-900 text-gray-300 py-10 px-4 md:px-6 lg:px-12">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Contact HMU Section -->
      <div data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-lg font-semibold text-white mb-4 hover:text-orange-500 transition-colors duration-300">Contact HMU</h3>
        <ul class="space-y-2">
          <li class="flex items-center hover:text-orange-500 transition-colors duration-300">
            <span class="mr-2">✉️</span>
            <a href="mailto:info@hmu.edu.krd" class="hover:text-orange-500">info@hmu.edu.krd</a>
          </li>
          <li class="flex items-center hover:text-orange-500 transition-colors duration-300">
            <span class="mr-2">🌐</span>
            <a href="http://www.hmu.edu.krd" class="hover:text-orange-500">www.hmu.edu.krd</a>
          </li>
          <li class="hover:text-orange-500 transition-colors duration-300">Tel: +964 66 227 3384</li>
          <li class="hover:text-orange-500 transition-colors duration-300">Fax: +964 66 227 3382</li>
          <li class="flex items-start hover:text-orange-500 transition-colors duration-300">
            <span class="mr-2">📍</span>
            Iraq, Kurdistan Region,<br />
            Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
            P.O. Box 178
          </li>
        </ul>
      </div>

      <!-- Opening Hours Section -->
      <div data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-lg font-semibold text-white mb-4 hover:text-orange-500 transition-colors duration-300">Opening Hours</h3>
        <p class="hover:text-orange-500 transition-colors duration-300">Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
        <p class="hover:text-orange-500 transition-colors duration-300">Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1 hover:bg-orange-600 transition-colors duration-300">Closed</span></p>
      </div>

      <!-- Web Traffic Section -->
      <div data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-lg font-semibold text-white mb-4 hover:text-orange-500 transition-colors duration-300">Web Traffic</h3>
        <ul class="space-y-1">
          <li class="hover:text-orange-500 transition-colors duration-300">👤 Today: <span class="text-gray-100">2265</span></li>
          <li class="hover:text-orange-500 transition-colors duration-300">👤 Yesterday: <span class="text-gray-100">3898</span></li>
          <li class="hover:text-orange-500 transition-colors duration-300">👤 This Week: <span class="text-gray-100">12748</span></li>
          <li class="hover:text-orange-500 transition-colors duration-300">👤 This Month: <span class="text-gray-100">90849</span></li>
          <li class="hover:text-orange-500 transition-colors duration-300">👤 Total: <span class="text-gray-100">4394545</span></li>
        </ul>
        <hr class="my-4 border-gray-700 transition-all duration-1000 hover:w-full" />
        <p class="text-center text-gray-100 text-xl font-bold hover:text-orange-500 transition-colors duration-300">16</p>
        <p class="text-center text-sm text-gray-500 hover:text-orange-500 transition-colors duration-300">Online</p>
        <p class="text-center text-sm mt-2 hover:text-orange-500 transition-colors duration-300">21 November 2024</p>
      </div>

      <!-- QR Code Section -->
      <div data-aos="fade-up" data-aos-delay="400">
        <h3 class="text-lg font-semibold text-white mb-4 hover:text-orange-500 transition-colors duration-300">QR Code</h3>
        <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto mb-2 hover:scale-105 transition-transform duration-500" />
        <p class="text-center text-gray-500 text-sm hover:text-orange-500 transition-colors duration-300">www.nik-o-mat.de</p>
      </div>
    </div>
    <div class="text-center text-gray-500 text-sm mt-8 hover:text-orange-500 transition-colors duration-300" data-aos="fade-up" data-aos-delay="500">
      <p>Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
    </div>
  </footer>
</section>

<script>
    // Initialize AOS animations
    AOS.init({
        once: true, // Whether animation should happen only once - while scrolling down
        easing: 'ease-in-out-quad', // Easing function
        duration: 800, // Duration of animation
        offset: 100 // Offset (in px) from the original trigger point
    });

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Mobile accordion functionality
    document.querySelectorAll('.mobile-accordion button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');
            
            // Toggle content visibility
            content.classList.toggle('hidden');
            
            // Rotate icon
            if (content.classList.contains('hidden')) {
                icon.classList.remove('rotate-180');
            } else {
                icon.classList.add('rotate-180');
            }
        });
    });

    // Add hover effect to table rows
    document.addEventListener('DOMContentLoaded', function() {
        const tableRows = document.querySelectorAll('#table-body tr');
        tableRows.forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.classList.add('scale-[1.01]', 'shadow-md');
            });
            row.addEventListener('mouseleave', () => {
                row.classList.remove('scale-[1.01]', 'shadow-md');
            });
        });
    });
</script>

</body>
</html>